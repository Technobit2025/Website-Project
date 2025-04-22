@extends('layouts.simple.master')

@section('title', 'Tambah Jadwal Kegiatan')

@section('scripts')
    <script src="{{ asset('assets/js/common-avatar-change.js') }}"></script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Tambah Jadwal Kegiatan'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('superadmin.company.presence.store', $company->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Jadwal</h4>
                        </div>
                        <div class="card-body">
                        
                            <div class="mb-3">
                                <label for="information" class="form-label">Informasi Jadwal</label>
                                <input type="text" class="form-control @error('information') is-invalid @enderror"
                                    id="information" name="information" value="{{ old('information') }}" required>
                                @errorFeedback('information')
                            </div>
                            {{-- <input type="hidden" name="company_id" value="{{ $company->id }}"> --}}
                            <div class="mb-3">
                                <label for="day" class="form-label">Hari</label>
                                <select class="form-select  @error('day') is-invalid @enderror" id="day" name="day" required>
                                    <option value="">-- Pilih Hari --</option>
                                    <option value="Monday" {{ old('day') == 'Monday' ? 'selected' : '' }}>Senin</option>
                                    <option value="Tuesday" {{ old('day') == 'Tuesday' ? 'selected' : '' }}>Selasa</option>
                                    <option value="Wednesday" {{ old('day') == 'Wednesday' ? 'selected' : '' }}>Rabu</option>
                                    <option value="Thursday" {{ old('day') == 'Thursday' ? 'selected' : '' }}>Kamis</option>
                                    <option value="Friday" {{ old('day') == 'Friday' ? 'selected' : '' }}>Jumat</option>
                                    <option value="Saturday" {{ old('day') == 'Saturday' ? 'selected' : '' }}>Sabtu</option>
                                    <option value="Sunday" {{ old('day') == 'Sunday' ? 'selected' : '' }}>Minggu</option>
                                </select>
                                @errorFeedback('day')
                            </div>
                            <div class="mb-3">
                                <label for="start-time" class="form-label">Waktu Mulai</label>
                                <input type="time" class="form-control @error('start-time') is-invalid @enderror"
                                    id="start-time" name="start-time" value="{{ old('start-time') }}" required>
                                @errorFeedback('start-time')
                            </div>
                            <div class="mb-3">
                                <label for="start-end" class="form-label">Waktu Selesai</label>
                                <input type="time" class="form-control @error('start-end') is-invalid @enderror"
                                    id="start-end" name="start-end" value="{{ old('start-end') }}" required>
                                @errorFeedback('start-end')
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa-solid fa-save"></i>
                                    Simpan
                                </button>
                            </div>
                        
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
