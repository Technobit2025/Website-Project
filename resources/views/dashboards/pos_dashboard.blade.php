@extends('layouts.simple.master')

@section('title', 'POS Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>POS</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">POS</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-9 col-xl-8 box-col-8">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Product Categories</h5>
                                    <div class="card-header-right-btn"><a class="c-o-light" href="{{ route('admin.list_products') }}">View
                                            All </a></div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="slider-wrapper arrow-round">
                                    <div class="swiper shop-category-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><a class="shop-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-8/shop-categories/phone.png') }}"
                                                        alt="phone"></a><span
                                                    class="m-t-10 category-title f-w-500 text-gray">Phone</span>
                                            </div>
                                            <div class="swiper-slide"><a class="shop-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-8/shop-categories/camera.png') }}"
                                                        alt="Camera"></a><span
                                                    class="m-t-10 category-title f-w-500 text-gray">Camera</span>
                                            </div>
                                            <div class="swiper-slide"><a class="shop-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-8/shop-categories/laptop.png') }}"
                                                        alt="Laptop"></a><span
                                                    class="m-t-10 category-title f-w-500 text-gray">Laptop</span>
                                            </div>
                                            <div class="swiper-slide"><a class="shop-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-8/shop-categories/mouse.png') }}"
                                                        alt="Mouse"></a><span
                                                    class="m-t-10 category-title f-w-500 text-gray">Mouse</span>
                                            </div>
                                            <div class="swiper-slide"><a class="shop-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-8/shop-categories/tv.png') }}"
                                                        alt="tv"></a><span
                                                    class="m-t-10 category-title f-w-500 text-gray">TV</span>
                                            </div>
                                            <div class="swiper-slide"><a class="shop-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-8/shop-categories/drone.png') }}"
                                                        alt="Drone"></a><span
                                                    class="m-t-10 category-title f-w-500 text-gray">Drone</span>
                                            </div>
                                            <div class="swiper-slide"><a class="shop-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-8/shop-categories/watch.png') }}"
                                                        alt="watch"></a><span
                                                    class="m-t-10 category-title f-w-500 text-gray">Watch</span>
                                            </div>
                                            <div class="swiper-slide"><a class="shop-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-8/shop-categories/headphone.png') }}"
                                                        alt="headphone"></a><span
                                                    class="m-t-10 category-title f-w-500 text-gray">Headphone</span>
                                            </div>
                                            <div class="swiper-slide"><a class="shop-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-8/shop-categories/speaker.png') }}"
                                                        alt="speaker"></a><span
                                                    class="m-t-10 category-title f-w-500 text-gray">Speaker</span>
                                            </div>
                                            <div class="swiper-slide"><a class="shop-box" href="#!"><img
                                                        src="{{ asset('assets/images/dashboard-8/shop-categories/controller.png') }}"
                                                        alt="Game-controller"></a><span
                                                    class="m-t-10 category-title f-w-500 text-gray">Games</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="main-product-wrapper">
                                    <div class="product-header">
                                        <h5>Products</h5>
                                        <p class="f-m-light mt-1 text-gray f-w-500">Browse & Discover
                                            thousands of products here!</p>
                                    </div>
                                    <div class="product-body">
                                        <div class="input-group product-search"><span class="input-group-text"><i
                                                    class="search-icon text-gray" data-feather="search"></i></span><input
                                                class="form-control" type="text" placeholder="Search Product..."
                                                list="datalistOptionssearch" id="exampleDataList1"><datalist
                                                id="datalistOptionssearch">
                                                <option value="Bluetooth Calling Smartwatch"></option>
                                                <option value="Microsoft Surface Laptop"></option>
                                                <option value="Gaming Over Ear Headphone"></option>
                                                <option value="Apple iPhone 14 Plus"></option>
                                            </datalist></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body main-our-product">
                                <div class="row g-3">
                                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                        <div class="our-product-wrapper h-100 widget-hover">
                                            <div class="our-product-img"><img
                                                    src="{{ asset('assets/images/dashboard-8/product-categories/watch-2.png') }}"
                                                    alt="watch"></div>
                                            <div class="our-product-content">
                                                <h6 class="f-14 f-w-500 pt-2 pb-1">Bluetooth Calling
                                                    Smartwatch</h6>
                                                <div>
                                                    <h6 class="txt-primary">$109.00</h6>
                                                    <div class="common-f-start">
                                                        <div class="add-quantity btn border text-gray f-w-500">
                                                            <i class="fa fa-minus decrement-btn"></i><input
                                                                class="countdown-remove" type="text" value="1"><i
                                                                class="fa fa-plus increment-btn"></i>
                                                        </div>
                                                        <div class="btn border f-w-500"><span class="text-gray">Add</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                        <div class="our-product-wrapper h-100 widget-hover">
                                            <div class="our-product-img"><img
                                                    src="{{ asset('assets/images/dashboard-8/product-categories/laptop.png') }}"
                                                    alt="laptop"></div>
                                            <div class="our-product-content">
                                                <h6 class="f-14 f-w-500 pt-2 pb-1">Microsoft Surface Laptop
                                                </h6>
                                                <div>
                                                    <h6 class="txt-primary">$187.00</h6>
                                                    <div class="common-f-start">
                                                        <div class="add-quantity btn border text-gray f-w-500">
                                                            <i class="fa fa-minus decrement-btn"></i><input
                                                                class="countdown-remove" type="text" value="1"><i
                                                                class="fa fa-plus increment-btn"></i>
                                                        </div>
                                                        <div class="btn border f-w-500"><span class="text-gray">Add</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                        <div class="our-product-wrapper h-100 widget-hover">
                                            <div class="our-product-img"><img
                                                    src="{{ asset('assets/images/dashboard-8/product-categories/headphone.png') }}"
                                                    alt="headphone"></div>
                                            <div class="our-product-content">
                                                <h6 class="f-14 f-w-500 pt-2 pb-1">Gaming Over Ear Headphone
                                                </h6>
                                                <div>
                                                    <h6 class="txt-primary">$76.00</h6>
                                                    <div class="common-f-start">
                                                        <div class="add-quantity btn border text-gray f-w-500">
                                                            <i class="fa fa-minus decrement-btn"></i><input
                                                                class="countdown-remove" type="text" value="1"><i
                                                                class="fa fa-plus increment-btn"></i>
                                                        </div>
                                                        <div class="btn border f-w-500"><span class="text-gray">Add</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                        <div class="our-product-wrapper h-100 widget-hover">
                                            <div class="our-product-img"><img
                                                    src="{{ asset('assets/images/dashboard-8/product-categories/phone.png') }}"
                                                    alt="phone"></div>
                                            <div class="our-product-content">
                                                <h6 class="f-14 f-w-500 pt-2 pb-1">Apple iPhone 14 Plus</h6>
                                                <div>
                                                    <h6 class="txt-primary">$132.00</h6>
                                                    <div class="common-f-start">
                                                        <div class="add-quantity btn border text-gray f-w-500">
                                                            <i class="fa fa-minus decrement-btn"></i><input
                                                                class="countdown-remove" type="text" value="1"><i
                                                                class="fa fa-plus increment-btn"></i>
                                                        </div>
                                                        <div class="btn border f-w-500"><span class="text-gray">Add</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                        <div class="our-product-wrapper h-100 widget-hover">
                                            <div class="our-product-img"><img
                                                    src="{{ asset('assets/images/dashboard-8/product-categories/dvd.png') }}"
                                                    alt="DVD player"></div>
                                            <div class="our-product-content">
                                                <h6 class="f-14 f-w-500 pt-2 pb-1">Apple Smart HD TV</h6>
                                                <div>
                                                    <h6 class="txt-primary">$789.00</h6>
                                                    <div class="common-f-start">
                                                        <div class="add-quantity btn border text-gray f-w-500">
                                                            <i class="fa fa-minus decrement-btn"></i><input
                                                                class="countdown-remove" type="text" value="1"><i
                                                                class="fa fa-plus increment-btn"></i>
                                                        </div>
                                                        <div class="btn border f-w-500"><span class="text-gray">Add</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                        <div class="our-product-wrapper h-100 widget-hover">
                                            <div class="our-product-img"><img
                                                    src="{{ asset('assets/images/dashboard-8/product-categories/mac-laptop.png') }}"
                                                    alt="pink laptop"></div>
                                            <div class="our-product-content">
                                                <h6 class="f-14 f-w-500 pt-2 pb-1">Apple iPhone 14 Plus</h6>
                                                <div>
                                                    <h6 class="txt-primary">$809.00</h6>
                                                    <div class="common-f-start">
                                                        <div class="add-quantity btn border text-gray f-w-500">
                                                            <i class="fa fa-minus decrement-btn"></i><input
                                                                class="countdown-remove" type="text" value="1"><i
                                                                class="fa fa-plus increment-btn"></i>
                                                        </div>
                                                        <div class="btn border f-w-500"><span class="text-gray">Add</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                        <div class="our-product-wrapper h-100 widget-hover">
                                            <div class="our-product-img"><img
                                                    src="{{ asset('assets/images/dashboard-8/product-categories/speaker.png') }}"
                                                    alt="speaker"></div>
                                            <div class="our-product-content">
                                                <h6 class="f-14 f-w-500 pt-2 pb-1">Speakers Wireless</h6>
                                                <div>
                                                    <h6 class="txt-primary">$541.00</h6>
                                                    <div class="common-f-start">
                                                        <div class="add-quantity btn border text-gray f-w-500">
                                                            <i class="fa fa-minus decrement-btn"></i><input
                                                                class="countdown-remove" type="text" value="1"><i
                                                                class="fa fa-plus increment-btn"></i>
                                                        </div>
                                                        <div class="btn border f-w-500"><span class="text-gray">Add</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                        <div class="our-product-wrapper h-100 widget-hover">
                                            <div class="our-product-img"><img
                                                    src="{{ asset('assets/images/dashboard-8/product-categories/mouse.png') }}"
                                                    alt="mouse"></div>
                                            <div class="our-product-content">
                                                <h6 class="f-14 f-w-500 pt-2 pb-1">M185 Compact Wireless
                                                    Mouse</h6>
                                                <div>
                                                    <h6 class="txt-primary">$200.00</h6>
                                                    <div class="common-f-start">
                                                        <div class="add-quantity btn border text-gray f-w-500">
                                                            <i class="fa fa-minus decrement-btn"></i><input
                                                                class="countdown-remove" type="text" value="1"><i
                                                                class="fa fa-plus increment-btn"></i>
                                                        </div>
                                                        <div class="btn border f-w-500"><span class="text-gray">Add</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                        <div class="our-product-wrapper h-100 widget-hover">
                                            <div class="our-product-img"><img
                                                    src="{{ asset('assets/images/dashboard-8/product-categories/wireless-headphone.png') }}"
                                                    alt="wireless-headphone"></div>
                                            <div class="our-product-content">
                                                <h6 class="f-14 f-w-500 pt-2 pb-1">Wireless Headphone</h6>
                                                <div>
                                                    <h6 class="txt-primary">$333.00</h6>
                                                    <div class="common-f-start">
                                                        <div class="add-quantity btn border text-gray f-w-500">
                                                            <i class="fa fa-minus decrement-btn"></i><input
                                                                class="countdown-remove" type="text" value="1"><i
                                                                class="fa fa-plus increment-btn"></i>
                                                        </div>
                                                        <div class="btn border f-w-500"><span class="text-gray">Add</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                        <div class="our-product-wrapper h-100 widget-hover">
                                            <div class="our-product-img"><img
                                                    src="{{ asset('assets/images/dashboard-8/product-categories/keyboard.png') }}"
                                                    alt="keyboard"></div>
                                            <div class="our-product-content">
                                                <h6 class="f-14 f-w-500 pt-2 pb-1">RGB Gaming Keyboard</h6>
                                                <div>
                                                    <h6 class="txt-primary">$198.00</h6>
                                                    <div class="common-f-start">
                                                        <div class="add-quantity btn border text-gray f-w-500">
                                                            <i class="fa fa-minus decrement-btn"></i><input
                                                                class="countdown-remove" type="text" value="1"><i
                                                                class="fa fa-plus increment-btn"></i>
                                                        </div>
                                                        <div class="btn border f-w-500"><span class="text-gray">Add</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                        <div class="our-product-wrapper h-100 widget-hover">
                                            <div class="our-product-img"><img
                                                    src="{{ asset('assets/images/dashboard-8/product-categories/ipad.png') }}"
                                                    alt="ipad"></div>
                                            <div class="our-product-content">
                                                <h6 class="f-14 f-w-500 pt-2 pb-1">MacBook Air 13.3-inch
                                                </h6>
                                                <div>
                                                    <h6 class="txt-primary">$409.00</h6>
                                                    <div class="common-f-start">
                                                        <div class="add-quantity btn border text-gray f-w-500">
                                                            <i class="fa fa-minus decrement-btn"></i><input
                                                                class="countdown-remove" type="text" value="1"><i
                                                                class="fa fa-plus increment-btn"></i>
                                                        </div>
                                                        <div class="btn border f-w-500"><span class="text-gray">Add</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                        <div class="our-product-wrapper h-100 widget-hover">
                                            <div class="our-product-img"><img
                                                    src="{{ asset('assets/images/dashboard-8/product-categories/drone.png') }}"
                                                    alt="drone"></div>
                                            <div class="our-product-content">
                                                <h6 class="f-14 f-w-500 pt-2 pb-1">SYMA X5SW Remote
                                                    control..</h6>
                                                <div>
                                                    <h6 class="txt-primary">$341.00</h6>
                                                    <div class="common-f-start">
                                                        <div class="add-quantity btn border text-gray f-w-500">
                                                            <i class="fa fa-minus decrement-btn"></i><input
                                                                class="countdown-remove" type="text" value="1"><i
                                                                class="fa fa-plus increment-btn"></i>
                                                        </div>
                                                        <div class="btn border f-w-500"><span class="text-gray">Add</span>
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
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 box-col-4e">
                <div class="card customer-sticky">
                    <div class="card-header card-no-border pb-3">
                        <div class="header-top border-bottom pb-3">
                            <h5 class="m-0">Customer </h5>
                            <div class="card-header-right-icon create-right-btn"><a class="btn btn-light-primary f-w-500"
                                    href="#!" data-bs-toggle="modal" data-bs-target="#dashboard8">Create +</a></div>
                            <!-- Modal-->
                            <div class="modal fade" id="dashboard8" tabindex="-1" aria-labelledby="dashboard8"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content create-customers custom-input">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modaldashboard">Create Customer</h5>
                                            <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-0">
                                            <div class="text-start dark-sign-up">
                                                <div class="modal-body">
                                                    <form class="row g-3 needs-validation" novalidate="">
                                                        <div class="col-md-6"><label class="form-label"
                                                                for="validationCustom-8">First Name<span
                                                                    class="txt-danger">*</span></label><input
                                                                class="form-control" id="validationCustom-8"
                                                                type="text" placeholder="Enter your first-name"
                                                                required="">
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-md-6"><label class="form-label"
                                                                for="validationCustom09">Last Name<span
                                                                    class="txt-danger">*</span></label><input
                                                                class="form-control" id="validationCustom09"
                                                                type="text" placeholder="Enter your last-name"
                                                                required="">
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-md-6"><label class="form-label"
                                                                for="validationCustom08">Mobile Number<span
                                                                    class="txt-danger">*</span></label><input
                                                                class="form-control" id="validationCustom08"
                                                                type="number" placeholder="Mobile number"
                                                                required="">
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3"><label class="form-label"
                                                                    for="exampleFormControlInput8">Email<span
                                                                        class="txt-danger">*</span></label><input
                                                                    class="form-control" id="exampleFormControlInput8"
                                                                    type="email" placeholder="customername@gmail.com">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 d-flex justify-content-end">
                                                            <button class="btn btn-primary" type="submit">Create
                                                                +</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 order-details">
                        <div class="search-items">
                            <div class="input-group common-search"><span class="input-group-text"><i
                                        class="search-icon text-gray" data-feather="search"></i></span><input
                                    class="form-control" type="text" placeholder="Search Customer..."></div>
                            <div class="common-flex"><a class="btn btn-primary" href="{{ route('admin.cart') }}" target="_blank">Add to
                                    Cart</a><a class="btn button-light-secondary" href="#!">Empty Cart </a></div>
                        </div>
                        <h5 class="m-0">Billings</h5>
                        <div class="input-group common-search p-b-15"><span class="input-group-text"><i
                                    class="search-icon text-gray" data-feather="search"></i></span><input
                                class="form-control" type="text" placeholder="Search Product..."></div>
                        <div class="order-quantity p-b-20 border-bottom">
                            <div>
                                <div class="order-details-wrapper">
                                    <div class="left-details">
                                        <div class="order-img widget-hover"><img
                                                src="{{ asset('assets/images/dashboard-8/product-categories/phone.png') }}"
                                                alt="phone"></div>
                                    </div>
                                    <div class="category-details">
                                        <div class="order-details-right"><span class="text-gray mb-1">Category : <span
                                                    class="font-dark">Phone</span></span>
                                            <h6 class="f-14 f-w-500 mb-3">Apple iPhone 14 Plus</h6>
                                            <div class="last-order-detail">
                                                <h6 class="txt-primary">$987.00</h6><a href="#!"> <i
                                                        class="fa fa-trash trash-remove"></i></a>
                                            </div>
                                        </div>
                                        <div class="right-details">
                                            <div class="touchspin-wrapper"> <button
                                                    class="decrement-touchspin btn-touchspin"><i
                                                        class="fa fa-minus text-gray"></i></button><input
                                                    class="input-touchspin" id="inputData" type="number"
                                                    value="9"><button class="increment-touchspin btn-touchspin"><i
                                                        class="fa fa-plus text-gray"></i></button></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-details-wrapper">
                                    <div class="left-details">
                                        <div class="order-img widget-hover"><img
                                                src="{{ asset('assets/images/dashboard-8/product-categories/watch-2.png') }}"
                                                alt="watch"></div>
                                    </div>
                                    <div class="category-details">
                                        <div class="order-details-right"><span class="text-gray mb-1">Category : <span
                                                    class="font-dark">Watch</span></span>
                                            <h6 class="f-14 f-w-500 mb-3">Bluetooth Calling Smartwatch</h6>
                                            <div class="last-order-detail">
                                                <h6 class="txt-primary">$109.00</h6><a href="#!"><i
                                                        class="fa fa-trash trash-remove"></i></a>
                                            </div>
                                        </div>
                                        <div class="right-details">
                                            <div class="touchspin-wrapper"> <button
                                                    class="decrement-touchspin btn-touchspin"><i
                                                        class="fa fa-minus text-gray"></i></button><input
                                                    class="input-touchspin" id="inputData1" type="number"
                                                    value="9"><button class="increment-touchspin btn-touchspin"><i
                                                        class="fa fa-plus text-gray"></i></button></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0 empty-card trash-items">
                                    <div class="empty-cart-wrapper">
                                        <div class="empty-cart-content"><img
                                                src="{{ asset('assets/images/dashboard-8/order-trash.gif') }}"
                                                alt="order-trash">
                                        </div>
                                        <h6 class="text-gray">Your cart is empty!!!</h6><a href="{{ route('admin.category_page') }}"> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="coupon-code">
                                <div class="input-group"><input class="form-control" type="text"
                                        placeholder="Enter Coupon Code..." aria-label="Enter Code"
                                        aria-describedby="button-addon2"><button class="btn bg-light-secondary"
                                        id="button-addon2" type="button">Apply</button></div>
                            </div>
                        </div>
                        <div class="total-item">
                            <div class="item-number"><span class="text-gray">Item</span><span>2
                                    (Items)</span></div>
                            <div class="item-number"><span class="text-gray">Product
                                    Discount</span><span>$20</span></div>
                            <div class="item-number"><span class="text-gray">Coupon
                                    Discount</span><span>$0.00</span></div>
                            <div class="item-number border-bottom"><span
                                    class="text-gray">Subtotal</span><span>$1,186</span></div>
                            <div class="item-number pt-3 pb-0"><span class="f-w-500">Total</span>
                                <h6 class="f-w-500">$1,186</h6>
                            </div>
                        </div>
                        <h5 class="m-0 p-t-40">Payment Method</h5>
                        <div class="payment-methods">
                            <div>
                                <div class="bg-payment widget-hover"> <img
                                        src="{{ asset('assets/images/dashboard-8/payment-option/cash.svg') }}"
                                        alt="cash"></div>
                                <span class="f-w-500 text-gray">Cash</span>
                            </div>
                            <div>
                                <div class="bg-payment widget-hover"> <img
                                        src="{{ asset('assets/images/dashboard-8/payment-option/card.svg') }}"
                                        alt="card"></div>
                                <span class="f-w-500 text-gray">Card</span>
                            </div>
                            <div>
                                <div class="bg-payment widget-hover"> <img
                                        src="{{ asset('assets/images/dashboard-8/payment-option/wallet.svg') }}"
                                        alt="wallet"></div>
                                <span class="f-w-500 text-gray">E-Wallet</span>
                            </div>
                        </div>
                        <div class="place-order"><button class="btn btn-primary btn-hover-effect w-100 f-w-500"
                                type="button">Place
                                Order</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/touchspin_2/custom_touchspin.js') }}"></script>
    <script src="{{ asset('assets/js/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_8.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
