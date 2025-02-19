@extends('layouts.simple.master')

@section('title', 'Tooltip')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Tooltip</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Tooltip</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Tooltip</h5>
                        <p class="f-m-light mt-1"> Use <code>data-bs-title</code> to change tooltip title and
                            <code>data-bs-toggle</code> to add tooltip attribute.
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
                    <div class="card-body"><button class="example-popover btn btn-primary mb-0 me-0" type="button"
                            data-container="body" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Surprise!!! Thank you for hovering...">It's magic please hover me... </button>
                        <h5 class="mb-1 py-4 pb-0">Inline Tooltip Content</h5>
                        <p class="mb-0 c-o-light">Here, is some content about tooltips that you can set the<a
                                class="txt-primary fw-bold" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="tooltip" data-bs-original-title="popover text"> tooltip</a>inside the content
                            with
                            help of tooltip and also you can add<button
                                class="btn btn-success text-white border-0 px-3 py-1 me-0 mb-0" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="button">button </button>
                            .Tooltips
                            helps you to add more and more content. A tooltip is often used to specify extra information
                            about
                            something when the user moves the mouse pointer over an element</p>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#tooltip" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="tooltip">&lt;button class="example-popover btn btn-primary mb-0 me-0" type="button" data-container="body" data-bs-toggle="tooltip" data-bs-placement="top" title="Surprise!!! Thank you for hovering..."&gt;It's magic please hover me... &lt;/button&gt;
&lt;h5 class="mb-1 py-4 pb-0"&gt;Inline Tooltip Content&lt;/h5&gt;
&lt;p class="mb-0 c-o-light"&gt;Here, is some content about tooltips that you can set the&lt;a class="txt-primary fw-bold" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="tooltip" data-bs-original-title="popover text"&gt;tooltip&lt;/a&gt;inside the content with help of tooltip and also you can add
 &lt;button class="btn btn-success text-white border-0 px-3 py-1 me-0 mb-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="button"&gt;button &lt;/button&gt; .Tooltips helps you to add more and more content. A tooltip is often used to specify extra information about something when the user moves the mouse pointer over an element
&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Colored Tooltip </h5>
                        <p class="f-m-light mt-1"> Use <code>btn-*</code> to change dark background color and
                            <code>data-bs-placement='*' </code>to tooltip positions change.</p>
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
                        <div class="common-flex"><button class="mb-0 me-0 btn btn-primary" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Primary">Primary</button><button
                                class="mb-0 me-0 btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Secondary">Secondary</button><button class="mb-0 me-0 btn btn-warning"
                                data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Warning">Warning</button><button class="mb-0 me-0 btn btn-success"
                                data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Success">Success</button><button class="mb-0 me-0 btn btn-danger"
                                data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Danger">Danger</button><button class="mb-0 me-0 btn btn-info"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="info">Info</button>
                            <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                    data-clipboard-target="#colored-tooltip" title="Copy"><i
                                        class="icofont icofont-copy-alt"></i></button>
                                <pre class="custom-scrollbar"><code class="language-html" id="colored-tooltip">&lt;button class="mb-0 me-0 btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Primary"&gt;Primary&lt;/button&gt;
&lt;button class="mb-0 me-0 btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Secondary"&gt;Secondary&lt;/button&gt;
&lt;button class="mb-0 me-0 btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Warning"&gt;Warning&lt;/button&gt;
&lt;button class="mb-0 me-0 btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Success"&gt;Success&lt;/button&gt;
&lt;button class="mb-0 me-0 btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Danger"&gt;Danger&lt;/button&gt;
&lt;button class="mb-0 me-0 btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="info"&gt;Info&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Light Tooltips </h5>
                        <p class="f-m-light mt-1"> Use <code>button-light-*</code> to change light background color and
                            <code>data-bs-placement='*' </code>to tooltip positions change.</p>
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
                        <div class="common-flex"><button class="mb-0 me-0 btn button-light-primary"
                                data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Primary">Primary</button><button
                                class="mb-0 me-0 btn button-light-secondary" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Secondary">Secondary</button><button
                                class="mb-0 me-0 btn button-light-warning" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Warning">Warning</button><button
                                class="mb-0 me-0 btn button-light-success" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Success">Success</button><button
                                class="mb-0 me-0 btn button-light-danger" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Danger">Danger</button><button
                                class="mb-0 me-0 btn button-light-info" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Info">Info</button>
                            <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                    data-clipboard-target="#light-tooltip" title="Copy"><i
                                        class="icofont icofont-copy-alt"></i></button>
                                <pre class="custom-scrollbar"><code class="language-html" id="light-tooltip">&lt;button class="mb-0 me-0 btn button-light-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Primary"&gt;Primary&lt;/button&gt;
&lt;button class="mb-0 me-0 btn button-light-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Secondary"&gt;Secondary&lt;/button&gt;
&lt;button class="mb-0 me-0 btn button-light-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Warning"&gt;Warning&lt;/button&gt;
&lt;button class="mb-0 me-0 btn button-light-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Success"&gt;Success&lt;/button&gt;
&lt;button class="mb-0 me-0 btn button-light-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Danger"&gt;Danger&lt;/button&gt;
&lt;button class="mb-0 me-0 btn button-light-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Info"&gt;Info&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Tooltip Directions</h5>
                        <p class="f-m-light mt-1"> Use<code> btn-*</code> to change dark background color
                            and<code> data-bs-placement='*'</code>[top/right/bottom/left] to tooltip direction change.</p>
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
                        <div class="common-flex"><button class="btn btn-primary mb-0 me-0" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">Tooltip on
                                top</button><button class="btn btn-secondary mb-0 me-0" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">Tooltip on
                                right</button><button class="btn btn-success mb-0 me-0" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">Tooltip on
                                bottom</button><button class="btn btn-warning mb-0 me-0" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">Tooltip on
                                left</button>
                            <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                    data-clipboard-target="#dark-tooltip" title="Copy"><i
                                        class="icofont icofont-copy-alt"></i></button>
                                <pre class="custom-scrollbar"><code class="language-html" id="dark-tooltip">&lt;button class="btn btn-primary mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top"&gt;Tooltip on top&lt;/button&gt;
&lt;button class="btn btn-secondary mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right"&gt;Tooltip on right&lt;/button&gt;
&lt;button class="btn btn-success mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom"&gt;Tooltip on bottom&lt;/button&gt;
&lt;button class="btn btn-warning mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left"&gt;Tooltip on left&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>HTML Elements with Hover Effect</h5>
                        <p class="f-m-light mt-1"> Use <code>data-bs-html='true'</code> to change HTML title and
                            <code>data-bs-title </code> to the content under the HTML tag.
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
                        <div class="common-flex"><button class="btn bg-primary mb-0 me-0" type="button"
                                data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="top"
                                data-bs-title="&lt;em&gt;Thank&lt;/em&gt; &lt;u&gt;you&lt;/u&gt;">Notifications</button><button
                                class="btn bg-warning mb-0 me-0" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-html="true"
                                data-bs-title="&lt;b&gt;Thank&lt;/b&gt; &lt;em&gt;you&lt;/em&gt;">Alert</button><button
                                class="btn bg-danger mb-0 me-0" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-html="true"
                                data-bs-title="&lt;em&gt;Thank&lt;/em&gt; &lt;u&gt;you&lt;/u&gt;">It's
                                Danger</button><button class="btn bg-info mb-0 me-0" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true"
                                data-bs-title="&lt;b&gt;Thank&lt;/b&gt; &lt;em&gt;you&lt;/em&gt;">Coming soon</button>
                            <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                    data-clipboard-target="#hover-tooltip" title="Copy"><i
                                        class="icofont icofont-copy-alt"></i></button>
                                <pre class="custom-scrollbar"><code class="language-html" id="hover-tooltip">&lt;button class="btn bg-primary mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="top" data-bs-title="&lt;em&gt;Thank&lt;/em&gt; &lt;u&gt;you&lt;/u&gt;"&gt;Notifications&lt;/button&gt;
&lt;button class="btn bg-warning mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="&lt;b&gt;Thank&lt;/b&gt; &lt;em&gt;you&lt;/em&gt;"&gt;Alert&lt;/button&gt;
&lt;button class="btn bg-danger mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="&lt;em&gt;Thank&lt;/em&gt; &lt;u&gt;you&lt;/u&gt;"&gt;It's Danger&lt;/button&gt;
&lt;button class="btn bg-info mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="&lt;b&gt;Thank&lt;/b&gt; &lt;em&gt;you&lt;/em&gt;"&gt;Coming soon&lt;/button&gt;          </code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Outlined Tooltip</h5>
                        <p class="f-m-light mt-1"> Hover effect through fill dark color and <code>btn-outline-* </code>and
                            <code>data-bs-title </code>attribute to the content under the HTML Tag.
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
                    <div class="card-body fill-tooltip">
                        <div class="common-flex"><button class="btn btn-outline-primary mb-0 me-0" type="button"
                                data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="top"
                                data-bs-title="Tooltip Primary">Tooltip Primary</button><button
                                class="btn btn-outline-secondary mb-0 me-0" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-html="true" data-bs-title="Tooltip Secondary">Tooltip
                                Secondary</button><button class="btn btn-outline-success mb-0 me-0" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true"
                                data-bs-title="Tooltip Success">Tooltip Success</button><button
                                class="btn btn-outline-info mb-0 me-0" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-html="true" data-bs-title="Tooltip Info">Tooltip
                                Info</button>
                            <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                    data-clipboard-target="#outlined-tooltip" title="Copy"><i
                                        class="icofont icofont-copy-alt"></i></button>
                                <pre class="custom-scrollbar"><code class="language-html" id="outlined-tooltip">&lt;button class="btn btn-outline-primary mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="top" data-bs-title="Tooltip Primary"&gt;Tooltip Primary&lt;/button&gt;
&lt;button class="btn btn-outline-secondary mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="Tooltip Secondary"&gt;Tooltip Secondary&lt;/button&gt;
&lt;button class="btn btn-outline-success mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="Tooltip Success"&gt;Tooltip Success&lt;/button&gt;
&lt;button class="btn btn-outline-info mb-0 me-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="Tooltip Info"&gt;Tooltip Info&lt;/button&gt;          </code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Disabled Tooltip</h5>
                        <p class="f-m-light mt-1"> Elements with the disabled attribute aren't interactive, meaning users
                            cannot focus, hover, or click them to trigger a tooltip (or popover).
                            ideally made keyboard-focusable using <code>tabindex="0"</code>.</p>
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
                    <div class="card-body fill-tooltip">
                        <div class="common-flex"><span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip"
                                data-bs-title="Disabled tooltip"><button class="btn btn-primary" type="button"
                                    disabled="">Disabled button</button></span></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#disable-tooltip" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="disable-tooltip">&lt;span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" data-bs-title="Disabled tooltip"&gt;
 &lt;button class="btn btn-primary" type="button" disabled=""&gt;Disabled button&lt;/button&gt;
&lt;/span&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>SVG's Tooltip</h5>
                        <p class="f-m-light mt-1"> Use<code> bg-light-* </code> to change light background color and
                            <code>stroke-*</code> to change SVG colors.
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
                    <div class="card-body svg-tooltip">
                        <div class="common-flex">
                            <div class="bg-light-info" data-bs-toggle="tooltip" data-bs-html="true"
                                data-bs-placement="top" data-bs-title="Notification"><svg class="stroke-info">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#email-box') }}"></use>
                                </svg></div>
                            <div class="bg-light-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-html="true" data-bs-title="Like"><svg class="stroke-danger">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bookmark') }}"></use>
                                </svg></div>
                            <div class="bg-light-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-html="true" data-bs-title="Comment"><svg class="stroke-dark">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-msg') }}"></use>
                                </svg></div>
                            <div class="bg-light-primary" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-html="true" data-bs-title="Share"><svg class="stroke-primary">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-button') }}"></use>
                                </svg></div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#svg-tooltip" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="svg-tooltip">&lt;div class="common-flex"&gt;
 &lt;div class="bg-light-info" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="top" data-bs-title="Notification"&gt;
   &lt;svg class="stroke-info"&gt;
     &lt;use href="{{ asset('assets/svg/icon-sprite.svg#email-box') }}"&gt;&lt;/use&gt;
   &lt;/svg&gt;
 &lt;/div&gt;
 &lt;div class="bg-light-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="Like"&gt;
   &lt;svg class="stroke-danger"&gt;
     &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bookmark') }}"&gt;&lt;/use&gt;
   &lt;/svg&gt;
 &lt;/div&gt;
 &lt;div class="bg-light-dark" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="Comment"&gt;
   &lt;svg class="stroke-dark"&gt;
     &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-msg') }}"&gt;&lt;/use&gt;
   &lt;/svg&gt;
 &lt;/div&gt;
 &lt;div class="bg-light-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="Share"&gt;
   &lt;svg class="stroke-primary"&gt;
     &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-button') }}"&gt;&lt;/use&gt;
   &lt;/svg&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Icons Tooltip</h5>
                        <p class="f-m-light mt-1"> Use <code>btn-outline-* </code>class to alter the outline's color, and
                            you
                            can position the tooltip in any swing.</p>
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
                    <div class="card-body svg-tooltip">
                        <div class="common-flex">
                            <div class="btn-outline-primary" data-bs-toggle="tooltip" data-bs-html="true"
                                data-bs-placement="top" data-bs-title="Notification"><i
                                    class="icofont icofont-envelope"></i>
                            </div>
                            <div class="btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-html="true" data-bs-title="Message"><i
                                    class="icofont icofont-ui-text-loading"></i></div>
                            <div class="btn-outline-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-html="true" data-bs-title="Send"><i class="icofont icofont-location-arrow"></i>
                            </div>
                            <div class="btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-html="true" data-bs-title="Like"><i class="icofont icofont-heart-alt"></i></div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#icons-tooltip" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="icons-tooltip">&lt;div class="common-flex"&gt;
 &lt;div class="btn-outline-primary" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="top" data-bs-title="Notification"&gt;
   &lt;i class="icofont icofont-envelope"&gt;&lt;/i&gt;
 &lt;/div&gt;
 &lt;div class="btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="Message"&gt;
   &lt;i class="icofont icofont-ui-text-loading"&gt;&lt;/i&gt;
 &lt;/div&gt;
 &lt;div class="btn-outline-dark" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="Send"&gt;
   &lt;i class="icofont icofont-location-arrow"&gt;&lt;/i&gt;
 &lt;/div&gt;
 &lt;div class="btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="Like"&gt;
   &lt;i class="icofont icofont-heart-alt"&gt;&lt;/i&gt;
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
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
