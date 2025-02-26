@extends('layouts.simple.master')

@section('title', 'Profile')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('scripts')

@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Profile'])
    </div>
    <form action="">
        <div class="container-fluid">
            <div class="edit-profile">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Profileku</h4>
                                <div class="card-options"><a class="card-options-collapse" href="#"
                                        data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                        class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                            class="fe fe-x"></i></a></div>
                            </div>
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="profile-title">
                                        <div class="d-flex">
                                            <img src="{{ auth()->user()->photo }}" alt="Image"
                                                class="img-70 rounded-circle">
                                            <div class="flex-grow-1">
                                                <h4 class="mb-1">
                                                    {{ ucfirst(auth()->user()->name) }}
                                                </h4>
                                                <p>{{ auth()->user()->role->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Image</label>
                                    <input class="form-control form-control-sm" type="file" name="image">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input class="form-control" placeholder="your-email@domain.com" name="email"
                                        value="{{ auth()->user()->email }}">
                                    @errorFeedback('email')
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Old Password</label>
                                    <input class="form-control" type="password" name="old_password"
                                        placeholder="Enter Password" value="">
                                    @errorFeedback('old_password')
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Enter Password"
                                        value="">
                                    @errorFeedback('password')
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm New Password</label>
                                    <input class="form-control" type="password" name="confirm_password"
                                        placeholder="Enter Confirm Password" value="">
                                    @errorFeedback('confirm_password')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit Profil</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control" type="email" placeholder="Email" name="email"
                                            value="{{ auth()->user()?->email }}">
                                        @error('email')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Full Name</label>
                                        <input class="form-control" type="text" placeholder="Full Name" name="fullname"
                                            value="{{ ucfirst(auth()->user()?->name) }}">
                                        @errorFeedback('fullname')
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Last Name<span>*</span></label>
                                        <input class="form-control" type="text" placeholder="Last Name" name="last_name"
                                            value="{{ ucfirst(auth()->user()?->last_name) }}">
                                        @error('last_name')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Postal Code</label>
                                        <input class="form-control" type="number" placeholder="ZIP Code"
                                            name="postal_code" value="{{ auth()->user()?->postal_code }}">
                                        @error('postal_code')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input class="form-control" type="text" placeholder="Home Address"
                                            name="address" value="{{ auth()->user()?->address }}">
                                        @error('address')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label class="form-label">Phone<span>*</span></label>
                                        <div class="row phone-select-edit">
                                            <div class="col-2 pe-0">
                                                <select class="select-2 form-control select-country-code"
                                                    id="country_code" name="country_code" data-placeholder="">
                                                    {{-- @php
                                                    $default = old('country_code', $user->country_code ?? 1);
                                                @endphp
                                                @foreach (\App\Helpers\Helpers::getCountryCode() as $key => $option)
                                                    <option class="option" value="{{ $option->calling_code }}"
                                                        data-image="{{ asset('assets/images/flags/' . $option->flag) }}"
                                                        @if ($option->calling_code == $default) selected @endif
                                                        data-default="{{ $default }}">
                                                        {{ $option->calling_code }}
                                                    </option>
                                                @endforeach --}}
                                                </select>
                                            </div>
                                            <div class="col-10 ps-0">
                                                <input class="form-control" type="number" name="phone"
                                                    value="{{ isset($user->phone) ? $user->phone : old('phone') }}"
                                                    placeholder="Enter Phone">
                                                @error('phone')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">Country</label>
                                        <select class="form-select" id="country" name="country_id"
                                            placeholder="Select Country">
                                            <option value="" selected disabled hidden>Select Country</option>
                                            {{-- @foreach ($countries as $key => $value)
                                            <option value="{{ $key }}"
                                                {{ $user->country_id == $key ? 'selected' : '' }}>{{ $value }}
                                            </option>
                                        @endforeach --}}
                                        </select>
                                        @error('country_id')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">State</label>
                                        <select class="form-select" id="state" name="state_id">
                                            <option value="" selected disabled hidden>Select State</option>
                                        </select>
                                        @error('state_id')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input class="form-control" type="text" placeholder="City" name="location"
                                            value="{{ auth()->user()?->location }}">
                                        @error('location')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <label class="form-label">About Me</label>
                                        <textarea class="form-control" rows="4" placeholder="Enter your about" name="about_me">{{ auth()->user()->about_me }}</textarea>
                                        @error('about_me')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Update Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
