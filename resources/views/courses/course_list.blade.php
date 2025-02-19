@extends('layouts.simple.master')

@section('title', 'Course List')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Course List</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Course</li>
                        <li class="breadcrumb-item active">Course List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-9 xl-60 order-xl-0 order-1 box-col-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="blog-box blog-list row">
                                <div class="col-sm-5"><img class="img-fluid sm-100-w"
                                        src="{{ asset('assets/images/faq/1.jpg') }}" alt=""></div>
                                <div class="col-sm-7">
                                    <div class="blog-details">
                                        <div class="blog-date"><span>05</span> January 2024</div>
                                        <h6>Java Language </h6>
                                        <div class="blog-bottom-content">
                                            <ul class="blog-social">
                                                <li>by: Paige Turner</li>
                                                <li>15 Hits</li>
                                            </ul>
                                            <hr>
                                            <p class="mt-0">Learning new skills that will position you for success in the
                                                future is crucial as the workplace changes. Even while learning new
                                                techniques, methods, and approaches might be difficult, doing so is crucial
                                                for increasing your economic mobility and securing stable employment.
                                                Retraining and upskilling are two important methods for achieving this.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="blog-box blog-list row">
                                <div class="col-sm-5"><img class="img-fluid sm-100-w"
                                        src="{{ asset('assets/images/faq/2.jpg') }}" alt=""></div>
                                <div class="col-sm-7">
                                    <div class="blog-details">
                                        <div class="blog-date"><span>10</span> March 2024</div>
                                        <h6>Web Development </h6>
                                        <div class="blog-bottom-content">
                                            <ul class="blog-social">
                                                <li>by: Lea Odom</li>
                                                <li>34 Hits</li>
                                            </ul>
                                            <hr>
                                            <p class="mt-0">Websites that are both aesthetically pleasing and
                                                user-friendly are the work of eb designers. They create layouts, visuals,
                                                and interactive components by fusing technical expertise with creative
                                                imagination. To make sure websites perform seamlessly across all devices and
                                                browsers, web designers use a variety of tools and programming languages,
                                                including HTML, CSS, and JavaScript. By concentrating on user experience
                                                (UX) and user interface (UI) design, they seek to improve the usability and
                                                attractiveness of websites.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
                        <div class="card">
                            <div class="blog-box blog-grid text-center product-box">
                                <div class="product-img"><img class="img-fluid top-radius-blog"
                                        src="{{ asset('assets/images/faq/3.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><i class="icon-link"></i></li>
                                            <li><i class="icon-import"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-details-main">
                                    <ul class="blog-social">
                                        <li>9 April 2018</li>
                                        <li>by: Admin</li>
                                        <li>0 Hits</li>
                                    </ul>
                                    <hr>
                                    <h6 class="blog-bottom-details">One line at a time, a web developer's code has the power
                                        to change the world.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
                        <div class="card">
                            <div class="blog-box blog-grid text-center product-box">
                                <div class="product-img"><img class="img-fluid top-radius-blog"
                                        src="{{ asset('assets/images/faq/5.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><i class="icon-link"></i></li>
                                            <li><i class="icon-import"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-details-main">
                                    <ul class="blog-social">
                                        <li>12 Oct 2019</li>
                                        <li>by: Admin</li>
                                        <li>0 Hits</li>
                                    </ul>
                                    <hr>
                                    <h6 class="blog-bottom-details">The only thing you can purchase that increases your
                                        wealth is travel.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
                        <div class="card">
                            <div class="blog-box blog-grid text-center product-box">
                                <div class="product-img"><img class="img-fluid top-radius-blog"
                                        src="{{ asset('assets/images/faq/6.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><i class="icon-link"></i></li>
                                            <li><i class="icon-import"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-details-main">
                                    <ul class="blog-social">
                                        <li>23 July 2019</li>
                                        <li>by: Admin</li>
                                        <li>0 Hits</li>
                                    </ul>
                                    <hr>
                                    <h6 class="blog-bottom-details">Live simply, move lightly, and radiate and embody light.
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
                        <div class="card">
                            <div class="blog-box blog-grid text-center product-box">
                                <div class="product-img"><img class="img-fluid top-radius-blog"
                                        src="{{ asset('assets/images/faq/7.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><i class="icon-link"></i></li>
                                            <li><i class="icon-import"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-details-main">
                                    <ul class="blog-social">
                                        <li>10 Sep 2020</li>
                                        <li>by: Admin</li>
                                        <li>0 Hits</li>
                                    </ul>
                                    <hr>
                                    <h6 class="blog-bottom-details">Your voice becomes your most powerful asset in the
                                        blogging world.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
                        <div class="card">
                            <div class="blog-box blog-grid text-center product-box">
                                <div class="product-img"><img class="img-fluid top-radius-blog"
                                        src="{{ asset('assets/images/faq/4.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><i class="icon-link"></i></li>
                                            <li><i class="icon-import"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-details-main">
                                    <ul class="blog-social">
                                        <li>12 Jan 2021</li>
                                        <li>by: Admin</li>
                                        <li>0 Hits</li>
                                    </ul>
                                    <hr>
                                    <h6 class="blog-bottom-details">Blogging is the platform to leave a digital footprint
                                        on the sands of time.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
                        <div class="card">
                            <div class="blog-box blog-grid text-center product-box">
                                <div class="product-img"><img class="img-fluid top-radius-blog"
                                        src="{{ asset('assets/images/faq/8.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><i class="icon-link"></i></li>
                                            <li><i class="icon-import"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-details-main">
                                    <ul class="blog-social">
                                        <li>8 April 2023</li>
                                        <li>by: Admin</li>
                                        <li>0 Hits</li>
                                    </ul>
                                    <hr>
                                    <h6 class="blog-bottom-details">The digital era's pulse, blogging connects people's
                                        hearts and brains.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-40 box-col-12 learning-filter">
                <div class="md-sidebar"><a class="btn btn-primary email-aside-toggle md-sidebar-toggle">Learning
                        filter</a>
                    <div class="md-sidebar-aside job-sidebar custom-scrollbar">
                        <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon" aria-expanded="true"
                                                    aria-controls="collapseicon">Find Course</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon"
                                            data-bs-parent="#accordion">
                                            <div class="card-body filter-cards-view animate-chk">
                                                <div class="job-filter">
                                                    <div class="faq-form">
                                                        <input class="form-control" type="text"
                                                            placeholder="Search.."><i class="search-icon"
                                                            data-feather="search"></i>
                                                    </div>
                                                </div>
                                                <div class="checkbox-animated">
                                                    <div class="learning-header"><span class="f-w-600">Categories</span>
                                                    </div>
                                                    <label class="d-block" for="chk-ani">
                                                        <input class="checkbox_animated" id="chk-ani" type="checkbox">
                                                        Accounting
                                                    </label>
                                                    <label class="d-block" for="chk-ani0">
                                                        <input class="checkbox_animated" id="chk-ani0" type="checkbox">
                                                        Design
                                                    </label>
                                                    <label class="d-block" for="chk-ani1">
                                                        <input class="checkbox_animated" id="chk-ani1" type="checkbox">
                                                        Development
                                                    </label>
                                                    <label class="d-block" for="chk-ani2">
                                                        <input class="checkbox_animated" id="chk-ani2" type="checkbox">
                                                        Management
                                                    </label>
                                                </div>
                                                <div class="checkbox-animated mt-0">
                                                    <div class="learning-header"><span class="f-w-600">Duration</span>
                                                    </div>
                                                    <label class="d-block" for="chk-ani6">
                                                        <input class="checkbox_animated" id="chk-ani6" type="checkbox">
                                                        0-50 hours
                                                    </label>
                                                    <label class="d-block" for="chk-ani7">
                                                        <input class="checkbox_animated" id="chk-ani7" type="checkbox">
                                                        50-100 hours
                                                    </label>
                                                    <label class="d-block" for="chk-ani8">
                                                        <input class="checkbox_animated" id="chk-ani8" type="checkbox">
                                                        100+ hours
                                                    </label>
                                                </div>
                                                <div class="checkbox-animated mt-0">
                                                    <div class="learning-header"><span class="f-w-600">Price</span></div>
                                                    <label class="d-block" for="edo-ani">
                                                        <input class="radio_animated" id="edo-ani" type="radio"
                                                            name="rdo-ani" checked=""> All Courses
                                                    </label>
                                                    <label class="d-block" for="edo-ani1">
                                                        <input class="radio_animated" id="edo-ani1" type="radio"
                                                            name="rdo-ani" checked=""> Paid Courses
                                                    </label>
                                                    <label class="d-block" for="edo-ani2">
                                                        <input class="radio_animated" id="edo-ani2" type="radio"
                                                            name="rdo-ani" checked=""> Free Courses
                                                    </label>
                                                </div>
                                                <div class="checkbox-animated mt-0">
                                                    <div class="learning-header"><span class="f-w-600">Status</span></div>
                                                    <label class="d-block" for="chk-ani3">
                                                        <input class="checkbox_animated" id="chk-ani3" type="checkbox">
                                                        Registration
                                                    </label>
                                                    <label class="d-block" for="chk-ani4">
                                                        <input class="checkbox_animated" id="chk-ani4" type="checkbox">
                                                        Progress
                                                    </label>
                                                    <label class="d-block" for="chk-ani5">
                                                        <input class="checkbox_animated" id="chk-ani5" type="checkbox">
                                                        Completed
                                                    </label>
                                                </div>
                                                <button class="btn btn-primary text-center" type="button">Filter</button>
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
                                                    aria-controls="collapseicon1">Categories</button>
                                            </h5>
                                        </div>
                                        <div class="collapse card-body px-0 show" id="collapseicon1"
                                            aria-labelledby="collapseicon1" data-bs-parent="#accordion">
                                            <div class="categories">
                                                <div class="learning-header"><span class="f-w-600">Design</span></div>
                                                <ul>
                                                    <li><a href="#">UI Design </a><span
                                                            class="badge badge-primary pull-right">28</span></li>
                                                    <li><a href="#">UX Design </a><span
                                                            class="badge badge-primary pull-right">35</span></li>
                                                    <li><a href="#">Interface Design </a><span
                                                            class="badge badge-primary pull-right">17</span></li>
                                                    <li><a href="#">User Experience </a><span
                                                            class="badge badge-primary pull-right">26</span></li>
                                                </ul>
                                            </div>
                                            <div class="categories pt-0">
                                                <div class="learning-header"><span class="f-w-600">Development</span>
                                                </div>
                                                <ul>
                                                    <li><a href="#">Frontend Development</a><span
                                                            class="badge badge-primary pull-right">48</span></li>
                                                    <li><a href="#">Backend Development</a><span
                                                            class="badge badge-primary pull-right">19</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseicon2" aria-expanded="true"
                                                    aria-controls="collapseicon2">Upcoming Courses</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="collapseicon2" aria-labelledby="collapseicon2"
                                            data-bs-parent="#accordion">
                                            <div class="upcoming-course card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1"><span class="f-w-500">UX
                                                            Development</span><span class="d-block">Course By <a
                                                                href="#">Howard Moore</a></span><span
                                                            class="d-block"><i
                                                                class="fa-solid fa-star font-warning"></i><i
                                                                class="fa-solid fa-star font-warning"></i><i
                                                                class="fa-solid fa-star font-warning"></i><i
                                                                class="fa-solid fa-star font-warning"></i><i
                                                                class="fa-solid fa-star-half-stroke font-warning"></i></span>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0 font-primary">18</h5><span
                                                            class="d-block">Dec</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-grow-1"><span class="f-w-500">Business
                                                            Analyst</span><span class="d-block">Course By <a
                                                                href="#">Crystal Markey</a></span><span
                                                            class="d-block"><i
                                                                class="fa-solid fa-star font-warning"></i><i
                                                                class="fa-solid fa-star font-warning"></i><i
                                                                class="fa-solid fa-star font-warning"></i><i
                                                                class="fa-solid fa-star font-warning"></i><i
                                                                class="fa-solid fa-star font-warning"></i></span></div>
                                                    <div>
                                                        <h5 class="mb-0 font-primary">28</h5><span
                                                            class="d-block">Dec</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-grow-1"><span class="f-w-500">Web
                                                            Development</span><span class="d-block">Course By <a
                                                                href="#">Jerry Reel</a></span><span
                                                            class="d-block"><i
                                                                class="fa-solid fa-star font-warning"></i><i
                                                                class="fa-solid fa-star font-warning"></i><i
                                                                class="fa-solid fa-star font-warning"></i><i
                                                                class="fa-solid fa-star font-warning"></i><i
                                                                class="fa-regular fa-star font-warning"></i></span></div>
                                                    <div>
                                                        <h5 class="mb-0 font-primary">5</h5><span
                                                            class="d-block">Jan</span>
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
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
@endsection
