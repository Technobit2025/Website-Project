@extends('layouts.simple.master')

@section('title', 'Course Details')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Course Details</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Course</li>
                        <li class="breadcrumb-item active">Course Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-9 xl-60 order-xl-0 order-1 box-col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="blog-single">
                            <div class="blog-box blog-details"><img class="img-fluid w-100"
                                    src="{{ asset('assets/images/faq/learning-1.png') }}" alt="blog-main">
                                <div class="blog-details">
                                    <ul class="blog-social">
                                        <li>25 July 2018</li>
                                        <li><i class="icofont icofont-user"></i>William Jennings</li>
                                        <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                        <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                    </ul>
                                    <h5 class="pt-2 mt-0">Knowledge can be defined as awareness of facts or as practical
                                        skills. there is wide agreement among philosophers that it is a form of true belief.
                                        Internet.</h5>
                                    <div class="single-blog-content-top">
                                        <p>Knowledge may be characterized as factual awareness or as useful skills, and it
                                            can also relate to familiarity with things or circumstances. The term "knowledge
                                            of facts," also known as "propositional knowledge," refers to a real belief that
                                            may be distinguished from an opinion or educated guess by the use of evidence.
                                            Although there is broad consensus among philosophers that it is a type of
                                            genuine belief, many philosophical debates centre on the necessity for
                                            justification, including whether it is even necessary, how to understand it, and
                                            if something else is required in addition to it.</p>
                                        <p>Various processes can be used to create knowledge. Perception, which is the use
                                            of the five senses, is the most significant source. Many theories also regard
                                            introspection as a way of learning about one's own mental states rather than
                                            about external physical things. Memory, logical intuition, inference, and
                                            witness are some more sources that are frequently brought up. Some of these
                                            sources, according to foundationalism, are fundamental in the sense that they
                                            are able to support beliefs independently of other mental states. Coherentists
                                            dispute this assertion.</p>
                                    </div>
                                </div>
                            </div>
                            <section class="comment-box">
                                <h4>Comment</h4>
                                <hr>
                                <ul>
                                    <li>
                                        <div class="d-flex align-self-center"><img class="align-self-center"
                                                src="{{ asset('assets/images/blog/comment.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <div class="row">
                                                    <div class="col-md-4 xl-100">
                                                        <h6 class="mt-0">Selena Levy<span> ( Designer )</span></h6>
                                                    </div>
                                                    <div class="col-md-8 xl-100">
                                                        <ul
                                                            class="comment-social float-start float-md-end learning-comment">
                                                            <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                                            <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p>This well put-together theory urges designers to provide their works
                                                    creative, clear explanations so that spectators may comprehend and, in a
                                                    sense, "read" them at all times.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <div class="d-flex"><img class="align-self-center"
                                                        src="{{ asset('assets/images/blog/9.jpg') }}"
                                                        alt="Generic placeholder image">
                                                    <div class="flex-grow-1">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <h6 class="mt-0">Yara Bravo<span> ( Designer )</span></h6>
                                                            </div>
                                                        </div>
                                                        <p>Web design is a broad field, thus there are many topics to
                                                            discuss and factors to take into account. It suggests that the
                                                            look, layout, overall ambience, content, user experience, and
                                                            accessibility have all been successfully integrated. To satisfy
                                                            the timeline and the clients' expectations, hundreds of
                                                            different yet related jobs must be completed.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="d-flex"><img class="align-self-center"
                                                src="{{ asset('assets/images/blog/4.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <div class="row">
                                                    <div class="col-md-4 xl-100">
                                                        <h6 class="mt-0">Fox Rios<span> ( Designer )</span></h6>
                                                    </div>
                                                    <div class="col-md-8 xl-100">
                                                        <ul
                                                            class="comment-social float-start float-md-end learning-comment">
                                                            <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                                            <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p>They meticulously plan each shot, considering factors such as lighting,
                                                    angles, and props to convey the desired message effectively. Commercial
                                                    photographers are adept at using their technical expertise to highlight
                                                    the unique features and qualities of their subjects, often manipulating
                                                    lighting and post-processing techniques to achieve the desired
                                                    aesthetic.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-40 box-col-12 learning-filter">
                <div class="md-sidebar"><a class="btn btn-primary email-aside-toggle md-sidebar-toggle">Learning filter</a>
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
                                                        <input class="form-control" type="text" placeholder="Search.."><i
                                                            class="search-icon" data-feather="search"></i>
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
                                                    <li><a href="#!">UI Design </a><span
                                                            class="badge badge-primary pull-right">28</span></li>
                                                    <li><a href="#!">UX Design </a><span
                                                            class="badge badge-primary pull-right">35</span></li>
                                                    <li><a href="#!">Interface Design </a><span
                                                            class="badge badge-primary pull-right">17</span></li>
                                                    <li><a href="#!">User Experience </a><span
                                                            class="badge badge-primary pull-right">26</span></li>
                                                </ul>
                                            </div>
                                            <div class="categories pt-0">
                                                <div class="learning-header"><span class="f-w-600">Development</span>
                                                </div>
                                                <ul>
                                                    <li><a href="#!">Frontend Development</a><span
                                                            class="badge badge-primary pull-right">48</span></li>
                                                    <li><a href="#!">Backend Development</a><span
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
                                                    <div class="flex-grow-1"><span class="f-w-600">UX
                                                            Development</span><span class="d-block">Course By <a
                                                                href="#!">Howard Moore</a></span><span
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
                                                    <div class="flex-grow-1"><span class="f-w-600">Business
                                                            Analyst</span><span class="d-block">Course By <a
                                                                href="#!">Crystal Markey</a></span><span
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
                                                    <div class="flex-grow-1"><span class="f-w-600">Web
                                                            Development</span><span class="d-block">Course By <a
                                                                href="#!">Jerry Reel</a></span><span
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
