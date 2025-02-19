@extends('layouts.simple.master')

@section('title', 'General Widget')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>General</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Widgets</li>
                        <li class="breadcrumb-item active">General</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row general-widget-wrapper">
            <div class="col-sm-4 col-xxl-2 box-col-4">
                <div class="currency-widget warning widget-currency">
                    <div class="d-flex">
                        <div class="currency-icon-widget"> <svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#beta') }}"></use>
                            </svg></div>
                        <div>
                            <h6>Bitcoin <span class="f-light">BTC</span></h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="currency-chart-wrap">
                                <div id="currency-chart"> </div>
                            </div>
                            <div class="bg-light-warning text-center">
                                <h5 class="mb-sm-0">$21,43</h5><span class="f-12 f-w-500 font-warning"><i class="me-1"
                                        data-feather="trending-up"></i>+50%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xxl-2 box-col-4">
                <div class="currency-widget primary widget-currency">
                    <div class="d-flex">
                        <div class="currency-icon-widget"> <svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#eth') }}"></use>
                            </svg></div>
                        <div>
                            <h6>Ethereum <span class="f-light">ETC</span></h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="currency-chart-wrap">
                                <div id="currency-chart2"></div>
                            </div>
                            <div class="bg-light-primary text-center">
                                <h5 class="mb-0">$7,450</h5><span class="f-12 f-w-500 font-primary"><i class="me-1"
                                        data-feather="trending-up"> </i>+35%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xxl-2 box-col-4">
                <div class="currency-widget success widget-currency">
                    <div class="d-flex">
                        <div class="currency-icon-widget"> <svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#ltc') }}"></use>
                            </svg></div>
                        <div>
                            <h6>Leave Travel <span class="f-light">LTC</span></h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="currency-chart-wrap">
                                <div id="currency-chart3"></div>
                            </div>
                            <div class="bg-light-success text-center">
                                <h5 class="mb-0">$2,198</h5><span class="f-12 f-w-500 font-success"><i class="me-1"
                                        data-feather="trending-up"> </i>+73%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6 box-col-6">
                <div class="card radial-height">
                    <div class="card-body radial-progress-card">
                        <div>
                            <h6 class="mb-0">Average Sales Per Day</h6>
                            <div class="sale-details">
                                <h5 class="font-primary mb-0">45,908</h5><span class="f-12 f-light f-w-500"><i
                                        data-feather="arrow-up"></i>+5.7%</span>
                            </div>
                            <p class="f-light"> Customers benefits offerings</p>
                        </div>
                        <div class="radial-chart-wrap">
                            <div id="radial-chart"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6 box-col-6">
                <div class="card radial-height">
                    <div class="card-body radial-progress-card">
                        <div>
                            <h6 class="mb-0">Average Profit Per Day</h6>
                            <div class="sale-details">
                                <h5 class="font-primary mb-0">89.6%</h5><span class="f-12 f-light f-w-500"><i
                                        data-feather="arrow-up"></i>+2.7%</span>
                            </div>
                            <p class="f-light"> An investment or business</p>
                        </div>
                        <div class="radial-chart-wrap">
                            <div id="radial-chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6 box-col-3">
                <div class="card widget-1">
                    <div class="card-body">
                        <div class="widget-content">
                            <div class="widget-round secondary">
                                <div class="bg-round"><svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#c-revenue') }}"> </use>
                                    </svg><svg class="half-circle svg-fill">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#halfcircle') }}"></use>
                                    </svg></div>
                            </div>
                            <div>
                                <h4> $<span class="counter" data-target="45195">0</span></h4><span
                                    class="f-light">Revenue</span>
                            </div>
                        </div>
                        <div class="font-success f-w-500"><i class="bookmark-search me-1"
                                data-feather="trending-up"></i><span class="txt-success">+50% </span></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6 box-col-3">
                <div class="card widget-1">
                    <div class="card-body">
                        <div class="widget-content">
                            <div class="widget-round success">
                                <div class="bg-round"><svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#c-customer') }}"> </use>
                                    </svg><svg class="half-circle svg-fill">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#halfcircle') }}"></use>
                                    </svg></div>
                            </div>
                            <div>
                                <h4> <span class="counter" data-target="845">0</span>+</h4><span
                                    class="f-light">Customers</span>
                            </div>
                        </div>
                        <div class="font-danger f-w-500"><i class="bookmark-search me-1"
                                data-feather="trending-down"></i><span class="txt-danger">-40%</span></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6 box-col-3">
                <div class="card widget-1">
                    <div class="card-body">
                        <div class="widget-content">
                            <div class="widget-round warning">
                                <div class="bg-round"><svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#c-profit') }}"> </use>
                                    </svg><svg class="half-circle svg-fill">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#halfcircle') }}"></use>
                                    </svg></div>
                            </div>
                            <div>
                                <h4> <span class="counter" data-target="80">0</span>%</h4><span
                                    class="f-light">Profit</span>
                            </div>
                        </div>
                        <div class="font-danger f-w-500"><i class="bookmark-search me-1"
                                data-feather="trending-down"></i><span class="txt-danger">-20%</span></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6 box-col-3">
                <div class="card widget-1">
                    <div class="card-body">
                        <div class="widget-content">
                            <div class="widget-round primary">
                                <div class="bg-round"><svg class="fill-primary">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#c-invoice') }}"> </use>
                                    </svg><svg class="half-circle svg-fill">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#halfcircle') }}"></use>
                                    </svg></div>
                            </div>
                            <div>
                                <h4 class="counter" data-target="10905">0</h4><span class="f-light">Invoices</span>
                            </div>
                        </div>
                        <div class="font-success f-w-500"><i class="bookmark-search me-1"
                                data-feather="trending-up"></i><span class="txt-success">+50%</span></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-12 box-col-4">
                <div class="row">
                    <div class="col-xl-12 col-sm-6 box-col-12">
                        <div class="card course-box widget-course">
                            <div class="card-body">
                                <div class="course-widget">
                                    <div class="course-icon"> <svg class="fill-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#course-1') }}"></use>
                                        </svg></div>
                                    <div>
                                        <h4 class="mb-0"> <span class="counter" data-target="100">0</span>+
                                        </h4><span class="f-light">Completed Courses</span><a
                                            class="btn btn-light f-light" href="{{ route('admin.course_list') }}">View course<span
                                                class="ms-2">
                                                <svg class="fill-icon f-light">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}">
                                                    </use>
                                                </svg></span></a>
                                    </div>
                                </div>
                            </div>
                            <ul class="square-group">
                                <li class="square-1 warning"></li>
                                <li class="square-1 primary"></li>
                                <li class="square-2 warning1"></li>
                                <li class="square-3 danger"></li>
                                <li class="square-4 light"></li>
                                <li class="square-5 warning"></li>
                                <li class="square-6 success"></li>
                                <li class="square-7 success"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-12 col-sm-6 box-col-12">
                        <div class="card course-box widget-course">
                            <div class="card-body">
                                <div class="course-widget">
                                    <div class="course-icon warning"> <svg class="fill-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#course-2') }}"></use>
                                        </svg></div>
                                    <div>
                                        <h4 class="mb-0"> <span class="counter" data-target="70">0</span>+
                                        </h4><span class="f-light">In Progress Courses</span><a
                                            class="btn btn-light f-light" href="{{ route('admin.course_list') }}">View course<span
                                                class="ms-2">
                                                <svg class="fill-icon f-light">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}">
                                                    </use>
                                                </svg></span></a>
                                    </div>
                                </div>
                            </div>
                            <ul class="square-group">
                                <li class="square-1 warning"></li>
                                <li class="square-1 primary"></li>
                                <li class="square-2 warning1"></li>
                                <li class="square-3 danger"></li>
                                <li class="square-4 light"></li>
                                <li class="square-5 warning"></li>
                                <li class="square-6 success"></li>
                                <li class="square-7 success"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-3 col-md-6 box-col-3">
                <div class="card visitor-card height-equal">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">Website Traffic<span class="f-14 font-primary f-w-500 ms-1"><svg
                                        class="svg-fill me-1">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#user-visitor') }}"></use>
                                    </svg>(+2.8)</span></h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="visitorButton" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="visitorButton"><a
                                            class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                            href="#">Yesterday</a><a class="dropdown-item" href="#">This
                                            Week </a><a class="dropdown-item" href="#">This Month</a><a
                                            class="dropdown-item" href="#">Previous Month</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="visitors-container">
                            <div id="visitor-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6 box-col-5">
                <div class="card height-equal">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Sessions by Device</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown custom-dropdown"><button class="btn dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">Year</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#!">Day</a></li>
                                        <li><a class="dropdown-item" href="#!">Month</a></li>
                                        <li><a class="dropdown-item" href="#!">Year</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body main-session-devices pt-0">
                        <div class="row justify-content-center align-items-center gap-sm-0 gap-4">
                            <div class="col-sm-6">
                                <div class="common-align">
                                    <div>
                                        <div class="common-space">
                                            <p>Desktop</p><span>5,250 / 80%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"> </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="common-space">
                                            <p>Mobile</p><span>260 / 35%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 35%"
                                                aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"> </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="common-space">
                                            <p>Tablet</p><span>2,158 / 50%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="session-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col s-xxl-3 box-col-4">
                        <div class="card social-widget widget-hover">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="social-icons"><img
                                                src="{{ asset('assets/images/dashboard-5/social/1.png') }}"
                                                alt="facebook icon"></div><span>Facebook</span>
                                    </div><span class="font-success f-12 d-xxl-block">+22.9%</span>
                                </div>
                                <div class="social-content">
                                    <div>
                                        <h5 class="mb-1"><span class="counter" data-target="12098">0</span>
                                        </h5><span class="f-light">Likes</span>
                                    </div>
                                    <div class="social-chart">
                                        <div id="radial-facebook"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s-xxl-3 box-col-4">
                        <div class="card social-widget widget-hover">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="social-icons"><img
                                                src="{{ asset('assets/images/dashboard-5/social/2.png') }}"
                                                alt="instagram icon"></div><span>Instagram</span>
                                    </div><span class="font-danger f-12 d-xxl-block">-27.4%</span>
                                </div>
                                <div class="social-content">
                                    <div>
                                        <h5 class="mb-1"><span class="counter" data-target="15080">0</span>
                                        </h5><span class="f-light">Followers</span>
                                    </div>
                                    <div class="social-chart">
                                        <div id="radial-instagram"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s-xxl-3 box-col-4">
                        <div class="card social-widget widget-hover">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="social-icons"><img
                                                src="{{ asset('assets/images/dashboard-5/social/3.png') }}"
                                                alt="twitter icon"></div><span>X (Twitter)</span>
                                    </div><span class="font-success f-12 d-xxl-block">+76.10%</span>
                                </div>
                                <div class="social-content">
                                    <div>
                                        <h5 class="mb-1"><span class="counter" data-target="12564">0</span>
                                        </h5><span class="f-light">Followers</span>
                                    </div>
                                    <div class="social-chart">
                                        <div id="radial-twitter"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s-xxl-3 box-col-4">
                        <div class="card social-widget widget-hover">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="social-icons"><img
                                                src="{{ asset('assets/images/dashboard-5/social/4.png') }}"
                                                alt="twitter icon"></div><span>Youtube</span>
                                    </div><span class="font-success f-12 d-xxl-block">+62.08%</span>
                                </div>
                                <div class="social-content">
                                    <div>
                                        <h5 class="mb-1"><span class="counter" data-target="14890">0</span>
                                        </h5><span class="f-light">Followers</span>
                                    </div>
                                    <div class="social-chart">
                                        <div id="radial-youtube"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s-xxl-3 box-col-4">
                        <div class="card social-widget widget-hover">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="social-icons"><img
                                                src="{{ asset('assets/images/dashboard-5/social/5.png') }}"
                                                alt="twitter icon"></div><span>LinkedIn</span>
                                    </div><span class="font-danger f-12 d-xxl-block">-14.09%</span>
                                </div>
                                <div class="social-content">
                                    <div>
                                        <h5 class="mb-1"><span class="counter" data-target="12564">0</span>
                                        </h5><span class="f-light">Followers</span>
                                    </div>
                                    <div class="social-chart">
                                        <div id="radial-linkedin"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s-xxl-3 box-col-4">
                        <div class="card social-widget widget-hover">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="social-icons"><img
                                                src="{{ asset('assets/images/dashboard-5/social/6.png') }}"
                                                alt="twitter icon"></div><span>Pinterest</span>
                                    </div><span class="font-success f-12 d-xxl-block">+95.10%</span>
                                </div>
                                <div class="social-content">
                                    <div>
                                        <h5 class="mb-1"><span class="counter" data-target="89740">0</span>
                                        </h5><span class="f-light">Followers</span>
                                    </div>
                                    <div class="social-chart">
                                        <div id="radial-pinterest"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 box-col-12">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="card compare-order">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <div class="compare-icon shadow-primary"><svg class="fill-primary">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#crm-user') }}"></use>
                                        </svg></div>
                                    <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                            id="dealDropdown1" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="icon-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dealDropdown1"><a
                                                class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                                href="#">Yesterday</a><a class="dropdown-item" href="#">This
                                                week</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> <span class="f-w-500 c-o-light">New Users</span>
                                <h4 class="mb-2"> $<span class="counter" data-target="7000000">0</span></h4>
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="58"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-primary" style="width: 58%"></div>
                                </div><span class="user-growth f-12 f-w-500"><i
                                        class="icon-arrow-down txt-danger"></i><span
                                        class="txt-danger">+4.3%</span></span><span class="user-text">last
                                    month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card compare-order">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <div class="compare-icon shadow-success"><svg class="fill-success">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#crm-lead') }}"></use>
                                        </svg></div>
                                    <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                            id="compareDropdown" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="icon-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="compareDropdown"><a
                                                class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                                href="#">Yesterday</a><a class="dropdown-item" href="#">This
                                                week</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> <span class="f-w-500 c-o-light">New Leads</span>
                                <h4 class="mb-2"> $<span class="counter" data-target="1398700">0</span></h4>
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="58"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success" style="width: 58%"></div>
                                </div><span class="user-growth f-12 f-w-500"><i
                                        class="icon-arrow-up txt-success"></i><span
                                        class="txt-success">+7.9%</span></span><span class="user-text">last
                                    month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="card compare-order">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <div class="compare-icon shadow-warning"><svg class="fill-warning">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#crm-deal') }}"></use>
                                        </svg></div>
                                    <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                            id="compareDropdown1" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="icon-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="compareDropdown1"><a
                                                class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                                href="#">Yesterday</a><a class="dropdown-item" href="#">This
                                                week</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> <span class="f-w-500 c-o-light">Annual Deals</span>
                                <h4 class="mb-2"> $<span class="counter" data-target="760000">0</span></h4>
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="58"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-warning" style="width: 58%"></div>
                                </div><span class="user-growth f-12 f-w-500"><i
                                        class="icon-arrow-up txt-success"></i><span
                                        class="txt-success">+6.7%</span></span><span class="user-text">last
                                    month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 box-col-12">
                <div class="row user-tread-cards">
                    <div class="col-sm-6">
                        <div class="card overflow-hidden analytics-tread-card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <div><span class="c-o-light mb-1">Total Users</span>
                                        <div class="common-align">
                                            <h5 class="mb-1">8630k</h5><span
                                                class="common-align gap-1 justify-content-start"><i class="txt-success"
                                                    data-feather="trending-up"></i><span
                                                    class="txt-success f-w-500">+50%</span></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="analytics-tread bg-light-primary"><svg class="fill-primary">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#analytics-user') }}">
                                                </use>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="user-analytics-wrapper">
                                    <div id="user-analytics"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card overflow-hidden analytics-tread-card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <div><span class="c-o-light mb-1">Page Views</span>
                                        <div class="common-align">
                                            <h5 class="mb-1">54390k</h5><span
                                                class="common-align gap-1 justify-content-start"><i class="txt-danger"
                                                    data-feather="trending-up"></i><span
                                                    class="txt-danger f-w-500">-20%</span></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="analytics-tread bg-light-secondary"><svg class="fill-secondary">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#analytics-view') }}">
                                                </use>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="analytics-view-wrapper">
                                    <div id="page-view-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-md-6 ord-md-i box-col-6">
                <div class="card visits-wrapper">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>All Visits</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown custom-dropdown"><button class="btn dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">Year</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#!">Day</a></li>
                                        <li><a class="dropdown-item" href="#!">Month</a></li>
                                        <li><a class="dropdown-item" href="#!">Year</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="common-flex">
                            <h6>3.2%</h6>
                            <div class="d-flex">
                                <p>( <span class="txt-success f-w-500 me-1">+6.7%</span>vs last week)</p>
                            </div>
                        </div>
                        <div class="common-m-chart">
                            <div id="visit-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-md-6 box-col-6">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Activity Hours</h5>
                            <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="activitydropdown"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="activitydropdown"><a
                                        class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                        href="#">Yesterday</a><a class="dropdown-item" href="#">This week</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row m-0 overall-card">
                            <div class="col-xl-8">
                                <div class="chart-right">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card-body p-0">
                                                <div class="activity-wrap">
                                                    <div id="activity-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 p-0">
                                <div class="row g-sm-3 g-2 mt-0">
                                    <div class="col-xl-12 col-md-6 col-sm-4">
                                        <div class="light-card balance-card">
                                            <div> <span class="f-light">Time Spent</span>
                                                <h6 class="mt-1 mb-0">30</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-6 col-sm-4">
                                        <div class="light-card balance-card activity-details">
                                            <div> <span class="f-light">Course Subscribe</span>
                                                <h6 class="mt-1 mb-0">45</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-6 col-sm-4">
                                        <div class="light-card balance-card">
                                            <div> <span class="f-light">Exams Passed</span>
                                                <h6 class="mt-1 mb-0">12</h6>
                                            </div>
                                        </div>
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
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/general-widget.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
