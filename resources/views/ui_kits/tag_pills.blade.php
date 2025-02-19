@extends('layouts.simple.master')

@section('title', 'Tag & Pills')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Tag & Pills</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item"> Ui Kits</li>
                        <li class="breadcrumb-item active">Tag & Pills</li>
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
                        <h5>Badges Contextual Variations</h5>
                        <p class="f-m-light mt-1"> Use<code> badge </code>class to make more badges.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"> </i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge-spacing"><span class="badge badge-primary">Primary</span><span
                                class="badge badge-secondary">Secondary</span><span
                                class="badge badge-success">Success</span><span class="badge badge-info">Info</span><span
                                class="badge badge-warning">Warning</span><span
                                class="badge badge-danger">Danger</span><span
                                class="badge badge-light txt-dark">Light</span><span class="badge badge-dark">Dark</span>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#badge-c-variations" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="badge-c-variations">&lt;div class="badge-spacing"&gt;
 &lt;span class="badge badge-primary"&gt;Primary&lt;/span&gt;
 &lt;span class="badge badge-secondary"&gt;Secondary&lt;/span&gt;
 &lt;span class="badge badge-success"&gt;Success&lt;/span&gt;
 &lt;span class="badge badge-info"&gt;Info&lt;/span&gt;
 &lt;span class="badge badge-warning"&gt;Warning&lt;/span&gt;
 &lt;span class="badge badge-danger"&gt;Danger&lt;/span&gt;
 &lt;span class="badge badge-light txt-dark"&gt;Light&lt;/span&gt;
 &lt;span class="badge badge-dark"&gt;Dark&lt;/span&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Badges Outline Contextual Variations</h5>
                        <p class="f-m-light mt-1"> Use<code> badge </code>class to make more badges.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"> </i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="badge-spacing"><span class="badge badge-b-primary txt-primary">Primary</span><span
                                class="badge badge-b-secondary txt-secondary">Secondary</span><span
                                class="badge badge-b-success txt-success">Success</span><span
                                class="badge badge-b-info txt-info">Info</span><span
                                class="badge badge-b-warning txt-warning">Warning</span><span
                                class="badge badge-b-danger txt-danger">Danger</span><span
                                class="badge badge-b-light txt-dark">Light</span><span
                                class="badge badge-b-dark txt-dark">Dark</span></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#badge-outline-variations" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="badge-outline-variations">&lt;div class="badge-spacing"&gt;
 &lt;span class="badge badge-b-primary txt-primary"&gt;Primary&lt;/span&gt;
 &lt;span class="badge badge-b-secondary txt-secondary"&gt;Secondary&lt;/span&gt;
 &lt;span class="badge badge-b-success txt-success"&gt;Success&lt;/span&gt;
 &lt;span class="badge badge-b-info txt-info"&gt;Info&lt;/span&gt;
 &lt;span class="badge badge-b-warning txt-warning"&gt;Warning&lt;/span&gt;
 &lt;span class="badge badge-b-danger txt-danger"&gt;Danger&lt;/span&gt;
 &lt;span class="badge badge-b-light txt-dark"&gt;Light&lt;/span&gt;
 &lt;span class="badge badge-b-dark txt-dark"&gt;Dark&lt;/span&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Pill Contextual Variations</h5>
                        <p class="f-m-light mt-1"> Use<code> rounded-pill</code>class to make badges with background
                            (badge-*)
                            more rounded with a larger <code>border-radius</code>.</p>
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
                        <div class="badge-spacing"><span class="badge rounded-pill badge-primary">Primary</span><span
                                class="badge rounded-pill badge-secondary">Secondary</span><span
                                class="badge rounded-pill badge-success">Success</span><span
                                class="badge rounded-pill badge-info">Info</span><span
                                class="badge rounded-pill badge-warning">Warning</span><span
                                class="badge rounded-pill badge-danger">Danger</span><span
                                class="badge rounded-pill badge-light txt-dark">Light</span><span
                                class="badge rounded-pill badge-dark">Dark</span></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#pills-variations" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="pills-variations">&lt;div class="badge-spacing"&gt;
 &lt;span class="badge rounded-pill badge-primary"&gt;Primary&lt;/span&gt;
 &lt;span class="badge rounded-pill badge-secondary"&gt;Secondary&lt;/span&gt;
 &lt;span class="badge rounded-pill badge-success"&gt;Success&lt;/span&gt;
 &lt;span class="badge rounded-pill badge-info"&gt;Info&lt;/span&gt;
 &lt;span class="badge rounded-pill badge-warning"&gt;Warning&lt;/span&gt;
 &lt;span class="badge rounded-pill badge-danger"&gt;Danger&lt;/span&gt;
 &lt;span class="badge rounded-pill badge-light txt-dark"&gt;Light&lt;/span&gt;
 &lt;span class="badge rounded-pill badge-dark"&gt;Dark&lt;/span&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Pill Outline Variations</h5>
                        <p class="f-m-light mt-1"> Use<code> rounded-pill</code> class to make badges with background
                            (badge-b-*) more rounded with a larger <code>border-radius</code>.</p>
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
                        <div class="badge-spacing"><span
                                class="badge rounded-pill txt-primary badge-b-primary">Primary</span><span
                                class="badge rounded-pill txt-secondary badge-b-secondary">Secondary</span><span
                                class="badge rounded-pill txt-success badge-b-success">Success</span><span
                                class="badge rounded-pill txt-info badge-b-info">Info</span><span
                                class="badge rounded-pill txt-warning badge-b-warning">Warning</span><span
                                class="badge rounded-pill txt-danger badge-b-danger">Danger</span><span
                                class="badge rounded-pill txt-light badge-b-light txt-dark">Light</span><span
                                class="badge rounded-pill txt-dark badge-b-dark">Dark</span></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#pills-outline-variations" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="pills-outline-variations">&lt;div class="badge-spacing"&gt;
 &lt;span class="badge rounded-pill txt-primary badge-b-primary"&gt;Primary&lt;/span&gt;
 &lt;span class="badge rounded-pill txt-secondary badge-b-secondary"&gt;Secondary&lt;/span&gt;
 &lt;span class="badge rounded-pill txt-success badge-b-success"&gt;Success&lt;/span&gt;
 &lt;span class="badge rounded-pill txt-info badge-b-info"&gt;Info&lt;/span&gt;
 &lt;span class="badge rounded-pill txt-warning badge-b-warning"&gt;Warning&lt;/span&gt;
 &lt;span class="badge rounded-pill txt-danger badge-b-danger"&gt;Danger&lt;/span&gt;
 &lt;span class="badge rounded-pill txt-light badge-b-light txt-dark"&gt;Light&lt;/span&gt;
 &lt;span class="badge rounded-pill txt-dark badge-b-dark"&gt;Dark&lt;/span&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Number of Badges</h5>
                        <p class="f-m-light mt-1"> Use<code> badge</code> class to make square badges with numbers.</p>
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
                        <div class="badge-spacing"><a class="badge badge-primary" href="#">1</a><a
                                class="badge badge-secondary" href="#">2</a><a class="badge badge-success"
                                href="#">3</a><a class="badge badge-info" href="#">4</a><a
                                class="badge badge-warning" href="#">5</a><a class="badge badge-danger"
                                href="#">6</a><a class="badge badge-light txt-dark" href="#">7</a><a
                                class="badge badge-dark" href="#">8</a></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#number-of-badge" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="number-of-badge">&lt;div class="badge-spacing"&gt;
 &lt;a class="badge badge-primary" href="#"&gt;1&lt;/a&gt;
 &lt;a class="badge badge-secondary" href="#"&gt;2&lt;/a&gt;
 &lt;a class="badge badge-success" href="#"&gt;3&lt;/a&gt;
 &lt;a class="badge badge-info" href="#"&gt;4&lt;/a&gt;
 &lt;a class="badge badge-warning" href="#"&gt;5&lt;/a&gt;
 &lt;a class="badge badge-danger" href="#"&gt;6&lt;/a&gt;
 &lt;a class="badge badge-light txt-dark" href="#"&gt;7&lt;/a&gt;
 &lt;a class="badge badge-dark" href="#"&gt;8&lt;/a&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Number of Pill Badges</h5>
                        <p class="f-m-light mt-1"> Use<code> rounded-circle</code> class to make rounded badges with
                            numbers.
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
                    <div class="card-body">
                        <div class="badge-spacing"><span
                                class="badge rounded-circle badge-p-space badge-primary">1</span><span
                                class="badge rounded-circle badge-p-space badge-secondary">2</span><span
                                class="badge rounded-circle badge-p-space badge-success">3</span><span
                                class="badge rounded-circle badge-p-space badge-info">4</span><span
                                class="badge rounded-circle badge-p-space badge-warning">5</span><span
                                class="badge rounded-circle badge-p-space badge-danger">6</span><span
                                class="badge rounded-circle badge-p-space badge-light txt-dark">7</span><span
                                class="badge rounded-circle badge-p-space badge-dark">8</span></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#number-of-pills" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="number-of-pills">&lt;div class="badge-spacing"&gt;
 &lt;span class="badge rounded-circle badge-p-space badge-primary"&gt;1&lt;/span&gt;
 &lt;span class="badge rounded-circle badge-p-space badge-secondary"&gt;2&lt;/span&gt;
 &lt;span class="badge rounded-circle badge-p-space badge-success"&gt;3&lt;/span&gt;
 &lt;span class="badge rounded-circle badge-p-space badge-info"&gt;4&lt;/span&gt;
 &lt;span class="badge rounded-circle badge-p-space badge-warning"&gt;5&lt;/span&gt;
 &lt;span class="badge rounded-circle badge-p-space badge-danger"&gt;6&lt;/span&gt;
 &lt;span class="badge rounded-circle badge-p-space badge-light txt-dark"&gt;7&lt;/span&gt;
 &lt;span class="badge rounded-circle badge-p-space badge-dark"&gt;8&lt;/span&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Badge Tag with Icons</h5>
                        <p class="f-m-light mt-1"> Use<code> badge </code> class to make square badges with icons.</p>
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
                        <div class="badge-spacing"><a class="badge b-ln-height badge-primary" href="#"><i
                                    data-feather="dollar-sign"></i></a><a class="badge b-ln-height badge-secondary"
                                href="#"><i data-feather="headphones"></i></a><a
                                class="badge b-ln-height badge-success" href="#"><i data-feather="link"></i></a><a
                                class="badge b-ln-height badge-info" href="#"><i data-feather="github"></i></a><a
                                class="badge b-ln-height badge-warning" href="#"><i data-feather="award"></i></a><a
                                class="badge b-ln-height badge-danger" href="#"><i
                                    data-feather="activity"></i></a><a class="badge b-ln-height badge-light txt-dark"
                                href="#"><i data-feather="heart"></i></a><a class="badge badge-dark"
                                href="#"><i data-feather="mail"></i></a></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#badge-icons" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="badge-icons">&lt;div class="badge-spacing"&gt;
 &lt;a class="badge b-ln-height badge-primary" href="#"&gt;
   &lt;i data-feather="dollar-sign"&gt;&lt;/i&gt;
 &lt;/a&gt;
 &lt;a class="badge b-ln-height badge-secondary" href="#"&gt;
   &lt;i data-feather="headphones"&gt;&lt;/i&gt;
 &lt;/a&gt;
 &lt;a class="badge b-ln-height badge-success" href="#"&gt;
   &lt;i data-feather="link"&gt;&lt;/i&gt;
 &lt;/a&gt;
 &lt;a class="badge b-ln-height badge-info" href="#"&gt;
   &lt;i data-feather="github"&gt;&lt;/i&gt;
 &lt;/a&gt;
 &lt;a class="badge b-ln-height badge-warning" href="#"&gt;
   &lt;i data-feather="award"&gt;&lt;/i&gt;
 &lt;/a&gt;
 &lt;a class="badge b-ln-height badge-danger" href="#"&gt;
   &lt;i data-feather="activity"&gt;&lt;/i&gt;
 &lt;/a&gt;
 &lt;a class="badge b-ln-height badge-light txt-dark" href="#"&gt;
   &lt;i data-feather="heart"&gt;&lt;/i&gt;
 &lt;/a&gt;
 &lt;a class="badge badge-dark" href="#"&gt;
   &lt;i data-feather="mail"&gt;&lt;/i&gt;
 &lt;/a&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Rounded Pills with Icons</h5>
                        <p class="f-m-light mt-1"> Use<code> rounded-circle </code> class to make rounded badges with
                            icons.
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
                    <div class="card-body">
                        <div class="badge-spacing"><a class="badge rounded-circle p-2 badge-primary" href="#"><i
                                    data-feather="dollar-sign"></i></a><a class="badge rounded-circle p-2 badge-secondary"
                                href="#"><i data-feather="headphones"></i></a><a
                                class="badge rounded-circle p-2 badge-success" href="#"><i
                                    data-feather="link"></i></a><a class="badge rounded-circle p-2 badge-info"
                                href="#"><i data-feather="github"></i></a><a
                                class="badge rounded-circle p-2 badge-warning" href="#"><i
                                    data-feather="award"></i></a><a class="badge rounded-circle p-2 badge-danger"
                                href="#"><i data-feather="activity"></i></a><a
                                class="badge rounded-circle p-2 badge-light txt-dark" href="#"><i
                                    data-feather="heart"></i></a><a class="badge rounded-circle p-2 badge-dark"
                                href="#"><i data-feather="mail"></i></a></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#rounded-pills-icons" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="rounded-pills-icons">&lt;div class="badge-spacing"&gt;
 &lt;a class="badge rounded-circle p-2 badge-primary" href="#"&gt;
   &lt;i data-feather="dollar-sign"&gt;&lt;/i&gt;
 &lt;/a&gt;
 &lt;a class="badge rounded-circle p-2 badge-secondary" href="#"&gt;
   &lt;i data-feather="headphones"&gt;&lt;/i&gt;
 &lt;/a&gt;
 &lt;a class="badge rounded-circle p-2 badge-success" href="#"&gt;
   &lt;i data-feather="link"&gt;&lt;/i&gt;
 &lt;/a&gt;
 &lt;a class="badge rounded-circle p-2 badge-info" href="#"&gt;
   &lt;i data-feather="github"&gt;&lt;/i&gt;
 &lt;/a&gt;
 &lt;a class="badge rounded-circle p-2 badge-warning" href="#"&gt;
   &lt;i data-feather="award"&gt;&lt;/i&gt;
 &lt;/a&gt;
 &lt;a class="badge rounded-circle p-2 badge-danger" href="#"&gt;
   &lt;i data-feather="activity"&gt;&lt;/i&gt;
 &lt;/a&gt;
 &lt;a class="badge rounded-circle p-2 badge-light txt-dark" href="#"&gt;
   &lt;i data-feather="heart"&gt;&lt;/i&gt;
 &lt;/a&gt;
 &lt;a class="badge rounded-circle p-2 badge-dark" href="#"&gt;
   &lt;i data-feather="mail"&gt;&lt;/i&gt;
 &lt;/a&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Badge Headings</h5>
                        <p class="f-m-light mt-1"> All html headings, <code>&lt;h1&gt;</code> through
                            <code>&lt;h6&gt;</code>
                            , are available in <code>badge </code>tags.</p>
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
                    <div class="card-body badge-heading">
                        <h1>Example heading <span class="badge text-bg-secondary">New</span></h1>
                        <h2>Example heading <span class="badge text-bg-secondary">New</span></h2>
                        <h3>Example heading <span class="badge text-bg-secondary">New</span></h3>
                        <h4>Example heading <span class="badge text-bg-secondary">New</span></h4>
                        <h5>Example heading <span class="badge text-bg-secondary">New</span></h5>
                        <h6>Example heading <span class="badge text-bg-secondary">New</span></h6>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#badge-headings" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="badge-headings">&lt;div class="card-body badge-heading"&gt;
 &lt;h1&gt;Example heading
   &lt;span class="badge text-bg-secondary"&gt;New&lt;/span&gt;
 &lt;/h1&gt;
 &lt;h2&gt;Example heading
   &lt;span class="badge text-bg-secondary"&gt;New&lt;/span&gt;
 &lt;/h2&gt;
 &lt;h3&gt;Example heading
   &lt;span class="badge text-bg-secondary"&gt;New&lt;/span&gt;
 &lt;/h3&gt;
 &lt;h4&gt;Example heading
   &lt;span class="badge text-bg-secondary"&gt;New&lt;/span&gt;
 &lt;/h4&gt;
 &lt;h5&gt;Example heading
   &lt;span class="badge text-bg-secondary"&gt;New&lt;/span&gt;
 &lt;/h5&gt;
 &lt;h6&gt;Example heading
   &lt;span class="badge text-bg-secondary"&gt;New&lt;/span&gt;
 &lt;/h6&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Positioned Badges</h5>
                                <p class="f-m-light mt-1"> Use utilities to modify a <code>badge </code>and position it in
                                    the
                                    corner of a link or button.</p>
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
                                <div class="badge-flex"><button class="btn btn-primary position-relative"
                                        type="button">Inbox<span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99+</span></button><button
                                        class="btn btn-primary position-relative" type="button">Inbox<span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99+</span></button><button
                                        class="btn btn-info position-relative badge-square" type="button"><i
                                            class="fa-brands fa-x-twitter"></i><span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">8</span></button><button
                                        class="btn btn-primary position-relative" type="button">Profile<span
                                            class="position-absolute top-0 start-100 translate-middle bg-danger border border-light rounded-circle badge-p-5"><span
                                                class="visually-hidden">New alerts</span></span></button><button
                                        class="btn btn-info position-relative badge-square" type="button"><i
                                            class="fa-brands fa-linkedin-in"></i><span
                                            class="position-absolute top-0 start-100 translate-middle badge-p-5 bg-danger border border-light rounded-circle"><span
                                                class="visually-hidden">New alerts</span></span></button><button
                                        class="btn btn-success position-relative badge-square" type="button"><i
                                            class="fa-solid fa-comments"></i><span
                                            class="position-absolute top-0 start-100 translate-middle badge-p-5 bg-danger border border-light rounded-circle"><span
                                                class="visually-hidden">New alerts</span></span></button><button
                                        class="btn btn-info position-relative badge-square" type="button"><i
                                            class="fa-brands fa-x-twitter"></i><span
                                            class="position-absolute top-0 start-100 translate-middle badge-p-5 bg-danger border border-light rounded-circle"><span
                                                class="visually-hidden">New alerts</span></span></button></div>
                                <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                        data-clipboard-target="#position-badge" title="Copy"><i
                                            class="icofont icofont-copy-alt"></i></button>
                                    <pre class="custom-scrollbar"><code class="language-html" id="position-badge">&lt;div class="badge-flex"&gt;
 &lt;button class="btn btn-primary position-relative" type="button"&gt;Inbox
   &lt;span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"&gt;99+&lt;/span&gt;
 &lt;/button&gt;
 &lt;button class="btn btn-primary position-relative" type="button"&gt;Inbox
   &lt;span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"&gt;99+&lt;/span&gt;
 &lt;/button&gt;
 &lt;button class="btn btn-info position-relative badge-square" type="button"&gt;
   &lt;i class="fa-brands fa-twitter"&gt;&lt;/i&gt;
   &lt;span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"&gt;8&lt;/span&gt;
 &lt;/button&gt;
 &lt;button class="btn btn-primary position-relative" type="button"&gt;Profile
   &lt;span class="position-absolute top-0 start-100 translate-middle bg-danger border border-light rounded-circle badge-p-5"&gt;
     &lt;span class="visually-hidden"&gt;New alerts&lt;/span&gt;
   &lt;/span&gt;
 &lt;/button&gt;
 &lt;button class="btn btn-info position-relative badge-square" type="button"&gt;
   &lt;i class="fa-brands fa-linkedin-in"&gt;&lt;/i&gt;
   &lt;span class="position-absolute top-0 start-100 translate-middle badge-p-5 bg-danger border border-light rounded-circle"&gt;
     &lt;span class="visually-hidden"&gt;New alerts&lt;/span&gt;
   &lt;/span&gt;
 &lt;/button&gt;
 &lt;button class="btn btn-success position-relative badge-square" type="button"&gt;
   &lt;i class="fa-solid fa-comments"&gt;&lt;/i&gt;
   &lt;span class="position-absolute top-0 start-100 translate-middle badge-p-5 bg-danger border border-light rounded-circle"&gt;
     &lt;span class="visually-hidden"&gt;New alerts&lt;/span&gt;
   &lt;/span&gt;
 &lt;/button&gt;
 &lt;button class="btn btn-info position-relative badge-square" type="button"&gt;
   &lt;i class="fa-brands fa-twitter"&gt;&lt;/i&gt;
   &lt;span class="position-absolute top-0 start-100 translate-middle badge-p-5 bg-danger border border-light rounded-circle"&gt;
     &lt;span class="visually-hidden"&gt;New alerts&lt;/span&gt;
   &lt;/span&gt;
 &lt;/button&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Button Badges</h5>
                                <p class="f-m-light mt-1"> <code> badge </code> can be used as part of links or buttons to
                                    provide
                                    a counter.</p>
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
                                <div class="badge-flex"><button class="btn btn-primary">Notifications <span
                                            class="badge text-bg-danger ms-2">4</span></button><button
                                        class="btn button-light-primary">Sale<span
                                            class="badge text-bg-danger rounded-pill ms-2">9</span></button><button
                                        class="btn border-dashed-primary">Instagram <span
                                            class="badge text-bg-danger ms-2">6</span></button><button
                                        class="btn btn-pill button-light-info txt-info">LinkedIn <span
                                            class="badge text-bg-info rounded-pill ms-2 txt-light">3</span></button></div>
                                <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                        data-clipboard-target="#button-badge" title="Copy"><i
                                            class="icofont icofont-copy-alt"></i></button>
                                    <pre class="custom-scrollbar"><code class="language-html" id="button-badge">&lt;div class="badge-flex"&gt;
 &lt;button class="btn btn-primary"&gt;Notifications
   &lt;span class="badge text-bg-danger ms-2"&gt;4&lt;/span&gt;
 &lt;/button&gt;
 &lt;button class="btn button-light-primary"&gt;Sale
   &lt;span class="badge text-bg-danger rounded-pill ms-2"&gt;9&lt;/span&gt;
 &lt;/button&gt;
 &lt;button class="btn border-dashed-primary"&gt;Instagram
   &lt;span class="badge text-bg-danger ms-2"&gt;6&lt;/span&gt;
 &lt;/button&gt;
 &lt;button class="btn btn-pill button-light-info txt-info"&gt;LinkedIn
   &lt;span class="badge text-bg-info rounded-pill ms-2 txt-light"&gt;3&lt;/span&gt;
 &lt;/button&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Image Badges</h5>
                        <p class="f-m-light mt-1"> Use<code> image-badges </code>class to set image sizes. </p>
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
                        <div class="badge-spacing image-badges"><span
                                class="badge common-align txt-primary rounded-pill badge-l-primary rounded-pill border border-primary"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/dashboard-9/user/5.png') }}"
                                    alt="user">Primary
                            </span><span
                                class="badge common-align txt-secondary rounded-pill badge-l-secondary rounded-pill border border-secondary"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                    alt="user">Secondary
                            </span><span
                                class="badge common-align txt-success rounded-pill badge-l-success rounded-pill border border-success"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/dashboard-9/user/3.png') }}"
                                    alt="user">Success
                            </span><span
                                class="badge common-align txt-danger rounded-pill badge-l-danger rounded-pill border border-danger"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/dashboard-9/user/4.png') }}"
                                    alt="user">Danger</span><span
                                class="badge common-align txt-warning rounded-pill badge-l-warning rounded-pill border border-warning"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                    alt="user">Warning</span><span
                                class="badge common-align txt-info rounded-pill badge-l-info rounded-pill border border-info"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                    alt="user">Info</span><span
                                class="badge common-align txt-light rounded-pill badge-l-light rounded-pill border border-light"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/10.jpg') }}"
                                    alt="user">Light</span><span
                                class="badge common-align txt-dark rounded-pill badge-l-dark rounded-pill border border-dark"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/7.jpg') }}"
                                    alt="user">Dark</span>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#image-badges" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="image-badges">&lt;div class="badge-spacing image-badges"&gt;
 &lt;span class="badge common-align txt-primary rounded-pill badge-l-primary rounded-pill border border-primary"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/dashboard-9/user/5.png') }}" alt="user"&gt;Primary
 &lt;/span&gt;
 &lt;span class="badge common-align txt-secondary rounded-pill badge-l-secondary rounded-pill border border-secondary"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/dashboard-9/user/2.png') }}" alt="user"&gt;Secondary
 &lt;/span&gt;
 &lt;span class="badge common-align txt-success rounded-pill badge-l-success rounded-pill border border-success"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/dashboard-9/user/3.png') }}" alt="user"&gt;Success
 &lt;/span&gt;
 &lt;span class="badge common-align txt-danger rounded-pill badge-l-danger rounded-pill border border-danger"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/dashboard-9/user/4.png') }}" alt="user"&gt;Danger
 &lt;/span&gt;
 &lt;span class="badge common-align txt-warning rounded-pill badge-l-warning rounded-pill border border-warning"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/11.jpg') }}" alt="user"&gt;Warning
 &lt;/span&gt;
 &lt;span class="badge common-align txt-info rounded-pill badge-l-info rounded-pill border border-info"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/4.jpg') }}" alt="user"&gt;Info
 &lt;/span&gt;
 &lt;span class="badge common-align txt-light rounded-pill badge-l-light rounded-pill border border-light"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/10.jpg') }}" alt="user"&gt;Light
 &lt;/span&gt;
 &lt;span class="badge common-align txt-dark rounded-pill badge-l-dark rounded-pill border border-dark"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/7.jpg') }}" alt="user"&gt;Dark
 &lt;/span&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Close Badges</h5>
                        <p class="f-m-light mt-1"> Use<code> badge-l-*</code>classes to provide background-colors and
                            <code>border-* </code>classes to provide border-colors.
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
                    <div class="card-body">
                        <div class="badge-spacing image-badges"><span
                                class="badge common-align txt-primary rounded-pill badge-l-primary rounded-pill border border-primary">Primary
                                <a href="#!"> <i class="ms-1 stroke-primary" data-feather="x-circle">
                                    </i></a></span><span
                                class="badge common-align txt-secondary rounded-pill badge-l-secondary rounded-pill border border-secondary">Secondary
                                <a href="#!"> <i class="ms-1 stroke-secondary" data-feather="x-circle">
                                    </i></a></span><span
                                class="badge common-align txt-success rounded-pill badge-l-success rounded-pill border border-success">Success
                                <a href="#!"> <i class="ms-1 stroke-success" data-feather="x-circle">
                                    </i></a></span><span
                                class="badge common-align txt-danger rounded-pill badge-l-danger rounded-pill border border-danger">Danger
                                <a href="#!"> <i class="ms-1 stroke-danger" data-feather="x-circle">
                                    </i></a></span><span
                                class="badge common-align txt-warning rounded-pill badge-l-warning rounded-pill border border-warning">Warning
                                <a href="#!"> <i class="ms-1 stroke-warning" data-feather="x-circle">
                                    </i></a></span><span
                                class="badge common-align txt-info rounded-pill badge-l-info rounded-pill border border-info">Info
                                <a href="#!"> <i class="ms-1 stroke-info" data-feather="x-circle">
                                    </i></a></span><span
                                class="badge common-align txt-light rounded-pill badge-l-light rounded-pill border border-light">Light
                                <a href="#!"> <i class="ms-1 stroke-light" data-feather="x-circle">
                                    </i></a></span><span
                                class="badge common-align txt-dark rounded-pill badge-l-dark rounded-pill border border-dark">Dark
                                <a href="#!"> <i class="ms-1 stroke-dark" data-feather="x-circle"></i></a></span>
                            <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                    data-clipboard-target="#close-badges" title="Copy"><i
                                        class="icofont icofont-copy-alt"></i></button>
                                <pre class="custom-scrollbar"><code class="language-html" id="close-badges">&lt;div class="badge-spacing image-badges"&gt;
 &lt;span class="badge common-align txt-primary rounded-pill badge-l-primary rounded-pill border border-primary"&gt;Primary
   &lt;a href="#!"&gt;
     &lt;i class="ms-1 stroke-primary" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
 &lt;span class="badge common-align txt-secondary rounded-pill badge-l-secondary rounded-pill border border-secondary"&gt;Secondary
   &lt;a href="#!"&gt;
     &lt;i class="ms-1 stroke-secondary" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
 &lt;span class="badge common-align txt-success rounded-pill badge-l-success rounded-pill border border-success"&gt;Success
   &lt;a href="#!"&gt;
     &lt;i class="ms-1 stroke-success" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
 &lt;span class="badge common-align txt-danger rounded-pill badge-l-danger rounded-pill border border-danger"&gt;Danger
   &lt;a href="#!"&gt;
     &lt;i class="ms-1 stroke-danger" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
 &lt;span class="badge common-align txt-warning rounded-pill badge-l-warning rounded-pill border border-warning"&gt;Warning
   &lt;a href="#!"&gt;
     &lt;i class="ms-1 stroke-warning" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
 &lt;span class="badge common-align txt-info rounded-pill badge-l-info rounded-pill border border-info"&gt;Info
   &lt;a href="#!"&gt;
     &lt;i class="ms-1 stroke-info" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
 &lt;span class="badge common-align txt-light rounded-pill badge-l-light rounded-pill border border-light"&gt;Light
   &lt;a href="#!"&gt;
     &lt;i class="ms-1 stroke-light" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
 &lt;span class="badge common-align txt-dark rounded-pill badge-l-dark rounded-pill border border-dark"&gt;Dark
   &lt;a href="#!"&gt;
     &lt;i class="ms-1 stroke-dark" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Image with Close Badges</h5>
                        <p class="f-m-light mt-1"> Use<code> badge-l-* </code>classes to provide background-color. and
                            <code>vr </code>classes to partitions.
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
                    <div class="card-body">
                        <div class="badge-spacing image-badges"><span
                                class="badge common-align txt-primary rounded-pill badge-l-primary rounded-pill border border-primary"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                    alt="user">Primary<span class="vr mx-2"></span><a href="#!"> <i
                                        class="stroke-primary" data-feather="x-circle">
                                    </i></a></span><span
                                class="badge common-align txt-secondary rounded-pill badge-l-secondary rounded-pill border border-secondary"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                    alt="user">Secondary
                                <span class="vr mx-2"></span><a href="#!"> <i class="stroke-secondary"
                                        data-feather="x-circle">
                                    </i></a></span><span
                                class="badge common-align txt-success rounded-pill badge-l-success rounded-pill border border-success"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                    alt="user">Success <span class="vr mx-2"></span><a href="#!"> <i
                                        class="stroke-success" data-feather="x-circle">
                                    </i></a></span><span
                                class="badge common-align txt-danger rounded-pill badge-l-danger rounded-pill border border-danger"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/5.jpg') }}"
                                    alt="user">Danger <span class="vr mx-2"></span><a href="#!"> <i
                                        class="stroke-danger" data-feather="x-circle">
                                    </i></a></span><span
                                class="badge common-align txt-warning rounded-pill badge-l-warning rounded-pill border border-warning"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/6.jpg') }}"
                                    alt="user">Warning <span class="vr mx-2"></span><a href="#!"> <i
                                        class="stroke-warning" data-feather="x-circle">
                                    </i></a></span><span
                                class="badge common-align txt-info rounded-pill badge-l-info rounded-pill border border-info"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                    alt="user">Info <span class="vr mx-2"></span><a href="#!"> <i
                                        class="stroke-info" data-feather="x-circle">
                                    </i></a></span><span
                                class="badge common-align txt-light rounded-pill badge-l-light rounded-pill border border-light"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/user/3.png') }}"
                                    alt="user">Light <span class="vr mx-2"></span><a href="#!"> <i
                                        class="stroke-light" data-feather="x-circle">
                                    </i></a></span><span
                                class="badge common-align txt-dark rounded-pill badge-l-dark rounded-pill border border-dark"><img
                                    class="rounded-circle me-1" src="{{ asset('assets/images/user/6.jpg') }}"
                                    alt="user">Dark <span class="vr mx-2"></span><a href="#!"> <i
                                        class="stroke-dark" data-feather="x-circle">
                                    </i></a></span></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#img-close-badges" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="img-close-badges">&lt;div class="badge-spacing image-badges"&gt;
 &lt;span class="badge common-align txt-primary rounded-pill badge-l-primary rounded-pill border border-primary"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/1.jpg') }}" alt="user"&gt;Primary
   &lt;span class="vr mx-2"&gt;&lt;/span&gt;
   &lt;a href="#!"&gt;
     &lt;i class="stroke-primary" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
 &lt;span class="badge common-align txt-secondary rounded-pill badge-l-secondary rounded-pill border border-secondary"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/2.jpg') }}" alt="user"&gt;Secondary
   &lt;span class="vr mx-2"&gt;&lt;/span&gt;
   &lt;a href="#!"&gt;
     &lt;i class="stroke-secondary" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
 &lt;span class="badge common-align txt-success rounded-pill badge-l-success rounded-pill border border-success"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/3.jpg') }}" alt="user"&gt;Success
   &lt;span class="vr mx-2"&gt;&lt;/span&gt;
   &lt;a href="#!"&gt;
     &lt;i class="stroke-success" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
 &lt;span class="badge common-align txt-danger rounded-pill badge-l-danger rounded-pill border border-danger"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/5.jpg') }}" alt="user"&gt;Danger
   &lt;span class="vr mx-2"&gt;&lt;/span&gt;
   &lt;a href="#!"&gt;
     &lt;i class="stroke-danger" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
 &lt;span class="badge common-align txt-warning rounded-pill badge-l-warning rounded-pill border border-warning"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/6.jpg') }}" alt="user"&gt;Warning
   &lt;span class="vr mx-2"&gt;&lt;/span&gt;
   &lt;a href="#!"&gt;
     &lt;i class="stroke-warning" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
 &lt;span class="badge common-align txt-info rounded-pill badge-l-info rounded-pill border border-info"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/dashboard/user/12.jpg') }}" alt="user"&gt;Info
   &lt;span class="vr mx-2"&gt;&lt;/span&gt;
   &lt;a href="#!"&gt;
     &lt;i class="stroke-info" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
 &lt;span class="badge common-align txt-light rounded-pill badge-l-light rounded-pill border border-light"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/user/3.png') }}" alt="user"&gt;Light
   &lt;span class="vr mx-2"&gt;&lt;/span&gt;
   &lt;a href="#!"&gt;
     &lt;i class="stroke-light" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
 &lt;span class="badge common-align txt-dark rounded-pill badge-l-dark rounded-pill border border-dark"&gt;
   &lt;img class="rounded-circle me-1" src="{{ asset('assets/images/user/6.jpg') }}" alt="user"&gt;Dark
   &lt;span class="vr mx-2"&gt;&lt;/span&gt;
   &lt;a href="#!"&gt;
     &lt;i class="stroke-dark" data-feather="x-circle"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/span&gt;
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
@endsection
