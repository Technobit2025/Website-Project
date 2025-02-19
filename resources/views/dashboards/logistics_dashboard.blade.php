@extends('layouts.simple.master')

@section('title', 'Logistics Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Logistics Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Logistics Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid dashboard-13">
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card widget-13 widget-hover">
                    <div class="card-body">
                        <div>
                            <div class="stat-content">
                                <div class="stat-square bg-light-primary"><svg class="fill-primary">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-package') }}"> </use>
                                    </svg></div>
                                <div>
                                    <p class="c-o-light mb-1">New Packages</p>
                                    <h4><span class="counter" data-target="845">0</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="common-space">
                            <div class="common-align font-success"><i class="me-1"
                                    data-feather="trending-up"></i><span>+12.02%</span></div>
                            <div class="common-stat-option">
                                <div id="package-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card widget-13 widget-hover">
                    <div class="card-body">
                        <div>
                            <div class="stat-content">
                                <div class="stat-square bg-light-secondary"><svg class="fill-secondary">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-progress-delivery') }}">
                                        </use>
                                    </svg></div>
                                <div>
                                    <p class="c-o-light mb-1">In-Progress Delivery</p>
                                    <h4><span class="counter" data-target="242">0</span>K</h4>
                                </div>
                            </div>
                        </div>
                        <div class="common-space">
                            <div class="common-align font-danger"><i class="me-1"
                                    data-feather="trending-down"></i><span>-0.03%</span></div>
                            <div class="progress" role="progressbar" aria-label="Animated striped example"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary"
                                    style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card widget-13 widget-hover">
                    <div class="card-body">
                        <div>
                            <div class="stat-content">
                                <div class="stat-square bg-light-warning"><svg class="fill-warning">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-delivered') }}"> </use>
                                    </svg></div>
                                <div>
                                    <p class="c-o-light mb-1">Delivered</p>
                                    <h4><span class="counter" data-target="1620">0</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="common-space">
                            <div class="common-align font-success"><i class="me-1"
                                    data-feather="trending-up"></i><span>+13.04%</span></div>
                            <div class="delivered-stat-option">
                                <div id="package-delivered"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card widget-13 widget-hover">
                    <div class="card-body">
                        <div>
                            <div class="stat-content">
                                <div class="stat-square bg-light-success"><svg class="fill-success">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-client') }}"> </use>
                                    </svg></div>
                                <div>
                                    <p class="c-o-light mb-1">New Clients</p>
                                    <h4><span class="counter" data-target="195">0</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="common-space">
                            <div class="common-align font-danger"><i class="me-1"
                                    data-feather="trending-down"></i><span>-0.08%</span></div>
                            <div class="common-stat-option client-chart">
                                <div id="new-clients-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="card heading-space">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Shipment Tracking</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="shipmentTracking" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="shipmentTracking"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 shipment-tracking-table">
                        <div class="recent-table table-responsive custom-scrollbar">
                            <table class="table" id="shipment-tracking-table">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Shipment</th>
                                        <th>Carrier</th>
                                        <th>Origin</th>
                                        <th>Destination</th>
                                        <th>Current Location</th>
                                        <th>ETA</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}" target="_blank">#FH83P3</a></td>
                                        <td>FedEx</td>
                                        <td>New York</td>
                                        <td>Boston</td>
                                        <td>Denver</td>
                                        <td>10 May 2024</td>
                                        <td> <span class="badge f-14 f-w-400 txt-warning">In Transit</span>
                                        </td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}" target="_blank">#SD56Q3</a></td>
                                        <td>UPS</td>
                                        <td>Miami</td>
                                        <td>Seattle</td>
                                        <td>Chicago</td>
                                        <td>12 Jul 2024 </td>
                                        <td> <span class="badge f-14 f-w-400 txt-danger">Delayed</span></td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}" target="_blank">#DR45E4</a></td>
                                        <td>DHL</td>
                                        <td>Houston</td>
                                        <td>Boston</td>
                                        <td>Houston</td>
                                        <td>18 Aug 2024</td>
                                        <td> <span class="badge f-14 f-w-400 txt-warning">In Transit</span>
                                        </td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}" target="_blank">#DE56H4</a></td>
                                        <td>USPS</td>
                                        <td>Houston</td>
                                        <td>New York</td>
                                        <td>Francisco</td>
                                        <td>23 Sep 2024</td>
                                        <td> <span class="badge f-14 f-w-400 txt-success">Dispatched</span>
                                        </td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}" target="_blank">#RT89A1</a></td>
                                        <td>FedEx</td>
                                        <td>Germany</td>
                                        <td>Houston</td>
                                        <td>Seattle</td>
                                        <td>16 Aug 2024</td>
                                        <td> <span class="badge f-14 f-w-400 txt-success">Dispatched</span>
                                        </td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}" target="_blank">#ED58B5</a></td>
                                        <td>DHL</td>
                                        <td>Miami</td>
                                        <td>Boston</td>
                                        <td>Denver</td>
                                        <td>02 Feb 2024</td>
                                        <td> <span class="badge f-14 f-w-400 txt-danger">Delayed</span></td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}" target="_blank">#TY71S1</a></td>
                                        <td>USPS</td>
                                        <td>Atlanta</td>
                                        <td>Denver</td>
                                        <td>Dallas</td>
                                        <td>12 Mar 2024</td>
                                        <td> <span class="badge f-14 f-w-400 txt-success">Dispatched</span>
                                        </td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}" target="_blank">#RT66W4</a></td>
                                        <td>FedEx</td>
                                        <td>Dallas</td>
                                        <td>Chicago</td>
                                        <td>Orlando</td>
                                        <td>19 Oct 2024</td>
                                        <td> <span class="badge f-14 f-w-400 txt-warning">In Transit</span>
                                        </td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}" target="_blank">#ER89Q3</a></td>
                                        <td>DHL</td>
                                        <td>Orlando</td>
                                        <td>Portland</td>
                                        <td>Seattle</td>
                                        <td>23 Apr 2024</td>
                                        <td> <span class="badge f-14 f-w-400 txt-success">Dispatched</span>
                                        </td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}" target="_blank">#QQ66D2</a></td>
                                        <td>UPS</td>
                                        <td>Boston</td>
                                        <td>Las Vegas</td>
                                        <td>San Diego</td>
                                        <td>29 Sep 2024</td>
                                        <td> <span class="badge f-14 f-w-400 txt-warning">In Transit</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6">
                <div class="card delivery-chart sales-report">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Avg Delivery Duration</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="deliveryDuration" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryDuration"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="balance-data">
                            <li><span class="circle bg-primary"></span><span class="c-light ms-1">On Time
                                    Delivery</span></li>
                            <li><span class="circle bg-secondary"> </span><span class="c-light ms-1">Late
                                    Delivery</span></li>
                        </ul>
                        <div class="delivery-duration-chart">
                            <div id="delivery-duration"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Shipment Details</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="allProjects"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="allProjects"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body shipping-details pt-0">
                        <div class="common-space">
                            <p>Status : <span>Ongoing</span></p>
                            <p>Insurance : <span>10,000</span></p>
                        </div>
                        <div class="simple-timeline">
                            <ul>
                                <li>
                                    <div class="shipment-details">
                                        <div class="dots bg-primary"></div>
                                        <div>
                                            <div class="line bg-primary"></div>
                                            <p class="f-14 f-w-500">Tracking Number Created</p>
                                            <p class="f-14 f-w-400 c-o-light">2118 Thornridge Cir. Syracuse,
                                                Connecticut 35624</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="shipment-details">
                                        <div class="dots bg-primary"></div>
                                        <div>
                                            <div class="line bg-primary"></div>
                                            <p class="f-14 f-w-500">Out for Delivery</p>
                                            <p class="f-14 f-w-400 c-o-light">Uploading Company: Disney, The
                                                Walt Company</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="shipment-details">
                                        <div class="dots bg-primary"></div>
                                        <div>
                                            <div class="line bg-primary"></div>
                                            <p class="f-14 f-w-500">In Transit</p>
                                            <p class="f-14 f-w-400 c-o-light">4517 Washington Ave.
                                                Manchester, Kentucky 39495</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="shipment-details">
                                        <div class="dots bg-secondary"></div>
                                        <div>
                                            <div class="line bg-secondary"></div>
                                            <p class="f-14 f-w-500">Delivered</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Fleet Status</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="fleetStatus"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="fleetStatus"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="fleet-status-chart">
                            <div id="fleet-status"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Open Sales Orders</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="monthlyProfit" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="monthlyProfit"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 sales-order">
                        <h3> <span class="counter" data-target="890000">0</span></h3>
                        <div class="common-space"><span>82.5% boxes converted to loads</span><span
                                class="total-sale">75,000</span></div>
                        <div class="common-space">
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="58"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-primary" style="width: 58%"></div>
                            </div><span>Pending Boxes</span>
                        </div>
                        <div class="sales-order-chart">
                            <div id="sales-order-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="card country-option">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Profit By Country</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="profitByCountry" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="profitByCountry"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-xxl-8 c-xl-60 col-lg-12 col-sm-8 box-col-12">
                                <div class="profitable-country-chart">
                                    <div id="profitable-country-chart"></div>
                                </div>
                            </div>
                            <div class="col-xxl-4 c-xl-40 col-lg-12 col-sm-4 box-col-12">
                                <ul>
                                    <li> <span class="bg-primary"></span>USA</li>
                                    <li> <span class="bg-secondary"></span>France</li>
                                    <li> <span class="bg-warning"></span>India</li>
                                    <li> <span class="bg-success"></span>Germany</li>
                                    <li> <span class="bg-danger"></span>Australia</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="card heading-space">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Vehicles Overview</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="vehicleOverview" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="vehicleOverview"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 vehicle-table">
                        <div class="recent-table table-responsive custom-scrollbar">
                            <table class="table" id="vehicle-table">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Vehicle ID</th>
                                        <th>Status</th>
                                        <th>Driver Name</th>
                                        <th>Next Due</th>
                                        <th>Total Distance</th>
                                        <th>Location</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}">#V001</a></td>
                                        <td>Active</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-12/user/13.png') }}"
                                                    alt="user"><a class="f-w-500" href="#!">Jane Cooper</a>
                                            </div>
                                        </td>
                                        <td>20 Jun 2024</td>
                                        <td>100,000</td>
                                        <td>New York</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}">#V002</a></td>
                                        <td>Maintenance</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-12/user/8.png') }}"
                                                    alt="user"><a class="f-w-500" href="#!">Robert Fox</a>
                                            </div>
                                        </td>
                                        <td>12 Jul 2024</td>
                                        <td>80,000</td>
                                        <td>Chicago</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}">#V003</a></td>
                                        <td>Active</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-12/user/1.png') }}"
                                                    alt="user"><a class="f-w-500" href="#!">Devon Lane</a>
                                            </div>
                                        </td>
                                        <td>18 Aug 2024</td>
                                        <td>120,000</td>
                                        <td>Houston</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}">#V004</a></td>
                                        <td>Active</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-12/user/5.png') }}"
                                                    alt="user"><a class="f-w-500" href="#!">Floyd Miles</a>
                                            </div>
                                        </td>
                                        <td>23 Sep 2024</td>
                                        <td>90,000</td>
                                        <td>Atlanta</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}">#V005</a></td>
                                        <td>Maintenance</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-12/user/7.png') }}"
                                                    alt="user"><a class="f-w-500" href="#!">Jerome Bell</a>
                                            </div>
                                        </td>
                                        <td>16 Aug 2024</td>
                                        <td>110,000</td>
                                        <td>Dallas</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}">#V006</a></td>
                                        <td>Maintenance</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                    alt="user"><a class="f-w-500" href="#!">Jessica Clay</a>
                                            </div>
                                        </td>
                                        <td>02 Feb 2024</td>
                                        <td>150,000</td>
                                        <td>Dallas</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}">#V007</a></td>
                                        <td>Active</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                    alt="user"><a class="f-w-500" href="#!">Koa Reese</a>
                                            </div>
                                        </td>
                                        <td>28 Feb 2024</td>
                                        <td>35,000</td>
                                        <td>Texas</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}">#V008</a></td>
                                        <td>Active</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                    alt="user"><a class="f-w-500" href="#!">Aila Yang</a>
                                            </div>
                                        </td>
                                        <td>16 Jan 2024</td>
                                        <td>750,000</td>
                                        <td>Atlanta</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}">#V009</a></td>
                                        <td>Active</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                    alt="user"><a class="f-w-500" href="#!">Zain Clay</a>
                                            </div>
                                        </td>
                                        <td>18 Aug 2024</td>
                                        <td>120,000</td>
                                        <td>Canada </td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.order_details') }}">#V0010</a></td>
                                        <td>Active</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                    alt="user"><a class="f-w-500" href="#!">Julia Mitch</a>
                                            </div>
                                        </td>
                                        <td>25 Nov 2024</td>
                                        <td>290,000</td>
                                        <td>Greece</td>
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
    <script src="{{ asset('assets/js/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_13.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
