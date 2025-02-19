@extends('layouts.simple.master')

@section('title', 'Offcanvas')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Offcanvas</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Offcanvas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid main-offcanvas-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Initial Offcanvas</h5>
                        <p class="f-m-light mt-1">Use the buttons below to show and hide an offcanvas element via javascript
                            that toggles the <code> show </code>class on an element with the <code> offcanvas </code>class.
                            You
                            can use a link with the href attribute, or a button with the <code> data-bs-target
                            </code>attribute.
                            In both cases, the<code> data-bs-toggle="offcanvas" </code>is required.</p>
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
                    <div class="card-body common-flex common-offcanvas"><button class="btn btn-secondary" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                            aria-controls="offcanvasExample">Button with data-bs-target</button><a class="btn btn-primary"
                            data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                            aria-controls="offcanvasExample">Link with href</a>
                        <div class="offcanvas offcanvas-start" id="offcanvasExample" tabindex="-1"
                            aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header pb-0">
                                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Main Offcanvas Title</h5><button
                                    class="btn-close" type="button" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body custom-scrollbar">
                                <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                    <h6>Web Design </h6>
                                </div>
                                <p class="modal-padding-space">We build specialized websites for companies, list them on
                                    digital
                                    directories, and set up a sales funnel to boost ROI.</p>
                                <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                    <h6>Content Marketing </h6>
                                </div>
                                <p class="modal-padding-space">Through better opportunities and knowledgeable marketing
                                    strategies, we aid business funnel. We won't only hit the target; instead, we'll aim
                                    higher and
                                    surpass the objectives.</p>
                                <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                    <h6>PPC </h6>
                                </div>
                                <p class="modal-padding-space">Customized advertising to increase visitors and improve
                                    conversion.
                                    To increase retention, identify the correct audience and remarket to them.</p>
                                <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                                    <h6>UX Designer </h6>
                                </div>
                                <p class="modal-padding-space">The capacity to comprehend and experience other people's
                                    feelings
                                    is known as empathy. A positive consumer experience is prioritized by UX. The finest UX
                                    designers spend time studying individuals and their tendencies because of this.
                                    Designers may
                                    produce goods that genuinely engage and excite customers by having a thorough
                                    understanding of
                                    the end consumers.</p>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#initial-offcanvas" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="initial-offcanvas">&lt;button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"&gt;Button with data-bs-target&lt;/button&gt;
&lt;a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"&gt;Link with href&lt;/a&gt;
&lt;div class="offcanvas offcanvas-start" id="offcanvasExample" tabindex="-1" aria-labelledby="offcanvasExampleLabel"&gt;
 &lt;div class="offcanvas-header pb-0"&gt;
   &lt;h5 class="offcanvas-title" id="offcanvasExampleLabel"&gt;Main Offcanvas Title&lt;/h5&gt;
   &lt;button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="offcanvas-body custom-scrollbar"&gt;
   &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
     &lt;h6&gt;Web Design &lt;/h6&gt;
   &lt;/div&gt;
   &lt;p class="modal-padding-space"&gt;We build specialized websites for companies, list them on digital directories, and set up a sales funnel to boost ROI.&lt;/p&gt;
   &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
     &lt;h6&gt;Content Marketing &lt;/h6&gt;
   &lt;/div&gt;
   &lt;p class="modal-padding-space"&gt;Through better opportunities and knowledgeable marketing strategies, we aid business funnel. We won't only hit the target; instead, we'll aim higher and surpass the objectives.&lt;/p&gt;
   &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
     &lt;h6&gt;PPC &lt;/h6&gt;
   &lt;/div&gt;
   &lt;p class="modal-padding-space"&gt;Customized advertising to increase visitors and improve conversion. To increase retention, identify the correct audience and remarket to them.&lt;/p&gt;
   &lt;div class="large-modal-header"&gt;&lt;i data-feather="chevrons-right"&gt;&lt;/i&gt;
     &lt;h6&gt;UX Designer &lt;/h6&gt;
   &lt;/div&gt;
   &lt;p class="modal-padding-space"&gt;The capacity to comprehend and experience other people's feelings is known as empathy. A positive consumer experience is prioritized by UX. The finest UX designers spend time studying individuals and their tendencies because of this. Designers may produce goods that genuinely engage and excite customers by having a thorough understanding of the end consumers.&lt;/p&gt;
 &lt;/div&gt;
&lt;/div&gt;          </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Offcanvas Directions</h5>
                        <p class="f-m-light mt-1">Use<code> Offcanvas-* </code>[top/end/bottom/start] class allows you to
                            modify the offcanvas direction.</p>
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
                    <div class="card-body common-flex common-offcanvas"><button class="btn btn-primary" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Top
                            Offcanvas</button>
                        <div class="offcanvas offcanvas-top" id="offcanvasTop" tabindex="-1"
                            aria-labelledby="offcanvasTopLabel">
                            <div class="offcanvas-header pb-0">
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Offcanvas Top</h5><button
                                    class="btn-close" type="button" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body custom-input custom-scrollbar">
                                <form class="row g-3">
                                    <div class="col-md-4"><label class="form-label" for="validationDefault03">First
                                            name</label><input class="form-control" id="validationDefault03"
                                            type="text" value="Mark" required=""></div>
                                    <div class="col-md-4"><label class="form-label" for="validationDefault02">Last
                                            name</label><input class="form-control" id="validationDefault02"
                                            type="text" value="Otto" required=""></div>
                                    <div class="col-md-4"><label class="form-label"
                                            for="validationDefaultUsername1">Username</label>
                                        <div class="input-group"><span class="input-group-text"
                                                id="inputGroupPrepend2">@</span><input class="form-control"
                                                id="validationDefaultUsername1" type="text"
                                                aria-describedby="inputGroupPrepend2" required=""></div>
                                    </div>
                                    <div class="col-md-6"><label class="form-label"
                                            for="validationDefaultCity">City</label><input class="form-control"
                                            id="validationDefaultCity" type="text" required=""></div>
                                    <div class="col-md-3"><label class="form-label"
                                            for="validationCountry">Country</label><select class="form-select"
                                            id="validationCountry" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>US </option>
                                            <option>UK </option>
                                            <option>Africa</option>
                                        </select></div>
                                    <div class="col-md-3"><label class="form-label" for="validationZip">Zip</label><input
                                            class="form-control" id="validationZip" type="text" required=""></div>
                                    <div class="col-12">
                                        <div class="form-check checkbox-checked"><input class="form-check-input"
                                                id="termsCondition4" type="checkbox" value=""
                                                required=""><label class="form-check-label"
                                                for="termsCondition4">Agree to terms and conditions</label></div>
                                    </div>
                                    <div class="col-12"><button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div><button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Right Offcanvas</button>
                        <div class="offcanvas offcanvas-end" id="offcanvasRight" tabindex="-1"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header pb-0">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas End</h5><button
                                    class="btn-close" type="button" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body custom-input custom-scrollbar">
                                <form class="row g-3">
                                    <div class="col-12"> <label class="form-label"
                                            for="exampleFormControlInput1">Email</label><input class="form-control"
                                            id="exampleFormControlInput1" type="email" placeholder="name@example.com">
                                    </div>
                                    <div class="col-12"><label class="form-label" for="exampleFormControlInput2">Select
                                            Project</label><select class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">Select your projects</option>
                                            <option value="1">Project1</option>
                                            <option value="2">Project2</option>
                                            <option value="3">Project3</option>
                                        </select></div>
                                    <div class="col-12"><label class="form-label" for="exampleFormControlInput3">Project
                                            Counts</label><select class="form-select" aria-label="Default select example">
                                            <option selected="">How many projects do you make?</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select></div>
                                    <div class="col-12"> <label class="form-label"
                                            for="exampleFormControlTextarea1">External
                                            Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check checkbox-checked"><input class="form-check-input"
                                                id="termsCondition5" type="checkbox" value=""
                                                required=""><label class="form-check-label"
                                                for="termsCondition5">Agree to terms and conditions</label></div>
                                    </div>
                                    <div class="col-12"><button class="btn btn-light me-2" type="submit"
                                            data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button><button
                                            class="btn btn-primary" type="submit">Submit</button></div>
                                </form>
                            </div>
                        </div><button class="btn btn-dark" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Bottom Offcanvas</button>
                        <div class="offcanvas offcanvas-bottom" id="offcanvasBottom" tabindex="-1"
                            aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header pb-0">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas Bottom</h5><button
                                    class="btn-close" type="button" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body custom-input custom-scrollbar">
                                <form class="row g-3">
                                    <div class="col-md-4"><label class="form-label" for="validationFirstName">First
                                            name</label><input class="form-control" id="validationFirstName"
                                            type="text" value="Mark" required=""></div>
                                    <div class="col-md-4"><label class="form-label" for="validationDefault0">Last
                                            name</label><input class="form-control" id="validationDefault0"
                                            type="text" value="Otto" required=""></div>
                                    <div class="col-md-4"><label class="form-label"
                                            for="validationDefaultUsername">Username</label>
                                        <div class="input-group"><span class="input-group-text"
                                                id="inputGroupPrepend3">@</span><input class="form-control"
                                                id="validationDefaultUsername" type="text"
                                                aria-describedby="inputGroupPrepend3" required=""></div>
                                    </div>
                                    <div class="col-md-6"><label class="form-label"
                                            for="validationCity1">City</label><input class="form-control"
                                            id="validationCity1" type="text" required=""></div>
                                    <div class="col-md-3"><label class="form-label"
                                            for="validationDefault04">Country</label><select class="form-select"
                                            id="validationDefault04" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>US </option>
                                            <option>UK </option>
                                            <option>Africa</option>
                                        </select></div>
                                    <div class="col-md-3"><label class="form-label"
                                            for="validationDefault05">Zip</label><input class="form-control"
                                            id="validationDefault05" type="text" required=""></div>
                                    <div class="col-12">
                                        <div class="form-check checkbox-checked"><input class="form-check-input"
                                                id="termsCondition6" type="checkbox" value=""
                                                required=""><label class="form-check-label"
                                                for="termsCondition6">Agree to terms and conditions</label></div>
                                    </div>
                                    <div class="col-12"><button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div><button class="btn btn-success" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">Left Offcanvas</button>
                        <div class="offcanvas offcanvas-start" id="offcanvasLeft" tabindex="-1"
                            aria-labelledby="offcanvasLeftLabel">
                            <div class="offcanvas-header pb-0">
                                <h5 class="offcanvas-title" id="offcanvasLeftLabel">Offcanvas Start</h5><button
                                    class="btn-close" type="button" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body custom-input custom-scrollbar">
                                <form class="row g-3">
                                    <div class="col-12"> <label class="form-label"
                                            for="exampleFormControlEmail">Email</label><input class="form-control"
                                            id="exampleFormControlEmail" type="email" placeholder="name@example.com">
                                    </div>
                                    <div class="col-12"><label class="form-label" for="exampleFormControlInput2">Select
                                            Project</label><select class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">Select your projects</option>
                                            <option value="1">Project1</option>
                                            <option value="2">Project2</option>
                                            <option value="3">Project3</option>
                                        </select></div>
                                    <div class="col-12"><label class="form-label" for="exampleFormControlInput3">Project
                                            Counts</label><select class="form-select" aria-label="Default select example">
                                            <option selected="">How many projects do you make?</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select></div>
                                    <div class="col-12"> <label class="form-label"
                                            for="exampleFormControlTextarea2">External
                                            Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea2" rows="4"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check checkbox-checked"><input class="form-check-input"
                                                id="termsCondition" type="checkbox" value="" required=""><label
                                                class="form-check-label" for="termsCondition">Agree to terms and
                                                conditions</label></div>
                                    </div>
                                    <div class="col-12"><button class="btn btn-light me-2" type="submit"
                                            data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button><button
                                            class="btn btn-primary" type="submit">Submit</button></div>
                                </form>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#offcanvas-direction" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="offcanvas-direction">&lt;button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"&gt;Top Offcanvas&lt;/button&gt;
&lt;div class="offcanvas offcanvas-top" id="offcanvasTop" tabindex="-1" aria-labelledby="offcanvasTopLabel"&gt;
 &lt;div class="offcanvas-header pb-0"&gt;
   &lt;h5 class="offcanvas-title" id="offcanvasTopLabel"&gt;Offcanvas Top&lt;/h5&gt;
   &lt;button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="offcanvas-body custom-input custom-scrollbar"&gt;
   &lt;form class="row g-3"&gt;
     &lt;div class="col-md-4"&gt;
       &lt;label class="form-label" for="validationDefault03"&gt;First name&lt;/label&gt;
       &lt;input class="form-control" id="validationDefault03" type="text" value="Mark" required=""&gt;
     &lt;/div&gt;
     &lt;div class="col-md-4"&gt;
       &lt;label class="form-label" for="validationDefault02"&gt;Last name&lt;/label&gt;
       &lt;input class="form-control" id="validationDefault02" type="text" value="Otto" required=""&gt;
     &lt;/div&gt;
     &lt;div class="col-md-4"&gt;
       &lt;label class="form-label" for="validationDefaultUsername1"&gt;Username&lt;/label&gt;
       &lt;div class="input-group"&gt;&lt;span class="input-group-text" id="inputGroupPrepend2"&gt;@&lt;/span&gt;
         &lt;input class="form-control" id="validationDefaultUsername1" type="text" aria-describedby="inputGroupPrepend2" required=""&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="col-md-6"&gt;
       &lt;label class="form-label" for="validationDefaultCity"&gt;City&lt;/label&gt;
       &lt;input class="form-control" id="validationDefaultCity" type="text" required=""&gt;
     &lt;/div&gt;
     &lt;div class="col-md-3"&gt;
       &lt;label class="form-label" for="validationCountry"&gt;Country&lt;/label&gt;
       &lt;select class="form-select" id="validationCountry" required=""&gt;
         &lt;option selected="" disabled="" value=""&gt;Choose...&lt;/option&gt;
         &lt;option&gt;US &lt;/option&gt;
         &lt;option&gt;UK &lt;/option&gt;
         &lt;option&gt;Africa&lt;/option&gt;
       &lt;/select&gt;
     &lt;/div&gt;
     &lt;div class="col-md-3"&gt;
       &lt;label class="form-label" for="validationZip"&gt;Zip&lt;/label&gt;
       &lt;input class="form-control" id="validationZip" type="text" required=""&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;div class="form-check checkbox-checked"&gt;
         &lt;input class="form-check-input" id="termsCondition4" type="checkbox" value="" required=""&gt;
         &lt;label class="form-check-label" for="termsCondition4"&gt;Agree to terms and conditions&lt;/label&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;button class="btn btn-primary" type="submit"&gt;Submit&lt;/button&gt;
     &lt;/div&gt;
   &lt;/form&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"&gt;Right Offcanvas&lt;/button&gt;
&lt;div class="offcanvas offcanvas-end" id="offcanvasRight" tabindex="-1" aria-labelledby="offcanvasRightLabel"&gt;
 &lt;div class="offcanvas-header pb-0"&gt;
   &lt;h5 class="offcanvas-title" id="offcanvasRightLabel"&gt;Offcanvas End&lt;/h5&gt;
   &lt;button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="offcanvas-body custom-input custom-scrollbar"&gt;
   &lt;form class="row g-3"&gt;
     &lt;div class="col-12"&gt; 
       &lt;label class="form-label" for="exampleFormControlInput1"&gt;Email&lt;/label&gt;
       &lt;input class="form-control" id="exampleFormControlInput1" type="email" placeholder="name@example.com"&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;label class="form-label" for="exampleFormControlInput2"&gt;Select Project&lt;/label&gt;
       &lt;select class="form-select" aria-label="Default select example"&gt;
         &lt;option selected=""&gt;Select your projects&lt;/option&gt;
         &lt;option value="1"&gt;Project1&lt;/option&gt;
         &lt;option value="2"&gt;Project2&lt;/option&gt;
         &lt;option value="3"&gt;Project3&lt;/option&gt;
       &lt;/select&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;label class="form-label" for="exampleFormControlInput3"&gt;Project Counts&lt;/label&gt;
       &lt;select class="form-select" aria-label="Default select example"&gt;
         &lt;option selected=""&gt;How many projects do you make?&lt;/option&gt;
         &lt;option value="1"&gt;One&lt;/option&gt;
         &lt;option value="2"&gt;Two&lt;/option&gt;
         &lt;option value="3"&gt;Three&lt;/option&gt;
       &lt;/select&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt; 
       &lt;label class="form-label" for="exampleFormControlTextarea1"&gt;External Notes&lt;/label&gt;
       &lt;textarea class="form-control" id="exampleFormControlTextarea1" rows="4"&gt;&lt;/textarea&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;div class="form-check checkbox-checked"&gt;
         &lt;input class="form-check-input" id="termsCondition5" type="checkbox" value="" required=""&gt;
         &lt;label class="form-check-label" for="termsCondition5"&gt;Agree to terms and conditions&lt;/label&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;button class="btn btn-light me-2" type="submit" data-bs-dismiss="offcanvas" aria-label="Close"&gt;Cancel&lt;/button&gt;
       &lt;button class="btn btn-primary" type="submit"&gt;Submit&lt;/button&gt;
     &lt;/div&gt;
   &lt;/form&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"&gt;Bottom Offcanvas&lt;/button&gt;
&lt;div class="offcanvas offcanvas-bottom" id="offcanvasBottom" tabindex="-1" aria-labelledby="offcanvasBottomLabel"&gt;
 &lt;div class="offcanvas-header pb-0"&gt;
   &lt;h5 class="offcanvas-title" id="offcanvasBottomLabel"&gt;Offcanvas Bottom&lt;/h5&gt;
   &lt;button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="offcanvas-body custom-input custom-scrollbar"&gt;
   &lt;form class="row g-3"&gt;
     &lt;div class="col-md-4"&gt;
       &lt;label class="form-label" for="validationFirstName"&gt;First name&lt;/label&gt;
       &lt;input class="form-control" id="validationFirstName" type="text" value="Mark" required=""&gt;
     &lt;/div&gt;
     &lt;div class="col-md-4"&gt;
       &lt;label class="form-label" for="validationDefault0"&gt;Last name&lt;/label&gt;
       &lt;input class="form-control" id="validationDefault0" type="text" value="Otto" required=""&gt;
     &lt;/div&gt;
     &lt;div class="col-md-4"&gt;
       &lt;label class="form-label" for="validationDefaultUsername"&gt;Username&lt;/label&gt;
       &lt;div class="input-group"&gt;&lt;span class="input-group-text" id="inputGroupPrepend3"&gt;@&lt;/span&gt;
         &lt;input class="form-control" id="validationDefaultUsername" type="text" aria-describedby="inputGroupPrepend3" required=""&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="col-md-6"&gt;
       &lt;label class="form-label" for="validationCity1"&gt;City&lt;/label&gt;
       &lt;input class="form-control" id="validationCity1" type="text" required=""&gt;
     &lt;/div&gt;
     &lt;div class="col-md-3"&gt;
       &lt;label class="form-label" for="validationDefault04"&gt;Country&lt;/label&gt;
       &lt;select class="form-select" id="validationDefault04" required=""&gt;
         &lt;option selected="" disabled="" value=""&gt;Choose...&lt;/option&gt;
         &lt;option&gt;US &lt;/option&gt;
         &lt;option&gt;UK &lt;/option&gt;
         &lt;option&gt;Africa&lt;/option&gt;
       &lt;/select&gt;
     &lt;/div&gt;
     &lt;div class="col-md-3"&gt;
       &lt;label class="form-label" for="validationDefault05"&gt;Zip&lt;/label&gt;
       &lt;input class="form-control" id="validationDefault05" type="text" required=""&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;div class="form-check checkbox-checked"&gt;
         &lt;input class="form-check-input" id="termsCondition6" type="checkbox" value="" required=""&gt;
         &lt;label class="form-check-label" for="termsCondition6"&gt;Agree to terms and conditions&lt;/label&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;button class="btn btn-primary" type="submit"&gt;Submit&lt;/button&gt;
     &lt;/div&gt;
   &lt;/form&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft"&gt;Left Offcanvas&lt;/button&gt;
&lt;div class="offcanvas offcanvas-start" id="offcanvasLeft" tabindex="-1" aria-labelledby="offcanvasLeftLabel"&gt;
 &lt;div class="offcanvas-header pb-0"&gt;
   &lt;h5 class="offcanvas-title" id="offcanvasLeftLabel"&gt;Offcanvas Start&lt;/h5&gt;
   &lt;button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="offcanvas-body custom-input custom-scrollbar"&gt;
   &lt;form class="row g-3"&gt;
     &lt;div class="col-12"&gt; 
       &lt;label class="form-label" for="exampleFormControlEmail"&gt;Email&lt;/label&gt;
       &lt;input class="form-control" id="exampleFormControlEmail" type="email" placeholder="name@example.com"&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;label class="form-label" for="exampleFormControlInput2"&gt;Select Project&lt;/label&gt;
       &lt;select class="form-select" aria-label="Default select example"&gt;
         &lt;option selected=""&gt;Select your projects&lt;/option&gt;
         &lt;option value="1"&gt;Project1&lt;/option&gt;
         &lt;option value="2"&gt;Project2&lt;/option&gt;
         &lt;option value="3"&gt;Project3&lt;/option&gt;
       &lt;/select&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;label class="form-label" for="exampleFormControlInput3"&gt;Project Counts&lt;/label&gt;
       &lt;select class="form-select" aria-label="Default select example"&gt;
         &lt;option selected=""&gt;How many projects do you make?&lt;/option&gt;
         &lt;option value="1"&gt;One&lt;/option&gt;
         &lt;option value="2"&gt;Two&lt;/option&gt;
         &lt;option value="3"&gt;Three&lt;/option&gt;
       &lt;/select&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt; 
       &lt;label class="form-label" for="exampleFormControlTextarea2"&gt;External Notes&lt;/label&gt;
       &lt;textarea class="form-control" id="exampleFormControlTextarea2" rows="4"&gt;&lt;/textarea&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;div class="form-check checkbox-checked"&gt;
         &lt;input class="form-check-input" id="termsCondition" type="checkbox" value="" required=""&gt;
         &lt;label class="form-check-label" for="termsCondition"&gt;Agree to terms and conditions&lt;/label&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;button class="btn btn-light me-2" type="submit" data-bs-dismiss="offcanvas" aria-label="Close"&gt;Cancel&lt;/button&gt;
       &lt;button class="btn btn-primary" type="submit"&gt;Submit&lt;/button&gt;
     &lt;/div&gt;
   &lt;/form&gt;
 &lt;/div&gt;
&lt;/div&gt; </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Offcanvas Variations</h5>
                        <p class="f-m-light mt-1">Use<code> data-bs-scroll </code>attribute to enable
                            <code>&lt;body&gt; </code>scrolling class and clicking outside of the offcanvas will not cause
                            it to
                            close if the backdrop is static.
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
                    <div class="card-body common-flex common-offcanvas"> <button class="btn btn-info" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                            aria-controls="offcanvasScrolling">Enable Body Scrolling</button>
                        <div class="offcanvas offcanvas-start" id="offcanvasScrolling" data-bs-scroll="true"
                            data-bs-backdrop="false" tabindex="-1" aria-labelledby="offcanvasScrollingLabel">
                            <div class="offcanvas-header pb-0">
                                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Offcanvas Body Scrolling</h5>
                                <button class="btn-close" type="button" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body custom-input">
                                <h6>Wed Designer</h6>
                                <p>For a site to be successful, a designer must be able to communicate their ideas, chat
                                    with a
                                    firm about what they want, and inquire about the target audience.</p>
                                <form class="row g-3">
                                    <div class="col-12"> <label class="form-label"
                                            for="exampleFormControlInput2">Email</label><input class="form-control"
                                            id="exampleFormControlInput2" type="email" placeholder="name@example.com">
                                    </div>
                                    <div class="col-12"><label class="form-label" for="exampleFormControlInput2">Select
                                            Project</label><select class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">Select your projects</option>
                                            <option value="1">Project1</option>
                                            <option value="2">Project2</option>
                                            <option value="3">Project3</option>
                                        </select></div>
                                    <div class="col-12"><label class="form-label" for="exampleFormControlInput3">Project
                                            Counts</label><select class="form-select" aria-label="Default select example">
                                            <option selected="">How many projects do you make?</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select></div>
                                    <div class="col-12"> <label class="form-label"
                                            for="exampleFormControlTextarea3">External
                                            Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="4"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check checkbox-checked"><input class="form-check-input"
                                                id="termsCondition1" type="checkbox" value=""
                                                required=""><label class="form-check-label"
                                                for="termsCondition1">Agree to terms and conditions</label></div>
                                    </div>
                                    <div class="col-12"><button class="btn btn-light me-2" type="submit"
                                            data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button><button
                                            class="btn btn-primary" type="submit">Submit</button></div>
                                </form>
                            </div>
                        </div><button class="btn btn-warning" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable
                            Both
                            Scrolling &amp; Backdrop</button>
                        <div class="offcanvas offcanvas-start" id="offcanvasWithBothOptions" data-bs-scroll="true"
                            tabindex="-1" aria-labelledby="offcanvasWithBothOptionsLabel">
                            <div class="offcanvas-header pb-0">
                                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with Scrolling
                                </h5><button class="btn-close" type="button" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body custom-input">
                                <h6>Wed Designer</h6>
                                <p>For a site to be successful, a designer must be able to communicate their ideas, chat
                                    with a
                                    firm about what they want, and inquire about the target audience.</p>
                                <form class="row g-3">
                                    <div class="col-12"> <label class="form-label"
                                            for="exampleFormControlInput3">Email</label><input class="form-control"
                                            id="exampleFormControlInput3" type="email" placeholder="name@example.com">
                                    </div>
                                    <div class="col-12"><label class="form-label" for="exampleFormControlInput2">Select
                                            Project</label><select class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">Select your projects</option>
                                            <option value="1">Project1</option>
                                            <option value="2">Project2</option>
                                            <option value="3">Project3</option>
                                        </select></div>
                                    <div class="col-12"><label class="form-label" for="exampleFormControlInput3">Project
                                            Counts</label><select class="form-select" aria-label="Default select example">
                                            <option selected="">How many projects do you make?</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select></div>
                                    <div class="col-12"> <label class="form-label" for="externalNotes">External
                                            Notes</label>
                                        <textarea class="form-control" id="externalNotes" rows="4"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check checkbox-checked"><input class="form-check-input"
                                                id="termsCondition2" type="checkbox" value=""
                                                required=""><label class="form-check-label"
                                                for="termsCondition2">Agree to terms and conditions</label></div>
                                    </div>
                                    <div class="col-12"><button class="btn btn-light me-2" type="submit"
                                            data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button><button
                                            class="btn btn-primary" type="submit">Submit</button></div>
                                </form>
                            </div>
                        </div><button class="btn btn-info" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">Toggle Static
                            Offcanvas</button>
                        <div class="offcanvas offcanvas-start" id="staticBackdrop" data-bs-backdrop="static"
                            tabindex="-1" aria-labelledby="staticBackdropLabel">
                            <div class="offcanvas-header pb-0">
                                <h5 class="offcanvas-title" id="staticBackdropLabel">Static Offcanvas</h5><button
                                    class="btn-close" type="button" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body custom-input">
                                <h6>Wed Designer</h6>
                                <p>For a site to be successful, a designer must be able to communicate their ideas, chat
                                    with a
                                    firm about what they want, and inquire about the target audience.</p>
                                <form class="row g-3">
                                    <div class="col-12"> <label class="form-label"
                                            for="exampleFormControlInput4">Email</label><input class="form-control"
                                            id="exampleFormControlInput4" type="email" placeholder="name@example.com">
                                    </div>
                                    <div class="col-12"><label class="form-label" for="exampleFormControlInput2">Select
                                            Project</label><select class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">Select your projects</option>
                                            <option value="1">Project1</option>
                                            <option value="2">Project2</option>
                                            <option value="3">Project3</option>
                                        </select></div>
                                    <div class="col-12"><label class="form-label" for="exampleFormControlInput3">Project
                                            Counts</label><select class="form-select" aria-label="Default select example">
                                            <option selected="">How many projects do you make?</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select></div>
                                    <div class="col-12"> <label class="form-label"
                                            for="exampleFormControlTextarea4">External
                                            Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea4" rows="4"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check checkbox-checked"><input class="form-check-input"
                                                id="termsCondition3" type="checkbox" value=""
                                                required=""><label class="form-check-label"
                                                for="termsCondition3">Agree to terms and conditions</label></div>
                                    </div>
                                    <div class="col-12"><button class="btn btn-light me-2" type="submit"
                                            data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button><button
                                            class="btn btn-primary" type="submit">Submit</button></div>
                                </form>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#offcanvas-variation" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="offcanvas-variation">&lt;button class="btn btn-info" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"&gt;Enable Body Scrolling&lt;/button&gt;
&lt;div class="offcanvas offcanvas-start" id="offcanvasScrolling" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" aria-labelledby="offcanvasScrollingLabel"&gt;
 &lt;div class="offcanvas-header pb-0"&gt;
   &lt;h5 class="offcanvas-title" id="offcanvasScrollingLabel"&gt;Offcanvas Body Scrolling&lt;/h5&gt;
   &lt;button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="offcanvas-body custom-input"&gt;
   &lt;h6&gt;Wed Designer&lt;/h6&gt;
   &lt;p&gt;For a site to be successful, a designer must be able to communicate their ideas, chat with a firm about what they want, and inquire about the target audience.&lt;/p&gt;
   &lt;form class="row g-3"&gt;
     &lt;div class="col-12"&gt; 
       &lt;label class="form-label" for="exampleFormControlInput2"&gt;Email&lt;/label&gt;
       &lt;input class="form-control" id="exampleFormControlInput2" type="email" placeholder="name@example.com"&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;label class="form-label" for="exampleFormControlInput2"&gt;Select Project&lt;/label&gt;
       &lt;select class="form-select" aria-label="Default select example"&gt;
         &lt;option selected=""&gt;Select your projects&lt;/option&gt;
         &lt;option value="1"&gt;Project1&lt;/option&gt;
         &lt;option value="2"&gt;Project2&lt;/option&gt;
         &lt;option value="3"&gt;Project3&lt;/option&gt;
       &lt;/select&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;label class="form-label" for="exampleFormControlInput3"&gt;Project Counts&lt;/label&gt;
       &lt;select class="form-select" aria-label="Default select example"&gt;
         &lt;option selected=""&gt;How many projects do you make?&lt;/option&gt;
         &lt;option value="1"&gt;One&lt;/option&gt;
         &lt;option value="2"&gt;Two&lt;/option&gt;
         &lt;option value="3"&gt;Three&lt;/option&gt;
       &lt;/select&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt; 
       &lt;label class="form-label" for="exampleFormControlTextarea3"&gt;External Notes&lt;/label&gt;
       &lt;textarea class="form-control" id="exampleFormControlTextarea3" rows="4"&gt;&lt;/textarea&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;div class="form-check checkbox-checked"&gt;
         &lt;input class="form-check-input" id="termsCondition1" type="checkbox" value="" required=""&gt;
         &lt;label class="form-check-label" for="termsCondition1"&gt;Agree to terms and conditions&lt;/label&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;button class="btn btn-light me-2" type="submit" data-bs-dismiss="offcanvas" aria-label="Close"&gt;Cancel&lt;/button&gt;
       &lt;button class="btn btn-primary" type="submit"&gt;Submit&lt;/button&gt;
     &lt;/div&gt;
   &lt;/form&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"&gt;Enable Both Scrolling &amp; Backdrop&lt;/button&gt;
&lt;div class="offcanvas offcanvas-start" id="offcanvasWithBothOptions" data-bs-scroll="true" tabindex="-1" aria-labelledby="offcanvasWithBothOptionsLabel"&gt;
 &lt;div class="offcanvas-header pb-0"&gt;
   &lt;h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"&gt;Backdrop with Scrolling&lt;/h5&gt;
   &lt;button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="offcanvas-body custom-input"&gt;
   &lt;h6&gt;Wed Designer&lt;/h6&gt;
   &lt;p&gt;For a site to be successful, a designer must be able to communicate their ideas, chat with a firm about what they want, and inquire about the target audience.&lt;/p&gt;
   &lt;form class="row g-3"&gt;
     &lt;div class="col-12"&gt; 
       &lt;label class="form-label" for="exampleFormControlInput3"&gt;Email&lt;/label&gt;
       &lt;input class="form-control" id="exampleFormControlInput3" type="email" placeholder="name@example.com"&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;label class="form-label" for="exampleFormControlInput2"&gt;Select Project&lt;/label&gt;
       &lt;select class="form-select" aria-label="Default select example"&gt;
         &lt;option selected=""&gt;Select your projects&lt;/option&gt;
         &lt;option value="1"&gt;Project1&lt;/option&gt;
         &lt;option value="2"&gt;Project2&lt;/option&gt;
         &lt;option value="3"&gt;Project3&lt;/option&gt;
       &lt;/select&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;label class="form-label" for="exampleFormControlInput3"&gt;Project Counts&lt;/label&gt;
       &lt;select class="form-select" aria-label="Default select example"&gt;
         &lt;option selected=""&gt;How many projects do you make?&lt;/option&gt;
         &lt;option value="1"&gt;One&lt;/option&gt;
         &lt;option value="2"&gt;Two&lt;/option&gt;
         &lt;option value="3"&gt;Three&lt;/option&gt;
       &lt;/select&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt; 
       &lt;label class="form-label" for="externalNotes"&gt;External Notes&lt;/label&gt;
       &lt;textarea class="form-control" id="externalNotes" rows="4"&gt;&lt;/textarea&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;div class="form-check checkbox-checked"&gt;
         &lt;input class="form-check-input" id="termsCondition2" type="checkbox" value="" required=""&gt;
         &lt;label class="form-check-label" for="termsCondition2"&gt;Agree to terms and conditions&lt;/label&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;button class="btn btn-light me-2" type="submit" data-bs-dismiss="offcanvas" aria-label="Close"&gt;Cancel&lt;/button&gt;
       &lt;button class="btn btn-primary" type="submit"&gt;Submit&lt;/button&gt;
     &lt;/div&gt;
   &lt;/form&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;button class="btn btn-info" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop"&gt;Toggle Static Offcanvas&lt;/button&gt;
&lt;div class="offcanvas offcanvas-start" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel"&gt;
 &lt;div class="offcanvas-header pb-0"&gt;
   &lt;h5 class="offcanvas-title" id="staticBackdropLabel"&gt;Static Offcanvas&lt;/h5&gt;
   &lt;button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="offcanvas-body custom-input"&gt;
   &lt;h6&gt;Wed Designer&lt;/h6&gt;
   &lt;p&gt;For a site to be successful, a designer must be able to communicate their ideas, chat with a firm about what they want, and inquire about the target audience.&lt;/p&gt;
   &lt;form class="row g-3"&gt;
     &lt;div class="col-12"&gt; 
       &lt;label class="form-label" for="exampleFormControlInput4"&gt;Email&lt;/label&gt;
       &lt;input class="form-control" id="exampleFormControlInput4" type="email" placeholder="name@example.com"&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;label class="form-label" for="exampleFormControlInput2"&gt;Select Project&lt;/label&gt;
       &lt;select class="form-select" aria-label="Default select example"&gt;
         &lt;option selected=""&gt;Select your projects&lt;/option&gt;
         &lt;option value="1"&gt;Project1&lt;/option&gt;
         &lt;option value="2"&gt;Project2&lt;/option&gt;
         &lt;option value="3"&gt;Project3&lt;/option&gt;
       &lt;/select&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;label class="form-label" for="exampleFormControlInput3"&gt;Project Counts&lt;/label&gt;
       &lt;select class="form-select" aria-label="Default select example"&gt;
         &lt;option selected=""&gt;How many projects do you make?&lt;/option&gt;
         &lt;option value="1"&gt;One&lt;/option&gt;
         &lt;option value="2"&gt;Two&lt;/option&gt;
         &lt;option value="3"&gt;Three&lt;/option&gt;
       &lt;/select&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt; 
       &lt;label class="form-label" for="exampleFormControlTextarea4"&gt;External Notes&lt;/label&gt;
       &lt;textarea class="form-control" id="exampleFormControlTextarea4" rows="4"&gt;&lt;/textarea&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;div class="form-check checkbox-checked"&gt;
         &lt;input class="form-check-input" id="termsCondition3" type="checkbox" value="" required=""&gt;
         &lt;label class="form-check-label" for="termsCondition3"&gt;Agree to terms and conditions&lt;/label&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="col-12"&gt;
       &lt;button class="btn btn-light me-2" type="submit" data-bs-dismiss="offcanvas" aria-label="Close"&gt;Cancel&lt;/button&gt;
       &lt;button class="btn btn-primary" type="submit"&gt;Submit&lt;/button&gt;
     &lt;/div&gt;
   &lt;/form&gt;
 &lt;/div&gt;
&lt;/div&gt; </code></pre>
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
@endsection
