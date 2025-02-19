@extends('layouts.simple.master')

@section('title', 'Seller-details')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Seller Details</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Seller Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid seller-details-wrapper">
        <div class="row">
            <div class="col-12 ord-xxl-2 box-ord-2">
                <div class="row">
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-11 widget-hover">
                            <div class="card-body">
                                <div class="common-align justify-content-start">
                                    <div class="analytics-tread bg-light-secondary"><svg class="fill-primary">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#c-revenue') }}"></use>
                                        </svg></div>
                                    <div> <span class="c-o-light">Total Revenue</span>
                                        <h4>$<span class="counter" data-target="5678000">0</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-11 widget-hover">
                            <div class="card-body">
                                <div class="common-align justify-content-start">
                                    <div class="analytics-tread bg-light-primary"><svg class="fill-primary">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#new-order') }}"></use>
                                        </svg></div>
                                    <div> <span class="c-o-light">Total Orders</span>
                                        <h4><span class="counter" data-target="890">0</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-11 widget-hover">
                            <div class="card-body">
                                <div class="common-align justify-content-start">
                                    <div class="analytics-tread bg-light-warning"><svg class="stroke-warning">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                                        </svg></div>
                                    <div> <span class="c-o-light">Total Stores</span>
                                        <h4><span class="counter" data-target="285">0</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-11 widget-hover">
                            <div class="card-body">
                                <div class="common-align justify-content-start">
                                    <div class="analytics-tread bg-light-success"><svg class="fill-success">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#analytics-user') }}"></use>
                                        </svg></div>
                                    <div> <span class="c-o-light">Total Users</span>
                                        <h4><span class="counter" data-target="2000">0</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 xl-100 ord-xxl-3 box-ord-3 box-col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card sales-report">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Sales Overview</h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="salesButton" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesButton"><a
                                                    class="dropdown-item" href="#!">Today</a><a class="dropdown-item"
                                                    href="#!">Tomorrow</a><a class="dropdown-item"
                                                    href="#!">Yesterday</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="social-tabs">
                                    <div class="nav nav-pills custom-scrollbar" id="social-pills-tab" role="tablist"><a
                                            class="active social-box bg-7-warning" href="#!" id="v-pills-youtube-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-youtube" role="tab"
                                            aria-controls="v-pills-youtube" aria-selected="true">
                                            <div class="frame-image">
                                                <div class="outline-20-warning">
                                                    <div class="bg-20-warning"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#fill-earning') }}">
                                                            </use>
                                                        </svg></div>
                                                </div>
                                            </div><span>Earnings</span>
                                        </a><a class="social-box bg-7-success" id="v-pills-facebook-tab" href="#!"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-facebook" role="tab"
                                            aria-controls="v-pills-facebook" aria-selected="false">
                                            <div class="frame-image">
                                                <div class="outline-20-success">
                                                    <div class="bg-20-success"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#fill-orders') }}">
                                                            </use>
                                                        </svg></div>
                                                </div>
                                            </div><span>Orders</span>
                                        </a><a class="social-box bg-7-primary" id="v-pills-instagram-tab" href="#!"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-instagram" role="tab"
                                            aria-controls="v-pills-instagram" aria-selected="false">
                                            <div class="frame-image">
                                                <div class="outline-20-primary">
                                                    <div class="bg-20-primary"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#fill-product') }}">
                                                            </use>
                                                        </svg></div>
                                                </div>
                                            </div><span>Products</span>
                                        </a></div>
                                    <div class="tab-content" id="social-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-youtube" role="tabpanel">
                                            <div>
                                                <div id="seller-earning"></div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-facebook" role="tabpanel">
                                            <div>
                                                <div id="seller-orders"></div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-instagram" role="tabpanel">
                                            <div>
                                                <div id="seller-products"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card heading-space">
                            <div class="card-header card-no-border text-end">
                                <div class="header-top">
                                    <h5>Top Selling Products</h5>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-0">
                                <div class="list-product vendor-selling-table">
                                    <div class="recent-table table-responsive custom-scrollbar">
                                        <table class="table" id="vendor-selling-product">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th> <span class="c-o-light f-w-600">Product</span></th>
                                                    <th> <span class="c-o-light f-w-600">Category</span>
                                                    </th>
                                                    <th> <span class="c-o-light f-w-600">Price</span></th>
                                                    <th> <span class="c-o-light f-w-600">Orders</span></th>
                                                    <th> <span class="c-o-light f-w-600">Stock</span></th>
                                                    <th> <span class="c-o-light f-w-600">Total Amount</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td>
                                                        <div class="product-names">
                                                            <div class="light-product-box"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/dashboard-8/product-categories/laptop.png') }}"
                                                                    alt="laptop"></div>
                                                            <p>Apple desktop 2024</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Laptops</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$587.25</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">35</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">50</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$29362.5</p>
                                                    </td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td>
                                                        <div class="product-names">
                                                            <div class="light-product-box"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/email-template/3.png') }}"
                                                                    alt="chair"></div>
                                                            <p>Arm Chair</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Furniture</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$1000.00</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">25</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">125</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$25000.00</p>
                                                    </td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td>
                                                        <div class="product-names">
                                                            <div class="light-product-box"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/product/accessories/01.png') }}"
                                                                    alt="mixer"></div>
                                                            <p>Bajaj Grinder Jar</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Electric</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$194.48</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">99</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">400</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$19253.52</p>
                                                    </td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td>
                                                        <div class="product-names">
                                                            <div class="light-product-box"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/product/accessories/02.png') }}"
                                                                    alt="headphone"></div>
                                                            <p>Golden Headphone</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Electric</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$777.69</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">20</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">140</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$15553.80</p>
                                                    </td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td>
                                                        <div class="product-names">
                                                            <div class="light-product-box"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/product/accessories/03.png') }}"
                                                                    alt="beauty blender"></div>
                                                            <p>Beauty Blender</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Make-up</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$999.00</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">10</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">25</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$4995.00</p>
                                                    </td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td>
                                                        <div class="product-names">
                                                            <div class="light-product-box"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/product/accessories/06.png') }}"
                                                                    alt="study lamp"></div>
                                                            <p>Study lamp</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Electric</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$100.10</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">1</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">10</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$100.10</p>
                                                    </td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td>
                                                        <div class="product-names">
                                                            <div class="light-product-box"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/product/accessories/07.png') }}"
                                                                    alt="washing machine"></div>
                                                            <p>Wool washing machine</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Electric</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$554.99</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">2</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">28</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$1109.98</p>
                                                    </td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td>
                                                        <div class="product-names">
                                                            <div class="light-product-box"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/product/accessories/08.png') }}"
                                                                    alt="projector"></div>
                                                            <p>Projector</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Electric</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$597.05</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">1</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">50</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$597.05</p>
                                                    </td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td>
                                                        <div class="product-names">
                                                            <div class="light-product-box"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/dashboard-8/product-categories/mouse.png') }}"
                                                                    alt="mouse"></div>
                                                            <p>M185 compact wireless mouse</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Electric</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$22.00</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">2</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">100</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$44.00</p>
                                                    </td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td>
                                                        <div class="product-names">
                                                            <div class="light-product-box"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/dashboard-8/product-categories/dvd.png') }}"
                                                                    alt="dvd"></div>
                                                            <p>DVD</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Electric</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$485.45</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">1</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">100</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$485.45</p>
                                                    </td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td>
                                                        <div class="product-names">
                                                            <div class="light-product-box"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/dashboard-8/product-categories/speaker.png') }}"
                                                                    alt="speaker"></div>
                                                            <p>Speakers</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Electric</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$245.45</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">1</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">50</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$245.45</p>
                                                    </td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td>
                                                        <div class="product-names">
                                                            <div class="light-product-box"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/dashboard-8/product-categories/watch.png') }}"
                                                                    alt="watch"></div>
                                                            <p>Smart watch</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Electric</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$478.48</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">1</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">120</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$478.48</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card heading-space">
                            <div class="card-header card-no-border text-end">
                                <div class="header-top">
                                    <h5>Recent Orders</h5>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-0">
                                <div class="list-product seller-order-table">
                                    <div class="recent-table table-responsive custom-scrollbar">
                                        <table class="table" id="seller-recent-order">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th> <span class="c-o-light f-w-600">Order Number</span>
                                                    </th>
                                                    <th> <span class="c-o-light f-w-600">Date</span></th>
                                                    <th> <span class="c-o-light f-w-600">Customers</span>
                                                    </th>
                                                    <th> <span class="c-o-light f-w-600">Amount</span></th>
                                                    <th> <span class="c-o-light f-w-600">Payment</span></th>
                                                    <th> <span class="c-o-light f-w-600">Action</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td class="c-o-light"><a href="{{ route('admin.order_details') }}">#100589</a></td>
                                                    <td>
                                                        <p class="c-o-light">24 Jan, 2024</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                                                alt="user"><a href="#!">Lorenzo Wright</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$258.25</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Completed</span>
                                                    </td>
                                                    <td> <a class="square-white" href="{{ route('admin.order_details') }}">
                                                            <i class="fa-solid fa-eye"></i></a></td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td class="c-o-light"><a href="{{ route('admin.order_details') }}">#100478</a></td>
                                                    <td>
                                                        <p class="c-o-light">02 Feb, 2024</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                                alt="user"><a href="#!">Cecilia Hart</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$478.21</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td> <a class="square-white" href="{{ route('admin.order_details') }}"><i
                                                                class="fa-solid fa-eye"></i></a></td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td class="c-o-light"><a href="{{ route('admin.order_details') }}">#100347</a></td>
                                                    <td>
                                                        <p class="c-o-light">09 Mar, 2024</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="{{ asset('assets/images/dashboard/user/13.jpg') }}"
                                                                alt="user"><a href="#!">Eliezer Zuniga</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$147.59</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-secondary">Shipped</span>
                                                    </td>
                                                    <td> <a class="square-white" href="{{ route('admin.order_details') }}"><i
                                                                class="fa-solid fa-eye"></i></a></td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td class="c-o-light"><a href="{{ route('admin.order_details') }}">#100148</a></td>
                                                    <td>
                                                        <p class="c-o-light">10 Apr, 2024</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                                alt="user"><a href="#!">Elliana Beltran</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$100.24</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Completed</span>
                                                    </td>
                                                    <td> <a class="square-white" href="{{ route('admin.order_details') }}"><i
                                                                class="fa-solid fa-eye"></i></a></td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td class="c-o-light"><a href="{{ route('admin.order_details') }}">#148007</a></td>
                                                    <td>
                                                        <p class="c-o-light">26 Feb, 2024</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                                alt="user"><a href="#!">Malik Dorsey</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$140.25</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td> <a class="square-white" href="{{ route('admin.order_details') }}"><i
                                                                class="fa-solid fa-eye"></i></a></td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td class="c-o-light"><a href="{{ route('admin.order_details') }}">#100589</a></td>
                                                    <td>
                                                        <p class="c-o-light">24 Jan, 2024</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="{{ asset('assets/images/dashboard/user/7.jpg') }}"
                                                                alt="user"><a href="#!">Blake Hogan</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$140.45</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-secondary">Shipped</span>
                                                    </td>
                                                    <td> <a class="square-white" href="{{ route('admin.order_details') }}"><i
                                                                class="fa-solid fa-eye"></i></a></td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td class="c-o-light"><a href="{{ route('admin.order_details') }}">#100687</a></td>
                                                    <td>
                                                        <p class="c-o-light">03 Nov, 2024</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                                alt="user"><a href="#!">Finn Tapia</a></div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$78.41</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Completed</span>
                                                    </td>
                                                    <td> <a class="square-white" href="{{ route('admin.order_details') }}"><i
                                                                class="fa-solid fa-eye"></i></a></td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td class="c-o-light"><a href="{{ route('admin.order_details') }}">#100980</a></td>
                                                    <td>
                                                        <p class="c-o-light">10 Dec, 2024</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="{{ asset('assets/images/dashboard-9/user/1.png') }}"
                                                                alt="user"><a href="#!">Grady Ochoa</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$147.45</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td> <a class="square-white" href="{{ route('admin.order_details') }}"><i
                                                                class="fa-solid fa-eye"></i></a></td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td class="c-o-light"><a href="{{ route('admin.order_details') }}">#107748</a></td>
                                                    <td>
                                                        <p class="c-o-light">20 Oct, 2024</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                                alt="user"><a href="#!">Jesus Andrews</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$478.58</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-secondary">Shipped</span>
                                                    </td>
                                                    <td> <a class="square-white" href="{{ route('admin.order_details') }}"><i
                                                                class="fa-solid fa-eye"></i></a></td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td class="c-o-light"><a href="{{ route('admin.order_details') }}">#100147</a></td>
                                                    <td>
                                                        <p class="c-o-light">25 Sep, 2024</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="{{ asset('assets/images/dashboard-9/user/4.png') }}"
                                                                alt="user"><a href="#!">Neil Wells</a></div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$78.56</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-success">Completed</span>
                                                    </td>
                                                    <td> <a class="square-white" href="{{ route('admin.order_details') }}"><i
                                                                class="fa-solid fa-eye"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card heading-space">
                            <div class="card-header card-no-border text-end">
                                <div class="header-top">
                                    <h5>All Products</h5>
                                    <div class="card-header-right-icon"><a class="btn btn-light-primary f-w-500"
                                            href="{{ route('admin.add_products') }}"><i class="fa fa-plus pe-2"></i>Add
                                            Products</a></div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-0">
                                <div class="list-product seller-details-table">
                                    <div class="recent-table table-responsive custom-scrollbar">
                                        <table class="table" id="seller-product-details">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th> <span class="c-o-light f-w-600">Product Name</span>
                                                    </th>
                                                    <th> <span class="c-o-light f-w-600">Category</span>
                                                    </th>
                                                    <th> <span class="c-o-light f-w-600">Price</span></th>
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
                                                                    alt="laptop"></div>
                                                            <p>Apple desktop 2024</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Laptops</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$478.45</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-secondary">Sold
                                                            Out</span></td>
                                                    <td>
                                                        <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-regular fa-star txt-warning"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-action"><a class="square-white"
                                                                href="{{ route('admin.add_products') }}"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!">
                                                                <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
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
                                                                    alt="phone"></div>
                                                            <p>Apple iphone 14 pro</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Electric </p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$1000.00</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-primary">In
                                                            Stock</span></td>
                                                    <td>
                                                        <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-regular fa-star txt-warning"></i><i
                                                                class="fa-regular fa-star txt-warning"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-action"><a class="square-white"
                                                                href="{{ route('admin.add_products') }}"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!">
                                                                <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
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
                                                                    alt="headphones"></div>
                                                            <p>Wireless Headphones </p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Electric</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$1000.00</p>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-primary">In Stock
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-action"><a class="square-white"
                                                                href="{{ route('admin.add_products') }}"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!">
                                                                <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
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
                                                                    alt="wireless headphone"></div>
                                                            <p>Wireless ear buds</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Electric </p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$150.00</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-secondary">Sold
                                                            Out</span></td>
                                                    <td>
                                                        <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-regular fa-star txt-warning"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-action"><a class="square-white"
                                                                href="{{ route('admin.add_products') }}"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!">
                                                                <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
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
                                                                    alt="chair"></div>
                                                            <p>Wood chair</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Furniture </p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$9999.00</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-secondary">Sold
                                                            Out</span></td>
                                                    <td>
                                                        <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-action"><a class="square-white"
                                                                href="{{ route('admin.add_products') }}"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!">
                                                                <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
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
                                                                    alt="chairs"></div>
                                                            <p>Arm Chair</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Furniture </p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$1000.00</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-secondary">Sold
                                                            Out</span></td>
                                                    <td>
                                                        <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-action"><a class="square-white"
                                                                href="{{ route('admin.add_products') }}"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!">
                                                                <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
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
                                                                    alt="mac laptop"></div>
                                                            <p>MacBook Air 13.3-inch</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Laptops </p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$4500.00</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-secondary">Sold
                                                            Out</span></td>
                                                    <td>
                                                        <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-regular fa-star txt-warning"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-action"><a class="square-white"
                                                                href="{{ route('admin.add_products') }}"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!">
                                                                <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
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
                                                                    alt="mouse"></div>
                                                            <p>M185 compact wireless mouse</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Electric</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$587.45</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-secondary">Sold
                                                            Out</span></td>
                                                    <td>
                                                        <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-regular fa-star txt-warning"></i><i
                                                                class="fa-regular fa-star txt-warning"></i><i
                                                                class="fa-regular fa-star txt-warning"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-action"><a class="square-white"
                                                                href="{{ route('admin.add_products') }}"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!">
                                                                <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a></div>
                                                    </td>
                                                </tr>
                                                <tr class="product-removes">
                                                    <td></td>
                                                    <td>
                                                        <div class="product-names">
                                                            <div class="light-product-box"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/other-images/cart-img.jpg') }}"
                                                                    alt="chairs"></div>
                                                            <p>Accent chair</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Furniture </p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$7889.47</p>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-primary">In Stock
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-action"><a class="square-white"
                                                                href="{{ route('admin.add_products') }}"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!">
                                                                <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
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
                                                                    alt="watch"></div>
                                                            <p>Smart watch</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Electric </p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$250.02</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-secondary">Sold
                                                            Out</span></td>
                                                    <td>
                                                        <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-action"><a class="square-white"
                                                                href="{{ route('admin.add_products') }}"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!">
                                                                <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
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
                                                                    alt="beauty blender"></div>
                                                            <p>Beauty Blender</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Make-up</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$780.50</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-primary">In
                                                            Stock</span></td>
                                                    <td>
                                                        <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-action"><a class="square-white"
                                                                href="{{ route('admin.add_products') }}"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!">
                                                                <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
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
                                                                    alt="study lamp"></div>
                                                            <p>Study lamp</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Electric</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$485.00</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-primary">In
                                                            Stock</span></td>
                                                    <td>
                                                        <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i><i
                                                                class="fa-solid fa-star txt-warning"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-action"><a class="square-white"
                                                                href="{{ route('admin.add_products') }}"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!">
                                                                <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
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
            </div>
            <div class="col-xl-3 ord-xxl-1 box-ord-1">
                <div class="row review-box">
                    <div class="col-12">
                        <div class="md-sidebar"><a class="btn btn-primary md-sidebar-toggle" href="#!">seller
                                profile</a>
                            <div class="md-sidebar-aside job-left-aside custom-scrollbar">
                                <div class="email-left-aside">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="accordion seller-profile" id="accordionPanelsStayOpenExample">
                                                <div class="accordion-item">
                                                    <div class="accordion-header"><button class="accordion-button"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseOne"
                                                            aria-expanded="true"
                                                            aria-controls="panelsStayOpen-collapseOne">Seller
                                                            Details</button></div>
                                                    <div class="accordion-collapse collapse show"
                                                        id="panelsStayOpen-collapseOne">
                                                        <div class="accordion-body">
                                                            <div class="common-f-start"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#logo-1') }}">
                                                                    </use>
                                                                </svg>
                                                                <div>
                                                                    <h5>Gadget Grove</h5><span class="c-o-light">Journee
                                                                        McDaniel</span>
                                                                </div>
                                                            </div>
                                                            <ul class="seller-details">
                                                                <li>
                                                                    <div><i class="fa-solid fa-location-dot"></i>
                                                                        <h6>Location </h6>
                                                                    </div><span>Germany</span>
                                                                </li>
                                                                <li>
                                                                    <div><i class="fa-solid fa-phone"></i>
                                                                        <h6>Phone Number </h6>
                                                                    </div><span>+49 30901820</span>
                                                                </li>
                                                                <li>
                                                                    <div><i class="fa-solid fa-envelope"></i>
                                                                        <h6>Email</h6>
                                                                    </div><span>Crewwilcox@gmail.com</span>
                                                                </li>
                                                                <li>
                                                                    <div><i class="fa-solid fa-square-up-right"></i>
                                                                        <h6>URL</h6>
                                                                    </div><a href="https://www.pixelstrap.com"
                                                                        target="_blank">https://www.pixelstrap.com</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <div class="accordion-header"><button class="accordion-button"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseFour"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseFour">Seller
                                                            Ratings</button></div>
                                                    <div class="accordion-collapse collapse show"
                                                        id="panelsStayOpen-collapseFour">
                                                        <div class="accordion-body">
                                                            <div class="row product-rating-box">
                                                                <div class="col-12">
                                                                    <div class="common-space mb-3">
                                                                        <h5 class="main-product-rating">
                                                                            4.5/5<i class="fa-solid fa-star"></i>
                                                                        </h5>
                                                                        <h6 class="ms-3 c-o-light">(58)</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="rating-box">
                                                                        <ul>
                                                                            <li>
                                                                                <div class="rating-list">
                                                                                    <h6>5<i class="fa-solid fa-star"></i>
                                                                                    </h6>
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar"
                                                                                            role="progressbar"
                                                                                            style="width: 85%">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="rating-list">
                                                                                    <h6>4<i class="fa-solid fa-star"></i>
                                                                                    </h6>
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar"
                                                                                            role="progressbar"
                                                                                            style="width: 50%">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="rating-list">
                                                                                    <h6>3<i class="fa-solid fa-star"></i>
                                                                                    </h6>
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar"
                                                                                            role="progressbar"
                                                                                            style="width: 43%">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="rating-list">
                                                                                    <h6>2<i class="fa-solid fa-star"></i>
                                                                                    </h6>
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar"
                                                                                            role="progressbar"
                                                                                            style="width: 32%">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="rating-list">
                                                                                    <h6>1 <i class="fa-solid fa-star"></i>
                                                                                    </h6>
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar"
                                                                                            role="progressbar"
                                                                                            style="width: 18%">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <div class="accordion-header"><button class="accordion-button"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseTwo"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseTwo">Notifications</button>
                                                    </div>
                                                    <div class="accordion-collapse collapse show"
                                                        id="panelsStayOpen-collapseTwo">
                                                        <div class="accordion-body">
                                                            <div class="notification-wrapper">
                                                                <div class="form-check checkbox checkbox-primary mb-0">
                                                                    <input class="form-check-input"
                                                                        id="checkbox-primary-1" type="checkbox"
                                                                        checked=""><label class="form-check-label"
                                                                        for="checkbox-primary-1">Receive
                                                                        notification for new orders.</label>
                                                                </div>
                                                                <div class="form-check checkbox checkbox-primary mb-0">
                                                                    <input class="form-check-input"
                                                                        id="checkbox-primary-2" type="checkbox"><label
                                                                        class="form-check-label"
                                                                        for="checkbox-primary-2">Receive
                                                                        notification for returns.</label>
                                                                </div>
                                                                <div class="form-check checkbox checkbox-primary mb-0">
                                                                    <input class="form-check-input"
                                                                        id="checkbox-primary-3" type="checkbox"><label
                                                                        class="form-check-label"
                                                                        for="checkbox-primary-3">Receive
                                                                        notification for customer
                                                                        reviews.</label>
                                                                </div>
                                                                <div class="form-check checkbox checkbox-primary mb-0">
                                                                    <input class="form-check-input"
                                                                        id="checkbox-primary-4" type="checkbox"><label
                                                                        class="form-check-label"
                                                                        for="checkbox-primary-4">Receive
                                                                        notification for product
                                                                        reviews.</label>
                                                                </div>
                                                            </div>
                                                            <p class="f-w-500">Receive Notification
                                                                On&colon;</p>
                                                            <ul class="checkbox-wrapper">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="whatsApp"><input
                                                                        class="form-check-input checkbox-shadow"
                                                                        id="checkbox-icon" type="checkbox"
                                                                        checked=""><label class="form-check-label"
                                                                        for="checkbox-icon"><i
                                                                            class="fa-brands fa-whatsapp"></i></label>
                                                                </li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="SMS"><input
                                                                        class="form-check-input checkbox-shadow"
                                                                        id="checkbox-icon1" type="checkbox"><label
                                                                        class="form-check-label" for="checkbox-icon1"><i
                                                                            class="fa-regular fa-comments"></i></label>
                                                                </li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="E-mail"><input
                                                                        class="form-check-input checkbox-shadow"
                                                                        id="checkbox-icon2" type="checkbox"
                                                                        checked=""><label class="form-check-label"
                                                                        for="checkbox-icon2"><i
                                                                            class="fa-regular fa-envelope"></i></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <div class="accordion-header"><button class="accordion-button"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseThree"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseThree">Policies</button>
                                                    </div>
                                                    <div class="accordion-collapse collapse show"
                                                        id="panelsStayOpen-collapseThree">
                                                        <div class="accordion-body">
                                                            <ul class="policies-wrapper">
                                                                <li> <label class="form-label">Return and
                                                                        Refund Policy</label>
                                                                    <div class="toolbar-box">
                                                                        <div id="toolbar11"><span
                                                                                class="ql-formats"><select
                                                                                    class="ql-size">
                                                                                    <option value="small">
                                                                                        Small</option>
                                                                                    <option selected="">
                                                                                        Normal</option>
                                                                                    <option value="large">
                                                                                        Large</option>
                                                                                    <option value="huge">
                                                                                        Huge</option>
                                                                                </select></span><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-bold">Bold</button><button
                                                                                    class="ql-italic">Italic</button><button
                                                                                    class="ql-underline">Underline</button></span><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-header"
                                                                                    value="1"></button><button
                                                                                    class="ql-header"
                                                                                    value="2"></button></span><span
                                                                                class="ql-formats"><button class="ql-list"
                                                                                    value="ordered">List</button><button
                                                                                    class="ql-list"
                                                                                    value="bullet">Bullet</button><button
                                                                                    class="ql-indent"
                                                                                    value="-1"></button><button
                                                                                    class="ql-indent"
                                                                                    value="+1"></button></span><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-link">Link</button><button
                                                                                    class="ql-image">Image</button><button
                                                                                    class="ql-video">Video</button><select
                                                                                    class="ql-color"></select><select
                                                                                    class="ql-background"></select></span><!-- Add more options here--><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-blockquote">Blockquote</button><button
                                                                                    class="ql-code-block"></button></span><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-align"
                                                                                    value=""></button><button
                                                                                    class="ql-align"
                                                                                    value="center"></button><button
                                                                                    class="ql-align"
                                                                                    value="right"></button><button
                                                                                    class="ql-align"
                                                                                    value="justify"></button></span>
                                                                        </div>
                                                                        <div class="quill-paragraph" id="editor11">
                                                                            <p>Within <strong>30 days
                                                                                </strong>of delivery, most
                                                                                new, unopened items can be
                                                                                <em>returned </em>for a
                                                                                complete refund. There could
                                                                                be some exclusions. <a href="#!">Read
                                                                                    more</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li> <label class="form-label">Shipping
                                                                        Policy</label>
                                                                    <div class="toolbar-box">
                                                                        <div id="toolbar12"><span
                                                                                class="ql-formats"><select
                                                                                    class="ql-size">
                                                                                    <option value="small">
                                                                                        Small</option>
                                                                                    <option selected="">
                                                                                        Normal</option>
                                                                                    <option value="large">
                                                                                        Large</option>
                                                                                    <option value="huge">
                                                                                        Huge</option>
                                                                                </select></span><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-bold">Bold</button><button
                                                                                    class="ql-italic">Italic</button><button
                                                                                    class="ql-underline">Underline</button></span><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-header"
                                                                                    value="1"></button><button
                                                                                    class="ql-header"
                                                                                    value="2"></button></span><span
                                                                                class="ql-formats"><button class="ql-list"
                                                                                    value="ordered">List</button><button
                                                                                    class="ql-list"
                                                                                    value="bullet">Bullet</button><button
                                                                                    class="ql-indent"
                                                                                    value="-1"></button><button
                                                                                    class="ql-indent"
                                                                                    value="+1"></button></span><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-link">Link</button><button
                                                                                    class="ql-image">Image</button><button
                                                                                    class="ql-video">Video</button><select
                                                                                    class="ql-color"></select><select
                                                                                    class="ql-background"></select></span><!-- Add more options here--><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-blockquote">Blockquote</button><button
                                                                                    class="ql-code-block"></button></span><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-align"
                                                                                    value=""></button><button
                                                                                    class="ql-align"
                                                                                    value="center"></button><button
                                                                                    class="ql-align"
                                                                                    value="right"></button><button
                                                                                    class="ql-align"
                                                                                    value="justify"></button></span>
                                                                        </div>
                                                                        <div class="quill-paragraph" id="editor12">
                                                                            <p>The destination and customs
                                                                                processing can affect how
                                                                                long an international
                                                                                delivery takes. <a href="#!">Read
                                                                                    more</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li> <label class="form-label">Contact &amp;
                                                                        Support</label>
                                                                    <div class="toolbar-box">
                                                                        <div id="toolbar13"><span
                                                                                class="ql-formats"><select
                                                                                    class="ql-size">
                                                                                    <option value="small">
                                                                                        Small</option>
                                                                                    <option selected="">
                                                                                        Normal</option>
                                                                                    <option value="large">
                                                                                        Large</option>
                                                                                    <option value="huge">
                                                                                        Huge</option>
                                                                                </select></span><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-bold">Bold</button><button
                                                                                    class="ql-italic">Italic</button><button
                                                                                    class="ql-underline">Underline</button></span><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-header"
                                                                                    value="1"></button><button
                                                                                    class="ql-header"
                                                                                    value="2"></button></span><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-list"
                                                                                    value="ordered">List</button><button
                                                                                    class="ql-list"
                                                                                    value="bullet">Bullet</button><button
                                                                                    class="ql-indent"
                                                                                    value="-1"></button><button
                                                                                    class="ql-indent"
                                                                                    value="+1"></button></span><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-link">Link</button><button
                                                                                    class="ql-image">Image</button><button
                                                                                    class="ql-video">Video</button><select
                                                                                    class="ql-color"></select><select
                                                                                    class="ql-background"></select></span><!-- Add more options here--><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-blockquote">Blockquote</button><button
                                                                                    class="ql-code-block"></button></span><span
                                                                                class="ql-formats"><button
                                                                                    class="ql-align"
                                                                                    value=""></button><button
                                                                                    class="ql-align"
                                                                                    value="center"></button><button
                                                                                    class="ql-align"
                                                                                    value="right"></button><button
                                                                                    class="ql-align"
                                                                                    value="justify"></button></span>
                                                                        </div>
                                                                        <div class="quill-paragraph" id="editor13">
                                                                            <p>Please feel free to use our
                                                                                secure message system to
                                                                                contact us with any queries
                                                                                or concerns. <a href="#!">Read
                                                                                    more</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul><button class="btn btn-primary">Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <div class="accordion-header"><button class="accordion-button"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseFive"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseFive">Product
                                                            Rating &amp; Reviews</button></div>
                                                    <div class="accordion-collapse collapse show"
                                                        id="panelsStayOpen-collapseFive">
                                                        <div class="accordion-body product-reviews">
                                                            <div class="review-people">
                                                                <ul class="review-list custom-scrollbar">
                                                                    <li>
                                                                        <div class="people-box"><img class="img-fluid"
                                                                                src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                                                alt="">
                                                                            <div class="people-comment">
                                                                                <div class="people-name"><a
                                                                                        class="name"
                                                                                        href="#!">Scarlet</a>
                                                                                    <div class="date-time">
                                                                                        <h6 class="text-content">
                                                                                            Arm Chair</h6>
                                                                                        <div class="product-rating">
                                                                                            <div class="common-flex">
                                                                                                <i
                                                                                                    class="fa-solid fa-star fill"></i><i
                                                                                                    class="fa-solid fa-star fill"></i><i
                                                                                                    class="fa-solid fa-star fill"></i><i
                                                                                                    class="fa-solid fa-star fill"></i><i
                                                                                                    class="fa-solid fa-star fill"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>The Arm Chair is ideal for
                                                                            extended TV viewing or reading
                                                                            sessions since it is both
                                                                            wonderfully comfy and elegant.
                                                                            Its contemporary style and
                                                                            robust construction go really
                                                                            well with my living room. Even
                                                                            if it's a little hefty to
                                                                            manoeuver, the overall comfort
                                                                            and craftsmanship make it an
                                                                            excellent buy.</p>
                                                                    </li>
                                                                    <li>
                                                                        <div class="people-box"><img class="img-fluid"
                                                                                src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                                                alt="">
                                                                            <div class="people-comment">
                                                                                <div class="people-name"><a
                                                                                        class="name"
                                                                                        href="#!">Arya </a>
                                                                                    <div class="date-time">
                                                                                        <h6 class="text-content">
                                                                                            Beauty Blender
                                                                                        </h6>
                                                                                        <div class="product-rating">
                                                                                            <div class="common-flex">
                                                                                                <i
                                                                                                    class="fa-solid fa-star fill"></i><i
                                                                                                    class="fa-solid fa-star fill"></i><i
                                                                                                    class="fa-solid fa-star fill"></i><i
                                                                                                    class="fa-solid fa-star fill"></i><i
                                                                                                    class="fa-regular fa-star txt-warning"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>When it comes to applying makeup
                                                                            flawlessly, the Beauty Blender
                                                                            is revolutionary. Its naturally
                                                                            airbrushed appearance is
                                                                            achieved by its soft, bouncy
                                                                            texture, which integrates
                                                                            foundation effortlessly. It is a
                                                                            staple in many consumers' beauty
                                                                            routines due to its longevity
                                                                            and simplicity of usage.</p>
                                                                    </li>
                                                                    <li>
                                                                        <div class="people-box"><img class="img-fluid"
                                                                                src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                                                alt="">
                                                                            <div class="people-comment">
                                                                                <div class="people-name"><a
                                                                                        class="name"
                                                                                        href="#!">Kyro</a>
                                                                                    <div class="date-time">
                                                                                        <h6 class="text-content">
                                                                                            Study lamp</h6>
                                                                                        <div class="product-rating">
                                                                                            <div class="common-flex">
                                                                                                <i
                                                                                                    class="fa-solid fa-star fill"></i><i
                                                                                                    class="fa-solid fa-star fill"></i><i
                                                                                                    class="fa-solid fa-star fill"></i><i
                                                                                                    class="fa-regular fa-star txt-warning"></i><i
                                                                                                    class="fa-regular fa-star txt-warning"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>The Study Lamp is excellent! It
                                                                            has adjustable, bright lighting
                                                                            that is ideal for studying and
                                                                            reading late into the night. Its
                                                                            elegant and utilitarian form
                                                                            blends in perfectly with any
                                                                            workstation.</p>
                                                                    </li>
                                                                    <li>
                                                                        <div class="people-box"><img class="img-fluid"
                                                                                src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                                                alt="">
                                                                            <div class="people-comment">
                                                                                <div class="people-name"><a
                                                                                        class="name"
                                                                                        href="#!">Izabella</a>
                                                                                    <div class="date-time">
                                                                                        <h6 class="text-content">
                                                                                            Smart watch</h6>
                                                                                        <div class="product-rating">
                                                                                            <div class="common-flex">
                                                                                                <i
                                                                                                    class="fa-solid fa-star fill"></i><i
                                                                                                    class="fa-solid fa-star fill"></i><i
                                                                                                    class="fa-solid fa-star fill"></i><i
                                                                                                    class="fa-solid fa-star fill"></i><i
                                                                                                    class="fa-regular fa-star txt-warning"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>For keeping track of fitness and
                                                                            remaining connected while on the
                                                                            go, the Smart Watch is a great
                                                                            partner. It is a pleasure to use
                                                                            thanks to its simple interface
                                                                            and elegant appearance.</p>
                                                                    </li>
                                                                </ul>
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
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/trash_popup.js') }}"></script>
    <script src="{{ asset('assets/js/editors/quill.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('assets/js/seller_detail.js') }}"></script>
@endsection
