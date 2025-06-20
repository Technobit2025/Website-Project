@extends('layouts.simple.master')

@section('title', 'Ubah Karyawan')

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Ubah Karyawan'])
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('superadmin.employee.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Akun Karyawan</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    id="username" name="username" value="{{ old('username', $employee->user->username) }}"
                                    required>
                                @errorFeedback('username')
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name', $employee->user->name) }}" required>
                                @errorFeedback('name')
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email', $employee->user->email) }}"
                                    required>
                                @errorFeedback('email')
                            </div>
                            <div class="mb-3">
                                <label for="company" class="form-label">Perusahaan</label>
                                <select class="form-control @error('company') is-invalid @enderror" id="company"
                                    name="company" style="cursor: pointer;" required>
                                    <option value="">Pilih Perusahaan</option>
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}"
                                            {{ old('company', $employee->company_id) == $company->id ? 'selected' : '' }}>
                                            {{ $company->name }}</option>
                                    @endforeach
                                </select>
                                @errorFeedback('role_id')
                            </div>
                            <div class="mb-3">
                                <label for="role_id" class="form-label">Role</label>
                                <select class="form-control @error('role_id') is-invalid @enderror" id="role_id"
                                    name="role_id" style="cursor: pointer;" required>
                                    <option value="">Pilih Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}"
                                            {{ old('role_id', $employee->user->role->id) == $role->id ? 'selected' : '' }}>
                                            {{ $role->name }}</option>
                                    @endforeach
                                </select>
                                @errorFeedback('role_id')
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password">
                                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah password</small>
                                @errorFeedback('password')
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                <input type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    id="password_confirmation" name="password_confirmation">
                                @errorFeedback('password_confirmation')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Karyawan</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control @error('fullname') is-invalid @enderror"
                                    id="fullname" name="fullname" value="{{ old('fullname', $employee->fullname) }}"
                                    required>
                                @errorFeedback('fullname')
                            </div>
                            <div class="mb-3">
                                <label for="nickname" class="form-label">Nama Panggilan</label>
                                <input type="text" class="form-control @error('nickname') is-invalid @enderror"
                                    id="nickname" name="nickname" value="{{ old('nickname', $employee->nickname) }}">
                                @errorFeedback('nickname')
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Telepon</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    id="phone" name="phone" value="{{ old('phone', $employee->phone) }}">
                                @errorFeedback('phone')
                            </div>
                            <div class="mb-3">
                                <label for="emergency_contact" class="form-label">Kontak Darurat</label>
                                <input type="text" class="form-control @error('emergency_contact') is-invalid @enderror"
                                    id="emergency_contact" name="emergency_contact"
                                    value="{{ old('emergency_contact', $employee->emergency_contact) }}">
                                @errorFeedback('emergency_contact')
                            </div>
                            <div class="mb-3">
                                <label for="emergency_phone" class="form-label">Telepon Darurat</label>
                                <input type="text" class="form-control @error('emergency_phone') is-invalid @enderror"
                                    id="emergency_phone" name="emergency_phone"
                                    value="{{ old('emergency_phone', $employee->emergency_phone) }}">
                                @errorFeedback('emergency_phone')
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                <select class="form-control @error('gender') is-invalid @enderror" id="gender"
                                    name="gender" required>
                                    <option value="male"
                                        {{ old('gender', $employee->gender) == 'male' ? 'selected' : '' }}>Laki-laki
                                    </option>
                                    <option value="female"
                                        {{ old('gender', $employee->gender) == 'female' ? 'selected' : '' }}>Perempuan
                                    </option>
                                </select>
                                @errorFeedback('gender')
                            </div>
                            <div class="mb-3">
                                <label for="birth_date" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('birth_date') is-invalid @enderror"
                                    id="birth_date" name="birth_date"
                                    value="{{ old('birth_date', $employee->birth_date) }}" required>
                                @errorFeedback('birth_date')
                            </div>
                            <div class="mb-3">
                                <label for="birth_place" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control @error('birth_place') is-invalid @enderror"
                                    id="birth_place" name="birth_place"
                                    value="{{ old('birth_place', $employee->birth_place) }}">
                                @errorFeedback('birth_place')
                            </div>
                            <div class="mb-3">
                                <label for="marital_status" class="form-label">Status Pernikahan</label>
                                <input type="text" class="form-control @error('marital_status') is-invalid @enderror"
                                    id="marital_status" name="marital_status"
                                    value="{{ old('marital_status', $employee->marital_status) }}">
                                @errorFeedback('marital_status')
                            </div>
                            <div class="mb-3">
                                <label for="nationality" class="form-label">Kewarganegaraan</label>
                                <input type="text" class="form-control @error('nationality') is-invalid @enderror"
                                    id="nationality" name="nationality"
                                    value="{{ old('nationality', $employee->nationality) }}">
                                @errorFeedback('nationality')
                            </div>
                            <div class="mb-3">
                                <label for="religion" class="form-label">Agama</label>
                                <input type="text" class="form-control @error('religion') is-invalid @enderror"
                                    id="religion" name="religion" value="{{ old('religion', $employee->religion) }}">
                                @errorFeedback('religion')
                            </div>
                            <div class="mb-3">
                                <label for="blood_type" class="form-label">Golongan Darah</label>
                                <input type="text" class="form-control @error('blood_type') is-invalid @enderror"
                                    id="blood_type" name="blood_type"
                                    value="{{ old('blood_type', $employee->blood_type) }}">
                                @errorFeedback('blood_type')
                            </div>
                            <div class="mb-3">
                                <label for="id_number" class="form-label">Nomor KTP</label>
                                <input type="text" class="form-control @error('id_number') is-invalid @enderror"
                                    id="id_number" name="id_number" value="{{ old('id_number', $employee->id_number) }}"
                                    required>
                                @errorFeedback('id_number')
                            </div>
                            <div class="mb-3">
                                <label for="tax_number" class="form-label">Nomor NPWP</label>
                                <input type="text" class="form-control @error('tax_number') is-invalid @enderror"
                                    id="tax_number" name="tax_number"
                                    value="{{ old('tax_number', $employee->tax_number) }}">
                                @errorFeedback('tax_number')
                            </div>
                            <div class="mb-3">
                                <label for="social_security_number" class="form-label">Nomor BPJS Ketenagakerjaan</label>
                                <input type="text"
                                    class="form-control @error('social_security_number') is-invalid @enderror"
                                    id="social_security_number" name="social_security_number"
                                    value="{{ old('social_security_number', $employee->social_security_number) }}">
                                @errorFeedback('social_security_number')
                            </div>
                            <div class="mb-3">
                                <label for="health_insurance_number" class="form-label">Nomor BPJS Kesehatan</label>
                                <input type="text"
                                    class="form-control @error('health_insurance_number') is-invalid @enderror"
                                    id="health_insurance_number" name="health_insurance_number"
                                    value="{{ old('health_insurance_number', $employee->health_insurance_number) }}">
                                @errorFeedback('health_insurance_number')
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address">{{ old('address', $employee->address) }}</textarea>
                                @errorFeedback('address')
                            </div>
                            <div class="mb-3">
                                <label for="city" class="form-label">Kota</label>
                                <input type="text" class="form-control @error('city') is-invalid @enderror"
                                    id="city" name="city" value="{{ old('city', $employee->city) }}">
                                @errorFeedback('city')
                            </div>
                            <div class="mb-3">
                                <label for="province" class="form-label">Provinsi</label>
                                <input type="text" class="form-control @error('province') is-invalid @enderror"
                                    id="province" name="province" value="{{ old('province', $employee->province) }}">
                                @errorFeedback('province')
                            </div>
                            <div class="mb-3">
                                <label for="postal_code" class="form-label">Kode Pos</label>
                                <input type="text" class="form-control @error('postal_code') is-invalid @enderror"
                                    id="postal_code" name="postal_code"
                                    value="{{ old('postal_code', $employee->postal_code) }}">
                                @errorFeedback('postal_code')
                            </div>
                            <div class="mb-3">
                                <label for="department" class="form-label">Departemen</label>
                                <input type="text" class="form-control @error('department') is-invalid @enderror"
                                    id="department" name="department"
                                    value="{{ old('department', $employee->department) }}">
                                @errorFeedback('department')
                            </div>
                            <div class="mb-3">
                                <label for="position" class="form-label">Jabatan</label>
                                <input type="text" class="form-control @error('position') is-invalid @enderror"
                                    id="position" name="position" value="{{ old('position', $employee->position) }}">
                                @errorFeedback('position')
                            </div>
                            <div class="mb-3">
                                <label for="employment_status" class="form-label">Status Kepegawaian</label>
                                <select class="form-control @error('employment_status') is-invalid @enderror"
                                    id="employment_status" name="employment_status" required>
                                    <option value="permanent"
                                        {{ old('employment_status', $employee->employment_status) == 'permanent' ? 'selected' : '' }}>
                                        Tetap</option>
                                    <option value="contract"
                                        {{ old('employment_status', $employee->employment_status) == 'contract' ? 'selected' : '' }}>
                                        Kontrak</option>
                                    <option value="internship"
                                        {{ old('employment_status', $employee->employment_status) == 'internship' ? 'selected' : '' }}>
                                        Magang</option>
                                    <option value="freelance"
                                        {{ old('employment_status', $employee->employment_status) == 'freelance' ? 'selected' : '' }}>
                                        Freelance</option>
                                </select>
                                @errorFeedback('employment_status')
                            </div>
                            <div class="mb-3">
                                <label for="hire_date" class="form-label">Tanggal Mulai Kerja</label>
                                <input type="date" class="form-control @error('hire_date') is-invalid @enderror"
                                    id="hire_date" name="hire_date" value="{{ old('hire_date', $employee->hire_date) }}"
                                    required>
                                @errorFeedback('hire_date')
                            </div>
                            <div class="mb-3">
                                <label for="contract_end_date" class="form-label">Tanggal Berakhir Kontrak</label>
                                <input type="date"
                                    class="form-control @error('contract_end_date') is-invalid @enderror"
                                    id="contract_end_date" name="contract_end_date"
                                    value="{{ old('contract_end_date', $employee->contract_end_date) }}">
                                @errorFeedback('contract_end_date')
                            </div>
                            <div class="mb-3">
                                <label for="bank_name" class="form-label">Nama Bank</label>
                                <input type="text" class="form-control @error('bank_name') is-invalid @enderror"
                                    id="bank_name" name="bank_name"
                                    value="{{ old('bank_name', $employee->bank_name) }}">
                                @errorFeedback('bank_name')
                            </div>
                            <div class="mb-3">
                                <label for="bank_account_number" class="form-label">Nomor Rekening Bank</label>
                                <input type="text"
                                    class="form-control @error('bank_account_number') is-invalid @enderror"
                                    id="bank_account_number" name="bank_account_number"
                                    value="{{ old('bank_account_number', $employee->bank_account_number) }}">
                                @errorFeedback('bank_account_number')
                            </div>
                            <div class="mb-3">
                                <label for="active" class="form-label">Aktif</label>
                                <select class="form-control @error('active') is-invalid @enderror" id="active"
                                    name="active">
                                    <option value="1"
                                        {{ old('active', $employee->active) == '1' ? 'selected' : '' }}>Ya</option>
                                    <option value="0"
                                        {{ old('active', $employee->active) == '0' ? 'selected' : '' }}>Tidak</option>
                                </select>
                                @errorFeedback('active')
                            </div>
                            <button type="submit" class="btn btn-warning">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
