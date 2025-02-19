@extends('layouts.simple.master')

@section('title', 'Social Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/vector-map1/jsvectormap.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Social</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Social</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid dashboard-5">
        <div class="row">
            <div class="col-12 od-xl-1">
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
                                        <h5 class="mb-1 counter" data-target="12098">0</h5><span
                                            class="f-light">Likes</span>
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
                                        <h5 class="mb-1 counter" data-target="15080">0</h5><span
                                            class="f-light">Followers</span>
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
                                        <h5 class="mb-1 counter" data-target="12564">0</h5><span
                                            class="f-light">Followers</span>
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
                                        <h5 class="mb-1 counter" data-target="85967">0</h5><span
                                            class="f-light">Followers</span>
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
                                        <h5 class="mb-1 counter" data-target="15005">0</h5><span
                                            class="f-light">Followers</span>
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
                                        <h5 class="mb-1 counter" data-target="20015">0</h5><span
                                            class="f-light">Followers</span>
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
            <div class="col-xxl-3 col-xl-4 col-md-5 od-xl-2 box-col-4">
                <div class="card mobile-app-card social-empower">
                    <div class="card-header card-no-border pb-0">
                        <h4 class="mb-1"> Empowering Growth: </h4>
                        <h6 class="c-o-light f-w-400 mb-4">Social Insights for Achievement</h6><a
                            class="purchase-btn btn btn-primary btn-hover-effect f-w-500" href="{{ route('admin.social_app') }}">Try
                            Now</a>
                    </div>
                    <div class="card-body p-0 text-end"><img class="wavy"
                            src="{{ asset('assets/images/dashboard-5/wave.png') }}" alt=""><img
                            src="{{ asset('assets/images/dashboard-5/mobile-img.png') }}" alt=""></div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-4 od-xl-4 box-col-4">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">Instagram Subscribers<span class="f-14 f-w-500 ms-1 f-light">(75% activity
                                    growth)</span></h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="subscribeButton" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="subscribeButton"><a
                                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item"
                                            href="#!">Maximum</a><a class="dropdown-item" href="#!">Today</a><a
                                            class="dropdown-item" href="#!">30
                                            Days</a><a class="dropdown-item" href="#!">Yesterday </a><a
                                            class="dropdown-item" href="#!">Last month</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="subscriber-chart-container">
                            <div id="subscriber-chart"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-7 od-xl-3 box-col-4">
                <div class="card follower-wrap">
                    <div class="card-header card-no-border pb-2">
                        <h5 class="mb-1">Facebook Campaign</h5>
                        <div class="d-inline-block badge badge-light-success rounded-pill">Active</div>
                    </div>
                    <div class="card-body pt-0 papernote-wrap"><span class="c-o-light">Here's a brief
                            overview of the data typically associated with a Facebook campaign.</span>
                        <ul class="campaign-list">
                            <li>
                                <div class="campaign-box">
                                    <h5 class="mb-1 counter" data-target="1897">0</h5><span class="f-light">Followers
                                        today</span>
                                </div>
                            </li>
                            <li>
                                <div class="campaign-box">
                                    <h5 class="mb-1 counter" data-target="50000">0</h5><span class="f-light">Followers
                                        goals</span>
                                </div>
                            </li>
                        </ul>
                        <div class="customers">
                            <ul>
                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                        src="{{ asset('assets/images/dashboard/user/1.jpg') }}" alt="user"></li>
                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                        src="{{ asset('assets/images/dashboard/user/6.jpg') }}" alt="user"></li>
                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                        src="{{ asset('assets/images/dashboard/user/7.jpg') }}" alt="user"></li>
                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                        src="{{ asset('assets/images/dashboard/user/3.jpg') }}" alt="user"></li>
                                <li class="d-inline-block"><img class="img-40 rounded-circle"
                                        src="{{ asset('assets/images/dashboard/user/8.jpg') }}" alt="user"></li>
                                <li class="d-inline-block">
                                    <div class="light-card"><span class="f-w-500">+5</span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-7 od-xl-5 box-col-7">
                <div class="card heading-space">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">All Campaigns</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="campaignDropdown" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="campaignDropdown"><a
                                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item"
                                            href="#!">Yesterday
                                        </a><a class="dropdown-item" href="#!">Last month</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 px-0 campaign-table">
                        <div class="recent-table table-responsive currency-table custom-scrollbar">
                            <table class="table" id="campaigns-table">
                                <thead>
                                    <tr>
                                        <th>AD Platform</th>
                                        <th>Campaign</th>
                                        <th>GEO</th>
                                        <th>Profitability</th>
                                        <th>Impressions</th>
                                        <th>Status</th>
                                        <th>Create</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-icon facebook">
                                            <div>
                                                <div class="social-circle"><i class="fa-brands fa-facebook-f"></i></div>
                                            </div>
                                        </td>
                                        <td>Jane Cooper</td>
                                        <td>UK</td>
                                        <td>
                                            <div class="change-currency"><i class="font-success me-1"
                                                    data-feather="trending-up"></i>45.6%</div>
                                        </td>
                                        <td>$9,786</td>
                                        <td> <button class="btn badge-light-primary">Active</button></td>
                                        <td><button class="plus-btn">+ </button></td>
                                    </tr>
                                    <tr>
                                        <td class="border-icon instagram">
                                            <div>
                                                <div class="social-circle"><i class="fa-brands fa-instagram"></i></div>
                                            </div>
                                        </td>
                                        <td>Floyd Miles</td>
                                        <td>DE</td>
                                        <td>
                                            <div class="change-currency"><i class="font-danger me-1"
                                                    data-feather="trending-down"></i>12.3%</div>
                                        </td>
                                        <td>$19,7098</td>
                                        <td> <button class="btn badge-light-primary">Active</button></td>
                                        <td><button class="plus-btn">+ </button></td>
                                    </tr>
                                    <tr>
                                        <td class="border-icon pinterest">
                                            <div>
                                                <div class="social-circle"><i class="fa-brands fa-pinterest"></i></div>
                                            </div>
                                        </td>
                                        <td>Guy Hawkins</td>
                                        <td>ES</td>
                                        <td>
                                            <div class="change-currency"><i class="font-success me-1"
                                                    data-feather="trending-up"></i>65.6%</div>
                                        </td>
                                        <td>$90,986</td>
                                        <td> <button class="btn badge-light-primary">Active</button></td>
                                        <td><button class="plus-btn">+ </button></td>
                                    </tr>
                                    <tr>
                                        <td class="border-icon twitter">
                                            <div>
                                                <div class="social-circle"><i class="fa-brands fa-x-twitter"></i></div>
                                            </div>
                                        </td>
                                        <td> Travis Wright</td>
                                        <td>ES</td>
                                        <td>
                                            <div class="change-currency"><i class="font-danger me-1"
                                                    data-feather="trending-down"></i>35.6%</div>
                                        </td>
                                        <td>$23,654</td>
                                        <td> <button class="btn badge-light-light disabled">Inactive</button>
                                        </td>
                                        <td><button class="plus-btn">+ </button></td>
                                    </tr>
                                    <tr>
                                        <td class="border-icon you-tube">
                                            <div>
                                                <div class="social-circle"><i class="fa-brands fa-youtube"></i></div>
                                            </div>
                                        </td>
                                        <td>Mark Green</td>
                                        <td>UK</td>
                                        <td>
                                            <div class="change-currency"><i class="font-success me-1"
                                                    data-feather="trending-up"></i>45.6%</div>
                                        </td>
                                        <td>$12,796</td>
                                        <td> <button class="btn badge-light-light disabled"
                                                type="button">Inactive</button></td>
                                        <td><button class="plus-btn" type="button">+</button></td>
                                    </tr>
                                    <tr>
                                        <td class="border-icon linked-in">
                                            <div>
                                                <div class="social-circle"><i class="fa-brands fa-linkedin-in"></i></div>
                                            </div>
                                        </td>
                                        <td>Eleanor Pena</td>
                                        <td>UK</td>
                                        <td>
                                            <div class="change-currency"><i class="font-success me-1"
                                                    data-feather="trending-up"></i>48.6%</div>
                                        </td>
                                        <td>$12,796</td>
                                        <td> <button class="btn badge-light-light disabled"
                                                type="button">Inactive</button></td>
                                        <td><button class="plus-btn" type="button">+</button></td>
                                    </tr>
                                    <tr>
                                        <td class="border-icon facebook">
                                            <div>
                                                <div class="social-circle"><i class="fa-brands fa-facebook-f"></i></div>
                                            </div>
                                        </td>
                                        <td>Caryl Kauth</td>
                                        <td>DE</td>
                                        <td>
                                            <div class="change-currency"><i class="font-success me-1"
                                                    data-feather="trending-up"></i>25.4%</div>
                                        </td>
                                        <td>$22,458</td>
                                        <td> <button class="btn badge-light-primary">Active</button></td>
                                        <td><button class="plus-btn">+ </button></td>
                                    </tr>
                                    <tr>
                                        <td class="border-icon instagram">
                                            <div>
                                                <div class="social-circle"><i class="fa-brands fa-instagram"></i></div>
                                            </div>
                                        </td>
                                        <td>Chloe Wilson</td>
                                        <td>ES</td>
                                        <td>
                                            <div class="change-currency"><i class="font-danger me-1"
                                                    data-feather="trending-down"></i>26.8%</div>
                                        </td>
                                        <td>$29,4567</td>
                                        <td> <button class="btn badge-light-primary">Active</button></td>
                                        <td><button class="plus-btn">+ </button></td>
                                    </tr>
                                    <tr>
                                        <td class="border-icon pinterest">
                                            <div>
                                                <div class="social-circle"><i class="fa-brands fa-pinterest"></i></div>
                                            </div>
                                        </td>
                                        <td>Olivia Gor</td>
                                        <td>UK</td>
                                        <td>
                                            <div class="change-currency"><i class="font-danger me-1"
                                                    data-feather="trending-down"></i>09.8%</div>
                                        </td>
                                        <td>$18,1814</td>
                                        <td> <button class="btn badge-light-primary">Active</button></td>
                                        <td><button class="plus-btn">+ </button></td>
                                    </tr>
                                    <tr>
                                        <td class="border-icon twitter">
                                            <div>
                                                <div class="social-circle"><i class="fa-brands fa-x-twitter"></i></div>
                                            </div>
                                        </td>
                                        <td> Robert Fox</td>
                                        <td>ES</td>
                                        <td>
                                            <div class="change-currency"><i class="font-success me-1"
                                                    data-feather="trending-up"></i>22.6%</div>
                                        </td>
                                        <td>$24,333</td>
                                        <td> <button class="btn badge-light-primary">Active</button></td>
                                        <td><button class="plus-btn">+ </button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-5 od-xl-6 box-col-5">
                <div class="row social-clicks">
                    <div class="col-sm-6">
                        <div class="card overflow-hidden analytics-tread-card widget-hover">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h2 class="mb-1"><span class="counter" data-target="76">0</span>%</h2>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="clickDropdown" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="clickDropdown">
                                                <a class="dropdown-item" href="#">This Month</a><a
                                                    class="dropdown-item" href="#">Previous Month</a><a
                                                    class="dropdown-item" href="#">Last 3 Months</a><a
                                                    class="dropdown-item" href="#">Last 6 Months</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="common-align justify-content-start"><span class="me-1">Photo
                                        Clicks</span><span class="common-align gap-1 justify-content-start"><i
                                            class="txt-danger i icon-arrow-down fw-bold"></i><span
                                            class="txt-danger f-w-500 f-12">-2.7%</span></span></div>
                            </div>
                            <div class="card-body pt-0 px-0">
                                <div class="photo-click-wrapper">
                                    <div id="photo-click1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card overflow-hidden analytics-tread-card widget-hover">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h2 class="mb-1"><span class="counter" data-target="86">0</span>%</h2>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="clickDropdown1" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="clickDropdown1">
                                                <a class="dropdown-item" href="#">This Month</a><a
                                                    class="dropdown-item" href="#">Previous Month</a><a
                                                    class="dropdown-item" href="#">Last 3 Months</a><a
                                                    class="dropdown-item" href="#">Last 6 Months</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="common-align justify-content-start"><span class="me-1">Link
                                        Clicks</span><span class="common-align gap-1 justify-content-start"><i
                                            class="txt-success i icon-arrow-up fw-bold"></i><span
                                            class="txt-success f-w-500 f-12">+9.4%</span></span></div>
                            </div>
                            <div class="card-body pt-0 px-0">
                                <div class="photo-click-wrapper">
                                    <div id="link-click1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card overflow-hidden analytics-tread-card widget-hover">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h2 class="mb-1"><span class="counter" data-target="95">0</span>%</h2>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="followerDropdown" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="followerDropdown"><a class="dropdown-item"
                                                    href="#">This Month</a><a class="dropdown-item"
                                                    href="#">Previous Month</a><a class="dropdown-item"
                                                    href="#">Last 3 Months</a><a class="dropdown-item"
                                                    href="#">Last 6 Months</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="common-align justify-content-start"><span class="me-1">Followers</span><span
                                        class="common-align gap-1 justify-content-start"><i
                                            class="txt-success i icon-arrow-up fw-bold"></i><span
                                            class="txt-success f-w-500 f-12">+6.8%</span></span></div>
                            </div>
                            <div class="card-body pt-0 px-0">
                                <div class="photo-click-wrapper">
                                    <div id="follower-click"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card overflow-hidden analytics-tread-card widget-hover">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h2 class="mb-1"><span class="counter" data-target="82">0</span>%</h2>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="engagementDropdown" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="engagementDropdown"><a class="dropdown-item"
                                                    href="#">This Month</a><a class="dropdown-item"
                                                    href="#">Previous Month</a><a class="dropdown-item"
                                                    href="#">Last 3 Months</a><a class="dropdown-item"
                                                    href="#">Last 6 Months</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="common-align justify-content-start"><span class="me-1">Link
                                        Engagements</span><span class="common-align gap-1 justify-content-start"><i
                                            class="txt-danger i icon-arrow-down fw-bold"></i><span
                                            class="txt-danger f-w-500 f-12">-3.2%</span></span></div>
                            </div>
                            <div class="card-body pt-0 px-0">
                                <div class="photo-click-wrapper">
                                    <div id="engagement-link"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 od-xl-7">
                <div class="card sales-report">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Social Analytics</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="salesButton"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesButton"><a
                                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item"
                                            href="#!">Tomorrow</a><a class="dropdown-item"
                                            href="#!">Yesterday</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 analytics-data">
                        <ul class="balance-data">
                            <li><span class="circle bg-primary"></span><span class="c-light ms-1">Followers</span></li>
                            <li><span class="circle bg-secondary"> </span><span class="c-light ms-1">Comments</span></li>
                            <li><span class="circle bg-success"></span><span class="c-light ms-1">Likes</span></li>
                        </ul>
                        <div class="social-tabs">
                            <div class="nav nav-pills custom-scrollbar" id="social-pills-tab" role="tablist"><a
                                    class="active social-box bg-7-danger" href="#!" id="v-pills-youtube-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-youtube" role="tab"
                                    aria-controls="v-pills-youtube" aria-selected="true">
                                    <div class="frame-image">
                                        <div class="outline-10-danger">
                                            <div class="bg-10-danger"><i
                                                    class="fa-brands fa-youtube youtube-color m-0 f-14"></i>
                                            </div>
                                        </div>
                                    </div><span>Youtube</span>
                                </a><a class="social-box bg-7-primary" id="v-pills-facebook-tab" href="#!"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-facebook" role="tab"
                                    aria-controls="v-pills-facebook" aria-selected="false">
                                    <div class="frame-image">
                                        <div class="outline-10-primary">
                                            <div class="bg-10-primary"><i
                                                    class="fa-brands fa-facebook-f bg-primary text-light m-0"></i>
                                            </div>
                                        </div>
                                    </div><span>Facebook</span>
                                </a><a class="social-box bg-7-warning" id="v-pills-instagram-tab" href="#!"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-instagram" role="tab"
                                    aria-controls="v-pills-instagram" aria-selected="false">
                                    <div class="frame-image">
                                        <div class="outline-10-warning">
                                            <div class="bg-10-warning"><i
                                                    class="fa-brands fa-instagram m-0 text-light instagram-color"></i>
                                            </div>
                                        </div>
                                    </div><span>Instagram </span>
                                </a><a class="social-box bg-7-info" id="v-pills-linkedin-tab" href="#!"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-linkedin" role="tab"
                                    aria-controls="v-pills-linkedin" aria-selected="false">
                                    <div class="frame-image">
                                        <div class="outline-10-info">
                                            <div class="bg-10-info"><i
                                                    class="fa-brands fa-linkedin-in bg-info text-light m-0"></i>
                                            </div>
                                        </div>
                                    </div><span>Linkedin</span>
                                </a><a class="social-box bg-7-secondary" id="v-pills-twitter-tab" href="#!"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-twitter" role="tab"
                                    aria-controls="v-pills-twitter" aria-selected="false">
                                    <div class="frame-image">
                                        <div class="outline-10-secondary">
                                            <div class="bg-10-secondary"><i
                                                    class="fa-brands fa-x-twitter bg-dark text-light m-0"></i>
                                            </div>
                                        </div>
                                    </div><span>X (Twitter)</span>
                                </a></div>
                            <div class="tab-content" id="social-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-youtube" role="tabpanel">
                                    <div>
                                        <div id="youtube-analysis"></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-facebook" role="tabpanel">
                                    <div>
                                        <div id="facebook-analysis"></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-instagram" role="tabpanel">
                                    <div>
                                        <div id="instagram-analysis"></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-linkedin" role="tabpanel">
                                    <div>
                                        <div id="linked-analysis"></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-twitter" role="tabpanel">
                                    <div>
                                        <div id="twitter-analysis"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 od-xl-8">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">Top Followers By Country</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="countryDropdown" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="countryDropdown"><a
                                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item"
                                            href="#!">Maximum</a><a class="dropdown-item" href="#!">Today</a><a
                                            class="dropdown-item" href="#!">30
                                            Days</a><a class="dropdown-item" href="#!">Yesterday </a><a
                                            class="dropdown-item" href="#!">Last month</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="follower-country mt-1">
                            <div id="countryMap"></div>
                        </div>
                        <div class="row top-country gx-lg-5 gy-4">
                            <div class="col-sm-6">
                                <div class="common-space">
                                    <div><img src="{{ asset('assets/images/dashboard-5/flags/1.png') }}" alt="flag">
                                        <p class="mb-0 f-w-500">Germany</p>
                                    </div><span class="c-o-light counter" data-target="865">0</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary rounded-pill" role="progressbar"
                                        style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="common-space">
                                    <div><img src="{{ asset('assets/images/dashboard-5/flags/2.png') }}" alt="flag">
                                        <p class="mb-0 f-w-500">USA</p>
                                    </div><span class="c-o-light counter" data-target="542">0</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary rounded-pill" role="progressbar"
                                        style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="common-space">
                                    <div><img src="{{ asset('assets/images/dashboard-5/flags/3.png') }}" alt="flag">
                                        <p class="mb-0 f-w-500">India</p>
                                    </div><span class="c-o-light counter" data-target="951">0</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary rounded-pill" role="progressbar"
                                        style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="common-space">
                                    <div><img src="{{ asset('assets/images/dashboard-5/flags/4.png') }}" alt="flag">
                                        <p class="mb-0 f-w-500">Australia</p>
                                    </div><span class="c-o-light counter" data-target="751">0</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary rounded-pill" role="progressbar"
                                        style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
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
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map1/jsvectormap.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map1/world.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map1/custom-vectormap.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_5.js') }}"></script>
@endsection
