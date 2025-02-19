@extends('layouts.simple.master')

@section('title', 'Companies')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Companies</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item"> Jobs</li>
                        <li class="breadcrumb-item active">Companies</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid main-companies">
        <div class="row">
            <div class="col-xl-3 xl-4 box-col-12">
                <div class="md-sidebar"> <a class="btn btn-primary email-aside-toggle md-sidebar-toggle">Filters</a>
                    <div class="md-sidebar-aside job-sidebar custom-scrollbar">
                        <div class="card">
                            <div class="card-header">
                                <h5>Filters</h5>
                            </div>
                            <div class="card-body filter-companies">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">Industry<i class="svg-color"
                                                    data-feather="chevron-down"></i></button>
                                        </h2>
                                        <div class="accordion-collapse collapse show" id="collapseOne">
                                            <div class="accordion-body">
                                                <div class="product-filter">
                                                    <div class="checkbox-animated mt-0">
                                                        <div class="form-check">
                                                            <input class="checkbox_animated" id="chk-ani" type="checkbox"
                                                                data-original-title="" title="">
                                                            <label class="form-check-label" for="chk-ani"><span>Media &
                                                                    Entertainment</span><span
                                                                    class="number">(04)</span></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="checkbox_animated" id="chk-ani1" type="checkbox"
                                                                data-original-title="" title="">
                                                            <label class="form-check-label" for="chk-ani1"><span>Chemical
                                                                    Industry</span><span class="number">(01)</span></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="checkbox_animated" id="chk-ani2" type="checkbox"
                                                                data-original-title="" title="">
                                                            <label class="form-check-label" for="chk-ani2"><span>Civil
                                                                    Industry</span><span class="number">(01)</span></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="checkbox_animated" id="chk-ani3" type="checkbox"
                                                                data-original-title="" title="">
                                                            <label class="form-check-label" for="chk-ani3"><span>IT
                                                                    Consulting & Services</span><span
                                                                    class="number">(35)</span></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="checkbox_animated" id="chk-ani4" type="checkbox"
                                                                data-original-title="" title="">
                                                            <label class="form-check-label" for="chk-ani4"><span>Healthcare
                                                                    Technology</span><span
                                                                    class="number">(10)</span></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="checkbox_animated" id="chk-ani5" type="checkbox"
                                                                data-original-title="" title="">
                                                            <label class="form-check-label"
                                                                for="chk-ani5"><span>Manufacturing Industry</span><span
                                                                    class="number">(25)</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">Company List<i class="svg-color"
                                                    data-feather="chevron-down"></i></button>
                                        </h2>
                                        <div class="accordion-collapse collapse show" id="collapseTwo">
                                            <div class="accordion-body">
                                                <div class="product-filter">
                                                    <div class="checkbox-animated mt-0">
                                                        <label class="d-block" for="chk-ani6">
                                                            <input class="checkbox_animated" id="chk-ani6"
                                                                type="checkbox" data-original-title=""
                                                                title="">Wonder Finds
                                                        </label>
                                                        <label class="d-block" for="chk-ani7">
                                                            <input class="checkbox_animated" id="chk-ani7"
                                                                type="checkbox" data-original-title=""
                                                                title="">Kilback
                                                        </label>
                                                        <label class="d-block" for="chk-ani8">
                                                            <input class="checkbox_animated" id="chk-ani8"
                                                                type="checkbox" data-original-title=""
                                                                title="">Gadget Grove
                                                        </label>
                                                        <label class="d-block" for="chk-ani9">
                                                            <input class="checkbox_animated" id="chk-ani9"
                                                                type="checkbox" data-original-title=""
                                                                title="">Liehook
                                                        </label>
                                                        <label class="d-block" for="chk-ani10">
                                                            <input class="checkbox_animated" id="chk-ani10"
                                                                type="checkbox" data-original-title=""
                                                                title="">Appzea
                                                        </label>
                                                        <label class="d-block" for="chk-ani11">
                                                            <input class="checkbox_animated" id="chk-ani11"
                                                                type="checkbox" data-original-title=""
                                                                title="">Cliinch
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">Rating<i class="svg-color"
                                                    data-feather="chevron-down"></i></button>
                                        </h2>
                                        <div class="accordion-collapse collapse show" id="collapseThree">
                                            <div class="accordion-body">
                                                <div class="product-filter">
                                                    <div class="checkbox-animated mt-0 product-rate">
                                                        <div class="form-check">
                                                            <input class="checkbox_animated" id="chk-ani12"
                                                                type="checkbox" data-original-title="" title="">
                                                            <label class="form-check-label" for="chk-ani12"><span
                                                                    class="common-flex"><i
                                                                        class="fa-solid fa-star fill"></i><i
                                                                        class="fa-solid fa-star fill"></i><i
                                                                        class="fa-solid fa-star fill"></i><i
                                                                        class="fa-solid fa-star fill"></i><i
                                                                        class="fa-solid fa-star fill"></i></span><span
                                                                    class="number">(5 Star)</span></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="checkbox_animated" id="chk-ani13"
                                                                type="checkbox" data-original-title="" title="">
                                                            <label class="form-check-label" for="chk-ani13"><span
                                                                    class="common-flex"><i
                                                                        class="fa-solid fa-star fill"></i><i
                                                                        class="fa-solid fa-star fill"></i><i
                                                                        class="fa-solid fa-star fill"></i><i
                                                                        class="fa-solid fa-star fill"></i><i
                                                                        class="fa-regular fa-star fill"></i></span><span
                                                                    class="number">(4 Star)</span></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="checkbox_animated" id="chk-ani14"
                                                                type="checkbox" data-original-title="" title="">
                                                            <label class="form-check-label" for="chk-ani14"><span
                                                                    class="common-flex"><i
                                                                        class="fa-solid fa-star fill"></i><i
                                                                        class="fa-solid fa-star fill"></i><i
                                                                        class="fa-solid fa-star fill"></i><i
                                                                        class="fa-regular fa-star fill"></i><i
                                                                        class="fa-regular fa-star fill"></i></span><span
                                                                    class="number">(3 Star)</span></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="checkbox_animated" id="chk-ani15"
                                                                type="checkbox" data-original-title="" title="">
                                                            <label class="form-check-label" for="chk-ani15"><span
                                                                    class="common-flex"><i
                                                                        class="fa-solid fa-star fill"></i><i
                                                                        class="fa-solid fa-star fill"></i><i
                                                                        class="fa-regular fa-star fill"></i><i
                                                                        class="fa-regular fa-star fill"></i><i
                                                                        class="fa-regular fa-star fill"></i></span><span
                                                                    class="number">(2 Star)</span></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="checkbox_animated" id="chk-ani16"
                                                                type="checkbox" data-original-title="" title="">
                                                            <label class="form-check-label" for="chk-ani16"><span
                                                                    class="common-flex"><i
                                                                        class="fa-solid fa-star fill"></i><i
                                                                        class="fa-regular fa-star fill"></i><i
                                                                        class="fa-regular fa-star fill"></i><i
                                                                        class="fa-regular fa-star fill"></i><i
                                                                        class="fa-regular fa-star fill"></i></span><span
                                                                    class="number">(1 Star)</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">Employee Range<i class="svg-color"
                                                    data-feather="chevron-down"></i></button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="collapseFour">
                                            <div class="accordion-body">
                                                <div class="product-filter">
                                                    <div class="checkbox-animated mt-0">
                                                        <label class="d-block" for="chk-ani17">
                                                            <input class="checkbox_animated" id="chk-ani17"
                                                                type="checkbox" data-original-title=""
                                                                title="">0-50 Employees
                                                        </label>
                                                        <label class="d-block" for="chk-ani18">
                                                            <input class="checkbox_animated" id="chk-ani18"
                                                                type="checkbox" data-original-title=""
                                                                title="">51-200 Employees
                                                        </label>
                                                        <label class="d-block" for="chk-ani19">
                                                            <input class="checkbox_animated" id="chk-ani19"
                                                                type="checkbox" data-original-title=""
                                                                title="">201-500 Employees
                                                        </label>
                                                        <label class="d-block" for="chk-ani20">
                                                            <input class="checkbox_animated" id="chk-ani20"
                                                                type="checkbox" data-original-title=""
                                                                title="">501-1000 Employees
                                                        </label>
                                                        <label class="d-block" for="chk-ani21">
                                                            <input class="checkbox_animated" id="chk-ani21"
                                                                type="checkbox" data-original-title=""
                                                                title="">1000-5000 Employees
                                                        </label>
                                                        <label class="d-block" for="chk-ani22">
                                                            <input class="checkbox_animated" id="chk-ani22"
                                                                type="checkbox" data-original-title=""
                                                                title="">5001-10000 Employees
                                                        </label>
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
            <div class="col-xl-9 xl-66 box-col-12">
                <div class="row">
                    <div class="col-xxl-3 xl-50 col-md-4 col-sm-6 box-col-4">
                        <div class="card height-equal">
                            <div class="card-body">
                                <div class="company-box">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#logo-8') }}"></use>
                                    </svg>
                                    <div class="company-name">
                                        <h6>Appzea</h6>
                                        <div class="main-star-rating">
                                            <div class="common-flex star-box justify-content-center"><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="mb-2 c-o-light">45.6K+ Reviews</p>
                                        <div class="company-category bg-light-primary txt-primary"><i
                                                class="fa-solid fa-tag fa-flip-horizontal"></i><span>E-commerce</span>
                                        </div>
                                        <div class="company-desc">
                                            <p>Empowering businesses through innovative data analytics</p>
                                        </div><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.job_list_view') }}">Jobs
                                            Posted <span>(03)</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 xl-50 col-md-4 col-sm-6 box-col-4">
                        <div class="card height-equal">
                            <div class="card-body">
                                <div class="company-box">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#logo-4') }}"></use>
                                    </svg>
                                    <div class="company-name">
                                        <h6>Liourt</h6>
                                        <div class="main-star-rating">
                                            <div class="common-flex star-box justify-content-center"><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i></div>
                                        </div>
                                        <p class="mb-2 c-o-light">500+ Reviews</p>
                                        <div class="company-category bg-light-primary txt-primary"><i
                                                class="fa-solid fa-tag fa-flip-horizontal"></i><span>Development</span>
                                        </div>
                                        <div class="company-desc">
                                            <p>Wide range of technology-driven solutions for different sectors</p>
                                        </div><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.job_list_view') }}">Jobs
                                            Posted <span>(10)</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 xl-50 col-md-4 col-sm-6 box-col-4">
                        <div class="card height-equal">
                            <div class="card-body">
                                <div class="company-box">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#logo-15') }}"></use>
                                    </svg>
                                    <div class="company-name">
                                        <h6>Doloh</h6>
                                        <div class="main-star-rating">
                                            <div class="common-flex star-box justify-content-center"><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="mb-2 c-o-light">1000+ Reviews</p>
                                        <div class="company-category bg-light-primary txt-primary"><i
                                                class="fa-solid fa-tag fa-flip-horizontal"></i><span>Medical</span></div>
                                        <div class="company-desc">
                                            <p>Focused on innovation, quality, and delivering values</p>
                                        </div><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.job_list_view') }}">Jobs
                                            Posted <span>(08)</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 xl-50 col-md-4 col-sm-6 box-col-4">
                        <div class="card height-equal">
                            <div class="card-body">
                                <div class="company-box">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#logo-5') }}"></use>
                                    </svg>
                                    <div class="company-name">
                                        <h6>Cliinch</h6>
                                        <div class="main-star-rating">
                                            <div class="common-flex star-box justify-content-center"><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i></div>
                                        </div>
                                        <p class="mb-2 c-o-light">50.4K+ Reviews</p>
                                        <div class="company-category bg-light-primary txt-primary"><i
                                                class="fa-solid fa-tag fa-flip-horizontal"></i><span>Management</span>
                                        </div>
                                        <div class="company-desc">
                                            <p>Providing outstanding tech services and solutions</p>
                                        </div><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.job_list_view') }}">Jobs
                                            Posted <span>(02)</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 xl-50 col-md-4 col-sm-6 box-col-4">
                        <div class="card height-equal">
                            <div class="card-body">
                                <div class="company-box">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#logo-12') }}"></use>
                                    </svg>
                                    <div class="company-name">
                                        <h6>Holoxo</h6>
                                        <div class="main-star-rating">
                                            <div class="common-flex star-box justify-content-center"><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i></div>
                                        </div>
                                        <p class="mb-2 c-o-light">14.1K+ Reviews</p>
                                        <div class="company-category bg-light-primary txt-primary"><i
                                                class="fa-solid fa-tag fa-flip-horizontal"></i><span>E-commerce</span>
                                        </div>
                                        <div class="company-desc">
                                            <p>Offering cutting-edge tech services and softwares</p>
                                        </div><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.job_list_view') }}">Jobs
                                            Posted <span>(05)</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 xl-50 col-md-4 col-sm-6 box-col-4">
                        <div class="card height-equal">
                            <div class="card-body">
                                <div class="company-box">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#logo-7') }}"></use>
                                    </svg>
                                    <div class="company-name">
                                        <h6>Liify</h6>
                                        <div class="main-star-rating">
                                            <div class="common-flex star-box justify-content-center"><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i></div>
                                        </div>
                                        <p class="mb-2 c-o-light">200+ Reviews</p>
                                        <div class="company-category bg-light-primary txt-primary"><i
                                                class="fa-solid fa-tag fa-flip-horizontal"></i><span>Management</span>
                                        </div>
                                        <div class="company-desc">
                                            <p>Worldwide services for digital transformation</p>
                                        </div><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.job_list_view') }}">Jobs
                                            Posted <span>(09)</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 xl-50 col-md-4 col-sm-6 box-col-4">
                        <div class="card height-equal">
                            <div class="card-body">
                                <div class="company-box">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#logo-10') }}"></use>
                                    </svg>
                                    <div class="company-name">
                                        <h6>Jews</h6>
                                        <div class="main-star-rating">
                                            <div class="common-flex star-box justify-content-center"><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="mb-2 c-o-light">1.5K+ Reviews</p>
                                        <div class="company-category bg-light-primary txt-primary"><i
                                                class="fa-solid fa-tag fa-flip-horizontal"></i><span>Medical</span></div>
                                        <div class="company-desc">
                                            <p>Digital solutions for a range of global businesses</p>
                                        </div><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.job_list_view') }}">Jobs
                                            Posted <span>(14)</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 xl-50 col-md-4 col-sm-6 box-col-4">
                        <div class="card height-equal">
                            <div class="card-body">
                                <div class="company-box">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#logo-9') }}"></use>
                                    </svg>
                                    <div class="company-name">
                                        <h6>Appish</h6>
                                        <div class="main-star-rating">
                                            <div class="common-flex star-box justify-content-center"><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i></div>
                                        </div>
                                        <p class="mb-2 c-o-light">3.5K+ Reviews</p>
                                        <div class="company-category bg-light-primary txt-primary"><i
                                                class="fa-solid fa-tag fa-flip-horizontal"></i><span>Development</span>
                                        </div>
                                        <div class="company-desc">
                                            <p>High-end software and technology services</p>
                                        </div><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.job_list_view') }}">Jobs
                                            Posted <span>(04)</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 xl-50 col-md-4 col-sm-6 box-col-4">
                        <div class="card height-equal">
                            <div class="card-body">
                                <div class="company-box">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#logo-6') }}"></use>
                                    </svg>
                                    <div class="company-name">
                                        <h6>Liehook</h6>
                                        <div class="main-star-rating">
                                            <div class="common-flex star-box justify-content-center"><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i></div>
                                        </div>
                                        <p class="mb-2 c-o-light">45.5K+ Reviews</p>
                                        <div class="company-category bg-light-primary txt-primary"><i
                                                class="fa-solid fa-tag fa-flip-horizontal"></i><span>Development</span>
                                        </div>
                                        <div class="company-desc">
                                            <p>Software and digital solutions for a range of global businesses</p>
                                        </div><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.job_list_view') }}">Jobs
                                            Posted <span>(01)</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 xl-50 col-md-4 col-sm-6 box-col-4">
                        <div class="card height-equal">
                            <div class="card-body">
                                <div class="company-box">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#logo-2') }}"></use>
                                    </svg>
                                    <div class="company-name">
                                        <h6>Wonder Finds</h6>
                                        <div class="main-star-rating">
                                            <div class="common-flex star-box justify-content-center"><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i></div>
                                        </div>
                                        <p class="mb-2 c-o-light">4.2K+ Reviews</p>
                                        <div class="company-category bg-light-primary txt-primary"><i
                                                class="fa-solid fa-tag fa-flip-horizontal"></i><span>Management</span>
                                        </div>
                                        <div class="company-desc">
                                            <p>Cutting-edge technological services on a global scale</p>
                                        </div><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.job_list_view') }}">Jobs
                                            Posted <span>(08)</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 xl-50 col-md-4 col-sm-6 box-col-4">
                        <div class="card height-equal">
                            <div class="card-body">
                                <div class="company-box">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#logo-1') }}"></use>
                                    </svg>
                                    <div class="company-name">
                                        <h6>Gadget Grove</h6>
                                        <div class="main-star-rating">
                                            <div class="common-flex star-box justify-content-center"><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="mb-2 c-o-light">200+ Reviews</p>
                                        <div class="company-category bg-light-primary txt-primary"><i
                                                class="fa-solid fa-tag fa-flip-horizontal"></i><span>E-commerce</span>
                                        </div>
                                        <div class="company-desc">
                                            <p>Leading provider of digital services and software</p>
                                        </div><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.job_list_view') }}">Jobs
                                            Posted <span>(06)</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 xl-50 col-md-4 col-sm-6 box-col-4">
                        <div class="card height-equal">
                            <div class="card-body">
                                <div class="company-box">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#logo-3') }}"></use>
                                    </svg>
                                    <div class="company-name">
                                        <h6>Kilback</h6>
                                        <div class="main-star-rating">
                                            <div class="common-flex star-box justify-content-center"><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i
                                                    class="fa-solid fa-star active"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i></div>
                                        </div>
                                        <p class="mb-2 c-o-light">32.5K+ Reviews</p>
                                        <div class="company-category bg-light-primary txt-primary"><i
                                                class="fa-solid fa-tag fa-flip-horizontal"></i><span>Medical</span></div>
                                        <div class="company-desc">
                                            <p>Cutting-edge solutions to international markets</p>
                                        </div><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.job_list_view') }}">Jobs
                                            Posted <span>(03)</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
@endsection
