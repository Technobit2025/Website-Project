@extends('layouts.simple.master')

@section('title', 'Employee Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/instascan/instascan.min.js') }}"></script>
    <script>
        navigator.mediaDevices.getUserMedia({
                video: true
            })
            .then(function(stream) {
                console.log("Kamera diizinkan");
            })
            .catch(function(error) {
                console.error("Akses kamera ditolak: ", error);
                alert("Izinkan akses kamera di browser!");
            });

        navigator.geolocation.getCurrentPosition(
            function(position) {
                console.log("Lokasi diizinkan", position);
            },
            function(error) {
                console.error("Akses lokasi ditolak: ", error);
                alert("Izinkan akses lokasi di browser!");
            }
        );
    </script>
    <script>
        // async function generateLocationHash(latitude, longitude) {
        //     const secret = {{ env('APP_LOCATION_SECRET_KEY') }}; // HARUS sama dengan backend
        //     const encoder = new TextEncoder();
        //     const key = await crypto.subtle.importKey(
        //         "raw",
        //         encoder.encode(secret), {
        //             name: "HMAC",
        //             hash: "SHA-256"
        //         },
        //         false,
        //         ["sign"]
        //     );
        //     const data = encoder.encode(`${latitude},${longitude}`);
        //     const signature = await crypto.subtle.sign("HMAC", key, data);
        //     return Array.from(new Uint8Array(signature))
        //         .map(b => b.toString(16).padStart(2, "0"))
        //         .join("");
        // }
        // generateLocationHash(37.7749, -122.4194).then(console.log);
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview'),
            mirror: false
        });
        let scannedCode = null;
        let latitude = null;
        let longitude = null;

        // Dapatkan lokasi user
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    latitude = position.coords.latitude;
                    longitude = position.coords.longitude;

                    document.getElementById('latitude').value = latitude;
                    document.getElementById('longitude').value = longitude;
                }, function() {
                    alert("Gagal mendapatkan lokasi, pastikan GPS aktif!");
                });
            } else {
                alert("Browser tidak mendukung Geolocation!");
            }
        }

        const app = {
            scanner: null,
            activeCameraId: null,
            cameras: [],
            scans: [],
            init() {
                this.scanner = new Instascan.Scanner({
                    video: document.getElementById('preview'),
                    scanPeriod: 5
                });
                this.scanner.addListener('scan', (content, image) => {
                    this.scans.unshift({
                        date: Date.now(),
                        content: content
                    });
                    document.getElementById('code').value = content; // Add scanned text to #scanned-code
                    document.getElementById('status').innerHTML =
                        '<div class="badge badge-success px-3 py-1"> <h2 class="text-white"> Siap </h2></div>';
                    document.getElementById('btnCheckIn').disabled = false;
                    document.getElementById('btnCheckOut').disabled = false;

                });
                Instascan.Camera.getCameras().then((cameras) => {
                    this.cameras = cameras;
                    if (cameras.length > 0) {
                        this.activeCameraId = cameras[0].id;
                        this.scanner.start(cameras[0]);
                        this.populateCameraList(cameras);
                    } else {
                        console.error('No cameras found.');
                    }
                }).catch((e) => {
                    console.error(e);
                });
            },
            formatName(name) {
                return name || '(unknown)';
            },
            selectCamera(camera) {
                this.activeCameraId = camera.id;
                this.scanner.start(camera);
            },
            populateCameraList(cameras) {
                const cameraSelect = document.getElementById('cameraSelect');
                cameras.forEach(camera => {
                    const option = document.createElement('option');
                    option.value = camera.id;
                    option.text = this.formatName(camera.name);
                    cameraSelect.appendChild(option);
                });
                cameraSelect.addEventListener('change', function() {
                    const selectedCamera = cameras.find(camera => camera.id === this.value);
                    if (selectedCamera) {
                        app.selectCamera(selectedCamera);
                    }
                });
            }
        };

        document.addEventListener('DOMContentLoaded', function() {
            app.init();
        });

        scanner.addListener('scan', function(content) {
            document.getElementById('scanned-code').innerText = content;
            document.getElementById('code').value = content;
            document.getElementById('btnCheckIn').disabled = false;
            document.getElementById('btnCheckOut').disabled = false;
        });

        getLocation(); // Panggil pas load
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Presensi'])
    </div>
    <div class="container mt-5 text-center">

        <div class="card shadow-lg p-4">
            <div class="card-header">
                <h2>Scan QR untuk Presensi</h2>
            </div>
            <div class="card-body">
                <select id="cameraSelect" class="form-control mb-3"></select>
                <video id="preview" class="border rounded w-100"></video>
                {{-- <p class="mt-3"><strong>Kode: </strong><span id="scanned-code">-</span></p> --}}
                <div id="status">
                    <div class="badge badge-warning px-3 py-1" id="status">
                        <h2 class="text-white"> Belum siap </h2>
                    </div>
                </div>
                <form id="attendanceForm" method="POST">
                    @csrf
                    <input type="hidden" name="code" id="code" value="{{ old('code') }}">
                    <input type="hidden" name="latitude" id="latitude" value="{{ old('latitude') }}">
                    <input type="hidden" name="longitude" id="longitude" value="{{ old('longitude') }}">
                    <button class="btn btn-primary mt-2" formaction="{{ route('employee.attendance.checkIn') }}"
                        id="btnCheckIn" disabled>Check-In</button>
                    <button class="btn btn-danger mt-2" formaction="{{ route('employee.attendance.checkOut') }}"
                        id="btnCheckOut" disabled>Check-Out</button>
                </form>
            </div>
        </div>
    </div>
@endsection
