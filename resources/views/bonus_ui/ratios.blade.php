@extends('layouts.simple.master')

@section('title', 'Ratios')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Ratios</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Ratios</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Aspect Ratios</h5>
                        <p class="f-m-light mt-1">Aspect ratios can be customized with modifier classes. By default the
                            following ratio classes are provided:<code>[ratio-1x1 / ratio-4x3 / ratio-16x9 /
                                ratio-21x9]</code>.
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
                        <div class="row gap-lg-0 gap-4">
                            <div class="col-lg-3">
                                <div class="ratio ratio-1x1"><iframe
                                        src="https://www.youtube.com/embed/FjFWBcQPzSI?si=ZNk3GFvFTpZkPRlU"
                                        title="YouTube video" allowfullscreen=""></iframe></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ratio ratio-4x3"><iframe
                                        src="https://www.youtube.com/embed/FjFWBcQPzSI?si=ZNk3GFvFTpZkPRlU"
                                        title="YouTube video" allowfullscreen=""></iframe></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ratio ratio-16x9"><iframe
                                        src="https://www.youtube.com/embed/FjFWBcQPzSI?si=ZNk3GFvFTpZkPRlU"
                                        title="YouTube video" allowfullscreen=""></iframe></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ratio ratio-21x9"><iframe
                                        src="https://www.youtube.com/embed/FjFWBcQPzSI?si=ZNk3GFvFTpZkPRlU"
                                        title="YouTube video" allowfullscreen=""></iframe></div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#aspect-ratio" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="aspect-ratio">&lt;div class="row gap-lg-0 gap-4"&gt;
 &lt;div class="col-lg-3"&gt;
   &lt;div class="ratio ratio-1x1"&gt;
     &lt;iframe src="https://www.youtube.com/embed/FjFWBcQPzSI?si=ZNk3GFvFTpZkPRlU" title="YouTube video" allowfullscreen=""&gt;&lt;/iframe&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-lg-3"&gt;
   &lt;div class="ratio ratio-4x3"&gt;
     &lt;iframe src="https://www.youtube.com/embed/FjFWBcQPzSI?si=ZNk3GFvFTpZkPRlU" title="YouTube video" allowfullscreen=""&gt;&lt;/iframe&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-lg-3"&gt;
   &lt;div class="ratio ratio-16x9"&gt;
     &lt;iframe src="https://www.youtube.com/embed/FjFWBcQPzSI?si=ZNk3GFvFTpZkPRlU" title="YouTube video" allowfullscreen=""&gt;&lt;/iframe&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-lg-3"&gt;
   &lt;div class="ratio ratio-21x9"&gt;
     &lt;iframe src="https://www.youtube.com/embed/FjFWBcQPzSI?si=ZNk3GFvFTpZkPRlU" title="YouTube video" allowfullscreen=""&gt;&lt;/iframe&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Ratio</h5>
                        <p class="f-m-light mt-1">Wrap any embed, like an <code>&lt;iframe&gt;</code> , in a parent element
                            with <code>ratio </code>and an aspect <code>ratio</code> class. Here is a breakdown of these
                            ratios:<code> ratio-4x3</code>.</p>
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
                        <div class="ratio ratio-4x3"><iframe
                                src="https://www.youtube.com/embed/FjFWBcQPzSI?si=ZNk3GFvFTpZkPRlU" title="YouTube video"
                                allowfullscreen=""></iframe></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#custom-ratio" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="custom-ratio">&lt;div class="ratio ratio-4x3"&gt;
 &lt;iframe src="https://www.youtube.com/embed/FjFWBcQPzSI?si=ZNk3GFvFTpZkPRlU" title="YouTube video" allowfullscreen=""&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Default Ratio</h5>
                        <p class="f-m-light mt-1">Wrap any embed, like an <code>&lt;iframe&gt;</code> , in a parent element
                            with <code>ratio </code>and an aspect<code> ratio</code> class. Here is a breakdown of these
                            ratios:<code> 16x9 ratio</code>.</p>
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
                        <div class="ratio ratio-16x9"><iframe
                                src="https://www.youtube.com/embed/FjFWBcQPzSI?si=ZNk3GFvFTpZkPRlU" title="YouTube video"
                                allowfullscreen=""> </iframe></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#default-ratio" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="default-ratio">&lt;div class="ratio ratio-16x9"&gt;
 &lt;iframe src="https://www.youtube.com/embed/FjFWBcQPzSI?si=ZNk3GFvFTpZkPRlU" title="YouTube video" allowfullscreen=""&gt;&lt;/iframe&gt;
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
@endsection
