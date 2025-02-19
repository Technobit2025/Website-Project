@extends('layouts.simple.master')

@section('title', 'School management')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flatpickr/flatpickr.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>School Management</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">School Manage</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid dashboard-7">
        <div class="row">
            <div class="col-xxl-9 box-col-12">
                <div class="row">
                    <div class="col-xxl-4 col-md-5">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Academic Performance</h5>
                                    <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                            id="performance_dropdown" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="icon-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="performance_dropdown">
                                            <a class="dropdown-item" href="#">This Month</a><a class="dropdown-item"
                                                href="#">Previous Month</a><a class="dropdown-item"
                                                href="#">Last 3 Months</a><a class="dropdown-item" href="#">Last
                                                6 Months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="performance-wrap">
                                    <div id="academic_performance-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-md-7">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>School Performance</h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown"><button class="btn dropdown-toggle" id="viewButton"
                                                type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">Today</button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="viewButton"><a
                                                    class="dropdown-item" href="#">This Month</a><a
                                                    class="dropdown-item" href="#">Previous Month</a><a
                                                    class="dropdown-item" href="#">Last 3 Months</a><a
                                                    class="dropdown-item" href="#">Last 6 Months</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="school-performance-wrap">
                                    <div id="chart-school-performance"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card widget-hover overflow-hidden">
                            <div class="card-header card-no-border pb-2">
                                <h5>Teachers</h5>
                            </div>
                            <div class="card-body pt-0 count-student">
                                <div class="school-wrapper">
                                    <div class="school-header">
                                        <h4 class="txt-warning counter" data-target="1098">0</h4>
                                        <div class="d-flex gap-1 align-items-center flex-wrap pt-xxl-0 pt-2">
                                            <i class="icon-arrow-down f-light"></i><span
                                                class="f-w-500 f-light">-3.7%</span>
                                        </div>
                                    </div>
                                    <div class="school-body"> <img src="{{ asset('assets/images/dashboard-7/icon-2.svg') }}"
                                            alt="total teachers">
                                        <div class="right-line"><img src="{{ asset('assets/images/dashboard-7/line.png') }}"
                                                alt="line">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card widget-hover overflow-hidden">
                            <div class="card-header card-no-border pb-2">
                                <h5>Students</h5>
                            </div>
                            <div class="card-body pt-0 count-student">
                                <div class="school-wrapper">
                                    <div class="school-header">
                                        <h4 class="txt-primary counter" data-target="890">0</h4>
                                        <div class="d-flex gap-1 align-items-center flex-wrap pt-xxl-0 pt-2">
                                            <i class="icon-arrow-up f-light"></i><span
                                                class="f-w-500 f-light">+6.7%</span>
                                        </div>
                                    </div>
                                    <div class="school-body"> <img
                                            src="{{ asset('assets/images/dashboard-7/icon1.svg') }}" alt="total students">
                                        <div class="right-line"><img
                                                src="{{ asset('assets/images/dashboard-7/line.png') }}" alt="line">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card widget-hover overflow-hidden">
                            <div class="card-header card-no-border pb-2">
                                <h5>Parents</h5>
                            </div>
                            <div class="card-body pt-0 count-student">
                                <div class="school-wrapper">
                                    <div class="school-header">
                                        <h4 class="txt-success counter" data-target="1018">0</h4>
                                        <div class="d-flex gap-1 align-items-center flex-wrap pt-xxl-0 pt-2">
                                            <i class="icon-arrow-up f-light"></i><span
                                                class="f-w-500 f-light">+2.0%</span>
                                        </div>
                                    </div>
                                    <div class="school-body"> <img
                                            src="{{ asset('assets/images/dashboard-7/icon-3.svg') }}"
                                            alt="Total parents">
                                        <div class="right-line"><img
                                                src="{{ asset('assets/images/dashboard-7/line.png') }}" alt="line">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 box-col-5">
                        <div class="card height-equal">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>School Finance</h5>
                                    <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                            id="income_dropdown" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="icon-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="income_dropdown"><a
                                                class="dropdown-item" href="#">This Month</a><a
                                                class="dropdown-item" href="#">Previous Month</a><a
                                                class="dropdown-item" href="#">Last 3 Months</a><a
                                                class="dropdown-item" href="#">Last 6 Months</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="income-wrapper">
                                    <ul>
                                        <li>
                                            <div class="income-dot dot-primary"></div><span
                                                class="text-muted">Income</span>
                                            <h6> $<span class="counter" data-target="57143">0 </span></h6>
                                        </li>
                                        <li>
                                            <div class="income-dot dot-warning"></div><span
                                                class="text-muted">Expense</span>
                                            <h6> $<span class="counter" data-target="39023">0</span></h6>
                                        </li>
                                        <li>
                                            <div class="income-dot dot-success"></div><span
                                                class="text-muted">Revenue</span>
                                            <h6> $<span class="counter" data-target="18120">0</span></h6>
                                        </li>
                                    </ul>
                                    <div class="main-income-chart">
                                        <div id="income_chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-12 order-1 order-xl-0 box-col-7">
                        <div class="card height-equal">
                            <div class="card-header">
                                <div class="header-top">
                                    <h5 class="m-0">Performance Overview</h5>
                                    <div class="performance-right">
                                        <p class="mb-0">28-02-2024</p><i class="fa fa-calendar txt-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row g-md-0 g-4">
                                    <div class="col-xl-5 col-md-4 box-col-12">
                                        <div class="attendance-chart">
                                            <div id="chart_current_academic"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-md-8 box-col-none">
                                        <div class="row g-3">
                                            <div class="col-xl-12">
                                                <div class="light-card attendance-card widget-hover">
                                                    <div class="left-overview-content">
                                                        <div class="svg-box"><img
                                                                src="{{ asset('assets/images/dashboard-7/attendance/1.png') }}"
                                                                alt="homework"></div>
                                                    </div>
                                                    <div class="right-overview-content">
                                                        <div>
                                                            <h6>Homework</h6><span class="text-muted text-ellipsis">Bring
                                                                Something into the Classroom...</span>
                                                        </div>
                                                        <div class="d-flex marks-count">
                                                            <h5>89/<sub class="text-muted">100</sub></h5>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <i class="icon-arrow-up txt-success pe-2 f-w-600"></i><span
                                                                    class="txt-success f-w-500">+80%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="light-card attendance-card widget-hover">
                                                    <div class="left-overview-content">
                                                        <div class="svg-box"><img
                                                                src="{{ asset('assets/images/dashboard-7/attendance/2.png') }}"
                                                                alt="tests"></div>
                                                    </div>
                                                    <div class="right-overview-content">
                                                        <div>
                                                            <h6>Tests</h6><span class="text-muted text-ellipsis">These 5
                                                                study tips can help you take...</span>
                                                        </div>
                                                        <div class="d-flex marks-count">
                                                            <h5>95/<sub class="text-muted">100</sub></h5>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <i class="icon-arrow-up txt-success pe-2 f-w-600"></i><span
                                                                    class="txt-success f-w-500">+97%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="light-card attendance-card widget-hover">
                                                    <div class="left-overview-content">
                                                        <div class="svg-box"><img
                                                                src="{{ asset('assets/images/dashboard-7/attendance/3.png') }}"
                                                                alt="attendance"></div>
                                                    </div>
                                                    <div class="right-overview-content">
                                                        <div>
                                                            <h6>Attendance</h6><span
                                                                class="text-muted text-ellipsis">Student
                                                                absence reduces even best...</span>
                                                        </div>
                                                        <div class="d-flex marks-count">
                                                            <h5>92/<sub class="text-muted">100</sub></h5>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <i class="icon-arrow-up txt-success pe-2 f-w-600"></i><span
                                                                    class="txt-success f-w-500">+94%</span>
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
                    <div class="col-xl-4 col-sm-6 order-0">
                        <div class="card default-inline-calender">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>School Calendar</h5>
                                    <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                            id="calender_dropdown" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="icon-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="calender_dropdown">
                                            <a class="dropdown-item" href="#">This Month</a><a
                                                class="dropdown-item" href="#">Previous Month</a><a
                                                class="dropdown-item" href="#">Last 3 Months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 school-calender">
                                <div class="input-group main-inline-calender"><input class="form-control"
                                        id="inline-calender2" type="date"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 order-2">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Today's Task</h5>
                                    <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                            id="task_dropdown" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="icon-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="task_dropdown"><a
                                                class="dropdown-item" href="#">This Month</a><a
                                                class="dropdown-item" href="#">Previous Month</a><a
                                                class="dropdown-item" href="#">Last 3 Months</a><a
                                                class="dropdown-item" href="#">Last 6 Months</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 task-table">
                                <div class="main-task"><span class="text-muted">2 Task <span
                                            class="txt-success">completed <span class="text-muted"> out of
                                                12</span></span></span>
                                    <div class="progress task-progress">
                                        <div class="progress-bar w-50 bg-success" role="progressbar"
                                            aria-label="Basic example" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="recent-table table-responsive currency-table task-table">
                                    <table class="table">
                                        <tbody class="main-task-wrapper">
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <div
                                                            class="form-check checkbox-width checkbox checkbox-primary mb-0">
                                                            <input class="from-check-input" id="checkbox-task-1"
                                                                type="checkbox" checked=""><label
                                                                class="form-check-label" for="checkbox-task-1"> </label>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center gap-2 justify-content-center">
                                                            <div> <a class="pb-1" href="{{ route('admin.task') }}">Teacher
                                                                    Meeting & Campus Tour</a>
                                                                <ul class="task-icons">
                                                                    <li> <span class="text-muted">Class
                                                                            Number 10</span></li>
                                                                    <li class="f-light flex-wrap"><svg
                                                                            class="fill-icon fill-primary">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                            </use>
                                                                        </svg><span>11 : 00 AM</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> <button class="btn button-primary">In Progress</button>
                                                </td>
                                                <td class="icons-box">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="square-white"><i class="fa fa-pencil"></i></div>
                                                        <div class="square-white"><i class="fa fa-trash"></i></div>
                                                        <div class="square-white"><i class="fa fa-print"></i></div>
                                                    </div>
                                                </td>
                                                <td class="icons-box-2 ps-0">
                                                    <div class="open-options">
                                                        <div class="square-white dropdown-toggle" role="main"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-h"></i></div>
                                                        <ul class="dropdown-menu dropdown-block dropdown-menu-end">
                                                            <li><a class="dropdown-item square-white border-top-0"
                                                                    href="#!"><i class="fa fa-pencil"></i></a></li>
                                                            <li><a class="dropdown-item square-white border-top-0"
                                                                    href="#!"><i class="fa fa-trash"></i></a></li>
                                                            <li><a class="dropdown-item square-white border-top-0"
                                                                    href="#!"><i class="fa fa-print"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="light-card">
                                                <td>
                                                    <div class="d-flex">
                                                        <div
                                                            class="form-check checkbox-width checkbox checkbox-primary mb-0">
                                                            <input class="from-check-input" id="checkbox-task-2"
                                                                type="checkbox"><label class="form-check-label"
                                                                for="checkbox-task-2"> </label>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center gap-2 justify-content-center">
                                                            <div> <a href="{{ route('admin.task') }}">Exercise 1, 2 and
                                                                    Learn more Books</a>
                                                                <ul class="task-icons">
                                                                    <li> <span class="text-muted">Class
                                                                            Number 11</span></li>
                                                                    <li class="f-light flex-wrap"><svg
                                                                            class="fill-icon fill-clock">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                            </use>
                                                                        </svg><span>01 : 00 PM</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> <button class="btn badge-light-success">Done</button>
                                                </td>
                                                <td class="icons-box">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="square-white"><i class="fa fa-pencil"></i></div>
                                                        <div class="square-white"><i class="fa fa-trash"></i></div>
                                                        <div class="square-white"><i class="fa fa-print"></i></div>
                                                    </div>
                                                </td>
                                                <td class="icons-box-2 ps-0">
                                                    <div class="open-options">
                                                        <div class="square-white dropdown-toggle" role="main"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-h"></i></div>
                                                        <ul class="dropdown-menu dropdown-block dropdown-menu-end">
                                                            <li><a class="dropdown-item square-white border-top-0"
                                                                    href="#!"><i class="fa fa-pencil"></i></a></li>
                                                            <li><a class="dropdown-item square-white border-top-0"
                                                                    href="#!"><i class="fa fa-trash"></i></a></li>
                                                            <li><a class="dropdown-item square-white border-top-0"
                                                                    href="#!"><i class="fa fa-print"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <div
                                                            class="form-check checkbox-width checkbox checkbox-primary mb-0">
                                                            <input class="from-check-input" id="checkbox-task-3"
                                                                type="checkbox"><label class="form-check-label"
                                                                for="checkbox-task-3"> </label>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center gap-2 justify-content-center">
                                                            <div> <a href="{{ route('admin.task') }}">Guest Lecture and
                                                                    Parent Meeting</a>
                                                                <ul class="task-icons">
                                                                    <li> <span class="text-muted">Class
                                                                            Number 8</span></li>
                                                                    <li class="f-light flex-wrap"><svg
                                                                            class="fill-icon fill-clock">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                            </use>
                                                                        </svg><span>09 : 00 AM</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> <button class="btn badge-light-success">Done</button>
                                                </td>
                                                <td class="icons-box">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="square-white"><i class="fa fa-pencil"></i></div>
                                                        <div class="square-white"><i class="fa fa-trash"></i></div>
                                                        <div class="square-white"><i class="fa fa-print"></i></div>
                                                    </div>
                                                </td>
                                                <td class="icons-box-2 ps-0">
                                                    <div class="open-options">
                                                        <div class="square-white dropdown-toggle" role="main"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-h"></i></div>
                                                        <ul class="dropdown-menu dropdown-block dropdown-menu-end">
                                                            <li><a class="dropdown-item square-white border-top-0"
                                                                    href="#!"><i class="fa fa-pencil"></i></a></li>
                                                            <li><a class="dropdown-item square-white border-top-0"
                                                                    href="#!"><i class="fa fa-trash"></i></a></li>
                                                            <li><a class="dropdown-item square-white border-top-0"
                                                                    href="#!"><i class="fa fa-print"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="light-card">
                                                <td>
                                                    <div class="d-flex">
                                                        <div
                                                            class="form-check checkbox-width checkbox checkbox-primary mb-0">
                                                            <input class="from-check-input" id="checkbox-task-4"
                                                                type="checkbox"><label class="form-check-label"
                                                                for="checkbox-task-4"> </label>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center gap-2 justify-content-center">
                                                            <div> <a href="{{ route('admin.task') }}">Meetup meeting with
                                                                    new Client</a>
                                                                <ul class="task-icons">
                                                                    <li> <span class="text-muted">Class
                                                                            Number 11</span></li>
                                                                    <li class="f-light flex-wrap"><svg
                                                                            class="fill-icon fill-primary">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#clock') }}">
                                                                            </use>
                                                                        </svg><span>02 : 00 PM</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> <button class="btn button-primary">In Progress</button>
                                                </td>
                                                <td class="icons-box ps-2">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="square-white"><i class="fa fa-pencil"></i></div>
                                                        <div class="square-white"><i class="fa fa-trash"></i></div>
                                                        <div class="square-white"><i class="fa fa-print">
                                                            </i></div>
                                                    </div>
                                                </td>
                                                <td class="icons-box-2 ps-0">
                                                    <div class="open-options">
                                                        <div class="square-white dropdown-toggle" role="main"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-h"></i></div>
                                                        <ul class="dropdown-menu dropdown-block dropdown-menu-end">
                                                            <li><a class="dropdown-item square-white border-top-0"
                                                                    href="#!"><i class="fa fa-pencil"></i></a></li>
                                                            <li><a class="dropdown-item square-white border-top-0"
                                                                    href="#!"><i class="fa fa-trash"></i></a></li>
                                                            <li><a class="dropdown-item square-white border-top-0"
                                                                    href="#!"><i class="fa fa-print">
                                                                    </i></a></li>
                                                        </ul>
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
            <div class="col-xxl-3 d-xxl-block d-none box-col-none">
                <div class="row">
                    <div class="col-xl-12 d-xl-block d-none">
                        <div class="card">
                            <div class="card-header card-no-border pb-4">
                                <h5>Increase your knowledge by Learning!</h5>
                            </div>
                            <div class="card-body pt-0 position-relative pb-0 pe-0 increase-content">
                                <div class="knowledge-wrapper">
                                    <div>
                                        <p class="f-light">The essential way to learn about anything is by
                                            reading quality literature!</p><a
                                            class="btn btn-primary btn-hover-effect f-w-500 knowledge-btn"
                                            href="{{ route('admin.course_details') }}">Learn More</a>
                                    </div>
                                    <div class="knowledgebase-wrapper"><img class="knowledge-img img-fluid w-100"
                                            src="{{ asset('assets/images/dashboard-7/knowledge-base.png') }}"
                                            alt="knowledge-base">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 notification box-col-6 d-xl-block d-none">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Notice Board</h5>
                                    <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                            id="notice_dropdown" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="icon-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="notice_dropdown"><a
                                                class="dropdown-item" href="#">This Month</a><a
                                                class="dropdown-item" href="#">Previous Month</a><a
                                                class="dropdown-item" href="#">Last 3 Months</a><a
                                                class="dropdown-item" href="#">Last 6 Months </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 notice-board">
                                <ul>
                                    <li class="d-flex">
                                        <div class="activity-dot-primary"></div>
                                        <div class="ms-3">
                                            <p class="d-flex mb-2"><span class="date-content light-background">16 Feb,
                                                    2024</span></p>
                                            <h6>We have over 25 years of experience. We've rented more than
                                                250 properties and won awards.<span class="dot-notification"></span></h6>
                                            <p class="f-light">Jennyfar Lopez / 5 min ago<span
                                                    class="badge alert-light-success txt-success ms-2 f-w-600">New</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="activity-dot-secondary"></div>
                                        <div class="ms-3">
                                            <p class="d-flex mb-2"><span class="date-content light-background">17 Feb,
                                                    2024</span></p>
                                            <h6>Drawing Competition, Story Telling Competition, Craft and
                                                Creativity & Dance Competition<span class="dot-notification"></span></h6>
                                            <p class="f-light">Rubi Rao / 10 min ago</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="activity-dot-success"></div>
                                        <div class="ms-3">
                                            <p class="d-flex mb-2"><span class="date-content light-background">18 Feb,
                                                    2024</span></p>
                                            <h6>Announces a series of Parent Education Webinars for
                                                connected parents<span class="dot-notification"></span></h6>
                                            <p class="f-light">Jenny Wilson / 1 hr ago</p>
                                        </div>
                                    </li>
                                    <li class="d-flex pb-0">
                                        <div class="activity-dot-warning"></div>
                                        <div class="ms-3">
                                            <p class="d-flex mb-2"><span class="date-content light-background">19 Feb,
                                                    2024</span></p>
                                            <h6>Rakhi Making Competition & Independence day and Investiture
                                                Ceremony<span class="dot-notification"></span></h6>
                                            <p class="f-light">Cameron Williamson / 10 min ago</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 d-xl-block d-none">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Shinning Stars</h5>
                                    <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                            id="students_dropdown" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="icon-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="students_dropdown">
                                            <a class="dropdown-item" href="#">This Month</a><a
                                                class="dropdown-item" href="#">Previous Month</a><a
                                                class="dropdown-item" href="#">Last 3 Months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="student-leader-wrapper">
                                    <div class="student-leader-content light-card">
                                        <div class="d-flex align-items-center gap-2"><img
                                                src="{{ asset('assets/images/dashboard-7/attendance/student-leader/rank-1.svg') }}"
                                                alt="rank-1"><img class="leader-img"
                                                src="{{ asset('assets/images/dashboard-7/attendance/student-leader/user-1.jpg') }}"
                                                alt="user 1">
                                            <div class="leader-content-height">
                                                <h6>Jacob<span class="c-o-light f-14 f-w-400 ps-1">(Grade
                                                        10) </span></h6>
                                            </div>
                                        </div><span class="f-14 txt-primary">98.75%</span>
                                    </div>
                                    <div class="student-leader-content light-card">
                                        <div class="d-flex align-items-center gap-2"><img
                                                src="{{ asset('assets/images/dashboard-7/attendance/student-leader/rank-2.svg') }}"
                                                alt="rank-2"><img class="leader-img"
                                                src="{{ asset('assets/images/dashboard-7/attendance/student-leader/user-2.jpg') }}"
                                                alt="user 2">
                                            <div class="leader-content-height">
                                                <h6>Jenny<span class="c-o-light f-14 f-w-400 ps-1">(Grade
                                                        09)</span></h6>
                                            </div>
                                        </div><span class="f-14 txt-primary">92.60%</span>
                                    </div>
                                    <div class="student-leader-content light-card">
                                        <div class="d-flex align-items-center gap-2"><img
                                                src="{{ asset('assets/images/dashboard-7/attendance/student-leader/rank-3.svg') }}"
                                                alt="rank-2"><img class="leader-img"
                                                src="{{ asset('assets/images/dashboard-7/attendance/student-leader/user-3.jpg') }}"
                                                alt="user 3">
                                            <div class="leader-content-height">
                                                <h6>Nick<span class="c-o-light f-14 f-w-400 ps-1">(Grade
                                                        11)</span></h6>
                                            </div>
                                        </div><span class="f-14 txt-primary">88.90%</span>
                                    </div>
                                    <div class="student-leader-content">
                                        <div class="d-flex align-items-center gap-2">
                                            <h5>4<sup>th</sup></h5><img class="leader-img"
                                                src="{{ asset('assets/images/dashboard-7/attendance/student-leader/user-4.jpg') }}"
                                                alt="user 4">
                                            <div class="leader-content-height">
                                                <h6>Bob<span class="c-o-light f-14 f-w-400 ps-1">(Grade
                                                        12)</span></h6>
                                            </div>
                                        </div><span class="f-14 txt-primary">79.48%</span>
                                    </div>
                                    <div class="student-leader-content">
                                        <div class="d-flex align-items-center gap-2">
                                            <h5>5<sup>th</sup></h5><img class="leader-img"
                                                src="{{ asset('assets/images/dashboard-7/attendance/student-leader/user-5.jpg') }}"
                                                alt="user 4">
                                            <div class="leader-content-height">
                                                <h6>Ralph<span class="c-o-light f-14 f-w-400 ps-1">(Grade
                                                        08) </span></h6>
                                            </div>
                                        </div><span class="f-14 txt-primary">75.95%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Unpaid Fees</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="unpaidFees"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="unpaidFees"><a
                                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item"
                                            href="#!">Tomorrow</a><a class="dropdown-item"
                                            href="#!">Yesterday</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 unpaid-fees-table">
                        <div class="recent-table table-responsive">
                            <table class="table" id="unpaid-fees">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Name</th>
                                        <th>ID</th>
                                        <th>Standard</th>
                                        <th>Section</th>
                                        <th>Fees</th>
                                        <th>Due Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard/user/10.jpg') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Zoey Foster</a></div>
                                            </div>
                                        </td>
                                        <td>#35874</td>
                                        <td>6th Class</td>
                                        <td>A </td>
                                        <td>$87</td>
                                        <td>Jun 12, 2024</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Grace Bennett</a></div>
                                            </div>
                                        </td>
                                        <td>#25896</td>
                                        <td>8th Class</td>
                                        <td>B </td>
                                        <td>$36</td>
                                        <td>May 08, 2024</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Stella Morgan</a></div>
                                            </div>
                                        </td>
                                        <td>#52689</td>
                                        <td>9th Class</td>
                                        <td>C </td>
                                        <td>$25</td>
                                        <td>Apr 25, 2024</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard/user/13.jpg') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Aiden Carter</a></div>
                                            </div>
                                        </td>
                                        <td>#10241</td>
                                        <td>5th Class</td>
                                        <td>B</td>
                                        <td>$25</td>
                                        <td>Mar 14, 2024</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/user/6.jpg') }}" alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Levi Ramirez</a></div>
                                            </div>
                                        </td>
                                        <td>#20345</td>
                                        <td>9th Class</td>
                                        <td>A </td>
                                        <td>$89</td>
                                        <td>Jun 14, 2024</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/user/3.png') }}" alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Brooklyn Pli</a></div>
                                            </div>
                                        </td>
                                        <td>#24533</td>
                                        <td>4th Class</td>
                                        <td>A </td>
                                        <td>$25</td>
                                        <td>Jun 25, 2024</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/user/10.jpg') }}" alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Kennedy Carter</a></div>
                                            </div>
                                        </td>
                                        <td>#10002</td>
                                        <td>9th Class</td>
                                        <td>B </td>
                                        <td>$48</td>
                                        <td>Feb 02, 2024</td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/user/12.png') }}" alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Jacob Miller</a></div>
                                            </div>
                                        </td>
                                        <td>#10542</td>
                                        <td>2th Class</td>
                                        <td>C </td>
                                        <td>$58</td>
                                        <td>Nov 08, 2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Top Students</h5>
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
                    <div class="card-body px-0 pt-0 top-student-table">
                        <div class="recent-table table-responsive">
                            <table class="table" id="top-students">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Marks</th>
                                        <th>Percentage</th>
                                        <th>Year</th>
                                        <th>Standard</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td><a href="{{ route('admin.user_profile') }}">#84552</a></td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500" href="#!">Wade
                                                        Warren</a></div>
                                            </div>
                                        </td>
                                        <td>355</td>
                                        <td>88.75%</td>
                                        <td>2023</td>
                                        <td>6th Class</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td> <a href="{{ route('admin.user_profile') }}">#67893 </a></td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500" href="#!">Jenny
                                                        Wilson</a></div>
                                            </div>
                                        </td>
                                        <td>343</td>
                                        <td>85.45%</td>
                                        <td>2022</td>
                                        <td>10th Class</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td> <a href="{{ route('admin.user_profile') }}">#89901</a></td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500" href="#!">Guy
                                                        Hawkins</a></div>
                                            </div>
                                        </td>
                                        <td>362</td>
                                        <td>90.50%</td>
                                        <td>2021</td>
                                        <td>8th Class</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td> <a href="{{ route('admin.user_profile') }}">#96512</a></td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard/user/5.jpg') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500" href="#!">Jacob
                                                        Jones</a></div>
                                            </div>
                                        </td>
                                        <td>384</td>
                                        <td>89.12%</td>
                                        <td>2020</td>
                                        <td>9th Class</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td> <a href="{{ route('admin.user_profile') }}">#35698</a></td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500" href="#!">Alexis
                                                        Taylor</a></div>
                                            </div>
                                        </td>
                                        <td>254</td>
                                        <td>68.12%</td>
                                        <td>2024</td>
                                        <td>12th Class</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td> <a href="{{ route('admin.user_profile') }}">#25478</a></td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard/user/6.jpg') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500" href="#!">Eriko
                                                        Fonsa</a></div>
                                            </div>
                                        </td>
                                        <td>526</td>
                                        <td>78.12%</td>
                                        <td>2020</td>
                                        <td>10th Class</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td> <a href="{{ route('admin.user_profile') }}">#96356</a></td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard/user/7.jpg') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500" href="#!">Luke
                                                        Mitchell</a></div>
                                            </div>
                                        </td>
                                        <td>214</td>
                                        <td>98.25%</td>
                                        <td>2019</td>
                                        <td>6th Class</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td> <a href="{{ route('admin.user_profile') }}">#72471</a></td>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard/user/8.jpg') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500" href="#!">Caleb
                                                        Rivera</a></div>
                                            </div>
                                        </td>
                                        <td>369</td>
                                        <td>84.28%</td>
                                        <td>2018</td>
                                        <td>9th Class</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-5 order-xl-0 order-sm-1">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top student-header">
                            <h5>Students</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown custom-dropdown"><button class="btn dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">Class
                                        9</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#!">Class 10</a></li>
                                        <li><a class="dropdown-item" href="#!">Class 11</a></li>
                                        <li><a class="dropdown-item" href="#!">Class 12</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="std-class-chart">
                            <div id="student-chart"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-12 order-xl-0 order-sm-3">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>New Enrolled Students</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="enrollStudent" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="enrollStudent"><a
                                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item"
                                            href="#!">Tomorrow</a><a class="dropdown-item"
                                            href="#!">Yesterday</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 new-enroll-student">
                        <div class="recent-table table-responsive custom-scrollbar">
                            <table class="table" id="enroll-student">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>ID</th>
                                        <th>Standard</th>
                                        <th>Section</th>
                                        <th>Admission Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Wade Warren</a></div>
                                            </div>
                                        </td>
                                        <td>#698247</td>
                                        <td>3th Class</td>
                                        <td>B </td>
                                        <td>Jun 25, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Jenny Wilson</a></div>
                                            </div>
                                        </td>
                                        <td>#358964</td>
                                        <td>12th Class</td>
                                        <td>C </td>
                                        <td>April 28, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Guy Hawkins</a></div>
                                            </div>
                                        </td>
                                        <td>#986574</td>
                                        <td>5th Class</td>
                                        <td>C </td>
                                        <td>April 26, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-9/user/5.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Jacob Jones</a></div>
                                            </div>
                                        </td>
                                        <td>#687256</td>
                                        <td>6th Class</td>
                                        <td>B</td>
                                        <td>March 13, 2024 </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-9/user/1.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Austin Taylor</a></div>
                                            </div>
                                        </td>
                                        <td>#235648</td>
                                        <td>8th Class</td>
                                        <td>C</td>
                                        <td>March 25, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Stella Morgan</a></div>
                                            </div>
                                        </td>
                                        <td>#658965</td>
                                        <td>3th Class</td>
                                        <td>A</td>
                                        <td>March 02, 2024 </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-9/user/3.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Lily Turner</a></div>
                                            </div>
                                        </td>
                                        <td>#965824</td>
                                        <td>10th Class</td>
                                        <td>A</td>
                                        <td>March 15, 2024 </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="common-align justify-content-start"><img
                                                    class="img-fluid img-40 rounded-circle me-2"
                                                    src="{{ asset('assets/images/dashboard-9/user/4.png') }}"
                                                    alt="user">
                                                <div class="img-content-box"><a class="f-w-500"
                                                        href="{{ route('admin.user_profile') }}">Dylan Harris</a></div>
                                            </div>
                                        </td>
                                        <td>#356896</td>
                                        <td>6th Class</td>
                                        <td>A</td>
                                        <td>March 08, 2024 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-7 order-xl-0 order-sm-2">
                <div class="card sales-report">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Attendance</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="salesButton"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesButton"><a
                                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item"
                                            href="#!">Tomorrow</a><a class="dropdown-item"
                                            href="#!">Yesterday</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 attendance-data">
                        <ul class="balance-data">
                            <li><span class="circle bg-primary"></span><span class="c-light ms-1">Present</span></li>
                            <li><span class="circle bg-success"></span><span class="c-light ms-1">Absent</span></li>
                        </ul>
                        <div class="attendance-student-data">
                            <div id="attendance-wrapper"></div>
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
    <script src="{{ asset('assets/js/flat-pickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_7.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
