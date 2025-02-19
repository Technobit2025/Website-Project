@extends('layouts.simple.master')

@section('title', 'Project List')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3> Project List</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Projects</li>
                        <li class="breadcrumb-item active">Project List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row project-cards">
            <div class="col-md-12 project-list">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Projects Overview</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xxl-3 col-sm-6 box-col-6">
                                <div class="main-card-box bg-10-primary h-100">
                                    <div class="p-20 main-cost-performance">
                                        <h5>Project Cost Performance</h5>
                                        <div class="common-space p-t-10">
                                            <div>
                                                <div class="cost-performance-wrapper">
                                                    <div id="cost-performance"></div>
                                                </div>
                                            </div>
                                            <div class="cost-right-data">
                                                <ul>
                                                    <li>
                                                        <h6>$45.764</h6><span>Total Budget</span>
                                                    </li>
                                                    <li>
                                                        <h6>$85.490</h6><span>Actual Cost</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6 box-col-6">
                                <div class="main-card-box bg-10-secondary h-100">
                                    <div class="p-20 common-space">
                                        <div>
                                            <h5>8.63</h5><span class="c-o-light">Highlights Rating</span>
                                        </div>
                                        <div class="project-right-icon bg-10-secondary"><i
                                                class="fa-solid fa-thumbs-up fa-fade txt-secondary"></i>
                                        </div>
                                    </div>
                                    <div class="highlight-content">
                                        <div class="common-space"><span class="f-w-500">Avg. Client
                                                Rate</span>
                                            <div> <i class="txt-success" data-feather="trending-up"></i><span
                                                    class="f-w-500">7.8
                                                    / 10</span></div>
                                        </div>
                                        <div class="common-space"><span class="f-w-500">Avg. Marketplace
                                                Rate</span>
                                            <div> <i class="txt-danger" data-feather="trending-down"></i><span
                                                    class="f-w-500">6.8 / 10</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6 box-col-6">
                                <div class="main-card-box bg-10-success h-100">
                                    <div class="p-20 common-space">
                                        <div>
                                            <h5>56</h5><span class="c-o-light">Professionals Team</span>
                                        </div>
                                        <div class="project-right-icon bg-10-success"><i
                                                class="fa-solid fa-user fa-fade txt-success"></i></div>
                                    </div>
                                    <div class="p-20">
                                        <h6 class="mb-sm-3 mb-2">View Team Members</h6>
                                        <ul class="common-f-start">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Marley Ford"><img class="common-circle"
                                                    src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                    alt="user"></li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Sarah Wilson"><img class="common-circle"
                                                    src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                    alt="user"></li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Jessica Anderson"><img class="common-circle"
                                                    src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                    alt="user"></li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Ford Stoll">
                                                <img class="common-circle"
                                                    src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                    alt="user"></li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Davis Jone">
                                                <img class="common-circle"
                                                    src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                    alt="user"></li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="40+ More">
                                                <div class="common-circle bg-lighter-secondary">40+</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6 box-col-6">
                                <div class="main-card-box bg-10-warning h-100">
                                    <div class="p-20 common-space">
                                        <div>
                                            <h5>153</h5><span class="c-o-light">Total Projects</span>
                                        </div>
                                        <div class="project-right-icon bg-10-warning"><i
                                                class="fa-solid fa-file-pen fa-fade txt-warning"></i></div>
                                    </div>
                                    <div class="project-list-card">
                                        <div class="common-space"><span class="f-w-500">Pending</span><span>27</span></div>
                                        <div class="common-space"> <span class="f-w-500">Progress</span><span>48</span>
                                        </div>
                                        <div class="common-space"><span class="f-w-500">Completed</span><span>78</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card p-3">
                    <div class="common-space project-tabs">
                        <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                    href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i
                                        class="fa-solid fa-bullseye"></i>All</a></li>
                            <li class="nav-item"><a class="nav-link" id="progress-top-tab" data-bs-toggle="tab"
                                    href="#top-progress" role="tab" aria-controls="top-progress"
                                    aria-selected="false"><i class="fa-solid fa-bars-progress"></i>In Progress</a></li>
                            <li class="nav-item"><a class="nav-link" id="pending-top-tab" data-bs-toggle="tab"
                                    href="#top-pending" role="tab" aria-controls="top-pending"
                                    aria-selected="false"><i class="fa-regular fa-hourglass-half"></i>Pending</a></li>
                            <li class="nav-item"><a class="nav-link" id="completed-top-tab" data-bs-toggle="tab"
                                    href="#top-completed" role="tab" aria-controls="top-completed"
                                    aria-selected="false"><i class="fa-solid fa-circle-check"></i>Completed</a></li>
                        </ul><a class="btn btn-primary" href="{{ route('admin.create_project') }}" target="_blank"><i
                                class="fa-solid fa-plus"></i> Add Project </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body projects-wrapper">
                        <div class="tab-content" id="top-tabContent">
                            <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                aria-labelledby="top-home-tab">
                                <div class="row g-4">
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-primary">
                                                <div class="header-top"><span
                                                        class="badge badge-light-primary">Pending</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>06 Nov, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/1.png') }}"
                                                            alt="dashboard">
                                                        <div>
                                                            <h6>CRM Dashboard</h6><span>Create a Brand logo
                                                                design for a mofi admin.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>40%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" style="width: 40%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Alexis Taylor"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/10.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Andrew Price"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Emily Park">
                                                                <div class="common-circle bg-lighter-warning">
                                                                    E</div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Caryl Kauth"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$845,540.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-success">
                                                <div class="header-top"><span
                                                        class="badge badge-light-success">Completed</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>10 Mar, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/2.png') }}"
                                                            alt="application">
                                                        <div>
                                                            <h6>Chat Application</h6><span>Create a chat
                                                                application for business messaging
                                                                needs.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>100%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" style="width: 100%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Caleb Rivera"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Jenny Wilson"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Olivia Gor"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/13.jpg') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$348,940.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-warning">
                                                <div class="header-top"><span class="badge badge-light-warning">In
                                                        Progress</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>12 July, 2023</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/3.png') }}"
                                                            alt="landing page">
                                                        <div>
                                                            <h6>Redesign - Landing page</h6><span>Resign a
                                                                landing page design. as per abc minimal
                                                                design.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>60%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 60%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Levine Raven"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Davis Jone"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Jessica Anderson"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Dashiell Wolfe"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-9/user/5.png') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$753,759.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-primary">
                                                <div class="header-top"><span
                                                        class="badge badge-light-primary">Pending</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>10 Feb, 2023</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/4.png') }}"
                                                            alt="meeting">
                                                        <div>
                                                            <h6>Client Meeting</h6><span>Meeting about share
                                                                web all live link.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>20%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" style="width: 20%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Thomas Jones"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-9/user/1.png') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Karen Jones">
                                                                <div class="common-circle bg-lighter-dark">K
                                                                </div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Elizabeth Williams"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-9/user/3.png') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$159,948.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-warning">
                                                <div class="header-top"><span class="badge badge-light-warning">In
                                                        Progress</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>09 Feb, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/5.png') }}"
                                                            alt="landing page">
                                                        <div>
                                                            <h6>Makeover-Landing page</h6><span>Create
                                                                landing page in design guidelines.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>50%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Sarah Wilson"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Richard Taylor"><img class="rounded-circle"
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
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$987,720.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-primary">
                                                <div class="header-top"><span
                                                        class="badge badge-light-primary">Pending</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>14 May, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/6.png') }}" alt="project">
                                                        <div>
                                                            <h6>Sales Project</h6><span>Create a chat
                                                                application for business messaging
                                                                needs.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>70%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" style="width: 70%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Marley Ford"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Gray Curran"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Yarrow  Wix">
                                                                <div class="common-circle bg-lighter-info">Y
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$821,961.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-success">
                                                <div class="header-top"><span
                                                        class="badge badge-light-success">Completed</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>27 Oct, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/7.png') }}" alt="application">
                                                        <div>
                                                            <h6>Grocery App</h6><span>smooth purchasing
                                                                journey and effective delivery
                                                                options.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>100%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" style="width: 100%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Calista Rivers"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Jasper Nightingale"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Seraphina Evergreen">
                                                                <div class="common-circle bg-lighter-primary">
                                                                    S</div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Caspian Wilde"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/5.jpg') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$951,675.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-warning">
                                                <div class="header-top"><span class="badge badge-light-warning">In
                                                        Progress</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>02 Feb, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/9.png') }}"
                                                            alt="landing page">
                                                        <div>
                                                            <h6>NFT Website</h6><span>Explore our NFT
                                                                marketplace to find digital assets.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>75%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 75%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Daxton Creed">
                                                                <div class="common-circle bg-lighter-primary">
                                                                    D</div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Marigold Luna">
                                                                <div class="common-circle bg-lighter-warning">
                                                                    M</div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Charles Rodriguez"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/user/14.png') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Sarah Hernandez"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/user/3.png') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$753,759.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-success">
                                                <div class="header-top"><span
                                                        class="badge badge-light-success">Completed</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>28 Jan, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/10.png') }}"
                                                            alt="application">
                                                        <div>
                                                            <h6>Sales management </h6><span>Precise
                                                                objectives and deliver exceptional
                                                                performance</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>35</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" style="width: 35%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Atlas Stone"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/user/12.png') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Oceana Meridian"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/user/10.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Jett Maverick">
                                                                <div class="common-circle bg-lighter-primary">
                                                                    J</div>
                                                            </li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$652,444.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-warning">
                                                <div class="header-top"><span class="badge badge-light-warning">In
                                                        Progress</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>28 Nov, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/12.png') }}"
                                                            alt="landing page">
                                                        <div>
                                                            <h6>Fish Mobile App</h6><span>Real-time
                                                                tracking, and fishing advice.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>87%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 87%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Xander Wilde">
                                                                <div class="common-circle bg-lighter-secondary">
                                                                    X</div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Charles Rodriguez"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Zenith Nova">
                                                                <div class="common-circle bg-lighter-info">Z
                                                                </div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Sarah Hernandez"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/6.jpg') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$241,989.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-success">
                                                <div class="header-top"><span
                                                        class="badge badge-light-success">Completed</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>03 Sep, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/11.png') }}"
                                                            alt="application">
                                                        <div>
                                                            <h6>Nursery App</h6><span>Correspondence and
                                                                monitor your child's development.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>25</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" style="width: 25%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Kairos Frost">
                                                                <div class="common-circle bg-lighter-dark">K
                                                                </div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Oceana Meridian"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/user/2.jpg') }}" alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Ember Wren">
                                                                <div class="common-circle bg-lighter-primary">
                                                                    E</div>
                                                            </li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$652,444.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-primary">
                                                <div class="header-top"><span
                                                        class="badge badge-light-primary">Pending</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>08 Nov, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/8.png') }}"
                                                            alt="e-commerce web">
                                                        <div>
                                                            <h6>E-commerce Web</h6><span>E-commerce is
                                                                focusing on optimizing.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>80%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Joseph Garcia"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/avtar/16.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Elizabeth Davis"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/avtar/3.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Karen Moore">
                                                                <div class="common-circle bg-lighter-warning">
                                                                    K</div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Robert Williams">
                                                                <div class="common-circle bg-lighter-danger">
                                                                    R</div>
                                                            </li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$400,548.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-progress" role="tabpanel"
                                aria-labelledby="progress-top-tab">
                                <div class="row g-4">
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-warning">
                                                <div class="header-top"><span class="badge badge-light-warning">In
                                                        Progress</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>12 July, 2023</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/3.png') }}"
                                                            alt="landing page">
                                                        <div>
                                                            <h6>Redesign - Landing page</h6><span>Resign a
                                                                landing page design. as per abc minimal
                                                                design.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>60%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 60%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Levine Raven"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Davis Jone"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Jessica Anderson"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Dashiell Wolfe"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-9/user/5.png') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$753,759.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-warning">
                                                <div class="header-top"><span class="badge badge-light-warning">In
                                                        Progress</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>09 Feb, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/5.png') }}"
                                                            alt="landing page">
                                                        <div>
                                                            <h6>Makeover-Landing page</h6><span>Create
                                                                landing page in design guidelines.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>50%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Sarah Wilson"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Richard Taylor"><img class="rounded-circle"
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
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$987,720.00 </span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-warning">
                                                <div class="header-top"><span class="badge badge-light-warning">In
                                                        Progress</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>02 Feb, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/9.png') }}"
                                                            alt="landing page">
                                                        <div>
                                                            <h6>NFT Website</h6><span>Explore our NFT
                                                                marketplace to find digital assets.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>75%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 75%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Daxton Creed">
                                                                <div class="common-circle bg-lighter-primary">
                                                                    D</div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Marigold Luna">
                                                                <div class="common-circle bg-lighter-warning">
                                                                    M</div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Charles Rodriguez"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/user/14.png') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Sarah Hernandez"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/user/3.png') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$753,759.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-warning">
                                                <div class="header-top"><span class="badge badge-light-warning">In
                                                        Progress</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>28 Nov, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/12.png') }}"
                                                            alt="landing page">
                                                        <div>
                                                            <h6>Fish Mobile App</h6><span>Real-time
                                                                tracking, and fishing advice.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>87%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 87%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Xander Wilde">
                                                                <div class="common-circle bg-lighter-secondary">
                                                                    X</div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Charles Rodriguez"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Zenith Nova">
                                                                <div class="common-circle bg-lighter-info">Z
                                                                </div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Sarah Hernandez"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/6.jpg') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$241,989.00 </span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-pending" role="tabpanel"
                                aria-labelledby="pending-top-tab">
                                <div class="row g-4">
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-primary">
                                                <div class="header-top"><span
                                                        class="badge badge-light-primary">Pending</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>06 Nov, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/1.png') }}"
                                                            alt="dashboard">
                                                        <div>
                                                            <h6>CRM Dashboard</h6><span>Create a Brand logo
                                                                design for a mofi admin.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>40%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" style="width: 40%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Alexis Taylor"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/10.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Andrew Price"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Emily Park">
                                                                <div class="common-circle bg-lighter-warning">
                                                                    E</div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Caryl Kauth"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$845,540.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-primary">
                                                <div class="header-top"><span
                                                        class="badge badge-light-primary">Pending</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>10 Feb, 2023</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/4.png') }}"
                                                            alt="meeting">
                                                        <div>
                                                            <h6>Client Meeting</h6><span>Meeting about share
                                                                web all live link.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>20%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" style="width: 20%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Thomas Jones"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-9/user/1.png') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Karen Jones">
                                                                <div class="common-circle bg-lighter-dark">K
                                                                </div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Elizabeth Williams"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-9/user/3.png') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$159,948.00 </span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-primary">
                                                <div class="header-top"><span
                                                        class="badge badge-light-primary">Pending</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>14 May, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/6.png') }}" alt="project">
                                                        <div>
                                                            <h6>Sales Project</h6><span>Market reach and
                                                                optimizing sales processes.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>70%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" style="width: 70%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Marley Ford"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Gray Curran"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Yarrow  Wix">
                                                                <div class="common-circle bg-lighter-info">Y
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$821,961.00 </span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-primary">
                                                <div class="header-top"><span
                                                        class="badge badge-light-primary">Pending</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>08 Nov, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/8.png') }}"
                                                            alt="e-commerce web">
                                                        <div>
                                                            <h6>E-commerce Web</h6><span>E-commerce is
                                                                focusing on optimizing.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>80%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Joseph Garcia"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/avtar/16.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Elizabeth Davis"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/avtar/3.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Karen Moore">
                                                                <div class="common-circle bg-lighter-warning">
                                                                    K</div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Robert Williams">
                                                                <div class="common-circle bg-lighter-danger">
                                                                    R</div>
                                                            </li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$400,548.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-completed" role="tabpanel"
                                aria-labelledby="completed-top-tab">
                                <div class="row g-4">
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-success">
                                                <div class="header-top"><span
                                                        class="badge badge-light-success">Completed</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>10 Mar, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/2.png') }}"
                                                            alt="application">
                                                        <div>
                                                            <h6>Chat Application</h6><span>Create a chat
                                                                application for business messaging
                                                                needs.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>100%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" style="width: 100%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Caleb Rivera"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Jenny Wilson"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Olivia Gor"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/13.jpg') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$348,940.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-success">
                                                <div class="header-top"><span
                                                        class="badge badge-light-success">Completed</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>27 Oct, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/7.png') }}"
                                                            alt="application">
                                                        <div>
                                                            <h6>Figma Design</h6><span>Offering strong
                                                                design and real-time collaboration.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>100%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" style="width: 100%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Calista Rivers"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Jasper Nightingale"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Seraphina Evergreen">
                                                                <div class="common-circle bg-lighter-primary">
                                                                    S</div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Caspian Wilde"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/dashboard/user/5.jpg') }}"
                                                                    alt="user"></li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$951,675.00 </span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-success">
                                                <div class="header-top"><span
                                                        class="badge badge-light-success">Completed</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>28 Jan, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/10.png') }}"
                                                            alt="application">
                                                        <div>
                                                            <h6>Sales management </h6><span>Precise
                                                                objectives and deliver exceptional
                                                                performance</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>35</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" style="width: 35%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Atlas Stone"><img class="rounded-circle"
                                                                    src="{{ asset('assets/images/user/12.png') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Oceana Meridian"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/user/10.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Jett Maverick">
                                                                <div class="common-circle bg-lighter-primary">
                                                                    J</div>
                                                            </li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$652,444.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 col-ed-4 box-col-6">
                                        <div class="progress-project-box">
                                            <div class="list-box title-line-success">
                                                <div class="header-top"><span
                                                        class="badge badge-light-success">Completed</span>
                                                    <p class="mb-0 c-o-light"> <svg class="me-2">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#vector-calendar') }}">
                                                            </use>
                                                        </svg>03 Sep, 2024</p>
                                                </div>
                                                <div class="project-body">
                                                    <div class="common-f-start gap-3"><img class="img-fluid"
                                                            src="{{ asset('assets/images/project/list/11.png') }}"
                                                            alt="application">
                                                        <div>
                                                            <h6>Nursery App</h6><span>Correspondence and
                                                                monitor your child's development.</span>
                                                        </div>
                                                    </div>
                                                    <div class="common-space">
                                                        <p class="mb-0 c-o-light">Tasks</p><span>25</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" style="width: 25%"></div>
                                                    </div>
                                                    <div class="project-bottom common-space">
                                                        <ul class="common-f-start">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Kairos Frost">
                                                                <div class="common-circle bg-lighter-dark">K
                                                                </div>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Oceana Meridian"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('assets/images/user/2.jpg') }}"
                                                                    alt="user"></li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Ember Wren">
                                                                <div class="common-circle bg-lighter-primary">
                                                                    E</div>
                                                            </li>
                                                        </ul>
                                                        <p class="mb-0">Budget <span>$652,444.00</span></p>
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
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/projects/common-project-stat.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
