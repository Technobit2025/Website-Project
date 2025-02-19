@extends('layouts.simple.master')

@section('title', 'FAQ')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>FAQ</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">FAQ</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="faq-wrap">
            <div class="row">
                <div class="col-xl-4 box-col-6">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="d-flex faq-widgets">
                                <div class="flex-grow-1">
                                    <h5>Articles</h5>
                                    <p>The usefulness and usability of a website, not its aesthetic design, define its
                                        success or failure. User-centric design has become the norm for effective and
                                        financially motivated web design since the visitor to the website is the only one
                                        who clicks the mouse and thus determines everything. After all, a feature might as
                                        well not exist if people can't utilise it.</p>
                                </div><i data-feather="file-text"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 box-col-6">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="d-flex faq-widgets">
                                <div class="flex-grow-1">
                                    <h5>Knowledgebase</h5>
                                    <p>A knowledge base acts as a central repository for knowledge, data, and information
                                        pertaining to a certain subject or thing. Its main goal is to make it easier for
                                        consumers to obtain information quickly and conveniently so they can solve problems,
                                        find solutions, and make wise decisions.</p>
                                </div><i data-feather="book-open"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 box-col-12">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="d-flex faq-widgets">
                                <div class="flex-grow-1">
                                    <h5>Support</h5>
                                    <p>Email, chat, forums, and a social media interface (and monitoring) are all part of
                                        real-time online assistance, which helps in reacting to public complaints and
                                        comments. Taking care of returns or repairs may fall under this.</p>
                                </div><i data-feather="aperture"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="header-faq">
                        <h5>Quick Questions are Answered</h5>
                    </div>
                    <div class="row default-according style-1 faq-accordion" id="accordionoc">
                        <div class="col-xl-8 xl-60 col-lg-6 col-md-7">
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon" aria-expanded="false"
                                            aria-controls="collapseicon"><i data-feather="help-circle"></i> Integrating
                                            wordPress with your website?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon" aria-labelledby="collapseicon"
                                    data-bs-parent="#accordionoc">
                                    <div class="card-body">A excellent method to add dynamic content, make site management
                                        simple, and access the extensive ecosystem of WordPress plugins and themes is by
                                        integrating WordPress with your website.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon2" aria-expanded="false"
                                            aria-controls="collapseicon2"><i data-feather="help-circle"></i> WordPress site
                                            maintenance ?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon2" data-bs-parent="#accordionoc">
                                    <div class="card-body">Background photos give a website an aesthetically pleasing and
                                        engaging backdrop. There are several applications for these photos.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon3" aria-expanded="false"
                                            aria-controls="collapseicon2"><i data-feather="help-circle"></i>Meta tags in
                                            wordPress ?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon3" data-bs-parent="#accordionoc">
                                    <div class="card-body">The World Wide online Consortium (W3C), a global organisation,
                                        supports online development. The public, organisation members, a full-time staff,
                                        and invited international experts work together to develop Web Standards.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon4" aria-expanded="false"
                                            aria-controls="collapseicon2"><i data-feather="help-circle"></i>WordPress in
                                            your language ?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon4" data-bs-parent="#accordionoc">
                                    <div class="card-body">Cascading Style Sheets, or CSS, is a language for creating style
                                        sheets. In essence, it regulates and supervises how information should be presented
                                        in speech, writing, visual media, and other forms of media. You may modify the
                                        text's colour, font, spacing between paragraphs, size, and order with CSS.</div>
                                </div>
                            </div>
                            <div class="faq-title">
                                <h6>Intellectual Property</h6>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon5" aria-expanded="false"><i
                                                data-feather="help-circle"></i>How to ticket work as web designer?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon5" aria-labelledby="collapseicon5"
                                    data-bs-parent="#accordionoc">
                                    <div class="card-body">Create an account on the chosen ticketing platform and set up
                                        your workspace. Customize it according to your projects and team, if applicable. Set
                                        permissions and access levels for team members and clients, if necessary.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon7" aria-expanded="false"
                                            aria-controls="collapseicon2"><i data-feather="help-circle"></i>What are
                                            WordPress Plugins?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon7" data-bs-parent="#accordionoc">
                                    <div class="card-body">Individual pieces of software called WordPress plugins let you
                                        extend the functionality of your website. You may install each of these pieces of
                                        software on your WordPress website.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon8" aria-expanded="false"
                                            aria-controls="collapseicon2"><i data-feather="help-circle"></i>How many
                                            tables are there by default in WordPress?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon8" data-bs-parent="#accordionoc">
                                    <div class="card-body">Tables are the equivalent of shelves in WordPress databases.
                                        WordPress websites come with 12 tables by default. Each table can only contain
                                        specific types of data. </div>
                                </div>
                            </div>
                            <div class="faq-title">
                                <h6>Selling And Buying</h6>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon9" aria-expanded="false"><i
                                                data-feather="help-circle"></i> What exactly does a talented UX designer
                                            do?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon9" aria-labelledby="collapseicon9"
                                    data-bs-parent="#accordionoc">
                                    <div class="card-body">While there is no right or incorrect response, a professional
                                        designer should be well-versed in UX and be able to provide a complete end-to-end UX
                                        design process.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon10" aria-expanded="false"
                                            aria-controls="collapseicon2"><i data-feather="help-circle"></i>Can you
                                            explain why widgets don't appear in the sidebar?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon10" data-bs-parent="#accordionoc">
                                    <div class="card-body">Users must first make sure that the themes they are using
                                        support the widget before adding it. It's conceivable that the issue is brought on
                                        by a lack of functionality.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon11" aria-expanded="false"
                                            aria-controls="collapseicon2"><i data-feather="help-circle"></i>Sell me on the
                                            benefits of UX design investment?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon11" data-bs-parent="#accordionoc">
                                    <div class="card-body">In addition to improving user experience, UX-driven product
                                        design is a wise commercial decision. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon12" aria-expanded="false"
                                            aria-controls="collapseicon2"><i data-feather="help-circle"></i>What is source
                                            code?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon12" data-bs-parent="#accordionoc">
                                    <div class="card-body">The core of a computer programme is called the source code,
                                        which is produced by a programmer and frequently takes the form of functions,
                                        descriptions, definitions, calls, procedures, and other operational declarations.
                                    </div>
                                </div>
                            </div>
                            <div class="faq-title">
                                <h6>User Accounts</h6>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon13" aria-expanded="false"><i
                                                data-feather="help-circle"></i>Integrating wordPress with your website
                                            ?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon13" aria-labelledby="collapseicon13"
                                    data-bs-parent="#accordionoc">
                                    <div class="card-body">The string may be turned into a character array, which you can
                                        iterate through from beginning to finish. The characters can be added to a string
                                        builder to create the reversed string.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon14" aria-expanded="false"
                                            aria-controls="collapseicon2"><i data-feather="help-circle"></i>WordPress site
                                            maintenance ?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon14" data-bs-parent="#accordionoc">
                                    <div class="card-body">This particular activity, which is the question, may demonstrate
                                        your proficiency with using Java code to carry out a task.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon16" aria-expanded="false"
                                            aria-controls="collapseicon2"><i data-feather="help-circle"></i> WordPress in
                                            your language ?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon16" data-bs-parent="#accordionoc">
                                    <div class="card-body">Another unique Java coding activity that the interviewer could
                                        use to gauge your Java expertise.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon17" aria-expanded="false"
                                            aria-controls="collapseicon2"><i data-feather="help-circle"></i> Validating a
                                            website ?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon17" data-bs-parent="#accordionoc">
                                    <div class="card-body">The planning, structuring, and labelling of content in a
                                        thorough, logical, and long-lasting manner is referred to as information
                                        architecture (IA). It allows for the obvious and intelligible organising and
                                        classification of material, enabling visitors to quickly discover what they're
                                        looking for.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon18" aria-expanded="false"
                                            aria-controls="collapseicon2"><i data-feather="help-circle"></i>Meta tags in
                                            wordPress ?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseicon18" data-bs-parent="#accordionoc">
                                    <div class="card-body">A declaration of the document type, known as DOCTYPE, is
                                        required at the start of every HTML or XHTML document; this declaration is
                                        frequently the first line of code.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 xl-40 col-lg-6 col-md-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card card-mb-faq xs-mt-search">
                                        <div class="card-header faq-header pb-0">
                                            <h5>Search articles</h5><i data-feather="help-circle"></i>
                                        </div>
                                        <div class="card-body faq-body">
                                            <div class="faq-form">
                                                <input class="form-control" type="text" placeholder="Search.."><i
                                                    class="search-icon" data-feather="search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card card-mb-faq">
                                        <div class="card-header faq-header pb-0">
                                            <h5>Navigation</h5><i data-feather="settings"></i>
                                        </div>
                                        <div class="card-body faq-body">
                                            <div class="navigation-btn"><a class="btn btn-primary" href="#!"><i
                                                        class="m-r-10" data-feather="message-square"></i>Ask Question</a>
                                            </div>
                                            <div class="navigation-option">
                                                <ul>
                                                    <li><a href="#!"><i data-feather="edit"></i>Tutorials</a></li>
                                                    <li><a href="#!"><i data-feather="globe"></i>Help center</a></li>
                                                    <li><a href="#!"><i
                                                                data-feather="book-open"></i>Knowledgebase</a></li>
                                                    <li><a href="#!"><i
                                                                data-feather="file-text"></i>Articles</a><span
                                                            class="badge badge-primary rounded-pill pull-right">42</span>
                                                    </li>
                                                    <li><a href="#!"><i data-feather="youtube"></i>Video
                                                            Tutorials</a><span
                                                            class="badge badge-primary rounded-pill pull-right">648</span>
                                                    </li>
                                                    <li><a href="#!"><i data-feather="message-circle"></i>Ask our
                                                            community</a></li>
                                                    <li><a href="#!"><i data-feather="mail"></i>Contact us</a></li>
                                                </ul>
                                                <hr>
                                                <ul>
                                                    <li><a href="#!"><i data-feather="message-circle"></i>Ask our
                                                            community</a></li>
                                                    <li><a href="#!"><i data-feather="mail"></i>Contact us</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header faq-header pb-0">
                                            <h5 class="d-inline-block">Latest Updates</h5><span
                                                class="pull-right d-inline-block">See All</span>
                                        </div>
                                        <div class="card-body faq-body">
                                            <div class="d-flex updates-faq-main">
                                                <div class="updates-faq"><i class="font-primary"
                                                        data-feather="rotate-cw"></i></div>
                                                <div class="flex-grow-1 updates-bottom-time">
                                                    <p><a href="#!">David Linner </a>requested money back for a double
                                                        debit card charge</p>
                                                    <p>10 minutes ago</p>
                                                </div>
                                            </div>
                                            <div class="d-flex updates-faq-main">
                                                <div class="updates-faq"><i class="font-primary"
                                                        data-feather="dollar-sign"></i></div>
                                                <div class="flex-grow-1 updates-bottom-time">
                                                    <p>All sellers have received monthly payouts</p>
                                                    <p>2 hours ago</p>
                                                </div>
                                            </div>
                                            <div class="d-flex updates-faq-main">
                                                <div class="updates-faq"><i class="font-primary" data-feather="link"></i>
                                                </div>
                                                <div class="flex-grow-1 updates-bottom-time">
                                                    <p>User Christopher <a href="#!">Wallace</a> is on hold and
                                                        awaiting for staff reply</p>
                                                    <p>45 minutes ago</p>
                                                </div>
                                            </div>
                                            <div class="d-flex updates-faq-main">
                                                <div class="updates-faq"><i class="font-primary"
                                                        data-feather="check"></i></div>
                                                <div class="flex-grow-1 updates-bottom-time">
                                                    <p>Ticket #43683 has been closed by <a href="#!">Victoria
                                                            Wilson</a></p>
                                                    <p>Dec 7, 11:48</p>
                                                </div>
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
                        <div class="col-xxl-3 col-md-6 box-col-6">
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
                                    <h6 class="pb-1">Web Design</h6>
                                    <p class="c-light">Setting aside time once every three months to refresh your portfolio
                                        is a fantastic idea. Even if you are not submitting any new work, you could still
                                        need to provide more context or alter anything based on your continuing learnings
                                        and objectives. Compared to months or years later, it is far simpler to update when
                                        the information is still fresh in your mind.</p>
                                </div>
                                <div class="card-footer"><span>Dec 15, 2024</span><span class="pull-right"><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-solid fa-star font-warning"></i></span></div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 box-col-6">
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
                                    <p class="c-light">To display HTML and CSS components on different web browsers, such
                                        as Chrome, Safari, and previous versions of Opera, CSS3 uses the Webkit rendering
                                        engine. It offers the essential features for generating online content and
                                        guaranteeing consistency across many platforms.</p>
                                </div>
                                <div class="card-footer"><span>Dec 15, 2024</span><span class="pull-right"><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-regular fa-star font-warning"></i></span></div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 box-col-6">
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
                                    <p class="c-light">Seniority does have a significant role in how much influence a UI
                                        specialist has at this first stage of the design process. Senior UI designers may
                                        take the initiative in coming up with suggestions for which visual components will
                                        work best, whereas an entry-level UI designer is more likely to be focused on
                                        storyboards, sitemaps, and process flows and not have much influence on the site's
                                        appearance.</p>
                                </div>
                                <div class="card-footer"><span>Dec 15, 2024</span><span class="pull-right"><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-solid fa-star font-warning"></i></span></div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 box-col-6">
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
                                    <p class="c-light">Information architecture is a discipline that, among other things,
                                        organises, arranges, and structures the content of a website or app. Information
                                        architects determine how to organise something's components in a way that makes
                                        sense.</p>
                                </div>
                                <div class="card-footer"><span>Dec 15, 2024</span><span class="pull-right"><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-solid fa-star font-warning"></i><i
                                            class="fa-solid fa-star-half-stroke font-warning"></i></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="header-faq">
                        <h5>Latest Articles and Videos</h5>
                    </div>
                    <div class="row faq-wrapper">
                        <div class="col-xl-4 col-md-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex"><i class="m-r-20" data-feather="codepen"></i>
                                                <div class="flex-grow-1">
                                                    <h6 class="pb-2">How to Programming Consistency.</h6>
                                                    <p class="c-light">You must always maintain consistency as a web
                                                        developer. Over time, consistency produces superior results. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex"><i class="m-r-20" data-feather="codepen"></i>
                                                <div class="flex-grow-1">
                                                    <h6 class="pb-2">Explaining Modern CSS To A Dinosaur</h6>
                                                    <p class="c-light">Peter Jang, the author of the very first essay on
                                                        our list, has created another masterpiece, but this time, he has
                                                        addressed CSS, another important aspect of web development.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex"><i class="m-r-20" data-feather="codepen"></i>
                                                <div class="flex-grow-1">
                                                    <h6 class="pb-2">Make Fewer Designs to Become a Better Designer.</h6>
                                                    <p class="c-light">Designers can experience feelings of fraudulence or
                                                        lack of originality. It seems like everyone else is working harder
                                                        or just generally doing a better job than you are. </p>
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
                                            <div class="d-flex"><i class="m-r-20" data-feather="file-text"></i>
                                                <div class="flex-grow-1">
                                                    <h6 class="pb-2">What?! Why Should I Design Less?</h6>
                                                    <p class="c-light">You can view all of the stunning and remarkable
                                                        things that other designers have produced by taking a peek around.
                                                        You then examine your work.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex"><i class="m-r-20" data-feather="file-text"></i>
                                                <div class="flex-grow-1">
                                                    <h6 class="pb-2">Use a GUI Framework as a Requirement</h6>
                                                    <p class="c-light"> Do not, under any circumstances, code your website
                                                        in simple HTML. Frameworks and widget libraries are widely
                                                        available.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex"><i class="m-r-20" data-feather="file-text"></i>
                                                <div class="flex-grow-1">
                                                    <h6 class="pb-2">What?! Why Should I Design Less?</h6>
                                                    <p class="c-light">Information architecture is a discipline that, among
                                                        other things, organises, arranges, and structures the content of a
                                                        website or app. Information architects determine how to organise
                                                        something's components in a way that makes sense.</p>
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
                                            <div class="d-flex"><i class="m-r-20" data-feather="youtube"></i>
                                                <div class="flex-grow-1">
                                                    <h6 class="pb-2">Continuous Learning</h6>
                                                    <p class="c-light">To improve their craft and advance in the industry,
                                                        web designers frequently attend courses, participate in design
                                                        groups, and work on their own professional development.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex"><i class="m-r-20" data-feather="youtube"></i>
                                                <div class="flex-grow-1">
                                                    <h6 class="pb-2">Design Expertise</h6>
                                                    <p class="c-light">For websites to be aesthetically pleasing, web
                                                        designers must have excellent graphic design, typography, colour
                                                        theory, and layout abilities</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex"><i class="m-r-20" data-feather="youtube"></i>
                                                <div class="flex-grow-1">
                                                    <h6 class="pb-2">Use Vertical Input Forms that are Clearly Organized.
                                                    </h6>
                                                    <p class="c-light">Use only one column in an input form if possible. A
                                                        separate row should exist for each input field.</p>
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
