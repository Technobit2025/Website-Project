@extends('layouts.simple.master')

@section('title', 'Penggajian Karyawan')

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
        @include('layouts.components.breadcrumb', ['header' => 'Penggajian Karyawan'])
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
                        <h5>Penggajian Karyawan</h5>
                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#addEmployeeModal">
                            Tambah Karyawan
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="addEmployeeModal" tabindex="-1"
                            aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addEmployeeModalLabel">Karyawan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('superadmin.payroll.period.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="employee_ids" class="form-label">Pilih Karyawan</label>
                                                <select class="form-select select2" id="employee_ids" name="employee_ids[]" multiple required>
                                                    @foreach ($employees as $employee)
                                                        <option value="{{ $employee->id }}">{{ $employee->fullname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar table-striped">
                            <div class="col-12 table-responsive">
                                <table class="display callback-table dataTable" id="employeeTable" style="width: 100%;"
                                    aria-describedby="employeeTable_info">

                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Karyawan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $employee)
                                            <tr>
                                                <td>{{ $employee->id }}</td>
                                                <td>{{ $employee->fullname }}</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        {{-- <a href="{{ route('superadmin.employeesalary.show', $employee->id) }}"
                                                            class="btn btn-info btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            data-bs-title="Lihat Penggajian Karyawan">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a>

                                                        <a href="{{ route('superadmin.employeesalary.edit', $employee->id) }}"
                                                            class="btn btn-warning btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            data-bs-title="Ubah Penggajian Karyawan">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>

                                                        @include('layouts.components.delete', [
                                                            'route' => route(
                                                                'superadmin.employeesalary.destroy',
                                                                $employee->id),
                                                            'title' => 'Hapus Penggajian Karyawan',
                                                            'message' =>
                                                                'Apakah anda yakin ingin menghapus gaji Pokok karyawan ini?',
                                                        ]) --}}
                                                        @if (!$employee->payrollInPayrollPeriod($payrollPeriodId))
                                                            <form action="{{ route('superadmin.payroll.store') }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                <input type="hidden" name="employee_id"
                                                                    value="{{ $employee->id }}">
                                                                <input type="hidden" name="payroll_period_id"
                                                                    value="{{ $payrollPeriodId }}">
                                                                <button type="submit" class="btn btn-success btn-sm px-3"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Tentukan Penggajian Karyawan">
                                                                    <i class="fa-solid fa-plus"></i> Buat Payroll
                                                                </button>
                                                            </form>
                                                        @else
                                                            <a href="{{ route('superadmin.payroll.component.index', $employee->payrollInPayrollPeriod($payrollPeriodId)->id) }} "
                                                                class="btn btn-sm btn-primary px-3"><i
                                                                    class="fa-solid fa-money-bill"></i> Payroll</a>
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
        <a href="{{ route('superadmin.payroll.period.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
            Kembali</a>
    </div>
@endsection
