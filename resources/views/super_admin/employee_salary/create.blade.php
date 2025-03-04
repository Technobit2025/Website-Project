@extends('layouts.simple.master')

@section('title', 'Tentukan Gaji Karyawan')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     $('.select2').select2();
        // });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Tentukan Gaji Karyawan'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('superadmin.employeesalary.store', $employee->id) }}" method="POST">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Karyawan</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" value="{{ $employee->fullname }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <input type="text" class="form-control" value="{{ $employee->user->role->name }}"
                                    disabled>
                            </div>

                            <div class="mb-3">
                                <label for="salary" class="form-label">Gaji</label>
                                <input type="number" class="form-control @error('salary') is-invalid @enderror"
                                    id="salary" name="salary" step="0.01" value="{{ old('salary') }}">
                                @errorFeedback('salary')
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
