@extends('layouts.simple.master')

@section('title', 'Data Perizinan')

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
        @include('layouts.components.breadcrumb', ['header' => 'Data Perizinan'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5>Data Perizinan</h5>
                            {{-- Tambahkan tombol pengajuan izin jika diperlukan --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar table-striped"
                            data-intro="Data perizinan akan ditampilkan disini">
                            <div class="col-12 table-responsive">
                                <div class="mb-3">
                                    <a href="{{ route('permit.create') }}" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Tambah Izin Baru
                                    </a>
                                </div>
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
                                                    {{-- Show detail button --}}
                                                    <a href="{{ route('permit.show', $permit->id) }}"
                                                        class="btn btn-sm px-3 btn-primary" title="Lihat Detail">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    @if ($permit->alternate_schedule_id == null)
                                                        @include('layouts.components.delete', [
                                                            'route' => route('permit.destroy', [$permit->id]),
                                                            'title' => 'Hapus izin ini.',
                                                            'message' =>
                                                                'Apakah anda yakin ingin menghapus izin ini?',
                                                        ])
                                                    @endif
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
