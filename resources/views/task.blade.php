@extends('layouts.simple.master')

@section('title', 'Tasks')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select/bootstrap-select.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Tasks</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">Tasks</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid main-tasks">
        <div class="email-wrap bookmark-wrap">
            <div class="row main-bookmark">
                <div class="col-xxl-3 box-col-6">
                    <div class="md-sidebar"><a class="btn btn-primary md-sidebar-toggle" href="#!">task
                            filter</a>
                        <div class="md-sidebar-aside job-left-aside">
                            <div class="email-left-aside">
                                <div class="card">
                                    <div class="card-body custom-scrollbar">
                                        <div class="email-app-sidebar left-bookmark task-sidebar">
                                            <div class="common-flex align-items-center">
                                                <div class="media-size-email"><img class="rounded-circle"
                                                        src="{{ asset('assets/images/user/user.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6>WILLIAM C. JENNINGS</h6>
                                                    <p>william@jourrapide.com</p>
                                                </div>
                                            </div>
                                            <ul class="nav main-menu" role="tablist">
                                                <li class="nav-item"><button
                                                        class="badge-light-primary btn-block btn-mail w-100" type="button"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                            class="me-2" data-feather="check-circle"></i> New
                                                        Task</button></li>
                                                <li>
                                                    <form class="row g-3 needs-validation" novalidate="">
                                                        <div class="col-12"><label class="form-label">Task
                                                                Status</label><select class="form-select"
                                                                aria-label="task status">
                                                                <option value="1" selected>Pending</option>
                                                                <option value="2">In Progress</option>
                                                                <option value="3">On Hold</option>
                                                                <option value="4">Completed</option>
                                                            </select>
                                                            <div class="valid-feedback">Looks good!</div>
                                                            <div class="invalid-feedback">Please select your
                                                                task status.</div>
                                                        </div>
                                                        <div class="col-12"> <label class="form-label">Task
                                                                Importance</label><select class="form-select"
                                                                aria-label="task importance">
                                                                <option value="1" selected>Low</option>
                                                                <option value="2">Medium</option>
                                                                <option value="3">High</option>
                                                            </select>
                                                            <div class="valid-feedback">Looks good!</div>
                                                            <div class="invalid-feedback">Please select your
                                                                task importance.</div>
                                                        </div>
                                                        <div class="col-12"> <label class="form-label"
                                                                for="validationTextarea">Task Due
                                                                Date</label><input class="datepicker-here form-control"
                                                                type="text" data-language="en" placeholder="Date"></div>
                                                    </form>
                                                </li>
                                                <li>
                                                    <div class="row task-stats gap-3">
                                                        <div class="col-12">
                                                            <div class="common-align justify-content-start">
                                                                <div class="bg-primary"><i
                                                                        class="fa-solid fa-list-check"></i>
                                                                </div>
                                                                <div> <span class="c-o-light">Today's
                                                                        Tasks</span>
                                                                    <h4>20</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="common-align justify-content-start">
                                                                <div class="bg-primary"><i
                                                                        class="fa-solid fa-hourglass-half"></i>
                                                                </div>
                                                                <div> <span class="c-o-light">Incomplete
                                                                        Tasks</span>
                                                                    <h4>45</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="common-align justify-content-start">
                                                                <div class="bg-primary"><i class="fa-regular fa-clock"></i>
                                                                </div>
                                                                <div> <span class="c-o-light">Today's Focus
                                                                        Time</span>
                                                                    <h4>8:45</h4>
                                                                </div>
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
                <div class="col-xxl-9 col-md-12 box-col-12">
                    <div class="card heading-space">
                        <div class="card-header card-no-border">
                            <div class="header-top">
                                <h5>Tasks</h5>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 common-task-table">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table" id="main-task-table">
                                    <thead>
                                        <tr>
                                            <th> </th>
                                            <th>Task Name</th>
                                            <th>Task Details</th>
                                            <th>Due Date</th>
                                            <th>Assign To</th>
                                            <th>Status</th>
                                            <th>Importance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Plan Office Events</td>
                                            <td> <span>Organize company events and team-building
                                                    activities</span></td>
                                            <td>22 Jan,2024</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Marley Ford"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Gray Curran"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Yarrow  Wix">
                                                        <div class="common-circle bg-lighter-info">Y</div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-primary">In Progress</span>
                                            </td>
                                            <td> <button class="btn badge-light-warning">Medium</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Payroll processing</td>
                                            <td> <span>Pay employees appropriately after doing the
                                                    calculations</span></td>
                                            <td>02 Feb,2020</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Marley Ford"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-warning">Pending</span></td>
                                            <td> <button class="btn badge-light-danger">High</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Client Information</td>
                                            <td><span> Update and confirm the client's contact
                                                    details</span></td>
                                            <td>11 Aug,2019</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Alexis Taylor"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/10.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Andrew Price"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">On Hold</span>
                                            </td>
                                            <td> <button class="btn badge-light-primary">Low</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Handle Social Media</td>
                                            <td><span> Keep an eye on and update the company's social media
                                                    accounts</span></td>
                                            <td>20 Nov,2021</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Sarah Wilson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jessica Anderson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Emily Park">
                                                        <div class="common-circle bg-lighter-warning">E
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-success">Completed</span>
                                            </td>
                                            <td> <button class="btn badge-light-warning">Medium</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Market Analysis</td>
                                            <td> <span>Compile and evaluate market trends for the
                                                    industry.</span></td>
                                            <td>09 Dec,2018</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Levine Raven"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-success">Completed</span>
                                            </td>
                                            <td> <button class="btn badge-light-danger">High</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Monitor Inventory</td>
                                            <td> <span>Track and reorder office supplies as needed</span>
                                            </td>
                                            <td>18 Mar,2022</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Davis Jone"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jessica Anderson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Dashiell Wolfe"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/5.png') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">On Hold</span>
                                            </td>
                                            <td> <button class="btn badge-light-warning">Medium</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Create Monthly Reports</td>
                                            <td> <span>Compile and evaluate performance data on a monthly
                                                    basis.</span></td>
                                            <td>25 Dec,2021</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jasper Nightingale"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Seraphina Evergreen">
                                                        <div class="common-circle bg-lighter-primary">S
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-primary">In Progress</span>
                                            </td>
                                            <td> <button class="btn badge-light-danger">High</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Data Restore</td>
                                            <td> <span>Plan and carry out data backup operations.</span>
                                            </td>
                                            <td>14 Feb,2022</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Thomas Jones"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/1.png') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-warning">Pending</span></td>
                                            <td> <button class="btn badge-light-danger">High</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Monitoring Performance</td>
                                            <td> <span>Analyse and improve system performance
                                                    measures.</span></td>
                                            <td>25 Apr,2019</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Karen Jones">
                                                        <div class="common-circle bg-lighter-dark">K</div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Elizabeth Williams"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/3.png') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">On Hold</span>
                                            </td>
                                            <td> <button class="btn badge-light-primary">Low</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Technical Assistance</td>
                                            <td> <span>Assist with technical questions and problems.</span>
                                            </td>
                                            <td>06 Nov,2020</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Caleb Rivera"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-success">Completed</span>
                                            </td>
                                            <td> <button class="btn badge-light-primary">Low</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Upgrades to Hardware</td>
                                            <td> <span>Set up and install fresh hardware parts.</span></td>
                                            <td>12 Feb,2018</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Sarah Wilson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Karen Moore">
                                                        <div class="common-circle bg-lighter-warning">K
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-primary">In Progress</span>
                                            </td>
                                            <td> <button class="btn badge-light-warning">Medium</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Response to Incidents</td>
                                            <td> <span>Respond to and fix situations involving IT
                                                    security</span></td>
                                            <td>18 Feb,2022</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Linda Brown">
                                                        <div class="common-circle bg-lighter-danger">L</div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jessica Anderson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">On Hold</span>
                                            </td>
                                            <td> <button class="btn badge-light-primary">Low</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Email Configuration</td>
                                            <td> <span>Create and manage email accounts</span></td>
                                            <td>20 Apr,2017</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jenny Wilson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Olivia Gor"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/13.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-primary">In Progress</span>
                                            </td>
                                            <td> <button class="btn badge-light-primary">Low</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Optimizing Performance</td>
                                            <td> <span>Optimize system and application performance</span>
                                            </td>
                                            <td>11 Sep,2019</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Marley Ford"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-warning">Pending</span></td>
                                            <td> <button class="btn badge-light-primary">Low</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Security Evaluation</td>
                                            <td> <span>Make sure your security audit is complete</span></td>
                                            <td>18 Apr,2023</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Daxton Creed">
                                                        <div class="common-circle bg-lighter-primary">D
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">On Hold</span>
                                            </td>
                                            <td> <button class="btn badge-light-warning">Medium</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Upkeep of Servers</td>
                                            <td> <span>Carry out regular upgrades and server checks</span>
                                            </td>
                                            <td>25 Oct,2020</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Gray Curran"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Yarrow  Wix">
                                                        <div class="common-circle bg-lighter-info">Y</div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-warning">Pending</span></td>
                                            <td> <button class="btn badge-light-primary">Low</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Data Transfer</td>
                                            <td> <span>Securely transfer data across systems</span></td>
                                            <td>28 Mar,2022</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Atlas Stone"><img class="common-circle"
                                                            src="{{ asset('assets/images/user/12.png') }}"
                                                            alt="user">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Oceana Meridian"><img class="common-circle"
                                                            src="{{ asset('assets/images/user/10.jpg') }}"
                                                            alt="user">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-success">Completed</span>
                                            </td>
                                            <td> <button class="btn badge-light-warning">Medium</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Cloud Based Integration</td>
                                            <td> <span>Connect services to cloud computing
                                                    environments</span></td>
                                            <td>05 Jun,2023</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jett Maverick">
                                                        <div class="common-circle bg-lighter-primary">J
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-success">Completed</span>
                                            </td>
                                            <td> <button class="btn badge-light-warning">Medium</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Disaster Recovery</td>
                                            <td> <span>Create and evaluate backup strategies.</span></td>
                                            <td>20 Feb,2018</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Xander Wilde">
                                                        <div class="common-circle bg-lighter-secondary">X
                                                        </div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Charles Rodriguez"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-warning">Pending</span></td>
                                            <td> <button class="btn badge-light-danger">High</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>System Records</td>
                                            <td> <span>System and procedure documentation is
                                                    recommended</span></td>
                                            <td>29 Dec,2022</td>
                                            <td>
                                                <ul class="common-f-start">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Zenith Nova">
                                                        <div class="common-circle bg-lighter-info">Z</div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Sarah Hernandez"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/6.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td> <span class="badge badge-light-primary">In Progress</span>
                                            </td>
                                            <td> <button class="btn badge-light-primary">Low</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- New task modal                                       -->
        <div class="modal fade modal-bookmark" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content custom-input">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Task</h5><button class="btn-close"
                            type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="">
                            <div class="row">
                                <div class="mb-3 col-md-12"><label class="form-label" for="task-title">Task
                                        Name</label><input class="form-control" id="task-title" type="text"
                                        required="" autocomplete="off" placeholder="Enter your task name">
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter a task name.</div>
                                </div>
                                <div class="mb-3 col-md-12"><label class="form-label" for="validationTextarea">Task
                                        Details</label>
                                    <textarea class="form-control" id="validationTextarea" placeholder="Enter your task details..." autocomplete="off"
                                        required="">  </textarea>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter a description.</div>
                                </div>
                                <div class="mb-3 col-md-6"><label class="form-label" for="validationTextarea">Task Due
                                        Date</label><input class="datepicker-here form-control" type="text"
                                        data-language="en" placeholder="Date" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please select a task due date.</div>
                                </div>
                                <div class="mb-3 col-md-6"><label class="form-label" for="validationTextarea">Task Due
                                        Time</label><select class="form-control">
                                        <option>7:00 am</option>
                                        <option>7:30 am</option>
                                        <option>8:00 am</option>
                                        <option>8:30 am</option>
                                        <option>9:00 am</option>
                                        <option>9:30 am</option>
                                        <option>10:00 am</option>
                                        <option>10:30 am</option>
                                        <option>11:00 am</option>
                                        <option>11:30 am</option>
                                        <option>12:00 pm</option>
                                        <option>12:30 pm</option>
                                        <option>1:00 pm</option>
                                        <option>2:00 pm</option>
                                        <option>3:00 pm</option>
                                        <option>4:00 pm</option>
                                        <option>5:00 pm</option>
                                        <option>6:00 pm</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please select a task due date.</div>
                                </div>
                                <div class="mb-3 col-12"><label class="form-label">Assign To</label><select
                                        class="selectpicker search-picker" multiple="" aria-label="assign to"
                                        data-live-search="true" required>
                                        <option value="1">Gabriela Wright</option>
                                        <option value="2">Chase Russo</option>
                                        <option value="3">Ryland House</option>
                                        <option value="4">Fabian Leonard</option>
                                        <option value="5">Layne Hayden</option>
                                        <option value="6">Clare Truong</option>
                                        <option value="7">Shiloh Turner</option>
                                        <option value="8">Miller Dickerson</option>
                                        <option value="9">Jaylee Rios</option>
                                        <option value="10">Anna Sandoval</option>
                                        <option value="11">Gracie Ryan</option>
                                        <option value="12">Zayne Olson</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please select your assign user.</div>
                                </div>
                                <div class="mb-3 col-md-6"><label class="form-label" for="validationSelectStatus">Task
                                        Status</label><select class="form-select" id="validationSelectStatus" required>
                                        <option value="" disabled selected>Select Status</option>
                                        <option value="1">Pending</option>
                                        <option value="2">In Progress</option>
                                        <option value="3">On Hold</option>
                                        <option value="4">Completed</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please select your task status.</div>
                                </div>
                                <div class="mb-3 col-md-6"><label class="form-label"
                                        for="validationSelectImportance">Task Importance</label><select
                                        class="form-select" id="validationSelectImportance" required>
                                        <option value="" disabled selected>Select Importance</option>
                                        <option value="1">Low</option>
                                        <option value="2">Medium</option>
                                        <option value="3">High</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please select your task importance.</div>
                                </div>
                                <div class="col-12"><label class="form-label" for="formFileMultiple">Attach
                                        Files</label><input class="form-control" id="formFileMultiple" type="file"
                                        multiple="" required="">
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please select your files.</div>
                                </div>
                            </div><input id="index_var" type="hidden" value="6"><button
                                class="btn btn-secondary me-2" id="Bookmark" onclick="submitBookMark()"
                                type="submit">Save</button><button class="btn btn-primary" type="button"
                                data-bs-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/bookmark/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/bookmark/custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('assets/js/select/bootstrap-select.min.js') }}"></script>
@endsection
