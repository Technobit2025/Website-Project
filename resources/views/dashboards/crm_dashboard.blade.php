@extends('layouts.simple.master')

@section('title', 'CRM Dashboard')

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
                    <h3>CRM</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">CRM</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid dashboard-09">
        <div class="row">
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
                                </div><span class="user-growth f-12 f-w-500"><i class="icon-arrow-down txt-danger"></i><span
                                        class="txt-danger">-4.3%</span></span><span class="user-text">last
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
                                <h4 class="mb-2">$<span class="counter" data-target="1398700">0</span></h4>
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="58"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success" style="width: 58%"></div>
                                </div><span class="user-growth f-12 f-w-500"><i class="icon-arrow-up txt-success"></i><span
                                        class="txt-success">+7.9%</span></span><span class="user-text">last
                                    month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
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
                                <h4 class="mb-2">$<span class="counter" data-target="760000">0</span></h4>
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
                    <div class="col-sm-6">
                        <div class="card widget-hover">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <div class="sales-header">
                                        <h5 class="m-0">Total Sales</h5><span class="c-o-light f-w-500">Jan
                                            1, 2024 - Mar 10, 2024</span>
                                    </div>
                                    <div class="card-header-right-icon"><a class="btn btn-light-primary"
                                            href="{{ route('admin.seller_list') }}">See All </a></div>
                                </div>
                            </div>
                            <div class="card-body pt-0 main-sale">
                                <div class="sales-chart-wrap">
                                    <div id="sales-chart1"></div>
                                </div>
                                <div class="sale-details">
                                    <h4 class="mb-0">$ 870.45k</h4><span class="f-12 f-w-500 txt-success"><i
                                            class="icon-arrow-up me-1"></i>+8.3%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card o-hidden crm-card">
                            <div class="card-body">
                                <h4 class="mb-3 mt-1 f-w-500 mb-0">Customer Connections</h4>
                                <p>Improved customer relationship management.</p><a class="btn btn-white f-w-500"
                                    href="{{ route('admin.pricing') }}">Upgrade Plan</a>
                            </div><img class="crm-img" src="{{ asset('assets/images/dashboard-9/widget.svg') }}"
                                alt="search image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 box-col-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <div>
                                        <h5>Sales</h5><span class="f-w-500 c-o-light">Last 6 Month</span>
                                    </div>
                                    <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                            id="saleDropdown" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="icon-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="saleDropdown"><a
                                                class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                                href="#">Yesterday</a><a class="dropdown-item" href="#">This
                                                week</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="sales-chart-wrapper">
                                    <div id="sales-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
                                <div class="card schedule-card">
                                    <div class="card-header card-no-border">
                                        <div class="header-top">
                                            <div>
                                                <h5 class="m-0">Revenue Growth</h5><span
                                                    class="f-w-500 c-o-light">Today Revenue</span>
                                            </div>
                                            <div class="card-header-right-icon"><a class="btn btn-light f-w-500 c-o-light"
                                                    href="{{ route('admin.seller_details') }}">View As</a></div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="revenue-chart-container">
                                            <div id="revenue-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6">
                                <div class="card">
                                    <div class="card-header card-no-border">
                                        <div class="header-top">
                                            <h5>Pipeline Breakdown</h5>
                                            <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                    id="pipelineDropdown" type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="pipelineDropdown"><a class="dropdown-item"
                                                        href="#">Today</a><a class="dropdown-item"
                                                        href="#">Yesterday</a><a class="dropdown-item"
                                                        href="#">This week</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="pipeline-data">
                                            <div class="common-flex d-grid">
                                                <div class="common-flex">
                                                    <div class="dotted-primary"></div><span>Lead:
                                                        $115k</span>
                                                </div>
                                                <div class="common-flex">
                                                    <div class="dotted-warning"></div><span>Proposal:
                                                        $90k</span>
                                                </div>
                                                <div class="common-flex">
                                                    <div class="dotted-success"></div><span>Negotiation:
                                                        $47k</span>
                                                </div>
                                            </div>
                                            <div class="pipeline-chart-container">
                                                <div id="pipeline-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 box-col-6">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>To Do List</h5>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="crm-todo-list">
                            <li class="d-flex align-items-center"><span class="l-line-primary"></span>
                                <div class="flex-shrink-0">
                                    <div class="form-check"><input class="form-check-input checkbox-primary"
                                            type="checkbox" value=""></div>
                                </div>
                                <div class="flex-grow-1"><a href="{{ route('admin.to_do') }}">Monitor sales performance
                                    </a><span class="mb-0">Written by alice</span></div>
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="saleMonitorDropdown" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="saleMonitorDropdown"><a
                                            class="dropdown-item" href="#">This Month</a><a class="dropdown-item"
                                            href="#">Previous Month</a><a class="dropdown-item" href="#">Last
                                            3 Months</a><a class="dropdown-item" href="#">Last
                                            6 Months</a></div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center"><span class="l-line-secondary"></span>
                                <div class="flex-shrink-0">
                                    <div class="form-check"><input class="form-check-input checkbox-primary"
                                            type="checkbox" value=""></div>
                                </div>
                                <div class="flex-grow-1"><a href="{{ route('admin.to_do') }}">Manage tasks and
                                        appointments</a><span class="mb-0">Written by bob</span></div>
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="appointmentDropdown" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="appointmentDropdown"><a
                                            class="dropdown-item" href="#">This Month</a><a class="dropdown-item"
                                            href="#">Previous Month</a><a class="dropdown-item" href="#">Last
                                            3 Months</a><a class="dropdown-item" href="#">Last
                                            6 Months</a></div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center"><span class="l-line-success"></span>
                                <div class="flex-shrink-0">
                                    <div class="form-check"><input class="form-check-input checkbox-primary"
                                            type="checkbox" value=""></div>
                                </div>
                                <div class="flex-grow-1"><a href="{{ route('admin.to_do') }}">Important updates and
                                        deadlines </a><span class="mb-0">Written by jake</span></div>
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="deadlineDropdown" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deadlineDropdown"><a
                                            class="dropdown-item" href="#">This Month</a><a class="dropdown-item"
                                            href="#">Previous Month</a><a class="dropdown-item" href="#">Last
                                            3 Months</a><a class="dropdown-item" href="#">Last
                                            6 Months</a></div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center"><span class="l-line-warning"></span>
                                <div class="flex-shrink-0">
                                    <div class="form-check"><input class="form-check-input checkbox-primary"
                                            type="checkbox" value=""></div>
                                </div>
                                <div class="flex-grow-1"><a href="{{ route('admin.to_do') }}">Analyze customer interactions
                                    </a><span class="mb-0">Written by kevin</span></div>
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="interactionDropdown" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="interactionDropdown"><a
                                            class="dropdown-item" href="#">This Month</a><a class="dropdown-item"
                                            href="#">Previous Month</a><a class="dropdown-item" href="#">Last
                                            3 Months</a><a class="dropdown-item" href="#">Last
                                            6 Months</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-md-6 box-col-6">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Finance Overview</h5>
                            <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="financeDropdown"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="financeDropdown"><a
                                        class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                        href="#">Yesterday</a><a class="dropdown-item" href="#">This week</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body finance-wrapper pt-0">
                        <div class="common-flex">
                            <h6> $<span class="counter" data-target="634">0</span>k<span
                                    class="ms-1 c-o-light f-14">Revenue</span></h6>
                            <h6>$<span class="counter" data-target="302">0</span>k<span
                                    class="ms-1 c-o-light f-14">Expenses</span></h6>
                        </div>
                        <div class="finance-chart-wrapper">
                            <div id="finance-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 order-xxl-0 order-sm-4 box-col-6 box-ord-4">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Deals</h5>
                            <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="dealsDropdown"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dealsDropdown"><a
                                        class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                        href="#">Yesterday</a><a class="dropdown-item" href="#">This week</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="recent-table table-responsive custom-scrollbar deal-table">
                            <table class="table" id="finance-deal-table">
                                <thead>
                                    <tr>
                                        <th>Deal id</th>
                                        <th>Deal Name</th>
                                        <th>Amount</th>
                                        <th>Close Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>5001</td>
                                        <td>Project</td>
                                        <td>$30,000</td>
                                        <td>13 Jan 2024</td>
                                    </tr>
                                    <tr>
                                        <td>6120</td>
                                        <td>Product Launch</td>
                                        <td>$64,000</td>
                                        <td>25 Feb 2024</td>
                                    </tr>
                                    <tr>
                                        <td>8450</td>
                                        <td>Service Contract</td>
                                        <td>$92,000</td>
                                        <td>10 Mar 2024</td>
                                    </tr>
                                    <tr>
                                        <td>9514</td>
                                        <td>Star Software</td>
                                        <td>$37,000</td>
                                        <td>26 Apr 2024</td>
                                    </tr>
                                    <tr>
                                        <td>3512</td>
                                        <td>New Partnership</td>
                                        <td>$88,000</td>
                                        <td>30 May 2024</td>
                                    </tr>
                                    <tr>
                                        <td>5896</td>
                                        <td>Silver Star</td>
                                        <td>$25,000</td>
                                        <td>02 Feb 2024</td>
                                    </tr>
                                    <tr>
                                        <td>2548</td>
                                        <td>Evergreen</td>
                                        <td>$48,254</td>
                                        <td>15 Jun 2024</td>
                                    </tr>
                                    <tr>
                                        <td>2485</td>
                                        <td>Sun Farms</td>
                                        <td>$48,222</td>
                                        <td>19 Mar 2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-xxl-0 order-sm-1 box-ord-1">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Leads</h5>
                            <div class="card-header-right-icon"><a class="btn btn-light f-w-500 c-o-light"
                                    href="#!">View All</a></div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="recent-table table-responsive custom-scrollbar lead-table">
                            <table class="table" id="lead-table">
                                <thead>
                                    <tr>
                                        <th>Lead Name</th>
                                        <th>Date</th>
                                        <th>Email</th>
                                        <th>Assigned to</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid lead-img"
                                                    src="{{ asset('assets/images/dashboard-9/user/1.png') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Eleanor</a>
                                            </div>
                                        </td>
                                        <td>01/04/2024</td>
                                        <td>pena@evyh.com</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/user/common-user/1.png') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Lina</a>
                                            </div>
                                        </td>
                                        <td> <button class="btn button-light-success txt-success f-w-500">Accepted</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid lead-img"
                                                    src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Arlene</a>
                                            </div>
                                        </td>
                                        <td>21/03/2023</td>
                                        <td>mccoy@evyh.com</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/user/common-user/2.png') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Jake</a>
                                            </div>
                                        </td>
                                        <td> <button class="btn button-light-warning txt-warning f-w-500">Pending</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid lead-img"
                                                    src="{{ asset('assets/images/dashboard-9/user/3.png') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Cryon</a>
                                            </div>
                                        </td>
                                        <td>18/02/2024</td>
                                        <td>murphy@evyh.com</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/user/common-user/3.png') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Jenny</a>
                                            </div>
                                        </td>
                                        <td> <button class="btn button-light-success txt-success f-w-500">Accepted</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid lead-img"
                                                    src="{{ asset('assets/images/dashboard-9/user/4.png') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Darrell</a>
                                            </div>
                                        </td>
                                        <td>16/01/2023</td>
                                        <td>darrell@evyh.com</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/user/common-user/4.png') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Robert</a>
                                            </div>
                                        </td>
                                        <td> <button class="btn button-light-danger txt-danger f-w-500">Rejected</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid lead-img"
                                                    src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Alexis</a>
                                            </div>
                                        </td>
                                        <td>19/08/2024</td>
                                        <td>alexis@taylor.com</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/user/common-user/5.png') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Eriko</a>
                                            </div>
                                        </td>
                                        <td> <button class="btn button-light-success txt-success f-w-500">Accepted</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid lead-img"
                                                    src="{{ asset('assets/images/dashboard/user/13.jpg') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Andrew</a>
                                            </div>
                                        </td>
                                        <td>24/02/2024</td>
                                        <td>andrew@price.com</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/user/common-user/6.png') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Caleb</a>
                                            </div>
                                        </td>
                                        <td> <button class="btn button-light-warning txt-warning f-w-500">Pending</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid lead-img"
                                                    src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Olivia</a>
                                            </div>
                                        </td>
                                        <td>05/07/2024</td>
                                        <td>olivia@gor.com</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/user/common-user/7.png') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Cody</a>
                                            </div>
                                        </td>
                                        <td> <button class="btn button-light-danger txt-danger f-w-500">Rejected</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid lead-img"
                                                    src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Emily</a>
                                            </div>
                                        </td>
                                        <td>07/06/2024</td>
                                        <td>emily@park.com</td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/user/common-user/8.png') }}"
                                                    alt="user"><a class="c-light" href="{{ route('admin.user_list') }}">Jake</a>
                                            </div>
                                        </td>
                                        <td> <button class="btn button-light-warning txt-warning f-w-500">Pending</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6 order-xxl-0 order-sm-3 box-col-6 box-ord-3">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top week-header">
                            <h5>Sales Per Week</h5>
                            <div class="card-header-right-icon"><a class="btn btn-light f-w-500 c-o-light"
                                    href="#!">Last 7 days</a></div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="sales-data common-flex">
                            <li><span class="sale-value primary-20"></span><span class="c-light ms-1">0-400</span></li>
                            <li> <span class="sale-value primary-70"></span><span class="c-light ms-1">400-800</span></li>
                            <li> <span class="sale-value bg-primary"></span><span class="c-light ms-1">800-1200</span>
                            </li>
                        </ul>
                        <div class="sales-week-container">
                            <div id="sale-week"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6 order-xxl-0 order-sm-2 box-col-6 box-ord-2">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <div class="total-source">
                                <h5 class="pb-1">Lead Source</h5>
                                <h6>92%<span class="c-o-light f-14 ms-1">( Total lead source )</span></h6>
                            </div>
                            <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                    id="leadSourceDropdown" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="leadSourceDropdown"><a
                                        class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                        href="#">Yesterday</a><a class="dropdown-item" href="#">This week</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="main-lead-source">
                            <div class="lead-source-1">
                                <div class="source-txt"><span class="mb-1">Campaign</span>
                                    <h5> <span class="counter" data-target="95">0</span>%</h5>
                                </div>
                                <div class="lead-source-2">
                                    <div class="source-txt"> <span>Email</span>
                                        <h5><span class="counter" data-target="84">0</span>%</h5>
                                    </div>
                                </div>
                                <div class="lead-source-3">
                                    <div class="source-txt"> <span>Referral</span>
                                        <h5><span class="counter" data-target="70">0</span>%</h5>
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
    <script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_9.js') }}"></script>
@endsection
