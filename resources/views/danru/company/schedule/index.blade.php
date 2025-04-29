@extends('layouts.simple.master')

@section('title', 'Jadwal Perusahaan ' . $companyName)

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
        document.querySelectorAll('.dropzone').forEach(dropzone => {
            new Sortable(dropzone, {
                group: 'shifts',
                // swap: true,
                // swapClass: 'highlight',
                animation: 150,
                onStart: function(evt) {
                    evt.item.dataset.oldDate = evt.item.dataset
                        .date; // simpan oldDate di dataset elemen
                    evt.item.dataset.oldEmployee = evt.item.dataset
                        .employee; // simpan oldDate di dataset elemen

                    console.log("onStart - oldDate:", evt.item.dataset.oldDate);
                    console.log("onStart - oldEmployee:", evt.item.dataset.oldEmployee);
                },
                onAdd: function(evt) {
                    let company_shift_id = evt.item.dataset.shift;
                    let employee_id = evt.to.dataset.employee;
                    let date = evt.to.dataset.date;
                    let oldDate = evt.item.dataset.oldDate || null; // ambil oldDate dari dataset elemen
                    let oldEmployee = evt.item.dataset.oldEmployee ||
                        null; // ambil oldEmployee dari dataset elemen

                    if (evt.to.id === "delete-zone") {
                        console.log("Hapus jadwal:", {
                            oldEmployee,
                            oldDate
                        });

                        fetch('{{ route('danru.company.schedule.destroy') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                company_id: '{{ $companyId }}',
                                employee_id: oldEmployee,
                                date: oldDate
                            })
                        }).then(res => res.json()).then(data => {
                            console.log(data);
                            evt.item.remove(); // hapus elemen dari UI
                            Swal.fire({
                                icon: 'success',
                                title: 'Dihapus!',
                                text: 'Jadwal berhasil dihapus!',
                                timer: 1500,
                            });
                        }).catch(error => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal Hapus!',
                                text: "Terjadi kesalahan! " + (error.message ||
                                    "Gagal menghapus jadwal")
                            });
                        });

                        return; // stop eksekusi biar gak lanjut save
                    }

                    fetch('{{ route('danru.company.schedule.save') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            company_id: '{{ $companyId }}',
                            employee_id,
                            date,
                            company_shift_id,
                            old_date: oldDate,
                            old_employee: oldEmployee
                        })
                    }).then(res => res.json()).then(data => {
                        console.log(data);
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: 'Jadwal berhasil disimpan!',
                            timer: 1500,
                        });
                    }).catch(error => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Terjadi Kesalahan!',
                            text: "Gagal menyimpan jadwal! " + error.message ||
                                "Terjadi kesalahan saat menyimpan data"
                        });
                    });

                    delete evt.item.dataset.oldDate; // hapus oldDate setelah dipakai
                }
            });
        });

        new Sortable(document.getElementById('shifts'), {
            group: {
                name: 'shifts',
                pull: 'clone', // ini bikin elemen tetap ada di tempat asalnya
                put: false
            },
            animation: 150
        });

        $('#month').change(function() {
            window.location.href =
                "{{ route('danru.company.schedule.index', ['company' => $companyId]) }}?month=" + $(this)
                .val();
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Jadwal Perusahaan ' ])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5>Jadwal Perusahaan {{ $companyName }} Bulan {{ formatDate($currentMonth, 'F Y') }}</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="GET" id="filterForm">
                            <div class="mb-3">
                                <label for="month" class="form-label">Bulan</label>
                                <div class="d-flex gap-2">
                                    <input type="month" name="month" id="month" class="form-control w-auto"
                                        value="{{ request('month') ?? date('Y-m') }}">

                                    <a href="{{ route('danru.company.schedule.index', ['company' => $companyId]) }}"
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
            <div class="col-12">
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
                            <a href="{{ route('danru.company.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
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
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection
