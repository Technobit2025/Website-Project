@extends('layouts.simple.master')

@section('title', 'Apply')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select/bootstrap-select.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Apply</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Jobs</li>
                        <li class="breadcrumb-item active">Apply</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid job-apply-wrapper">
        <div class="row">
            <div class="col-xl-3 xl-40 box-col-12">
                <div class="md-sidebar"><a class="btn btn-primary email-aside-toggle md-sidebar-toggle">Job filter</a>
                    <div class="md-sidebar-aside job-sidebar custom-scrollbar">
                        <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon" aria-expanded="true"
                                                    aria-controls="collapseicon">Filter</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon"
                                            data-bs-parent="#accordion">
                                            <div class="card-body filter-cards-view animate-chk">
                                                <div class="job-filter mb-2">
                                                    <div class="faq-form">
                                                        <input class="form-control" type="text" placeholder="Search.."><i
                                                            class="search-icon" data-feather="search"></i>
                                                    </div>
                                                </div>
                                                <div class="job-filter">
                                                    <div class="faq-form">
                                                        <input class="form-control" type="text"
                                                            placeholder="location.."><i class="search-icon"
                                                            data-feather="map-pin"></i>
                                                    </div>
                                                </div>
                                                <div class="checkbox-animated">
                                                    <div class="form-check">
                                                        <input class="checkbox_animated" id="chk-ani" type="checkbox"
                                                            data-original-title="" title="">
                                                        <label class="form-check-label"
                                                            for="chk-ani"><span>Full-time</span><span
                                                                class="number">(8688)</span></label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="checkbox_animated" id="chk-ani1" type="checkbox"
                                                            data-original-title="" title="">
                                                        <label class="form-check-label"
                                                            for="chk-ani1"><span>Contract</span><span
                                                                class="number">(503)</span></label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="checkbox_animated" id="chk-ani2" type="checkbox"
                                                            data-original-title="" title="">
                                                        <label class="form-check-label"
                                                            for="chk-ani2"><span>Part-time</span><span
                                                                class="number">(288)</span></label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="checkbox_animated" id="chk-ani3" type="checkbox"
                                                            data-original-title="" title="">
                                                        <label class="form-check-label"
                                                            for="chk-ani3"><span>Internship</span><span
                                                                class="number">(236)</span></label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="checkbox_animated" id="chk-ani4" type="checkbox"
                                                            data-original-title="" title="">
                                                        <label class="form-check-label"
                                                            for="chk-ani4"><span>Temporary</span><span
                                                                class="number">(146)</span></label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="checkbox_animated" id="chk-ani5" type="checkbox"
                                                            data-original-title="" title="">
                                                        <label class="form-check-label"
                                                            for="chk-ani5"><span>Commission</span><span
                                                                class="number">(25)</span></label>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary text-center" type="button">Find
                                                    jobs</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon1" aria-expanded="true"
                                                    aria-controls="collapseicon1">Location</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon1" aria-labelledby="collapseicon1"
                                            data-bs-parent="#accordion">
                                            <div class="card-body animate-chk">
                                                <div class="location-checkbox">
                                                    <label class="d-block" for="chk-ani6">
                                                        <input class="checkbox_animated" id="chk-ani6" type="checkbox">
                                                        New York<span class="d-block">NY (399)</span>
                                                    </label>
                                                    <label class="d-block" for="chk-ani7">
                                                        <input class="checkbox_animated" id="chk-ani7" type="checkbox">
                                                        San Francisco<span class="d-block">CA (252)</span>
                                                    </label>
                                                    <label class="d-block" for="chk-ani8">
                                                        <input class="checkbox_animated" id="chk-ani8" type="checkbox">
                                                        Washington<span class="d-block">DC (226)</span>
                                                    </label>
                                                    <label class="d-block" for="chk-ani9">
                                                        <input class="checkbox_animated" id="chk-ani9" type="checkbox">
                                                        Seattle<span class="d-block">WA (242)</span>
                                                    </label>
                                                    <label class="d-block" for="chk-ani10">
                                                        <input class="checkbox_animated" id="chk-ani10" type="checkbox">
                                                        Chicago<span class="d-block">IL (187)</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <button class="btn btn-block btn-primary text-center" type="button">All
                                                Locations</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon2" aria-expanded="true"
                                                    aria-controls="collapseicon2">Job Title</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon2" data-bs-parent="#accordion"
                                            aria-labelledby="collapseicon2">
                                            <div class="card-body animate-chk">
                                                <div class="form-check">
                                                    <input class="checkbox_animated" id="chk-ani11" type="checkbox"
                                                        data-original-title="" title="">
                                                    <label class="form-check-label" for="chk-ani11"><span>UI/UX
                                                            Designer</span><span class="number">(25)</span></label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="checkbox_animated" id="chk-ani12" type="checkbox"
                                                        data-original-title="" title="">
                                                    <label class="form-check-label" for="chk-ani12"><span>Graphic
                                                            Designer</span><span class="number">(10)</span></label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="checkbox_animated" id="chk-ani13" type="checkbox"
                                                        data-original-title="" title="">
                                                    <label class="form-check-label" for="chk-ani13"><span>Front-end
                                                            Designer</span><span class="number">(15)</span></label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="checkbox_animated" id="chk-ani14" type="checkbox"
                                                        data-original-title="" title="">
                                                    <label class="form-check-label" for="chk-ani14"><span>PHP
                                                            Developer</span><span class="number">(42)</span></label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="checkbox_animated" id="chk-ani15" type="checkbox"
                                                        data-original-title="" title="">
                                                    <label class="form-check-label" for="chk-ani15"><span>React
                                                            Developer</span><span class="number">(5)</span></label>
                                                </div>
                                            </div>
                                            <button class="btn btn-block btn-primary text-center" type="button">All Job
                                                Title</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon3" aria-expanded="true"
                                                    aria-controls="collapseicon3">Industry</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon3" data-bs-parent="#accordion"
                                            aria-labelledby="collapseicon3">
                                            <div class="card-body animate-chk">
                                                <div class="form-check">
                                                    <input class="checkbox_animated" id="chk-ani16" type="checkbox"
                                                        data-original-title="" title="">
                                                    <label class="form-check-label" for="chk-ani16"><span>Computer
                                                            Software</span><span class="number">(14)</span></label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="checkbox_animated" id="chk-ani17" type="checkbox"
                                                        data-original-title="" title="">
                                                    <label class="form-check-label" for="chk-ani17"><span>IT
                                                            Engineer</span><span class="number">(10)</span></label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="checkbox_animated" id="chk-ani18" type="checkbox"
                                                        data-original-title="" title="">
                                                    <label class="form-check-label" for="chk-ani18"><span>Service
                                                            Industry</span><span class="number">(20)</span></label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="checkbox_animated" id="chk-ani19" type="checkbox"
                                                        data-original-title="" title="">
                                                    <label class="form-check-label"
                                                        for="chk-ani19"><span>Accounting</span><span
                                                            class="number">(34)</span></label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="checkbox_animated" id="chk-ani20" type="checkbox"
                                                        data-original-title="" title="">
                                                    <label class="form-check-label" for="chk-ani20"><span>Financial
                                                            Services</span><span class="number">(5)</span></label>
                                                </div>
                                            </div>
                                            <button class="btn btn-block btn-primary text-center" type="button">All
                                                Industries</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon4" aria-expanded="true"
                                                    aria-controls="collapseicon4">Specific Skills</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon4" data-bs-parent="#accordion"
                                            aria-labelledby="collapseicon4">
                                            <div class="card-body animate-chk">
                                                <div class="form-check">
                                                    <input class="checkbox_animated" id="chk-ani21" type="checkbox"
                                                        data-original-title="" title="">
                                                    <label class="form-check-label" for="chk-ani21"><span>HTML,SCSS &
                                                            SASS</span></label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="checkbox_animated" id="chk-ani22" type="checkbox"
                                                        data-original-title="" title="">
                                                    <label class="form-check-label"
                                                        for="chk-ani22"><span>Javascript</span></label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="checkbox_animated" id="chk-ani23" type="checkbox"
                                                        data-original-title="" title="">
                                                    <label class="form-check-label"
                                                        for="chk-ani23"><span>Node.js</span></label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="checkbox_animated" id="chk-ani25" type="checkbox"
                                                        data-original-title="" title="">
                                                    <label class="form-check-label" for="chk-ani25"><span>Gulp &
                                                            Pug</span></label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="checkbox_animated" id="chk-ani26" type="checkbox"
                                                        data-original-title="" title="">
                                                    <label class="form-check-label"
                                                        for="chk-ani26"><span>Angular.js</span></label>
                                                </div>
                                            </div>
                                            <button class="btn btn-block btn-primary text-center" type="button">All
                                                Skills</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 xl-60 box-col-12">
                <div class="card">
                    <div class="job-search">
                        <div class="card-body pb-0">
                            <div class="d-flex"><img class="img-40 img-fluid m-r-20"
                                    src="{{ asset('assets/images/job-search/1.jpg') }}" alt="">
                                <div class="flex-grow-1">
                                    <h6><a href="#">UI Designer</a><span class="pull-right">
                                            <button class="btn btn-primary" type="button"><span><i
                                                        class="fa-solid fa-check text-white me-1"></i></span> Save this
                                                job</button></span></h6>
                                    <p class="mt-0">Endless Telecom & Technologies , NY<span><i
                                                class="fa-solid fa-star font-warning"></i><i
                                                class="fa-solid fa-star font-warning"></i><i
                                                class="fa-solid fa-star font-warning"></i><i
                                                class="fa-solid fa-star font-warning"></i><i
                                                class="fa-solid fa-star font-warning"></i></span></p>
                                </div>
                            </div>
                            <div class="job-description">
                                <h6 class="mb-0">Personal Details </h6>
                                <form class="form theme-form custom-input">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlInput1">Full Name:<span
                                                        class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput1" type="text"
                                                    placeholder="Enter your full name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlInput3">Email:<span
                                                        class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput3" type="email"
                                                    placeholder="Enter email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlpassword">Password:<span
                                                        class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlpassword"
                                                    type="password" placeholder="Enter password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlpassword1">Repeat
                                                    Password:<span class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlpassword1"
                                                    type="password" placeholder="Repeat password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row select-date">
                                        <div class="col-12">
                                            <div class="col-form-label pt-0">Birth Date</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <div class="col-form-label">
                                                    <select class="col-sm-12 selectpicker"
                                                        aria-label="Default select example" data-live-search="true">
                                                        <optgroup label="Month">
                                                            <option value="Jan">January</option>
                                                            <option value="Feb" selected>February</option>
                                                            <option value="Mar">March</option>
                                                            <option value="Apr">April</option>
                                                            <option value="May">May</option>
                                                            <option value="Jun">June</option>
                                                            <option value="Jul">July</option>
                                                            <option value="Aug">August</option>
                                                            <option value="Sep">September</option>
                                                            <option value="Oct">October</option>
                                                            <option value="Nov">November</option>
                                                            <option value="Dec">December</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <div class="col-form-label">
                                                    <select class="col-sm-12 selectpicker"
                                                        aria-label="Default select example" data-live-search="true">
                                                        <optgroup label="Day">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <div class="col-form-label">
                                                    <select class="col-sm-12 selectpicker"
                                                        aria-label="Default select example" data-live-search="true">
                                                        <optgroup label="Year">
                                                            <option value="1985">1985</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1999">1999</option>
                                                            <option value="2000">2000</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlInput4">Phone
                                                    Number:</label>
                                                <input class="form-control" id="exampleFormControlInput4" type="number"
                                                    placeholder="Enter Phone no.">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <h6 class="mb-0">Your Education</h6>
                                <form class="form theme-form">
                                    <div class="row select-date">
                                        <div class="col-xl-6 xl-100">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlInput5">College
                                                    Name:<span class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput5" type="text"
                                                    placeholder="Enter college name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 xl-100 xl-mt-job">
                                            <label class="col-form-label text-end pt-0">Period:<span
                                                    class="font-danger">*</span></label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <input class="datepicker-here form-control digits" type="text"
                                                            data-language="en" placeholder="Start Date">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 xs-mt-period">
                                                    <div class="input-group">
                                                        <input class="datepicker-here form-control digits" type="text"
                                                            data-language="en" placeholder="End Date">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 xl-100">
                                            <div class="mb-3">
                                                <div class="col-form-label pt-0">Degree Level:<span
                                                        class="font-danger">*</span></div>
                                                <select class="col-sm-12 selectpicker" aria-label="Default select example"
                                                    data-live-search="true">
                                                    <optgroup label="Choose a Option">
                                                        <option value="student">Student</option>
                                                        <option value="Bachelor">Bachelor</option>
                                                        <option value="Master">Master</option>
                                                        <option value="Associate">Associate</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 xl-100">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="exampleFormControlInput6">Specialization:<span
                                                        class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput6" type="text"
                                                    placeholder="Enter specialization">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <h6 class="mb-0">Your Experience</h6>
                                <form class="form theme-form">
                                    <div class="row select-date custom-input">
                                        <div class="col-xl-6 xl-100">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlInput7">Location:<span
                                                        class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput7" type="text"
                                                    placeholder="Enter Location">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 xl-100 xl-mt-job">
                                            <label class="col-form-label text-end pt-0">Period:<span
                                                    class="font-danger">*</span></label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <input class="datepicker-here form-control digits" type="text"
                                                            data-language="en" placeholder="Start Date">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 xs-mt-period">
                                                    <div class="input-group">
                                                        <input class="datepicker-here form-control digits" type="text"
                                                            data-language="en" placeholder="End Date">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 xl-100">
                                            <div class="mb-3">
                                                <div class="col-form-label pt-0">Position:<span
                                                        class="font-danger">*</span></div>
                                                <select class="col-sm-12 selectpicker" aria-label="Default select example"
                                                    data-live-search="true">
                                                    <optgroup label="Enter Position">
                                                        <option value="position">Choose a option</option>
                                                        <option value="Web designer">Web Designer</option>
                                                        <option value="Graphic designer">Graphic Designer</option>
                                                        <option value="UI designer">UI Designer</option>
                                                        <option value="UI/UX designer">UI/UX Designer</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 xl-100">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlInput8">Company
                                                    Name:<span class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput8" type="email"
                                                    placeholder="Enter Company Name">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <h6 class="mb-0">Upload Your Files</h6>
                                <form class="form theme-form">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="col-form-label pt-0">Upload Cover Letter:<span
                                                        class="font-danger">*</span></label>
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="col-form-label pt-0">Upload Your CV:<span
                                                        class="font-danger">*</span></label>
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div>
                                                <label class="col-form-label pt-0">Upload Recommendations:</label>
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer common-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <input class="btn btn-light" type="reset" value="Cancel">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select/bootstrap-select.min.js') }}"></script>
@endsection
