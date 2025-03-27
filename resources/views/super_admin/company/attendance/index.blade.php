@extends('layouts.simple.master')

@section('title', 'Absensi Perusahaan ' . $companyName)

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
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.6/Sortable.min.js"></script>
    <script>
        function showAttendanceDetail(attendance) {
            Swal.fire({
                title: 'Attendance Details',
                html: `
                <b>Checked In:</b> ${attendance.checked_in_at} <br>
                <b>Checked Out:</b> ${attendance.checked_out_at ?? 'N/A'} <br>
                <b>Latitude:</b> ${attendance.latitude} <br>
                <b>Longitude:</b> ${attendance.longitude} <br>
                <b>Status:</b> ${attendance.status ?? 'N/A'} <br>
                <b>Note:</b> ${attendance.note ?? 'N/A'}
            `,
                icon: 'info',
                confirmButtonText: 'OK'
            });
        }

        $('#month').change(function() {
            window.location.href =
                "{{ route('superadmin.company.schedule.index', ['company' => $companyId]) }}?month=" + $(this)
                .val();
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Absensi Perusahaan '])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5>Absensi Perusahaan {{ $companyName }} Bulan {{ formatDate($currentMonth, 'F Y') }}</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="GET" id="filterForm">
                            <div class="mb-3">
                                <label for="month" class="form-label">Bulan</label>
                                <div class="d-flex gap-2">
                                    <input type="month" name="month" id="month" class="form-control w-auto"
                                        value="{{ request('month') ?? date('Y-m') }}">

                                    <a href="{{ route('superadmin.company.schedule.index', ['company' => $companyId]) }}"
                                        class="btn btn-secondary">
                                        <i class="fa fa-refresh"></i>
                                        Reset
                                    </a>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive custom-scrollbar table-striped">
                            <div class="col-12 table-responsive">
                                <table class="display callback-table dataTable" id="companyTable" style="width: 100%;"
                                    aria-describedby="companyTable_info">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            @for ($day = 1; $day <= $daysInMonth; $day++)
                                                <th>{{ $day }}</th>
                                            @endfor
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $employee)
                                            <tr>
                                                <td>{{ $employee->fullname }}</td>
                                                @for ($i = 1; $i <= $daysInMonth; $i++)
                                                    @php
                                                        $date = Carbon\Carbon::parse(
                                                            $currentMonth . '-' . $i,
                                                        )->toDateString();
                                                        $attendanceKey = $employee->id . '-' . $date;
                                                        $attendance = $attendances[$attendanceKey] ?? null;
                                                    @endphp
                                                    <td>
                                                        @if ($attendance)
                                                            @switch($attendance->first()->status)
                                                                @case('Present')
                                                                    <button class="btn btn-sm btn-success" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Hadir"
                                                                        onclick="showAttendanceDetail({{ $attendance->first() }})">
                                                                        ✅
                                                                    </button>
                                                                @break

                                                                @case('Sick Leave')
                                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Sakit"
                                                                        onclick="showAttendanceDetail({{ $attendance->first() }})">
                                                                        🤒
                                                                    </button>
                                                                @break

                                                                @case('Leave')
                                                                    <button class="btn btn-sm btn-info" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Cuti"
                                                                        onclick="showAttendanceDetail({{ $attendance->first() }})">
                                                                        🛌
                                                                    </button>
                                                                @break

                                                                @case('Late')
                                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Telat"
                                                                        onclick="showAttendanceDetail({{ $attendance->first() }})">
                                                                        🕒
                                                                    </button>
                                                                @break

                                                                @case('Left Early')
                                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Pulang Cepat"
                                                                        onclick="showAttendanceDetail({{ $attendance->first() }})">
                                                                        🕒
                                                                    </button>
                                                                @break

                                                                @case('WFH')
                                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="WFH"
                                                                        onclick="showAttendanceDetail({{ $attendance->first() }})">
                                                                        🏠
                                                                    </button>
                                                                @break

                                                                @default
                                                                    {{-- <button class="btn btn-sm btn-success"
                                                                        onclick="showAttendanceDetail({{ $attendance->first() }})">
                                                                        ✅
                                                                    </button> --}}
                                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Tidak Hadir"
                                                                        onclick="showAttendanceDetail({{ $attendance->first() }})">
                                                                        🚫
                                                                    </button>
                                                            @endswitch
                                                        @else
                                                            @if ($date <= now()->toDateString())
                                                                -
                                                            @endif
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Shift Perusahaan</h5>
                            </div>
                            <div class="card-body">
                                <div id="shifts">
                                    @foreach ($shifts as $shift)
                                        <div class="shift btn" data-shift="{{ $shift->id }}"
                                            style="background-color: {{ $shift->color }}">
                                            {{ $shift->name }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="{{ route('superadmin.company.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                                Kembali</a>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Hapus Shift</h5>
                            </div>
                            <div class="card-body">
                                <div class="mt-3">
                                    <div class=" w-100 p-3 text-center dropzone position-relative rounded-3"
                                        id="delete-zone"
                                        style="border: 2px dashed var(--bs-danger); min-height: 80px; display: flex; align-items: center; justify-content: center;">
                                        <div class="position-absolute top-50 start-50 translate-middle ">
                                            <i class="fa fa-trash fa-2x mb-2 text-danger"></i>
                                            <div class="text-danger">Drop shift disini untuk menghapus</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> --}}
        </div>
    </div><!-- Container-fluid Ends-->
@endsection
