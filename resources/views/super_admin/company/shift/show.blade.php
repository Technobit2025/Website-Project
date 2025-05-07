@extends('layouts.simple.master')

@section('title', 'Detail Shift Perusahaan')

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Detail Shift Perusahaan'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Informasi Shift</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="mb-2">Data Shift</h5>
                        <div class="row mb-2">
                            <div class="col-md-3">Nama Shift</div>
                            <div class="col-md-9">: {{ $companyShift->name ?? '-' }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Jam Mulai</div>
                            <div class="col-md-9">: {{ $companyShift->start_time ?? '-' }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Jam Selesai</div>
                            <div class="col-md-9">: {{ $companyShift->end_time ?? '-' }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Batas Presensi</div>
                            <div class="col-md-9">: {{ $companyShift->late_time ?? '-' }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Jam Diperbolehkan checkout</div>
                            <div class="col-md-9">: {{ $companyShift->checkout_time ?? '-' }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Warna</div>
                            <div class="col-md-9">
                                <div
                                    style="width: 20px; height: 20px; background-color: {{ $companyShift->color ?? '#000' }};">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-3">
                                <a href="{{ route('superadmin.company.shift.index', $companyShift->company_id) }}"
                                    class="btn btn-secondary">
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
