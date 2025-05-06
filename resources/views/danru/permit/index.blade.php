@extends('layouts.simple.master')

@section('title', 'Izin Karyawan')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/tour.css') }}">

@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables1.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('assets/js/tour/intro.js') }}"></script>
    <script src="{{ asset('assets/js/tour/intro-init.js') }}"></script>
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
                            <h5>Izin Karyawan</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar table-striped"
                            data-intro="Data perusahaan akan ditampilkan disini">
                            <div class="col-12 table-responsive">
                                <table class="display callback-table dataTable" id="companyTable" style="width: 100%;"
                                    aria-describedby="companyTable_info">

                                    <thead>
                                        <tr>
                                            <th>Karyawan Ijin</th>
                                            <th>Tipe</th>
                                            <th>Jadwal diganti</th>
                                            <th>Pengganti</th>
                                            <th>Jadwal Pengganti</th>
                                            <th>Status</th>
                                            <th
                                                data-intro="Klik tombol yang tersedia dibawah ini untuk melihat, mengubah, menghapus perusahaan">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($permits as $permit)
                                            <tr>
                                                <td>{{ $permit->employee->fullname ?? '-' }}</td>
                                                <td>{{ $permit->type ?? '-' }}</td>
                                                <td>{{ formatDate($permit->employeeCompanySchedule->date, 'l, d F Y') . ' (' . $permit->employeeShift()?->name . ')' }}
                                                <td>{{ $permit->alternate->fullname ?? '-' }}</td>
                                                <td>{{ $permit->alternateShift()?->name ?? '-' }}</td>
                                                <td>
                                                    @if ($permit->status == 'approved')
                                                        <span class="badge bg-success">Disetujui</span>
                                                    @elseif ($permit->status == 'rejected')
                                                        <span class="badge bg-danger">Ditolak</span>
                                                    @else
                                                        <span class="badge bg-warning text-dark">Menunggu</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{-- <div class="d-flex gap-2">
                                                        <a href="{{ route('danru.company.show', $company->id) }}"
                                                            class="btn btn-info btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Lihat Perusahaan">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('danru.company.schedule.index', $company->id) }}"
                                                            class="btn btn-warning btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Jadwal Perusahaan">
                                                            <i class="fa-solid fa-calendar-days"></i>
                                                        </a>
                                                    </div> --}}
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
