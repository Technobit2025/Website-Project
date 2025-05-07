@extends('layouts.simple.master')

@section('title', 'Detail Perusahaan')

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Detail Perusahaan'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Informasi Perusahaan</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="mb-2">Data Perusahaan</h5>
                        @if ($company->logo)
                            <img src="{{ $company->logo }}" alt="{{ $company->name }}"
                                style="height: 150px; margin-bottom: 15px;">
                        @endif
                        <div class="row mb-2">
                            <div class="col-md-3">Nama Perusahaan</div>
                            <div class="col-md-9">: {{ $company->name ?? '-' }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Email</div>
                            <div class="col-md-9">: {{ $company->email ?? '-' }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">No. Telepon</div>
                            <div class="col-md-9">: {{ $company->phone ?? '-' }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Website</div>
                            <div class="col-md-9">: {{ $company->website ?? '-' }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Alamat</div>
                            <div class="col-md-9">: {{ $company->address ?? '-' }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Deskripsi</div>
                            <div class="col-md-9">: {{ $company->description ?? '-' }}</div>
                        </div>
                        <div class="d-flex gap-2 mt-5">
                            <a href="{{ route('danru.company.index') }}" class="btn btn-secondary">
                                <i class="fa-solid fa-arrow-left"></i>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection