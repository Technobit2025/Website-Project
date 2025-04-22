@extends('layouts.simple.master')

@section('title', 'Edit Jadwal Kegiatan')

@section('scripts')
    <script src="{{ asset('assets/js/common-avatar-change.js') }}"></script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Edit Jadwal Kegiatan'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('superadmin.company.presence.update', $companyPresence->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Jadwal</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="information" class="form-label">Informasi Jadwal</label>
                                <input type="text" class="form-control @error('information') is-invalid @enderror"
                                    id="information" name="information" value="{{ old('information', $companyPresence->information) }}" required>
                                @errorFeedback('information')
                            </div>
                            <div class="mb-3">
                                <label for="day" class="form-label">Hari</label>
                                <select class="form-select @error('day') is-invalid @enderror" id="day" name="day" required>
                                    <option value="">-- Pilih Hari --</option>
                                    <option value="Monday" {{ old('day', $companyPresence->day) == 'Monday' ? 'selected' : '' }}>Senin</option>
                                    <option value="Tuesday" {{ old('day', $companyPresence->day) == 'Tuesday' ? 'selected' : '' }}>Selasa</option>
                                    <option value="Wednesday" {{ old('day', $companyPresence->day) == 'Wednesday' ? 'selected' : '' }}>Rabu</option>
                                    <option value="Thursday" {{ old('day', $companyPresence->day) == 'Thursday' ? 'selected' : '' }}>Kamis</option>
                                    <option value="Friday" {{ old('day', $companyPresence->day) == 'Friday' ? 'selected' : '' }}>Jumat</option>
                                    <option value="Saturday" {{ old('day', $companyPresence->day) == 'Saturday' ? 'selected' : '' }}>Sabtu</option>
                                    <option value="Sunday" {{ old('day', $companyPresence->day) == 'Sunday' ? 'selected' : '' }}>Minggu</option>
                                </select>
                                @errorFeedback('day')
                            </div>
                            
                            <div class="mb-3">
                                <label for="start_time" class="form-label">Waktu Mulai</label>
                                <input type="time" class="form-control @error('start_time') is-invalid @enderror"
                                    id="start_time" name="start_time" value="{{ old('start_time', $companyPresence->start_time) }}" required>
                                @errorFeedback('start_time')
                            </div>
                            
                            <div class="mb-3">
                                <label for="start_end" class="form-label">Waktu Selesai</label>
                                <input type="time" class="form-control @error('start_end') is-invalid @enderror"
                                    id="start_end" name="start_end" value="{{ old('start_end', $companyPresence->start_end) }}" required>
                                @errorFeedback('start_end')
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa-solid fa-save"></i>
                                    Simpan Perubahan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection