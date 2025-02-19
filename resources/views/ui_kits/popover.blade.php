@extends('layouts.simple.master')

@section('title', 'Popover')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Popover</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Popover</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row popover-main">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Popover</h5>
                        <p class="f-m-light mt-1"> Use common class
                            <code>data-bs-toggle='popover' </code>and hover to use the
                            <code>data-bs-trigger='hover'</code>attributes.</p>
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
                    <div class="card-body common-flex popover-wrapper"><button
                            class="btn btn-primary example-popover mb-0 me-0" type="button" data-bs-toggle="popover"
                            data-bs-placement="left" title="Popover Title"
                            data-bs-content="And here's some amazing content. It's very engaging. Right?">Hurry
                            Up! </button><button class="example-popover btn btn-success mb-0 me-0" type="button"
                            data-bs-trigger="hover" data-container="body" data-bs-toggle="popover"
                            data-bs-placement="bottom" title="Hover Popover" data-offset="-20px -20px"
                            data-bs-content=" Several utility instruction sets have been featured in the Bootstrap 4 to promote very easy learning for beginners in the business of web building.">Hover
                            Tooltip</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#hover-variations" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="hover-variations">&lt;button class="btn btn-primary example-popover mb-0 me-0" type="button" data-bs-toggle="popover" data-bs-placement="left" title="Popover Title" data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;Hurry Up!&lt;/button&gt;
&lt;button class="example-popover btn btn-success mb-0 me-0" type="button" data-bs-trigger="hover" data-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title="Hover Popover" data-offset="-20px -20px" data-bs-content=" Several utility instruction sets have been featured in the Bootstrap 4 to promote very easy learning for beginners in the business of web building."&gt;Hover Tooltip&lt;/button&gt;               </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Disabled Elements</h5>
                        <p class="f-m-light mt-1"> Use<code> data-bs-toggle="*"</code> to set disabled
                            popover. </p>
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
                    <div class="card-body common-flex popover-wrapper"><span class="d-inline-block" tabindex="0"
                            data-bs-toggle="popover" data-bs-trigger="hover focus" title="Disable Popover Title"
                            data-bs-content="And here's some amazing content. It's very engaging. Right?"><button
                                class="btn btn-primary" type="button" disabled="">Disabled
                                Button</button></span>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#disable-popover" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="disable-popover">&lt;div class="card-body common-flex popover-wrapper"&gt;
 &lt;span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" title="Disable Popover Title" data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;
     &lt;button class="btn btn-primary" type="button" disabled=""&gt;Disabled Button&lt;/button&gt;
 &lt;/span&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Delay Popover</h5>
                        <p class="f-m-light mt-1"> Use<code> data-bs-delay="{value}"</code> to set delay
                            popover.</p>
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
                    <div class="card-body common-flex popover-wrapper"><button
                            class="btn btn-primary example-popover mb-0 me-0" type="button" data-bs-toggle="popover"
                            data-bs-placement="right" title="Popover Title"
                            data-bs-delay="{&quot;show&quot;:1500,&quot;hide&quot;:1800}"
                            data-bs-content="And here's some amazing content. It's very engaging. Right?">Delay
                            Popover</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#delay-popover" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="delay-popover">&lt;button class="btn btn-primary example-popover mb-0 me-0" type="button" data-bs-toggle="popover" data-bs-placement="right" title="Popover Title" data-bs-delay="{&quot;show&quot;:1500,&quot;hide&quot;:1800}" data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;Delay Popover&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Dismiss Popover</h5>
                        <p class="f-m-light mt-1"> Use<code> data-bs-dismiss='*'</code> to set dismiss
                            popover.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-"></i></li>
                                <li><i class="icofont icofont-error close-card"> </i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body common-flex popover-wrapper"><a class="btn btn-danger popover-dismiss"
                            tabindex="0" role="button" data-bs-toggle="popover" data-bs-trigger="focus"
                            title="Dismissible Popover" data-bs-title="Dismissible Popover" data-bs-dismiss="true"
                            data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible
                            Popover</a>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#dismiss-popover" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="dismiss-popover">&lt;a class="btn btn-danger popover-dismiss" tabindex="0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible Popover" data-bs-title="Dismissible Popover" data-bs-dismiss="true" data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;Dismissible Popover&lt;/a&gt;     </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Popover Directions</h5>
                        <p class="f-m-light mt-1"> Use<code> data-bs-placement='*'</code>
                            [top/left/bottom/top] to change directions.</p>
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
                    <div class="card-body common-flex popover-wrapper"><button
                            class="example-popover btn btn-warning mb-0 me-0" type="button" data-container="body"
                            data-bs-toggle="popover" data-bs-placement="top" title="Top Popover"
                            data-bs-content="Popovers need the tooltip plugin considering that a dependency.">Popover
                            on Top</button><button class="example-popover btn btn-danger mb-0 me-0" type="button"
                            data-container="body" data-bs-toggle="popover" data-bs-placement="right"
                            title="Right Popover"
                            data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself.">Popover
                            on Right</button><button class="example-popover btn btn-info mb-0 me-0" type="button"
                            data-container="body" data-bs-toggle="popover" data-bs-placement="bottom"
                            title="Bottom Popover"
                            data-bs-content="Identify container:to evade rendering problems in more complex components (like Bootstrap input groups, button groups, etc).">Popover
                            on Bottom</button><button class="example-popover btn btn-dark mb-0 me-0" type="button"
                            data-container="body" data-bs-toggle="popover" data-bs-placement="left" title="Left Popover"
                            data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself.">Popover
                            on Left</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#direction-variations" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="direction-variations">&lt;button class="example-popover btn btn-warning mb-0 me-0" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="top" title="Top Popover" data-bs-content="Popovers need the tooltip plugin considering that a dependency."&gt;Popover on Top&lt;/button&gt;
&lt;button class="example-popover btn btn-danger mb-0 me-0" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="right" title="Right Popover" data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself."&gt;Popover on Right&lt;/button&gt;
&lt;button class="example-popover btn btn-info mb-0 me-0" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title="Bottom Popover" data-bs-content="Identify container:to evade rendering problems in more complex components (like Bootstrap input groups, button groups, etc)."&gt;Popover on Bottom&lt;/button&gt;
&lt;button class="example-popover btn btn-dark mb-0 me-0" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="left" title="Left Popover" data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself."&gt;Popover on Left&lt;/button&gt;   </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Popover Offsets </h5>
                        <p class="f-m-light mt-1"> Use<code> data-bs-offset="*,*"</code> through set popover
                            offset. </p>
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
                    <div class="card-body common-flex popover-wrapper"><button class="btn btn-secondary mb-0 me-0"
                            type="button" data-bs-offset="50,0" data-bs-toggle="popover" data-bs-delay-show="5000"
                            title="Popover Title"
                            data-bs-content="And here's some amazing content. It's very engaging. Right?"
                            data-kt-initialized="1">Popover Offset 50</button><button
                            class="example-popover btn btn-dark mb-0 me-0" type="button" data-bs-offset="-50,0"
                            data-container="body" data-bs-toggle="popover" data-bs-placement="left"
                            title="Popover Title"
                            data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself.">Popover
                            Offset -50</button>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#offset-variations" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="offset-variations">&lt;button class="btn btn-secondary mb-0 me-0" type="button" data-bs-offset="50,0" data-bs-toggle="popover" data-bs-delay-show="5000" title="Popover Title" data-bs-content="And here's some amazing content. It's very engaging. Right?" data-kt-initialized="1"&gt;Popover Offset 50&lt;/button&gt;
&lt;button class="example-popover btn btn-dark mb-0 me-0" type="button" data-bs-offset="-50,0" data-container="body" data-bs-toggle="popover" data-bs-placement="left" title="Popover Title" data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself."&gt;Popover Offset -50&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/popover-custom.js') }}"></script>
@endsection
