@extends('layouts.simple.master')

@section('title', 'User Profile')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'User Profile'])
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="user-profile">
            <div class="row"><!-- user profile first-style start-->
                <div class="col-sm-12">
                    <div class="card hovercard text-center common-user-image">
                        <div class="cardheader">
                            <div class="user-image">
                                <div class="avatar">
                                    <div class="common-align">
                                        <div>
                                            <img id="output" src="{{ $user->photo }}" alt="Profile Image">
                                            <input type="file" accept="image/*" onchange="loadFile(event)">
                                            <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
                                        </div>
                                        <div class="user-designation"><a target="_blank"
                                                href="">{{ $user->name }}</a>
                                            <div class="desc">{{ $user->role->name }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="row scope-bottom-wrapper user-profile-wrapper">
                        <div class="col-xxl-3 user-xl-25 col-xl-4 box-col-4">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="sidebar-left-icons nav nav-pills" id="add-product-pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="account-tab" data-bs-toggle="pill"
                                                href="#account" role="tab" aria-controls="account" aria-selected="true">
                                                <div class="nav-rounded">
                                                    <div class="product-icons"><i class="fa-solid fa-user"></i></div>
                                                </div>
                                                <div class="product-tab-content">
                                                    <h6>Akun</h6>
                                                </div>
                                            </a>
                                        </li>
                                        @if ($user->role->code == 'human_resource' || $user->role->code == 'employee' || $user->role->code == 'security')
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-bs-toggle="pill" href="#profile"
                                                    role="tab" aria-controls="profile" aria-selected="false">
                                                    <div class="nav-rounded">
                                                        <div class="product-icons"><i class="fa-solid fa-gear"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-tab-content">
                                                        <h6>Profil {{ $user->role->name }}</h6>
                                                    </div>
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-9 user-xl-75 col-xl-8 box-col-8e">

                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content" id="add-product-pills-tabContent">
                                        <div class="tab-pane fade show active" id="account" role="tabpanel"
                                            aria-labelledby="account-tab">
                                            <form action="{{ route('profile.update') }}" method="POST">
                                                @csrf
                                                @method('PUT')

                                                <div class="notification">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>Akun</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group mb-3">
                                                                <label for="username">Username</label>
                                                                <input type="text" class="form-control" id="username"
                                                                    name="username" value="{{ $user->username }}">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="name">Nama</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    name="name" value="{{ $user->name }}">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="email">Email</label>
                                                                <input type="email" class="form-control" id="email"
                                                                    name="email" value="{{ $user->email }}">
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                                        </div>
                                                    </div>
                                                    <div class="card mt-3">
                                                        <div class="card-header">
                                                            <h5>Password</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="alert alert-info">
                                                                <p>Password harus terdiri dari 8 karakter atau lebih.</p>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="current_password">Password Lama</label>
                                                                <input type="password" class="form-control"
                                                                    id="current_password" name="current_password"
                                                                    value="{{ old('current_password') }}"
                                                                    placeholder="********">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="password">Password Baru</label>
                                                                <input type="password" class="form-control"
                                                                    id="password" name="password"
                                                                    value="{{ old('password') }}" placeholder="********">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="password_confirmation">Konfirmasi Password
                                                                    Baru</label>
                                                                <input type="password" class="form-control"
                                                                    id="password_confirmation"
                                                                    name="password_confirmation"
                                                                    value="{{ old('password_confirmation') }}"
                                                                    placeholder="********">
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        @if ($user->role->code == 'human_resource' || $user->role->code == 'employee' || $user->role->code == 'security')
                                            <div class="tab-pane fade" id="profile" role="tabpanel"
                                                aria-labelledby="profile-tab">
                                                <form action="{{ route('profile.update-employee') }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>Profil {{ $user->role->name }}</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">

                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="fullname">Nama Lengkap</label>
                                                                    <input type="text" class="form-control"
                                                                        id="fullname" name="fullname"
                                                                        value="{{ $user->employee->fullname }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="nickname">Nama Panggilan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nickname" name="nickname"
                                                                        value="{{ $user->employee->nickname }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="phone">Telepon</label>
                                                                    <input type="text" class="form-control"
                                                                        id="phone" name="phone"
                                                                        value="{{ $user->employee->phone }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="emergency_contact">Kontak Darurat</label>
                                                                    <input type="text" class="form-control"
                                                                        id="emergency_contact" name="emergency_contact"
                                                                        value="{{ $user->employee->emergency_contact }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="emergency_phone">Telepon Darurat</label>
                                                                    <input type="text" class="form-control"
                                                                        id="emergency_phone" name="emergency_phone"
                                                                        value="{{ $user->employee->emergency_phone }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="gender">Jenis Kelamin</label>
                                                                    <select class="form-control" id="gender"
                                                                        name="gender"
                                                                        value="{{ $user->employee->gender }}">
                                                                        <option value="male">Laki-laki</option>
                                                                        <option value="female">Perempuan</option>
                                                                        <option value="other">Lainnya</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="birth_date">Tanggal Lahir</label>
                                                                    <input type="date" class="form-control"
                                                                        id="birth_date" name="birth_date"
                                                                        value="{{ $user->employee->birth_date }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="birth_place">Tempat Lahir</label>
                                                                    <input type="text" class="form-control"
                                                                        id="birth_place" name="birth_place"
                                                                        value="{{ $user->employee->birth_place }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="marital_status">Status Perkawinan</label>
                                                                    <select class="form-control" id="marital_status"
                                                                        name="marital_status"
                                                                        value="{{ $user->employee->marital_status }}">
                                                                        <option value="single">Belum Menikah</option>
                                                                        <option value="married">Menikah</option>
                                                                        <option value="divorced">Cerai</option>
                                                                        <option value="widowed">Duda/Janda</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="nationality">Kewarganegaraan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nationality" name="nationality"
                                                                        value="{{ $user->employee->nationality }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="religion">Agama</label>
                                                                    <input type="text" class="form-control"
                                                                        id="religion" name="religion"
                                                                        value="{{ $user->employee->religion }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="blood_type">Golongan Darah</label>
                                                                    <input type="text" class="form-control"
                                                                        id="blood_type" name="blood_type"
                                                                        value="{{ $user->employee->blood_type }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="id_number">Nomor Identitas</label>
                                                                    <input type="text" class="form-control"
                                                                        id="id_number" name="id_number"
                                                                        value="{{ $user->employee->id_number }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="tax_number">Nomor NPWP</label>
                                                                    <input type="text" class="form-control"
                                                                        id="tax_number" name="tax_number"
                                                                        value="{{ $user->employee->tax_number }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="social_security_number">Nomor Jaminan
                                                                        Sosial</label>
                                                                    <input type="text" class="form-control"
                                                                        id="social_security_number"
                                                                        name="social_security_number"
                                                                        value="{{ $user->employee->social_security_number }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="health_insurance_number">Nomor Asuransi
                                                                        Kesehatan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="health_insurance_number"
                                                                        name="health_insurance_number"
                                                                        value="{{ $user->employee->health_insurance_number }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="address">Alamat</label>
                                                                    <input type="text" class="form-control"
                                                                        id="address" name="address"
                                                                        value="{{ $user->employee->address }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="city">Kota</label>
                                                                    <input type="text" class="form-control"
                                                                        id="city" name="city"
                                                                        value="{{ $user->employee->city }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="province">Provinsi</label>
                                                                    <input type="text" class="form-control"
                                                                        id="province" name="province"
                                                                        value="{{ $user->employee->province }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="postal_code">Kode Pos</label>
                                                                    <input type="text" class="form-control"
                                                                        id="postal_code" name="postal_code"
                                                                        value="{{ $user->employee->postal_code }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="department">Departemen</label>
                                                                    <input type="text" class="form-control"
                                                                        id="department" name="department"
                                                                        value="{{ $user->employee->department }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="position">Jabatan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="position" name="position"
                                                                        value="{{ $user->employee->position }}">
                                                                </div>

                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="bank_name">Nama Bank</label>
                                                                    <input type="text" class="form-control"
                                                                        id="bank_name" name="bank_name"
                                                                        value="{{ $user->employee->bank_name }}">
                                                                </div>
                                                                <div class="form-group col-12 col-lg-6 mb-3">
                                                                    <label for="bank_account_number">Nomor Rekening
                                                                        Bank</label>
                                                                    <input type="text" class="form-control"
                                                                        id="bank_account_number"
                                                                        name="bank_account_number"
                                                                        value="{{ $user->employee->bank_account_number }}">
                                                                </div>
                                                                <div class="form-group col-12 mt-3">
                                                                    <button class="btn btn-primary"
                                                                        type="submit">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- user profile menu end-->
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/counter/custom-counter1.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('assets/js/common-avatar-change.js') }}"></script>
@endsection
