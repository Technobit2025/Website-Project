@extends('layouts.simple.master')

@section('title', 'Ubah Shift')

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Ubah Shift'])
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('superadmin.company.shift.update', $companyShift->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ubah Shift</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Shift</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name', $companyShift->name) }}" required>
                                @errorFeedback('name')
                            </div>
                            <div class="mb-3">
                                <label for="start_time" class="form-label">Jam Mulai</label>
                                <input type="time" class="form-control @error('start_time') is-invalid @enderror"
                                    id="start_time" name="start_time"
                                    value="{{ old('start_time', $companyShift->start_time) }}" required>
                                @errorFeedback('start_time')
                            </div>
                            <div class="mb-3">
                                <label for="end_time" class="form-label">Jam Selesai</label>
                                <input type="time" class="form-control @error('end_time') is-invalid @enderror"
                                    id="end_time" name="end_time" value="{{ old('end_time', $companyShift->end_time) }}"
                                    required>
                                @errorFeedback('end_time')
                            </div>
                            <div class="mb-3">
                                <label for="checkout_time" class="form-label">Jam Diperbolehkan checkout</label>
                                <input type="time" class="form-control @error('checkout_time') is-invalid @enderror"
                                    id="checkout_time" name="checkout_time"
                                    value="{{ old('checkout_time', $companyShift->checkout_time) }}" required>
                                @errorFeedback('checkout_time')
                            </div>
                            <div class="mb-3">
                                <label for="late_time" class="form-label">Batas Jam Presensi</label>
                                <input type="time" class="form-control @error('late_time') is-invalid @enderror"
                                    id="late_time" name="late_time" value="{{ old('late_time', $companyShift->late_time) }}"
                                    required>
                                @errorFeedback('late_time')
                            </div>
                            <div class="mb-3">
                                <label for="color" class="form-label">Warna</label>
                                <input type="color"
                                    class="form-control form-control-color @error('color') is-invalid @enderror"
                                    id="color" name="color" value="{{ old('color', $companyShift->color) }}" required>
                                @errorFeedback('color')
                            </div>
                            <input type="hidden" name="company_id" value="{{ $companyShift->company_id }}">
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-warning"><i class="fa fa-save"></i> Simpan</button>
                                <a href="{{ url()->previous() }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                                    Kembali</a>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
