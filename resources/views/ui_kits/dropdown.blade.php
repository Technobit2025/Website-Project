@extends('layouts.simple.master')

@section('title', 'Dropdown')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Dropdowns</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Dropdowns</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Basic Dropdowns</h5>
                        <p class="f-m-light mt-1"> To create any dropdown, use
                            <code>dat-bs-toggle="dropdown" </code>attribute.</p>
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
                    <div class="card-body rtl-dropdown">
                        <div class="common-flex">
                            <div class="btn-group"><button class="btn btn-primary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Dashboard</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Project</a></li>
                                    <li><a class="dropdown-item" href="#!">Ecommerce</a></li>
                                    <li><a class="dropdown-item" href="#!">Crypto</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"> Ecommerce</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Product</a></li>
                                    <li><a class="dropdown-item" href="#!">Product details</a></li>
                                    <li><a class="dropdown-item" href="#!">Cart</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-warning dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Ui kits</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Typography</a></li>
                                    <li><a class="dropdown-item" href="#!">Avatars</a></li>
                                    <li><a class="dropdown-item" href="#!">Grid</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-danger dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Error page</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Error 400</a></li>
                                    <li><a class="dropdown-item" href="#!">Error 403</a></li>
                                    <li><a class="dropdown-item" href="#!">Error 500</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#basic-dropdown" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="basic-dropdown">&lt;div class="common-flex"&gt; 
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dashboard&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Project&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Ecommerce&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Crypto&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt; Ecommerce&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Product&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Product details&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Cart&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Ui kits&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Typography&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Avatars&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Grid&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Error page&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Error 400&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Error 403&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Error 500&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Rounded Dropdowns</h5>
                        <p class="f-m-light mt-1">Use <code>rounded-pill </code>class through to change rounded dropdowns.
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
                    <div class="card-body rtl-dropdown">
                        <div class="common-flex">
                            <div class="btn-group"><button class="btn btn-primary rounded-pill dropdown-toggle"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">Primary</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Dark</a></li>
                                    <li><a class="dropdown-item" href="#!">Light</a></li>
                                    <li><a class="dropdown-item" href="#!">Lighter</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-secondary rounded-pill dropdown-toggle"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">Secondary</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Dark</a></li>
                                    <li><a class="dropdown-item" href="#!">Light</a></li>
                                    <li><a class="dropdown-item" href="#!">Lighter</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-success rounded-pill dropdown-toggle"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">Success</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Dark</a></li>
                                    <li><a class="dropdown-item" href="#!">Light </a></li>
                                    <li><a class="dropdown-item" href="#!">Lighter </a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-warning rounded-pill dropdown-toggle"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">Warning</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Dark </a></li>
                                    <li><a class="dropdown-item" href="#!">Light </a></li>
                                    <li><a class="dropdown-item" href="#!">Lighter </a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-info rounded-pill dropdown-toggle"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">Info</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Dark </a></li>
                                    <li><a class="dropdown-item" href="#!">Light </a></li>
                                    <li><a class="dropdown-item" href="#!">Lighter </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#rounded-dropdown" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="rounded-dropdown">&lt;div class="common-flex"&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-primary rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Primary&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Dark&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Light&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Lighter&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-secondary rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Secondary&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Dark&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Light&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Lighter&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-success rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Success&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Dark&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Light&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Lighter&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-warning rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Warning&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Dark&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Light&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Lighter&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-info rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Info&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Dark&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Light&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Lighter&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-12">
                <div class="card split-dropdown">
                    <div class="card-header">
                        <h5>Split Dropdowns</h5>
                        <p class="f-m-light mt-1">Use <code>dropdown-toggle-split </code>for proper spacing around the
                            dropdown caret.</p>
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
                    <div class="card-body dropdown-basic m-0">
                        <div class="common-flex">
                            <div class="btn-group"><button class="btn btn-outline-primary">Maps</button>
                                <div class="dropdown separated-btn"><button class="btn btn-primary dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icofont icofont-arrow-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"> <a href="#!">Google map</a></li>
                                        <li class="dropdown-item"><a href="#!">Vector map</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group"><button class="btn btn-outline-secondary">Animations</button>
                                <div class="dropdown separated-btn"><button
                                        class="btn btn-secondary dropdown-toggle-split" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="icofont icofont-arrow-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"><a href="#!">Animate </a></li>
                                        <li class="dropdown-item"><a href="#!">AOS animations</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group"><button class="btn btn-outline-success">Charts</button>
                                <div class="dropdown separated-btn"><button class="btn btn-success dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icofont icofont-arrow-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"><a href="#!">E-charts</a></li>
                                        <li class="dropdown-item"><a href="#!">Apex chart</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group"><button class="btn btn-outline-info">Email</button>
                                <div class="dropdown separated-btn"><button class="btn btn-info dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icofont icofont-arrow-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"><a href="#!">Email app </a></li>
                                        <li class="dropdown-item"><a href="#!">Email compose</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group"><button class="btn btn-outline-warning">Icons</button>
                                <div class="dropdown separated-btn"><button class="btn btn-warning dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icofont icofont-arrow-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"><a href="#!">Flag icon</a></li>
                                        <li class="dropdown-item"><a href="#!">Themify icon</a></li>
                                        <li class="dropdown-item"><a href="#!">Ico icon</a></li>
                                        <li class="dropdown-item"><a href="#">Feather icon</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group"><button class="btn btn-outline-danger">Learning</button>
                                <div class="dropdown separated-btn"><button class="btn btn-danger dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icofont icofont-arrow-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"><a href="#!">Learning list</a></li>
                                        <li class="dropdown-item"><a href="#!">Detailed course</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#split-dropdown" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="split-dropdown">&lt;div class="common-flex"&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-outline-primary"&gt;Maps&lt;/button&gt;
   &lt;div class="dropdown separated-btn"&gt;
     &lt;button class="btn btn-primary dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;&lt;i class="icofont icofont-arrow-down"&gt;&lt;/i&gt;&lt;/button&gt;
     &lt;ul class="dropdown-menu"&gt;
       &lt;li class="dropdown-item"&gt; &lt;a href="#!"&gt;Google map&lt;/a&gt;&lt;/li&gt;
       &lt;li class="dropdown-item"&gt;&lt;a href="#!"&gt;Vector map&lt;/a&gt;&lt;/li&gt;
     &lt;/ul&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-outline-secondary"&gt;Animations&lt;/button&gt;
   &lt;div class="dropdown separated-btn"&gt;
     &lt;button class="btn btn-secondary dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;&lt;i class="icofont icofont-arrow-down"&gt;&lt;/i&gt;&lt;/button&gt;
     &lt;ul class="dropdown-menu"&gt;
       &lt;li class="dropdown-item"&gt;&lt;a href="#!"&gt;Animate &lt;/a&gt;&lt;/li&gt;
       &lt;li class="dropdown-item"&gt;&lt;a href="#!"&gt;AOS animations&lt;/a&gt;&lt;/li&gt;
     &lt;/ul&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-outline-success"&gt;Charts&lt;/button&gt;
   &lt;div class="dropdown separated-btn"&gt;
     &lt;button class="btn btn-success dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;&lt;i class="icofont icofont-arrow-down"&gt;&lt;/i&gt;&lt;/button&gt;
     &lt;ul class="dropdown-menu"&gt;
       &lt;li class="dropdown-item"&gt;&lt;a href="#!"&gt;E-charts&lt;/a&gt;&lt;/li&gt;
       &lt;li class="dropdown-item"&gt;&lt;a href="#!"&gt;Apex chart&lt;/a&gt;&lt;/li&gt;
     &lt;/ul&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-outline-info"&gt;Email&lt;/button&gt;
   &lt;div class="dropdown separated-btn"&gt;
     &lt;button class="btn btn-info dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;&lt;i class="icofont icofont-arrow-down"&gt;&lt;/i&gt;&lt;/button&gt;
     &lt;ul class="dropdown-menu"&gt;
       &lt;li class="dropdown-item"&gt;&lt;a href="#!"&gt;Email app &lt;/a&gt;&lt;/li&gt;
       &lt;li class="dropdown-item"&gt;&lt;a href="#!"&gt;Email compose&lt;/a&gt;&lt;/li&gt;
     &lt;/ul&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-outline-warning"&gt;Icons&lt;/button&gt;
   &lt;div class="dropdown separated-btn"&gt;
     &lt;button class="btn btn-warning dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;&lt;i class="icofont icofont-arrow-down"&gt;&lt;/i&gt;&lt;/button&gt;
     &lt;ul class="dropdown-menu"&gt;
       &lt;li class="dropdown-item"&gt;&lt;a href="#!"&gt;Flag icon&lt;/a&gt;&lt;/li&gt;
       &lt;li class="dropdown-item"&gt;&lt;a href="#!"&gt;Themify icon&lt;/a&gt;&lt;/li&gt;
       &lt;li class="dropdown-item"&gt;&lt;a href="#!"&gt;Ico icon&lt;/a&gt;&lt;/li&gt;
       &lt;li class="dropdown-item"&gt;&lt;a href="#"&gt;Feather icon&lt;/a&gt;&lt;/li&gt;
     &lt;/ul&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-outline-danger"&gt;Learning&lt;/button&gt;
   &lt;div class="dropdown separated-btn"&gt;
     &lt;button class="btn btn-danger dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;&lt;i class="icofont icofont-arrow-down"&gt;&lt;/i&gt;&lt;/button&gt;
     &lt;ul class="dropdown-menu"&gt;
       &lt;li class="dropdown-item"&gt;&lt;a href="#!"&gt;Learning list&lt;/a&gt;&lt;/li&gt;
       &lt;li class="dropdown-item"&gt;&lt;a href="#!"&gt;Detailed course&lt;/a&gt;&lt;/li&gt;
     &lt;/ul&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Heading Dropdown</h5>
                        <p class="f-m-light mt-1">Use <code>heading-dropdown </code>class to create dropdown heading.</p>
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
                    <div class="card-body rtl-dropdown heading-dropdown">
                        <div class="common-flex">
                            <div class="btn-group"><button class="btn btn-success rounded-pill dropdown-toggle"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">Party</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item fw-bold fs-6" href="#!">Party List</a>
                                        <ul>
                                            <li> <a class="dropdown-item" href="#!">Balloons</a></li>
                                            <li> <a class="dropdown-item" href="#!">Cake </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#heading-dropdown" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="heading-dropdown">&lt;div class="common-flex"&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-success rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Party&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item fw-bold fs-6" href="#!"&gt;Party List&lt;/a&gt;
       &lt;ul&gt;
         &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Balloons&lt;/a&gt;&lt;/li&gt;
         &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Cake &lt;/a&gt;&lt;/li&gt;
       &lt;/ul&gt;
     &lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>With Input Type</h5>
                        <p class="f-m-light mt-1">Use checkbox using dropdown<code>(type='checkbox'/'radio')</code>.</p>
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
                        <div class="common-flex"><btn-group><button class="btn btn-warning" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Inputs</button>
                                <ul class="dropdown-menu dropdown-block dropdown-wrapper dark-input-type">
                                    <li>
                                        <div class="input-group rounded-0 border-0 shadow-none">
                                            <div class="input-group-text"><input
                                                    class="form-check-input mt-0 checkbox-primary" type="checkbox"
                                                    value="" aria-label="Checkbox for following text input"></div>
                                            <span class="f-14">Default checkbox</span>
                                        </div>
                                        <div class="input-group rounded-0 border-0 shadow-none">
                                            <div class="input-group-text"><input
                                                    class="form-check-input mt-0 checkbox-primary" type="radio"
                                                    value="" aria-label="Radio button for following text input">
                                            </div><span class="f-14">Default radio</span>
                                        </div>
                                    </li>
                                </ul>
                            </btn-group></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#input-type-dropdown" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="input-type-dropdown">&lt;div class="common-flex"&gt;
 &lt;btn-group&gt;
   &lt;button class="btn btn-warning" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Inputs&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block dropdown-wrapper dark-input-type"&gt;
     &lt;li&gt; 
       &lt;div class="input-group rounded-0 border-0 shadow-none"&gt;
         &lt;div class="input-group-text"&gt;
           &lt;input class="form-check-input mt-0 checkbox-primary" type="checkbox" value="" aria-label="Checkbox for following text input"&gt;
         &lt;/div&gt;&lt;span class="f-14"&gt;Default checkbox&lt;/span&gt;
       &lt;/div&gt;
       &lt;div class="input-group rounded-0 border-0 shadow-none"&gt;
         &lt;div class="input-group-text"&gt;
           &lt;input class="form-check-input mt-0 checkbox-primary" type="radio" value="" aria-label="Radio button for following text input"&gt;
         &lt;/div&gt;&lt;span class="f-14"&gt;Default radio&lt;/span&gt;
       &lt;/div&gt;
     &lt;/li&gt;
   &lt;/ul&gt;
 &lt;/btn-group&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 order-xl-0 order-lg-5">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Dark Dropdown</h5>
                        <p class="f-m-light mt-1">To access the dark mode, use the <code>dropdown-menu-dark </code>class.
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
                    <div class="card-body dropdown-basic m-0 rtl-dropdown">
                        <div class="common-flex dark-dropdown"><button class="btn btn-dark dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">Dark Night</button>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-block">
                                <li><a class="dropdown-item active" href="#!">Dark moon</a></li>
                                <li><a class="dropdown-item" href="#!">Dark owl </a></li>
                                <li><a class="dropdown-item" href="#!">Nightfall</a></li>
                            </ul>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#dark-dropdown" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="dark-dropdown">&lt;div class="common-flex dark-dropdown"&gt;
 &lt;button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dark Night&lt;/button&gt;
 &lt;ul class="dropdown-menu dropdown-menu-dark dropdown-block"&gt;
   &lt;li&gt;&lt;a class="dropdown-item active" href="#!"&gt;Dark moon&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Dark owl &lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Nightfall&lt;/a&gt;&lt;/li&gt;
 &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-xxl-0 order-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Unique Dropdown</h5>
                        <p class="f-m-light mt-1">Use <code>data-bs-toggle="dropdown"</code> to make any dropdown like
                            form
                            and text.
                            Unique way to represent form dropdown and text dropdown.</p>
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
                    <div class="card-body rtl-dropdown">
                        <div class="common-flex">
                            <div class="btn-group"><button class="btn btn-primary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Dropdown
                                    form</button>
                                <form class="dropdown-menu p-4 form-wrapper dark-form">
                                    <div class="mb-3"><label class="form-label f-w-500"
                                            for="exampleDropdownFormEmail2">Email
                                            Address</label><input class="form-control" id="exampleDropdownFormEmail2"
                                            type="email" placeholder="email@example.com"></div>
                                    <div class="mb-3"><label class="form-label f-w-500"
                                            for="exampleDropdownFormPassword2">Password</label><input class="form-control"
                                            id="exampleDropdownFormPassword2" type="password" placeholder="Password">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check"><input class="form-check-input checkbox-primary"
                                                id="dropdownCheck2" type="checkbox"><label class="form-check-label f-14"
                                                for="dropdownCheck2">Remember
                                                me</label></div>
                                    </div><button class="btn btn-primary" type="submit">Sign in</button>
                                </form>
                            </div>
                            <div class="btn-group"><button class="btn btn-dark dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Text</button>
                                <div class="dropdown-menu p-4 form-wrapper">
                                    <p>Some example text that&apos;s free-flowing within the dropdown menu.</p>
                                    <p class="mb-0">And this is more example text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#unique-dropdown" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="unique-dropdown">&lt;div class="common-flex"&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"&gt;Dropdown form&lt;/button&gt;
   &lt;form class="dropdown-menu p-4 form-wrapper dark-form"&gt;
     &lt;div class="mb-3"&gt;
       &lt;label class="form-label f-w-500" for="exampleDropdownFormEmail2"&gt;Email Address&lt;/label&gt;
       &lt;input class="form-control" id="exampleDropdownFormEmail2" type="email" placeholder="email@example.com"&gt;
     &lt;/div&gt;
     &lt;div class="mb-3"&gt;
       &lt;label class="form-label f-w-500" for="exampleDropdownFormPassword2"&gt;Password&lt;/label&gt;
       &lt;input class="form-control" id="exampleDropdownFormPassword2" type="password" placeholder="Password"&gt;
     &lt;/div&gt;
     &lt;div class="mb-3"&gt;
       &lt;div class="form-check"&gt;
         &lt;input class="form-check-input checkbox-primary" id="dropdownCheck2" type="checkbox"&gt;
         &lt;label class="form-check-label f-14" for="dropdownCheck2"&gt;Remember me&lt;/label&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;button class="btn btn-primary" type="submit"&gt;Sign in&lt;/button&gt;
   &lt;/form&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Text&lt;/button&gt;
   &lt;div class="dropdown-menu p-4 form-wrapper"&gt;
     &lt;p&gt;Some example text that&apos;s free-flowing within the dropdown menu.&lt;/p&gt;
     &lt;p class="mb-0"&gt;And this is more example text.&lt;/p&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-xxl-0 order-lg-2">
                <div class="card">
                    <div class="card-header">
                        <h5>Justify Contents</h5>
                        <p class="f-m-light mt-1">Use <code>text-start / text-center / text-end</code> to change dropdown
                            texts.</p>
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
                    <div class="card-body dropdown-basic m-0">
                        <div class="common-flex">
                            <div class="btn-group"><button class="btn btn-primary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Text-left</button>
                                <ul class="dropdown-menu dropdown-block text-start">
                                    <li><a class="dropdown-item" href="#!">Hello..</a></li>
                                    <li><a class="dropdown-item" href="#!">How are you?</a></li>
                                    <li><a class="dropdown-item" href="#!">What are you doing?</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-info dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Text-center</button>
                                <ul class="dropdown-menu dropdown-block text-center">
                                    <li><a class="dropdown-item" href="#!">Chocolate</a></li>
                                    <li><a class="dropdown-item" href="#!">Ice-cream</a></li>
                                    <li><a class="dropdown-item" href="#!">Trophy</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-primary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Text-right</button>
                                <ul class="dropdown-menu dropdown-block text-end">
                                    <li><a class="dropdown-item" href="#!">I'm fine.</a></li>
                                    <li><a class="dropdown-item" href="#!">ohh wow!!</a></li>
                                    <li><a class="dropdown-item" href="#!">That's the good news! </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#justify-dropdown" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="justify-dropdown">&lt;div class="common-flex"&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Text-left&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block text-start"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Hello..&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;How are you?&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;What are you doing?&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Text-center&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block text-center"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Chocolate&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Ice-cream&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Trophy&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Text-right&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block text-end"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;I'm fine.&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;ohh wow!!&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;That's the good news! &lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Alignment Options</h5>
                        <p class="f-m-light mt-1">Use<code> dropdown-menu-lg-start / dropstart / dropup / dropend</code>
                            this
                            classes through change dropdown directions.</p>
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
                    <div class="card-body dark-dropdown-box">
                        <div class="common-flex">
                            <div class="btn-group"><button class="btn btn-dark dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-dark dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Right-aligned menu</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-dark dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" data-bs-display="static"
                                    aria-expanded="false">Left-aligned,
                                    right-aligned lg</button>
                                <ul class="dropdown-menu dropdown-menu-lg-end">
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-dark dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" data-bs-display="static"
                                    aria-expanded="false">Right-aligned,
                                    left-aligned lg</button>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropstart"><button class="btn btn-dark dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Dropstart</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropend"><button class="btn btn-dark dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Dropend</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropup"><button class="btn btn-dark dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Dropup</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#!">Menu item</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#alignment-dropdown" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="alignment-dropdown">&lt;div class="common-flex"&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
   &lt;ul class="dropdown-menu"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Right-aligned menu&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-menu-end"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"&gt;Left-aligned, right-aligned lg&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-menu-lg-end"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"&gt;Right-aligned, left-aligned lg&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group dropstart"&gt;
   &lt;button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropstart&lt;/button&gt;
   &lt;ul class="dropdown-menu"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group dropend"&gt;
   &lt;button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropend&lt;/button&gt;
   &lt;ul class="dropdown-menu"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group dropup"&gt;
   &lt;button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropup&lt;/button&gt;
   &lt;ul class="dropdown-menu"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-xxl-0 order-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Helper Cards</h5>
                        <p class="f-m-light mt-1">Each dropdown uses the <code>data-bs-toggle='dropdown'
                            </code>attribute,
                            which you can use to create a helper class.</p>
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
                    <div class="card-body rtl-dropdown helper-cards">
                        <div class="common-flex">
                            <div class="btn-group"><button class="btn btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Helper Card</button>
                                <ul class="dropdown-menu dropdown-block p-3 dark-form">
                                    <li>
                                        <h6 class="fs-6 pb-2">Learn More!</h6>
                                        <p class="dropdown-item">There is a lot of information available here</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-warning dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Warning Card</button>
                                <ul class="dropdown-menu dropdown-block p-3 dark-form">
                                    <li>
                                        <h6 class="fs-6 pb-2">Warning!</h6>
                                        <p class="dropdown-item helper-truncate">Please! Check your notifications.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-info dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Alert Card</button>
                                <ul class="dropdown-menu dropdown-block p-3 dark-form">
                                    <li>
                                        <h6 class="fs-6 pb-2">Danger</h6>
                                        <p class="dropdown-item helper-truncate">It's a danger path.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#helper-dropdown" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="helper-dropdown">&lt;div class="common-flex"&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Helper Card&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block p-3 dark-form"&gt;
     &lt;li&gt;
       &lt;h6 class="fs-6 pb-2"&gt;Learn More!&lt;/h6&gt;
       &lt;p class="dropdown-item"&gt;There is a lot of information available here&lt;/p&gt;
     &lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Warning Card&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block p-3 dark-form"&gt;
     &lt;li&gt;
       &lt;h6 class="fs-6 pb-2"&gt;Warning!&lt;/h6&gt;
       &lt;p class="dropdown-item helper-truncate"&gt;Please! Check your notifications.&lt;/p&gt;
     &lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Alert Card&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block p-3 dark-form"&gt;
     &lt;li&gt;
       &lt;h6 class="fs-6 pb-2"&gt;Danger&lt;/h6&gt;
       &lt;p class="dropdown-item helper-truncate"&gt;It's a danger path.&lt;/p&gt;
     &lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-xxl-0 order-lg-1">
                <div class="card">
                    <div class="card-header">
                        <h5>Divider Dropdowns</h5>
                        <p class="f-m-light mt-1">Use <code>dropdown-divider </code>class through separate groups of
                            related
                            menu items with a divider.</p>
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
                    <div class="card-body rtl-dropdown">
                        <div class="common-flex">
                            <div class="btn-group"><button class="btn btn-success rounded-pill dropdown-toggle"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">Wishlist</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Shoes </a></li>
                                    <li><a class="dropdown-item" href="#!">Bag</a></li>
                                    <li><a class="dropdown-item" href="#!">Clothes</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#!">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-primary rounded-pill dropdown-toggle"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">Sports </button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Badminton</a></li>
                                    <li><a class="dropdown-item" href="#!">Cricket</a></li>
                                    <li><a class="dropdown-item" href="#!">Kho-Kho</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#!">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-secondary rounded-pill dropdown-toggle"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">Colors</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Orange</a></li>
                                    <li><a class="dropdown-item" href="#!">Yellow </a></li>
                                    <li><a class="dropdown-item" href="#!">Red </a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#!">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#divider-dropdown" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="divider-dropdown">&lt;div class="common-flex"&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-success rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Wishlist&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Shoes &lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Bag&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Clothes&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;
       &lt;hr class="dropdown-divider"&gt;
     &lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-primary rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Sports &lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Badminton&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Cricket&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Kho-Kho&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;
       &lt;hr class="dropdown-divider"&gt;
     &lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-secondary rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Colors&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Orange&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Yellow&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Red &lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;
       &lt;hr class="dropdown-divider"&gt;
     &lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Dropdown Sizing</h5>
                        <p class="f-m-light mt-1">Use <code>btn-*</code>[ sm / lg ] class through buttons of all sizes
                            including default and split dropdown buttons.</p>
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
                    <div class="card-body dark-dropdown-box">
                        <div class="common-flex">
                            <div class="btn-group"><button class="btn btn-dark light btn-lg dropdown-toggle"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">Large
                                    button</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Action</a></li>
                                    <li><a class="dropdown-item" href="#!">Another action</a></li>
                                    <li><a class="dropdown-item" href="#!">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#!">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-outline-secondary btn-lg"
                                    type="button">Large split
                                    button</button><button
                                    class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Action</a></li>
                                    <li><a class="dropdown-item" href="#!">Another action</a></li>
                                    <li><a class="dropdown-item" href="#!">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#!">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-dark light btn-sm dropdown-toggle"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">Small
                                    button</button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Action</a></li>
                                    <li><a class="dropdown-item" href="#!">Another action</a></li>
                                    <li><a class="dropdown-item" href="#!">Something else here </a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#!">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-outline-secondary btn-sm"
                                    type="button">Small split
                                    button</button><button
                                    class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                <ul class="dropdown-menu dropdown-block">
                                    <li><a class="dropdown-item" href="#!">Action</a></li>
                                    <li><a class="dropdown-item" href="#!">Another action</a></li>
                                    <li><a class="dropdown-item" href="#!">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#!">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#size-dropdown" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="size-dropdown">&lt;div class="common-flex"&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-dark light btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Large button&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Action&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Another action&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;
       &lt;hr class="dropdown-divider"&gt;
     &lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-outline-secondary btn-lg" type="button"&gt;Large split button&lt;/button&gt;
   &lt;button class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Action&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Another action&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;
       &lt;hr class="dropdown-divider"&gt;
     &lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-dark light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Small button&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Action&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Another action&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Something else here &lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;
       &lt;hr class="dropdown-divider"&gt;
     &lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-outline-secondary btn-sm" type="button"&gt;Small split button&lt;/button&gt;
   &lt;button class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;&lt;/button&gt;
   &lt;ul class="dropdown-menu dropdown-block"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Action&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Another action&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;
       &lt;hr class="dropdown-divider"&gt;
     &lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Dropdown Options</h5>
                        <p class="f-m-light mt-1">Use <code>data-bs-offset </code> or <code>data-bs-reference</code> to
                            change
                            the location of the dropdown.</p>
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
                    <div class="card-body dark-dropdown-box">
                        <div class="common-flex dropdown-option">
                            <div class="dropdown"><button class="btn btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"
                                    data-bs-offset="10,20">Offset</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#!">Action</a></li>
                                    <li><a class="dropdown-item" href="#!">Another action</a></li>
                                    <li><a class="dropdown-item" href="#!">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group"><button class="btn btn-secondary"
                                    type="button">Reference</button><button
                                    class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent"><span
                                        class="visually-hidden">Toggle Dropdown</span></button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#!">Action</a></li>
                                    <li><a class="dropdown-item" href="#!">Another action</a></li>
                                    <li><a class="dropdown-item" href="#!">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#!">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#dropdown-option" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="dropdown-option">&lt;div class="common-flex dropdown-option"&gt;
 &lt;div class="dropdown"&gt;
   &lt;button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20"&gt;Offset&lt;/button&gt;
   &lt;ul class="dropdown-menu"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Action&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Another action&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="btn-group"&gt;
   &lt;button class="btn btn-secondary" type="button"&gt;Reference&lt;/button&gt;
   &lt;button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent"&gt;&lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;&lt;/button&gt;
   &lt;ul class="dropdown-menu"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Action&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Another action&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;
       &lt;hr class="dropdown-divider"&gt;
     &lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#!"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
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
