@extends('layouts.simple.master')

@section('title', 'Sweet Alerts2')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Sweet Alerts</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">sweet Alert</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Position Top Start</h5>
                        <p class="f-m-light mt-1">Use <code> "position: top-start"</code> in javascript, you
                            set the alert's position.</p>
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
                    <div class="card-body"><button class="btn btn-secondary sweet-16" type="button"
                            onclick="_gaq.push(['_trackEvent', 'sweet-16']);">Click it! </button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#position-top-start-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="position-top-start-copy">&lt;button class="btn btn-secondary sweet-16" type="button" onclick="_gaq.push(['_trackEvent', 'sweet-16']);"&gt;Click it! &lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Position Top End</h5>
                        <p class="f-m-light mt-1">Use <code> "position: top-end"</code> in javascript, you
                            set the alert's position.</p>
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
                    <div class="card-body"><button class="btn btn-info sweet-15" type="button"
                            onclick="_gaq.push(['_trackEvent', 'sweet-15']);">Click it! </button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#position-top-end-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="position-top-end-copy">&lt;button class="btn btn-info sweet-15" type="button" onclick="_gaq.push(['_trackEvent', 'sweet-15']);"&gt;Click it! &lt;/button&gt; </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Position Bottom Start</h5>
                        <p class="f-m-light mt-1">Use <code> "position: bottom-start"</code> in javascript,
                            you set the alert's position.</p>
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
                    <div class="card-body"><button class="btn btn-warning sweet-17" type="button"
                            onclick="_gaq.push(['_trackEvent', 'sweet-17']);">Click it! </button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#position-bottom-start-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="position-bottom-start-copy">&lt;button class="btn btn-warning sweet-17" type="button" onclick="_gaq.push(['_trackEvent', 'sweet-17']);"&gt;Click it! &lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Position Bottom End</h5>
                        <p class="f-m-light mt-1">Use <code> "position: bottom-end"</code> in javascript,
                            you set the alert's position.</p>
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
                    <div class="card-body"><button class="btn btn-primary sweet-18" type="button"
                            onclick="_gaq.push(['_trackEvent', 'sweet-18']);">Click it! </button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#position-bottom-end-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="position-bottom-end-copy">&lt;button class="btn btn-primary sweet-18" type="button" onclick="_gaq.push(['_trackEvent', 'sweet-18']);"&gt;Click it! &lt;/button&gt; </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Basic Example</h5>
                        <p class="f-m-light mt-1">Use <code>sweet-1 </code>class to create a basic alert
                            display.</p>
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
                    <div class="card-body"><button class="btn btn-primary sweet-1" type="button"
                            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Click
                            it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#basic-alert-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="basic-alert-copy">&lt;button class="btn btn-primary sweet-1" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);"&gt;Click it!&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Title with a Text Under</h5>
                        <p class="f-m-light mt-1">Use <code>sweet-2 </code>class to create a title with text
                            under alert display.</p>
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
                    <div class="card-body"><button class="btn btn-secondary sweet-2" type="button"
                            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">Click
                            it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#text-under-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="text-under-copy">&lt;button class="btn btn-secondary sweet-2" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);"&gt;Click it!&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Dismiss Alert </h5>
                        <p class="f-m-light mt-1">Use <code>sweet-3 </code>class to create a dismiss alert
                            display.</p>
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
                    <div class="card-body"><button class="btn btn-info sweet-3" type="button"
                            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-3']);">Click
                            it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#dismiss-alert-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="dismiss-alert-copy">&lt;button class="btn btn-info sweet-3" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-3']);"&gt;Click it!&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Rich Html Alert</h5>
                        <p class="f-m-light mt-1">Use <code>sweet-4 </code>class to create a rich html alert
                            display.</p>
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
                    <div class="card-body"><button class="btn btn-warning sweet-4" type="button"
                            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-4']);">Click
                            it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#rich-html-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="rich-html-copy">&lt;button class="btn btn-warning sweet-4" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-4']);"&gt;Click it!&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Confirmation Alert</h5>
                        <p class="f-m-light mt-1">Use <code>sweet-5 </code>class to create a confirmation
                            alert display.</p>
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
                    <div class="card-body"><button class="btn btn-warning sweet-5" type="button"
                            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Click
                            it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#confirmation-alert-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="confirmation-alert-copy">&lt;button class="btn btn-warning sweet-5" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);"&gt;Click it!&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Animated Alert</h5>
                        <p class="f-m-light mt-1">Use <code>sweet-6 </code>class to create a animated alert
                            display.</p>
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
                    <div class="card-body"><button class="btn btn-primary sweet-6" type="button"
                            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-6']);">Click
                            it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#animated-alert-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="animated-alert-copy">&lt;button class="btn btn-primary sweet-6" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-6']);"&gt;Click it!&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Confirmation with Triggers</h5>
                        <p class="f-m-light mt-1">Use <code>sweet-7 </code>class to create a confirmation
                            with triggers alert display.
                            .</p>
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
                    <div class="card-body"><button class="btn btn-secondary sweet-7" type="button"
                            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-7']);">Click
                            it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#confirm-trigger-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="confirm-trigger-copy">&lt;button class="btn btn-secondary sweet-7" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-7']);"&gt;Click it!&lt;/button&gt; </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Image-rich Message</h5>
                        <p class="f-m-light mt-1">Use <code>sweet-8 </code>class to create a image rich
                            message alert display.</p>
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
                    <div class="card-body"><button class="btn btn-info sweet-8" type="button"
                            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-8']);">Click
                            it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#image-rich-message-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="image-rich-message-copy">&lt;button class="btn btn-info sweet-8" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-8']);"&gt;Click it!&lt;/button&gt; </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Auto Close Timer</h5>
                        <p class="f-m-light mt-1">Use <code>sweet-9 </code>class to create a auto close
                            timer alert display.</p>
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
                    <div class="card-body"><button class="btn btn-danger sweet-9" type="button"
                            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-9']);">Click
                            it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#auto-close-timer-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="auto-close-timer-copy">&lt;button class="btn btn-danger sweet-9" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-9']);"&gt;Click it!&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>AJAX Request Alert</h5>
                        <p class="f-m-light mt-1">Use <code>sweet-10 </code>class to create a ajax request
                            alert display.</p>
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
                    <div class="card-body"><button class="btn btn-warning sweet-10" type="button"
                            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-10']);">Click
                            it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#ajax-req-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="ajax-req-copy">&lt;button class="btn btn-warning sweet-10" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-10']);"&gt;Click it!&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Confirmation with Approvals</h5>
                        <p class="f-m-light mt-1">Use <code>sweet-11 </code>class to create a confirmation
                            with approvals alert display.</p>
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
                    <div class="card-body"><button class="btn btn-primary sweet-11" type="button"
                            onclick="_gaq.push(['_trackEvent', 'sweet-11']);">Click it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#confirmation-approval-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="confirmation-approval-copy">&lt;button class="btn btn-primary sweet-11" type="button" onclick="_gaq.push(['_trackEvent', 'sweet-11']);"&gt;Click it!&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Comprehensive RTL Support</h5>
                        <p class="f-m-light mt-1">Use <code>sweet-12 </code>class to create a comprehensive
                            RTL support alert display.</p>
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
                    <div class="card-body"><button class="btn btn-secondary sweet-12" type="button"
                            onclick="_gaq.push(['_trackEvent', 'sweet-12']);">Click it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#rtl-alert-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="rtl-alert-copy">&lt;button class="btn btn-secondary sweet-12" type="button" onclick="_gaq.push(['_trackEvent', 'sweet-12']);"&gt;Click it!&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Password Generator Alert</h5>
                        <p class="f-m-light mt-1">Use <code>sweet-13 </code>class to create a password
                            generator alert display.</p>
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
                    <div class="card-body"><button class="btn btn-primary sweet-13" type="button"
                            onclick="_gaq.push(['_trackEvent', 'sweet-13']);">Click it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#pwd-generate-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="pwd-generate-copy">&lt;button class="btn btn-primary sweet-13" type="button" onclick="_gaq.push(['_trackEvent', 'sweet-13']);"&gt;Click it!&lt;/button&gt; </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Date Alert</h5>
                        <p class="f-m-light mt-1">Use <code>sweet-14 </code>class to create a date alert
                            display.</p>
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
                    <div class="card-body"><button class="btn btn-danger sweet-14" type="button"
                            onclick="_gaq.push(['_trackEvent', 'sweet-14']);">Click it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#date-alert-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="date-alert-copy">&lt;button class="btn btn-danger sweet-14" type="button" onclick="_gaq.push(['_trackEvent', 'sweet-14']);"&gt;Click it!&lt;/button&gt; </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Custom Positioned Dialog</h5>
                        <p class="f-m-light mt-1">Use <code>sweet-19 </code>class to create a custom
                            positioned dialog alert display.</p>
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
                    <div class="card-body"><button class="btn btn-warning sweet-19" type="button"
                            onclick="_gaq.push(['_trackEvent', 'sweet-19']);">Click it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#position-dialog-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="position-dialog-copy">&lt;button class="btn btn-warning sweet-19" type="button" onclick="_gaq.push(['_trackEvent', 'sweet-19']);"&gt;Click it!&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 box-col-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Registration Form</h5>
                        <p class="f-m-light mt-1">Use <code>sweet-20 </code>class to create a input form
                            alert display.</p>
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
                    <div class="card-body"><button class="btn btn-primary sweet-20" type="button"
                            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-20']);">Click
                            it!</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#registration-form-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="registration-form-copy">&lt;button class="btn btn-primary sweet-20" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-20']);"&gt;Click it!&lt;/button&gt;</code></pre>
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
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/app.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
