@extends('layouts.simple.master')

@section('title', 'Alert')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Alerts</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Alerts</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Link Color in Dark Theme</h5>
                        <p class="f-m-light mt-1">To create an alert, use<code> alert-*</code> class.</p>
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
                    <div class="card-body dark-alert-msg">
                        <div class="row">
                            <div class="col-xl-6">
                                <p class="mb-0">Primary Alert</p>
                                <div class="alert alert-primary dark" role="alert">
                                    <p class="txt-light">The <a class="alert-link text-white" href="#!">"alert-primary"
                                        </a>class
                                        can be used to create an alert like this one.</p>
                                </div>
                                <p class="mb-0">Secondary Alert</p>
                                <div class="alert alert-secondary dark" role="alert">
                                    <p class="txt-light">The <a class="alert-link text-white"
                                            href="#!">"alert-secondary" </a>class
                                        can be used to create an alert like this one.</p>
                                </div>
                                <p class="mb-0">Success Alert</p>
                                <div class="alert alert-success dark" role="alert">
                                    <p class="txt-light">The <a class="alert-link text-white" href="#!">"alert-success"
                                        </a>class
                                        can be used to create an alert like this one.</p>
                                </div>
                                <p class="mb-0">Info Alert</p>
                                <div class="alert alert-info dark" role="alert">
                                    <p class="txt-light">The <a class="alert-link text-white" href="#!">"alert-info"
                                        </a>class can
                                        be used to create an alert like this one.</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <p class="mb-0">Warning Alert</p>
                                <div class="alert alert-warning dark" role="alert">
                                    <p class="txt-light">The <a class="alert-link text-white" href="#!">"alert-warning"
                                        </a>class
                                        can be used to create an alert like this one.</p>
                                </div>
                                <p class="mb-0">Danger Alert</p>
                                <div class="alert alert-danger dark" role="alert">
                                    <p class="txt-light">The <a class="alert-link text-white" href="#!">"alert-danger"
                                        </a>class can
                                        be used to create an alert like this one.</p>
                                </div>
                                <p class="mb-0">Light Alert</p>
                                <div class="alert alert-light dark" role="alert">
                                    <p class="text-dark">The <a class="alert-link text-dark" href="#!">"alert-light" </a>class can be
                                        used to create
                                        an alert like this one.</p>
                                </div>
                                <p class="mb-0">Dark Alert</p>
                                <div class="alert alert-dark dark" role="alert">
                                    <p class="txt-light">The <a class="alert-link text-white" href="#!">"alert-dark"
                                        </a>class can
                                        be used to create an alert like this one.</p>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#link-alert-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="link-alert-copy">&lt;div class="row"&gt; 
 &lt;div class="col-xl-6"&gt; 
   &lt;p class="mb-0"&gt;Primary Alert&lt;/p&gt;
   &lt;div class="alert alert-primary dark" role="alert"&gt;
     &lt;p class="txt-light"&gt;The
       &lt;a class="alert-link text-white" href="#!"&gt;"alert-primary"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/p&gt;
   &lt;/div&gt;
   &lt;p class="mb-0"&gt;Secondary Alert&lt;/p&gt;
   &lt;div class="alert alert-secondary dark" role="alert"&gt;
     &lt;p class="txt-light"&gt;The
       &lt;a class="alert-link text-white" href="#!"&gt;"alert-secondary"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/p&gt;
   &lt;/div&gt;
   &lt;p class="mb-0"&gt;Success Alert&lt;/p&gt;
   &lt;div class="alert alert-success dark" role="alert"&gt;
     &lt;p class="txt-light"&gt;The
       &lt;a class="alert-link text-white" href="#!"&gt;"alert-success"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/p&gt;
   &lt;/div&gt;
   &lt;p class="mb-0"&gt;Info Alert&lt;/p&gt;
   &lt;div class="alert alert-info dark" role="alert"&gt;
     &lt;p class="txt-light"&gt;The
       &lt;a class="alert-link text-white" href="#!"&gt;"alert-info"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/p&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xl-6"&gt;
   &lt;p class="mb-0"&gt;Warning Alert&lt;/p&gt;
   &lt;div class="alert alert-warning dark" role="alert"&gt;
     &lt;p class="txt-light"&gt;The
       &lt;a class="alert-link text-white" href="#!"&gt;"alert-warning"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/p&gt;
   &lt;/div&gt;
   &lt;p class="mb-0"&gt;Danger Alert&lt;/p&gt;
   &lt;div class="alert alert-danger dark" role="alert"&gt;
     &lt;p class="txt-light"&gt;The
       &lt;a class="alert-link text-white" href="#!"&gt;"alert-danger"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/p&gt;
   &lt;/div&gt;
   &lt;p class="mb-0"&gt;Light Alert&lt;/p&gt;
   &lt;div class="alert alert-light dark" role="alert"&gt;
     &lt;p&gt;The
       &lt;a class="alert-link text-dark" href="#!"&gt;"alert-light"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/p&gt;
   &lt;/div&gt;
   &lt;p class="mb-0"&gt;Dark Alert&lt;/p&gt;
   &lt;div class="alert alert-dark dark" role="alert"&gt;
     &lt;p class="txt-light"&gt;The
       &lt;a class="alert-link text-white" href="#!"&gt;"alert-dark"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/p&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Link Color in Light Theme</h5>
                        <p class="f-m-light mt-1">To create an light alert, use<code> alert-light-*</code> class.</p>
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
                        <div class="row">
                            <div class="col-xl-6">
                                <p class="mb-0">Primary Light Alert</p>
                                <div class="alert alert-light-primary" role="alert">
                                    <p class="txt-primary">The <a class="alert-link txt-primary"
                                            href="#!">"alert-light-primary"
                                        </a>class can be used to create an alert like this one.</p>
                                </div>
                                <p class="mb-0">Secondary Light Alert</p>
                                <div class="alert alert-light-secondary" role="alert">
                                    <p class="txt-secondary">The <a class="alert-link txt-secondary"
                                            href="#!">"alert-light-secondary" </a>class can be used to create an alert
                                        like this one.
                                    </p>
                                </div>
                                <p class="mb-0">Success Light Alert</p>
                                <div class="alert alert-light-success" role="alert">
                                    <div class="txt-success">The <a class="alert-link txt-success"
                                            href="#!">"alert-light-success"
                                        </a>class can be used to create an alert like this one.</div>
                                </div>
                                <p class="mb-0">Info Light Alert</p>
                                <div class="alert alert-light-info" role="alert">
                                    <div class="txt-info">The <a class="alert-link txt-info"
                                            href="#!">"alert-light-info" </a>class
                                        can be used to create an alert like this one.</div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <p class="mb-0">Warning Light Alert</p>
                                <div class="alert alert-light-warning" role="alert">
                                    <p class="txt-warning">The <a class="alert-link txt-warning"
                                            href="#!">"alert-light-warning"
                                        </a>class can be used to create an alert like this one.</p>
                                </div>
                                <p class="mb-0">Danger Light Alert</p>
                                <div class="alert alert-light-danger" role="alert">
                                    <p class="txt-danger">The <a class="alert-link txt-danger"
                                            href="#!">"alert-light-danger"
                                        </a>class can be used to create an alert like this one.</p>
                                </div>
                                <p class="mb-0">White Light Alert</p>
                                <div class="alert alert-light-light" role="alert">
                                    <p class="txt-dark">The <a class="alert-link txt-dark"
                                            href="#!">"alert-light-light" </a>class
                                        can be used to create an alert like this one.</p>
                                </div>
                                <p class="mb-0">Dark Light Alert</p>
                                <div class="alert alert-light-dark" role="alert">
                                    <p class="txt-dark">The <a class="alert-link txt-dark"
                                            href="#!">"alert-light-dark" </a>class
                                        can be used to create an alert like this one.</p>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#light-alert-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="light-alert-copy">&lt;div class="row"&gt; 
 &lt;div class="col-xl-6"&gt;
   &lt;p class="mb-0"&gt;Primary Light Alert&lt;/p&gt;
   &lt;div class="alert alert-light-primary" role="alert"&gt;
     &lt;p class="txt-primary"&gt;The
       &lt;a class="alert-link txt-primary" href="#!"&gt;"alert-light-primary"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/p&gt;
   &lt;/div&gt;
   &lt;p class="mb-0"&gt;Secondary Light Alert&lt;/p&gt;
   &lt;div class="alert alert-light-secondary" role="alert"&gt;
     &lt;p class="txt-secondary"&gt;The
       &lt;a class="alert-link txt-secondary" href="#!"&gt;"alert-light-secondary"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/p&gt;
   &lt;/div&gt;
   &lt;p class="mb-0"&gt;Success Light Alert&lt;/p&gt;
   &lt;div class="alert alert-light-success" role="alert"&gt;
     &lt;div class="txt-success"&gt;The
       &lt;a class="alert-link txt-success" href="#!"&gt;"alert-light-success"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;p class="mb-0"&gt;Info Light Alert&lt;/p&gt;
   &lt;div class="alert alert-light-info" role="alert"&gt;
     &lt;div class="txt-info"&gt;The
       &lt;a class="alert-link txt-info" href="#!"&gt;"alert-light-info"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xl-6"&gt;
   &lt;p class="mb-0"&gt;Warning Light Alert&lt;/p&gt;
   &lt;div class="alert alert-light-warning" role="alert"&gt;
     &lt;p class="txt-warning"&gt;The
       &lt;a class="alert-link txt-warning" href="#!"&gt;"alert-light-warning"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/p&gt;
   &lt;/div&gt;
   &lt;p class="mb-0"&gt;Danger Light Alert&lt;/p&gt;
   &lt;div class="alert alert-light-danger" role="alert"&gt;
     &lt;p class="txt-danger"&gt;The
       &lt;a class="alert-link txt-danger" href="#!"&gt;"alert-light-danger"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/p&gt;
   &lt;/div&gt;
   &lt;p class="mb-0"&gt;White Light Alert&lt;/p&gt;
   &lt;div class="alert alert-light-light" role="alert"&gt;
     &lt;p class="txt-dark"&gt;The
       &lt;a class="alert-link txt-dark" href="#!"&gt;"alert-light-light"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/p&gt;
   &lt;/div&gt;
   &lt;p class="mb-0"&gt;Dark Light Alert&lt;/p&gt;
   &lt;div class="alert alert-light-dark" role="alert"&gt;
     &lt;p class="txt-dark"&gt;The
       &lt;a class="alert-link txt-dark" href="#!"&gt;"alert-light-dark"&lt;/a&gt;class can be used to create an alert like this one.
     &lt;/p&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Outline Dark and Light Alerts</h5>
                        <p class="f-m-light mt-1">Use<code> border-* </code>utility class to provide matching border and
                            border-width within any alert<code> [solid/double/inset/outset]</code>.</p>
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
                    <div class="card-body outline-alerts">
                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <div class="alert txt-primary border-primary alert-dismissible fade show" role="alert">
                                    <i data-feather="clock"></i>
                                    <p>The <b class="txt-primary">"border-primary" </b>class has the ability to generate on
                                        its own
                                        alerts.</p><button class="btn-close" type="button" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <div class="alert txt-success border-success outline-2x alert-dismissible fade show alert-icons"
                                    role="alert"><i data-feather="thumbs-up"></i>
                                    <p>The <b class="txt-success">"border-success" </b>with <b
                                            class="txt-success">"outline-2x"
                                        </b>class has the ability to generate on its own alerts.</p><button
                                        class="btn-close" type="button" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="alert txt-warning double-border border-warning alert-dismissible fade show alert-icons"
                                    role="alert"><i data-feather="alert-triangle"></i>
                                    <p>The <b class="txt-warning">"double-border"</b>&<b
                                            class="txt-warning">"border-warning"
                                        </b>class has the ability to generate on its own alerts.</p><button
                                        class="btn-close" type="button" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <div class="alert txt-danger inset-border border-danger outline-2x alert-dismissible fade show alert-icons"
                                    role="alert"><i data-feather="alert-octagon"></i>
                                    <p>The <b class="txt-danger">"inset-border" </b>with <b
                                            class="txt-danger">"border-danger"
                                        </b>class has the ability to generate on its own alerts.</p><button
                                        class="btn-close" type="button" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#outline-alerts-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="outline-alerts-copy">&lt;div class="row gy-3"&gt; 
 &lt;div class="col-xl-6"&gt;
   &lt;div class="alert txt-primary border-primary alert-dismissible fade show" role="alert"&gt;
     &lt;i data-feather="clock"&gt;&lt;/i&gt;
     &lt;p&gt;The&lt;code&gt;"border-primary"&lt;/code&gt;class has the ability to generate on its own alerts.&lt;/p&gt;
     &lt;button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;/button&gt;
   &lt;/div&gt;
   &lt;div class="alert txt-success border-success outline-2x alert-dismissible fade show alert-icons" role="alert"&gt;
     &lt;i data-feather="thumbs-up"&gt;&lt;/i&gt;
     &lt;p&gt;The
       &lt;b class="txt-success"&gt;"border-success"&lt;/b&gt;with
       &lt;b class="txt-success"&gt;"outline-2x"&lt;/b&gt;class has the ability to generate on its own alerts.
     &lt;/p&gt;
     &lt;button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;/button&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xl-6"&gt;
   &lt;div class="alert txt-warning double-border border-warning alert-dismissible fade show alert-icons" role="alert"&gt;
     &lt;i data-feather="alert-triangle"&gt;&lt;/i&gt;
     &lt;p&gt;The
       &lt;b class="txt-warning"&gt;"double-border"&lt;/b&gt;;&amp;
       &lt;b class="txt-warning"&gt;"border-warning"&lt;/b&gt;class has the ability to generate on its own alerts.
     &lt;/p&gt;
     &lt;button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;/button&gt;
   &lt;/div&gt;
   &lt;div class="alert txt-danger inset-border border-danger outline-2x alert-dismissible fade show alert-icons" role="alert"&gt;
     &lt;i data-feather="alert-octagon"&gt;&lt;/i&gt;
     &lt;p&gt;The
       &lt;b class="txt-danger"&gt;"inset-border"&lt;/b&gt;with
       &lt;b class="txt-danger"&gt;"border-danger"&lt;/b&gt;class has the ability to generate on its own alerts.
     &lt;/p&gt;
     &lt;button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;/button&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Alerts with Icons and Text Actions</h5>
                        <p class="f-m-light mt-1">Use <code>border-*</code> class to add dismiss text instead of icon.</p>
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
                    <div class="card-body dark-txt">
                        <div class="alert border-warning alert-dismissible fade show p-0" role="alert">
                            <div class="alert-arrow bg-warning"><i class="icon-timer"></i></div>
                            <p>Your time Over after <strong class="txt-dark"> 5</strong> minute</p><button
                                class="p-0 border-0 me-2 ms-auto" type="button" data-bs-dismiss="alert"
                                aria-label="Close"><span class="bg-warning px-3 py-1"
                                    aria-hidden="true">Check</span></button>
                        </div>
                        <div class="alert border-danger alert-dismissible fade show p-0 mb-0" role="alert">
                            <div class="alert-arrow bg-danger"><i class="icon-heart"></i></div>
                            <p>Oh snap! Change a few things up <strong class="txt-dark"> Notification check</strong></p>
                            <button class="p-0 border-0 me-2 ms-auto" type="button" data-bs-dismiss="alert"
                                aria-label="Close"><span class="bg-danger text-white px-3 py-1"
                                    aria-hidden="true">Alert</span></button>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#alert-icon-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="alert-icon-copy">&lt;div class="alert border-warning alert-dismissible fade show p-0" role="alert"&gt;
 &lt;div class="alert-arrow bg-warning"&gt;
   &lt;i class="icon-timer"&gt;&lt;/i&gt;
 &lt;/div&gt;
 &lt;p&gt;Your time Over after&lt;strong class="txt-dark"&gt;5&lt;/strong&gt;minute&lt;/p&gt;
 &lt;button class="p-0 border-0 me-2 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"&gt;
   &lt;span class="bg-warning px-3 py-1" aria-hidden="true"&gt;Check&lt;/span&gt;
 &lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert border-danger alert-dismissible fade show p-0 mb-0" role="alert"&gt;
 &lt;div class="alert-arrow bg-danger"&gt;
   &lt;i class="icon-heart"&gt;&lt;/i&gt;
 &lt;/div&gt;
 &lt;p&gt;Oh snap! Change a few things up
   &lt;strong class="txt-dark"&gt; Notification check&lt;/strong&gt;
 &lt;/p&gt;
 &lt;button class="p-0 border-0 me-2 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"&gt;
   &lt;span class="bg-danger text-white px-3 py-1" aria-hidden="true"&gt;Alert&lt;/span&gt;
 &lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Live Alert</h5>
                        <p class="f-m-light mt-1"> Click the button below to show an alert (hidden with inline styles to
                            start), then dismiss (and destroy) it with the built-in close button.</p>
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
                    <div class="card-body live-dark">
                        <div id="liveAlertPlaceholder"></div><button class="btn btn-dark" id="liveAlertBtn"
                            type="button">Show
                            Live Alert</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#live-alert-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="live-alert-copy">&lt;div id="liveAlertPlaceholder"&gt;&lt;/div&gt;
&lt;button class="btn btn-dark" id="liveAlertBtn" type="button"&gt;Show Live Alert&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Dismissing Light Alert</h5>
                        <p class="f-m-light mt-1">Use <code>alert-light-*</code> class can be used to generate a light
                            alerts
                            and<code> alert-dismissible</code> utility class to remove the alerts.</p>
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
                    <div class="card-body dark-alert-msg">
                        <div class="alert alert-bg-warning alert-dismissible fade show" role="alert"><i
                                data-feather="bell"></i>
                            <p>The <a class="alert-link txt-warning" href="#!">"alert-bg-warning" </a>class can be
                                used to
                                create an alert like this one.</p><button class="btn-close" type="button"
                                data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#dismissing-light-alert" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="dismissing-light-alert">&lt;div class="alert alert-bg-warning alert-dismissible fade show" role="alert"&gt;
 &lt;i data-feather="bell"&gt;&lt;/i&gt;
 &lt;p&gt;The 
   &lt;a class="alert-link txt-warning" href="#!"&gt;"alert-bg-warning"&lt;/a&gt;class can be used to create an alert like this one.
 &lt;/p&gt;
 &lt;button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Dismissing Dark Alert</h5>
                        <p class="f-m-light mt-1">Use <code>alert-*</code> class can be used to generate a dark alerts
                            and<code> alert-dismissible</code> utility class to remove the alerts.</p>
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
                        <div class="alert alert-dark dark alert-dismissible fade show" role="alert"><i
                                data-feather="heart"></i>
                            <p class="txt-light">The <a class="alert-link txt-light" href="#!">"alert-dark"
                                </a>class can be
                                used to create an alert like this one.</p><button class="btn-close" type="button"
                                data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#dismissing-alert-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="dismissing-alert-copy">&lt;div class="alert alert-dark dark alert-dismissible fade show" role="alert"&gt;
 &lt;i data-feather="heart"&gt;&lt;/i&gt;
 &lt;p class="txt-light"&gt;The
   &lt;a class="alert-link txt-light" href="#!"&gt;"alert-dark"&lt;/a&gt;class can be used to create an alert like this one.
 &lt;/p&gt;
 &lt;button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Left Border Alert</h5>
                        <p class="f-m-light mt-1"> Use <code>border-left-*</code> class to add left border to alert.</p>
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
                    <div class="card-body live-dark dark-alert-msg">
                        <div class="alert alert-bg-dark light alert-dismissible fade show txt-dark border-left-dark"
                            role="alert"><i data-feather="help-circle"></i>
                            <p>Dark Alert: border-left-wrapper</p><button class="btn-close" type="button"
                                data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-bg-secondary light alert-dismissible fade show txt-secondary border-left-secondary"
                            role="alert"><i data-feather="alert-octagon"></i>
                            <p>Secondary Alert: border-left-secondary</p><button class="btn-close" type="button"
                                data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-bg-success light alert-dismissible fade show txt-success border-left-success"
                            role="alert"><i data-feather="check-square"></i>
                            <p>Success Alert: border-left-success</p><button class="btn-close" type="button"
                                data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#border-alert-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="border-alert-copy">&lt;div class="alert alert-light-dark light alert-dismissible fade show txt-dark border-left-dark" role="alert"&gt;
 &lt;i data-feather="help-circle"&gt;&lt;/i&gt;
 &lt;p&gt;Dark Alert: border-left-wrapper&lt;/p&gt;
 &lt;button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-light-secondary light alert-dismissible fade show txt-secondary border-left-secondary" role="alert"&gt;
 &lt;i data-feather="alert-octagon"&gt;&lt;/i&gt;
 &lt;p&gt;Secondary Alert: border-left-secondary&lt;/p&gt;
 &lt;button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class="alert alert-light-success light alert-dismissible fade show txt-success border-left-success" role="alert"&gt;
 &lt;i data-feather="check-square"&gt;&lt;/i&gt;
 &lt;p&gt;Success Alert: border-left-success&lt;/p&gt;
 &lt;button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Custom Alert Popup</h5>
                        <p class="f-m-light mt-1"> Use<code> alert </code>class can be used to generate a custom alert.</p>
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
                        <div class="alert-box">
                            <div class="alert alert-dismissible justify-content-center p-0 fade show" role="alert">
                                <div class="alert-body"><svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#alert-popup') }}"></use>
                                    </svg>
                                    <h6 class="mb-1">A Crucial Update is Now Available</h6>
                                    <p>For improved security and functionality, install the most recent version right away.
                                    </p>
                                    <div class="button-box"><button class="btn light-background">Later</button><button
                                            class="btn btn-warning">Right Now</button></div>
                                </div><button class="btn-close" type="button" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#custom-alert-popup" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="custom-alert-popup">&lt;div class="alert-box"&gt;
 &lt;div class="alert alert-dismissible justify-content-center p-0 fade show" role="alert"&gt;
   &lt;div class="alert-body"&gt;
     &lt;svg&gt; 
       &lt;use href="{{ asset('assets/svg/icon-sprite.svg#alert-popup') }}"&gt;&lt;/use&gt;
     &lt;/svg&gt;
     &lt;h6 class="mb-1"&gt;A Crucial Update is Now Available&lt;/h6&gt;
     &lt;p&gt;For improved security and functionality, install the most recent version right away.&lt;/p&gt;
     &lt;div class="button-box"&gt;
       &lt;button class="btn light-background"&gt;Later&lt;/button&gt;
       &lt;button class="btn btn-warning"&gt;Right Now&lt;/button&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;/button&gt;
 &lt;/div&gt;
&lt;/div&gt;                                           </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Icons with Alerts</h5>
                        <p class="f-m-light mt-1"> Use<code> alert alert-* </code>classes to add SVG icons to the alerts.
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
                    <div class="card-body alerts-icon">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="alert alert-primary d-flex align-items-center" role="alert">
                                    <div><i class="stroke-primary" data-feather="bar-chart-2"></i></div><span
                                        class="txt-light">Use
                                        <a class="alert-link text-white" href="#!">"alert-primary"</a> and <a
                                            class="alert-link text-white" href="#!">"stroke-primary"</a> classes for
                                        alerts like this
                                        one. </span>
                                </div>
                                <div class="alert alert-secondary d-flex align-items-center" role="alert">
                                    <div><i class="stroke-secondary" data-feather="layers"></i></div><span
                                        class="txt-light">Use <a class="alert-link text-white"
                                            href="#!">"alert-secondary"</a> and <a class="alert-link text-white"
                                            href="#!">"stroke-secondary"</a> classes for alerts like this
                                        one. </span>
                                </div>
                                <div class="alert alert-warning d-flex align-items-center" role="alert">
                                    <div><i class="stroke-warning" data-feather="alert-triangle"></i></div><span
                                        class="txt-light">Use <a class="alert-link text-white"
                                            href="#!">"alert-warning"</a> and <a class="alert-link text-white"
                                            href="#!">"stroke-warning"</a> classes for alerts like this
                                        one. </span>
                                </div>
                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                    <div><i class="stroke-success" data-feather="check-square"></i></div><span
                                        class="txt-light">Use
                                        <a class="alert-link text-white" href="#!">"alert-success"</a> and <a
                                            class="alert-link text-white" href="#!">"stroke-success"</a> classes for
                                        alerts like this
                                        one. </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <div><i class="stroke-danger" data-feather="alert-circle"></i></div><span
                                        class="txt-light">Use
                                        <a class="alert-link text-white" href="#!">"alert-danger"</a> and <a
                                            class="alert-link text-white" href="#!">"stroke-danger"</a> classes for
                                        alerts like this
                                        one. </span>
                                </div>
                                <div class="alert alert-info d-flex align-items-center" role="alert">
                                    <div><i class="stroke-info" data-feather="octagon"></i></div><span
                                        class="txt-light">Use <a class="alert-link text-white"
                                            href="#!">"alert-info"</a> and <a class="alert-link text-white"
                                            href="#!">"stroke-info"</a> classes for alerts like this one.
                                    </span>
                                </div>
                                <div class="alert alert-light d-flex align-items-center" role="alert">
                                    <div><i class="stroke-dark" data-feather="thumbs-up"></i></div><span>Use <a
                                            class="alert-link text-dark" href="#!">"alert-light"</a> and <a
                                            class="alert-link text-dark" href="#!">"stroke-dark"</a> classes for
                                        alerts like this one. </span>
                                </div>
                                <div class="alert alert-dark d-flex align-items-center" role="alert">
                                    <div><i class="stroke-dark" data-feather="loader"></i></div><span
                                        class="txt-light">Use <a class="alert-link text-white"
                                            href="#!">"alert-dark"</a> and <a class="alert-link text-white"
                                            href="#!">"stroke-dark"</a> classes for alerts like this one.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#icon-alert-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="icon-alert-copy">&lt;div class="row"&gt; 
 &lt;div class="col-md-6"&gt; 
   &lt;div class="alert alert-primary d-flex align-items-center" role="alert"&gt;
     &lt;div&gt;
       &lt;i class="stroke-primary" data-feather="bar-chart-2"&gt;&lt;/i&gt;
     &lt;/div&gt;
     &lt;span class="txt-light"&gt;Use
       &lt;a class="alert-link text-white" href="#!"&gt;"alert-primary"&lt;/a&gt;and
       &lt;a class="alert-link text-white" href="#!"&gt;"stroke-primary"&lt;/a&gt;classes for alerts like this one.
     &lt;/span&gt;
   &lt;/div&gt;
   &lt;div class="alert alert-secondary d-flex align-items-center" role="alert"&gt;
     &lt;div&gt;
       &lt;i class="stroke-secondary" data-feather="layers"&gt;&lt;/i&gt;
     &lt;/div&gt;
     &lt;span class="txt-light"&gt;Use
       &lt;a class="alert-link text-white" href="#!"&gt;"alert-secondary"&lt;/a&gt;and
       &lt;a class="alert-link text-white" href="#!"&gt;"stroke-secondary"&lt;/a&gt;classes for alerts like this one.
     &lt;/span&gt;
   &lt;/div&gt;
   &lt;div class="alert alert-warning d-flex align-items-center" role="alert"&gt;
     &lt;div&gt;
       &lt;i class="stroke-warning" data-feather="alert-triangle"&gt;&lt;/i&gt;
     &lt;/div&gt;
     &lt;span class="txt-light"&gt;Use
       &lt;a class="alert-link text-white" href="#!"&gt;"alert-warning"&lt;/a&gt;and
       &lt;a class="alert-link text-white" href="#!"&gt;"stroke-warning"&lt;/a&gt;classes for alerts like this one.
     &lt;/span&gt;
   &lt;/div&gt;
   &lt;div class="alert alert-success d-flex align-items-center" role="alert"&gt;
     &lt;div&gt;
       &lt;i class="stroke-success" data-feather="check-square"&gt;&lt;/i&gt;
     &lt;/div&gt;
     &lt;span class="txt-light"&gt;Use
       &lt;a class="alert-link text-white" href="#!"&gt;"alert-success"&lt;/a&gt;and
       &lt;a class="alert-link text-white" href="#!"&gt;"stroke-success"&lt;/a&gt;classes for alerts like this one.
     &lt;/span&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-md-6"&gt; 
   &lt;div class="alert alert-danger d-flex align-items-center" role="alert"&gt;
     &lt;div&gt;
       &lt;i class="stroke-danger" data-feather="alert-circle"&gt;&lt;/i&gt;
     &lt;/div&gt;
     &lt;span class="txt-light"&gt;Use
       &lt;a class="alert-link text-white" href="#!"&gt;"alert-danger"&lt;/a&gt;and
       &lt;a class="alert-link text-white" href="#!"&gt;"stroke-danger"&lt;/a&gt;classes for alerts like this one.
     &lt;/span&gt;
   &lt;/div&gt;
   &lt;div class="alert alert-info d-flex align-items-center" role="alert"&gt;
     &lt;div&gt;
       &lt;i class="stroke-info" data-feather="octagon"&gt;&lt;/i&gt;
     &lt;/div&gt;
     &lt;span class="txt-light"&gt;Use
       &lt;a class="alert-link text-white" href="#!"&gt;"alert-info"&lt;/a&gt;and
       &lt;a class="alert-link text-white" href="#!"&gt;"stroke-info"&lt;/a&gt;classes for alerts like this one.
     &lt;/span&gt;
   &lt;/div&gt;
   &lt;div class="alert alert-light d-flex align-items-center" role="alert"&gt;
     &lt;div&gt;
       &lt;i class="stroke-dark" data-feather="thumbs-up"&gt;&lt;/i&gt;
     &lt;/div&gt;
     &lt;span&gt;Use
       &lt;a class="alert-link text-dark" href="#!"&gt;"alert-light"&lt;/a&gt;and
       &lt;a class="alert-link text-dark" href="#!"&gt;"stroke-dark"&lt;/a&gt;classes for alerts like this one.
     &lt;/span&gt;
   &lt;/div&gt;
   &lt;div class="alert alert-dark d-flex align-items-center" role="alert"&gt;
     &lt;div&gt;
       &lt;i class="stroke-dark" data-feather="loader"&gt;&lt;/i&gt;
     &lt;/div&gt;
     &lt;span class="txt-light"&gt;Use
       &lt;a class="alert-link text-white" href="#!"&gt;"alert-dark"&lt;/a&gt;and
       &lt;a class="alert-link text-white" href="#!"&gt;"stroke-dark"&lt;/a&gt;classes for alerts like this one.
     &lt;/span&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Additional Contents</h5>
                        <p class="f-m-light mt-1"> Use<code> alert </code> utility class to provide additional content
                            within
                            any alerts.</p>
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
                    <div class="card-body dark-alert alert-addition-content">
                        <div class="alert bg-light-primary" role="alert">
                            <h5 class="alert-heading pb-2 txt-primary">Please! Check your notifications</h5>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to
                                run a
                                bit longer so that you can see how spacing within an alert works with this kind of content.
                            </p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and
                                tidy.
                            </p>
                        </div>
                        <div class="alert bg-light-secondary" role="alert">
                            <h5 class="alert-heading pb-2 txt-secondary">Something went wrong! Please, chrome update.</h5>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to
                                run a
                                bit longer so that you can see how spacing within an alert works with this kind of content.
                            </p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and
                                tidy.
                            </p>
                        </div>
                        <div class="alert bg-light-success mb-0" role="alert">
                            <h5 class="alert-heading pb-2 txt-success">Please! Hidden cameras were not installed.</h5>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to
                                run a
                                bit longer so that you can see how spacing within an alert works with this kind of content.
                            </p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and
                                tidy.
                            </p>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#additional-content-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="additional-content-copy">&lt;div class="alert bg-light-primary" role="alert"&gt;
 &lt;h5 class="alert-heading pb-2 txt-primary"&gt;Please! Check your notifications&lt;/h5&gt;
 &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.&lt;/p&gt;
 &lt;hr&gt;
 &lt;p class="mb-0"&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
&lt;/div&gt;
&lt;div class="alert bg-light-secondary" role="alert"&gt;
 &lt;h5 class="alert-heading pb-2 txt-secondary"&gt;Something went wrong! Please, chrome update.&lt;/h5&gt;
 &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.&lt;/p&gt;
 &lt;hr&gt;
 &lt;p class="mb-0"&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
&lt;/div&gt;
&lt;div class="alert bg-light-success mb-0" role="alert"&gt;
 &lt;h5 class="alert-heading pb-2 txt-success"&gt;Please! Hidden cameras were not installed.&lt;/h5&gt;
 &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.&lt;/p&gt;
 &lt;hr&gt;
 &lt;p class="mb-0"&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
&lt;/div&gt;</code></pre>
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
    <script src="{{ asset('assets/js/alert.js') }}"></script>
@endsection
