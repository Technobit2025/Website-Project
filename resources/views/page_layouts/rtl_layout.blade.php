@extends('layouts.simple.master')

@section('title', 'RTL')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
 <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>RTL Layout</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item">Page Layout</li>
                                    <li class="breadcrumb-item active"> RTL Layout</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div><!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card alert alert-primary" role="alert">
                                <h5 class="txt-light">Tip!</h5>
                                <p class="txt-light">Add the dir="rtl" to the html tag to get this layout.</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>How to use it?</h5>
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
                                    <h5>Step 1</h5>
                                    <p>On this layout, First of all you have to add the class rtl attribute in body tag
                                    </p>
                                    <h5>Step 2</h5>
                                    <p>Contents are change right to left from left to right respectively</p>
                                    <h5>Step 3</h5>
                                    <p>when you want to change spacing left to right at that right left spacing you have
                                        to unset css and apply right spacing in css</p>
                                    <h5>Step 4</h5>
                                    <p>Sometimes js are not change directly with text-align css,so that time you have to
                                        copy js and change the class as rtl="true".</p>
                                    <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head" title="Copy"><i
                                                class="icofont icofont-copy-alt"></i></button>
                                        <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;h5&gt;Step 1&lt;/h5&gt;
&lt;p&gt;On this layout, First of all you have to add the class rtl in body tag&lt;/p&gt;
&lt;h5&gt;Step 2&lt;/h5&gt;
&lt;p&gt;Contents are change right to left from left to right respectively&lt;/p&gt;
&lt;h5&gt;Step 3&lt;/h5&gt;
&lt;p&gt;when you want to change spacing left to right at that right left spacing you have to unset css and apply right spacing in css&lt;/p&gt;
&lt;h5&gt;Step 4&lt;/h5&gt;
&lt;p&gt;Sometimes js are not change directly with text-align css,so that time you have to copy js and change the class as rtl="true".&lt;/p&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <h6 class="mb-0">Card Footer</h6>
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
