@extends('layouts.simple.master')

@section('title', 'Online Course')

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
                    <h3>Online course</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Online course</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid dashboard-3">
        <div class="row">
            <div class="col-xxl-5 col-ed-6 col-xl-8 box-col-7">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card o-hidden welcome-card">
                            <div class="card-body">
                                <h4 class="mb-3 mt-1 f-w-500 mb-0 f-22">Hello Walter<span> <img
                                            src="{{ asset('assets/images/dashboard-3/hand.svg') }}" alt="hand vector"></span></h4>
                                <p>Learn something new every day with world's best courses.Free online
                                    courses available.</p>
                            </div><img class="welcome-img" src="{{ asset('assets/images/dashboard-3/widget.svg') }}" alt="search image">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card course-box">
                            <div class="card-body">
                                <div class="course-widget">
                                    <div class="course-icon"> <svg class="fill-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#course-1') }}"></use>
                                        </svg></div>
                                    <div>
                                        <h4 class="mb-0"> <span class="counter" data-target="100">0</span>+
                                        </h4><span class="f-light">Completed Courses</span><a class="btn btn-light f-light"
                                            href="{{ route('admin.course_list') }}">View
                                            Course<span class="ms-2"> <svg class="fill-icon f-light">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}">
                                                    </use>
                                                </svg></span></a>
                                    </div>
                                </div>
                            </div>
                            <ul class="square-group">
                                <li class="square-1 warning"></li>
                                <li class="square-1 primary"></li>
                                <li class="square-2 warning1"></li>
                                <li class="square-3 danger"></li>
                                <li class="square-4 light"></li>
                                <li class="square-5 warning"></li>
                                <li class="square-6 success"></li>
                                <li class="square-7 success"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card course-box">
                            <div class="card-body">
                                <div class="course-widget">
                                    <div class="course-icon warning"> <svg class="fill-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#course-2') }}"></use>
                                        </svg></div>
                                    <div>
                                        <h4 class="mb-0"> <span class="counter" data-target="80">0</span>+
                                        </h4><span class="f-light">In Progress Courses</span><a
                                            class="btn btn-light f-light" href="{{ route('admin.course_list') }}">View
                                            Course<span class="ms-2"> <svg class="fill-icon f-light">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}">
                                                    </use>
                                                </svg></span></a>
                                    </div>
                                </div>
                            </div>
                            <ul class="square-group">
                                <li class="square-1 warning"></li>
                                <li class="square-1 primary"></li>
                                <li class="square-2 warning1"></li>
                                <li class="square-3 danger"></li>
                                <li class="square-4 light"></li>
                                <li class="square-5 warning"></li>
                                <li class="square-6 success"></li>
                                <li class="square-7 success"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-ed-3 col-xl-4 col-sm-6 box-col-5">
                <div class="card get-card">
                    <div class="card-header card-no-border">
                        <h5>Today Progress</h5><span class="f-14 f-w-500 f-light">Your Daily Goal Almost
                            Done!</span>
                    </div>
                    <div class="card-body pt-0">
                        <div class="progress-chart-wrap">
                            <div id="progresschart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-ed-3 d-xxl-block d-sm-none box-col-none">
                <div class="card get-card overflow-hidden">
                    <div class="card-header card-no-border">
                        <h5>Do You Want to Get</h5><span class="f-14 f-w-500 f-light">Better
                            Results?</span><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.course_details') }}">More
                            Details<span class="ms-1"> <svg class="fill-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}"></use>
                                </svg></span></a>
                    </div>
                    <div class="card-body pt-0">
                        <div class="get-image text-center"> <img class="img-fluid"
                                src="{{ asset('assets/images/dashboard-3/better.png') }}" alt="laptop with men vector">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-ed-5 col-xl-5 col-sm-6 box-col-5">
                <div class="card default-inline-calender">
                    <div class="card-body">
                        <div class="input-group main-inline-calender"><input class="form-control" id="inline-calender1"
                                type="date"></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-ed-7 col-xl-7 box-col-7">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">Learning Overview<span class="f-14 f-w-500 ms-1 f-light">(75%
                                    activity growth)</span></h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                        id="learningButton" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="learningButton"><a
                                            class="dropdown-item" href="#">This Month</a><a class="dropdown-item"
                                            href="#">Previous Month</a><a class="dropdown-item" href="#">Last
                                            3 Months</a><a class="dropdown-item" href="#">Last
                                            6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="learning-wrap">
                            <div id="learning-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-ed-7 col-xl-7 col-md-6 box-col-7">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Activity Hours</h5>
                            <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="activitydropdown"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="activitydropdown"><a
                                        class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                        href="#">Yesterday</a><a class="dropdown-item" href="#">This week</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row m-0 overall-card">
                            <div class="col-xl-8">
                                <div class="chart-right">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card-body p-0">
                                                <div class="activity-wrap">
                                                    <div id="activity-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 p-0">
                                <div class="row g-sm-3 g-2 mt-0">
                                    <div class="col-xl-12 col-md-6 col-sm-4">
                                        <div class="light-card balance-card">
                                            <div> <span class="f-light">Time Spent</span>
                                                <h6 class="mt-1 mb-0">30</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-6 col-sm-4">
                                        <div class="light-card balance-card activity-details">
                                            <div> <span class="f-light">Course Subscribe</span>
                                                <h6 class="mt-1 mb-0">45</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-6 col-sm-4">
                                        <div class="light-card balance-card">
                                            <div> <span class="f-light">Exams Passed</span>
                                                <h6 class="mt-1 mb-0">12</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-ed-5 col-xl-5 col-md-6 box-col-5">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Upcoming Courses</h5>
                            <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="upcomingdropdown"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="upcomingdropdown"><a
                                        class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                        href="#">Yesterday</a><a class="dropdown-item" href="#">This week
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="upcoming-event-wrap">
                            <div id="upcomingchart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Top Mentors</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="topMentor"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topMentor"><a
                                            class="dropdown-item" href="#!">This
                                            Month</a><a class="dropdown-item" href="#!">Previous Month</a><a
                                            class="dropdown-item" href="#!">Last 3 Months</a><a
                                            class="dropdown-item" href="#!">Last 6 Months</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 t-top-mentor">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table" id="t-top-mentor">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Mentor Name</th>
                                        <th>Expertise</th>
                                        <th>Courses</th>
                                        <th>Experience</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard/user/6.jpg') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.course_list') }}">Kathrin Ney</a></div>
                                        </td>
                                        <td>Data Science</td>
                                        <td>550</td>
                                        <td>10 Year</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard/user/3.jpg') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.course_list') }}">Mili Pais</a></div>
                                        </td>
                                        <td>UI/UX Designer</td>
                                        <td>210</td>
                                        <td>06 Year</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard/user/4.jpg') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.course_list') }}">Robert Fox</a></div>
                                        </td>
                                        <td>English Literature</td>
                                        <td>920</td>
                                        <td>15 Year</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard/user/2.jpg') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.course_list') }}">Caleb Riv</a></div>
                                        </td>
                                        <td>Web Designer</td>
                                        <td>110</td>
                                        <td>12 Year</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard/user/1.jpg') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.course_list') }}">Caryl Kauth</a></div>
                                        </td>
                                        <td>JS Developer</td>
                                        <td>120</td>
                                        <td>10 Year</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard/user/5.jpg') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.course_list') }}">Eriko Fonsa</a></div>
                                        </td>
                                        <td>Painter</td>
                                        <td>360</td>
                                        <td>06 Year</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard/user/13.jpg') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.course_list') }}">Olivia Gor</a></div>
                                        </td>
                                        <td>Mathematics</td>
                                        <td>221</td>
                                        <td>08 Year</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img
                                                    class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard/user/10.jpg') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.course_list') }}">Emily Park</a></div>
                                        </td>
                                        <td>Painter</td>
                                        <td>859</td>
                                        <td>03 Year</td>
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
                            <h5>Completed Course</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="courses"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="courses">
                                        <a class="dropdown-item" href="#!">This Month</a><a class="dropdown-item"
                                            href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last
                                            3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 completed-course-table">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table" id="completed-course-table">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Student Name</th>
                                        <th>Course Name</th>
                                        <th>Completion Date</th>
                                        <th>Mentor Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/dashboard/user/7.jpg') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.course_details') }}">Cody Fisher</a></div>
                                        </td>
                                        <td>Python</td>
                                        <td>Oct 25, 2024</td>
                                        <td>Wade Warren</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/dashboard/user/12.jpg') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.course_details') }}">Alexis Taylor</a></div>
                                        </td>
                                        <td>Analysis</td>
                                        <td>May 20, 2024</td>
                                        <td>Dylan Sullivan</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/user/10.jpg') }}" alt="user"><a class="f-w-500"
                                                    href="{{ route('admin.course_details') }}">Jenny Wilson</a></div>
                                        </td>
                                        <td>Development</td>
                                        <td>Apr 28, 2024</td>
                                        <td>Guy Hawkins</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/dashboard/user/2.jpg') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.course_details') }}">Lily Ramirez</a></div>
                                        </td>
                                        <td>Marketing</td>
                                        <td>Mar 13, 2024</td>
                                        <td>Ethan Brooks</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/dashboard/user/11.jpg') }}" alt="user"><a
                                                    class="f-w-500" href="{{ route('admin.course_details') }}">Andrew Price</a></div>
                                        </td>
                                        <td>Developer</td>
                                        <td>Feb 12, 2024</td>
                                        <td>Nathan Cooper</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/user/6.jpg') }}" alt="user"><a class="f-w-500"
                                                    href="{{ route('admin.course_details') }}">Luke Mitchell</a></div>
                                        </td>
                                        <td>Mathematics</td>
                                        <td>Apr 12, 2024</td>
                                        <td>Owen Davis</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/user/3.png') }}" alt="user"><a class="f-w-500"
                                                    href="{{ route('admin.course_details') }}">Caleb Rivera</a></div>
                                        </td>
                                        <td>Architect</td>
                                        <td>May 09, 2024</td>
                                        <td>Zoey Jenkins</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center"><img class="img-fluid"
                                                    src="{{ asset('assets/images/user/14.png') }}" alt="user"><a class="f-w-500"
                                                    href="{{ route('admin.course_details') }}">Chloe Wilson</a></div>
                                        </td>
                                        <td>Writer</td>
                                        <td>May 04, 2024</td>
                                        <td>Alexis Taylor</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-ed-12 box-col-12">
                <div class="card course-card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">My Course</h5>
                            <div class="card-header-right-icon"><a class="link-only" href="{{ route('admin.course_list') }}"
                                    target="_blank">View All<i data-feather="arrow-right"></i></a></div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="course-main-card">
                            <div class="course-wrapper">
                                <div class="course-icon-box">
                                    <div class="icon-wrap"><img src="{{ asset('assets/images/dashboard-3/course/1.svg') }}"
                                            alt="clock vector"></div><img class="arrow-bg"
                                        src="{{ asset('assets/images/dashboard-3/course/back-arrow/1.png') }}"
                                        alt="sqaure border arrow">
                                </div>
                                <h6 class="f-14">Management</h6>
                            </div>
                            <div class="course-wrapper">
                                <div class="course-icon-box">
                                    <div class="icon-wrap"><img src="{{ asset('assets/images/dashboard-3/course/2.svg') }}"
                                            alt="web development vector"></div><img class="arrow-bg"
                                        src="{{ asset('assets/images/dashboard-3/course/back-arrow/2.png') }}"
                                        alt="sqaure border arrow">
                                </div>
                                <h6 class="f-14">Web Devlopment</h6>
                            </div>
                            <div class="course-wrapper">
                                <div class="course-icon-box">
                                    <div class="icon-wrap"><img src="{{ asset('assets/images/dashboard-3/course/3.svg') }}"
                                            alt="business vector"></div><img class="arrow-bg"
                                        src="{{ asset('assets/images/dashboard-3/course/back-arrow/1.png') }}"
                                        alt="sqaure border arrow">
                                </div>
                                <h6 class="f-14">Business Analytics</h6>
                            </div>
                            <div class="course-wrapper">
                                <div class="course-icon-box">
                                    <div class="icon-wrap"><img src="{{ asset('assets/images/dashboard-3/course/4.svg') }}"
                                            alt="marketing vector"></div><img class="arrow-bg"
                                        src="{{ asset('assets/images/dashboard-3/course/back-arrow/3.png') }}"
                                        alt="sqaure border arrow">
                                </div>
                                <h6 class="f-14">Marketing</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-ed-6 col-md-7 box-col-7">
                <div class="card schedule-card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">Upcoming Schedule</h5>
                            <div class="card-header-right-icon"><a class="btn btn-light-primary"
                                    href="{{ route('admin.course_list') }}">+ Create</a></div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="schedule-list">
                            <li class="primary"><img src="{{ asset('assets/images/dashboard/user/4.jpg') }}" alt="profile">
                                <div>
                                    <h6 class="mb-1">Web Design</h6>
                                    <ul>
                                        <li class="f-light"><svg class="fill-icon f-light">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#bag') }}"></use>
                                            </svg><span>March 3, 2024</span></li>
                                        <li class="f-light"><svg class="fill-icon f-success">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}"></use>
                                            </svg><span> 09.00 - 12.00 AM</span></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="warning"><img src="{{ asset('assets/images/dashboard/user/2.jpg') }}" alt="profile">
                                <div>
                                    <h6 class="mb-1">UI/UX Design</h6>
                                    <ul>
                                        <li class="f-light"><svg class="fill-icon f-light">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#bag') }}"></use>
                                            </svg><span>April 10, 2024</span></li>
                                        <li class="f-light"><svg class="fill-icon f-success">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#clock') }}"></use>
                                            </svg><span> 11.00 - 1.00 PM</span></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-ed-6 col-md-5 box-col-5">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">Active Courses</h5>
                            <div class="card-header-right-icon"><a class="link-only" href="{{ route('admin.course_list') }}"
                                    target="_blank">View All<i data-feather="arrow-right"></i></a></div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="lessons-lists">
                            <li> <img src="{{ asset('assets/images/dashboard-3/lessons/1.png') }}" alt="ux icon">
                                <div>
                                    <h6 class="f-14 f-w-400 mb-0">UI/UX </h6><span class="f-light">Web
                                        design</span>
                                </div>
                                <div class="lesson-wrap ms-auto">
                                    <div id="lessonChart1"> </div>
                                </div>
                            </li>
                            <li> <img src="{{ asset('assets/images/dashboard-3/lessons/2.png') }}" alt="vue icon">
                                <div>
                                    <h6 class="f-14 f-w-400 mb-0">Vue 3</h6><span class="f-light">JS
                                        Framework</span>
                                </div>
                                <div class="lesson-wrap ms-auto">
                                    <div id="lessonChart2"></div>
                                </div>
                            </li>
                            <li> <img src="{{ asset('assets/images/dashboard-3/lessons/3.png') }}" alt="bootstrap icon">
                                <div>
                                    <h6 class="f-14 f-w-400 mb-0">Bootstrap 5</h6><span class="f-light">Framework</span>
                                </div>
                                <div class="lesson-wrap ms-auto">
                                    <div id="lessonChart3"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
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
    <script src="{{ asset('assets/js/flat-pickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_3.js') }}"></script>
@endsection
