@extends('layouts.simple.master')

@section('title', 'Helper Classes')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Helper Classes</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Helper Classes</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Styled Borders</h5>
                        <p class="f-m-light mt-1"> Use different styles of borders, like
                            <code>border radius, border-color, and border-width</code> use of any components.
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
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper h-100 alert-light-light dark-helper">
                                    <h6 class="mb-3">Custom Border-radius Class</h6>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-0 bg-light border"></div><span>b-r-0</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-1 bg-light border"></div><span>b-r-1</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-2 bg-light border"></div><span>b-r-2</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-3 bg-light border"></div><span>b-r-3</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-4 bg-light border"></div><span>b-r-4</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-5 bg-light border"></div><span>b-r-5</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-6 bg-light border"></div><span>b-r-6</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-7 bg-light border"></div><span>b-r-7</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-8 bg-light border"></div><span>b-r-8</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-9 bg-light border"></div><span>b-r-9</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box b-r-10 bg-light border"></div><span>b-r-10</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper h-100 alert-light-light dark-helper">
                                    <h6 class="mb-3">Border Color</h6>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-primary border"></div><span>border-primary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-secondary border"></div><span>border-secondary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-success border"></div><span>border-success</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-danger border"></div><span>border-danger</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-warning border"></div><span>border-warning</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-info border"></div><span>border-info</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-dark border"></div><span>border-dark</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper h-100 alert-light-light dark-helper">
                                    <h6 class="mb-3">Border Width</h6>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-1 border"> </div><span>border-1</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-2 border"> </div><span>border-2</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-3 border"> </div><span>border-3</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-4 border"> </div><span>border-4</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-5 border"> </div><span>border-5</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-6 border"> </div><span>border-6</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-7 border"> </div><span>border-7</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-8 border"> </div><span>border-8</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-9 border"> </div><span>border-9</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box border-10 border"> </div><span>border-10 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper alert-light-light h-100 dark-helper">
                                    <h6 class="mb-3">Text Colors</h6>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-primary">C </div>
                                        <span>txt-primary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-secondary">C </div>
                                        <span>txt-secondary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-success">C </div>
                                        <span>txt-success</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-danger">C </div>
                                        <span>txt-danger</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-warning">C </div>
                                        <span>txt-warning</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-info">C </div><span>txt-info</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-dark">C </div><span>txt-dark</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box helper-text border txt-light bg-dark">C </div>
                                        <span>txt-light</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#copy-border" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="copy-border">&lt;div class="row g-3"&gt;
 &lt;div class="col-xxl-3 col-sm-6"&gt;
   &lt;div class="border-wrapper h-100 alert-light-light dark-helper"&gt;
     &lt;h6 class="mb-3"&gt;Custom Border-radius Class&lt;/h6&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box b-r-0 bg-light border"&gt;&lt;/div&gt;&lt;span&gt;b-r-0&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box b-r-1 bg-light border"&gt;&lt;/div&gt;&lt;span&gt;b-r-1&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box b-r-2 bg-light border"&gt;&lt;/div&gt;&lt;span&gt;b-r-2&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box b-r-3 bg-light border"&gt;&lt;/div&gt;&lt;span&gt;b-r-3&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box b-r-4 bg-light border"&gt;&lt;/div&gt;&lt;span&gt;b-r-4&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box b-r-5 bg-light border"&gt;&lt;/div&gt;&lt;span&gt;b-r-5&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box b-r-6 bg-light border"&gt;&lt;/div&gt;&lt;span&gt;b-r-6&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box b-r-7 bg-light border"&gt;&lt;/div&gt;&lt;span&gt;b-r-7&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box b-r-8 bg-light border"&gt;&lt;/div&gt;&lt;span&gt;b-r-8&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box b-r-9 bg-light border"&gt;&lt;/div&gt;&lt;span&gt;b-r-9&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box b-r-10 bg-light border"&gt;&lt;/div&gt;&lt;span&gt;b-r-10&lt;/span&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xxl-3 col-sm-6"&gt;
   &lt;div class="border-wrapper h-100 alert-light-light dark-helper"&gt;
     &lt;h6 class="mb-3"&gt;Border Color&lt;/h6&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-primary border"&gt;&lt;/div&gt;&lt;span&gt;border-primary&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-secondary border"&gt;&lt;/div&gt;&lt;span&gt;border-secondary&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-success border"&gt;&lt;/div&gt;&lt;span&gt;border-success&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-danger border"&gt;&lt;/div&gt;&lt;span&gt;border-danger&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-warning border"&gt;&lt;/div&gt;&lt;span&gt;border-warning&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-info border"&gt;&lt;/div&gt;&lt;span&gt;border-info&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-dark border"&gt;&lt;/div&gt;&lt;span&gt;border-dark&lt;/span&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xxl-3 col-sm-6"&gt;
   &lt;div class="border-wrapper h-100 alert-light-light dark-helper"&gt;
     &lt;h6 class="mb-3"&gt;Border Width&lt;/h6&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-1 border"&gt; &lt;/div&gt;&lt;span&gt;border-1&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-2 border"&gt; &lt;/div&gt;&lt;span&gt;border-2&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-3 border"&gt; &lt;/div&gt;&lt;span&gt;border-3&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-4 border"&gt; &lt;/div&gt;&lt;span&gt;border-4&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-5 border"&gt; &lt;/div&gt;&lt;span&gt;border-5&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-6 border"&gt; &lt;/div&gt;&lt;span&gt;border-6&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-7 border"&gt; &lt;/div&gt;&lt;span&gt;border-7&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-8 border"&gt; &lt;/div&gt;&lt;span&gt;border-8&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-9 border"&gt; &lt;/div&gt;&lt;span&gt;border-9&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box border-10 border"&gt; &lt;/div&gt;&lt;span&gt;border-10&lt;/span&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xxl-3 col-sm-6"&gt;
   &lt;div class="border-wrapper alert-light-light h-100 dark-helper"&gt;
     &lt;h6 class="mb-3"&gt;Text Colors&lt;/h6&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box helper-text border txt-primary"&gt;C &lt;/div&gt;&lt;span&gt;txt-primary&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box helper-text border txt-secondary"&gt;C &lt;/div&gt;&lt;span&gt;txt-secondary&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box helper-text border txt-success"&gt;C &lt;/div&gt;&lt;span&gt;txt-success&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box helper-text border txt-danger"&gt;C &lt;/div&gt;&lt;span&gt;txt-danger&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box helper-text border txt-warning"&gt;C &lt;/div&gt;&lt;span&gt;txt-warning&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box helper-text border txt-info"&gt;C &lt;/div&gt;&lt;span&gt;txt-info&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box helper-text border txt-dark"&gt;C &lt;/div&gt;&lt;span&gt;txt-dark&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box helper-text border txt-light bg-dark"&gt;C &lt;/div&gt;&lt;span&gt;txt-light&lt;/span&gt;
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
                        <h5>Variation of Borders and Displays</h5>
                        <p class="f-m-light mt-1"> Use border utilities to add or remove an element's borders.</p>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="border-wrapper h-100 border">
                                    <h6 class="mb-3">Additive Border </h6>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border"></div><span>border</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border-top"></div><span>border-top</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border-bottom"></div><span>border-bottom</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border-start"></div><span>border-start</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border-end"></div><span>border-end</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="border-wrapper h-100 border subtract-border">
                                    <h6 class="mb-3">Subtractive Border</h6>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border border-0"> </div><span>border-0</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border border-top-0"> </div>
                                        <span>border-top-0</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border border-end-0"> </div>
                                        <span>border-end-0</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border border-bottom-0"> </div>
                                        <span>border-bottom-0</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light border border-start-0"> </div>
                                        <span>border-start-0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12">
                                <div class="border-wrapper h-100 border">
                                    <h6 class="mb-3">Additive Radius</h6>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded"></div><span>rounded</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded-top"></div>
                                        <span>rounded-top</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded-end"></div>
                                        <span>rounded-end</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded-bottom"></div>
                                        <span>rounded-bottom</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded-start"></div>
                                        <span>rounded-start</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded-pill"></div>
                                        <span>rounded-pill</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded-circle"></div>
                                        <span>rounded-circle</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-radius radius-wrapper rounded-0"></div><span>rounded-0 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#display-b-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="display-b-copy">&lt;div class="row g-3"&gt;
 &lt;div class="col-xl-4 col-sm-6"&gt;
   &lt;div class="border-wrapper h-100 border"&gt;
     &lt;h6 class="mb-3"&gt;Additive Border&lt;/h6&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-light border"&gt;&lt;/div&gt;&lt;span&gt;border&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-light border-top"&gt;&lt;/div&gt;&lt;span&gt;border-top&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-light border-bottom"&gt;&lt;/div&gt;&lt;span&gt;border-bottom&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-light border-start"&gt;&lt;/div&gt;&lt;span&gt;border-start&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-light border-end"&gt;&lt;/div&gt;&lt;span&gt;border-end&lt;/span&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xl-4 col-sm-6"&gt;
   &lt;div class="border-wrapper h-100 border"&gt;
     &lt;h6 class="mb-3"&gt;Subtractive Border&lt;/h6&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-light border border-0"&gt; &lt;/div&gt;&lt;span&gt;border-0&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-light border border-top-0"&gt; &lt;/div&gt;&lt;span&gt;border-top-0&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-light border border-end-0"&gt; &lt;/div&gt;&lt;span&gt;border-end-0&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-light border border-bottom-0"&gt; &lt;/div&gt;&lt;span&gt;border-bottom-0&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-light border border-start-0"&gt; &lt;/div&gt;&lt;span&gt;border-start-0&lt;/span&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xl-4 col-sm-12"&gt;
   &lt;div class="border-wrapper h-100 border"&gt;
     &lt;h6 class="mb-3"&gt;Additive Radius&lt;/h6&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-radius radius-wrapper rounded"&gt;&lt;/div&gt;&lt;span&gt;rounded&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-radius radius-wrapper rounded-top"&gt;&lt;/div&gt;&lt;span&gt;rounded-top&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-radius radius-wrapper rounded-end"&gt;&lt;/div&gt;&lt;span&gt;rounded-end&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-radius radius-wrapper rounded-bottom"&gt;&lt;/div&gt;&lt;span&gt;rounded-bottom&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-radius radius-wrapper rounded-start"&gt;&lt;/div&gt;&lt;span&gt;rounded-start&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-radius radius-wrapper rounded-pill"&gt;&lt;/div&gt;&lt;span&gt;rounded-pill&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-radius radius-wrapper rounded-circle"&gt;&lt;/div&gt;&lt;span&gt;rounded-circle&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-radius radius-wrapper rounded-0"&gt;&lt;/div&gt;&lt;span&gt;rounded-0&lt;/span&gt;
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
                        <h5>Background Colors </h5>
                        <p class="f-m-light mt-1"> Use any component in a theme, use the colors <code>bg-* </code>and
                            <code>alert-light-*.</code>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="border-wrapper h-100 border">
                                    <h6 class="mb-3">Dark Backgrounds</h6>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-primary"></div><span>bg-primary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-secondary"></div><span>bg-secondary </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-success"></div><span>bg-success </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-danger"></div><span>bg-danger </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-warning"></div><span>bg-warning </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-info"></div><span>bg-info </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-dark"></div><span>bg-dark </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box bg-light"></div><span>bg-light </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="border-wrapper h-100 border">
                                    <h6 class="mb-3">Light Backgrounds</h6>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-primary"> </div><span>alert-light-primary
                                        </span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-secondary"></div>
                                        <span>alert-light-secondary</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-success"></div><span>alert-light-success</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-danger"></div><span>alert-light-danger</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-warning"></div><span>alert-light-warning</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-info"></div><span>alert-light-info</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-dark"></div><span>alert-light-dark</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box alert-light-light"></div><span>alert-light-light</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12">
                                <div class="border-wrapper h-100 border">
                                    <h6 class="mb-3">Extended Background Colors</h6>
                                    <div class="helper-common-box">
                                        <div class="helper-box light-card"> </div><span>light-card</span>
                                    </div>
                                    <div class="helper-common-box">
                                        <div class="helper-box light-background border"></div><span>light-background
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#helper-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="helper-copy">&lt;div class="row g-3"&gt;
 &lt;div class="col-xl-4 col-sm-6"&gt;
   &lt;div class="border-wrapper h-100 border"&gt;
     &lt;h6 class="mb-3"&gt;Dark Backgrounds&lt;/h6&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-primary"&gt;&lt;/div&gt;&lt;span&gt;bg-primary&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-secondary"&gt;&lt;/div&gt;&lt;span&gt;bg-secondary&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-success"&gt;&lt;/div&gt;&lt;span&gt;bg-success&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-danger"&gt;&lt;/div&gt;&lt;span&gt;bg-danger&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-warning"&gt;&lt;/div&gt;&lt;span&gt;bg-warning&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-info"&gt;&lt;/div&gt;&lt;span&gt;bg-info&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-dark"&gt;&lt;/div&gt;&lt;span&gt;bg-dark&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box bg-light"&gt;&lt;/div&gt;&lt;span&gt;bg-light&lt;/span&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xl-4 col-sm-6"&gt;
   &lt;div class="border-wrapper h-100 border"&gt;
     &lt;h6 class="mb-3"&gt;Light Backgrounds&lt;/h6&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box alert-light-primary"&gt; &lt;/div&gt;&lt;span&gt;alert-light-primary&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box alert-light-secondary"&gt;&lt;/div&gt;&lt;span&gt;alert-light-secondary&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box alert-light-success"&gt;&lt;/div&gt;&lt;span&gt;alert-light-success&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box alert-light-danger"&gt;&lt;/div&gt;&lt;span&gt;alert-light-danger&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box alert-light-warning"&gt;&lt;/div&gt;&lt;span&gt;alert-light-warning&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box alert-light-info"&gt;&lt;/div&gt;&lt;span&gt;alert-light-info&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box alert-light-dark"&gt;&lt;/div&gt;&lt;span&gt;alert-light-dark&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box alert-light-light"&gt;&lt;/div&gt;&lt;span&gt;alert-light-light&lt;/span&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xl-4 col-sm-12"&gt;
   &lt;div class="border-wrapper h-100 border"&gt;
     &lt;h6 class="mb-3"&gt;Extended Background Colors&lt;/h6&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box light-card"&gt; &lt;/div&gt;&lt;span&gt;light-card&lt;/span&gt;
     &lt;/div&gt;
     &lt;div class="helper-common-box"&gt;
       &lt;div class="helper-box light-background border"&gt;&lt;/div&gt;&lt;span&gt;light-background&lt;/span&gt;
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
                        <h5>Border Colors</h5>
                        <p class="f-m-light mt-1"> Use <code>b-*/ b-t-*/ b-b-*/ b-l-*/ b-r-* </code>class for borders.</p>
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
                        <div class="gradient-border">
                            <div class="helper-common-box">
                                <div class="helper-box b-primary border fill-wrapper"> </div><span>b-primary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-primary border fill-wrapper"> </div><span>b-t-primary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-primary border fill-wrapper"> </div><span>b-b-primary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-primary border fill-wrapper"> </div><span>b-l-primary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-primary border fill-wrapper"> </div><span>b-r-primary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-secondary border fill-wrapper"> </div><span>b-secondary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-secondary border fill-wrapper"> </div><span>b-t-secondary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-secondary border fill-wrapper"> </div><span>b-b-secondary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-secondary border fill-wrapper"> </div><span>b-l-secondary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-secondary border fill-wrapper"> </div><span>b-r-secondary</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-success border fill-wrapper"> </div><span>b-success</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-success border fill-wrapper"> </div><span>b-t-success</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-success border fill-wrapper"> </div><span>b-b-success</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-success border fill-wrapper"> </div><span>b-l-success</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-success border fill-wrapper"> </div><span>b-r-success</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-danger border fill-wrapper"> </div><span>b-danger</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-danger border fill-wrapper"> </div><span>b-t-danger</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-danger border fill-wrapper"> </div><span>b-b-danger</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-danger border fill-wrapper"> </div><span>b-l-danger</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-danger border fill-wrapper"> </div><span>b-r-danger</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-warning border fill-wrapper"> </div><span>b-warning</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-warning border fill-wrapper"> </div><span>b-t-warning</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-warning border fill-wrapper"> </div><span>b-b-warning</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-warning border fill-wrapper"> </div><span>b-l-warning</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-warning border fill-wrapper"> </div><span>b-r-warning</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-info border fill-wrapper"> </div><span>b-info</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-info border fill-wrapper"> </div><span>b-t-info</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-info border fill-wrapper"> </div><span>b-b-info</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-info border fill-wrapper"> </div><span>b-l-info</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-info border fill-wrapper"> </div><span>b-r-info</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-dark border fill-wrapper"> </div><span>b-dark</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-dark border fill-wrapper"> </div><span>b-t-dark</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-dark border fill-wrapper"> </div><span>b-b-dark</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-dark border fill-wrapper"> </div><span>b-l-dark</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-dark border fill-wrapper"> </div><span>b-r-dark</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-light border fill-wrapper"> </div><span>b-light</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-t-light border fill-wrapper"> </div><span>b-t-light</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-b-light border fill-wrapper"> </div><span>b-b-light</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-l-light border fill-wrapper"> </div><span>b-l-light</span>
                            </div>
                            <div class="helper-common-box">
                                <div class="helper-box b-r-light border fill-wrapper"> </div><span>b-r-light</span>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#color-b-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="color-b-copy">&lt;div class="gradient-border"&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-primary border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-primary&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-t-primary border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-t-primary&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-b-primary border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-b-primary&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-l-primary border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-l-primary&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-r-primary border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-r-primary&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-secondary border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-secondary&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-t-secondary border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-t-secondary&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-b-secondary border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-b-secondary&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-l-secondary border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-l-secondary&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-r-secondary border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-r-secondary&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-success border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-success&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-t-success border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-t-success&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-b-success border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-b-success&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-l-success border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-l-success&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-r-success border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-r-success&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-danger border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-danger&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-t-danger border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-t-danger&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-b-danger border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-b-danger&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-l-danger border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-l-danger&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-r-danger border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-r-danger&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-warning border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-warning&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-t-warning border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-t-warning&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-b-warning border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-b-warning&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-l-warning border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-l-warning&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-r-warning border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-r-warning&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-info border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-info&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-t-info border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-t-info&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-b-info border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-b-info&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-l-info border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-l-info&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-r-info border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-r-info&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-dark border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-dark&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-t-dark border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-t-dark&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-b-dark border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-b-dark&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-l-dark border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-l-dark&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-r-dark border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-r-dark&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-light border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-light&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-t-light border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-t-light&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-b-light border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-b-light&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-l-light border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-l-light&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="helper-box b-r-light border fill-wrapper"&gt; &lt;/div&gt;&lt;span&gt;b-r-light&lt;/span&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card height-equal helper-height-equal">
                    <div class="card-header">
                        <h5>Images Sizes</h5>
                        <p class="f-m-light mt-1"> Use <code>img-h-* </code>& <code> img-* </code> for image height and
                            border
                            radius for use <code>rounded-* / b-r-* / and rounded-pill </code>for border-radius images.</p>
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
                            <div class="col-12 helper-col-6">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <div class="gradient-border gap-3"><img class="img-30 img-h-30"
                                            src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-30"><img
                                            class="img-40 img-h-40" src="{{ asset('assets/images/blog/comment.jpg') }}"
                                            alt="img-size-40"><img class="img-50 img-h-50"
                                            src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-50"><img
                                            class="img-60 img-h-60" src="{{ asset('assets/images/blog/comment.jpg') }}"
                                            alt="img-size-60"><img class="img-70 img-h-70"
                                            src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-70"><img
                                            class="img-80 img-h-80" src="{{ asset('assets/images/blog/comment.jpg') }}"
                                            alt="img-size-80"><img class="img-90 img-h-90"
                                            src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-90"><img
                                            class="img-100 img-h-100" src="{{ asset('assets/images/blog/comment.jpg') }}"
                                            alt="img-size-100"></div>
                                </div>
                            </div>
                            <div class="col-12 helper-col-6">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <div class="gradient-border gap-3"><img class="img-30 img-h-30 b-r-4"
                                            src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-30"><img
                                            class="img-40 img-h-40 rounded"
                                            src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-40"><img
                                            class="img-50 img-h-50 rounded-1"
                                            src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-50"><img
                                            class="img-60 img-h-60 rounded-2"
                                            src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-60"><img
                                            class="img-70 img-h-70 rounded-3"
                                            src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-70"><img
                                            class="img-80 img-h-80 rounded-4"
                                            src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-80"><img
                                            class="img-90 img-h-90 rounded-5"
                                            src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-90"><img
                                            class="img-100 img-h-100 rounded-pill"
                                            src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-100"></div>
                                    <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#image-s-copy" title="Copy"><i
                                                class="icofont icofont-copy-alt"></i></button>
                                        <pre class="custom-scrollbar"><code class="language-html" id="image-s-copy">&lt;div class="row g-3"&gt;
 &lt;div class="col-12 helper-col-6"&gt; 
   &lt;div class="card-wrapper border rounded-3 h-100"&gt;
     &lt;div class="gradient-border gap-3"&gt;
       &lt;img class="img-30 img-h-30" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-30"&gt;
       &lt;img class="img-40 img-h-40" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-40"&gt;
       &lt;img class="img-50 img-h-50" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-50"&gt;
       &lt;img class="img-60 img-h-60" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-60"&gt;
       &lt;img class="img-70 img-h-70" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-70"&gt;
       &lt;img class="img-80 img-h-80" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-80"&gt;
       &lt;img class="img-90 img-h-90" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-90"&gt;
       &lt;img class="img-100 img-h-100" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-100"&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-12 helper-col-6"&gt;
   &lt;div class="card-wrapper border rounded-3 h-100"&gt;
     &lt;div class="gradient-border gap-3"&gt;
       &lt;img class="img-30 img-h-30 b-r-4" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-30"&gt;
       &lt;img class="img-40 img-h-40 rounded" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-40"&gt;
       &lt;img class="img-50 img-h-50 rounded-1" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-50"&gt;
       &lt;img class="img-60 img-h-60 rounded-2" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-60"&gt;
       &lt;img class="img-70 img-h-70 rounded-3" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-70"&gt;
       &lt;img class="img-80 img-h-80 rounded-4" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-80"&gt;
       &lt;img class="img-90 img-h-90 rounded-5" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-90"&gt;
       &lt;img class="img-100 img-h-100 rounded-pill" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-100"&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;                   </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card height-equal helper-height-equal">
                    <div class="card-header">
                        <h5>Font-style</h5>
                        <p class="f-m-light mt-1"> Use font-style like:
                            <code> f-s-* [normal / italic / oblique / initial / inherit]</code>.
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
                        <p class="f-s-normal"> This is a <strong>f-s-normal</strong> font-style </p>
                        <p class="f-s-italic">This is a <strong>f-s-italic</strong> font-style </p>
                        <p class="f-s-oblique">This is a <strong>f-s-oblique</strong> font-style </p>
                        <p class="f-s-initial">This is a <strong>f-s-initial</strong> font-style </p>
                        <p class="f-s-inherit">This is a <strong>f-s-inherit</strong> font-style </p>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#form-style-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="form-style-copy">&lt;div class="card-body"&gt; 
 &lt;p class="f-s-normal"&gt;This is a&lt;strong&gt;f-s-normal&lt;/strong&gt;font-style&lt;/p&gt;
 &lt;p class="f-s-italic"&gt;This is a&lt;strong&gt;f-s-italic&lt;/strong&gt;font-style&lt;/p&gt;
 &lt;p class="f-s-oblique"&gt;This is a&lt;strong&gt;f-s-oblique&lt;/strong&gt;font-style&lt;/p&gt;
 &lt;p class="f-s-initial"&gt;This is a&lt;strong&gt;f-s-initial&lt;/strong&gt;font-style&lt;/p&gt;
 &lt;p class="f-s-inherit"&gt;This is a&lt;strong&gt;f-s-inherit&lt;/strong&gt;font-style&lt;/p&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal helper-height-equal">
                    <div class="card-header">
                        <h5>Font Weight </h5>
                        <p class="f-m-light mt-1"> Use font-weight classes like:
                            <code>f-w-* [100 / 300 / 400 / 600 / 700 / 900]</code>.
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
                        <div class="helper-common-box">
                            <div class="f-w-100"> You can set light font weight heading f-w-100</div>
                        </div>
                        <div class="helper-common-box">
                            <div class="f-w-300">You can set light font weight heading f-w-300</div>
                        </div>
                        <div class="helper-common-box">
                            <div class="f-w-400">You can set light font weight heading f-w-400</div>
                        </div>
                        <div class="helper-common-box">
                            <div class="f-w-600">You can set bolder font weight heading f-w-600</div>
                        </div>
                        <div class="helper-common-box">
                            <div class="f-w-700">You can set bold font weight heading f-w-700</div>
                        </div>
                        <div class="helper-common-box">
                            <div class="f-w-900">You can set bold font weight heading f-w-900</div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#font-w-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="font-w-copy">&lt;div class="card-body"&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="f-w-100"&gt;You can set light font weight heading f-w-100&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="f-w-300"&gt;You can set light font weight heading f-w-300&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="f-w-400"&gt;You can set light font weight heading f-w-400&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="f-w-600"&gt;You can set bolder font weight heading f-w-600&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="f-w-700"&gt;You can set bold font weight heading f-w-700&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box"&gt;
   &lt;div class="f-w-900"&gt;You can set bold font weight heading f-w-900&lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal helper-height-equal">
                    <div class="card-header">
                        <h5>Text Colors</h5>
                        <p class="f-m-light mt-1"> Use text color for <code>font-*</code> classes.</p>
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
                    <div class="card-body txt-space">
                        <div class="font-primary"> This is a <strong>font-primary </strong> text used class as font-primary
                        </div>
                        <div class="font-secondary">This is a <strong>font-secondary </strong> text used class as
                            font-secondary </div>
                        <div class="font-success">This is a <strong>font-success </strong> text used class as font-success
                        </div>
                        <div class="font-danger">This is a <strong>font-danger </strong> text used class as font-danger
                        </div>
                        <div class="font-warning">This is a <strong>font-warning </strong> text used class as font-warning
                        </div>
                        <div class="font-info">This is a <strong>font-info </strong> text used class as font-info</div>
                        <div class="font-dark">This is a <strong>font-dark </strong> text used class as font-dark</div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#text-color-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="text-color-copy">&lt;div class="card-body txt-space"&gt;
 &lt;div class="font-primary"&gt;This is a&lt;strong&gt;font-primary&lt;/strong&gt;text used class as font-primary&lt;/div&gt;
 &lt;div class="font-secondary"&gt;This is a&lt;strong&gt;font-secondary&lt;/strong&gt;text used class as font-secondary &lt;/div&gt;
 &lt;div class="font-success"&gt;This is a&lt;strong&gt;font-success&lt;/strong&gt;text used class as font-success&lt;/div&gt;
 &lt;div class="font-danger"&gt;This is a&lt;strong&gt;font-danger&lt;/strong&gt;text used class as font-danger&lt;/div&gt;
 &lt;div class="font-warning"&gt;This is a&lt;strong&gt;font-warning&lt;/strong&gt;text used class as font-warning&lt;/div&gt;
 &lt;div class="font-info"&gt;This is a&lt;strong&gt;font-info&lt;/strong&gt;text used class as font-info&lt;/div&gt;
 &lt;div class="font-dark"&gt;This is a&lt;strong&gt;font-dark&lt;/strong&gt;text used class as font-dark&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Padding</h5>
                        <p class="f-m-light mt-1"> Use padding classes like:
                            <code>p-* [10 / 15 / 20 / 25 / 30 / 35 / 40/ 45 / 50]</code>.
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
                        <div class="border-wrapper h-100 alert-light-light dark-helper">
                            <div class="helper-common-box helper-p-wrapper">
                                <div class="helper-p-box p-10 bg-light border"><span>p-10</span></div>
                                <div class="helper-p-box p-15 bg-light border"><span>p-15</span></div>
                                <div class="helper-p-box p-20 bg-light border"><span>p-20</span></div>
                                <div class="helper-p-box p-25 bg-light border"><span>p-25</span></div>
                                <div class="helper-p-box p-30 bg-light border"><span>p-30</span></div>
                                <div class="helper-p-box p-35 bg-light border"><span>p-35</span></div>
                                <div class="helper-p-box p-40 bg-light border"><span>p-40</span></div>
                                <div class="helper-p-box p-45 bg-light border"><span>p-45</span></div>
                                <div class="helper-p-box p-50 bg-light border"><span>p-50</span></div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#padding-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="padding-copy">&lt;div class="border-wrapper h-100 alert-light-light dark-helper"&gt;
 &lt;div class="helper-common-box helper-p-wrapper"&gt;
   &lt;div class="helper-p-box p-10 bg-light border"&gt;&lt;span&gt;p-10&lt;/span&gt;&lt;/div&gt;
   &lt;div class="helper-p-box p-15 bg-light border"&gt;&lt;span&gt;p-15&lt;/span&gt;&lt;/div&gt;
   &lt;div class="helper-p-box p-20 bg-light border"&gt;&lt;span&gt;p-20&lt;/span&gt;&lt;/div&gt;
   &lt;div class="helper-p-box p-25 bg-light border"&gt;&lt;span&gt;p-25&lt;/span&gt;&lt;/div&gt;
   &lt;div class="helper-p-box p-30 bg-light border"&gt;&lt;span&gt;p-30&lt;/span&gt;&lt;/div&gt;
   &lt;div class="helper-p-box p-35 bg-light border"&gt;&lt;span&gt;p-35&lt;/span&gt;&lt;/div&gt;
   &lt;div class="helper-p-box p-40 bg-light border"&gt;&lt;span&gt;p-40&lt;/span&gt;&lt;/div&gt;
   &lt;div class="helper-p-box p-45 bg-light border"&gt;&lt;span&gt;p-45&lt;/span&gt;&lt;/div&gt;
   &lt;div class="helper-p-box p-50 bg-light border"&gt;&lt;span&gt;p-50&lt;/span&gt;&lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Dashed Border</h5>
                        <p class="f-m-light mt-1"> Use<code> b-width-*</code> and <code> border-s-dashed</code> to dashed
                            border.</p>
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
                        <div class="helper-common-box helper-p-wrapper">
                            <div class="border-common-box border-s-dashed b-width-1">b-width-1</div>
                            <div class="border-common-box border-s-dashed b-width-2">b-width-2</div>
                            <div class="border-common-box border-s-dashed b-width-3">b-width-3</div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#dashed-border-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="dashed-border-copy">&lt;div class="helper-common-box helper-p-wrapper"&gt;
 &lt;div class="border-common-box border-s-dashed b-width-1"&gt;b-width-1&lt;/div&gt;
 &lt;div class="border-common-box border-s-dashed b-width-2"&gt;b-width-2&lt;/div&gt;
 &lt;div class="border-common-box border-s-dashed b-width-3"&gt;b-width-3&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Dotted Border</h5>
                        <p class="f-m-light mt-1"> Use the<code> b-width-*</code> and <code> border-s-dotted</code> to
                            dotted
                            border.</p>
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
                        <div class="helper-common-box helper-p-wrapper">
                            <div class="border-common-box border-s-dotted b-width-1">b-width-1</div>
                            <div class="border-common-box border-s-dotted b-width-2">b-width-2</div>
                            <div class="border-common-box border-s-dotted b-width-3">b-width-3</div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#dotted-border-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="dotted-border-copy">&lt;div class="helper-common-box helper-p-wrapper"&gt;
 &lt;div class="border-common-box border-s-dotted b-width-1"&gt;b-width-1&lt;/div&gt;
 &lt;div class="border-common-box border-s-dotted b-width-2"&gt;b-width-2&lt;/div&gt;
 &lt;div class="border-common-box border-s-dotted b-width-3"&gt;b-width-3&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Groove Border</h5>
                        <p class="f-m-light mt-1"> Use the<code> b-width-*</code> and <code> border-s-groove</code> to
                            groove
                            border.</p>
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
                        <div class="helper-common-box helper-p-wrapper">
                            <div class="border-common-box border-s-groove b-width-1">b-width-1</div>
                            <div class="border-common-box border-s-groove b-width-2">b-width-2</div>
                            <div class="border-common-box border-s-groove b-width-3">b-width-3</div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#groove-border-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="groove-border-copy">&lt;div class="helper-common-box helper-p-wrapper"&gt;
 &lt;div class="border-common-box border-s-groove b-width-1"&gt;b-width-1&lt;/div&gt;
 &lt;div class="border-common-box border-s-groove b-width-2"&gt;b-width-2&lt;/div&gt;
 &lt;div class="border-common-box border-s-groove b-width-3"&gt;b-width-3&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Ridge Border</h5>
                        <p class="f-m-light mt-1"> Use the<code> b-width-*</code> and <code> border-s-inset</code> to ridge
                            border.</p>
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
                        <div class="helper-common-box helper-p-wrapper">
                            <div class="border-common-box border-s-inset b-width-1">b-width-1</div>
                            <div class="border-common-box border-s-inset b-width-2">b-width-2</div>
                            <div class="border-common-box border-s-inset b-width-3">b-width-3</div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#ridge-border-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="ridge-border-copy">&lt;div class="helper-common-box helper-p-wrapper"&gt;
 &lt;div class="border-common-box border-s-inset b-width-1"&gt;b-width-1&lt;/div&gt;
 &lt;div class="border-common-box border-s-inset b-width-2"&gt;b-width-2&lt;/div&gt;
 &lt;div class="border-common-box border-s-inset b-width-3"&gt;b-width-3&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Only One Side Padding</h5>
                        <p class="f-m-light mt-1"> Use padding classes like: <code>p-l-* / p-r-* / p-t-* / p-b-*</code>.
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
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper h-100 alert-light-light dark-helper">
                                    <h6 class="mb-3">Padding Left</h6>
                                    <div class="common-p-box">
                                        <span>p-l-10</span><span>p-l-15</span><span>p-l-20</span><span>p-l-25</span><span>p-l-30</span><span>p-l-35</span><span>p-l-40</span><span>p-l-45</span><span>p-l-50
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper h-100 alert-light-light dark-helper">
                                    <h6 class="mb-3">Padding Right</h6>
                                    <div class="common-p-box">
                                        <span>p-r-10</span><span>p-r-15</span><span>p-r-20</span><span>p-r-25</span><span>p-r-30</span><span>p-r-35</span><span>p-r-40</span><span>p-r-45</span><span>p-r-50
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper h-100 alert-light-light dark-helper">
                                    <h6 class="mb-3">Padding Top</h6>
                                    <div class="common-p-box">
                                        <span>p-t-10</span><span>p-t-15</span><span>p-t-20</span><span>p-t-25</span><span>p-t-30</span><span>p-t-35</span><span>p-t-40</span><span>p-t-45</span><span>p-t-50
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper h-100 alert-light-light dark-helper">
                                    <h6 class="mb-3">Padding Bottom</h6>
                                    <div class="common-p-box">
                                        <span>p-b-10</span><span>p-b-15</span><span>p-b-20</span><span>p-b-25</span><span>p-b-30</span><span>p-b-35</span><span>p-b-40</span><span>p-b-45</span><span>p-b-50
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#padding-box-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="padding-box-copy">&lt;div class="row g-3"&gt;   
 &lt;div class="col-xxl-3 col-sm-6"&gt;
   &lt;div class="border-wrapper h-100 alert-light-light dark-helper"&gt;
     &lt;h6 class="mb-3"&gt;Padding Left&lt;/h6&gt;
     &lt;div class="common-p-box"&gt;
       &lt;span&gt;p-l-10&lt;/span&gt;
       &lt;span&gt;p-l-15&lt;/span&gt;
       &lt;span&gt;p-l-20&lt;/span&gt;
       &lt;span&gt;p-l-25&lt;/span&gt;
       &lt;span&gt;p-l-30&lt;/span&gt;
       &lt;span&gt;p-l-35&lt;/span&gt;
       &lt;span&gt;p-l-40&lt;/span&gt;
       &lt;span&gt;p-l-45&lt;/span&gt;
       &lt;span&gt;p-l-50&lt;/span&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xxl-3 col-sm-6"&gt;
   &lt;div class="border-wrapper h-100 alert-light-light dark-helper"&gt;
     &lt;h6 class="mb-3"&gt;Padding Right&lt;/h6&gt;
     &lt;div class="common-p-box"&gt;
       &lt;span&gt;p-r-10&lt;/span&gt;
       &lt;span&gt;p-r-15&lt;/span&gt;
       &lt;span&gt;p-r-20&lt;/span&gt;
       &lt;span&gt;p-r-25&lt;/span&gt;
       &lt;span&gt;p-r-30&lt;/span&gt;
       &lt;span&gt;p-r-35&lt;/span&gt;
       &lt;span&gt;p-r-40&lt;/span&gt;
       &lt;span&gt;p-r-45&lt;/span&gt;
       &lt;span&gt;p-r-50&lt;/span&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xxl-3 col-sm-6"&gt;
   &lt;div class="border-wrapper h-100 alert-light-light dark-helper"&gt;
     &lt;h6 class="mb-3"&gt;Padding Top&lt;/h6&gt;
     &lt;div class="common-p-box"&gt;
       &lt;span&gt;p-t-10&lt;/span&gt;
       &lt;span&gt;p-t-15&lt;/span&gt;
       &lt;span&gt;p-t-20&lt;/span&gt;
       &lt;span&gt;p-t-25&lt;/span&gt;
       &lt;span&gt;p-t-30&lt;/span&gt;
       &lt;span&gt;p-t-35&lt;/span&gt;
       &lt;span&gt;p-t-40&lt;/span&gt;
       &lt;span&gt;p-t-45&lt;/span&gt;
       &lt;span&gt;p-t-50&lt;/span&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xxl-3 col-sm-6"&gt;
   &lt;div class="border-wrapper h-100 alert-light-light dark-helper"&gt;
     &lt;h6 class="mb-3"&gt;Padding Bottom&lt;/h6&gt;
     &lt;div class="common-p-box"&gt;
       &lt;span&gt;p-b-10&lt;/span&gt;
       &lt;span&gt;p-b-15&lt;/span&gt;
       &lt;span&gt;p-b-20&lt;/span&gt;
       &lt;span&gt;p-b-25&lt;/span&gt;
       &lt;span&gt;p-b-30&lt;/span&gt;
       &lt;span&gt;p-b-35&lt;/span&gt;
       &lt;span&gt;p-b-40&lt;/span&gt;
       &lt;span&gt;p-b-45&lt;/span&gt;
       &lt;span&gt;p-b-50&lt;/span&gt;
     &lt;/div&gt;
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
                        <h5>Margins</h5>
                        <p class="f-m-light mt-1"> Use margin classes like:
                            <code>m-* [10 / 15 / 20 / 25 / 30 / 35 / 40 / 45 / 50]</code>.
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
                        <div class="gradient-border">
                            <div class="helper-common-box gap-0 mb-0">
                                <div class="helper-box m-10 border bg-light"></div><span>m-10</span>
                            </div>
                            <div class="helper-common-box gap-0 mb-0">
                                <div class="helper-box m-15 border bg-light"></div><span>m-15</span>
                            </div>
                            <div class="helper-common-box gap-0 mb-0">
                                <div class="helper-box m-20 border bg-light"></div><span>m-20</span>
                            </div>
                            <div class="helper-common-box gap-0 mb-0">
                                <div class="helper-box m-25 border bg-light"></div><span>m-25</span>
                            </div>
                            <div class="helper-common-box gap-0 mb-0">
                                <div class="helper-box m-30 border bg-light"></div><span>m-30</span>
                            </div>
                            <div class="helper-common-box gap-0 mb-0">
                                <div class="helper-box m-35 border bg-light"></div><span>m-35</span>
                            </div>
                            <div class="helper-common-box gap-0 mb-0">
                                <div class="helper-box m-40 border bg-light"></div><span>m-40</span>
                            </div>
                            <div class="helper-common-box gap-0 mb-0">
                                <div class="helper-box m-45 border bg-light"></div><span>m-45</span>
                            </div>
                            <div class="helper-common-box gap-0 mb-0">
                                <div class="helper-box m-50 border bg-light"></div><span>m-50</span>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#margin-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="margin-copy">&lt;div class="gradient-border"&gt;
 &lt;div class="helper-common-box gap-0 mb-0"&gt;
   &lt;div class="helper-box m-10 border bg-light"&gt;&lt;/div&gt;
   &lt;span&gt;m-10&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box gap-0 mb-0"&gt;
   &lt;div class="helper-box m-15 border bg-light"&gt;&lt;/div&gt;
   &lt;span&gt;m-15&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box gap-0 mb-0"&gt;
   &lt;div class="helper-box m-20 border bg-light"&gt;&lt;/div&gt;
   &lt;span&gt;m-20&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box gap-0 mb-0"&gt;
   &lt;div class="helper-box m-25 border bg-light"&gt;&lt;/div&gt;
   &lt;span&gt;m-25&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box gap-0 mb-0"&gt;
   &lt;div class="helper-box m-30 border bg-light"&gt;&lt;/div&gt;
   &lt;span&gt;m-30&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box gap-0 mb-0"&gt;
   &lt;div class="helper-box m-35 border bg-light"&gt;&lt;/div&gt;
   &lt;span&gt;m-35&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box gap-0 mb-0"&gt;
   &lt;div class="helper-box m-40 border bg-light"&gt;&lt;/div&gt;
   &lt;span&gt;m-40&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box gap-0 mb-0"&gt;
   &lt;div class="helper-box m-45 border bg-light"&gt;&lt;/div&gt;
   &lt;span&gt;m-45&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="helper-common-box gap-0 mb-0"&gt;
   &lt;div class="helper-box m-50 border bg-light"&gt;&lt;/div&gt;
   &lt;span&gt;m-50&lt;/span&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Just One Side Margin</h5>
                        <p class="f-m-light mt-1"> Use all around margin classes like:
                            <code>m-l-* / m-r-* / m-t-* / m-b-*</code>.
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
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper h-100 alert-light-light dark-helper">
                                    <h6 class="mb-3">Margin Left</h6>
                                    <div class="common-p-box">
                                        <span>m-l-10</span><span>m-l-15</span><span>m-l-20</span><span>m-l-25</span><span>m-l-30</span><span>m-l-35</span><span>m-l-40</span><span>m-l-45</span><span>m-l-50
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper h-100 alert-light-light dark-helper">
                                    <h6 class="mb-3">Margin Right</h6>
                                    <div class="common-p-box">
                                        <span>m-r-10</span><span>m-r-15</span><span>m-r-20</span><span>m-r-25</span><span>m-r-30</span><span>m-r-35</span><span>m-r-40</span><span>m-r-45</span><span>m-r-50
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper h-100 alert-light-light dark-helper">
                                    <h6 class="mb-3">Margin Top</h6>
                                    <div class="common-p-box">
                                        <span>m-t-10</span><span>m-t-15</span><span>m-t-20</span><span>m-t-25</span><span>m-t-30</span><span>m-t-35</span><span>m-t-40</span><span>m-t-45</span><span>m-t-50
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="border-wrapper h-100 alert-light-light dark-helper">
                                    <h6 class="mb-3">Margin Bottom</h6>
                                    <div class="common-p-box">
                                        <span>m-b-10</span><span>m-b-15</span><span>m-b-20</span><span>m-b-25</span><span>m-b-30</span><span>m-b-35</span><span>m-b-40</span><span>m-b-45</span><span>m-b-50
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#single-m-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="single-m-copy">&lt;div class="row g-3"&gt;   
 &lt;div class="col-xxl-3 col-sm-6"&gt;
   &lt;div class="border-wrapper h-100 alert-light-light dark-helper"&gt;
     &lt;h6 class="mb-3"&gt;Margin Left&lt;/h6&gt;
     &lt;div class="common-p-box"&gt;
       &lt;span&gt;m-l-10&lt;/span&gt;
       &lt;span&gt;m-l-15&lt;/span&gt;
       &lt;span&gt;m-l-20&lt;/span&gt;
       &lt;span&gt;m-l-25&lt;/span&gt;
       &lt;span&gt;m-l-30&lt;/span&gt;
       &lt;span&gt;m-l-35&lt;/span&gt;
       &lt;span&gt;m-l-40&lt;/span&gt;
       &lt;span&gt;m-l-45&lt;/span&gt;
       &lt;span&gt;m-l-50&lt;/span&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xxl-3 col-sm-6"&gt;
   &lt;div class="border-wrapper h-100 alert-light-light dark-helper"&gt;
     &lt;h6 class="mb-3"&gt;Margin Right&lt;/h6&gt;
     &lt;div class="common-p-box"&gt;
       &lt;span&gt;m-r-10&lt;/span&gt;
       &lt;span&gt;m-r-15&lt;/span&gt;
       &lt;span&gt;m-r-20&lt;/span&gt;
       &lt;span&gt;m-r-25&lt;/span&gt;
       &lt;span&gt;m-r-30&lt;/span&gt;
       &lt;span&gt;m-r-35&lt;/span&gt;
       &lt;span&gt;m-r-40&lt;/span&gt;
       &lt;span&gt;m-r-45&lt;/span&gt;
       &lt;span&gt;m-r-50&lt;/span&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xxl-3 col-sm-6"&gt;
   &lt;div class="border-wrapper h-100 alert-light-light dark-helper"&gt;
     &lt;h6 class="mb-3"&gt;Margin Top&lt;/h6&gt;
     &lt;div class="common-p-box"&gt;
       &lt;span&gt;m-t-10&lt;/span&gt;
       &lt;span&gt;m-t-15&lt;/span&gt;
       &lt;span&gt;m-t-20&lt;/span&gt;
       &lt;span&gt;m-t-25&lt;/span&gt;
       &lt;span&gt;m-t-30&lt;/span&gt;
       &lt;span&gt;m-t-35&lt;/span&gt;
       &lt;span&gt;m-t-40&lt;/span&gt;
       &lt;span&gt;m-t-45&lt;/span&gt;
       &lt;span&gt;m-t-50&lt;/span&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xxl-3 col-sm-6"&gt;
   &lt;div class="border-wrapper h-100 alert-light-light dark-helper"&gt;
     &lt;h6 class="mb-3"&gt;Margin Bottom&lt;/h6&gt;
     &lt;div class="common-p-box"&gt;
       &lt;span&gt;m-b-10&lt;/span&gt;
       &lt;span&gt;m-b-15&lt;/span&gt;
       &lt;span&gt;m-b-20&lt;/span&gt;
       &lt;span&gt;m-b-25&lt;/span&gt;
       &lt;span&gt;m-b-30&lt;/span&gt;
       &lt;span&gt;m-b-35&lt;/span&gt;
       &lt;span&gt;m-b-40&lt;/span&gt;
       &lt;span&gt;m-b-45&lt;/span&gt;
       &lt;span&gt;m-b-50&lt;/span&gt;
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
                        <h5>Font Sizes</h5>
                        <p class="f-m-light mt-1">Use font-size for
                            <code>f-* [14 / 16 / 18 / 20 / 22 / 24 / 26 / 28 / 30 / 32 / 34 / 36 / 38 / 40]</code>.
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
                        <div class="gradient-border">
                            <div class="font-wrapper border">
                                <div class="f-14">Font-size f-14</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-16">Font-size f-16</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-18">Font-size f-18</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-20">Font-size f-20</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-22">Font-size f-22</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-24">Font-size f-24</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-26">Font-size f-26</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-28">Font-size f-28</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-30">Font-size f-30</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-32">Font-size f-32</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-34">Font-size f-34</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-36">Font-size f-36</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-38">Font-size f-38</div>
                            </div>
                            <div class="font-wrapper border">
                                <div class="f-40">Font-size f-40</div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#fz-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="fz-copy">&lt;div class="gradient-border"&gt; 
 &lt;div class="font-wrapper border"&gt;
   &lt;div class="f-14"&gt;Font-size f-14&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="font-wrapper border"&gt;
   &lt;div class="f-16"&gt;Font-size f-16&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="font-wrapper border"&gt;
   &lt;div class="f-18"&gt;Font-size f-18&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="font-wrapper border"&gt;
   &lt;div class="f-20"&gt;Font-size f-20&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="font-wrapper border"&gt;
   &lt;div class="f-22"&gt;Font-size f-22&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="font-wrapper border"&gt;
   &lt;div class="f-24"&gt;Font-size f-24&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="font-wrapper border"&gt;
   &lt;div class="f-26"&gt;Font-size f-26&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="font-wrapper border"&gt;
   &lt;div class="f-28"&gt;Font-size f-28&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="font-wrapper border"&gt;
   &lt;div class="f-30"&gt;Font-size f-30&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="font-wrapper border"&gt;
   &lt;div class="f-32"&gt;Font-size f-32&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="font-wrapper border"&gt;
   &lt;div class="f-34"&gt;Font-size f-34&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="font-wrapper border"&gt;
   &lt;div class="f-36"&gt;Font-size f-36&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="font-wrapper border"&gt;
   &lt;div class="f-38"&gt;Font-size f-38&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="font-wrapper border"&gt;
   &lt;div class="f-40"&gt;Font-size f-40&lt;/div&gt;
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
