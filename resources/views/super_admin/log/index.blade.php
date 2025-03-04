@extends('layouts.simple.master')

@section('title', 'Daftar Log')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dataTables.bootstrap5.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables1.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.bootstrap5.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#employeeTable').DataTable({
                language: {
                    url: '{{ asset('assets/js/datatable/datatable-extension/i18n/indonesian.json') }}'
                }
            });
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid pt-5">
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Log Statistik</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-1">
                            <span class="fs-5 badge bg-primary rounded-3">Local: {{ $stats['local'] }}</span>
                            <span class="fs-5 badge bg-success rounded-3">Production: {{ $stats['production'] }}</span>
                            <span class="fs-5 badge bg-danger rounded-3">Error: {{ $stats['error'] }}</span>
                            <span class="fs-5 badge bg-warning rounded-3">Warning: {{ $stats['warning'] }}</span>
                            <span class="fs-5 badge bg-info rounded-3">Info: {{ $stats['info'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive custom-scrollbar table-striped">
                    <div class="col-12 table-responsive">
                        <table class="display callback-table dataTable" id="employeeTable" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nama File</th>
                                    <th>Ukuran (KB)</th>
                                    <th>Terakhir Diubah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($logs as $log)
                                    <tr>
                                        <td>{{ $log['name'] }}</td>
                                        <td>{{ $log['size'] }}</td>
                                        <td>{{ date('Y-m-d H:i:s', $log['modified']) }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="{{ route('superadmin.logs.show', ['filename' => $log['name']]) }}"
                                                    class="btn btn-info btn-sm px-3" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Lihat Log">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ route('superadmin.logs.download', ['filename' => $log['name']]) }}"
                                                    class="btn btn-warning btn-sm px-3" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Download Log">
                                                    <i class="fa fa-download"></i>
                                                </a>
                                                @include('layouts.components.delete', [
                                                    'route' => route('superadmin.logs.destroy', [
                                                        'filename' => $log['name'],
                                                    ]),
                                                    'title' => 'Hapus Log',
                                                    'message' => 'Apakah kamu yakin ingin menghapus log ini?',
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
    </div>
@endsection
