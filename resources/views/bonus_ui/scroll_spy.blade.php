@extends('layouts.simple.master')

@section('title', 'Scrollspy')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>ScrollSpy</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">ScrollSpy</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid main-scrollspy">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Navbar Scrollspy</h5>
                        <p class="f-m-light mt-1"> Add <code>data-bs-spy="scroll" </code>and
                            <code>data-bs-target="#navId" </code>where navId is the unique id of the associated navigation.
                            Scroll the area below the navbar and watch the active class change. </p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body navbar-scrollspy">
                        <nav class="navbar bg-body-tertiary px-3 mb-3" id="navbar-scrollspy1"><a class="navbar-brand"
                                href="#"><img class="img-fluid for-light"
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"><img
                                    class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                    alt="logo"></a>
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link" href="#scrollspyHeading1">Section 1</a></li>
                                <li class="nav-item"><a class="nav-link" href="#scrollspyHeading2">Section 2</a></li>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                        href="#" role="button" aria-expanded="false">Dropdown</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#scrollspyHeading3">Section 3</a></li>
                                        <li><a class="dropdown-item" href="#scrollspyHeading4">Section 4</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#scrollspyHeading5">Section 5</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="scrollspy-example bg-body-tertiary p-3 rounded-2 custom-scrollbar" data-bs-spy="scroll"
                            data-bs-target="#navbar-scrollspy1" data-bs-root-margin="0px 0px -40%"
                            data-bs-smooth-scroll="true" tabindex="0">
                            <h6 id="scrollspyHeading1">Section 1</h6>
                            <p>For the scrollspy page, this is some placeholder content. Take note of the highlighted
                                navigation
                                link at the bottom of the page as you scroll down. It appears again and again in the
                                component
                                example. To highlight the scrolling and highlighting, we're going to keep adding more sample
                                copy
                                here.</p>
                            <h6 id="scrollspyHeading2">Section 2</h6>
                            <p>The content that appears here is a placeholder for the scrollspy page. The relevant
                                navigation
                                link is highlighted as you scroll down the page. The component example contains repetitions
                                of it.
                                In order to highlight the scrolling and highlighting, we will continue to add more sample
                                copy
                                here.</p>
                            <h6 id="scrollspyHeading3">Section 3</h6>
                            <p>This is some stuff that is meant to be on the scrollspy page. Keep in mind that the relevant
                                navigation link is highlighted as you scroll down the page. The component example uses it
                                repeatedly. Here, we continue to add sample copy to highlight the scrolling and
                                highlighting.</p>
                            <h6 id="scrollspyHeading4">Section 4</h6>
                            <p>This content is a stand-in for the scrollspy page. You'll notice that the relevant navigation
                                link is highlighted as you scroll down the page. It appears again in the component example.
                                Here,
                                we'll continue to add sample copy to highlight the scrolling and highlighting.</p>
                            <h6 id="scrollspyHeading5">Section 5</h6>
                            <p>For the scrollspy page, this is some placeholder content. Take note of the highlighted
                                navigation
                                link at the bottom of the page as you scroll down. It appears again and again in the
                                component
                                example. To highlight the scrolling and highlighting, we're going to keep adding more sample
                                copy
                                here.</p>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#nav-scrollspy-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="nav-scrollspy-copy">&lt;div class="card-body navbar-scrollspy"&gt;
   &lt;nav class="navbar bg-body-tertiary px-3 mb-3" id="navbar-scrollspy1"&gt;&lt;a class="navbar-brand" href="#"&gt;&lt;img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"&gt;&lt;img class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}" alt="logo"&gt;&lt;/a&gt;
       &lt;ul class="nav nav-pills"&gt;
           &lt;li class="nav-item"&gt;&lt;a class="nav-link" href="#scrollspyHeading1"&gt;Section 1&lt;/a&gt;&lt;/li&gt;
           &lt;li class="nav-item"&gt;&lt;a class="nav-link" href="#scrollspyHeading2"&gt;Section 2&lt;/a&gt;&lt;/li&gt;
           &lt;li class="nav-item dropdown"&gt;&lt;a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"&gt;Dropdown&lt;/a&gt;
               &lt;ul class="dropdown-menu"&gt;
                   &lt;li&gt;&lt;a class="dropdown-item" href="#scrollspyHeading3"&gt;Section 3&lt;/a&gt;&lt;/li&gt;
                   &lt;li&gt;&lt;a class="dropdown-item" href="#scrollspyHeading4"&gt;Section 4&lt;/a&gt;&lt;/li&gt;
                   &lt;li&gt;
                       &lt;hr class="dropdown-divider"&gt;
                   &lt;/li&gt;
                   &lt;li&gt;&lt;a class="dropdown-item" href="#scrollspyHeading5"&gt;Section 5&lt;/a&gt;&lt;/li&gt;
               &lt;/ul&gt;
           &lt;/li&gt;
       &lt;/ul&gt;
   &lt;/nav&gt;
   &lt;div class="scrollspy-example bg-body-tertiary p-3 rounded-2 custom-scrollbar" data-bs-spy="scroll" data-bs-target="#navbar-scrollspy1" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0"&gt;
       &lt;h6 id="scrollspyHeading1"&gt;Section 1&lt;/h6&gt;
       &lt;p&gt;For the scrollspy page, this is some placeholder content. Take note of the highlighted navigation link at the bottom of the page as you scroll down. It appears again and again in the component example. To highlight the scrolling and highlighting, we're going to keep adding more sample copy here.&lt;/p&gt;
       &lt;h6 id="scrollspyHeading2"&gt;Section 2&lt;/h6&gt;
       &lt;p&gt;The content that appears here is a placeholder for the scrollspy page. The relevant navigation link is highlighted as you scroll down the page. The component example contains repetitions of it. In order to highlight the scrolling and highlighting, we will continue to add more sample copy here.&lt;/p&gt;
       &lt;h6 id="scrollspyHeading3"&gt;Section 3&lt;/h6&gt;
       &lt;p&gt;This is some stuff that is meant to be on the scrollspy page. Keep in mind that the relevant navigation link is highlighted as you scroll down the page. The component example uses it repeatedly. Here, we continue to add sample copy to highlight the scrolling and highlighting.&lt;/p&gt;
       &lt;h6 id="scrollspyHeading4"&gt;Section 4&lt;/h6&gt;
       &lt;p&gt;This content is a stand-in for the scrollspy page. You'll notice that the relevant navigation link is highlighted as you scroll down the page. It appears again in the component example. Here, we'll continue to add sample copy to highlight the scrolling and highlighting.&lt;/p&gt;
       &lt;h6 id="scrollspyHeading5"&gt;Section 5&lt;/h6&gt;
       &lt;p&gt;For the scrollspy page, this is some placeholder content. Take note of the highlighted navigation link at the bottom of the page as you scroll down. It appears again and again in the component example. To highlight the scrolling and highlighting, we're going to keep adding more sample copy here.&lt;/p&gt;
   &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Nested Scrollspy</h5>
                        <p class="f-m-light mt-1"> Scrollspy also works with nested <code>navs</code> if a nested
                            <code>nav </code>is <code>active</code>, it's parents will also be <code>active</code>. Scroll
                            the
                            area next to the navbar and watch the active class change.
                        </p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body nested-scrollspy">
                        <div class="row g-4">
                            <div class="col-xl-3 col-lg-4 col-md-5 xl-40 box-col-4e">
                                <nav class="h-100 nested-scrollspy-menu flex-column align-items-stretch"
                                    id="navbar-scrollspy2">
                                    <nav class="nav nav-pills flex-column"><a class="nav-link f-16 txt-dark"
                                            href="#item-1">Experience</a>
                                        <nav class="nav nav-pills flex-column"><a class="nav-link ms-3 my-1"
                                                href="#item-1-1">Web
                                                Development </a><a class="nav-link ms-3 my-1" href="#item-1-2">Cyber
                                                Security</a></nav><a class="nav-link f-16 txt-dark" href="#item-2">Get in
                                            Touch</a><a class="nav-link f-16 txt-dark" href="#item-3">Projects</a>
                                        <nav class="nav nav-pills flex-column"><a class="nav-link ms-3 my-1"
                                                href="#item-3-1">Group
                                                Projects</a><a class="nav-link ms-3 my-1" href="#item-3-2">Individual
                                                Projects</a></nav>
                                    </nav>
                                </nav>
                            </div>
                            <div class="col-xl-9 col-lg-8 col-md-7 xl-60 box-col-8">
                                <div class="scrollspy-example-2 custom-scrollbar" data-bs-spy="scroll"
                                    data-bs-target="#navbar-scrollspy2" data-bs-smooth-scroll="true" tabindex="0">
                                    <div id="item-1">
                                        <h6 class="f-18">Experience</h6>
                                        <div class="common-align gap-lg-3 gap-1">
                                            <div class="flex-shrink-0"><svg>
                                                    <use
                                                        href="{{ asset('assets/svg/icon-sprite.svg#experience-scrollspy') }}">
                                                    </use>
                                                </svg></div>
                                            <div class="flex-grow-1">
                                                <p>This is some placeholder content for the scrollspy page. Note that as you
                                                    scroll down
                                                    the page, the appropriate navigation link is highlighted. It's repeated
                                                    throughout the
                                                    component example. We keep adding some more example copy here to
                                                    emphasize the scrolling
                                                    and highlighting.Keep in mind that the JavaScript plugin tries to pick
                                                    the right element
                                                    among all that may be visible. Multiple visible scrollspy targets at the
                                                    same time may
                                                    cause some issues.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="item-1-1">
                                        <h6> Experience / Web Development </h6>
                                        <p>This is some placeholder content for the scrollspy page. Note that as you scroll
                                            down the
                                            page, the appropriate navigation link is highlighted. It's repeated throughout
                                            the component
                                            example. We keep adding some more example copy here to emphasize the scrolling
                                            and
                                            highlighting.Keep in mind that the JavaScript plugin tries to pick the right
                                            element among
                                            all that may be visible. Multiple visible scrollspy targets at the same time may
                                            cause some
                                            issues. Try out several setups and see how the clear navigation signals that
                                            scrollspy
                                            offers improves user experience. On the other hand, you should be cautious when
                                            working with
                                            intricate layouts or scrollspy targets that overlap. Although the plugin makes
                                            an effort to
                                            choose the most pertinent aspect, there may occasionally be conflicts when there
                                            are several
                                            targets vying for the plugin's attention at once. You may take full advantage of
                                            scrollspy
                                            and improve the usability of your online application by anticipating problems
                                            and
                                            streamlining your page structure.</p>
                                    </div>
                                    <div id="item-1-2">
                                        <h6> Experience / Cyber Security</h6>
                                        <p>This is some placeholder content for the scrollspy page. Note that as you scroll
                                            down the
                                            page, the appropriate navigation link is highlighted. It's repeated throughout
                                            the component
                                            example. We keep adding some more example copy here to emphasize the scrolling
                                            and
                                            highlighting.Keep in mind that the JavaScript plugin tries to pick the right
                                            element among
                                            all that may be visible. Multiple visible scrollspy targets at the same time may
                                            cause some
                                            issues. It's important to remember that even while the JavaScript plugin uses
                                            visibility to
                                            determine which element is most relevant, having numerous scrollspy targets
                                            visible at once
                                            may cause confusion or unexpected behavior. In order to maximize usability and
                                            prevent any
                                            potential problems, it is therefore advised that you carefully organize your
                                            information
                                            when using scrollspy, making sure that sections are clearly distinguished from
                                            one another.
                                        </p>
                                        <p>In summary, Scrollspy is an effective solution that improves user engagement and
                                            navigation, giving visitors to your website a smooth surfing experience. You may
                                            improve the
                                            usability and interactivity of your web pages and make them easier to navigate
                                            by making
                                            proper use of its capabilities.</p>
                                    </div>
                                    <div id="item-2">
                                        <h6 class="f-18">Get in Touch</h6>
                                        <div class="common-align gap-lg-3 gap-1">
                                            <div class="flex-shrink-0"><svg>
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#contact-us') }}"></use>
                                                </svg></div>
                                            <div class="flex-grow-1">
                                                <p>This is some placeholder content for the scrollspy page. Note that as you
                                                    scroll down
                                                    the page, the appropriate navigation link is highlighted. It's repeated
                                                    throughout the
                                                    component example. We keep adding some more example copy here to
                                                    emphasize the scrolling
                                                    and highlighting.Keep in mind that the JavaScript plugin tries to pick
                                                    the right element
                                                    among all that may be visible. Multiple visible scrollspy targets at the
                                                    same time may
                                                    cause some issues. When using scrollspy, it's important to remember best
                                                    practices,
                                                    particularly with regard to the arrangement and labelling of your page
                                                    elements. The
                                                    combination of well-placed scrollable targets and comprehensible HTML
                                                    code guarantees
                                                    optimal functionality and accessibility for all users.</p>
                                                <p>In summary, Scrollspy is an effective solution that improves user
                                                    engagement and
                                                    navigation, giving visitors to your website a smooth surfing experience.
                                                    You may improve
                                                    the usability and interactivity of your web pages and make them easier
                                                    to navigate by
                                                    making proper use of its capabilities.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="item-3">
                                        <h6 class="f-18">Projects</h6>
                                        <div class="common-align gap-lg-3 gap-1">
                                            <div class="flex-shrink-0"><svg>
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#project-info') }}">
                                                    </use>
                                                </svg></div>
                                            <div class="flex-grow-1">
                                                <p>This is some placeholder content for the scrollspy page. Note that as you
                                                    scroll down
                                                    the page, the appropriate navigation link is highlighted. It's repeated
                                                    throughout the
                                                    component example. We keep adding some more example copy here to
                                                    emphasize the scrolling
                                                    and highlighting.Keep in mind that the JavaScript plugin tries to pick
                                                    the right element
                                                    among all that may be visible. Multiple visible scrollspy targets at the
                                                    same time may
                                                    cause some issues.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="item-3-1">
                                        <h6>Projects / Group Projects</h6>
                                        <p>This is some placeholder content for the scrollspy page. Note that as you scroll
                                            down the
                                            page, the appropriate navigation link is highlighted. It's repeated throughout
                                            the component
                                            example. We keep adding some more example copy here to emphasize the scrolling
                                            and
                                            highlighting.Keep in mind that the JavaScript plugin tries to pick the right
                                            element among
                                            all that may be visible. Multiple visible scrollspy targets at the same time may
                                            cause some
                                            issues. When using scrollspy, it's important to remember best practices,
                                            particularly with
                                            regard to the arrangement and labelling of your page elements. The combination
                                            of
                                            well-placed scrollable targets and comprehensible HTML code guarantees optimal
                                            functionality
                                            and accessibility for all users.</p>
                                        <p>In summary, Scrollspy is an effective solution that improves user engagement and
                                            navigation, giving visitors to your website a smooth surfing experience. You may
                                            improve the
                                            usability and interactivity of your web pages and make them easier to navigate
                                            by making
                                            proper use of its capabilities.</p>
                                    </div>
                                    <div id="item-3-2">
                                        <h6>Projects / Individual Projects</h6>
                                        <p>This is some placeholder content for the scrollspy page. Note that as you scroll
                                            down the
                                            page, the appropriate navigation link is highlighted. It's repeated throughout
                                            the component
                                            example. We keep adding some more example copy here to emphasize the scrolling
                                            and
                                            highlighting.Keep in mind that the JavaScript plugin tries to pick the right
                                            element among
                                            all that may be visible. Multiple visible scrollspy targets at the same time may
                                            cause some
                                            issues. When using scrollspy, it's important to remember best practices,
                                            particularly with
                                            regard to the arrangement and labelling of your page elements. The combination
                                            of
                                            well-placed scrollable targets and comprehensible HTML code guarantees optimal
                                            functionality
                                            and accessibility for all users.</p>
                                        <p class="mb-0">In summary, Scrollspy is an effective solution that improves user
                                            engagement
                                            and navigation, giving visitors to your website a smooth surfing experience. You
                                            may improve
                                            the usability and interactivity of your web pages and make them easier to
                                            navigate by making
                                            proper use of its capabilities.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#nested-scrollspy-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="nested-scrollspy-copy">&lt;div class="card-body nested-scrollspy"&gt;
   &lt;div class="row g-4"&gt;
       &lt;div class="col-xl-3 col-lg-4 col-md-5 xl-40 box-col-4e"&gt;
           &lt;nav class="h-100 nested-scrollspy-menu flex-column align-items-stretch" id="navbar-scrollspy2"&gt;
               &lt;nav class="nav nav-pills flex-column"&gt;&lt;a class="nav-link f-16 txt-dark" href="#item-1"&gt;Experience&lt;/a&gt;
                   &lt;nav class="nav nav-pills flex-column"&gt;&lt;a class="nav-link ms-3 my-1" href="#item-1-1"&gt;Web Development &lt;/a&gt;&lt;a class="nav-link ms-3 my-1" href="#item-1-2"&gt;Cyber Security&lt;/a&gt;&lt;/nav&gt;&lt;a class="nav-link f-16 txt-dark" href="#item-2"&gt;Get in Touch&lt;/a&gt;&lt;a class="nav-link f-16 txt-dark" href="#item-3"&gt;Projects&lt;/a&gt;
                   &lt;nav class="nav nav-pills flex-column"&gt;&lt;a class="nav-link ms-3 my-1" href="#item-3-1"&gt;Group Projects&lt;/a&gt;&lt;a class="nav-link ms-3 my-1" href="#item-3-2"&gt;Individual Projects&lt;/a&gt;&lt;/nav&gt;
               &lt;/nav&gt;
           &lt;/nav&gt;
       &lt;/div&gt;
       &lt;div class="col-xl-9 col-lg-8 col-md-7 xl-60 box-col-8"&gt;
           &lt;div class="scrollspy-example-2 custom-scrollbar" data-bs-spy="scroll" data-bs-target="#navbar-scrollspy2" data-bs-smooth-scroll="true" tabindex="0"&gt;
               &lt;div id="item-1"&gt;
                   &lt;h6 class="f-18"&gt;Experience&lt;/h6&gt;
                   &lt;div class="common-align gap-lg-3 gap-1"&gt;
                       &lt;div class="flex-shrink-0"&gt;
                           &lt;svg&gt;
                               &lt;use href="{{ asset('assets/svg/icon-sprite.svg#experience-scrollspy') }}"&gt;&lt;/use&gt;
                           &lt;/svg&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow-1"&gt;
                           &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.&lt;/p&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
               &lt;div id="item-1-1"&gt;
                   &lt;h6&gt; Experience / Web Development &lt;/h6&gt;
                   &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues. Try out several setups and see how the clear navigation signals that scrollspy offers improves user experience. On the other hand, you should be cautious when working with intricate layouts or scrollspy targets that overlap. Although the plugin makes an effort to choose the most pertinent aspect, there may occasionally be conflicts when there are several targets vying for the plugin's attention at once. You may take full advantage of scrollspy and improve the usability of your online application by anticipating problems and streamlining your page structure.&lt;/p&gt;
               &lt;/div&gt;
               &lt;div id="item-1-2"&gt;
                   &lt;h6&gt; Experience / Cyber Security&lt;/h6&gt;
                   &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues. It's important to remember that even while the JavaScript plugin uses visibility to determine which element is most relevant, having numerous scrollspy targets visible at once may cause confusion or unexpected behavior. In order to maximize usability and prevent any potential problems, it is therefore advised that you carefully organize your information when using scrollspy, making sure that sections are clearly distinguished from one another.&lt;/p&gt;
                   &lt;p&gt;In summary, Scrollspy is an effective solution that improves user engagement and navigation, giving visitors to your website a smooth surfing experience. You may improve the usability and interactivity of your web pages and make them easier to navigate by making proper use of its capabilities.&lt;/p&gt;
               &lt;/div&gt;
               &lt;div id="item-2"&gt;
                   &lt;h6 class="f-18"&gt;Get in Touch&lt;/h6&gt;
                   &lt;div class="common-align gap-lg-3 gap-1"&gt;
                       &lt;div class="flex-shrink-0"&gt;
                           &lt;svg&gt;
                               &lt;use href="{{ asset('assets/svg/icon-sprite.svg#contact-us') }}"&gt;&lt;/use&gt;
                           &lt;/svg&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow-1"&gt;
                           &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues. When using scrollspy, it's important to remember best practices, particularly with regard to the arrangement and labelling of your page elements. The combination of well-placed scrollable targets and comprehensible HTML code guarantees optimal functionality and accessibility for all users.&lt;/p&gt;
                           &lt;p&gt;In summary, Scrollspy is an effective solution that improves user engagement and navigation, giving visitors to your website a smooth surfing experience. You may improve the usability and interactivity of your web pages and make them easier to navigate by making proper use of its capabilities.&lt;/p&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
               &lt;div id="item-3"&gt;
                   &lt;h6 class="f-18"&gt;Projects&lt;/h6&gt;
                   &lt;div class="common-align gap-lg-3 gap-1"&gt;
                       &lt;div class="flex-shrink-0"&gt;
                           &lt;svg&gt;
                               &lt;use href="{{ asset('assets/svg/icon-sprite.svg#project-info') }}"&gt;&lt;/use&gt;
                           &lt;/svg&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow-1"&gt;
                           &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.&lt;/p&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
               &lt;div id="item-3-1"&gt;
                   &lt;h6&gt;Projects / Group Projects&lt;/h6&gt;
                   &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues. When using scrollspy, it's important to remember best practices, particularly with regard to the arrangement and labelling of your page elements. The combination of well-placed scrollable targets and comprehensible HTML code guarantees optimal functionality and accessibility for all users.&lt;/p&gt;
                   &lt;p&gt;In summary, Scrollspy is an effective solution that improves user engagement and navigation, giving visitors to your website a smooth surfing experience. You may improve the usability and interactivity of your web pages and make them easier to navigate by making proper use of its capabilities.&lt;/p&gt;
               &lt;/div&gt;
               &lt;div id="item-3-2"&gt;
                   &lt;h6&gt;Projects / Individual Projects&lt;/h6&gt;
                   &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues. When using scrollspy, it's important to remember best practices, particularly with regard to the arrangement and labelling of your page elements. The combination of well-placed scrollable targets and comprehensible HTML code guarantees optimal functionality and accessibility for all users.&lt;/p&gt;
                   &lt;p class="mb-0"&gt;In summary, Scrollspy is an effective solution that improves user engagement and navigation, giving visitors to your website a smooth surfing experience. You may improve the usability and interactivity of your web pages and make them easier to navigate by making proper use of its capabilities.&lt;/p&gt;
               &lt;/div&gt;
           &lt;/div&gt;
       &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>List Group Scrollspy</h5>
                        <p class="f-m-light mt-1"> Scrollspy also works with <code>list-groups</code>. Scroll the area next
                            to
                            the list group and watch the active class change.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row gap-sm-0 gap-3">
                            <div class="col-sm-4">
                                <div class="list-group" id="list-example"><a
                                        class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a><a
                                        class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a><a
                                        class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a><a
                                        class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="scrollspy-example-3 custom-scrollbar" data-bs-spy="scroll"
                                    data-bs-target="#list-example" data-bs-smooth-scroll="true" tabindex="0">
                                    <h6 id="list-item-1">Item 1</h6>
                                    <p>This content is a stand-in for the scrollspy page. You'll notice that the relevant
                                        navigation
                                        link is highlighted as you scroll down the page. It appears again in the component
                                        example.
                                        Here, we'll continue to add sample copy to highlight the scrolling and
                                        highlighting.Keep in
                                        mind that the JavaScript plugin tries to pick the right element among all that may
                                        be visible.
                                        Multiple visible scrollspy targets at the same time may cause some issues.</p>
                                    <h6 id="list-item-2">Item 2</h6>
                                    <p>For the scrollspy page, this is some placeholder content. Take note of the
                                        highlighted
                                        navigation link at the bottom of the page as you scroll down. It appears again and
                                        again in
                                        the component example. To highlight the scrolling and highlighting, we're going to
                                        keep adding
                                        more sample copy here.Keep in mind that the JavaScript plugin tries to pick the
                                        right element
                                        among all that may be visible. Multiple visible scrollspy targets at the same time
                                        may cause
                                        some issues.</p>
                                    <h6 id="list-item-3">Item 3</h6>
                                    <p>The content that appears here is a placeholder for the scrollspy page. The relevant
                                        navigation link is highlighted as you scroll down the page. The component example
                                        contains
                                        repetitions of it. In order to highlight the scrolling and highlighting, we will
                                        continue to
                                        add more sample copy here.Keep in mind that the JavaScript plugin tries to pick the
                                        right
                                        element among all that may be visible. Multiple visible scrollspy targets at the
                                        same time may
                                        cause some issues.</p>
                                    <h6 id="list-item-4">Item 4</h6>
                                    <p>The content that appears here is a placeholder for the scrollspy page. The relevant
                                        navigation link is highlighted as you scroll down the page. The component example
                                        contains
                                        repetitions of it. In order to highlight the scrolling and highlighting, we will
                                        continue to
                                        add more sample copy here.Keep in mind that the JavaScript plugin tries to pick the
                                        right
                                        element among all that may be visible. Multiple visible scrollspy targets at the
                                        same time may
                                        cause some issues.</p>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#list-group-scroll-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="list-group-scroll-copy">&lt;div class="row gap-sm-0 gap-3"&gt;
   &lt;div class="col-sm-4"&gt;
       &lt;div class="list-group" id="list-example"&gt;&lt;a class="list-group-item list-group-item-action" href="#list-item-1"&gt;Item 1&lt;/a&gt;&lt;a class="list-group-item list-group-item-action" href="#list-item-2"&gt;Item 2&lt;/a&gt;&lt;a class="list-group-item list-group-item-action" href="#list-item-3"&gt;Item 3&lt;/a&gt;&lt;a class="list-group-item list-group-item-action" href="#list-item-4"&gt;Item 4&lt;/a&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-sm-8"&gt;
       &lt;div class="scrollspy-example-3 custom-scrollbar" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" tabindex="0"&gt;
           &lt;h6 id="list-item-1"&gt;Item 1&lt;/h6&gt;
           &lt;p&gt;This content is a stand-in for the scrollspy page. You'll notice that the relevant navigation link is highlighted as you scroll down the page. It appears again in the component example. Here, we'll continue to add sample copy to highlight the scrolling and highlighting.Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.&lt;/p&gt;
           &lt;h6 id="list-item-2"&gt;Item 2&lt;/h6&gt;
           &lt;p&gt;For the scrollspy page, this is some placeholder content. Take note of the highlighted navigation link at the bottom of the page as you scroll down. It appears again and again in the component example. To highlight the scrolling and highlighting, we're going to keep adding more sample copy here.Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.&lt;/p&gt;
           &lt;h6 id="list-item-3"&gt;Item 3&lt;/h6&gt;
           &lt;p&gt;The content that appears here is a placeholder for the scrollspy page. The relevant navigation link is highlighted as you scroll down the page. The component example contains repetitions of it. In order to highlight the scrolling and highlighting, we will continue to add more sample copy here.Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.&lt;/p&gt;
           &lt;h6 id="list-item-4"&gt;Item 4&lt;/h6&gt;
           &lt;p&gt;The content that appears here is a placeholder for the scrollspy page. The relevant navigation link is highlighted as you scroll down the page. The component example contains repetitions of it. In order to highlight the scrolling and highlighting, we will continue to add more sample copy here.Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.&lt;/p&gt;
       &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Scrollspy</h5>
                        <p class="f-m-light mt-1"> add <code>data-bs-spy="scroll" </code>and
                            <code>data-bs-target="#navId" </code> where navId is the unique id of the associated
                            navigation.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body nested-scrollspy custom-scrollspy-section">
                        <div class="row gap-xl-0 gap-4">
                            <div class="col-xxl-2 col-xl-3">
                                <nav class="h-100 flex-column align-items-stretch pe-4" id="navbar-scrollspy4">
                                    <nav class="nav nav-pills flex-column"> <a class="nav-link" href="#home1">Home <div
                                                class="custom-arrow"></div></a><a class="nav-link" href="#about-me">About
                                            Me<div class="custom-arrow"></div></a><a class="nav-link"
                                            href="#project1">Projects <div class="custom-arrow"></div></a><a
                                            class="nav-link" href="#experience1">Experiences<div class="custom-arrow">
                                            </div></a></nav>
                                </nav>
                            </div>
                            <div class="col-xxl-10 col-xl-9">
                                <div class="scrollspy-example-5 custom-scrollbar" data-bs-spy="scroll"
                                    data-bs-target="#navbar-scrollspy4" data-bs-smooth-scroll="true" tabindex="0">
                                    <div id="home1">
                                        <h6>Home</h6>
                                        <div class="common-align gap-3 align-items-lg-start">
                                            <div class="flex-shrink-0"><img class="img-fluid"
                                                    src="{{ asset('assets/images/banner/2.jpg') }}" alt=""></div>
                                            <div class="flex-grow-1"><span>This content is a stand-in for the scrollspy
                                                    page. You'll
                                                    notice that the relevant navigation link is highlighted as you scroll
                                                    down the page. It
                                                    appears again in the component example. Here, we'll continue to add
                                                    sample copy to
                                                    highlight the scrolling and highlighting.Remember that the JavaScript
                                                    plugin selects the
                                                    appropriate element from among those that might be displayed. There
                                                    could be some
                                                    problems if there are several scrollspy targets showing at once.Keep in
                                                    mind that the
                                                    JavaScript plugin tries to pick the right element among all that may be
                                                    visible.
                                                    Multiple visible scrollspy targets at the same time may cause some
                                                    issues.</span></div>
                                        </div>
                                    </div>
                                    <div class="common-p-space" id="about-me">
                                        <h6>About Me</h6>
                                        <div class="about-box common-align gap-3"><img class="img-fluid"
                                                src="{{ asset('assets/images/avtar/11.jpg') }}" alt="user">
                                            <div>
                                                <p>My name is Lichi Wallien is. I have four years of experience as a
                                                    software engineer and
                                                    finished my BE in 2022. I developed PHP and MySQL when I worked for
                                                    Lavender, and I
                                                    believe those skills will be useful in this position.</p><a
                                                    class="btn btn-primary" href="#!">Read more<span
                                                        class="ms-1"><svg class="fill-icon">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}">
                                                            </use>
                                                        </svg></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="common-p-space" id="project1">
                                        <h6>Projects</h6>
                                        <div class="row g-3 main-project">
                                            <div class="col-xl-12">
                                                <div class="light-card attendance-card">
                                                    <div class="left-overview-content">
                                                        <div class="svg-box"><svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#e-commerce-cart') }}">
                                                                </use>
                                                            </svg></div>
                                                    </div>
                                                    <div class="right-overview-content">
                                                        <div>
                                                            <h6>Websites for E-Commerce</h6><span
                                                                class="text-muted text-ellipsis">Created a
                                                                comprehensive e-commerce platform with the goal of improving
                                                                the online purchasing
                                                                experience. The project's goals were to offer a smooth
                                                                navigation system, a
                                                                user-friendly interface, and strong functionality to
                                                                accommodate a wide variety of
                                                                products.</span>
                                                        </div>
                                                        <div class="d-flex marks-count">
                                                            <h5>89/<sub class="text-muted">100</sub></h5>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <i class="icon-arrow-up txt-success pe-2 f-w-600"></i><span
                                                                    class="txt-success f-w-500">+80%</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="light-card attendance-card">
                                                    <div class="left-overview-content">
                                                        <div class="svg-box"><svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#robotics-project') }}">
                                                                </use>
                                                            </svg></div>
                                                    </div>
                                                    <div class="right-overview-content">
                                                        <div>
                                                            <h6>Robotics Sensor</h6><span
                                                                class="text-muted text-ellipsis">Lidar sensor array
                                                                was put into use for obstacle identification and real-time
                                                                mapping. With the use
                                                                of this data, the rover creates an extensive picture of its
                                                                environment that helps
                                                                it safely traverse difficult terrain.</span>
                                                        </div>
                                                        <div class="d-flex marks-count">
                                                            <h5>95/<sub class="text-muted">100</sub></h5>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <i class="icon-arrow-up txt-success pe-2 f-w-600"></i><span
                                                                    class="txt-success f-w-500">+97%</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="light-card attendance-card">
                                                    <div class="left-overview-content">
                                                        <div class="svg-box"><svg>
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#watch-app') }}">
                                                                </use>
                                                            </svg></div>
                                                    </div>
                                                    <div class="right-overview-content">
                                                        <div>
                                                            <h6>Watch Application</h6><span
                                                                class="text-muted text-ellipsis">Keeps an eye on key
                                                                health indicators like heart rate, steps taken, calories
                                                                burnt, and sleep habits.
                                                                makes use of cutting-edge algorithms to deliver precise and
                                                                useful health
                                                                insights.</span>
                                                        </div>
                                                        <div class="d-flex marks-count">
                                                            <h5>92/<sub class="text-muted">100</sub></h5>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <i class="icon-arrow-up txt-success pe-2 f-w-600"></i><span
                                                                    class="txt-success f-w-500">+94%</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="common-p-space" id="experience1">
                                        <h6>Experience</h6>
                                        <div class="row">
                                            <div class="col experience-section">
                                                <p class="mb-2">Wordpress</p>
                                                <div class="progress">
                                                    <div class="progress-bar text-center" role="progressbar"
                                                        style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                                                        aria-valuemax="100">50%</div>
                                                </div>
                                                <p class="mb-2">PHP</p>
                                                <div class="progress">
                                                    <div class="progress-bar text-center" role="progressbar"
                                                        style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100">30%</div>
                                                </div>
                                                <p class="mb-2">MYSQL</p>
                                                <div class="progress">
                                                    <div class="progress-bar text-center" role="progressbar"
                                                        style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                        aria-valuemax="100">60%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#custom-scroll-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="custom-scroll-copy">&lt;div class="row gap-xl-0 gap-4"&gt;
 &lt;div class="col-xxl-2 col-xl-3"&gt;
   &lt;nav class="h-100 flex-column align-items-stretch pe-4" id="navbar-scrollspy4"&gt;
     &lt;nav class="nav nav-pills flex-column"&gt; &lt;a class="nav-link" href="#home1"&gt;Home 
         &lt;div class="custom-arrow"&gt;&lt;/div&gt;&lt;/a&gt;&lt;a class="nav-link" href="#about-me"&gt;About Me
         &lt;div class="custom-arrow"&gt;&lt;/div&gt;&lt;/a&gt;&lt;a class="nav-link" href="#project1"&gt;Projects 
         &lt;div class="custom-arrow"&gt;&lt;/div&gt;&lt;/a&gt;&lt;a class="nav-link" href="#experience1"&gt;Experiences
         &lt;div class="custom-arrow"&gt;&lt;/div&gt;&lt;/a&gt;&lt;/nav&gt;
   &lt;/nav&gt;
 &lt;/div&gt;
 &lt;div class="col-xxl-10 col-xl-9"&gt;
   &lt;div class="scrollspy-example-5 custom-scrollbar" data-bs-spy="scroll" data-bs-target="#navbar-scrollspy4" data-bs-smooth-scroll="true" tabindex="0"&gt;
     &lt;div id="home1"&gt;
       &lt;h6&gt;Home&lt;/h6&gt;
       &lt;div class="common-align gap-3 align-items-lg-start"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;img class="img-fluid" src="{{ asset('assets/images/banner/2.jpg') }}" alt=""&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1"&gt;&lt;span&gt;This content is a stand-in for the scrollspy page. You'll notice that the relevant navigation link is highlighted as you scroll down the page. It appears again in the component example. Here, we'll continue to add sample copy to highlight the scrolling and highlighting.Remember that the JavaScript plugin selects the appropriate element from among those that might be displayed. There could be some problems if there are several scrollspy targets showing at once.Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.&lt;/span&gt;&lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="common-p-space" id="about-me"&gt;
       &lt;h6&gt;About Me&lt;/h6&gt;
       &lt;div class="about-box common-align gap-3"&gt;&lt;img class="img-fluid" src="{{ asset('assets/images/avtar/11.jpg') }}" alt="user"&gt;
         &lt;div&gt;
           &lt;p&gt;My name is Lichi Wallien is. I have four years of experience as a software engineer and finished my BE in 2022. I developed PHP and MySQL when I worked for Lavender, and I believe those skills will be useful in this position.&lt;/p&gt;&lt;a class="btn btn-primary" href="#!"&gt;Read more&lt;span class="ms-1"&gt;
               &lt;svg class="fill-icon"&gt;
                 &lt;use href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}"&gt;&lt;/use&gt;
               &lt;/svg&gt;&lt;/span&gt;&lt;/a&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="common-p-space" id="project1"&gt;
       &lt;h6&gt;Projects&lt;/h6&gt;
       &lt;div class="row g-3 main-project"&gt;
         &lt;div class="col-xl-12"&gt; 
           &lt;div class="light-card attendance-card"&gt;
             &lt;div class="left-overview-content"&gt;
               &lt;div class="svg-box"&gt;
                 &lt;svg&gt; 
                   &lt;use href="{{ asset('assets/svg/icon-sprite.svg#e-commerce-cart') }}"&gt;&lt;/use&gt;
                 &lt;/svg&gt;
               &lt;/div&gt;
             &lt;/div&gt;
             &lt;div class="right-overview-content"&gt;
               &lt;div&gt; 
                 &lt;h6&gt;Websites for E-Commerce&lt;/h6&gt;&lt;span class="text-muted text-ellipsis"&gt;Created a comprehensive e-commerce platform with the goal of improving the online purchasing experience. The project's goals were to offer a smooth navigation system, a user-friendly interface, and strong functionality to accommodate a wide variety of products.&lt;/span&gt;
               &lt;/div&gt;
               &lt;div class="d-flex marks-count"&gt;
                 &lt;h5&gt;89/&lt;sub class="text-muted"&gt;100&lt;/sub&gt;&lt;/h5&gt;
                 &lt;div class="d-flex justify-content-center align-items-center"&gt;&lt;i class="icon-arrow-up txt-success pe-2 f-w-600"&gt;&lt;/i&gt;&lt;span class="txt-success f-w-500"&gt;+80%&lt;/span&gt;&lt;/div&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="col-xl-12"&gt; 
           &lt;div class="light-card attendance-card"&gt;
             &lt;div class="left-overview-content"&gt;
               &lt;div class="svg-box"&gt;
                 &lt;svg&gt; 
                   &lt;use href="{{ asset('assets/svg/icon-sprite.svg#robotics-project') }}"&gt;&lt;/use&gt;
                 &lt;/svg&gt;
               &lt;/div&gt;
             &lt;/div&gt;
             &lt;div class="right-overview-content"&gt;
               &lt;div&gt; 
                 &lt;h6&gt;Robotics Sensor&lt;/h6&gt;&lt;span class="text-muted text-ellipsis"&gt;Lidar sensor array was put into use for obstacle identification and real-time mapping. With the use of this data, the rover creates an extensive picture of its environment that helps it safely traverse difficult terrain.&lt;/span&gt;
               &lt;/div&gt;
               &lt;div class="d-flex marks-count"&gt;
                 &lt;h5&gt;95/&lt;sub class="text-muted"&gt;100&lt;/sub&gt;&lt;/h5&gt;
                 &lt;div class="d-flex justify-content-center align-items-center"&gt;&lt;i class="icon-arrow-up txt-success pe-2 f-w-600"&gt;&lt;/i&gt;&lt;span class="txt-success f-w-500"&gt;+97%&lt;/span&gt;&lt;/div&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="col-xl-12"&gt; 
           &lt;div class="light-card attendance-card"&gt;
             &lt;div class="left-overview-content"&gt;
               &lt;div class="svg-box"&gt;
                 &lt;svg&gt; 
                   &lt;use href="{{ asset('assets/svg/icon-sprite.svg#watch-app') }}"&gt;&lt;/use&gt;
                 &lt;/svg&gt;
               &lt;/div&gt;
             &lt;/div&gt;
             &lt;div class="right-overview-content"&gt;
               &lt;div&gt; 
                 &lt;h6&gt;Watch Application&lt;/h6&gt;&lt;span class="text-muted text-ellipsis"&gt;Keeps an eye on key health indicators like heart rate, steps taken, calories burnt, and sleep habits. makes use of cutting-edge algorithms to deliver precise and useful health insights.&lt;/span&gt;
               &lt;/div&gt;
               &lt;div class="d-flex marks-count"&gt;
                 &lt;h5&gt;92/&lt;sub class="text-muted"&gt;100&lt;/sub&gt;&lt;/h5&gt;
                 &lt;div class="d-flex justify-content-center align-items-center"&gt;&lt;i class="icon-arrow-up txt-success pe-2 f-w-600"&gt;&lt;/i&gt;&lt;span class="txt-success f-w-500"&gt;+94%&lt;/span&gt;&lt;/div&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="common-p-space" id="experience1"&gt;
       &lt;h6&gt;Experience&lt;/h6&gt;
       &lt;div class="row"&gt;
         &lt;div class="col experience-section"&gt;
           &lt;p class="mb-2"&gt;Wordpress&lt;/p&gt;
           &lt;div class="progress"&gt;
             &lt;div class="progress-bar text-center" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"&gt;50%&lt;/div&gt;
           &lt;/div&gt;
           &lt;p class="mb-2"&gt;PHP&lt;/p&gt;
           &lt;div class="progress"&gt;
             &lt;div class="progress-bar text-center" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;30%&lt;/div&gt;
           &lt;/div&gt;
           &lt;p class="mb-2"&gt;MYSQL&lt;/p&gt;
           &lt;div class="progress"&gt;
             &lt;div class="progress-bar text-center" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"&gt;60%&lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;                                                         </code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/scrollspy/common-scrollspy.js') }}"></script>
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
@endsection
