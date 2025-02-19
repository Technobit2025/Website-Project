@extends('layouts.simple.master')

@section('title', 'Edit Profile')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Edit Profile</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">Edit Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <form action="{{ route('admin.user.update-profile') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="edit-profile">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">My Profile</h4>
                                <div class="card-options"><a class="card-options-collapse" href="#"
                                        data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                        class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                            class="fe fe-x"></i></a></div>
                            </div>
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="profile-title">
                                        <div class="d-flex">
                                                @php
                                                    $image = auth()->user()->getFirstMedia('image');
                                                @endphp

                                                @isset($image)
                                                    <img src="{{ $image->getUrl() }}" alt="Image" class="img-70 rounded-circle">
                                                @else
                                                    <img src="{{ asset('assets/images/user/user.png') }}" alt="Image" class="img-70 rounded-circle">
                                                @endisset

                                            <div class="flex-grow-1">
                                                <h4 class="mb-1">{{ ucfirst(auth()->user()->first_name) . ' ' . ucfirst(auth()->user()->last_name) }}</h4>
                                                <p>DESIGNER</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Image</label>
                                    <input class="form-control form-control-sm" type="file" name="image">
                                </div>
                                <div class="mb-3">
                                    <h6 class="form-label">Bio</h6>
                                    <textarea class="form-control" rows="5"  placeholder="Enter your bio" name="bio">{{ auth()->user()->bio }}</textarea>
                                    @error('bio')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email-Address</label>
                                    <input class="form-control" placeholder="your-email@domain.com" name="email"
                                        value="{{ auth()->user()->email }}">
                                    @error('email')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Enter Password"
                                        value="{{ auth()->user()->password }}">
                                    @error('password')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input class="form-control" type="password" name="confirm_password" placeholder="Enter Confirm Password"
                                        value="{{ auth()->user()->password }}">
                                    @error('confirm_password')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit Profile</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email address<span>*</span></label>
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
                                        <label class="form-label">First Name<span>*</span></label>
                                        <input class="form-control" type="text" placeholder="First Name"
                                        name="first_name" value="{{ ucfirst(auth()->user()?->first_name) }}">
                                        @error('first_name')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Last Name<span>*</span></label>
                                        <input class="form-control" type="text" placeholder="Last Name"
                                        name="last_name" value="{{ ucfirst(auth()->user()?->last_name) }}">
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
                                                <select class="select-2 form-control select-country-code" id="country_code"
                                                name="country_code" data-placeholder="">
                                                    @php
                                                        $default = old('country_code', $user->country_code ?? 1);
                                                    @endphp
                                                    @foreach (\App\Helpers\Helpers::getCountryCode() as $key => $option)
                                                        <option class="option" value="{{ $option->calling_code }}"
                                                            data-image="{{ asset('assets/images/flags/' . $option->flag) }}"
                                                            @if ($option->calling_code == $default) selected @endif
                                                            data-default="{{ $default }}">
                                                            {{ $option->calling_code }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-10 ps-0">
                                                <input class="form-control" type="number" name="phone"
                                                    value="{{ isset($user->phone) ? $user->phone : old('phone') }}" placeholder="Enter Phone">
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
                                        <select class="form-select" id="country" name="country_id" placeholder="Select Country">
                                            <option value="" selected disabled hidden>Select Country</option>
                                            @foreach ($countries as $key => $value)
                                                <option value="{{ $key }}"
                                                    {{ $user->country_id == $key ? 'selected' : '' }}>{{ $value }}
                                                </option>
                                            @endforeach
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
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
<script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/bookmark/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-validation/validation.js') }}"></script>
<script>
    $(document).ready(function() {
        var countryId = '{{ Auth::user()->country_id }}';
        $.ajax({
            url: "{{ route('admin.user.get-states') }}",
            type: "GET",
            data: {
                country_id: countryId,
                _token: '{{ csrf_token() }}'
            },
            dataType: 'json',
            success: function(result) {
                $.each(result.states, function(key, value) {
                    $("#state").append(
                        '<option value="' + value.id + '">' + value.name + '</option>');
                });
                $("#state").val('{{ Auth::user()->state_id }}');
            }
        });

        $('#country').on('change', function() {
            var idCountry = this.value;
            $("#state").html('');
            $.ajax({
                url: "{{ route('admin.user.get-states') }}",
                type: "GET",
                data: {
                    country_id: idCountry,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $.each(result.states, function(key, value) {
                        $("#state").append('<option value="' + value.id + '">' +
                            value.name + '</option>');
                    });
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#country_code').select2({
            templateResult: function(option) {
                if (option.element && option.element.dataset.image) {
                    return $('<span><img src="' + option.element.dataset.image + '" width="20" height="15" /> ' + option.text + '</span>');
                }
                return  option.text;
            }
        });
    });
</script>
@endsection
