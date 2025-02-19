@extends('layouts.simple.master')

@section('title', 'Tabs')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Bootstrap Tabs</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Tabs</li>
                        <li class="breadcrumb-item active">Bootstrap Tabs</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Simple Tabs</h5>
                        <p class="mt-1 f-m-light">Use <code>nav-link</code> with <code>active</code> class to jump
                            particular
                            tabs.</p>
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
                        <ul class="simple-wrapper nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link txt-primary" id="home-tab" data-bs-toggle="tab"
                                    href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a></li>
                            <li class="nav-item"><a class="nav-link active txt-primary" id="profile-tabs"
                                    data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                    aria-selected="false">Profile</a></li>
                            <li class="nav-item"><a class="nav-link txt-primary" id="contact-tab" data-bs-toggle="tab"
                                    href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p class="pt-3">This is some placeholder content the <b>Home tab's </b>associated content.
                                    Clicking another tab will toggle the visibility of this one for the next. The tab
                                    JavaScript
                                    swaps classes to control the content visibility and styling. You can use it with tabs,
                                    pills,
                                    and any other .nav-powered navigation. Bootstrap provides a flexible and easy-to-use tab
                                    component that allows developers to create tabbed navigation effortlessly.</p>
                            </div>
                            <div class="tab-pane fade show active" id="profile" role="tabpanel"
                                aria-labelledby="profile-tabs">
                                <div class="pt-3 mb-0">
                                    <div class="flex-space flex-wrap align-items-center"><img class="tab-img"
                                            src="{{ asset('assets/images/avtar/3.jpg') }}" alt="profile">
                                        <ul class="d-flex flex-column gap-1">
                                            <li> <strong>Visit Us:</strong> 2600 Hollywood Blvd,Florida, United States-33020
                                            </li>
                                            <li> <strong>Mail Us:</strong> contact@us@gmail.com</li>
                                            <li><strong>Contact Number: </strong> (954) 357-7760</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <ul class="pt-3 d-flex flex-column gap-1">
                                    <li>Us Technology offers web & mobile development solutions for all industry
                                        verticals.Include a
                                        short form using fields that'll help your business understand who's contacting them.
                                    </li>
                                    <li> <strong>Visit Us: </strong> 2600 Hollywood Blvd,Florida, United States- 33020</li>
                                    <li> <strong>Mail Us:</strong> contact@us@gmail.com</li>
                                    <li> <strong>Contact Number: </strong> (954) 357-7760</li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#simple-tabs" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="simple-tabs">&lt;ul class="simple-wrapper nav nav-tabs" id="myTab" role="tablist"&gt;
 &lt;li class="nav-item"&gt;&lt;a class="nav-link txt-primary" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"&gt;Home&lt;/a&gt;&lt;/li&gt;
 &lt;li class="nav-item"&gt;&lt;a class="nav-link active txt-primary" id="profile-tabs" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"&gt;Profile&lt;/a&gt;&lt;/li&gt;
 &lt;li class="nav-item"&gt;&lt;a class="nav-link txt-primary" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"&gt;Contact&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="myTabContent"&gt;
 &lt;div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab"&gt;
   &lt;p class="pt-3"&gt;This is some placeholder content the&lt;b&gt;Home tab's&lt;/b&gt;associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation. Bootstrap provides a flexible and easy-to-use tab component that allows developers to create tabbed navigation effortlessly.&lt;/p&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tabs"&gt;
   &lt;div class="pt-3 mb-0"&gt;
     &lt;div class="flex-space flex-wrap align-items-center"&gt;&lt;img class="tab-img" src="{{ asset('assets/images/avtar/3.jpg') }}" alt="profile"&gt;
       &lt;ul class="d-flex flex-column gap-1"&gt;
         &lt;li&gt;
           &lt;strong&gt;Visit Us:&lt;/strong&gt;2600 Hollywood Blvd,Florida, United States-33020
         &lt;/li&gt;
         &lt;li&gt;
           &lt;strong&gt;Mail Us:&lt;/strong&gt;contact@us@gmail.com
         &lt;/li&gt;
         &lt;li&gt;
           &lt;strong&gt;Contact Number:&lt;/strong&gt;(954) 357-7760
         &lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"&gt;
   &lt;ul class="pt-3 d-flex flex-column gap-1"&gt;
     &lt;li&gt;Us Technology offers web & mobile development solutions for all industry verticals.Include a short form using fields that'll help your business understand who's contacting them.&lt;/li&gt;
     &lt;li&gt;
       &lt;strong&gt;Visit Us:&lt;/strong&gt;2600 Hollywood Blvd,Florida, United States-33020
     &lt;/li&gt;
     &lt;li&gt;
       &lt;strong&gt;Mail Us:&lt;/strong&gt;contact@us@gmail.com
     &lt;/li&gt;
     &lt;li&gt;
       &lt;strong&gt;Contact Number:&lt;/strong&gt;(954) 357-7760
     &lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Icons with Tabs</h5>
                        <p class="mt-1 f-m-light">Use <code>nav-link </code>with <code>active </code>class to switch
                            particular tabs and with <code>"Ico" </code>icons you can take <code>"tab".</code></p>
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
                        <ul class="nav nav-tabs" id="icon-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active txt-secondary" id="icon-home-tab"
                                    data-bs-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home"
                                    aria-selected="true"> <i class="icofont icofont-ui-home"></i>Home</a></li>
                            <li class="nav-item"><a class="nav-link txt-secondary" id="profile-icon-tabs"
                                    data-bs-toggle="tab" href="#profile-icon" role="tab"
                                    aria-controls="profile-icon" aria-selected="false"><i
                                        class="icofont icofont-man-in-glasses"></i>Profile</a></li>
                            <li class="nav-item"><a class="nav-link txt-secondary" id="contact-icon-tab"
                                    data-bs-toggle="tab" href="#contact-icon" role="tab"
                                    aria-controls="contact-icon" aria-selected="false"><i
                                        class="icofont icofont-contacts"></i>Contact</a></li>
                        </ul>
                        <div class="tab-content" id="icon-tabContent">
                            <div class="tab-pane fade show active" id="icon-home" role="tabpanel"
                                aria-labelledby="icon-home-tab">
                                <p class="pt-3"> This is some placeholder content the <b>home tab's</b> associated
                                    content.
                                    Clicking another tab will toggle the visibility of this one for the next. The tab
                                    JavaScript
                                    swaps classes to control the content visibility and styling. You can use it with tabs,
                                    pills,
                                    and any other .nav-powered navigation. Bootstrap provides a flexible and easy-to-use tab
                                    component that allows developers to create tabbed navigation effortlessly.</p>
                            </div>
                            <div class="tab-pane fade" id="profile-icon" role="tabpanel"
                                aria-labelledby="profile-icon-tabs">
                                <div class="pt-3 mb-0">
                                    <div class="flex-space flex-wrap align-items-center"><img class="tab-img"
                                            src="{{ asset('assets/images/avtar/7.jpg') }}" alt="profile">
                                        <ul class="d-flex flex-column gap-1">
                                            <li> <strong>Visit Us: </strong> 278 Green Avenue Oakland, CA 94612</li>
                                            <li><strong>Mail Us:</strong> MichaelMMcGowan@teleworm.us</li>
                                            <li><strong>Contact Number: </strong> 510-767-0025</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact-icon" role="tabpanel"
                                aria-labelledby="contact-icon-tab">
                                <p class="pt-3">Us Technology offers web & mobile development solutions for all industry
                                    verticals.Include a short form using fields that'll help your business understand who's
                                    contacting them. </p><label class="form-label" for="exampleFormControlone">Email
                                    Address</label><input class="form-control" id="exampleFormControlone" type="email"
                                    placeholder="youremail@gmail.com">
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#icon-tab-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="icon-tab-copy">&lt;ul class="nav nav-tabs" id="icon-tab" role="tablist"&gt;
 &lt;li class="nav-item"&gt;
   &lt;a class="nav-link active txt-secondary" id="icon-home-tab" data-bs-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"&gt;
     &lt;i class="icofont icofont-ui-home"&gt;&lt;/i&gt;Home
   &lt;/a&gt;
 &lt;/li&gt;
 &lt;li class="nav-item"&gt;
   &lt;a class="nav-link txt-secondary" id="profile-icon-tabs" data-bs-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile-icon" aria-selected="false"&gt;
     &lt;i class="icofont icofont-man-in-glasses"&gt;&lt;/i&gt;Profile
   &lt;/a&gt;
 &lt;/li&gt;
 &lt;li class="nav-item"&gt;
   &lt;a class="nav-link txt-secondary" id="contact-icon-tab" data-bs-toggle="tab" href="#contact-icon" role="tab" aria-controls="contact-icon" aria-selected="false"&gt;
     &lt;i class="icofont icofont-contacts"&gt;&lt;/i&gt;Contact
   &lt;/a&gt;
 &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="icon-tabContent"&gt;
 &lt;div class="tab-pane fade show active" id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab"&gt;
   &lt;p class="pt-3"&gt;This is some placeholder content the&lt;b&gt;home tab's&lt;/b&gt;associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation. Bootstrap provides a flexible and easy-to-use tab component that allows developers to create tabbed navigation effortlessly.&lt;/p&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade" id="profile-icon" role="tabpanel" aria-labelledby="profile-icon-tabs"&gt;
   &lt;div class="pt-3 mb-0"&gt;
     &lt;div class="flex-space flex-wrap align-items-center"&gt;
       &lt;img class="tab-img" src="{{ asset('assets/images/avtar/7.jpg') }}" alt="profile"&gt;
       &lt;ul class="d-flex flex-column gap-1"&gt;
         &lt;li&gt;
           &lt;strong&gt;Visit Us:&lt;/strong&gt;278 Green Avenue Oakland, CA 94612
         &lt;/li&gt;
         &lt;li&gt;
           &lt;strong&gt;Mail Us:&lt;/strong&gt;MichaelMMcGowan@teleworm.us
         &lt;/li&gt;
         &lt;li&gt;
           &lt;strong&gt;Contact Number:&lt;/strong&gt;510-767-0025
         &lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade" id="contact-icon" role="tabpanel" aria-labelledby="contact-icon-tab"&gt;
   &lt;p class="pt-3"&gt;Us Technology offers web & mobile development solutions for all industry verticals.Include a short form using fields that'll help your business understand who's contacting them.&lt;/p&gt;
   &lt;label class="form-label" for="exampleFormControlone"&gt;Email Address&lt;/label&gt;
   &lt;input class="form-control" id="exampleFormControlone" type="email" placeholder="youremail@gmail.com"&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xxl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Vertical Tabs</h5>
                        <p class="mt-1 f-m-light">Use <code>#var-pills-tab</code> id to change vertical tabs.</p>
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
                    <div class="card-body main-vertical-tab">
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <div class="nav flex-column nav-pills nav-secondary" id="ver-pills-tab" role="tablist"
                                    aria-orientation="vertical"><a class="nav-link" id="ver-pills-home-tab"
                                        data-bs-toggle="pill" href="#ver-pills-home" role="tab"
                                        aria-controls="ver-pills-home" aria-selected="true">Home</a><a
                                        class="nav-link active" id="ver-pills-components-tab" data-bs-toggle="pill"
                                        href="#ver-pills-components" role="tab" aria-controls="ver-pills-components"
                                        aria-selected="false">Components</a><a class="nav-link" id="ver-pills-pages-tab"
                                        data-bs-toggle="pill" href="#ver-pills-pages" role="tab"
                                        aria-controls="ver-pills-pages" aria-selected="false">Pages<span
                                            class="badge badge-light-light p-1 px-2">3</span></a><a class="nav-link"
                                        id="ver-pills-settings-tab" data-bs-toggle="pill" href="#ver-pills-settings"
                                        role="tab" aria-controls="ver-pills-settings"
                                        aria-selected="false">Settings</a></div>
                            </div>
                            <div class="col-md-8 col-xs-12">
                                <div class="tab-content" id="ver-pills-tabContent">
                                    <div class="tab-pane fade" id="ver-pills-home" role="tabpanel"
                                        aria-labelledby="ver-pills-home-tab">
                                        <p>This is some placeholder content the <b>Home tab's </b> associated content.
                                            Clicking
                                            another tab will toggle the visibility of this one for the next. The tab
                                            JavaScript swaps
                                            classes to control the content visibility and styling. You can use it with tabs,
                                            pills, and
                                            any other <b>.nav</b>-powered navigation.</p>
                                    </div>
                                    <div class="tab-pane fade show active" id="ver-pills-components" role="tabpanel"
                                        aria-labelledby="ver-pills-components-tab">
                                        <p>This is some placeholder content the <b>Component tab's </b> associated content.
                                            Clicking
                                            another tab will toggle the visibility of this one for the next. The tab
                                            JavaScript swaps
                                            classes to control the content visibility and styling. You can use it with tabs,
                                            pills, and
                                            any other <b>.nav</b>-powered navigation.</p>
                                    </div>
                                    <div class="tab-pane fade" id="ver-pills-pages" role="tabpanel"
                                        aria-labelledby="ver-pills-pages-tab">
                                        <p>This is some placeholder content the <b>Page tab's </b> associated content.
                                            Clicking
                                            another tab will toggle the visibility of this one for the next. The tab
                                            JavaScript swaps
                                            classes to control the content visibility and styling. You can use it with tabs,
                                            pills, and
                                            any other <b>.nav</b>-powered navigation.</p>
                                    </div>
                                    <div class="tab-pane fade" id="ver-pills-settings" role="tabpanel"
                                        aria-labelledby="ver-pills-settings-tab">
                                        <p>This is some placeholder content the <b>Setting tab's </b> associated content.
                                            Clicking
                                            another tab will toggle the visibility of this one for the next. The tab
                                            JavaScript swaps
                                            classes to control the content visibility and styling. You can use it with tabs,
                                            pills, and
                                            any other <b>.nav</b>-powered navigation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#vertical-tab-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="vertical-tab-copy">&lt;div class="row"&gt;    
 &lt;div class="col-md-4 col-xs-12"&gt;
   &lt;div class="nav flex-column nav-pills nav-secondary" id="ver-pills-tab" role="tablist" aria-orientation="vertical"&gt;&lt;a class="nav-link" id="ver-pills-home-tab" data-bs-toggle="pill" href="#ver-pills-home" role="tab" aria-controls="ver-pills-home" aria-selected="true"&gt;Home&lt;/a&gt;&lt;a class="nav-link active" id="ver-pills-components-tab" data-bs-toggle="pill" href="#ver-pills-components" role="tab" aria-controls="ver-pills-components" aria-selected="false"&gt;Components&lt;/a&gt;&lt;a class="nav-link" id="ver-pills-pages-tab" data-bs-toggle="pill" href="#ver-pills-pages" role="tab" aria-controls="ver-pills-pages" aria-selected="false"&gt;Pages&lt;span class="badge badge-light-light p-1 px-2"&gt;3&lt;/span&gt;&lt;/a&gt;&lt;a class="nav-link" id="ver-pills-settings-tab" data-bs-toggle="pill" href="#ver-pills-settings" role="tab" aria-controls="ver-pills-settings" aria-selected="false"&gt;Settings&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-md-8 col-xs-12"&gt;
   &lt;div class="tab-content" id="ver-pills-tabContent"&gt;
     &lt;div class="tab-pane fade" id="ver-pills-home" role="tabpanel" aria-labelledby="ver-pills-home-tab"&gt;
       &lt;p&gt;This is some placeholder content the&lt;b&gt;Home tab's&lt;/b&gt;associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other&lt;b&gt;.nav&lt;/b&gt;-powered navigation.&lt;/p&gt;
     &lt;/div&gt;
     &lt;div class="tab-pane fade show active" id="ver-pills-components" role="tabpanel" aria-labelledby="ver-pills-components-tab"&gt;
       &lt;p&gt;This is some placeholder content the&lt;b&gt;Component tab's&lt;/b&gt;associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other&lt;b&gt;.nav&lt;/b&gt;-powered navigation.&lt;/p&gt;
     &lt;/div&gt;
     &lt;div class="tab-pane fade" id="ver-pills-pages" role="tabpanel" aria-labelledby="ver-pills-pages-tab"&gt;
       &lt;p&gt;This is some placeholder content the&lt;b&gt;Page tab's&lt;/b&gt;associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other&lt;b&gt;.nav&lt;/b&gt;-powered navigation.&lt;/p&gt;
     &lt;/div&gt;
     &lt;div class="tab-pane fade" id="ver-pills-settings" role="tabpanel" aria-labelledby="ver-pills-settings-tab"&gt;
       &lt;p&gt;This is some placeholder content the&lt;b&gt;Setting tab's&lt;/b&gt;associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other&lt;b&gt;.nav&lt;/b&gt;-powered navigation.&lt;/p&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xxl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Pills Tabs</h5>
                        <p class="mt-1 f-m-light">Use <code>data-bs-toggle="pill"</code> for tabs pill shape.</p>
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
                        <ul class="nav nav-pills nav-primary" id="pills-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link" id="pills-aboutus-tab" data-bs-toggle="pill"
                                    href="#pills-aboutus" role="tab" aria-controls="pills-aboutus"
                                    aria-selected="true">About us</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" id="pills-contactus-tab" data-bs-toggle="pill"
                                    href="#pills-contactus" role="tab" aria-controls="pills-contactus"
                                    aria-selected="false">Contact
                                    us</a></li>
                            <li class="nav-item"><a class="nav-link active" id="pills-blog-tab" data-bs-toggle="pill"
                                    href="#pills-blog" role="tab" aria-controls="pills-blog"
                                    aria-selected="false">Blog </a></li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade" id="pills-aboutus" role="tabpanel"
                                aria-labelledby="pills-aboutus-tab">
                                <p class="pt-3">The ultimate goal of every web design is to create a site that will reach
                                    its
                                    audience and be useful to them. In order to achieve that, it is necessary to befriend
                                    Google's
                                    mechanisms and algorithms. There is no use of a pretty website, if it's displayed on a
                                    10th page
                                    of search results, because this way no one will ever find it. That brings us to the
                                    topic of
                                    Google's Website Ranking.Generally speaking, it's a list of pages and their keywords,
                                    sorted in
                                    the order of search results. The higher your place in the ranking is, the more people
                                    are likely
                                    to see your page.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-contactus" role="tabpanel"
                                aria-labelledby="pills-contactus-tab">
                                <ul class="d-flex flex-column gap-1 pt-3">
                                    <li> Create professional web page design. Responsive, fully customizable with easy
                                        drag-n-drop
                                        nice page editor. Adjust colors, fonts, header and footer, layout and other design
                                        elements,
                                        as well as content and images.</li>
                                    <li><strong>Visit Us: </strong> 4 Marigold Close, Glenmore Park, New South Wales, 2745
                                        Australia- 2745</li>
                                    <li> <strong>Mail Us:</strong> SamuelMario@armyspy.com</li>
                                    <li> <strong>Contact Number: </strong> (02) 4733 6337</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade show active" id="pills-blog" role="tabpanel"
                                aria-labelledby="pills-blog-tab">
                                <div class="pt-3 d-flex align-items-center gap-3 pills-blogger">
                                    <div class="blog-wrapper"> <img class="blog-img"
                                            src="{{ asset('assets/images/dashboard-2/headphones.png') }}"
                                            alt="head-phone"></div>
                                    <div class="blog-content">
                                        <p> <strong>Smart headphones</strong> — also called smart earbuds or hearable — are
                                            high-tech
                                            in-ear devices that do more than transmit audio. These headphones are usually
                                            wireless, and
                                            they can sync up with your phone, tablet, computer or other Bluetooth-enabled
                                            device. The
                                            main appeal of hearables is convenience, as they allow you to complete common
                                            tasks without
                                            directly accessing your phone or computer. Smart wireless headphones sync up to
                                            other
                                            devices using Bluetooth technology, and many of their features rely on data from
                                            your
                                            smartphone or computer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#pills-tab-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="pills-tab-copy">&lt;ul class="nav nav-pills nav-primary" id="pills-tab" role="tablist"&gt;
 &lt;li class="nav-item"&gt;
   &lt;a class="nav-link" id="pills-aboutus-tab" data-bs-toggle="pill" href="#pills-aboutus" role="tab" aria-controls="pills-aboutus" aria-selected="true"&gt;About us
   &lt;/a&gt;
 &lt;/li&gt;
 &lt;li class="nav-item"&gt;
   &lt;a class="nav-link" id="pills-contactus-tab" data-bs-toggle="pill" href="#pills-contactus" role="tab" aria-controls="pills-contactus" aria-selected="false"&gt;Contact us
   &lt;/a&gt;
 &lt;/li&gt;
 &lt;li class="nav-item"&gt;
   &lt;a class="nav-link active" id="pills-blog-tab" data-bs-toggle="pill" href="#pills-blog" role="tab" aria-controls="pills-blog" aria-selected="false"&gt;Blog
   &lt;/a&gt;
 &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="pills-tabContent"&gt;
 &lt;div class="tab-pane fade" id="pills-aboutus" role="tabpanel" aria-labelledby="pills-aboutus-tab"&gt;
   &lt;p class="pt-3"&gt;The ultimate goal of every web design is to create a site that will reach its audience and be useful to them. In order to achieve that, it is necessary to befriend Google's mechanisms and algorithms. There is no use of a pretty website, if it's displayed on a 10th page of search results, because this way no one will ever find it. That brings us to the topic of Google's Website Ranking.Generally speaking, it's a list of pages and their keywords, sorted in the order of search results. The higher your place in the ranking is, the more people are likely to see your page.&lt;/p&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade" id="pills-contactus" role="tabpanel" aria-labelledby="pills-contactus-tab"&gt;
   &lt;ul class="d-flex flex-column gap-1 pt-3"&gt;
     &lt;li&gt;Create professional web page design. Responsive, fully customizable with easy drag-n-drop nice page editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.&lt;/li&gt;
     &lt;li&gt;
       &lt;strong&gt;Visit Us:&lt;/strong&gt;4 Marigold Close, Glenmore Park, New South Wales, 2745 Australia- 2745
     &lt;/li&gt;
     &lt;li&gt;
       &lt;strong&gt;Mail Us:&lt;/strong&gt;SamuelMario@armyspy.com
     &lt;/li&gt;
     &lt;li&gt;
       &lt;strong&gt;Contact Number:&lt;/strong&gt;(02) 4733 6337
     &lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade show active" id="pills-blog" role="tabpanel" aria-labelledby="pills-blog-tab"&gt;
   &lt;div class="pt-3 d-flex align-items-center gap-3 pills-blogger"&gt; 
     &lt;div class="blog-wrapper"&gt;
       &lt;img class="blog-img" src="{{ asset('assets/images/dashboard-2/headphones.png') }}" alt="head-phone"&gt;
     &lt;/div&gt;
     &lt;div class="blog-content"&gt; 
       &lt;p&gt;
         &lt;strong&gt;Smart headphones&lt;/strong&gt; — also called smart earbuds or hearable — are high-tech in-ear devices that do more than transmit audio. These headphones are usually wireless, and they can sync up with your phone, tablet, computer or other Bluetooth-enabled device. The main appeal of hearables is convenience, as they allow you to complete common tasks without directly accessing your phone or computer. Smart wireless headphones sync up to other devices using Bluetooth technology, and many of their features rely on data from your smartphone or computer.
       &lt;/p&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Justify Tabs</h5>
                        <p class="mt-1 f-m-light">Use <code>nav-link</code> with <code>active </code>class and set content
                            using flex property.</p>
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
                        <div
                            class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2 pb-2 p-0">
                            <p>CUBA Profiles For New Employees:</p>
                            <ul class="nav nav-pills nav-primary" id="j-pills-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link" id="j-pills-web-designer-tab"
                                        data-bs-toggle="pill" href="#j-pills-web-designer" role="tab"
                                        aria-controls="j-pills-web-designer" aria-selected="true"> Web designer</a></li>
                                <li class="nav-item"><a class="nav-link active" id="j-pills-UX-designer-tab"
                                        data-bs-toggle="pill" href="#j-pills-UX-designer" role="tab"
                                        aria-controls="j-pills-UX-designer" aria-selected="false">UX designer</a></li>
                                <li class="nav-item"><a class="nav-link" id="j-pills-IOT-developer-tab"
                                        data-bs-toggle="pill" href="#j-pills-IOT-developer" role="tab"
                                        aria-controls="j-pills-IOT-developer" aria-selected="false">IOT developer</a></li>
                            </ul>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <div class="tab-content" id="j-pills-tabContent">
                                <div class="tab-pane fade" id="j-pills-web-designer" role="tabpanel"
                                    aria-labelledby="j-pills-web-designer-tab">
                                    <div class="designer-details">
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/user/3.png') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Kathy M. Anderson</h6>
                                                    <p>440-494-0729</p>
                                                </div>
                                            </div>
                                        </div>
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
                                                    src="{{ asset('assets/images/user/2.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Carolyn A. Sutton</h6>
                                                    <p>218-793-6609</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/avtar/11.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Mary O. Miller</h6>
                                                    <p>720-744-0921</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/avtar/16.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Patricia H. Hummel</h6>
                                                    <p>314-445-1451</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/blog/4.jpg') }}" alt="profile">
                                                <div class="designer-content">
                                                    <h6>Minnie F. Evans</h6>
                                                    <p>718-740-8438</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="j-pills-UX-designer" role="tabpanel"
                                    aria-labelledby="j-pills-UX-designer-tab">
                                    <div class="designer-details">
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                    alt="profile">
                                                <div class="designer-content">
                                                    <h6>Thomas A. Leroy</h6>
                                                    <p>305-539-6871</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                    alt="profile">
                                                <div class="designer-content">
                                                    <h6>Mark S. Ward</h6>
                                                    <p>303-561-8880</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                    alt="profile">
                                                <div class="designer-content">
                                                    <h6>Emily T. Hooper</h6>
                                                    <p>301-553-1836</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                    alt="profile">
                                                <div class="designer-content">
                                                    <h6>Natasha W. Watson</h6>
                                                    <p>267-605-4499</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}"
                                                    alt="profile">
                                                <div class="designer-content">
                                                    <h6>Jennifer A. Camacho</h6>
                                                    <p>770-527-7554</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                    alt="profile">
                                                <div class="designer-content">
                                                    <h6>Ann J. Strickland</h6>
                                                    <p>469-218-4678</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="j-pills-IOT-developer" role="tabpanel"
                                    aria-labelledby="j-pills-IOT-developer-tab">
                                    <div class="designer-details">
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                    alt="profile">
                                                <div class="designer-content">
                                                    <h6>Jaclyn T. Duncan</h6>
                                                    <p>413-618-9222</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                    alt="profile">
                                                <div class="designer-content">
                                                    <h6>Christine H. Lin</h6>
                                                    <p>909-219-0342</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                    alt="profile">
                                                <div class="designer-content">
                                                    <h6>Ronnie S. Mountain</h6>
                                                    <p>978-426-9732</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                    alt="profile">
                                                <div class="designer-content">
                                                    <h6>Louise A. Hilliard</h6>
                                                    <p>502-262-5600</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/dashboard-9/user/3.png') }}"
                                                    alt="profile">
                                                <div class="designer-content">
                                                    <h6>Kayla Hutt</h6>
                                                    <p>312-456-8275</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="designer-profile">
                                            <div class="designer-wrap"><img class="designer-img"
                                                    src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                    alt="profile">
                                                <div class="designer-content">
                                                    <h6>Amber Cecil</h6>
                                                    <p>802-662-2407</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#justify-tab-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="justify-tab-copy">&lt;div class="tab-content" id="j-pills-tabContent"&gt;
 &lt;div class="tab-pane fade" id="j-pills-web-designer" role="tabpanel" aria-labelledby="j-pills-web-designer-tab"&gt;
   &lt;div class="designer-details"&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/user/3.png') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Kathy M. Anderson&lt;/h6&gt;
           &lt;p&gt;440-494-0729&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/avtar/4.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Lillian J. Goodfellow&lt;/h6&gt;
           &lt;p&gt;239-664-7751&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/user/2.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Carolyn A. Sutton&lt;/h6&gt;
           &lt;p&gt;218-793-6609&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/avtar/11.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Mary O. Miller&lt;/h6&gt;
           &lt;p&gt;720-744-0921&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/avtar/16.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Patricia H. Hummel&lt;/h6&gt;
           &lt;p&gt;314-445-1451&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/blog/4.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Minnie F. Evans&lt;/h6&gt;
           &lt;p&gt;718-740-8438&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade show active" id="j-pills-UX-designer" role="tabpanel" aria-labelledby="j-pills-UX-designer-tab"&gt;
   &lt;div class="designer-details"&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Thomas A. Leroy&lt;/h6&gt;
           &lt;p&gt;305-539-6871&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Mark S. Ward&lt;/h6&gt;
           &lt;p&gt;303-561-8880&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Emily T. Hooper&lt;/h6&gt;
           &lt;p&gt;301-553-1836&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Natasha W. Watson&lt;/h6&gt;
           &lt;p&gt;267-605-4499&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Jennifer A. Camacho&lt;/h6&gt;
           &lt;p&gt;770-527-7554&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Ann J. Strickland&lt;/h6&gt;
           &lt;p&gt;469-218-4678&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade" id="j-pills-IOT-developer" role="tabpanel" aria-labelledby="j-pills-IOT-developer-tab"&gt;
   &lt;div class="designer-details"&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Jaclyn T. Duncan&lt;/h6&gt;
           &lt;p&gt;413-618-9222&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Christine H. Lin&lt;/h6&gt;
           &lt;p&gt;909-219-0342&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Ronnie S. Mountain&lt;/h6&gt;
           &lt;p&gt;978-426-9732&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Louise A. Hilliard&lt;/h6&gt;
           &lt;p&gt;502-262-5600&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/dashboard-9/user/3.png') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Kayla Hutt&lt;/h6&gt;
           &lt;p&gt;312-456-8275&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="designer-profile"&gt; 
       &lt;div class="designer-wrap"&gt;&lt;img class="designer-img" src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}" alt="profile"&gt;
         &lt;div class="designer-content"&gt; 
           &lt;h6&gt;Amber Cecil&lt;/h6&gt;
           &lt;p&gt;802-662-2407&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Material Style Left Tabs</h5>
                        <p class="mt-1 f-m-light">Use <code>nav-link </code>with <code>active </code>class for switching to
                            another tabs and<code> aria-orientation='vertical'</code>for vertical tabs.</p>
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
                        <div class="tabs-responsive-side">
                            <div class="material-wrapper">
                                <div class="d-flex">
                                    <div class="nav flex-column nav-secondary border-tab nav-left" id="sideline-tab"
                                        role="tablist" aria-orientation="vertical"><a class="nav-link nav-effect active"
                                            id="sideline-home-tab" data-bs-toggle="pill" href="#sideline-home"
                                            role="tab" aria-controls="sideline-home" aria-selected="true">Home</a><a
                                            class="nav-link nav-effect" id="sideline-profile-tab" data-bs-toggle="pill"
                                            href="#sideline-profile" role="tab" aria-controls="sideline-profile"
                                            aria-selected="false">Profile</a><a class="nav-link nav-effect"
                                            id="sideline-messages-tab" data-bs-toggle="pill" href="#sideline-messages"
                                            role="tab" aria-controls="sideline-messages"
                                            aria-selected="false">Inbox</a><a class="nav-link nav-effect pb-0"
                                            id="sideline-settings-tab" data-bs-toggle="pill" href="#sideline-settings"
                                            role="tab" aria-controls="sideline-settings"
                                            aria-selected="false">Settings</a></div>
                                </div>
                                <div class="material-content">
                                    <div class="tab-content" id="sideline-tabContent">
                                        <div class="tab-pane fade show active" id="sideline-home" role="tabpanel"
                                            aria-labelledby="sideline-home-tab">
                                            <p>This product is meant for educational purposes only. Any resemblance to real
                                                persons,
                                                living or dead is purely coincidental. Void where prohibited. Some assembly
                                                required. List
                                                each check separately by bank number. Batteries not included.Google Web
                                                Designer gives you
                                                the power to create beautiful and compelling videos, images and HTML5 ads.
                                                Use animation
                                                and interactive elements to build out your creative vision, then scale your
                                                content for
                                                different sizes or audiences with responsive and dynamic workflows.</p>
                                        </div>
                                        <div class="tab-pane fade" id="sideline-profile" role="tabpanel"
                                            aria-labelledby="sideline-profile-tab">
                                            <div class="flex-space flex-wrap align-items-center"><img class="tab-img"
                                                    src="{{ asset('assets/images/ecommerce/08.jpg') }}" alt="profile">
                                                <ul class="d-flex flex-column gap-1">
                                                    <li> <strong> Name: </strong> Jake Catlin</li>
                                                    <li><strong>Visit Us: </strong> 50006 Ehrenberg/Parker,Arkansas-85334
                                                    </li>
                                                    <li><strong>Mail Us:</strong> Jake.@gmail.com</li>
                                                    <li><strong>Contact Number: </strong> (928) 923-7940</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sideline-messages" role="tabpanel"
                                            aria-labelledby="sideline-messages-tab">
                                            <div class="card-body p-0">
                                                <div class="main-inbox">
                                                    <div class="header-inbox justify-content-start gap-2">
                                                        <div class="header-left-inbox">
                                                            <div class="inbox-img"><img
                                                                    src="{{ asset('assets/images/ecommerce/07.jpg') }}"
                                                                    alt="profile">
                                                            </div>
                                                        </div>
                                                        <div class="inbox-content">
                                                            <h6>Dalbult Caslin </h6>
                                                            <p class="text-muted">stroman.rogers@gmail.com</p>
                                                        </div>
                                                    </div>
                                                    <div class="body-inbox mt-2">
                                                        <div class="body-h-wrapper"><i
                                                                class="me-2 tab-space icofont icofont-star"></i><em>Compare
                                                                Prices Find the Best
                                                                Computer Assessors Fronted Issue.</em></div>
                                                        <p class="pt-2">Site speed and design are two of the most
                                                            important ranking factors
                                                            Google takes into consideration, as they have the biggest effect
                                                            of customer staying
                                                            on site as the website respond faster.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sideline-settings" role="tabpanel"
                                            aria-labelledby="sideline-settings-tab">
                                            <p><strong>In this situation, you would probably do two things:</strong> exit
                                                the page, or
                                                look for the trusty search bar. If you decide to stick around, a proper
                                                search function
                                                should take your query and send you to your destination. Problem solved.
                                                It's not a
                                                perfect experience, but it's a hard one to avoid on larger websites that
                                                simply can't link
                                                to every piece of content from the homepage.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#material-l-tab-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="material-l-tab-copy">&lt;div class="tabs-responsive-side"&gt;
 &lt;div class="material-wrapper"&gt;
   &lt;div class="d-flex"&gt;
     &lt;div class="nav flex-column nav-secondary border-tab nav-left" id="sideline-tab" role="tablist" aria-orientation="vertical"&gt;&lt;a class="nav-link nav-effect active" id="sideline-home-tab" data-bs-toggle="pill" href="#sideline-home" role="tab" aria-controls="sideline-home" aria-selected="true"&gt;Home&lt;/a&gt;&lt;a class="nav-link nav-effect" id="sideline-profile-tab" data-bs-toggle="pill" href="#sideline-profile" role="tab" aria-controls="sideline-profile" aria-selected="false"&gt;Profile&lt;/a&gt;&lt;a class="nav-link nav-effect" id="sideline-messages-tab" data-bs-toggle="pill" href="#sideline-messages" role="tab" aria-controls="sideline-messages" aria-selected="false"&gt;Inbox&lt;/a&gt;&lt;a class="nav-link nav-effect pb-0" id="sideline-settings-tab" data-bs-toggle="pill" href="#sideline-settings" role="tab" aria-controls="sideline-settings" aria-selected="false"&gt;Settings&lt;/a&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="material-content"&gt;
     &lt;div class="tab-content" id="sideline-tabContent"&gt;
       &lt;div class="tab-pane fade show active" id="sideline-home" role="tabpanel" aria-labelledby="sideline-home-tab"&gt;
         &lt;p&gt;This product is meant for educational purposes only. Any resemblance to real persons, living or dead is purely coincidental. Void where prohibited. Some assembly required. List each check separately by bank number. Batteries not included.Google Web Designer gives you the power to create beautiful and compelling videos, images and HTML5 ads. Use animation and interactive elements to build out your creative vision, then scale your content for different sizes or audiences with responsive and dynamic workflows.&lt;/p&gt;
       &lt;/div&gt;
       &lt;div class="tab-pane fade" id="sideline-profile" role="tabpanel" aria-labelledby="sideline-profile-tab"&gt;
         &lt;div class="flex-space flex-wrap align-items-center"&gt;&lt;img class="tab-img" src="{{ asset('assets/images/ecommerce/08.jpg') }}" alt="profile"&gt;
           &lt;ul class="d-flex flex-column gap-1"&gt;
             &lt;li&gt;&lt;strong&gt;Name:&lt;/strong&gt;Jake Catlin&lt;/li&gt;
             &lt;li&gt;&lt;strong&gt;Visit Us:&lt;/strong&gt;50006 Ehrenberg/Parker,Arkansas-85334&lt;/li&gt;
             &lt;li&gt;&lt;strong&gt;Mail Us:&lt;/strong&gt;Jake.@gmail.com&lt;/li&gt;
             &lt;li&gt;&lt;strong&gt;Contact Number:&lt;/strong&gt;(928) 923-7940&lt;/li&gt;
           &lt;/ul&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="tab-pane fade" id="sideline-messages" role="tabpanel" aria-labelledby="sideline-messages-tab"&gt;
         &lt;div class="card-body p-0"&gt;
           &lt;div class="main-inbox"&gt; 
             &lt;div class="header-inbox justify-content-start gap-2"&gt;
               &lt;div class="header-left-inbox"&gt;
                 &lt;div class="inbox-img"&gt;&lt;img src="{{ asset('assets/images/ecommerce/07.jpg') }}" alt="profile"&gt;&lt;/div&gt;
               &lt;/div&gt;
               &lt;div class="inbox-content"&gt; 
                 &lt;h6&gt;Dalbult Caslin&lt;/h6&gt;
                 &lt;p class="text-muted"&gt;stroman.rogers@gmail.com&lt;/p&gt;
               &lt;/div&gt;
             &lt;/div&gt;
             &lt;div class="body-inbox mt-2"&gt;
               &lt;div class="body-h-wrapper"&gt;&lt;i class="me-2 tab-space icofont icofont-star"&gt;&lt;/i&gt;&lt;em&gt;Compare Prices Find the Best Computer Assessors Fronted Issue.&lt;/em&gt;&lt;/div&gt;
               &lt;p class="pt-2"&gt;Site speed and design are two of the most important ranking factors Google takes into consideration, as they have the biggest effect of customer staying on site as the website respond faster.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="tab-pane fade" id="sideline-settings" role="tabpanel" aria-labelledby="sideline-settings-tab"&gt;
         &lt;p&gt;&lt;strong&gt;In this situation, you would probably do two things:&lt;/strong&gt; exit the page, or look for the trusty search bar. If you decide to stick around, a proper search function should take your query and send you to your destination. Problem solved. It's not a perfect experience, but it's a hard one to avoid on larger websites that simply can't link to every piece of content from the homepage.&lt;/p&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Material Style Tabs</h5>
                        <p class="mt-1 f-m-light">Use <code>nav-link </code>with <code>active </code>class to switch and
                            customize tabs.</p>
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
                    <div class="card-body bottom-border-tab">
                        <ul class="nav nav-tabs border-tab border-0 mb-0 nav-secondary" id="topline-tab"
                            role="tablist">
                            <li class="nav-item"><a class="nav-link active nav-border pt-0 txt-secondary nav-secondary"
                                    id="topline-top-user-tab" data-bs-toggle="tab" href="#topline-top-user"
                                    role="tab" aria-controls="topline-top-user" aria-selected="true"><i
                                        class="icofont icofont-man-in-glasses"></i>User</a></li>
                            <li class="nav-item"><a class="nav-link nav-border txt-secondary nav-secondary"
                                    id="topline-top-description-tab" data-bs-toggle="tab"
                                    href="#topline-top-description" role="tab"
                                    aria-controls="topline-top-description" aria-selected="false"><i
                                        class="icofont icofont-file-document"></i>Description</a></li>
                            <li class="nav-item"><a class="nav-link nav-border txt-secondary nav-secondary"
                                    id="topline-top-review-tab" data-bs-toggle="tab" href="#topline-top-review"
                                    role="tab" aria-controls="topline-top-review" aria-selected="false"><i
                                        class="icofont icofont-star"></i>Review</a></li>
                        </ul>
                        <div class="tab-content" id="topline-tabContent">
                            <div class="tab-pane fade show active" id="topline-top-user" role="tabpanel"
                                aria-labelledby="topline-top-user-tab">
                                <div class="card-body px-0 pb-0">
                                    <div class="user-header pb-2">
                                        <h6 class="fw-bold">User Details:</h6>
                                    </div>
                                    <div class="user-content">
                                        <div class="table-responsive custom-scrollbar">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Country</th>
                                                        <th scope="col">Contact No</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Neha</td>
                                                        <td>India </td>
                                                        <td>5698741236</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacklin</td>
                                                        <td>Thailand</td>
                                                        <td>7800030320</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="topline-top-description" role="tabpanel"
                                aria-labelledby="topline-top-description-tab">
                                <div class="card-body px-0 pb-0">
                                    <div class="user-header pb-2">
                                        <h6 class="fw-bold">Description:</h6>
                                    </div>
                                    <div class="user-content">
                                        <div class="table-responsive custom-scrollbar">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Technology</th>
                                                        <th scope="col">Interests </th>
                                                        <th scope="col">Salary Expected </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Web Designer</td>
                                                        <td>HTML,CSS,JS,SCSS</td>
                                                        <td>45000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>UX Designer</td>
                                                        <td>Figma,Photoshop,Sketch</td>
                                                        <td>20000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="topline-top-review" role="tabpanel"
                                aria-labelledby="topline-top-review-tab">
                                <div class="card-body px-0 pb-0">
                                    <div class="user-header pb-2">
                                        <h6 class="fw-bold">Review:</h6>
                                    </div>
                                    <div class="user-content">
                                        <div class="table-responsive custom-scrollbar">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Country</th>
                                                        <th scope="col">Rating </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Neha</td>
                                                        <td>India </td>
                                                        <td> <i class="ico-color icofont icofont-star"></i><i
                                                                class="ico-color icofont icofont-star"></i><i
                                                                class="ico-color icofont icofont-star"></i><i
                                                                class="ico-color icofont icofont-star"></i><i
                                                                class="ico-color icofont icofont-star"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Irfan</td>
                                                        <td>India</td>
                                                        <td> <i class="ico-color icofont icofont-star"></i><i
                                                                class="ico-color icofont icofont-star"></i><i
                                                                class="ico-color icofont icofont-star"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#material-tab-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="material-tab-copy">&lt;ul class="nav nav-tabs border-tab border-0 mb-0 nav-secondary" id="topline-tab" role="tablist"&gt;
 &lt;li class="nav-item"&gt;&lt;a class="nav-link active nav-border pt-0 txt-secondary nav-secondary" id="topline-top-user-tab" data-bs-toggle="tab" href="#topline-top-user" role="tab" aria-controls="topline-top-user" aria-selected="true"&gt;&lt;i class="icofont icofont-man-in-glasses"&gt;&lt;/i&gt;User&lt;/a&gt;&lt;/li&gt;
 &lt;li class="nav-item"&gt;&lt;a class="nav-link nav-border txt-secondary nav-secondary" id="topline-top-description-tab" data-bs-toggle="tab" href="#topline-top-description" role="tab" aria-controls="topline-top-description" aria-selected="false"&gt;&lt;i class="icofont icofont-file-document"&gt;&lt;/i&gt;Description&lt;/a&gt;&lt;/li&gt;
 &lt;li class="nav-item"&gt;&lt;a class="nav-link nav-border txt-secondary nav-secondary" id="topline-top-review-tab" data-bs-toggle="tab" href="#topline-top-review" role="tab" aria-controls="topline-top-review" aria-selected="false"&gt;&lt;i class="icofont icofont-star"&gt;&lt;/i&gt;Review&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="topline-tabContent"&gt;
 &lt;div class="tab-pane fade show active" id="topline-top-user" role="tabpanel" aria-labelledby="topline-top-user-tab"&gt;
   &lt;div class="card-body px-0 pb-0"&gt;  
     &lt;div class="user-header pb-2"&gt; 
       &lt;h6 class="fw-bold"&gt;User Details:&lt;/h6&gt;
     &lt;/div&gt;
     &lt;div class="user-content"&gt; 
       &lt;div class="table-responsive custom-scrollbar"&gt;
         &lt;table class="table mb-0"&gt;
           &lt;thead&gt;
             &lt;tr&gt;
               &lt;th scope="col"&gt;#&lt;/th&gt;
               &lt;th scope="col"&gt;Name&lt;/th&gt;
               &lt;th scope="col"&gt;Country&lt;/th&gt;
               &lt;th scope="col"&gt;Contact No&lt;/th&gt;
             &lt;/tr&gt;
           &lt;/thead&gt;
           &lt;tbody&gt;
             &lt;tr&gt;
               &lt;th scope="row"&gt;1&lt;/th&gt;
               &lt;td&gt;Neha&lt;/td&gt;
               &lt;td&gt;India &lt;/td&gt;
               &lt;td&gt;5698741236&lt;/td&gt;
             &lt;/tr&gt;
             &lt;tr&gt;
               &lt;th scope="row"&gt;2&lt;/th&gt;
               &lt;td&gt;Jacklin&lt;/td&gt;
               &lt;td&gt;Thailand&lt;/td&gt;
               &lt;td&gt;7800030320&lt;/td&gt;
             &lt;/tr&gt;
           &lt;/tbody&gt;
         &lt;/table&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade" id="topline-top-description" role="tabpanel" aria-labelledby="topline-top-description-tab"&gt;
   &lt;div class="card-body px-0 pb-0"&gt; 
     &lt;div class="user-header pb-2"&gt; 
       &lt;h6 class="fw-bold"&gt;Description:&lt;/h6&gt;
     &lt;/div&gt;
     &lt;div class="user-content"&gt; 
       &lt;div class="table-responsive custom-scrollbar"&gt;
         &lt;table class="table mb-0"&gt;
           &lt;thead&gt;
             &lt;tr&gt;
               &lt;th scope="col"&gt;Technology&lt;/th&gt;
               &lt;th scope="col"&gt;Interests&lt;/th&gt;
               &lt;th scope="col"&gt;Salary Expected&lt;/th&gt;
             &lt;/tr&gt;
           &lt;/thead&gt;
           &lt;tbody&gt;
             &lt;tr&gt;
               &lt;td&gt;Web Designer&lt;/td&gt;
               &lt;td&gt;HTML,CSS,JS,SCSS&lt;/td&gt;
               &lt;td&gt;45000&lt;/td&gt;
             &lt;/tr&gt;
             &lt;tr&gt;
               &lt;td&gt;UX Designer&lt;/td&gt;
               &lt;td&gt;Figma,Photoshop,Sketch&lt;/td&gt;
               &lt;td&gt;20000&lt;/td&gt;
             &lt;/tr&gt;
           &lt;/tbody&gt;
         &lt;/table&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade" id="topline-top-review" role="tabpanel" aria-labelledby="topline-top-review-tab"&gt;
   &lt;div class="card-body px-0 pb-0"&gt;
     &lt;div class="user-header pb-2"&gt; 
       &lt;h6 class="fw-bold"&gt;Review:&lt;/h6&gt;
     &lt;/div&gt;
     &lt;div class="user-content"&gt; 
       &lt;div class="table-responsive custom-scrollbar"&gt;
         &lt;table class="table mb-0"&gt;
           &lt;thead&gt;
             &lt;tr&gt;
               &lt;th scope="col"&gt;#&lt;/th&gt;
               &lt;th scope="col"&gt;Name&lt;/th&gt;
               &lt;th scope="col"&gt;Country&lt;/th&gt;
               &lt;th scope="col"&gt;Rating&lt;/th&gt;
             &lt;/tr&gt;
           &lt;/thead&gt;
           &lt;tbody&gt;
             &lt;tr&gt;
               &lt;th scope="row"&gt;1&lt;/th&gt;
               &lt;td&gt;Neha&lt;/td&gt;
               &lt;td&gt;India &lt;/td&gt;
               &lt;td&gt;&lt;i class="ico-color icofont icofont-star"&gt;&lt;/i&gt;&lt;i class="ico-color icofont icofont-star"&gt;&lt;/i&gt;&lt;i class="ico-color icofont icofont-star"&gt;&lt;/i&gt;&lt;i class="ico-color icofont icofont-star"&gt;&lt;/i&gt;&lt;i class="ico-color icofont icofont-star"&gt;&lt;/i&gt;&lt;/td&gt;
             &lt;/tr&gt;
             &lt;tr&gt;
               &lt;th scope="row"&gt;2&lt;/th&gt;
               &lt;td&gt;Irfan&lt;/td&gt;
               &lt;td&gt;India&lt;/td&gt;
               &lt;td&gt;&lt;i class="ico-color icofont icofont-star"&gt;&lt;/i&gt;&lt;i class="ico-color icofont icofont-star"&gt;&lt;/i&gt;&lt;i class="ico-color icofont icofont-star"&gt;&lt;/i&gt;&lt;/td&gt;
             &lt;/tr&gt;
           &lt;/tbody&gt;
         &lt;/table&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Border Tabs </h5>
                        <p class="mt-1 f-m-light">Use <code>nav-link </code>with <code>active </code>class to add bottom
                            border styles.</p>
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
                    <div class="card-body bottom-border-tab">
                        <ul class="nav nav-tabs border-tab mb-0" id="bottom-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link nav-border txt-primary tab-primary pt-0"
                                    id="bottom-home-tab" data-bs-toggle="tab" href="#bottom-home" role="tab"
                                    aria-controls="bottom-home" aria-selected="true"><i
                                        class="icofont icofont-ui-home">
                                    </i>Home</a></li>
                            <li class="nav-item"><a class="nav-link nav-border txt-primary tab-primary active"
                                    id="bottom-inbox-tab" data-bs-toggle="tab" href="#bottom-inbox" role="tab"
                                    aria-controls="bottom-inbox" aria-selected="false"><i
                                        class="icofont icofont-ui-message"></i>Inbox</a></li>
                            <li class="nav-item"><a class="nav-link nav-border txt-primary tab-primary"
                                    id="bottom-contact-tab" data-bs-toggle="tab" href="#bottom-contact"
                                    role="tab" aria-controls="bottom-contact" aria-selected="false"><i
                                        class="icofont icofont-man-in-glasses"></i>Contact</a></li>
                        </ul>
                        <div class="tab-content" id="border-tabContent">
                            <div class="tab-pane fade" id="bottom-home" role="tabpanel"
                                aria-labelledby="bottom-home-tab">
                                <p class="pt-3">This is some placeholder content the <strong>Home tab's </strong>
                                    associated
                                    content. Clicking another tab will toggle the visibility of this one for the next. The
                                    tab
                                    JavaScript swaps classes to control the content visibility and styling. You can use it
                                    with
                                    tabs, pills, and any other <strong>.nav</strong>-powered navigation.To convey the
                                    <strong>active
                                    </strong> state to assistive technologies, use the <strong>aria-current </strong>
                                    attribute —
                                    using the page value for current page, or true for the current item in a set. The base
                                    <strong>nav </strong> component is built with flexbox and provide a strong foundation
                                    for
                                    building all types of navigation components.
                                </p>
                            </div>
                            <div class="tab-pane fade show active" id="bottom-inbox" role="tabpanel"
                                aria-labelledby="bottom-inbox-tab">
                                <div class="card-body pb-0">
                                    <div class="main-inbox">
                                        <div class="header-inbox">
                                            <div class="header-left-inbox">
                                                <div class="inbox-img"><img
                                                        src="{{ asset('assets/images/ecommerce/06.jpg') }}"
                                                        alt="profile"></div>
                                                <div class="inbox-content">
                                                    <h6>Dalbult Caslin </h6>
                                                    <p class="text-muted">stroman.rogers@gmail.com</p>
                                                </div>
                                            </div>
                                            <ul class="header-right-inbox">
                                                <li>
                                                    <p>8 JAN 11:30PM</p>
                                                </li>
                                                <li> <i class="txt-danger icofont icofont-ui-delete"></i></li>
                                                <li> <i class="icofont icofont-telegram"></i></li>
                                            </ul>
                                        </div>
                                        <div class="body-inbox mt-2">
                                            <div class="body-h-wrapper"><i
                                                    class="me-2 tab-space icofont icofont-star"></i><em>Compare
                                                    Prices Find the Best Computer Assessors Fronted Issue.</em></div>
                                            <p class="pt-2">Site speed and design are two of the most important ranking
                                                factors Google
                                                takes into consideration, as they have the biggest effect of customer
                                                staying on site as
                                                the website respond faster.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bottom-contact" role="tabpanel"
                                aria-labelledby="bottom-contact-tab">
                                <div class="card-body px-0 pb-0">
                                    <div class="form">
                                        <div class="mb-3"><label class="form-label"
                                                for="exampleFormControltwo">Email
                                                Address</label><input class="form-control" id="exampleFormControltwo"
                                                type="email" placeholder="youremail@gmail.com"></div>
                                        <div class="mb-0"><label class="form-label"
                                                for="exampleFormControlTextarea1">Example
                                                Textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#border-tab-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="border-tab-copy">&lt;ul class="nav nav-tabs border-tab mb-0" id="border-tab" role="tablist"&gt;
 &lt;li class="nav-item"&gt;&lt;a class="nav-link nav-border txt-primary tab-primary pt-0" id="bottom-home-tab" data-bs-toggle="tab" href="#bottom-home" role="tab" aria-controls="bottom-home" aria-selected="true"&gt;&lt;i class="icofont icofont-ui-home"&gt; &lt;/i&gt;Home&lt;/a&gt;&lt;/li&gt;
 &lt;li class="nav-item"&gt;&lt;a class="nav-link nav-border txt-primary tab-primary active" id="bottom-inbox-tab" data-bs-toggle="tab" href="#bottom-inbox" role="tab" aria-controls="bottom-inbox" aria-selected="false"&gt;&lt;i class="icofont icofont-ui-message"&gt;&lt;/i&gt;Inbox&lt;/a&gt;&lt;/li&gt;
 &lt;li class="nav-item"&gt;&lt;a class="nav-link nav-border txt-primary tab-primary" id="bottom-contact-tab" data-bs-toggle="tab" href="#bottom-contact" role="tab" aria-controls="bottom-contact" aria-selected="false"&gt;&lt;i class="icofont icofont-man-in-glasses"&gt;&lt;/i&gt;Contact&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="border-tabContent"&gt;
 &lt;div class="tab-pane fade" id="bottom-home" role="tabpanel" aria-labelledby="bottom-home-tab"&gt;
   &lt;p class="pt-3"&gt;This is some placeholder content the&lt;strong&gt;Home tab's&lt;/strong&gt;associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other&lt;strong&gt;.nav&lt;/strong&gt;-powered navigation.To convey the&lt;strong&gt;active&lt;/strong&gt; state to assistive technologies, use the&lt;strong&gt;aria-current&lt;/strong&gt; attribute — using the page value for current page, or true for the current item in a set. The base&lt;strong&gt;nav&lt;/strong&gt; component is built with flexbox and provide a strong foundation for building all types of navigation components.&lt;/p&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade show active" id="bottom-inbox" role="tabpanel" aria-labelledby="bottom-inbox-tab"&gt;
   &lt;div class="card-body pb-0"&gt;
     &lt;div class="main-inbox"&gt; 
       &lt;div class="header-inbox"&gt; 
         &lt;div class="header-left-inbox"&gt;
           &lt;div class="inbox-img"&gt;&lt;img src="{{ asset('assets/images/ecommerce/06.jpg') }}" alt="profile"&gt;&lt;/div&gt;
           &lt;div class="inbox-content"&gt; 
             &lt;h6&gt;Dalbult Caslin &lt;/h6&gt;
             &lt;p class="text-muted"&gt;stroman.rogers@gmail.com&lt;/p&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;ul class="header-right-inbox"&gt;
           &lt;li&gt; 
             &lt;p&gt;8 JAN 11:30PM&lt;/p&gt;
           &lt;/li&gt;
           &lt;li&gt;&lt;i class="txt-danger icofont icofont-ui-delete"&gt;&lt;/i&gt;&lt;/li&gt;
           &lt;li&gt;&lt;i class="icofont icofont-telegram"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;/ul&gt;
       &lt;/div&gt;
       &lt;div class="body-inbox mt-2"&gt;
         &lt;div class="body-h-wrapper"&gt;&lt;i class="me-2 tab-space icofont icofont-star"&gt;&lt;/i&gt;&lt;em&gt;Compare Prices Find the Best Computer Assessors Fronted Issue.&lt;/em&gt;&lt;/div&gt;
         &lt;p class="pt-2"&gt;Site speed and design are two of the most important ranking factors Google takes into consideration, as they have the biggest effect of customer staying on site as the website respond faster.&lt;/p&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade" id="bottom-contact" role="tabpanel" aria-labelledby="bottom-contact-tab"&gt;
   &lt;div class="card-body px-0 pb-0"&gt; 
     &lt;div class="form"&gt; 
       &lt;div class="mb-3"&gt;
         &lt;label class="form-label" for="exampleFormControltwo"&gt;Email Address&lt;/label&gt;
         &lt;input class="form-control" id="exampleFormControltwo" type="email" placeholder="youremail@gmail.com"&gt;
       &lt;/div&gt;
       &lt;div class="mb-0"&gt;
         &lt;label class="form-label" for="exampleFormControlTextarea1"&gt;Example Textarea&lt;/label&gt;
         &lt;textarea class="form-control" id="exampleFormControlTextarea1" rows="3"&gt;&lt;/textarea&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Background Pill Tabs </h5>
                        <p class="mt-1 f-m-light">Use <code> active</code> class on the<code> nav-link</code> and backdrop
                            tab
                            with the <code> new-pills</code> class.</p>
                    </div>
                    <div class="card-body">
                        <div class="bg-navbar">
                            <ul class="nav nav-pills nav-primary" id="bg-pill-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link" id="pills-sofa-tab" data-bs-toggle="pill"
                                        href="#pills-sofa" role="tab" aria-controls="pills-sofa"
                                        aria-selected="true">Sofa</a></li>
                                <li class="nav-item"><a class="nav-link" id="pills-chairs-tab" data-bs-toggle="pill"
                                        href="#pills-chairs" role="tab" aria-controls="pills-chairs"
                                        aria-selected="false">Chairs</a>
                                </li>
                                <li class="nav-item"><a class="nav-link active" id="pills-tables-tab"
                                        data-bs-toggle="pill" href="#pills-tables" role="tab"
                                        aria-controls="pills-tables" aria-selected="false">Tables</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="bg-pill-tabContent">
                                <div class="tab-pane fade" id="pills-sofa" role="tabpanel"
                                    aria-labelledby="pills-sofa-tab">
                                    <div class="row g-3 pt-3">
                                        <div class="col-4"><img class="img-fluid"
                                                src="{{ asset('assets/images/switch/s1.jpg') }}" alt="sofa">
                                        </div>
                                        <div class="col-4"><img class="img-fluid"
                                                src="{{ asset('assets/images/switch/s2.jpg') }}" alt="sofa">
                                        </div>
                                        <div class="col-4"><img class="img-fluid"
                                                src="{{ asset('assets/images/switch/s3.jpg') }}" alt="sofa">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-chairs" role="tabpanel"
                                    aria-labelledby="pills-chairs-tab">
                                    <div class="row g-3 pt-3">
                                        <div class="col-4"><img class="img-fluid"
                                                src="{{ asset('assets/images/switch/c1.jpg') }}" alt="chairs">
                                        </div>
                                        <div class="col-4"><img class="img-fluid"
                                                src="{{ asset('assets/images/switch/c2.jpg') }}" alt="chairs">
                                        </div>
                                        <div class="col-4"><img class="img-fluid"
                                                src="{{ asset('assets/images/switch/c3.jpg') }}" alt="chairs">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="pills-tables" role="tabpanel"
                                    aria-labelledby="pills-tables-tab">
                                    <div class="row g-3 pt-3">
                                        <div class="col-4"><img class="img-fluid"
                                                src="{{ asset('assets/images/switch/t1.jpg') }}" alt="table">
                                        </div>
                                        <div class="col-4"><img class="img-fluid"
                                                src="{{ asset('assets/images/switch/t2.jpg') }}" alt="table">
                                        </div>
                                        <div class="col-4"><img class="img-fluid"
                                                src="{{ asset('assets/images/switch/t3.jpg') }}" alt="table">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Arrow Tabs</h5>
                        <p class="mt-1 f-m-light">Use <code> active </code> class on the<code> nav-link</code> and arrow
                            tab
                            with the <code> new-item</code> class. </p>
                    </div>
                    <div class="card-body">
                        <div class="bg-navbar arrow-tabs">
                            <ul class="nav nav-pills mb-3" id="pills-bg-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link" id="pills-account-tab"
                                        data-bs-toggle="pill" href="#pills-account" role="tab"
                                        aria-controls="pills-account" aria-selected="true">Account
                                        Info</a></li>
                                <li class="nav-item"><a class="nav-link active" id="pills-portfolio-tab"
                                        data-bs-toggle="pill" href="#pills-portfolio" role="tab"
                                        aria-controls="pills-portfolio" aria-selected="false">Portfolio</a></li>
                                <li class="nav-item"><a class="nav-link" id="pills-skills-tab" data-bs-toggle="pill"
                                        href="#pills-skills" role="tab" aria-controls="pills-skills"
                                        aria-selected="false">Skills</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="pills-installment-tab"
                                        data-bs-toggle="pill" href="#pills-installment" role="tab"
                                        aria-controls="pills-installment" aria-selected="false">Installment</a></li>
                            </ul>
                            <div class="tab-content" id="pills-bg-tabContent">
                                <div class="tab-pane fade" id="pills-account" role="tabpanel"
                                    aria-labelledby="pills-account-tab">
                                    <div class="common-box"><i class="fa-solid fa-circle-arrow-right"></i>
                                        <p>Your account details serve as the digital gateway to safe, customized online
                                            experiences.
                                            Modern security measures are in place to safeguard your data, and we have given
                                            top priority
                                            to the smooth handling of your account details during the building of our
                                            website.</p>
                                    </div>
                                    <div class="common-box"><i class="fa-solid fa-circle-arrow-right"></i>
                                        <p>We design systems that enable customers to easily update and access their account
                                            information, from user-friendly interfaces to simple navigation. Because of our
                                            dedication
                                            to openness, you have easy access to change settings, see transaction history,
                                            and customize
                                            your preferences while being informed. With our website solutions, you can take
                                            account
                                            management to the next level. Your information is protected, and your digital
                                            trip is
                                            customized to meet your demands.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="pills-portfolio" role="tabpanel"
                                    aria-labelledby="pills-portfolio-tab">
                                    <div class="row g-3">
                                        <div class="col-4"><img class="img-fluid"
                                                src="{{ asset('assets/images/switch/t4.jpg') }}" alt="table">
                                        </div>
                                        <div class="col-4"><img class="img-fluid"
                                                src="{{ asset('assets/images/switch/t5.jpg') }}" alt="table">
                                        </div>
                                        <div class="col-4"><img class="img-fluid"
                                                src="{{ asset('assets/images/switch/t6.jpg') }}" alt="table">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-skills" role="tabpanel"
                                    aria-labelledby="pills-skills-tab">
                                    <div class="skill-tab">
                                        <h6 class="pb-1">In what area are you an expert?</h6>
                                        <p>Summarize your expertise for us in a few crucial terms. Make careful to select
                                            these tags
                                            carefully, since they will appear on your portfolio page.</p>
                                        <ul>
                                            <li>HTML5</li>
                                            <li>CSS3</li>
                                            <li>Javascript</li>
                                            <li>React</li>
                                            <li>SQL</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-installment" role="tabpanel"
                                    aria-labelledby="pills-installment-tab">
                                    <div class="common-box"><i class="fa-solid fa-circle-arrow-right"></i>
                                        <p>We will handle your payment procedure, saving you the trouble of following up
                                            with clients
                                            after each assignment. We'll try our hardest to make sure you receive your money
                                            promptly
                                            and equitably.</p>
                                    </div>
                                    <div class="common-box"><i class="fa-solid fa-circle-arrow-right"></i>
                                        <p>Seamless website development requires a foundation that's reliable and efficient.
                                            Enter the
                                            installment process – the bedrock of building a powerful online presence.
                                            Installments in
                                            website development refer to the strategic implementation of features,
                                            functionalities, and
                                            updates in a phased manner, ensuring smooth integration and optimal performance.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Bottom Tabs</h5>
                        <p class="mt-1 f-m-light">Use <code> active </code> class on the<code> nav-link</code>. It is
                            possible
                            to build a arrow tab with the <code>new-item</code> class. </p>
                    </div>
                    <div class="card-body">
                        <div class="bg-navbar bottom-navbar">
                            <div class="tab-content" id="bottom-pill-tabContent">
                                <div class="tab-pane fade" id="pills-css" role="tabpanel"
                                    aria-labelledby="pills-css-tab">
                                    <div class="common-flex"><img src="{{ asset('assets/images/tree/css.png') }}"
                                            alt="">
                                        <H5>CSS</H5>
                                    </div>
                                    <div class="tab-paragraph"><i class="fa-solid fa-circle-arrow-right"></i>
                                        <P>"One of the three main web technologies is CSS. The terms "cascading" and
                                            "style," with
                                            cascading indicating how one style can cascade from another, are actually the
                                            key to
                                            understanding CSS, which stands for Cascading Style Sheets."</P>
                                    </div>
                                    <div class="tab-paragraph"><i class="fa-solid fa-circle-arrow-right"></i>
                                        <p>To specify how HTML code will appear on a website, utilize CSS.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="pills-vendor" role="tabpanel"
                                    aria-labelledby="pills-vendor-tab">
                                    <div class="common-flex"><img src="{{ asset('assets/images/tree/vendor.png') }}"
                                            alt="#">
                                        <H5>Vendors</H5>
                                    </div>
                                    <div class="tab-paragraph"><i class="fa-solid fa-circle-arrow-right"></i>
                                        <P>To improve the development of your website, find a carefully chosen list of
                                            premier
                                            suppliers. Use our dependable network to locate the ideal partners for the
                                            accomplishment of
                                            your project.</P>
                                    </div>
                                    <div class="tab-paragraph"><i class="fa-solid fa-circle-arrow-right"></i>
                                        <p>Cutting-edge design tools, or specialized services, our curated list ensures you
                                            have
                                            access to the best resources for a seamless and successful website development
                                            experience.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-js" role="tabpanel"
                                    aria-labelledby="pills-js-tab">
                                    <div class="common-flex"><img src="{{ asset('assets/images/tree/js.png') }}"
                                            alt="">
                                        <H5>Javascript</H5>
                                    </div>
                                    <div class="tab-paragraph"><i class="fa-solid fa-circle-arrow-right"></i>
                                        <P>Development of interactive and adaptable websites is made possible by JavaScript,
                                            the web's
                                            dynamic programming language.</P>
                                    </div>
                                    <div class="tab-paragraph"><i class="fa-solid fa-circle-arrow-right"></i>
                                        <p>Building strong and interactive online apps requires JavaScript, which is
                                            essential for
                                            everything from enabling asynchronous requests to designing captivating user
                                            interfaces.</p>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-pills nav-primary" id="bottom-pill-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link" id="pills-css-tab" data-bs-toggle="pill"
                                        href="#pills-css" role="tab" aria-controls="pills-css"
                                        aria-selected="true"><img src="{{ asset('assets/images/tree/css.png') }}"
                                            alt="">CSS</a></li>
                                <li class="nav-item"><a class="nav-link active" id="pills-vendor-tab"
                                        data-bs-toggle="pill" href="#pills-vendor" role="tab"
                                        aria-controls="pills-vendor" aria-selected="false"> <img
                                            src="{{ asset('assets/images/tree/vendor.png') }}"
                                            alt="">Vendors</a></li>
                                <li class="nav-item"><a class="nav-link" id="pills-js-tab" data-bs-toggle="pill"
                                        href="#pills-js" role="tab" aria-controls="pills-js"
                                        aria-selected="false"> <img src="{{ asset('assets/images/tree/js.png') }}"
                                            alt="">Javascript</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Animated Tabs</h5>
                        <p class="mt-1 f-m-light">Use <code> active</code> class on the <code> nav-link</code>. It is
                            possible
                            to build a animated tab with the <code>horizontal-icons-tab </code> class.</p>
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
                    <div class="card-body horizontal-icons-tab">
                        <ul class="nav nav-tabs border-tab mb-0" id="animated-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link tab-info" id="h-home-tab" data-bs-toggle="tab"
                                    href="#h-home" role="tab" aria-controls="h-home" aria-selected="true"><i
                                        class="icofont icofont-building-alt"></i><span>Home</span></a></li>
                            <li class="nav-item"><a class="nav-link tab-info active" id="h-profile-tab"
                                    data-bs-toggle="tab" href="#h-profile" role="tab" aria-controls="h-profile"
                                    aria-selected="false"><i
                                        class="icofont icofont-user-male"></i><span>Profile</span></a></li>
                            <li class="nav-item"><a class="nav-link tab-info" id="h-about-tab" data-bs-toggle="tab"
                                    href="#h-about" role="tab" aria-controls="h-about" aria-selected="false"><i
                                        class="icofont icofont-business-man"></i><span>About Us</span></a></li>
                            <li class="nav-item"><a class="nav-link tab-info" id="h-gallery-tab"
                                    data-bs-toggle="tab" href="#h-gallery" role="tab" aria-controls="h-gallery"
                                    aria-selected="false"><i
                                        class="icofont icofont-picture"></i><span>Gallery</span></a></li>
                            <li class="nav-item"><a class="nav-link tab-info" id="h-faq-tab" data-bs-toggle="tab"
                                    href="#h-faq" role="tab" aria-controls="h-faq" aria-selected="false"><i
                                        class="icofont icofont-question-circle"></i><span>FAQ</span></a></li>
                        </ul>
                        <div class="tab-content" id="animated-tabContent">
                            <div class="tab-pane fade" id="h-home" role="tabpanel" aria-labelledby="h-home-tab">
                                <p class="pt-3">This is some placeholder content for the <b>Home tab's </b>associated
                                    content.
                                    Clicking another tab will toggle the visibility of this one for the next. The tab
                                    JavaScript
                                    swaps classes to control the content visibility and styling. You can use it with tabs,
                                    pills,
                                    and any other .nav-powered navigation. Bootstrap provides a flexible and easy-to-use tab
                                    component that allows developers to create tabbed navigation effortlessly.</p>
                            </div>
                            <div class="tab-pane fade show active" id="h-profile" role="tabpanel"
                                aria-labelledby="h-profile-tab">
                                <p class="pt-3">This is some placeholder content the <b>Profile tab's</b> associated
                                    content.
                                    Clicking another tab will toggle the visibility of this one for the next. The tab
                                    JavaScript
                                    swaps classes to control the content visibility and styling. You can use it with tabs,
                                    pills,
                                    and any other .nav-powered navigation. Bootstrap provides a flexible and easy-to-use tab
                                    component that allows developers to create tabbed navigation effortlessly.</p>
                            </div>
                            <div class="tab-pane fade" id="h-about" role="tabpanel" aria-labelledby="h-about-tab">
                                <p class="pt-3">This is some placeholder content the <b>About tab's </b>associated
                                    content.
                                    Clicking another tab will toggle the visibility of this one for the next. The tab
                                    JavaScript
                                    swaps classes to control the content visibility and styling. You can use it with tabs,
                                    pills,
                                    and any other .nav-powered navigation. Bootstrap provides a flexible and easy-to-use tab
                                    component that allows developers to create tabbed navigation effortlessly.</p>
                            </div>
                            <div class="tab-pane fade" id="h-gallery" role="tabpanel"
                                aria-labelledby="h-gallery-tab">
                                <p class="pt-3">This is some placeholder content the <b>Gallery tab's </b>associated
                                    content.
                                    Clicking another tab will toggle the visibility of this one for the next. The tab
                                    JavaScript
                                    swaps classes to control the content visibility and styling. You can use it with tabs,
                                    pills,
                                    and any other .nav-powered navigation. Bootstrap provides a flexible and easy-to-use tab
                                    component that allows developers to create tabbed navigation effortlessly.</p>
                            </div>
                            <div class="tab-pane fade" id="h-faq" role="tabpanel" aria-labelledby="h-faq-tab">
                                <p class="pt-3">This is some placeholder content the <b>FAQ tab's </b>associated
                                    content. Clicking
                                    another tab will toggle the visibility of this one for the next. The tab JavaScript
                                    swaps
                                    classes to control the content visibility and styling. You can use it with tabs, pills,
                                    and any
                                    other .nav-powered navigation. Bootstrap provides a flexible and easy-to-use tab
                                    component that
                                    allows developers to create tabbed navigation effortlessly.</p>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#animated-tab-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="animated-tab-copy">&lt;ul class="nav nav-tabs border-tab mb-0" id="animated-tab" role="tablist"&gt;
 &lt;li class="nav-item"&gt;&lt;a class="nav-link tab-info" id="h-home-tab" data-bs-toggle="tab" href="#h-home" role="tab" aria-controls="h-home" aria-selected="true"&gt;&lt;i class="icofont icofont-building-alt"&gt;&lt;/i&gt;<span>Home</span>&lt;/a&gt;&lt;/li&gt;
 &lt;li class="nav-item"&gt;&lt;a class="nav-link tab-info active" id="h-profile-tab" data-bs-toggle="tab" href="#h-profile" role="tab" aria-controls="h-profile" aria-selected="false"&gt;&lt;i class="icofont icofont-user-male"&gt;&lt;/i&gt;<span>Profile</span>&lt;/a&gt;&lt;/li&gt;
 &lt;li class="nav-item"&gt;&lt;a class="nav-link tab-info" id="h-about-tab" data-bs-toggle="tab" href="#h-about" role="tab" aria-controls="h-about" aria-selected="false"&gt;&lt;i class="icofont icofont-business-man"&gt;&lt;/i&gt;<span>About Us</span>&lt;/a&gt;&lt;/li&gt;
 &lt;li class="nav-item"&gt;&lt;a class="nav-link tab-info" id="h-gallery-tab" data-bs-toggle="tab" href="#h-gallery" role="tab" aria-controls="h-gallery" aria-selected="false"&gt;&lt;i class="icofont icofont-picture"&gt;&lt;/i&gt;<span>Gallery</span>&lt;/a&gt;&lt;/li&gt;
 &lt;li class="nav-item"&gt;&lt;a class="nav-link tab-info" id="h-faq-tab" data-bs-toggle="tab" href="#h-faq" role="tab" aria-controls="h-faq" aria-selected="false"&gt;&lt;i class="icofont icofont-question-circle"&gt;&lt;/i&gt;<span>FAQ</span>&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="animated-tabContent"&gt;
 &lt;div class="tab-pane fade" id="h-home" role="tabpanel" aria-labelledby="h-home-tab"&gt;
   &lt;p class="pt-3"&gt;This is some placeholder content for the&lt;b&gt;Home tab's&lt;/b&gt;associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation. Bootstrap provides a flexible and easy-to-use tab component that allows developers to create tabbed navigation effortlessly.&lt;/p&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade show active" id="h-profile" role="tabpanel" aria-labelledby="h-profile-tab"&gt;
   &lt;p class="pt-3"&gt;This is some placeholder content the&lt;b&gt;Profile tab's&lt;/b&gt; associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation. Bootstrap provides a flexible and easy-to-use tab component that allows developers to create tabbed navigation effortlessly.&lt;/p&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade" id="h-about" role="tabpanel" aria-labelledby="h-about-tab"&gt;
   &lt;p class="pt-3"&gt;This is some placeholder content the&lt;b&gt;About tab's&lt;/b&gt;associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation. Bootstrap provides a flexible and easy-to-use tab component that allows developers to create tabbed navigation effortlessly.&lt;/p&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade" id="h-gallery" role="tabpanel" aria-labelledby="h-gallery-tab"&gt;
   &lt;p class="pt-3"&gt;This is some placeholder content the&lt;b&gt;Gallery tab's&lt;/b&gt;associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation. Bootstrap provides a flexible and easy-to-use tab component that allows developers to create tabbed navigation effortlessly.&lt;/p&gt;
 &lt;/div&gt;
 &lt;div class="tab-pane fade" id="h-faq" role="tabpanel" aria-labelledby="h-faq-tab"&gt;
   &lt;p class="pt-3"&gt;This is some placeholder content the&lt;b&gt;FAQ tab's&lt;/b&gt;associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation. Bootstrap provides a flexible and easy-to-use tab component that allows developers to create tabbed navigation effortlessly.&lt;/p&gt;
 &lt;/div&gt;
&lt;/div&gt; </code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
