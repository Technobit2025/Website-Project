@extends('layouts.simple.master')

@section('title', 'Data Pergantian')

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
            $('#permitTable').DataTable({
                language: {
                    url: '{{ asset('assets/js/datatable/datatable-extension/i18n/indonesian.json') }}'
                }
            });
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Data Pergantian'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5>Data Pergantian</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar table-striped"
                            data-intro="Data pergantian akan ditampilkan disini">
                            <div class="col-12 table-responsive">
                                <table class="display callback-table dataTable" id="permitTable" style="width: 100%;"
                                    aria-describedby="permitTable_info">
                                    <thead>
                                        <tr>
                                            <th>Jadwal yang digantikan</th>
                                            <th>Jenis Izin</th>
                                            <th>Keterangan</th>
                                            <th>Pengganti</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($permits as $permit)
                                            <tr>
                                                <td>{{ formatDate($permit->employeeCompanySchedule->date, 'l, d F Y') }}
                                                </td>
                                                <td>{{ $permit->type ?? '-' }}</td>
                                                <td>{{ $permit->reason ?? '-' }}</td>
                                                <td>
                                                    @if ($permit->alternate && $permit->alternate->fullname)
                                                        {{ $permit->alternate->fullname }}
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
                                                    <a href="{{ route('alternation.show', $permit->id) }}"
                                                        class="btn btn-sm px-3 btn-primary" title="Lihat Detail">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
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
