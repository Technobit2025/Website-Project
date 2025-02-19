@extends('layouts.simple.master')

@section('title', 'Knowledgebase')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Knowledgebase</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Knowledgebase</li>
                        <li class="breadcrumb-item active">Knowledgebase</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="knowledgebase-bg"><img class="bg-img-cover bg-center"
                        src="{{ asset('assets/images/knowledgebase/bg_1.jpg') }}" alt="looginpage"></div>
                <div class="knowledgebase-search">
                    <div>
                        <h3 class="txt-dark">How Can I help you?</h3>
                        <form class="form-inline" action="#" method="get">
                            <div class="form-group w-100"><i data-feather="search"></i>
                                <input class="form-control-plaintext w-100" type="text" placeholder="Type question here"
                                    title="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="d-flex faq-widgets">
                            <div class="flex-grow-1">
                                <h5>Articles</h5>
                                <p>The usefulness and usability of a website, not its aesthetic design, define its success
                                    or failure. User-centric design has become the norm for effective and financially
                                    motivated web design since the visitor to the website is the only one who clicks the
                                    mouse and thus determines everything. After all, a feature might as well not exist if
                                    people can't utilise it.</p>
                            </div><i data-feather="book-open"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="d-flex faq-widgets">
                            <div class="flex-grow-1">
                                <h5>Knowledgebase</h5>
                                <p>A knowledge base acts as a central repository for knowledge, data, and information
                                    pertaining to a certain subject or thing. Its main goal is to make it easier for
                                    consumers to obtain information quickly and conveniently so they can solve problems,
                                    find solutions, and make wise decisions.</p>
                            </div><i data-feather="aperture"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="d-flex faq-widgets">
                            <div class="flex-grow-1">
                                <h5>Support</h5>
                                <p>Email, chat, forums, and a social media interface (and monitoring) are all part of
                                    real-time online assistance, which helps in reacting to public complaints and comments.
                                    Taking care of returns or repairs may fall under this.</p>
                            </div><i data-feather="file-text"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="header-faq">
                    <h5 class="mb-0">Browse Articles By Category</h5>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Browse Articles</h5>
                            </div>
                            <div class="card-body">
                                <div class="row browse g-sm-4 g-3">
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles">
                                            <h6><span><i data-feather="archive"></i></span>Quick Questions are Answered</h6>
                                            <ul>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Dream big, work
                                                            hard, achieve more.</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Stars require
                                                            darkness to shine.</span></a></li>
                                                <li><a href="#!"><span><i data-feather="file-text"></i></span><span>The
                                                            key to happiness lies within, not in goods.</span><span
                                                            class="badge badge-primary pull-right">New</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Seek advancement
                                                            rather than perfection.</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (40)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles">
                                            <h6><span><i data-feather="archive"></i></span> Integrating WordPress with Your
                                                Website</h6>
                                            <ul>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Plugins and tools
                                                            for wordPress integration</span><span
                                                            class="badge badge-primary pull-right">Review</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>advantages of
                                                            using WordPress as my website's CMS</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Desktop publishing
                                                            software like Jully </span><span
                                                            class="badge badge-primary pull-right">Articles</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Making this the
                                                            first true generator on the Internet.</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (90)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles">
                                            <h6><span><i data-feather="archive"></i></span>WordPress Site Maintenance</h6>
                                            <ul>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>WordPress Site
                                                            Upkeep: Important best practices</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Regular Updates:
                                                            WordPress security and stability</span><span
                                                            class="badge badge-primary pull-right">Closed</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Backup
                                                            Fundamentals: Protecting your website data </span></a></li>
                                                <li><a href="#!"><span><i data-feather="file-text"></i></span><span>The
                                                            essential maintenance for a thriving website</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (50)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles browse-bottom">
                                            <h6><span><i data-feather="archive"></i> Meta Tags in WordPress</span></h6>
                                            <ul>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>The Article
                                                            WordPress: A recipe for success</span><span
                                                            class="badge badge-primary pull-right">Popular</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Security Scan:
                                                            Protecting against vulnerabilities.</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>SEO and Site
                                                            Speed: Improving user experience</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Broken Links:
                                                            Fixing for improved navigation</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (90)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles browse-bottom">
                                            <h6><span><i data-feather="archive"></i></span>WordPress in your Language</h6>
                                            <ul>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Discover
                                                            WordPress Themes: Improve website design</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Making the Best
                                                            Decision: WordPress vs. Other CMS</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Using Widgets to
                                                            Your Advantage: Creating a custom website</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Making this the
                                                            first generator on the internet</span><span
                                                            class="badge badge-primary pull-right">Closed</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (50)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles browse-bottom">
                                            <h6><span><i data-feather="archive"></i></span>Know Your Sources</h6>
                                            <ul>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>First, get the
                                                            issue resolved. Write the code after that.</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>It has a
                                                            more-or-less normal distribution of letters</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>The writing of
                                                            programmes must be simple</span><span
                                                            class="badge badge-primary pull-right">Article</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Coding involves
                                                            logic and creativity to merely writing code</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (26)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles browse-bottom">
                                            <h6><span><i data-feather="archive"></i></span>Validating a Website</h6>
                                            <ul>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Build your
                                                            website to make users happy</span><span
                                                            class="badge badge-primary pull-right">Review</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Your website is
                                                            your front door online</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Make sure your
                                                            website is easy to use and simple </span><span
                                                            class="badge badge-primary pull-right">Closed</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Update, innovate,
                                                            and enhance your website </span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (10)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-50 col-md-6">
                                        <div class="browse-articles browse-bottom">
                                            <h6><span><i data-feather="archive"></i></span>Quick Questions are answered
                                            </h6>
                                            <ul>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Coding: turning
                                                            caffeine into lines of brilliance.</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Code is the
                                                            poetry of logical expression.</span><span
                                                            class="badge badge-primary pull-right">Popular</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Coding is the art
                                                            of engineering</span><span
                                                            class="badge badge-primary pull-right">Review</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Every screen size
                                                            is accommodated with a responsive</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (25)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-100">
                                        <div class="browse-articles browse-bottom">
                                            <h6><span><i data-feather="archive"></i></span>Integrating WordPress with your
                                                Website</h6>
                                            <ul>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>The core of your
                                                            online presence is your website</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Your website is a
                                                            24/7 marketing tool</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>Build a website
                                                            that turns users into buyers</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="file-text"></i></span><span>User experience
                                                            determines a website's success</span><span
                                                            class="badge badge-primary pull-right">On hold</span></a></li>
                                                <li><a href="#!"><span><i
                                                                data-feather="arrow-right"></i></span><span>See More
                                                            (34)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="header-faq">
                    <h5 class="mb-0">Featured Tutorials</h5>
                </div>
                <div class="row">
                    <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid"
                                    src="{{ asset('assets/images/faq/1.jpg') }}" alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="pb-1"> Web Designer</h6>
                                <p class="c-light">Web designing course belongs to the field of computer science and IT. It
                                    enables students to learn.</p>
                            </div>
                            <div class="card-footer"><span>Dec 29, 2024</span><span class="pull-right"><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-solid fa-star font-primary"></i></span></div>
                        </div>
                    </div>
                    <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid"
                                    src="{{ asset('assets/images/faq/2.jpg') }}" alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="pb-1">Web Development</h6>
                                <p class="c-light">This course is designed to start you on a path toward future studies in
                                    web development and design.</p>
                            </div>
                            <div class="card-footer"><span>Dec 20, 2024</span><span class="pull-right"><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-regular fa-star font-primary"></i></span></div>
                        </div>
                    </div>
                    <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid"
                                    src="{{ asset('assets/images/faq/3.jpg') }}" alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="pb-1">UI Design</h6>
                                <p class="c-light">User interface design (UI) is the design for machines and software, such
                                    as mobile devices, computers.</p>
                            </div>
                            <div class="card-footer"><span>Feb 11, 2024</span><span class="pull-right"><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-solid fa-star font-primary"></i></span></div>
                        </div>
                    </div>
                    <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                        <div class="card features-faq product-box">
                            <div class="faq-image product-img"><img class="img-fluid"
                                    src="{{ asset('assets/images/faq/4.jpg') }}" alt="">
                                <div class="product-hover">
                                    <ul>
                                        <li><i class="icon-link"></i></li>
                                        <li><i class="icon-import"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="pb-1">UX Design</h6>
                                <p class="c-light">Web designing course belongs to the field of computer science and IT. It
                                    enables students to learn.</p>
                            </div>
                            <div class="card-footer"><span>Jan 02, 2024</span><span class="pull-right"><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-solid fa-star font-primary"></i><i
                                        class="fa-solid fa-star-half-stroke font-primary"></i></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="header-faq">
                    <h5>Latest Articles and Videos</h5>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons"><i class="m-r-20" data-feather="codepen"></i>
                                            <div class="flex-grow-1">
                                                <h6>Product Manager</h6>
                                                <p class="c-light">A product manager is a specialist in charge of managing
                                                    the growth, direction.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons"><i class="m-r-20" data-feather="codepen"></i>
                                            <div class="flex-grow-1">
                                                <h6>E-commerce</h6>
                                                <p class="c-light">Discover the flourishing e-commerce industry and how
                                                    digital technology has transformed it.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons"><i class="m-r-20" data-feather="codepen"></i>
                                            <div class="flex-grow-1">
                                                <h6> Web Development</h6>
                                                <p class="c-light">To display HTML and CSS components on different web
                                                    browsers, such as Chrome, Safari. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons"><i class="m-r-20"
                                                data-feather="file-text"></i>
                                            <div class="flex-grow-1">
                                                <h6> UX Designer</h6>
                                                <p class="c-light">Seniority does have a significant role in how much
                                                    influence a UI specialist. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons"><i class="m-r-20"
                                                data-feather="file-text"></i>
                                            <div class="flex-grow-1">
                                                <h6> SDLC Cycle</h6>
                                                <p class="c-light"> the intricacies of the Software Development Life Cycle
                                                    a systematic approach to software development</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons"><i class="m-r-20"
                                                data-feather="file-text"></i>
                                            <div class="flex-grow-1">
                                                <h6>Using Video </h6>
                                                <p class="c-light">Information architecture is a discipline that, among
                                                    other things, arranges, and structures</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons"><i class="m-r-20" data-feather="youtube"></i>
                                            <div class="flex-grow-1">
                                                <h6>Information Gathering</h6>
                                                <p class="c-light">Explore the critical role of information gathering in
                                                    effective problem-solving processes.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons"><i class="m-r-20" data-feather="youtube"></i>
                                            <div class="flex-grow-1">
                                                <h6>Effective Communication</h6>
                                                <p class="c-light">It's crucial to communicate! This blog explores the key
                                                    components of good communication.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex articles-icons"><i class="m-r-20" data-feather="youtube"></i>
                                            <div class="flex-grow-1">
                                                <h6>Travel Adventures</h6>
                                                <p class="c-light">The spirit is enriched by travel! This site takes you on
                                                    an exhilarating tour of stunning.</p>
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
