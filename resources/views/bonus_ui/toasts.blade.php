@extends('layouts.simple.master')

@section('title', 'Toasts')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Toasts</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Toasts</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid default-toasts">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Message Toasts</h5>
                        <p class="f-m-light mt-1"> Use<code> position-fixed</code> class to
                            <code> [top/end/start/bottom]</code> toasts.
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
                    <div class="card-body common-flex common-toasts"><button class="btn btn-success" id="liveToastBtn6"
                            type="button">Success Toast</button>
                        <div class="toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl">
                            <div class="toast" id="liveToast6" role="alert" aria-live="polite" aria-atomic="true">
                                <div class="common-space alert-light-success">
                                    <div class="toast-body"><i class="close-search stroke-success"
                                            data-feather="check-square"></i>Success: We've updated your info</div><button
                                        class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div><button class="btn btn-warning" id="liveToastBtn5" type="button">Warning Toast</button>
                        <div class="toast-container position-fixed top-50 end-0 p-3 toast-index toast-rtl">
                            <div class="toast" id="liveToast5" role="alert" aria-live="polite" aria-atomic="true">
                                <div class="common-space alert-light-warning">
                                    <div class="toast-body"><i class="close-search stroke-warning"
                                            data-feather="alert-triangle"></i>Software drivers needed to be updated in
                                        advance</div>
                                    <button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div><button class="btn btn-danger" id="liveToastBtn4" type="button">Error Toast</button>
                        <div class="toast-container position-fixed bottom-0 end-0 p-3 toast-index toast-rtl">
                            <div class="toast" id="liveToast4" role="alert" aria-live="polite" aria-atomic="true">
                                <div class="common-space alert-light-danger">
                                    <div class="toast-body"><i class="close-search stroke-danger"
                                            data-feather="x-circle"></i>A
                                        database connection error has occurred</div><button class="btn-close" type="button"
                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#message-toast-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="message-toast-copy">&lt;div class="card-body common-flex common-toasts"&gt;
 &lt;button class="btn btn-success" id="liveToastBtn6" type="button"&gt;Success Toast&lt;/button&gt;
 &lt;div class="toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl"&gt;
   &lt;div class="toast" id="liveToast6" role="alert" aria-live="polite" aria-atomic="true"&gt;
     &lt;div class="common-space alert-light-success"&gt;
       &lt;div class="toast-body"&gt;
         &lt;i class="close-search stroke-success" data-feather="check-square"&gt;&lt;/i&gt;Success: We've updated your info
       &lt;/div&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;button class="btn btn-warning" id="liveToastBtn5" type="button"&gt;Warning Toast&lt;/button&gt;
 &lt;div class="toast-container position-fixed top-50 end-0 p-3 toast-index toast-rtl"&gt;
   &lt;div class="toast" id="liveToast5" role="alert" aria-live="polite" aria-atomic="true"&gt;
     &lt;div class="common-space alert-light-warning"&gt;
       &lt;div class="toast-body"&gt;
         &lt;i class="close-search stroke-warning" data-feather="alert-triangle"&gt;&lt;/i&gt;Software drivers needed to be updated in advance
       &lt;/div&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;button class="btn btn-danger" id="liveToastBtn4" type="button"&gt;Error Toast&lt;/button&gt;
 &lt;div class="toast-container position-fixed bottom-0 end-0 p-3 toast-index toast-rtl"&gt;
   &lt;div class="toast" id="liveToast4" role="alert" aria-live="polite" aria-atomic="true"&gt;
     &lt;div class="common-space alert-light-danger"&gt;
       &lt;div class="toast-body"&gt;
         &lt;i class="close-search stroke-danger" data-feather="x-circle"&gt;&lt;/i&gt;A database connection error has occurred
       &lt;/div&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Live Toast</h5>
                        <p class="f-m-light mt-1"> Use <code>hide </code>class to hide toast and <code>show </code>class to
                            visible toast and given directions.<code>[top-0/bottom-0/start-0/end-0]</code></p>
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
                    <div class="card-body position-relative common-flex live-toast"><button class="btn btn-primary"
                            id="liveToastBtn" type="button">Top-right Toast</button>
                        <div class="toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl">
                            <div class="toast hide toast fade" id="liveToast" role="alert" aria-live="assertive"
                                aria-atomic="true">
                                <div class="toast-header toast-img"><img class="rounded me-2"
                                        src="{{ asset('assets/images/dashboard-5/profile.png') }}" alt="profile"><strong
                                        class="me-auto">Yuri
                                        Theme</strong><small>5 min ago</small><button class="btn-close" type="button"
                                        data-bs-dismiss="toast" aria-label="Close"></button></div>
                                <div class="toast-body toast-dark">Hello, I'm a web-designer.</div>
                            </div>
                        </div><button class="btn btn-secondary" id="liveToastBtn1" type="button">Bottom-right
                            Toast</button>
                        <div class="toast-container position-fixed bottom-0 end-0 p-3 toast-index toast-rtl">
                            <div class="toast hide toast fade" id="liveToast1" role="alert" aria-live="assertive"
                                aria-atomic="true">
                                <div class="d-flex justify-content-between alert-secondary">
                                    <div class="toast-body">Your time over after 5 minute.</div><button
                                        class="btn-close btn-close-white me-2 m-auto" type="button"
                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </div>
                        </div><button class="btn btn-warning" id="liveToastBtn2" type="button">Top-left Toast</button>
                        <div class="toast-container position-fixed start-0 top-0 p-3 toast-index toast-rtl">
                            <div class="toast hide toast fade" id="liveToast2" role="alert" aria-live="assertive"
                                aria-atomic="true">
                                <div class="toast-header toast-img"><img class="rounded me-2"
                                        src="{{ asset('assets/images/dashboard-5/profile.png') }}" alt="profile"><strong
                                        class="me-auto">Riho
                                        Theme</strong><small class="d-sm-block d-none">10 min ago</small><button
                                        class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button></div>
                                <div class="toast-body toast-dark"><strong class="txt-success">Well done!</strong> You
                                    successfully read this important message.</div>
                            </div>
                        </div><button class="btn btn-success" id="liveToastBtn3" type="button">Bottom-left
                            Toast</button>
                        <div class="toast-container position-fixed start-0 bottom-0 p-3 toast-index toast-rtl">
                            <div class="toast hide toast fade" id="liveToast3" role="alert" aria-live="assertive"
                                aria-atomic="true">
                                <div class="toast-header toast-img"><img class="rounded me-2"
                                        src="{{ asset('assets/images/dashboard-5/profile.png') }}" alt="profile"><strong
                                        class="me-auto">Mofi
                                        Theme</strong><button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button></div>
                                <div class="toast-body toast-dark">
                                    <h6 class="mb-2">Your account will be permanently deleted?</h6>
                                    <p class="mb-0">Do you intend to continue?</p>
                                    <div class="mt-2 pt-2 border-top d-flex gap-2"><button class="btn btn-dark btn-sm"
                                            type="button">I'm not sure</button><button class="btn btn-danger btn-sm"
                                            type="button" data-bs-dismiss="toast">Remove My Account</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#live-toast-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="live-toast-copy">&lt;div class="card-body position-relative common-flex"&gt;
 &lt;button class="btn btn-primary" id="liveToastBtn" type="button"&gt;Top-right Toast&lt;/button&gt;
 &lt;div class="toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl"&gt;
   &lt;div class="toast hide toast fade" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true"&gt;
     &lt;div class="toast-header toast-img"&gt;
       &lt;img class="rounded me-2" src="{{ asset('assets/images/dashboard-5/profile.png') }}" alt="profile"&gt;
       &lt;strong class="me-auto"&gt;Yuri Theme&lt;/strong&gt;
       &lt;small&gt;5 min ago&lt;/small&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="toast-body toast-dark"&gt;Hello, I'm a web-designer.&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;button class="btn btn-secondary" id="liveToastBtn1" type="button"&gt;Bottom-right Toast&lt;/button&gt;
 &lt;div class="toast-container position-fixed bottom-0 end-0 p-3 toast-index toast-rtl"&gt;
   &lt;div class="toast hide toast fade" id="liveToast1" role="alert" aria-live="assertive" aria-atomic="true"&gt;
     &lt;div class="d-flex justify-content-between alert-secondary"&gt;
       &lt;div class="toast-body"&gt;Your time over after 5 minute.&lt;/div&gt;
       &lt;button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;button class="btn btn-warning" id="liveToastBtn2" type="button"&gt;Top-left Toast&lt;/button&gt;
 &lt;div class="toast-container position-fixed start-0 top-0 p-3 toast-index toast-rtl"&gt;
   &lt;div class="toast hide toast fade" id="liveToast2" role="alert" aria-live="assertive" aria-atomic="true"&gt;
     &lt;div class="toast-header toast-img"&gt;
       &lt;img class="rounded me-2" src="{{ asset('assets/images/dashboard-5/profile.png') }}" alt="profile"&gt;
       &lt;strong class="me-auto"&gt;Riho Theme&lt;/strong&gt;&lt;small class="d-sm-block d-none"&gt;10 min ago&lt;/small&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="toast-body toast-dark"&gt;
       &lt;strong class="txt-success"&gt;Well done!&lt;/strong&gt; You successfully read this important message.
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;button class="btn btn-success" id="liveToastBtn3" type="button"&gt;Bottom-left Toast&lt;/button&gt;
 &lt;div class="toast-container position-fixed start-0 bottom-0 p-3 toast-index toast-rtl"&gt;
   &lt;div class="toast hide toast fade" id="liveToast3" role="alert" aria-live="assertive" aria-atomic="true"&gt;
     &lt;div class="toast-header toast-img"&gt;
       &lt;img class="rounded me-2" src="{{ asset('assets/images/dashboard-5/profile.png') }}" alt="profile"&gt;
       &lt;strong class="me-auto"&gt;Mofi Theme&lt;/strong&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="toast-body toast-dark"&gt;
       &lt;h6 class="mb-2"&gt;Your account will be permanently deleted?&lt;/h6&gt;
       &lt;p class="mb-0"&gt;Do you intend to continue?&lt;/p&gt;
       &lt;div class="mt-2 pt-2 border-top d-flex gap-2"&gt;
         &lt;button class="btn btn-dark btn-sm" type="button"&gt;I'm not sure&lt;/button&gt;
         &lt;button class="btn btn-danger btn-sm" type="button" data-bs-dismiss="toast"&gt;Remove My Account&lt;/button&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Colors Schemes</h5>
                        <p class="f-m-light mt-1"> Use <code>hide </code>class to hide toast and <code>show </code>class to
                            visible toast.</p>
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
                    <div class="card-body toast-rtl">
                        <div class="toast default-show-toast align-items-center text-light bg-warning border-0 fade show"
                            role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                            <div class="d-flex justify-content-between">
                                <div class="toast-body">Your time over after 5 minute.</div><button
                                    class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#color-toast-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="color-toast-copy">&lt;div class="card-body toast-rtl"&gt;
 &lt;div class="toast default-show-toast align-items-center text-light bg-warning border-0 fade show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false"&gt;
   &lt;div class="d-flex justify-content-between"&gt;
     &lt;div class="toast-body"&gt;Your time over after 5 minute.&lt;/div&gt;
     &lt;button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Stacking Toasts</h5>
                        <p class="f-m-light mt-1"> You can stack toasts by wrapping them in a toast container, which will
                            vertically add some spacing.<code>[toast-*]</code> to change icons colors.</p>
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
                    <div class="card-body toast-rtl">
                        <div class="toast-container position-static">
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"
                                data-bs-autohide="false">
                                <div class="toast-header"><i class="toast-icons toast-primary"
                                        data-feather="bell"></i><strong class="me-auto">Yuri Theme</strong><small
                                        class="txt-danger">just now</small><button class="btn-close" type="button"
                                        data-bs-dismiss="toast" aria-label="Close"></button></div>
                                <div class="toast-body toast-dark">Hello, I'm a web-designer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"
                                data-bs-autohide="false">
                                <div class="toast-header"><i class="toast-icons toast-warning"
                                        data-feather="bell"></i><strong class="me-auto">Roxo Theme</strong><small
                                        class="text-muted">2 sec ago</small><button class="btn-close" type="button"
                                        data-bs-dismiss="toast" aria-label="Close"></button></div>
                                <div class="toast-body toast-dark">Hello, I'm a UX-designer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"
                                data-bs-autohide="false">
                                <div class="toast-header"><i class="toast-icons toast-danger"
                                        data-feather="bell"></i><strong class="me-auto">Zeta Theme</strong><small
                                        class="text-muted">6 min ago</small><button class="btn-close" type="button"
                                        data-bs-dismiss="toast" aria-label="Close"></button></div>
                                <div class="toast-body toast-dark">Hello, I'm a Software developer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"
                                data-bs-autohide="false">
                                <div class="toast-header"><i class="toast-icons toast-success"
                                        data-feather="bell"></i><strong class="me-auto">Voxo Theme</strong><small
                                        class="text-muted">3 sec ago</small><button class="btn-close" type="button"
                                        data-bs-dismiss="toast" aria-label="Close"></button></div>
                                <div class="toast-body toast-dark">Hello, I'm a professional web-designer.</div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#stacking-toast-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="stacking-toast-copy"> &lt;div class="card-body toast-rtl"&gt;
 &lt;div class="toast-container position-static"&gt;
   &lt;div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false"&gt;
     &lt;div class="toast-header"&gt;
       &lt;i class="toast-icons toast-primary" data-feather="bell"&gt;&lt;/i&gt;
       &lt;strong class="me-auto"&gt;Yuri Theme&lt;/strong&gt;
       &lt;small class="txt-danger"&gt;just now&lt;/small&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="toast-body toast-dark"&gt;Hello, I'm a web-designer.&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false"&gt;
     &lt;div class="toast-header"&gt;
       &lt;i class="toast-icons toast-warning" data-feather="bell"&gt;&lt;/i&gt;
       &lt;strong class="me-auto"&gt;Roxo Theme&lt;/strong&gt;
       &lt;small class="text-muted"&gt;2 sec ago&lt;/small&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="toast-body toast-dark"&gt;Hello, I'm a UX-designer.&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false"&gt;
     &lt;div class="toast-header"&gt;
       &lt;i class="toast-icons toast-danger" data-feather="bell"&gt;&lt;/i&gt;
       &lt;strong class="me-auto"&gt;Zeta Theme&lt;/strong&gt;
       &lt;small class="text-muted"&gt;6 min ago&lt;/small&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="toast-body toast-dark"&gt;Hello, I'm a Software developer.&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false"&gt;
     &lt;div class="toast-header"&gt;
       &lt;i class="toast-icons toast-success" data-feather="bell"&gt;&lt;/i&gt;
       &lt;strong class="me-auto"&gt;Voxo Theme&lt;/strong&gt;
       &lt;small class="text-muted"&gt;3 sec ago&lt;/small&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="toast-body toast-dark"&gt;Hello, I'm a professional web-designer.&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h5>Translucent Toasts</h5>
                        <p class="f-m-light mt-1"> Use<code> hide </code>class to hide toast and <code>show </code>class to
                            visible toast and given directions.<code>[toast-*]</code> to change icons colors.</p>
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
                    <div class="card-body toast-rtl bg-dark">
                        <div class="toast-container">
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"
                                data-bs-delay="80000">
                                <div class="toast-header"><i class="toast-icons toast-info"
                                        data-feather="disc"></i><strong class="me-auto">Edmin Theme</strong><small
                                        class="text-muted d-sm-block d-none">11 mins
                                        ago</small><button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button></div>
                                <div class="toast-body toast-dark"> Hello, I'm a web-designer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"
                                data-bs-delay="80000">
                                <div class="toast-header"><i class="toast-icons toast-dark"
                                        data-feather="disc"></i><strong class="me-auto">Koho Theme</strong><small
                                        class="text-muted d-sm-block d-none">1 sec
                                        ago</small><button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button></div>
                                <div class="toast-body toast-dark"> Hello, I'm a full-stack developer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"
                                data-bs-delay="80000">
                                <div class="toast-header"><i class="toast-icons toast-secondary"
                                        data-feather="disc"></i><strong class="me-auto">Fastkart Theme</strong><small
                                        class="txt-danger d-sm-block d-none">just
                                        now</small><button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button></div>
                                <div class="toast-body toast-dark"> Hello, I'm a UX-designer.</div>
                            </div>
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"
                                data-bs-delay="80000">
                                <div class="toast-header"><i class="toast-icons toast-success"
                                        data-feather="disc"></i><strong class="me-auto">Oslo Theme</strong><small
                                        class="text-muted d-sm-block d-none">44 min
                                        ago</small><button class="btn-close" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button></div>
                                <div class="toast-body toast-dark"> Hello, I'm a penetration-tester.</div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#stacking-toast" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="stacking-toast"> &lt;div class="card-body toast-rtl bg-dark"&gt;
 &lt;div class="toast-container"&gt;
   &lt;div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="80000"&gt;
     &lt;div class="toast-header"&gt;
       &lt;i class="toast-icons toast-info" data-feather="disc"&gt;&lt;/i&gt;
       &lt;strong class="me-auto"&gt;Edmin Theme&lt;/strong&gt;
       &lt;small class="text-muted d-sm-block d-none"&gt;11 mins ago&lt;/small&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="toast-body toast-dark"&gt; Hello, I'm a web-designer.&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="80000"&gt;
     &lt;div class="toast-header"&gt;
       &lt;i class="toast-icons toast-dark" data-feather="disc"&gt;&lt;/i&gt;
       &lt;strong class="me-auto"&gt;Koho Theme&lt;/strong&gt;
       &lt;small class="text-muted d-sm-block d-none"&gt;1 sec ago&lt;/small&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="toast-body toast-dark"&gt; Hello, I'm a full-stack developer.&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="80000"&gt;
     &lt;div class="toast-header"&gt;
       &lt;i class="toast-icons toast-secondary" data-feather="disc"&gt;&lt;/i&gt;
       &lt;strong class="me-auto"&gt;Fastkart Theme&lt;/strong&gt;
       &lt;small class="txt-danger d-sm-block d-none"&gt;just now&lt;/small&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="toast-body toast-dark"&gt; Hello, I'm a UX-designer.&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="80000"&gt;
     &lt;div class="toast-header"&gt;
       &lt;i class="toast-icons toast-success" data-feather="disc"&gt;&lt;/i&gt;
       &lt;strong class="me-auto"&gt;Oslo Theme&lt;/strong&gt;
       &lt;small class="text-muted d-sm-block d-none"&gt;44 min ago&lt;/small&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="toast-body toast-dark"&gt; Hello, I'm a penetration-tester.&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Default Toast</h5>
                        <p class="f-m-light mt-1"> Use<code> hide </code>class to hide toast and <code>show </code>class to
                            visible toast.</p>
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
                    <div class="card-body toast-rtl">
                        <div class="toast default-show-toast toast show" role="alert" aria-live="assertive"
                            aria-atomic="true" data-bs-autohide="false">
                            <div class="toast-header toast-img"><img class="rounded me-2"
                                    src="{{ asset('assets/images/dashboard-5/profile.png') }}" alt="profile"><strong
                                    class="me-auto">Oliva
                                    Theme</strong><small class="d-sm-block d-none">10 min ago</small><button
                                    class="btn-close" type="button" data-bs-dismiss="toast"
                                    aria-label="Close"></button></div>
                            <div class="toast-body toast-dark"><strong class="txt-success">Well done!</strong> You
                                successfully
                                read this important message.</div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#default-toast-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="default-toast-copy"> &lt;div class="card-body toast-rtl"&gt;
 &lt;div class="toast default-show-toast toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false"&gt;
   &lt;div class="toast-header toast-img"&gt;
     &lt;img class="rounded me-2" src="{{ asset('assets/images/dashboard-5/profile.png') }}" alt="profile"&gt;
     &lt;strong class="me-auto"&gt;Oliva Theme&lt;/strong&gt;&lt;small class="d-sm-block d-none"&gt;10 min ago&lt;/small&gt;
     &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
   &lt;/div&gt;
   &lt;div class="toast-body toast-dark"&gt;
     &lt;strong class="txt-success"&gt;Well done!&lt;/strong&gt; You successfully read this important message.
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Unique Toast</h5>
                        <p class="f-m-light mt-1"> Use <code>hide </code>class to hide toast and <code>show </code>class to
                            visible toast.</p>
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
                    <div class="card-body toast-rtl">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"
                            data-bs-autohide="false">
                            <div class="toast-header toast-img"><img class="rounded me-2"
                                    src="{{ asset('assets/images/dashboard-5/profile.png') }}" alt="profile"><strong
                                    class="me-auto">Poco
                                    Theme</strong><button class="btn-close" type="button" data-bs-dismiss="toast"
                                    aria-label="Close"></button></div>
                            <div class="toast-body toast-dark">
                                <h6 class="mb-2">Your account will be permanently deleted?</h6>
                                <p class="mb-0">Do you intend to continue?</p>
                                <div class="mt-2 pt-2 border-top d-flex gap-2"><button class="btn btn-dark btn-sm"
                                        type="button">I'm not sure</button><button class="btn btn-danger btn-sm"
                                        type="button" data-bs-dismiss="toast">Remove My Account</button></div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#unique-toast-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="unique-toast-copy"> &lt;div class="card-body toast-rtl"&gt;
 &lt;div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false"&gt;
   &lt;div class="toast-header toast-img"&gt;
     &lt;img class="rounded me-2" src="{{ asset('assets/images/dashboard-5/profile.png') }}" alt="profile"&gt;
     &lt;strong class="me-auto"&gt;Poco Theme&lt;/strong&gt;
     &lt;button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
   &lt;/div&gt;
   &lt;div class="toast-body toast-dark"&gt;
     &lt;h6 class="mb-2"&gt;Your account will be permanently deleted?&lt;/h6&gt;
     &lt;p class="mb-0"&gt;Do you intend to continue?&lt;/p&gt;
     &lt;div class="mt-2 pt-2 border-top d-flex gap-2"&gt;
       &lt;button class="btn btn-dark btn-sm" type="button"&gt;I'm not sure&lt;/button&gt;
       &lt;button class="btn btn-danger btn-sm" type="button" data-bs-dismiss="toast"&gt;Remove My Account&lt;/button&gt;
     &lt;/div&gt;
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
                        <h5>Toast Placement</h5>
                        <p class="f-m-light mt-1"> Use <code>hide </code>class to hide toast and <code>show </code>class to
                            visible toast and<code> form-select</code> to select any positions.</p>
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
                    <div class="card-body toast-rtl toast-dark">
                        <form>
                            <div class="mb-3"><select class="form-select mt-2" id="selectToastPlacement">
                                    <option value="" selected>Select a position...</option>
                                    <option value="top-0 start-0">Top left</option>
                                    <option value="top-0 start-50 translate-middle-x">Top center</option>
                                    <option value="top-0 end-0">Top right</option>
                                    <option value="top-50 start-0 translate-middle-y">Middle left</option>
                                    <option value="top-50 start-50 translate-middle">Middle center</option>
                                    <option value="top-50 end-0 translate-middle-y">Middle right</option>
                                    <option value="bottom-0 start-0">Bottom left</option>
                                    <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                                    <option value="bottom-0 end-0">Bottom right</option>
                                </select></div>
                        </form>
                        <div class="bg-light position-relative bd-example-toasts" aria-live="polite" aria-atomic="true"
                            data-bs-autohide="true">
                            <div class="toast-container p-3 position-absolute" id="toastPlacement">
                                <div class="toast toast-fade show">
                                    <div class="toast-header toast-img"><img class="rounded me-2"
                                            src="{{ asset('assets/images/dashboard-5/profile.png') }}"
                                            alt="profile"><strong class="me-auto">Zono
                                            Theme</strong><small class="d-sm-block d-none">25 min ago</small></div>
                                    <div class="toast-body toast-dark txt-dark">
                                        <p class="toast-content"><em class="txt-danger">Attackers</em> on malicious
                                            activity may trick
                                            you into doing something dangerous like installing software or revealing your
                                            personal
                                            information's.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#placement-toast-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="placement-toast-copy"> &lt;div class="card-body toast-rtl toast-dark"&gt;
 &lt;form&gt;
   &lt;div class="mb-3"&gt;
     &lt;select class="form-select mt-2" id="selectToastPlacement"&gt;
       &lt;option value="" selected&gt;Select a position...&lt;/option&gt;
       &lt;option value="top-0 start-0"&gt;Top left&lt;/option&gt;
       &lt;option value="top-0 start-50 translate-middle-x"&gt;Top center&lt;/option&gt;
       &lt;option value="top-0 end-0"&gt;Top right&lt;/option&gt;
       &lt;option value="top-50 start-0 translate-middle-y"&gt;Middle left&lt;/option&gt;
       &lt;option value="top-50 start-50 translate-middle"&gt;Middle center&lt;/option&gt;
       &lt;option value="top-50 end-0 translate-middle-y"&gt;Middle right&lt;/option&gt;
       &lt;option value="bottom-0 start-0"&gt;Bottom left&lt;/option&gt;
       &lt;option value="bottom-0 start-50 translate-middle-x"&gt;Bottom center&lt;/option&gt;
       &lt;option value="bottom-0 end-0"&gt;Bottom right&lt;/option&gt;
     &lt;/select&gt;
   &lt;/div&gt;
 &lt;/form&gt;
 &lt;div class="bg-light position-relative bd-example-toasts" aria-live="polite" aria-atomic="true" data-bs-autohide="true"&gt;
   &lt;div class="toast-container p-3 position-absolute" id="toastPlacement"&gt;
     &lt;div class="toast toast-fade show"&gt;
       &lt;div class="toast-header toast-img"&gt;
         &lt;img class="rounded me-2" src="{{ asset('assets/images/dashboard-5/profile.png') }}" alt="profile"&gt;
         &lt;strong class="me-auto"&gt;Zono Theme&lt;/strong&gt;
         &lt;small class="d-sm-block d-none"&gt;25 min ago&lt;/small&gt;
       &lt;/div&gt;
       &lt;div class="toast-body toast-dark txt-dark"&gt;
         &lt;p class="toast-content"&gt;
           &lt;em class="txt-danger"&gt;Attackers&lt;/em&gt;on malicious activity may trick you into doing something dangerous like installing software or revealing your personal information's.
         &lt;/p&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
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
    <script src="{{ asset('assets/js/notify/custom-notify.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
