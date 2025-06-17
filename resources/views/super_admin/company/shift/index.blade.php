@extends('layouts.simple.master')

@section('title', 'Shift Shift Perusahaan')

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
        @include('layouts.components.breadcrumb', ['header' => 'Shift Perusahaan'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5>Shift Perusahaan</h5>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addShiftModal">
                                Tambahkan Shift
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="addShiftModal" tabindex="-1" aria-labelledby="addShiftModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addShiftModalLabel">Tambahkan Shift</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('superadmin.company.shift.store') }}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="shiftName" class="form-label">Nama Shift</label>
                                                    <select class="form-control" name="name" id="shiftName">
                                                        <option value="">Nama Shift</option>
                                                        <option value="Pagi">Pagi</option>
                                                        <option value="Siang">Siang</option>
                                                        <option value="Malam">Malam</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="startTime" class="form-label">Jam Mulai</label>
                                                    <input type="time" class="form-control" id="startTime"
                                                        name="start_time" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="endTime" class="form-label">Jam Selesai</label>
                                                    <input type="time" class="form-control" id="endTime"
                                                        name="end_time" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="checkoutTime" class="form-label">Jam diperbolehkan
                                                        checkout</label>
                                                    <input type="time" class="form-control" id="checkoutTime"
                                                        name="checkout_time" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="lateTime" class="form-label">Jam Presensi dihitung
                                                        terlambat</label>
                                                    <input type="time" class="form-control" id="lateTime"
                                                        name="late_time" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="color" class="form-label">Warna</label>
                                                    <div class="mb-3">
                                                        <div class="d-flex flex-wrap gap-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="color" id="colorPrimary"
                                                                    value="{{ env('APP_COLOR') }}" checked>
                                                                <div class="bg-primary rounded-1"
                                                                    style="width: 20px; height: 20px;"></div>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="color" id="colorDanger" value="#dc3545">
                                                                <div class="bg-danger rounded-1"
                                                                    style="width: 20px; height: 20px;"></div>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="color" id="colorSuccess" value="#198754">
                                                                <div class="bg-success rounded-1"
                                                                    style="width: 20px; height: 20px;"></div>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="color" id="colorWarning" value="#ffc107">
                                                                <div class="bg-warning rounded-1"
                                                                    style="width: 20px; height: 20px;"></div>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="color" id="colorInfo" value="#0dcaf0">

                                                                <div class="bg-info rounded-1"
                                                                    style="width: 20px; height: 20px;"></div>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="color" id="colorDark" value="#212529">
                                                                <div class="bg-dark rounded-1"
                                                                    style="width: 20px; height: 20px;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="color" id="colorCustom" value="custom">
                                                                <input type="color"
                                                                    class="form-control form-control-color ms-2"
                                                                    id="customColorPicker"
                                                                    onchange="document.getElementById('colorCustom').value=this.value">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="company_id" value="{{ $company->id }}">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar table-striped">
                            <div class="col-12 table-responsive">
                                <table class="display callback-table dataTable" id="companyTable" style="width: 100%;"
                                    aria-describedby="companyTable_info">

                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jam Mulai</th>
                                            <th>Jam Selesai</th>
                                            <th>Jam Presensi Terlambat</th>
                                            <th>Jam Diperbolehkan checkout</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($shifts as $shift)
                                            <tr>
                                                {{-- <td style="width: 5% !important;">{{ $shift->id }}</td> --}}
                                                <td>
                                                    <p style="color: {{ $shift->color }}">
                                                        {{ $shift->name ?? '-' }}
                                                    </p>
                                                </td>

                                                <td>{{ $shift->start_time ?? '-' }}</td>
                                                <td>{{ $shift->end_time ?? '-' }}</td>
                                                <td>{{ $shift->late_time ?? '-' }}</td>
                                                <td>{{ $shift->checkout_time ?? '-' }}</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="{{ route('superadmin.company.shift.show', $shift->id) }}"
                                                            class="btn btn-info btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Lihat Shift">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('superadmin.company.shift.edit', $shift->id) }}"
                                                            class="btn btn-warning btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Ubah Shift">
                                                            <i class="fa-solid fa-edit"></i>
                                                        </a>
                                                        @include('layouts.components.delete', [
                                                            'route' => route('superadmin.company.shift.destroy', [
                                                                $shift->id,
                                                            ]),
                                                            'title' => 'Hapus Shift dari Perusahaan',
                                                            'message' =>
                                                                'Apakah anda yakin ingin menghapus shift dari perusahaan ini?',
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
