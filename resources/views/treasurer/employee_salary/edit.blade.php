@extends('layouts.simple.master')

@section('title', 'Ubah Karyawan')

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Ubah Karyawan'])
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('treasurer.employeesalary.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
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
                                <input type="text" class="form-control" value="{{ $employee->user->role->name }}" disabled>
                            </div>

                            <div class="mb-3">
                                <label for="salary" class="form-label">Gaji</label>
                                <input type="number" class="form-control @error('salary') is-invalid @enderror"
                                    id="salary" name="salary" step="0.01"
                                    value="{{ old('salary', $employee->salary) }}">
                                @errorFeedback('salary')
                            </div>
                            <button type="submit" class="btn btn-warning">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
