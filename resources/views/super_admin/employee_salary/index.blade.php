@extends('layouts.simple.master')

@section('title', 'Human Resource Dashboard')

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
            $('#employeeTable').DataTable({
                language: {
                    url: '{{ asset('assets/js/datatable/datatable-extension/i18n/indonesian.json') }}'
                }
            });
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Gaji Karyawan'])
    </div>
    <div class="container-fluid">
        {{-- <div class="row">
            <div class="col-12 col-lg-3">
                <div class="card user-management">
                    <div class="card-body bg-primary rounded-4">
                        <div class="blog-card p-0">
                            <div class="blog-card-content">
                                <div class="blog-tags">
                                    <div class="tags-icon">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-task') }}">
                                            </use>
                                        </svg>
                                    </div>
                                    <div class="tag-details">
                                        <h2 class="total-num counter">{{ $roles->count() }}</h2>
                                        <p>Role Karyawan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Total Karyawan Berdasarkan Role</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="total-num counter">
                                    <div class="d-flex by-role custom-scrollbar">
                                        @foreach ($roles as $role)
                                        <div>
                                            <div class="total-user bg-light-primary">
                                                <h5> {{ $role->name }} </h5>
                                                <span class="total-num counter">{{ $role->users->count() }}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card user-role">
                    <div class="card-body">
                        <div class="btn-light1-primary b-r-15">
                            <div class="upcoming-box">
                                <div class="upcoming-icon bg-primary">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#user-plus') }}">
                                        </use>
                                    </svg>
                                </div>
                                <p>Karyawan</p>
                                <a href="{{ route('superadmin.employee.create') }}" class="btn btn-primary">Tambah
                                    Karyawan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Gaji Karyawan</h5>
                        {{-- <a href="{{ route('superadmin.employeesalary.create') }}" class="btn btn-primary">Tambah Gaji
                            Karyawan</a> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar table-striped">
                            <div class="col-12 table-responsive">
                                <table class="display callback-table dataTable" id="employeeTable" style="width: 100%;"
                                    aria-describedby="employeeTable_info">

                                    <thead>
                                        <tr>
                                            {{-- <th>No</th> --}}
                                            {{-- <th colspan="2">Nama Lengkap</th> --}}
                                            <th>Nama Lengkap</th>
                                            <th>Role</th>
                                            <th>Gaji</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $employee)
                                            <tr>
                                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                                {{-- <td colspan="2">{{ $employee->fullname }}</td> --}}
                                                <td>{{ $employee->fullname }}</td>
                                                <td>{{ $employee->user->role->name }}</td>
                                                <td>{{ $employee->salary !== null ? formatRupiah($employee->salary) : '-' }}
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        @if ($employee->salary !== null)
                                                            <a href="{{ route('superadmin.employeesalary.show', $employee->id) }}"
                                                                class="btn btn-info btn-sm px-3" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-title="Lihat Gaji Karyawan">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>

                                                            <a href="{{ route('superadmin.employeesalary.edit', $employee->id) }}"
                                                                class="btn btn-warning btn-sm px-3" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-title="Ubah Gaji Karyawan">
                                                                <i class="fa-regular fa-pen-to-square"></i>
                                                            </a>

                                                            @include('layouts.components.delete', [
                                                                'route' => route(
                                                                    'superadmin.employeesalary.destroy',
                                                                    $employee->id),
                                                                'title' => 'Hapus Gaji Karyawan',
                                                                'message' =>
                                                                    'Apakah kamu yakin ingin menghapus gaji karyawan ini?',
                                                            ])
                                                        @else
                                                            <a href="{{ route('superadmin.employeesalary.create', $employee->id) }}"
                                                                class="btn btn-success btn-sm px-3" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-title="Tentukan Gaji Karyawan">
                                                                <i class="fa-regular fa-plus"></i> Tentukan Gaji
                                                            </a>
                                                        @endif
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
        </div>
    </div><!-- Container-fluid Ends-->
@endsection
