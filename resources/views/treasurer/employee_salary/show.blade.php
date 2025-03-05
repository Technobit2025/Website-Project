@extends('layouts.simple.master')

@section('title', 'Detail Karyawan')

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Detail Karyawan'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Informasi Karyawan</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="mb-2">Data Karyawan</h5>
                        <div class="row mb-2">
                            <div class="col-md-3">Nama </div>
                            <div class="col-md-9">: {{ $employee->fullname }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Role </div>
                            <div class="col-md-9">: {{ $employee->user->role->name }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Gaji </div>
                            <div class="col-md-9">: {{ formatRupiah($employee->salary) }}</div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-3">
                                <a href="{{ route('treasurer.employeesalary.edit', $employee->id) }}"
                                    class="btn btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    Ubah
                                </a>
                                <a href="{{ route('treasurer.employeesalary.index') }}" class="btn btn-secondary">
                                    <i class="fa-solid fa-arrow-left"></i>
                                    Kembali
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
