@extends('layouts.simple.master')

@section('title', 'Presensi')

@section('scripts')
    <script src="{{ asset('assets/js/common-avatar-change.js') }}"></script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Form Presensi'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('presence.store', $employee->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Presensi</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="kegiatan" class="form-label">Presensi Kegiatan</label>
                                <select class="form-select @error('kegiatan') is-invalid @enderror" id="kegiatan" name="kegiatan" required onchange="togglePresensiButton()">
                                    <option value="">-- Pilih Jadwal Presensi --</option>
                                    <option value="Presensi Kedatangan" {{ old('kegiatan') == 'Presensi Kedatangan' ? 'selected' : '' }}>Presensi Kedatangan</option>
                                    <option value="Presensi Kepulangan" {{ old('kegiatan') == 'Presensi Kepulangan' ? 'selected' : '' }}>Presensi Kepulangan</option>
                                </select>
                                @error('kegiatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <button type="submit" id="btnPresensi" class="btn btn-primary">
                                    <i class="fa-solid fa-save"></i>
                                    Presensi
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    const sudahPresensiKedatangan = @json($sudahPresensiKedatangan);
    const sudahPresensiKepulangan = @json($sudahPresensiKepulangan);

    function togglePresensiButton() {
        const kegiatan = document.getElementById('kegiatan').value;
        const btn = document.getElementById('btnPresensi');

        if (kegiatan === 'Presensi Kedatangan') {
            btn.disabled = sudahPresensiKedatangan;
        } else if (kegiatan === 'Presensi Kepulangan') {
            btn.disabled = sudahPresensiKepulangan;
        } else {
            btn.disabled = true;
        }
    }

    window.onload = function () {
        togglePresensiButton();
    };
</script>
@endsection
