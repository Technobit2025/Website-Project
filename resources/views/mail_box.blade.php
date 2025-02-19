@extends('layouts.simple.master')

@section('title', 'Mail-Box')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Mail Box</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Email</li>
                        <li class="breadcrumb-item active"> Mail Box</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="email-wrap email-main-wrapper">
            <div class="row">
                <div class="col-xxl-3 col-xl-4 box-col-12">
                    <div class="md-sidebar"> <a class="btn btn-primary md-sidebar-toggle" href="#!">email
                            filter</a>
                        <div class="md-sidebar-aside job-left-aside custom-scrollbar">
                            <div class="email-left-aside">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="email-app-sidebar"><button class="btn btn-primary emailbox"
                                                type="button" data-bs-toggle="modal" data-bs-target="#compose_mail"><i
                                                    class="fa fa-plus"></i>Compose Email</button>
                                            <ul class="nav nav-pills main-menu email-category" id="email-pills-tab"
                                                role="tablist">
                                                <li class="nav-item"><a class="nav-link active" id="inbox-pill-tab"
                                                        data-bs-toggle="pill" href="#inbox-pill" role="tab"
                                                        aria-controls="inbox-pill" aria-selected="false"><svg
                                                            class="stroke-icon">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#inbox') }}">
                                                            </use>
                                                        </svg>
                                                        <div>Inbox<span class="badge badge-light-primary">35</span>
                                                        </div>
                                                    </a></li>
                                                <li class="nav-item"><a class="nav-link" id="sent-pill-tab"
                                                        data-bs-toggle="pill" href="#sent-pill" role="tab"
                                                        aria-controls="sent-pill" aria-selected="false"><svg
                                                            class="stroke-icon">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#sent') }}">
                                                            </use>
                                                        </svg>Sent</a></li>
                                                <li class="nav-item"><a class="nav-link" id="starred-pill-tab"
                                                        data-bs-toggle="pill" href="#starred-pill" role="tab"
                                                        aria-controls="starred-pill" aria-selected="false"><svg
                                                            class="stroke-icon">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#star') }}">
                                                            </use>
                                                        </svg>
                                                        <div>Starred<span class="badge badge-light-primary">6</span>
                                                        </div>
                                                    </a></li>
                                                <li class="nav-item"><a class="nav-link" id="draft-pill-tab"
                                                        data-bs-toggle="pill" href="#draft-pill" role="tab"
                                                        aria-controls="draft-pill" aria-selected="false"><svg
                                                            class="stroke-icon">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#draft') }}">
                                                            </use>
                                                        </svg>
                                                        <div>Draft<span class="badge badge-light-primary">7</span>
                                                        </div>
                                                    </a></li>
                                                <li class="nav-item"><a class="nav-link" id="trash-pill-tab"
                                                        data-bs-toggle="pill" href="#trash-pill" role="tab"
                                                        aria-controls="trash-pill" aria-selected="false"><svg
                                                            class="stroke-icon">
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash') }}">
                                                            </use>
                                                        </svg>Trash</a></li>
                                                <li class="nav-item">
                                                    <ul>
                                                        <li><a href="#!"><svg class="stroke-icon stroke-primary">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#pintag') }}">
                                                                    </use>
                                                                </svg>Work</a></li>
                                                        <li><a href="#!"><svg class="stroke-icon stroke-warning">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#pintag') }}">
                                                                    </use>
                                                                </svg>Private</a></li>
                                                        <li><a href="#!"><svg class="stroke-icon stroke-success">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#pintag') }}">
                                                                    </use>
                                                                </svg>Support</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item"><a class="nav-link btn" data-bs-toggle="modal"
                                                        data-bs-target="#label-pill" href="#!"><i
                                                            class="fa fa-plus"></i>Add Label</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-8 box-col-12">
                    <div class="email-right-aside">
                        <div class="card email-body email-list">
                            <div class="mail-header-wrapper">
                                <div class="mail-header">
                                    <div class="form-check form-check-inline"><input
                                            class="form-check-input checkbox-primary" id="emailCheckboxA" type="checkbox"
                                            value="option1">
                                        <ul class="mail-filters">
                                            <li class="common-align mail-header-option active" data-filter="important">
                                                <svg class="stroke-icon">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#mail') }}"></use>
                                                </svg><span>Important</span></li>
                                            <li class="common-align mail-header-option" data-filter="social"><svg
                                                    class="stroke-icon">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#goal') }}"></use>
                                                </svg><span>Social</span></li>
                                            <li class="common-align mail-header-option" data-filter="promotion"><svg
                                                    class="stroke-icon">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#tread') }}"></use>
                                                </svg><span>Promotion</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mail-body">
                                    <div class="mail-search d-flex-align-items-center"> <input class="form-control"
                                            type="search" placeholder="Search..."><i
                                            class="fa-solid fa-magnifying-glass"></i></div>
                                    <div class="light-square block-btn-1"
                                        onclick="clickedthisBtn(event);function clickedthisBtn(e){let i = e.target.closest('div').querySelector('i'); i.classList.add('fa-spin');setTimeout(() =&gt; {                                            i.classList.remove('fa-spin')                                            }, 1000);}">
                                        <i class="fa-solid fa-arrows-rotate"></i>
                                    </div>
                                    <div class="light-square bg-light-danger"> <i
                                            class="fa-solid fa-trash-can txt-danger"></i></div>
                                    <div class="light-square dropdown-toggle" role="main" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                                    <ul class="dropdown-menu dropdown-block dropdown-menu-end">
                                        <li> <a class="dropdown-item" href="#!">All</a></li>
                                        <li> <a class="dropdown-item" href="#!">None</a></li>
                                        <li> <a class="dropdown-item" href="#!">Read</a></li>
                                        <li> <a class="dropdown-item" href="#!">Unread</a></li>
                                        <li> <a class="dropdown-item" href="#!">Starred</a></li>
                                        <li> <a class="dropdown-item" href="#!">Unstarred</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content block-wrapper position-relative" id="email-pills-tabContent">
                                <div class="tab-pane fade show active" id="inbox-pill" role="tabpanel"
                                    aria-labelledby="inbox-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul class="mail-header-tabs" id="paginated-list" data-current-page="1"
                                            aria-live="polite">
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox1"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox1"></label></div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Marvin McKinney</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Our meeting scheduled for
                                                            tomorrow at 3 PM - <span>New Here's a list of
                                                                all the topic challenges...</span></span>
                                                        <div class="badge badge-light-light">project.zip
                                                        </div>
                                                    </div>
                                                    <div class="email-timing"><span>2:30 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox2"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox2"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Brooklyn Simmons</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Control over user email
                                                            accounts -<span>Control and direction of all
                                                                email operations in one place</span></span>
                                                        <div class="badge badge-light-light">
                                                            account_details.txt</div>
                                                    </div>
                                                    <div class="email-timing"><span>7:50 AM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox3"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox3"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">EH</p>
                                                        </div>
                                                    </div>
                                                    <p>Esther Howard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id
                                                            -<span>Confirmation and information about your
                                                                most recent reservation</span></span>
                                                        <div class="badge badge-light-light">task.doc</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox4"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox4"></label></div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">CW</p>
                                                        </div>
                                                    </div>
                                                    <p>Cameron Williamson</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Verification link
                                                            -<span>To activate your account, confirm your
                                                                email</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox5"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox5"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Ellison Dalton</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Notice of scheduled
                                                            maintenance -<span>From 2:00 AM to 4:00 AM on
                                                                May 24, 2024. There will be a system outage
                                                                during this period</span></span>
                                                        <div class="badge badge-light-light">Maintenance.Zip
                                                        </div>
                                                    </div>
                                                    <div class="email-timing"><span>7 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox6"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox6"></label></div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Tristan Richmond</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Welcome to our new office
                                                            -<span>Experience the cosiness, creativity, and
                                                                teamwork that await you in our brand-new
                                                                workspace.</span></span></div>
                                                    <div class="email-timing"><span>1 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox7"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox7"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-9/user/5.png') }}"
                                                            alt="user"></div>
                                                    <p>Kelvin Schneider</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Your Order
                                                            <strong>#224820098</strong> has been
                                                            confirmed-<span>We are happy to notify you that
                                                                your recent order (#224820098) has been
                                                                verified!</span></span></div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox8"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox8"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-9/user/3.png') }}"
                                                            alt="user"></div>
                                                    <p>Ronald Richards</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Security notification:
                                                            strange activity found -<span>Reviewing your
                                                                account activity and taking the necessary
                                                                precautions to secure your data is urgently
                                                                required</span></span>
                                                        <div class="badge badge-light-light">
                                                            Update_version.rar</div>
                                                    </div>
                                                    <div class="email-timing"><span>7 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox9"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox9"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">WT</p>
                                                        </div>
                                                    </div>
                                                    <p>William Turner</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>OTP verification link
                                                            -<span>For the security of your account, your
                                                                one-time password (OTP) is crucial. To
                                                                confirm and safeguard your information,
                                                                click</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox10"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox10"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-9/user/1.png') }}"
                                                            alt="user"></div>
                                                    <p>Jacob Jones</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Reminder for IT training
                                                            workshop -<span>You have a great opportunity to
                                                                improve your IT abilities and keep current
                                                                with emerging trends and technology by
                                                                attending this workshop</span></span></div>
                                                    <div class="email-timing"><span>1 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project border-bottom-0" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox11"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox11"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                            alt="user"></div>
                                                    <p>Ralph Edwards</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Your Order
                                                            <strong>#5848000047</strong> has been
                                                            confirmed-<span>Prepare to enjoy the products
                                                                you have chosen without any
                                                                hassles</span></span></div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="social">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox12"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox12"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-9/user/4.png') }}"
                                                            alt="user"></div>
                                                    <p>Jacob Jones</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Reminder for IT training
                                                            workshop -<span>You have a great opportunity to
                                                                improve your IT abilities and keep current
                                                                with emerging trends and technology by
                                                                attending this workshop</span></span></div>
                                                    <div class="email-timing"><span>1 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="social">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox13"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox13"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Ronald Richards</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Security notification:
                                                            strange activity found -<span>Reviewing your
                                                                account activity and taking the necessary
                                                                precautions to secure your data is urgently
                                                                required</span></span>
                                                        <div class="badge badge-light-light">
                                                            Update_version.rar</div>
                                                    </div>
                                                    <div class="email-timing"><span>7 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project border-bottom-0" data-filter="social">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox14"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox14"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Lacey Travis</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Your Order
                                                            <strong>#5848000047</strong> has been
                                                            confirmed-<span>Prepare to enjoy the products
                                                                you have chosen without any
                                                                hassles</span></span></div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="promotion">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox15"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox15"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Darlene Robertson</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Promotion Mail -<span>Find
                                                                special offers & Exclusive offers! for a
                                                                short time only!</span></span>
                                                        <div class="badge badge-light-light">Import File..
                                                        </div>
                                                    </div>
                                                    <div class="email-timing"><span>4 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="promotion">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox16"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox16"></label></div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">CW</p>
                                                        </div>
                                                    </div>
                                                    <p>Cameron Williamson</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Special Deal: Save 20% on
                                                            Your Next Purchase! -<span>Use the coupon code
                                                                <strong>SAVE20</strong> at the register to
                                                                get your savings.</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="promotion">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox17"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox17"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Mccoy Ballard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Security notification:
                                                            strange activity found -<span>Reviewing your
                                                                account activity and taking the necessary
                                                                precautions to secure your data is urgently
                                                                required</span></span>
                                                        <div class="badge badge-light-light">
                                                            Update_version.rar</div>
                                                    </div>
                                                    <div class="email-timing"><span>7 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sent-pill" role="tabpanel"
                                    aria-labelledby="sent-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul class="mail-header-tabs">
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox18"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox18"></label></div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">CW</p>
                                                        </div>
                                                    </div>
                                                    <p>Cameron Williamson</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Verification link
                                                            -<span>To activate your account, confirm your
                                                                email</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox19"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox19"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Lacey Travis</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Your Order
                                                            <strong>#5848000047</strong> has been
                                                            confirmed-<span>Prepare to enjoy the products
                                                                you have chosen without any
                                                                hassles</span></span></div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project border-bottom-0" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox20"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox20"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">EH</p>
                                                        </div>
                                                    </div>
                                                    <p>Esther Howard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id
                                                            -<span>Confirmation and information about your
                                                                most recent reservation</span></span>
                                                        <div class="badge badge-light-light">task.doc</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="social">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox21"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox21"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                            alt="user"></div>
                                                    <p>Ralph Edwards</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Your Order
                                                            <strong>#5848000047</strong> has been
                                                            confirmed-<span>Prepare to enjoy the products
                                                                you have chosen without any
                                                                hassles</span></span></div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project border-bottom-0" data-filter="social">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox22"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox22"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">WT</p>
                                                        </div>
                                                    </div>
                                                    <p>William Turner</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>OTP verification link
                                                            -<span>For the security of your account, your
                                                                one-time password (OTP) is crucial. To
                                                                confirm and safeguard your information,
                                                                click</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="promotion">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox23"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox23"></label></div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">CW</p>
                                                        </div>
                                                    </div>
                                                    <p>Cameron Williamson</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Special Deal: Save 20% on
                                                            Your Next Purchase! -<span>Use the coupon code
                                                                <strong>SAVE20</strong> at the register to
                                                                get your savings.</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="promotion">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox24"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox24"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Mccoy Ballard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Save 30% On The Entire
                                                            Spring Collection -<span>To take advantage of
                                                                this exclusive offer, use the promo code
                                                                <strong>SPRING30</strong> at
                                                                checkout.</span></span>
                                                        <div class="badge badge-light-light">
                                                            Update_version.rar</div>
                                                    </div>
                                                    <div class="email-timing"><span>7 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="promotion">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox25"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox25"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                            alt="user"></div>
                                                    <p>Ralph Edwards</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Exclusive Deal: Purchase
                                                            One, Get One Free<span>Purchase any item from
                                                                our chosen collection and receive another
                                                                item for free for a limited
                                                                time.</span></span></div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="starred-pill" role="tabpanel"
                                    aria-labelledby="starred-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul class="mail-header-tabs">
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox26"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox26"></label></div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                            alt="user"></div>
                                                    <p>Ralph Edwards</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Your Order
                                                            <strong>#5848000047</strong> has been
                                                            confirmed-<span>Prepare to enjoy the products
                                                                you have chosen without any
                                                                hassles</span></span></div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox27"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox27"></label></div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">EH</p>
                                                        </div>
                                                    </div>
                                                    <p>Esther Howard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id
                                                            -<span>Confirmation and information about your
                                                                most recent reservation</span></span>
                                                        <div class="badge badge-light-light">task.doc</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project border-bottom-0" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox28"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox28"></label></div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Tristan Richmond</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Welcome to our new office
                                                            -<span>Experience the cosiness, creativity, and
                                                                teamwork that await you in our brand-new
                                                                workspace.</span></span></div>
                                                    <div class="email-timing"><span>1 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="social">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox29"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox29"></label></div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Mccoy Ballard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Security notification:
                                                            strange activity found -<span>Reviewing your
                                                                account activity and taking the necessary
                                                                precautions to secure your data is urgently
                                                                required</span></span>
                                                        <div class="badge badge-light-light">
                                                            Update_version.rar</div>
                                                    </div>
                                                    <div class="email-timing"><span>7 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project border-bottom-0" data-filter="social">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox30"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox30"></label></div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Ellison Dalton</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Notice of scheduled
                                                            maintenance -<span>From 2:00 AM to 4:00 AM on
                                                                May 24, 2024. There will be a system outage
                                                                during this period</span></span>
                                                        <div class="badge badge-light-light">Maintenance.Zip
                                                        </div>
                                                    </div>
                                                    <div class="email-timing"><span>7 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="promotion">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox31"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox31"></label></div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">CW</p>
                                                        </div>
                                                    </div>
                                                    <p>Cameron Williamson</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Special Deal: Save 20% on
                                                            Your Next Purchase! -<span>Use the coupon code
                                                                <strong>SAVE20</strong> at the register to
                                                                get your savings.</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="draft-pill" role="tabpanel"
                                    aria-labelledby="draft-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul class="mail-header-tabs">
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox32"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox32"></label></div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Tristan Richmond</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Welcome to our new office
                                                            -<span>Experience the cosiness, creativity, and
                                                                teamwork that await you in our brand-new
                                                                workspace.</span></span></div>
                                                    <div class="email-timing"><span>1 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="social">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox33"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox33"></label></div>
                                                    <svg class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Ellison Dalton</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Notice of scheduled
                                                            maintenance -<span>From 2:00 AM to 4:00 AM on
                                                                May 24, 2024. There will be a system outage
                                                                during this period</span></span>
                                                        <div class="badge badge-light-light">Maintenance.Zip
                                                        </div>
                                                    </div>
                                                    <div class="email-timing"><span>7 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="social">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox34"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox34"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">WT</p>
                                                        </div>
                                                    </div>
                                                    <p>William Turner</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>OTP verification link
                                                            -<span>For the security of your account, your
                                                                one-time password (OTP) is crucial. To
                                                                confirm and safeguard your information,
                                                                click</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project border-bottom-0" data-filter="social">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox35"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox35"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                            alt="user"></div>
                                                    <p>Ralph Edwards</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Your Order
                                                            <strong>#5848000047</strong> has been
                                                            confirmed-<span>Prepare to enjoy the products
                                                                you have chosen without any
                                                                hassles</span></span></div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project border-bottom-0" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary" id="emailCheckbox36"
                                                            type="checkbox" value="option1"><label
                                                            class="form-check-label" for="emailCheckbox36"></label></div>
                                                    <svg class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">EH</p>
                                                        </div>
                                                    </div>
                                                    <p>Esther Howard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirm your booking id
                                                            -<span>Confirmation and information about your
                                                                most recent reservation</span></span>
                                                        <div class="badge badge-light-light">task.doc</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="promotion">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary"
                                                            id="emailCheckbox37" type="checkbox"
                                                            value="option1"><label class="form-check-label"
                                                            for="emailCheckbox37"></label></div><svg
                                                        class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Mccoy Ballard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Save 30% On The Entire
                                                            Spring Collection -<span>To take advantage of
                                                                this exclusive offer, use the promo code
                                                                <strong>SPRING30</strong> at
                                                                checkout.</span></span>
                                                        <div class="badge badge-light-light">
                                                            Update_version.rar</div>
                                                    </div>
                                                    <div class="email-timing"><span>7 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="promotion">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary"
                                                            id="emailCheckbox38" type="checkbox"
                                                            value="option1"><label class="form-check-label"
                                                            for="emailCheckbox38"></label></div><svg
                                                        class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div class="circle-success">
                                                            <p class="txt-success">CW</p>
                                                        </div>
                                                    </div>
                                                    <p>Cameron Williamson</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Special Deal: Save 20% on
                                                            Your Next Purchase! -<span>Use the coupon code
                                                                <strong>SAVE20</strong> at the register to
                                                                get your savings.</span></span></div>
                                                    <div class="email-timing"><span>5 Day ago</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="trash-pill" role="tabpanel"
                                    aria-labelledby="trash-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul class="mail-header-tabs">
                                            <li class="inbox-data project" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary"
                                                            id="emailCheckbox39" type="checkbox"
                                                            value="option1"><label class="form-check-label"
                                                            for="emailCheckbox39"></label></div><svg
                                                        class="important-mail active">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Marvin McKinney</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Our meeting scheduled for
                                                            tomorrow at 3 PM - <span>New Here's a list of
                                                                all the topic challenges...</span></span>
                                                        <div class="badge badge-light-light">project.zip
                                                        </div>
                                                    </div>
                                                    <div class="email-timing"><span>2:30 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project border-bottom-0" data-filter="important">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary"
                                                            id="emailCheckbox40" type="checkbox"
                                                            value="option1"><label class="form-check-label"
                                                            for="emailCheckbox40"></label></div><svg
                                                        class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-9/user/1.png') }}"
                                                            alt="user"></div>
                                                    <p>Jacob Jones</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Reminder for IT training
                                                            workshop -<span>You have a great opportunity to
                                                                improve your IT abilities and keep current
                                                                with emerging trends and technology by
                                                                attending this workshop</span></span></div>
                                                    <div class="email-timing"><span>01 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project border-bottom-0" data-filter="social">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary"
                                                            id="emailCheckbox41" type="checkbox"
                                                            value="option1"><label class="form-check-label"
                                                            for="emailCheckbox41"></label></div><svg
                                                        class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-9/user/5.png') }}"
                                                            alt="user"></div>
                                                    <p>Kelvin Schneider</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Your Order
                                                            <strong>#224820098</strong> has been
                                                            confirmed-<span>We are happy to notify you that
                                                                your recent order (#224820098) has been
                                                                verified!</span></span></div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="inbox-data project" data-filter="promotion">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0"><input
                                                            class="form-check-input checkbox-primary"
                                                            id="emailCheckbox42" type="checkbox"
                                                            value="option1"><label class="form-check-label"
                                                            for="emailCheckbox42"></label></div><svg
                                                        class="important-mail">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                            alt="user"></div>
                                                    <p>Mccoy Ballard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Save 30% On The Entire
                                                            Spring Collection -<span>To take advantage of
                                                                this exclusive offer, use the promo code
                                                                <strong>SPRING30</strong> at
                                                                checkout.</span></span>
                                                        <div class="badge badge-light-light">
                                                            Update_version.rar</div>
                                                    </div>
                                                    <div class="email-timing"><span>7 April</span></div>
                                                    <div class="email-options"><i
                                                            class="fa-regular fa-envelope envelope-1 show"></i><i
                                                            class="fa-regular fa-envelope-open envelope-2 hide"></i><i
                                                            class="fa-regular fa-trash-can trash-3"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card email-body email-read">
                            <div class="mail-header-wrapper header-wrapper1">
                                <div class="mail-header1">
                                    <div class="light-square"> <svg class="btn-email">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#back-arrow') }}"></use>
                                        </svg></div><span>Interview Mail</span>
                                </div>
                                <div class="mail-body1">
                                    <div class="light-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Achieve"><svg>
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#sms') }}"></use>
                                        </svg></div>
                                    <div class="light-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Bookmark"><svg class="bookmark-box">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#bookmark') }}"></use>
                                        </svg></div>
                                    <div class="light-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Spam"><svg>
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#spam') }}"></use>
                                        </svg></div>
                                    <div class="light-square bg-light-danger" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Trash"><svg class="stroke-danger">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#mail') }}-trash"></use>
                                        </svg></div>
                                    <div class="light-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Settings"><svg>
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#setting') }}"></use>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="mail-body-wrapper">
                                <div class="user-mail-wrapper">
                                    <div class="user-title">
                                        <div>
                                            <div class="rounded-border"> <img class="img-fluid"
                                                    src="{{ asset('assets/images/user/12.png') }}" alt="user">
                                            </div>
                                            <div class="dropdown-subtitle">
                                                <p>Jacob Jones</p>
                                                <div class="onhover-dropdown"><button class="btn p-0 dropdown-button">To
                                                        me <i data-feather="chevron-down"> </i></button>
                                                    <div class="inbox-security onhover-show-div">
                                                        <p>From: <span>jones
                                                                &lt;jacobjones3@gmail.com&gt;</span></p>
                                                        <p>to: <span>donut.horry@gmail.com</span></p>
                                                        <p>reply-to:<span>&lt;jacobjones3@gmail.com&gt;</span>
                                                        </p>
                                                        <p>date: <span>Jul 12, 2024, 7:10 AM</span></p>
                                                        <p>subject: <span>Important Account Security
                                                                Update</span></p>
                                                        <p>security: <span>standard encryption (TLS)</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inbox-options"> <span>Friday 07 Apr (4 hours ago)</span>
                                            <div class="light-square"> <svg class="important-mail">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#mail') }}-star">
                                                    </use>
                                                </svg></div>
                                            <div class="light-square" onclick="myFunction()"><svg>
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#print') }}"></use>
                                                </svg></div>
                                            <div class="light-square btn-group">
                                                <div class="dropdown-toggle" role="main" data-bs-toggle="dropdown"
                                                    aria-expanded="false"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}">
                                                        </use>
                                                    </svg></div>
                                                <div class="dropdown-menu dropdown-block"><a class="dropdown-item"
                                                        href="#!"><i class="fa fa-mail-reply"></i>Reply</a><a
                                                        class="dropdown-item" href="#!"> <i
                                                            class="fa fa-mail-forward"></i>Forward</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-body">
                                        <p>Dear Customer,</p>
                                        <p>We regret to notify you that an unauthorized attempt was made to
                                            access your account. Our system discovered suspicious activity,
                                            and we acted right away to safeguard your personal data.</p>
                                        <p>Please change your login information by clicking the following
                                            link in order to safeguard your account:</p>
                                        <p>Please be aware that your account may be temporarily suspended if
                                            no action is taken within 24 hours. We urge you to take
                                            immediate action to prevent any inconvenience.</p>
                                        <p>We sincerely apologize for any inconvenience this may cause and
                                            thank you for your immediate attention to this matter.</p>
                                        <div class="mail-subcontent">
                                            <p>Yours faithfully,</p>
                                            <p>Account Security Team</p>
                                        </div>
                                    </div>
                                    <div class="user-footer">
                                        <div> <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#attchment') }}"></use>
                                            </svg><span class="f-light">Attachments</span></div>
                                        <div class="d-inline-block">
                                            <div class="attachment-file common-flex">
                                                <div class="common-flex align-items-center"><img
                                                        src="{{ asset('assets/images/email-template/pdfs.png') }}"
                                                        alt="pdf">
                                                    <div class="d-block">
                                                        <p>Offer_Letter.pdf</p>
                                                        <p>200KB</p>
                                                    </div>
                                                </div><a href="{{ asset('assets/pug/pages/template/text_file.pdf') }}"
                                                    download> <i class="fa fa-download f-light"></i></a>
                                            </div>
                                        </div>
                                        <div class="toolbar-box">
                                            <div id="toolbar"><button class="ql-bold">Bold </button><button
                                                    class="ql-italic">Italic </button><button
                                                    class="ql-underline">underline</button><button
                                                    class="ql-strike">Strike </button><button class="ql-list"
                                                    value="ordered">List </button><button class="ql-list"
                                                    value="bullet"> </button><button class="ql-indent" value="-1">
                                                </button><button class="ql-indent" value="+1"></button><button
                                                    class="ql-link"></button><button class="ql-image"></button></div>
                                            <div id="editor"></div>
                                        </div>
                                    </div>
                                    <div class="send-btn"><button class="btn btn-primary">Send<i
                                                class="fa-solid fa-paper-plane"></i></button></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="compose_mail" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title fs-5">Compose Message</h4><button class="btn-close"
                                            type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body compose-modal">
                                        <form>
                                            <div class="row mb-lg-3 g-1 mb-2"><label class="col-lg-2 col-form-label"
                                                    for="composeTo">To
                                                    :</label>
                                                <div class="col-lg-10"><input class="form-control" id="composeTo"
                                                        type="email">
                                                    <div class="add-bcc">
                                                        <div class="d-flex gap-2"><a class="btn"
                                                                data-bs-toggle="collapse" href="#collapseCc"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseCc">Cc </a><a class="btn"
                                                                data-bs-toggle="collapse" href="#collapseBcc"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseBcc">Bcc</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collapse row mb-lg-3 mb-2" id="collapseCc"><label
                                                    class="col-lg-2 col-form-label" for="composeCc">Cc:</label>
                                                <div class="col-lg-10"><input class="form-control" id="composeCc"
                                                        type="email" placeholder="elanarob@gmail.com"></div>
                                            </div>
                                            <div class="collapse row mb-lg-3 mb-2" id="collapseBcc"><label
                                                    class="col-lg-2 col-form-label" for="composeBcc">Bcc:</label>
                                                <div class="col-lg-10"><input class="form-control" id="composeBcc"
                                                        type="email" placeholder="stiphen@yahoo.com"></div>
                                            </div>
                                            <div class="row mb-lg-3 g-1 mb-2"><label class="col-lg-2 col-form-label"
                                                    for="composeSubject">Subject :</label>
                                                <div class="col-lg-10"><input class="form-control" id="composeSubject"
                                                        type="email"></div>
                                            </div>
                                            <div class="toolbar-box mb-lg-3 mb-2">
                                                <div id="toolbar1"><button class="ql-bold">Bold
                                                    </button><button class="ql-italic">Italic
                                                    </button><button class="ql-underline">underline</button><button
                                                        class="ql-strike">Strike </button><button class="ql-list"
                                                        value="ordered">List
                                                    </button><button class="ql-list" value="bullet">
                                                    </button><button class="ql-indent" value="-1">
                                                    </button><button class="ql-indent" value="+1"></button><button
                                                        class="ql-link"></button><button class="ql-image"></button>
                                                </div>
                                                <div id="editor1"></div>
                                            </div>
                                            <div class="row mb-3 align-items-center g-1"><label
                                                    class="col-lg-2 col-form-label" for="composeSubject">Attachments
                                                    :</label>
                                                <div class="col-lg-10"><input class="form-control"
                                                        id="formFileMultiple" type="file" multiple=""></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer"><button class="btn button-light-primary"
                                            type="button">Save As Draft</button><button class="btn btn-primary"
                                            type="button" data-bs-dismiss="modal">Send</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="label-pill" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title fs-5">Add Label</h4><button class="btn-close"
                                            type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body add-label-modal">
                                        <form class="custom-input row">
                                            <div class="col">
                                                <div class="row"><label class="col-lg-2 col-form-label"
                                                        for="Label_Modal">Label Name :</label>
                                                    <div class="col-lg-10"><input class="form-control"
                                                            id="Label_Modal" type="email"
                                                            placeholder="Enter label name"></div>
                                                </div>
                                                <div class="row"><label class="col-lg-2 col-form-label"
                                                        for="Email_Modal">Email :</label>
                                                    <div class="col-lg-10"><input class="form-control"
                                                            id="Email_Modal" type="email"
                                                            placeholder="Enter your email"></div>
                                                </div>
                                                <div class="row"><label class="form-label col-lg-2 col-sm-3"
                                                        for="exampleColorInput">Label Color :</label>
                                                    <div class="col-2"><input class="form-control form-control-color"
                                                            id="exampleColorInput" type="color" value="#7366FF"
                                                            title="Choose your color"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer"><button class="btn button-light-primary" type="button"
                                            data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary"
                                            type="button">Add</button></div>
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
    <script src="{{ asset('assets/js/blockui/custom-blockui1.js') }}"></script>
    <script src="{{ asset('assets/js/blockui/custom-freeze1.js') }}"></script>
    <script src="{{ asset('assets/js/trash.js') }}"></script>
    <script src="{{ asset('assets/js/letter-box/custom-mail-pagination.js') }}"></script>
    <script src="{{ asset('assets/js/letter-box/custom-usermail.js') }}"></script>
    <script src="{{ asset('assets/js/editors/quill.js') }}"></script>
    <script src="{{ asset('assets/js/editors/custom-quill.js') }}"></script>
    <script src="{{ asset('assets/js/print.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
