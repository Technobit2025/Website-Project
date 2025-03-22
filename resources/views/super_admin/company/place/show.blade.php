@extends('layouts.simple.master')

@section('title', 'Detail Lokasi Perusahaan')

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Detail Lokasi Perusahaan'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Informasi Lokasi</h4>
                    </div>
                    <div class="card-body">
                        <div class="">
                            {{ generateQrCode($companyPlace->code) }}
                        </div>
                        <h5 class="mb-2">Data Lokasi</h5>
                        <div class="row mb-2">
                            <div class="col-md-3">Nama Lokasi</div>
                            <div class="col-md-9">: {{ $companyPlace->name ?? '-' }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Alamat</div>
                            <div class="col-md-9">: {{ $companyPlace->address ?? '-' }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Latitude</div>
                            <div class="col-md-9">: {{ $companyPlace->latitude ?? '-' }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Longitude</div>
                            <div class="col-md-9">: {{ $companyPlace->longitude ?? '-' }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Deskripsi</div>
                            <div class="col-md-9">: {{ $companyPlace->description ?? '-' }}</div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-3">
                                <a href="{{ route('superadmin.company.place.index', $companyPlace->company_id) }}"
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
