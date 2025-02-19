@extends('layouts.simple.master')

@section('title', 'Placeholders')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Placeholders</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Placeholders</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-6 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Placeholder Cards</h5>
                        <p class="f-m-light mt-1">In the example below, we take a typical card component and recreate it
                            with
                            placeholders applied to create a <code> loading card </code>and create placeholders with the
                            <code>placeholder </code>class.
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
                    <div class="card-body loading-card-wrapper">
                        <div class="row gy-3">
                            <div class="col-sm-6">
                                <div class="card mb-0 h-100" aria-hidden="true"><img class="card-img-top img-fluid"
                                        src="{{ asset('assets/images/masonry/5.jpg') }}" alt="#">
                                    <div class="card-body">
                                        <h6 class="card-title">Card Title</h6>
                                        <p class="card-text c-o-light">Some quick example text to build on the card title
                                            and make up
                                            the bulk of the card&apos;s content.</p><a class="btn btn-primary"
                                            href="#!">Go
                                            somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card mb-0 h-100" aria-hidden="true"><img class="card-img-top img-fluid"
                                        src="{{ asset('assets/images/masonry/13.jpg') }}" alt="#">
                                    <div class="card-body">
                                        <h6 class="card-title placeholder-glow"><span
                                                class="placeholder col-6 placeholder-light"></span></h6>
                                        <div class="card-text placeholder-glow mb-3">
                                            <div class="placeholder col-7 placeholder-light"></div>
                                            <div class="placeholder col-4 placeholder-light"></div>
                                            <div class="placeholder col-4 placeholder-light"></div>
                                            <div class="placeholder col-6 placeholder-light"></div>
                                            <div class="placeholder col-8 placeholder-light"></div>
                                        </div><a class="btn btn-primary disabled placeholder col-6" href="#!"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#placeholder-card" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="placeholder-card">&lt;div class="row gy-3"&gt;
 &lt;div class="col-sm-6"&gt;
   &lt;div class="card mb-0 h-100" aria-hidden="true"&gt;&lt;img class="card-img-top img-fluid" src="{{ asset('assets/images/masonry/5.jpg') }}" alt="#"&gt;
     &lt;div class="card-body"&gt;
       &lt;h6 class="card-title"&gt;Card Title&lt;/h6&gt;
       &lt;p class="card-text c-o-light"&gt;Some quick example text to build on the card title and make up the bulk of the card&apos;s content.&lt;/p&gt;&lt;a class="btn btn-primary" href="#!"&gt;Go somewhere&lt;/a&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-sm-6"&gt;
   &lt;div class="card mb-0 h-100" aria-hidden="true"&gt;&lt;img class="card-img-top img-fluid" src="{{ asset('assets/images/masonry/13.jpg') }}" alt="#"&gt;
     &lt;div class="card-body"&gt;
       &lt;h6 class="card-title placeholder-glow"&gt;&lt;span class="placeholder col-6 placeholder-light"&gt;&lt;/span&gt;&lt;/h6&gt;
       &lt;div class="card-text placeholder-glow mb-3"&gt;
         &lt;div class="placeholder col-7 placeholder-light"&gt;&lt;/div&gt;
         &lt;div class="placeholder col-4 placeholder-light"&gt;&lt;/div&gt;
         &lt;div class="placeholder col-4 placeholder-light"&gt;&lt;/div&gt;
         &lt;div class="placeholder col-6 placeholder-light"&gt;&lt;/div&gt;
         &lt;div class="placeholder col-8 placeholder-light"&gt;&lt;/div&gt;
       &lt;/div&gt;&lt;a class="btn btn-primary disabled placeholder col-6" href="#!"&gt;&lt;/a&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Width & Sizing</h5>
                        <p class="f-m-light mt-1"><code>placeholder</code> class + grid column (e.g., col-6) sets width.
                            Works
                            as text replacement or modifier class.Create flexible placeholders: <code>placeholder</code> +
                            <code>grid </code>for <code>width</code>. Replace text or modify components.
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
                        <div class="row g-3">
                            <div class="col-xxl-12 col-md-6 box-col-6">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <h6 class="sub-title pb-1">Width</h6>
                                    <p class="f-m-light">You can change the width through grid column classes, width
                                        utilities, or
                                        inline styles.<code> (like: w-25 , w-50 , w-75 , w-100 ) </code></p>
                                    <div class="card-body p-0 placeholder-glow"><span
                                            class="placeholder w-50 placeholder-light"></span><span
                                            class="placeholder w-75 placeholder-light"></span><span
                                            class="placeholder w-100 placeholder-light"></span><span
                                            class="placeholder w-25 placeholder-light"></span></div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-6 box-col-6">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <h6 class="sub-title pb-1">Sizing</h6>
                                    <p class="f-m-light">The size of <code>placeholder</code> are based on the typographic
                                        style of
                                        the parent element. Customize them with sizing modifiers:
                                        <code>placeholder-lg, placeholder-sm, or placeholder-xs</code>.
                                    </p>
                                    <div class="card-body p-0 placeholder-glow"><span
                                            class="placeholder col-12 placeholder-lg placeholder-light"></span><span
                                            class="placeholder col-12 placeholder-light"></span><span
                                            class="placeholder col-12 placeholder-sm placeholder-light"></span><span
                                            class="placeholder col-12 placeholder-xs placeholder-light"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#sizing-placeholder-card" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="sizing-placeholder-card">&lt;div class="row g-3"&gt;
 &lt;div class="col-xxl-12 col-md-6 box-col-6"&gt; 
   &lt;div class="card-wrapper border rounded-3 h-100"&gt;
     &lt;h6 class="sub-title pb-1"&gt;Width&lt;/h6&gt;
     &lt;p class="f-m-light"&gt;You can change the width through grid column classes, width utilities, or inline styles.
       &lt;code&gt; (like: w-25 , w-50 , w-75 , w-100 )&lt;/code&gt;
     &lt;/p&gt;
     &lt;div class="card-body p-0 placeholder-glow"&gt;
       &lt;span class="placeholder w-50 placeholder-light"&gt;&lt;/span&gt;
       &lt;span class="placeholder w-75 placeholder-light"&gt;&lt;/span&gt;
       &lt;span class="placeholder w-100 placeholder-light"&gt;&lt;/span&gt;
       &lt;span class="placeholder w-25 placeholder-light"&gt;&lt;/span&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xxl-12 col-md-6 box-col-6"&gt; 
   &lt;div class="card-wrapper border rounded-3 h-100"&gt;
     &lt;h6 class="sub-title pb-1"&gt;Sizing&lt;/h6&gt;
     &lt;p class="f-m-light"&gt;The size of
       &lt;code&gt;placeholder&lt;/code&gt; are based on the typographic style of the parent element. Customize them with sizing modifiers:&lt;code&gt;placeholder-lg, placeholder-sm, or placeholder-xs&lt;/code&gt;.
     &lt;/p&gt;
     &lt;div class="card-body p-0 placeholder-glow"&gt;
       &lt;span class="placeholder col-12 placeholder-lg placeholder-light"&gt;&lt;/span&gt;
       &lt;span class="placeholder col-12 placeholder-light"&gt;&lt;/span&gt;
       &lt;span class="placeholder col-12 placeholder-sm placeholder-light"&gt;&lt;/span&gt;
       &lt;span class="placeholder col-12 placeholder-xs placeholder-light"&gt;&lt;/span&gt;
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
                        <h5 class="mb-0">Animations</h5>
                        <p class="f-m-light mt-1">Animate placeholders with <code>placeholder-glow </code>or
                            <code>placeholder-wave</code> to better convey the perception of something being actively
                            loaded.
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
                    <div class="card-body animation-placeholder">
                        <p class="placeholder-glow"><span class="placeholder col-12 placeholder-light"></span></p>
                        <p class="placeholder-wave"><span class="placeholder col-12 placeholder-light"></span></p>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#placeholder-animate-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="placeholder-animate-copy">&lt;p class="placeholder-glow"&gt;
 &lt;span class="placeholder col-12 placeholder-light"&gt;&lt;/span&gt;
&lt;/p&gt;
&lt;p class="placeholder-wave"&gt;
 &lt;span class="placeholder col-12 placeholder-light"&gt;&lt;/span&gt;
&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Custom Animation Placeholder</h5>
                        <p class="f-m-light mt-1">With the <code>wave-left-lines</code> custom animation, placeholders may
                            be
                            used into your unique design.</p>
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
                        <div class="row gy-3">
                            <div class="col-sm-6">
                                <div class="placeholder-body">
                                    <div class="placeholder-start">
                                        <div class="square"></div>
                                    </div>
                                    <div class="placeholder-end">
                                        <div class="placeholder-line placeholder-h-17 w-25 mb-2"></div>
                                        <div class="placeholder-line"></div>
                                        <div class="placeholder-line placeholder-h-8 w-50"></div>
                                        <div class="placeholder-line w-75"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="placeholder-body">
                                    <div class="placeholder-start">
                                        <div class="square circle"></div>
                                    </div>
                                    <div class="placeholder-end">
                                        <div class="placeholder-line placeholder-h-17 w-25 mb-2"></div>
                                        <div class="placeholder-line"></div>
                                        <div class="placeholder-line placeholder-h-8 w-50"></div>
                                        <div class="placeholder-line w-75"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#custom-animation-place" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="custom-animation-place">&lt;div class="row gy-3"&gt; 
 &lt;div class="col-sm-6"&gt;
   &lt;div class="placeholder-body"&gt;
     &lt;div class="placeholder-start"&gt;
       &lt;div class="square"&gt;&lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="placeholder-end"&gt;
       &lt;div class="placeholder-line placeholder-h-17 w-25 mb-2"&gt;&lt;/div&gt;
       &lt;div class="placeholder-line"&gt;&lt;/div&gt;
       &lt;div class="placeholder-line placeholder-h-8 w-50"&gt;&lt;/div&gt;
       &lt;div class="placeholder-line w-75"&gt;&lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-sm-6"&gt;
   &lt;div class="placeholder-body"&gt;
     &lt;div class="placeholder-start"&gt;
       &lt;div class="square circle"&gt;&lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="placeholder-end"&gt;
       &lt;div class="placeholder-line placeholder-h-17 w-25 mb-2"&gt;&lt;/div&gt;
       &lt;div class="placeholder-line"&gt;&lt;/div&gt;
       &lt;div class="placeholder-line placeholder-h-8 w-50"&gt;&lt;/div&gt;
       &lt;div class="placeholder-line w-75"&gt;&lt;/div&gt;
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
                        <h5 class="mb-0">Colors</h5>
                        <p class="f-m-light mt-1">By default, the <code>placeholder </code>uses <code>currentcolor</code>.
                            This can be overridden with a custom color or utility class.</p>
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
                    <div class="card-body placeholder-glow"><span class="placeholder col-12"></span><span
                            class="placeholder col-12 bg-primary"></span><span
                            class="placeholder col-12 bg-secondary"></span><span
                            class="placeholder col-12 bg-success"></span><span
                            class="placeholder col-12 bg-danger"></span><span
                            class="placeholder col-12 bg-warning"></span><span
                            class="placeholder col-12 bg-info"></span><span
                            class="placeholder col-12 bg-light"></span><span class="placeholder col-12 bg-dark"></span>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#placeholder-color-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="placeholder-color-copy">&lt;span class="placeholder col-12"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-primary"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-secondary"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-success"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-danger"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-warning"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-info"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-light"&gt;&lt;/span&gt;
&lt;span class="placeholder col-12 bg-dark"&gt;&lt;/span&gt;</code></pre>
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
@endsection
