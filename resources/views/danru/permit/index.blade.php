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
    {{-- <script src="{{ asset('assets/js/tour/intro.js') }}"></script>
    <script src="{{ asset('assets/js/tour/intro-init.js') }}"></script> --}}
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
                                                <td>{{ attendanceType($permit->type) ?? '-' }}</td>
                                                {{-- <td>{{ formatDate($permit->employeeCompanySchedule->date, 'l, d F Y') . ' (' . $permit->employeeShift()?->name . ')' }} --}}
                                                <td>{{ formatDate(optional($permit->employeeCompanySchedule)->date ?? $permit->date, 'l, d F Y') }}</td>
                                                    {{-- <td>{{ $permit->alternate->fullname ?? '-' }}</td> --}}
                                                <td>
                                                    @if ($permit->alternate && $permit->alternate->fullname)
                                                        {{ $permit->alternate->fullname }}
                                                    @else
                                                        <span class="badge bg-warning text-dark">Mencarikan..</span>
                                                    @endif
                                                </td>
                                                {{-- <td>{{ $permit->alternateShift()?->name ?? '-' }}</td> --}}
                                                <td>
                                                    @if ($permit->alternate && $permit->alternateShift()->name)
                                                        {{-- {{ $permit->alternateShift()->name }} --}}
                                                        {{ formatDate($permit->alternateCompanySchedule->date, 'l, d F Y') . ' (' . $permit->alternateShift()?->name . ')' }}
                                                    @else
                                                        <span class="badge bg-warning text-dark">Mencarikan..</span>
                                                    @endif
                                                </td>
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
                                                    <div class="d-flex gap-2">
                                                        <a href="{{ route('danru.permit.show', $permit->id) }}"
                                                            class="btn btn-info btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Lihat detail">
                                                            <i class="fa-solid fa-user"></i>
                                                        </a>
                                                        <form method="POST"
                                                            action="{{ route('danru.permit.sendMail', $permit->id) }}">
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm px-3 btn-success"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Kirim Notifikasi"><i
                                                                    class="fa fa-envelope"></i></button>
                                                        </form>
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
