@extends('layouts.simple.master')

@section('title', 'E-commerce Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3> E-Commerce</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"><svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">E-Commerce</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid dashboard-2">
        <div class="row size-column">
            <div class="col-xxl-10 col-md-12 box-col-12 grid-ed-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body main-title-box">
                                <div class="common-space gap-2">
                                    <h6 class="f-light">The latest shopping trends and timeless essentials
                                        are waiting for you</h6>
                                    <div class="e-common-button"><a class="btn btn-primary" href="{{ route('admin.add_products') }}"
                                            target="_blank"> <i data-feather="plus"></i>Add Product</a><a
                                            class="btn btn-primary" href="{{ route('admin.order_history') }}" target="_blank">View
                                            Orders</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-md-7 box-col-7">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card o-hidden">
                                    <div class="card-body balance-widget"><span class="f-w-500 f-light">Total
                                            Earnings</span>
                                        <h4 class="mb-3 mt-1 f-w-500 mb-0 f-22">$<span class="counter"
                                                data-target="24515400">0</span></h4><a
                                            class="purchase-btn btn btn-primary btn-hover-effect f-w-500"
                                            href="{{ route('admin.sales_reports') }}" target="_blank">View Sales Report</a>
                                        <div class="mobile-right-img"><img class="mobile-img"
                                                src="{{ asset('assets/images/dashboard-2/monitor.png') }}"
                                                alt="monitor with money">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card small-widget">
                                    <div class="card-body primary"> <span class="f-light">New Orders</span>
                                        <div class="d-flex align-items-end gap-1">
                                            <h4 class="counter" data-target="2435">0</h4><span
                                                class="font-primary f-12 f-w-500"><i
                                                    class="icon-arrow-up"></i><span>+50%</span></span>
                                        </div>
                                        <div class="bg-gradient"> <svg class="stroke-icon svg-fill">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#new-order') }}"></use>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card small-widget">
                                    <div class="card-body warning"><span class="f-light">New
                                            Customers</span>
                                        <div class="d-flex align-items-end gap-1">
                                            <h4 class="counter" data-target="2908">0</h4><span
                                                class="font-warning f-12 f-w-500"><i
                                                    class="icon-arrow-up"></i><span>+20%</span></span>
                                        </div>
                                        <div class="bg-gradient"> <svg class="stroke-icon svg-fill">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#customers') }}"></use>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card small-widget">
                                    <div class="card-body secondary"><span class="f-light">Average
                                            Sale</span>
                                        <div class="d-flex align-items-end gap-1">
                                            <h4>$<span class="counter" data-target="389">0</span>k</h4><span
                                                class="font-secondary f-12 f-w-500"><i
                                                    class="icon-arrow-down"></i><span>-10%</span></span>
                                        </div>
                                        <div class="bg-gradient"> <svg class="stroke-icon svg-fill">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#sale') }}"></use>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card small-widget">
                                    <div class="card-body success"><span class="f-light">Gross Profit</span>
                                        <div class="d-flex align-items-end gap-1">
                                            <h4> $<span class="counter" data-target="3908">0</span></h4>
                                            <span class="font-success f-12 f-w-500"><i
                                                    class="icon-arrow-up"></i><span>+80%</span></span>
                                        </div>
                                        <div class="bg-gradient"> <svg class="stroke-icon svg-fill">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-5 col-sm-6 box-col-5">
                        <div class="appointment">
                            <div class="card">
                                <div class="card-header card-no-border">
                                    <div class="header-top">
                                        <h5 class="m-0">Top Customer</h5>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="appointment-table customer-table table-responsive custom-scrollbar">
                                        <table class="table table-bordernone">
                                            <tbody>
                                                <tr>
                                                    <td><img class="img-fluid img-40 rounded-circle me-2"
                                                            src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                            alt="user">
                                                    </td>
                                                    <td class="img-content-box"><a class="f-w-500"
                                                            href="{{ route('admin.user_profile') }}">Jane Cooper</a><span
                                                            class="f-light">jane@gmail.com</span></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid img-40 rounded-circle me-2"
                                                            src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                            alt="user">
                                                    </td>
                                                    <td class="img-content-box"><a class="f-w-500"
                                                            href="{{ route('admin.user_profile') }}">Cameron Willia</a><span
                                                            class="f-light">cameron@gmail.com</span></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid img-40 rounded-circle me-2"
                                                            src="{{ asset('assets/images/dashboard/user/9.jpg') }}"
                                                            alt="user">
                                                    </td>
                                                    <td class="img-content-box"><a class="f-w-500"
                                                            href="{{ route('admin.user_profile') }}">Floyd Miles</a><span
                                                            class="f-light">floyd@gmail.com</span></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid img-40 rounded-circle me-2"
                                                            src="{{ asset('assets/images/dashboard/user/5.jpg') }}"
                                                            alt="user">
                                                    </td>
                                                    <td class="img-content-box"><a class="f-w-500"
                                                            href="{{ route('admin.user_profile') }}">Dianne Russell</a><span
                                                            class="f-light">dianne@gmail.com</span></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid img-40 rounded-circle me-2"
                                                            src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                            alt="user">
                                                    </td>
                                                    <td class="img-content-box"><a class="f-w-500"
                                                            href="{{ route('admin.user_profile') }}">Guy Hawkins</a><span
                                                            class="f-light">guy@gmail.com</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-sm-6 box-col-6 ord-xl-i box-ord-1">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5 class="m-0">Orders This Month</h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="orderThisMonth" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orderThisMonth">
                                                <a class="dropdown-item" href="#">This Month</a><a
                                                    class="dropdown-item" href="#">Previous Month</a><a
                                                    class="dropdown-item" href="#">Last 3 Months</a><a
                                                    class="dropdown-item" href="#">Last 6 Months</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="light-card balance-card d-inline-block">
                                    <h4 class="mb-0">$12,000 <span class="f-light f-14">(15,080 To
                                            Goal)</span></h4>
                                </div>
                                <div class="order-wrapper">
                                    <div id="order-goal"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 box-col-6 ord-xl-ii box-ord-2">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Monthly Profits</h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="monthlyProfit" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="monthlyProfit">
                                                <a class="dropdown-item" href="#!">This Month</a><a
                                                    class="dropdown-item" href="#!">Previous Month</a><a
                                                    class="dropdown-item" href="#!">Last 3 Months</a><a
                                                    class="dropdown-item" href="#!">Last 6 Months</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="monthly-profit">
                                    <div id="profitmonthly"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 box-col-12 ord-xl-iii box-ord-3">
                        <div class="card heading-space">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Recent Transactions</h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="recentTransaction" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="recentTransaction"><a class="dropdown-item"
                                                    href="#!">This Month</a><a class="dropdown-item"
                                                    href="#!">Previous Month</a><a class="dropdown-item"
                                                    href="#!">Last 3 Months</a><a class="dropdown-item"
                                                    href="#!">Last 6 Months</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-0 recent-transaction">
                                <div class="recent-table table-responsive custom-scrollbar">
                                    <table class="table" id="recent-transaction">
                                        <thead>
                                            <tr>
                                                <th> </th>
                                                <th>Transaction ID</th>
                                                <th>Date</th>
                                                <th>Customers</th>
                                                <th>Product</th>
                                                <th>QTY</th>
                                                <th>Payments</th>
                                                <th>Total Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> </td>
                                                <td class="f-w-500">#541285</td>
                                                <td>20 Feb 2024</td>
                                                <td>Wade Warren</td>
                                                <td>Samsung TV</td>
                                                <td>512</td>
                                                <td>PayPal</td>
                                                <td>$52.00</td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td class="f-w-500">#558964</td>
                                                <td>02 Jun 2024</td>
                                                <td>Albert Flores</td>
                                                <td>Spring Bed</td>
                                                <td>620</td>
                                                <td>Gpay</td>
                                                <td>$82.00</td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td class="f-w-500">#562100</td>
                                                <td>20 Sep 2024</td>
                                                <td>Cody Fisher</td>
                                                <td>Comfort Sofa </td>
                                                <td>208</td>
                                                <td>Credit Card</td>
                                                <td>$45.87</td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td class="f-w-500">#968357</td>
                                                <td>16 Feb 2024</td>
                                                <td>Esther Howard</td>
                                                <td>Samsung TV</td>
                                                <td>754</td>
                                                <td>PayPal</td>
                                                <td>$44.00</td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td class="f-w-500">#545710</td>
                                                <td>10 Sep 2024</td>
                                                <td>Cody Fisher</td>
                                                <td>Comfort Sofa </td>
                                                <td>500</td>
                                                <td>Credit Card</td>
                                                <td>$14.35</td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td class="f-w-500">#369451</td>
                                                <td>13 Aug 2024</td>
                                                <td>Jenny Wilson</td>
                                                <td>Long Dress</td>
                                                <td>212</td>
                                                <td>Bank Transfer</td>
                                                <td>$12.32</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6 box-col-4 ord-xl-iv box-ord-4">
                        <div class="card purchase-card discover"><img class="img-fluid"
                                src="{{ asset('assets/images/dashboard-2/discover.png') }}" alt="vector discover">
                            <div class="card-body pt-3">
                                <h5 class="mb-1">Discover Pro</h5>
                                <p class="f-light">Advanced navigation system with traffic updates in
                                    real-time</p><a class="purchase-btn btn btn-hover-effect btn-primary f-w-500"
                                    href="https://1.envato.market/3GVzd" target="_blank">Update Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-md-6 box-col-4 ord-xl-v box-ord-5">
                        <div class="card visitor-card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5 class="m-0">Website Traffic<span class="f-14 font-primary f-w-500 ms-1"><svg
                                                class="svg-fill me-1">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#user-visitor') }}">
                                                </use>
                                            </svg>(+2.8)</span></h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="visitorButton" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="visitorButton">
                                                <a class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                                    href="#">Yesterday</a><a class="dropdown-item"
                                                    href="#">This Week </a><a class="dropdown-item"
                                                    href="#">This Month</a><a class="dropdown-item"
                                                    href="#">Previous Month</a>
                                            </div>
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
                    <div class="col-xxl-5 col-xl-4 box-col-4 ord-xl-vi box-ord-6">
                        <div class="card recent-order">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5 class="m-0">Recent Orders</h5>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="recent-sliders">
                                    <div class="nav nav-pills recent-order-scroll custom-scrollbar" id="v-pills-tab"
                                        role="tablist"><a class="active frame-box" href="#!"
                                            id="v-pills-furniture-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-furniture" role="tab"
                                            aria-controls="v-pills-furniture" aria-selected="true"><span
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-title="Furniture"> <span class="frame-image"><img
                                                        src="{{ asset('assets/images/dashboard-2/order/1.png') }}"
                                                        alt="vector T-shirt"></span></span></a><a class="frame-box"
                                            id="v-pills-sport-tab" href="#!" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-sport" role="tab" aria-controls="v-pills-sport"
                                            aria-selected="false"><span data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" data-bs-title="Sports"><span
                                                    class="frame-image"><img
                                                        src="{{ asset('assets/images/dashboard-2/order/2.png') }}"
                                                        alt="vector television"></span></span></a><a class="frame-box"
                                            id="v-pills-electronics-tab" href="#!" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-electronics" role="tab"
                                            aria-controls="v-pills-electronics" aria-selected="false"><span
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-title="Electronics"><span class="frame-image"><img
                                                        src="{{ asset('assets/images/dashboard-2/order/3.png') }}"
                                                        alt="vector headphone"></span></span></a><a class="frame-box"
                                            id="v-pills-jewelry-tab" href="#!" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-jewelry" role="tab"
                                            aria-controls="v-pills-jewelry" aria-selected="false"><span
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-title="Jewelry"><span class="frame-image"><img
                                                        src="{{ asset('assets/images/dashboard-2/order/4.png') }}"
                                                        alt="vector chair"></span></span></a><a class="frame-box"
                                            id="v-pills-cloth-tab" href="#!" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-cloth" role="tab" aria-controls="v-pills-cloth"
                                            aria-selected="false"><span data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" data-bs-title="Clothing"><span
                                                    class="frame-image"><img
                                                        src="{{ asset('assets/images/dashboard-2/order/5.png') }}"
                                                        alt="vector lamp"></span></span></a><a class="frame-box"
                                            id="v-pills-shoes-tab" href="#!" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-shoes" role="tab" aria-controls="v-pills-shoes"
                                            aria-selected="false"><span data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" data-bs-title="shoes"><span
                                                    class="frame-image"><img
                                                        src="{{ asset('assets/images/dashboard-2/order/7.png') }}"
                                                        alt="shoes"></span></span></a></div>
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-furniture" role="tabpanel">
                                            <div class="recent-table table-responsive custom-scrollbar recent-items">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="c-light">Item</th>
                                                            <th class="c-light">Qty</th>
                                                            <th class="c-light">Price</th>
                                                            <th class="c-light">Total Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="product-content">
                                                                    <div class="order-image"><img
                                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/4.png') }}"
                                                                            alt="t-shirt"></div>
                                                                    <div>
                                                                        <h6 class="f-14 mb-0"><a
                                                                                href="{{ route('admin.order_history') }}">Office
                                                                                chair</a></h6><span class="f-light f-12">Id
                                                                            :
                                                                            #CFDE-2163</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="f-w-500">X1</td>
                                                            <td class="f-w-500">$56.00</td>
                                                            <td class="f-w-500">$100.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="product-content">
                                                                    <div class="order-image"><img
                                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/3.png') }}"
                                                                            alt="t-shirt"></div>
                                                                    <div>
                                                                        <h6 class="f-14 mb-0"><a
                                                                                href="{{ route('admin.order_history') }}">Wooden
                                                                                table</a></h6><span class="f-light f-12">Id
                                                                            :
                                                                            #CFDE-2780</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="f-w-500">X2</td>
                                                            <td class="f-w-500">$156.00</td>
                                                            <td class="f-w-500">$870.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-sport" role="tabpanel">
                                            <div class="recent-table table-responsive custom-scrollbar recent-items">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="f-light">Item</th>
                                                            <th class="f-light">Qty</th>
                                                            <th class="f-light">Price</th>
                                                            <th class="f-light">Total Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="product-content">
                                                                    <div class="order-image"><img
                                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/5.png') }}"
                                                                            alt="television"></div>
                                                                    <div>
                                                                        <h6 class="f-14 mb-0"><a
                                                                                href="{{ route('admin.order_history') }}">Rugby
                                                                                ball</a></h6><span class="f-light f-12">Id
                                                                            :
                                                                            #CFDE-2163</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="f-w-500">X1</td>
                                                            <td class="f-w-500">$56.00</td>
                                                            <td class="f-w-500">$390.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="product-content">
                                                                    <div class="order-image"><img
                                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/6.png') }}"
                                                                            alt="television"></div>
                                                                    <div>
                                                                        <h6 class="f-14 mb-0"><a
                                                                                href="{{ route('admin.order_history') }}">Soccer
                                                                                ball</a></h6><span class="f-light f-12">Id
                                                                            :
                                                                            #CFDE-2780</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="f-w-500">X2</td>
                                                            <td class="f-w-500">$100.00</td>
                                                            <td class="f-w-500">$870.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-electronics" role="tabpanel">
                                            <div class="recent-table table-responsive custom-scrollbar recent-items">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="f-light">Item</th>
                                                            <th class="f-light">Qty</th>
                                                            <th class="f-light">Price</th>
                                                            <th class="f-light">Total Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="product-content">
                                                                    <div class="order-image"><img
                                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/1.png') }}"
                                                                            alt="headephones"></div>
                                                                    <div>
                                                                        <h6 class="f-14 mb-0"><a
                                                                                href="{{ route('admin.order_history') }}">Office
                                                                                clock</a></h6><span class="f-light f-12">Id
                                                                            :
                                                                            #CFDE-2163</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="f-w-500">X1</td>
                                                            <td class="f-w-500">$56.00</td>
                                                            <td class="f-w-500">$100.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="product-content">
                                                                    <div class="order-image"><img
                                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/2.png') }}"
                                                                            alt="headephones"></div>
                                                                    <div>
                                                                        <h6 class="f-14 mb-0"><a
                                                                                href="{{ route('admin.order_history') }}">Coffee
                                                                                maker</a></h6><span class="f-light f-12">Id
                                                                            :
                                                                            #CFDE-2780</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="f-w-500">X2</td>
                                                            <td class="f-w-500">$156.00</td>
                                                            <td class="f-w-500">$100.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-jewelry" role="tabpanel">
                                            <div class="recent-table table-responsive custom-scrollbar recent-items">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="f-light">Item</th>
                                                            <th class="f-light">Qty</th>
                                                            <th class="f-light">Price</th>
                                                            <th class="f-light">Total Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="product-content">
                                                                    <div class="order-image"><img
                                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/7.png') }}"
                                                                            alt="chair"></div>
                                                                    <div>
                                                                        <h6 class="f-14 mb-0"><a
                                                                                href="{{ route('admin.order_history') }}">Thyst
                                                                                earring</a></h6><span
                                                                            class="f-light f-12">Id :
                                                                            #CFDE-2163</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="f-w-500">X1</td>
                                                            <td class="f-w-500">$48.00</td>
                                                            <td class="f-w-500">$50.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="product-content">
                                                                    <div class="order-image"><img
                                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/8.png') }}"
                                                                            alt="chair"></div>
                                                                    <div>
                                                                        <h6 class="f-14 mb-0"><a
                                                                                href="{{ route('admin.order_history') }}">Necklace</a>
                                                                        </h6><span class="f-light f-12">Id :
                                                                            #CFDE-2780</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="f-w-500">X2</td>
                                                            <td class="f-w-500">$73.00</td>
                                                            <td class="f-w-500">$75.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-cloth" role="tabpanel">
                                            <div class="recent-table table-responsive custom-scrollbar recent-items">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="f-light">Item</th>
                                                            <th class="f-light">Qty</th>
                                                            <th class="f-light">Price</th>
                                                            <th class="f-light">Total Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="product-content">
                                                                    <div class="order-image"><img
                                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/9.png') }}"
                                                                            alt="lamp"></div>
                                                                    <div>
                                                                        <h6 class="f-14 mb-0"><a
                                                                                href="{{ route('admin.order_history') }}">Woman
                                                                                short</a></h6><span class="f-light f-12">Id
                                                                            :
                                                                            #CFDE-2163</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="f-w-500">X1</td>
                                                            <td class="f-w-500">$20.00</td>
                                                            <td class="f-w-500">$25.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="product-content">
                                                                    <div class="order-image"><img
                                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/10.png') }}"
                                                                            alt="lamp"></div>
                                                                    <div>
                                                                        <h6 class="f-14 mb-0"><a
                                                                                href="{{ route('admin.order_history') }}">Summer
                                                                                t-shirt</a></h6><span
                                                                            class="f-light f-12">Id :
                                                                            #CFDE-2780</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="f-w-500">X2</td>
                                                            <td class="f-w-500">$70.00</td>
                                                            <td class="f-w-500">$88.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-shoes" role="tabpanel">
                                            <div class="recent-table table-responsive custom-scrollbar recent-items">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="c-light">Item</th>
                                                            <th class="c-light">Qty</th>
                                                            <th class="c-light">Price</th>
                                                            <th class="c-light">Total Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="product-content">
                                                                    <div class="order-image"><img
                                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/11.png') }}"
                                                                            alt="lamp"></div>
                                                                    <div>
                                                                        <h6 class="f-14 mb-0"><a
                                                                                href="{{ route('admin.order_history') }}">Leather
                                                                                sandals</a></h6><span
                                                                            class="f-light f-12">Id :
                                                                            #CFDE-2163</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="f-w-500">X1</td>
                                                            <td class="f-w-500">$20.00</td>
                                                            <td class="f-w-500">$25.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="product-content">
                                                                    <div class="order-image"><img
                                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/12.png') }}"
                                                                            alt="lamp"></div>
                                                                    <div>
                                                                        <h6 class="f-14 mb-0"><a
                                                                                href="{{ route('admin.order_history') }}">Blue
                                                                                sneakers</a></h6><span
                                                                            class="f-light f-12">Id :
                                                                            #CFDE-2780</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="f-w-500">X2</td>
                                                            <td class="f-w-500">$70.00</td>
                                                            <td class="f-w-500">$88.00</td>
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
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-md-4 grid-ed-none box-col-none d-xxl-block d-none">
                <div class="card">
                    <div class="card-header card-no-border">
                        <h5>Top Categories</h5>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="categories-list">
                            <li class="d-flex">
                                <div class="bg-light"> <img src="{{ asset('assets/images/dashboard-2/category/1.png') }}"
                                        alt="vector burger"></div>
                                <div>
                                    <h6 class="mb-0"><a href="{{ route('admin.category_page') }}">Food & Drinks</a></h6><span
                                        class="f-light f-12 f-w-500">(12,200)</span>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="bg-light"> <img src="{{ asset('assets/images/dashboard-2/category/2.png') }}"
                                        alt="vector furniture"></div>
                                <div>
                                    <h6 class="mb-0"><a href="{{ route('admin.category_page') }}">Furniture</a></h6><span
                                        class="f-light f-12 f-w-500">(7,510)</span>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="bg-light"> <img src="{{ asset('assets/images/dashboard-2/category/3.png') }}"
                                        alt="vector grocery box"></div>
                                <div>
                                    <h6 class="mb-0"><a href="{{ route('admin.category_page') }}">Grocery</a></h6><span
                                        class="f-light f-12 f-w-500">(15,475)</span>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="bg-light"> <img src="{{ asset('assets/images/dashboard-2/category/4.png') }}"
                                        alt="vector game remote"></div>
                                <div>
                                    <h6 class="mb-0"><a href="{{ route('admin.category_page') }}">Electronics</a></h6><span
                                        class="f-light f-12 f-w-500">(27,840)</span>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="bg-light"> <img src="{{ asset('assets/images/dashboard-2/category/5.png') }}"
                                        alt="vector toys">
                                </div>
                                <div>
                                    <h6 class="mb-0"><a href="{{ route('admin.category_page') }}">Toys & Games</a></h6><span
                                        class="f-light f-12 f-w-500">(8,788)</span>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="bg-light"> <img src="{{ asset('assets/images/dashboard-2/category/6.png') }}"
                                        alt="vector monitor"></div>
                                <div>
                                    <h6 class="mb-0"><a href="{{ route('admin.category_page') }}">Desktop</a></h6><span
                                        class="f-light f-12 f-w-500">(10,673)</span>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="bg-light"> <img src="{{ asset('assets/images/dashboard-2/category/7.png') }}"
                                        alt="vector mobile"></div>
                                <div>
                                    <h6 class="mb-0"><a href="{{ route('admin.category_page') }}">Mobile & Accessories</a></h6>
                                    <span class="f-light f-12 f-w-500">(5,129) </span>
                                </div>
                            </li>
                        </ul>
                        <div class="recent-activity notification">
                            <h5>Recent Activity</h5>
                            <ul>
                                <li class="d-flex">
                                    <div class="activity-dot-primary"></div>
                                    <div class="w-100 ms-3">
                                        <p class="d-flex justify-content-between mb-2"><span
                                                class="date-content light-background">8th March, 2024
                                            </span></p>
                                        <h6>Added New Items<span class="dot-notification"></span></h6><span
                                            class="f-light">Its arms extended outward to reveal a padded,
                                            angled arm</span>
                                        <div class="recent-images">
                                            <ul>
                                                <li>
                                                    <div class="recent-img-wrap"><img
                                                            src="{{ asset('assets/images/dashboard-2/product/1.png') }}"
                                                            alt="chair"></div>
                                                </li>
                                                <li>
                                                    <div class="recent-img-wrap"><img
                                                            src="{{ asset('assets/images/dashboard-2/product/2.png') }}"
                                                            alt="chair"></div>
                                                </li>
                                                <li>
                                                    <div class="recent-img-wrap"><img
                                                            src="{{ asset('assets/images/dashboard-2/product/3.png') }}"
                                                            alt="men t-shirt"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="activity-dot-warning"></div>
                                    <div class="w-100 ms-3">
                                        <p class="d-flex justify-content-between mb-2"><span
                                                class="date-content light-background">2nd Sep, Today</span>
                                        </p>
                                        <h6>Ankita Comments this Products<span class="dot-notification"></span></h6>
                                        <span>It looks amazing
                                            in my room, arrived swiftly, and was simple to build</span>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="activity-dot-secondary"></div>
                                    <div class="w-100 ms-3">
                                        <p class="d-flex justify-content-between mb-2"><span
                                                class="date-content light-background">3nd Sep, 2024</span>
                                        </p>
                                        <h6>Jack Purchase <span class="dot-notification"></span></h6>
                                        <span>It's the centre of attention in my room, and people always
                                            comment on it.</span>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="activity-dot-success"></div>
                                    <div class="w-100 ms-3">
                                        <p class="d-flex justify-content-between mb-2"><span
                                                class="date-content light-background">2nd Sep, Today</span>
                                        </p>
                                        <h6>Jerry Comments this Products<span class="dot-notification"></span></h6>
                                        <span>This couch was a
                                            recent buy, and I adore it!</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7 col-lg-8 col-md-7 box-col-8 ord-xl-vii box-ord-7">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Order Overview</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="orderOverview" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orderOverview"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row m-0 overall-card overview-card">
                            <div class="col-xl-9 col-md-8 col-sm-8 p-0 box-col-8 w-md-100">
                                <div class="chart-right">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card-body p-0">
                                                <ul class="balance-data">
                                                    <li><span class="circle bg-secondary"></span><span
                                                            class="f-light ms-1">Refunds</span></li>
                                                    <li><span class="circle bg-primary"> </span><span
                                                            class="f-light ms-1">Earning</span></li>
                                                    <li><span class="circle bg-success"> </span><span
                                                            class="f-light ms-1">Order</span></li>
                                                </ul>
                                                <div class="current-sale-container order-container">
                                                    <div class="overview-wrapper" id="orderoverview"></div>
                                                    <div class="back-bar-container">
                                                        <div id="order-bar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-4 p-0 box-col-4e ds-md-none">
                                <div class="row g-sm-3 g-2">
                                    <div class="col-md-12">
                                        <div class="light-card balance-card widget-hover">
                                            <div class="svg-box"><svg class="svg-fill">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#orders') }}"></use>
                                                </svg></div>
                                            <div> <span class="f-light">Orders</span>
                                                <h6 class="mt-1 mb-0 counter" data-target="10098">0</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="light-card balance-card widget-hover">
                                            <div class="svg-box"><svg class="svg-fill">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#expense') }}"></use>
                                                </svg></div>
                                            <div> <span class="f-light">Earning</span>
                                                <h6 class="mt-1 mb-0">$<span class="counter" data-target="12678">0</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="light-card balance-card widget-hover">
                                            <div class="svg-box"><svg class="svg-fill">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#doller-return') }}">
                                                    </use>
                                                </svg></div>
                                            <div> <span class="f-light">Refunds</span>
                                                <h6 class="mt-1 mb-0 counter" data-target="3001">0 </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 box-col-12">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Stock Report</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="stockReport"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="stockReport"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 stock-report">
                        <div class="recent-table table-responsive custom-scrollbar">
                            <table class="table" id="stock-report">
                                <thead>
                                    <tr>
                                        <th>Items</th>
                                        <th>Product ID</th>
                                        <th>QTY</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="img-border"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard-2/order/sub-product/14.png') }}"
                                                        alt="user"></div><a class="f-w-500"
                                                    href="{{ route('admin.products_reports') }}">Shoes</a>
                                            </div>
                                        </td>
                                        <td>#854129</td>
                                        <td>0 PCS</td>
                                        <td>$513</td>
                                        <td><button class="btn button-light-danger txt-danger f-w-500">Out
                                                of Stock</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="img-border"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard-2/order/sub-product/15.png') }}"
                                                        alt="user"></div><a class="f-w-500"
                                                    href="{{ route('admin.products_reports') }}">Couch</a>
                                            </div>
                                        </td>
                                        <td>#245987</td>
                                        <td>95 PCS</td>
                                        <td>$3061</td>
                                        <td><button class="btn button-light-success txt-success f-w-500">In
                                                Stock</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="img-border"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard-2/order/sub-product/16.png') }}"
                                                        alt="user"></div><a class="f-w-500"
                                                    href="{{ route('admin.products_reports') }}">Bags</a>
                                            </div>
                                        </td>
                                        <td>#357896</td>
                                        <td>45 PCS</td>
                                        <td>$1256</td>
                                        <td><button class="btn button-light-success txt-success f-w-500">In
                                                Stock</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="img-border"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard-2/order/sub-product/24.png') }}"
                                                        alt="user"></div><a class="f-w-500"
                                                    href="{{ route('admin.products_reports') }}">Watch</a>
                                            </div>
                                        </td>
                                        <td>#589456</td>
                                        <td>0 PCS</td>
                                        <td>$120</td>
                                        <td><button class="btn button-light-danger txt-danger f-w-500">Out
                                                of Stock</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="img-border"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard-2/order/sub-product/25.png') }}"
                                                        alt="user"></div><a class="f-w-500"
                                                    href="{{ route('admin.products_reports') }}">Chair</a>
                                            </div>
                                        </td>
                                        <td>#698789</td>
                                        <td>10 PCS</td>
                                        <td>$1200</td>
                                        <td><button class="btn button-light-success txt-success f-w-500">In
                                                Stock</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="img-border"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard-2/order/sub-product/26.png') }}"
                                                        alt="user"></div><a class="f-w-500"
                                                    href="{{ route('admin.products_reports') }}">Lamp</a>
                                            </div>
                                        </td>
                                        <td>#120447</td>
                                        <td>0 PCS</td>
                                        <td>$1200</td>
                                        <td><button class="btn button-light-danger txt-danger f-w-500">Out
                                                of Stock</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-md-6 box-col-6 ord-xl-ix box-ord-9">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Best Sellers</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="bestSeller"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="bestSeller"><a
                                            class="dropdown-item" href="#!">This
                                            Month</a><a class="dropdown-item" href="#!">Previous Month</a><a
                                            class="dropdown-item" href="#!">Last 3 Months</a><a
                                            class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="seller-table table-responsive custom-scrollbar">
                            <table class="table" id="selling-table">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Sellers</th>
                                        <th>Company </th>
                                        <th>Category</th>
                                        <th>Earnings</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                    alt="user"><a class="f-w-500" href="{{ route('admin.seller_list') }}">Wade
                                                    Warren</a></div>
                                        </td>
                                        <td>Nexus</td>
                                        <td>Electronics</td>
                                        <td>$32547</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/user/10.jpg') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.seller_list') }}">Jenny
                                                    Wilson</a>
                                            </div>
                                        </td>
                                        <td>Blaze</td>
                                        <td>Clothing</td>
                                        <td>$84206</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/user/14.png') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.seller_list') }}">Guy
                                                    Hawkins</a>
                                            </div>
                                        </td>
                                        <td>SkyEdge</td>
                                        <td>Beauty</td>
                                        <td>$21059</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard/user/6.jpg') }}"
                                                    alt="user"><a class="f-w-500" href="{{ route('admin.seller_list') }}">Jacob
                                                    Jones</a></div>
                                        </td>
                                        <td>Corp</td>
                                        <td>Grocery</td>
                                        <td>$23180</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/user/3.jpg') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.seller_list') }}">Eleanor
                                                    Pena</a>
                                            </div>
                                        </td>
                                        <td>Zenith</td>
                                        <td>Sports</td>
                                        <td>$45278</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/user/6.jpg') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.seller_list') }}">Marvin
                                                    Lisa</a>
                                            </div>
                                        </td>
                                        <td>Sparksy</td>
                                        <td>Electronics</td>
                                        <td>$78541</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/user/12.png') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.seller_list') }}">Albert
                                                    Flores</a></div>
                                        </td>
                                        <td>Nexus</td>
                                        <td>Sports</td>
                                        <td>$23416</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/user/3.png') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.seller_list') }}">Cody
                                                    Fisher</a>
                                            </div>
                                        </td>
                                        <td>Spark</td>
                                        <td>Clothing</td>
                                        <td>$84206</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 box-col-4e ord-xl-vii col-md-5 box-ord-8">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                            <h5>Payment Gateway Earnings</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="gatewayEarning" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="gatewayEarning"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body payment-gateway">
                        <div class="pay-box">
                            <div class="common-flex align-items-center">
                                <div class="outer-line border-primary">
                                    <div class="outer-svg-box bg-light-primary"><svg class="fill-primary">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#earning1') }}"></use>
                                        </svg></div>
                                </div><a class="f-w-500" href="#!">PayPal</a>
                            </div><span class="text-end txt-success">+$420</span>
                        </div>
                        <div class="pay-box">
                            <div class="common-flex align-items-center">
                                <div class="outer-line border-secondary">
                                    <div class="outer-svg-box bg-light-secondary"><svg class="fill-secondary">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#earning2') }}"></use>
                                        </svg></div>
                                </div><a class="f-w-500" href="#!">Credit Card</a>
                            </div><span class="text-end txt-danger">-$250</span>
                        </div>
                        <div class="pay-box">
                            <div class="common-flex align-items-center">
                                <div class="outer-line border-success">
                                    <div class="outer-svg-box bg-light-success"><svg class="fill-success">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#earning3') }}"></use>
                                        </svg></div>
                                </div><a class="f-w-500" href="#!">Amazon Pay</a>
                            </div><span class="text-end txt-success">+$603</span>
                        </div>
                        <div class="pay-box">
                            <div class="common-flex align-items-center">
                                <div class="outer-line border-info">
                                    <div class="outer-svg-box bg-light-info"><svg class="fill-info">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#earning4') }}"></use>
                                        </svg></div>
                                </div><a class="f-w-500" href="#!">Cashback</a>
                            </div><span class="text-end txt-success">+$603</span>
                        </div>
                        <div class="pay-box">
                            <div class="common-flex align-items-center">
                                <div class="outer-line border-warning">
                                    <div class="outer-svg-box bg-light-warning"><svg class="fill-warning">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#earning1') }}"></use>
                                        </svg></div>
                                </div><a class="f-w-500" href="#!">PayPal</a>
                            </div><span class="text-end txt-danger">-$250</span>
                        </div>
                        <div class="pay-box">
                            <div class="common-flex align-items-center">
                                <div class="outer-line border-danger">
                                    <div class="outer-svg-box bg-light-danger"><svg class="fill-danger">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#earning2') }}"></use>
                                        </svg></div>
                                </div><a class="f-w-500" href="#!">Credit Card</a>
                            </div><span class="text-end txt-success">+$485</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 box-col-6 ord-xl-x box-ord-10">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Trending Products</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="treadingProduct" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="treadingProduct"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 treading-product">
                        <div class="recent-table table-responsive custom-scrollbar">
                            <table class="table" id="treading-t-product">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Sold</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-2/order/sub-product/17.png') }}"
                                                    alt="user"><a class="f-w-500" href="{{ route('admin.list_products') }}">iPhone
                                                    15P</a></div>
                                        </td>
                                        <td>Electronics</td>
                                        <td>1,500</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-2/order/sub-product/18.png') }}"
                                                    alt="user"><a class="f-w-500" href="{{ route('admin.list_products') }}">E2
                                                    Watch</a></div>
                                        </td>
                                        <td>Electronics</td>
                                        <td>3,851</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="img-border"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard-2/order/sub-product/19.png') }}"
                                                        alt="user"></div><a class="f-w-500"
                                                    href="{{ route('admin.list_products') }}">Air Max1</a>
                                            </div>
                                        </td>
                                        <td>Footwear</td>
                                        <td>4,540</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="img-border"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard-2/order/sub-product/20.png') }}"
                                                        alt="user"></div><a class="f-w-500"
                                                    href="{{ route('admin.list_products') }}">Pink Coat</a>
                                            </div>
                                        </td>
                                        <td>Clothing</td>
                                        <td>6,780</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-2/order/sub-product/21.png') }}"
                                                    alt="user"><a class="f-w-500" href="{{ route('admin.list_products') }}">Indoor
                                                    Plants</a></div>
                                        </td>
                                        <td>Decors</td>
                                        <td>4,254</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-2/order/sub-product/22.png') }}"
                                                    alt="user"><a class="f-w-500"
                                                    href="{{ route('admin.list_products') }}">Sunglass</a></div>
                                        </td>
                                        <td>Accessories</td>
                                        <td>3,452</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="img-border"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard-2/order/sub-product/23.png') }}"
                                                        alt="user"></div><a class="f-w-500"
                                                    href="{{ route('admin.list_products') }}">Camera Stand</a>
                                            </div>
                                        </td>
                                        <td>Accessories</td>
                                        <td>1,587</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="img-border"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard-2/order/sub-product/27.png') }}"
                                                        alt="user"></div><a class="f-w-500"
                                                    href="{{ route('admin.list_products') }}">Airpods Pro</a>
                                            </div>
                                        </td>
                                        <td>Electronics</td>
                                        <td>1,256</td>
                                    </tr>
                                </tbody>
                            </table>
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
    <script src="{{ asset('assets/js/dashboard/dashboard_2.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <!-- Plugins JS Ends-->
@endsection
