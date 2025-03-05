@extends('layouts.simple.master')

@section('title', 'Human Resource Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    @php
        $user = Auth::user();
    @endphp

    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-12 col-lg-6 box-col-6">
                <div class="card profile-box">
                    <div class="card-body">
                        <div class="d-flex media-wrapper justify-content-between">
                            <div class="flex-grow-1">
                                <div class="greeting-user">
                                    <h2 class="f-w-600">Selamat Datang <br> {{ $user->name }}!</h2>
                                    <p>Anda Login Sebagai {{ $user->role->name }}</p>
                                    <div class="whatsnew-btn"><a class="btn btn-outline-white"
                                            href="{{ route('profile.index') }}">
                                            Profile</a></div>
                                </div>
                            </div>
                            <div>
                                <div class="clockbox"><svg id="clock" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 600 600">
                                        <g id="face">
                                            <circle class="circle" cx="300" cy="300" r="253.9"></circle>
                                            <path class="hour-marks"
                                                d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6">
                                            </path>
                                            <circle class="mid-circle" cx="300" cy="300" r="16.2"></circle>
                                        </g>
                                        <g id="hour">
                                            <path class="hour-hand" d="M300.5 298V142"></path>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                                        </g>
                                        <g id="minute">
                                            <path class="minute-hand" d="M300.5 298V67"> </path>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                                        </g>
                                        <g id="second">
                                            <path class="second-hand" d="M300.5 350V55"></path>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9">
                                            </circle>
                                        </g>
                                    </svg></div>
                                <div class="badge f-10 p-0" id="txt"></div>
                            </div>
                        </div>
                        <div class="cartoon"><img class="img-fluid"
                                src="{{asset('assets/images/dashboard/cartoon.png') }}" style="width: 220px; height: 220px;"
                                alt="vector women with leptop">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 box-col-6">
                <div class="row">
                    <!-- Total Employees Widget -->
                    <div class="col-6">
                        <div class="card widget-1">
                            <div class="card-body">
                                <div class="widget-content">
                                    <div class="widget-round primary">
                                        <div class="bg-round">
                                            <i class="fa fa-users fa-xl" style="color: var(--theme-default)"></i>
                                            <svg class="half-circle svg-fill">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#halfcircle') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <h4> <span class="counter"
                                                data-target="{{ $employees->count() }}">{{ $employees->count() }}</span>
                                        </h4><span class="f-light">Total Karyawan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Active Employees Widget -->
                    <div class="col-6">
                        <div class="card widget-1">
                            <div class="card-body">
                                <div class="widget-content">
                                    <div class="widget-round success">
                                        <div class="bg-round">
                                            <i class="fa fa-check-circle text-success fa-xl"></i>
                                            <svg class="half-circle svg-fill">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#halfcircle') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <h4><span class="counter">{{ $employees->where('active', true)->count() }}</span>
                                        </h4>
                                        <span class="f-light">Karyawan Aktif</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Inactive Employees Widget -->
                    <div class="col-6">
                        <div class="card widget-1">
                            <div class="card-body">
                                <div class="widget-content">
                                    <div class="widget-round warning">
                                        <div class="bg-round">
                                            <i class="fa fa-minus-circle text-warning fa-xl"></i>
                                            <svg class="half-circle svg-fill">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#halfcircle') }}"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <h4><span class="counter">{{ $employees->where('active', false)->count() }}</span>
                                        </h4>
                                        <span class="f-light">Karyawan Tidak Aktif</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script>
        const hourHand = document.getElementById('hour');
        const minuteHand = document.getElementById('minute');
        const secondHand = document.getElementById('second');
        const timeElement = document.getElementById('txt');

        function updateTime() {
            const now = new Date();
            const hours = now.getHours() % 12;
            const minutes = now.getMinutes();
            const seconds = now.getSeconds();

            // Update clock hands
            hourHand.style.transform = `rotate(${hours * 30 + minutes * 0.5}deg)`;
            minuteHand.style.transform = `rotate(${minutes * 6 + seconds * 0.1}deg)`;
            secondHand.style.transform = `rotate(${seconds * 6}deg)`;

            // Update digital time
            timeElement.textContent = now.toLocaleTimeString('en-US', {
                hour: 'numeric',
                minute: '2-digit',
                // second: '2-digit'
            });
        }

        // Update every second
        setInterval(updateTime, 1000);
        updateTime(); // Initial update
    </script>
@endsection
