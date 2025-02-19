@extends('layouts.simple.master')

@section('title', 'Analytics Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/vector-map1/jsvectormap.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Analytics</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Analytics</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid dashboard-10">
        <div class="row">
            <div class="col-xxl-5 col-xl-4 col-md-6 ord-md-i box-col-4">
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
            <div class="col-xxl-3 col-xl-4 col-md-6 ord-md-ii box-col-4">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Referrals by Visits</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="referralVisitOption" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="referralVisitOption"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last 3
                                            Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 treading-product">
                        <div class="recent-table table-responsive custom-scrollbar referral-visit">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Social Network</th>
                                        <th>Conversion Rate</th>
                                        <th>Visits</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="referral-wrapper">
                                                <div>
                                                    <div class="bg-dark-primary">
                                                        <div class="social-wrapper"><svg class="stroke-icon">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#s-facebook') }}">
                                                                </use>
                                                            </svg></div>
                                                    </div><span class="f-w-500">Facebook</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td> <button class="btn button-light-success f-w-500 txt-success">3.2%</button>
                                        </td>
                                        <td class="f-w-500">10,000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="referral-wrapper">
                                                <div>
                                                    <div class="border-warning">
                                                        <div class="social-wrapper bg-light-warning"><svg
                                                                class="stroke-icon">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#s-instagram') }}">
                                                                </use>
                                                            </svg></div>
                                                    </div>
                                                </div><span class="f-w-500">Instagram</span>
                                            </div>
                                        </td>
                                        <td> <button class="btn button-light-warning f-w-500 txt-warning">2.8%</button>
                                        </td>
                                        <td class="f-w-500">5,000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="referral-wrapper">
                                                <div>
                                                    <div class="border-secondary">
                                                        <div class="social-wrapper bg-light-secondary"><svg
                                                                class="stroke-icon">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#s-pinterest') }}">
                                                                </use>
                                                            </svg></div>
                                                    </div>
                                                </div><span class="f-w-500">Pinterest</span>
                                            </div>
                                        </td>
                                        <td> <button class="btn button-light-info f-w-500 txt-info">4.0%</button>
                                        </td>
                                        <td class="f-w-500">7,500</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="referral-wrapper">
                                                <div>
                                                    <div class="border-info">
                                                        <div class="social-wrapper bg-light-info"><svg
                                                                class="stroke-icon">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#s-twitter') }}">
                                                                </use>
                                                            </svg></div>
                                                    </div>
                                                </div><span class="f-w-500">Twitter</span>
                                            </div>
                                        </td>
                                        <td> <button class="btn button-light-danger f-w-500 txt-danger">3.8%</button>
                                        </td>
                                        <td class="f-w-500">3,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 ord-md-vii box-col-4">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Sessions by Countries</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="stockReport"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="stockReport"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="common-m-chart">
                            <div id="country-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 ord-md-iii">
                <div class="card mb-3 o-hidden">
                    <div class="card-body analytics-widget">
                        <div class="row g-md-4 g-2">
                            <div class="col-sm-3"><img class="img-fluid"
                                    src="{{ asset('assets/images/dashboard-10/1.svg') }}" alt="Analytics Chart"></div>
                            <div class="col-sm-9">
                                <h5 class="card-title">Website Analytics Process & Management </h5>
                                <p class="card-text c-o-light">Website analytics is the process of analyzing
                                    and interpreting data related to website traffic, user behavior, and
                                    engagement to optimize.</p><a
                                    class="purchase-btn btn btn-primary btn-hover-effect f-w-500" href="{{ route('admin.pricing') }}">
                                    Upgrade Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 ord-md-iv">
                <div class="row">
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
                                                    data-feather="trending-down"></i><span
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
            <div class="col-xl-6 ord-md-viii">
                <div class="card heading-space">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Page Analytics</h5>
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
                    <div class="card-body px-0 pt-0 page-analytics-table">
                        <div class="recent-table table-responsive custom-scrollbar">
                            <table class="table" id="page-analytics-table">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Page Name</th>
                                        <th>Page Views</th>
                                        <th>Bounce Rate</th>
                                        <th>Click Rate</th>
                                        <th>Devices</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> </td>
                                        <td class="f-w-500">/home</td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>96,860</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-down"></i>30%</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-down"></i>1.7%</div>
                                        </td>
                                        <td>Mobile</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td class="f-w-500">/product</td>
                                        <td>
                                            <div class="change-currency"><i class="me-1 font-danger"
                                                    data-feather="trending-down"></i>20,759</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>90%</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>6.9%</div>
                                        </td>
                                        <td>Desktop</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td class="f-w-500">/blog</td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>46,159</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-danger"
                                                    data-feather="trending-down"></i>16%</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"><i class="me-1 font-danger"
                                                    data-feather="trending-down"></i>2.4%</div>
                                        </td>
                                        <td>Desktop</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td class="f-w-500">/aboutus</td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>84,252</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>70%</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>6.7%</div>
                                        </td>
                                        <td>Mobile</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td class="f-w-500">/contactus</td>
                                        <td>
                                            <div class="change-currency"><i class="me-1 font-danger"
                                                    data-feather="trending-down"></i>26,780</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>60%</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>8.3%</div>
                                        </td>
                                        <td>Desktop</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td class="f-w-500">/users</td>
                                        <td>
                                            <div class="change-currency"><i class="me-1 font-up"
                                                    data-feather="trending-up"></i>52,452</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>54%</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>8.6%</div>
                                        </td>
                                        <td>Tablet</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td class="f-w-500">/faq</td>
                                        <td>
                                            <div class="change-currency"><i class="me-1 font-danger"
                                                    data-feather="trending-down"></i>75,568</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-danger"
                                                    data-feather="trending-down"></i>20%</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-danger"
                                                    data-feather="trending-down"></i>3.3%</div>
                                        </td>
                                        <td>Desktop</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td class="f-w-500">/chat</td>
                                        <td>
                                            <div class="change-currency"><i class="me-1 font-danger"
                                                    data-feather="trending-down"></i>45,586</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>75%</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>9.3%</div>
                                        </td>
                                        <td>Tablet</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td class="f-w-500">/charts</td>
                                        <td>
                                            <div class="change-currency"><i class="me-1 font-danger"
                                                    data-feather="trending-up"></i>65,258</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>69%</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>4.2%</div>
                                        </td>
                                        <td>Mobile</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td class="f-w-500">/tasks</td>
                                        <td>
                                            <div class="change-currency"><i class="me-1 font-success"
                                                    data-feather="trending-up"></i>69,777</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>86%</div>
                                        </td>
                                        <td>
                                            <div class="change-currency"> <i class="me-1 font-success"
                                                    data-feather="trending-up"></i>9.1%</div>
                                        </td>
                                        <td>Desktop</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 ord-md-v">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card analytics-tread-card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <div><span class="c-o-light mb-1">Sessions</span>
                                        <div class="common-align">
                                            <h5 class="mb-1">921,35k</h5><span
                                                class="common-align gap-1 justify-content-start"><i class="txt-danger"
                                                    data-feather="trending-down"></i><span
                                                    class="txt-danger f-w-500">-15%</span></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="analytics-tread bg-light-success"><svg class="fill-success">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#analytics-session') }}">
                                                </use>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="session-progress">
                                    <div class="progress sm-progress-bar overflow-visible">
                                        <div class="progress-bar-animated small-progressbar bg-success rounded-pill"
                                            role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                            aria-valuemax="100"><span class="progress-label">7.5</span><span
                                                class="animate-circle"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card overflow-hidden analytics-tread-card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <div><span class="c-o-light mb-1">Bounce Rate</span>
                                        <div class="common-align">
                                            <h5 class="mb-1">95.45%</h5><span
                                                class="common-align gap-1 justify-content-start"><i class="txt-success"
                                                    data-feather="trending-up"></i><span
                                                    class="txt-success f-w-500">+85%</span></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="analytics-tread bg-light-danger"><svg class="fill-danger">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#analytics-rate') }}">
                                                </use>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="bounce-rate-wrapper">
                                    <div id="bounce-rate-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card overflow-hidden analytics-tread-card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <div><span class="c-o-light mb-1">Average Visit Duration</span>
                                        <div class="common-align justify-content-start">
                                            <h5 class="mb-1">789,10k</h5><span
                                                class="common-align gap-1 justify-content-start"><i class="txt-success"
                                                    data-feather="trending-up"></i><span
                                                    class="txt-success f-w-500">+80%</span></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="analytics-tread bg-light-warning"><svg class="fill-warning">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#analytics-duration') }}">
                                                </use>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="visit-duration-wrapper">
                                    <div id="visit-duration"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card analytics-tread-card retention-progress">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <div><span class="c-o-light mb-1">User Retention</span>
                                        <div class="common-align">
                                            <h5 class="mb-1">845,48k</h5><span
                                                class="common-align gap-1 justify-content-start"><i class="txt-danger"
                                                    data-feather="trending-down"></i><span
                                                    class="txt-danger f-w-500">-22%</span></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="analytics-tread bg-light-info"><svg class="fill-info">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#analytics-retention') }}">
                                                </use>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="progress">
                                    <div class="progress-bar-animated bg-info progress-bar-striped" role="progressbar"
                                        style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 ord-md-ix">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Live Users</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="customerButton" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="customerButton"><a
                                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item"
                                            href="#!">Tomorrow</a><a class="dropdown-item"
                                            href="#!">Yesterday</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body live-user-wrapper pt-0">
                        <div class="user-data">
                            <h5>8,630k</h5><span class="font-success"> <i class="me-1 font-success f-w-500"
                                    data-feather="trending-up"> </i><span
                                    class="f-w-500 font-success">+50%&nbsp;</span></span>
                        </div>
                        <div class="live-user-map">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6 ord-md-x box-col-4">
                <div class="card">
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
                            <div class="col-sm-6 box-col-none">
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
                            <div class="col-sm-6 box-col-12">
                                <div id="session-chart"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 ord-md-vi box-col-4">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Session by Browser</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="sessionOption" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sessionOption"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 session-browser-table">
                        <div class="recent-table table-responsive custom-scrollbar">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Browser</th>
                                        <th class="text-end">Sessions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-10/browsers/chrome.svg') }}"
                                                    alt="browsers"><a class="session-name" href="#!">Chrome</a>
                                            </div>
                                        </td>
                                        <td class="text-end">848,604</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-10/browsers/safari.svg') }}"
                                                    alt="browsers"><a class="session-name" href="#!">Safari</a>
                                            </div>
                                        </td>
                                        <td class="text-end">514,850</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-10/browsers/firefox.svg') }}"
                                                    alt="browsers"><a class="session-name" href="#!">Firefox</a>
                                            </div>
                                        </td>
                                        <td class="text-end">15,750</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-10/browsers/edge.svg') }}"
                                                    alt="browsers"><a class="session-name" href="#!">Edge</a></div>
                                        </td>
                                        <td class="text-end">8,952</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-10/browsers/opera.svg') }}"
                                                    alt="browsers"><a class="session-name" href="#!">Opera</a></div>
                                        </td>
                                        <td class="text-end">5,950 </td>
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
    <script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map1/jsvectormap.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map1/world.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map1/custom-vectormap.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_10.js') }}"></script>
@endsection
