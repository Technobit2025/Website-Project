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
                        <h5 class="mb-2">Data Akun</h5>
                        <div class="row mb-2">
                            <div class="col-md-3">Username</div>
                            <div class="col-md-9">: {{ $employee->user->username }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Email</div>
                            <div class="col-md-9">: {{ $employee->user->email }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Role</div>
                            <div class="col-md-9">: {{ $employee->user->role->name }}</div>
                        </div>

                        <h5 class="mt-4 mb-2">Data Pribadi</h5>
                        <div class="row mb-2">
                            <div class="col-md-3">Nama Lengkap</div>
                            <div class="col-md-9">: {{ $employee->fullname }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Nama Panggilan</div>
                            <div class="col-md-9">: {{ $employee->nickname }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">No. Telepon</div>
                            <div class="col-md-9">: {{ $employee->phone }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Kontak Darurat</div>
                            <div class="col-md-9">: {{ $employee->emergency_contact }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">No. Telepon Darurat</div>
                            <div class="col-md-9">: {{ $employee->emergency_phone }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Jenis Kelamin</div>
                            <div class="col-md-9">: {{ ucfirst($employee->gender) }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Tanggal Lahir</div>
                            <div class="col-md-9">: {{ $employee->birth_date }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Tempat Lahir</div>
                            <div class="col-md-9">: {{ $employee->birth_place }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Status Pernikahan</div>
                            <div class="col-md-9">: {{ $employee->marital_status }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Kewarganegaraan</div>
                            <div class="col-md-9">: {{ $employee->nationality }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Agama</div>
                            <div class="col-md-9">: {{ $employee->religion }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Golongan Darah</div>
                            <div class="col-md-9">: {{ $employee->blood_type }}</div>
                        </div>

                        <h5 class="mt-4 mb-2">Dokumen Legal</h5>
                        <div class="row mb-2">
                            <div class="col-md-3">No. KTP/Passport</div>
                            <div class="col-md-9">: {{ $employee->id_number }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">NPWP</div>
                            <div class="col-md-9">: {{ $employee->tax_number }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">BPJS Ketenagakerjaan</div>
                            <div class="col-md-9">: {{ $employee->social_security_number }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">BPJS Kesehatan</div>
                            <div class="col-md-9">: {{ $employee->health_insurance_number }}</div>
                        </div>

                        <h5 class="mt-4 mb-2">Alamat</h5>
                        <div class="row mb-2">
                            <div class="col-md-3">Alamat Lengkap</div>
                            <div class="col-md-9">: {{ $employee->address }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Kota</div>
                            <div class="col-md-9">: {{ $employee->city }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Provinsi</div>
                            <div class="col-md-9">: {{ $employee->province }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Kode Pos</div>
                            <div class="col-md-9">: {{ $employee->postal_code }}</div>
                        </div>

                        <h5 class="mt-4 mb-2">Informasi Pekerjaan</h5>
                        <div class="row mb-2">
                            <div class="col-md-3">Departemen</div>
                            <div class="col-md-9">: {{ $employee->department }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Jabatan</div>
                            <div class="col-md-9">: {{ $employee->position }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Status Kepegawaian</div>
                            <div class="col-md-9">: {{ ucfirst($employee->employment_status) }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Tanggal Bergabung</div>
                            <div class="col-md-9">: {{ $employee->hire_date }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Tanggal Berakhir Kontrak</div>
                            <div class="col-md-9">: {{ $employee->contract_end_date }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Gaji</div>
                            <div class="col-md-9">: {{ formatRupiah($employee->salary) }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Nama Bank</div>
                            <div class="col-md-9">: {{ $employee->bank_name }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">No. Rekening</div>
                            <div class="col-md-9">: {{ $employee->bank_account_number }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">Status</div>
                            <div class="col-md-9">: {{ $employee->active ? 'Aktif' : 'Tidak Aktif' }}</div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-3">
                                <a href="{{ route('humanresource.employee.edit', $employee->id) }}"
                                    class="btn btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    Ubah
                                </a>
                                <a href="{{ route('humanresource.employee.index') }}" class="btn btn-secondary">
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
