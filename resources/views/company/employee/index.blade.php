@extends('layouts.simple.master')

@section('title', 'Karyawan Perusahaan')

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
            $('#companyTable').DataTable({
                language: {
                    url: '{{ asset('assets/js/datatable/datatable-extension/i18n/indonesian.json') }}'
                }
            });
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Data Perusahaan'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5>Data Perusahaan</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar table-striped">
                            <div class="col-12 table-responsive">
                                <table class="display callback-table dataTable" id="companyTable" style="width: 100%;"
                                    aria-describedby="companyTable_info">

                                    <thead>
                                        <tr>
                                            {{-- <th style="width: 5% !important;">ID</th> --}}
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $employee)
                                            <tr>
                                                {{-- <td style="width: 5% !important;">{{ $employee->id }}</td> --}}
                                                <td>{{ $employee->fullname ?? '-' }}</td>
                                                <td>{{ $employee->user->email ?? '-' }}</td>
                                                <td>{{ $employee->address ?? '-' }}</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="{{ route('company.employee.show', $employee->id) }}"
                                                            class="btn btn-info btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Lihat Karyawan">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a>
                                                        @include('layouts.components.delete', [
                                                            'route' => route(
                                                                'company.company.employee.destroy',
                                                                [$company->id, $employee->id]),
                                                            'title' => 'Hapus Karyawan dari Perusahaan',
                                                            'message' =>
                                                                'Apakah kamu yakin ingin menghapus karyawan ini dari perusahaan ini?',
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
                <div class="d-flex gap-2">
                    <a href="{{ route('company.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                        Kembali</a>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection
