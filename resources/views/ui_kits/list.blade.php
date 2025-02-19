@extends('layouts.simple.master')

@section('title', 'Lists')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Lists</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Lists</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card list-with-icon">
                    <div class="card-header">
                        <h5>Default Lists </h5>
                        <p class="f-m-light mt-1"> Use <code> list-group </code>define the list of items and used
                            <code> list-group-item </code>to indicate the current content.
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
                        <ul class="list-group">
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>Logo design</li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>Web development </li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>E-commerce</li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>SEO</li>
                        </ul>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#common-lists" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="common-lists">&lt;ul class="list-group"&gt;
 &lt;li class="list-group-item"&gt;
   &lt;i class="icofont icofont-arrow-right"&gt;&lt;/i&gt;Logo design
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;i class="icofont icofont-arrow-right"&gt;&lt;/i&gt;Web development
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;i class="icofont icofont-arrow-right"&gt;&lt;/i&gt;E-commerce
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;i class="icofont icofont-arrow-right"&gt;&lt;/i&gt;SEO
 &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card list-with-icon">
                    <div class="card-header">
                        <h5>Active Lists </h5>
                        <p class="f-m-light mt-1"> Add <code>active </code>to a <code>list-group-item </code>to indicate the
                            current active selection.</p>
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
                        <ul class="list-group">
                            <li class="list-group-item active bg-warning-light" aria-current="true"><i
                                    class="icofont icofont-arrow-right"> </i>UI kits</li>
                            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>Wow animations</li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"> </i>Apex charts</li>
                            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>Starter kits</li>
                        </ul>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#active-list" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="active-list">&lt;ul class="list-group"&gt;
 &lt;li class="list-group-item active bg-warning-light" aria-current="true"&gt;
   &lt;i class="icofont icofont-arrow-right"&gt;&lt;/i&gt;UI kits
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;i class="icofont icofont-arrow-right"&gt;&lt;/i&gt;Wow animations
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;i class="icofont icofont-arrow-right"&gt;&lt;/i&gt;Apex charts
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;i class="icofont icofont-arrow-right"&gt;&lt;/i&gt;Starter kits
 &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card list-with-icon">
                    <div class="card-header">
                        <h5>Flush Lists</h5>
                        <p class="f-m-light mt-1"> Use <code> list-group-flush</code> to remove some borders and rounded
                            corners to render list group items.</p>
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
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="icofont icofont-chart-histogram-alt"></i>Charts</li>
                            <li class="list-group-item"><i class="icofont icofont-warning"></i>Alerts</li>
                            <li class="list-group-item"><i class="icofont icofont-cart"></i>Cart</li>
                            <li class="list-group-item"><i class="icofont icofont-checked"></i>Checkout</li>
                        </ul>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#flush-list" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="flush-list">&lt;ul class="list-group list-group-flush"&gt;
 &lt;li class="list-group-item"&gt;&lt;i class="icofont icofont-chart-histogram-alt"&gt;&lt;/i&gt;Charts&lt;/li&gt;
 &lt;li class="list-group-item"&gt;&lt;i class="icofont icofont-warning"&gt;&lt;/i&gt;Alerts&lt;/li&gt;
 &lt;li class="list-group-item"&gt;&lt;i class="icofont icofont-cart"&gt;&lt;/i&gt;Cart&lt;/li&gt;
 &lt;li class="list-group-item"&gt;&lt;i class="icofont icofont-checked"&gt;&lt;/i&gt;Checkout&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-sm-12 box-col-12">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Contextual Classes</h5>
                        <p class="f-m-light mt-1">Use contextual classes to style list items with a stateful background and
                            colors.<code> list-light-*</code> and <code> txt-*</code>.</p>
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
                    <div class="card-body contextual-wrapper">
                        <div class="list-group"><a class="list-group-item list-group-item-action list-light-primary"
                                href="#!">This is primary bg you can use <em
                                    class="txt-primary fw-bold">.list-light-primary</em>
                                class.</a><a class="list-group-item list-group-item-action list-light-secondary"
                                href="#!">This is
                                secondary bg you can use <em class="txt-secondary fw-bold">.list-light-secondary</em>
                                class.</a><a class="list-group-item list-group-item-action list-light-success"
                                href="#!">This is success bg you
                                can use <em class="txt-success fw-bold">.list-light-success</em> class.</a><a
                                class="list-group-item list-group-item-action list-light-danger" href="#!">This is
                                danger bg you
                                can use<em class="txt-danger fw-bold">.list-light-danger</em> class.</a><a
                                class="list-group-item list-group-item-action list-light-warning" href="#!">This is
                                warning bg you
                                can use <em class="txt-warning fw-bold">.list-light-warning</em> class.</a><a
                                class="list-group-item list-group-item-action list-light-info" href="#!">This is info
                                bg you can
                                use <em class="txt-info fw-bold">.list-light-info</em> class.</a><a
                                class="list-group-item list-group-item-action list-light-white" href="#!">This is
                                white bg you can
                                use <em class="txt-white fw-bold">.list-light-white</em> class.</a><a
                                class="list-group-item list-group-item-action list-light-dark" href="#!">This is
                                white bg you can
                                use <em class="txt-white fw-bold">.list-light-dark</em> class.</a></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#contextual-list" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="contextual-list">&lt;div class="card-body contextual-wrapper"&gt; 
 &lt;div class="list-group"&gt;
   &lt;a class="list-group-item list-group-item-action list-light-primary" href="#!"&gt;This is primary bg you can use
     &lt;em class="txt-primary fw-bold"&gt;.list-light-primary&lt;/em&gt;class.
   &lt;/a&gt;
   &lt;a class="list-group-item list-group-item-action list-light-secondary" href="#!"&gt;This is secondary bg you can use
     &lt;em class="txt-secondary fw-bold"&gt;.list-light-secondary&lt;/em&gt;class.
   &lt;/a&gt;
   &lt;a class="list-group-item list-group-item-action list-light-success" href="#!"&gt;This is success bg you can use
     &lt;em class="txt-success fw-bold"&gt;.list-light-success&lt;/em&gt;class.
   &lt;/a&gt;
   &lt;a class="list-group-item list-group-item-action list-light-danger" href="#!"&gt;This is danger bg you can use
     &lt;em class="txt-danger fw-bold"&gt;.list-light-danger&lt;/em&gt;class.
   &lt;/a&gt;
   &lt;a class="list-group-item list-group-item-action list-light-warning" href="#!"&gt;This is warning bg you can use
     &lt;em class="txt-warning fw-bold"&gt;.list-light-warning&lt;/em&gt;class.
   &lt;/a&gt;
   &lt;a class="list-group-item list-group-item-action list-light-info" href="#!"&gt;This is info bg you can use
     &lt;em class="txt-info fw-bold"&gt;.list-light-info&lt;/em&gt;class.
   &lt;/a&gt;
   &lt;a class="list-group-item list-group-item-action list-light-white" href="#!"&gt;This is white bg you can use
     &lt;em class="txt-white fw-bold"&gt;.list-light-white&lt;/em&gt;class.
   &lt;/a&gt;
   &lt;a class="list-group-item list-group-item-action list-light-dark" href="#!"&gt;This is white bg you can use
     &lt;em class="txt-white fw-bold"&gt;.list-light-dark&lt;/em&gt;class.
   &lt;/a&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-12 box-col-12">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Horizontal Lists</h5>
                        <p class="f-m-light mt-1">Use <code> list-group-horizontal</code> to change the layout of list
                            group
                            items from vertical to horizontal across all
                            breakpoints.<code> list-group-horizontal-[sm / md / lg / xl / xxl ]</code>.</p>
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
                        <div class="horizontal-list-wrapper dark-list">
                            <ul class="fw-bold list-group list-group-horizontal-sm pb-2">
                                <li class="list-group-item border-left-primary">Product </li>
                                <li class="list-group-item">Product details</li>
                                <li class="list-group-item">Pricing</li>
                                <li class="list-group-item">Payment details</li>
                                <li class="list-group-item">Checkout </li>
                                <li class="list-group-item">Mega options </li>
                            </ul>
                            <ul class="fw-bold list-group list-group-horizontal-md pb-2">
                                <li class="list-group-item border-left-secondary">Basic table</li>
                                <li class="list-group-item">Sizing table </li>
                                <li class="list-group-item">Border table</li>
                                <li class="list-group-item">Basic inputs </li>
                                <li class="list-group-item">Form validations</li>
                            </ul>
                            <ul class="fw-bold list-group list-group-horizontal-lg pb-2">
                                <li class="list-group-item border-left-warning">Flat style </li>
                                <li class="list-group-item">Edge style </li>
                                <li class="list-group-item">Button group</li>
                                <li class="list-group-item">Rating</li>
                                <li class="list-group-item">Crypto</li>
                            </ul>
                            <ul class="fw-bold list-group list-group-horizontal-xl pb-2">
                                <li class="list-group-item border-left-success">Blog </li>
                                <li class="list-group-item">Blog details </li>
                                <li class="list-group-item">Blog single </li>
                                <li class="list-group-item">Order history </li>
                            </ul>
                            <ul class="fw-bold list-group list-group-horizontal-xxl">
                                <li class="list-group-item border-left-info">Gallery grid </li>
                                <li class="list-group-item">Gallery desc</li>
                                <li class="list-group-item">Masonry Desc</li>
                            </ul>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#horizontal-list" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="horizontal-list">&lt;div class="horizontal-list-wrapper dark-list"&gt;
 &lt;ul class="fw-bold list-group list-group-horizontal-sm pb-2"&gt;
   &lt;li class="list-group-item border-left-primary"&gt;Product &lt;/li&gt;
   &lt;li class="list-group-item"&gt;Product details&lt;/li&gt;
   &lt;li class="list-group-item"&gt;Pricing&lt;/li&gt;
   &lt;li class="list-group-item"&gt;Payment details&lt;/li&gt;
   &lt;li class="list-group-item"&gt;Checkout &lt;/li&gt;
   &lt;li class="list-group-item"&gt;Mega options &lt;/li&gt;
 &lt;/ul&gt;
 &lt;ul class="fw-bold list-group list-group-horizontal-md pb-2"&gt;
   &lt;li class="list-group-item border-left-secondary"&gt;Basic table&lt;/li&gt;
   &lt;li class="list-group-item"&gt;Sizing table &lt;/li&gt;
   &lt;li class="list-group-item"&gt;Border table&lt;/li&gt;
   &lt;li class="list-group-item"&gt;Basic inputs &lt;/li&gt;
   &lt;li class="list-group-item"&gt;Form validations&lt;/li&gt;
 &lt;/ul&gt;
 &lt;ul class="fw-bold list-group list-group-horizontal-lg pb-2"&gt;
   &lt;li class="list-group-item border-left-warning"&gt;Flat style &lt;/li&gt;
   &lt;li class="list-group-item"&gt;Edge style &lt;/li&gt;
   &lt;li class="list-group-item"&gt;Button group&lt;/li&gt;
   &lt;li class="list-group-item"&gt;Rating&lt;/li&gt;
   &lt;li class="list-group-item"&gt;Crypto&lt;/li&gt;
 &lt;/ul&gt;
 &lt;ul class="fw-bold list-group list-group-horizontal-xl pb-2"&gt;
   &lt;li class="list-group-item border-left-success"&gt;Blog &lt;/li&gt;
   &lt;li class="list-group-item"&gt;Blog details &lt;/li&gt;
   &lt;li class="list-group-item"&gt;Blog single &lt;/li&gt;
   &lt;li class="list-group-item"&gt;Order history &lt;/li&gt;
 &lt;/ul&gt;
 &lt;ul class="fw-bold list-group list-group-horizontal-xxl"&gt;
   &lt;li class="list-group-item border-left-info"&gt;Gallery grid &lt;/li&gt;
   &lt;li class="list-group-item"&gt;Gallery desc&lt;/li&gt;
   &lt;li class="list-group-item"&gt;Masonry Desc&lt;/li&gt;
 &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Content Lists</h5>
                        <p class="f-m-light mt-1">Use <code> list-group-item</code> through make custom design of all
                            lists.
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
                        <div class="list-group main-lists-content pt-0"><a
                                class="list-group-item list-group-item-action active bg-primary" href="#"
                                aria-current="true">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div class="list-wrapper"><img class="list-img me-0"
                                            src="{{ asset('assets/images/user/1.jpg') }}" alt="profile">
                                        <div class="list-content">
                                            <h6>Molly Blake</h6>
                                            <p>MollyBoake@rhyta.com</p>
                                        </div>
                                    </div><small>5 days ago</small>
                                </div>
                                <p class="mb-1">Next step is to choose a tone of voice for your content type. From casual
                                    to
                                    convincing, pick one from 20+ tones in the dropdown.Why did we say “snag eyeballs”
                                    instead of
                                    “get attention?” Why do we say “brick-and-mortar words” instead of “concrete words?”
                                    Because, in
                                    your email subject lines, it’s better to use words that people can picture.</p>
                                <small>20K
                                    Followers</small>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div class="list-wrapper"><img class="list-img me-0"
                                            src="{{ asset('assets/images/user/3.png') }}" alt="profile">
                                        <div class="list-content">
                                            <h6>Gabrielle Fahey</h6>
                                            <p>GabrielleFahey@dayrep.com</p>
                                        </div>
                                    </div><small class="text-muted">10 days ago</small>
                                </div>
                                <p class="mb-1">Your aim with this blog is to advertise yourself and your services in
                                    blog design.
                                    That means it's vital to create content about just that: blog design. Anything else on
                                    your page
                                    may act as a distraction to your potential customers, and you don't want that!</p><small
                                    class="text-muted">100 Followers</small>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div class="list-wrapper"><img class="list-img me-0"
                                            src="{{ asset('assets/images/user/2.jpg') }}" alt="profile">
                                        <div class="list-content">
                                            <h6>Lucinda Moseley</h6>
                                            <p>LucindaMoseley@teleworm.us</p>
                                        </div>
                                    </div><small class="text-muted">3 days ago</small>
                                </div>
                                <p class="mb-1">People who are looking to hire a web designer may not know what to look
                                    out for.
                                    This will give you a chance to prove your trustworthiness by providing potential
                                    customers with
                                    advice and will let you sell your services by highlighting their best qualities.</p>
                                <small class="text-muted">23M Followers </small>
                            </a></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#custom-content-list" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="custom-content-list">&lt;div class="list-group main-lists-content pt-0"&gt;
 &lt;a class="list-group-item list-group-item-action active bg-primary" href="#" aria-current="true"&gt;
   &lt;div class="d-flex w-100 justify-content-between align-items-center"&gt;
     &lt;div class="list-wrapper"&gt;
       &lt;img class="list-img me-0" src="{{ asset('assets/images/user/1.jpg') }}" alt="profile"&gt;
       &lt;div class="list-content"&gt; 
         &lt;h6&gt;Molly Blake&lt;/h6&gt;
         &lt;p&gt;MollyBoake@rhyta.com&lt;/p&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;small&gt;5 days ago&lt;/small&gt;
   &lt;/div&gt;
   &lt;p class="mb-1"&gt;Next step is to choose a tone of voice for your content type. From casual to convincing, pick one from 20+ tones in the dropdown.Why did we say “snag eyeballs” instead of “get attention?” Why do we say “brick-and-mortar words” instead of “concrete words?” Because, in your email subject lines, it’s better to use words that people can picture.&lt;/p&gt;
   &lt;small&gt;20K Followers&lt;/small&gt;
 &lt;/a&gt;
 &lt;a class="list-group-item list-group-item-action list-hover-primary" href="#!"&gt;
   &lt;div class="d-flex w-100 justify-content-between align-items-center"&gt;
     &lt;div class="list-wrapper"&gt;
       &lt;img class="list-img me-0" src="{{ asset('assets/images/user/3.png') }}" alt="profile"&gt;
       &lt;div class="list-content"&gt; 
         &lt;h6&gt;Gabrielle Fahey&lt;/h6&gt;
         &lt;p&gt;GabrielleFahey@dayrep.com&lt;/p&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;small class="text-muted"&gt;10 days ago&lt;/small&gt;
   &lt;/div&gt;
   &lt;p class="mb-1"&gt;Your aim with this blog is to advertise yourself and your services in blog design. That means it's vital to create content about just that: blog design. Anything else on your page may act as a distraction to your potential customers, and you don't want that!&lt;/p&gt;
   &lt;small class="text-muted"&gt;100 Followers&lt;/small&gt;
 &lt;/a&gt;
 &lt;a class="list-group-item list-group-item-action list-hover-primary" href="#!"&gt;
   &lt;div class="d-flex w-100 justify-content-between align-items-center"&gt;
     &lt;div class="list-wrapper"&gt;
       &lt;img class="list-img me-0" src="{{ asset('assets/images/user/2.jpg') }}" alt="profile"&gt;
       &lt;div class="list-content"&gt; 
         &lt;h6&gt;Lucinda Moseley&lt;/h6&gt;
         &lt;p&gt;LucindaMoseley@teleworm.us&lt;/p&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;small class="text-muted"&gt;3 days ago&lt;/small&gt;
   &lt;/div&gt;
   &lt;p class="mb-1"&gt;People who are looking to hire a web designer may not know what to look out for. This will give you a chance to prove your trustworthiness by providing potential customers with advice and will let you sell your services by highlighting their best qualities.&lt;/p&gt;
   &lt;small class="text-muted"&gt;23M Followers&lt;/small&gt;
 &lt;/a&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Lists with Checkbox</h5>
                        <p class="f-m-light mt-1">Use<code> form-check-input </code>to check your checkbox.</p>
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
                        <ul class="list-group">
                            <li class="list-group-item"><input class="form-check-input me-1 checkbox-primary"
                                    id="firstCheckbox" type="checkbox" value="" checked=""><label
                                    class="form-check-label txt-primary mb-0" for="firstCheckbox">Auto start</label></li>
                            <li class="list-group-item"><input class="form-check-input me-1 checkbox-secondary"
                                    id="secondCheckbox" type="checkbox" value=""><label
                                    class="form-check-label txt-secondary mb-0" for="secondCheckbox">Auto update</label>
                            </li>
                            <li class="list-group-item"><input class="form-check-input me-1 checkbox-success"
                                    id="thirdCheckbox" type="checkbox" value=""><label
                                    class="form-check-label txt-success mb-0" for="thirdCheckbox">Don't check auth
                                    key</label></li>
                            <li class="list-group-item"><input class="form-check-input me-1 checkbox-warning"
                                    id="fourCheckbox" type="checkbox" value=""><label
                                    class="form-check-label txt-warning mb-0" for="fourCheckbox">Success all</label></li>
                        </ul>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#list-checkbox" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="list-checkbox">&lt;ul class="list-group"&gt;
 &lt;li class="list-group-item"&gt;
   &lt;input class="form-check-input me-1 checkbox-primary" id="firstCheckbox" type="checkbox" value="" checked=""&gt;
   &lt;label class="form-check-label txt-primary mb-0" for="firstCheckbox"&gt;Auto start&lt;/label&gt;
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;input class="form-check-input me-1 checkbox-secondary" id="secondCheckbox" type="checkbox" value=""&gt;
   &lt;label class="form-check-label txt-secondary mb-0" for="secondCheckbox"&gt;Auto update&lt;/label&gt;
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;input class="form-check-input me-1 checkbox-success" id="thirdCheckbox" type="checkbox" value=""&gt;
   &lt;label class="form-check-label txt-success mb-0" for="thirdCheckbox"&gt;Don't check auth key&lt;/label&gt;
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;input class="form-check-input me-1 checkbox-warning" id="fourCheckbox" type="checkbox" value=""&gt;
   &lt;label class="form-check-label txt-warning mb-0" for="fourCheckbox"&gt;Success all&lt;/label&gt;
 &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Lists with Radios</h5>
                        <p class="f-m-light mt-1"> Use<code> form-check-input </code>to check your radio buttons.</p>
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
                        <ul class="list-group">
                            <li class="list-group-item"><input class="form-check-input me-1 checkbox-danger"
                                    id="firstRadio" type="radio" name="listGroupRadio" value=""
                                    checked=""><label class="form-check-label mb-0"
                                    for="firstRadio">Meditations</label></li>
                            <li class="list-group-item"><input class="form-check-input me-1 checkbox-primary"
                                    id="secondRadio" type="radio" name="listGroupRadio" value=""><label
                                    class="form-check-label mb-0" for="secondRadio">Read a book</label></li>
                            <li class="list-group-item"><input class="form-check-input me-1 checkbox-success"
                                    id="thirdRadio" type="radio" name="listGroupRadio" value=""><label
                                    class="form-check-label mb-0" for="thirdRadio">Learn to code </label></li>
                            <li class="list-group-item"><input class="form-check-input me-1 checkbox-info" id="fourRadio"
                                    type="radio" name="listGroupRadio" value=""><label
                                    class="form-check-label mb-0" for="fourRadio">Drink more water</label></li>
                        </ul>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#list-with-radio" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="list-with-radio">&lt;ul class="list-group"&gt;
 &lt;li class="list-group-item"&gt;
   &lt;input class="form-check-input me-1 checkbox-danger" id="firstRadio" type="radio" name="listGroupRadio" value="" checked=""&gt;
   &lt;label class="form-check-label mb-0" for="firstRadio"&gt;Meditations&lt;/label&gt;
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;input class="form-check-input me-1 checkbox-primary" id="secondRadio" type="radio" name="listGroupRadio" value=""&gt;
   &lt;label class="form-check-label mb-0" for="secondRadio"&gt;Read a book&lt;/label&gt;
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;input class="form-check-input me-1 checkbox-success" id="thirdRadio" type="radio" name="listGroupRadio" value=""&gt;
   &lt;label class="form-check-label mb-0" for="thirdRadio"&gt;Learn to code &lt;/label&gt;
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;input class="form-check-input me-1 checkbox-info" id="fourRadio" type="radio" name="listGroupRadio" value=""&gt;
   &lt;label class="form-check-label mb-0" for="fourRadio"&gt;Drink more water&lt;/label&gt;
 &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Lists with Numbers</h5>
                        <p class="f-m-light mt-1">Use<code> list-group-numbered</code> to ordered wise print numbers.</p>
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
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item txt-primary fw-bold">Known for practical solutions</li>
                            <li class="list-group-item txt-danger fw-bold">Solve your problem</li>
                            <li class="list-group-item txt-success fw-bold">Certified Professionals</li>
                            <li class="list-group-item txt-warning fw-bold">Growth-Driven </li>
                        </ol>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#list-with-number" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="list-with-number">&lt;ol class="list-group list-group-numbered"&gt;
 &lt;li class="list-group-item txt-primary fw-bold"&gt;Known for practical solutions&lt;/li&gt;
 &lt;li class="list-group-item txt-danger fw-bold"&gt;Solve your problem&lt;/li&gt;
 &lt;li class="list-group-item txt-success fw-bold"&gt;Certified Professionals&lt;/li&gt;
 &lt;li class="list-group-item txt-warning fw-bold"&gt;Growth-Driven &lt;/li&gt;
&lt;/ol&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>JavaScript Behavior</h5>
                        <p class="f-m-light mt-1"> Use tab javascript plugin—include it individually or through the
                            compiled<code> bootstrap.js </code>file to extend our list group to create table panes of local
                            content.</p>
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
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="list-group" id="list-tab" role="tablist"><a
                                        class="list-group-item list-group-item-action bg-primary active"
                                        id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab"
                                        aria-controls="list-home">Home</a><a
                                        class="list-group-item list-group-item-action list-hover-primary"
                                        id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab"
                                        aria-controls="list-profile">Profile</a><a
                                        class="list-group-item list-group-item-action list-hover-primary"
                                        id="list-messages-list" data-bs-toggle="list" href="#list-messages"
                                        role="tab" aria-controls="list-messages">Contact
                                        Us</a><a class="list-group-item list-group-item-action list-hover-primary"
                                        id="list-settings-list" data-bs-toggle="list" href="#list-settings"
                                        role="tab" aria-controls="list-settings">Settings</a></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show list-behaviors active" id="list-home" role="tabpanel"
                                        aria-labelledby="list-home-list">
                                        <div class="d-flex mb-xl-4 list-behavior-1">
                                            <div class="flex-shrink-0"><img class="tab-img img-fluid"
                                                    src="{{ asset('assets/images/blog/img.png') }}" alt="home"></div>
                                            <div class="flex-grow-1">
                                                <p class="mb-xl-0 mb-sm-4">We provide end to end digital solutions, right
                                                    from designing
                                                    your website/application development: Domain, Web Hosting, Email Hosting
                                                    Registration,
                                                    Search Engine Optimization and other Internet Marketing, Renewal of
                                                    Services timely and
                                                    effectively.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex list-behavior-1 mb-xl-4">
                                            <div class="flex-shrink-0"><img class="tab-img img-fluid"
                                                    src="{{ asset('assets/images/blog/blog.jpg') }}" alt="home">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0">When someone visits your homepage, your design should
                                                    inspire them to
                                                    stay. Therefore, your value proposition should be established on the
                                                    homepage for
                                                    visitors to select to stay on your website.Building trust, expressing
                                                    value, and guiding
                                                    visitors to the next step all depend on a page's design.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade dark-list" id="list-profile" role="tabpanel"
                                        aria-labelledby="list-profile-list">
                                        <div class="flex-space align-items-center list-light-dark contact-profile"><img
                                                class="tab-img" src="{{ asset('assets/images/avtar/3.jpg') }}"
                                                alt="profile">
                                            <ul class="d-flex flex-column gap-2">
                                                <li> <strong>Visit Us: </strong> 2600 Hollywood Blvd,Florida, United States-
                                                    33020</li>
                                                <li><strong>Mail Us:</strong>contact@us@gmail.com</li>
                                                <li><strong>Contact Number: </strong>(954) 357-7760</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                        aria-labelledby="list-messages-list">
                                        <ul class="d-flex flex-column gap-1">
                                            <li>Us Technology offers web & mobile development solutions for all industry
                                                verticals.Include a short form using fields that'll help your business
                                                understand who's
                                                contacting them.</li>
                                            <li> <strong>Visit Us: </strong> 2600 Hollywood Blvd,Florida, United States-
                                                33020</li>
                                            <li> <strong>Mail Us:</strong>contact@us@gmail.com</li>
                                            <li><strong>Contact Number: </strong>(954) 357-7760</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                        aria-labelledby="list-settings-list">
                                        <ul class="d-flex flex-column gap-2">
                                            <li><strong>Available Pages in Theme: </strong></li>
                                            <li>--&gt; Typography:
                                                Typography is the art of arranging letters and text in a way that makes the
                                                copy legible,
                                                clear, and visually appealing to the reader.</li>
                                            <li>--&gt; Tooltip:
                                                A tooltip is a brief, informative message that appears when a user interacts
                                                with an
                                                element in a graphical user interface (GUI). </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#behavior-list" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="behavior-list">&lt;div class="row"&gt;
 &lt;div class="col-sm-4"&gt;
   &lt;div class="list-group" id="list-tab" role="tablist"&gt;
     &lt;a class="list-group-item list-group-item-action bg-primary" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home"&gt;Home&lt;/a&gt;&lt;a class="list-group-item list-group-item-action list-hover-primary" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile"&gt;Profile&lt;/a&gt;&lt;a class="list-group-item list-group-item-action list-hover-primary" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages"&gt;Contact Us&lt;/a&gt;&lt;a class="list-group-item list-group-item-action list-hover-primary" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings"&gt;Settings&lt;/a&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-sm-8"&gt;
   &lt;div class="tab-content" id="nav-tabContent"&gt;
     &lt;div class="tab-pane fade show list-behaviors" id="list-home" role="tabpanel" aria-labelledby="list-home-list"&gt;
       &lt;div class="d-flex mb-xl-4 list-behavior-1"&gt;
         &lt;div class="flex-shrink-0"&gt;
           &lt;img class="tab-img img-fluid" src="{{ asset('assets/images/blog/img.png') }}" alt="home"&gt;
         &lt;/div&gt;
         &lt;div class="flex-grow-1"&gt;
           &lt;p class="mb-xl-0 mb-sm-4"&gt;We provide end to end digital solutions, right from designing your website/application development: Domain, Web Hosting, Email Hosting Registration, Search Engine Optimization and other Internet Marketing, Renewal of Services timely and effectively.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="d-flex list-behavior-1 mb-xl-4"&gt;
         &lt;div class="flex-shrink-0"&gt;
           &lt;img class="tab-img img-fluid" src="{{ asset('assets/images/blog/blog.jpg') }}" alt="home"&gt;
         &lt;/div&gt;
         &lt;div class="flex-grow-1"&gt; 
           &lt;p class="mb-0"&gt;When someone visits your homepage, your design should inspire them to stay. Therefore, your value proposition should be established on the homepage for visitors to select to stay on your website.Building trust, expressing value, and guiding visitors to the next step all depend on a page's design.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="tab-pane fade dark-list" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"&gt;
       &lt;div class="flex-space align-items-center list-light-dark contact-profile"&gt;
         &lt;img class="tab-img" src="{{ asset('assets/images/avtar/3.jpg') }}" alt="profile"&gt;
         &lt;ul class="d-flex flex-column gap-2"&gt;
           &lt;li&gt;&lt;strong&gt;Visit Us:&lt;/strong&gt;2600 Hollywood Blvd,Florida, United States-33020&lt;/li&gt;
           &lt;li&gt;&lt;strong&gt;Mail Us:&lt;/strong&gt;contact@us@gmail.com&lt;/li&gt;
           &lt;li&gt;&lt;strong&gt;Contact Number:&lt;/strong&gt;(954) 357-7760&lt;/li&gt;
         &lt;/ul&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list"&gt;
       &lt;ul class="d-flex flex-column gap-1"&gt;
         &lt;li&gt;Us Technology offers web & mobile development solutions for all industry verticals.Include a short form using fields that'll help your business understand who's contacting them.&lt;/li&gt;
         &lt;li&gt;&lt;strong&gt;Visit Us:&lt;/strong&gt;2600 Hollywood Blvd,Florida, United States-33020&lt;/li&gt;
         &lt;li&gt;&lt;strong&gt;Mail Us:&lt;/strong&gt;contact@us@gmail.com&lt;/li&gt;
         &lt;li&gt;&lt;strong&gt;Contact Number:&lt;/strong&gt;(954) 357-7760&lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
     &lt;div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"&gt;
       &lt;ul class="d-flex flex-column gap-2"&gt;
         &lt;li&gt;&lt;strong&gt;Available Pages in Theme:&lt;/strong&gt;&lt;/li&gt;
         &lt;li&gt;--&gt; Typography: Typography is the art of arranging letters and text in a way that makes the copy legible, clear, and visually appealing to the reader.
         &lt;/li&gt;
         &lt;li&gt;--&gt; Tooltip: A tooltip is a brief, informative message that appears when a user interacts with an element in a graphical user interface (GUI). 
         &lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Numbered & Badge Lists</h5>
                        <p class="f-m-light mt-1"> Use<code> list-group-numbered</code> modifier class to numbered list
                            group
                            items.Numbers are generated via CSS for better placement inside list group items.</p>
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
                        <ol class="list-group list-group-numbered badge-list">
                            <li class="list-group-item">
                                <div>Stella Nowland</div><span
                                    class="badge badge-warning rounded-pill p-2">Freelance</span>
                            </li>
                            <li class="list-group-item">
                                <div>Lola Stanford</div><span
                                    class="badge badge-danger text-white rounded-pill p-2">Issue</span>
                            </li>
                            <li class="list-group-item">
                                <div>Caitlin Coungeau</div><span
                                    class="badge badge-primary text-white rounded-pill p-2">Social</span>
                            </li>
                            <li class="list-group-item">
                                <div>Graciela W. McClaran</div><span
                                    class="badge badge-danger text-white rounded-pill p-2">Issue</span>
                            </li>
                        </ol>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#number-badge-list" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="number-badge-list">&lt;ol class="list-group list-group-numbered badge-list"&gt;
 &lt;li class="list-group-item"&gt;
   &lt;div&gt;Stella Nowland&lt;/div&gt;
   &lt;span class="badge badge-warning rounded-pill p-2"&gt;Freelance&lt;/span&gt;
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;div&gt;Lola Stanford&lt;/div&gt;
   &lt;span class="badge badge-danger text-white rounded-pill p-2"&gt;Issue&lt;/span&gt;
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;div&gt;Caitlin Coungeau&lt;/div&gt;
   &lt;span class="badge badge-primary text-white rounded-pill p-2"&gt;Social&lt;/span&gt;
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;div&gt;Graciela W. McClaran&lt;/div&gt;
   &lt;span class="badge badge-danger text-white rounded-pill p-2"&gt;Issue&lt;/span&gt;
 &lt;/li&gt;
&lt;/ol&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Disabled Lists </h5>
                        <p class="f-m-light mt-1"> Use<code> disabled </code>to a <code> list-group-item</code> to make it
                            appear disabled.</p>
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
                        <div class="list-group"><a
                                class="list-group-item list-group-item-action list-hover-primary active"
                                href="#!"><img class="rounded-circle"
                                    src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}" alt="user">Teresa J.
                                Mosteller</a><a class="list-group-item list-group-item-action list-hover-primary"
                                href="#!"><img class="rounded-circle"
                                    src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}" alt="user">Gloria D.
                                Acheson</a><a class="list-group-item list-group-item-action disabled" href="#!"><img
                                    class="rounded-circle" src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                    alt="user">Sharon C.
                                Obrien</a><a class="list-group-item list-group-item-action disabled" href="#!"><img
                                    class="rounded-circle" src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                    alt="user">Bryan A.
                                Owens</a></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#disable-list" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="disable-list">&lt;div class="list-group"&gt;
 &lt;a class="list-group-item list-group-item-action list-hover-primary active" href="#!"&gt;
   &lt;img class="rounded-circle" src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}" alt="user"&gt;Teresa J. Mosteller
 &lt;/a&gt;
 &lt;a class="list-group-item list-group-item-action list-hover-primary" href="#!"&gt;
   &lt;img class="rounded-circle" src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}" alt="user"&gt;Gloria D. Acheson
 &lt;/a&gt;
 &lt;a class="list-group-item list-group-item-action disabled" href="#!"&gt;
   &lt;img class="rounded-circle" src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}" alt="user"&gt;Sharon C. Obrien
 &lt;/a&gt;
 &lt;a class="list-group-item list-group-item-action disabled" href="#!"&gt;
   &lt;img class="rounded-circle" src="{{ asset('assets/images/dashboard-11/user/7.jpg"') }} alt="user"&gt;Bryan A. Owens
 &lt;/a&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Scrollable Lists </h5>
                        <p class="f-m-light mt-1"> Use property <code>overflow:auto </code>through scrollable lists.</p>
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
                        <div class="list-group main-lists-content scrollbar-wrapper custom-scrollbar"><a
                                class="list-group-item list-group-item-action active list-hover-primary" href="#"
                                aria-current="true">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Molly Boake</h6>
                                        <p class="f-light">MollyBoake@rhyta.com</p><small>f-light</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Gabrielle Fahey</h6>
                                        <p class="f-light">GabrielleFahey@dayrep.com</p><small class="f-light">10 days
                                            ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Lucinda Moseley</h6>
                                        <p class="f-light">LucindaMoseley@teleworm.us</p><small class="f-light">3 days
                                            ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Francis K. Henriques</h6>
                                        <p class="f-light">FrancisKHenriques@teleworm.us</p><small class="f-light">2 days
                                            ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Jose A. Seay</h6>
                                        <p class="f-light">JoseASeay@rhyta.com</p><small class="f-light">15 days
                                            ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Phil F. Cunningham</h6>
                                        <p class="f-light">PhilFCunningham@dayrep.com</p><small class="f-light">6 days
                                            ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/dashboard-9/user/5.png') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Richard E. Johnson</h6>
                                        <p class="f-light">RichardEJohnson@teleworm.us</p><small class="f-light">20 days
                                            ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/dashboard-9/user/1.png') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Lawrence L. Nash</h6>
                                        <p class="f-light">LawrenceLNash@jourrapide.com</p><small class="f-light">8 days
                                            ago</small>
                                    </div>
                                </div>
                            </a></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#scrollable-lists" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="scrollable-lists">&lt;div class="list-group main-lists-content scrollbar-wrapper custom-scrollbar"&gt;
 &lt;a class="list-group-item list-group-item-action active list-hover-primary" href="#" aria-current="true"&gt;
   &lt;div class="list-wrapper gap-0"&gt;
     &lt;img class="list-img" src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}" alt="profile"&gt;
     &lt;div class="list-content"&gt; 
       &lt;h6&gt;Molly Boake&lt;/h6&gt;
       &lt;p class="f-light"&gt;MollyBoake@rhyta.com&lt;/p&gt;&lt;small&gt;f-light&lt;/small&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/a&gt;
 &lt;a class="list-group-item list-group-item-action list-hover-primary" href="#!"&gt;
   &lt;div class="list-wrapper gap-0"&gt;
     &lt;img class="list-img" src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}" alt="profile"&gt;
     &lt;div class="list-content"&gt; 
       &lt;h6&gt;Gabrielle Fahey&lt;/h6&gt;
       &lt;p class="f-light"&gt;GabrielleFahey@dayrep.com&lt;/p&gt;&lt;small class="f-light"&gt;10 days ago&lt;/small&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/a&gt;
 &lt;a class="list-group-item list-group-item-action list-hover-primary" href="#!"&gt;
   &lt;div class="list-wrapper gap-0"&gt;
     &lt;img class="list-img" src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}" alt="profile"&gt;
     &lt;div class="list-content"&gt; 
       &lt;h6&gt;Lucinda Moseley&lt;/h6&gt;
       &lt;p class="f-light"&gt;LucindaMoseley@teleworm.us&lt;/p&gt;&lt;small class="f-light"&gt;3 days ago&lt;/small&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/a&gt;
 &lt;a class="list-group-item list-group-item-action list-hover-primary" href="#!"&gt;
   &lt;div class="list-wrapper gap-0"&gt;
     &lt;img class="list-img" src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}" alt="profile"&gt;
     &lt;div class="list-content"&gt; 
       &lt;h6&gt;Francis K. Henriques&lt;/h6&gt;
       &lt;p class="f-light"&gt;FrancisKHenriques@teleworm.us&lt;/p&gt;&lt;small class="f-light"&gt;2 days ago&lt;/small&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/a&gt;
 &lt;a class="list-group-item list-group-item-action list-hover-primary" href="#!"&gt;
   &lt;div class="list-wrapper gap-0"&gt;
     &lt;img class="list-img" src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}" alt="profile"&gt;
     &lt;div class="list-content"&gt; 
       &lt;h6&gt;Jose A. Seay&lt;/h6&gt;
       &lt;p class="f-light"&gt;JoseASeay@rhyta.com&lt;/p&gt;&lt;small class="f-light"&gt;15 days ago&lt;/small&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/a&gt;
 &lt;a class="list-group-item list-group-item-action list-hover-primary" href="#!"&gt;
   &lt;div class="list-wrapper gap-0"&gt;
     &lt;img class="list-img" src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}" alt="profile"&gt;
     &lt;div class="list-content"&gt; 
       &lt;h6&gt;Phil F. Cunningham&lt;/h6&gt;
       &lt;p class="f-light"&gt;PhilFCunningham@dayrep.com&lt;/p&gt;&lt;small class="f-light"&gt;6 days ago&lt;/small&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/a&gt;
 &lt;a class="list-group-item list-group-item-action list-hover-primary" href="#!"&gt;
   &lt;div class="list-wrapper gap-0"&gt;
     &lt;img class="list-img" src="{{ asset('assets/images/dashboard-9/user/5.png') }}" alt="profile"&gt;
     &lt;div class="list-content"&gt; 
       &lt;h6&gt;Richard E. Johnson&lt;/h6&gt;
       &lt;p class="f-light"&gt;RichardEJohnson@teleworm.us&lt;/p&gt;&lt;small class="f-light"&gt;20 days ago&lt;/small&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/a&gt;
 &lt;a class="list-group-item list-group-item-action list-hover-primary" href="#!"&gt;
   &lt;div class="list-wrapper gap-0"&gt;
     &lt;img class="list-img" src="{{ asset('assets/images/dashboard-9/user/1.png') }}" alt="profile"&gt;
     &lt;div class="list-content"&gt; 
       &lt;h6&gt;Lawrence L. Nash&lt;/h6&gt;
       &lt;p class="f-light"&gt;LawrenceLNash@jourrapide.com&lt;/p&gt;&lt;small class="f-light"&gt;8 days ago&lt;/small&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/a&gt;
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
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
