@extends('layouts.simple.master')

@section('title', 'Tambah Izin')

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Tambah Izin'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('permit.store') }}" method="POST">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Pengajuan Izin</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="employee_schedule_id" class="form-label">Pilih Tanggal Jadwal yang Ingin
                                    Digantikan</label>
                                <select class="form-select @error('employee_schedule_id') is-invalid @enderror"
                                    id="employee_schedule_id" name="employee_schedule_id" required>
                                    <option value="">-- Pilih Tanggal Jadwal --</option>
                                    @foreach ($schedules as $schedule)
                                        <option value="{{ $schedule->id }}"
                                            {{ old('employee_schedule_id') == $schedule->id ? 'selected' : '' }}>
                                            {{ formatDate($schedule->date, 'l, d F Y') }}
                                        </option>
                                    @endforeach
                                </select>
                                @errorFeedback('employee_schedule_id')
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Jenis Izin</label>
                                <select class="form-select @error('type') is-invalid @enderror" id="type"
                                    name="type" required>
                                    <option value="">-- Pilih Jenis Izin --</option>
                                    <option value="Sick Leave" {{ old('type') == 'Sick Leave' ? 'selected' : '' }}>Sakit
                                    </option>
                                    <option value="Leave" {{ old('type') == 'Leave' ? 'selected' : '' }}>Cuti</option>
                                    <option value="Absent" {{ old('type') == 'Absent' ? 'selected' : '' }}>Tidak Hadir
                                    </option>
                                    <option value="Late" {{ old('type') == 'Late' ? 'selected' : '' }}>Terlambat</option>
                                    <option value="Leave Early" {{ old('type') == 'Leave Early' ? 'selected' : '' }}>Pulang
                                        Awal</option>
                                    <option value="WFH" {{ old('type') == 'WFH' ? 'selected' : '' }}>WFH</option>
                                </select>
                                @errorFeedback('type')
                            </div>
                            <div class="mb-3">
                                <label for="reason" class="form-label">Keterangan</label>
                                <textarea class="form-control @error('reason') is-invalid @enderror" id="reason" name="reason" rows="3"
                                    required>{{ old('reason') }}</textarea>
                                @errorFeedback('reason')
                            </div>
                            {{-- Optional: Pengganti --}}
                            {{-- <div class="mb-3">
                                <label for="alternate_id" class="form-label">Pengganti (Opsional)</label>
                                <input type="text" class="form-control" id="alternate_id" name="alternate_id"
                                    placeholder="Masukkan nama atau ID pengganti (jika ada)"
                                    value="{{ old('alternate_id') }}">
                            </div> --}}
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa-solid fa-save"></i>
                                    Ajukan Izin
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
