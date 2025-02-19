@extends('layouts.simple.master')

@section('title', 'Divider')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Divider</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Divider</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-4 col-md-6 box-col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal Solid Divider</h5>
                        <p class="mb-0 mt-1">Use <code>divider-body-1</code> class for linear divider.</p>
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
                    <div class="card-body main-divider">
                        <div class="divider-body divider-body-1 divider-primary">
                            <div class="divider-p-primary"><i class="fa-brands fa-modx me-2 txt-primary f-20"></i><span
                                    class="txt-primary">Primary</span></div>
                        </div>
                        <div class="divider-body divider-body-1 divider-secondary">
                            <div class="divider-p-secondary"><i
                                    class="fa-solid fa fa-recycle me-2 txt-secondary f-20"></i><span
                                    class="txt-secondary">Secondary </span></div>
                        </div>
                        <div class="divider-body divider-body-1 divider-success">
                            <div class="divider-p-success"><i class="fa-solid fa-leaf me-2 txt-success f-20"></i><span
                                    class="txt-success">Success</span></div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#horizontal-solid-divider" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="horizontal-solid-divider">&lt;div class="card-body main-divider"&gt;
   &lt;div class="divider-body divider-body-1 divider-primary"&gt; 
       &lt;div class="divider-p-primary"&gt;
           &lt;i class="fa-brands fa-modx me-2 txt-primary f-20"&gt;&lt;/i&gt;
           &lt;span class="txt-primary"&gt;Primary&lt;/span&gt;
       &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="divider-body divider-body-1 divider-secondary"&gt; 
       &lt;div class="divider-p-secondary"&gt;
           &lt;i class="fa-solid fa fa-recycle me-2 txt-secondary f-20"&gt;&lt;/i&gt;
           &lt;span class="txt-secondary"&gt;Secondary &lt;/span&gt;
       &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="divider-body divider-body-1 divider-success"&gt; 
       &lt;div class="divider-p-success"&gt;
           &lt;i class="fa-solid fa-leaf me-2 txt-success f-20"&gt;&lt;/i&gt;
           &lt;span class="txt-success"&gt;Success&lt;/span&gt;
       &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 box-col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal Dashed Divider</h5>
                        <p class="mb-0 mt-1">Use <code>divider-body-2</code> class for dashed divider.</p>
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
                    <div class="card-body main-divider">
                        <div class="divider-body divider-body-2 divider-danger">
                            <div class="divider-circle bg-light-danger"><i class="fa-solid fa-heart txt-danger"></i></div>
                        </div>
                        <div class="divider-body divider-body-2 divider-warning">
                            <div class="divider-circle bg-light-warning"><i class="fa-solid fa-star txt-warning"></i></div>
                        </div>
                        <div class="divider-body divider-body-2 divider-success">
                            <div class="divider-circle bg-light-success"><i class="fa-solid fa-trophy txt-success"></i>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#horizontal-dashed" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="horizontal-dashed">&lt;div class="card-body main-divider"&gt;
   &lt;div class="divider-body divider-body-2 divider-danger"&gt; 
       &lt;div class="divider-circle bg-light-danger"&gt;
           &lt;i class="fa-solid fa-heart txt-danger"&gt;&lt;/i&gt;
       &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="divider-body divider-body-2 divider-warning"&gt;
       &lt;div class="divider-circle bg-light-warning"&gt;
           &lt;i class="fa-solid fa-star txt-warning"&gt;&lt;/i&gt;
       &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="divider-body divider-body-2 divider-success"&gt;
       &lt;div class="divider-circle bg-light-success"&gt;
           &lt;i class="fa-solid fa-trophy txt-success"&gt;&lt;/i&gt;
       &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 box-col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal Dotted Divider</h5>
                        <p class="mb-0 mt-1">Use <code>divider-body-3</code> class for dotted divider.</p>
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
                    <div class="card-body main-divider">
                        <div class="divider-body divider-body-3 divider-primary">Primary</div>
                        <div class="divider-body divider-body-3 divider-secondary">Secondary</div>
                        <div class="divider-body divider-body-3 divider-warning">Warning</div>
                        <div class="divider-body divider-body-3 divider-info">Info</div>
                        <div class="divider-body divider-body-3 divider-dark">Dark</div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#horizontal-dotted" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="horizontal-dotted">&lt;div class="card-body main-divider"&gt;
   &lt;div class="divider-body divider-body-3 divider-primary"&gt;Primary&lt;/div&gt;
   &lt;div class="divider-body divider-body-3 divider-secondary"&gt;Secondary&lt;/div&gt;
   &lt;div class="divider-body divider-body-3 divider-warning"&gt;Warning&lt;/div&gt;
   &lt;div class="divider-body divider-body-3 divider-info"&gt;Info&lt;/div&gt;
   &lt;div class="divider-body divider-body-3 divider-dark"&gt;Dark&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 box-col-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Vertical Dashed Divider</h5>
                        <p class="mb-0 mt-1">Use <code>vertical-divider</code>
                            and<code> vertical-line</code> class for dashed divider.</p>
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
                    <div class="card-body main-divider">
                        <div class="row g-sm-2 d-flex gy-4">
                            <div class="col-sm-3 col-6">
                                <div class="vertical-divider">
                                    <div class="vertical-line bg-primary"></div>
                                    <p class="my-2 border border-primary">Primary</p>
                                    <div class="vertical-line bg-primary"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="vertical-divider">
                                    <div class="vertical-line bg-secondary"></div>
                                    <p class="my-2 border border-secondary rounded-pill">Secondary</p>
                                    <div class="vertical-line bg-secondary"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="vertical-divider">
                                    <div class="vertical-line bg-warning"></div><svg
                                        class="my-2 stroke-icon stroke-warning">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-social') }}"></use>
                                    </svg>
                                    <div class="vertical-line bg-warning"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="vertical-divider">
                                    <div class="vertical-line bg-success"></div>
                                    <p class="my-2 txt-success">Success</p>
                                    <div class="vertical-line bg-success"></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#vertical-dashed" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="vertical-dashed">&lt;div class="card-body main-divider"&gt;
   &lt;div class="row g-sm-2 d-flex gy-4"&gt;
       &lt;div class="col-sm-3 col-6"&gt;
           &lt;div class="vertical-divider"&gt;
               &lt;div class="vertical-line bg-primary"&gt;&lt;/div&gt;
               &lt;p class="my-2 border border-primary"&gt;Primary&lt;/p&gt;
               &lt;div class="vertical-line bg-primary"&gt;&lt;/div&gt;
           &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="col-sm-3 col-6"&gt;
           &lt;div class="vertical-divider"&gt;
               &lt;div class="vertical-line bg-secondary"&gt;&lt;/div&gt;
               &lt;p class="my-2 border border-secondary rounded-pill"&gt;Secondary&lt;/p&gt;
               &lt;div class="vertical-line bg-secondary"&gt;&lt;/div&gt;
           &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="col-sm-3 col-6"&gt;
           &lt;div class="vertical-divider"&gt;
               &lt;div class="vertical-line bg-warning"&gt;&lt;/div&gt;
               &lt;svg class="my-2 stroke-icon stroke-warning"&gt;
                   &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-social') }}"&gt;&lt;/use&gt;
               &lt;/svg&gt;
               &lt;div class="vertical-line bg-warning"&gt;&lt;/div&gt;
           &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="col-sm-3 col-6"&gt;
           &lt;div class="vertical-divider"&gt;
               &lt;div class="vertical-line bg-success"&gt;&lt;/div&gt;
               &lt;p class="my-2 txt-success"&gt;Success&lt;/p&gt;
               &lt;div class="vertical-line bg-success"&gt;&lt;/div&gt;
           &lt;/div&gt;
       &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 box-col-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Vertical Dotted Divider</h5>
                        <p class="mb-0 mt-1">Use <code>dotted-divider</code> and<code> vertical-line</code>
                            class for dotted divider.</p>
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
                    <div class="card-body main-divider">
                        <div class="row g-sm-2 d-flex dotted-divider gy-4">
                            <div class="col-sm-3 col-6">
                                <div class="vertical-divider">
                                    <div class="vertical-line bg-success"></div>
                                    <p class="my-2 border border-success">Success</p>
                                    <div class="vertical-line bg-success"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="vertical-divider">
                                    <div class="vertical-line bg-warning"></div>
                                    <p class="my-2 border border-warning rounded-pill">Warning</p>
                                    <div class="vertical-line bg-warning"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="vertical-divider">
                                    <div class="vertical-line bg-danger"></div><svg class="my-2 fill-icon fill-danger">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-starter-kit') }}"></use>
                                    </svg>
                                    <div class="vertical-line bg-danger"> </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="vertical-divider">
                                    <div class="vertical-line bg-dark"></div>
                                    <p class="my-2">Dark</p>
                                    <div class="vertical-line bg-dark"></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#vertical-dotted" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="vertical-dotted">&lt;div class="card-body main-divider"&gt;
   &lt;div class="row g-sm-2 d-flex dotted-divider gy-4"&gt;
       &lt;div class="col-sm-3 col-6"&gt;
           &lt;div class="vertical-divider"&gt;
               &lt;div class="vertical-line bg-success"&gt;&lt;/div&gt;
               &lt;p class="my-2 border border-success"&gt;Success&lt;/p&gt;
               &lt;div class="vertical-line bg-success"&gt;&lt;/div&gt;
           &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="col-sm-3 col-6"&gt;
           &lt;div class="vertical-divider"&gt;
               &lt;div class="vertical-line bg-warning"&gt;&lt;/div&gt;
               &lt;p class="my-2 border border-warning rounded-pill"&gt;Warning&lt;/p&gt;
               &lt;div class="vertical-line bg-warning"&gt;&lt;/div&gt;
           &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="col-sm-3 col-6"&gt;
           &lt;div class="vertical-divider"&gt;
               &lt;div class="vertical-line bg-danger"&gt;&lt;/div&gt;
               &lt;svg class="my-2 fill-icon fill-danger"&gt;
                   &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-starter-kit') }}"&gt;&lt;/use&gt;
               &lt;/svg&gt;
               &lt;div class="vertical-line bg-danger"&gt;&lt;/div&gt;
           &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="col-sm-3 col-6"&gt;
           &lt;div class="vertical-divider"&gt;
               &lt;div class="vertical-line bg-dark"&gt;&lt;/div&gt;
               &lt;p class="my-2"&gt;Dark&lt;/p&gt;
               &lt;div class="vertical-line bg-dark"&gt;&lt;/div&gt;
           &lt;/div&gt;
       &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 box-col-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Vertical Double Divider</h5>
                        <p class="mb-0 mt-1">Use <code>double-divider</code> and<code> vertical-line</code>
                            class for double divider.</p>
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
                    <div class="card-body main-divider">
                        <div class="row g-sm-2 d-flex double-divider gy-4">
                            <div class="col-sm-3 col-6">
                                <div class="vertical-divider">
                                    <div class="vertical-line bg-secondary"></div>
                                    <p class="my-2 border border-secondary">Secondary</p>
                                    <div class="vertical-line bg-secondary"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="vertical-divider">
                                    <div class="vertical-line bg-success"></div>
                                    <p class="my-2 border border-success rounded-pill">Success</p>
                                    <div class="vertical-line bg-success"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="vertical-divider">
                                    <div class="vertical-line bg-dark"></div><svg class="my-2 divider-dark-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#project-target') }}"></use>
                                    </svg>
                                    <div class="vertical-line bg-dark"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="vertical-divider">
                                    <div class="vertical-line bg-warning"></div>
                                    <p class="my-2 txt-warning">Warning</p>
                                    <div class="vertical-line bg-warning"></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#vertical-double-divider-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="vertical-double-divider-copy">&lt;div class="card-body main-divider"&gt;
   &lt;div class="row g-sm-2 d-flex double-divider gy-4"&gt;
       &lt;div class="col-sm-3 col-6"&gt;
           &lt;div class="vertical-divider"&gt;
               &lt;div class="vertical-line bg-secondary"&gt;&lt;/div&gt;
               &lt;p class="my-2 border border-secondary"&gt;Secondary&lt;/p&gt;
               &lt;div class="vertical-line bg-secondary"&gt;&lt;/div&gt;
           &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="col-sm-3 col-6"&gt;
           &lt;div class="vertical-divider"&gt;
               &lt;div class="vertical-line bg-success"&gt;&lt;/div&gt;
               &lt;p class="my-2 border border-success rounded-pill"&gt;Success&lt;/p&gt;
               &lt;div class="vertical-line bg-success"&gt;&lt;/div&gt;
           &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="col-sm-3 col-6"&gt;
           &lt;div class="vertical-divider"&gt;
               &lt;div class="vertical-line bg-dark"&gt;&lt;/div&gt;
               &lt;svg class="my-2 divider-dark-icon"&gt;
                   &lt;use href="{{ asset('assets/svg/icon-sprite.svg#project-target') }}"&gt;&lt;/use&gt;
               &lt;/svg&gt;
               &lt;div class="vertical-line bg-dark"&gt;&lt;/div&gt;
           &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="col-sm-3 col-6"&gt;
           &lt;div class="vertical-divider"&gt;
               &lt;div class="vertical-line bg-warning"&gt;&lt;/div&gt;
               &lt;p class="my-2 txt-warning"&gt;Warning&lt;/p&gt;
               &lt;div class="vertical-line bg-warning"&gt;&lt;/div&gt;
           &lt;/div&gt;
       &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Animated Color divider</h5>
                        <p class="mb-0 mt-1">Use <code>animated-line</code> and
                            <code>animated-divider </code> classes to create a linear animated divider.
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
                    <div class="card-body linear-divider">
                        <h6>Main Heading</h6>
                        <div class="animated-divider animated-line"></div>
                        <p class="mb-0 c-light">This CSS divider embodies simplicity at its finest, yet it
                            exudes an air of elegance and timelessness. Despite its minimalist design, it
                            commands attention effortlessly. While the divider takes center stage in this
                            arrangement, it seamlessly integrates with the overall aesthetic, allowing the
                            backdrop image to shine through. </p>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#animated-color" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="animated-color">&lt;div class="card-body linear-divider"&gt;
   &lt;h6&gt;Main Heading&lt;/h6&gt;
   &lt;div class="animated-divider animated-line"&gt;&lt;/div&gt;
   &lt;p class="mb-0 c-light"&gt;This CSS divider embodies simplicity at its finest, yet it exudes an air of elegance and timelessness. Despite its minimalist design, it commands attention effortlessly. While the divider takes center stage in this arrangement, it seamlessly integrates with the overall aesthetic, allowing the backdrop image to shine through. &lt;/p&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal Editable Divider</h5>
                        <p class="mb-0 mt-1">Use<code> horizontal-variation</code> and
                            <code>double-line-*</code> classes to create a thickness divider.
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
                    <div class="card-body main-divider horizontal-variation">
                        <div class="divider linear-line double-line double-line-1" contenteditable="true">
                            Primary</div>
                        <div class="divider linear-line double-line double-line-2" contenteditable="true">
                            Secondary</div>
                        <div class="divider linear-line double-line double-line-3" contenteditable="true">
                            Success</div>
                        <div class="divider linear-line double-line double-line-4" contenteditable="true">
                            Warning</div>
                        <div class="divider linear-line double-line double-line-5" contenteditable="true">
                            Danger</div>
                        <div class="divider linear-line double-line double-line-6" contenteditable="true">
                            Info</div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#horizontal-editable" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="horizontal-editable">&lt;div class="card-body main-divider horizontal-variation"&gt;
   &lt;div class="divider linear-line double-line double-line-1" contenteditable="true"&gt;Primary&lt;/div&gt;
   &lt;div class="divider linear-line double-line double-line-2" contenteditable="true"&gt;Secondary&lt;/div&gt;
   &lt;div class="divider linear-line double-line double-line-3" contenteditable="true"&gt;Success&lt;/div&gt;
   &lt;div class="divider linear-line double-line double-line-4" contenteditable="true"&gt;Warning&lt;/div&gt;
   &lt;div class="divider linear-line double-line double-line-5" contenteditable="true"&gt;Danger&lt;/div&gt;
   &lt;div class="divider linear-line double-line double-line-6" contenteditable="true"&gt;Info&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Simple Horizontal Divider</h5>
                        <p class="mb-0 mt-1">Use <code>divider-h-line</code> class for horizontal divider.
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
                    <div class="card-body main-divider">
                        <div class="divider-h-line bg-primary"></div>
                        <div class="divider-h-line bg-secondary"></div>
                        <div class="divider-h-line bg-success"></div>
                        <div class="divider-h-line bg-info"></div>
                        <div class="divider-h-line bg-warning"> </div>
                        <div class="divider-h-line bg-danger"></div>
                        <div class="divider-h-line bg-dark"></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#horizontal-divider" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="horizontal-divider">&lt;div class="card-body main-divider"&gt;
   &lt;div class="divider-h-line bg-primary"&gt;&lt;/div&gt;
   &lt;div class="divider-h-line bg-secondary"&gt;&lt;/div&gt;
   &lt;div class="divider-h-line bg-success"&gt;&lt;/div&gt;
   &lt;div class="divider-h-line bg-info"&gt;&lt;/div&gt;
   &lt;div class="divider-h-line bg-warning"&gt;&lt;/div&gt;
   &lt;div class="divider-h-line bg-danger"&gt;&lt;/div&gt;
   &lt;div class="divider-h-line bg-dark"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Simple Vertical Divider</h5>
                        <p class="mb-0 mt-1">Use <code>vr</code> class for vertical divider.</p>
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
                    <div class="card-body main-divider">
                        <div class="common-align">
                            <div class="vr bg-primary"></div>
                            <div class="vr bg-secondary"></div>
                            <div class="vr bg-success"></div>
                            <div class="vr bg-info"></div>
                            <div class="vr bg-warning"> </div>
                            <div class="vr bg-danger"></div>
                            <div class="vr bg-dark"></div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#vertical-divider" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="vertical-divider">&lt;div class="card-body main-divider"&gt;
   &lt;div class="common-align"&gt;
       &lt;div class="vr bg-primary"&gt;&lt;/div&gt;
       &lt;div class="vr bg-secondary"&gt;&lt;/div&gt;
       &lt;div class="vr bg-success"&gt;&lt;/div&gt;
       &lt;div class="vr bg-info"&gt;&lt;/div&gt;
       &lt;div class="vr bg-warning"&gt;&lt;/div&gt;
       &lt;div class="vr bg-danger"&gt;&lt;/div&gt;
       &lt;div class="vr bg-dark"&gt;&lt;/div&gt;
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
