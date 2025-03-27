@extends('layouts.simple.master')

@section('title', 'Lokasi Perusahaan')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables1.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#companyPlaceTable').DataTable({
                language: {
                    url: '{{ asset('assets/js/datatable/datatable-extension/i18n/indonesian.json') }}'
                }
            });
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Lokasi Perusahaan'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5>Lokasi Perusahaan</h5>
                            <a href="{{ route('superadmin.company.place.create', $company->id) }}" class="btn btn-primary">
                                Tambahkan Lokasi
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar table-striped">
                            <div class="col-12 table-responsive">
                                <table class="display callback-table dataTable" id="companyPlaceTable" style="width: 100%;"
                                    aria-describedby="companyPlaceTable_info">

                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($companyPlaces as $companyPlace)
                                            <tr>
                                                <td>{{ $companyPlace->name ?? '-' }}</td>
                                                <td>{{ $companyPlace->address ?? '-' }}</td>
                                                <td>{{ $companyPlace->latitude ?? '-' }}</td>
                                                <td>{{ $companyPlace->longitude ?? '-' }}</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="{{ route('superadmin.company.place.show', $companyPlace->id) }}"
                                                            class="btn btn-info btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Lihat Lokasi">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('superadmin.company.place.edit', $companyPlace->id) }}"
                                                            class="btn btn-warning btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Ubah Lokasi">
                                                            <i class="fa-solid fa-edit"></i>
                                                        </a>
                                                        @include('layouts.components.delete', [
                                                            'route' => route('superadmin.company.place.destroy', [
                                                                $companyPlace->id,
                                                            ]),
                                                            'title' => 'Hapus Lokasi dari Perusahaan',
                                                            'message' =>
                                                                'Apakah kamu yakin ingin menghapus lokasi dari perusahaan ini?',
                                                        ])
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <a href="{{ route('superadmin.company.index') }}" class="btn btn-secondary">
                            <i class="fa-solid fa-arrow-left"></i>
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection
