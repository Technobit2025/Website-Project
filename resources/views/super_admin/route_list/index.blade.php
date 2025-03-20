@extends('layouts.simple.master')
@section('title', 'Route List')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dataTables.bootstrap5.css') }}">
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables1.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.dataTable').DataTable({
                language: {
                    url: '{{ asset('assets/js/datatable/datatable-extension/i18n/indonesian.json') }}'
                }
            });
            const copy = document.querySelectorAll('[data-clipboard-text]');
            copy.forEach(element => {
                var clipboard = new ClipboardJS(element);
                clipboard.on('success', function(e) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Berhasil menyalin!',
                        timer: 1500,
                        showConfirmButton: false,
                        background: $('body').hasClass('dark-only') ? '#2b2c40' : '#fff',
                        color: $('body').hasClass('dark-only') ? '#b2b2c4' : '#000',
                    });
                });
                clipboard.on('error', function(e) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: 'Gagal menyalin!',
                        timer: 1500,
                        showConfirmButton: false,
                        background: $('body').hasClass('dark-only') ? '#2b2c40' : '#fff',
                        color: $('body').hasClass('dark-only') ? '#b2b2c4' : '#000',
                    });
                });
            });
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid py-3">
        <div class="card mb-6">
            <h5 class="card-header">Website Route List</h5>
            <div class="card-body">
                <div class="table-responsive custom-scrollbar table-striped">
                    <div class="col-12 table-responsive">
                        <table class="display callback-table dataTable" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Method</th>
                                    <th>URI</th>
                                    <th>Name</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($webRoutes as $webRoute)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <span
                                                class="badge badge-{{ $webRoute->methods[0] === 'GET' ? 'primary' : ($webRoute->methods[0] === 'POST' ? 'success' : ($webRoute->methods[0] === 'PUT' ? 'warning' : ($webRoute->methods[0] === 'DELETE' ? 'danger' : 'secondary'))) }}">
                                                {{ $webRoute->methods[0] }}
                                            </span>
                                        </td>
                                        </td>
                                        <td>{{ $webRoute->uri }}</td>
                                        <td>{{ $webRoute->getName() }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="javascript:void(0) " class="btn btn-info btn-sm px-3"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Copy URI"
                                                    data-clipboard-text="{{ $webRoute->uri }}">
                                                    <i class="fa-solid fa-clipboard"></i>
                                                </a>
                                                <a href="javascript:void(0) " class="btn btn-warning btn-sm px-3"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Copy Name"
                                                    data-clipboard-text="{{ $webRoute->getName() }}">
                                                    <i class="fa-solid fa-clipboard"></i>
                                                </a>
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
        <div class="card mb-6">
            <h5 class="card-header">API Endpoint List</h5>
            <div class="card-body">
                <div class="table-responsive custom-scrollbar table-striped">
                    <div class="col-12 table-responsive">
                        <table class="display callback-table dataTable" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Method</th>
                                    <th>URI</th>
                                    <th>Name</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($apiRoutes as $apiRoute)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <span
                                                class="badge badge-{{ $apiRoute->methods[0] === 'GET' ? 'primary' : ($apiRoute->methods[0] === 'POST' ? 'success' : ($apiRoute->methods[0] === 'PUT' ? 'warning' : ($apiRoute->methods[0] === 'DELETE' ? 'danger' : 'secondary'))) }}">
                                                {{ $apiRoute->methods[0] }}
                                            </span>
                                        </td>
                                        <td>{{ $apiRoute->uri }}</td>
                                        <td>{{ $apiRoute->getName() }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="javascript:void(0) " class="btn btn-info btn-sm px-3"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Copy URI"
                                                    data-clipboard-text="{{ $apiRoute->uri }}">
                                                    <i class="fa-solid fa-clipboard"></i>
                                                </a>
                                                <a href="javascript:void(0) " class="btn btn-warning btn-sm px-3"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Copy Name"
                                                    data-clipboard-text="{{ $apiRoute->getName() }}">
                                                    <i class="fa-solid fa-clipboard"></i>
                                                </a>
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
    </div>
@endsection
