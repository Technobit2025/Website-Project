@extends('layouts.simple.master')

@section('title', 'Modal')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Modal</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui KIts</li>
                        <li class="breadcrumb-item active">Modal</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Modals</h5>
                        <p class="mt-1 f-m-light">Different types of basic modals using like
                            <code>simple / scrolling / tooltips / grid / varying modal</code>.
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
                    <div class="card-body common-flex"><!-- Simple demo--><button class="btn btn-secondary" type="button"
                            data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">Simple</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="modal-toggle-wrapper">
                                            <h4>Up to<strong class="txt-danger">85% OFF</strong>,Hurry Up Online Shopping
                                            </h4>
                                            <div class="modal-img"><img
                                                    src="{{ asset('assets/images/gif/online-shopping.gif') }}"
                                                    alt="online-shopping"></div>
                                            <p class="text-sm-center">Our difficulty in finding regular clothes that was of
                                                great
                                                quality, comfortable, and didn't impact the environment given way to
                                                creatures of habit.
                                            </p><button
                                                class="btn bg-primary d-flex align-items-center gap-2 text-light ms-auto"
                                                type="button" data-bs-dismiss="modal">Explore More<i
                                                    data-feather="arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Scrolling long content--><button class="btn btn-success" type="button"
                            data-bs-toggle="modal" data-bs-target="#exampleModalLong">Scrolling Content</button>
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Scrolling Modal</h5><button
                                            class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h6>Wed Designer</h6>
                                        <div class="d-flex mt-3">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>For a site to be successful, a designer must be able to communicate their
                                                    ideas, chat
                                                    with a firm about what they want, and inquire about the target audience.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>As a web designer, you either prefer to work freelance for several
                                                    different businesses
                                                    at once or you may choose to work for just one. In either case, you'll
                                                    need good time
                                                    management skills to keep several projects moving forward.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>Although a designer doesn't write the code that makes a site work, it
                                                    doesn't hurt to
                                                    have a basic understanding of HTML or CSS to make minor adjustments to a
                                                    site. You'll
                                                    find it simpler to edit templates, improve typefaces, or change item
                                                    placements if you
                                                    have a basic understanding of how things work.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex my-2">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="pb-4">Most businesses employ a certain font or typography so
                                                    that clients can
                                                    quickly distinguish them from their rivals. Since designers now have
                                                    access to a wider
                                                    variety of fonts, firms may more easily and precisely communicate their
                                                    brands through
                                                    typography.</p>
                                            </div>
                                        </div>
                                        <h6>UX Designer </h6>
                                        <div class="d-flex mt-3">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>User research, persona creation, building wireframes and interactive
                                                    prototypes, and
                                                    testing ideas are among the common tasks of a UX designer. These duties
                                                    can differ
                                                    greatly between organizations.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-3">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>Create solutions that will be helpful for the issues and situations that
                                                    exist right
                                                    now, not for those that will. With the right materials, assist people in
                                                    organizing
                                                    their time, completing things more quickly, and optimizing it.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-3">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>Based on the data received from users, improve them. Adapt existing
                                                    solutions to the
                                                    requirements, hopes, difficulties, and expectations of users.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-3">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>Keep in mind that you are creating solutions to particular challenges for
                                                    a particular
                                                    population living in a particular habitat. Always remember to correctly
                                                    contextualise
                                                    your thoughts and determine whether they are actually appropriate for
                                                    the situation.
                                                    It's sometimes necessary to concede that a digital solution is not the
                                                    most appropriate
                                                    choice in a certain circumstance.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                            type="button">Save</button></div>
                                </div>
                            </div>
                        </div><!-- Tooltips and popovers modal--><button class="btn btn-info" type="button"
                            data-bs-toggle="modal" data-bs-target="#tooltipmodal">Tooltips and Popovers</button>
                        <div class="modal fade" id="tooltipmodal" tabindex="-1" role="dialog"
                            aria-labelledby="tooltipmodal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tooltip and Popover Modal</h5><button
                                            class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Popover in a modal</h5>
                                        <p class="mt-2">This <button class="btn btn-info" data-bs-toggle="popover"
                                                title="Popover title"
                                                data-bs-content="Popover body content is set in this attribute.">button</button>
                                            triggers
                                            a popover on click.</p>
                                        <hr>
                                        <h5>Tooltips in a modal</h5>
                                        <p class="mt-2"><a class="tooltip-test txt-primary" href="#"
                                                title="Tooltip" data-bs-toggle="tooltip">This link</a> and <a
                                                class="tooltip-test txt-primary" href="#" title="Tooltip"
                                                data-bs-toggle="tooltip">that link</a> have tooltips on hover.</p>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                            type="button">Save</button></div>
                                </div>
                            </div>
                        </div><!--varying modal content--><button class="btn btn-primary" type="button"
                            data-bs-toggle="modal" data-bs-target="#exampleModalgetbootstrap"
                            data-whatever="@getbootstrap">Open Modal for
                            Cuba</button>
                        <div class="modal fade" id="exampleModalgetbootstrap" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalgetbootstrap" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
                                        <h3 class="modal-header justify-content-center border-0">CUBA SIGN-UP</h3>
                                        <div class="modal-body">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-md-6"><label class="form-label"
                                                        for="validationCustom01">First
                                                        name</label><input class="form-control" id="validationCustom01"
                                                        type="text" placeholder="Enter your name" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-md-6"><label class="form-label"
                                                        for="validationCustom02">Last
                                                        name</label><input class="form-control" id="validationCustom02"
                                                        type="text" placeholder="Enter your surname" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3"><label class="form-label"
                                                            for="exampleFormControlInput1">Email
                                                            address</label><input class="form-control"
                                                            id="exampleFormControlInput1" type="email"
                                                            placeholder="cubatheme@gmail.com"></div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-check mb-3"><input
                                                            class="form-check-input checkbox-primary"
                                                            id="flexCheckDefault" type="checkbox" value=""><label
                                                            class="form-check-label d-block mb-0"
                                                            for="flexCheckDefault">You accept our Terms
                                                            and Privacy Policy by clicking Submit below.</label></div>
                                                    <button class="btn btn-primary" type="submit">Sign Up</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#basic-modal-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="basic-modal-copy">&lt;button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal"&gt;Simple&lt;/button&gt;
&lt;div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true"&gt;
 &lt;div class="modal-dialog" role="document"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-body"&gt;
       &lt;div class="modal-toggle-wrapper"&gt; 
         &lt;h4&gt;Up to&lt;strong class="txt-danger"&gt;85% OFF&lt;/strong&gt;,Hurry Up Online Shopping&lt;/h4&gt;
         &lt;div class="modal-img"&gt;&lt;img src="{{ asset('assets/images/gif/online-shopping.gif') }}" alt="online-shopping"&gt;&lt;/div&gt;
         &lt;p class="text-sm-center"&gt;Our difficulty in finding regular clothes that was of great quality, comfortable, and didn't impact the environment given way to creatures of habit.&lt;/p&gt;
         &lt;button class="btn bg-primary d-flex align-items-center gap-2 text-light ms-auto" type="button" data-bs-dismiss="modal"&gt;Explore More&lt;i data-feather="arrow-right"&gt;&lt;/i&gt;&lt;/button&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;!--Scrolling long content--&gt;
&lt;button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalLong"&gt;Scrolling Content&lt;/button&gt;
&lt;div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true"&gt;
 &lt;div class="modal-dialog" role="document"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-header"&gt;
       &lt;h5 class="modal-title" id="exampleModalLongTitle"&gt;Scrolling Modal&lt;/h5&gt;
       &lt;button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="modal-body"&gt;
       &lt;h6&gt;Wed Designer&lt;/h6&gt;
       &lt;div class="d-flex mt-3"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p&gt;For a site to be successful, a designer must be able to communicate their ideas, chat with a firm about what they want, and inquire about the target audience.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="d-flex mt-2"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p&gt;As a web designer, you either prefer to work freelance for several different businesses at once or you may choose to work for just one. In either case, you'll need good time management skills to keep several projects moving forward.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="d-flex mt-2"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p&gt;Although a designer doesn't write the code that makes a site work, it doesn't hurt to have a basic understanding of HTML or CSS to make minor adjustments to a site. You'll find it simpler to edit templates, improve typefaces, or change item placements if you have a basic understanding of how things work.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="d-flex my-2"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p class="pb-4"&gt;Most businesses employ a certain font or typography so that clients can quickly distinguish them from their rivals. Since designers now have access to a wider variety of fonts, firms may more easily and precisely communicate their brands through typography.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;h6&gt;UX Designer&lt;/h6&gt;
       &lt;div class="d-flex mt-3"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p&gt;User research, persona creation, building wireframes and interactive prototypes, and testing ideas are among the common tasks of a UX designer. These duties can differ greatly between organizations.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="d-flex mt-3"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p&gt;Create solutions that will be helpful for the issues and situations that exist right now, not for those that will. With the right materials, assist people in organizing their time, completing things more quickly, and optimizing it.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="d-flex mt-3"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p&gt;Based on the data received from users, improve them. Adapt existing solutions to the requirements, hopes, difficulties, and expectations of users.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="d-flex mt-3"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p&gt;Keep in mind that you are creating solutions to particular challenges for a particular population living in a particular habitat. Always remember to correctly contextualise your thoughts and determine whether they are actually appropriate for the situation. It's sometimes necessary to concede that a digital solution is not the most appropriate choice in a certain circumstance.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="modal-footer"&gt;
       &lt;button class="btn btn-secondary" type="button" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
       &lt;button class="btn btn-primary" type="button"&gt;Save&lt;/button&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;!--Tooltips and popovers modal--&gt;
&lt;button class="btn btn-info" type="button" data-bs-toggle="modal" data-bs-target="#tooltipmodal"&gt;Tooltips and Popovers&lt;/button&gt;
&lt;div class="modal fade" id="tooltipmodal" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal" aria-hidden="true"&gt;
 &lt;div class="modal-dialog modal-dialog-centered" role="document"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-header"&gt;
       &lt;h5 class="modal-title"&gt;Tooltip and Popover Modal&lt;/h5&gt;
       &lt;button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="modal-body"&gt;
       &lt;h5&gt;Popover in a modal&lt;/h5&gt;
       &lt;p class="mt-2"&gt;This 
         &lt;button class="btn btn-info" data-bs-toggle="popover" title="Popover title" data-bs-content="Popover body content is set in this attribute."&gt;button&lt;/button&gt; triggers a popover on click.
       &lt;/p&gt;
       &lt;hr&gt;
       &lt;h5&gt;Tooltips in a modal&lt;/h5&gt;
       &lt;p class="mt-2"&gt;&lt;a class="tooltip-test txt-primary" href="#" title="Tooltip" data-bs-toggle="tooltip"&gt;This link&lt;/a&gt; and &lt;a class="tooltip-test txt-primary" href="#" title="Tooltip" data-bs-toggle="tooltip"&gt;that link&lt;/a&gt; have tooltips on hover.&lt;/p&gt;
     &lt;/div&gt;
     &lt;div class="modal-footer"&gt;
       &lt;button class="btn btn-secondary" type="button" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
       &lt;button class="btn btn-primary" type="button"&gt;Save&lt;/button&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;!--varying modal content--&gt;
&lt;button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalgetbootstrap" data-whatever="@getbootstrap"&gt;Open Modal for Cuba&lt;/button&gt;
&lt;div class="modal fade" id="exampleModalgetbootstrap" tabindex="-1" role="dialog" aria-labelledby="exampleModalgetbootstrap" aria-hidden="true"&gt;
 &lt;div class="modal-dialog" role="document"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-toggle-wrapper social-profile text-start dark-sign-up"&gt;
       &lt;h3 class="modal-header justify-content-center border-0"&gt;CUBA SIGN-UP&lt;/h3&gt;
       &lt;div class="modal-body"&gt;
         &lt;form class="row g-3 needs-validation" novalidate=""&gt;
           &lt;div class="col-md-6"&gt;
             &lt;label class="form-label" for="validationCustom01"&gt;First name&lt;/label&gt;
             &lt;input class="form-control" id="validationCustom01" type="text" placeholder="Enter your name" required=""&gt;
             &lt;div class="valid-feedback"&gt;Looks good!&lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-md-6"&gt;
             &lt;label class="form-label" for="validationCustom02"&gt;Last name&lt;/label&gt;
             &lt;input class="form-control" id="validationCustom02" type="text" placeholder="Enter your surname" required=""&gt;
             &lt;div class="valid-feedback"&gt;Looks good!&lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-md-12"&gt;
             &lt;div class="mb-3"&gt;
               &lt;label class="form-label" for="exampleFormControlInput1"&gt;Email address&lt;/label&gt;
               &lt;input class="form-control" id="exampleFormControlInput1" type="email" placeholder="cubatheme@gmail.com"&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-md-12"&gt; 
             &lt;div class="form-check mb-3"&gt;
               &lt;input class="form-check-input checkbox-primary" id="flexCheckDefault" type="checkbox" value=""&gt;
               &lt;label class="form-check-label d-block mb-0" for="flexCheckDefault"&gt;You accept our Terms and Privacy Policy by clicking Submit below.&lt;/label&gt;
             &lt;/div&gt;
             &lt;button class="btn btn-primary" type="submit"&gt;Sign Up&lt;/button&gt;
           &lt;/div&gt;
         &lt;/form&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Sizes Modal</h5>
                        <p class="mt-1 f-m-light">Modals have three optional sizes, available via modifier classes to be
                            placed on a <code>modal-dialog</code>.</p>
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
                    <div class="card-body common-flex"><!--full screen modal-->
                        <div class="btn btn-secondary" data-bs-toggle="modal"
                            data-bs-target=".bd-example-modal-fullscreen">
                            Full Screen Modal</div>
                        <div class="modal fade bd-example-modal-fullscreen" tabindex="-1" role="dialog"
                            aria-labelledby="myFullLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myFullLargeModalLabel">Full Screen Modal</h4><button
                                            class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>Web Design</h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialized websites for companies, list
                                            them on
                                            digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>Content Marketing</h6>
                                        </div>
                                        <p class="modal-padding-space">Through better opportunities and knowledgeable
                                            marketing
                                            strategies, we aid business funnel. We won't only hit the target; instead, we'll
                                            aim higher
                                            and surpass the objectives.</p>
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>PPC</h6>
                                        </div>
                                        <p class="modal-padding-space">Customized advertising to increase visitors and
                                            improve
                                            conversion. To increase retention, identify the correct audience and remarket to
                                            them.</p>
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>UX Designer</h6>
                                        </div>
                                        <p class="modal-padding-space">The capacity to comprehend and experience other
                                            people's
                                            feelings is known as empathy. A positive consumer experience is prioritised by
                                            UX. The
                                            finest UX designers spend time studying individuals and their tendencies because
                                            of this.
                                            Designers may produce goods that genuinely engage and excite customers by having
                                            a thorough
                                            understanding of the end consumers.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--Extra large modal-->
                        <div class="btn btn-info" data-bs-toggle="modal" data-bs-target=".bd-example-modal-xl">Extra
                            Large
                            Modal</div>
                        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">Extra Large Modal</h4><button
                                            class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>Web Design</h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialized websites for companies, list
                                            them on
                                            digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>Content Marketing </h6>
                                        </div>
                                        <p class="modal-padding-space">Through better opportunities and knowledgeable
                                            marketing
                                            strategies, we aid business funnel. We won't only hit the target; instead, we'll
                                            aim higher
                                            and surpass the objectives.</p>
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>PPC </h6>
                                        </div>
                                        <p class="modal-padding-space">Customized advertising to increase visitors and
                                            improve
                                            conversion. To increase retention, identify the correct audience and remarket to
                                            them.</p>
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>UX Designer </h6>
                                        </div>
                                        <p class="modal-padding-space">The capacity to comprehend and experience other
                                            people's
                                            feelings is known as empathy. A positive consumer experience is prioritized by
                                            UX. The
                                            finest UX designers spend time studying individuals and their tendencies because
                                            of this.
                                            Designers may produce goods that genuinely engage and excite customers by having
                                            a thorough
                                            understanding of the end consumers.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Large modal--><button class="btn btn-success" type="button" data-bs-toggle="modal"
                            data-bs-target=".bd-example-modal-lg">Large Modal</button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myExtraLargeModal" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myExtraLargeModal">Large Modal</h4><button
                                            class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>Start with your goals</h6>
                                        </div>
                                        <p class="modal-padding-space mb-0">No matter how talented you are as a content
                                            writer or
                                            creator, you will always fail if you don't have a clear set of goals.</p>
                                        <p class="modal-padding-space mb-0">First of all, without goals, there is no way to
                                            determine
                                            your success. Additionally, you lack direction.</p>
                                        <p class="modal-padding-space mb-0">Together with your team, respond to the
                                            following
                                            questions to make sure they are:</p>
                                        <div class="large-modal-body"><i data-feather="corner-up-right"></i>
                                            <p class="ps-1">What must you achieve, and by when?</p>
                                        </div>
                                        <div class="large-modal-body"><i data-feather="corner-up-right"></i>
                                            <p class="ps-1">How will you evaluate your level of success?</p>
                                        </div>
                                        <div class="large-modal-body"><i data-feather="corner-up-right"></i>
                                            <p class="ps-1">Can you accomplish it with the available resources?</p>
                                        </div>
                                        <div class="large-modal-body"><i data-feather="corner-up-right"></i>
                                            <p class="ps-1">Does it advance your core business aims? </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Small modal--><button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target=".bd-example-modal-sm">Small Modal</button>
                        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="mySmallModalLabel">Small Modal</h4><button
                                            class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>Web Design</h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialized websites for companies, list
                                            them on
                                            digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>Content marketing</h6>
                                        </div>
                                        <p class="modal-padding-space">Through better opportunities and knowledgeable
                                            marketing
                                            strategies, we aid business funnel. We won't only hit the target; instead, we'll
                                            aim higher
                                            and surpass the objectives.</p>
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>PPC</h6>
                                        </div>
                                        <p class="modal-padding-space">Customized advertising to increase visitors and
                                            improve
                                            conversion. To increase retention, identify the correct audience and remarket to
                                            them.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#size-modal-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="size-modal-copy">&lt;div class="btn btn-secondary" data-bs-toggle="modal" data-bs-target=".bd-example-modal-fullscreen"&gt;Full Screen Modal&lt;/div&gt;
&lt;div class="modal fade bd-example-modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myFullLargeModalLabel" aria-hidden="true"&gt;
 &lt;div class="modal-dialog modal-fullscreen"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-header"&gt;
       &lt;h4 class="modal-title" id="myFullLargeModalLabel"&gt;Full Screen Modal&lt;/h4&gt;
       &lt;button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="modal-body dark-modal"&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;Web Design&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;We build specialized websites for companies, list them on digital directories, and set up a sales funnel to boost ROI.&lt;/p&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;Content Marketing&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;Through better opportunities and knowledgeable marketing strategies, we aid business funnel. We won't only hit the target; instead, we'll aim higher and surpass the objectives.&lt;/p&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;PPC&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;Customized advertising to increase visitors and improve conversion. To increase retention, identify the correct audience and remarket to them.&lt;/p&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;UX Designer&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;The capacity to comprehend and experience other people's feelings is known as empathy. A positive consumer experience is prioritised by UX. The finest UX designers spend time studying individuals and their tendencies because of this. Designers may produce goods that genuinely engage and excite customers by having a thorough understanding of the end consumers.&lt;/p&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;!--Extra large modal--&gt;
&lt;div class="btn btn-info" data-bs-toggle="modal" data-bs-target=".bd-example-modal-xl"&gt;Extra Large Modal&lt;/div&gt;
&lt;div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"&gt;
 &lt;div class="modal-dialog modal-xl"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-header"&gt;
       &lt;h4 class="modal-title" id="myLargeModalLabel"&gt;Extra Large Modal&lt;/h4&gt;
       &lt;button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="modal-body dark-modal"&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;Web Design&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;We build specialized websites for companies, list them on digital directories, and set up a sales funnel to boost ROI.&lt;/p&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;Content Marketing&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;Through better opportunities and knowledgeable marketing strategies, we aid business funnel. We won't only hit the target; instead, we'll aim higher and surpass the objectives.&lt;/p&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;PPC&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;Customized advertising to increase visitors and improve conversion. To increase retention, identify the correct audience and remarket to them.&lt;/p&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;UX Designer&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;The capacity to comprehend and experience other people's feelings is known as empathy. A positive consumer experience is prioritized by UX. The finest UX designers spend time studying individuals and their tendencies because of this. Designers may produce goods that genuinely engage and excite customers by having a thorough understanding of the end consumers.&lt;/p&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;!--Large modal--&gt;
&lt;button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"&gt;Large Modal&lt;/button&gt;
&lt;div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModal" aria-hidden="true"&gt;
 &lt;div class="modal-dialog modal-lg"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-header"&gt;
       &lt;h4 class="modal-title" id="myExtraLargeModal"&gt;Large Modal&lt;/h4&gt;
       &lt;button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="modal-body dark-modal"&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;Start with your goals&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space mb-0"&gt;No matter how talented you are as a content writer or creator, you will always fail if you don't have a clear set of goals.&lt;/p&gt;
       &lt;p class="modal-padding-space mb-0"&gt;First of all, without goals, there is no way to determine your success. Additionally, you lack direction.&lt;/p&gt;
       &lt;p class="modal-padding-space mb-0"&gt;Together with your team, respond to the following questions to make sure they are:&lt;/p&gt;
       &lt;div class="large-modal-body"&gt;&lt;i data-feather="corner-up-right"&gt;&lt;/i&gt;
         &lt;p class="ps-1"&gt;What must you achieve, and by when?&lt;/p&gt;
       &lt;/div&gt;
       &lt;div class="large-modal-body"&gt;&lt;i data-feather="corner-up-right"&gt;&lt;/i&gt;
         &lt;p class="ps-1"&gt;How will you evaluate your level of success?&lt;/p&gt;
       &lt;/div&gt;
       &lt;div class="large-modal-body"&gt;&lt;i data-feather="corner-up-right"&gt;&lt;/i&gt;
         &lt;p class="ps-1"&gt;Can you accomplish it with the available resources?&lt;/p&gt;
       &lt;/div&gt;
       &lt;div class="large-modal-body"&gt;&lt;i data-feather="corner-up-right"&gt;&lt;/i&gt;
         &lt;p class="ps-1"&gt;Does it advance your core business aims?&lt;/p&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;!--Small modal--&gt;
&lt;button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm"&gt;Small Modal&lt;/button&gt;
&lt;div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true"&gt;
 &lt;div class="modal-dialog modal-sm"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-header"&gt;
       &lt;h4 class="modal-title" id="mySmallModalLabel"&gt;Small Modal&lt;/h4&gt;
       &lt;button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="modal-body dark-modal"&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;Web Design&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;We build specialized websites for companies, list them on digital directories, and set up a sales funnel to boost ROI.&lt;/p&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;Content marketing&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;Through better opportunities and knowledgeable marketing strategies, we aid business funnel. We won't only hit the target; instead, we'll aim higher and surpass the objectives.&lt;/p&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;PPC&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;Customized advertising to increase visitors and improve conversion. To increase retention, identify the correct audience and remarket to them.&lt;/p&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Fullscreen Modals</h5>
                        <p class="f-m-light mt-1">Another override is the option to pop up a modal that covers the user
                            viewport, available via modifier classes that are placed on a<code> modal-dialog</code>. </p>
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
                    <div class="card-body common-flex"><button class="btn btn-outline-secondary-2x" type="button"
                            data-bs-toggle="modal" data-bs-target="#exampleModalfullscreen">Fullscreen
                            Modal</button><!-- Full Screen Modal-->
                        <div class="modal fade" id="exampleModalfullscreen" tabindex="-1"
                            aria-labelledby="fullScreenModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="fullScreenModalLabel">Full Screen Modal</h1>
                                        <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>Web Design</h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialized websites for companies, list
                                            them on
                                            digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="modal-details">
                                            <div class="web-content">
                                                <h6>Web Designer</h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>For a site to be successful, a designer must be able to
                                                            communicate their ideas,
                                                            chat with a firm about what they want, and inquire about the
                                                            target audience.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>As a web designer, you either prefer to work freelance for
                                                            several different
                                                            businesses at once or you may choose to work for just one. In
                                                            either case, you'll
                                                            need good time management skills to keep several projects moving
                                                            forward.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Although a designer doesn't write the code that makes a site
                                                            work, it doesn't hurt
                                                            to have a basic understanding of HTML or CSS to make minor
                                                            adjustments to a site.
                                                            You'll find it simpler to edit templates, improve typefaces, or
                                                            change item
                                                            placements if you have a basic understanding of how things work.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p> Most businesses employ a certain font or typography so that
                                                            clients can quickly
                                                            distinguish them from their rivals. Since designers now have
                                                            access to a wider
                                                            variety of fonts, firms may more easily and precisely
                                                            communicate their brands
                                                            through typography.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="web-content">
                                                <h6>UX Designer </h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>User research, persona creation, building wireframes and
                                                            interactive prototypes,
                                                            and testing ideas are among the common tasks of a UX designer.
                                                            These duties can
                                                            differ greatly between organizations.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Create solutions that will be helpful for the issues and
                                                            situations that exist
                                                            right now, not for those that will. With the right materials,
                                                            assist people in
                                                            organizing their time, completing things more quickly, and
                                                            optimizing it.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Based on the data received from users, improve them. Adapt
                                                            existing solutions to
                                                            the requirements, hopes, difficulties, and expectations of
                                                            users.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Keep in mind that you are creating solutions to particular
                                                            challenges for a
                                                            particular population living in a particular habitat. Always
                                                            remember to correctly
                                                            contextualise your thoughts and determine whether they are
                                                            actually appropriate for
                                                            the situation. It's sometimes necessary to concede that a
                                                            digital solution is not
                                                            the most appropriate choice in a certain circumstance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                            type="button">Save
                                        </button></div>
                                </div>
                            </div>
                        </div><button class="btn btn-outline-info-2x" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModalfullscreensm">Fullscreen Below
                            sm</button><!-- Full screen below sm-->
                        <div class="modal fade" id="exampleModalfullscreensm" tabindex="-1"
                            aria-labelledby="smModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-sm-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="smModalLabel">Full Screen Below sm</h1><button
                                            class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>Web Design</h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialized websites for companies, list
                                            them on
                                            digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="modal-details">
                                            <div class="web-content">
                                                <h6>Wed Designer</h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>For a site to be successful, a designer must be able to
                                                            communicate their ideas,
                                                            chat with a firm about what they want, and inquire about the
                                                            target audience.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Most businesses employ a certain font or typography so that
                                                            clients can quickly
                                                            distinguish them from their rivals. Since designers now have
                                                            access to a wider
                                                            variety of fonts, firms may more easily and precisely
                                                            communicate their brands
                                                            through typography.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="web-content">
                                                <h6>UX Designer </h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>User research, persona creation, building wireframes and
                                                            interactive prototypes,
                                                            and testing ideas are among the common tasks of a UX designer.
                                                            These duties can
                                                            differ greatly between organizations.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Keep in mind that you are creating solutions to particular
                                                            challenges for a
                                                            particular population living in a particular habitat. Always
                                                            remember to correctly
                                                            contextualise your thoughts and determine whether they are
                                                            actually appropriate for
                                                            the situation. It's sometimes necessary to concede that a
                                                            digital solution is not
                                                            the most appropriate choice in a certain circumstance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                            type="button">Save</button></div>
                                </div>
                            </div>
                        </div><button class="btn btn-outline-success-2x" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModalfullscreen-md">Fullscreen Below
                            md</button><!-- Full screen below md-->
                        <div class="modal fade" id="exampleModalfullscreen-md" tabindex="-1"
                            aria-labelledby="mdModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="mdModalLabel">Full Screen Below md</h1><button
                                            class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>Web Design</h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialized websites for companies, list
                                            them on
                                            digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="modal-details">
                                            <div class="web-content">
                                                <h6>Wed Designer</h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>For a site to be successful, a designer must be able to
                                                            communicate their ideas,
                                                            chat with a firm about what they want, and inquire about the
                                                            target audience.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Most businesses employ a certain font or typography so that
                                                            clients can quickly
                                                            distinguish them from their rivals. Since designers now have
                                                            access to a wider
                                                            variety of fonts, firms may more easily and precisely
                                                            communicate their brands
                                                            through typography.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="web-content">
                                                <h6>UX Designer </h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>User research, persona creation, building wireframes and
                                                            interactive prototypes,
                                                            and testing ideas are among the common tasks of a UX designer.
                                                            These duties can
                                                            differ greatly between organizations.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Keep in mind that you are creating solutions to particular
                                                            challenges for a
                                                            particular population living in a particular habitat. Always
                                                            remember to correctly
                                                            contextualise your thoughts and determine whether they are
                                                            actually appropriate for
                                                            the situation. It's sometimes necessary to concede that a
                                                            digital solution is not
                                                            the most appropriate choice in a certain circumstance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                            type="button">Save</button></div>
                                </div>
                            </div>
                        </div><button class="btn btn-outline-warning-2x" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModalfullscreen-lg">Fullscreen Below
                            lg</button><!-- Full screen below lg-->
                        <div class="modal fade" id="exampleModalfullscreen-lg" tabindex="-1"
                            aria-labelledby="lgModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-lg-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="lgModalLabel">Full Screen Below lg</h1><button
                                            class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>Web Design</h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialized websites for companies, list
                                            them on
                                            digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="modal-details">
                                            <div class="web-content">
                                                <h6>Wed Designer</h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>For a site to be successful, a designer must be able to
                                                            communicate their ideas,
                                                            chat with a firm about what they want, and inquire about the
                                                            target audience.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Most businesses employ a certain font or typography so that
                                                            clients can quickly
                                                            distinguish them from their rivals. Since designers now have
                                                            access to a wider
                                                            variety of fonts, firms may more easily and precisely
                                                            communicate their brands
                                                            through typography.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="web-content">
                                                <h6>UX Designer </h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>User research, persona creation, building wireframes and
                                                            interactive prototypes,
                                                            and testing ideas are among the common tasks of a UX designer.
                                                            These duties can
                                                            differ greatly between organizations.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Keep in mind that you are creating solutions to particular
                                                            challenges for a
                                                            particular population living in a particular habitat. Always
                                                            remember to correctly
                                                            contextualise your thoughts and determine whether they are
                                                            actually appropriate for
                                                            the situation. It's sometimes necessary to concede that a
                                                            digital solution is not
                                                            the most appropriate choice in a certain circumstance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                            type="button">Save</button></div>
                                </div>
                            </div>
                        </div><button class="btn btn-outline-primary-2x" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModalfullscreen-xl">Fullscreen Below
                            xl</button><!-- Full screen below xl-->
                        <div class="modal fade" id="exampleModalfullscreen-xl" tabindex="-1"
                            aria-labelledby="xlModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-xl-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="xlModalLabel">Full Screen Below xl</h1><button
                                            class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>Web Design</h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialized websites for companies, list
                                            them on
                                            digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="modal-details">
                                            <div class="web-content">
                                                <h6>Wed Designer</h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>For a site to be successful, a designer must be able to
                                                            communicate their ideas,
                                                            chat with a firm about what they want, and inquire about the
                                                            target audience.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Most businesses employ a certain font or typography so that
                                                            clients can quickly
                                                            distinguish them from their rivals. Since designers now have
                                                            access to a wider
                                                            variety of fonts, firms may more easily and precisely
                                                            communicate their brands
                                                            through typography.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="web-content">
                                                <h6>UX Designer </h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>User research, persona creation, building wireframes and
                                                            interactive prototypes,
                                                            and testing ideas are among the common tasks of a UX designer.
                                                            These duties can
                                                            differ greatly between organizations.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Keep in mind that you are creating solutions to particular
                                                            challenges for a
                                                            particular population living in a particular habitat. Always
                                                            remember to correctly
                                                            contextualise your thoughts and determine whether they are
                                                            actually appropriate for
                                                            the situation. It's sometimes necessary to concede that a
                                                            digital solution is not
                                                            the most appropriate choice in a certain circumstance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                            type="button">Save
                                        </button></div>
                                </div>
                            </div>
                        </div><button class="btn btn-outline-danger-2x" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModalfullscreen-xxl">Fullscreen Below
                            xxl</button><!-- Full screen below xxl-->
                        <div class="modal fade" id="exampleModalfullscreen-xxl" tabindex="-1"
                            aria-labelledby="xxlModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-xxl-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="xxlModalLabel">Full Screen Below xxl</h1><button
                                            class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body dark-modal">
                                        <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                            <h6>Web Design</h6>
                                        </div>
                                        <p class="modal-padding-space">We build specialized websites for companies, list
                                            them on
                                            digital directories, and set up a sales funnel to boost ROI.</p>
                                        <div class="modal-details">
                                            <div class="web-content">
                                                <h6>Wed Designer</h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>For a site to be successful, a designer must be able to
                                                            communicate their ideas,
                                                            chat with a firm about what they want, and inquire about the
                                                            target audience.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Most businesses employ a certain font or typography so that
                                                            clients can quickly
                                                            distinguish them from their rivals. Since designers now have
                                                            access to a wider
                                                            variety of fonts, firms may more easily and precisely
                                                            communicate their brands
                                                            through typography.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="web-content">
                                                <h6>UX Designer </h6>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>User research, persona creation, building wireframes and
                                                            interactive prototypes,
                                                            and testing ideas are among the common tasks of a UX designer.
                                                            These duties can
                                                            differ greatly between organizations.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0"><i class="svg-modal"
                                                            data-feather="arrow-right-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <p>Keep in mind that you are creating solutions to particular
                                                            challenges for a
                                                            particular population living in a particular habitat. Always
                                                            remember to correctly
                                                            contextualise your thoughts and determine whether they are
                                                            actually appropriate for
                                                            the situation. It's sometimes necessary to concede that a
                                                            digital solution is not
                                                            the most appropriate choice in a certain circumstance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                            type="button">Save</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#common-modal" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="common-modal">&lt;button class="btn btn-outline-secondary-2x" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfullscreen"&gt;Fullscreen Modal&lt;/button&gt;
&lt;!--Full Screen Modal--&gt;
&lt;div class="modal fade" id="exampleModalfullscreen" tabindex="-1" aria-labelledby="fullScreenModalLabel" aria-hidden="true"&gt;
 &lt;div class="modal-dialog modal-fullscreen"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-header"&gt;
       &lt;h1 class="modal-title fs-5" id="fullScreenModalLabel"&gt;Full Screen Modal&lt;/h1&gt;
       &lt;button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="modal-body dark-modal"&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;Web Design&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;We build specialized websites for companies, list them on digital directories, and set up a sales funnel to boost ROI.&lt;/p&gt;
       &lt;div class="modal-details"&gt;
         &lt;div class="web-content"&gt;
           &lt;h6&gt;Web Designer&lt;/h6&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;For a site to be successful, a designer must be able to communicate their ideas, chat with a firm about what they want, and inquire about the target audience.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;As a web designer, you either prefer to work freelance for several different businesses at once or you may choose to work for just one. In either case, you'll need good time management skills to keep several projects moving forward.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;Although a designer doesn't write the code that makes a site work, it doesn't hurt to have a basic understanding of HTML or CSS to make minor adjustments to a site. You'll find it simpler to edit templates, improve typefaces, or change item placements if you have a basic understanding of how things work.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;Most businesses employ a certain font or typography so that clients can quickly distinguish them from their rivals. Since designers now have access to a wider variety of fonts, firms may more easily and precisely communicate their brands through typography.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="web-content"&gt;
           &lt;h6&gt;UX Designer&lt;/h6&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;User research, persona creation, building wireframes and interactive prototypes, and testing ideas are among the common tasks of a UX designer. These duties can differ greatly between organizations.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;Create solutions that will be helpful for the issues and situations that exist right now, not for those that will. With the right materials, assist people in organizing their time, completing things more quickly, and optimizing it.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;Based on the data received from users, improve them. Adapt existing solutions to the requirements, hopes, difficulties, and expectations of users.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;Keep in mind that you are creating solutions to particular challenges for a particular population living in a particular habitat. Always remember to correctly contextualise your thoughts and determine whether they are actually appropriate for the situation. It's sometimes necessary to concede that a digital solution is not the most appropriate choice in a certain circumstance.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="modal-footer"&gt;
       &lt;button class="btn btn-secondary" type="button" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
       &lt;button class="btn btn-primary" type="button"&gt;Save &lt;/button&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;button class="btn btn-outline-info-2x" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfullscreensm"&gt;Fullscreen Below sm&lt;/button&gt;
&lt;!--Full screen below sm--&gt;
&lt;div class="modal fade" id="exampleModalfullscreensm" tabindex="-1" aria-labelledby="smModalLabel" aria-hidden="true"&gt;
 &lt;div class="modal-dialog modal-fullscreen-sm-down"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-header"&gt;
       &lt;h1 class="modal-title fs-5" id="smModalLabel"&gt;Full Screen Below sm&lt;/h1&gt;
       &lt;button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="modal-body dark-modal"&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;Web Design&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;We build specialized websites for companies, list them on digital directories, and set up a sales funnel to boost ROI.&lt;/p&gt;
       &lt;div class="modal-details"&gt;
         &lt;div class="web-content"&gt;
           &lt;h6&gt;Wed Designer&lt;/h6&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;For a site to be successful, a designer must be able to communicate their ideas, chat with a firm about what they want, and inquire about the target audience.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;Most businesses employ a certain font or typography so that clients can quickly distinguish them from their rivals. Since designers now have access to a wider variety of fonts, firms may more easily and precisely communicate their brands through typography.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="web-content"&gt;
           &lt;h6&gt;UX Designer&lt;/h6&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;User research, persona creation, building wireframes and interactive prototypes, and testing ideas are among the common tasks of a UX designer. These duties can differ greatly between organizations.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;Keep in mind that you are creating solutions to particular challenges for a particular population living in a particular habitat. Always remember to correctly contextualise your thoughts and determine whether they are actually appropriate for the situation. It's sometimes necessary to concede that a digital solution is not the most appropriate choice in a certain circumstance.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="modal-footer"&gt;
       &lt;button class="btn btn-secondary" type="button" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
       &lt;button class="btn btn-primary" type="button"&gt;Save&lt;/button&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;button class="btn btn-outline-success-2x" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfullscreen-md"&gt;Fullscreen Below md&lt;/button&gt;
&lt;!--Full screen below md--&gt;
&lt;div class="modal fade" id="exampleModalfullscreen-md" tabindex="-1" aria-labelledby="mdModalLabel" aria-hidden="true"&gt;
 &lt;div class="modal-dialog modal-fullscreen-md-down"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-header"&gt;
       &lt;h1 class="modal-title fs-5" id="mdModalLabel"&gt;Full Screen Below md&lt;/h1&gt;
       &lt;button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="modal-body dark-modal"&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;Web Design&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;We build specialized websites for companies, list them on digital directories, and set up a sales funnel to boost ROI.&lt;/p&gt;
       &lt;div class="modal-details"&gt;
         &lt;div class="web-content"&gt;
           &lt;h6&gt;Wed Designer&lt;/h6&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;For a site to be successful, a designer must be able to communicate their ideas, chat with a firm about what they want, and inquire about the target audience.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;Most businesses employ a certain font or typography so that clients can quickly distinguish them from their rivals. Since designers now have access to a wider variety of fonts, firms may more easily and precisely communicate their brands through typography.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="web-content"&gt;
           &lt;h6&gt;UX Designer&lt;/h6&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;User research, persona creation, building wireframes and interactive prototypes, and testing ideas are among the common tasks of a UX designer. These duties can differ greatly between organizations.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;Keep in mind that you are creating solutions to particular challenges for a particular population living in a particular habitat. Always remember to correctly contextualise your thoughts and determine whether they are actually appropriate for the situation. It's sometimes necessary to concede that a digital solution is not the most appropriate choice in a certain circumstance.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="modal-footer"&gt;
       &lt;button class="btn btn-secondary" type="button" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
       &lt;button class="btn btn-primary" type="button"&gt;Save&lt;/button&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;button class="btn btn-outline-warning-2x" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfullscreen-lg"&gt;Fullscreen Below lg&lt;/button&gt;
&lt;!--Full screen below lg--&gt;
&lt;div class="modal fade" id="exampleModalfullscreen-lg" tabindex="-1" aria-labelledby="lgModalLabel" aria-hidden="true"&gt;
 &lt;div class="modal-dialog modal-fullscreen-lg-down"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-header"&gt;
       &lt;h1 class="modal-title fs-5" id="lgModalLabel"&gt;Full Screen Below lg&lt;/h1&gt;
       &lt;button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="modal-body dark-modal"&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;Web Design&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;We build specialized websites for companies, list them on digital directories, and set up a sales funnel to boost ROI.&lt;/p&gt;
       &lt;div class="modal-details"&gt;
         &lt;div class="web-content"&gt;
           &lt;h6&gt;Wed Designer&lt;/h6&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;For a site to be successful, a designer must be able to communicate their ideas, chat with a firm about what they want, and inquire about the target audience.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;Most businesses employ a certain font or typography so that clients can quickly distinguish them from their rivals. Since designers now have access to a wider variety of fonts, firms may more easily and precisely communicate their brands through typography.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="web-content"&gt;
           &lt;h6&gt;UX Designer&lt;/h6&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;User research, persona creation, building wireframes and interactive prototypes, and testing ideas are among the common tasks of a UX designer. These duties can differ greatly between organizations.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;Keep in mind that you are creating solutions to particular challenges for a particular population living in a particular habitat. Always remember to correctly contextualise your thoughts and determine whether they are actually appropriate for the situation. It's sometimes necessary to concede that a digital solution is not the most appropriate choice in a certain circumstance.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="modal-footer"&gt;
       &lt;button class="btn btn-secondary" type="button" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
       &lt;button class="btn btn-primary" type="button"&gt;Save&lt;/button&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;button class="btn btn-outline-primary-2x" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfullscreen-xl"&gt;Fullscreen Below xl&lt;/button&gt;
&lt;!--Full screen below xl--&gt;
&lt;div class="modal fade" id="exampleModalfullscreen-xl" tabindex="-1" aria-labelledby="xlModalLabel" aria-hidden="true"&gt;
 &lt;div class="modal-dialog modal-fullscreen-xl-down"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-header"&gt;
       &lt;h1 class="modal-title fs-5" id="xlModalLabel"&gt;Full Screen Below xl&lt;/h1&gt;
       &lt;button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="modal-body dark-modal"&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;Web Design&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;We build specialized websites for companies, list them on digital directories, and set up a sales funnel to boost ROI.&lt;/p&gt;
       &lt;div class="modal-details"&gt;
         &lt;div class="web-content"&gt;
           &lt;h6&gt;Wed Designer&lt;/h6&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;For a site to be successful, a designer must be able to communicate their ideas, chat with a firm about what they want, and inquire about the target audience.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;Most businesses employ a certain font or typography so that clients can quickly distinguish them from their rivals. Since designers now have access to a wider variety of fonts, firms may more easily and precisely communicate their brands through typography.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="web-content"&gt;
           &lt;h6&gt;UX Designer&lt;/h6&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;User research, persona creation, building wireframes and interactive prototypes, and testing ideas are among the common tasks of a UX designer. These duties can differ greatly between organizations.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;Keep in mind that you are creating solutions to particular challenges for a particular population living in a particular habitat. Always remember to correctly contextualise your thoughts and determine whether they are actually appropriate for the situation. It's sometimes necessary to concede that a digital solution is not the most appropriate choice in a certain circumstance.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="modal-footer"&gt;
       &lt;button class="btn btn-secondary" type="button" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
       &lt;button class="btn btn-primary" type="button"&gt;Save &lt;/button&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;button class="btn btn-outline-danger-2x" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfullscreen-xxl"&gt;Fullscreen Below xxl&lt;/button&gt;
&lt;!--Full screen below xxl--&gt;
&lt;div class="modal fade" id="exampleModalfullscreen-xxl" tabindex="-1" aria-labelledby="xxlModalLabel" aria-hidden="true"&gt;
 &lt;div class="modal-dialog modal-fullscreen-xxl-down"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-header"&gt;
       &lt;h1 class="modal-title fs-5" id="xxlModalLabel"&gt;Full Screen Below xxl&lt;/h1&gt;
       &lt;button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="modal-body dark-modal"&gt;
       &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
         &lt;h6&gt;Web Design&lt;/h6&gt;
       &lt;/div&gt;
       &lt;p class="modal-padding-space"&gt;We build specialized websites for companies, list them on digital directories, and set up a sales funnel to boost ROI.&lt;/p&gt;
       &lt;div class="modal-details"&gt;
         &lt;div class="web-content"&gt;
           &lt;h6&gt;Wed Designer&lt;/h6&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;For a site to be successful, a designer must be able to communicate their ideas, chat with a firm about what they want, and inquire about the target audience.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;Most businesses employ a certain font or typography so that clients can quickly distinguish them from their rivals. Since designers now have access to a wider variety of fonts, firms may more easily and precisely communicate their brands through typography.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="web-content"&gt;
           &lt;h6&gt;UX Designer&lt;/h6&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;User research, persona creation, building wireframes and interactive prototypes, and testing ideas are among the common tasks of a UX designer. These duties can differ greatly between organizations.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="d-flex"&gt;
             &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;div class="flex-grow-1 ms-2"&gt;
               &lt;p&gt;Keep in mind that you are creating solutions to particular challenges for a particular population living in a particular habitat. Always remember to correctly contextualise your thoughts and determine whether they are actually appropriate for the situation. It's sometimes necessary to concede that a digital solution is not the most appropriate choice in a certain circumstance.&lt;/p&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="modal-footer"&gt;
       &lt;button class="btn btn-secondary" type="button" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
       &lt;button class="btn btn-primary" type="button"&gt;Save&lt;/button&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;                       </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Centered Modal </h5>
                        <p class="f-m-light mt-1"> Use<code> modal-dialog-centered </code>through centered modal and set
                            <code>data-bs-target </code>.
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
                    <div class="card-body"> <!--Centered modal--><button class="btn btn-success" type="button"
                            data-bs-toggle="modal" data-bs-target="#exampleModalCenter1">Vertically Centered</button>
                        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenter1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="modal-toggle-wrapper">
                                            <ul class="modal-img">
                                                <li> <img src="{{ asset('assets/images/gif/danger.gif') }}"
                                                        alt="error"></li>
                                            </ul>
                                            <h4 class="text-center pb-2">Ohh! Something went wrong!</h4>
                                            <p class="text-center c-light">Attackers on malicious activity may trick you
                                                into doing
                                                something Dangerous like installing software or revealing your personal
                                                Information.</p>
                                            <button class="btn btn-secondary d-flex m-auto" type="button"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#centered-modal" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="centered-modal">&lt;button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"&gt;Vertically Centered&lt;/button&gt;
&lt;div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true"&gt;
 &lt;div class="modal-dialog modal-dialog-centered" role="document"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-body"&gt; 
       &lt;div class="modal-toggle-wrapper"&gt;  
         &lt;ul class="modal-img"&gt;
           &lt;li&gt; &lt;img src="{{ asset('assets/images/gif/danger.gif') }}" alt="error"&gt;&lt;/li&gt;
         &lt;/ul&gt;
         &lt;h4 class="text-center pb-2"&gt;Ohh! Something went wrong!&lt;/h4&gt;
         &lt;p class="text-center c-light"&gt;Attackers on malicious activity may trick you into doing something Dangerous like installing software or revealing your personal Information.&lt;/p&gt;
         &lt;button class="btn btn-secondary d-flex m-auto" type="button" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Toggle Between Modal</h5>
                        <p class="f-m-light mt-1"> Toggle between multiple modals with some clever placement of the
                            <code>data-bs-target </code>and <code>data-bs-toggle</code> attributes.
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
                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                            aria-labelledby="exampleModalToggle" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="modal-toggle-wrapper">
                                            <ul class="modal-img">
                                                <li><img src="{{ asset('assets/images/gif/whatapp.gif') }}"
                                                        alt="whatsapp"></li>
                                                <li> <img src="{{ asset('assets/images/gif/instagram.gif') }}"
                                                        alt="instagram"></li>
                                                <li> <img src="{{ asset('assets/images/gif/facebook.gif') }}"
                                                        alt="facebook"></li>
                                            </ul>
                                            <h6>Remove your complete account from your phone or tablet to sign out of the
                                                Gmail app.
                                            </h6><button class="btn btn-dark rounded-pill w-100 mt-4"
                                                data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Connect new
                                                account</button><button
                                                class="btn rounded-pill w-100 pb-0 dark-toggle-btn" type="button"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                            aria-labelledby="exampleModalToggle2" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="modal-toggle-wrapper">
                                            <ul class="modal-img">
                                                <li> <img src="{{ asset('assets/images/gif/logout.gif') }}"
                                                        alt="logout"></li>
                                            </ul>
                                            <h4 class="pt-3 text-center">Already leaving??</h4>
                                            <p class="text-center">Are you sure want to logout this dashboard?</p><span
                                                class="d-block text-center mb-4"> Not a member?<a class="ms-1"
                                                    href="{{ route('admin.ecommerce_dashboard') }}">Register</a></span><button
                                                class="btn btn-dark d-flex m-auto" type="button"
                                                data-bs-dismiss="modal">Yes, Log out</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><a class="btn btn-dark" data-bs-toggle="modal" href="#exampleModalToggle"
                            role="button" data-bs-dismiss="modal">Open First Modal</a>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#togal-between-modal" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="togal-between-modal">&lt;div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggle" tabindex="-1"&gt;
 &lt;div class="modal-dialog modal-dialog-centered"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-body"&gt;
       &lt;div class="modal-toggle-wrapper"&gt;
         &lt;ul class="modal-img"&gt; 
           &lt;li&gt;&lt;img src="{{ asset('assets/images/gif/whatapp.gif') }}" alt="whatsapp"&gt;&lt;/li&gt;
           &lt;li&gt; &lt;img src="{{ asset('assets/images/gif/instagram.gif') }}" alt="instagram"&gt;&lt;/li&gt;
           &lt;li&gt; &lt;img src="{{ asset('assets/images/gif/facebook.gif') }}" alt="facebook"&gt;&lt;/li&gt;
         &lt;/ul&gt;
         &lt;h6&gt;Remove your complete account from your phone or tablet to sign out of the Gmail app.&lt;/h6&gt;
         &lt;button class="btn btn-dark rounded-pill w-100 mt-4" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"&gt;Connect new account&lt;/button&gt;
         &lt;button class="btn rounded-pill w-100 pb-0 dark-toggle-btn" type="button" data-bs-dismiss="modal"&gt;Cancel&lt;/button&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggle2" tabindex="-1"&gt;
 &lt;div class="modal-dialog modal-dialog-centered"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-body"&gt;
       &lt;div class="modal-toggle-wrapper"&gt;
         &lt;ul class="modal-img"&gt; 
           &lt;li&gt; &lt;img src="{{ asset('assets/images/gif/logout.gif') }}" alt="logout"&gt;&lt;/li&gt;
         &lt;/ul&gt;
         &lt;h4 class="pt-3 text-center"&gt;Already leaving??&lt;/h4&gt;
         &lt;p class="text-center"&gt;Are you sure want to logout this dashboard?&lt;/p&gt;&lt;span class="d-block text-center mb-4"&gt; Not a member?&lt;a class="ms-1" href="{{ route('admin.ecommerce_dashboard') }}"&gt;Register&lt;/a&gt;&lt;/span&gt;
         &lt;button class="btn btn-dark d-flex m-auto" type="button" data-bs-dismiss="modal"&gt;Yes, Log out&lt;/button&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;&lt;a class="btn btn-dark" data-bs-toggle="modal" href="#exampleModalToggle" role="button" data-bs-dismiss="modal"&gt;Open First Modal&lt;/a&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Static Backdrop Modal</h5>
                        <p class="f-m-light mt-1"> When backdrop is set to static, the modal will not close when clicking
                            outside of it. Click the button below to try it.</p>
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
                    <div class="card-body"> <button class="btn btn-warning" type="button" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Static Backdrop Modal</button><!-- Modal-->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="modal-toggle-wrapper">
                                            <ul class="modal-img">
                                                <li> <img src="{{ asset('assets/images/gif/time.gif') }}"
                                                        alt="alarm"></li>
                                            </ul>
                                            <h4 class="text-center pb-2">Failed to establish a connection.</h4>
                                            <p class="text-center">Getting back in touch in <b class="txt-warning">14
                                                    seconds...</b></p>
                                            <button class="btn btn-warning d-flex m-auto" type="button"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#static-backdrop-modal" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="static-backdrop-modal">&lt;button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"&gt;Static Backdrop Modal&lt;/button&gt;
&lt;!--Modal--&gt;
&lt;div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true"&gt;
 &lt;div class="modal-dialog"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-body"&gt; 
       &lt;div class="modal-toggle-wrapper"&gt;  
         &lt;ul class="modal-img"&gt;
           &lt;li&gt; &lt;img src="{{ asset('assets/images/gif/time.gif') }}" alt="alarm"&gt;&lt;/li&gt;
         &lt;/ul&gt;
         &lt;h4 class="text-center pb-2"&gt;Failed to establish a connection.&lt;/h4&gt;
         &lt;p class="text-center"&gt;Getting back in touch in &lt;b class="txt-warning"&gt;14 seconds...&lt;/b&gt;&lt;/p&gt;
         &lt;button class="btn btn-warning d-flex m-auto" type="button" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Grid Modal</h5>
                        <p class="f-m-light mt-1"> Utilize the Bootstrap grid system within a modal by nesting
                            <code> container-fluid </code> within the <code> modal-body</code> . Then, use the normal grid
                            system classes as you would anywhere else.
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
                    <div class="card-body"> <button class="btn btn-warning" type="button" data-bs-toggle="modal"
                            data-bs-target="#grid-modal">Grid Modal </button><!-- Modal-->
                        <div class="modal fade" id="grid-modal" tabindex="-1" role="dialog"
                            aria-labelledby="grid-modal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Grid Modal</h5><button class="btn-close"
                                            type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row common-align">
                                                <div class="col-md-4"> <span
                                                        class="grid-space bg-light-secondary txt-secondary">.col-md-4</span>
                                                </div>
                                                <div class="col-md-4 ms-auto"><span
                                                        class="grid-space bg-light-secondary txt-secondary">.col-md-4
                                                        .ms-auto</span></div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-md-3 ms-auto"><span
                                                        class="grid-space bg-light-secondary txt-secondary">.col-md-3
                                                        .ms-auto</span></div>
                                                <div class="col-md-2 ms-auto"><span
                                                        class="grid-space bg-light-secondary txt-secondary">.col-md-2
                                                        .ms-auto</span></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 ms-auto"><span
                                                        class="grid-space bg-light-secondary txt-secondary">.col-md-6
                                                        .ms-auto</span></div>
                                            </div>
                                            <div class="row common-align">
                                                <div class="col-sm-9"><span
                                                        class="grid-space bg-light-secondary txt-secondary">Level 1:
                                                        .col-sm-9</span>
                                                    <div class="row">
                                                        <div class="col-8 col-sm-6"><span
                                                                class="grid-space bg-light-secondary txt-secondary mb-0">
                                                                Level 2: .col-8
                                                                .col-sm-6</span></div>
                                                        <div class="col-4 col-sm-6"><span
                                                                class="grid-space bg-light-secondary txt-secondary mb-0">Level
                                                                2: .col-4
                                                                .col-sm-6</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"> <button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                            type="button">Save</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#grid-modal-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="grid-modal-copy">&lt;button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#grid-modal"&gt;Grid Modal &lt;/button&gt;
&lt;!--Modal--&gt;
&lt;div class="modal fade" id="grid-modal" tabindex="-1" role="dialog" aria-labelledby="grid-modal" aria-hidden="true"&gt;
 &lt;div class="modal-dialog modal-dialog-centered" role="document"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-header"&gt;
       &lt;h5 class="modal-title"&gt;Grid Modal&lt;/h5&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="modal-body"&gt;
       &lt;div class="container-fluid"&gt;
         &lt;div class="row common-align"&gt;
           &lt;div class="col-md-4"&gt;&lt;span class="grid-space bg-light-secondary txt-secondary"&gt;.col-md-4&lt;/span&gt;&lt;/div&gt;
           &lt;div class="col-md-4 ms-auto"&gt;&lt;span class="grid-space bg-light-secondary txt-secondary"&gt;.col-md-4 .ms-auto&lt;/span&gt;&lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="row justify-content-center"&gt;
           &lt;div class="col-md-3 ms-auto"&gt;&lt;span class="grid-space bg-light-secondary txt-secondary"&gt;.col-md-3 .ms-auto&lt;/span&gt;&lt;/div&gt;
           &lt;div class="col-md-2 ms-auto"&gt;&lt;span class="grid-space bg-light-secondary txt-secondary"&gt;.col-md-2 .ms-auto&lt;/span&gt;&lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="row"&gt;
           &lt;div class="col-md-6 ms-auto"&gt;&lt;span class="grid-space bg-light-secondary txt-secondary"&gt;.col-md-6 .ms-auto&lt;/span&gt;&lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="row common-align"&gt;
           &lt;div class="col-sm-9"&gt;&lt;span class="grid-space bg-light-secondary txt-secondary"&gt;Level 1: .col-sm-9&lt;/span&gt;
             &lt;div class="row"&gt;
               &lt;div class="col-8 col-sm-6"&gt;&lt;span class="grid-space bg-light-secondary txt-secondary mb-0"&gt; Level 2: .col-8 .col-sm-6&lt;/span&gt;&lt;/div&gt;
               &lt;div class="col-4 col-sm-6"&gt;&lt;span class="grid-space bg-light-secondary txt-secondary mb-0"&gt;Level 2: .col-4 .col-sm-6&lt;/span&gt;&lt;/div&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="modal-footer"&gt; 
       &lt;button class="btn btn-secondary" type="button" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
       &lt;button class="btn btn-primary" type="button"&gt;Save&lt;/button&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Scrolling Long Content Modal</h5>
                        <p class="f-m-light mt-1"> You can also create a scrollable modal that allows scrolling the modal
                            body
                            by adding <code> modal-dialog-scrollable </code>to <code>modal-dialog</code>.</p>
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
                    <div class="card-body"> <button class="btn btn-secondary" type="button" data-bs-toggle="modal"
                            data-bs-target="#scrolling-modal">Scrolling Modal</button><!-- Modal-->
                        <div class="modal fade" id="scrolling-modal" tabindex="-1" role="dialog"
                            aria-labelledby="scrolling-modal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Scrolling Long Modal</h5><button class="btn-close"
                                            type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body custom-scrollbar">
                                        <h6>Wed Designer</h6>
                                        <div class="d-flex mt-3">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>For a site to be successful, a designer must be able to communicate their
                                                    ideas, chat
                                                    with a firm about what they want, and inquire about the target audience.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>As a web designer, you either prefer to work freelance for several
                                                    different businesses
                                                    at once or you may choose to work for just one. In either case, you'll
                                                    need good time
                                                    management skills to keep several projects moving forward.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>Although a designer doesn't write the code that makes a site work, it
                                                    doesn't hurt to
                                                    have a basic understanding of HTML or CSS to make minor adjustments to a
                                                    site. You'll
                                                    find it simpler to edit templates, improve typefaces, or change item
                                                    placements if you
                                                    have a basic understanding of how things work.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex my-2">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="pb-4">Most businesses employ a certain font or typography so
                                                    that clients can
                                                    quickly distinguish them from their rivals. Since designers now have
                                                    access to a wider
                                                    variety of fonts, firms may more easily and precisely communicate their
                                                    brands through
                                                    typography.</p>
                                            </div>
                                        </div>
                                        <h6>UX Designer </h6>
                                        <div class="d-flex mt-3">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>User research, persona creation, building wireframes and interactive
                                                    prototypes, and
                                                    testing ideas are among the common tasks of a UX designer. These duties
                                                    can differ
                                                    greatly between organizations.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-3">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>Create solutions that will be helpful for the issues and situations that
                                                    exist right
                                                    now, not for those that will. With the right materials, assist people in
                                                    organizing
                                                    their time, completing things more quickly, and optimizing it.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-3">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>Based on the data received from users, improve them. Adapt existing
                                                    solutions to the
                                                    requirements, hopes, difficulties, and expectations of users.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-3">
                                            <div class="flex-shrink-0"><i class="svg-modal"
                                                    data-feather="arrow-right-circle"></i></div>
                                            <div class="flex-grow-1 ms-2">
                                                <p>Keep in mind that you are creating solutions to particular challenges for
                                                    a particular
                                                    population living in a particular habitat. Always remember to correctly
                                                    contextualise
                                                    your thoughts and determine whether they are actually appropriate for
                                                    the situation.
                                                    It's sometimes necessary to concede that a digital solution is not the
                                                    most appropriate
                                                    choice in a certain circumstance.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                            type="button">Save</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#scrolling-long-modal" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="scrolling-long-modal">&lt;button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#scrolling-modal"&gt;Scrolling Modal&lt;/button&gt;
&lt;!--Modal--&gt;
&lt;div class="modal fade" id="scrolling-modal" tabindex="-1" role="dialog" aria-labelledby="scrolling-modal" aria-hidden="true"&gt;
 &lt;div class="modal-dialog modal-dialog-scrollable" role="document"&gt;
   &lt;div class="modal-content"&gt;
     &lt;div class="modal-header"&gt;
       &lt;h5 class="modal-title"&gt;Scrolling Long Modal&lt;/h5&gt;
       &lt;button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
     &lt;/div&gt;
     &lt;div class="modal-body custom-scrollbar"&gt;
       &lt;h6&gt;Wed Designer&lt;/h6&gt;
       &lt;div class="d-flex mt-3"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p&gt;For a site to be successful, a designer must be able to communicate their ideas, chat with a firm about what they want, and inquire about the target audience.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="d-flex mt-2"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p&gt;As a web designer, you either prefer to work freelance for several different businesses at once or you may choose to work for just one. In either case, you'll need good time management skills to keep several projects moving forward.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="d-flex mt-2"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p&gt;Although a designer doesn't write the code that makes a site work, it doesn't hurt to have a basic understanding of HTML or CSS to make minor adjustments to a site. You'll find it simpler to edit templates, improve typefaces, or change item placements if you have a basic understanding of how things work.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="d-flex my-2"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p class="pb-4"&gt;Most businesses employ a certain font or typography so that clients can quickly distinguish them from their rivals. Since designers now have access to a wider variety of fonts, firms may more easily and precisely communicate their brands through typography.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;h6&gt;UX Designer&lt;/h6&gt;
       &lt;div class="d-flex mt-3"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p&gt;User research, persona creation, building wireframes and interactive prototypes, and testing ideas are among the common tasks of a UX designer. These duties can differ greatly between organizations.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="d-flex mt-3"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p&gt;Create solutions that will be helpful for the issues and situations that exist right now, not for those that will. With the right materials, assist people in organizing their time, completing things more quickly, and optimizing it.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="d-flex mt-3"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p&gt;Based on the data received from users, improve them. Adapt existing solutions to the requirements, hopes, difficulties, and expectations of users.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="d-flex mt-3"&gt;
         &lt;div class="flex-shrink-0"&gt;&lt;i class="svg-modal" data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;div class="flex-grow-1 ms-2"&gt;
           &lt;p&gt;Keep in mind that you are creating solutions to particular challenges for a particular population living in a particular habitat. Always remember to correctly contextualise your thoughts and determine whether they are actually appropriate for the situation. It's sometimes necessary to concede that a digital solution is not the most appropriate choice in a certain circumstance.&lt;/p&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="modal-footer"&gt;
       &lt;button class="btn btn-secondary" type="button" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
       &lt;button class="btn btn-primary" type="button"&gt;Save&lt;/button&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;                    </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Cuba Custom Modals </h5>
                        <p class="f-m-light mt-1"> Custom modal made by cuba.</p>
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
                        <div class="row g-3">
                            <div class="col-xl-4 col-md-6 custom-alert text-center">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <div class="cuba-demo-img">
                                        <ul class="dot-group pb-3 pt-0">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div class="title-wrapper pb-3 modal-heading">
                                            <h5 class="theme-name mb-0"><span>Modal 1 -</span>Profile Modal</h5>
                                            <p class="f-m-light">Example of cuba dashboard profile card.</p>
                                        </div>
                                        <div class="overflow-hidden"><button class="btn btn-primary mx-auto mt-3"
                                                type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModallaptop1">Click Here</button></div>
                                        <div class="modal fade" id="exampleModallaptop1" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModallaptop1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="col-xl-12">
                                                        <div class="card social-profile mb-0">
                                                            <div class="card-body">
                                                                <div class="social-img-wrap">
                                                                    <div class="social-img"><img
                                                                            src="{{ asset('assets/images/dashboard-5/profile.png') }}"
                                                                            alt="profile"></div>
                                                                    <div class="edit-icon"><svg>
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#profile-check') }}">
                                                                            </use>
                                                                        </svg></div>
                                                                </div>
                                                                <div class="social-details">
                                                                    <h5 class="mb-1"><a
                                                                            href="{{ route('admin.social_app') }}">Brooklyn Simmons</a>
                                                                    </h5><span class="f-light">@brookly.simmons</span>
                                                                    <ul class="social-follow">
                                                                        <li>
                                                                            <h5 class="mb-0">1,908</h5><span
                                                                                class="f-light">Posts</span>
                                                                        </li>
                                                                        <li>
                                                                            <h5 class="mb-0">34.0k</h5><span
                                                                                class="f-light">Followers</span>
                                                                        </li>
                                                                        <li>
                                                                            <h5 class="mb-0">897</h5><span
                                                                                class="f-light">Following</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 custom-alert text-center">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <div class="cuba-demo-img">
                                        <ul class="dot-group pb-3 pt-0">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div class="title-wrapper pb-3 modal-heading">
                                            <h5 class="theme-name mb-0"><span>Modal 2 - </span>Result Modal</h5>
                                            <p class="f-m-light">Example of cuba login form.</p>
                                        </div>
                                        <div class="overflow-hidden"><button class="btn btn-primary mx-auto mt-3"
                                                type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModallogin">Click Here</button></div>
                                        <div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModallogin" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body social-profile text-start dark-sign-up">
                                                        <div class="modal-toggle-wrapper">
                                                            <h3>Cuba Login</h3>
                                                            <p class="f-light"> Fill in your information below to
                                                                continue.</p>
                                                            <form class="row g-3">
                                                                <div class="col-md-12"><label class="form-label"
                                                                        for="inputEmailEnter">Email</label><input
                                                                        class="form-control" id="inputEmailEnter"
                                                                        type="email" placeholder="Enter Your Email">
                                                                </div>
                                                                <div class="col-md-12"><label class="form-label"
                                                                        for="inputPasswordEnter">Password</label><input
                                                                        class="form-control" id="inputPasswordEnter"
                                                                        type="password"
                                                                        placeholder="Enter Your Password">
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-check"><input
                                                                            class="form-check-input checkbox-primary"
                                                                            id="checkout" type="checkbox"><label
                                                                            class="form-check-label"
                                                                            for="checkout">Check me out</label></div>
                                                                </div>
                                                                <div class="col-12"><button class="btn btn-primary"
                                                                        type="submit" data-bs-dismiss="modal">Sign in
                                                                    </button></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12 custom-alert text-center">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <div class="cuba-demo-img">
                                        <ul class="dot-group pb-3 pt-0">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div class="title-wrapper pb-3 modal-heading">
                                            <h5 class="theme-name mb-0"><span>Modal 3 -</span>Balance Modal</h5>
                                            <p class="f-m-light">Example of cuba dashboard balance card.</p>
                                        </div>
                                        <div class="overflow-hidden balance-modal"><button
                                                class="btn btn-primary mx-auto mt-3" type="button"
                                                data-bs-toggle="modal" data-bs-target="#exampleModalbalancebox">Click
                                                Here</button></div>
                                        <div class="modal fade" id="exampleModalbalancebox" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalbalancebox"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="col-xl-12">
                                                        <div class="card balance-box mb-0">
                                                            <div class="card-body">
                                                                <div class="balance-profile">
                                                                    <div class="balance-img"><img
                                                                            src="{{ asset('assets/images/dashboard-4/user.png') }}"
                                                                            alt="user vector"><a class="edit-icon"
                                                                            href="{{ route('admin.user_profile') }}"><svg>
                                                                                <use
                                                                                    href="{{ asset('assets/svg/icon-sprite.svg#pencil') }}">
                                                                                </use>
                                                                            </svg></a></div><span
                                                                        class="f-light d-block">Your Balance </span>
                                                                    <h5 class="mt-1">$768,987.90</h5>
                                                                    <ul>
                                                                        <li>
                                                                            <div class="balance-item danger">
                                                                                <div class="balance-icon-wrap">
                                                                                    <div class="balance-icon"><i
                                                                                            data-feather="arrow-down-right"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div> <span
                                                                                        class="f-12 f-light">Investment
                                                                                    </span>
                                                                                    <h5>78.8K</h5><span
                                                                                        class="badge badge-light-danger rounded-pill">-11.67%</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="balance-item success">
                                                                                <div class="balance-icon-wrap">
                                                                                    <div class="balance-icon"><i
                                                                                            data-feather="arrow-up-right"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div> <span class="f-12 f-light">Cash
                                                                                        Back</span>
                                                                                    <h5>19.7K</h5><span
                                                                                        class="badge badge-light-success rounded-pill">+10.67%</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#cuba-custom-modal" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="cuba-custom-modal">&lt;div class="row g-3"&gt;
 &lt;div class="col-xl-4 col-md-6 custom-alert text-center"&gt;
   &lt;div class="card-wrapper border rounded-3 h-100"&gt;
     &lt;div class="cuba-demo-img"&gt;
       &lt;ul class="dot-group pb-3 pt-0"&gt;
         &lt;li&gt;&lt;/li&gt;
         &lt;li&gt;&lt;/li&gt;
         &lt;li&gt;&lt;/li&gt;
       &lt;/ul&gt;
       &lt;div class="title-wrapper pb-3 modal-heading"&gt;
         &lt;h5 class="theme-name mb-0"&gt;&lt;span&gt;Modal 1 -&lt;/span&gt;Profile Modal&lt;/h5&gt;
         &lt;p class="f-m-light"&gt;Example of cuba dashboard profile card.&lt;/p&gt;
       &lt;/div&gt;
       &lt;div class="overflow-hidden"&gt;
         &lt;button class="btn btn-primary mx-auto mt-3" type="button" data-bs-toggle="modal" data-bs-target="#exampleModallaptop1"&gt;Click Here&lt;/button&gt;
       &lt;/div&gt;
       &lt;div class="modal fade" id="exampleModallaptop1" tabindex="-1" role="dialog" aria-labelledby="exampleModallaptop1" aria-hidden="true"&gt;
         &lt;div class="modal-dialog modal-dialog-centered" role="document"&gt;
           &lt;div class="modal-content"&gt;
             &lt;div class="col-xl-12"&gt;
               &lt;div class="card social-profile mb-0"&gt;
                 &lt;div class="card-body"&gt;
                   &lt;div class="social-img-wrap"&gt; 
                     &lt;div class="social-img"&gt;&lt;img src="{{ asset('assets/images/dashboard-5/profile.png') }}" alt="profile"&gt;&lt;/div&gt;
                     &lt;div class="edit-icon"&gt;
                       &lt;svg&gt;
                         &lt;use href="{{ asset('assets/svg/icon-sprite.svg#profile-check') }}"&gt;&lt;/use&gt;
                       &lt;/svg&gt;
                     &lt;/div&gt;
                   &lt;/div&gt;
                   &lt;div class="social-details"&gt;
                     &lt;h5 class="mb-1"&gt;&lt;a href="{{ route('admin.social_app') }}"&gt;Brooklyn Simmons&lt;/a&gt;&lt;/h5&gt;&lt;span class="f-light"&gt;@brookly.simmons&lt;/span&gt;
                     &lt;ul class="social-follow"&gt;
                       &lt;li&gt;
                         &lt;h5 class="mb-0"&gt;1,908&lt;/h5&gt;&lt;span class="f-light"&gt;Posts&lt;/span&gt;
                       &lt;/li&gt;
                       &lt;li&gt;
                         &lt;h5 class="mb-0"&gt;34.0k&lt;/h5&gt;&lt;span class="f-light"&gt;Followers&lt;/span&gt;
                       &lt;/li&gt;
                       &lt;li&gt;
                         &lt;h5 class="mb-0"&gt;897&lt;/h5&gt;&lt;span class="f-light"&gt;Following&lt;/span&gt;
                       &lt;/li&gt;
                     &lt;/ul&gt;
                   &lt;/div&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xl-4 col-md-6 custom-alert text-center"&gt;
   &lt;div class="card-wrapper border rounded-3 h-100"&gt;
     &lt;div class="cuba-demo-img"&gt;
       &lt;ul class="dot-group pb-3 pt-0"&gt;
         &lt;li&gt;&lt;/li&gt;
         &lt;li&gt;&lt;/li&gt;
         &lt;li&gt;&lt;/li&gt;
       &lt;/ul&gt;
       &lt;div class="title-wrapper pb-3 modal-heading"&gt;
         &lt;h5 class="theme-name mb-0"&gt;&lt;span&gt;Modal 2 - &lt;/span&gt;Result Modal&lt;/h5&gt;
         &lt;p class="f-m-light"&gt;Example of cuba login form.&lt;/p&gt;
       &lt;/div&gt;
       &lt;div class="overflow-hidden"&gt;
         &lt;button class="btn btn-primary mx-auto mt-3" type="button" data-bs-toggle="modal" data-bs-target="#exampleModallogin"&gt;Click Here&lt;/button&gt;
       &lt;/div&gt;
       &lt;div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModallogin" aria-hidden="true"&gt;
         &lt;div class="modal-dialog modal-dialog-centered" role="document"&gt;
           &lt;div class="modal-content dark-sign-up"&gt;
             &lt;div class="modal-body social-profile text-start"&gt;
               &lt;div class="modal-toggle-wrapper"&gt;
                 &lt;h3&gt;Cuba Login&lt;/h3&gt;
                 &lt;p class="f-light"&gt;Fill in your information below to continue.&lt;/p&gt;
                 &lt;form class="row g-3"&gt;
                   &lt;div class="col-md-12"&gt;
                     &lt;label class="form-label" for="inputEmailEnter"&gt;Email&lt;/label&gt;
                     &lt;input class="form-control" id="inputEmailEnter" type="email" placeholder="Enter Your Email"&gt;
                   &lt;/div&gt;
                   &lt;div class="col-md-12"&gt;
                     &lt;label class="form-label" for="inputPasswordEnter"&gt;Password&lt;/label&gt;
                     &lt;input class="form-control" id="inputPasswordEnter" type="password" placeholder="Enter Your Password"&gt;
                   &lt;/div&gt;
                   &lt;div class="col-12"&gt;
                     &lt;div class="form-check"&gt;
                       &lt;input class="form-check-input checkbox-primary" id="checkout" type="checkbox"&gt;
                       &lt;label class="form-check-label" for="checkout"&gt;Check me out&lt;/label&gt;
                     &lt;/div&gt;
                   &lt;/div&gt;
                   &lt;div class="col-12"&gt;
                     &lt;button class="btn btn-primary" type="submit" data-bs-dismiss="modal"&gt;Sign in &lt;/button&gt;
                   &lt;/div&gt;
                 &lt;/form&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-xl-4 col-md-12 custom-alert text-center"&gt;
   &lt;div class="card-wrapper border rounded-3 h-100"&gt;
     &lt;div class="cuba-demo-img"&gt;
       &lt;ul class="dot-group pb-3 pt-0"&gt;
         &lt;li&gt;&lt;/li&gt;
         &lt;li&gt;&lt;/li&gt;
         &lt;li&gt;&lt;/li&gt;
       &lt;/ul&gt;
       &lt;div class="title-wrapper pb-3 modal-heading"&gt;
         &lt;h5 class="theme-name mb-0"&gt;&lt;span&gt;Modal 3 -&lt;/span&gt;Balance Modal&lt;/h5&gt;
         &lt;p class="f-m-light"&gt;Example of cuba dashboard balance card.&lt;/p&gt;
       &lt;/div&gt;
       &lt;div class="overflow-hidden balance-modal"&gt;
         &lt;button class="btn btn-primary mx-auto mt-3" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalbalancebox"&gt;Click Here&lt;/button&gt;
       &lt;/div&gt;
       &lt;div class="modal fade" id="exampleModalbalancebox" tabindex="-1" role="dialog" aria-labelledby="exampleModalbalancebox" aria-hidden="true"&gt;
         &lt;div class="modal-dialog modal-dialog-centered" role="document"&gt;
           &lt;div class="modal-content"&gt;
             &lt;div class="col-xl-12"&gt;
               &lt;div class="card balance-box mb-0"&gt;
                 &lt;div class="card-body"&gt;
                   &lt;div class="balance-profile"&gt;
                     &lt;div class="balance-img"&gt;&lt;img src="{{ asset('assets/images/dashboard-4/user.png') }}" alt="user vector"&gt;&lt;a class="edit-icon" href="{{ route('admin.user_profile') }}"&gt;
                         &lt;svg&gt;
                           &lt;use href="{{ asset('assets/svg/icon-sprite.svg#pencil') }}"&gt;&lt;/use&gt;
                         &lt;/svg&gt;&lt;/a&gt;&lt;/div&gt;&lt;span class="f-light d-block"&gt;Your Balance &lt;/span&gt;
                     &lt;h5 class="mt-1"&gt;$768,987.90&lt;/h5&gt;
                     &lt;ul&gt; 
                       &lt;li&gt;
                         &lt;div class="balance-item danger"&gt; 
                           &lt;div class="balance-icon-wrap"&gt; 
                             &lt;div class="balance-icon"&gt;&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-right"&gt;&lt;line x1="7" y1="7" x2="17" y2="17"&gt;&lt;/line&gt;&lt;polyline points="17 7 17 17 7 17"&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div&gt;&lt;span class="f-12 f-light"&gt;Investment  &lt;/span&gt;
                             &lt;h5&gt;78.8K&lt;/h5&gt;&lt;span class="badge badge-light-danger rounded-pill"&gt;-11.67%&lt;/span&gt;
                           &lt;/div&gt;
                         &lt;/div&gt;
                       &lt;/li&gt;
                       &lt;li&gt;
                         &lt;div class="balance-item success"&gt;
                           &lt;div class="balance-icon-wrap"&gt; 
                             &lt;div class="balance-icon"&gt;&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right"&gt;&lt;line x1="7" y1="17" x2="17" y2="7"&gt;&lt;/line&gt;&lt;polyline points="7 7 17 7 17 17"&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div&gt;&lt;span class="f-12 f-light"&gt;Cash Back&lt;/span&gt;
                             &lt;h5&gt;19.7K&lt;/h5&gt;&lt;span class="badge badge-light-success rounded-pill"&gt;+10.67%&lt;/span&gt;
                           &lt;/div&gt;
                         &lt;/div&gt;
                       &lt;/li&gt;
                     &lt;/ul&gt;
                   &lt;/div&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
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
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/popover-custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('assets/js/modalpage/validation-modal.js') }}"></script>
@endsection
