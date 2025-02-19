@extends('layouts.simple.master')

@section('title', 'Timeline')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Timeline</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Timeline</li>
                        <li class="breadcrumb-item active">Timeline 1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Animated Timeline</h5>
                        <p class="f-m-light mt-1"> Use <code> animated-timeline</code> class to your
                            animated timeline.</p>
                    </div>
                    <div class="card-body overflow-hidden">
                        <div class="animated-timeline">
                            <div class="timeline-block">
                                <div class="each-year">
                                    <div class="title">2024</div>
                                    <div class="timeline-event">
                                        <div class="timeline-desc">
                                            <h6 class="pb-1">Project Cuba:</h6><span>The goal of this
                                                january initiative was to enhance the online theme
                                                experience for customers.</span>
                                        </div>
                                    </div>
                                    <div class="timeline-event">
                                        <div class="timeline-desc">
                                            <h6 class="pb-1">Development:</h6><span>Marked the beginning of
                                                the development phase.</span>
                                        </div>
                                    </div>
                                    <div class="timeline-event">
                                        <div class="timeline-desc">
                                            <h6 class="pb-1">Launch Theme:</h6><span>Official launch and
                                                ongoing quality control checks.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <div class="each-year">
                                    <div class="title">2023</div>
                                    <div class="timeline-event">
                                        <div class="timeline-desc">
                                            <h6 class="pb-1">Mofi Goal:</h6><span>Project mofi was
                                                introduced in may with the goal of improving tools for
                                                internal communication.</span>
                                        </div>
                                    </div>
                                    <div class="timeline-event">
                                        <div class="timeline-desc">
                                            <h6 class="pb-1">Planning:</h6><span>Creating a team and
                                                planning the project.</span>
                                        </div>
                                    </div>
                                    <div class="timeline-event">
                                        <div class="timeline-desc">
                                            <h6 class="pb-1">Training:</h6><span>Training sessions and
                                                rollout to all workers.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <div class="each-year">
                                    <div class="title">2022</div>
                                    <div class="timeline-event">
                                        <div class="timeline-desc">
                                            <h6 class="pb-1">Goal:</h6><span>The goal of project tivo ,
                                                which was introduced in January, is to improve consumer
                                                interaction through a mobile app.</span>
                                        </div>
                                    </div>
                                    <div class="timeline-event">
                                        <div class="timeline-desc">
                                            <h6 class="pb-1">Project Launch:</h6><span>Market study and
                                                project launch in January.</span>
                                        </div>
                                    </div>
                                    <div class="timeline-event">
                                        <div class="timeline-desc">
                                            <h6 class="pb-1">Official App:</h6><span>Marketing campaign and
                                                official app launch.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <div class="each-year">
                                    <div class="title">2021</div>
                                    <div class="timeline-event">
                                        <div class="timeline-desc">
                                            <h6 class="pb-1">Project Zeta:</h6><span>Dedicated to improving
                                                cybersecurity, it was launched in August.</span>
                                        </div>
                                    </div>
                                    <div class="timeline-event">
                                        <div class="timeline-desc">
                                            <h6 class="pb-1">Vulnerability Analysis:</h6><span>Vulnerability
                                                analysis and security audit and the application of improved
                                                security protocols.</span>
                                        </div>
                                    </div>
                                    <div class="timeline-event">
                                        <div class="timeline-desc">
                                            <h6 class="pb-1">Program:</h6><span>Programmes for employees and
                                                ongoing observation.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 box-col-6 notification main-timeline">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Basic Timeline </h5>
                        <p class="f-m-light mt-1"> Use <code>timeline-dot-*</code> class to a square style
                            timeline.</p>
                    </div>
                    <div class="card-body dark-timeline basic-timeline">
                        <ul>
                            <li class="d-flex">
                                <div class="timeline-dot-primary"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background">2 Feb
                                            2024</span><span>7:00 AM </span></p>
                                    <h6 class="mb-0">Conference with client<span class="dot-notification"></span></h6>
                                    <p class="f-light">At noon today, there will be a meeting with a UK
                                        client.</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="timeline-dot-secondary"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background">22 March
                                            2024</span><span>3:45 PM</span></p>
                                    <h6 class="mb-0">Discussion with marketing Team<span class="dot-notification"></span>
                                    </h6>
                                    <p class="f-light">discussion with the marketing staff on the success of
                                        the most recent project</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="timeline-dot-success"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background">16 May
                                            2024</span><span>1:22 AM</span></p>
                                    <h6 class="mb-0">Invest in a new hosting plan<span class="dot-notification"></span>
                                    </h6>
                                    <p class="f-light">today at 2 pm AM, purchase a new hosting package as
                                        agreed upon with the management team.</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="timeline-dot-warning"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background">23 Nov
                                            2024</span><span>6:56 AM</span></p>
                                    <h6 class="mb-0">Discussion with designer team<span class="dot-notification"></span>
                                    </h6>
                                    <p class="f-light">discussion with the designer employee on the success
                                        of the most recent project.</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="timeline-dot-info"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background">12 Dec
                                            2024</span><span>12:05 AM</span></p>
                                    <h6 class="mb-0">Discussion with new theme launch <span
                                            class="dot-notification"></span></h6>
                                    <p class="f-light">discussion with the how many themes made in our
                                        portfolio.</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="timeline-dot-danger"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background">25 Dec
                                            2024</span><span>6:56 AM</span></p>
                                    <h6 class="mb-0">Purchase new chairs for office <span
                                            class="dot-notification"></span></h6>
                                    <p class="f-light">online purchase new chairs for office </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Hovering Timeline </h5>
                        <p class="f-m-light mt-1"> Use<code> square-timeline </code> main class to create
                            new variations of the timeline.</p>
                    </div>
                    <div class="card-body">
                        <ul class="square-timeline">
                            <li class="timeline-event"><label class="timeline-event-icon"></label>
                                <div class="timeline-event-wrapper">
                                    <p class="timeline-thumbnail">January 2024- Annual Function</p>
                                    <h5>Location</h5>
                                    <div class="f-light">Largo Febo,10225012-Calvisano BS</div>
                                    <p class="pt-3 mb-4">What a dynamic performance by the eighth-grade
                                        students, Let's welcome the ninth-grade kid to the stage.</p>
                                </div>
                            </li>
                            <li class="timeline-event"><label class="timeline-event-icon"></label>
                                <div class="timeline-event-wrapper">
                                    <p class="timeline-thumbnail">March 2024 - Fresher Interview</p>
                                    <h5>Ofwrrior Company</h5>
                                    <div class="f-light">A fresher's interview is to be conducted<div
                                            class="list-group main-lists-content"><a
                                                class="list-group-item list-group-item-action border-0 p-0 mb-4"
                                                href="#" aria-current="true">
                                                <div class="d-flex w-100 justify-content-between align-items-center">
                                                    <div class="list-wrapper"><img class="list-img me-0"
                                                            src="{{ asset('assets/images/user/1.jpg') }}" alt="profile">
                                                        <div class="list-content">
                                                            <h6>Molly Boake</h6>
                                                            <p>MollyBoake@rhyta.com</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-icon"><i class="icon-facebook"></i><i
                                                            class="icon-google"> </i><i class="icon-twitter-alt"></i>
                                                    </div>
                                                </div>
                                                <p class="mb-1">Next step is to choose a tone of voice for
                                                    your content type.</p>
                                            </a></div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-event"><label class="timeline-event-icon"></label>
                                <div class="timeline-event-wrapper">
                                    <p class="timeline-thumbnail">December 2024 - Meetup</p>
                                    <h5>US Meeting</h5>
                                    <div class="f-light">2209 Leverton Cove RoadSpringfield, MA 01109<div
                                            class="designer-details">
                                            <div class="designer-profile">
                                                <div class="designer-wrap"><img class="designer-img"
                                                        src="{{ asset('assets/images/avtar/4.jpg') }}" alt="profile">
                                                    <div class="designer-content">
                                                        <h6>Lillian J. Goodfellow</h6>
                                                        <p>239-664-7751</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="designer-profile">
                                                <div class="designer-wrap"><img class="designer-img"
                                                        src="{{ asset('assets/images/avtar/7.jpg') }}" alt="profile">
                                                    <div class="designer-content">
                                                        <h6>Carolyn A. Sutton</h6>
                                                        <p>218-793-6609</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-5 notification box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Variation Timeline </h5>
                        <p class="f-m-light mt-1"> Use <code> activity-dot-* </code>class to create rounded
                            animations on the timeline.</p>
                    </div>
                    <div class="card-body dark-timeline">
                        <ul>
                            <li class="d-flex">
                                <div class="activity-dot-primary"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background">8th March, 2024
                                        </span><span>1 day ago</span></p>
                                    <h6>Updated Product<span class="dot-notification"></span></h6>
                                    <p class="f-light">Key milestones throughout history...</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="activity-dot-warning"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background">5th Feb, 2024
                                        </span><span>Today</span></p>
                                    <h6>Added Bew Items<span class="dot-notification"></span></h6><span
                                        class="f-light">Timeline showcasing historical events...</span>
                                    <div class="recent-images">
                                        <ul>
                                            <li>
                                                <div class="recent-img-wrap"><img
                                                        src="{{ asset('assets/images/dashboard-2/product/1.png') }}"
                                                        alt="chair"></div>
                                            </li>
                                            <li>
                                                <div class="recent-img-wrap"><img
                                                        src="{{ asset('assets/images/dashboard-2/product/2.png') }}"
                                                        alt="chair"></div>
                                            </li>
                                            <li>
                                                <div class="recent-img-wrap"><img
                                                        src="{{ asset('assets/images/dashboard-2/product/3.png') }}"
                                                        alt="men t-shirt"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex pb-0">
                                <div class="activity-dot-secondary"></div>
                                <div class="w-100 ms-3">
                                    <p class="d-flex justify-content-between mb-2"><span
                                            class="date-content light-background">20th Jan, 2024
                                        </span><span>12:00 PM</span></p>
                                    <h6>Tello just like your product<span class="dot-notification"></span>
                                    </h6>
                                    <p>Explore a chronological journey through...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-7 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal Timeline </h5>
                        <p class="f-m-light mt-1"> Use<code> event-list </code>and <code>events</code>
                            classes to create a new horizontal timeline.</p>
                    </div>
                    <div class="card-body">
                        <div class="list-inline events timeline-list timeline-border row">
                            <div class="col-xxl-4 col-sm-6">
                                <div>
                                    <div class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date bg-light-secondary txt-secondary">1 Jan
                                            </div>
                                            <h5>Conference </h5>
                                            <p class="f-light text-truncate">Conferences are intended to
                                                bring individuals with similar interests together to discuss
                                                problems.</p>
                                            <div class="read-more-btn"><a class="btn btn-primary px-3"
                                                    href="#!">Read more</a></div>
                                        </div>
                                    </div>
                                    <div class="vertical-line"></div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-sm-6">
                                <div>
                                    <div class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date bg-light-primary txt-primary">4 Feb</div>
                                            <h5>Meet-up</h5>
                                            <p class="f-light text-truncate">You may connect with males from
                                                all around the world using the friend-forward.</p>
                                            <div class="read-more-btn"><a class="btn btn-primary px-3"
                                                    href="#!">Read more</a></div>
                                        </div>
                                    </div>
                                    <div class="vertical-line"></div>
                                </div>
                            </div>
                            <div class="col-xxl-4 horizontal-timeline">
                                <div>
                                    <div class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date bg-light-secondary txt-secondary">22
                                                March</div>
                                            <h5>Meeting</h5>
                                            <p class="f-light text-truncate">If several languages coalesce
                                                the grammar of the resulting simple and regular social
                                                networking platform.</p>
                                            <div class="read-more-btn"><a class="btn btn-primary px-3"
                                                    href="#!">Read more</a></div>
                                        </div>
                                    </div>
                                    <div class="vertical-line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="list-inline events border-0 timeline-list row">
                            <div class="col-xxl-4 col-sm-6">
                                <div>
                                    <div class="vertical-line"></div>
                                    <div class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date bg-light-primary txt-primary">4 Jan</div>
                                            <h5>Conference </h5>
                                            <p class="f-light text-truncate">A gathering of two or more
                                                people to talk about issues of interest.</p>
                                            <div><a class="btn btn-primary px-3" href="#!">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-sm-6">
                                <div>
                                    <div class="vertical-line"> </div>
                                    <div class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date bg-light-secondary txt-secondary">22
                                                March</div>
                                            <h5>Meeting</h5>
                                            <p class="f-light text-truncate">If several languages coalesce
                                                the grammar of the resulting simple and regular social
                                                networking platform.</p>
                                            <div><a class="btn btn-primary px-3" href="#!">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 horizontal-timeline">
                                <div>
                                    <div class="vertical-line"> </div>
                                    <div class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date bg-light-primary txt-primary">7 Dec</div>
                                            <h5>Launch Theme</h5>
                                            <p class="f-light text-truncate">Responsive Website is the
                                                approach that suggests website design and development should
                                                respond.</p>
                                            <div><a class="btn btn-primary px-3" href="#!">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Half Rounded Timeline</h5>
                        <p class="f-m-light mt-1"> Use <code> rounded-timeline</code> class to your rounded
                            timeline.</p>
                    </div>
                    <div class="card-body rounded-timeline">
                        <div class="timeline">
                            <div class="container left">
                                <div class="date">15 Dec</div><i class="icon fa-solid fa-house"></i>
                                <div class="content">
                                    <div class="timeline-wrapper">
                                        <div class="badge bg-danger">app-ideas</div>
                                    </div>
                                    <h5 class="mb-2">Established new the app-ideas repository.</h5>
                                    <p class="mb-0 f-light"> developers who are just beginning their
                                        learning process. those who often concentrate on developing
                                        programmes with a user interface.</p>
                                </div>
                            </div>
                            <div class="container right">
                                <div class="date">22 Oct</div><i class="icon fa-solid fa-code-fork"></i>
                                <div class="content">
                                    <div class="timeline-wrapper">
                                        <div class="badge bg-warning">Blog</div>
                                    </div>
                                    <h5 class="mb-2">Implemented the program for weekly code challenges.
                                    </h5>
                                    <p class="mb-0 f-light"> You can improve your understanding of
                                        programming and problem-solving techniques by taking on challenges.
                                    </p>
                                </div>
                            </div>
                            <div class="container left">
                                <div class="date">10 Jul</div><i class="icon fa-brands fa-tencent-weibo"></i>
                                <div class="content">
                                    <div class="timeline-wrapper">
                                        <div class="badge bg-primary">Designer</div>
                                    </div>
                                    <h5 class="mb-2">Research about most recent design trends.</h5>
                                    <p class="mb-0 f-light"> With our extensive analysis of the most recent
                                        design trends, discover the cutting edge of web aesthetics.</p>
                                </div>
                            </div>
                            <div class="container right">
                                <div class="date">18 May</div><i class="icon fa-brands fa-modx"></i>
                                <div class="content">
                                    <div class="timeline-wrapper">
                                        <div class="badge bg-success">Latest</div>
                                    </div>
                                    <h5 class="mb-2">Freelance UX designer</h5>
                                    <p class="mb-0 f-light"> Our professionals improve the usability and
                                        engagement of your website by creating user-friendly interfaces and
                                        user-centered designs, resulting in an unmatched online experience.
                                    </p>
                                </div>
                            </div>
                            <div class="container left">
                                <div class="date">10 Feb</div><i class="icon fa-regular fa-file-audio"></i>
                                <div class="content">
                                    <div class="timeline-wrapper">
                                        <div class="badge bg-primary">Audio testing</div>
                                    </div>
                                    <h5 class="mb-2">Musical trends and predictability</h5>
                                    <p class="mb-0 f-light"> So, the next time you listen to music, you
                                        might or might not consider how it's actively altering your mood.
                                    </p><audio controls="">
                                        <source src="{{ asset('assets/audio/horse.ogg') }}" type="audio/ogg">
                                    </audio>
                                </div>
                            </div>
                            <div class="container right">
                                <div class="date">01 Jan</div><i class="icon fa-solid fa-user group"></i>
                                <div class="content">
                                    <div class="timeline-wrapper">
                                        <div class="badge bg-success">Meet-up</div>
                                    </div>
                                    <h5 class="mb-2">Web-designer's meet-up</h5>
                                    <p class="mb-0 f-light"> Find nearby web designers to network with! A
                                        Web Design Meetup is a place where you can discuss tools. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/timeline/custom-timeline.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
