@extends('layouts.simple.master')

@section('title', 'Contacts')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select/bootstrap-select.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Contacts</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">Contacts</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="email-wrap bookmark-wrap">
            <div class="row main-bookmark">
                <div class="col-xxl-3 box-col-6">
                    <div class="md-sidebar"><a class="btn btn-primary md-sidebar-toggle" href="#!">contact
                            filter</a>
                        <div class="md-sidebar-aside job-left-aside">
                            <div class="email-left-aside">
                                <div class="card">
                                    <div class="card-body custom-scrollbar">
                                        <div class="email-app-sidebar left-bookmark">
                                            <div class="common-flex align-items-center">
                                                <div class="d-flex-size-email"><img class="rounded-circle"
                                                        src="{{ asset('assets/images/user/user.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6>WILLIAM C. JENNINGS</h6>
                                                    <p>william@jourrapide.com</p>
                                                </div>
                                            </div>
                                            <ul class="nav main-menu contact-options" role="tablist">
                                                <li class="nav-item"><button class="button-primary btn-block btn-mail w-100"
                                                        type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="me-2"
                                                            data-feather="users"></i> New Contacts</button>
                                                </li>
                                                <li class="nav-item"><button class="button-primary btn-block btn-mail w-100"
                                                        type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal1"><i class="me-2"
                                                            data-feather="plus"></i> Add Category</button>
                                                    <ul>
                                                        <li class="nav-item"><span class="main-title"><i
                                                                    class="icofont icofont-filter"></i>
                                                                Filter By</span></li>
                                                        <li><a class="active" id="pills-personal-tab" data-bs-toggle="pill"
                                                                href="#pills-personal" role="tab"
                                                                aria-controls="pills-personal" aria-selected="true"><span
                                                                    class="title">
                                                                    Personal</span></a></li>
                                                        <li><a id="pills-organization-tab" data-bs-toggle="pill"
                                                                href="#pills-organization" role="tab"
                                                                aria-controls="pills-organization"
                                                                aria-selected="false"><span class="title">
                                                                    Organization</span></a></li>
                                                        <li><a href="#!"><span class="title">Follow
                                                                    up</span></a></li>
                                                        <li><a href="#!"><span class="title">Favorites</span></a></li>
                                                        <li><a href="#!"><span class="title">Ideas</span></a></li>
                                                        <li><a href="#!"><span class="title">Important</span></a></li>
                                                        <li><a href="#!"><span class="title">Business</span></a></li>
                                                        <li><a href="#!"><span class="title">Holidays</span></a></li>
                                                    </ul>
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
                    <div class="email-right-aside bookmark-tabcontent contacts-tabs">
                        <div class="card email-body radius-left dark-contact">
                            <div class="ps-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="pills-personal" role="tabpanel"
                                        aria-labelledby="pills-personal-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h5>Personal</h5><span class="f-14 pull-right mt-0">5
                                                    Contacts</span>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="row list-persons g-3" id="addcon">
                                                    <div class="col-xl-4 xl-50 col-md-5">
                                                        <div class="nav flex-column nav-pills" id="v-pills-tab"
                                                            role="tablist" aria-orientation="vertical"><a
                                                                class="contact-tab-0 nav-link active"
                                                                id="v-pills-org-user-tab" data-bs-toggle="pill"
                                                                onclick="activeDiv(0)" href="#v-pills-org-user"
                                                                role="tab" aria-selected="true">
                                                                <div class="d-flex"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle update_img_0"
                                                                        src="{{ asset('assets/images/user/2.png') }}"
                                                                        alt="">
                                                                    <div class="flex-grow-1">
                                                                        <h6> <span class="first_name_0">Bucky
                                                                            </span><span class="last_name_0">Barnes</span>
                                                                        </h6>
                                                                        <p class="email_add_0">
                                                                            barnes@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </a><a class="contact-tab-1 nav-link" id="v-pills-profile-tab"
                                                                data-bs-toggle="pill" onclick="activeDiv(1)"
                                                                href="#v-pills-profile" role="tab"
                                                                aria-selected="false">
                                                                <div class="d-flex"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle update_img_1"
                                                                        src="{{ asset('assets/images/user/3.png') }}"
                                                                        alt="">
                                                                    <div class="flex-grow-1">
                                                                        <h6> <span class="first_name_1">Comeren
                                                                            </span><span class="last_name_1">Diaz</span>
                                                                        </h6>
                                                                        <p class="email_add_1">
                                                                            comeren@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </a><a class="contact-tab-2 nav-link"
                                                                id="v-pills-messages-tab" data-bs-toggle="pill"
                                                                onclick="activeDiv(2)" href="#v-pills-messages"
                                                                role="tab" aria-selected="false">
                                                                <div class="d-flex"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle update_img_2"
                                                                        src="{{ asset('assets/images/user/1.jpg') }}"
                                                                        alt="">
                                                                    <div class="flex-grow-1">
                                                                        <h6> <span class="first_name_2">Issa
                                                                            </span><span class="last_name_2">Bell</span>
                                                                        </h6>
                                                                        <p class="email_add_2">
                                                                            issabell@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </a><a class="contact-tab-3 nav-link"
                                                                id="v-pills-settings-tab" data-bs-toggle="pill"
                                                                onclick="activeDiv(3)" href="#v-pills-settings"
                                                                role="tab" aria-selected="false">
                                                                <div class="d-flex"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle update_img_3"
                                                                        src="{{ asset('assets/images/user/14.png') }}"
                                                                        alt="">
                                                                    <div class="flex-grow-1">
                                                                        <h6> <span class="first_name_3">Andew
                                                                            </span><span class="last_name_3">Jon</span>
                                                                        </h6>
                                                                        <p class="email_add_3">
                                                                            andewjon@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </a><a class="contact-tab-4 nav-link"
                                                                id="v-pills-contact1-tab" data-bs-toggle="pill"
                                                                onclick="activeDiv(4)" href="#v-pills-contact1"
                                                                role="tab" aria-selected="false">
                                                                <div class="d-flex"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle update_img_4"
                                                                        src="{{ asset('assets/images/user/6.jpg') }}"
                                                                        alt="">
                                                                    <div class="flex-grow-1">
                                                                        <h6> <span class="first_name_4">Jason
                                                                            </span><span class="last_name_4">Borne</span>
                                                                        </h6>
                                                                        <p class="email_add_4">
                                                                            jasonb@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </a><a class="contact-tab-5 nav-link"
                                                                id="v-pills-contact8-tab" data-bs-toggle="pill"
                                                                onclick="activeDiv(5)" href="#v-pills-contact2"
                                                                role="tab" aria-selected="false">
                                                                <div class="d-flex"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle update_img_5"
                                                                        src="{{ asset('assets/images/avtar/11.jpg') }}"
                                                                        alt="">
                                                                    <div class="flex-grow-1">
                                                                        <h6> <span class="first_name_5">Monty
                                                                            </span><span class="last_name_5">Carlo</span>
                                                                        </h6>
                                                                        <p class="email_add_5">
                                                                            monty@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </a><a class="contact-tab-6 nav-link"
                                                                id="v-pills-contact3-tab" data-bs-toggle="pill"
                                                                onclick="activeDiv(6)" href="#v-pills-contact3"
                                                                role="tab" aria-selected="false">
                                                                <div class="d-flex"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle update_img_6"
                                                                        src="{{ asset('assets/images/avtar/16.jpg') }}"
                                                                        alt="">
                                                                    <div class="flex-grow-1">
                                                                        <h6> <span class="first_name_6">Brock
                                                                            </span><span class="last_name_6">Lee</span>
                                                                        </h6>
                                                                        <p class="email_add_6">lee@gmail.com
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                    <div class="col-xl-8 xl-50 col-md-7">
                                                        <div class="tab-content" id="v-pills-tabContent">
                                                            <div class="tab-pane contact-tab-0 tab-content-child fade show active"
                                                                id="v-pills-user" role="tabpanel"
                                                                aria-labelledby="v-pills-user-tab">
                                                                <div class="profile-mail">
                                                                    <div class="d-flex"><img
                                                                            class="img-100 img-fluid m-r-20 rounded-circle update_img_0"
                                                                            src="{{ asset('assets/images/user/2.png') }}"
                                                                            alt=""><input class="updateimg"
                                                                            type="file" name="img"
                                                                            onchange="readURL(this,0)" accept="image/*">
                                                                        <div class="flex-grow-1 mt-0">
                                                                            <h5><span class="first_name_0">Bucky
                                                                                </span><span
                                                                                    class="last_name_0">Barnes</span>
                                                                            </h5>
                                                                            <p class="email_add_0">
                                                                                barnes@gmail.com</p>
                                                                            <ul class="main-contact-option">
                                                                                <li><a href="#"
                                                                                        onclick="editContact(0)">Edit</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="deleteContact(0)">Delete</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="history(0)">History</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="printContact(0)"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#printModal">Print</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="email-general">
                                                                        <h6 class="mb-3">General</h6>
                                                                        <ul>
                                                                            <li> <span>Name</span><span
                                                                                    class="font-primary first_name_0">Bucky</span>
                                                                            </li>
                                                                            <li> <span>Gender</span><span
                                                                                    class="font-primary">Male</span>
                                                                            </li>
                                                                            <li> <span>Birthday</span><span
                                                                                    class="font-primary">
                                                                                    <span
                                                                                        class="birth_day_0">18</span><span
                                                                                        class="birth_month_0 ms-1">May</span><span
                                                                                        class="birth_year_0 ms-1">1994</span></span>
                                                                            </li>
                                                                            <li> <span>Personality</span><span
                                                                                    class="font-primary personality_0">Cool</span>
                                                                            </li>
                                                                            <li> <span>City</span><span
                                                                                    class="font-primary city_0">moline
                                                                                    acres</span></li>
                                                                            <li> <span>Mobile No</span><span
                                                                                    class="font-primary mobile_num_0">+0
                                                                                    1800 76855</span></li>
                                                                            <li> <span>Email
                                                                                    Address</span><span
                                                                                    class="font-primary email_add_0">barnes@gmail.com
                                                                                </span></li>
                                                                            <li> <span>Website</span><span
                                                                                    class="font-primary url_add_0">www.pixelstrap.com</span>
                                                                            </li>
                                                                            <li> <span>Interest</span><span
                                                                                    class="font-primary interest_0">Photography</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane contact-tab-1 tab-content-child fade"
                                                                id="v-pills-profile" role="tabpanel"
                                                                aria-labelledby="v-pills-profile-tab">
                                                                <div class="profile-mail">
                                                                    <div class="d-flex"><img
                                                                            class="img-100 img-fluid m-r-20 rounded-circle update_img_1"
                                                                            src="{{ asset('assets/images/user/3.png') }}"
                                                                            alt=""><input class="updateimg"
                                                                            type="file" name="img"
                                                                            onchange="readURL(this,1)" accept="image/*">
                                                                        <div class="flex-grow-1 mt-0">
                                                                            <h5><span class="first_name_1">Comeren
                                                                                </span><span
                                                                                    class="last_name_1">Diaz</span>
                                                                            </h5>
                                                                            <p class="email_add_1">
                                                                                comeren@gmail.com</p>
                                                                            <ul class="main-contact-option">
                                                                                <li><a href="#"
                                                                                        onclick="editContact(1)">Edit</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="deleteContact(1)">Delete</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="history(1)">History</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="printContact(1)"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#printModal">Print</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="email-general">
                                                                        <h6 class="mb-3">General</h6>
                                                                        <ul>
                                                                            <li> <span>Name </span><span
                                                                                    class="font-primary first_name_1">Comeren</span>
                                                                            </li>
                                                                            <li> <span>Gender </span><span
                                                                                    class="font-primary">Female</span>
                                                                            </li>
                                                                            <li> <span>Birthday</span><span
                                                                                    class="font-primary">
                                                                                    <span class="birth_day_1">7</span><span
                                                                                        class="birth_month_1 ms-1">Feb</span><span
                                                                                        class="birth_year_1 ms-1">1995</span></span>
                                                                            </li>
                                                                            <li> <span>Personality</span><span
                                                                                    class="font-primary personality_1">Cool</span>
                                                                            </li>
                                                                            <li> <span>City</span><span
                                                                                    class="font-primary city_1">Delhi</span>
                                                                            </li>
                                                                            <li> <span>Mobile No</span><span
                                                                                    class="font-primary mobile_num_1">+0
                                                                                    1800 55812</span></li>
                                                                            <li> <span>Email Address
                                                                                </span><span
                                                                                    class="font-primary email_add_1">comeren@gmail.com</span>
                                                                            </li>
                                                                            <li> <span>Website</span><span
                                                                                    class="font-primary url_add_1">www.cometest@.com</span>
                                                                            </li>
                                                                            <li> <span>Interest</span><span
                                                                                    class="font-primary interest_1">Sports</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane contact-tab-2 tab-content-child fade"
                                                                id="v-pills-messages" role="tabpanel"
                                                                aria-labelledby="v-pills-messages-tab">
                                                                <div class="profile-mail">
                                                                    <div class="d-flex"><img
                                                                            class="img-100 img-fluid m-r-20 rounded-circle update_img_2"
                                                                            src="{{ asset('assets/images/user/1.jpg') }}"
                                                                            alt=""><input class="updateimg"
                                                                            type="file" name="img"
                                                                            onchange="readURL(this,2)" accept="image/*">
                                                                        <div class="flex-grow-1 mt-0">
                                                                            <h5> <span class="first_name_2">Issa
                                                                                </span><span
                                                                                    class="last_name_2">Bell</span>
                                                                            </h5>
                                                                            <p class="email_add_2">
                                                                                issabell@gmail.com</p>
                                                                            <ul class="main-contact-option">
                                                                                <li><a href="#"
                                                                                        onclick="editContact(2)">Edit</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="deleteContact(2)">Delete</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="history(2)">History</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="printContact(2)"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#printModal">Print</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="email-general">
                                                                        <h6 class="mb-3">General</h6>
                                                                        <ul>
                                                                            <li> <span>Name </span><span
                                                                                    class="font-primary first_name_2">Issa</span>
                                                                            </li>
                                                                            <li> <span>Gender </span><span
                                                                                    class="font-primary">Male</span>
                                                                            </li>
                                                                            <li> <span>Birthday</span><span
                                                                                    class="font-primary">
                                                                                    <span
                                                                                        class="birth_day_2">20</span><span
                                                                                        class="birth_month_2 ms-1">Jul</span><span
                                                                                        class="birth_year_2 ms-1">1993</span></span>
                                                                            </li>
                                                                            <li> <span>Personality</span><span
                                                                                    class="font-primary personality_2">Cool</span>
                                                                            </li>
                                                                            <li> <span>City</span><span
                                                                                    class="font-primary city_2">Mumbai</span>
                                                                            </li>
                                                                            <li> <span>Mobile No</span><span
                                                                                    class="font-primary mobile_num_2">+0
                                                                                    1800 87412</span></li>
                                                                            <li> <span>Email Address
                                                                                </span><span
                                                                                    class="font-primary email_add_2">issabell@gmail.com</span>
                                                                            </li>
                                                                            <li> <span>Website</span><span
                                                                                    class="font-primary url_add_2">www.belltest@.com</span>
                                                                            </li>
                                                                            <li> <span>Interest</span><span
                                                                                    class="font-primary interest_2">Cooking</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane contact-tab-3 tab-content-child fade"
                                                                id="v-pills-settings" role="tabpanel">
                                                                <div class="profile-mail">
                                                                    <div class="d-flex"><img
                                                                            class="img-100 img-fluid m-r-20 rounded-circle update_img_3"
                                                                            src="{{ asset('assets/images/user/14.png') }}"
                                                                            alt=""><input class="updateimg"
                                                                            type="file" name="img"
                                                                            onchange="readURL(this,3)" accept="image/*">
                                                                        <div class="flex-grow-1 mt-0">
                                                                            <h5> <span class="first_name_3">Andew
                                                                                </span><span class="last_name_3">Jon</span>
                                                                            </h5>
                                                                            <p class="email_add_3">
                                                                                andewjon@gmail.com</p>
                                                                            <ul class="main-contact-option">
                                                                                <li><a href="#"
                                                                                        onclick="editContact(3)">Edit</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="deleteContact(3)">Delete</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="history(3)">History</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="printContact(3)"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#printModal">Print</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="email-general">
                                                                        <h6 class="mb-3">General</h6>
                                                                        <ul>
                                                                            <li> <span>Name </span><span
                                                                                    class="font-primary first_name_3">Andew</span>
                                                                            </li>
                                                                            <li> <span>Gender </span><span
                                                                                    class="font-primary">Male</span>
                                                                            </li>
                                                                            <li> <span>Birthday</span><span
                                                                                    class="font-primary">
                                                                                    <span
                                                                                        class="birth_day_3">25</span><span
                                                                                        class="birth_month_3 ms-1">Aug</span><span
                                                                                        class="birth_year_3 ms-1">1996</span></span>
                                                                            </li>
                                                                            <li> <span>Personality</span><span
                                                                                    class="font-primary personality_3">Cool</span>
                                                                            </li>
                                                                            <li> <span>City</span><span
                                                                                    class="font-primary city_3">Amreli</span>
                                                                            </li>
                                                                            <li> <span>Mobile No</span><span
                                                                                    class="font-primary mobile_num_3">+0
                                                                                    1800 79877</span></li>
                                                                            <li> <span>Email Address
                                                                                </span><span
                                                                                    class="font-primary email_add_3">andewjon@gmail.com</span>
                                                                            </li>
                                                                            <li> <span>Website</span><span
                                                                                    class="font-primary url_add_3">www.pixelstrap@.com</span>
                                                                            </li>
                                                                            <li> <span>Interest</span><span
                                                                                    class="font-primary interest_3">Photography</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane contact-tab-4 tab-content-child fade"
                                                                id="v-pills-contact1" role="tabpanel"
                                                                aria-labelledby="v-pills-contact1-tab">
                                                                <div class="profile-mail">
                                                                    <div class="d-flex"><img
                                                                            class="img-100 img-fluid m-r-20 rounded-circle update_img_4"
                                                                            src="{{ asset('assets/images/user/6.jpg') }}"
                                                                            alt=""><input class="updateimg"
                                                                            type="file" name="img"
                                                                            onchange="readURL(this,4)" accept="image/*">
                                                                        <div class="flex-grow-1 mt-0">
                                                                            <h5> <span class="first_name_4">Jason
                                                                                </span><span
                                                                                    class="last_name_4">Borne</span>
                                                                            </h5>
                                                                            <p class="email_add_4">
                                                                                jasonb@gmail.com</p>
                                                                            <ul class="main-contact-option">
                                                                                <li><a href="#"
                                                                                        onclick="editContact(4)">Edit</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="deleteContact(4)">Delete</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="history(4)">History</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="printContact(4)"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#printModal">Print</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="email-general">
                                                                        <h6 class="mb-3">General</h6>
                                                                        <ul>
                                                                            <li> <span>Name </span><span
                                                                                    class="font-primary first_name_4">Jason</span>
                                                                            </li>
                                                                            <li> <span>Gender </span><span
                                                                                    class="font-primary">Male</span>
                                                                            </li>
                                                                            <li> <span>Birthday</span><span
                                                                                    class="font-primary">
                                                                                    <span
                                                                                        class="birth_day_4">30</span><span
                                                                                        class="birth_month_4 ms-1">Oct</span><span
                                                                                        class="birth_year_4 ms-1">1992</span></span>
                                                                            </li>
                                                                            <li> <span>Personality</span><span
                                                                                    class="font-primary personality_4">Cool</span>
                                                                            </li>
                                                                            <li> <span>City</span><span
                                                                                    class="font-primary city_4">Delhi</span>
                                                                            </li>
                                                                            <li> <span>Mobile No</span><span
                                                                                    class="font-primary mobile_num_4">+0
                                                                                    1800 11547</span></li>
                                                                            <li> <span>Email Address
                                                                                </span><span
                                                                                    class="font-primary email_add_4">jasonb@gmail.com</span>
                                                                            </li>
                                                                            <li> <span>Website</span><span
                                                                                    class="font-primary url_add_4">www.jason@.com</span>
                                                                            </li>
                                                                            <li> <span>Interest</span><span
                                                                                    class="font-primary interest_4">Photography</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane contact-tab-5 tab-content-child fade"
                                                                id="v-pills-contact8" role="tabpanel">
                                                                <div class="profile-mail">
                                                                    <div class="d-flex"><img
                                                                            class="img-100 img-fluid m-r-20 rounded-circle update_img_5"
                                                                            src="{{ asset('assets/images/avtar/11.jpg') }}"
                                                                            alt=""><input class="updateimg"
                                                                            type="file" name="img"
                                                                            onchange="readURL(this,5)" accept="image/*">
                                                                        <div class="flex-grow-1 mt-0">
                                                                            <h5> <span class="first_name_5">Monty
                                                                                </span><span
                                                                                    class="last_name_5">Carlo</span>
                                                                            </h5>
                                                                            <p class="email_add_5">
                                                                                monty@gmail.com</p>
                                                                            <ul class="main-contact-option">
                                                                                <li><a href="#"
                                                                                        onclick="editContact(5)">Edit</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="deleteContact(5)">Delete</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="history(5)">History</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="printContact(5)"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#printModal">Print</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="email-general">
                                                                        <h6 class="mb-3">General</h6>
                                                                        <ul>
                                                                            <li> <span>Name </span><span
                                                                                    class="font-primary first_name_5">Monty</span>
                                                                            </li>
                                                                            <li> <span>Gender </span><span
                                                                                    class="font-primary">Male</span>
                                                                            </li>
                                                                            <li> <span>Birthday</span><span
                                                                                    class="font-primary">
                                                                                    <span
                                                                                        class="birth_day_5">12</span><span
                                                                                        class="birth_month_5 ms-1">Nov</span><span
                                                                                        class="birth_year_5 ms-1">1994</span></span>
                                                                            </li>
                                                                            <li> <span>Personality</span><span
                                                                                    class="font-primary personality_5">Cool</span>
                                                                            </li>
                                                                            <li> <span>City</span><span
                                                                                    class="font-primary city_5">Amreli</span>
                                                                            </li>
                                                                            <li> <span>Mobile No</span><span
                                                                                    class="font-primary mobile_num_5">+0
                                                                                    1800 87944</span></li>
                                                                            <li> <span>Email Address
                                                                                </span><span
                                                                                    class="font-primary email_add_5">monty@gmail.com</span>
                                                                            </li>
                                                                            <li> <span>Website</span><span
                                                                                    class="font-primary url_add_5">www.mon@.com</span>
                                                                            </li>
                                                                            <li> <span>Interest</span><span
                                                                                    class="font-primary interest_5">Sports</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane contact-tab-6 tab-content-child fade"
                                                                id="v-pills-contact9" role="tabpanel">
                                                                <div class="profile-mail">
                                                                    <div class="d-flex"><img
                                                                            class="img-100 img-fluid m-r-20 rounded-circle update_img_6"
                                                                            src="{{ asset('assets/images/avtar/16.jpg') }}"
                                                                            alt=""><input class="updateimg"
                                                                            type="file" name="img"
                                                                            onchange="readURL(this,6)" accept="image/*">
                                                                        <div class="flex-grow-1 mt-0">
                                                                            <h5> <span class="first_name_6">Brock
                                                                                </span><span class="last_name_6">Lee</span>
                                                                            </h5>
                                                                            <p class="email_add_6">
                                                                                lee@gmail.com</p>
                                                                            <ul class="main-contact-option">
                                                                                <li><a href="#"
                                                                                        onclick="editContact(6)">Edit</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="deleteContact(6)">Delete</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="history(6)">History</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="printContact(6)"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#printModal">Print</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="email-general">
                                                                        <h6 class="mb-3">General</h6>
                                                                        <ul>
                                                                            <li><span>Name </span><span
                                                                                    class="font-primary first_name_6">Brock</span>
                                                                            </li>
                                                                            <li> <span>Gender </span><span
                                                                                    class="font-primary">Male</span>
                                                                            </li>
                                                                            <li> <span>Birthday</span><span
                                                                                    class="font-primary">
                                                                                    <span class="birth_day_6">8</span><span
                                                                                        class="birth_month_6 ms-1">Dec</span><span
                                                                                        class="birth_year_6 ms-1">1992</span></span>
                                                                            </li>
                                                                            <li> <span>Personality</span><span
                                                                                    class="font-primary personality_6">Cool</span>
                                                                            </li>
                                                                            <li> <span>City</span><span
                                                                                    class="font-primary city_6">Ahemdabad</span>
                                                                            </li>
                                                                            <li> <span>Mobile No</span><span
                                                                                    class="font-primary mobile_num_6">+0
                                                                                    1800 58712</span></li>
                                                                            <li> <span>Email Address
                                                                                </span><span
                                                                                    class="font-primary email_add_6">lee@gmail.com</span>
                                                                            </li>
                                                                            <li> <span>Website</span><span
                                                                                    class="font-primary url_add_6">www.brock.com</span>
                                                                            </li>
                                                                            <li> <span>Interest</span><span
                                                                                    class="font-primary interest_6">Photography
                                                                                </span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="contact-editform ps-0">
                                                            <form class="custom-input">
                                                                <div class="row g-3">
                                                                    <div class="mt-0 mb-3 col-md-12">
                                                                        <label>Name</label>
                                                                        <div class="row g-3">
                                                                            <div class="col-xxl-6"><input
                                                                                    class="form-control" id="first_name1"
                                                                                    type="text" required=""
                                                                                    placeholder="First Name"
                                                                                    value="first_name1">
                                                                            </div>
                                                                            <div class="col-xxl-6"> <input
                                                                                    class="form-control" id="last_name1"
                                                                                    type="text" required=""
                                                                                    placeholder="Last Name"
                                                                                    value="last_name1">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-0 mb-3 col-md-12">
                                                                        <label>Email Address</label><input
                                                                            class="form-control" id="email_add1"
                                                                            type="text" required=""
                                                                            autocomplete="off">
                                                                    </div>
                                                                    <div class="mt-0 mb-3 col-md-12">
                                                                        <label>Phone</label>
                                                                        <div class="row g-3">
                                                                            <div class="col-xxl-6"><input
                                                                                    class="form-control" id="mobile_num1"
                                                                                    type="number" required=""
                                                                                    autocomplete="off">
                                                                            </div>
                                                                            <div class="col-xxl-6"><select
                                                                                    class="form-control">
                                                                                    <option>Mobile</option>
                                                                                    <option>Work</option>
                                                                                    <option>Others</option>
                                                                                </select></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row more-data">
                                                                    <div class="mt-0 mb-3 col-md-12">
                                                                        <label>URLS</label>
                                                                        <div class="row g-3">
                                                                            <div class="col-xxl-6 xl-100">
                                                                                <input class="form-control" id="url_add1"
                                                                                    type="url" required="">
                                                                            </div>
                                                                            <div class="col-xxl-6 xl-100">
                                                                                <select class="selectpicker search-picker"
                                                                                    aria-label="Group"
                                                                                    data-live-search="true">
                                                                                    <option value="1" selected>
                                                                                        Personal
                                                                                        Web Address</option>
                                                                                    <option value="2">
                                                                                        Company Web Address
                                                                                    </option>
                                                                                    <option value="3">
                                                                                        Facebook URL
                                                                                    </option>
                                                                                    <option value="4">
                                                                                        Twitter URL</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-0 mb-3 col-md-12">
                                                                        <label>Personal</label>
                                                                        <div class="d-block"><label class="me-3"
                                                                                for="edo-ani2"><input
                                                                                    class="radio_animated" id="edo-ani2"
                                                                                    type="radio" name="rdo-ani1"
                                                                                    checked=""><span>Male</span></label><label
                                                                                for="edo-ani3"><input
                                                                                    class="radio_animated" id="edo-ani3"
                                                                                    type="radio"
                                                                                    name="rdo-ani1"><span>Female</span></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-0 mb-3 col-md-12">
                                                                        <div class="row g-3">
                                                                            <div class="col-xxl-4 col-sm-12">
                                                                                <select class="form-control"
                                                                                    id="birth_day1">
                                                                                    <option class="f-w-600">
                                                                                        Day</option>
                                                                                    <option>01</option>
                                                                                    <option>02</option>
                                                                                    <option>03</option>
                                                                                    <option>04</option>
                                                                                    <option>05</option>
                                                                                    <option>06</option>
                                                                                    <option>07</option>
                                                                                    <option>08</option>
                                                                                    <option>09</option>
                                                                                    <option>10</option>
                                                                                    <option>11</option>
                                                                                    <option>12</option>
                                                                                    <option>13</option>
                                                                                    <option>14</option>
                                                                                    <option>15</option>
                                                                                    <option>16</option>
                                                                                    <option>17</option>
                                                                                    <option>18</option>
                                                                                    <option>19</option>
                                                                                    <option>20</option>
                                                                                    <option>21</option>
                                                                                    <option>22</option>
                                                                                    <option>23</option>
                                                                                    <option>24</option>
                                                                                    <option>25</option>
                                                                                    <option>26</option>
                                                                                    <option>27</option>
                                                                                    <option>28</option>
                                                                                    <option>29</option>
                                                                                    <option>30</option>
                                                                                    <option>31</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-xxl-4 col-sm-12">
                                                                                <select class="form-control"
                                                                                    id="birth_month1">
                                                                                    <option class="f-w-600">
                                                                                        Month</option>
                                                                                    <option>January</option>
                                                                                    <option>February
                                                                                    </option>
                                                                                    <option>March</option>
                                                                                    <option>April</option>
                                                                                    <option>May</option>
                                                                                    <option>June</option>
                                                                                    <option>July</option>
                                                                                    <option>August</option>
                                                                                    <option>September
                                                                                    </option>
                                                                                    <option>October</option>
                                                                                    <option>November
                                                                                    </option>
                                                                                    <option>December
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-xxl-4 col-sm-12">
                                                                                <input class="form-control"
                                                                                    id="birth_year1" type="number"
                                                                                    placeholder="year">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-0 mb-3 col-md-12">
                                                                        <div class="row g-3">
                                                                            <div class="col-xxl-6">
                                                                                <label>Personality</label><input
                                                                                    class="form-control" id="personality1"
                                                                                    type="text" required=""
                                                                                    autocomplete="off">
                                                                            </div>
                                                                            <div class="col-xxl-6">
                                                                                <label>Interest</label><input
                                                                                    class="form-control" id="interest1"
                                                                                    type="text" required=""
                                                                                    autocomplete="off">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 col-md-12"><label>Home
                                                                            Address</label>
                                                                        <div class="row g-3">
                                                                            <div class="col-12">
                                                                                <div class="mb-2"><input
                                                                                        class="form-control"
                                                                                        type="text"
                                                                                        placeholder="Address">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xxl-6">
                                                                                <div class="mb-2"><input
                                                                                        class="form-control"
                                                                                        id="city" type="text"
                                                                                        placeholder="City">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xxl-6">
                                                                                <div class="mb-2"><input
                                                                                        class="form-control"
                                                                                        type="text"
                                                                                        placeholder="State">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xxl-6">
                                                                                <div><input class="form-control"
                                                                                        type="text"
                                                                                        placeholder="Country">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xxl-6">
                                                                                <div><input class="form-control"
                                                                                        type="text"
                                                                                        placeholder="Postal code">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><a class="ps-0 edit-information" href="#">Edit
                                                                    more
                                                                    information</a><button
                                                                    class="btn btn-primary update-contact me-2"
                                                                    type="button">Save</button><button
                                                                    class="btn button-light-primary" type="button"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fade tab-pane" id="pills-organization" role="tabpanel"
                                        aria-labelledby="pills-organization">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h5>Organization</h5><span class="f-14 pull-right mt-0">10
                                                    Contacts</span>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="row list-persons" id="addcon1">
                                                    <div class="col-xl-4 xl-50 col-md-5">
                                                        <div class="nav flex-column nav-pills" id="w-pills-tab"
                                                            role="tablist" aria-orientation="vertical"><a
                                                                class="contact-tab-0 nav-link active"
                                                                id="v-pills-user-tab" data-bs-toggle="pill"
                                                                onclick="activeDiv(0)" href="#v-pills-user"
                                                                role="tab" aria-selected="true">
                                                                <div class="d-flex"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle update_img_0"
                                                                        src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                                        alt="">
                                                                    <div class="flex-grow-1">
                                                                        <h6> <span class="first_name_0">Gracie</span><span
                                                                                class="last_name_0">Ryan</span>
                                                                        </h6>
                                                                        <p class="email_add_0">
                                                                            gracie@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </a><a class="contact-tab-1 nav-link"
                                                                id="v-pills-profile1-tab" data-bs-toggle="pill"
                                                                onclick="activeDiv(1)" href="#v-pills-profile1"
                                                                role="tab" aria-selected="false">
                                                                <div class="d-flex"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle update_img_1"
                                                                        src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                                        alt="">
                                                                    <div class="flex-grow-1">
                                                                        <h6> <span class="first_name_1">Lewis</span><span
                                                                                class="last_name_1">Costa</span>
                                                                        </h6>
                                                                        <p class="email_add_1">
                                                                            lewis@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </a><a class="contact-tab-2 nav-link"
                                                                id="v-pills-messages1-tab" data-bs-toggle="pill"
                                                                onclick="activeDiv(2)" href="#v-pills-messages1"
                                                                role="tab" aria-selected="false">
                                                                <div class="d-flex"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle update_img_2"
                                                                        src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                                        alt="">
                                                                    <div class="flex-grow-1">
                                                                        <h6> <span class="first_name_2">Juliet</span><span
                                                                                class="last_name_2">Shannon</span>
                                                                        </h6>
                                                                        <p class="email_add_2">
                                                                            juliet@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </a><a class="contact-tab-3 nav-link"
                                                                id="v-pills-settings1-tab" data-bs-toggle="pill"
                                                                onclick="activeDiv(3)" href="#v-pills-settings1"
                                                                role="tab" aria-selected="false">
                                                                <div class="d-flex"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle update_img_3"
                                                                        src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                                        alt="">
                                                                    <div class="flex-grow-1">
                                                                        <h6> <span class="first_name_3">Troy</span><span
                                                                                class="last_name_3">Kelly</span>
                                                                        </h6>
                                                                        <p class="email_add_3">
                                                                            kelly@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </a><a class="contact-tab-4 nav-link"
                                                                id="v-pills-contact2-tab" data-bs-toggle="pill"
                                                                onclick="activeDiv(4)" href="#v-pills-contact2"
                                                                role="tab" aria-selected="false">
                                                                <div class="d-flex"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle update_img_4"
                                                                        src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                                        alt="">
                                                                    <div class="flex-grow-1">
                                                                        <h6> <span class="first_name_4">Fiona</span><span
                                                                                class="last_name_4">Moss</span>
                                                                        </h6>
                                                                        <p class="email_add_4">
                                                                            fiona@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </a><a class="contact-tab-5 nav-link"
                                                                id="v-pills-contact9-tab" data-bs-toggle="pill"
                                                                onclick="activeDiv(5)" href="#v-pills-contact9"
                                                                role="tab" aria-selected="false">
                                                                <div class="d-flex"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle update_img_5"
                                                                        src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                                        alt="">
                                                                    <div class="flex-grow-1">
                                                                        <h6> <span class="first_name_5">Kira</span><span
                                                                                class="last_name_5">Olsen</span>
                                                                        </h6>
                                                                        <p class="email_add_5">
                                                                            kira@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </a><a class="contact-tab-6 nav-link"
                                                                id="v-pills-contact6-tab" data-bs-toggle="pill"
                                                                onclick="activeDiv(6)" href="#v-pills-contact6"
                                                                role="tab" aria-selected="false">
                                                                <div class="d-flex"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle update_img_6"
                                                                        src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                                        alt="">
                                                                    <div class="flex-grow-1">
                                                                        <h6> <span class="first_name_6">Ivan</span><span
                                                                                class="last_name_6">Nava</span>
                                                                        </h6>
                                                                        <p class="email_add_6">
                                                                            ivan@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                    <div class="col-xl-8 xl-50 col-md-7">
                                                        <div class="tab-content" id="w-pills-tabContent">
                                                            <div class="tab-pane contact-tab-0 tab-content-child fade show active"
                                                                id="w-pills-user" role="tabpanel">
                                                                <div class="profile-mail">
                                                                    <div class="d-flex"><img
                                                                            class="img-100 img-fluid m-r-20 rounded-circle update_img_0"
                                                                            src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                                            alt=""><input class="updateimg"
                                                                            type="file" name="img"
                                                                            onchange="readURL(this,0)" accept="image/*">
                                                                        <div class="flex-grow-1 mt-0">
                                                                            <h5><span
                                                                                    class="first_name_0">Gracie</span><span
                                                                                    class="last_name_0">Ryan</span>
                                                                            </h5>
                                                                            <p class="email_add_0">
                                                                                gracie@gmail.com</p>
                                                                            <ul class="main-contact-option">
                                                                                <li><a href="#"
                                                                                        onclick="editContact(0)">Edit</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="deleteContact(0)">Delete</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="history(0)">History</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="printContact(0)"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#printModal">Print</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="email-general">
                                                                        <h6 class="mb-3">General</h6>
                                                                        <ul>
                                                                            <li> <span>Name</span><span
                                                                                    class="font-primary first_name_0">Gracie</span>
                                                                            </li>
                                                                            <li> <span>Gender</span><span
                                                                                    class="font-primary">Male</span>
                                                                            </li>
                                                                            <li> <span>Birthday</span><span
                                                                                    class="font-primary">
                                                                                    <span
                                                                                        class="birth_day_0">20</span><span
                                                                                        class="birth_month_0 ms-1">Feb</span><span
                                                                                        class="birth_year_0 ms-1">2000</span></span>
                                                                            </li>
                                                                            <li> <span>Personality</span><span
                                                                                    class="font-primary personality_0">Cool</span>
                                                                            </li>
                                                                            <li> <span>City</span><span
                                                                                    class="font-primary city_0">Delhi</span>
                                                                            </li>
                                                                            <li> <span>Mobile No</span><span
                                                                                    class="font-primary mobile_num_0">+99
                                                                                    47825 89678 </span></li>
                                                                            <li> <span>Email
                                                                                    Address</span><span
                                                                                    class="font-primary email_add_0">gracie@gmail.com</span>
                                                                            </li>
                                                                            <li> <span>Website</span><span
                                                                                    class="font-primary url_add_0">https://www.pixelstrap.com</span>
                                                                            </li>
                                                                            <li> <span>Interest</span><span
                                                                                    class="font-primary interest_0">Photography</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane contact-tab-1 tab-content-child fade"
                                                                id="w-pills-profile" role="tabpanel">
                                                                <div class="profile-mail">
                                                                    <div class="d-flex"><img
                                                                            class="img-100 img-fluid m-r-20 rounded-circle update_img_1"
                                                                            src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                                            alt=""><input class="updateimg"
                                                                            type="file" name="img"
                                                                            onchange="readURL(this,1)" accept="image/*">
                                                                        <div class="flex-grow-1 mt-0">
                                                                            <h5><span
                                                                                    class="first_name_1">Lewis</span><span
                                                                                    class="last_name_1">Costa</span>
                                                                            </h5>
                                                                            <p class="email_add_1">
                                                                                lewis@gmail.com</p>
                                                                            <ul class="main-contact-option">
                                                                                <li><a href="#"
                                                                                        onclick="editContact(1)">Edit</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="deleteContact(1)">Delete</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="history(1)">History</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="printContact(1)"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#printModal">Print</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="email-general">
                                                                        <h6 class="mb-3">General</h6>
                                                                        <ul>
                                                                            <li> <span>Name </span><span
                                                                                    class="font-primary first_name_1">Lewis</span>
                                                                            </li>
                                                                            <li> <span>Gender </span><span
                                                                                    class="font-primary">Female</span>
                                                                            </li>
                                                                            <li> <span>Birthday</span><span
                                                                                    class="font-primary">
                                                                                    <span
                                                                                        class="birth_day_1">22</span><span
                                                                                        class="birth_month_1 ms-1">March</span><span
                                                                                        class="birth_year_1 ms-1">2001</span></span>
                                                                            </li>
                                                                            <li> <span>Personality</span><span
                                                                                    class="font-primary personality_1">Cool</span>
                                                                            </li>
                                                                            <li> <span>City</span><span
                                                                                    class="font-primary city_1">Hyderabad</span>
                                                                            </li>
                                                                            <li> <span>Mobile No</span><span
                                                                                    class="font-primary mobile_num_1">+0
                                                                                    3589 78548</span></li>
                                                                            <li> <span>Email Address
                                                                                </span><span
                                                                                    class="font-primary email_add_1">lewis@gmail.com</span>
                                                                            </li>
                                                                            <li> <span>Website</span><span
                                                                                    class="font-primary url_add_1">www.lewissport.com</span>
                                                                            </li>
                                                                            <li> <span>Interest</span><span
                                                                                    class="font-primary interest_1">Sports</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane contact-tab-2 tab-content-child fade"
                                                                id="w-pills-messages" role="tabpanel">
                                                                <div class="profile-mail">
                                                                    <div class="d-flex"><img
                                                                            class="img-100 img-fluid m-r-20 rounded-circle update_img_2"
                                                                            src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                                            alt=""><input class="updateimg"
                                                                            type="file" name="img"
                                                                            onchange="readURL(this,2)" accept="image/*">
                                                                        <div class="flex-grow-1 mt-0">
                                                                            <h5> <span class="first_name_2">Juliet
                                                                                </span><span
                                                                                    class="last_name_2">Shannon</span>
                                                                            </h5>
                                                                            <p class="email_add_2">
                                                                                juliet@gmail.com</p>
                                                                            <ul class="main-contact-option">
                                                                                <li><a href="#"
                                                                                        onclick="editContact(2)">Edit</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="deleteContact(2)">Delete</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="history(2)">History</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="printContact(2)"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#printModal">Print</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="email-general">
                                                                        <h6 class="mb-3">General</h6>
                                                                        <ul>
                                                                            <li> <span>Name </span><span
                                                                                    class="font-primary first_name_2">Juliet</span>
                                                                            </li>
                                                                            <li> <span>Gender </span><span
                                                                                    class="font-primary">Male</span>
                                                                            </li>
                                                                            <li> <span>Birthday</span><span
                                                                                    class="font-primary">
                                                                                    <span
                                                                                        class="birth_day_2">02</span><span
                                                                                        class="birth_month_2 ms-1">Jan</span><span
                                                                                        class="birth_year_2 ms-1">1999</span></span>
                                                                            </li>
                                                                            <li> <span>Personality</span><span
                                                                                    class="font-primary personality_2">Cool</span>
                                                                            </li>
                                                                            <li> <span>City</span><span
                                                                                    class="font-primary city_2">Lucknow</span>
                                                                            </li>
                                                                            <li> <span>Mobile No</span><span
                                                                                    class="font-primary mobile_num_2">+0
                                                                                    2655 48777</span></li>
                                                                            <li> <span>Email Address
                                                                                </span><span
                                                                                    class="font-primary email_add_2">juliet@gmail.com</span>
                                                                            </li>
                                                                            <li> <span>Website</span><span
                                                                                    class="font-primary url_add_2">www.juliet.com</span>
                                                                            </li>
                                                                            <li> <span>Interest</span><span
                                                                                    class="font-primary interest_2">Cooking</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane contact-tab-3 tab-content-child fade"
                                                                id="w-pills-settings" role="tabpanel">
                                                                <div class="profile-mail">
                                                                    <div class="d-flex"><img
                                                                            class="img-100 img-fluid m-r-20 rounded-circle update_img_3"
                                                                            src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                                            alt=""><input class="updateimg"
                                                                            type="file" name="img"
                                                                            onchange="readURL(this,3)" accept="image/*">
                                                                        <div class="flex-grow-1 mt-0">
                                                                            <h5> <span
                                                                                    class="first_name_3">Troy</span><span
                                                                                    class="last_name_3">Kelly</span>
                                                                            </h5>
                                                                            <p class="email_add_3">
                                                                                kelly@gmail.com</p>
                                                                            <ul class="main-contact-option">
                                                                                <li><a href="#"
                                                                                        onclick="editContact(3)">Edit</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="deleteContact(3)">Delete</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="history(3)">History</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="printContact(3)"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#printModal">Print</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="email-general">
                                                                        <h6 class="mb-3">General</h6>
                                                                        <ul>
                                                                            <li> <span>Name </span><span
                                                                                    class="font-primary first_name_3">Troy</span>
                                                                            </li>
                                                                            <li> <span>Gender </span><span
                                                                                    class="font-primary">Male</span>
                                                                            </li>
                                                                            <li> <span>Birthday</span><span
                                                                                    class="font-primary">
                                                                                    <span
                                                                                        class="birth_day_3">01</span><span
                                                                                        class="birth_month_3 ms-1">Aug</span><span
                                                                                        class="birth_year_3 ms-1">1998</span></span>
                                                                            </li>
                                                                            <li> <span>Personality</span><span
                                                                                    class="font-primary personality_3">Cool</span>
                                                                            </li>
                                                                            <li> <span>City</span><span
                                                                                    class="font-primary city_3">Patna</span>
                                                                            </li>
                                                                            <li> <span>Mobile No</span><span
                                                                                    class="font-primary mobile_num_3">+0
                                                                                    22236 78770</span></li>
                                                                            <li> <span>Email Address
                                                                                </span><span
                                                                                    class="font-primary email_add_3">kelly@gmail.com</span>
                                                                            </li>
                                                                            <li> <span>Website</span><span
                                                                                    class="font-primary url_add_3">https://www.pixelstrap.com</span>
                                                                            </li>
                                                                            <li> <span>Interest</span><span
                                                                                    class="font-primary interest_3">Dancer</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane contact-tab-4 tab-content-child fade"
                                                                id="w-pills-contact1" role="tabpanel">
                                                                <div class="profile-mail">
                                                                    <div class="d-flex"><img
                                                                            class="img-100 img-fluid m-r-20 rounded-circle update_img_4"
                                                                            src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                                            alt=""><input class="updateimg"
                                                                            type="file" name="img"
                                                                            onchange="readURL(this,4)" accept="image/*">
                                                                        <div class="flex-grow-1 mt-0">
                                                                            <h5> <span
                                                                                    class="first_name_4">Fiona</span><span
                                                                                    class="last_name_4">Moss</span>
                                                                            </h5>
                                                                            <p class="email_add_4">
                                                                                fiona@gmail.com</p>
                                                                            <ul class="main-contact-option">
                                                                                <li><a href="#"
                                                                                        onclick="editContact(4)">Edit</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="deleteContact(4)">Delete</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="history(4)">History</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="printContact(4)"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#printModal">Print</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="email-general">
                                                                        <h6 class="mb-3">General</h6>
                                                                        <ul>
                                                                            <li> <span>Name </span><span
                                                                                    class="font-primary first_name_4">Fiona</span>
                                                                            </li>
                                                                            <li> <span>Gender </span><span
                                                                                    class="font-primary">Female</span>
                                                                            </li>
                                                                            <li> <span>Birthday</span><span
                                                                                    class="font-primary">
                                                                                    <span
                                                                                        class="birth_day_4">27</span><span
                                                                                        class="birth_month_4 ms-1">April</span><span
                                                                                        class="birth_year_4 ms-1">2000</span></span>
                                                                            </li>
                                                                            <li> <span>Personality</span><span
                                                                                    class="font-primary personality_4">Cool</span>
                                                                            </li>
                                                                            <li> <span>City</span><span
                                                                                    class="font-primary city_4">Kochi</span>
                                                                            </li>
                                                                            <li> <span>Mobile No</span><span
                                                                                    class="font-primary mobile_num_4">+0
                                                                                    2600 363652</span></li>
                                                                            <li> <span>Email Address
                                                                                </span><span
                                                                                    class="font-primary email_add_4">fiona@gmail.com</span>
                                                                            </li>
                                                                            <li> <span>Website</span><span
                                                                                    class="font-primary url_add_4">www.fiona.com</span>
                                                                            </li>
                                                                            <li> <span>Interest</span><span
                                                                                    class="font-primary interest_4">Writer</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane contact-tab-5 tab-content-child fade"
                                                                id="w-pills-contact8" role="tabpanel">
                                                                <div class="profile-mail">
                                                                    <div class="d-flex"><img
                                                                            class="img-100 img-fluid m-r-20 rounded-circle update_img_5"
                                                                            src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                                            alt=""><input class="updateimg"
                                                                            type="file" name="img"
                                                                            onchange="readURL(this,5)" accept="image/*">
                                                                        <div class="flex-grow-1 mt-0">
                                                                            <h5> <span
                                                                                    class="first_name_5">Kira</span><span
                                                                                    class="last_name_5">Olsen</span>
                                                                            </h5>
                                                                            <p class="email_add_5">
                                                                                kira@gmail.com</p>
                                                                            <ul class="main-contact-option">
                                                                                <li><a href="#"
                                                                                        onclick="editContact(5)">Edit</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="deleteContact(5)">Delete</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="history(5)">History</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="printContact(5)"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#printModal">Print</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="email-general">
                                                                        <h6 class="mb-3">General</h6>
                                                                        <ul>
                                                                            <li> <span>Name </span><span
                                                                                    class="font-primary first_name_5">Kira</span>
                                                                            </li>
                                                                            <li> <span>Gender </span><span
                                                                                    class="font-primary">Female</span>
                                                                            </li>
                                                                            <li> <span>Birthday</span><span
                                                                                    class="font-primary">
                                                                                    <span
                                                                                        class="birth_day_5">08</span><span
                                                                                        class="birth_month_5 ms-1">May</span><span
                                                                                        class="birth_year_5 ms-1">2002</span></span>
                                                                            </li>
                                                                            <li> <span>Personality</span><span
                                                                                    class="font-primary personality_5">Cool</span>
                                                                            </li>
                                                                            <li> <span>City</span><span
                                                                                    class="font-primary city_5">Bhopal</span>
                                                                            </li>
                                                                            <li> <span>Mobile No</span><span
                                                                                    class="font-primary mobile_num_5">+0
                                                                                    4545 99968</span></li>
                                                                            <li> <span>Email Address
                                                                                </span><span
                                                                                    class="font-primary email_add_5">kira@gmail.com</span>
                                                                            </li>
                                                                            <li> <span>Website</span><span
                                                                                    class="font-primary url_add_5">www.kira.com</span>
                                                                            </li>
                                                                            <li> <span>Interest</span><span
                                                                                    class="font-primary interest_5">Sports</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane contact-tab-6 tab-content-child fade"
                                                                id="w-pills-contact9" role="tabpanel">
                                                                <div class="profile-mail">
                                                                    <div class="d-flex"><img
                                                                            class="img-100 img-fluid m-r-20 rounded-circle update_img_6"
                                                                            src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                                            alt=""><input class="updateimg"
                                                                            type="file" name="img"
                                                                            onchange="readURL(this,6)" accept="image/*">
                                                                        <div class="flex-grow-1 mt-0">
                                                                            <h5> <span
                                                                                    class="first_name_6">Ivan</span><span
                                                                                    class="last_name_6">Nava</span>
                                                                            </h5>
                                                                            <p class="email_add_6">
                                                                                ivan@gmail.com</p>
                                                                            <ul class="main-contact-option">
                                                                                <li><a href="#"
                                                                                        onclick="editContact(6)">Edit</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="deleteContact(6)">Delete</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="history(6)">History</a>
                                                                                </li>
                                                                                <li><a href="#"
                                                                                        onclick="printContact(6)"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#printModal">Print</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="email-general">
                                                                        <h6 class="mb-3">General</h6>
                                                                        <ul>
                                                                            <li><span>Name </span><span
                                                                                    class="font-primary first_name_6">Ivan</span>
                                                                            </li>
                                                                            <li> <span>Gender </span><span
                                                                                    class="font-primary">Male</span>
                                                                            </li>
                                                                            <li> <span>Birthday</span><span
                                                                                    class="font-primary">
                                                                                    <span
                                                                                        class="birth_day_6">10</span><span
                                                                                        class="birth_month_6 ms-1">Aug</span><span
                                                                                        class="birth_year_6 ms-1">1995</span></span>
                                                                            </li>
                                                                            <li> <span>Personality</span><span
                                                                                    class="font-primary personality_6">Cool</span>
                                                                            </li>
                                                                            <li> <span>City</span><span
                                                                                    class="font-primary city_6">Surat</span>
                                                                            </li>
                                                                            <li> <span>Mobile No</span><span
                                                                                    class="font-primary mobile_num_6">+0
                                                                                    6861 85858</span></li>
                                                                            <li> <span>Email Address
                                                                                </span><span
                                                                                    class="font-primary email_add_6">ivan@gmail.com</span>
                                                                            </li>
                                                                            <li> <span>Website</span><span
                                                                                    class="font-primary url_add_6">www.ivan.com</span>
                                                                            </li>
                                                                            <li> <span>Interest</span><span
                                                                                    class="font-primary interest_6">Dancer
                                                                                </span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="contact-editform ps-0">
                                                            <form class="custom-input">
                                                                <div class="row g-3">
                                                                    <div class="mt-0 mb-3 col-md-12">
                                                                        <label>Name</label>
                                                                        <div class="row g-3">
                                                                            <div class="col-xxl-6"><input
                                                                                    class="form-control" id="first_name"
                                                                                    type="text" required=""
                                                                                    placeholder="First Name">
                                                                            </div>
                                                                            <div class="col-xxl-6"> <input
                                                                                    class="form-control" id="last_name"
                                                                                    type="text" required=""
                                                                                    placeholder="Last Name">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-0 mb-3 col-md-12">
                                                                        <label>Email Address</label><input
                                                                            class="form-control" id="email_add"
                                                                            type="text" required=""
                                                                            autocomplete="off">
                                                                    </div>
                                                                    <div class="mt-0 mb-3 col-md-12">
                                                                        <label>Phone</label>
                                                                        <div class="row g-3">
                                                                            <div class="col-xxl-6"><input
                                                                                    class="form-control" id="mobile_num"
                                                                                    type="number" required=""
                                                                                    autocomplete="off">
                                                                            </div>
                                                                            <div class="col-xxl-6"><select
                                                                                    class="form-control">
                                                                                    <option>Mobile</option>
                                                                                    <option>Work</option>
                                                                                    <option>Others</option>
                                                                                </select></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row more-data">
                                                                    <div class="mt-0 mb-3 col-md-12">
                                                                        <label>URLS</label>
                                                                        <div class="row g-3">
                                                                            <div class="col-xxl-6 xl-100">
                                                                                <input class="form-control"
                                                                                    id="url_add" type="url"
                                                                                    required="">
                                                                            </div>
                                                                            <div class="col-xxl-6 xl-100">
                                                                                <select class="selectpicker search-picker"
                                                                                    aria-label="Group"
                                                                                    data-live-search="true">
                                                                                    <option value="1" selected>
                                                                                        Personal
                                                                                        Web Address</option>
                                                                                    <option value="2">
                                                                                        Company Web Address
                                                                                    </option>
                                                                                    <option value="3">
                                                                                        Facebook URL
                                                                                    </option>
                                                                                    <option value="4">
                                                                                        Twitter URL</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-0 mb-3 col-md-12">
                                                                        <label>Personal</label>
                                                                        <div class="d-block"><label class="me-3"
                                                                                for="edo-ani"><input
                                                                                    class="radio_animated"
                                                                                    id="edo-ani" type="radio"
                                                                                    name="rdo-ani"
                                                                                    checked=""><span>Male</span></label><label
                                                                                for="edo-ani1"><input
                                                                                    class="radio_animated"
                                                                                    id="edo-ani1" type="radio"
                                                                                    name="rdo-ani"><span>Female</span></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-0 mb-3 col-md-12">
                                                                        <div class="row g-3">
                                                                            <div class="col-xxl-4 col-sm-12">
                                                                                <select class="form-control"
                                                                                    id="birth_day">
                                                                                    <option class="f-w-600">
                                                                                        Day</option>
                                                                                    <option>01</option>
                                                                                    <option>02</option>
                                                                                    <option>03</option>
                                                                                    <option>04</option>
                                                                                    <option>05</option>
                                                                                    <option>06</option>
                                                                                    <option>07</option>
                                                                                    <option>08</option>
                                                                                    <option>09</option>
                                                                                    <option>10</option>
                                                                                    <option>11</option>
                                                                                    <option>12</option>
                                                                                    <option>13</option>
                                                                                    <option>14</option>
                                                                                    <option>15</option>
                                                                                    <option>16</option>
                                                                                    <option>17</option>
                                                                                    <option>18</option>
                                                                                    <option>19</option>
                                                                                    <option>20</option>
                                                                                    <option>21</option>
                                                                                    <option>22</option>
                                                                                    <option>23</option>
                                                                                    <option>24</option>
                                                                                    <option>25</option>
                                                                                    <option>26</option>
                                                                                    <option>27</option>
                                                                                    <option>28</option>
                                                                                    <option>29</option>
                                                                                    <option>30</option>
                                                                                    <option>31</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-xxl-4 col-sm-12">
                                                                                <select class="form-control"
                                                                                    id="birth_month">
                                                                                    <option class="f-w-600">
                                                                                        Month</option>
                                                                                    <option>January</option>
                                                                                    <option>February
                                                                                    </option>
                                                                                    <option>March</option>
                                                                                    <option>April</option>
                                                                                    <option>May</option>
                                                                                    <option>June</option>
                                                                                    <option>July</option>
                                                                                    <option>August</option>
                                                                                    <option>September
                                                                                    </option>
                                                                                    <option>October</option>
                                                                                    <option>November
                                                                                    </option>
                                                                                    <option>December
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-xxl-4 col-sm-12">
                                                                                <input class="form-control"
                                                                                    id="birth_year" type="number"
                                                                                    placeholder="year">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-0 mb-3 col-md-12">
                                                                        <div class="row g-3">
                                                                            <div class="col-xxl-6">
                                                                                <label>Personality</label><input
                                                                                    class="form-control"
                                                                                    id="personality" type="text"
                                                                                    required="" autocomplete="off">
                                                                            </div>
                                                                            <div class="col-xxl-6">
                                                                                <label>Interest</label><input
                                                                                    class="form-control" id="interest"
                                                                                    type="text" required=""
                                                                                    autocomplete="off">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 col-md-12"><label>Home
                                                                            Address</label>
                                                                        <div class="row g-3">
                                                                            <div class="col-12">
                                                                                <div class="mb-2"><input
                                                                                        class="form-control"
                                                                                        type="text"
                                                                                        placeholder="Address">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xxl-6">
                                                                                <div class="mb-2"><input
                                                                                        class="form-control"
                                                                                        type="text"
                                                                                        placeholder="City">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xxl-6">
                                                                                <div class="mb-2"><input
                                                                                        class="form-control"
                                                                                        type="text"
                                                                                        placeholder="State">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xxl-6">
                                                                                <div><input class="form-control"
                                                                                        type="text"
                                                                                        placeholder="Country">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xxl-6">
                                                                                <div><input class="form-control"
                                                                                        type="text"
                                                                                        placeholder="Postal code">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><a class="ps-0 edit-information"
                                                                    href="#">Edit more
                                                                    information</a><button
                                                                    class="btn btn-primary update-contact me-2"
                                                                    type="button">Save</button><button
                                                                    class="btn button-light-primary" type="button"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="right-history">
                                        <div class="modal-header p-20">
                                            <h6 class="modal-title w-100">Contact History<span class="pull-right"><a
                                                        class="closehistory" href="#"><i
                                                            class="icofont icofont-close"></i></a></span>
                                            </h6>
                                        </div>
                                        <div class="history-details">
                                            <div class="text-center"><i class="icofont icofont-ui-edit"></i>
                                                <p>Contact has not been modified yet.</p>
                                            </div>
                                            <div class="d-flex"><i class="icofont icofont-star"></i>
                                                <div class="flex-grow-1 mt-0">
                                                    <h6 class="mt-0">Contact Created</h6>
                                                    <p class="mb-0">Contact is created via mail</p><span
                                                        class="f-12 c-light">Sep 10, 2024 4:00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade modal-bookmark" id="printModal" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Print Preview</h5><button class="btn-close"
                                                        type="button" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body list-persons">
                                                    <div class="profile-mail pt-0" id="DivIdToPrint">
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle" id="updateimg"
                                                                src="{{ asset('assets/images/user/2.png') }}"
                                                                alt="">
                                                            <div class="flex-grow-1 mt-0">
                                                                <h5><span id="printname">Bucky</span><span
                                                                        id="printlast">Barnes</span></h5>
                                                                <p id="printmail">barnes@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="email-general">
                                                            <h6>General</h6>
                                                            <p>Email Address: <span class="font-primary"
                                                                    id="mailadd">barnes@gmail.com </span>
                                                            </p>
                                                        </div>
                                                    </div><button class="btn btn-primary" id="btnPrint"
                                                        type="button" onclick="printDiv();">Print</button><button
                                                        class="btn button-light-primary ms-2" type="button"
                                                        data-bs-dismiss="modal">Cancel</button>
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
            <div class="modal fade modal-bookmark" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content custom-input">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5><button class="btn-close"
                                type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="">
                                <div class="row g-3">
                                    <div class="col-sm-6"><label for="con-name">First Name</label><input
                                            class="form-control" id="con-name" type="text" required=""
                                            placeholder="Enter first name" autocomplete="off"></div>
                                    <div class="col-sm-6"> <label for="con-lastName">Last Name</label><input
                                            class="form-control" id="con-lastName" type="text" required=""
                                            placeholder="Enter last name" autocomplete="off"></div>
                                    <div class="col-12"><label for="con-mail">Email Address</label><input
                                            class="form-control" id="con-mail" type="email" required=""
                                            placeholder="pixelstrap@gmail.com" autocomplete="off"></div>
                                    <div class="col-12">
                                        <div class="row g-3">
                                            <div class="col-sm-6"><label for="con-phone">Phone
                                                    Number</label><input class="form-control" id="con-phone"
                                                    type="number" required=""
                                                    placeholder="Enter your phone number" autocomplete="off"></div>
                                            <div class="col-sm-6"><label for="con-category">Contact
                                                    Type</label><select class="form-select" id="con-category"
                                                    required="">
                                                    <option disabled selected value>Choose Contact Type
                                                    </option>
                                                    <option value="mobile">Mobile</option>
                                                    <option value="work">Work</option>
                                                    <option value="others">Others</option>
                                                </select></div>
                                        </div>
                                    </div>
                                </div><input id="index_var" type="hidden" value="5"><button
                                    class="btn btn-primary me-2" type="submit"
                                    onclick="submitContact()">Save</button><button class="btn btn-secondary"
                                    type="button" data-bs-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content custom-input">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Add Category</h5><button class="btn-close"
                                type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-bookmark">
                                <div class="row g-2">
                                    <div class="col-md-12"><input class="form-control" type="text" required=""
                                            placeholder="Enter category name" autocomplete="off"></div>
                                </div><button class="btn btn-primary me-2" type="button">Save</button><button
                                    class="btn button-light-primary" type="button"
                                    data-bs-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/bookmark/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/contacts/custom.js') }}"></script>
    <script src="{{ asset('assets/js/select/bootstrap-select.min.js') }}"></script>
@endsection
