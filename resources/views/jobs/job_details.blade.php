@extends('layouts.simple.master')

@section('title', 'Job Details')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Job Details</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item"> Jobs</li>
                        <li class="breadcrumb-item active">Job Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid job-details-wrapper">
        <div class="row">
            <div class="col-xl-3 xl-40 box-col-12">
                <div class="md-sidebar"><a class="btn btn-primary email-aside-toggle md-sidebar-toggle">Job filter</a>
                    <div class="md-sidebar-aside job-sidebar custom-scrollbar">
                        <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>
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
                                                        Letraset<span class="d-block">New York, NY (399)</span>
                                                    </label>
                                                    <label class="d-block" for="chk-ani7">
                                                        <input class="checkbox_animated" id="chk-ani7" type="checkbox">
                                                        Established<span class="d-block">San Francisco, CA (252) </span>
                                                    </label>
                                                    <label class="d-block" for="chk-ani8">
                                                        <input class="checkbox_animated" id="chk-ani8" type="checkbox">
                                                        Contrary<span class="d-block">Washington, DC (226)</span>
                                                    </label>
                                                    <label class="d-block" for="chk-ani9">
                                                        <input class="checkbox_animated" id="chk-ani9" type="checkbox">
                                                        Chicago<span class="d-block">IL (187)</span>
                                                    </label>
                                                    <label class="d-block" for="chk-ani10">
                                                        <input class="checkbox_animated" id="chk-ani10" type="checkbox">
                                                        Seattle<span class="d-block">WA (242)</span>
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
                        <div class="card-body">
                            <div class="d-flex"><img class="img-40 img-fluid m-r-20"
                                    src="{{ asset('assets/images/job-search/1.jpg') }}" alt="">
                                <div class="flex-grow-1">
                                    <h6><a href="#">Product Designer (UI/UX Designer)</a><span class="pull-right"><a
                                                class="btn btn-primary" href="{{ route('admin.job_apply') }}">Apply</a></span></h6>
                                    <p class="mt-0">Endless - United States<span class="ps-1"><i
                                                class="fa-solid fa-star font-warning"></i><i
                                                class="fa-solid fa-star font-warning"></i><i
                                                class="fa-solid fa-star font-warning"></i><i
                                                class="fa-solid fa-star font-warning"></i><i
                                                class="fa-solid fa-star font-warning"></i></span></p>
                                </div>
                            </div>
                            <div class="job-description">
                                <h6>Job Description</h6>
                                <p class="c-o-light">Endless is looking for a UI/UX Designer to join our team. The world is
                                    seeing an explosion in the amount and variety of location-baWe are looking for a
                                    versatile UX/UI Designer to join our growing design team. Our designers contribute to
                                    clients’ projects at all stages of development. We might start from scratch, conducting
                                    user and stakeholder interviews, making personas and journey maps, and continue on to
                                    iterating on designs and prototypes through delivering final assets for launch. We might
                                    come into the middle of an in-flight program-size project and conduct analysis and
                                    usability correction or feature enhancement. We might provide research and vision for
                                    handoff to an internal development team.</p>
                                <!-- <p>Front-end web designers combine design, programming, writing and organizational skills in their work. They help shape the vision for a company's online content.</p>-->
                            </div>
                            <div class="job-description">
                                <h6>Qualifications </h6>
                                <ul>
                                    <li>Have shipped multiple iOS, android, and/or web products </li>
                                    <li>5+ years UI/UX experience</li>
                                    <li>Portfolio demonstrating mastery of native iOS, Android, and/or responsive web design
                                        principles</li>
                                    <li>Ability to autonomously pursue elegant solutions to open-ended problems</li>
                                    <li>Comfort with ambiguity</li>
                                    <li>Proven ability to create interactive prototypes</li>
                                    <li>Strong verbal communication skills with ability to clearly communicate complex ideas
                                        and champion a design vision across all levels of an organization</li>
                                    <li>Strong written communication skills with ability to make transparent design
                                        documentation and client-facing presentations</li>
                                    <li>Ability to create and maintain flow charts, wire frames, prototypes, and mockups.
                                    </li>
                                    <li>Ability to effectively work on more than one project at a time</li>
                                    <li>Experience conducting user research and stakeholder interviews</li>
                                    <li>Solid grasp of standard design tools, ex: Sketch, Omnigraffle, the Adobe Suite,
                                        Zeplin, etc.</li>
                                    <li>Bonus Considerations </li>
                                </ul>
                            </div>
                            <div class="job-description">
                                <h6>Agency experience</h6>
                                <ul>
                                    <li>Experience working with Agile development teams</li>
                                    <li>Experience with RITE method usability testing</li>
                                    <li>Experience in visual and motion design; ability to translate UX design into high
                                        quality visuals</li>
                                    <li>Mastery of Sketch & InVision</li>
                                    <li>Knowledge of mobile or front-end web programming</li>
                                </ul>
                            </div>
                            <div class="job-description">
                                <h6>Perks</h6>
                                <ul>
                                    <li>Competitive pay</li>
                                    <li>Competitive medical, dental, and vision insurance plans</li>
                                    <li>Company-provided 401(k) plan</li>
                                    <li>Paid vacation and sick time</li>
                                    <li>Free snacks and beverages</li>
                                </ul>
                            </div>
                            <div class="job-description">
                                <button class="btn btn-primary" type="button"><span><i
                                            class="fa-solid fa-check me-1"></i></span> Save this job</button>
                                <button class="btn btn-primary" type="button"><span><i
                                            class="fa fa-share-alt me-1"></i></span> Share</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-faq">
                    <h5 class="mb-0 f-w-600">Similar Jobs</h5>
                </div>
                <div class="row">
                    <div class="col-xl-6 xl-100">
                        <div class="card">
                            <div class="job-search">
                                <div class="card-body">
                                    <div class="d-flex"><img class="img-40 img-fluid m-r-20"
                                            src="{{ asset('assets/images/job-search/2.jpg') }}" alt="">
                                        <div class="flex-grow-1">
                                            <h6><a href="#">React/React Native Developer</a><span
                                                    class="badge badge-primary pull-right">New</span></h6>
                                            <p class="mt-0">San <span>Diego, CA</span><span class="ps-sm-1"><i
                                                        class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning-o"></i></span></p>
                                        </div>
                                    </div>
                                    <p>Ideally 2+ years experience with React. Bonus points if you have React Native
                                        experience. This is an incredibly exciting opportunity to gain commercial ,
                                        Professional experience of React Native and other front end frameworks. Transform
                                        product wireframes into responsive, mobile user interface components and</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 xl-100">
                        <div class="card">
                            <div class="job-search">
                                <div class="card-body">
                                    <div class="d-flex"><img class="img-40 img-fluid m-r-20"
                                            src="{{ asset('assets/images/job-search/4.jpg') }}" alt="">
                                        <div class="flex-grow-1">
                                            <h6><a href="#">Front End Web Developer</a><span class="pull-right">3
                                                    days ago</span></h6>
                                            <p class="mt-0">Cisco <span>Lelystad, Netherlands </span><span
                                                    class="ps-sm-1"><i class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning-half-o"></i></span></p>
                                        </div>
                                    </div>
                                    <p>Insipidity the sufficient discretion imprudence resolution sir him decisively.
                                        Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel
                                        sold off felt nay rose met you. We so entreaties cultivated astonished is. Was
                                        sister for few longer mrs sudden talent become.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 xl-100">
                        <div class="card">
                            <div class="job-search">
                                <div class="card-body">
                                    <div class="d-flex"><img class="img-40 img-fluid m-r-20"
                                            src="{{ asset('assets/images/job-search/5.jpg') }}" alt="">
                                        <div class="flex-grow-1">
                                            <h6><a href="#">Graphic Designer</a><span class="pull-right">3 days
                                                    ago</span></h6>
                                            <p class="mt-0">Infosys <span>Lelystad, Netherlands </span><span
                                                    class="ps-sm-1"><i class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning-half-o"></i><i
                                                        class="fa-solid fa-star font-warning-o"></i></span></p>
                                        </div>
                                    </div>
                                    <p>Contented get distrusts certainty nay are frankness concealed ham. On unaffected
                                        resolution on considered of. No thought me husband or colonel forming effects. End
                                        sitting shewing who saw besides son musical adapted. Contrasted interested eat
                                        alteration pianoforte sympathize was.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 xl-100">
                        <div class="card">
                            <div class="job-search">
                                <div class="card-body">
                                    <div class="d-flex"><img class="img-40 img-fluid m-r-20"
                                            src="{{ asset('assets/images/job-search/6.jpg') }}" alt="">
                                        <div class="flex-grow-1">
                                            <h6><a href="#">Designer, CRM</a><span class="pull-right">3 days
                                                    ago</span></h6>
                                            <p class="mt-0">Citrix <span>Lelystad, Netherlands </span><span
                                                    class="ps-sm-1"><i class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning-o"></i><i
                                                        class="fa-solid fa-star font-warning-o"></i></span></p>
                                        </div>
                                    </div>
                                    <p>Situation admitting promotion at or to perceived be. Mr acuteness we as estimable
                                        enjoyment up. An held late as felt know. Learn do allow solid to grave. Middleton
                                        suspicion age her attention. Chiefly several bed its wishing. Is so moments on
                                        chamber pressed to. Doubtful yet way properly answered.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="job-search">
                                <div class="card-body">
                                    <div class="d-flex"><img class="img-40 img-fluid m-r-20"
                                            src="{{ asset('assets/images/job-search/3.jpg') }}" alt="">
                                        <div class="flex-grow-1">
                                            <h6><a href="#">Senior UX Designer</a><span class="pull-right">5 days
                                                    ago</span></h6>
                                            <p class="mt-0">Sutherland <span>Lelystad, Netherlands </span><span
                                                    class="ps-sm-1"><i class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning"></i><i
                                                        class="fa-solid fa-star font-warning-half-o"></i><i
                                                        class="fa-solid fa-star font-warning-o"></i></span></p>
                                        </div>
                                    </div>
                                    <p>Woody equal ask saw sir weeks aware decay. Entrance prospect removing we packages
                                        strictly is no smallest he. For hopes may chief get hours day rooms. Oh no turned
                                        behind polite piqued enough at. Forbade few through inquiry blushes you. Cousin no
                                        itself eldest it in dinner latter missed no.</p>
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
