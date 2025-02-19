@extends('layouts.simple.master')

@section('title', 'Candidates')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Candidates</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Jobs</li>
                        <li class="breadcrumb-item active">Candidates</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid candidate-wrapper">
        <div class="row g-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl col-md-4 col-sm-6">
                                <label class="form-label">Location</label>
                                <select class="form-select" aria-label="Select location">
                                    <option selected="">Australia</option>
                                    <option value="1">Japan</option>
                                    <option value="2">Brazil</option>
                                    <option value="3">Egypt </option>
                                    <option value="4">India</option>
                                    <option value="5">Norway</option>
                                    <option value="6">Spain</option>
                                </select>
                            </div>
                            <div class="col-xl col-md-4 col-sm-6">
                                <label class="form-label">Skills</label>
                                <select class="form-select" aria-label="Select parent category">
                                    <option selected="">Senior Data Scientist</option>
                                    <option value="1">Web Designer</option>
                                    <option value="2">Software Engineer</option>
                                    <option value="3">Wordpress Developer</option>
                                    <option value="4">UI/UX Designer</option>
                                </select>
                            </div>
                            <div class="col-xl col-md-4 col-sm-6">
                                <label class="form-label">Salary</label>
                                <select class="form-select" aria-label="Select parent category">
                                    <option selected="">Under $1000</option>
                                    <option value="1">$2000-3000</option>
                                    <option value="2">$4000-8000</option>
                                    <option value="3">$10000-40000</option>
                                    <option value="4">$120000-$340000</option>
                                </select>
                            </div>
                            <div class="col-xl col-md-4 col-sm-6">
                                <label class="form-label">Experience</label>
                                <select class="form-select" aria-label="Select your experience">
                                    <option selected="">Fresher</option>
                                    <option value="1">1-2 Years</option>
                                    <option value="2">3-5 Years</option>
                                    <option value="3">6-10 Years</option>
                                    <option value="4">16+ Years</option>
                                </select>
                            </div>
                            <div class="col common-f-start"><a class="btn btn-primary f-w-500" href="#!">Filter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body candidates-box px-0">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table" id="candidates-table">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Candidate Name</th>
                                        <th>Description</th>
                                        <th>Educations</th>
                                        <th>Experience & Skills</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard/user/6.jpg') }}"
                                                        alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-success"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Margo Harrell</a>
                                                    <p>Texas,US</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>03
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Software Engineer</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$40000-80000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2011-2013</p>
                                                    <p class="mb-0">High School 2009-2010</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>Fresher</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span
                                                            class="badge badge-light-primary">Java</span><span
                                                            class="badge badge-light-warning">C#</span><span
                                                            class="badge badge-light-secondary">Kotlin</span><span
                                                            class="badge badge-light-success">.NET</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"></i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard/user/7.jpg') }}"
                                                        alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-warning"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Carolyn Doyle</a>
                                                    <p>Alberta,Canada</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>06
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Network Engineer</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$120000-340000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Master's Degree 2012-2015</p>
                                                    <p class="mb-0">Bachelor's Degree 2009-2011</p>
                                                    <p class="mb-0">High School 2002-2008</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>2+ Year</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span
                                                            class="badge badge-light-primary">CCNA</span><span
                                                            class="badge badge-light-warning">Linux</span><span
                                                            class="badge badge-light-secondary">OSCP</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"></i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard/user/9.jpg') }}"
                                                        alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-danger"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Brynlee Everett</a>
                                                    <p>Victoria,Australia</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>04
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Web Designer</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$20000-30000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2013-2015</p>
                                                    <p class="mb-0">High School 2001-2012</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>1 Year</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span
                                                            class="badge badge-light-primary">HTML</span><span
                                                            class="badge badge-light-warning">CSS</span><span
                                                            class="badge badge-light-secondary">JS</span><span
                                                            class="badge badge-light-success">Jquery</span><span
                                                            class="badge badge-light-danger">Bootstrap 5</span><span
                                                            class="badge badge-light-warning">Figma</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"> </i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                        alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-success"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Anderson Porter</a>
                                                    <p>Wales,UK</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>03
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Back-End Developer</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$40000-80000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2015-2018</p>
                                                    <p class="mb-0">High School 2003-2014</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>1 Year</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span
                                                            class="badge badge-light-primary">Node.js</span><span
                                                            class="badge badge-light-warning">Express</span><span
                                                            class="badge badge-light-secondary">MongoDB</span><span
                                                            class="badge badge-light-success">SQL</span><span
                                                            class="badge badge-light-danger">Rest APIs</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"></i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard-9/user/1.png') }}"
                                                        alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-warning"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Rome Gordon</a>
                                                    <p>Wales,UK</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>03
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>UX/UI Designer</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$40000-80000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2022-2024</p>
                                                    <p class="mb-0">High School 2010-2021</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>1 Year</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span class="badge badge-light-primary">Adobe
                                                            XD</span><span
                                                            class="badge badge-light-warning">Sketch</span><span
                                                            class="badge badge-light-secondary">Figma</span><span
                                                            class="badge badge-light-success">Prototyping</span><span
                                                            class="badge badge-light-danger">User Research</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"> </i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                        alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-danger"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Elina Huang</a>
                                                    <p>Eastern Cape,Africa</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>02
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Blockchain Developer</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$10000-40000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Master's Degree 2026-2028</p>
                                                    <p class="mb-0">Bachelor's Degree 2023-2025</p>
                                                    <p class="mb-0">High School 2011-2022</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>2+ Year</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span
                                                            class="badge badge-light-primary">Solidity</span><span
                                                            class="badge badge-light-warning">Ethereum</span><span
                                                            class="badge badge-light-secondary">Smart Contracts</span><span
                                                            class="badge badge-light-success">Hyperledger</span><span
                                                            class="badge badge-light-danger">Cryptography</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"> </i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard-9/user/4.png') }}"
                                                        alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-success"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Rosie Myers</a>
                                                    <p>Tokyo,Japan</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>01
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Network Engineer</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$120000-$340000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Master's Degree 2024-2026</p>
                                                    <p class="mb-0">Bachelor's Degree 2021-2023</p>
                                                    <p class="mb-0">High School 2008-2020</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>5+ Year</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span
                                                            class="badge badge-light-primary">Cisco</span><span
                                                            class="badge badge-light-warning">Routing</span><span
                                                            class="badge badge-light-secondary">Switching</span><span
                                                            class="badge badge-light-success">Network Security</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"> </i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard-9/user/5.png') }}"
                                                        alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-warning"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Warren Buck</a>
                                                    <p>Beijing,China</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>06
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>DevOps Engineer</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$120000-$340000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2009-2012</p>
                                                    <p class="mb-0">High School 1999-2008</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>3+ Year</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span
                                                            class="badge badge-light-primary">Docker</span><span
                                                            class="badge badge-light-warning">Kubernetes</span><span
                                                            class="badge badge-light-secondary">Jenkins</span><span
                                                            class="badge badge-light-success">CI/CD</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"> </i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                        alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-danger"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Derek Pollard</a>
                                                    <p>Bahia,Brazil</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>02
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Project Manager</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$2000-$3000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2017-2019</p>
                                                    <p class="mb-0">High School 2003-2016</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>Fresher</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span
                                                            class="badge badge-light-primary">Project Planning</span><span
                                                            class="badge badge-light-warning">Agile</span><span
                                                            class="badge badge-light-secondary">Risk Management</span><span
                                                            class="badge badge-light-success">Stakeholder Management</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"> </i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard/user/5.jpg') }}"
                                                        alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-success"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Lucy Brock</a>
                                                    <p>Queensland,Australia</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>03
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>AI/ML Engineer</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$10000-$40000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2018-2020</p>
                                                    <p class="mb-0">High School 2004-2017</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>Fresher</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span
                                                            class="badge badge-light-primary">Keras</span><span
                                                            class="badge badge-light-warning">Python</span><span
                                                            class="badge badge-light-secondary">TensorFlow</span><span
                                                            class="badge badge-light-success">TensorFlow</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"></i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard/user/7.jpg') }}"
                                                        alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-warning"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Sydney McMillan</a>
                                                    <p>Mpumalanga,Africa</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>03
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Quality Assurance Tester</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$10000-$40000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2018-2020</p>
                                                    <p class="mb-0">High School 2004-2017</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>2+ Year</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span class="badge badge-light-primary">Bug
                                                            Tracking</span><span class="badge badge-light-warning">Test
                                                            Cases</span><span
                                                            class="badge badge-light-secondary">JUnit</span><span
                                                            class="badge badge-light-success">Selenium</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"> </i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard/user/10.jpg') }}"
                                                        alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-danger"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Kylan Avalos</a>
                                                    <p>Manitoba,Canada</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>01
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Software Engineer</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$10000-$40000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2021-2023</p>
                                                    <p class="mb-0">High School 2006-2020</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>Fresher</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span
                                                            class="badge badge-light-primary">Python</span><span
                                                            class="badge badge-light-warning">Agile
                                                            Methodologies</span><span
                                                            class="badge badge-light-secondary">Git</span><span
                                                            class="badge badge-light-success">Java</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"> </i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                        alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-success"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Zoe Banks</a>
                                                    <p>West Bengal,India</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>02
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Business Analyst</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$4000-$8000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2020-2022</p>
                                                    <p class="mb-0">High School 2010-2019</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>Fresher</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span
                                                            class="badge badge-light-primary">SQL</span><span
                                                            class="badge badge-light-warning">Data Analysis</span><span
                                                            class="badge badge-light-secondary">Process Mapping</span><span
                                                            class="badge badge-light-success">UML</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"></i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard/user/13.jpg') }}"
                                                        alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-warning"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Karter Oliver</a>
                                                    <p>Florida,US</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>09
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Full-Stack Developer</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$10000-$40000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2014-2016</p>
                                                    <p class="mb-0">High School 2005-2013</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>8+ Year</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span class="badge badge-light-primary">HTML
                                                        </span><span class="badge badge-light-warning">CSS</span><span
                                                            class="badge badge-light-secondary">JavaScript</span><span
                                                            class="badge badge-light-success">Node.js</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"> </i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                        alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-danger"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Yasmin Collins</a>
                                                    <p>Illinois,US</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>12
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Game Developer</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$10000-$40000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2013-2015</p>
                                                    <p class="mb-0">High School 2002-2012</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>3+ Year</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span class="badge badge-light-primary">Game
                                                            Design </span><span
                                                            class="badge badge-light-warning">C++</span><span
                                                            class="badge badge-light-secondary">C#</span><span
                                                            class="badge badge-light-success">Unity</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"> </i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/user/14.png') }}" alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-success"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Kingston Bravo</a>
                                                    <p>Bahia,Brazil</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>05
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Digital Marketing Specialist</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span class="f-14">Under
                                                            $1000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2020-2022</p>
                                                    <p class="mb-0">High School 2007-2019</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>1 Year</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span
                                                            class="badge badge-light-primary">Content Marketing</span><span
                                                            class="badge badge-light-warning">Social Media</span><span
                                                            class="badge badge-light-secondary">Google
                                                            Analytics</span><span
                                                            class="badge badge-light-success">SEO</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"> </i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/user/10.jpg') }}" alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-warning"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Avayah Ashley</a>
                                                    <p>Hesse,Germany</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>02
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Database Administrator</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$10000-$40000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2022-2025</p>
                                                    <p class="mb-0">High School 2009-2021</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>2+ Year</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span
                                                            class="badge badge-light-primary">MySQL</span><span
                                                            class="badge badge-light-warning">PostgreSQL</span><span
                                                            class="badge badge-light-secondary">Oracle</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"> </i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/user/12.png') }}" alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-success"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Alexia Tran</a>
                                                    <p>California,US</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>04
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Mobile App Developer</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$10000-$40000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2021-2024</p>
                                                    <p class="mb-0">High School 2008-2020</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>Fresher</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span
                                                            class="badge badge-light-primary">Objective-C</span><span
                                                            class="badge badge-light-warning">React Native</span><span
                                                            class="badge badge-light-secondary">Kotlin</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"> </i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/user/3.png') }}" alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-success"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Nadia Choi</a>
                                                    <p>Manitoba,Canada</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>02
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>Quality Assurance Tester</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span
                                                            class="f-14">$120000-$340000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2006-2008</p>
                                                    <p class="mb-0">High School 1995-2005</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>9+ Year</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span class="badge badge-light-primary">Bug
                                                            Tracking</span><span class="badge badge-light-warning">Test
                                                            Cases</span><span
                                                            class="badge badge-light-secondary">Selenium</span></div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"> </i></Button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="common-flex align-items-center">
                                                <div class="position-relative"><img class="img-fluid rounded-circle"
                                                        src="{{ asset('assets/images/user/6.jpg') }}" alt="user">
                                                    <div class="status">
                                                        <div class="inner-dot bg-success"></div>
                                                    </div>
                                                </div>
                                                <div><a class="f-w-500" href="#!">Miles Ibarra</a>
                                                    <p>Zhejiang,China</p>
                                                </div>
                                            </div>
                                            <div class="common-f-start">
                                                <div class="attachment"><i class="fa-solid fa-paperclip"></i><span>01
                                                        Projects</span></div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="candidate-desc">
                                                <li>
                                                    <h6>IT Support Specialist</h6>
                                                </li>
                                                <li>
                                                    <h6 class="c-light">Salary Range: <span class="f-14">Under
                                                            $1000</span></h6>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="educations">
                                                <li>
                                                    <p class="mb-0">Bachelor's Degree 2012-2014</p>
                                                    <p class="mb-0">High School 2000-2011</p>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="candidate-skill">
                                                <li>
                                                    <p class="mb-2">Experience : <span>2+ Year</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-flex"><span
                                                            class="badge badge-light-primary">Networking</span><span
                                                            class="badge badge-light-warning">Customer Support</span><span
                                                            class="badge badge-light-secondary">Troubleshooting</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <Button class="btn btn-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Message"> <i
                                                        class="fa-solid fa-envelope"></i></Button>
                                                <Button class="btn btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Approve"><i
                                                        class="fa-solid fa-thumbs-up"></i></Button>
                                                <Button class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Reject"><i
                                                        class="fa-solid fa-circle-xmark"> </i></Button>
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
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
