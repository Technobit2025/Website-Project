@extends('layouts.simple.master')

@section('title', 'Form Wizard 1')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select/bootstrap-select.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Form Wizard 1</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Layout</li>
                        <li class="breadcrumb-item active"> Form Wizard 1</li>
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
                        <h5>Numbering Wizard </h5>
                        <p class="f-m-light mt-1"> Fill up your details and proceed next steps.</p>
                    </div>
                    <div class="card-body basic-wizard important-validation">
                        <div class="stepper-horizontal custom-scrollbar" id="stepper1">
                            <div class="stepper-one stepper step editing active">
                                <div class="step-circle"><span>1</span></div>
                                <div class="step-title">Basic Info</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-two step">
                                <div class="step-circle"><span>2</span></div>
                                <div class="step-title">Cart Info</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-three step">
                                <div class="step-circle"><span>3</span></div>
                                <div class="step-title">Feedback</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-four step">
                                <div class="step-circle"><span>4</span></div>
                                <div class="step-title">Finish</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                        </div>
                        <div id="msform">
                            <form class="stepper-one row g-3 needs-validation custom-input" novalidate="">
                                <div class="col-sm-6"><label class="form-label" for="email-basic-wizard">Email<span
                                            class="txt-danger">*</span></label><input class="form-control"
                                        id="email-basic-wizard" type="email" required=""
                                        placeholder="pixelstrap@gmail.com"></div>
                                <div class="col-sm-6"><label class="form-label" for="firstNameWizard">First
                                        Name<span class="txt-danger">*</span></label><input class="form-control"
                                        id="firstNameWizard" type="text" required="" placeholder="Enter your name">
                                </div>
                                <div class="col-12"><label class="col-sm-12 form-label" for="passwordWizard">Password<span
                                            class="txt-danger">*</span></label><input class="form-control"
                                        id="passwordWizard" type="password" placeholder="Enter password" required="">
                                </div>
                                <div class="col-12"><label class="col-sm-12 form-label" for="confirmPasswordWizard">Confirm
                                        Password<span class="txt-danger">*</span></label><input class="form-control"
                                        id="confirmPasswordWizard" type="password" placeholder="Enter confirm password"
                                        required=""></div>
                                <div class="col-12">
                                    <div class="form-check"><input class="form-check-input" id="inputCheckWizard"
                                            type="checkbox" value="" required=""><label
                                            class="form-check-label mb-0" for="inputCheckWizard">Agree to terms and
                                            conditions</label>
                                    </div>
                                </div>
                            </form>
                            <form class="stepper-two row g-3 needs-validation custom-input" novalidate="">
                                <div class="col-md-12"> <label class="form-label" for="placeholderName1">Placeholder Name
                                    </label><input class="form-control" id="placeholderName1" type="text" required=""
                                        placeholder="Placeholder name"></div>
                                <div class="col-xxl-4 col-sm-6"><label class="form-label" for="cardNumber01">Card
                                        Number</label><input class="form-control" id="cardNumber01" type="number"
                                        required="" placeholder="xxxx xxxx xxxx xxxx"></div>
                                <div class="col-xxl-4 col-sm-6"><label class="form-label"
                                        for="expirationDates01">Expiration(MM/YY)</label><input class="form-control"
                                        id="expirationDates01" type="number" required="" placeholder="xx/xx"></div>
                                <div class="col-xxl-4"><label class="form-label" for="cvvNumber-a">CVV
                                        Number</label><input class="form-control" id="cvvNumber-a" type="number"
                                        required=""></div>
                                <div class="col-12"> <label class="form-label" for="formFileDocument">Upload
                                        Documentation</label><input class="form-control" id="formFileDocument"
                                        type="file" aria-label="file example" required=""></div>
                                <div class="col-12">
                                    <div class="form-check"><input class="form-check-input" id="invalidCheck-a"
                                            type="checkbox" value="" required=""><label
                                            class="form-check-label" for="invalidCheck-a">All the above
                                            information is correct</label></div>
                                </div>
                            </form>
                            <form class="stepper-three row g-3 needs-validation custom-input" novalidate="">
                                <div class="col-sm-6"><label class="form-label" for="email-basic">LinkedIn<span
                                            class="txt-danger">*</span></label><input class="form-control"
                                        id="email-basic" type="url" required=""
                                        placeholder="https://linkedIn.com/cuba">
                                    <div class="invalid-feedback">Please enter your valid link</div>
                                    <div class="valid-feedback"> Looks's Good!</div>
                                </div>
                                <div class="col-sm-6"><label class="form-label" for="validationCustom996">Github<span
                                            class="txt-danger">*</span></label><input class="form-control"
                                        id="validationCustom996" type="url" required=""
                                        placeholder="https://github.com/cuba">
                                    <div class="invalid-feedback">Please enter your valid link</div>
                                    <div class="valid-feedback"> Looks's Good! </div>
                                </div>
                                <div class="col-12"> <label class="form-label" for="validationCustom09">Select State<span
                                            class="txt-danger">*</span></label><select class="form-select"
                                        id="validationCustom09" required="">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        <option>U.K </option>
                                        <option>U.S </option>
                                        <option>India</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a valid state.</div>
                                </div>
                                <div class="col-12"> <label class="form-label" for="giveFeedBack">Give
                                        Feedback</label>
                                    <textarea class="form-control" id="giveFeedBack" required=""></textarea>
                                    <div class="invalid-feedback">Please enter a message in the textarea.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check"><input class="form-check-input" id="invalidCheck46"
                                            type="checkbox" value="" required=""><label
                                            class="form-check-label mb-0" for="invalidCheck46">Agree to
                                            terms and conditions</label>
                                        <div class="invalid-feedback">You must agree before submitting.
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form class="stepper-four row g-3 needs-validation" novalidate="">
                                <div class="col-12 m-0">
                                    <div class="successful-form"><img class="img-fluid"
                                            src="{{ asset('assets/images/gif/dashboard-8/successful.gif') }}"
                                            alt="successful">
                                        <h6>Congratulations </h6>
                                        <p>Well done! You have successfully completed. </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="wizard-footer d-flex gap-2 justify-content-end"><button
                                class="btn button-light-primary" id="backbtn" onclick="backStep()">
                                Back</button><button class="btn btn-primary" id="nextbtn"
                                onclick="nextStep()">Next</button></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Student Validation Form</h5>
                        <p class="f-m-light mt-1"> Please make sure fill all the filed before click on next
                            button.</p>
                    </div>
                    <div class="card-body custom-input">
                        <form class="form-wizard" id="regForm">
                            <div class="tab">
                                <div class="row g-3">
                                    <div class="col-sm-6"><label for="name">Name<span
                                                class="txt-danger">*</span></label><input class="form-control"
                                            id="name" type="text" placeholder="Enter your name"
                                            required="required"></div>
                                    <div class="col-sm-6"><label class="form-label" for="student-email-wizard">Email<span
                                                class="txt-danger">*</span></label><input class="form-control"
                                            id="student-email-wizard" type="email" required=""
                                            placeholder="pixelstrap@gmail.com"></div>
                                    <div class="col-12"><label class="col-sm-12 form-label"
                                            for="password-wizard">Password<span class="txt-danger">*</span></label><input
                                            class="form-control" id="password-wizard" type="password"
                                            placeholder="Enter password" required=""></div>
                                    <div class="col-12"><label class="col-sm-12 form-label" for="confirmPassword">Confirm
                                            Password<span class="txt-danger">*</span></label><input class="form-control"
                                            id="confirmPassword" type="password" placeholder="Enter confirm password"
                                            required=""></div>
                                </div>
                            </div>
                            <div class="tab">
                                <div class="row g-3 avatar-upload">
                                    <div class="col-12">
                                        <div>
                                            <div class="avatar-edit"><input id="imageUpload" type="file"
                                                    accept=".png, .jpg, .jpeg"><label for="imageUpload"></label></div>
                                            <div class="avatar-preview">
                                                <div id="image"></div>
                                            </div>
                                        </div>
                                        <h6>Add Profile</h6>
                                    </div>
                                    <div class="col-12"><label class="form-label"
                                            for="exampleFormControlInput1">Portfolio URL</label><input
                                            class="form-control" id="exampleFormControlInput1" type="url"
                                            placeholder="https://cuba"></div>
                                    <div class="col-12"> <label class="form-label" for="projectDescription">Project
                                            Description</label>
                                        <textarea class="form-control" id="projectDescription" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <h5 class="mb-2">Social Links </h5>
                                <div class="row g-3">
                                    <div class="col-sm-6"><label class="form-label"
                                            for="twitterControlInput">Twitter</label><input class="form-control"
                                            id="twitterControlInput" type="url" placeholder="https://twitter.com">
                                    </div>
                                    <div class="col-sm-6"><label class="form-label"
                                            for="githubControlInput">Github</label><input class="form-control"
                                            id="githubControlInput" type="url" placeholder="https:/github.com"></div>
                                    <div class="col-12">
                                        <div class="input-group"><input class="form-control" id="inputGroupFile04"
                                                type="file" aria-describedby="inputGroupFileAddon04"
                                                aria-label="Upload"><button class="btn btn-outline-secondary"
                                                id="inputGroupFileAddon04" type="button">Submit</button></div>
                                    </div>
                                    <div class="col-12"><select class="form-select" aria-label="Default select example">
                                            <option selected="">Positions</option>
                                            <option value="1">Web Designer</option>
                                            <option value="2">Software Engineer</option>
                                            <option value="3">UI/UX Designer </option>
                                            <option value="3">Web Developer</option>
                                        </select></div>
                                    <div class="col-12"> <label class="form-label" for="customTextarea">Why
                                            do you want to take this position?</label>
                                        <textarea class="form-control" id="customTextarea" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="text-end pt-3"><button class="btn btn-secondary" id="prevBtn"
                                        type="button" onclick="nextPrev(-1)">Previous</button><button
                                        class="btn btn-primary" id="nextBtn" type="button"
                                        onclick="nextPrev(1)">Next</button></div>
                            </div><!-- Circles which indicates the steps of the form:-->
                            <div class="text-center"><span class="step"></span><span class="step"></span><span
                                    class="step"></span><span class="step"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Vertical Validation Wizard </h5>
                        <p class="f-m-light mt-1"> Fill up your true details and next proceed.</p>
                    </div>
                    <div class="card-body">
                        <div class="vertical-main-wizard">
                            <div class="row g-3">
                                <div class="col-xxl-3 col-xl-4 col-12">
                                    <div class="nav flex-column header-vertical-wizard" id="wizard-tab" role="tablist"
                                        aria-orientation="vertical"><a class="nav-link active" id="wizard-contact-tab"
                                            data-bs-toggle="pill" href="#wizard-contact" role="tab"
                                            aria-controls="wizard-contact" aria-selected="true">
                                            <div class="vertical-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa-solid fa-user"></i></div>
                                                <div class="vertical-wizard-content">
                                                    <h6>Your Info</h6>
                                                    <p>Add your details </p>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="wizard-cart-tab" data-bs-toggle="pill"
                                            href="#wizard-cart" role="tab" aria-controls="wizard-cart"
                                            aria-selected="false">
                                            <div class="vertical-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa-solid fa-link"></i></div>
                                                <div class="vertical-wizard-content">
                                                    <h6>Cart Info</h6>
                                                    <p>Add your a/c details</p>
                                                </div>
                                            </div>
                                        </a><a class="nav-link" id="wizard-banking-tab" data-bs-toggle="pill"
                                            href="#wizard-banking" role="tab" aria-controls="wizard-banking"
                                            aria-selected="false">
                                            <div class="vertical-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa-solid fa-user-group"></i>
                                                </div>
                                                <div class="vertical-wizard-content">
                                                    <h6>Net Banking</h6>
                                                    <p>Choose your bank</p>
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="col-xxl-9 col-xl-8 col-12">
                                    <div class="tab-content" id="wizard-tabContent">
                                        <div class="tab-pane fade show active" id="wizard-contact" role="tabpanel"
                                            aria-labelledby="wizard-contact-tab">
                                            <form class="row g-3 needs-validation custom-input" novalidate="">
                                                <div class="col-xxl-4 col-sm-6"><label class="form-label"
                                                        for="validationCustom0-a">First Name<span
                                                            class="txt-danger">*</span></label><input class="form-control"
                                                        id="validationCustom0-a" type="text"
                                                        placeholder="Enter first name" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-xxl-4 col-sm-6"><label class="form-label"
                                                        for="validationCustom-b">Last Name<span
                                                            class="txt-danger">*</span></label><input class="form-control"
                                                        id="validationCustom-b" type="text"
                                                        placeholder="Enter last name" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-xxl-4 col-sm-6"><label class="form-label"
                                                        for="validationEmail-b">Email<span
                                                            class="txt-danger">*</span></label><input class="form-control"
                                                        id="validationEmail-b" type="email" required=""
                                                        placeholder="mofi@example.com">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-xxl-5 col-sm-6"><label class="form-label"
                                                        for="validationCustom04">State</label><select class="form-select"
                                                        id="validationCustom04" required="">
                                                        <option selected="" disabled="" value="">Choose...
                                                        </option>
                                                        <option>USA </option>
                                                        <option>U.K </option>
                                                        <option>U.S</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select a valid
                                                        state.</div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6"><label class="form-label"
                                                        for="validationCustom05">Zip Code</label><input
                                                        class="form-control" id="validationCustom05" type="text"
                                                        required="">
                                                    <div class="invalid-feedback">Please provide a valid
                                                        zip.</div>
                                                </div>
                                                <div class="col-xxl-4 col-sm-6"><label class="form-label"
                                                        for="contactNumber">Contact Number</label><input
                                                        class="form-control" id="contactNumber" type="number"
                                                        placeholder="Enter number" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check"><input class="form-check-input"
                                                            id="invalidCheck-n" type="checkbox" value=""
                                                            required=""><label class="form-check-label"
                                                            for="invalidCheck-n">Agree to terms and
                                                            conditions</label></div>
                                                </div>
                                                <div class="col-12 text-end"> <button
                                                        class="btn btn-primary">Next</button></div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="wizard-cart" role="tabpanel"
                                            aria-labelledby="wizard-cart-tab">
                                            <form class="row g-3 needs-validation custom-input" novalidate="">
                                                <div class="col-xxl-6">
                                                    <div class="card-wrapper border rounded-3 checkbox-checked">
                                                        <h6 class="sub-title">Select your payment method
                                                        </h6>
                                                        <div class="radio-form">
                                                            <div class="form-check"><input class="form-check-input"
                                                                    id="flexRadioDefault1" type="radio"
                                                                    name="flexRadioDefault-a"><label
                                                                    class="form-check-label"
                                                                    for="flexRadioDefault1">Visa</label>
                                                            </div>
                                                            <div class="form-check"><input class="form-check-input"
                                                                    id="flexRadioDefault2" type="radio"
                                                                    name="flexRadioDefault-a" checked=""><label
                                                                    class="form-check-label"
                                                                    for="flexRadioDefault2">MasterCard</label>
                                                            </div>
                                                            <div class="form-check"><input class="form-check-input"
                                                                    id="flexRadioDefault3" type="radio"
                                                                    name="flexRadioDefault-a" checked=""><label
                                                                    class="form-check-label"
                                                                    for="flexRadioDefault3">Paypal</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="input-group mb-3"><input class="form-control"
                                                                    type="text" placeholder="Recipient's username"
                                                                    aria-label="Recipient's username"
                                                                    aria-describedby="button-addon2"><button
                                                                    class="btn btn-outline-secondary" id="button-addon2"
                                                                    type="button">Submit</button></div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="input-group"><span class="input-group-text"
                                                                    id="basic-addon1">@</span><input class="form-control"
                                                                    type="text" placeholder="Username"
                                                                    aria-label="Username" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6"><label class="form-label"
                                                        for="txtCardNumber1">Card Number</label><input
                                                        class="form-control" id="txtCardNumber1" type="number"
                                                        required="" placeholder="xxxx xxxx xxxx xxxx">
                                                    <div class="invalid-feedback">Please enter your valid
                                                        number</div>
                                                    <div class="valid-feedback"> Looks's Good!</div>
                                                </div>
                                                <div class="col-md-4 col-sm-6"><label class="form-label"
                                                        for="validationDates">Expiration(MM/YY)</label><input
                                                        class="form-control" id="validationDates" type="number"
                                                        required="" placeholder="xx/xx">
                                                    <div class="invalid-feedback">Please enter your valid
                                                        expiration MM/YY</div>
                                                    <div class="valid-feedback"> Looks's Good!</div>
                                                </div>
                                                <div class="col-md-4 col-sm-6"><label class="form-label"
                                                        for="cvvNumber-b">CVV</label><input class="form-control"
                                                        id="cvvNumber-b" type="number" required="">
                                                    <div class="invalid-feedback">Please enter your valid
                                                        CVV</div>
                                                    <div class="valid-feedback"> Looks's Good!</div>
                                                </div>
                                                <div class="col-md-12 col-sm-6"><label class="form-label"
                                                        for="formFile2">Upload Documentation</label><input
                                                        class="form-control" id="formFile2" type="file"
                                                        aria-label="file example" required="">
                                                    <div class="invalid-feedback">Invalid form file selected
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check mb-0"><input class="form-check-input"
                                                            id="invalidCheck-b" type="checkbox" value=""
                                                            required=""><label class="form-check-label"
                                                            for="invalidCheck-b">All the above information
                                                            is correct</label>
                                                        <div class="invalid-feedback">You must agree before
                                                            submitting.</div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end"> <button
                                                        class="btn btn-primary me-2">Previous</button><button
                                                        class="btn btn-primary">Next</button></div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade custom-input" id="wizard-banking" role="tabpanel"
                                            aria-labelledby="wizard-banking-tab">
                                            <form class="row g-3 needs-validation" novalidate="">
                                                <div class="col-md-12">
                                                    <div class="accordion dark-accordion" id="accordionExample-a">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header"><button
                                                                    class="accordion-button collapsed accordion-light-primary txt-primary"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne-a" aria-expanded="true"
                                                                    aria-controls="collapseOne-a">NET
                                                                    BANKING<i class="svg-color"
                                                                        data-feather="chevron-down"></i></button>
                                                            </h2>
                                                            <div class="accordion-collapse collapse" id="collapseOne-a">
                                                                <div class="accordion-body weight-title card-wrapper">
                                                                    <h6 class="sub-title f-14">SELECT YOUR
                                                                        BANK</h6>
                                                                    <div class="row choose-bank">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-check radio radio-primary">
                                                                                <input class="form-check-input"
                                                                                    id="flexRadioDefault-z" type="radio"
                                                                                    name="flexRadioDefault-v"><label
                                                                                    class="form-check-label"
                                                                                    for="flexRadioDefault-z">Industrial
                                                                                    & Commercial
                                                                                    Bank</label>
                                                                            </div>
                                                                            <div class="form-check radio radio-primary">
                                                                                <input class="form-check-input"
                                                                                    id="flexRadioDefault-y" type="radio"
                                                                                    name="flexRadioDefault-v"><label
                                                                                    class="form-check-label"
                                                                                    for="flexRadioDefault-y">Agricultural
                                                                                    Bank</label>
                                                                            </div>
                                                                            <div class="form-check radio radio-primary">
                                                                                <input class="form-check-input"
                                                                                    id="flexRadioDefault-x" type="radio"
                                                                                    name="flexRadioDefault-v"
                                                                                    checked=""><label
                                                                                    class="form-check-label"
                                                                                    for="flexRadioDefault-x">JPMorgan
                                                                                    Chase & Co.</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-check radio radio-primary">
                                                                                <input class="form-check-input"
                                                                                    id="flexRadioDefault-w" type="radio"
                                                                                    name="flexRadioDefault-v"><label
                                                                                    class="form-check-label"
                                                                                    for="flexRadioDefault-w">Construction
                                                                                    Bank Corp.</label>
                                                                            </div>
                                                                            <div class="form-check radio radio-primary">
                                                                                <input class="form-check-input"
                                                                                    id="flexRadioDefault-v" type="radio"
                                                                                    name="flexRadioDefault-v"><label
                                                                                    class="form-check-label"
                                                                                    for="flexRadioDefault-v">Bank
                                                                                    of America</label>
                                                                            </div>
                                                                            <div class="form-check radio radio-primary">
                                                                                <input class="form-check-input"
                                                                                    id="flexRadioDefault-u" type="radio"
                                                                                    name="flexRadioDefault-v"><label
                                                                                    class="form-check-label"
                                                                                    for="flexRadioDefault-u">HDFC
                                                                                    Bank</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <textarea class="form-control" id="validationTextarea24" placeholder="Your Feedback" required=""></textarea>
                                                    <div class="invalid-feedback">Please enter a message in
                                                        the textarea.</div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check mb-0"><input class="form-check-input"
                                                            id="invalidCheck67" type="checkbox" value=""
                                                            required=""><label class="form-check-label mb-0"
                                                            for="invalidCheck67">Agree to terms and
                                                            conditions</label>
                                                        <div class="invalid-feedback">You must agree before
                                                            submitting.</div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end"> <button
                                                        class="btn btn-success">Finish</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Shipping Form</h5>
                        <p class="f-m-light mt-1"> Fill up your true details and next proceed.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="row shipping-form g-5">
                                    <div class="col-xl-8 shipping-border checkout-cart">
                                        <div class="nav nav-pills horizontal-options shipping-options"
                                            id="cart-options-tab" role="tablist" aria-orientation="vertical"><a
                                                class="nav-link b-r-0 active" id="bill-wizard-tab" data-bs-toggle="pill"
                                                href="#bill-wizard" role="tab" aria-controls="bill-wizard"
                                                aria-selected="true">
                                                <div class="cart-options">
                                                    <div class="stroke-icon-wizard"><i class="fa-solid fa-user"></i></div>
                                                    <div class="cart-options-content">
                                                        <h6>Billing</h6>
                                                    </div>
                                                </div>
                                            </a><a class="nav-link b-r-0" id="ship-wizard-tab" data-bs-toggle="pill"
                                                href="#ship-wizard" role="tab" aria-controls="ship-wizard"
                                                aria-selected="false">
                                                <div class="cart-options">
                                                    <div class="stroke-icon-wizard"><i class="fa-solid fa-truck"></i>
                                                    </div>
                                                    <div class="cart-options-content">
                                                        <h6>Shipping</h6>
                                                    </div>
                                                </div>
                                            </a><a class="nav-link b-r-0" id="payment-wizard-tab" data-bs-toggle="pill"
                                                href="#payment-wizard" role="tab" aria-controls="payment-wizard"
                                                aria-selected="false">
                                                <div class="cart-options">
                                                    <div class="stroke-icon-wizard"><i
                                                            class="fa-solid fa-money-bill-1"></i></div>
                                                    <div class="cart-options-content">
                                                        <h6>Payment</h6>
                                                    </div>
                                                </div>
                                            </a><a class="nav-link b-r-0" id="finish-wizard-tab" data-bs-toggle="pill"
                                                href="#finish-wizard" role="tab" aria-controls="finish-wizard"
                                                aria-selected="false">
                                                <div class="cart-options">
                                                    <div class="stroke-icon-wizard"><i
                                                            class="fa-solid fa-check-square"></i></div>
                                                    <div class="cart-options-content">
                                                        <h6>Finish</h6>
                                                    </div>
                                                </div>
                                            </a></div>
                                        <div class="tab-content dark-field shipping-content shipping-wizard basic-wizard"
                                            id="cart-options-tabContent">
                                            <div class="tab-pane fade show active" id="bill-wizard" role="tabpanel"
                                                aria-labelledby="bill-wizard-tab">
                                                <form class="row g-3 needs-validation" novalidate="">
                                                    <div class="col-sm-6"><label class="form-label" for="customName">Full
                                                            Name</label><input class="form-control" id="customName"
                                                            type="text" placeholder="Enter full name"></div>
                                                    <div class="col-sm-6"><label class="form-label"
                                                            for="customContact">Contact Number</label><input
                                                            class="form-control" id="customContact" type="number"
                                                            placeholder="Enter number"></div>
                                                    <div class="col-sm-12"><label class="form-label"
                                                            for="customEmail">Email</label><input class="form-control"
                                                            id="customEmail" type="email"
                                                            placeholder="pixelstrap@example.com"></div>
                                                    <div class="col-12"> <label class="form-label"
                                                            for="currentAddress1">Current Address
                                                        </label>
                                                        <textarea class="form-control" id="currentAddress1" rows="3" placeholder="Enter your current address"></textarea>
                                                    </div>
                                                    <div class="col-12"> <label class="form-label"
                                                            for="otherNotes1">Other Notes</label>
                                                        <textarea class="form-control" id="otherNotes1" rows="3" placeholder="Enter your queries..."></textarea>
                                                    </div>
                                                    <div class="col-md-4"><label class="form-label"
                                                            for="customSelectCountry">Country</label><select
                                                            class="form-select" id="customSelectCountry">
                                                            <option selected="" disabled="" value="1">Select
                                                                country</option>
                                                            <option value="1">Africa </option>
                                                            <option value="2">India</option>
                                                            <option value="3">Indonesia </option>
                                                            <option value="4">Netherlands</option>
                                                            <option value="5">U.K </option>
                                                            <option value="6">U.S</option>
                                                        </select></div>
                                                    <div class="col-md-4 col-sm-6"> <label class="form-label"
                                                            for="customstate">State</label><input class="form-control"
                                                            id="customstate" type="text" placeholder="Enter state">
                                                    </div>
                                                    <div class="col-md-4 col-sm-6"><label class="form-label"
                                                            for="customPostalCode">Postal Code</label><input
                                                            class="form-control" id="customPostalCode" type="text"
                                                            placeholder="Enter postal code">
                                                    </div>
                                                    <div class="col-12 justify-content-end common-flex">
                                                        <button class="btn btn-primary"
                                                            onclick="proceedNextButtonClick('ship-wizard-tab')">Proceed
                                                            to Next<i class="fa-solid fa-truck proceed-next"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade shipping-wizard" id="ship-wizard" role="tabpanel"
                                                aria-labelledby="ship-wizard-tab">
                                                <div class="row g-md-3 g-4">
                                                    <div class="col-xxl-5 col-md-6 box-col-6">
                                                        <div class="shipping-title">
                                                            <h6>Delivery Address</h6><button class="btn btn-primary"
                                                                type="button" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalgetbootstrap"
                                                                data-whatever="@getbootstrap"> <i
                                                                    class="fa fa-plus-square f-20"></i></button>
                                                        </div>
                                                        <div class="row g-3 mt-0 flex-column">
                                                            <div class="col-12">
                                                                <div
                                                                    class="card-wrapper border rounded-3 h-100 light-card">
                                                                    <div class="collect-address">
                                                                        <div class="d-flex gap-2 align-items-center">
                                                                            <div class="form-check radio radio-primary">
                                                                                <input class="form-check-input"
                                                                                    id="shipping-choose1" type="radio"
                                                                                    name="radio1" value="option1"
                                                                                    checked=""><label
                                                                                    class="form-check-label mb-0"
                                                                                    for="shipping-choose1">Blakely
                                                                                    Roy</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-icon"><i
                                                                                class="fa fa-pencil"></i><i
                                                                                class="fa-solid fa-trash-can"></i><span
                                                                                class="badge badge-primary">Home</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shipping-address"><span>
                                                                            <strong>Address: </strong>2211
                                                                            Fruitville Rd, Sarasota,
                                                                            Florida, US </span><span>
                                                                            <strong>Pincode:
                                                                            </strong>34237</span><span>
                                                                            <strong>Contact: </strong>+1
                                                                            3215643789</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div
                                                                    class="card-wrapper border rounded-3 h-100 light-card">
                                                                    <div class="collect-address">
                                                                        <div class="d-flex gap-2 align-items-center">
                                                                            <div class="form-check radio radio-primary">
                                                                                <input class="form-check-input"
                                                                                    id="shipping-choose2" type="radio"
                                                                                    name="radio1" value="option1"
                                                                                    checked=""><label
                                                                                    class="form-check-label mb-0"
                                                                                    for="shipping-choose2">Lia
                                                                                    Dyer</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-icon"><i
                                                                                class="fa fa-pencil"></i><i
                                                                                class="fa-solid fa-trash-can"></i><span
                                                                                class="badge badge-primary">Office</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shipping-address"><span>
                                                                            <strong>Address: </strong>1531 E
                                                                            23rd St S, Independence,
                                                                            Mississippi, US </span><span>
                                                                            <strong>Pincode:
                                                                            </strong>64055</span><span>
                                                                            <strong>Contact: </strong>+1
                                                                            252450089</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div
                                                                    class="card-wrapper border rounded-3 h-100 light-card">
                                                                    <div class="collect-address">
                                                                        <div class="d-flex gap-2 align-items-center">
                                                                            <div class="form-check radio radio-primary">
                                                                                <input class="form-check-input"
                                                                                    id="shipping-choose5" type="radio"
                                                                                    name="radio1" value="option1"
                                                                                    checked=""><label
                                                                                    class="form-check-label mb-0"
                                                                                    for="shipping-choose5">Colt
                                                                                    Grill</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-icon"><i
                                                                                class="fa fa-pencil"></i><i
                                                                                class="fa-solid fa-trash-can"></i><span
                                                                                class="badge badge-primary">Office</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shipping-address"><span>
                                                                            <strong>Address: </strong>502
                                                                            News Street, Oslao, Nebraska,
                                                                            United States</span><span>
                                                                            <strong>Pincode:
                                                                            </strong>85200</span><span>
                                                                            <strong>Contact: </strong>+1
                                                                            4589655741</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-7 col-md-6 box-col-6">
                                                        <h6>Delivery Options</h6>
                                                        <div class="row shipping-method g-3 mt-0 flex-column">
                                                            <div class="col-12">
                                                                <div
                                                                    class="card-wrapper border rounded-3 h-100 light-card">
                                                                    <div class="form-check radio radio-primary">
                                                                        <input class="form-check-input"
                                                                            id="shipping-choose3" type="radio"
                                                                            name="radio2" value="option1"
                                                                            checked=""><label
                                                                            class="form-check-label mb-0"
                                                                            for="shipping-choose3">Standard
                                                                            Delivery - Free</label>
                                                                    </div>
                                                                    <p>Estimated 5-7 days shipping</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div
                                                                    class="card-wrapper border rounded-3 h-100 light-card">
                                                                    <div class="form-check radio radio-primary">
                                                                        <input class="form-check-input"
                                                                            id="shipping-choose4" type="radio"
                                                                            name="radio2" value="option1"
                                                                            checked=""><label
                                                                            class="form-check-label mb-0"
                                                                            for="shipping-choose4">Express
                                                                            Delivery - $30</label>
                                                                    </div>
                                                                    <P>Estimated 1-2 days shipping</P>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div
                                                                    class="card-wrapper border rounded-3 h-100 light-card">
                                                                    <div class="form-check radio radio-primary">
                                                                        <input class="form-check-input"
                                                                            id="shipping-choose6" type="radio"
                                                                            name="radio2" value="option1"
                                                                            checked=""><label
                                                                            class="form-check-label mb-0"
                                                                            for="shipping-choose6">Future
                                                                            Delivery</label>
                                                                    </div><input class="form-control future-date"
                                                                        type="date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 justify-content-end common-flex">
                                                        <button class="btn btn-primary"
                                                            onclick="proceedNextButtonClick('bill-wizard-tab')"><i
                                                                class="fa-solid fa-truck proceed-prev"></i>Proceed
                                                            to Back</button><button class="btn btn-primary"
                                                            onclick="proceedNextButtonClick('payment-wizard-tab')">Proceed
                                                            to Next<i class="fa-solid fa-truck proceed-next"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade shipping-wizard" id="payment-wizard"
                                                role="tabpanel" aria-labelledby="payment-wizard-tab">
                                                <div class="payment-info-wrapper">
                                                    <div class="row shipping-method g-3">
                                                        <div class="col-12">
                                                            <div class="card-wrapper border rounded-3 light-card">
                                                                <div>
                                                                    <div class="form-check radio radio-primary">
                                                                        <input class="form-check-input"
                                                                            id="shipping-choose9" type="radio"
                                                                            name="radio3" value="option1"
                                                                            checked=""><label
                                                                            class="form-check-label mb-0 f-w-500"
                                                                            for="shipping-choose9">Paypal</label>
                                                                    </div>
                                                                    <p>You will be taken to the paypal
                                                                        website to finish your transaction
                                                                        safely</p>
                                                                </div>
                                                                <div> <img
                                                                        src="{{ asset('assets/images/checkout/paypal.png') }}"
                                                                        alt="paypal"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card-wrapper border rounded-3 pay-info light-card">
                                                                <div>
                                                                    <div>
                                                                        <div class="form-check radio radio-primary">
                                                                            <input class="form-check-input"
                                                                                id="shipping-choose8" type="radio"
                                                                                name="radio3" value="option1"><label
                                                                                class="form-check-label mb-0 f-w-500"
                                                                                for="shipping-choose8">Credit
                                                                                Card</label>
                                                                        </div>
                                                                        <P>Transferring money securely
                                                                            through your bank account.
                                                                            Mastercard, Visa, Discover, and
                                                                            Stripe are all accepted</P>
                                                                    </div>
                                                                    <div> <img
                                                                            src="{{ asset('assets/images/forms/credit-card.png') }}"
                                                                            alt="card"></div>
                                                                </div>
                                                                <div class="row g-3">
                                                                    <div class="col-md-12"> <label class="form-label"
                                                                            for="selectCardHolderName">Card
                                                                            Holder</label><input class="form-control"
                                                                            id="selectCardHolderName" type="text"
                                                                            placeholder="Enter card holder name">
                                                                    </div>
                                                                    <div class="col-12"><label class="form-label"
                                                                            for="selectCardNumber">Card
                                                                            Number</label><input class="form-control"
                                                                            id="selectCardNumber" type="number"
                                                                            placeholder="xxxx xxxx xxxx xxxx">
                                                                    </div>
                                                                    <div class="col-sm-6"><label class="form-label"
                                                                            for="selectExpiration">Expiration(MM/YY)</label><input
                                                                            class="form-control" id="selectExpiration"
                                                                            type="number" placeholder="xx/xx"></div>
                                                                    <div class="col-sm-6"><label class="form-label"
                                                                            for="selectCvv">CVV</label><input
                                                                            class="form-control" id="selectCvv"
                                                                            type="number">
                                                                    </div>
                                                                    <div class="col-12"> <label class="form-label"
                                                                            for="uploadDocumentation">Upload
                                                                            Documentation</label><input
                                                                            class="form-control" id="uploadDocumentation"
                                                                            type="file" aria-label="file example">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-check"><input
                                                                                class="form-check-input checkbox-primary"
                                                                                id="invalidCheck01" type="checkbox"
                                                                                value=""><label
                                                                                class="form-check-label"
                                                                                for="invalidCheck01">All the
                                                                                above information is
                                                                                correct</label></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card-wrapper border rounded-3 light-card">
                                                                <div>
                                                                    <div class="form-check radio radio-primary">
                                                                        <input class="form-check-input"
                                                                            id="shipping-choose7" type="radio"
                                                                            name="radio3" value="option1"><label
                                                                            class="form-check-label mb-0 f-w-500"
                                                                            for="shipping-choose7">Cash On
                                                                            Delivery</label>
                                                                    </div>
                                                                    <p>After your order is delivered, make a
                                                                        cash payment</p>
                                                                </div>
                                                                <div> <img
                                                                        src="{{ asset('assets/images/forms/delivery.png') }}"
                                                                        alt="delivery"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 justify-content-end common-flex">
                                                            <button class="btn btn-primary"
                                                                onclick="proceedNextButtonClick('ship-wizard-tab')">
                                                                <i class="fa-solid fa-truck proceed-prev"></i>Proceed
                                                                to Back</button><button class="btn btn-primary"
                                                                onclick="proceedNextButtonClick('finish-wizard-tab')">
                                                                Proceed to Next<i
                                                                    class="fa-solid fa-truck proceed-next"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade shipping-wizard finish-wizard1" id="finish-wizard"
                                                role="tabpanel" aria-labelledby="finish-wizard-tab">
                                                <div class="finish-shipping"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#ord-success') }}">
                                                        </use>
                                                    </svg>
                                                    <div class="mt-sm-3">
                                                        <h5>Order Placed Successfully</h5>
                                                        <p class="mb-0 c-o-light">A confirmation email with
                                                            your order details has been sent to you.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="shipping-info">
                                            <h5>Current Cart </h5>
                                            <div class="overflow-auto custom-scrollbar">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Product Detail </th>
                                                            <th scope="col">Price </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td> <img src="{{ asset('assets/images/product/13.png') }}"
                                                                    alt="t-shirt"></td>
                                                            <td>
                                                                <div>
                                                                    <h6>T-shirt </h6><span>$98 * 2</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>$400</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <img
                                                                    src="{{ asset('assets/images/email-template/4.png') }}"
                                                                    alt="headphone"></td>
                                                            <td>
                                                                <div>
                                                                    <h6>Headphone</h6><span>$4*2</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>$450</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <img src="{{ asset('assets/images/product/2.png') }}"
                                                                    alt="headphone"></td>
                                                            <td>
                                                                <div>
                                                                    <h6>T-shirt </h6><span>$10 * 2</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>$234</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <img
                                                                    src="{{ asset('assets/images/dashboard-2/product/2.png') }}"
                                                                    alt="headphone"></td>
                                                            <td>
                                                                <div>
                                                                    <h6>Chairs</h6><span>$98 * 2</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>$200</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td>Sub Total :</td>
                                                            <td colspan="2">$1284.00 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Discount :</td>
                                                            <td colspan="2">$20.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shipping Charge :</td>
                                                            <td colspan="2">$100.78</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tax :</td>
                                                            <td colspan="2">$205.34</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total (USD) :</td>
                                                            <td colspan="2">$1569.7</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalgetbootstrap" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalgetbootstrap" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content custom-input">
                            <div class="modal-header">
                                <h5>Add Address</h5><button class="btn-close py-0" type="button"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3 needs-validation" novalidate="">
                                    <div class="col-12"><label class="form-label"
                                            for="validationCustomName">Name</label><input class="form-control"
                                            id="validationCustomName" type="text" placeholder="Enter name"
                                            required="">
                                        <div class="invalid-feedback">Please enter your name</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-12"><label class="form-label" for="validationAddress-a">Current
                                            Address</label>
                                        <textarea class="form-control" id="validationAddress-a" rows="3" placeholder="Enter your address"
                                            required=""></textarea>
                                        <div class="invalid-feedback">Please enter current address</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-sm-6"><label class="form-label"
                                            for="validationCustomCountry1">Country</label><select class="selectpicker"
                                            id="validationCustomCountry1" aria-label="Default select example"
                                            data-live-search="true" required size="5">
                                            <option value="1">India</option>
                                            <option value="2" selected>United States</option>
                                            <option value="3">Australia</option>
                                            <option value="4">Canada</option>
                                            <option value="5">Bavaria</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your country</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-sm-6"><label class="form-label" for="validationCustomState1">
                                            State</label><select class="selectpicker" id="validationCustomState1"
                                            aria-label="Default select example" data-live-search="true" required
                                            size="5">
                                            <option value="11">Andhra Pradesh</option>
                                            <option value="12" selected>California</option>
                                            <option value="13">Queensland</option>
                                            <option value="14">Ontario</option>
                                            <option value="15">Germany</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your state</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-sm-6"><label class="form-label"
                                            for="validationCity">City</label><input class="form-control"
                                            id="validationCity" type="text" placeholder="Enter city"
                                            required="">
                                        <div class="invalid-feedback">Please enter your city</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-sm-6"><label class="form-label" for="validationPostalCode">Postal
                                            Code</label><input class="form-control" id="validationPostalCode"
                                            type="text" placeholder="Enter postal code" required="">
                                        <div class="invalid-feedback">Please enter your postal code</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-12"><label class="international-num" for="contact">Contact
                                            Number</label><input class="form-control" id="contact" type="number"
                                            placeholder="Enter your contact number" required="">
                                        <div class="invalid-feedback">Please enter your contact number</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-12">
                                        <div class="modal-footer gap-2"><button class="btn button-light-primary ms-0 me-2"
                                                type="button" data-bs-dismiss="modal">Cancel</button><button
                                                class="btn btn-primary m-0" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- Container-fluid Ends-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/form-wizard/form-wizard.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard/image-upload.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/select/bootstrap-select.min.js') }}"></script>
@endsection
