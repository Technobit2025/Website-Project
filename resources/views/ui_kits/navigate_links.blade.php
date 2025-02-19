@extends('layouts.simple.master')

@section('title', 'Navigate Links')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Navigate Links</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Navigate Links</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-3 col-sm-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Link Utilities </h5>
                        <p class="f-m-light mt-1">Colored links can also be modified by our <code>link utilities</code>.</p>
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
                        <p><a class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                href="#!">Link primary</a></p>
                        <p><a class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                href="#!">Link secondary</a></p>
                        <p><a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                href="#!">Link success</a></p>
                        <p><a class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                href="#!">Link danger</a></p>
                        <p><a class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                href="#!">Link warning</a></p>
                        <p><a class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                href="#!">Link info</a></p>
                        <p><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                href="#!">Link light</a></p>
                        <p><a class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                href="#!">Link dark</a></p>
                        <p><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover"
                                href="#!">Link emphasis</a></p>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#link-utilities" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="link-utilities">&lt;p&gt;&lt;a class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#!"&gt;Link primary&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#!"&gt;Link secondary&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#!"&gt;Link success&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#!"&gt;Link danger&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#!"&gt;Link warning&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#!"&gt;Link info&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#!"&gt;Link light&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#!"&gt;Link dark&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="#!"&gt;Link emphasis&lt;/a&gt;&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Link Underlines </h5>
                        <p class="f-m-light mt-1">Use <code>link-underline-* </code>classes to link underlines. Change the
                            underline's color independent of the link text color.</p>
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
                        <p><a class="link-underline-primary" href="#!">Primary underline</a></p>
                        <p><a class="link-underline-secondary" href="#!">Secondary underline</a></p>
                        <p><a class="link-underline-success" href="#!">Success underline</a></p>
                        <p><a class="link-underline-danger" href="#!">Danger underline</a></p>
                        <p><a class="link-underline-warning" href="#!">Warning underline</a></p>
                        <p><a class="link-underline-info" href="#!">Info underline</a></p>
                        <p><a class="link-underline-light" href="#!">Light underline</a></p>
                        <p><a class="link-underline-dark" href="#!">Dark underline</a></p>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#link-underline" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="link-underline">&lt;p&gt;&lt;a class="link-underline-primary" href="#!"&gt;Primary underline&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a class="link-underline-secondary" href="#!"&gt;Secondary underline&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a class="link-underline-success" href="#!"&gt;Success underline&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a class="link-underline-danger" href="#!"&gt;Danger underline&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a class="link-underline-warning" href="#!"&gt;Warning underline&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a class="link-underline-info" href="#!"&gt;Info underline&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a class="link-underline-light" href="#!"&gt;Light underline&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a class="link-underline-dark" href="#!"&gt;Dark underline&lt;/a&gt;&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Border Opacity</h5>
                        <p class="f-m-light mt-1">Use <code>border-opacity-* (10,25,50,75)</code> class to border opacity
                            links.</p>
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
                    <div class="card-body border-opacity-wrapper">
                        <div class="border p-2 mb-xl-3 mb-2 border-primary"> <a href="#!">This is default primary
                                border</a>
                        </div>
                        <div class="border p-2 mb-xl-3 mb-2 border-opacity-75"> <a href="#!">This is 75% opacity
                                primary
                                border</a></div>
                        <div class="border p-2 mb-xl-3 mb-2 border-opacity-50"><a href="#!">This is 50% opacity
                                primary
                                border</a></div>
                        <div class="border p-2 mb-xl-3 mb-2 border-opacity-25"><a href="#!">This is 25% opacity
                                primary
                                border</a></div>
                        <div class="border p-2 border-opacity-10"><a href="#!">This is 10% opacity primary border</a>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#border-opacity" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="border-opacity">&lt;div class="card-body border-opacity-wrapper"&gt;
 &lt;div class="border p-2 mb-xl-3 mb-2 border-primary"&gt;&lt;a href="#!"&gt;This is default primary border&lt;/a&gt;&lt;/div&gt;
 &lt;div class="border p-2 mb-xl-3 mb-2 border-opacity-75"&gt;&lt;a href="#!"&gt;This is 75% opacity primary border&lt;/a&gt;&lt;/div&gt;
 &lt;div class="border p-2 mb-xl-3 mb-2 border-opacity-50"&gt;&lt;a href="#!"&gt;This is 50% opacity primary border&lt;/a&gt;&lt;/div&gt;
 &lt;div class="border p-2 mb-xl-3 mb-2 border-opacity-25"&gt;&lt;a href="#!"&gt;This is 25% opacity primary border&lt;/a&gt;&lt;/div&gt;
 &lt;div class="border p-2 border-opacity-10"&gt;&lt;a href="#!"&gt;This is 10% opacity primary border&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Background Color Opacity</h5>
                        <p class="f-m-light mt-1">Use <code>bg-opacity-* (10,25,50,75)</code> class to background opacity
                            links.</p>
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
                    <div class="card-body bg-opacity-wrapper">
                        <div class="bg-primary p-2 mb-3 text-white"><a href="#!">This is default success
                                background</a></div>
                        <div class="p-2 mb-3 text-white bg-opacity-75"><a href="#!">This is 75% opacity success
                                background</a>
                        </div>
                        <div class="p-2 mb-3 text-dark bg-opacity-50"><a href="#!">This is 50% opacity success
                                background</a>
                        </div>
                        <div class="p-2 mb-3 text-dark bg-opacity-25"><a href="#!">This is 25% opacity success
                                background</a>
                        </div>
                        <div class="p-2 mb-3 text-dark bg-opacity-10"><a href="#!">This is 10% opacity success
                                background</a>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#bg-color-opacity" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="bg-color-opacity">&lt;div class="card-body bg-opacity-wrapper"&gt;
 &lt;div class="bg-primary p-2 mb-3 text-white"&gt;&lt;a href="#!"&gt;This is default success background&lt;/a&gt;&lt;/div&gt;
 &lt;div class="p-2 mb-3 text-white bg-opacity-75"&gt;&lt;a href="#!"&gt;This is 75% opacity success background&lt;/a&gt;&lt;/div&gt;
 &lt;div class="p-2 mb-3 text-dark bg-opacity-50"&gt;&lt;a href="#!"&gt;This is 50% opacity success background&lt;/a&gt;&lt;/div&gt;
 &lt;div class="p-2 mb-3 text-dark bg-opacity-25"&gt;&lt;a href="#!"&gt;This is 25% opacity success background&lt;/a&gt;&lt;/div&gt;
 &lt;div class="p-2 mb-3 text-dark bg-opacity-10"&gt;&lt;a href="#!"&gt;This is 10% opacity success background&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Common Links</h5>
                        <p class="f-m-light mt-1">Link utilities are used to stylize your anchors to adjust their link
                            opacity
                            <code> (link-opacity-*), </code>hovered link Opacity <code>(link-opacity-*-hover),
                            </code>underline
                            opacity <code>(link-underline-opacity-*), </code>underline offset <code>(link-offset-*),
                            </code>and
                            more.
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
                            <div class="col-sm-6 col-xxl-3">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <h6 class="sub-title fw-bold">Link Opacity</h6>
                                    <div class="link-opacity-wrapper">
                                        <p><a class="link-opacity-10" href="#!">Link opacity 10</a></p>
                                        <p><a class="link-opacity-25" href="#!">Link opacity 25</a></p>
                                        <p><a class="link-opacity-50" href="#!">Link opacity 50</a></p>
                                        <p><a class="link-opacity-75" href="#!">Link opacity 75</a></p>
                                        <p><a class="link-opacity-100" href="#!">Link opacity 100</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-3">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <h6 class="sub-title fw-bold"> Hovered Link Opacity</h6>
                                    <div class="link-opacity-wrapper">
                                        <p><a class="link-opacity-10-hover" href="#!">Link hover opacity 10</a></p>
                                        <p><a class="link-opacity-25-hover" href="#!">Link hover opacity 25</a></p>
                                        <p><a class="link-opacity-50-hover" href="#!">Link hover opacity 50</a></p>
                                        <p><a class="link-opacity-75-hover" href="#!">Link hover opacity 75</a></p>
                                        <p><a class="link-opacity-100-hover" href="#!">Link hover opacity 100</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-3">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <h6 class="sub-title fw-bold">Underline Opacity</h6>
                                    <div class="underline-opacity-wrapper">
                                        <p><a class="link-offset-2 link-underline link-underline-opacity-0"
                                                href="#!">Underline
                                                opacity 0</a></p>
                                        <p><a class="link-offset-2 link-underline link-underline-opacity-10"
                                                href="#!">Underline
                                                opacity 10</a></p>
                                        <p><a class="link-offset-2 link-underline link-underline-opacity-25"
                                                href="#!">Underline
                                                opacity 25</a></p>
                                        <p><a class="link-offset-2 link-underline link-underline-opacity-50"
                                                href="#!">Underline
                                                opacity 50</a></p>
                                        <p><a class="link-offset-2 link-underline link-underline-opacity-75"
                                                href="#!">Underline
                                                opacity 75</a></p>
                                        <p><a class="link-offset-2 link-underline link-underline-opacity-100"
                                                href="#!">Underline
                                                opacity 100</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-3">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <h6 class="sub-title fw-bold">Underline Offset</h6>
                                    <div class="underline-opacity-wrapper">
                                        <p><a href="#!">Default link</a></p>
                                        <p><a class="link-offset-1" href="#!">Offset 1 link</a></p>
                                        <p><a class="link-offset-2" href="#!">Offset 2 link</a></p>
                                        <p><a class="link-offset-3" href="#!">Offset 3 link</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#common-link" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="common-link">&lt;div class="row g-3"&gt;
 &lt;div class="col-sm-6 col-xxl-3"&gt;
   &lt;div class="card-wrapper border rounded-3 h-100"&gt;
     &lt;h6 class="sub-title fw-bold"&gt;Link Opacity&lt;/h6&gt;
     &lt;div class="link-opacity-wrapper"&gt; 
       &lt;p&gt;&lt;a class="link-opacity-10" href="#!"&gt;Link opacity 10&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-opacity-25" href="#!"&gt;Link opacity 25&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-opacity-50" href="#!"&gt;Link opacity 50&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-opacity-75" href="#!"&gt;Link opacity 75&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-opacity-100" href="#!"&gt;Link opacity 100&lt;/a&gt;&lt;/p&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-sm-6 col-xxl-3"&gt;
   &lt;div class="card-wrapper border rounded-3 h-100"&gt;
     &lt;h6 class="sub-title fw-bold"&gt; Hovered Link Opacity&lt;/h6&gt;
     &lt;div class="link-opacity-wrapper"&gt; 
       &lt;p&gt;&lt;a class="link-opacity-10-hover" href="#!"&gt;Link hover opacity 10&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-opacity-25-hover" href="#!"&gt;Link hover opacity 25&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-opacity-50-hover" href="#!"&gt;Link hover opacity 50&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-opacity-75-hover" href="#!"&gt;Link hover opacity 75&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-opacity-100-hover" href="#!"&gt;Link hover opacity 100&lt;/a&gt;&lt;/p&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-sm-6 col-xxl-3"&gt;
   &lt;div class="card-wrapper border rounded-3 h-100"&gt;
     &lt;h6 class="sub-title fw-bold"&gt;Underline Opacity&lt;/h6&gt;
     &lt;div class="underline-opacity-wrapper"&gt;
       &lt;p&gt;&lt;a class="link-offset-2 link-underline link-underline-opacity-0" href="#!"&gt;Underline opacity 0&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-offset-2 link-underline link-underline-opacity-10" href="#!"&gt;Underline opacity 10&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-offset-2 link-underline link-underline-opacity-25" href="#!"&gt;Underline opacity 25&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-offset-2 link-underline link-underline-opacity-50" href="#!"&gt;Underline opacity 50&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-offset-2 link-underline link-underline-opacity-75" href="#!"&gt;Underline opacity 75&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-offset-2 link-underline link-underline-opacity-100" href="#!"&gt;Underline opacity 100&lt;/a&gt;&lt;/p&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-sm-6 col-xxl-3"&gt;
   &lt;div class="card-wrapper border rounded-3 h-100"&gt;
     &lt;h6 class="sub-title fw-bold"&gt;Underline Offset&lt;/h6&gt;
     &lt;div class="underline-opacity-wrapper"&gt;
       &lt;p&gt;&lt;a href="#!"&gt;Default link&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-offset-1" href="#!"&gt;Offset 1 link&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-offset-2" href="#!"&gt;Offset 2 link&lt;/a&gt;&lt;/p&gt;
       &lt;p&gt;&lt;a class="link-offset-3" href="#!"&gt;Offset 3 link&lt;/a&gt;&lt;/p&gt;
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
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
