@extends('layouts.simple.master')

@section('title', 'Jadwal Perusahaan ')

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
        @include('layouts.components.breadcrumb', ['header' => 'Jadwal Perusahaan '])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5>Jadwal Bulan {{ formatDate($currentMonth, 'F Y') }}</h5>
                        </div>
                    </div>
                    <div class="card-body">
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
                                            <tr data-employee="{{ $employee->id }}">
                                                <td>{{ $employee->fullname }}</td>
                                                @for ($day = 1; $day <= $daysInMonth; $day++)
                                                    @php
                                                        $date =
                                                            $currentMonth . '-' . str_pad($day, 2, '0', STR_PAD_LEFT);
                                                        $schedule = $schedules
                                                            ->where('employee_id', $employee->id)
                                                            ->where('date', $date)
                                                            ->first();
                                                        $shift = $schedule
                                                            ? $shifts->firstWhere('id', $schedule->company_shift_id)
                                                            : null;
                                                    @endphp
                                                    <td class="dropzone" data-date="{{ $date }}"
                                                        data-employee="{{ $employee->id }}">
                                                        @if ($shift)
                                                            <div class="shift btn" data-shift="{{ $shift->id }}"
                                                                data-date="{{ $date }}"
                                                                data-employee="{{ $employee->id }}"
                                                                style="background-color: {{ $shift->color }}">
                                                                {{ $shift->name }}
                                                            </div>
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
            <div class="mb-3">
                <a href="javascript:history.back()" class="btn btn-secondary">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection
