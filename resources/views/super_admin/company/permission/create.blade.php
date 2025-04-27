@extends('layouts.simple.master')

@section('title', 'Tambah Perusahaan')

@section('scripts')
    <script src="{{ asset('assets/js/common-avatar-change.js') }}"></script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Pembuatan Jadwal Kerja'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('superadmin.company.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Pembuatan Jadwal</h4>
                        </div>
                        <div class="card-body">
                            {{-- <div class="mb-3">
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <img id="output" src="https://fakeimg.pl/150x150/?text=Logo" alt="Logo Preview"
                                            class="img-fluid mb-2" style="max-height: 150px">
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <div class="input-group">
                                            <input type="file" class="form-control @error('logo') is-invalid @enderror"
                                                id="logo" name="logo" accept="image/*" onchange="loadFile(event)">
                                            @errorFeedback('logo')
                                        </div>

                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="mb-3">
                                <label for="name" class="form-label">Nama Karyawan</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}" required>
                                @errorFeedback('name')
                            </div> --}}
                            <div class="mb-3">
                                <label for="time-start" class="form-label">Start Time</label>
                                <input type="time" class="form-control @error('time-start') is-invalid @enderror"
                                    id="time-start" name="time-start" value="{{ old('time-start') }}" required>
                                @errorFeedback('time-start')
                            </div>
                            <div class="mb-3">
                                <label for="time-end" class="form-label">End Time</label>
                                <input type="time" class="form-control @error('time-end') is-invalid @enderror"
                                    id="time-end" name="time-end" value="{{ old('time-end') }}" required>
                                @errorFeedback('time-end')
                            </div>
                            {{-- <div class="mb-3">
                                <label for="phone" class="form-label">No. Telepon</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    id="phone" name="phone" value="{{ old('phone') }}">
                                @errorFeedback('phone')
                            </div>
                            <div class="mb-3">
                                <label for="website" class="form-label">Website</label>
                                <input type="text" class="form-control @error('website') is-invalid @enderror"
                                    id="website" name="website" value="{{ old('website') }}">
                                @errorFeedback('website')
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="3">{{ old('address') }}</textarea>
                                @errorFeedback('address')
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                    rows="3">{{ old('description') }}</textarea>
                                @errorFeedback('description')
                            </div> --}}
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
