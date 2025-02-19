@extends('layouts.simple.master')

@section('title', 'HR Dashboard')

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
                    <h3>HR Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">HR Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid dashboard-11">
        <div class="row">
            <div class="col-xxl-8 box-col-12">
                <div class="row">
                    <div class="col-xl-3 col-hr-6 col-sm-6">
                        <div class="card widget-11 widget-hover">
                            <div class="card-body">
                                <div class="common-align justify-content-start">
                                    <div class="analytics-tread bg-light-primary"><svg class="fill-primary">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#analytics-user') }}"></use>
                                        </svg></div>
                                    <div> <span class="c-o-light">Total Employees</span>
                                        <h4 class="counter" data-target="356">0</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-hr-6 col-sm-6">
                        <div class="card widget-11 widget-hover">
                            <div class="card-body">
                                <div class="common-align justify-content-start">
                                    <div class="analytics-tread bg-light-secondary"><svg class="fill-secondary">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#hire-candidate') }}"></use>
                                        </svg></div>
                                    <div> <span class="c-o-light">Hired Candidates</span>
                                        <h4 class="counter" data-target="100">0</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-hr-6 col-sm-6">
                        <div class="card widget-11 widget-hover">
                            <div class="card-body">
                                <div class="common-align justify-content-start">
                                    <div class="analytics-tread bg-light-warning"><svg class="fill-warning">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#gross-salary') }}"></use>
                                        </svg></div>
                                    <div> <span class="c-o-light">Gross Salary</span>
                                        <h4 class="counter" data-target="562210">0</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-hr-6 col-sm-6">
                        <div class="card widget-11 widget-hover">
                            <div class="card-body">
                                <div class="common-align justify-content-start">
                                    <div class="analytics-tread bg-light-success"><svg class="fill-success">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#new-employee') }}"></use>
                                        </svg></div>
                                    <div> <span class="c-o-light">New Employee</span>
                                        <h4 class="counter" data-target="70">0</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 xl-60 box-col-6">
                        <div class="card project-finish-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="project-left-content">
                                                <h5>Congratulations</h5>
                                                <p class="c-o-light">10 projects have been finished this
                                                    year. </p>
                                                <div class="growth-info">
                                                    <h5 class="txt-primary">95.10%</h5>
                                                    <p class="f-w-500 c-light">Last Year <span
                                                            class="c-o-light f-w-400 f-12 ms-1 me-2">83.04%</span><span
                                                            class="badge badge-light-success">+14%</span>
                                                    </p>
                                                </div>
                                                <div class="project-progress"> <span class="f-14 f-w-500">Clients
                                                        Satisfaction</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%">
                                                            <div class="common-f-start">
                                                                <div class="progress-box">
                                                                    <div class="rounded-bar"></div>
                                                                    <div> </div>
                                                                    <div></div>
                                                                    <div> </div>
                                                                    <div> </div>
                                                                    <div> </div>
                                                                    <div> </div>
                                                                    <div> </div>
                                                                    <div></div>
                                                                    <div> </div>
                                                                    <div> </div>
                                                                    <div> </div>
                                                                    <div> </div>
                                                                    <div> </div>
                                                                    <div> </div>
                                                                    <div> </div>
                                                                    <div> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6"><img class="project-right-content img-fluid"
                                                src="{{ asset('assets/images/dashboard-11/vector-pc.png') }}" alt="vector pc"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 xl-40 box-col-6">
                        <div class="card sales-report">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Applications Overview</h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="applicationOverview" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="applicationOverview"><a class="dropdown-item"
                                                    href="#!">Today</a><a class="dropdown-item"
                                                    href="#!">Tomorrow</a><a class="dropdown-item"
                                                    href="#!">Yesterday</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 analytics-data application-overview">
                                <ul class="balance-data">
                                    <li><span class="circle bg-primary"></span><span
                                            class="c-light ms-1">Applications</span></li>
                                    <li><span class="circle bg-warning"> </span><span class="c-light ms-1">Hired</span>
                                    </li>
                                </ul>
                                <div class="app-overview-wrapper">
                                    <div id="app-overview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-md-6 box-col-6">
                        <div class="card heading-space">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Employee List</h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="employeeList" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="employeeList"><a
                                                    class="dropdown-item" href="#!">This Month</a><a
                                                    class="dropdown-item" href="#!">Previous Month</a><a
                                                    class="dropdown-item" href="#!">Last 3 Months</a><a
                                                    class="dropdown-item" href="#!">Last 6 Months</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-0 seller-table">
                                <div class="recent-table table-responsive custom-scrollbar employee-list-table">
                                    <table class="table" id="employee-list">
                                        <thead>
                                            <tr>
                                                <th> </th>
                                                <th>Name</th>
                                                <th>Employees ID</th>
                                                <th>Email ID</th>
                                                <th>Joining Date</th>
                                                <th>Role </th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="inbox-data">
                                                <td> </td>
                                                <td>
                                                    <div class="common-flex align-items-center"><img
                                                            class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                            alt="user"><a class="f-w-500" href="{{ route('admin.user_list') }}">Wade
                                                            Warren</a></div>
                                                </td>
                                                <td>#45812</td>
                                                <td>wade.warr@co.in</td>
                                                <td>20 Jun,2024</td>
                                                <td>Web Designer</td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="square-white"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-pen') }}">
                                                                </use>
                                                            </svg></div>
                                                        <div class="square-white trash-3"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-trash') }}">
                                                                </use>
                                                            </svg></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inbox-data">
                                                <td> </td>
                                                <td>
                                                    <div class="common-flex align-items-center"><img
                                                            class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard/user/6.jpg') }}" alt="user"><a
                                                            class="f-w-500" href="{{ route('admin.user_list') }}">Michael Mit</a></div>
                                                </td>
                                                <td>#58698</td>
                                                <td>michael.mit@co.in</td>
                                                <td>10 Dec,2024</td>
                                                <td>UI Designer</td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="square-white"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-pen') }}">
                                                                </use>
                                                            </svg></div>
                                                        <div class="square-white trash-3"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-trash') }}">
                                                                </use>
                                                            </svg></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inbox-data">
                                                <td> </td>
                                                <td>
                                                    <div class="common-flex align-items-center"><img
                                                            class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                            alt="user"><a class="f-w-500" href="{{ route('admin.user_list') }}">Jenny
                                                            Wilson</a></div>
                                                </td>
                                                <td>#320148</td>
                                                <td>jenny.wilson@co.in</td>
                                                <td>13 May,2024</td>
                                                <td>Researcher</td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="square-white"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-pen') }}">
                                                                </use>
                                                            </svg></div>
                                                        <div class="square-white trash-3"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-trash') }}">
                                                                </use>
                                                            </svg></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inbox-data">
                                                <td> </td>
                                                <td>
                                                    <div class="common-flex align-items-center"><img
                                                            class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                            alt="user"><a class="f-w-500" href="{{ route('admin.user_list') }}">Guy
                                                            Hawkins</a></div>
                                                </td>
                                                <td>#874264</td>
                                                <td>guy.hawkins@co.in</td>
                                                <td>17 Oct,2024</td>
                                                <td>App Developer</td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="square-white"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-pen') }}">
                                                                </use>
                                                            </svg></div>
                                                        <div class="square-white trash-3"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-trash') }}">
                                                                </use>
                                                            </svg></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inbox-data">
                                                <td> </td>
                                                <td>
                                                    <div class="common-flex align-items-center"><img
                                                            class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                            alt="user"><a class="f-w-500"
                                                            href="{{ route('admin.user_list') }}">Esther Howard</a></div>
                                                </td>
                                                <td>#200148</td>
                                                <td>esther.howard@co.in</td>
                                                <td>22 Jan,2024</td>
                                                <td>Graphic Designer</td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="square-white"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-pen') }}">
                                                                </use>
                                                            </svg></div>
                                                        <div class="square-white trash-3"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-trash') }}">
                                                                </use>
                                                            </svg></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inbox-data">
                                                <td> </td>
                                                <td>
                                                    <div class="common-flex align-items-center"><img
                                                            class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/5.png') }}"
                                                            alt="user"><a class="f-w-500" href="{{ route('admin.user_list') }}">Jacob
                                                            Jones</a></div>
                                                </td>
                                                <td>#985367</td>
                                                <td>jacob.jones@co.in</td>
                                                <td>20 Apr,2024</td>
                                                <td>App Developer</td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="square-white"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-pen') }}">
                                                                </use>
                                                            </svg></div>
                                                        <div class="square-white trash-3"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-trash') }}">
                                                                </use>
                                                            </svg></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inbox-data">
                                                <td> </td>
                                                <td>
                                                    <div class="common-flex align-items-center"><img
                                                            class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/3.png') }}"
                                                            alt="user"><a class="f-w-500"
                                                            href="{{ route('admin.user_list') }}">Arlene McCoy</a></div>
                                                </td>
                                                <td>#45812</td>
                                                <td>arlene.mccoy@co.in</td>
                                                <td>02 Mar,2024</td>
                                                <td>Web Designer</td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="square-white"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-pen') }}">
                                                                </use>
                                                            </svg></div>
                                                        <div class="square-white trash-3"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-trash') }}">
                                                                </use>
                                                            </svg></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inbox-data">
                                                <td> </td>
                                                <td>
                                                    <div class="common-flex align-items-center"><img
                                                            class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/1.png') }}"
                                                            alt="user"><a class="f-w-500"
                                                            href="{{ route('admin.user_list') }}">Robert Fox</a></div>
                                                </td>
                                                <td>#589654</td>
                                                <td>robert.fox@co.in</td>
                                                <td>12 Feb,2024</td>
                                                <td>JS Developer </td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="square-white"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-pen') }}">
                                                                </use>
                                                            </svg></div>
                                                        <div class="square-white trash-3"><svg>
                                                                <use href="{{ asset('assets/svg/icon-sprite.svg#hr-trash') }}">
                                                                </use>
                                                            </svg></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-md-6 box-col-6">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Attendance Overview</h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="bestSeller" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="bestSeller"><a
                                                    class="dropdown-item" href="#!">This Month</a><a
                                                    class="dropdown-item" href="#!">Previous Month</a><a
                                                    class="dropdown-item" href="#!">Last 3 Months</a><a
                                                    class="dropdown-item" href="#!">Last 6 Months</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-0">
                                <div class="recent-table table-responsive custom-scrollbar attendance-table">
                                    <table class="table" id="attendance-overview">
                                        <thead>
                                            <tr>
                                                <th>Employee Name</th>
                                                <th>Designation</th>
                                                <th>Check In Time</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a class="f-w-500" href="{{ route('admin.user_list') }}">David Jones</a>
                                                </td>
                                                <td>Web Designer</td>
                                                <td>9:26 AM</td>
                                                <td> <span class="badge badge-light-success">On Time</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="f-w-500" href="{{ route('admin.user_list') }}">Joseph
                                                        Miller</a></td>
                                                <td>UI-UX Designer</td>
                                                <td>10:48 AM</td>
                                                <td> <span class="badge badge-light-danger">Late</span></td>
                                            </tr>
                                            <tr>
                                                <td><a class="f-w-500" href="{{ route('admin.user_list') }}">Daniel
                                                        Moore</a></td>
                                                <td>Python Developer</td>
                                                <td>9:30 AM</td>
                                                <td> <span class="badge badge-light-success">On Time</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="f-w-500" href="{{ route('admin.user_list') }}">Ava Garcia</a>
                                                </td>
                                                <td>JS Developer</td>
                                                <td>10:04 AM</td>
                                                <td> <span class="badge badge-light-success">On Time </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="f-w-500" href="{{ route('admin.user_list') }}">Amelia Lee</a>
                                                </td>
                                                <td>Next Developer</td>
                                                <td>11:48 AM</td>
                                                <td> <span class="badge badge-light-danger">Late</span></td>
                                            </tr>
                                            <tr>
                                                <td><a class="f-w-500" href="{{ route('admin.user_list') }}">Harper
                                                        Scott</a></td>
                                                <td>Marketing</td>
                                                <td>04:45 AM</td>
                                                <td> <span class="badge badge-light-success">On Time</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="f-w-500" href="{{ route('admin.user_list') }}">Jack Smith</a>
                                                </td>
                                                <td>ML Developer</td>
                                                <td>02:20 AM</td>
                                                <td> <span class="badge badge-light-danger">Late</span></td>
                                            </tr>
                                            <tr>
                                                <td><a class="f-w-500" href="{{ route('admin.user_list') }}">Cole Brown</a>
                                                </td>
                                                <td>AI Developer</td>
                                                <td>03.45 AM</td>
                                                <td> <span class="badge badge-light-success">On Time</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-sm-5 box-col-5">
                        <div class="card bhd-user-cards">
                            <div class="card-body">
                                <div class="birthday-cards text-center">
                                    <h5>Today's Birthday !!!</h5>
                                    <div class="swiper swiper-11">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="birthday-usercard">
                                                    <div class="btd-user"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-12/user/10.png') }}"
                                                            alt="Birthday user">
                                                        <div class="verified-user"><i class="fa-solid fa-check"></i></div>
                                                    </div>
                                                    <h5>Isabella Martinez</h5>
                                                    <h6 class="f-w-400">UI Designer</h6>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="birthday-usercard">
                                                    <div class="btd-user"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-12/user/2.png') }}"
                                                            alt="Birthday user">
                                                        <div class="verified-user"><i class="fa-solid fa-check"></i></div>
                                                    </div>
                                                    <h5>Liam Taylor</h5>
                                                    <h6 class="f-w-400">JS Developer</h6>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="birthday-usercard">
                                                    <div class="btd-user"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-12/user/5.png') }}"
                                                            alt="Birthday user">
                                                        <div class="verified-user"><i class="fa-solid fa-check"></i></div>
                                                    </div>
                                                    <h5>Sophia Rodriguez</h5>
                                                    <h6 class="f-w-400">Tester</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                    <div class="send-wishes btn-hover-effect"><span class="f-14 f-w-500">Send
                                            Wishes</span><i class="fa-solid fa-chevron-right ms-auto"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-sm-7 box-col-7">
                        <div class="card sales-report project-analytics">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Recruitment Analysis<span class="c-o-light f-14 ps-2 f-w-400">(Department
                                            Wise)</span>
                                    </h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="projectAnalytics" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="projectAnalytics"><a class="dropdown-item"
                                                    href="#!">Today</a><a class="dropdown-item"
                                                    href="#!">Tomorrow</a><a class="dropdown-item"
                                                    href="#!">Yesterday</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 analytics-data">
                                <ul class="balance-data">
                                    <li><span class="circle bg-primary"></span><span class="c-light ms-2">Designers</span>
                                    </li>
                                    <li><span class="circle bg-secondary"> </span><span
                                            class="c-light ms-2">Developers</span></li>
                                    <li><span class="circle bg-warning"></span><span class="c-light ms-2">Managers</span>
                                    </li>
                                    <li><span class="circle bg-success"></span><span class="c-light ms-2">Sales &
                                            marketing</span></li>
                                </ul>
                                <div class="project-analytics-wrapper">
                                    <div id="project_analytics"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 box-col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card schedule-calender">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Today's Schedule</h5>
                                    <div class="card-header-right-icon"><a class="btn f-w-500" href="#!">+
                                            Add</a></div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <ul class="schedule-wrapper nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="mon-tab" data-bs-toggle="tab"
                                            href="#mon" role="tab" aria-controls="mon" aria-selected="false">
                                            <h6>Mon </h6><span class="f-w-400">01</span>
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link" id="tue-tab" data-bs-toggle="tab"
                                            href="#tue" role="tab" aria-controls="tue" aria-selected="true">
                                            <h6>Tue </h6><span class="f-w-400">02</span>
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link" id="wed-tab" data-bs-toggle="tab"
                                            href="#wed" role="tab" aria-controls="wed" aria-selected="false">
                                            <h6>Wed</h6><span class="f-w-400">03</span>
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link" id="thu-tab" data-bs-toggle="tab"
                                            href="#thu" role="tab" aria-controls="thu" aria-selected="false">
                                            <h6>Thu </h6><span class="f-w-400">04</span>
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link" id="frd-tab" data-bs-toggle="tab"
                                            href="#frd" role="tab" aria-controls="frd" aria-selected="true">
                                            <h6>Fri </h6><span class="f-w-400">05</span>
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link font-primary" id="sat-tab"
                                            data-bs-toggle="tab" href="#sat" role="tab" aria-controls="sat"
                                            aria-selected="false">
                                            <h6>Sat</h6><span class="f-w-400">06</span>
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link font-primary" id="sun-tab"
                                            data-bs-toggle="tab" href="#sun" role="tab" aria-controls="sun"
                                            aria-selected="false">
                                            <h6>Sun</h6><span class="f-w-400">07</span>
                                        </a></li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="mon" role="tabpanel"
                                        aria-labelledby="mon-tab">
                                        <ul class="activity-update">
                                            <li>
                                                <div class="d-flex align-items-center b-l-primary">
                                                    <div class="left-schedule"><span>Meeting With
                                                            Candidate</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/6.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/user/3.png') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Zoom
                                                                Meeting</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">09.00 - 12.00
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-secondary">
                                                    <div class="left-schedule"><span>Client Meeting with
                                                            BDE</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">HR
                                                                Office</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">01.00 - 02.00
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-warning">
                                                    <div class="left-schedule"><span>Interview With
                                                            Candidate</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Manager's
                                                                Office</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">02.00 - 02.30
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-success">
                                                    <div class="left-schedule"><span>Employee
                                                            Engagement</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Zoom
                                                                Meeting</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">03.00 - 04.15
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-primary">
                                                    <div class="left-schedule"><span>Training Session</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/13.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Training
                                                                Room</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">05.30 - 06.00
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-info">
                                                    <div class="left-schedule"><span>Performance
                                                            Review</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">HR
                                                                Office</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">08.30 - 09:00
                                                            PM</span></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="tue" role="tabpanel" aria-labelledby="tue-tab">
                                        <ul class="activity-update">
                                            <li>
                                                <div class="d-flex align-items-center b-l-secondary">
                                                    <div class="left-schedule"><span>Client Meeting with
                                                            BDE</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">HR
                                                                Office</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">01.00 - 02.00
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-success">
                                                    <div class="left-schedule"><span>Employee
                                                            Engagement</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Zoom
                                                                Meeting</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">03.00 - 04.15
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-primary">
                                                    <div class="left-schedule"><span>Training Session</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/7.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Training
                                                                Room</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">05.30 - 06.00
                                                            AM</span></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="wed" role="tabpanel" aria-labelledby="wed-tab">
                                        <ul class="activity-update">
                                            <li>
                                                <div class="d-flex align-items-center b-l-primary">
                                                    <div class="left-schedule"><span>Meeting With
                                                            Candidate</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/6.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/user/3.png') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Zoom
                                                                Meeting</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">09.00 - 12.00
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-success">
                                                    <div class="left-schedule"><span>Employee
                                                            Engagement</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Zoom
                                                                Meeting</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">03.00 - 04.15
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-warning">
                                                    <div class="left-schedule"><span>Interview With
                                                            Candidate</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Manager's
                                                                Office</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">02.00 - 02.30
                                                            AM</span></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="thu" role="tabpanel" aria-labelledby="thu-tab">
                                        <ul class="activity-update">
                                            <li>
                                                <div class="d-flex align-items-center b-l-primary">
                                                    <div class="left-schedule"><span>Meeting With
                                                            Candidate</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/6.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/user/3.png') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Zoom
                                                                Meeting</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">09.00 - 12.00
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-secondary">
                                                    <div class="left-schedule"><span>Client Meeting with
                                                            BDE</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">HR
                                                                Office</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">01.00 - 02.00
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-warning">
                                                    <div class="left-schedule"><span>Interview With
                                                            Candidate</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Manager's
                                                                Office</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">02.00 - 02.30
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-success">
                                                    <div class="left-schedule"><span>Employee
                                                            Engagement</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Zoom
                                                                Meeting</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">03.00 - 04.15
                                                            AM</span></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="frd" role="tabpanel" aria-labelledby="frd-tab">
                                        <ul class="activity-update">
                                            <li>
                                                <div class="d-flex align-items-center b-l-success">
                                                    <div class="left-schedule"><span>Employee
                                                            Engagement</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Zoom
                                                                Meeting</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">03.00 - 04.15
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-primary">
                                                    <div class="left-schedule"><span>Performance
                                                            Review</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">HR
                                                                Office</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">08.30 - 09:00
                                                            PM</span></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="sat" role="tabpanel" aria-labelledby="sat-tab">
                                        <ul class="activity-update">
                                            <li>
                                                <div class="d-flex align-items-center b-l-primary">
                                                    <div class="left-schedule"><span>Training Session</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/7.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Training
                                                                Room</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">05.30 - 06.00
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-success">
                                                    <div class="left-schedule"><span>Employee
                                                            Engagement</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Zoom
                                                                Meeting</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">03.00 - 04.15
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-warning">
                                                    <div class="left-schedule"><span>Interview With
                                                            Candidate</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Manager's
                                                                Office</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">02.00 - 02.30
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-secondary">
                                                    <div class="left-schedule"><span>Client Meeting with
                                                            BDE</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">HR
                                                                Office</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">01.00 - 02.00
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-primary">
                                                    <div class="left-schedule"><span>Meeting With
                                                            Candidate</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/6.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/user/3.png') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Zoom
                                                                Meeting</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">09.00 - 12.00
                                                            AM</span></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="sun" role="tabpanel" aria-labelledby="sun-tab">
                                        <ul class="activity-update">
                                            <li>
                                                <div class="d-flex align-items-center b-l-primary">
                                                    <div class="left-schedule"><span>Training Session</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/7.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Training
                                                                Room</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">05.30 - 06.00
                                                            AM</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center b-l-success">
                                                    <div class="left-schedule"><span>Employee
                                                            Engagement</span>
                                                        <div class="common-f-start">
                                                            <div class="customers">
                                                                <ul>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                                            alt="user"></li>
                                                                    <li class="d-inline-block"><img
                                                                            class="img-40 rounded-circle"
                                                                            src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                                            alt="user"></li>
                                                                </ul>
                                                            </div><span class="c-o-light schedule-name">Zoom
                                                                Meeting</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-schedule"><svg class="fill-icon fill-success">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                            </use>
                                                        </svg><span class="c-o-light">03.00 - 04.15
                                                            AM</span></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-md-6 box-col-6">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Interviews Scheduled</h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="interviewSchedule" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="interviewSchedule"><a class="dropdown-item"
                                                    href="#!">Today</a><a class="dropdown-item"
                                                    href="#!">Tomorrow</a><a class="dropdown-item"
                                                    href="#!">Yesterday</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body interviewer-users pt-0">
                                <ul>
                                    <li>
                                        <div class="common-flex"> <img class="img-fluid"
                                                src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}" alt="user">
                                            <div>
                                                <h6>Lucas E.</h6><span>UI Designer</span>
                                            </div>
                                        </div><span>10 Feb,2024</span><i class="fa-solid fa-angle-right c-o-light"></i>
                                    </li>
                                    <li>
                                        <div class="common-flex"> <img class="img-fluid"
                                                src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}" alt="user">
                                            <div>
                                                <h6>Leslie A.</h6><span>Web Designer</span>
                                            </div>
                                        </div><span>17 Oct, 2024 </span><i class="fa-solid fa-angle-right c-o-light"> </i>
                                    </li>
                                    <li>
                                        <div class="common-flex"> <img class="img-fluid"
                                                src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}" alt="user">
                                            <div>
                                                <h6>Savannah N.</h6><span>Js Developer </span>
                                            </div>
                                        </div><span>21 Sep, 2024</span><i class="fa-solid fa-angle-right c-o-light"> </i>
                                    </li>
                                    <li>
                                        <div class="common-flex"> <img class="img-fluid"
                                                src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}" alt="user">
                                            <div>
                                                <h6>Darlene R.</h6><span>App Developer</span>
                                            </div>
                                        </div><span>22 May, 2024</span><i class="fa-solid fa-angle-right c-o-light"> </i>
                                    </li>
                                    <li>
                                        <div class="common-flex"> <img class="img-fluid"
                                                src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}" alt="user">
                                            <div>
                                                <h6>Marvin M.</h6><span>Marketing</span>
                                            </div>
                                        </div><span>18 Sep, 2024</span><i class="fa-solid fa-angle-right c-o-light"> </i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-md-6 box-col-6">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Leave Request</h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="visitorButton" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="visitorButton">
                                                <a class="dropdown-item" href="#!">Today</a><a class="dropdown-item"
                                                    href="#!">Tomorrow</a><a class="dropdown-item"
                                                    href="#!">Yesterday</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-0">
                                <div class="table-responsive leave-request-table custom-scrollbar">
                                    <table class="table" id="leave-employee">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Reason</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex"><img class="img-fluid img-40 rounded-circle me-2"
                                                            src="{{ asset('assets/images/dashboard/user/6.jpg') }}" alt="user">
                                                        <div class="img-content-box"><a class="f-w-500"
                                                                href="#!">Alison Carol</a>
                                                            <p class="mb-0 f-light">24 Jul to 26 Jul 2024
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Family Function</td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="approval-box bg-success"><i
                                                                class="fa-solid fa-check text-white"></i>
                                                        </div>
                                                        <div class="approval-box border border-danger"><i
                                                                class="fa-solid fa-ban txt-danger"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex"><img
                                                            class="img-fluid img-40 rounded-circle me-2"
                                                            src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                            alt="user">
                                                        <div class="img-content-box"><a class="f-w-500"
                                                                href="#!">Miranda Bailey</a>
                                                            <p class="mb-0 f-light">10 May to 12 May 2024
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Personal Leave</td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="approval-box bg-success"><i
                                                                class="fa-solid fa-check text-white"></i>
                                                        </div>
                                                        <div class="approval-box border border-danger"><i
                                                                class="fa-solid fa-ban txt-danger"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex"><img
                                                            class="img-fluid img-40 rounded-circle me-2"
                                                            src="{{ asset('assets/images/dashboard/user/10.jpg') }}" alt="user">
                                                        <div class="img-content-box"><a class="f-w-500"
                                                                href="#!">Kathryn Roe</a>
                                                            <p class="mb-0 f-light">01 Oct to 10 Oct 2024
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Sick Leave</td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="approval-box bg-success"><i
                                                                class="fa-solid fa-check text-white"></i>
                                                        </div>
                                                        <div class="approval-box border border-danger"><i
                                                                class="fa-solid fa-ban txt-danger"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex"><img
                                                            class="img-fluid img-40 rounded-circle me-2"
                                                            src="{{ asset('assets/images/dashboard/user/9.jpg') }}" alt="user">
                                                        <div class="img-content-box"><a class="f-w-500"
                                                                href="#!">Andrew Baker</a>
                                                            <p class="mb-0 f-light">15 Nov to 20 Nov 2024
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Personal Leave</td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="approval-box bg-success"><i
                                                                class="fa-solid fa-check text-white"></i>
                                                        </div>
                                                        <div class="approval-box border border-danger"><i
                                                                class="fa-solid fa-ban txt-danger"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex"><img
                                                            class="img-fluid img-40 rounded-circle me-2"
                                                            src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                            alt="user">
                                                        <div class="img-content-box"><a class="f-w-500"
                                                                href="#!">Bob James</a>
                                                            <p class="mb-0 f-light">14 Feb to 16 Feb 2024
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Sick Leave</td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="approval-box bg-success"><i
                                                                class="fa-solid fa-check text-white"></i>
                                                        </div>
                                                        <div class="approval-box border border-danger"><i
                                                                class="fa-solid fa-ban txt-danger"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex"><img
                                                            class="img-fluid img-40 rounded-circle me-2"
                                                            src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                            alt="user">
                                                        <div class="img-content-box"><a class="f-w-500"
                                                                href="#!">Thomas Tim</a>
                                                            <p class="mb-0 f-light">03 Mar to 10 Mar 2024
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Out of Town</td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="approval-box bg-success"><i
                                                                class="fa-solid fa-check text-white"></i>
                                                        </div>
                                                        <div class="approval-box border border-danger"><i
                                                                class="fa-solid fa-ban txt-danger"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex"><img
                                                            class="img-fluid img-40 rounded-circle me-2"
                                                            src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                            alt="user">
                                                        <div class="img-content-box"><a class="f-w-500"
                                                                href="#!">Muriel Bing</a>
                                                            <p class="mb-0 f-light">09 Feb to 16 Feb 2024
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Out of Town</td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="approval-box bg-success"><i
                                                                class="fa-solid fa-check text-white"></i>
                                                        </div>
                                                        <div class="approval-box border border-danger"><i
                                                                class="fa-solid fa-ban txt-danger"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex"><img
                                                            class="img-fluid img-40 rounded-circle me-2"
                                                            src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                            alt="user">
                                                        <div class="img-content-box"><a class="f-w-500"
                                                                href="#!">Russell Rose</a>
                                                            <p class="mb-0 f-light">01 Nov to 05 Nov 2024
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Sick Leave</td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <div class="approval-box bg-success"><i
                                                                class="fa-solid fa-check text-white"></i>
                                                        </div>
                                                        <div class="approval-box border border-danger"><i
                                                                class="fa-solid fa-ban txt-danger"></i>
                                                        </div>
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
    <script src="{{ asset('assets/js/dashboard/dashboard_11.js') }}"></script>
    <script src="{{ asset('assets/js/trash.js') }}"></script>
@endsection