@extends('layouts.simple.master')

@section('title', 'Accordion')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Accordions</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Accordions</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid main-accordion">
        <div class="row">
            <div class="col-sm-12 col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Simple Accordion</h5>
                        <p class="f-m-light mt-1">Drop the <code>collapsed </code> class from the
                            <code> accordion-button </code>element and set its aria-expanded attribute to true.
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
                        <div class="accordion dark-accordion" id="simpleaccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne"><button
                                        class="accordion-button collapsed accordion-light-primary txt-primary active"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">Accordion Item #1<i
                                            class="svg-color" data-feather="chevron-down"></i></button></h2>
                                <div class="accordion-collapse collapse show" id="collapseOne">
                                    <div class="accordion-body">This is the <b>first item's </b>accordion body. It is shown
                                        by
                                        default, until the collapse plugin adds the appropriate classes that we use to style
                                        each
                                        element. These classes control the overall appearance, as well as the showing and
                                        hiding via
                                        CSS transitions. You can modify any of this with custom CSS or overriding our
                                        default
                                        variables. It's also worth noting that just about any HTML can go within the
                                        <b>.accordion-body </b>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo"><button
                                        class="accordion-button collapsed accordion-light-primary txt-primary active"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">Accordion Item #2<i
                                            class="svg-color" data-feather="chevron-down"></i></button></h2>
                                <div class="accordion-collapse collapse" id="collapseTwo">
                                    <div class="accordion-body">This is the <b>second item's </b>accordion body. It is
                                        hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to style
                                        each
                                        element. These classes control the overall appearance, as well as the showing and
                                        hiding via
                                        CSS transitions. You can modify any of this with custom CSS or overriding our
                                        default
                                        variables. It's also worth noting that just about any HTML can go within the
                                        <b>.accordion-body </b>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree"><button
                                        class="accordion-button collapsed accordion-light-primary txt-primary active"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">Accordion Item #3<i
                                            class="svg-color" data-feather="chevron-down"></i></button></h2>
                                <div class="accordion-collapse collapse" id="collapseThree">
                                    <div class="accordion-body">
                                        <p> This is the <b>third item's </b>accordion body. It is hidden by default, until
                                            the
                                            collapse plugin adds the appropriate classes that we use to style each element.
                                            These
                                            classes control the overall appearance, as well as the showing and hiding via
                                            CSS
                                            transitions. You can modify any of this with custom CSS or overriding our
                                            default variables.
                                            It's also worth noting that just about any HTML can go within the
                                            <b>.accordion-body </b>,
                                            though the transition does limit overflow.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#according" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="according">&lt;div class="accordion dark-accordion" id="simpleaccordion"&gt;
 &lt;div class="accordion-item"&gt;
   &lt;h2 class="accordion-header" id="headingOne"&gt;
     &lt;button class="accordion-button collapsed accordion-light-primary txt-primary active" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"&gt;Accordion Item #1&lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;&lt;/button&gt;
   &lt;/h2&gt;
   &lt;div class="accordion-collapse collapse show" id="collapseOne"&gt;
     &lt;div class="accordion-body"&gt;This is the
       &lt;b&gt;first item's&lt;/b&gt;accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
       &lt;b&gt;.accordion-body&lt;/b&gt;, though the transition does limit overflow.
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="accordion-item"&gt;
   &lt;h2 class="accordion-header" id="headingTwo"&gt;
     &lt;button class="accordion-button collapsed accordion-light-primary txt-primary active" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"&gt;Accordion Item #2
       &lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;
     &lt;/button&gt;
   &lt;/h2&gt;
   &lt;div class="accordion-collapse collapse" id="collapseTwo"&gt;
     &lt;div class="accordion-body"&gt;This is the
       &lt;b&gt;second item's&lt;/b&gt;accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
       &lt;b&gt;.accordion-body&lt;/b&gt;, though the transition does limit overflow.
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="accordion-item"&gt;
   &lt;h2 class="accordion-header" id="headingThree"&gt;
     &lt;button class="accordion-button collapsed accordion-light-primary txt-primary active" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"&gt;Accordion Item #3
       &lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;
     &lt;/button&gt;
   &lt;/h2&gt;
   &lt;div class="accordion-collapse collapse" id="collapseThree"&gt;
     &lt;div class="accordion-body"&gt;
       &lt;p&gt;This is the
         &lt;b&gt;third item's&lt;/b&gt;accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
         &lt;b&gt;.accordion-body&lt;/b&gt;,though the transition does limit overflow.
       &lt;/p&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Flush Accordion</h5>
                        <p class="f-m-light mt-1">Add <code>accordion-flush</code> to remove the
                            default<code> background-color</code> , some borders, and some rounded corners to render
                            accordions
                            edge-to-edge with their parent container.</p>
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
                        <div class="accordion accordion-flush dark-accordion" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne"><button
                                        class="accordion-button collapsed txt-secondary accordion-light-secondary active"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">Accordion Item #1<i
                                            class="svg-color" data-feather="chevron-down"></i></button></h2>
                                <div class="accordion-collapse collapse show" id="flush-collapseOne">
                                    <div class="accordion-body">
                                        <p> Placeholder content for this accordion, which is intended to demonstrate the
                                            <b>.accordion-flush</b>class. This is the first item's accordion body.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo"><button
                                        class="accordion-button collapsed txt-secondary accordion-light-secondary"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">Accordion Item #2<i
                                            class="svg-color" data-feather="chevron-down"></i></button></h2>
                                <div class="accordion-collapse collapse" id="flush-collapseTwo">
                                    <div class="accordion-body">
                                        <p> Placeholder content for this accordion, which is intended to demonstrate the
                                            <b>.accordion-flush</b>class. This is the second item's accordion body. Let's
                                            imagine this
                                            being filled with some actual content.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree"><button
                                        class="accordion-button collapsed txt-secondary accordion-light-secondary"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">Accordion Item #3<i
                                            class="svg-color" data-feather="chevron-down"></i></button></h2>
                                <div class="accordion-collapse collapse" id="flush-collapseThree">
                                    <div class="accordion-body">
                                        <p> Placeholder content for this accordion, which is intended to demonstrate the
                                            <b>.accordion-flush</b>class. This is the third item's accordion body. Nothing
                                            more exciting
                                            happening here in terms of content, but just filling up the space to make it
                                            look, at least
                                            at first glance, a bit more representative of how this would look in a
                                            real-world
                                            application.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#flush-according" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="flush-according">&lt;div class="accordion accordion-flush dark-accordion" id="accordionFlushExample"&gt;
 &lt;div class="accordion-item"&gt;
   &lt;h2 class="accordion-header" id="flush-headingOne"&gt;
     &lt;button class="accordion-button collapsed txt-secondary accordion-light-secondary active" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"&gt;Accordion Item #1
        &lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;
     &lt;/button&gt;
   &lt;/h2&gt;
   &lt;div class="accordion-collapse collapse show" id="flush-collapseOne"&gt;
     &lt;div class="accordion-body"&gt;
       &lt;p&gt;Placeholder content for this accordion, which is intended to demonstrate the
         &lt;b&gt;.accordion-flush&lt;/b&gt;class. This is the first item's accordion body.
       &lt;/p&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="accordion-item"&gt;
   &lt;h2 class="accordion-header" id="flush-headingTwo"&gt;
     &lt;button class="accordion-button collapsed txt-secondary accordion-light-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"&gt;Accordion Item #2
        &lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;
     &lt;/button&gt;
   &lt;/h2&gt;
   &lt;div class="accordion-collapse collapse" id="flush-collapseTwo"&gt;
     &lt;div class="accordion-body"&gt;
       &lt;p&gt;Placeholder content for this accordion, which is intended to demonstrate the
         &lt;b&gt;.accordion-flush&lt;/b&gt;class. This is the second item's accordion body. Let's imagine this being filled with some actual content.
       &lt;/p&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="accordion-item"&gt;
   &lt;h2 class="accordion-header" id="flush-headingThree"&gt;
     &lt;button class="accordion-button collapsed txt-secondary accordion-light-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"&gt;Accordion Item #3
        &lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;
     &lt;/button&gt;
   &lt;/h2&gt;
   &lt;div class="accordion-collapse collapse" id="flush-collapseThree"&gt;
     &lt;div class="accordion-body"&gt;
       &lt;p&gt;Placeholder content for this accordion, which is intended to demonstrate the
         &lt;b&gt;.accordion-flush&lt;/b&gt;class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
       &lt;/p&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Multiple Collapse Accordion</h5>
                        <p class="f-m-light mt-1">A <code> &lt;button&gt;</code> or<code> &lt;a&gt;</code> can show and
                            hide
                            multiple elements by referencing them with a selector in its href or data-bs-target attribute.
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
                        <div class="common-flex"><a class="btn btn-primary" data-bs-toggle="collapse"
                                href="#multiCollapseExample1" role="button" aria-expanded="false"
                                aria-controls="multiCollapseExample1">Toggle First Element</a><button
                                class="btn btn-secondary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#multiCollapseExample2" aria-expanded="false"
                                aria-controls="multiCollapseExample2">Toggle Second Element</button><button
                                class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target=".multi-collapse" aria-expanded="false"
                                aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle Both
                                Elements</button></div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="collapse multi-collapse dark-accordion" id="multiCollapseExample1">
                                    <div class="card card-body mt-3 mb-0 collapse-wrapper accordion-light-primary">The
                                        collapse
                                        JavaScript plugin is used to show and hide content. Buttons or anchors are used as
                                        triggers
                                        that are mapped to specific elements you toggle. Collapsing an element will animate
                                        the height
                                        from it's current value to 0. Given how CSS handles animations, you cannot use
                                        padding on a
                                        .collapse element. Instead, use the class as an independent wrapping element.</div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="collapse multi-collapse dark-accordion" id="multiCollapseExample2">
                                    <div class="card card-body mt-3 mb-0 collapse-wrapper accordion-light-secondary">This
                                        is the
                                        first item's accordion body. It is shown by default, until the collapse plugin adds
                                        the
                                        appropriate classes that we use to style each element. These classes control the
                                        overall
                                        appearance, as well as the showing and hiding via CSS transitions. You can modify
                                        any of this
                                        with custom CSS or overriding our default variables.</div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#multiple-according" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="multiple-according">&lt;div class="common-flex"&gt;
 &lt;a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"&gt;Toggle First Element&lt;/a&gt;
 &lt;button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"&gt;Toggle Second Element&lt;/button&gt;
 &lt;button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"&gt;Toggle Both Elements&lt;/button&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
 &lt;div class="col-xl-6"&gt;
   &lt;div class="collapse multi-collapse dark-accordion" id="multiCollapseExample1"&gt;
     &lt;div class="card card-body mt-3 mb-0 collapse-wrapper accordion-light-primary"&gt;The collapse JavaScript plugin is used to show and hide content. Buttons or anchors are used as triggers that are mapped to specific elements you toggle. Collapsing an element will animate the height from it's current value to 0. Given how CSS handles animations, you cannot use padding on a .collapse element. Instead, use the class as an independent wrapping element.&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xl-6"&gt;
   &lt;div class="collapse multi-collapse dark-accordion" id="multiCollapseExample2"&gt;
     &lt;div class="card card-body mt-3 mb-0 collapse-wrapper accordion-light-secondary"&gt;This is the first item's accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables.&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>With Icons Accordion</h5>
                        <p class="f-m-light mt-1">Use <code>accordion </code>& <code>feather icons</code> through change
                            look
                            icons accordion.</p>
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
                    <div class="card-body accordion-border icons-accordion">
                        <div class="accordion dark-accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne"><button
                                        class="accordion-button collapsed gap-2 accordion-light-secondary active txt-secondary"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseOne"><i class="svg-wrapper"
                                            data-feather="bell"></i>Keep in touch<i class="svg-color"
                                            data-feather="chevron-down"></i></button></h2>
                                <div class="accordion-collapse collapse" id="panelsStayOpen-collapseOne"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <p> <b> " This page might not behave as expected because Windows Internet Explorer
                                                isn't
                                                configured to load unsigned ActiveX controls."</b> or "Allow this page to
                                            install an
                                            unsigned ActiveX Control? Doing so from untrusted sources may harm your
                                            computer." (Both
                                            phrased as conditions that may cause future problems.)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo"><button
                                        class="accordion-button collapsed gap-2 accordion-light-secondary active txt-secondary"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo"><i class="svg-wrapper"
                                            data-feather="message-circle"></i>Chats with others<i class="svg-color"
                                            data-feather="chevron-down"></i></button></h2>
                                <div class="accordion-collapse collapse" id="panelsStayOpen-collapseTwo"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <ul class="d-flex flex-column gap-2 accordions-content">
                                            <li>You get the same features in Chat and Chat in Gmail, but the integrated
                                                Gmail experience
                                                provides a central location to communicate with friends, family, or
                                                coworkers between
                                                emails.</li>
                                            <li> <strong>Chat:</strong> Use when you prefer a dedicated chat experience and
                                                don't mind
                                                switching between different apps.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree"><button
                                        class="accordion-button collapsed gap-2 accordion-light-secondary active txt-secondary"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree"><i class="svg-wrapper"
                                            data-feather="check-square"></i>Right way to code <i class="svg-color"
                                            data-feather="chevron-down"></i></button></h2>
                                <div class="accordion-collapse collapse" id="panelsStayOpen-collapseThree"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <ul class="d-flex flex-column gap-2 accordions-content">
                                            <li>1) Decide on the indentation and keep it that way.</li>
                                            <li>2) Make comments.</li>
                                            <li>3) Consistent name scheme.</li>
                                            <li>4) Don't repeat code.</li>
                                            <li>5) Avoid writing long code lines.</li>
                                            <li>6) Break down a big task into smaller chunks.</li>
                                            <li>7) Organize your program into smaller files.</li>
                                            <li>8) Write clever code that is also readable.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#icons-according" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="icons-according">&lt;div class="accordion dark-accordion" id="accordionPanelsStayOpenExample"&gt;
 &lt;div class="accordion-item"&gt;
   &lt;h2 class="accordion-header" id="panelsStayOpen-headingOne"&gt;
     &lt;button class="accordion-button collapsed gap-2 accordion-light-secondary active txt-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne"&gt;
       &lt;i class="svg-wrapper" data-feather="bell"&gt;&lt;/i&gt;Keep in touch
       &lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;
     &lt;/button&gt;
   &lt;/h2&gt;
   &lt;div class="accordion-collapse collapse" id="panelsStayOpen-collapseOne" aria-labelledby="panelsStayOpen-headingOne"&gt;
     &lt;div class="accordion-body"&gt;
       &lt;p&gt;&lt;b&gt;" This page might not behave as expected because Windows Internet Explorer isn't configured to load unsigned ActiveX controls."&lt;/b&gt; or "Allow this page to install an unsigned ActiveX Control? Doing so from untrusted sources may harm your computer." (Both phrased as conditions that may cause future problems.)
       &lt;/p&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="accordion-item"&gt;
   &lt;h2 class="accordion-header" id="panelsStayOpen-headingTwo"&gt;
     &lt;button class="accordion-button collapsed gap-2 accordion-light-secondary active txt-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo"&gt;&lt;i class="svg-wrapper" data-feather="message-circle"&gt;&lt;/i&gt;Chats with others&lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;&lt;/button&gt;
   &lt;/h2&gt;
   &lt;div class="accordion-collapse collapse" id="panelsStayOpen-collapseTwo" aria-labelledby="panelsStayOpen-headingTwo"&gt;
     &lt;div class="accordion-body"&gt;
       &lt;ul class="d-flex flex-column gap-2 accordions-content"&gt;
         &lt;li&gt;You get the same features in Chat and Chat in Gmail, but the integrated Gmail experience provides a central location to communicate with friends, family, or coworkers between emails.&lt;/li&gt;
         &lt;li&gt;&lt;strong&gt;Chat:&lt;/strong&gt;Use when you prefer a dedicated chat experience and don't mind switching between different apps.&lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="accordion-item"&gt;
   &lt;h2 class="accordion-header" id="panelsStayOpen-headingThree"&gt;
     &lt;button class="accordion-button collapsed gap-2 accordion-light-secondary active txt-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree"&gt;
       &lt;i class="svg-wrapper" data-feather="check-square"&gt;&lt;/i&gt;Right way to code
       &lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;
     &lt;/button&gt;
   &lt;/h2&gt;
   &lt;div class="accordion-collapse collapse" id="panelsStayOpen-collapseThree" aria-labelledby="panelsStayOpen-headingThree"&gt;
     &lt;div class="accordion-body"&gt;
       &lt;ul class="d-flex flex-column gap-2 accordions-content"&gt; 
         &lt;li&gt;1) Decide on the indentation and keep it that way.&lt;/li&gt;
         &lt;li&gt;2) Make comments.&lt;/li&gt;
         &lt;li&gt;3) Consistent name scheme.&lt;/li&gt;
         &lt;li&gt;4) Don't repeat code.&lt;/li&gt;
         &lt;li&gt;5) Avoid writing long code lines.&lt;/li&gt;
         &lt;li&gt;6) Break down a big task into smaller chunks.&lt;/li&gt;
         &lt;li&gt;7) Organize your program into smaller files.&lt;/li&gt;
         &lt;li&gt;8) Write clever code that is also readable.&lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Outline Accordion</h5>
                        <p class="f-m-light mt-1"> Made custom <code>accordion-wrapper</code> class use to bring
                            border-left
                            side.</p>
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
                        <div class="accordion dark-accordion" id="outlineaccordion">
                            <div class="accordion-item accordion-wrapper">
                                <h2 class="accordion-header" id="outlineaccordionone"><button
                                        class="accordion-button collapsed accordion-light-primary txt-primary"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#left-collapseOne"
                                        aria-expanded="true" aria-controls="left-collapseOne">What do web designers do?<i
                                            class="svg-color" data-feather="chevron-down"></i></button></h2>
                                <div class="accordion-collapse collapse" id="left-collapseOne"
                                    aria-labelledby="outlineaccordionone" data-bs-parent="#outlineaccordion">
                                    <div class="accordion-body">
                                        <p> Web design<b> identifies the goals</b> of a website or webpage and promotes
                                            accessibility
                                            for all potential users. This process involves organizing content and images
                                            across a series
                                            of pages and integrating applications and other interactive elements.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item accordion-wrapper">
                                <h2 class="accordion-header" id="outlineaccordiontwo"><button
                                        class="accordion-button collapsed accordion-light-primary txt-primary"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#left-collapseTwo"
                                        aria-expanded="false" aria-controls="left-collapseTwo">What is the use of web
                                        design?<i class="svg-color" data-feather="chevron-down"></i></button></h2>
                                <div class="accordion-collapse collapse" id="left-collapseTwo"
                                    aria-labelledby="outlineaccordiontwo" data-bs-parent="#outlineaccordion">
                                    <div class="accordion-body">
                                        <ul class="d-flex flex-column gap-2 accordions-content">
                                            <li><strong> Search engine optimization: </strong>Search engine optimization
                                                (SEO) is a
                                                method for improving the chances for a website to be found by search
                                                engines. Web design
                                                codes information in a way that search engines can read it. It can boost
                                                business because
                                                the site shows up on the top search result pages, helping people to find it.
                                            </li>
                                            <li><strong> Mobile responsiveness:</strong> Mobile responsiveness is the
                                                feature of a
                                                website that allows it to display on a mobile device and adapt its layout
                                                and proportions
                                                to be legible. Web design ensures sites are easy to view and navigate from
                                                mobile devices.
                                                When a website is well-designed and mobile-responsive, customers can reach
                                                the business
                                                with ease.</li>
                                            <li> <strong> Improved sales:</strong>Increasing the number of items sold or
                                                acquiring more
                                                active customers are objectives of a compelling website. As web design
                                                reaches targeted
                                                customers and search engines, it helps the business make conversions on
                                                their site and
                                                improve its sales.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item accordion-wrapper">
                                <h2 class="accordion-header" id="outlineaccordionthree"><button
                                        class="accordion-button collapsed accordion-light-primary txt-primary"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#left-collapseThree"
                                        aria-expanded="false" aria-controls="left-collapseThree">What are the elements of
                                        web design?<i class="svg-color" data-feather="chevron-down"></i></button></h2>
                                <div class="accordion-collapse collapse" id="left-collapseThree"
                                    aria-labelledby="outlineaccordionthree" data-bs-parent="#outlineaccordion">
                                    <div class="accordion-body">
                                        <ul class="d-flex flex-column gap-2 accordions-content">
                                            <li> The web design process allows designers to adjust to any preferences and
                                                provide
                                                effective solutions. There are many standard components of every web design,
                                                including:
                                            </li>
                                            <li>--&gt; Layout</li>
                                            <li>--&gt; Images</li>
                                            <li>--&gt; Visual hierarchy</li>
                                            <li>--&gt; Color scheme</li>
                                            <li>--&gt; Typography</li>
                                            <li>--&gt; Navigation</li>
                                            <li>--&gt; Readability</li>
                                            <li>--&gt; Content</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#left-according" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="left-according">&lt;div class="accordion dark-accordion" id="outlineaccordion"&gt;
 &lt;div class="accordion-item accordion-wrapper"&gt;
   &lt;h2 class="accordion-header" id="outlineaccordionone"&gt;
     &lt;button class="accordion-button collapsed accordion-light-primary txt-primary" type="button" data-bs-toggle="collapse" data-bs-target="#left-collapseOne" aria-expanded="true" aria-controls="left-collapseOne"&gt;What do web designers do?
       &lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;
     &lt;/button&gt;
   &lt;/h2&gt;
   &lt;div class="accordion-collapse collapse" id="left-collapseOne" aria-labelledby="outlineaccordionone" data-bs-parent="#outlineaccordion"&gt;
     &lt;div class="accordion-body"&gt;
       &lt;p&gt;Web design&lt;b&gt; identifies the goals&lt;/b&gt;of a website or webpage and promotes accessibility for all potential users. This process involves organizing content and images across a series of pages and integrating applications and other interactive elements.&lt;/p&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="accordion-item accordion-wrapper"&gt;
   &lt;h2 class="accordion-header" id="outlineaccordiontwo"&gt;
     &lt;button class="accordion-button collapsed accordion-light-primary txt-primary" type="button" data-bs-toggle="collapse" data-bs-target="#left-collapseTwo" aria-expanded="false" aria-controls="left-collapseTwo"&gt;What is the use of web design?
       &lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;
     &lt;/button&gt;
   &lt;/h2&gt;
   &lt;div class="accordion-collapse collapse" id="left-collapseTwo" aria-labelledby="outlineaccordiontwo" data-bs-parent="#outlineaccordion"&gt;
     &lt;div class="accordion-body"&gt;
       &lt;ul class="d-flex flex-column gap-2 accordions-content"&gt;
         &lt;li&gt;
           &lt;strong&gt; Search engine optimization:&lt;/strong&gt;Search engine optimization (SEO) is a method for improving the chances for a website to be found by search engines. Web design codes information in a way that search engines can read it. It can boost business because the site shows up on the top search result pages, helping people to find it.
         &lt;/li&gt;
         &lt;li&gt;
           &lt;strong&gt; Mobile responsiveness:&lt;/strong&gt;Mobile responsiveness is the feature of a website that allows it to display on a mobile device and adapt its layout and proportions to be legible. Web design ensures sites are easy to view and navigate from mobile devices. When a website is well-designed and mobile-responsive, customers can reach the business with ease.
         &lt;/li&gt;
         &lt;li&gt;
           &lt;strong&gt; Improved sales:&lt;/strong&gt;Increasing the number of items sold or acquiring more active customers are objectives of a compelling website. As web design reaches targeted customers and search engines, it helps the business make conversions on their site and improve its sales.
         &lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="accordion-item accordion-wrapper"&gt;
   &lt;h2 class="accordion-header" id="outlineaccordionthree"&gt;
     &lt;button class="accordion-button collapsed accordion-light-primary txt-primary" type="button" data-bs-toggle="collapse" data-bs-target="#left-collapseThree" aria-expanded="false" aria-controls="left-collapseThree"&gt;What are the elements of web design?
       &lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;
     &lt;/button&gt;
   &lt;/h2&gt;
   &lt;div class="accordion-collapse collapse" id="left-collapseThree" aria-labelledby="outlineaccordionthree" data-bs-parent="#outlineaccordion"&gt;
     &lt;div class="accordion-body"&gt;
       &lt;ul class="d-flex flex-column gap-2 accordions-content"&gt;
         &lt;li&gt; The web design process allows designers to adjust to any preferences and provide effective solutions. There are many standard components of every web design, including:&lt;/li&gt;
         &lt;li&gt;--&gt; Layout&lt;/li&gt;
         &lt;li&gt;--&gt; Images&lt;/li&gt;
         &lt;li&gt;--&gt; Visual hierarchy&lt;/li&gt;
         &lt;li&gt;--&gt; Color scheme&lt;/li&gt;
         &lt;li&gt;--&gt; Typography&lt;/li&gt;
         &lt;li&gt;--&gt; Navigation&lt;/li&gt;
         &lt;li&gt;--&gt; Readability&lt;/li&gt;
         &lt;li&gt;--&gt; Content&lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal Accordion</h5>
                        <p class="f-m-light mt-1">Add the <code>collapse-horizontal</code> modifier class to transition the
                            width instead of height and set a width on the immediate child element.</p>
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
                        <div class="common-flex"><button class="btn btn-secondary" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false"
                                aria-controls="collapseWidthExample">Toggle width Collapse</button></div>
                        <div class="row">
                            <div class="col-xxl-8 col-xl-12">
                                <div class="collapse collapse-horizontal mt-3" id="collapseWidthExample">
                                    <div class="card card-body accordion-h-space mb-0">This is some placeholder content for
                                        a
                                        horizontal collapse. It's hidden by default and shown when triggered.</div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#horizontal-according" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="horizontal-according">&lt;div class="common-flex"&gt;
 &lt;button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample"&gt;Toggle Width Collapse&lt;/button&gt;
&lt;/div&gt;
&lt;div class="row"&gt; 
 &lt;div class="col-xxl-8 col-xl-12"&gt;
   &lt;div class="collapse collapse-horizontal mt-3" id="collapseWidthExample"&gt;
     &lt;div class="card card-body accordion-h-space mb-0"&gt;This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Collapse Accordion</h5>
                        <p class="f-m-light mt-1">you can also use a link with the href
                            attribute<code>(and a role="button").</code>In both cases, the
                            <code>data-bs-toggle="collapse"</code> is required.</p>
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
                    <div class="card-body collapse-accordion">
                        <p class="common-flex"><a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample"
                                role="button" aria-expanded="false" aria-controls="collapseExample">Link With
                                Href</a><button class="btn btn-dark" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample" aria-expanded="false"
                                aria-controls="collapseExample">Button With Data-bs-target</button></p>
                        <div class="collapse btn-dark" id="collapseExample">
                            <div class="card card-body mb-0 dark-accordion">Some placeholder content for the collapse
                                component.
                                This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#collapse-according" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="collapse-according">&lt;p class="common-flex"&gt;
 &lt;a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"&gt;Link With Href&lt;/a&gt;
 &lt;button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"&gt;Button With Data-bs-target&lt;/button&gt;
&lt;/p&gt;
&lt;div class="collapse btn-dark" id="collapseExample"&gt;
 &lt;div class="card card-body mb-0 dark-accordion"&gt;Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.&lt;/div&gt;
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
