@extends('layouts.simple.master')

@section('title', 'Product List')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/range-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3> Product List</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid list-product-view product-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="row g-3">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-sidebar">
                            <div class="filter-section">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="mb-0 f-w-600">Filters<span class="pull-right"><i
                                                    class="fa fa-chevron-down toggle-data"></i></span></h6>
                                    </div>
                                    <div class="left-filter">
                                        <div class="card-body filter-cards-view animate-chk">
                                            <div class="product-filter">
                                                <h6 class="f-w-600">Category</h6>
                                                <div class="checkbox-animated mt-0"><label class="d-block"
                                                        for="edo-ani5"><input class="radio_animated" id="edo-ani5"
                                                            type="radio" data-original-title=""
                                                            title="">Laptops</label><label class="d-block"
                                                        for="edo-ani6"><input class="radio_animated" id="edo-ani6"
                                                            type="radio" data-original-title="" title="">Smart
                                                        Phones</label><label class="d-block" for="edo-ani7"><input
                                                            class="radio_animated" id="edo-ani7" type="radio"
                                                            data-original-title="" title="">Electric</label><label
                                                        class="d-block" for="edo-ani8"><input class="radio_animated"
                                                            id="edo-ani8" type="radio" data-original-title=""
                                                            title="">E-commerce</label><label class="d-block"
                                                        for="edo-ani9"><input class="radio_animated" id="edo-ani9"
                                                            type="radio" data-original-title=""
                                                            title="">Furniture</label></div>
                                            </div>
                                            <div class="product-filter">
                                                <h6 class="f-w-600">Brand</h6>
                                                <div class="checkbox-animated mt-0"><label class="d-block"
                                                        for="chk-ani"><input class="checkbox_animated" id="chk-ani"
                                                            type="checkbox" data-original-title="" title="">
                                                        Apple</label><label class="d-block" for="chk-ani1"><input
                                                            class="checkbox_animated" id="chk-ani1" type="checkbox"
                                                            data-original-title="" title="">Samsung</label><label
                                                        class="d-block" for="chk-ani2"><input class="checkbox_animated"
                                                            id="chk-ani2" type="checkbox" data-original-title=""
                                                            title="">Philips</label><label class="d-block"
                                                        for="chk-ani3"><input class="checkbox_animated" id="chk-ani3"
                                                            type="checkbox" data-original-title=""
                                                            title="">Motorola</label><label class="d-block"
                                                        for="chk-ani4"><input class="checkbox_animated" id="chk-ani4"
                                                            type="checkbox" data-original-title=""
                                                            title="">Amazon</label><label class="d-block"
                                                        for="chk-ani5"><input class="checkbox_animated" id="chk-ani5"
                                                            type="checkbox" data-original-title=""
                                                            title="">Wayfair</label>
                                                </div>
                                            </div>
                                            <div class="product-filter slider-product">
                                                <h6 class="f-w-600">Colors</h6>
                                                <div class="color-selector">
                                                    <ul>
                                                        <li class="white"></li>
                                                        <li class="black"></li>
                                                        <li class="orange"></li>
                                                        <li class="green"></li>
                                                        <li class="pink"></li>
                                                        <li class="yellow"></li>
                                                        <li class="blue"></li>
                                                        <li class="red"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-filter pb-0 product-range">
                                                <h6 class="f-w-600">Price</h6><input id="u-range-03" type="text">
                                            </div>
                                            <div class="product-filter">
                                                <h6 class="f-w-600">Discount</h6>
                                                <div class="checkbox-animated mt-0">
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani6" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani6"> <span class="name">upto 5%</span><span
                                                                class="number">(06)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani7" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani7"><span class="name">5% - 10%</span><span
                                                                class="number">(12)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani8" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani8"><span class="name">10% - 15%</span><span
                                                                class="number">(20)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani9" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani9"><span class="name"> 15% - 25%</span><span
                                                                class="number">(22)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani10" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani10"><span class="name">More than 25%</span><span
                                                                class="number">(24)</span></label></div>
                                                </div>
                                            </div>
                                            <div class="product-filter">
                                                <h6 class="f-w-600">Rating</h6>
                                                <div class="checkbox-animated mt-0 product-rate">
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani11" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani11"><span class="common-flex"><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i></span><span
                                                                class="number">(5 Star)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani12" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani12"><span class="common-flex"><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i></span><span
                                                                class="number">(4 Star)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani13" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani13"><span class="common-flex"><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i></span><span
                                                                class="number">(3 Star)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani14" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani14"><span class="common-flex"><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i></span><span
                                                                class="number">(2 Star)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani15" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani15"><span class="common-flex"><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i></span><span
                                                                class="number">(1 Star)</span></label></div>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-no-border text-end">
                        <div class="card-header-right-icon"><a class="btn btn-primary f-w-500"
                                href="{{ route('admin.add_products') }}"><i class="fa fa-plus pe-2"></i>Add Products</a>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="list-product">
                            <div class="recent-table table-responsive custom-scrollbar product-list-table">
                                <table class="table" id="product-list-view">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th> <span class="c-o-light f-w-600">Product Name</span></th>
                                            <th> <span class="c-o-light f-w-600">SKU</span></th>
                                            <th> <span class="c-o-light f-w-600">Category</span></th>
                                            <th> <span class="c-o-light f-w-600">Price</span></th>
                                            <th> <span class="c-o-light f-w-600">Qty</span></th>
                                            <th> <span class="c-o-light f-w-600">Status</span></th>
                                            <th> <span class="c-o-light f-w-600">Rating</span></th>
                                            <th> <span class="c-o-light f-w-600">Action</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/laptop.png') }}"
                                                            alt="laptop"></div><a href="{{ route('admin.products_details') }}">Apple
                                                        Desktop 2024</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">02145YK796</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Electric</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">56000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">13</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/phone.png') }}"
                                                            alt="phone"></div><a href="{{ route('admin.products_details') }}">Apple
                                                        Iphone 13 pro</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">56379FG3AW</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Smart Phones </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">25000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">15</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">In Stock</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/07.png') }}"
                                                            alt="washing machine"></div><a
                                                        href="{{ route('admin.products_details') }}">Wool Washing Machine</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">33KR5689B1</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Electric </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">55000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">5</p>
                                            </td>
                                            <td>
                                                <div class="badge badge-light-primary">In Stock</div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/wireless-headphone.png') }}"
                                                            alt="wireless headphone"></div><a
                                                        href="{{ route('admin.products_details') }}">Wireless Ear Buds</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">AD6789HEY0</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Electric</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">15000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">4</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/16.png') }}"
                                                            alt="purse"></div><a href="{{ route('admin.products_details') }}">Leather
                                                        Handbag</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">456DF78DFQ</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Accessories </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">1100.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">2</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/email-template/3.png') }}"
                                                            alt="chairs">
                                                    </div><a href="{{ route('admin.products_details') }}">Arm Chair</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">5633GD3K54</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Furniture </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">1000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">8</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/ipad.png') }}"
                                                            alt="mac laptop"></div><a href="{{ route('admin.products_details') }}">MacBook
                                                        Air
                                                        13.3-inch</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">589KO8PPQ8</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Electric </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">45000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">10</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/mouse.png') }}"
                                                            alt="mouse"></div><a href="{{ route('admin.products_details') }}">M185
                                                        Compact Wireless
                                                        Mouse</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">02145YK796</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Electric </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">56000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">13</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/25.png') }}"
                                                            alt="comfortable chair"></div><a
                                                        href="{{ route('admin.products_details') }}">Comfortable Chair</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">568GH3LLQ2</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Furniture </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">78000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">50</p>
                                            </td>
                                            <td>
                                                <div class="badge badge-light-primary">In Stock</div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/watch.png') }}"
                                                            alt="watch"></div><a href="{{ route('admin.products_details') }}">Sport
                                                        Watch</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">58FR7K34F6</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Electric </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">25000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">48</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/dvd.png') }}"
                                                            alt="DVD"></div><a href="{{ route('admin.products_details') }}">DVD</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">HG5667DFQ1</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Electric </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">5600.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">10</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">In Stock</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/speaker.png') }}"
                                                            alt="speakers"></div><a
                                                        href="{{ route('admin.products_details') }}">Speakers</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">02145YK796</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Electric</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">12200.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">50</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/01.png') }}"
                                                            alt="Grinder"></div><a href="{{ route('admin.products_details') }}">Bajaj
                                                        Grinder Jar</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">56379FG3AW</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Electric</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">19000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">48</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">In Stock</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/02.png') }}"
                                                            alt="headphones"></div><a href="{{ route('admin.products_details') }}">Golden
                                                        Headphone</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">33KR5689B1</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Smart Headphones </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">18000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">5</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">In Stock</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/14.png') }}"
                                                            alt="shoes"></div><a href="{{ route('admin.products_details') }}">Pixel
                                                        Shoes</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">568GH3LLQ2</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Accessories</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">7800.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">20</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">In Stock</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/watch.png') }}"
                                                            alt="watch"></div><a href="{{ route('admin.products_details') }}">Smart
                                                        Watch</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">58FR7K34F6</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Electric </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">25000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">48</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/phone.png') }}"
                                                            alt="i-phone"></div><a href="{{ route('admin.products_details') }}">Apple
                                                        Iphone 14 pro</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">56379FG3AW</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Smart Phones </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">19000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">48</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">In Stock</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/headphone.png') }}"
                                                            alt="headphones"></div><a
                                                        href="{{ route('admin.products_details') }}">Headphones</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">33KR5689B1</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Smart Headphones </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">10000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">5</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">In Stock</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/speaker.png') }}"
                                                            alt="speaker"></div><a href="{{ route('admin.products_details') }}">Wireless
                                                        Speaker</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">AD6789HEY0</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Electric</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">15000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">4</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/product/1.png') }}"
                                                            alt="chair"></div><a href="{{ route('admin.products_details') }}">Wood
                                                        Chair</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">456DF78DFQ</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Furniture </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">99000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">2</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/email-template/3.png') }}"
                                                            alt="chairs">
                                                    </div><a href="{{ route('admin.products_details') }}">Wood Chair</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">5633GD3K54</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Furniture </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">1000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">8</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/camera.png') }}"
                                                            alt="camera"></div><a href="{{ route('admin.products_details') }}">Smart
                                                        Camera</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">02145YK796</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Electric</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">56000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">13</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/05.png') }}"
                                                            alt="wallet"></div><a href="{{ route('admin.products_details') }}">Wallet</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">56379FG3AW</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Accessories</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">19000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">48</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">In Stock</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/03.png') }}"
                                                            alt="beauty blender"></div><a
                                                        href="{{ route('admin.products_details') }}">Beauty Blender</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">33KR5689B1</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Make-up </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">10000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">5</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">In Stock</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/08.png') }}"
                                                            alt="projector"></div><a
                                                        href="{{ route('admin.products_details') }}">Projector</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">AD6789HEY0</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Electric</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">15000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">4</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out </span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/15.png') }}"
                                                            alt="sofa"></div><a
                                                        href="{{ route('admin.products_details') }}">Comfortable Sofa</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">456DF78DFQ</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Furniture </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">99000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">2</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/mouse.png') }}"
                                                            alt="green wireless mouse"></div><a
                                                        href="{{ route('admin.products_details') }}">Green Wireless Mouse</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">AD6789HEY0</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Electric </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">15000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">4</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/06.png') }}"
                                                            alt="study lamp"></div><a href="{{ route('admin.products_details') }}">Study
                                                        Lamp</a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="c-o-light">456DF78DFQ</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">Electric </p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">99000.00</p>
                                            </td>
                                            <td>
                                                <p class="c-o-light">2</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Sold Out</span>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                            <td>
                                                <div class="product-action"><a class="square-white"
                                                        href="{{ route('admin.add_products') }}"> <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
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
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/range-slider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/range-slider/rangeslider-script.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/trash_popup.js') }}"></script>
    <script src="{{ asset('assets/js/common-color-selector.js') }}"></script>
@endsection
