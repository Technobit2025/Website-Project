@extends('layouts.comingsoon_layouts.master')

@section('title', 'Coming Simple')

@section('css')
@endsection

@section('main_content')
    <!-- Page Body Start-->
    <div class="container-fluid p-0">
        <div class="comingsoon basic-comingsoon">
            <div class="comingsoon-inner text-center"><img class="for-light" src="{{ asset('assets/images/other-images/logo-login.png') }}"
                    alt=""><img class="for-dark" src="{{ asset('assets/images/other-images/logo-light.png') }}" alt="">
                <h5>WE ARE COMING SOON</h5>
                <div class="countdown" id="clock-arrival" data-hours="1" data-minutes="2" data-seconds="3">
                    <ul>
                        <li><span class="days time"></span><span class="title">Days</span></li>
                        <li><span class="hours time"></span><span class="title">Hours</span></li>
                        <li><span class="minutes time"></span><span class="title">Minutes</span></li>
                        <li><span class="seconds time"></span><span class="title">Seconds</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
