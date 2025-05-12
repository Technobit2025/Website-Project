@extends('layouts.simple.master')

@section('title', 'Konfirmasi Izin')

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
                    <div class="card-body">
                        <h5 class="mb-4">Jadwal Karyawan & Pengganti</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="border rounded p-3 mb-3">
                                    <h6 class="fw-bold mb-3"><i class="fa fa-user"></i> Karyawan yang Meminta</h6>
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
                                <div class="border rounded p-3 mb-3">
                                    <h6 class="fw-bold mb-3"><i class="fa fa-user-shield"></i> Anda (Pengganti)</h6>
                                    <div class="mb-2">
                                        <span class="fw-semibold">Nama:</span> {{ $alternate->fullname ?? '-' }}
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
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3 fw-semibold">Dibuat Pada</div>
                            <div class="col-md-9">:
                                {{ $permit->created_at ? $permit->created_at->format('d-m-Y H:i') : '-' }}</div>
                        </div>
                        <div class="d-flex gap-2 mt-4">
                            @if ($permit->alternate_is_confirmed == 'pending')
                                <form action="{{ route('alternation.confirm', $permit->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="value" value="approved">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-check"></i> Setujui
                                    </button>
                                </form>
                                <form action="{{ route('alternation.confirm', $permit->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="value" value="rejected">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-x"></i> Tolak
                                    </button>
                                </form>
                            @endif
                            <a href="{{ route('alternation.index') }}" class="btn btn-secondary">
                                <i class="fa-solid fa-arrow-left"></i>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection