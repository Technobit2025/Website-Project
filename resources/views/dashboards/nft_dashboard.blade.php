@extends('layouts.simple.master')

@section('title', 'NFT Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>NFT</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">NFT</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid dashboard-6">
        <div class="row">
            <div class="col-xxl-3 col-xl-4 col-md-6 custom-rs-4 box-col-6">
                <div class="card trending-card height-equal">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">Trending Creator</h5>
                            <div class="card-header-right-icon"><a href="{{ route('admin.seller_list') }}">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 activity-card">
                        <div class="appointment-table customer-table table-responsive">
                            <table class="table table-bordernone">
                                <tbody>
                                    <tr>
                                        <td><img class="img-fluid img-40 rounded-circle me-2"
                                                src="{{ asset('assets/images/dashboard-6/1.png') }}" alt="building">
                                        </td>
                                        <td class="img-content-box"><a class="d-block f-w-500"
                                                href="{{ route('admin.seller_list') }}">Project</a><span class="f-light">12.090 Items</span>
                                        </td>
                                        <td class="text-end"> <span class="f-w-500">$200</span><span
                                                class="d-block f-light">Total USD</span></td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid img-40 rounded-circle me-2"
                                                src="{{ asset('assets/images/dashboard-6/2.png') }}" alt="leaf"></td>
                                        <td class="img-content-box"><a class="d-block f-w-500" href="{{ route('admin.seller_list') }}">The
                                                Aston</a><span class="f-light">12.098 Items</span></td>
                                        <td class="text-end"> <span class="f-w-500">$340</span><span
                                                class="d-block f-light">Total USD</span></td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid img-40 rounded-circle me-2"
                                                src="{{ asset('assets/images/dashboard-6/3.png') }}" alt="leaf"></td>
                                        <td class="img-content-box"><a class="d-block f-w-500"
                                                href="{{ route('admin.seller_list') }}">Narkey X</a><span class="f-light">19.998
                                                Items</span></td>
                                        <td class="text-end"> <span class="f-w-500">$879</span><span
                                                class="d-block f-light">Total USD</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-4  custom-rs-4 explore-wrap box-col-none">
                <div class="card explore-card height-equal">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xxl-6 custom-rs-12">
                                <h5 class="mb-3">Discover, Collect and sell in the largest NFTs marketplace
                                </h5>
                                <p class="mb-3 f-light">If you are an artist then showcase your artwork and
                                    convert your art into NFT art.</p>
                                <div class="group-btn"><a class="btn f-w-500 btn-primary"
                                        href="{{ route('admin.seller_list') }}">Explore</a><a class="btn f-w-500 btn-white"
                                        href="{{ route('admin.seller_details') }}">Sell Now</a></div>
                                <ul class="decore">
                                    <li class="dot-gradient dot-1"></li>
                                    <li class="dot-gradient dot-2"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6 custom-rs-4 box-col-6">
                <div class="card total-balance">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Welcome, <span class="txt-primary">Emay Walter</span></h5>
                        </div>
                        <div class="d-flex align-items-center f-light mt-1">
                            <p class="mb-0">Your Balance</p>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <h3> $<span class="counter" data-target="3050010">0</span></h3>
                        <p class="f-light"> <span>Total</span><span class="ms-2">USD 45,000 <span
                                    class="font-success">(67,11%)</span></span></p>
                        <div class="common-f-start">
                            <div class="d-flex"><span class="f-light me-3">Profit </span>
                                <div class="bg-light-success"><i class="fa-solid fa-arrow-up txt-success"></i></div>
                            </div>
                            <div class="d-flex"><span class="f-light me-3">Loss</span>
                                <div class="bg-light-danger"><i class="fa-solid fa-arrow-down txt-danger"></i></div>
                            </div>
                        </div><a class="btn bg-light-primary font-primary w-100" href="{{ route('admin.seller_details') }}">Top Up Balance
                            <i class="ms-2 icofont icofont-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 box-col-12">
                <div class="card income-wrap">
                    <div class="row mx-0">
                        <div class="col-xxl-6 px-0 col-xl-12 col-md-6">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5 class="m-0">Income</h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown"><button class="btn dropdown-toggle" id="dropdownMenuButton"
                                                type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">Weekly</button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuButton"><a class="dropdown-item"
                                                    href="#!">Weekly</a><a class="dropdown-item"
                                                    href="#!">Monthly</a><a class="dropdown-item"
                                                    href="#!">Yearly</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="income-chart-wrapper">
                                    <div id="income-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-0 d-xxl-block d-xl-none">
                            <div class="card-header card-no-border ps-md-0">
                                <div class="header-top">
                                    <h5>Artworks</h5>
                                    <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                            id="statusdropdown" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="icon-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="statusdropdown"><a
                                                class="dropdown-item" href="#!">Weekly</a><a class="dropdown-item"
                                                href="#!">Monthly</a><a class="dropdown-item"
                                                href="#!">Yearly</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 sale-status-table ps-md-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="f-light f-w-500 pt-0">Course</th>
                                                <th class="f-light f-w-500 pt-0">Sale</th>
                                                <th class="f-light f-w-500 text-end pt-0"> Earnings</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2"> <img
                                                            src="{{ asset('assets/images/dashboard-6/sales/1.png') }}"
                                                            alt="artwork">
                                                        <div> <a class="f-14" href="{{ route('admin.seller_details') }}">3d
                                                                Artwork</a><span class="f-light f-12">Designing.co</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="f-14">12</h6>
                                                </td>
                                                <td class="text-end"> <span
                                                        class="badge badge-light-success f-w-500">$120.9</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2"> <img
                                                            src="{{ asset('assets/images/dashboard-6/sales/2.png') }}"
                                                            alt="3d writing">
                                                        <div> <a class="f-14" href="{{ route('admin.seller_details') }}">3d
                                                                Writing</a><span class="f-light f-12">Designing.co</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="f-14">20</h6>
                                                </td>
                                                <td class="text-end"> <span
                                                        class="badge badge-light-success f-w-500">$180.5</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2"> <img
                                                            src="{{ asset('assets/images/dashboard-6/sales/3.png') }}"
                                                            alt="3d writing">
                                                        <div> <a class="f-14" href="{{ route('admin.seller_details') }}">3d
                                                                Poster</a><span class="f-light f-12">Designing.co</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="f-14">27</h6>
                                                </td>
                                                <td class="text-end"> <span
                                                        class="badge badge-light-success f-w-500">$190.2</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 box-col-12">
                <div class="card">
                    <div class="card-header card-no-border">
                        <h5>Trending Bids</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="slider-wrapper arrow-round">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper trending-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <div class="product-image"> <img class="img-fluid"
                                                    src="{{ asset('assets/images/dashboard-6/action/1.png') }}"
                                                    alt="nft"><a class="author-img" href="#!"><img
                                                        class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-6/author/1.png') }}"
                                                        alt="author"></a></div>
                                            <div class="product-nft-content">
                                                <h6 class="f-14">Byte Beauty</h6>
                                                <p class="f-12 f-light mb-2">Owned by <span
                                                        class="font-primary">Beauty</span></p>
                                                <ul>
                                                    <li> <span class="f-12 f-light">Auction Time</span><span
                                                            class="d-block f-light f-w-500 timer"
                                                            data-date="Dec 27, 2024 04:15:01"><span class="me-1"> <span
                                                                    class="hours"></span><span>h</span></span><span
                                                                class="me-1"> <span
                                                                    class="minutes"></span><span>m</span></span><span><span
                                                                    class="seconds"></span><span>s</span></span></span>
                                                    </li>
                                                    <li> <span class="f-12 f-light">Current Bid</span><span
                                                            class="d-block f-light f-w-500">0.15 ETH</span>
                                                    </li>
                                                </ul><a class="btn bg-light-primary font-primary w-100 mt-3"
                                                    href="{{ route('admin.job_companies') }}">Place a Bid</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <div class="product-image"> <img class="img-fluid"
                                                    src="{{ asset('assets/images/dashboard-6/action/2.png') }}"
                                                    alt="nft"><a class="author-img" href="#!"><img
                                                        class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-6/author/2.png') }}"
                                                        alt="author"></a></div>
                                            <div class="product-nft-content">
                                                <h6 class="f-14">Neon Nexus</h6>
                                                <p class="f-12 f-light mb-2">Owned by <span
                                                        class="font-primary">Nexus</span></p>
                                                <ul>
                                                    <li> <span class="f-12 f-light">Auction Time</span><span
                                                            class="d-block f-light f-w-500 timer"
                                                            data-date="Dec 7, 2024 04:15:01"><span class="me-1"> <span
                                                                    class="hours"></span><span>h</span></span><span
                                                                class="me-1"> <span
                                                                    class="minutes"></span><span>m</span></span><span><span
                                                                    class="seconds"></span><span>s</span></span></span>
                                                    </li>
                                                    <li> <span class="f-12 f-light">Current Bid</span><span
                                                            class="d-block f-light f-w-500">0.15 ETH</span>
                                                    </li>
                                                </ul><a class="btn bg-light-primary font-primary w-100 mt-3"
                                                    href="{{ route('admin.job_companies') }}">Place a Bid</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <div class="product-image"> <img class="img-fluid"
                                                    src="{{ asset('assets/images/dashboard-6/action/3.png') }}"
                                                    alt="nft"><a class="author-img" href="#!"><img
                                                        class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-6/author/3.png') }}"
                                                        alt="author"></a></div>
                                            <div class="product-nft-content">
                                                <h6 class="f-14">Pixel Prism</h6>
                                                <p class="f-12 f-light mb-2">Owned by <span
                                                        class="font-primary">Prism</span></p>
                                                <ul>
                                                    <li> <span class="f-12 f-light">Auction Time</span><span
                                                            class="d-block f-light f-w-500 timer"
                                                            data-date="Dec 7, 2024 04:15:01"><span class="me-1"> <span
                                                                    class="hours"></span><span>h</span></span><span
                                                                class="me-1"> <span
                                                                    class="minutes"></span><span>m</span></span><span><span
                                                                    class="seconds"></span><span>s</span></span></span>
                                                    </li>
                                                    <li> <span class="f-12 f-light">Current Bid</span><span
                                                            class="d-block f-light f-w-500">0.15 ETH</span>
                                                    </li>
                                                </ul><a class="btn bg-light-primary font-primary w-100 mt-3"
                                                    href="{{ route('admin.job_companies') }}">Place a Bid</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <div class="product-image"> <img class="img-fluid"
                                                    src="{{ asset('assets/images/dashboard-6/action/1.png') }}"
                                                    alt="nft"><a class="author-img" href="#!"><img
                                                        class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-6/author/1.png') }}"
                                                        alt="author"></a></div>
                                            <div class="product-nft-content">
                                                <h6 class="f-14">NFT Nirvana</h6>
                                                <p class="f-12 f-light mb-2">Owned by <span
                                                        class="font-primary">Nirvana</span></p>
                                                <ul>
                                                    <li> <span class="f-12 f-light">Auction Time</span><span
                                                            class="d-block f-light f-w-500 timer"
                                                            data-date="Dec 7, 2024 04:15:01"><span class="me-1"> <span
                                                                    class="hours"></span><span>h</span></span><span
                                                                class="me-1"> <span
                                                                    class="minutes"></span><span>m</span></span><span><span
                                                                    class="seconds"></span><span>s</span></span></span>
                                                    </li>
                                                    <li> <span class="f-12 f-light">Current Bid</span><span
                                                            class="d-block f-light f-w-500">0.15 ETH</span>
                                                    </li>
                                                </ul><a class="btn bg-light-primary font-primary w-100 mt-3"
                                                    href="{{ route('admin.job_companies') }}">Place a Bid</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <div class="product-image"> <img class="img-fluid"
                                                    src="{{ asset('assets/images/dashboard-6/action/1.png') }}"
                                                    alt="nft"><a class="author-img" href="#!"><img
                                                        class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-6/author/1.png') }}"
                                                        alt="author"></a></div>
                                            <div class="product-nft-content">
                                                <h6 class="f-14">Ether Echo</h6>
                                                <p class="f-12 f-light mb-2">Owned by <span
                                                        class="font-primary">Echo</span></p>
                                                <ul>
                                                    <li> <span class="f-12 f-light">Auction Time</span><span
                                                            class="d-block f-light f-w-500 timer"
                                                            data-date="Dec 7, 2024 04:15:01"><span class="me-1"> <span
                                                                    class="hours"></span><span>h</span></span><span
                                                                class="me-1"> <span
                                                                    class="minutes"></span><span>m</span></span><span><span
                                                                    class="seconds"></span><span>s</span></span></span>
                                                    </li>
                                                    <li> <span class="f-12 f-light">Current Bid</span><span
                                                            class="d-block f-light f-w-500">0.15 ETH</span>
                                                    </li>
                                                </ul><a class="btn bg-light-primary font-primary w-100 mt-3"
                                                    href="{{ route('admin.job_companies') }}">Place a Bid</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 box-col-12">
                <div class="row">
                    <div class="col-xl-12 col-md-6 box-col-6">
                        <div class="card widget-hover">
                            <div class="card-body radial-progress-card">
                                <div>
                                    <h6 class="mb-0">Growth</h6>
                                    <div class="sale-details mb-1">
                                        <h5 class="font-primary mb-0">2.78 ETH</h5><span class="f-12 f-light f-w-500"><i
                                                class="font-success me-1" data-feather="trending-up"></i>+5.7%</span>
                                    </div>
                                    <p class="f-light"> $ 4,987 USD</p>
                                </div>
                                <div class="artist-chart-wrap">
                                    <div id="artist-chart"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-6 box-col-6">
                        <div class="card widget-hover">
                            <div class="card-body radial-progress-card">
                                <div>
                                    <h6 class="mb-0">Sales</h6>
                                    <div class="sale-details mb-1">
                                        <h5 class="font-warning mb-0">3.90 ETH</h5><span class="f-12 f-light f-w-500"><i
                                                class="font-success me-1" data-feather="trending-up"></i>+2.7%</span>
                                    </div>
                                    <p class="f-light"> $ 3,897 USD</p>
                                </div>
                                <div class="artist-chart-wrap">
                                    <div id="sale-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-6 box-col-6">
                        <div class="card widget-hover">
                            <div class="card-body radial-progress-card">
                                <div>
                                    <h6 class="mb-0">Revenue</h6>
                                    <div class="sale-details mb-1">
                                        <h5 class="font-success mb-0">2.78 ETH</h5><span class="f-12 f-light f-w-500"><i
                                                class="font-success me-1" data-feather="trending-up"></i>+2.7%</span>
                                    </div>
                                    <p class="f-light"> $ 4,987 USD</p>
                                </div>
                                <div class="artist-chart-wrap">
                                    <div id="release-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-6 box-col-6">
                        <div class="card mobile-app-card upgrade-plan widget-hover">
                            <div class="card-header card-no-border pb-0">
                                <h5 class="mb-1">Upgrade Your Plan</h5>
                                <p class="f-light mb-2">Make changes to your schedule for a particular
                                    experience</p><a class="purchase-btn btn btn-primary btn-hover-effect f-w-500"
                                    href="{{ route('admin.pricing') }}">Upgrade Now</a>
                            </div>
                            <div class="card-body p-0 text-end"><img src="{{ asset('assets/images/dashboard-6/1.gif') }}"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-9 col-xl-8 box-col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header card-no-border pb-3">
                                <h5>Explore Artworks</h5>
                            </div>
                            <div class="card-body pt-0">
                                <div class="slider-wrapper arrow-round">
                                    <div class="swiper category-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><a class="category-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-6/category/1.png') }}"
                                                        alt="nft art">
                                                    <h6>Art</h6>
                                                </a></div>
                                            <div class="swiper-slide"><a class="category-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-6/category/2.png') }}"
                                                        alt="nft music">
                                                    <h6>Music</h6>
                                                </a></div>
                                            <div class="swiper-slide"><a class="category-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-6/category/3.png') }}"
                                                        alt="nft game">
                                                    <h6>Games</h6>
                                                </a></div>
                                            <div class="swiper-slide"><a class="category-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-6/category/4.png') }}"
                                                        alt="nft music">
                                                    <h6>Music</h6>
                                                </a></div>
                                            <div class="swiper-slide"><a class="category-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-6/category/5.png') }}"
                                                        alt="nft">
                                                    <h6>Metavereses</h6>
                                                </a></div>
                                            <div class="swiper-slide"><a class="category-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-6/category/3.png') }}"
                                                        alt="nft game">
                                                    <h6>Games</h6>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-lg-12 col-md-6">
                        <div class="card heading-space">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Top NFT</h5>
                                    <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                            id="nftdropdown" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="icon-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="nftdropdown"><a
                                                class="dropdown-item" href="#!">Weekly</a><a class="dropdown-item"
                                                href="#!">Monthly</a><a class="dropdown-item"
                                                href="#!">Yearly</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 px-0">
                                <div class="recent-table table-responsive nft-table custom-scrollbar">
                                    <table class="table" id="nft-collection">
                                        <thead>
                                            <tr>
                                                <th> </th>
                                                <th>Collections</th>
                                                <th>Volume</th>
                                                <th>24h %</th>
                                                <th class="text-end">Items</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> </td>
                                                <td>
                                                    <div class="product-content">
                                                        <div class="order-image"><img
                                                                src="{{ asset('assets/images/dashboard-6/author/4.png') }}"
                                                                alt="author"><img class="mark-img"
                                                                src="{{ asset('assets/images/dashboard-6/author/mark.png') }}"
                                                                alt="mark icon"></div>
                                                        <div>
                                                            <h6 class="f-14 mb-0"><a href="{{ route('admin.category_page') }}">The X
                                                                    Takashih</a>
                                                            </h6><span class="f-light f-12">Manfers
                                                                nfts</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="f-w-400">
                                                    <div class="d-flex align-items-center"> <img class="me-2"
                                                            src="{{ asset('assets/images/dashboard-6/nft.png') }}"
                                                            alt="nft icon"><span>$13,098.09</span></div>
                                                </td>
                                                <td class="f-w-500 font-success">
                                                    <div class="d-flex align-items-center"> <i class="me-2"
                                                            data-feather="trending-up"></i><span>5.90</span>
                                                    </div>
                                                </td>
                                                <td class="f-w-400 text-end">17.09K</td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td>
                                                    <div class="product-content">
                                                        <div class="order-image"><img
                                                                src="{{ asset('assets/images/dashboard-6/author/5.png') }}"
                                                                alt="author"><img class="mark-img"
                                                                src="{{ asset('assets/images/dashboard-6/author/mark.png') }}"
                                                                alt="mark icon"></div>
                                                        <div>
                                                            <h6 class="f-14 mb-0"><a href="{{ route('admin.category_page') }}">Williamson</a>
                                                            </h6>
                                                            <span class="f-light f-12">Manfers nfts</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="f-w-400">
                                                    <div class="d-flex align-items-center"> <img class="me-2"
                                                            src="{{ asset('assets/images/dashboard-6/nft.png') }}"
                                                            alt="nft icon"><span>$10,050.00</span></div>
                                                </td>
                                                <td class="f-w-500 font-success">
                                                    <div class="d-flex align-items-center"> <i class="me-2"
                                                            data-feather="trending-up"></i><span>4.5</span>
                                                    </div>
                                                </td>
                                                <td class="f-w-400 text-end">16.15K</td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td>
                                                    <div class="product-content">
                                                        <div class="order-image"><img
                                                                src="{{ asset('assets/images/dashboard-6/author/6.png') }}"
                                                                alt="author"><img class="mark-img"
                                                                src="{{ asset('assets/images/dashboard-6/author/mark.png') }}"
                                                                alt="mark icon"></div>
                                                        <div>
                                                            <h6 class="f-14 mb-0"><a href="{{ route('admin.category_page') }}">Jenny Wilson</a>
                                                            </h6><span class="f-light f-12">Manfers
                                                                nfts</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="f-w-400">
                                                    <div class="d-flex align-items-center"> <img class="me-2"
                                                            src="{{ asset('assets/images/dashboard-6/nft.png') }}"
                                                            alt="nft icon"><span>$8,547.05</span></div>
                                                </td>
                                                <td class="f-w-500 font-danger">
                                                    <div class="d-flex align-items-center"> <i class="me-2"
                                                            data-feather="trending-down"></i><span>2.65</span>
                                                    </div>
                                                </td>
                                                <td class="f-w-400 text-end">14.12K</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <div class="product-content">
                                                        <div class="order-image"><img
                                                                src="{{ asset('assets/images/dashboard-6/author/8.png') }}"
                                                                alt="author"><img class="mark-img"
                                                                src="{{ asset('assets/images/dashboard-6/author/mark.png') }}"
                                                                alt="mark icon"></div>
                                                        <div>
                                                            <h6 class="f-14 mb-0"><a href="{{ route('admin.category_page') }}">Jacob Jones</a>
                                                            </h6><span class="f-light f-12">Manfers
                                                                nfts</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="f-w-400">
                                                    <div class="d-flex align-items-center"> <img class="me-2"
                                                            src="{{ asset('assets/images/dashboard-6/nft.png') }}"
                                                            alt="nft icon"><span>$15,658.02</span></div>
                                                </td>
                                                <td class="f-w-500 font-danger">
                                                    <div class="d-flex align-items-center"> <i class="me-2"
                                                            data-feather="trending-down"></i><span>5.69</span>
                                                    </div>
                                                </td>
                                                <td class="f-w-400 text-end">28.45K</td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td>
                                                    <div class="product-content">
                                                        <div class="order-image"><img
                                                                src="{{ asset('assets/images/dashboard-6/author/9.png') }}"
                                                                alt="author"><img class="mark-img"
                                                                src="{{ asset('assets/images/dashboard-6/author/mark.png') }}"
                                                                alt="mark icon"></div>
                                                        <div>
                                                            <h6 class="f-14 mb-0"><a href="{{ route('admin.category_page') }}">Lily Ramirez</a>
                                                            </h6><span class="f-light f-12">Manfers
                                                                nfts</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="f-w-400">
                                                    <div class="d-flex align-items-center"> <img class="me-2"
                                                            src="{{ asset('assets/images/dashboard-6/nft.png') }}"
                                                            alt="nft icon"><span>$26,458.05</span></div>
                                                </td>
                                                <td class="f-w-500 font-success">
                                                    <div class="d-flex align-items-center"> <i class="me-2"
                                                            data-feather="trending-up"></i><span>9.89</span>
                                                    </div>
                                                </td>
                                                <td class="f-w-400 text-end">99.41K</td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td>
                                                    <div class="product-content">
                                                        <div class="order-image"><img
                                                                src="{{ asset('assets/images/dashboard-6/author/10.png') }}"
                                                                alt="author"><img class="mark-img"
                                                                src="{{ asset('assets/images/dashboard-6/author/mark.png') }}"
                                                                alt="mark icon"></div>
                                                        <div>
                                                            <h6 class="f-14 mb-0"><a href="{{ route('admin.category_page') }}">Cody Fisher</a>
                                                            </h6><span class="f-light f-12">Manfers
                                                                nfts</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="f-w-400">
                                                    <div class="d-flex align-items-center"> <img class="me-2"
                                                            src="{{ asset('assets/images/dashboard-6/nft.png') }}"
                                                            alt="nft icon"><span>$20,254.45</span></div>
                                                </td>
                                                <td class="f-w-500 font-danger">
                                                    <div class="d-flex align-items-center"> <i class="me-2"
                                                            data-feather="trending-down"></i><span>0.56</span>
                                                    </div>
                                                </td>
                                                <td class="f-w-400 text-end">99.41K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-12 col-md-6 d-xxl-block d-xl-none d-block">
                        <div class="card papernote-wrap statistics-card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Statistics</h5><a class="f-light d-flex align-items-center gap-1"
                                        href="#!">View <i class="f-w-700 icon-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <ul class="d-flex">
                                    <li><span class="f-light">Total art sold</span>
                                        <h5 class="counter" data-target="135">0</h5>
                                    </li>
                                    <li><span class="f-light">Total Earning</span>
                                        <h5><span class="counter" data-target="908">0</span> ETH</h5>
                                    </li>
                                </ul>
                                <div class="statistic-chart-wrap">
                                    <div id="statistic-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-sm-6">
                        <div class="card papernote-wrap statistics-card widget-hover">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Top Artist</h5><a class="f-light d-flex align-items-center gap-1"
                                        href="#!">View <i class="f-w-700 icon-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="card-body pt-0 artist-table">
                                <div class="appointment-table customer-table table-responsive">
                                    <table class="table table-bordernone">
                                        <tbody>
                                            <tr>
                                                <td><img class="img-fluid img-40 rounded-circle me-2"
                                                        src="{{ asset('assets/images/dashboard-6/author/8.png') }}"
                                                        alt="author"></td>
                                                <td class="img-content-box"><a class="d-block f-w-500"
                                                        href="#!">Williamson</a><span
                                                        class="f-light">curtis@co.in</span></td>
                                                <td class="text-end"> <button class="btn button-primary"><i
                                                            class="me-1"
                                                            data-feather="user-plus"></i><span>Follow</span></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-sm-6">
                        <div class="card papernote-wrap statistics-card widget-hover">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Top Seller</h5><a class="f-light d-flex align-items-center gap-1"
                                        href="#!">View <i class="f-w-700 icon-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="card-body pt-0 artist-table">
                                <div class="appointment-table customer-table table-responsive">
                                    <table class="table table-bordernone">
                                        <tbody>
                                            <tr>
                                                <td><img class="img-fluid img-40 rounded-circle me-2"
                                                        src="{{ asset('assets/images/dashboard-6/author/9.png') }}"
                                                        alt="author"></td>
                                                <td class="img-content-box"><a class="d-block f-w-500"
                                                        href="#!">Sophia Nit</a><span
                                                        class="f-light">wilson@co.in</span></td>
                                                <td class="text-end"> <img class="img-fluid medal-img"
                                                        src="{{ asset('assets/images/dashboard-6/author/medal.svg') }}"
                                                        alt="Batch icon"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 d-xxl-block d-xl-none d-block">
                        <div class="card papernote-wrap statistics-card widget-hover">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Recent Activity</h5><a class="f-light d-flex align-items-center gap-1"
                                        href="#!">View <i class="f-w-700 icon-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="card-body pt-0 activity-table">
                                <div class="appointment-table customer-table table-responsive">
                                    <table class="table table-bordernone">
                                        <tbody>
                                            <tr>
                                                <td><img class="img-fluid img-40 rounded-circle me-2"
                                                        src="{{ asset('assets/images/dashboard-6/author/10.png') }}"
                                                        alt="author"></td>
                                                <td class="img-content-box"><a class="d-block f-w-500"
                                                        href="#!">Jenny Wilson</a><span class="f-light">Buy<span
                                                            class="font-primary d-inline-block ms-1">0.98
                                                            ETH</span></span></td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <span class="status-success me-2"> </span><span
                                                            class="f-light">12m ago</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card live-auction-wrapper">
                    <div class="card-header card-no-border">
                        <h5>Live Auctions</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="slider-wrapper arrow-round">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper live-auction-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <div class="product-image"> <img class="img-fluid"
                                                    src="{{ asset('assets/images/dashboard-6/action/1.png') }}"
                                                    alt="nft"><a class="author-img" href="#!"><img
                                                        class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-6/author/11.png') }}"
                                                        alt="author"></a></div>
                                            <div class="product-nft-content">
                                                <h6 class="f-14">Digital Landscape</h6>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <p class="f-14 c-o-light">High Bid<span
                                                            class="f-w-500 f-14 ps-1 text-black">8.01</span>
                                                    </p>
                                                    <div class="d-flex align-items-center"> <img class="me-1"
                                                            src="{{ asset('assets/images/dashboard-6/nft.png') }}"
                                                            alt="nft icon"><span class="f-w-600">12
                                                            ETH</span></div>
                                                </div>
                                                <div class="common-flex"><button class="btn bg-light-primary font-primary"
                                                        type="button"> <span class="common-align"><svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#stop-watch') }}">
                                                                </use>
                                                            </svg><span class="f-light f-w-500 timer"
                                                                data-date="Sep 11, 2024 02:12:02"><span><span
                                                                        class="hours me-1"></span><span>:</span></span><span><span
                                                                        class="minutes me-1"></span><span>:</span></span><span><span
                                                                        class="seconds"></span></span></span></span></button><a
                                                        class="btn bg-light-primary font-primary f-w-500"
                                                        href="{{ route('admin.job_companies') }}">Place a Bid</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <div class="product-image"> <img class="img-fluid"
                                                    src="{{ asset('assets/images/dashboard-6/action/4.png') }}"
                                                    alt="nft"><a class="author-img" href="#!"><img
                                                        class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-6/author/12.png') }}"
                                                        alt="author"></a></div>
                                            <div class="product-nft-content">
                                                <h6 class="f-14">Cityscape</h6>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <p class="f-14 c-o-light">High Bid<span
                                                            class="f-w-500 f-14 ps-1 text-black">6.12</span>
                                                    </p>
                                                    <div class="d-flex align-items-center"> <img class="me-1"
                                                            src="{{ asset('assets/images/dashboard-6/nft.png') }}"
                                                            alt="nft icon"><span class="f-w-600">34
                                                            ETH</span></div>
                                                </div>
                                                <div class="common-flex"><button class="btn bg-light-primary font-primary"
                                                        type="button"> <span class="common-align"><svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#stop-watch') }}">
                                                                </use>
                                                            </svg><span class="f-light f-w-500 timer"
                                                                data-date="Nov 02, 2025 02:10:04"><span><span
                                                                        class="hours me-1"></span><span>:</span></span><span><span
                                                                        class="minutes me-1"></span><span>:</span></span><span><span
                                                                        class="seconds"></span></span></span></span></button><a
                                                        class="btn bg-light-primary font-primary f-w-500"
                                                        href="{{ route('admin.job_companies') }}">Place a Bid</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <div class="product-image"> <img class="img-fluid"
                                                    src="{{ asset('assets/images/dashboard-6/action/5.png') }}"
                                                    alt="nft"><a class="author-img" href="#!"><img
                                                        class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-6/author/13.png') }}"
                                                        alt="author"></a></div>
                                            <div class="product-nft-content">
                                                <h6 class="f-14">Digital Sunset</h6>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <p class="f-14 c-o-light">High Bid<span
                                                            class="f-w-500 f-14 ps-1 text-black">1.04</span>
                                                    </p>
                                                    <div class="d-flex align-items-center"> <img class="me-1"
                                                            src="{{ asset('assets/images/dashboard-6/nft.png') }}"
                                                            alt="nft icon"><span class="f-w-600">10
                                                            ETH</span></div>
                                                </div>
                                                <div class="common-flex"><button class="btn bg-light-primary font-primary"
                                                        type="button"> <span class="common-align"><svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#stop-watch') }}">
                                                                </use>
                                                            </svg><span class="f-light f-w-500 timer"
                                                                data-date="Jun 23, 2025 04:17:01"><span><span
                                                                        class="hours me-1"></span><span>:</span></span><span><span
                                                                        class="minutes me-1"></span><span>:</span></span><span><span
                                                                        class="seconds"></span></span></span></span></button><a
                                                        class="btn bg-light-primary font-primary f-w-500"
                                                        href="{{ route('admin.job_companies') }}">Place a Bid</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <div class="product-image"> <img class="img-fluid"
                                                    src="{{ asset('assets/images/dashboard-6/action/6.png') }}"
                                                    alt="nft"><a class="author-img" href="#!"><img
                                                        class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-6/author/14.png') }}"
                                                        alt="author"></a></div>
                                            <div class="product-nft-content">
                                                <h6 class="f-14">Abstract Waves</h6>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <p class="f-14 c-o-light">High Bid<span
                                                            class="f-w-500 f-14 ps-1 text-black">7.12</span>
                                                    </p>
                                                    <div class="d-flex align-items-center"> <img class="me-1"
                                                            src="{{ asset('assets/images/dashboard-6/nft.png') }}"
                                                            alt="nft icon"><span class="f-w-600">12
                                                            ETH</span></div>
                                                </div>
                                                <div class="common-flex"><button class="btn bg-light-primary font-primary"
                                                        type="button"> <span class="common-align"><svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#stop-watch') }}">
                                                                </use>
                                                            </svg><span class="f-light f-w-500 timer"
                                                                data-date="Dec 16, 2024 06:25:01"><span><span
                                                                        class="hours me-1"></span><span>:</span></span><span><span
                                                                        class="minutes me-1"></span><span>:</span></span><span><span
                                                                        class="seconds"></span></span></span></span></button><a
                                                        class="btn bg-light-primary font-primary f-w-500"
                                                        href="{{ route('admin.job_companies') }}">Place a Bid</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <div class="product-image"> <img class="img-fluid"
                                                    src="{{ asset('assets/images/dashboard-6/action/7.png') }}"
                                                    alt="nft"><a class="author-img" href="#!"><img
                                                        class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-6/author/15.png') }}"
                                                        alt="author"></a></div>
                                            <div class="product-nft-content">
                                                <h6 class="f-14">Nature's Reflection</h6>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <p class="f-14 c-o-light">High Bid<span
                                                            class="f-w-500 f-14 ps-1 text-black">9.45</span>
                                                    </p>
                                                    <div class="d-flex align-items-center"> <img class="me-1"
                                                            src="{{ asset('assets/images/dashboard-6/nft.png') }}"
                                                            alt="nft icon"><span class="f-w-600">16
                                                            ETH</span></div>
                                                </div>
                                                <div class="common-flex"><button class="btn bg-light-primary font-primary"
                                                        type="button"> <span class="common-align"><svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#stop-watch') }}">
                                                                </use>
                                                            </svg><span class="f-light f-w-500 timer"
                                                                data-date="Dec 22, 2026 08:12:02"><span><span
                                                                        class="hours me-1"></span><span>:</span></span><span><span
                                                                        class="minutes me-1"></span><span>:</span></span><span><span
                                                                        class="seconds"></span></span></span></span></button><a
                                                        class="btn bg-light-primary font-primary f-w-500"
                                                        href="{{ route('admin.job_companies') }}">Place a Bid</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <div class="product-image"> <img class="img-fluid"
                                                    src="{{ asset('assets/images/dashboard-6/action/1.png') }}"
                                                    alt="nft"><a class="author-img" href="#!"><img
                                                        class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-6/author/11.png') }}"
                                                        alt="author"></a></div>
                                            <div class="product-nft-content">
                                                <h6 class="f-14">Digital Landscape</h6>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <p class="f-14 c-o-light">High Bid<span
                                                            class="f-w-500 f-14 ps-1 text-black">4.8</span>
                                                    </p>
                                                    <div class="d-flex align-items-center"> <img class="me-1"
                                                            src="{{ asset('assets/images/dashboard-6/nft.png') }}"
                                                            alt="nft icon"><span class="f-w-600">14
                                                            ETH</span></div>
                                                </div>
                                                <div class="common-flex"><button class="btn bg-light-primary font-primary"
                                                        type="button"> <span class="common-align"><svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#stop-watch') }}">
                                                                </use>
                                                            </svg><span class="f-light f-w-500 timer"
                                                                data-date="Dec 21, 2024 04:15:01"><span><span
                                                                        class="hours me-1"></span><span>:</span></span><span><span
                                                                        class="minutes me-1"></span><span>:</span></span><span><span
                                                                        class="seconds"></span></span></span></span></button><a
                                                        class="btn bg-light-primary font-primary f-w-500"
                                                        href="{{ route('admin.job_companies') }}">Place a Bid </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-sm-6 order-xxl-0 order-sm-2 box-col-6 box-ord-2">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Creators</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="creatorDropdown" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="creatorDropdown"><a
                                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item"
                                            href="#!">Tomorrow</a><a class="dropdown-item"
                                            href="#!">Yesterday</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="recent-table table-responsive art-creator-table">
                            <table class="table" id="nft-creator">
                                <thead>
                                    <tr>
                                        <th>Creator Name</th>
                                        <th>Creations</th>
                                        <th>Followers</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/creator/1.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.social_app') }}">Nexus Pulse</a>
                                                    <p class="mb-0 f-light">Digital Art</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>60</td>
                                        <td>10K</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/creator/2.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.social_app') }}">Harry Picker</a>
                                                    <p class="mb-0 f-light">Crypto Collectibles</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>25K</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/creator/4.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.social_app') }}">Jacob Jones</a>
                                                    <p class="mb-0 f-light">Nature-inspired</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>80</td>
                                        <td>10K</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/creator/5.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.social_app') }}">Jenny Wilson</a>
                                                    <p class="mb-0 f-light">Digital Art</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>82</td>
                                        <td>21M</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/author/10.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.social_app') }}">Alexis Taylor</a>
                                                    <p class="mb-0 f-light">Surrealism</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>96</td>
                                        <td>10M</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/author/16.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.social_app') }}">Caleb Riv</a>
                                                    <p class="mb-0 f-light">Nature-inspired</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>33</td>
                                        <td>22M</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/author/17.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.social_app') }}">Olivia Gor</a>
                                                    <p class="mb-0 f-light">Crypto Collectibles</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>25</td>
                                        <td>28K</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/author/18.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.social_app') }}">Eriko Fonsa</a>
                                                    <p class="mb-0 f-light">Digital Art</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>33</td>
                                        <td>46k</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 order-xxl-0 order-sm-1 box-col-12 box-ord-1">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>NFT Collections</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="collectionDropdown" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="collectionDropdown"><a
                                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item"
                                            href="#!">Tomorrow</a><a class="dropdown-item"
                                            href="#!">Yesterday</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 nft-collection">
                        <div class="swiper gallery-thumbs swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img class="img-fluid"
                                        src="{{ asset('assets/images/dashboard-6/collection/2.png') }}" alt="nft">
                                </div>
                                <div class="swiper-slide"><img class="img-fluid"
                                        src="{{ asset('assets/images/dashboard-6/collection/3.png') }}" alt="nft">
                                </div>
                                <div class="swiper-slide"><img class="img-fluid"
                                        src="{{ asset('assets/images/dashboard-6/collection/4.png') }}" alt="nft">
                                </div>
                                <div class="swiper-slide"><img class="img-fluid"
                                        src="{{ asset('assets/images/dashboard-6/collection/1.png') }}" alt="nft">
                                </div>
                            </div>
                        </div>
                        <div class="swiper gallery-top swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img class="img-fluid"
                                        src="{{ asset('assets/images/dashboard-6/collection/2.png') }}" alt="nft">
                                    <div class="nft-user-info">
                                        <div class="common-space">
                                            <h5>Light Dark Fish</h5>
                                            <div><i class="icon-heart me-1"></i><span>2.1k</span></div>
                                        </div>
                                        <div class="user-desc"><span>5 Items</span><i class="fa fa-circle"></i>Created by
                                            <img class="img-fluid"
                                                src="{{ asset('assets/images/dashboard-6/collection/user.png') }}"
                                                alt="user">@LibertyLoot...</div>
                                    </div>
                                </div>
                                <div class="swiper-slide"><img class="img-fluid"
                                        src="{{ asset('assets/images/dashboard-6/collection/3.png') }}" alt="nft">
                                    <div class="nft-user-info">
                                        <div class="common-space">
                                            <h5>Light Steel Ball</h5>
                                            <div><i class="icon-heart me-1"></i><span>4.1k</span></div>
                                        </div>
                                        <div class="user-desc"><span>3 Items</span><i class="fa fa-circle"></i>Created by
                                            <img class="img-fluid"
                                                src="{{ asset('assets/images/dashboard-6/collection/user1.png') }}"
                                                alt="user">@YankeeYield...</div>
                                    </div>
                                </div>
                                <div class="swiper-slide"><img class="img-fluid"
                                        src="{{ asset('assets/images/dashboard-6/collection/4.png') }}" alt="nft">
                                    <div class="nft-user-info">
                                        <div class="common-space">
                                            <h5>Light Fingers</h5>
                                            <div><i class="icon-heart me-1"></i><span>4.1k</span></div>
                                        </div>
                                        <div class="user-desc"><span>6 Items</span><i class="fa fa-circle"></i>Created
                                            by <img class="img-fluid"
                                                src="{{ asset('assets/images/dashboard-6/collection/user2.png') }}"
                                                alt="user">@YankeeYen...</div>
                                    </div>
                                </div>
                                <div class="swiper-slide"><img class="img-fluid"
                                        src="{{ asset('assets/images/dashboard-6/collection/1.png') }}" alt="nft">
                                    <div class="nft-user-info">
                                        <div class="common-space">
                                            <h5>Light Background</h5>
                                            <div><i class="icon-heart me-1"></i><span>7.1k</span></div>
                                        </div>
                                        <div class="user-desc"><span>3 Items</span><i class="fa fa-circle"></i>Created
                                            by <img class="img-fluid"
                                                src="{{ asset('assets/images/dashboard-6/collection/user3.png') }}"
                                                alt="user">@SamSell...</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-sm-6 order-xxl-0 order-sm-3 box-col-6 box-ord-3">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Artworks</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="artworkDropdown" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="artworkDropdown"><a
                                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item"
                                            href="#!">Tomorrow</a><a class="dropdown-item"
                                            href="#!">Yesterday</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="recent-table table-responsive art-creator-table">
                            <table class="table artwork-table" id="nft-artwork">
                                <thead>
                                    <tr>
                                        <th>Artwork Name</th>
                                        <th>Total Sales</th>
                                        <th>Total USD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/artwork/1.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.seller_list') }}">Digital Sunset</a>
                                                    <p class="mb-0 f-light">Jane Cooper</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>15,520</td>
                                        <td>$512,006+</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/artwork/2.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.seller_list') }}">CryptoPortrait</a>
                                                    <p class="mb-0 f-light">Guy Hawkins</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>95,248</td>
                                        <td>$842,015+</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/artwork/3.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.seller_list') }}">Abstract</a>
                                                    <p class="mb-0 f-light">Kristin Watson</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>30,851</td>
                                        <td>$950,350+</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/artwork/4.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.seller_list') }}">Surreal Dreams</a>
                                                    <p class="mb-0 f-light">Ralph Edwards</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>30,753</td>
                                        <td>$945,025+</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/artwork/5.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.seller_list') }}">Nature's Reflection</a>
                                                    <p class="mb-0 f-light">Annette Black</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>25,302</td>
                                        <td>$349,791+</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/artwork/6.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.seller_list') }}">NFT Masterpieces</a>
                                                    <p class="mb-0 f-light">Wade Warren</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>68,899</td>
                                        <td>$587,106+</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/artwork/7.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.seller_list') }}">CryptoCanvas</a>
                                                    <p class="mb-0 f-light">Kristin Watson</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>21,333</td>
                                        <td>$325,102+</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="img-fluid rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-6/artwork/8.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.seller_list') }}">ArtisticTokens</a>
                                                    <p class="mb-0 f-light">Ralph Edwards</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>25,321</td>
                                        <td>$102,122+</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
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
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/timer.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_6.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
