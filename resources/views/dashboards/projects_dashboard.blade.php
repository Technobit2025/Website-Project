@extends('layouts.simple.master')

@section('title', 'Projects Dashboard')

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
                    <h3>Projects Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Projects Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid dashboard-12">
        <div class="row">
            <div class="col-xxl-6 box-col-12">
                <div class="row small-stats">
                    <div class="col-md-4 col-sm-6">
                        <div class="card widget-hover">
                            <div class="card-body">
                                <div class="common-space">
                                    <div> <span class="c-o-light f-w-500">Pending</span>
                                        <h4 class="counter" data-target="204">0</h4><span
                                            class="font-success f-12 f-w-500"><i
                                                class="icon-arrow-up"></i><span>+9.4%</span></span>
                                    </div>
                                    <div class="project-state bg-light-warning"><svg class="fill-warning">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#pending-project') }}"></use>
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card widget-hover">
                            <div class="card-body">
                                <div class="common-space">
                                    <div> <span class="c-o-light f-w-500">Complete</span>
                                        <h4 class="counter" data-target="106">0</h4><span
                                            class="font-danger f-12 f-w-500"><i
                                                class="icon-arrow-down"></i><span>-1.4%</span></span>
                                    </div>
                                    <div class="project-state bg-light-secondary"><svg class="fill-secondary">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#complete-project') }}">
                                            </use>
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="card widget-hover">
                            <div class="card-body">
                                <div class="common-space">
                                    <div> <span class="c-o-light f-w-500">Total</span>
                                        <h4 class="counter" data-target="310">0</h4><span
                                            class="font-success f-12 f-w-500"><i
                                                class="icon-arrow-up"></i><span>+9.4%</span></span>
                                    </div>
                                    <div class="project-state bg-light-primary"><svg class="fill-primary">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#total-project') }}"></use>
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card tasks-card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Priority Task</h5>
                                    <div class="arrow-group">
                                        <div class="prev"><i class="fa-solid fa-arrow-right-long fa-flip-horizontal"></i>
                                        </div>
                                        <div class="next"><i class="fa-solid fa-arrow-right-long"></i></div>
                                    </div>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="priorityTask" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="priorityTask"><a
                                                    class="dropdown-item" href="#!">Today</a><a class="dropdown-item"
                                                    href="#!">Tomorrow</a><a class="dropdown-item"
                                                    href="#!">Yesterday</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="task-box">
                                    <div class="swiper recent-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="task-box">
                                                    <div class="common-space">
                                                        <h6>Review And Edit Project Documentation</h6><span
                                                            class="badge badge-b-danger txt-danger">High
                                                            Priority</span>
                                                    </div>
                                                    <p class="project-link">On <a href="https://shorturl.at/HZwNw"
                                                            target="_blank">Yuri</a> Project</p>
                                                    <div class="project-member">
                                                        <p>50% Done</p>
                                                        <ul class="customers">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Daxton Creed"><img class="common-circle"
                                                                    src="{{ asset('assets/images/dashboard-12/user/11.png') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Sarah Wilson"><img class="common-circle"
                                                                    src="{{ asset('assets/images/dashboard-12/user/12.png') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Marigold Luna"><img class="common-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Charles Rodriguez"><img
                                                                    class="common-circle"
                                                                    src="{{ asset('assets/images/dashboard-12/user/13.png') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="progress" role="progressbar">
                                                        <div class="progress-bar bg-primary" style="width: 50%"></div>
                                                    </div>
                                                    <p>Due: Jan 08th, 2024</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="task-box">
                                                    <div class="common-space">
                                                        <h6>Create Landing Banner & Preview Banner</h6><span
                                                            class="badge badge-b-warning txt-warning">Med
                                                            Priority</span>
                                                    </div>
                                                    <p class="project-link">On <a href="https://shorturl.at/cBcS1"
                                                            target="_blank">Fastkart</a> Project</p>
                                                    <div class="project-member">
                                                        <p>40% Done</p>
                                                        <ul class="customers">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Caryl Kauth"><img class="common-circle"
                                                                    src="{{ asset('assets/images/dashboard-12/user/14.png') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Thomas Jones"><img class="common-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Gray Curran"><img class="common-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="progress" role="progressbar">
                                                        <div class="progress-bar bg-success" style="width: 40%"></div>
                                                    </div>
                                                    <p>Due: Apr 15th, 2024</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="task-box">
                                                    <div class="common-space">
                                                        <h6>Create Social & POS Dashboard</h6><span
                                                            class="badge badge-b-danger txt-danger">High
                                                            Priority</span>
                                                    </div>
                                                    <p class="project-link">On <a href="https://shorturl.at/cRon2"
                                                            target="_blank">Riho</a> Project</p>
                                                    <div class="project-member">
                                                        <p>70% Done</p>
                                                        <ul class="customers">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Caleb Rivera"><img class="common-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Jenny Wilson"><img class="common-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Wes Humphrey"><img class="common-circle"
                                                                    src="{{ asset('assets/images/dashboard-12/user/2.png') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="progress" role="progressbar">
                                                        <div class="progress-bar bg-secondary" style="width: 70%"></div>
                                                    </div>
                                                    <p>Due: Feb 02th, 2024</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="task-box">
                                                    <div class="common-space">
                                                        <h6>Create Dashboard & Mail Box Pages</h6><span
                                                            class="badge badge-b-warning txt-warning">Med
                                                            Priority</span>
                                                    </div>
                                                    <p class="project-link">On <a href="https://shorturl.at/uMZyU"
                                                            target="_blank">Mofi</a> Project</p>
                                                    <div class="project-member">
                                                        <p>45% Done</p>
                                                        <ul class="customers">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Joseph Garcia"><img class="common-circle"
                                                                    src="{{ asset('assets/images/avtar/16.jpg') }}"
                                                                    alt="user">
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Elizabeth Davis"><img class="common-circle"
                                                                    src="{{ asset('assets/images/avtar/3.jpg') }}"
                                                                    alt="user">
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Karen Moore"> <img class="common-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Robert Williams"><img class="common-circle"
                                                                    src="{{ asset('assets/images/dashboard-12/user/1.png') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="progress" role="progressbar">
                                                        <div class="progress-bar bg-warning" style="width: 45%"></div>
                                                    </div>
                                                    <p>Due: Nov 18th, 2024 </p>
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
            <div class="col-xxl-3 col-xl-4 col-md-6 ord-xl-1 box-ord-1 box-col-4">
                <div class="card height-equal">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Task Statistics</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="taskStat"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="taskStat">
                                        <a class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="task-statistics">
                            <div id="task-statistics"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6 ord-xl-2 box-ord-2 box-col-4">
                <div class="card height-equal">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Today's Task</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="todaysTask"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="todaysTask"><a
                                            class="dropdown-item" href="#!">This
                                            Month</a><a class="dropdown-item" href="#!">Previous Month</a><a
                                            class="dropdown-item" href="#!">Last 3 Months</a><a
                                            class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="task-card">
                            <li class="common-space">
                                <div> <span>01</span><span class="text-truncate">Finalize project
                                        proposal</span></div><svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-task-arrow') }}"></use>
                                </svg>
                            </li>
                            <li class="common-space">
                                <div> <span>02</span><span class="text-truncate">Create project
                                        timeline</span></div><svg class="fill-primary">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#fill-task-arrow') }}"></use>
                                </svg>
                            </li>
                            <li class="common-space">
                                <div> <span>03</span><span class="text-truncate">Develop initial
                                        prototype</span></div><svg class="fill-primary">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#fill-task-arrow') }}"></use>
                                </svg>
                            </li>
                            <li class="common-space">
                                <div> <span>04</span><span class="text-truncate">Set up project
                                        meeting</span></div><svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-task-arrow') }}"></use>
                                </svg>
                            </li>
                            <li class="common-space">
                                <div> <span>05</span><span class="text-truncate">Conduct user
                                        research</span></div><svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-task-arrow') }}"></use>
                                </svg>
                            </li>
                            <li class="common-space">
                                <div> <span>06</span><span class="text-truncate">Review and edit
                                        project</span></div><svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-task-arrow') }}"></use>
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7 box-col-12">
                <div class="card heading-space">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>All Projects</h5>
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
                    <div class="card-body px-0 pt-0 all-project-table">
                        <div class="recent-table table-responsive custom-scrollbar">
                            <table class="table" id="all-project-table">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Id</th>
                                        <th>Manager Name</th>
                                        <th>Project Name</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Priority</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a class="f-w-500" href="{{ route('admin.details_project') }}">#8543</a></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-12/user/1.png') }}"
                                                    alt="user"><a href="#!">Wade</a></div>
                                        </td>
                                        <td>Project Alpha</td>
                                        <td>20 Jun,2024</td>
                                        <td>25 Jun 2024</td>
                                        <td>High</td>
                                        <td> <span class="badge badge-light-warning">In Progress</span></td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a class="f-w-500" href="{{ route('admin.details_project') }}">#9542</a></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-12/user/2.png') }}"
                                                    alt="user"><a href="#!">Otis</a></div>
                                        </td>
                                        <td>Project Beta</td>
                                        <td>12 Jul 2024</td>
                                        <td>19 Jul 2024</td>
                                        <td>Medium</td>
                                        <td> <span class="badge badge-light-danger">Not Started</span></td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a class="f-w-500" href="{{ route('admin.details_project') }}">#3159</a></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-12/user/3.png') }}"
                                                    alt="user"><a href="#!">Jenny</a></div>
                                        </td>
                                        <td>Project Gamma</td>
                                        <td>16 Aug 2024</td>
                                        <td>18 Aug 2024</td>
                                        <td>High</td>
                                        <td> <span class="badge badge-light-warning">In Progress</span></td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a class="f-w-500" href="{{ route('admin.details_project') }}">#3159</a></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-12/user/4.png') }}"
                                                    alt="user"><a href="#!">Guy</a></div>
                                        </td>
                                        <td>Project Delta</td>
                                        <td>01 Sep 2024</td>
                                        <td>23 Sep 2024</td>
                                        <td>Low</td>
                                        <td> <span class="badge badge-light-success">Completed</span></td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a class="f-w-500" href="{{ route('admin.details_project') }}">#3159</a></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-12/user/5.png') }}"
                                                    alt="user"><a href="#!">Jacob</a></div>
                                        </td>
                                        <td>Project Theta</td>
                                        <td>11 Aug 2024</td>
                                        <td>16 Aug 2024</td>
                                        <td>Medium</td>
                                        <td> <span class="badge badge-light-warning">In Progress</span></td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a class="f-w-500" href="{{ route('admin.details_project') }}">#5897</a></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                    alt="user"><a href="#!">Zayne</a></div>
                                        </td>
                                        <td> Project Gamma</td>
                                        <td>01 Nov 2024</td>
                                        <td>10 Nov 2024</td>
                                        <td>Medium</td>
                                        <td> <span class="badge badge-light-warning">In Progress</span></td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a class="f-w-500" href="{{ route('admin.details_project') }}">#4545</a></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                    alt="user"><a href="#!">Nova</a></div>
                                        </td>
                                        <td> Project Beta</td>
                                        <td>12 Feb 2024</td>
                                        <td>14 Feb 2024</td>
                                        <td>Low</td>
                                        <td> <span class="badge badge-light-success">Completed</span></td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a class="f-w-500" href="{{ route('admin.details_project') }}">#1224</a></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}"
                                                    alt="user"><a href="#!">Mario</a></div>
                                        </td>
                                        <td>Project Delta</td>
                                        <td>19 Apr 2024</td>
                                        <td>22 Apr 2024</td>
                                        <td>Medium</td>
                                        <td> <span class="badge badge-light-success">Completed</span></td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a class="f-w-500" href="{{ route('admin.details_project') }}">#5004</a></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                    alt="user"><a href="#!">Cecilia</a></div>
                                        </td>
                                        <td>Project Gamma</td>
                                        <td>05 Mar 2024</td>
                                        <td>08 Mar 2024</td>
                                        <td>Low</td>
                                        <td> <span class="badge badge-light-warning">In Progress</span></td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a class="f-w-500" href="{{ route('admin.details_project') }}">#5004</a></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                    alt="user"><a href="#!">Aaley</a></div>
                                        </td>
                                        <td>Project Alpha</td>
                                        <td>08 Aug 2024</td>
                                        <td>25 Aug 2024</td>
                                        <td>Low</td>
                                        <td> <span class="badge badge-light-danger">Not Started</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-md-6 ord-xl-5 box-ord-5 box-col-6">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Estimated vs. Actual Hours by Project</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="estimatedProject" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="estimatedProject"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="estimated-project">
                            <div id="estimated-project"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 ord-xl-4 box-ord-4 box-col-6">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Team Performance</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="teamPerformance" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamPerformance"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 team-performance-table">
                        <div class="recent-table table-responsive custom-scrollbar">
                            <table class="table" id="team-performance-table">
                                <thead>
                                    <tr>
                                        <th>Team Member</th>
                                        <th>Assigned</th>
                                        <th>Completed</th>
                                        <th>Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="inbox-data">
                                        <td><a class="f-w-500" href="{{ route('admin.list_project') }}">Jagger Padilla</a>
                                        </td>
                                        <td>50</td>
                                        <td>45</td>
                                        <td>90%</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td><a class="f-w-500" href="{{ route('admin.list_project') }}">Lea Daniel</a></td>
                                        <td>40</td>
                                        <td>38</td>
                                        <td>95%</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td><a class="f-w-500" href="{{ route('admin.list_project') }}">Collin Avalos</a>
                                        </td>
                                        <td>65</td>
                                        <td>60</td>
                                        <td>91%</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td><a class="f-w-500" href="{{ route('admin.list_project') }}">Kairi Wall</a></td>
                                        <td>45</td>
                                        <td>26</td>
                                        <td>70%</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td><a class="f-w-500" href="{{ route('admin.list_project') }}">Ahmed Bryant</a>
                                        </td>
                                        <td>29</td>
                                        <td>22</td>
                                        <td>86%</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td><a class="f-w-500" href="{{ route('admin.list_project') }}">Laurel Floyd</a>
                                        </td>
                                        <td>14</td>
                                        <td>10</td>
                                        <td>92%</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td><a class="f-w-500" href="{{ route('admin.list_project') }}">Khari Wells</a></td>
                                        <td>45</td>
                                        <td>25</td>
                                        <td>88%</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td><a class="f-w-500" href="{{ route('admin.list_project') }}">Evan Cobb</a></td>
                                        <td>50</td>
                                        <td>30</td>
                                        <td>94%</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td><a class="f-w-500" href="{{ route('admin.list_project') }}">Royal Tran</a></td>
                                        <td>78</td>
                                        <td>55</td>
                                        <td>74%</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td><a class="f-w-500" href="{{ route('admin.list_project') }}">Avery Bell</a></td>
                                        <td>15</td>
                                        <td>08</td>
                                        <td>65%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-5 ord-xl-3 box-ord-3 box-col-4">
                <div class="row main-expenses">
                    <div class="col-md-12 col-sm-6">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Monthly Expenses</h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="monthlyExpense" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="monthlyExpense">
                                                <a class="dropdown-item" href="#!">This Month</a><a
                                                    class="dropdown-item" href="#!">Previous Month</a><a
                                                    class="dropdown-item" href="#!">Last 3 Months</a><a
                                                    class="dropdown-item" href="#!">Last 6 Months</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xxl-6 box-col-12">
                                        <h6> $ <span class="counter" data-target="5476000">0</span></h6>
                                        <span class="font-danger"><i class="me-1"
                                                data-feather="trending-down"></i>4%</span>
                                    </div>
                                    <div class="col-xxl-6 box-col-12">
                                        <div class="monthly-expense-wrapper">
                                            <div id="monthly-expense"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Yearly Expenses</h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                id="yearlyExpense" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="yearlyExpense">
                                                <a class="dropdown-item" href="#!">This Month</a><a
                                                    class="dropdown-item" href="#!">Previous Month</a><a
                                                    class="dropdown-item" href="#!">Last 3 Months</a><a
                                                    class="dropdown-item" href="#!">Last 6 Months</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xxl-6 box-col-12">
                                        <h6> $ <span class="counter" data-target="6589120">0</span></h6>
                                        <span class="font-success"><i class="me-1"
                                                data-feather="trending-up"></i>8%</span>
                                    </div>
                                    <div class="col-xxl-6 box-col-12">
                                        <div class="yearly-expense-wrapper">
                                            <div id="yearly-expense"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-7 ord-xl-6 box-ord-6 box-col-6">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Upcoming Deadlines</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="upcomingDeadline" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="upcomingDeadline"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 upcoming-datatable">
                        <div class="recent-table table-responsive custom-scrollbar">
                            <table class="table" id="upcoming-datatable">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Employee</th>
                                        <th>Task</th>
                                        <th>Deadline</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td><a class="f-w-500" href="{{ route('admin.task') }}">Roma Chase</a></td>
                                        <td><span>Define project scope</span></td>
                                        <td>10 Jun 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td><a class="f-w-500" href="{{ route('admin.task') }}">Krish Hart</a></td>
                                        <td><span>Gather requirements</span></td>
                                        <td>24 Jul 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td><a class="f-w-500" href="{{ route('admin.task') }}">Alex Powell</a></td>
                                        <td><span>Develop project plan</span></td>
                                        <td>15 Aug 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td><a class="f-w-500" href="{{ route('admin.task') }}">Carl Gates</a></td>
                                        <td><span>Design UI mockups</span></td>
                                        <td>29 Sep 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td><a class="f-w-500" href="{{ route('admin.task') }}">Holly Fraz</a></td>
                                        <td><span>Conduct user testing</span></td>
                                        <td>31 Jun 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td><a class="f-w-500" href="{{ route('admin.task') }}">Leonel Kirby</a></td>
                                        <td><span>Develop admin theme</span></td>
                                        <td>12 Feb 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td><a class="f-w-500" href="{{ route('admin.task') }}">Mary Arroyo</a></td>
                                        <td><span>Develop JS theme</span></td>
                                        <td>27 Oct 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td><a class="f-w-500" href="{{ route('admin.task') }}">Nia Duncan</a></td>
                                        <td><span>Testing yuri theme</span></td>
                                        <td>15 Sep 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td><a class="f-w-500" href="{{ route('admin.task') }}">Lan Austin</a></td>
                                        <td><span>Testing riho theme</span></td>
                                        <td>10 Apr 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td><a class="f-w-500" href="{{ route('admin.task') }}">Seven Cobb</a></td>
                                        <td><span>Webflow for yuri</span></td>
                                        <td>16 Jan 2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-5 ord-xl-7 box-ord-7 box-col-6">
                <div class="card sales-report">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Projects Analysis</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="projectAnalysis" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectAnalysis"><a
                                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item"
                                            href="#!">Tomorrow</a><a class="dropdown-item"
                                            href="#!">Yesterday</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="balance-data">
                            <li><span class="circle bg-primary"></span><span class="c-light ms-1">Project</span></li>
                            <li><span class="circle bg-warning"> </span><span class="c-light ms-1">Task</span></li>
                            <li><span class="circle bg-secondary"></span><span class="c-light ms-1">Earnings</span></li>
                        </ul>
                        <div id="project-analysis"></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 ord-xl-8 box-ord-8 box-col-12">
                <div class="card heading-space">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Recent Activity</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="recentActivity" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="recentActivity"><a
                                            class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 recent-activity-table">
                        <div class="recent-table table-responsive custom-scrollbar">
                            <table class="table" id="recent-activity-table">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Activity Description</th>
                                        <th>Project</th>
                                        <th>Performed By</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.details_project') }}" target="_blank">Completed
                                                Project Definition</a></td>
                                        <td>Project Alpha</td>
                                        <td>Eleanor Pena</td>
                                        <td>01 Jun 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.details_project') }}" target="_blank">Conducted user
                                                testing</a></td>
                                        <td>Project Beta</td>
                                        <td>Arlene McCoy</td>
                                        <td>24 Jul 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.details_project') }}" target="_blank">Submitted
                                                initial design mockups</a></td>
                                        <td>Project Delta</td>
                                        <td>Jerome Bell</td>
                                        <td>15 Aug 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.details_project') }}" target="_blank">Held kickoff
                                                meeting</a></td>
                                        <td>Project Delta</td>
                                        <td>Theresa Webb</td>
                                        <td>29 Sep 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.details_project') }}" target="_blank">Collected client
                                                feedback</a></td>
                                        <td>Project Alpha</td>
                                        <td>Darrell Steward</td>
                                        <td>31 Jun 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.details_project') }}" target="_blank">Login from IP
                                                192.168.xx.xx</a></td>
                                        <td>Login</td>
                                        <td>Rey Spears</td>
                                        <td>14 Feb 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.details_project') }}" target="_blank">Two-factor
                                                authentication</a></td>
                                        <td>Auth Setup </td>
                                        <td>Zoya Little</td>
                                        <td>15 Sep 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.details_project') }}" target="_blank">Client
                                                meetings</a></td>
                                        <td>Manage API</td>
                                        <td>Navy West</td>
                                        <td>28 Nov 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.details_project') }}" target="_blank">Clone react
                                                project</a></td>
                                        <td>State Manage</td>
                                        <td>Levi Pope</td>
                                        <td>28 Feb 2024</td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td> </td>
                                        <td> <a href="{{ route('admin.details_project') }}" target="_blank">Clone yuri
                                                project</a></td>
                                        <td>Admin Theme</td>
                                        <td>Nyomi Gray</td>
                                        <td>19 Nov 2024</td>
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
    <script src="{{ asset('assets/js/dashboard/dashboard_12.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
