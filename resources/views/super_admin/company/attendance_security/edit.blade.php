@extends('layouts.simple.master')

@section('title', 'Ubah Patroli')

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Ubah Patroli'])
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('superadmin.company.attendanceSecurity.update', $attendance->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Presensi</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Nama</label>
                                <input type="text" class="form-control" value="{{ $attendance->employee->fullname }}" disabled>
                            </div>
                            <div class="mb-3">  
                                <label for="place" class="form-label">Tempat</label>
                                <input type="text" class="form-control" value="{{ $attendance->companyPlace->name }}" disabled>
                            </div>
                            <div class="mb-3">  
                                <label for="check-in" class="form-label">Tempat</label>
                                <input type="text" class="form-control" value="{{ $attendance->checked_in_at }}" disabled>
                            </div>
                            <div class="mb-3">  
                                <label for="check-in" class="form-label">Tempat</label>
                                <input type="text" class="form-control" value="{{ $attendance->checked_out_at }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">status</label>
                                    <select class="form-control @error('status') is-invalid @enderror" id="status" 
                                    name="status" style="cursor: pointer;" required >
                                    <option value="">Pilih status</option>
                                    <option value="Present" {{ old('status', $attendance->status->name ?? '') == 'Present' ? 'selected' : '' }}>Hadir</option>
                                    <option value="WFH" {{ old('status', $attendance->status->name ?? '') == 'WFH' ? 'selected' : '' }}>WFH</option>
                                    <option value="Sick Leave" {{ old('status', $attendance->status->name ?? '') == 'Sick Leave' ? 'selected' : '' }}>Sakit</option>
                                    <option value="Leave" {{ old('status', $attendance->status->name ?? '') == 'Leave' ? 'selected' : '' }}>Tidak hadir</option>
                                    <option value="Late" {{ old('status', $attendance->status->name ?? '') == 'Late' ? 'selected' : '' }}>Telat</option>
                                    <option value="Leave Early" {{ old('status', $attendance->status->name ?? '') == 'Leave Early' ? 'selected' : '' }}>Pulang Lebih Awal</option>
                                    </select>
                                @errorFeedback('status')
                            </div>
                            <div class="mb-3">
                                <label for="note" class="form-label">Catatan</label>
                                <input type="text" class="form-control @error('note') is-invalid @enderror"
                                    id="note" name="note" step="0.01"
                                    value="{{ old('note', $attendance->note) }}">
                                @errorFeedback('note')
                            </div>
                            <div class="mb-3">
                                <label for="user_note" class="form-label">Catatan User</label>
                                <input type="text" class="form-control @error('user_note') is-invalid @enderror"
                                    id="user_note" name="user_note" step="0.01"
                                    value="{{ old('user_note', $attendance->user_note) }}">
                                @errorFeedback('user_note')
                            </div>
                            {{-- <input type="hidden" name="company_id" value="{{ $attendance->company_id ?? $attendance->employee->company_id }}"> --}}
                            <button type="submit" class="btn btn-warning">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
