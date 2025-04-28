@extends('layouts.simple.master')

@section('title', 'Periode Penggajian')

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

            $('[id^=edit-period-button-]').on('click', function() {
                let id = $(this).data('id');
                let name = $(this).data('name');
                let startDate = $(this).data('start-date');
                let endDate = $(this).data('end-date');

                $('#edit-period-id').val(id);
                $('#edit-period-name').val(name);
                $('#edit-period-start-date').val(startDate);
                $('#edit-period-end-date').val(endDate);

                $('#edit-period-form').attr('action', '/superadmin/payroll/period/update/' +
                id); // sesuaikan dengan route update kamu
                $('#editPeriodModal').modal('show');
                console.log(id, name, startDate, endDate)
            });

            const old = @json(old('start_date'));
            if (old) {
                $('#createPeriodModal').modal('show');
            }
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Periode Penggajian'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Periode Penggajian</h5>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#createPeriodModal">
                            Tambah Periode Penggajian
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="createPeriodModal" tabindex="-1"
                            aria-labelledby="createPeriodModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="createPeriodModalLabel">Tambah Periode Penggajian</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('superadmin.payroll.period.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nama Periode</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    required value="{{ old('name') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="start_date" class="form-label">Tanggal Mulai</label>
                                                <input type="date" class="form-control" id="start_date" name="start_date"
                                                    required value="{{ old('start_date') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="end_date" class="form-label">Tanggal Selesai</label>
                                                <input type="date" class="form-control" id="end_date" name="end_date"
                                                    required value="{{ old('end_date') }}">
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
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar table-striped">
                            <div class="col-12 table-responsive">
                                <table class="display callback-table dataTable" id="employeeTable" style="width: 100%;"
                                    aria-describedby="employeeTable_info">

                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Mulai Tanggal</th>
                                            <th>Sampai Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payrollPeriods as $payrollPeriod)
                                            <tr>
                                                <td>{{ $payrollPeriod->is_locked ? '🔒 ' : '🔓 ' . $payrollPeriod->name }}
                                                </td>
                                                <td>{{ $payrollPeriod->start_date }}</td>
                                                <td>{{ $payrollPeriod->end_date }}</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <button id="edit-period-button-{{ $payrollPeriod->id }}"
                                                            class="btn btn-warning btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Ubah Periode Penggajian"
                                                            data-id="{{ $payrollPeriod->id }}"
                                                            data-name="{{ $payrollPeriod->name }}"
                                                            data-start-date="{{ $payrollPeriod->start_date }}"
                                                            data-end-date="{{ $payrollPeriod->end_date }}">
                                                            <i class="fa-solid fa-edit"></i>
                                                        </button>

                                                        @include('layouts.components.delete', [
                                                            'route' => route(
                                                                'superadmin.payroll.period.destroy',
                                                                $payrollPeriod->id),
                                                            'title' => 'Hapus Periode Penggajian',
                                                            'message' =>
                                                                'Apakah anda yakin ingin menghapus gaji Pokok karyawan ini?',
                                                        ])

                                                        <a href="{{ route('superadmin.payroll.index', $payrollPeriod->id) }}"
                                                            class="btn btn-success btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            data-bs-title="Tentukan Periode Penggajian">
                                                            <i class="fa-solid fa-plus"></i> Tentukan
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- EDIT MODAL -->
                                <div class="modal fade" id="editPeriodModal" tabindex="-1"
                                    aria-labelledby="editPeriodModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editPeriodModalLabel">Ubah Periode Penggajian
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" id="edit-period-form">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Nama Periode</label>
                                                        <input type="text" class="form-control" id="edit-period-name"
                                                            name="name" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="start_date" class="form-label">Tanggal Mulai</label>
                                                        <input type="date" class="form-control"
                                                            id="edit-period-start-date" name="start_date" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="end_date" class="form-label">Tanggal Selesai</label>
                                                        <input type="date" class="form-control"
                                                            id="edit-period-end-date" name="end_date" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
