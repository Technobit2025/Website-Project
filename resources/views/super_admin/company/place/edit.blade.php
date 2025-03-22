@extends('layouts.simple.master')

@section('title', 'Ubah Lokasi Perusahaan')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/leaflet.css') }}" />
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/map-js/leaflet.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let defaultPosition = [{{ $companyPlace->latitude ?? -6.200000 }}, {{ $companyPlace->longitude ?? 106.816666 }}]; // Default to Jakarta if no coordinates
            let map = L.map('map').setView(defaultPosition, 15);
            let marker = L.marker(defaultPosition, {
                draggable: true
            }).addTo(map);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            function updateMarker(position) {
                marker.setLatLng(position);
                map.setView(position, 15);
                document.getElementById('latitude').value = position[0];
                document.getElementById('longitude').value = position[1];
                getAddress(position[0], position[1]); // Call function to get address
            }

            function getAddress(lat, lon) {
                fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('address').value = data.display_name || "Alamat tidak ditemukan";
                    })
                    .catch(() => {
                        document.getElementById('address').value = "Gagal mengambil alamat";
                    });
            }

            // if (navigator.geolocation) {
            //     navigator.geolocation.getCurrentPosition(
            //         function(position) {
            //             updateMarker([position.coords.latitude, position.coords.longitude]);
            //         },
            //         function() {
            //             console.warn("User denied geolocation, fallback to default position.");
            //             getAddress(defaultPosition[0], defaultPosition[1]); // Use default address
            //         }
            //     );
            // } else {
            //     getAddress(defaultPosition[0], defaultPosition[1]); // If browser doesn't support GPS
            // }

            marker.on('dragend', function() {
                let position = marker.getLatLng();
                document.getElementById('latitude').value = position.lat;
                document.getElementById('longitude').value = position.lng;
                getAddress(position.lat, position.lng); // Update address as well
            });
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Ubah Lokasi Perusahaan'])
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('superadmin.company.place.update', $companyPlace->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ubah Lokasi Perusahaan</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lokasi</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name', $companyPlace->name) }}" required>
                                @errorFeedback('name')
                            </div>
                            <div class="mb-3">
                                <label for="map" class="form-label">Pilih Lokasi</label>
                                <div id="map" style="height: 400px;"></div>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                    id="address" name="address" value="{{ old('address', $companyPlace->address) }}"
                                    required>
                                @errorFeedback('address')
                            </div>
                            <div class="mb-3">
                                <label for="latitude" class="form-label">Latitude</label>
                                <input type="text" class="form-control @error('latitude') is-invalid @enderror"
                                    id="latitude" name="latitude" value="{{ old('latitude', $companyPlace->latitude) }}"
                                    required>
                                @errorFeedback('latitude')
                            </div>
                            <div class="mb-3">
                                <label for="longitude" class="form-label">Longitude</label>
                                <input type="text" class="form-control @error('longitude') is-invalid @enderror"
                                    id="longitude" name="longitude" value="{{ old('longitude', $companyPlace->longitude) }}"
                                    required>
                                @errorFeedback('longitude')
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $companyPlace->description) }}</textarea>
                                @errorFeedback('description')
                            </div>
                            <input type="hidden" name="company_id" value="{{ $companyPlace->company_id }}">
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-warning"><i class="fa fa-save"></i> Simpan</button>
                                <a href="{{ url()->previous() }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                                    Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
