@extends('layouts.simple.master')

@section('title', 'Progress')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Progress</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Progress</li>
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
                        <h5>Initial Progress Bars</h5>
                        <p class="f-m-light mt-1">Progress components are built with two HTML elements, some CSS to set the
                            width, and a few attributes.
                            We use the <code> progress </code>as a wrapper to indicate the max value of the progress bar.
                            The
                            <code> progress-bar </code>requires an inline style, utility class, or custom CSS to set their
                            width.
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
                    <div class="card-body progress-showcase">
                        <div class="row">
                            <div class="col">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                        aria-valuemax="100"> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#progress-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="progress-copy">&lt;div class="row"&gt;
 &lt;div class="col"&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"&gt; &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;25%&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;50%&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;75%&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;100%&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Striped Progress Bars</h5>
                                <p class="f-m-light mt-1">Add <code> progress-bar-striped</code> to any
                                    <code> progress-bar </code> to apply a stripe via CSS gradient over the progress bar's
                                    background color Using CSS Effects.
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
                            <div class="card-body progress-showcase">
                                <div class="row">
                                    <div class="col">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                                                style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                                style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                                style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                        data-clipboard-target="#striped-copy" title="Copy"><i
                                            class="icofont icofont-copy-alt"></i></button>
                                    <pre class="custom-scrollbar"><code class="language-html" id="striped-copy">&lt;div class="row"&gt;
 &lt;div class="col"&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
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
                                <h5>Animated Progress Bars</h5>
                                <p class="f-m-light mt-1">The striped gradient can also be animated. Add
                                    <code> progress-bar-animated</code> to<code> progress-bar</code> to animate the stripes
                                    right to
                                    left via CSS3 animations.
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
                            <div class="card-body progress-showcase">
                                <div class="row">
                                    <div class="col">
                                        <div class="progress">
                                            <div class="progress-bar-animated bg-primary progress-bar-striped"
                                                role="progressbar" style="width: 10%" aria-valuenow="10"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar-animated progress-bar-striped bg-warning"
                                                role="progressbar" style="width: 25%" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar-animated progress-bar-striped bg-danger"
                                                role="progressbar" style="width: 50%" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar-animated progress-bar-striped bg-success"
                                                role="progressbar" style="width: 75%" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                        data-clipboard-target="#animated-copy" title="Copy"><i
                                            class="icofont icofont-copy-alt"></i></button>
                                    <pre class="custom-scrollbar"><code class="language-html" id="animated-copy">&lt;div class="row"&gt;
 &lt;div class="col"&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar-animated progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar-animated progress-bar-striped bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar-animated progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Multiple Bars</h5>
                                <p class="f-m-light mt-1">Include multiple progress bars in a progress component if you
                                    need.</p>
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
                            <div class="card-body progress-showcase">
                                <div class="row">
                                    <div class="col">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 15%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 10%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 10%"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 10%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 10%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 10%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 10%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 10%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="progressbar" style="width: 10%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                        data-clipboard-target="#multiple-copy" title="Copy"><i
                                            class="icofont icofont-copy-alt"></i></button>
                                    <pre class="custom-scrollbar"><code class="language-html" id="multiple-copy">&lt;div class="row"&gt;
 &lt;div class="col"&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
     &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
     &lt;div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
     &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
     &lt;div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
     &lt;div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
     &lt;div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
     &lt;div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
     &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
     &lt;div class="progress-bar bg-light" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
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
                                <h5>Progress with Number Steps</h5>
                                <p class="f-m-light mt-1"> Use the <code> position-absolute </code>to set progress numbers
                                    steps.
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
                                <div class="position-relative m-3 progress-number">
                                    <div class="progress progress-wrapper">
                                        <div class="progress-bar" role="progressbar" aria-label="Progress"
                                            style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div><button
                                        class="position-absolute top-0 start-0 translate-middle btn-sm btn-primary rounded-circle"
                                        type="button">1</button><button
                                        class="position-absolute top-0 start-50 translate-middle btn-sm btn-primary rounded-circle"
                                        type="button">2</button><button
                                        class="progress-btn position-absolute top-0 start-100 translate-middle btn-sm rounded-circle"
                                        type="button">3</button>
                                </div>
                                <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                        data-clipboard-target="#progress-strap-copy" title="Copy"><i
                                            class="icofont icofont-copy-alt"></i></button>
                                    <pre class="custom-scrollbar"><code class="language-html" id="progress-strap-copy">&lt;div class="position-relative m-3 progress-number"&gt;
 &lt;div class="progress progress-wrapper"&gt;
   &lt;div class="progress-bar" role="progressbar" aria-label="Progress" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
 &lt;/div&gt;
 &lt;button class="position-absolute top-0 start-0 translate-middle btn-sm btn-primary rounded-circle" type="button"&gt;1&lt;/button&gt;
 &lt;button class="position-absolute top-0 start-50 translate-middle btn-sm btn-primary rounded-circle" type="button"&gt;2&lt;/button&gt;
 &lt;button class="progress-btn position-absolute top-0 start-100 translate-middle btn-sm rounded-circle" type="button"&gt;3&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Progress Bars</h5>
                        <p class="f-m-light mt-1">Use the <code> progress-bar-animated </code>and
                            <code> progress-bar-striped </code>to animate the stripes right to left.
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
                    <div class="card-body progress-showcase">
                        <div class="row">
                            <div class="col">
                                <h6 class="mb-2">0% Getting Started </h6>
                                <div class="progress mb-4">
                                    <div class="progress-bar-animated progress-bar-striped text-center" role="progressbar"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"> </div>
                                </div>
                                <h6 class="mb-2">30% Getting Uploading...</h6>
                                <div class="progress mb-4">
                                    <div class="progress-bar-animated progress-bar-striped bg-primary text-center"
                                        role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                        aria-valuemax="100">30%</div>
                                </div>
                                <h6 class="mb-2">60% Getting Pause...</h6>
                                <div class="progress mb-4">
                                    <div class="progress-bar-animated progress-bar-striped bg-secondary text-center"
                                        role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100">60%</div>
                                </div>
                                <h6 class="mb-2">70% Getting Uploading...</h6>
                                <div class="progress mb-4">
                                    <div class="progress-bar-animated progress-bar-striped bg-success text-center"
                                        role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100">70%</div>
                                </div>
                                <h6 class="mb-2">100% Completed</h6>
                                <div class="progress">
                                    <div class="progress-bar-animated progress-bar-striped bg-dark text-center"
                                        role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100">100%</div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#custom-progress-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="custom-progress-copy">&lt;div class="row"&gt;
 &lt;div class="col"&gt;
   &lt;h6 class="mb-2"&gt;0% Getting Started &lt;/h6&gt;
   &lt;div class="progress mb-4"&gt;
     &lt;div class="progress-bar-animated progress-bar-striped text-center" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;h6 class="mb-2"&gt;30% Getting Uploading...&lt;/h6&gt;
   &lt;div class="progress mb-4"&gt;
     &lt;div class="progress-bar-animated progress-bar-striped bg-primary text-center" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"&gt;30%&lt;/div&gt;
   &lt;/div&gt;
   &lt;h6 class="mb-2"&gt;60% Getting Pause...&lt;/h6&gt;
   &lt;div class="progress mb-4"&gt;
     &lt;div class="progress-bar-animated progress-bar-striped bg-secondary text-center" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;60%&lt;/div&gt;
   &lt;/div&gt;
   &lt;h6 class="mb-2"&gt;70% Getting Uploading...&lt;/h6&gt;
   &lt;div class="progress mb-4"&gt;
     &lt;div class="progress-bar-animated progress-bar-striped bg-success text-center" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"&gt;70%&lt;/div&gt;
   &lt;/div&gt;
   &lt;h6 class="mb-2"&gt;100% Completed&lt;/h6&gt;
   &lt;div class="progress"&gt;
     &lt;div class="progress-bar-animated progress-bar-striped bg-dark text-center" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;100%&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card height-equal">
                            <div class="card-header">
                                <h5>Small Progress Bars</h5>
                                <p class="f-m-light mt-1">Use <code> sm-progress-bar</code> class to change progress size
                                    to
                                    small.</p>
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
                            <div class="card-body progress-showcase progress-b-space">
                                <div class="row">
                                    <div class="col">
                                        <div class="progress sm-progress-bar overflow-visible mt-4">
                                            <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                                                role="progressbar" style="width: 30%" aria-valuenow="30"
                                                aria-valuemin="0" aria-valuemax="100"><span
                                                    class="txt-primary progress-label">30 MB Data</span><span
                                                    class="animate-circle"></span></div>
                                        </div>
                                        <div class="progress sm-progress-bar overflow-visible">
                                            <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                                                role="progressbar" style="width: 50%" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100"><span
                                                    class="txt-primary progress-label">50 MB Data</span><span
                                                    class="animate-circle"></span></div>
                                        </div>
                                        <div class="progress sm-progress-bar overflow-visible">
                                            <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                                                role="progressbar" style="width: 75%" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100"><span
                                                    class="txt-primary progress-label">75 MB Data</span><span
                                                    class="animate-circle"></span></div>
                                        </div>
                                        <div class="progress sm-progress-bar overflow-visible">
                                            <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                                                role="progressbar" style="width: 90%" aria-valuenow="90"
                                                aria-valuemin="0" aria-valuemax="100"><span
                                                    class="txt-primary progress-label">90 MB Data</span><span
                                                    class="animate-circle"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                        data-clipboard-target="#small-progress-copy" title="Copy"><i
                                            class="icofont icofont-copy-alt"></i></button>
                                    <pre class="custom-scrollbar"><code class="language-html" id="small-progress-copy">&lt;div class="row"&gt;
 &lt;div class="col"&gt;
   &lt;div class="progress sm-progress-bar overflow-visible mt-4"&gt;
     &lt;div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"&gt;&lt;;span class="txt-primary progress-label"&gt;30 MB Data&lt;/span&gt;&lt;;span class="animate-circle"&gt;&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress sm-progress-bar overflow-visible"&gt;
     &lt;div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;;span class="txt-primary progress-label"&gt;50 MB Data&lt;/span&gt;&lt;;span class="animate-circle"&gt;&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress sm-progress-bar overflow-visible"&gt;
     &lt;div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;;span class="txt-primary progress-label"&gt;75 MB Data&lt;/span&gt;&lt;;span class="animate-circle"&gt;&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress sm-progress-bar overflow-visible"&gt;
     &lt;div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"&gt;&lt;;span class="txt-primary progress-label"&gt;90 MB Data&lt;/span&gt;&lt;;span class="animate-circle"&gt;&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card height-equal">
                            <div class="card-header">
                                <h5>Large Progress Bars</h5>
                                <p class="f-m-light mt-1">Use <code> lg-progress-bar</code> class to change progress size
                                    to
                                    large.</p>
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
                            <div class="card-body progress-showcase">
                                <div class="row">
                                    <div class="col">
                                        <div class="progress lg-progress-bar">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                        <div class="progress lg-progress-bar">
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                        <div class="progress lg-progress-bar">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                        <div class="progress lg-progress-bar">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 100%"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                        data-clipboard-target="#large-progress-copy" title="Copy"><i
                                            class="icofont icofont-copy-alt"></i></button>
                                    <pre class="custom-scrollbar"><code class="language-html" id="large-progress-copy">&lt;div class="row"&gt;
 &lt;div class="col"&gt;
   &lt;div class="progress lg-progress-bar"&gt;
     &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;25%&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress lg-progress-bar"&gt;
     &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;50%&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress lg-progress-bar"&gt;
     &lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;75%&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress lg-progress-bar"&gt;
     &lt;div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;100%&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Height Progress Bars</h5>
                        <p class="f-m-light mt-1">Set a height value on the <code> progress-bar</code>, so if you change
                            that
                            value the outer<code> progress</code> will automatically resize accordingly.</p>
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
                    <div class="card-body progress-showcase">
                        <div class="row">
                            <div class="col">
                                <div class="progress" style="height: 1px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress" style="height: 11px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress" style="height: 19px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#height-progress-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="height-progress-copy">&lt;div class="row"&gt;
 &lt;div class="col"&gt;
   &lt;div class="progress" style="height: 1px;"&gt;
     &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress" style="height: 5px;"&gt;
     &lt;div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress" style="height: 11px;"&gt;
     &lt;div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="progress" style="height: 19px;"&gt;
     &lt;div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
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
                        <h5>Step Progressbar</h5>
                        <p class="f-m-light mt-1">Use <code> step-progress-wrapper</code> class to make step progressbar.
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
                    <div class="card-body progress-showcase step-progress-wrapper">
                        <div class="step-progress-box">
                            <ul class="custom-scrollbar">
                                <li><i class="bookmark-search" data-feather="user"></i>
                                    <div class="p-step first active">
                                        <p>1</p><i class="bookmark-search" data-feather="check"></i>
                                    </div>
                                    <h6>Profile</h6>
                                </li>
                                <li><i class="bookmark-search" data-feather="database"></i>
                                    <div class="p-step second active">
                                        <p>2</p><i class="bookmark-search" data-feather="check"></i>
                                    </div>
                                    <h6>Finance</h6>
                                </li>
                                <li><i class="bookmark-search" data-feather="home"></i>
                                    <div class="p-step third active">
                                        <p>3</p><i class="bookmark-search" data-feather="check"></i>
                                    </div>
                                    <h6>Property</h6>
                                </li>
                                <li><i class="bookmark-search" data-feather="star"></i>
                                    <div class="p-step fourth">
                                        <p>4</p><i class="bookmark-search" data-feather="check"></i>
                                    </div>
                                    <h6>Review</h6>
                                </li>
                                <li><i class="bookmark-search" data-feather="check-circle"></i>
                                    <div class="p-step fifth">
                                        <p>5</p><i class="bookmark-search" data-feather="check"></i>
                                    </div>
                                    <h6>Authorization</h6>
                                </li>
                            </ul>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#step-progress-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="step-progress-copy">&lt;div class="step-progress-box"&gt;
 &lt;ul class="custom-scrollbar"&gt;
   &lt;li&gt;&lt;i class="bookmark-search" data-feather="user"&gt;&lt;/i&gt;
     &lt;div class="p-step first active"&gt;
       &lt;p&gt;1&lt;/p&gt;&lt;i class="bookmark-search" data-feather="check"&gt;&lt;/i&gt;
     &lt;/div&gt;
     &lt;h6&gt;Profile&lt;/h6&gt;
   &lt;/li&gt;
   &lt;li&gt;&lt;i class="bookmark-search" data-feather="database"&gt;&lt;/i&gt;
     &lt;div class="p-step second active"&gt;
       &lt;p&gt;2&lt;/p&gt;&lt;i class="bookmark-search" data-feather="check"&gt;&lt;/i&gt;
     &lt;/div&gt;
     &lt;h6&gt;Finance&lt;/h6&gt;
   &lt;/li&gt;
   &lt;li&gt;&lt;i class="bookmark-search" data-feather="home"&gt;&lt;/i&gt;
     &lt;div class="p-step third"&gt;
       &lt;p&gt;3&lt;/p&gt;&lt;i class="bookmark-search" data-feather="check"&gt;&lt;/i&gt;
     &lt;/div&gt;
     &lt;h6&gt;Property&lt;/h6&gt;
   &lt;/li&gt;
   &lt;li&gt;&lt;i class="bookmark-search" data-feather="star"&gt;&lt;/i&gt;
     &lt;div class="p-step fourth"&gt;
       &lt;p&gt;4&lt;/p&gt;&lt;i class="bookmark-search" data-feather="check"&gt;&lt;/i&gt;
     &lt;/div&gt;
     &lt;h6&gt;Review&lt;/h6&gt;
   &lt;/li&gt;
   &lt;li&gt;&lt;i class="bookmark-search" data-feather="check-circle"&gt;&lt;/i&gt;
     &lt;div class="p-step fifth"&gt;
       &lt;p&gt;5&lt;/p&gt;&lt;i class="bookmark-search" data-feather="check"&gt;&lt;/i&gt;
     &lt;/div&gt;
     &lt;h6&gt;Authorization&lt;/h6&gt;
   &lt;/li&gt;
 &lt;/ul&gt;
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
    <script src="{{ asset('assets/js/custom-progress.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
