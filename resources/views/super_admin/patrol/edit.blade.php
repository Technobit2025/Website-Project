@extends('layouts.simple.master')

@section('title', 'Ubah Patroli')

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Ubah Patroli'])
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('superadmin.patrol.update', $patrol->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Patroli</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Nama</label>
                                <input type="text" class="form-control" value="{{ $patrol->employee->fullname }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="place" class="form-label">Tempat</label>
                                <input type="text" class="form-control" value="{{ $patrol->place->name }}" disabled>
                            </div>
                                <div class="mb-3">
                                    <label for="shift" class="form-label">Shift</label>
                                    <select class="form-control @error('shift') is-invalid @enderror" id="shift" 
                                        name="shift" style="cursor: pointer;" required >
                                        <option value="">Pilih shift</option>
                                        <option value="Pagi" {{ old('shift', $patrol->shift->name ?? '') == 'Pagi' ? 'selected' : '' }}>Pagi</option>
                                        <option value="Siang" {{ old('shift', $patrol->shift->name ?? '') == 'Siang' ? 'selected' : '' }}>Siang</option>
                                        <option value="Malam" {{ old('shift', $patrol->shift->name ?? '') == 'Malam' ? 'selected' : '' }}>Malam</option>
                                    </select>
                                    @errorFeedback('catatan')
                                </div>
                            <div class="mb-3">
                                <label for="catatan" class="form-label">Catatan</label>
                                <input type="text" class="form-control @error('catatan') is-invalid @enderror"
                                    id="catatan" name="catatan" step="0.01"
                                    value="{{ old('catatan', $patrol->catatan) }}">
                                @errorFeedback('catatan')
                            </div>
                            <button type="submit" class="btn btn-warning">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
