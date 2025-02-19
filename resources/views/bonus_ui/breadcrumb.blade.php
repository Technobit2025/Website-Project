@extends('layouts.simple.master')

@section('title', 'Breadcrumb')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Breadcrumb</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Breadcrumb</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row"><!-- Basic Breadcrumb-->
            <div class="col-sm-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Default Breadcrumbs</h5>
                        <p class="f-m-light mt-1">Use <code> breadcrumb</code> class to set breadcrumb.</p>
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
                        <nav class="breadcrumb"><a class="breadcrumb-item" href="#!">Home</a><span
                                class="breadcrumb-item active">Ui Kits</span></nav>
                        <nav class="breadcrumb m-0"><a class="breadcrumb-item" href="#!">Home</a><a
                                class="breadcrumb-item" href="#!">Ui Kits</a><span
                                class="breadcrumb-item active">Alert</span></nav>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#default-breadcrumbs" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="default-breadcrumbs">&lt;div class="card-body"&gt;
 &lt;nav class="breadcrumb"&gt;
   &lt;a class="breadcrumb-item" href="javascript:void(0)"&gt;Home&lt;/a&gt;
   &lt;span class="breadcrumb-item active"&gt;Ui Kits&lt;/span&gt;
 &lt;/nav&gt;
 &lt;nav class="breadcrumb m-0"&gt;
   &lt;a class="breadcrumb-item" href="javascript:void(0)"&gt;Home&lt;/a&gt;
   &lt;a class="breadcrumb-item" href="javascript:void(0)"&gt;Ui Kits&lt;/a&gt;
   &lt;span class="breadcrumb-item active"&gt;Alert&lt;/span&gt;&lt;/nav&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div><!-- default breadcrumb ends--><!-- Dividers Breadcrumbs-->
            <div class="col-sm-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Divider Breadcrumbs</h5>
                        <p class="f-m-light mt-1">Use <code>breadcrumb-icon</code> class to set divider breadcrumb with
                            icons.
                        </p>
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
                        <nav class="breadcrumb breadcrumb-icon"><a class="breadcrumb-item" href="#!">Home</a><span
                                class="breadcrumb-item active">Ui Kits</span></nav>
                        <nav class="breadcrumb breadcrumb-icon m-0"><a class="breadcrumb-item" href="#!">Home</a><a
                                class="breadcrumb-item" href="#!">Ui Kits</a><span
                                class="breadcrumb-item active">Progress</span>
                        </nav>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#divider-breadcrumbs" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="divider-breadcrumbs">&lt;div class="card-body"&gt;
 &lt;nav class="breadcrumb breadcrumb-icon"&gt;
   &lt;a class="breadcrumb-item" href="javascript:void(0)"&gt;Home&lt;/a&gt;
   &lt;span class="breadcrumb-item active"&gt;Ui Kits&lt;/span&gt;
 &lt;/nav&gt;
 &lt;nav class="breadcrumb breadcrumb-icon m-0"&gt;
   &lt;a class="breadcrumb-item" href="javascript:void(0)"&gt;Home&lt;/a&gt;
   &lt;a class="breadcrumb-item" href="javascript:void(0)"&gt;Ui Kits&lt;/a&gt;
   &lt;span class="breadcrumb-item active"&gt;Progress&lt;/span&gt;
 &lt;/nav&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div><!-- Icons breadcrumb start-->
            <div class="col-sm-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>With Icons Breadcrumbs</h5>
                        <p class="f-m-light mt-1">Use<code> breadcrumb</code> class, to set breadcrumb with icons.</p>
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
                        <ol class="breadcrumb bg-white p-l-0">
                            <li class="breadcrumb-item"><a href="#!"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active">Bonus Ui</li>
                        </ol>
                        <ol class="breadcrumb bg-white m-b-0 p-b-0 p-l-0">
                            <li class="breadcrumb-item"><a href="#!"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item">Bonus Ui</li>
                            <li class="breadcrumb-item active">Breadcrumb</li>
                        </ol>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#icon-breadcrumbs" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="icon-breadcrumbs">&lt;div class="card-body"&gt;
 &lt;ol class="breadcrumb bg-white p-l-0"&gt;
   &lt;li class="breadcrumb-item"&gt;
     &lt;a href="javascript:void(0)"&gt;
     &lt;i class="fa-solid fa-house"&gt;&lt;/i&gt;&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class="breadcrumb-item active"&gt;Bonus Ui&lt;/li&gt;
 &lt;/ol&gt;
 &lt;ol class="breadcrumb bg-white m-b-0 p-b-0 p-l-0"&gt;
   &lt;li class="breadcrumb-item"&gt;
     &lt;a href="javascript:void(0)"&gt;
     &lt;i class="fa-solid fa-house"&gt;&lt;/i&gt;&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class="breadcrumb-item"&gt;Bonus Ui&lt;/li&gt;
   &lt;li class="breadcrumb-item active"&gt;Breadcrumb&lt;/li&gt;
 &lt;/ol&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div><!-- Nav breadcrumb start-->
            <div class="col-sm-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Variation of Breadcrumb</h5>
                        <p class="f-m-light mt-1">Using the <code>breadcrumb </code>class to any icon sets, you can set
                            variations of the breadcrumb.</p>
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
                    <div class="card-body breadcrumb-space">
                        <nav class="breadcrumb breadcrumb-no-divider mb-0 gap-2"><a class="breadcrumb-item mb-1 mb-xl-0"
                                href="#!">Home -></a><a class="breadcrumb-item ps-0 mb-1 mb-xl-0"
                                href="#!">Tables -></a><a class="breadcrumb-item ps-0 mb-1 mb-xl-0"
                                href="#!">Bootstrap Tables -></a><span class="breadcrumb-item active ps-0">Basic
                                Tables</span></nav>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#variation-breadcrumbs" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="variation-breadcrumbs">&lt;div class="card-body breadcrumb-space"&gt;
 &lt;nav class="breadcrumb breadcrumb-no-divider mb-0 gap-2"&gt;
   &lt;a class="breadcrumb-item mb-1 mb-xl-0" href="javascript:void(0)"&gt;Home->&lt;/a&gt;
   &lt;a class="breadcrumb-item ps-0 mb-1 mb-xl-0" href="javascript:void(0)"&gt;Tables->&lt;/a&gt;
   &lt;a class="breadcrumb-item ps-0 mb-1 mb-xl-0" href="javascript:void(0)"&gt;Bootstrap Tables ->&lt;/a&gt;
   &lt;span class="breadcrumb-item active ps-0"&gt;Basic Tables&lt;/span&gt;
 &lt;/nav&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div><!-- Nav breadcrumb ends--><!-- colored navigation start-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Colored Breadcrumbs</h5>
                        <p class="f-m-light mt-1">You can set background colors like <code>[bg-*] </code>and set breadcrumb
                            using the<code> breadcrumb class</code>.</p>
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
                        <ol class="breadcrumb breadcrumb-colored m-b-30 bg-info">
                            <li class="breadcrumb-item"><a class="fw-bold" href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a class="fw-bold" href="#!">Bonus Ui</a></li>
                            <li class="breadcrumb-item active fw-bold">Breadcrumb</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-colored m-b-30 bg-warning">
                            <li class="breadcrumb-item"><a class="fw-bold" href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a class="fw-bold" href="#!">Icons</a></li>
                            <li class="breadcrumb-item active fw-bold">Flag-icon</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-colored m-0 bg-danger">
                            <li class="breadcrumb-item"><a class="fw-bold" href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a class="fw-bold" href="#!">Gallery</a></li>
                            <li class="breadcrumb-item active fw-bold">Gallery-grid </li>
                        </ol>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#color-breadcrumbs" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="color-breadcrumbs">&lt;div class="card-body"&gt;
 &lt;ol class="breadcrumb breadcrumb-colored m-b-30 bg-info"&gt;
   &lt;li class="breadcrumb-item"&gt;&lt;a class="fw-bold" href="javascript:void(0)"&gt;Home&lt;/a&gt;&lt;/li&gt;
   &lt;li class="breadcrumb-item"&gt;&lt;a class="fw-bold" href="javascript:void(0)"&gt;Bonus Ui&lt;/a&gt;&lt;/li&gt;
   &lt;li class="breadcrumb-item active fw-bold"&gt;Breadcrumb&lt;/li&gt;
 &lt;/ol&gt;
 &lt;ol class="breadcrumb breadcrumb-colored m-b-30 bg-warning"&gt;
   &lt;li class="breadcrumb-item"&gt;&lt;a class="fw-bold" href="javascript:void(0)"&gt;Home&lt;/a&gt;&lt;/li&gt;
   &lt;li class="breadcrumb-item"&gt;&lt;a class="fw-bold" href="javascript:void(0)"&gt;Icons&lt;/a&gt;&lt;/li&gt;
   &lt;li class="breadcrumb-item active fw-bold"&gt;Flag-icon&lt;/li&gt;
 &lt;/ol&gt;
 &lt;ol class="breadcrumb breadcrumb-colored m-0 bg-danger"&gt;
   &lt;li class="breadcrumb-item"&gt;&lt;a class="fw-bold" href="javascript:void(0)"&gt;Home&lt;/a&gt;&lt;/li&gt;
   &lt;li class="breadcrumb-item"&gt;&lt;a class="fw-bold" href="javascript:void(0)"&gt;Gallery&lt;/a&gt;&lt;/li&gt;
   &lt;li class="breadcrumb-item active fw-bold"&gt;Gallery-grid&lt;/li&gt;
 &lt;/ol&gt;
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
