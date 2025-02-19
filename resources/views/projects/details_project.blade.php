@extends('layouts.simple.master')

@section('title', 'Project Details')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3> Project Details</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Projects</li>
                        <li class="breadcrumb-item active">Project Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid main-scope-project">
        <div class="row scope-bottom-wrapper">
            <div class="col-xxl-2 recent-xl-23 col-xl-3 box-col-3">
                <div class="card">
                    <div class="card-body">
                        <ul class="sidebar-left-icons nav nav-pills" id="add-product-pills-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" id="overview-project-tab" data-bs-toggle="pill"
                                    href="#overview-project" role="tab" aria-controls="overview-project"
                                    aria-selected="false">
                                    <div class="absolute-border"></div>
                                    <div class="nav-rounded">
                                        <div class="product-icons"><svg>
                                                <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#project-search') }}">
                                                </use>
                                            </svg></div>
                                    </div>
                                    <div class="product-tab-content">
                                        <h6>Summary</h6>
                                    </div>
                                </a></li>
                            <li class="nav-item"> <a class="nav-link" id="target-project-tab" data-bs-toggle="pill"
                                    href="#target-project" role="tab" aria-controls="target-project"
                                    aria-selected="false">
                                    <div class="absolute-border"></div>
                                    <div class="nav-rounded">
                                        <div class="product-icons"><svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#project-target') }}">
                                                </use>
                                            </svg></div>
                                    </div>
                                    <div class="product-tab-content">
                                        <h6>Status</h6>
                                    </div>
                                </a></li>
                            <li class="nav-item"> <a class="nav-link" id="budget-project-tab" data-bs-toggle="pill"
                                    href="#budget-project" role="tab" aria-controls="budget-project"
                                    aria-selected="false">
                                    <div class="absolute-border"></div>
                                    <div class="nav-rounded">
                                        <div class="product-icons"><svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#project-badget') }}">
                                                </use>
                                            </svg></div>
                                    </div>
                                    <div class="product-tab-content">
                                        <h6>Finance</h6>
                                    </div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link" id="team-project-tab" data-bs-toggle="pill"
                                    href="#team-project" role="tab" aria-controls="team-project" aria-selected="false">
                                    <div class="absolute-border"></div>
                                    <div class="nav-rounded">
                                        <div class="product-icons"><svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#project-users') }}">
                                                </use>
                                            </svg></div>
                                    </div>
                                    <div class="product-tab-content">
                                        <h6>Team</h6>
                                    </div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link" id="attachment-tab" data-bs-toggle="pill"
                                    href="#attachment" role="tab" aria-controls="attachment" aria-selected="false">
                                    <div class="absolute-border"></div>
                                    <div class="nav-rounded">
                                        <div class="product-icons"><svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-files') }}">
                                                </use>
                                            </svg></div>
                                    </div>
                                    <div class="product-tab-content">
                                        <h6>Attachment</h6>
                                    </div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link" id="activity-project-tab" data-bs-toggle="pill"
                                    href="#activity-project" role="tab" aria-controls="activity-project"
                                    aria-selected="false">
                                    <div class="absolute-border"></div>
                                    <div class="nav-rounded">
                                        <div class="product-icons"><svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-activity') }}">
                                                </use>
                                            </svg></div>
                                    </div>
                                    <div class="product-tab-content">
                                        <h6>Activity</h6>
                                    </div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-10 recent-xl-77 col-xl-9 box-col-9">
                <div class="row">
                    <div class="col-12">
                        <div class="common-project-header common-space m-b-20">
                            <div class="common-space">
                                <div class="pe-sm-3">
                                    <h5>Dashboard<span class="badge badge-light-warning ms-2">In
                                            Progress</span></h5><span class="c-o-light">Create a brand logo
                                        design for a admin.</span>
                                </div>
                                <div class="common-align">
                                    <div class="customers">
                                        <ul>
                                            <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                    src="{{ asset('assets/images/dashboard/user/10.jpg') }}"
                                                    alt="user">
                                            </li>
                                            <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                    src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                    alt="user">
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="common-circle bg-lighter-danger">A</div>
                                            </li>
                                            <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                    src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                    alt="user">
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="bg-lighter-dark common-circle"><span class="f-w-500">9+</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <h6>All tasks : 24</h6>
                                </div>
                            </div>
                            <div class="common-align">
                                <ul class="common-align">
                                    <li><span>Create Date &colon;</span><svg>
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}"></use>
                                        </svg><span>10 Jul, 2024 </span></li>
                                    <li> <span>Due Date &colon;</span><svg>
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}"></use>
                                        </svg><span>10 Aug, 2024</span></li>
                                </ul><a class="btn btn-primary" href="{{ route('admin.create_project') }}" target="_blank"><i
                                        class="fa-solid fa-plus"></i> Add Project </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="tab-content" id="add-product-pills-tabContent">
                            <div class="tab-pane fade show active" id="overview-project" role="tabpanel"
                                aria-labelledby="overview-project-tab">
                                <div class="row">
                                    <div class="col-xxl-8 box-col-12">
                                        <div class="card main-summary">
                                            <div class="card-header card-no-border">
                                                <div class="common-space">
                                                    <div class="left-header-content">
                                                        <h5>Project Summary</h5>
                                                        <p class="m-0 c-o-light">Due date exceeded for 24
                                                            projects</p>
                                                    </div>
                                                    <div class="card-header-right-btn"><a class="c-o-light"
                                                            href="{{ route('admin.list_products') }}">View All</a></div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="row g-3">
                                                    <div class="col-md-8 xl-50 order-md-0 order-1">
                                                        <ul class="summary-section">
                                                            <li class="p-b-20">
                                                                <p>The proposal's project summary is among
                                                                    its most crucial sections. It is
                                                                    probably the first thing a reviewer will
                                                                    look at, so here is your best chance to
                                                                    catch their attention.</p>
                                                            </li>
                                                            <li>
                                                                <ul class="common-space p-t-10">
                                                                    <li>
                                                                        <ul>
                                                                            <li>
                                                                                <p class="mb-1">Creation
                                                                                    Date </p><span>14 March,
                                                                                    2024</span>
                                                                            </li>
                                                                            <li>
                                                                                <p class="mb-1">Due Date</p>
                                                                                <span>30 April, 2024</span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <ul>
                                                                            <li>
                                                                                <p class="mb-1">Priority</p>
                                                                                <span
                                                                                    class="badge badge-light-primary">High</span>
                                                                            </li>
                                                                            <li>
                                                                                <p class="mb-1">Status</p>
                                                                                <span class="badge badge-light-success">In
                                                                                    progress</span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <p class="p-t-10 mb-2">Resource</p>
                                                                        <div class="attachment-file common-flex">
                                                                            <div class="common-flex align-items-center">
                                                                                <img class="img-fluid"
                                                                                    src="{{ asset('assets/images/project/files/pdf.png') }}"
                                                                                    alt="pdf">
                                                                                <div class="d-block">
                                                                                    <p class="mb-0">Projects
                                                                                        Webflow</p>
                                                                                    <p class="c-o-light">678
                                                                                        KB</p>
                                                                                </div>
                                                                            </div><a
                                                                                href="{{ asset('assets/pug/pages/template/text_file.pdf') }}"
                                                                                download> <i
                                                                                    class="fa-solid fa-download f-light"></i></a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 xl-50">
                                                        <div class="summary-chart-box">
                                                            <div id="summary-chart"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6 order-xxl-0 order-sm-1 box-col-6 box-ord-1">
                                        <div class="card">
                                            <div class="card-header card-no-border">
                                                <div class="common-space">
                                                    <div class="left-header-content">
                                                        <h5>To Do List</h5>
                                                    </div>
                                                    <div class="card-header-right-btn"><a class="c-o-light"
                                                            href="{{ route('admin.to_do') }}">View All</a></div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0 project-todo">
                                                <ul class="crm-todo-list">
                                                    <li class="d-flex align-items-center"><span
                                                            class="l-line-primary"></span>
                                                        <div class="flex-shrink-0">
                                                            <div class="form-check"><input
                                                                    class="form-check-input checkbox-primary"
                                                                    type="checkbox" value=""></div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="f-w-400">Establish a project plan
                                                            </h6><span class="mb-0">Divide the project
                                                                manageable phases</span>
                                                        </div>
                                                        <div class="dropdown icon-dropdown"><button
                                                                class="btn dropdown-toggle" id="appointmentDropdown"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false"><i
                                                                    class="icon-more-alt"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="appointmentDropdown"><a
                                                                    class="dropdown-item" href="#">Completed</a><a
                                                                    class="dropdown-item" href="#">Reschedule</a><a
                                                                    class="dropdown-item" href="#">Repeat</a></div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center"><span
                                                            class="l-line-secondary"></span>
                                                        <div class="flex-shrink-0">
                                                            <div class="form-check"><input
                                                                    class="form-check-input checkbox-secondary"
                                                                    type="checkbox" value=""></div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="f-w-400">Gathering Info</h6><span
                                                                class="mb-0">Establish a budget for project
                                                                costs</span>
                                                        </div>
                                                        <div class="dropdown icon-dropdown"><button
                                                                class="btn dropdown-toggle" id="getherInfoDropdown"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false"><i
                                                                    class="icon-more-alt"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="getherInfoDropdown"><a
                                                                    class="dropdown-item" href="#">Completed</a><a
                                                                    class="dropdown-item" href="#">Reschedule</a><a
                                                                    class="dropdown-item" href="#">Repeat</a></div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center"><span
                                                            class="l-line-success"></span>
                                                        <div class="flex-shrink-0">
                                                            <div class="form-check"><input
                                                                    class="form-check-input checkbox-success"
                                                                    type="checkbox" value=""></div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="f-w-400">Track & keep an eye on
                                                                progress</h6><span class="mb-0">Development
                                                                task</span>
                                                        </div>
                                                        <div class="dropdown icon-dropdown"><button
                                                                class="btn dropdown-toggle" id="developmentDropdown"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false"><i
                                                                    class="icon-more-alt"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="developmentDropdown"><a
                                                                    class="dropdown-item" href="#">Completed</a><a
                                                                    class="dropdown-item" href="#">Reschedule</a><a
                                                                    class="dropdown-item" href="#">Repeat</a></div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center"><span
                                                            class="l-line-warning"></span>
                                                        <div class="flex-shrink-0">
                                                            <div class="form-check"><input
                                                                    class="form-check-input checkbox-warning"
                                                                    type="checkbox" value=""></div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="f-w-400">Project Termination</h6>
                                                            <span class="mb-0">Records and files for
                                                                upcoming use</span>
                                                        </div>
                                                        <div class="dropdown icon-dropdown"><button
                                                                class="btn dropdown-toggle" id="projectTermination"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false"><i
                                                                    class="icon-more-alt"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="projectTermination"><a
                                                                    class="dropdown-item" href="#">Completed</a><a
                                                                    class="dropdown-item" href="#">Reschedule</a><a
                                                                    class="dropdown-item" href="#">Repeat</a></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 xl-100 box-col-12">
                                        <div class="card">
                                            <div class="card-header card-no-border">
                                                <div class="common-space">
                                                    <div class="left-header-content">
                                                        <h5>Projects Pending</h5>
                                                        <p class="m-0 c-o-light">Total 28 projects pending
                                                        </p>
                                                    </div>
                                                    <div class="card-header-right-btn"><a class="c-o-light"
                                                            href="{{ route('admin.list_products') }}">View All</a></div>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 pt-0">
                                                <div
                                                    class="recent-table table-responsive custom-scrollbar project-pending-table">
                                                    <table class="table" id="project-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Project Name</th>
                                                                <th>Project Head</th>
                                                                <th>Priority</th>
                                                                <th>Due Date</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Terraform </td>
                                                                <td>
                                                                    <div class="common-flex align-items-center">
                                                                        <img class="img-fluid lead-img"
                                                                            src="{{ asset('assets/images/dashboard-9/user/1.png') }}"
                                                                            alt="user">
                                                                        <div><a class="c-light" href="#!">Eleanor
                                                                                Pena</a>
                                                                            <p class="mb-0 c-o-light">
                                                                                Elea.pena@crzq7.edu</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>High</td>
                                                                <td>15,May 2024</td>
                                                                <td> <button
                                                                        class="btn button-light-success txt-success">In
                                                                        Progress</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>GearVibe</td>
                                                                <td>
                                                                    <div class="common-flex align-items-center">
                                                                        <img class="img-fluid lead-img"
                                                                            src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                                            alt="user">
                                                                        <div><a class="c-light" href="#!">Mae
                                                                                Golden</a>
                                                                            <p class="mb-0 c-o-light">
                                                                                mae.golden@crz3q.edu</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>Medium</td>
                                                                <td>10,June 2024</td>
                                                                <td> <button
                                                                        class="btn button-light-warning txt-warning">Pending</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>CloudCraze</td>
                                                                <td>
                                                                    <div class="common-flex align-items-center">
                                                                        <img class="img-fluid lead-img"
                                                                            src="{{ asset('assets/images/dashboard-9/user/3.png') }}"
                                                                            alt="user">
                                                                        <div><a class="c-light" href="#!">Emily
                                                                                Park</a>
                                                                            <p class="mb-0 c-o-light">
                                                                                emily.park@crezq4.edu</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>Low</td>
                                                                <td>16,May 2024</td>
                                                                <td> <button
                                                                        class="btn button-light-warning txt-warning">Pending</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>PrimePulse</td>
                                                                <td>
                                                                    <div class="common-flex align-items-center">
                                                                        <img class="img-fluid lead-img"
                                                                            src="{{ asset('assets/images/dashboard-9/user/4.png') }}"
                                                                            alt="user">
                                                                        <div><a class="c-light" href="#!">Jacob
                                                                                Jones</a>
                                                                            <p class="mb-0 c-o-light">
                                                                                jacob.jonesl@crzd3.edu</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>High</td>
                                                                <td>02,Nov 2024</td>
                                                                <td> <button
                                                                        class="btn button-light-success txt-success">In
                                                                        Progress</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>ShiftSwift</td>
                                                                <td>
                                                                    <div class="common-flex align-items-center">
                                                                        <img class="img-fluid lead-img"
                                                                            src="{{ asset('assets/images/dashboard-9/user/5.png') }}"
                                                                            alt="user">
                                                                        <div><a class="c-light" href="#!">Robert
                                                                                Fox</a>
                                                                            <p class="mb-0 c-o-light">
                                                                                robert.fox@crzs2.edu</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>Medium</td>
                                                                <td>06,Dec 2024</td>
                                                                <td> <button
                                                                        class="btn button-light-success txt-success">In
                                                                        Progress</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Solar Sphere</td>
                                                                <td>
                                                                    <div class="common-flex align-items-center">
                                                                        <img class="img-fluid lead-img"
                                                                            src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                                            alt="user">
                                                                        <div><a class="c-light" href="#!">Eriko
                                                                                Fonsa</a>
                                                                            <p class="mb-0 c-o-light">
                                                                                eriko.fonsa@crzq8.edu</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>High</td>
                                                                <td>17,Feb 2024</td>
                                                                <td> <button
                                                                        class="btn button-light-success txt-success">In
                                                                        Progress</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Grow Green</td>
                                                                <td>
                                                                    <div class="common-flex align-items-center">
                                                                        <img class="img-fluid lead-img"
                                                                            src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                                            alt="user">
                                                                        <div><a class="c-light" href="#!">Cody
                                                                                Fisher</a>
                                                                            <p class="mb-0 c-o-light">
                                                                                cody.fisher@crz3r.edu</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>Low</td>
                                                                <td>06,Mar 2024</td>
                                                                <td> <button
                                                                        class="btn button-light-warning txt-warning">Pending</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Green Horizon</td>
                                                                <td>
                                                                    <div class="common-flex align-items-center">
                                                                        <img class="img-fluid lead-img"
                                                                            src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                                            alt="user">
                                                                        <div><a class="c-light" href="#!">Alexis
                                                                                Taylor</a>
                                                                            <p class="mb-0 c-o-light">
                                                                                alexis.taylor@crzf8.edu</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>High</td>
                                                                <td>03,Apr 2024</td>
                                                                <td> <button
                                                                        class="btn button-light-success txt-success">In
                                                                        Progress</button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 order-xxl-0 order-sm-2 col-md-6 box-col-6 box-ord-2">
                                        <div class="card">
                                            <div class="card-header card-no-border">
                                                <div class="common-space">
                                                    <div class="left-header-content">
                                                        <h5>Task Overview</h5>
                                                        <p class="m-0 c-o-light">All 209 Task Completed</p>
                                                    </div>
                                                    <div class="card-header-right-btn"><a class="c-o-light"
                                                            href="{{ route('admin.task') }}">View All</a></div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="task-overview">
                                                    <div id="task-overview-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 recent-xl-50 order-xxl-0 order-sm-3 box-col-12 box-ord-3">
                                        <div class="card">
                                            <div class="card-header card-no-border">
                                                <div class="common-space">
                                                    <div class="left-header-content">
                                                        <h5>Recent Activity</h5>
                                                        <p class="m-0 c-o-light">23, April 2024</p>
                                                    </div>
                                                    <div class="card-header-right-btn"><a class="c-o-light"
                                                            href="{{ route('admin.task') }}">View All</a></div>
                                                </div>
                                            </div>
                                            <div class="card-body activity-wrapper pt-0">
                                                <ul class="schedule-wrapper nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item"><a class="nav-link active" id="sun-tab"
                                                            data-bs-toggle="tab" href="#sun" role="tab"
                                                            aria-controls="sun" aria-selected="false">
                                                            <h6>Su</h6><span class="c-o-light">24</span>
                                                        </a></li>
                                                    <li class="nav-item"><a class="nav-link" id="mon-tab"
                                                            data-bs-toggle="tab" href="#mon" role="tab"
                                                            aria-controls="mon" aria-selected="false">
                                                            <h6>Mo </h6><span class="c-o-light">25</span>
                                                        </a></li>
                                                    <li class="nav-item"><a class="nav-link" id="tue-tab"
                                                            data-bs-toggle="tab" href="#tue" role="tab"
                                                            aria-controls="tue" aria-selected="true">
                                                            <h6>Tu </h6><span class="c-o-light">26</span>
                                                        </a></li>
                                                    <li class="nav-item"><a class="nav-link" id="wed-tab"
                                                            data-bs-toggle="tab" href="#wed" role="tab"
                                                            aria-controls="wed" aria-selected="false">
                                                            <h6>We </h6><span class="c-o-light">27</span>
                                                        </a></li>
                                                    <li class="nav-item"><a class="nav-link" id="thu-tab"
                                                            data-bs-toggle="tab" href="#thu" role="tab"
                                                            aria-controls="thu" aria-selected="false">
                                                            <h6>Thu</h6><span class="c-o-light">28</span>
                                                        </a></li>
                                                    <li class="nav-item"><a class="nav-link" id="frd-tab"
                                                            data-bs-toggle="tab" href="#frd" role="tab"
                                                            aria-controls="frd" aria-selected="true">
                                                            <h6>Fri</h6><span class="c-o-light">29</span>
                                                        </a></li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade active show" id="sun" role="tabpanel"
                                                        aria-labelledby="sun-tab">
                                                        <ul class="activity-update">
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Make a new landing page</h6><span>By
                                                                        <a href="#!">Cody Fisher</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">10 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>02:00</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Client visit</h6><span>By <a href="#!">Marvin
                                                                            Lie</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">12 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>05:00</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Email marketing automation</h6>
                                                                    <span>By <a href="#!">Emily
                                                                            Park</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">18 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>08:00</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade" id="mon" role="tabpanel"
                                                        aria-labelledby="mon-tab">
                                                        <ul class="activity-update">
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Marketing and client meeting</h6>
                                                                    <span>By <a href="#!">Caleb
                                                                            Riv</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">11 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>08:00</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Make a creating an account profile
                                                                    </h6><span>By <a href="#!">Nareha
                                                                            Ail</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">18 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>10:00</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Web development and ui/ ux design
                                                                    </h6><span>By <a href="#!">Sneha
                                                                            Shah</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">22 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>13:00</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Brand Logo design</h6><span>By <a
                                                                            href="#!">Manish Pie</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">28 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>15:30</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade" id="tue" role="tabpanel"
                                                        aria-labelledby="tue-tab">
                                                        <ul class="activity-update">
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Social media graphic design & ads
                                                                    </h6><span>By <a href="#!">Caryl
                                                                            Kauth</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">02 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>02 :45</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Website usability testing</h6>
                                                                    <span>By <a href="#!">Alexis
                                                                            Taylor</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">05 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>07 :30</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>SEO optimization</h6><span>By <a
                                                                            href="#!">Eriko Fonsa</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">08 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>11 :50</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade" id="wed" role="tabpanel"
                                                        aria-labelledby="wed-tab">
                                                        <ul class="activity-update">
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Analyzing competitor strategies</h6>
                                                                    <span>By <a href="#!">Jacob
                                                                            Jones</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">06 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>01 :20</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Lead generation</h6><span>By <a href="#!">Lily
                                                                            Mccoy</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">12 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>03:00</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Prototypes for user feedback</h6>
                                                                    <span>By <a href="#!">Robert
                                                                            Fox</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">18 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>07 :50 </span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Brand promotion</h6><span>By <a href="#!">Fran
                                                                            Loain</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">20 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>02:10</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade" id="thu" role="tabpanel"
                                                        aria-labelledby="thu-tab">
                                                        <ul class="activity-update">
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Website chatbot setup</h6><span>By
                                                                        <a href="#!">Loie Fenter</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">01 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>06 :20</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Video content creation</h6><span>By
                                                                        <a href="#!">Anna Catmire</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">15 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>03 :00</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade" id="frd" role="tabpanel"
                                                        aria-labelledby="frd-tab">
                                                        <ul class="activity-update">
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Chatbot meeting</h6><span>By <a
                                                                            href="#!">Edwin Hogan</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">25 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>17 :30</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Hosting online contests</h6><span>By
                                                                        <a href="#!">Ralph Water</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">35 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>04:45</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <h6>Quizzes for audience</h6><span>By <a
                                                                            href="#!">Aaron Hogan</a></span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <p class="mb-0">45 min ago</p><svg
                                                                        class="fill-icon">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                        </use>
                                                                    </svg><span>02 :00</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 order-xxl-0 order-sm-4 col-md-6 box-col-6 box-ord-4">
                                        <div class="card">
                                            <div class="card-header card-no-border">
                                                <div class="common-space">
                                                    <div class="left-header-content">
                                                        <h5>Team Members</h5>
                                                        <p class="m-0 c-o-light">Total 205 Members</p>
                                                    </div>
                                                    <div class="card-header-right-btn"><a class="c-o-light"
                                                            href="{{ route('admin.chat_private') }}">View All</a></div>
                                                </div>
                                            </div>
                                            <div class="card-body invite-member pt-0">
                                                <ul>
                                                    <li class="common-align gap-2">
                                                        <div class="flex-shrink-0"><img class="img-fluid"
                                                                src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                                alt="user"></div>
                                                        <div class="flex-grow-1">
                                                            <h6>Jane Cooper</h6><span
                                                                class="c-o-light">jane.cooper@study.edu</span>
                                                        </div>
                                                        <div class="d-flex"> <svg data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-title="View">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#view-member') }}">
                                                                </use>
                                                            </svg><svg data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Chat">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#stroke-note') }}">
                                                                </use>
                                                            </svg></div>
                                                    </li>
                                                    <li class="common-align gap-2">
                                                        <div class="flex-shrink-0"><img class="img-fluid"
                                                                src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                                alt="user"></div>
                                                        <div class="flex-grow-1">
                                                            <h6>Robert Fox</h6><span
                                                                class="c-o-light">robert.fox@study.edu</span>
                                                        </div>
                                                        <div class="d-flex"> <svg data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-title="View">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#view-member') }}">
                                                                </use>
                                                            </svg><svg data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Chat">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#stroke-note') }}">
                                                                </use>
                                                            </svg></div>
                                                    </li>
                                                    <li class="common-align gap-2">
                                                        <div class="flex-shrink-0"><img class="img-fluid"
                                                                src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                                alt="user"></div>
                                                        <div class="flex-grow-1">
                                                            <h6>Daisy Roy</h6><span
                                                                class="c-o-light">daisy.roy@study.edu</span>
                                                        </div>
                                                        <div class="d-flex"> <svg data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-title="View">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#view-member') }}">
                                                                </use>
                                                            </svg><svg data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Chat">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#stroke-note') }}">
                                                                </use>
                                                            </svg></div>
                                                    </li>
                                                    <li class="common-align gap-2">
                                                        <div class="flex-shrink-0"><img class="img-fluid"
                                                                src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                                alt="user"></div>
                                                        <div class="flex-grow-1">
                                                            <h6>Ryan Gill</h6><span
                                                                class="c-o-light">ryan.gill@study.edu</span>
                                                        </div>
                                                        <div class="d-flex"> <svg data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-title="View">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#view-member') }}">
                                                                </use>
                                                            </svg><svg data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Chat">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#stroke-note') }}">
                                                                </use>
                                                            </svg></div>
                                                    </li>
                                                    <li class="common-align gap-2">
                                                        <div class="flex-shrink-0"><img class="img-fluid"
                                                                src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                                alt="user"></div>
                                                        <div class="flex-grow-1">
                                                            <h6>Ace Marks</h6><span
                                                                class="c-o-light">ace.mark@study.edu</span>
                                                        </div>
                                                        <div class="d-flex"> <svg data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-title="View">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#view-member') }}">
                                                                </use>
                                                            </svg><svg data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Chat">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#stroke-note') }}">
                                                                </use>
                                                            </svg></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 order-xxl-0 order-sm-5 col-md-6 box-col-6 box-ord-5">
                                        <div class="card">
                                            <div class="card-header card-no-border">
                                                <div class="common-space">
                                                    <div class="left-header-content">
                                                        <h5>Comments</h5>
                                                        <p class="m-0 c-o-light">Total 120 Comments</p>
                                                    </div>
                                                    <div class="card-header-right-btn"><a class="c-o-light"
                                                            href="{{ route('admin.course_details') }}">View All</a></div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                <ul class="user-comment-wrapper">
                                                    <li class="common-align gap-2 align-items-start">
                                                        <div class="flex-shrink-0"><img class="img-fluid"
                                                                src="{{ asset('assets/images/dashboard/user/13.jpg') }}"
                                                                alt="user"></div>
                                                        <div class="flex-grow-1">
                                                            <div class="common-space pb-1">
                                                                <h6>Caleb Rivera</h6><button class="btn c-o-light"><svg
                                                                        class="me-2">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#stroke-arrow') }}">
                                                                        </use>
                                                                    </svg>Reply</button>
                                                            </div><span class="c-o-light">I am getting
                                                                message from customers that when they place
                                                                order always get error message</span>
                                                        </div>
                                                    </li>
                                                    <li class="common-align gap-2 align-items-start">
                                                        <div class="flex-shrink-0"><img class="img-fluid"
                                                                src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                                                alt="user"></div>
                                                        <div class="flex-grow-1">
                                                            <h6>Mili Pais</h6><span class="c-o-light">Please
                                                                be sure to check your spam mailbox to see if
                                                                your email filters have identified the email
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="cmt-box"> <label class="form-label"
                                                        for="exampleFormControlTextarea1">Post A
                                                        Comment</label>
                                                    <div class="common-f-start gap-1">
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Comment Here.."></textarea><i class="fa-solid fa-paper-plane"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="target-project" role="tabpanel"
                                aria-labelledby="target-project-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card filter-header">
                                            <div class="card-body">
                                                <div class="input-group common-searchbox"><span
                                                        class="input-group-text"><i class="search-icon text-gray"
                                                            data-feather="search"></i></span><input class="form-control"
                                                        type="text" placeholder="Search Project..."></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6 box-col-6">
                                        <div class="card progress-project">
                                            <div class="card-header card-no-border scope-light-primary">
                                                <div class="common-space">
                                                    <div class="common-align">
                                                        <div class="common-dot bg-primary"></div>
                                                        <h6>Pending</h6><span
                                                            class="badge rounded-circle c-o-light">3</span>
                                                    </div>
                                                    <div class="card-header-right-icon">
                                                        <div class="dropdown icon-dropdown"><button
                                                                class="btn dropdown-toggle" id="pendingProject"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false"><i
                                                                    class="icon-more-alt"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="pendingProject"><a class="dropdown-item"
                                                                    href="#">View
                                                                    Project</a><a class="dropdown-item" href="#">Add
                                                                    Members</a><a class="dropdown-item"
                                                                    href="#">Update
                                                                    Status</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="progress-project-box">
                                                    <div class="list-box title-line-warning">
                                                        <div class="header-top"><span
                                                                class="badge badge-light-warning">UI/UX
                                                                Design</span>
                                                            <div class="common-box"> <i
                                                                    class="fa-solid fa-plus txt-warning"></i>
                                                            </div>
                                                        </div>
                                                        <div class="project-body"><img class="img-fluid"
                                                                src="{{ asset('assets/images/project/objective/phone1.png') }}"
                                                                alt="phone">
                                                            <h6 class="mb-2">UX Manager</h6><span>Group's
                                                                expertise in the industry and ensuring that
                                                                the group continues to develop as
                                                                experts.</span>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-secondary" style="width: 30%">
                                                                </div>
                                                            </div>
                                                            <ul class="common-f-start">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Marley Ford"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}"
                                                                        alt="user"></li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Gray Curran"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                                        alt="user"></li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Yarrow  Wix">
                                                                    <div class="common-circle bg-lighter-info">
                                                                        Y</div>
                                                                </li>
                                                            </ul>
                                                            <div class="project-bottom common-space">
                                                                <div class="common-flex"><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Attachment"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-attachment') }}">
                                                                            </use>
                                                                        </svg>7</span><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Comments"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-cmt') }}">
                                                                            </use>
                                                                        </svg>5</span></div>
                                                                <p class="mb-0 c-o-light"> <svg class="me-2">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                                        </use>
                                                                    </svg>02 Jul, 2024</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-project-box">
                                                    <div class="list-box title-line-success">
                                                        <div class="header-top">
                                                            <ul class="common-f-start">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Sarah Wilson"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                                        alt="user"></li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Richard Taylor"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                                        alt="user"></li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Linda Brown">
                                                                    <div class="common-circle bg-lighter-danger">
                                                                        L</div>
                                                                </li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Jessica Anderson"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                                        alt="user"></li>
                                                            </ul><span class="badge badge-light-success">UX
                                                                Design</span>
                                                        </div>
                                                        <div class="project-body">
                                                            <h6 class="mb-2">Logo Design</h6><span>Create a
                                                                distinctive and memorable logo that connects
                                                                with your target market.</span>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-secondary" style="width: 10%">
                                                                </div>
                                                            </div>
                                                            <div class="project-bottom common-space">
                                                                <div class="common-flex"><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Attachment"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-attachment') }}">
                                                                            </use>
                                                                        </svg>7</span><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Comments"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-cmt') }}">
                                                                            </use>
                                                                        </svg>5</span></div>
                                                                <p class="mb-0 c-o-light"> <svg class="me-2">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                                        </use>
                                                                    </svg>20 Feb, 2024</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-project-box">
                                                    <div class="list-box title-line-primary">
                                                        <div class="header-top">
                                                            <ul class="common-f-start">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Thomas Jones"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard-9/user/1.png') }}"
                                                                        alt="user"></li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Karen Jones">
                                                                    <div class="common-circle bg-lighter-dark">
                                                                        K</div>
                                                                </li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Elizabeth Williams"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard-9/user/3.png') }}"
                                                                        alt="user"></li>
                                                            </ul><span class="badge badge-light-primary">Negotiation</span>
                                                        </div>
                                                        <div class="project-body">
                                                            <h6 class="mb-2">Getting together with a
                                                                customer</h6><span>Deal with problems, and
                                                                improve our collaboration for success on
                                                                both sides.</span>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-secondary" style="width: 40%">
                                                                </div>
                                                            </div>
                                                            <div class="project-bottom common-space">
                                                                <div class="common-flex"><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Attachment"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-attachment') }}">
                                                                            </use>
                                                                        </svg>1</span><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Comments"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-cmt') }}">
                                                                            </use>
                                                                        </svg>4</span></div>
                                                                <p class="mb-0 c-o-light"> <svg class="me-2">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                                        </use>
                                                                    </svg>12 Jan, 2024</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6 box-col-6">
                                        <div class="card progress-project">
                                            <div class="card-header card-no-border scope-light-warning">
                                                <div class="common-space">
                                                    <div class="common-align">
                                                        <div class="common-dot bg-warning"></div>
                                                        <h6>In Progress</h6><span
                                                            class="badge rounded-circle c-o-light">3</span>
                                                    </div>
                                                    <div class="card-header-right-icon">
                                                        <div class="dropdown icon-dropdown"><button
                                                                class="btn dropdown-toggle" id="progressProject"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false"><i
                                                                    class="icon-more-alt"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="progressProject"><a class="dropdown-item"
                                                                    href="#">View
                                                                    Project</a><a class="dropdown-item" href="#">Add
                                                                    Members</a><a class="dropdown-item"
                                                                    href="#">Update
                                                                    Status</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="progress-project-box">
                                                    <div class="list-box title-line-primary">
                                                        <div class="header-top">
                                                            <ul class="common-f-start">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Alexis Taylor"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard/user/10.jpg') }}"
                                                                        alt="user"></li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Andrew Price"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                                        alt="user"></li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Emily Park">
                                                                    <div class="common-circle bg-lighter-warning">
                                                                        E</div>
                                                                </li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Caryl Kauth"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                                        alt="user"></li>
                                                            </ul><span class="badge badge-light-primary">UI/UX
                                                                Design</span>
                                                        </div>
                                                        <div class="project-body">
                                                            <h6 class="mb-2">Redesign - Landing page</h6>
                                                            <span>Such as contact management, lead
                                                                management, marketing automation,
                                                                etc.</span>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" style="width: 32%">
                                                                </div>
                                                            </div>
                                                            <div class="project-bottom common-space">
                                                                <div class="common-flex"><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Attachment"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-attachment') }}">
                                                                            </use>
                                                                        </svg>2</span><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Comments"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-cmt') }}">
                                                                            </use>
                                                                        </svg>3</span></div>
                                                                <p class="mb-0 c-o-light"> <svg class="me-2">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                                        </use>
                                                                    </svg>06 Nov, 2024</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-project-box">
                                                    <div class="list-box title-line-warning">
                                                        <div class="header-top"><span
                                                                class="badge badge-light-warning">Testing</span>
                                                            <div class="common-box"> <i
                                                                    class="fa-solid fa-plus txt-warning"></i>
                                                            </div>
                                                        </div>
                                                        <div class="project-body"><img class="img-fluid"
                                                                src="{{ asset('assets/images/project/objective/phone.png') }}"
                                                                alt="phone">
                                                            <h6 class="mb-2">Mobile Testing</h6>
                                                            <span>Deliver a high-quality product that
                                                                guarantees client happiness and lowers
                                                                risk.</span>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" style="width: 40%">
                                                                </div>
                                                            </div>
                                                            <ul class="common-f-start">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Caleb Rivera"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                                                        alt="user"></li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Ashley Bardot">
                                                                    <div class="common-circle bg-lighter-success">
                                                                        A</div>
                                                                </li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Olivia Gor"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard/user/13.jpg') }}"
                                                                        alt="user"></li>
                                                            </ul>
                                                            <div class="project-bottom common-space">
                                                                <div class="common-flex"><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Attachment"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-attachment') }}">
                                                                            </use>
                                                                        </svg>6</span><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Comments"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-cmt') }}">
                                                                            </use>
                                                                        </svg>4</span></div>
                                                                <p class="mb-0 c-o-light"> <svg class="me-2">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                                        </use>
                                                                    </svg>10 Mar, 2024</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-project-box">
                                                    <div class="list-box title-line-success">
                                                        <div class="header-top">
                                                            <ul class="common-f-start">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Gasper Mintz">
                                                                    <div class="common-circle bg-lighter-warning">
                                                                        G</div>
                                                                </li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Ford Stoll"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                                        alt="user"></li>
                                                            </ul><span class="badge badge-light-success">Lead</span>
                                                        </div>
                                                        <div class="project-body">
                                                            <h6 class="mb-2">Lead Generation</h6>
                                                            <span>Usually, after initiating conversation,
                                                                leads hear from a company or organization.
                                                            </span>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" style="width: 50%">
                                                                </div>
                                                            </div>
                                                            <div class="project-bottom common-space">
                                                                <div class="common-flex"><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Attachment"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-attachment') }}">
                                                                            </use>
                                                                        </svg>1</span><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Comments"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-cmt') }}">
                                                                            </use>
                                                                        </svg>5</span></div>
                                                                <p class="mb-0 c-o-light"> <svg class="me-2">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                                        </use>
                                                                    </svg>02 Feb, 2024</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-100 box-col-12">
                                        <div class="card progress-project">
                                            <div class="card-header card-no-border scope-light-success">
                                                <div class="common-space">
                                                    <div class="common-align">
                                                        <div class="common-dot bg-success"></div>
                                                        <h6>Completed</h6><span
                                                            class="badge rounded-circle c-o-light">3</span>
                                                    </div>
                                                    <div class="card-header-right-icon">
                                                        <div class="dropdown icon-dropdown"><button
                                                                class="btn dropdown-toggle" id="completedProject"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false"><i
                                                                    class="icon-more-alt"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="completedProject"><a
                                                                    class="dropdown-item" href="#">View
                                                                    Project</a><a class="dropdown-item"
                                                                    href="#">Add Members</a><a
                                                                    class="dropdown-item" href="#">Update
                                                                    Status</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="progress-project-box">
                                                    <div class="list-box title-line-primary">
                                                        <div class="header-top">
                                                            <ul class="common-f-start">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Jenny Wilson"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                                        alt="user"></li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Levine Raven"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                                        alt="user"></li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Davis Jone"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                                        alt="user"></li>
                                                            </ul><span class="badge badge-light-primary">Visiter</span>
                                                        </div>
                                                        <div class="project-body">
                                                            <h6 class="mb-2">Client Visit</h6><span>Where
                                                                you will directly see personalized service
                                                                and customized solutions.</span>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success"
                                                                    style="width: 100%"></div>
                                                            </div>
                                                            <div class="project-bottom common-space">
                                                                <div class="common-flex"><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Attachment"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-attachment') }}">
                                                                            </use>
                                                                        </svg>7</span><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Comments"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-cmt') }}">
                                                                            </use>
                                                                        </svg>2</span></div>
                                                                <p class="mb-0 c-o-light"> <svg class="me-2">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                                        </use>
                                                                    </svg>22 Apr, 2024</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-project-box">
                                                    <div class="list-box title-line-success">
                                                        <div class="header-top">
                                                            <ul class="common-f-start">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Laurier Caddel"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                                        alt="user"></li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Barbara Taylor">
                                                                    <div class="common-circle bg-lighter-warning">
                                                                        B</div>
                                                                </li>
                                                            </ul><span class="badge badge-light-success">Deadline</span>
                                                        </div>
                                                        <div class="project-body">
                                                            <h6 class="mb-2">Project Deadline</h6><span>Take
                                                                aggressive measures to overcome
                                                                obstacles.</span>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success"
                                                                    style="width: 100%"></div>
                                                            </div>
                                                            <div class="project-bottom common-space">
                                                                <div class="common-flex"><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Attachment"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-attachment') }}">
                                                                            </use>
                                                                        </svg>8</span><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Comments"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-cmt') }}">
                                                                            </use>
                                                                        </svg>2</span></div>
                                                                <p class="mb-0 c-o-light"> <svg class="me-2">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                                        </use>
                                                                    </svg>10 Mar, 2024</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-project-box">
                                                    <div class="list-box title-line-warning">
                                                        <div class="header-top"><span
                                                                class="badge badge-light-warning">Marketing</span>
                                                            <div class="common-box"> <i
                                                                    class="fa-solid fa-plus txt-warning"></i>
                                                            </div>
                                                        </div>
                                                        <div class="project-body"><img class="img-fluid"
                                                                src="{{ asset('assets/images/project/objective/phone2.png') }}"
                                                                alt="phone">
                                                            <h6 class="mb-2">Marketing and client meeting
                                                            </h6><span>Develop deep relationships with your
                                                                target market.</span>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success"
                                                                    style="width: 100%"></div>
                                                            </div>
                                                            <ul class="common-f-start">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Juniper Blake">
                                                                    <div class="common-circle bg-lighter-info">
                                                                        J</div>
                                                                </li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Jessica Anderson"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                                        alt="user"></li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Dashiell Wolfe"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('assets/images/dashboard-9/user/5.png') }}"
                                                                        alt="user"></li>
                                                            </ul>
                                                            <div class="project-bottom common-space">
                                                                <div class="common-flex"><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Attachment"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-attachment') }}">
                                                                            </use>
                                                                        </svg>4</span><span data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        data-bs-title="Comments"><svg class="me-2">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#project-cmt') }}">
                                                                            </use>
                                                                        </svg>1</span></div>
                                                                <p class="mb-0 c-o-light"> <svg class="me-2">
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                                        </use>
                                                                    </svg>15 Feb, 2024</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="budget-project" role="tabpanel"
                                aria-labelledby="budget-project-tab">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card widget-2 budget-card">
                                            <div class="card-body common-space">
                                                <div><span class="pb-2 c-o-light">Weekly Expenses</span>
                                                    <h6>$70,000.00</h6><span class="f-14 txt-success f-w-500"><i
                                                            class="me-1" data-feather="arrow-up"></i>+2.7%</span>
                                                </div>
                                                <div class="expense-chart-wrap">
                                                    <div id="expense-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card widget-2 budget-card">
                                            <div class="card-body common-space">
                                                <div><span class="pb-2 c-o-light">Monthly Expenses</span>
                                                    <h6>$32,458.00</h6><span
                                                        class="f-14 txt-success f-w-500 txt-danger"><i
                                                            data-feather="arrow-down"></i>-1.4%</span>
                                                </div>
                                                <div class="expense-chart-wrap">
                                                    <div id="monthly-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card widget-2 budget-card">
                                            <div class="card-body common-space">
                                                <div><span class="pb-2 c-o-light">Yearly Expenses</span>
                                                    <h6>$81,610.00</h6><span class="f-14 txt-success f-w-500"><i
                                                            class="me-1" data-feather="arrow-up"></i>+5.0%</span>
                                                </div>
                                                <div class="expense-chart-wrap">
                                                    <div id="year-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-8 col-xl-12 col-lg-8 box-col-12">
                                        <div class="card">
                                            <div class="card-header card-no-border">
                                                <div class="common-space">
                                                    <div class="left-header-content">
                                                        <h5>Budget Details</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 pt-0">
                                                <div
                                                    class="recent-table table-responsive custom-scrollbar overall-budget">
                                                    <table class="table" id="budget-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Type</th>
                                                                <th>Total Budget</th>
                                                                <th>Expenses (USD)</th>
                                                                <th>Remaining (USD)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Data Analyst</td>
                                                                <td>$14,000.00</td>
                                                                <td>$13,100.00</td>
                                                                <td>$110.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Researcher</td>
                                                                <td>$34,720.00</td>
                                                                <td>$19,859.84</td>
                                                                <td>$14,860.16</td>
                                                            </tr>
                                                            <tr>
                                                                <td>UI Designer</td>
                                                                <td>$11,600.00</td>
                                                                <td>$3.00</td>
                                                                <td>$11,600.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>JS Developer</td>
                                                                <td>$68,600.00</td>
                                                                <td>$14,859.84</td>
                                                                <td>$25,680.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Coordinator</td>
                                                                <td>$48,589.00</td>
                                                                <td>$10,222.12</td>
                                                                <td>$99,32.24</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Scientist</td>
                                                                <td>$12,365.00</td>
                                                                <td>$78,245.12</td>
                                                                <td>$12,36.24</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Vue Developer</td>
                                                                <td>$14,987.00</td>
                                                                <td>$14,999.12</td>
                                                                <td>$69,22.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>C# Developer</td>
                                                                <td>$25,698.00</td>
                                                                <td>$12,222.12</td>
                                                                <td>$14,42.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-12 col-lg-4 box-col-12">
                                        <div class="card get-card">
                                            <div class="card-header card-no-border">
                                                <h5>Budget Distribution</h5>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="project-chart-wrap">
                                                    <div id="projectchart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="header-top">
                                                    <h5 class="m-0">Project Budget</h5>
                                                </div>
                                            </div>
                                            <div class="card-body project-budget-wrapper">
                                                <div class="row g-3 mb-3">
                                                    <div class="col-xxl-8 col-ed-6 box-col-12">
                                                        <div class="row g-xxl-1">
                                                            <div class="col-xxl-3 col-ed-4 box-col-12">
                                                                <label class="col-form-label">Remaining
                                                                    Budget</label>
                                                            </div>
                                                            <div class="col-xxl-9 col-ed-8 box-col-12">
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-primary"
                                                                        style="width: 65%"></div>
                                                                </div>
                                                                <p class="c-o-light text-end">$16,000 Used
                                                                    of $45,300</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-4 col-ed-6 box-col-12">
                                                        <div class="row g-xxl-1 justify-content-xxl-end">
                                                            <div class="col-xxl-5 col-auto box-col-3"><label
                                                                    class="col-form-label">Plan Your
                                                                    Budget</label></div>
                                                            <div class="col-auto">
                                                                <div class="touchspin-wrapper"> <button
                                                                        class="decrement-touchspin btn-touchspin"><i
                                                                            class="fa fa-minus">
                                                                        </i></button><input class="input-touchspin"
                                                                        type="number" value="1"><button
                                                                        class="increment-touchspin btn-touchspin"><i
                                                                            class="fa fa-plus"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-xxl-2 box-col-12"><label
                                                                    class="col-form-label">Remarks and
                                                                    Notes</label></div>
                                                            <div class="col-xxl-10 box-col-12">
                                                                <textarea class="form-control" rows="3" placeholder="Add Remarks and Notes..."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-md-2 col-auto"><label
                                                                    class="col-form-label p-0">Notification</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check form-switch"><input
                                                                        class="form-check-input"
                                                                        id="flexSwitchCheckChecked" type="checkbox"
                                                                        role="switch" checked=""><label
                                                                        class="form-check-label mb-0"
                                                                        for="flexSwitchCheckChecked">Send
                                                                        email to the user if actual cost
                                                                        exceeds the budget.</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="card-footer text-end pb-0 px-0"><a
                                                                class="btn button-light-primary" href="#"
                                                                role="button">Cancel</a><a class="btn btn-primary"
                                                                href="#" role="button">Submit</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="team-project" role="tabpanel"
                                aria-labelledby="team-project-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="main-team-box">
                                            <div>
                                                <div class="team-box">
                                                    <div class="team-box-circle"><img class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                            alt="user"></div>
                                                    <div class="team-box-content">
                                                        <h6><a href="#!">Cameron Williamson</a></h6>
                                                        <p class="mb-0">QA Assistant</p>
                                                        <div class="pt-3">
                                                            <div class="common-space">
                                                                <p class="mb-0">Task</p><span>110
                                                                    /<span>&nbsp; 190</span></span>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" style="width: 80%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="team-box-footer">
                                                        <div class="common-space">
                                                            <div>
                                                                <h6>$9,284</h6>
                                                                <p class="mb-0">Revenue</p>
                                                            </div>
                                                            <div>
                                                                <h6>19</h6>
                                                                <p class="mb-0">Project</p>
                                                            </div>
                                                            <div>
                                                                <h6>150</h6>
                                                                <p class="mb-0">Features </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="team-box">
                                                    <div class="team-box-circle"><img class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                            alt="user"></div>
                                                    <div class="team-box-content">
                                                        <h6><a href="#!">Magnolia Parker</a></h6>
                                                        <p class="mb-0">Product Manager</p>
                                                        <div class="pt-3">
                                                            <div class="common-space">
                                                                <p class="mb-0">Task</p><span>56
                                                                    /<span>&nbsp; 100</span></span>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success" style="width: 56%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="team-box-footer">
                                                        <div class="common-space">
                                                            <div>
                                                                <h6>$4,869</h6>
                                                                <p class="mb-0">Revenue</p>
                                                            </div>
                                                            <div>
                                                                <h6>231</h6>
                                                                <p class="mb-0">Project</p>
                                                            </div>
                                                            <div>
                                                                <h6>108</h6>
                                                                <p class="mb-0">Features</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="team-box">
                                                    <div class="team-box-circle"><img class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                            alt="user"></div>
                                                    <div class="team-box-content">
                                                        <h6><a href="#!">Jasper Bennett</a></h6>
                                                        <p class="mb-0">Freelancer</p>
                                                        <div class="pt-3">
                                                            <div class="common-space">
                                                                <p class="mb-0">Task</p><span>150
                                                                    /<span>&nbsp; 200</span></span>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" style="width: 50%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="team-box-footer">
                                                        <div class="common-space">
                                                            <div>
                                                                <h6>$9,735</h6>
                                                                <p class="mb-0">Revenue</p>
                                                            </div>
                                                            <div>
                                                                <h6>12</h6>
                                                                <p class="mb-0">Project</p>
                                                            </div>
                                                            <div>
                                                                <h6>100</h6>
                                                                <p class="mb-0">Features</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="team-box">
                                                    <div class="team-box-circle"><img class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                            alt="user"></div>
                                                    <div class="team-box-content">
                                                        <h6><a href="#!">Leslie Alexander</a></h6>
                                                        <p class="mb-0">Web Developer</p>
                                                        <div class="pt-3">
                                                            <div class="common-space">
                                                                <p class="mb-0">Task</p><span>150
                                                                    /<span>&nbsp; 200</span></span>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-secondary"
                                                                    style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="team-box-footer">
                                                        <div class="common-space">
                                                            <div>
                                                                <h6>$1,805</h6>
                                                                <p class="mb-0">Revenue</p>
                                                            </div>
                                                            <div>
                                                                <h6>28</h6>
                                                                <p class="mb-0">Project</p>
                                                            </div>
                                                            <div>
                                                                <h6>150</h6>
                                                                <p class="mb-0">Features</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="team-box">
                                                    <div class="team-box-circle"><img class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                            alt="user"></div>
                                                    <div class="team-box-content">
                                                        <h6><a href="#!">Maverick Sullivan</a></h6>
                                                        <p class="mb-0">JS Developer</p>
                                                        <div class="pt-3">
                                                            <div class="common-space">
                                                                <p class="mb-0">Task</p><span>120
                                                                    /<span>&nbsp; 200</span></span>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" style="width: 70%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="team-box-footer">
                                                        <div class="common-space">
                                                            <div>
                                                                <h6>$3,805</h6>
                                                                <p class="mb-0">Revenue</p>
                                                            </div>
                                                            <div>
                                                                <h6>69</h6>
                                                                <p class="mb-0">Project</p>
                                                            </div>
                                                            <div>
                                                                <h6>150</h6>
                                                                <p class="mb-0">Features </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="team-box">
                                                    <div class="team-box-circle"><img class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                            alt="user"></div>
                                                    <div class="team-box-content">
                                                        <h6><a href="#!">Wren Harrison</a></h6>
                                                        <p class="mb-0">Backend Developer</p>
                                                        <div class="pt-3">
                                                            <div class="common-space">
                                                                <p class="mb-0">Task</p><span>30
                                                                    /<span>&nbsp; 50</span></span>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-secondary"
                                                                    style="width: 80%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="team-box-footer">
                                                        <div class="common-space">
                                                            <div>
                                                                <h6>$6,378</h6>
                                                                <p class="mb-0">Revenue</p>
                                                            </div>
                                                            <div>
                                                                <h6>56</h6>
                                                                <p class="mb-0">Project</p>
                                                            </div>
                                                            <div>
                                                                <h6>150</h6>
                                                                <p class="mb-0">Features </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="team-box">
                                                    <div class="team-box-circle"><img class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                            alt="user"></div>
                                                    <div class="team-box-content">
                                                        <h6><a href="#!">Saffron Valencia</a></h6>
                                                        <p class="mb-0">UX Designer</p>
                                                        <div class="pt-3">
                                                            <div class="common-space">
                                                                <p class="mb-0">Task</p><span>120
                                                                    /<span>&nbsp; 200</span></span>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success" style="width: 70%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="team-box-footer">
                                                        <div class="common-space">
                                                            <div>
                                                                <h6>$7,950</h6>
                                                                <p class="mb-0">Revenue</p>
                                                            </div>
                                                            <div>
                                                                <h6>356</h6>
                                                                <p class="mb-0">Project</p>
                                                            </div>
                                                            <div>
                                                                <h6>150</h6>
                                                                <p class="mb-0">Features </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="team-box">
                                                    <div class="team-box-circle"><img class="img-fluid rounded-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                            alt="user"></div>
                                                    <div class="team-box-content">
                                                        <h6><a href="#!">Lyra Hawthorne</a></h6>
                                                        <p class="mb-0">Game Developer</p>
                                                        <div class="pt-3">
                                                            <div class="common-space">
                                                                <p class="mb-0">Task</p><span>50
                                                                    /<span>&nbsp; 90</span></span>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" style="width: 40%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="team-box-footer">
                                                        <div class="common-space">
                                                            <div>
                                                                <h6>$6,378</h6>
                                                                <p class="mb-0">Revenue</p>
                                                            </div>
                                                            <div>
                                                                <h6>56</h6>
                                                                <p class="mb-0">Project</p>
                                                            </div>
                                                            <div>
                                                                <h6>150</h6>
                                                                <p class="mb-0">Features</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="attachment" role="tabpanel"
                                aria-labelledby="attachment-tab">
                                <div class="row attach-files-wrapper">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="common-f-start">
                                                    <div class="bg-10-primary">
                                                        <div class="outer-file-circle shadow-10-primary">
                                                            <svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#attach-img') }}">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                        <p class="mb-0 txt-primary">Images</p>
                                                    </div>
                                                    <div class="bg-10-secondary">
                                                        <div class="outer-file-circle shadow-10-secondary">
                                                            <svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#attach-audio') }}">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                        <p class="mb-0 txt-secondary">Audio</p>
                                                    </div>
                                                    <div class="bg-10-success">
                                                        <div class="outer-file-circle shadow-10-success">
                                                            <svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#attach-video') }}">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                        <p class="mb-0 txt-success">Video</p>
                                                    </div>
                                                    <div class="bg-10-warning">
                                                        <div class="outer-file-circle shadow-10-warning">
                                                            <svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#attach-doc') }}">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                        <p class="mb-0 txt-warning">Documents</p>
                                                    </div>
                                                    <div class="bg-10-primary">
                                                        <div class="outer-file-circle shadow-10-primary">
                                                            <svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#attach-pdf') }}">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                        <p class="mb-0 txt-primary">PDF Files</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="upload-files-wrapper">
                                                    <div class="create-file-box">
                                                        <div class="d-flex"> <svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#vector-create') }}">
                                                                </use>
                                                            </svg>
                                                            <div>
                                                                <h6>Create Folder</h6>
                                                                <p class="mb-0 c-o-light">Create folder in
                                                                    this zone</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="upload-file-box">
                                                        <div class="d-flex"> <svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#vector-upload') }}">
                                                                </use>
                                                            </svg>
                                                            <div>
                                                                <h6>Upload files </h6>
                                                                <p class="mb-0 c-o-light">Drop your files in
                                                                    this zone</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div><a href="{{ route('admin.file_manager') }}">
                                                            <div class="d-flex"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#doc-file') }}">
                                                                    </use>
                                                                </svg>
                                                                <div>
                                                                    <h6>Logger...</h6>
                                                                    <p class="mb-0 c-o-light">Uploaded 7
                                                                        weeks ago</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="common-space">
                                                            <p class="mb-0">10.2 GB</p><span>30 GB</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" style="width: 30%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div><a href="{{ route('admin.file_manager') }}">
                                                            <div class="d-flex"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#ai-file') }}">
                                                                    </use>
                                                                </svg>
                                                                <div>
                                                                    <h6>User Product</h6>
                                                                    <p class="mb-0 c-o-light">Uploaded 2
                                                                        weeks ago</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="common-space">
                                                            <p class="mb-0">14.2 GB</p><span>14 GB</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" style="width: 20%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div><a href="{{ route('admin.file_manager') }}">
                                                            <div class="d-flex"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#sql-file') }}">
                                                                    </use>
                                                                </svg>
                                                                <div>
                                                                    <h6>Database Log..</h6>
                                                                    <p class="mb-0 c-o-light">Uploaded 2
                                                                        days ago</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="common-space">
                                                            <p class="mb-0">15.9 GB</p><span>45 GB</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" style="width: 40%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div><a href="{{ route('admin.file_manager') }}">
                                                            <div class="d-flex"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#pdf-file') }}">
                                                                    </use>
                                                                </svg>
                                                                <div>
                                                                    <h6>Dashboard Doc</h6>
                                                                    <p class="mb-0 c-o-light">Uploaded 15
                                                                        weeks ago</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="common-space">
                                                            <p class="mb-0">10.3 GB</p><span>16 GB</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" style="width: 70%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div><a href="{{ route('admin.file_manager') }}">
                                                            <div class="d-flex"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#xml-file') }}">
                                                                    </use>
                                                                </svg>
                                                                <div>
                                                                    <h6>React Theme...</h6>
                                                                    <p class="mb-0 c-o-light">Uploaded 11
                                                                        days ago</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="common-space">
                                                            <p class="mb-0">24.9 GB</p><span>35 GB</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" style="width: 72%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div><a href="{{ route('admin.file_manager') }}">
                                                            <div class="d-flex"> <svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#css-file') }}">
                                                                    </use>
                                                                </svg>
                                                                <div>
                                                                    <h6>Mofi Theme..</h6>
                                                                    <p class="mb-0 c-o-light">Uploaded 1 day
                                                                        ago</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="common-space">
                                                            <p class="mb-0">12.6 GB</p><span>20 GB</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" style="width: 35%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="activity-project" role="tabpanel"
                                aria-labelledby="activity-project-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card filter-header">
                                            <div class="card-body">
                                                <div class="common-space">
                                                    <h5>Recent Activity</h5>
                                                    <div class="btn-group"><button class="btn dropdown-toggle"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">Year</button>
                                                        <ul class="dropdown-menu dropdown-block">
                                                            <li><a class="dropdown-item" href="#!">Today</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#!">Week</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#!">Month</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card project-timeline">
                                            <div class="card-body notification">
                                                <ul>
                                                    <li class="d-flex">
                                                        <div class="activity-dot-primary"></div>
                                                        <div class="w-100 ms-3">
                                                            <h6 class="f-w-400">New order<a
                                                                    href="#!">&nbsp;#109876&nbsp;</a>is
                                                                placed for Works how of marketing and make
                                                                new product launch</h6><span class="date-time">At 2:20 PM
                                                                by<span class="activity-profile"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/user/common-user/3.png') }}"
                                                                        alt="user"><span>Mili
                                                                        Pais</span></span></span>
                                                            <div class="mt-3"><span>Conduct Market Research:
                                                                    Start by researching your target market
                                                                    and understanding their needs,
                                                                    preferences, and behaviors. This will
                                                                    help you develop a product that meets
                                                                    their needs and has a strong market
                                                                    demand. Develop a Marketing Plan: Once
                                                                    you have a product idea, develop a
                                                                    marketing plan that outlines your target
                                                                    audience, messaging, and marketing
                                                                    channels. Consider using a mix of
                                                                    traditional and digital marketing
                                                                    tactics to reach your target
                                                                    audience.</span></div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="activity-dot-warning"></div>
                                                        <div class="w-100 ms-3">
                                                            <h6 class="f-w-400">Megan Elmore</h6><span
                                                                class="date-time">Adding a new event with
                                                                attachments - 03:45 PM<span class="activity-profile"><img
                                                                        class="img-fluid"
                                                                        src="{{ asset('assets/images/user/common-user/5.png') }}"
                                                                        alt="user"><span>Esther
                                                                        Howard</span></span></span>
                                                            <div class="mt-3">
                                                                <div class="common-flex">
                                                                    <div class="upload-doc">
                                                                        <div class="d-flex"> <svg>
                                                                                <use
                                                                                    href="{{ asset('assets/svg/icon-sprite.svg#pdf-file') }}">
                                                                                </use>
                                                                            </svg>
                                                                            <div>
                                                                                <p class="mb-0">Mofi
                                                                                    Documentation</p>
                                                                                <p class="mb-0 c-o-light">
                                                                                    678 KB</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="upload-doc">
                                                                        <div class="d-flex"> <svg>
                                                                                <use
                                                                                    href="{{ asset('assets/svg/icon-sprite.svg#doc-file') }}">
                                                                                </use>
                                                                            </svg>
                                                                            <div>
                                                                                <p class="mb-0">Web Template
                                                                                </p>
                                                                                <p class="mb-0 c-o-light">
                                                                                    2.4 MB</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="activity-dot-primary"></div>
                                                        <div class="w-100 ms-3">
                                                            <h6 class="f-w-400">Five new flowchart ideas
                                                                have been incorporated.</h6><span class="date-time">at
                                                                4:23 PM by<span class="activity-profile"><img
                                                                        class="img-fluid"
                                                                        src="{{ asset('assets/images/user/common-user/7.png') }}"
                                                                        alt="user"><span>Leslie
                                                                        Alexander</span></span></span>
                                                            <div class="mt-3">
                                                                <div class="flowchart-wrapper">
                                                                    <div>
                                                                        <div class="flowchart-img"><img
                                                                                class="img-fluid"
                                                                                src="{{ asset('assets/images/project/flowchart-1.png') }}"
                                                                                alt="flowchart"></div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="flowchart-img"><img
                                                                                class="img-fluid"
                                                                                src="{{ asset('assets/images/project/flowchart-2.png') }}"
                                                                                alt="flowchart"></div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="flowchart-img"><img
                                                                                class="img-fluid"
                                                                                src="{{ asset('assets/images/project/flowchart-3.png') }}"
                                                                                alt="flowchart"></div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="flowchart-img"><img
                                                                                class="img-fluid"
                                                                                src="{{ asset('assets/images/project/flowchart-4.png') }}"
                                                                                alt="flowchart"></div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="flowchart-img"><img
                                                                                class="img-fluid"
                                                                                src="{{ asset('assets/images/project/flowchart-5.png') }}"
                                                                                alt="flowchart"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="activity-dot-warning"></div>
                                                        <div class="w-100 ms-3">
                                                            <h6 class="f-w-400">Any kind of collaborative
                                                                endeavour might have a theme. Use the theme
                                                                to pass along data so that your team can
                                                                understand it and contribute to the project.
                                                            </h6><span class="date-time">At 6:23 PM by<span
                                                                    class="activity-profile"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/user/common-user/1.png') }}"
                                                                        alt="user"><span>Guy
                                                                        Hawkins</span></span></span>
                                                            <div class="mt-3">
                                                                <div class="project-teammate">
                                                                    <ul class="common-f-start">
                                                                        <li data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            data-bs-title="Sarah Wilson">
                                                                            <img class="common-circle"
                                                                                src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                                                alt="user">
                                                                        </li>
                                                                        <li data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            data-bs-title="Richard Taylor">
                                                                            <img class="common-circle"
                                                                                src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                                                alt="user">
                                                                        </li>
                                                                        <li data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            data-bs-title="Linda Brown">
                                                                            <div class="common-circle bg-lighter-danger">
                                                                                L</div>
                                                                        </li>
                                                                        <li data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            data-bs-title="Jessica Anderson">
                                                                            <img class="common-circle"
                                                                                src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                                                alt="user">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="activity-dot-primary"></div>
                                                        <div class="w-100 ms-3">
                                                            <h6 class="f-w-400">Task has emerged in the
                                                                'Mofi' template, awaiting your action.</h6>
                                                            <span class="date-time">At 8:05 PM by<span
                                                                    class="activity-profile"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/user/common-user/8.png') }}"
                                                                        alt="user"><span>Jacob
                                                                        Jones</span></span></span>
                                                            <div class="mt-3">
                                                                <div class="table-responsive custom-scrollbar">
                                                                    <table class="table project-task-note">
                                                                        <thead class="project-header">
                                                                            <tr>
                                                                                <th scope="col">Project
                                                                                </th>
                                                                                <th scope="col">Task </th>
                                                                                <th scope="col">Assigned To
                                                                                </th>
                                                                                <th scope="col">Status </th>
                                                                                <th scope="col">Due Date
                                                                                </th>
                                                                                <th scope="col">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="project-content">
                                                                            <tr>
                                                                                <td>Chitchat Template</td>
                                                                                <td>Make a creating an
                                                                                    account profile</td>
                                                                                <td>
                                                                                    <ul class="common-f-start">
                                                                                        <li data-bs-toggle="tooltip"
                                                                                            data-bs-placement="top"
                                                                                            data-bs-title="Jenny Wilson">
                                                                                            <img class="rounded-circle"
                                                                                                src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                                                                alt="user">
                                                                                        </li>
                                                                                        <li data-bs-toggle="tooltip"
                                                                                            data-bs-placement="top"
                                                                                            data-bs-title="Levine Raven">
                                                                                            <img class="rounded-circle"
                                                                                                src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                                                                alt="user">
                                                                                        </li>
                                                                                        <li data-bs-toggle="tooltip"
                                                                                            data-bs-placement="top"
                                                                                            data-bs-title="Davis Jone">
                                                                                            <img class="rounded-circle"
                                                                                                src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                                                                alt="user">
                                                                                        </li>
                                                                                    </ul>
                                                                                </td>
                                                                                <td><span
                                                                                        class="badge badge-light-success txt-success">Completed</span>
                                                                                </td>
                                                                                <td>14 Oct, 2024</td>
                                                                                <td><a class="btn"
                                                                                        href="{{ route('admin.list_products') }}">View</a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
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
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin_2/custom_touchspin.js') }}"></script>
    <script src="{{ asset('assets/js/custom-project.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
