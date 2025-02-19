@extends('layouts.simple.master')

@section('title', 'Avatars')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Avatars</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Avatars</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="user-profile">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card height-equal">
                        <div class="card-header">
                            <h5>Sizes</h5>
                            <p class="f-m-light mt-1">Use size of avatar like <code>img-* (70/80/90/100)</code> class.</p>
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
                        <div class="card-body avatar-showcase">
                            <div class="avatars">
                                <div class="avatar"><img class="img-100 rounded-circle"
                                        src="{{ asset('assets/images/avtar/3.jpg') }}" alt="#"></div>
                                <div class="avatar"><img class="img-90 rounded-circle"
                                        src="{{ asset('assets/images/avtar/4.jpg') }}" alt="#">
                                </div>
                                <div class="avatar"><img class="img-80 rounded-circle"
                                        src="{{ asset('assets/images/avtar/7.jpg') }}" alt="#">
                                </div>
                                <div class="avatar"><img class="img-70 rounded-circle"
                                        src="{{ asset('assets/images/avtar/11.jpg') }}" alt="#"></div>
                            </div>
                            <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                    data-clipboard-target="#avatar-size" title="Copy"><i
                                        class="icofont icofont-copy-alt"></i></button>
                                <pre class="custom-scrollbar"><code class="language-html" id="avatar-size">&lt;div class="card-body avatar-showcase"&gt;
 &lt;div class="avatars"&gt;
   &lt;div class="avatar"&gt;
     &lt;img class="img-100 rounded-circle" src="{{ asset('assets/images/avtar/3.jpg') }}" alt="#"&gt;
   &lt;/div&gt;
   &lt;div class="avatar"&gt;
     &lt;img class="img-90 rounded-circle" src="{{ asset('assets/images/avtar/4.jpg') }}" alt="#"&gt;
   &lt;/div&gt;
   &lt;div class="avatar"&gt;
     &lt;img class="img-80 rounded-circle" src="{{ asset('assets/images/avtar/7.jpg') }}" alt="#"&gt;
   &lt;/div&gt;
   &lt;div class="avatar"&gt;
     &lt;img class="img-70 rounded-circle" src="{{ asset('assets/images/avtar/11.jpg') }}" alt="#"&gt;
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
                            <h5>Status Indicator</h5>
                            <p class="f-m-light mt-1">Use status of avatar like<code> status-* (online/offline/dnd)</code>
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
                        <div class="card-body avatar-showcase">
                            <div class="avatars">
                                <div class="avatar"><img class="img-100 rounded-circle"
                                        src="{{ asset('assets/images/user/1.jpg') }}" alt="#">
                                    <div class="status bg-success"></div>
                                </div>
                                <div class="avatar"><img class="img-90 rounded-circle"
                                        src="{{ asset('assets/images/avtar/16.jpg') }}" alt="#">
                                    <div class="status bg-warning"></div>
                                </div>
                                <div class="avatar"><img class="img-80 rounded-circle"
                                        src="{{ asset('assets/images/user/3.png') }}" alt="#">
                                    <div class="status bg-danger"></div>
                                </div>
                                <div class="avatar"><img class="img-70 rounded-circle"
                                        src="{{ asset('assets/images/user/6.jpg') }}" alt="#">
                                    <div class="status bg-success"></div>
                                </div>
                            </div>
                            <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                    data-clipboard-target="#status-indicator" title="Copy"><i
                                        class="icofont icofont-copy-alt"></i></button>
                                <pre class="custom-scrollbar"><code class="language-html" id="status-indicator">&lt;div class="avatars"&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-100 rounded-circle" src="{{ asset('assets/images/user/1.jpg') }}" alt="#"&gt;
   &lt;div class="status bg-success"&gt;&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-90 rounded-circle" src="{{ asset('assets/images/avtar/16.jpg') }}" alt="#"&gt;
   &lt;div class="status bg-warning"&gt;&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-80 rounded-circle" src="{{ asset('assets/images/user/3.png') }}" alt="#"&gt;
   &lt;div class="status bg-danger"&gt;&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-70 rounded-circle" src="{{ asset('assets/images/user/6.jpg') }}" alt="#"&gt;
   &lt;div class="status bg-success"&gt;&lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card height-equal">
                        <div class="card-header">
                            <h4>Shapes</h4>
                            <p class="f-m-light mt-1">Use shapes of avatar like<code> b-r-* (8/30/35/25)</code></p>
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
                        <div class="card-body avatar-showcase">
                            <div class="avatars">
                                <div class="avatar"><img class="img-100 b-r-8"
                                        src="{{ asset('assets/images/user/14.png') }}" alt="#"></div>
                                <div class="avatar"><img class="img-90 b-r-30"
                                        src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}" alt="#"></div>
                                <div class="avatar"><img class="img-80 b-r-35"
                                        src="{{ asset('assets/images/user/2.png') }}" alt="#"></div>
                                <div class="avatar"><img class="img-70 rounded-circle"
                                        src="{{ asset('assets/images/user/12.png') }}" alt="#">
                                </div>
                            </div>
                            <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                    data-clipboard-target="#avatar-shapes" title="Copy"><i
                                        class="icofont icofont-copy-alt"></i></button>
                                <pre class="custom-scrollbar"><code class="language-html" id="avatar-shapes">&lt;div class="avatars"&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-100 b-r-8" src="{{ asset('assets/images/user/14.png') }}" alt="#"&gt;
 &lt;/div&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-90 b-r-30" src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}" alt="#"&gt;
 &lt;/div&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-80 b-r-35" src="{{ asset('assets/images/user/2.png') }}" alt="#"&gt;
 &lt;/div&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-70 rounded-circle" src="{{ asset('assets/images/user/12.png') }}" alt="#"&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card height-equal">
                        <div class="card-header">
                            <h4>Ratios</h4>
                            <p class="f-m-light mt-1">Use shape to avatar using <code>ratio</code> and
                                <code> img-* (50/70/80/90/100)</code> class.
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
                        <div class="card-body avatar-showcase">
                            <div class="avatars">
                                <div class="avatar ratio"><img class="b-r-8 img-100"
                                        src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}" alt="#"></div>
                                <div class="avatar ratio"><img class="b-r-8 img-90"
                                        src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}" alt="#"></div>
                                <div class="avatar ratio"><img class="b-r-8 img-80"
                                        src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}" alt="#"></div>
                                <div class="avatar ratio"><img class="b-r-8 img-70"
                                        src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}" alt="#"></div>
                                <div class="avatar ratio"><img class="b-r-8 img-50"
                                        src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}" alt="#"></div>
                            </div>
                            <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                    data-clipboard-target="#avatar-ratio" title="Copy"><i
                                        class="icofont icofont-copy-alt"></i></button>
                                <pre class="custom-scrollbar"><code class="language-html" id="avatar-ratio">&lt;div class="avatars"&gt;
 &lt;div class="avatar ratio"&gt;
   &lt;img class="b-r-8 img-100" src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}" alt="#"&gt;
 &lt;/div&gt;
 &lt;div class="avatar ratio"&gt;
   &lt;img class="b-r-8 img-90" src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}" alt="#"&gt;
 &lt;/div&gt;
 &lt;div class="avatar ratio"&gt;
   &lt;img class="b-r-8 img-80" src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}" alt="#"&gt;
 &lt;/div&gt;
 &lt;div class="avatar ratio"&gt;
   &lt;img class="b-r-8 img-70" src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}" alt="#"&gt;
 &lt;/div&gt;
 &lt;div class="avatar ratio"&gt;
   &lt;img class="b-r-8 img-50" src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}" alt="#"&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card height-equal">
                        <div class="card-header">
                            <h4>Grouping</h4>
                            <p class="f-m-light mt-1">Use group of avatars like <code>img-* (40/50/60/80/100) </code>and
                                <code>b-r-* (8/30/35)</code>.
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
                        <div class="card-body avatar-showcase">
                            <div class="avatars">
                                <div class="customers d-inline-block avatar-group">
                                    <ul>
                                        <li class="d-inline-block"><img class="img-100 b-r-8"
                                                src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                alt="#"></li>
                                        <li class="d-inline-block"><img class="img-80 b-r-30"
                                                src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                alt="#"></li>
                                        <li class="d-inline-block"><img class="img-50 b-r-35"
                                                src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                alt="#"></li>
                                    </ul>
                                </div>
                                <div class="customers d-inline-block avatar-group">
                                    <ul>
                                        <li class="d-inline-block"><img class="img-60 rounded-circle"
                                                src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                alt="#"></li>
                                        <li class="d-inline-block"><img class="b-r-8 img-80"
                                                src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                alt="#"></li>
                                        <li class="d-inline-block"><img class="img-60 rounded-circle"
                                                src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                alt="#"></li>
                                    </ul>
                                </div>
                                <div class="customers d-inline-block avatar-group">
                                    <ul>
                                        <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                alt=""></li>
                                        <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                alt=""></li>
                                        <li class="d-inline-block"><img class="img-40 rounded-circle"
                                                src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                    data-clipboard-target="#avatar-grouping" title="Copy"><i
                                        class="icofont icofont-copy-alt"></i></button>
                                <pre class="custom-scrollbar"><code class="language-html" id="avatar-grouping">&lt;div class="avatars"&gt;
 &lt;div class="customers d-inline-block avatar-group"&gt;
   &lt;ul&gt;
     &lt;li class="d-inline-block"&gt;
       &lt;img class="img-100 b-r-8" src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}" alt="#"&gt;
     &lt;/li&gt;
     &lt;li class="d-inline-block"&gt;
       &lt;img class="img-80 b-r-30" src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}" alt="#"&gt;
     &lt;/li&gt;
     &lt;li class="d-inline-block"&gt;
       &lt;img class="img-50 b-r-35" src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}" alt="#"&gt;
     &lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="customers d-inline-block avatar-group"&gt;
   &lt;ul&gt;
     &lt;li class="d-inline-block"&gt;
       &lt;img class="img-60 rounded-circle" src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}" alt="#"&gt;
     &lt;/li&gt;
     &lt;li class="d-inline-block"&gt;
       &lt;img class="b-r-8 img-80" src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}" alt="#"&gt;
     &lt;/li&gt;
     &lt;li class="d-inline-block"&gt;
       &lt;img class="img-60 rounded-circle" src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}" alt="#"&gt;
     &lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="customers d-inline-block avatar-group"&gt;
   &lt;ul&gt;
     &lt;li class="d-inline-block"&gt;
       &lt;img class="img-40 rounded-circle" src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}" alt=""&gt;
     &lt;/li&gt;
     &lt;li class="d-inline-block"&gt;
       &lt;img class="img-40 rounded-circle" src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}" alt=""&gt;
     &lt;/li&gt;
     &lt;li class="d-inline-block"&gt;
       &lt;img class="img-40 rounded-circle" src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}" alt=""&gt;
     &lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card height-equal">
                        <div class="card-header">
                            <h5>Badge-Indicator</h5>
                            <p class="f-m-light mt-1">Use<code> badge </code>class with avatar to indicate and provide
                                indication.</p>
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
                        <div class="card-body avatar-showcase">
                            <div class="avatars badge-avatar">
                                <div class="avatar"><img class="img-100 rounded-circle"
                                        src="{{ asset('assets/images/dashboard-9/user/1.png') }}" alt="#">
                                    <div class="badge badge-success position-absolute rounded-circle top-0 start-0">A</div>
                                </div>
                                <div class="avatar"><img class="img-90 rounded-circle"
                                        src="{{ asset('assets/images/dashboard-9/user/2.png') }}" alt="#">
                                    <div class="badge badge-warning position-absolute rounded-circle bottom-0 end-0">C
                                    </div>
                                </div>
                                <div class="avatar"><img class="img-80 rounded-circle"
                                        src="{{ asset('assets/images/dashboard-9/user/3.png') }}" alt="#">
                                    <div class="badge badge-danger position-absolute rounded-circle top-0 end-0">D</div>
                                </div>
                                <div class="avatar"><img class="img-70 rounded-circle"
                                        src="{{ asset('assets/images/dashboard-9/user/4.png') }}" alt="#">
                                    <div class="badge badge-success position-absolute rounded-circle bottom-0 start-0">B
                                    </div>
                                </div>
                            </div>
                            <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                    data-clipboard-target="#avatar-indicator" title="Copy"><i
                                        class="icofont icofont-copy-alt"></i></button>
                                <pre class="custom-scrollbar"><code class="language-html" id="avatar-indicator">&lt;div class="avatars badge-avatar"&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-100 rounded-circle" src="{{ asset('assets/images/dashboard-9/user/1.png') }}" alt="#"&gt;
   &lt;div class="badge badge-success position-absolute rounded-circle top-0 start-0"&gt;A&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-90 rounded-circle" src="{{ asset('assets/images/dashboard-9/user/2.png') }}" alt="#"&gt;
   &lt;div class="badge badge-warning position-absolute rounded-circle bottom-0 end-0"&gt;C&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-80 rounded-circle" src="{{ asset('assets/images/dashboard-9/user/3.png') }}" alt="#"&gt;
   &lt;div class="badge badge-danger position-absolute rounded-circle top-0 end-0"&gt;D&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-70 rounded-circle" src="{{ asset('assets/images/dashboard-9/user/4.png') }}" alt="#"&gt;
   &lt;div class="badge badge-success position-absolute rounded-circle bottom-0 start-0"&gt;B&lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card height-equal">
                        <div class="card-header">
                            <h5>Initial Letter Avatar</h5>
                            <p class="f-m-light mt-1">Use initial letter as a avatar.</p>
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
                        <div class="card-body common-align flex-column align-items-start align-items-lg-center">
                            <div class="letter-avatar">
                                <h6 class="txt-primary bg-light-primary">P </h6>
                                <h6 class="txt-secondary bg-light-secondary">I</h6>
                                <h6 class="txt-success bg-light-success">X</h6>
                                <h6 class="txt-danger bg-light-danger">E </h6>
                                <h6 class="txt-info bg-light-info">L</h6>
                            </div>
                            <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                    data-clipboard-target="#initial-letters" title="Copy"><i
                                        class="icofont icofont-copy-alt"></i></button>
                                <pre class="custom-scrollbar"><code class="language-html" id="initial-letters">&lt;div class="letter-avatar"&gt;
 &lt;h6 class="txt-primary bg-light-primary"&gt;P &lt;/h6&gt;
 &lt;h6 class="txt-secondary bg-light-secondary"&gt;I&lt;/h6&gt;
 &lt;h6 class="txt-success bg-light-success"&gt;X&lt;/h6&gt;
 &lt;h6 class="txt-danger bg-light-danger"&gt;E &lt;/h6&gt;
 &lt;h6 class="txt-info bg-light-info"&gt;L&lt;/h6&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card height-equal">
                        <div class="card-header">
                            <h5>Animated Avatar</h5>
                            <p class="f-m-light mt-1">Use<code> animation-ping </code>class with avatar to indicate
                                <code>active/offline/dnd</code> status.
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
                        <div class="card-body avatar-showcase">
                            <div class="avatars">
                                <div class="avatar"><img class="img-100 rounded-circle"
                                        src="{{ asset('assets/images/user/7.jpg') }}" alt="#">
                                    <div class="status bg-success animation-ping"></div>
                                </div>
                                <div class="avatar"><img class="img-90 rounded-circle"
                                        src="{{ asset('assets/images/user/3.jpg') }}" alt="#">
                                    <div class="status bg-warning animation-ping"></div>
                                </div>
                                <div class="avatar"><img class="img-80 rounded-circle"
                                        src="{{ asset('assets/images/user/2.jpg') }}" alt="#">
                                    <div class="status bg-danger animation-ping"></div>
                                </div>
                                <div class="avatar"><img class="img-70 rounded-circle"
                                        src="{{ asset('assets/images/user/11.png') }}" alt="#">
                                    <div class="status bg-success animation-ping"></div>
                                </div>
                            </div>
                            <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                    data-clipboard-target="#animated-avatar" title="Copy"><i
                                        class="icofont icofont-copy-alt"></i></button>
                                <pre class="custom-scrollbar"><code class="language-html" id="animated-avatar">&lt;div class="avatars"&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-100 rounded-circle" src="{{ asset('assets/images/user/7.jpg') }}" alt="#"&gt;
   &lt;div class="status bg-success animation-ping"&gt;&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-90 rounded-circle" src="{{ asset('assets/images/user/3.jpg') }}" alt="#"&gt;
   &lt;div class="status bg-warning animation-ping"&gt;&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-80 rounded-circle" src="{{ asset('assets/images/user/2.jpg') }}" alt="#"&gt;
   &lt;div class="status bg-danger animation-ping"&gt;&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="avatar"&gt;
   &lt;img class="img-70 rounded-circle" src="{{ asset('assets/images/user/11.png') }}" alt="#"&gt;
   &lt;div class="status bg-success animation-ping"&gt;&lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
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
