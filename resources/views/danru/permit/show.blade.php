@extends('layouts.simple.master')

@section('title', 'Konfirmasi Izin')

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen select dan jadwal container
            const selectAlternate = document.getElementById('alternate_id');
            const jadwalContainer = document.getElementById('jadwal-alternate');

            if (selectAlternate && jadwalContainer) {
                selectAlternate.addEventListener('change', function() {
                    const alternateId = this.value;
                    jadwalContainer.innerHTML = '<span class="text-muted">Memuat jadwal...</span>';
                    if (alternateId) {
                        fetch("/danru/permit/jadwal/" + alternateId, {
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                }
                            })
                            .then(response => response.json())
                            // .then(data => {
                            //     if (data.success && Array.isArray(data.data) && data.data.length > 0) {
                            //         let html = '<ul class="list-group">';
                            //         data.data.forEach(function(schedule) {
                            //             html +=
                            //                 '<li class="list-group-item d-flex justify-content-between align-items-center">';
                            //             // Format date to readable format (e.g., 2025-05-17 to 17 May 2025)
                            //             const dateObj = new Date(schedule.date);
                            //             const options = {
                            //                 weekday: 'long',
                            //                 year: 'numeric',
                            //                 month: 'long',
                            //                 day: 'numeric'
                            //             };
                            //             const formattedDate = dateObj.toLocaleDateString(
                            //                 'id-ID', options);
                            //             html += formattedDate;
                            //             if (schedule.company_shift_name) {
                            //                 html +=
                            //                     ' <span class="badge bg-primary ms-2">' +
                            //                     schedule.company_shift_name + '</span>';
                            //             }
                            //             html += '</li>';
                            //         });
                            //         html += '</ul>';
                            //         jadwalContainer.innerHTML = html;
                            //     } else {
                            //         jadwalContainer.innerHTML =
                            //             '<span class="text-danger">Tidak ada jadwal tersedia untuk karyawan ini.</span>';
                            //     }
                            // })
                            .then(data => {
                                if (data.success && Array.isArray(data.data) && data.data.length > 0) {
                                    let html =
                                        '<select name="alternate_schedule_id" class="form-select mt-1">';
                                    data.data.forEach(function(schedule) {
                                        const dateObj = new Date(schedule.date);
                                        const options = {
                                            weekday: 'long',
                                            year: 'numeric',
                                            month: 'long',
                                            day: 'numeric'
                                        };
                                        const formattedDate = dateObj.toLocaleDateString(
                                            'id-ID', options);
                                        html += '<option value="' + schedule.id + '">' +
                                            formattedDate;
                                        if (schedule.company_shift_name) {
                                            html += ' (' + schedule.company_shift_name + ')';
                                        }
                                        html += '</option>';
                                    });
                                    html += '</select>';
                                    jadwalContainer.innerHTML = html;
                                } else {
                                    jadwalContainer.innerHTML =
                                        '<span class="text-danger">Tidak ada jadwal tersedia untuk karyawan ini.</span>';
                                }
                            })
                            .catch(() => {
                                jadwalContainer.innerHTML =
                                    '<span class="text-danger">Gagal memuat jadwal.</span>';
                            });
                    } else {
                        jadwalContainer.innerHTML =
                            '<span class="text-muted">Silakan pilih karyawan pengganti terlebih dahulu.</span>';
                    }
                });
            }
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Konfirmasi Izin'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Konfirmasi Izin</h4>
                        @if ($permit->status == 'approved')
                            <span class="badge bg-success">Disetujui</span>
                        @elseif ($permit->status == 'rejected')
                            <span class="badge bg-danger">Ditolak</span>
                        @else
                            <span class="badge bg-warning text-dark">Menunggu Persetujuan</span>
                        @endif
                    </div>
                    <form action="{{ route('danru.permit.update', $permit->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <h5 class="mb-4">Jadwal Karyawan & Pengganti</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="border rounded p-3 mb-3">
                                        <h6 class="fw-bold mb-3"><i class="fa fa-user"></i> Karyawan Izin</h6>
                                        <div class="mb-2">
                                            <span class="fw-semibold">Nama:</span> {{ $permit->employee->fullname ?? '-' }}
                                        </div>
                                        <div class="mb-2">
                                            <span class="fw-semibold">Jenis Izin:</span>
                                            {{ attendanceType($permit->type) ?? '-' }}
                                        </div>
                                        <div class="mb-2">
                                            <span class="fw-semibold">Tanggal Jadwal:</span>
                                            {{ $permit->employeeCompanySchedule ? formatDate($permit->employeeCompanySchedule->date, 'l, d F Y') : '-' }}
                                            @if ($permit->employeeShift()?->name)
                                                ({{ $permit->employeeShift()?->name }})
                                            @endif
                                        </div>
                                        <div class="mb-2">
                                            <span class="fw-semibold">Status Konfirmasi:</span>
                                            @if ($permit->employee_is_confirmed == 'approved')
                                                <span class="badge bg-success">Disetujui</span>
                                            @elseif ($permit->employee_is_confirmed == 'rejected')
                                                <span class="badge bg-danger">Ditolak</span>
                                            @else
                                                <span class="badge bg-warning text-dark">Menunggu</span>
                                            @endif
                                        </div>
                                        <div class="mb-2">
                                            <span class="fw-semibold">Alasan:</span> {{ $permit->reason ?? '-' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @if ($permit->alternate_id !== null)
                                        <div class="border rounded p-3 mb-3">
                                            <h6 class="fw-bold mb-3"><i class="fa fa-user-shield"></i> Pengganti</h6>
                                            <div class="mb-2">
                                                <span class="fw-semibold">Nama:</span>
                                                @if ($permit->alternate && $permit->alternate->fullname)
                                                    {{ $permit->alternate->fullname }}
                                                @else
                                                    <span class="badge bg-warning text-dark">Mencarikan..</span>
                                                @endif
                                            </div>
                                            <div class="mb-2">
                                                <span class="fw-semibold">Tanggal Jadwal:</span>
                                                @if ($permit->alternateCompanySchedule && $permit->alternateShift()?->name && $permit->alternate_schedule_id)
                                                    {{ formatDate($permit->alternateCompanySchedule->date, 'l, d F Y') }}
                                                    ({{ $permit->alternateShift()?->name }})
                                                @else
                                                    <span class="badge bg-warning text-dark">Mencarikan..</span>
                                                @endif
                                            </div>
                                            <div class="mb-2">
                                                <span class="fw-semibold">Status Konfirmasi:</span>
                                                @if ($permit->alternate_is_confirmed == 'approved')
                                                    <span class="badge bg-success">Disetujui</span>
                                                @elseif ($permit->alternate_is_confirmed == 'rejected')
                                                    <span class="badge bg-danger">Ditolak</span>
                                                @else
                                                    <span class="badge bg-warning text-dark">Menunggu</span>
                                                @endif
                                            </div>
                                        </div>
                                    @else
                                        <div class="border rounded p-3 mb-3">
                                            <h6 class="fw-bold mb-3"><i class="fa fa-user-shield"></i> Pilih Pengganti</h6>
                                            <div class="mb-2">
                                                <label for="alternate_id" class="fw-semibold mb-1">Karyawan
                                                    Pengganti:</label>
                                                <select id="alternate_id" class="form-select" name="alternate_id">
                                                    <option value="">-- Pilih Karyawan --</option>
                                                    @foreach ($alternates as $alternate)
                                                        <option value="{{ $alternate->id }}">{{ $alternate->fullname }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-2" id="jadwal-alternate-container">
                                                <label class="fw-semibold mb-1">Jadwal Pengganti:</label>
                                                <div id="jadwal-alternate">
                                                    <span class="text-muted">Silakan pilih karyawan pengganti terlebih
                                                        dahulu.</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-3 fw-semibold">Dibuat Pada</div>
                                <div class="col-md-9">:
                                    {{ $permit->created_at ? $permit->created_at->format('d-m-Y H:i') : '-' }}</div>
                            </div>
                            <div class="d-flex gap-2 mt-4">
                                <input type="hidden" name="value" value="approved">

                                @if (!$permit->alternate_id)
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i> Simpan
                                    </button>
                                @endif

                                <a href="{{ route('danru.permit.index') }}" class="btn btn-secondary">
                                    <i class="fa-solid fa-arrow-left"></i>
                                    Kembali
                                </a>
                                {{-- Tombol konfirmasi dapat ditambahkan di sini jika diperlukan --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
