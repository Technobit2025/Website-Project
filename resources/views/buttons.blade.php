@extends('layouts.simple.master')

@section('title', 'Buttons')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Buttons</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Buttons</li>
                        <li class="breadcrumb-item active">Buttons</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Flat Buttons</h5>
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
                        <p class="f-m-light mt-1">Use<code> btn-square</code> class for square button.</p>
                    </div>
                    <div class="card-body common-flex">
                        <button class="btn btn-square btn-primary">Primary Button</button>
                        <button class="btn btn-square btn-secondary">Secondary Button</button>
                        <button class="btn btn-square btn-success">Success Button</button>
                        <button class="btn btn-square btn-info">Info Button</button>
                        <button class="btn btn-square btn-warning">Warning Button</button>
                        <button class="btn btn-square btn-danger">Danger Button</button>
                        <button class="btn btn-square btn-light">Light Button</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head1">&lt;div class="card-body common-flex"&gt;
 &lt;button class="btn btn-square btn-primary"&gt;Primary Button&lt;/button&gt;
 &lt;button class="btn btn-square btn-secondary"&gt;Secondary Button&lt;/button&gt;
 &lt;button class="btn btn-square btn-success"&gt;Success Button&lt;/button&gt;
 &lt;button class="btn btn-square btn-info"&gt;Info Button&lt;/button&gt;
 &lt;button class="btn btn-square btn-warning"&gt;Warning Button&lt;/button&gt;
 &lt;button class="btn btn-square btn-danger"&gt;Danger Button&lt;/button&gt;
 &lt;button class="btn btn-square btn-light"&gt;Light Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Default Buttons</h5>
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
                        <p class="f-m-light mt-1">Use<code> btn </code>class to set default buttons and set background color
                            like this : <code>bg-* [primary/secondary..]. </code></p>
                    </div>
                    <div class="card-body common-flex">
                        <button class="btn btn-primary" type="button" data-bs-toggle="tooltip"
                            title="btn btn-primary">Primary Button</button>
                        <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip"
                            title="btn btn-secondary">Secondary Button</button>
                        <button class="btn btn-success" type="button" data-bs-toggle="tooltip"
                            title="btn btn-success">Success Button</button>
                        <button class="btn btn-info" type="button" data-bs-toggle="tooltip" title="btn btn-info">Info
                            Button</button>
                        <button class="btn btn-warning" type="button" data-bs-toggle="tooltip"
                            title="btn btn-warning">Warning Button</button>
                        <button class="btn btn-danger" type="button" data-bs-toggle="tooltip" title="btn btn-danger">Danger
                            Button</button>
                        <button class="btn btn-light" type="button" data-bs-toggle="tooltip" title="btn btn-light">Light
                            Button</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head2">&lt;div class="card-body common-flex"&gt;
 &lt;button class="btn btn-primary" type="button" data-bs-toggle="tooltip" title="btn btn-primary"&gt;Primary Button&lt;/button&gt;
 &lt;button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="btn btn-secondary"&gt;Secondary Button&lt;/button&gt;
 &lt;button class="btn btn-success" type="button" data-bs-toggle="tooltip" title="btn btn-success"&gt;Success Button&lt;/button&gt;
 &lt;button class="btn btn-info" type="button" data-bs-toggle="tooltip" title="btn btn-info"&gt;Info Button&lt;/button&gt;
 &lt;button class="btn btn-warning" type="button" data-bs-toggle="tooltip" title="btn btn-warning"&gt;Warning Button&lt;/button&gt;
 &lt;button class="btn btn-danger" type="button" data-bs-toggle="tooltip" title="btn btn-danger"&gt;Danger Button&lt;/button&gt;
 &lt;button class="btn btn-light" type="button" data-bs-toggle="tooltip" title="btn btn-light"&gt;Light Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Button Sizes</h5>
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
                        <p class="f-m-light mt-1">Use<code> btn-lg, btn-sm, btn-xs </code>for sizes of buttons</p>
                    </div>
                    <div class="card-body common-flex align-items-center buttons-box">
                        <button class="btn button-light-primary btn-lg b-r-8">Large button</button>
                        <button class="btn button-light-secondary b-r-8">Default button</button>
                        <button class="btn button-light-warning btn-sm b-r-8">Small button</button>
                        <button class="btn button-light-success btn-xs b-r-6">Extra small button</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head3">&lt;div class="card-body common-flex align-items-center buttons-box"&gt;
 &lt;button class="btn button-light-primary btn-lg b-r-8"&gt;Large button&lt;/button&gt;
 &lt;button class="btn button-light-secondary b-r-8"&gt;Default button&lt;/button&gt;
 &lt;button class="btn button-light-warning btn-sm b-r-8"&gt;Small button&lt;/button&gt;
 &lt;button class="btn button-light-success btn-xs b-r-6"&gt;Extra small button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Outline Button Sizes</h5>
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
                        <p class="f-m-light mt-1">Use <code>button-lg, button-sm, and button-xs </code>for size, and use
                            the <code>"outline-*" </code>class for outline colors.</p>
                    </div>
                    <div class="card-body common-flex align-items-center">
                        <button class="btn btn-outline-primary btn-lg b-r-8">Large button</button>
                        <button class="btn btn-outline-secondary b-r-8">Default button</button>
                        <button class="btn btn-outline-warning btn-sm b-r-8">Small button</button>
                        <button class="btn btn-outline-success btn-xs b-r-6">Extra small button</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head4">&lt;div class="card-body common-flex align-items-center"&gt;
 &lt;button class="btn btn-outline-primary btn-lg b-r-8"&gt;Large button&lt;/button&gt;
 &lt;button class="btn btn-outline-secondary b-r-8"&gt;Default button&lt;/button&gt;
 &lt;button class="btn btn-outline-warning btn-sm b-r-8"&gt;Small button&lt;/button&gt;
 &lt;button class="btn btn-outline-success btn-xs b-r-6"&gt;Extra small button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Rounded Buttons</h5>
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
                        <p class="f-m-light mt-1">Use<code> btn-pill</code> class for rounded buttons.</p>
                    </div>
                    <div class="card-body common-flex buttons-box">
                        <button class="btn btn-pill button-light-primary">Contacts</button>
                        <button class="btn btn-pill button-light-dark">Users</button>
                        <button class="btn btn-pill button-light-success">Chats</button>
                        <button class="btn btn-pill button-light-info">Animation</button>
                        <button class="btn btn-pill button-light-warning">Widgets</button>
                        <button class="btn btn-pill button-light-danger">Project</button>
                        <button class="btn btn-pill button-light-light">Icons</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head5">&lt;div class="card-body common-flex buttons-box"&gt;
 &lt;button class="btn btn-pill button-light-primary"&gt;Contacts&lt;/button&gt;
 &lt;button class="btn btn-pill button-light-dark"&gt;Users&lt;/button&gt;
 &lt;button class="btn btn-pill button-light-success"&gt;Chats&lt;/button&gt;
 &lt;button class="btn btn-pill button-light-info"&gt;Animation&lt;/button&gt;
 &lt;button class="btn btn-pill button-light-warning"&gt;Widgets&lt;/button&gt;
 &lt;button class="btn btn-pill button-light-danger"&gt;Project&lt;/button&gt;
 &lt;button class="btn btn-pill button-light-light"&gt;Icons&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Outline Rounded Buttons</h5>
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
                        <p class="f-m-light mt-1">Use<code> btn-pill</code> and <code> btn-outline-*</code> class for
                            outline with buttons.</p>
                    </div>
                    <div class="card-body common-flex">
                        <button class="btn btn-pill btn-outline-primary">Contacts</button>
                        <button class="btn btn-pill btn-outline-secondary">Users</button>
                        <button class="btn btn-pill btn-outline-success">Chats</button>
                        <button class="btn btn-pill btn-outline-info">Animation</button>
                        <button class="btn btn-pill btn-outline-warning">Widgets</button>
                        <button class="btn btn-pill btn-outline-danger">Project</button>
                        <button class="btn btn-pill btn-outline-light">Icons</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head6"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head6">&lt;div class="card-body common-flex"&gt;
 &lt;button class="btn btn-pill btn-outline-primary"&gt;Contacts&lt;/button&gt;
 &lt;button class="btn btn-pill btn-outline-secondary"&gt;Users&lt;/button&gt;
 &lt;button class="btn btn-pill btn-outline-success"&gt;Chats&lt;/button&gt;
 &lt;button class="btn btn-pill btn-outline-info"&gt;Animation&lt;/button&gt;
 &lt;button class="btn btn-pill btn-outline-warning"&gt;Widgets&lt;/button&gt;
 &lt;button class="btn btn-pill btn-outline-danger"&gt;Project&lt;/button&gt;
 &lt;button class="btn btn-pill btn-outline-light"&gt;Icons&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Rounded Sizes</h5>
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
                        <p class="f-m-light mt-1">Use<code> btn-lg, btn-sm, btn-xs </code>for sizes of buttons</p>
                    </div>
                    <div class="card-body common-flex align-items-center">
                        <button class="btn btn-pill btn-primary btn-lg">Large button</button>
                        <button class="btn btn-pill btn-secondary">Default button</button>
                        <button class="btn btn-pill btn-warning btn-sm">Small button</button>
                        <button class="btn btn-pill btn-success btn-xs">Extra small button</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head7"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head7">&lt;div class="card-body common-flex align-items-center"&gt;
 &lt;button class="btn btn-pill btn-primary btn-lg"&gt;Large button&lt;/button&gt;
 &lt;button class="btn btn-pill btn-secondary"&gt;Default button&lt;/button&gt;
 &lt;button class="btn btn-pill btn-warning btn-sm"&gt;Small button&lt;/button&gt;
 &lt;button class="btn btn-pill btn-success btn-xs"&gt;Extra small button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Outline Rounded Sizes</h5>
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
                        <p class="f-m-light mt-1">Use<code> btn-lg, btn-sm, btn-xs </code>for sizes of buttons</p>
                    </div>
                    <div class="card-body common-flex align-items-center">
                        <button class="btn btn-pill btn-outline-primary btn-lg">Large button</button>
                        <button class="btn btn-pill btn-outline-secondary">Default button</button>
                        <button class="btn btn-pill btn-outline-warning btn-sm">Small button</button>
                        <button class="btn btn-pill btn-outline-success btn-xs">Extra small button</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head8"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head8">&lt;div class="card-body common-flex align-items-center"&gt;
 &lt;button class="btn btn-pill btn-outline-primary btn-lg"&gt;Large button&lt;/button&gt;
 &lt;button class="btn btn-pill btn-outline-secondary"&gt;Default button&lt;/button&gt;
 &lt;button class="btn btn-pill btn-outline-warning btn-sm"&gt;Small button&lt;/button&gt;
 &lt;button class="btn btn-pill btn-outline-success btn-xs"&gt;Extra small button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Disabled Buttons</h5>
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
                        <p class="f-m-light mt-1">Use<code> disabled</code> class or <code>disabled="disabled"</code>
                            attribute for disabled button</p>
                    </div>
                    <div class="card-body common-flex">
                        <button class="btn btn-primary disabled" type="button">I'm disabled</button>
                        <button class="btn btn-pill btn-warning disabled" type="button">Having problems</button>
                        <button class="btn btn-outline-primary disabled" type="button">Inaccessible</button>
                        <button class="btn btn-pill btn-outline-warning disabled" type="button">Disabled</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head9"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head9">&lt;div class="card-body common-flex"&gt;
 &lt;button class="btn btn-primary disabled" type="button"&gt;I'm disabled&lt;/button&gt;
 &lt;button class="btn btn-pill btn-warning disabled" type="button"&gt;Having problems&lt;/button&gt;
 &lt;button class="btn btn-outline-primary disabled" type="button"&gt;Inaccessible&lt;/button&gt;
 &lt;button class="btn btn-pill btn-outline-warning disabled" type="button"&gt;Disabled&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Icons Buttons</h5>
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
                        <p class="f-m-light mt-1">Use <code>btn-square </code>and <code>btn-pill </code>class for icons
                            buttons.</p>
                    </div>
                    <div class="card-body common-flex visual-button">
                        <button class="btn b-ln-height btn-primary btn-square"><i data-feather="help-circle"></i></button>
                        <button class="btn b-ln-height btn-secondary btn-square"><i data-feather="clock"></i></button>
                        <button class="btn b-ln-height btn-warning"><i data-feather="loader"></i></button>
                        <button class="btn b-ln-height button-light-primary"><i data-feather="radio"></i></button>
                        <button class="btn-pill button-light-secondary"><i data-feather="loader"></i></button>
                        <button class="btn-pill button-light-warning"><i data-feather="radio"></i></button>
                        <button class="btn b-ln-height btn-outline-primary"><i data-feather="radio"></i></button>
                        <button class="btn-pill btn-outline-secondary border border-secondary"><i
                                data-feather="loader"></i></button>
                        <button class="btn-pill btn-outline-warning border border-warning"><i
                                data-feather="radio"></i></button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#icon-btn-copy"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="icon-btn-copy">&lt;div class="card-body common-flex visual-button"&gt;
 &lt;button class="btn b-ln-height btn-primary btn-square"&gt;&lt;i data-feather="help-circle"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button class="btn b-ln-height btn-secondary btn-square"&gt;&lt;i data-feather="clock"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button class="btn b-ln-height btn-warning"&gt;&lt;i data-feather="loader"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button class="btn b-ln-height button-light-primary"&gt;&lt;i data-feather="radio"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button class="btn-pill button-light-secondary"&gt;&lt;i data-feather="loader"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button class="btn-pill button-light-warning"&gt;&lt;i data-feather="radio"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button class="btn b-ln-height btn-outline-primary"&gt;&lt;i data-feather="radio"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button class="btn-pill btn-outline-secondary border border-secondary"&gt;&lt;i data-feather="loader"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button class="btn-pill btn-outline-warning border border-warning"&gt;&lt;i data-feather="radio"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Icons with Title Buttons</h5>
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
                        <p class="f-m-light mt-1">Use<code> btn-square , btn-pill , button-light-* , btn-* , .btn-outline-*
                                , border-*</code> for icons with title buttons.</p>
                    </div>
                    <div class="card-body common-flex visual-button visual-button1">
                        <button class="btn b-ln-height btn-secondary btn-square"><i
                                data-feather="clock"></i><span>Secondary</span></button>
                        <button class="btn b-ln-height btn-warning"><i
                                data-feather="alert-triangle"></i><span>Warning</span></button>
                        <button class="btn-pill button-light-success"><i
                                data-feather="check-square"></i><span>Success</span></button>
                        <button class="btn b-ln-height btn-outline-info"><i
                                data-feather="volume-1"></i><span>Info</span></button>
                        <button class="btn-pill btn-outline-primary border border-primary"><i
                                data-feather="loader"></i><span>Primary</span></button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#icon-title-btn-copy"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="icon-title-btn-copy">&lt;div class="card-body common-flex visual-button visual-button1"&gt;
 &lt;button class="btn b-ln-height btn-secondary btn-square"&gt;&lt;i data-feather="clock"&gt;&lt;/i&gt;&lt;span&gt;Secondary&lt;/span&gt;&lt;/button&gt;
 &lt;button class="btn b-ln-height btn-warning"&gt;&lt;i data-feather="alert-triangle"&gt;&lt;/i&gt;&lt;span&gt;Warning&lt;/span&gt;&lt;/button&gt;
 &lt;button class="btn-pill button-light-success"&gt;&lt;i data-feather="check-square"&gt;&lt;/i&gt;&lt;span&gt;Success&lt;/span&gt;&lt;/button&gt;
 &lt;button class="btn b-ln-height btn-outline-info"&gt;&lt;i data-feather="volume-1"&gt;&lt;/i&gt;&lt;span&gt;Info&lt;/span&gt;&lt;/button&gt;
 &lt;button class="btn-pill btn-outline-primary border border-primary"&gt;&lt;i data-feather="loader"&gt;&lt;/i&gt;&lt;span&gt;Primary&lt;/span&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Dashed Border</h5>
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
                        <p class="f-m-light mt-1">Use <code>border-dashed-*</code> &<code> txt-*</code> for dashed border.
                        </p>
                    </div>
                    <div class="card-body common-flex">
                        <button class="btn border-dashed-primary">Primary</button>
                        <button class="btn border-dashed-secondary">Secondary</button>
                        <button class="btn border-dashed-success">Success</button>
                        <button class="btn border-dashed-info">Info</button>
                        <button class="btn border-dashed-warning">Warning</button>
                        <button class="btn border-dashed-danger">Danger</button>
                        <button class="btn border-dashed-dark">Dark</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#dash-border-btn-copy"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="dash-border-btn-copy">&lt;div class="card-body common-flex"&gt;
 &lt;button class="btn border-dashed-primary"&gt;Primary&lt;/button&gt;
 &lt;button class="btn border-dashed-secondary"&gt;Secondary&lt;/button&gt;
 &lt;button class="btn border-dashed-success"&gt;Success&lt;/button&gt;
 &lt;button class="btn border-dashed-info"&gt;Info&lt;/button&gt;
 &lt;button class="btn border-dashed-warning"&gt;Warning&lt;/button&gt;
 &lt;button class="btn border-dashed-danger"&gt;Danger&lt;/button&gt;
 &lt;button class="btn border-dashed-dark"&gt;Dark&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Loader Buttons</h5>
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
                        <p class="f-m-light mt-1">Use <code>border-dashed-*</code> &<code> loader-buttons</code> for loader
                            buttons.</p>
                    </div>
                    <div class="card-body common-flex loader-buttons">
                        <button class="btn border-dashed-primary">Initiating Connection...<i
                                class="fa-solid fa-circle-notch fa-spin"></i></button>
                        <button class="btn border-dashed-secondary">Spooling Data...<i
                                class="fa-solid fa-arrows-rotate fa-spin"></i></button>
                        <button class="btn border-dashed-success">Compiling Request...<i
                                class="fa-solid fa-spinner fa-spin-pulse"></i></button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#loader-btn-copy"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="loader-btn-copy">&lt;div class="card-body common-flex loader-buttons"&gt;
 &lt;button class="btn border-dashed-primary"&gt;Initiating Connection...&lt;i class="fa fa-spin fa-circle-o-notch"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button class="btn border-dashed-secondary"&gt;Spooling Data...&lt;i class="fa fa-solid fa-arrows-rotate fa-spin"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button class="btn border-dashed-success"&gt;Compiling Request...&lt;i class="fa-solid fa-spinner fa-spin-pulse"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Ripple Button</h5>
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
                        <p class="f-m-light mt-1">Use<code> ripple-button</code> for ripple animation button.</p>
                    </div>
                    <div class="card-body common-flex">
                        <button class="btn btn-primary ripple-button">Ripple Button</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#ripple-btn-copy"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="ripple-btn-copy">&lt;div class="card-body common-flex ripple-button"&gt;
 &lt;button class="btn btn-primary ripple-button"&gt;Ripple Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Button Groups</h5>
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
                        <p class="f-m-light mt-1">Wrap a series of buttons with <code>btn </code>in <code>btn-group </code>
                            and for custom class used for sizes: <code>btn-lg </code>& <code>btn-sm</code>.</p>
                    </div>
                    <div class="card-body btn-groups">
                        <div class="row g-3">
                            <div class="col-xxl-4 col-md-6 box-col-6">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <h6 class="sub-title fw-bold">Button Group Variation</h6>
                                    <div class="button-wrapper button-variation">
                                        <div class="btn-group btn-group-square" role="group"
                                            aria-label="Basic example">
                                            <button class="btn btn-primary" type="button">Left</button>
                                            <button class="btn button-light-primary" type="button">Middle</button>
                                            <button class="btn btn-primary" type="button">Right</button>
                                        </div>
                                        <div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
                                            <button class="btn button-light-primary" type="button">Left</button>
                                            <button class="btn btn-primary" type="button">Middle</button>
                                            <button class="btn button-light-primary" type="button">Right</button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button class="btn btn-primary" type="button">Left</button>
                                            <button class="btn button-light-primary" type="button">Middle</button>
                                            <button class="btn btn-primary" type="button">Right</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6 box-col-6">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <h6 class="sub-title fw-bold">Outline Button Group</h6>
                                    <div class="button-wrapper button-outlined">
                                        <div class="btn-group btn-group-square" role="group"
                                            aria-label="Basic outlined example">
                                            <button class="btn btn-outline-primary" type="button"><i
                                                    data-feather="arrow-left"></i></button>
                                            <button class="btn btn-outline-primary" type="button"><i
                                                    data-feather="arrow-up"></i></button>
                                            <button class="btn btn-outline-primary" type="button"><i
                                                    data-feather="arrow-right"></i></button>
                                        </div>
                                        <div class="btn-group btn-group-pill" role="group"
                                            aria-label="Basic outlined example">
                                            <button class="btn btn-outline-primary" type="button"> <i
                                                    data-feather="arrow-left-circle"></i></button>
                                            <button class="btn btn-outline-primary" type="button"><i
                                                    data-feather="arrow-up-circle"></i></button>
                                            <button class="btn btn-outline-primary" type="button"><i
                                                    data-feather="arrow-right-circle"></i></button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <button class="btn btn-outline-primary" type="button"> <i
                                                    data-feather="align-left"></i></button>
                                            <button class="btn btn-outline-primary" type="button"><i
                                                    data-feather="align-center"></i></button>
                                            <button class="btn btn-outline-primary" type="button"><i
                                                    data-feather="align-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-12 box-col-12">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <h6 class="sub-title fw-bold">Button Group Sizes</h6>
                                    <div class="button-wrapper">
                                        <div class="btn-group" role="group" aria-label="Large button group">
                                            <button class="btn btn-outline-primary btn-lg" type="button">Left</button>
                                            <button class="btn btn-outline-primary btn-lg" type="button">Middle</button>
                                            <button class="btn btn-outline-primary btn-lg" type="button">Right</button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Default button group">
                                            <button class="btn btn-outline-primary" type="button">Left</button>
                                            <button class="btn btn-outline-primary" type="button">Middle</button>
                                            <button class="btn btn-outline-primary" type="button">Right</button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Small buttongroup">
                                            <button class="btn btn-outline-primary btn-sm" type="button">Left</button>
                                            <button class="btn btn-outline-primary btn-sm" type="button">Middle</button>
                                            <button class="btn btn-outline-primary btn-sm" type="button">Right</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head11"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head11">&lt;div class="card-body btn-groups"&gt;
 &lt;div class="row g-3"&gt;
   &lt;div class="col-xxl-4 col-md-6 box-col-6"&gt;
     &lt;div class="card-wrapper border rounded-3 h-100"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Button Group Variation&lt;/h6&gt;
       &lt;div class="button-wrapper button-variation"&gt;
         &lt;div class="btn-group btn-group-square" role="group" aria-label="Basic example"&gt;
           &lt;button class="btn btn-primary" type="button"&gt;Left&lt;/button&gt;
           &lt;button class="btn button-light-primary" type="button"&gt;Middle&lt;/button&gt;
           &lt;button class="btn btn-primary" type="button"&gt;Right&lt;/button&gt;
         &lt;/div&gt;
         &lt;div class="btn-group btn-group-pill" role="group" aria-label="Basic example"&gt;
           &lt;button class="btn button-light-primary" type="button"&gt;Left&lt;/button&gt;
           &lt;button class="btn btn-primary" type="button"&gt;Middle&lt;/button&gt;
           &lt;button class="btn button-light-primary" type="button"&gt;Right&lt;/button&gt;
         &lt;/div&gt;
         &lt;div class="btn-group" role="group" aria-label="Basic example"&gt;
           &lt;button class="btn btn-primary" type="button"&gt;Left&lt;/button&gt;
           &lt;button class="btn button-light-primary" type="button"&gt;Middle&lt;/button&gt;
           &lt;button class="btn btn-primary" type="button"&gt;Right&lt;/button&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-xxl-4 col-md-6 box-col-6"&gt;
     &lt;div class="card-wrapper border rounded-3 h-100"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Outline Button Group&lt;/h6&gt;
       &lt;div class="button-wrapper button-outlined"&gt;
         &lt;div class="btn-group btn-group-square" role="group" aria-label="Basic outlined example"&gt;
           &lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="arrow-left"&gt;&lt;/i&gt;&lt;/button&gt;
           &lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="arrow-up"&gt;&lt;/i&gt;&lt;/button&gt;
           &lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="arrow-right"&gt;&lt;/i&gt;&lt;/button&gt;
         &lt;/div&gt;
         &lt;div class="btn-group btn-group-pill" role="group" aria-label="Basic outlined example"&gt;
           &lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="arrow-left-circle"&gt;&lt;/i&gt;&lt;/button&gt;
           &lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="arrow-up-circle"&gt;&lt;/i&gt;&lt;/button&gt;
           &lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/button&gt;
         &lt;/div&gt;
         &lt;div class="btn-group" role="group" aria-label="Basic outlined example"&gt;
           &lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="align-left"&gt;&lt;/i&gt;&lt;/button&gt;
           &lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="align-center"&gt;&lt;/i&gt;&lt;/button&gt;
           &lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="align-right"&gt;&lt;/i&gt;&lt;/button&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-xxl-4 col-12 box-col-12"&gt;
     &lt;div class="card-wrapper border rounded-3 h-100"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Button Group Sizes&lt;/h6&gt;
       &lt;div class="button-wrapper"&gt;
         &lt;div class="btn-group" role="group" aria-label="Large button group"&gt;
           &lt;button class="btn btn-outline-primary btn-lg" type="button"&gt;Left&lt;/button&gt;
           &lt;button class="btn btn-outline-primary btn-lg" type="button"&gt;Middle&lt;/button&gt;
           &lt;button class="btn btn-outline-primary btn-lg" type="button"&gt;Right&lt;/button&gt;
         &lt;/div&gt;
         &lt;div class="btn-group" role="group" aria-label="Default button group"&gt;
           &lt;button class="btn btn-outline-primary" type="button"&gt;Left&lt;/button&gt;
           &lt;button class="btn btn-outline-primary" type="button"&gt;Middle&lt;/button&gt;
           &lt;button class="btn btn-outline-primary" type="button"&gt;Right&lt;/button&gt;
         &lt;/div&gt;
         &lt;div class="btn-group" role="group" aria-label="Small buttongroup"&gt;
           &lt;button class="btn btn-outline-primary btn-sm" type="button"&gt;Left&lt;/button&gt;
           &lt;button class="btn btn-outline-primary btn-sm" type="button"&gt;Middle&lt;/button&gt;
           &lt;button class="btn btn-outline-primary btn-sm" type="button"&gt;Right&lt;/button&gt;
         &lt;/div&gt;
       &lt;/div&gt;
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
                        <h5>Block Level Buttons</h5>
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
                        <p class="f-m-light mt-1">Use<code> btn </code>class for buttons and <code>d-grid </code>used for
                            block level buttons.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Block Button</h6>
                                    <div class="d-grid gap-2 buttons-box">
                                        <button class="btn button-light-primary" type="button">Click here, there is a big
                                            surprise with you, Hurry Up!!</button>
                                        <button class="btn btn-primary" type="button">40% off all B-Stock Sale!! Hurry
                                            Up!!</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Button Center</h6>
                                    <div class="d-grid gap-2 col-6 mx-auto buttons-box">
                                        <button class="btn button-light-primary" type="button">Center Button</button>
                                        <button class="btn btn-primary" type="button">Center Button</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Button End</h6>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end buttons-box">
                                        <button class="btn button-light-primary me-md-2" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head12"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head12">&lt;div class="card-body"&gt;
 &lt;div class="row g-3"&gt;
   &lt;div class="col-12"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Block Button&lt;/h6&gt;
       &lt;div class="d-grid gap-2 buttons-box"&gt;
         &lt;button class="btn button-light-primary" type="button"&gt;Click here, there is a big surprise with you, Hurry Up!!&lt;/button&gt;
         &lt;button class="btn btn-primary" type="button"&gt;40% off all B-Stock Sale!! Hurry Up!!&lt;/button&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-12"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Button Center&lt;/h6&gt;
       &lt;div class="d-grid gap-2 col-6 mx-auto buttons-box"&gt;
         &lt;button class="btn button-light-primary" type="button"&gt;Center Button&lt;/button&gt;
         &lt;button class="btn btn-primary" type="button"&gt;Center Button&lt;/button&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-12"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Button End&lt;/h6&gt;
       &lt;div class="d-grid gap-2 d-md-flex justify-content-md-end buttons-box"&gt;
         &lt;button class="btn button-light-primary me-md-2" type="button"&gt;Cancel&lt;/button&gt;
         &lt;button class="btn btn-primary" type="button"&gt;Submit&lt;/button&gt;
       &lt;/div&gt;
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
                        <h5>Button Variations</h5>
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
                        <p class="f-m-light mt-1">Use<code> btn </code>class used for buttons and <code>btn-group-vertical
                            </code>for vertical buttons and made different types of design using <code>btn-group</code>.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xxl-6">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <h6 class="sub-title fw-bold">Vertical Variations</h6>
                                    <div class="d-flex gap-3 align-items-end flex-wrap">
                                        <div class="btn-group-vertical" role="group"
                                            aria-label="Vertical button group">
                                            <button class="btn btn-primary" type="button">Primary</button>
                                            <button class="btn btn-secondary" type="button">Secondary</button>
                                            <button class="btn btn-success" type="button">Success</button>
                                            <button class="btn btn-danger" type="button">Danger</button>
                                            <button class="btn btn-warning" type="button">Warning</button>
                                        </div>
                                        <div class="btn-group-vertical buttons-box" role="group"
                                            aria-label="Vertical button group">
                                            <button class="btn button-light-primary" type="button">Light-primary</button>
                                            <button class="btn button-light-dark" type="button">Light-dark</button>
                                            <div class="btn-group" role="group">
                                                <button class="btn button-light-success dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">Light-success</button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group dropstart" role="group">
                                                <button class="btn button-light-danger dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">Light-danger</button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group dropend" role="group">
                                                <button class="btn button-light-warning dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">Light-warning</button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group dropup" role="group">
                                                <button class="btn button-light-info dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">Light-info</button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="btn-group-vertical" role="group"
                                            aria-label="Vertical radio toggle button group">
                                            <input class="btn-check" id="vbtn-radio1" type="radio" name="vbtn-radio"
                                                checked="">
                                            <label class="btn btn-outline-primary" for="vbtn-radio1">Radio 1</label>
                                            <input class="btn-check" id="vbtn-radio2" type="radio" name="vbtn-radio">
                                            <label class="btn btn-outline-primary" for="vbtn-radio2">Radio 2</label>
                                            <input class="btn-check" id="vbtn-radio3" type="radio" name="vbtn-radio">
                                            <label class="btn btn-outline-primary mb-0" for="vbtn-radio3">Radio 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6">
                                <div class="row g-3">
                                    <div class="col-xl-12 col-sm-6">
                                        <div class="card-wrapper border rounded-3 h-100">
                                            <h6 class="sub-title fw-bold">Horizontal Variations</h6>
                                            <div class="button-wrapper button-box">
                                                <div class="btn-group" role="group" aria-label="Default button group">
                                                    <button class="btn btn-outline-primary" type="button">How</button>
                                                    <button class="btn btn-outline-primary" type="button">Are</button>
                                                    <button class="btn btn-outline-primary" type="button">You?</button>
                                                </div>
                                                <div class="btn-group" role="group"
                                                    aria-label="Button group with nested dropdown">
                                                    <button class="btn btn-primary" type="button">C </button>
                                                    <button class="btn btn-warning" type="button">U</button>
                                                    <button class="btn btn-primary" type="button">B </button>
                                                    <button class="btn btn-warning" type="button">A</button>
                                                    <div class="btn-group" role="group">
                                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">Pages</button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Gallery</a></li>
                                                            <li><a class="dropdown-item" href="#">Blog</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="btn-group select-checkbox" role="group"
                                                    aria-label="Basic checkbox toggle button group">
                                                    <input class="btn-check" id="btncheck1" type="checkbox">
                                                    <label class="btn btn-outline-success mb-0" for="btncheck1">Checkbox
                                                        1</label>
                                                    <input class="btn-check" id="btncheck2" type="checkbox">
                                                    <label class="btn btn-outline-primary mb-0" for="btncheck2">Checkbox
                                                        2</label>
                                                    <input class="btn-check" id="btncheck3" type="checkbox">
                                                    <label class="btn btn-outline-success mb-0" for="btncheck3">Checkbox
                                                        3</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-sm-6">
                                        <div class="card-wrapper border rounded-3 h-100">
                                            <h6 class="sub-title fw-bold">Button Toolbar</h6>
                                            <div class="btn-toolbar" role="toolbar"
                                                aria-label="Toolbar with button groups">
                                                <div class="btn-group" role="group" aria-label="First group">
                                                    <button class="btn btn-primary" type="button">I </button>
                                                    <button class="btn btn-warning" type="button">II </button>
                                                    <button class="btn btn-primary" type="button">III</button>
                                                    <button class="btn btn-warning" type="button">IV </button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="Second group">
                                                    <button class="btn btn-primary" type="button">V </button>
                                                    <button class="btn btn-warning" type="button">VI </button>
                                                    <button class="btn btn-primary" type="button">VII</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="Third group">
                                                    <button class="btn btn-warning" type="button">VIII</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head13"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head13">&lt;div class="card-body"&gt;
 &lt;div class="row g-3"&gt;
   &lt;div class="col-xxl-6"&gt;
     &lt;div class="card-wrapper border rounded-3 h-100"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Vertical Variations&lt;/h6&gt;
       &lt;div class="d-flex gap-3 align-items-end flex-wrap"&gt;
         &lt;div class="btn-group-vertical" role="group" aria-label="Vertical button group"&gt;
           &lt;button class="btn btn-primary" type="button"&gt;Primary&lt;/button&gt;
           &lt;button class="btn btn-secondary" type="button"&gt;Secondary&lt;/button&gt;
           &lt;button class="btn btn-success" type="button"&gt;Success&lt;/button&gt;
           &lt;button class="btn btn-danger" type="button"&gt;Danger&lt;/button&gt;
           &lt;button class="btn btn-warning" type="button"&gt;Warning&lt;/button&gt;
         &lt;/div&gt;
         &lt;div class="btn-group-vertical buttons-box" role="group" aria-label="Vertical button group"&gt;
           &lt;button class="btn button-light-primary" type="button"&gt;Light-primary&lt;/button&gt;
           &lt;button class="btn button-light-dark" type="button"&gt;Light-dark&lt;/button&gt;
           &lt;div class="btn-group" role="group"&gt;
             &lt;button class="btn button-light-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Light-success&lt;/button&gt;
             &lt;ul class="dropdown-menu"&gt;
               &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
               &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
             &lt;/ul&gt;
           &lt;/div&gt;
           &lt;div class="btn-group dropstart" role="group"&gt;
             &lt;button class="btn button-light-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Light-danger&lt;/button&gt;
             &lt;ul class="dropdown-menu"&gt;
               &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
               &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
             &lt;/ul&gt;
           &lt;/div&gt;
           &lt;div class="btn-group dropend" role="group"&gt;
             &lt;button class="btn button-light-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Light-warning&lt;/button&gt;
             &lt;ul class="dropdown-menu"&gt;
               &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
               &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
             &lt;/ul&gt;
           &lt;/div&gt;
           &lt;div class="btn-group dropup" role="group"&gt;
             &lt;button class="btn button-light-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Light-info&lt;/button&gt;
             &lt;ul class="dropdown-menu"&gt;
               &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
               &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
             &lt;/ul&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group"&gt;
           &lt;input class="btn-check" id="vbtn-radio1" type="radio" name="vbtn-radio" checked=""&gt;
           &lt;label class="btn btn-outline-primary" for="vbtn-radio1"&gt;Radio 1&lt;/label&gt;
           &lt;input class="btn-check" id="vbtn-radio2" type="radio" name="vbtn-radio"&gt;
           &lt;label class="btn btn-outline-primary" for="vbtn-radio2"&gt;Radio 2&lt;/label&gt;
           &lt;input class="btn-check" id="vbtn-radio3" type="radio" name="vbtn-radio"&gt;
           &lt;label class="btn btn-outline-primary mb-0" for="vbtn-radio3"&gt;Radio 3&lt;/label&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-xxl-6"&gt;
     &lt;div class="row g-3"&gt;
       &lt;div class="col-xl-12 col-sm-6"&gt;
         &lt;div class="card-wrapper border rounded-3 h-100"&gt;
           &lt;h6 class="sub-title fw-bold"&gt;Horizontal Variations&lt;/h6&gt;
           &lt;div class="button-wrapper button-box"&gt;
             &lt;div class="btn-group" role="group" aria-label="Default button group"&gt;
               &lt;button class="btn btn-outline-primary" type="button"&gt;How&lt;/button&gt;
               &lt;button class="btn btn-outline-primary" type="button"&gt;Are&lt;/button&gt;
               &lt;button class="btn btn-outline-primary" type="button"&gt;You?&lt;/button&gt;
             &lt;/div&gt;
             &lt;div class="btn-group" role="group" aria-label="Button group with nested dropdown"&gt;
               &lt;button class="btn btn-primary" type="button"&gt;C &lt;/button&gt;
               &lt;button class="btn btn-warning" type="button"&gt;U&lt;/button&gt;
               &lt;button class="btn btn-primary" type="button"&gt;B &lt;/button&gt;
               &lt;button class="btn btn-warning" type="button"&gt;A&lt;/button&gt;
               &lt;div class="btn-group" role="group"&gt;
                 &lt;button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Pages&lt;/button&gt;
                 &lt;ul class="dropdown-menu"&gt;
                   &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Gallery&lt;/a&gt;&lt;/li&gt;
                   &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Blog&lt;/a&gt;&lt;/li&gt;
                 &lt;/ul&gt;
               &lt;/div&gt;
             &lt;/div&gt;
             &lt;div class="btn-group select-checkbox" role="group" aria-label="Basic checkbox toggle button group"&gt;
               &lt;input class="btn-check" id="btncheck1" type="checkbox"&gt;
               &lt;label class="btn btn-outline-success mb-0" for="btncheck1"&gt;Checkbox 1&lt;/label&gt;
               &lt;input class="btn-check" id="btncheck2" type="checkbox"&gt;
               &lt;label class="btn btn-outline-primary mb-0" for="btncheck2"&gt;Checkbox 2&lt;/label&gt;
               &lt;input class="btn-check" id="btncheck3" type="checkbox"&gt;
               &lt;label class="btn btn-outline-success mb-0" for="btncheck3"&gt;Checkbox 3&lt;/label&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="col-xl-12 col-sm-6"&gt;
         &lt;div class="card-wrapper border rounded-3 h-100"&gt;
           &lt;h6 class="sub-title fw-bold"&gt;Button Toolbar&lt;/h6&gt;
           &lt;div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups"&gt;
             &lt;div class="btn-group" role="group" aria-label="First group"&gt;
               &lt;button class="btn btn-primary" type="button"&gt;I &lt;/button&gt;
               &lt;button class="btn btn-warning" type="button"&gt;II &lt;/button&gt;
               &lt;button class="btn btn-primary" type="button"&gt;III&lt;/button&gt;
               &lt;button class="btn btn-warning" type="button"&gt;IV &lt;/button&gt;
             &lt;/div&gt;
             &lt;div class="btn-group" role="group" aria-label="Second group"&gt;
               &lt;button class="btn btn-primary" type="button"&gt;V &lt;/button&gt;
               &lt;button class="btn btn-warning" type="button"&gt;VI &lt;/button&gt;
               &lt;button class="btn btn-primary" type="button"&gt;VII&lt;/button&gt;
             &lt;/div&gt;
             &lt;div class="btn-group" role="group" aria-label="Third group"&gt;
               &lt;button class="btn btn-warning" type="button"&gt;VIII&lt;/button&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
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
                        <h5>Bold Border Outline Buttons</h5>
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
                        <p class="f-m-light mt-1">Use <code> btn-outline-*-2x</code> class for bold outline buttons.</p>
                    </div>
                    <div class="card-body common-flex">
                        <button class="btn btn-outline-primary-2x">Animation</button>
                        <button class="btn btn-outline-secondary-2x">Icons</button>
                        <button class="btn btn-outline-success-2x">Blog</button>
                        <button class="btn btn-outline-info-2x">Widgets</button>
                        <button class="btn btn-outline-warning-2x">Chat</button>
                        <button class="btn btn-outline-danger-2x">Users</button>
                        <button class="btn btn-outline-light-2x txt-dark">FAQ</button>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head14"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head14">&lt;div class="card-body common-flex"&gt;
 &lt;button class="btn btn-outline-primary-2x"&gt;Animation&lt;/button&gt;
 &lt;button class="btn btn-outline-secondary-2x"&gt;Icons&lt;/button&gt;
 &lt;button class="btn btn-outline-success-2x"&gt;Blog&lt;/button&gt;
 &lt;button class="btn btn-outline-info-2x"&gt;Widgets&lt;/button&gt;
 &lt;button class="btn btn-outline-warning-2x"&gt;Chat&lt;/button&gt;
 &lt;button class="btn btn-outline-danger-2x"&gt;Users&lt;/button&gt;
 &lt;button class="btn btn-outline-light-2x txt-dark"&gt;FAQ&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Radio-checkbox Groups and Animated Buttons</h5>
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
                        <p class="f-m-light mt-1">Use radio for <code>radio </code> class & checkbox for <code>checkbox
                            </code> class used.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xxl-4 col-md-6 box-col-6 xl-50">
                                <div class="card-wrapper border rounded-3 bg-light">
                                    <h6 class="sub-title fw-bold">Radio Buttons</h6>
                                    <div class="btn-radio">
                                        <div class="btn-group" data-bs-toggle="buttons">
                                            <div class="btn button-light-primary">
                                                <div class="radio radio-primary">
                                                    <input id="radio7" type="radio" name="radio1"
                                                        value="option1">
                                                    <label class="mb-0" for="radio7">Theme</label>
                                                </div>
                                            </div>
                                            <div class="btn button-light-primary">
                                                <div class="radio radio-primary">
                                                    <input id="radio8" type="radio" name="radio1"
                                                        value="option1" checked="">
                                                    <label class="mb-0" for="radio8">E-commerce</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6 box-col-6 xl-50">
                                <div class="card-wrapper border rounded-3 bg-light">
                                    <h6 class="sub-title fw-bold">Checkbox Buttons</h6>
                                    <div class="btn-group btn-option" data-bs-toggle="buttons">
                                        <div class="btn button-light-dark">
                                            <div class="checkbox checkbox-dark">
                                                <input id="checkbox-primary-1" type="checkbox">
                                                <label class="mb-0" for="checkbox-primary-1">Theme</label>
                                            </div>
                                        </div>
                                        <div class="btn button-light-dark">
                                            <div class="checkbox checkbox-dark">
                                                <input id="checkbox-primary-2" type="checkbox">
                                                <label class="mb-0" for="checkbox-primary-2">E-commerce</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6 box-col-12 xl-100">
                                <div class="card-wrapper border rounded-3 bg-light">
                                    <h6 class="sub-title fw-bold">Animated Buttons</h6>
                                    <div class="common-flex mix-hover-btn">
                                        <button class="btn btn-border-pop btn-primary">FAQ</button>
                                        <button class="btn btn-bg-slide button-light-primary">Blog</button>
                                        <button class="btn btn-border-bottom button-light-primary txt-dark">Icons</button>
                                        <button class="button button--winona button--border-thin button--round-s"
                                            data-text="Open Project"><span>Open Project</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head15"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head15">&lt;div class="card-body"&gt;
 &lt;div class="row g-3"&gt;
   &lt;div class="col-xxl-4 col-md-6 box-col-6 xl-50"&gt;
     &lt;div class="card-wrapper border rounded-3 bg-light"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Radio Buttons&lt;/h6&gt;
       &lt;div class="btn-radio"&gt;
         &lt;div class="btn-group" data-bs-toggle="buttons"&gt;
           &lt;div class="btn button-light-primary"&gt;
             &lt;div class="radio radio-primary"&gt;
               &lt;input id="radio7" type="radio" name="radio1" value="option1"&gt;
               &lt;label class="mb-0" for="radio7"&gt;Theme&lt;/label&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="btn button-light-primary"&gt;
             &lt;div class="radio radio-primary"&gt;
               &lt;input id="radio8" type="radio" name="radio1" value="option1" checked=""&gt;
               &lt;label class="mb-0" for="radio8"&gt;E-commerce&lt;/label&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-xxl-4 col-md-6 box-col-6 xl-50"&gt;
     &lt;div class="card-wrapper border rounded-3 bg-light"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Checkbox Buttons&lt;/h6&gt;
       &lt;div class="btn-group btn-option" data-bs-toggle="buttons"&gt;
         &lt;div class="btn button-light-dark"&gt;
           &lt;div class="checkbox checkbox-dark"&gt;
             &lt;input id="checkbox-primary-1" type="checkbox"&gt;
             &lt;label class="mb-0" for="checkbox-primary-1"&gt;Theme&lt;/label&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="btn button-light-dark"&gt;
           &lt;div class="checkbox checkbox-dark"&gt;
             &lt;input id="checkbox-primary-2" type="checkbox"&gt;
             &lt;label class="mb-0" for="checkbox-primary-2"&gt;E-commerce&lt;/label&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-xxl-4 col-md-6 box-col-12 xl-100"&gt;
     &lt;div class="card-wrapper border rounded-3 bg-light"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Animated Buttons&lt;/h6&gt;
       &lt;div class="common-flex mix-hover-btn"&gt;
         &lt;button class="btn btn-border-pop btn-primary"&gt;FAQ&lt;/button&gt;
         &lt;button class="btn btn-bg-slide button-light-primary"&gt;Blog&lt;/button&gt;
         &lt;button class="btn btn-border-bottom button-light-primary txt-dark"&gt;Icons&lt;/button&gt;
         &lt;button class="button button--winona button--border-thin button--round-s" data-text="Open Project"&gt;&lt;span&gt;Open Project&lt;/span&gt;&lt;/button&gt;
       &lt;/div&gt;
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
                        <h5>Radial Buttons</h5>
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
                        <p class="f-m-light mt-1">You can used <code>btn-*-gradien</code> class for gradien buttons.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4 col-sm-6">
                                <div class="card-wrapper border rounded-3 bg-light">
                                    <h6 class="sub-title fw-bold">Default Gradient Buttons</h6>
                                    <div class="common-flex">
                                        <button class="btn btn-primary-gradien">Icons</button>
                                        <button class="btn btn-secondary-gradien">Animation</button>
                                        <button class="btn btn-success-gradien">Tasks</button>
                                        <button class="btn btn-info-gradien">Letter box</button>
                                        <button class="btn btn-warning-gradien">Chat</button>
                                        <button class="btn btn-danger-gradien">Blog</button>
                                        <button class="btn btn-light-gradien text-dark">Gallery</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card-wrapper border rounded-3 bg-light">
                                    <h6 class="sub-title fw-bold">Flat Gradient Buttons</h6>
                                    <div class="common-flex">
                                        <button class="btn btn-square btn-primary-gradien">Icons</button>
                                        <button class="btn btn-square btn-secondary-gradien">Animation</button>
                                        <button class="btn btn-square btn-success-gradien">Tasks</button>
                                        <button class="btn btn-square btn-info-gradien">Letter box</button>
                                        <button class="btn btn-square btn-warning-gradien">Chat</button>
                                        <button class="btn btn-square btn-danger-gradien">Blog</button>
                                        <button class="btn btn-square btn-light-gradien text-dark">Gallery</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12">
                                <div class="card-wrapper border rounded-3 bg-light">
                                    <h6 class="sub-title fw-bold">Rounded Gradient Buttons</h6>
                                    <div class="common-flex">
                                        <button class="btn btn-pill btn-air-primary btn-primary-gradien">Icons</button>
                                        <button
                                            class="btn btn-pill btn-air-secondary btn-secondary-gradien">Animation</button>
                                        <button class="btn btn-pill btn-air-success btn-success-gradien">Tasks</button>
                                        <button class="btn btn-pill btn-air-info btn-info-gradien">Letter box</button>
                                        <button class="btn btn-pill btn-air-warning btn-warning-gradien">Chat</button>
                                        <button class="btn btn-pill btn-air-danger btn-danger-gradien">Blog</button>
                                        <button
                                            class="btn btn-pill btn-air-light btn-light-gradien txt-dark">Gallery</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head16"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head16">&lt;div class="card-body"&gt;
 &lt;div class="row g-3"&gt;
   &lt;div class="col-xl-4 col-sm-6"&gt;
     &lt;div class="card-wrapper border rounded-3 bg-light"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Default Gradient Buttons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;button class="btn btn-primary-gradien"&gt;Icons&lt;/button&gt;
         &lt;button class="btn btn-secondary-gradien"&gt;Animation&lt;/button&gt;
         &lt;button class="btn btn-success-gradien"&gt;Tasks&lt;/button&gt;
         &lt;button class="btn btn-info-gradien"&gt;Letter box&lt;/button&gt;
         &lt;button class="btn btn-warning-gradien"&gt;Chat&lt;/button&gt;
         &lt;button class="btn btn-danger-gradien"&gt;Blog&lt;/button&gt;
         &lt;button class="btn btn-light-gradien text-dark"&gt;Gallery&lt;/button&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-xl-4 col-sm-6"&gt;
     &lt;div class="card-wrapper border rounded-3 bg-light"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Flat Gradient Buttons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;button class="btn btn-square btn-primary-gradien"&gt;Icons&lt;/button&gt;
         &lt;button class="btn btn-square btn-secondary-gradien"&gt;Animation&lt;/button&gt;
         &lt;button class="btn btn-square btn-success-gradien"&gt;Tasks&lt;/button&gt;
         &lt;button class="btn btn-square btn-info-gradien"&gt;Letter box&lt;/button&gt;
         &lt;button class="btn btn-square btn-warning-gradien"&gt;Chat&lt;/button&gt;
         &lt;button class="btn btn-square btn-danger-gradien"&gt;Blog&lt;/button&gt;
         &lt;button class="btn btn-square btn-light-gradien text-dark"&gt;Gallery&lt;/button&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-xl-4 col-sm-12"&gt;
     &lt;div class="card-wrapper border rounded-3 bg-light"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Rounded Gradient Buttons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;button class="btn btn-pill btn-air-primary btn-primary-gradien"&gt;Icons&lt;/button&gt;
         &lt;button class="btn btn-pill btn-air-secondary btn-secondary-gradien"&gt;Animation&lt;/button&gt;
         &lt;button class="btn btn-pill btn-air-success btn-success-gradien"&gt;Tasks&lt;/button&gt;
         &lt;button class="btn btn-pill btn-air-info btn-info-gradien"&gt;Letter box&lt;/button&gt;
         &lt;button class="btn btn-pill btn-air-warning btn-warning-gradien"&gt;Chat&lt;/button&gt;
         &lt;button class="btn btn-pill btn-air-danger btn-danger-gradien"&gt;Blog&lt;/button&gt;
         &lt;button class="btn btn-pill btn-air-light btn-light-gradien txt-dark"&gt;Gallery&lt;/button&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/custom-btn-ripple.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
