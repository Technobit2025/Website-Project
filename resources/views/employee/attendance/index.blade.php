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

        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                let frontCamera = cameras.find(cam => cam.name.toLowerCase().includes('front'));
                scanner.start(frontCamera || cameras[0]).catch(e => {
                    console.error("Gagal memulai kamera:", e);
                    alert("Gagal mengakses kamera, pastikan sudah diizinkan!");
                });
            } else {
                alert("Tidak ada kamera tersedia!");
            }
        }).catch(function(e) {
            console.error("Error mendapatkan kamera:", e);
            alert("Tidak bisa mengakses kamera, cek izin di browser!");
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
    <div class="container mt-5 text-center">
        <h2>Scan QR untuk Presensi</h2>

        <div class="card shadow-lg p-4">
            <video id="preview" class="border rounded w-100"></video>
            <p class="mt-3"><strong>Kode: </strong><span id="scanned-code">-</span></p>
            <form id="attendanceForm" method="POST">
                @csrf
                <input type="hidden" name="code" id="code">
                <input type="hidden" name="latitude" id="latitude">
                <input type="hidden" name="longitude" id="longitude">
                <button class="btn btn-primary mt-3" formaction="{{ route('employee.attendance.checkIn') }}" id="btnCheckIn" disabled>Check-In</button>
                <button class="btn btn-danger mt-2" formaction="{{ route('employee.attendance.checkOut') }}" id="btnCheckOut" disabled>Check-Out</button>
            </form>            
        </div>
    </div>
@endsection
