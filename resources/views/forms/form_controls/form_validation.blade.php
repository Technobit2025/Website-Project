@extends('layouts.simple.master')

@section('title', 'Form Validation')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Validation Forms</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item"> Form Controls</li>
                        <li class="breadcrumb-item active"> Validation Forms</li>
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
                        <h5>Tooltip Form Validation</h5>
                        <p class="f-m-light mt-1"> If your form layout allows it, you can swap the
                            <code>{valid|invalid}-feedback </code>classes for
                            <code>{valid|invalid}-tooltip </code>classes to display validation feedback in a
                            styled tooltip. Be sure to have a parent with position: relative on it for
                            tooltip positioning.
                        </p>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 needs-validation custom-input" novalidate="">
                            <div class="col-md-4 position-relative"><label class="form-label"
                                    for="validationTooltip01">First Name</label><input class="form-control"
                                    id="validationTooltip01" type="text" placeholder="Mark" required="">
                                <div class="valid-tooltip">Looks good!</div>
                            </div>
                            <div class="col-md-4 position-relative"><label class="form-label" for="validationTooltip02">Last
                                    Name</label><input class="form-control" id="validationTooltip02" type="text"
                                    placeholder="Otto" required="">
                                <div class="valid-tooltip">Looks good!</div>
                            </div>
                            <div class="col-md-4 position-relative"><label class="form-label"
                                    for="validationTooltipUsername">Username</label>
                                <div class="input-group has-validation"><span class="input-group-text"
                                        id="validationTooltipUsernamePrepend">@</span><input class="form-control"
                                        id="validationTooltipUsername" type="text"
                                        aria-describedby="validationTooltipUsernamePrepend" required="">
                                    <div class="invalid-tooltip">Please choose a unique and valid username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 position-relative"><label class="form-label"
                                    for="validationTooltip03">City</label><input class="form-control"
                                    id="validationTooltip03" type="text" required="">
                                <div class="invalid-tooltip">Please provide a valid city.</div>
                            </div>
                            <div class="col-md-3 position-relative"><label class="form-label"
                                    for="validationTooltip04">State</label><select class="form-select"
                                    id="validationTooltip04" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option>U.S </option>
                                    <option>Thailand </option>
                                    <option>India </option>
                                    <option>U.K</option>
                                </select>
                                <div class="invalid-tooltip">Please select a valid state.</div>
                            </div>
                            <div class="col-md-3 position-relative"><label class="form-label"
                                    for="validationTooltip05">Zip</label><input class="form-control"
                                    id="validationTooltip05" type="text" required="">
                                <div class="invalid-tooltip">Please provide a valid zip.</div>
                            </div>
                            <div class="col-12"><button class="btn btn-primary" type="submit">Submit
                                    form</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Browser Defaults</h5>
                        <p class="f-m-light mt-1"> Not interested in custom validation feedback messages or
                            writing JavaScript to change form behaviors? Depending on your browser and
                            OS,While these feedback styles cannot be styled with CSS, you can still
                            customize the feedback text through JavaScript.</p>
                    </div>
                    <div class="card-body custom-input">
                        <form class="row g-3">
                            <div class="col-12"> <label class="form-label" for="first-name">First
                                    Name</label><input class="form-control" id="first-name" type="text"
                                    placeholder="First name" aria-label="First name" required></div>
                            <div class="col-12"><label class="form-label" for="exampleFormControlInput1">Email
                                    Address</label><input class="form-control" id="exampleFormControlInput1"
                                    type="email" placeholder="pesamof475@saeoil.com" required></div>
                            <div class="col-12"> <label class="col-sm-12 col-form-label"
                                    for="inputPassword2">Password</label><input class="form-control" id="inputPassword2"
                                    type="password" required></div>
                            <div class="col-12"> <label class="form-label" for="validationDefault04">State</label><select
                                    class="form-select" id="validationDefault04" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option>U.K </option>
                                    <option>Thailand</option>
                                    <option>India </option>
                                    <option>U.S</option>
                                </select></div>
                            <div class="col-12"> <label class="form-label" for="formFile">Choose
                                    File</label><input class="form-control" id="formFile" type="file" required></div>
                            <div class="col-12">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Select Your Payment Method</h6>
                                    <div class="radio-form">
                                        <div class="form-check"><input class="form-check-input" id="flexRadioDefault1"
                                                type="radio" name="flexRadioDefault" required=""><label
                                                class="form-check-label" for="flexRadioDefault1">Visa</label></div>
                                        <div class="form-check"><input class="form-check-input" id="flexRadioDefault2"
                                                type="radio" name="flexRadioDefault" checked=""
                                                required=""><label class="form-check-label"
                                                for="flexRadioDefault2">MasterCard</label></div>
                                        <div class="form-check"><input class="form-check-input" id="flexRadioDefault3"
                                                type="radio" name="flexRadioDefault" checked=""
                                                required=""><label class="form-check-label"
                                                for="flexRadioDefault3">Paypal</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12"> <label class="form-label"
                                    for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="col-12 checkbox-checked"><input class="form-check-input" id="flexCheckDefault"
                                    type="checkbox" value=""><label class="form-check-label ms-2"
                                    for="flexCheckDefault">I accept the
                                    policies.</label></div>
                            <div class="col-12">
                                <div class="form-check form-switch"><input class="form-check-input"
                                        id="flexSwitchCheckDefault" type="checkbox" role="switch" required><label
                                        class="form-check-label" for="flexSwitchCheckDefault">Are you certain that the
                                        details above
                                        are accurate?</label></div>
                            </div>
                            <div class="col-12"><button class="btn btn-primary" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Validation Form</h5>
                        <p class="f-m-light mt-1">Custom feedback styles apply custom colors, borders, focus
                            styles, and background icons to better communicate feedback.Background icons for
                            <code>&lt;select&gt;</code>s are only available with <code>form-select</code>
                            and not <code>form-control.</code>
                        </p>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 needs-validation custom-input" novalidate="">
                            <div class="col-12"><label class="form-label" for="validationCustom01">First
                                    Name</label><input class="form-control" id="validationCustom01" type="text"
                                    placeholder="Mark" required="">
                                <div class="invalid-feedback">Please enter your valid </div>
                                <div class="valid-feedback"> Looks's Good!</div>
                            </div>
                            <div class="col-12"><label class="col-sm-12 col-form-label"
                                    for="inputPassword1">Password</label><input class="form-control" id="inputPassword1"
                                    type="password" required="">
                                <div class="invalid-feedback">Please enter your valid password </div>
                            </div>
                            <div class="col-12"><label class="form-label" for="validationCustom04">State</label><select
                                    class="form-select" id="validationCustom04" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option>U.K </option>
                                    <option>India </option>
                                    <option>Thailand</option>
                                    <option>Newyork</option>
                                </select>
                                <div class="invalid-feedback">Please select a valid state.</div>
                                <div class="valid-feedback"> Looks's Good! </div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="validationCustom03">City</label><input
                                    class="form-control" id="validationCustom03" type="text" required="">
                                <div class="invalid-feedback">Please provide a valid city.</div>
                                <div class="valid-feedback"> Looks's Good!</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="validationCustom05">Zip</label><input
                                    class="form-control" id="validationCustom05" type="text" required="">
                                <div class="invalid-feedback">Please provide a valid zip.</div>
                                <div class="valid-feedback"> Looks's Good!</div>
                            </div>
                            <div class="col-12">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Select Your Payment Method</h6>
                                    <div class="radio-form">
                                        <div class="form-check"><input class="form-check-input"
                                                id="validationFormCheck25" type="radio" name="radio-stacked"
                                                required=""><label class="form-check-label"
                                                for="validationFormCheck25">MaterCard</label></div>
                                        <div class="form-check"><input class="form-check-input"
                                                id="validationFormCheck23" type="radio" name="radio-stacked"
                                                required=""><label class="form-check-label"
                                                for="validationFormCheck23">VISA</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12"> <select class="form-select" required="" aria-label="select example">
                                    <option value="">Select Your Favorite Pixelstrap theme</option>
                                    <option value="1">Mofi</option>
                                    <option value="2">Tivo</option>
                                    <option value="3">Wingo</option>
                                </select>
                                <div class="invalid-feedback">Invalid select feedback</div>
                            </div>
                            <div class="col-12"> <label class="form-label" for="formFile1">Choose
                                    File</label><input class="form-control" id="formFile1" type="file"
                                    aria-label="file example" required="">
                                <div class="invalid-feedback">Invalid form file selected</div>
                            </div>
                            <div class="col-12"> <label class="form-label" for="validationTextarea">Description</label>
                                <textarea class="form-control" id="validationTextarea" placeholder="Enter your comment" required=""></textarea>
                                <div class="invalid-feedback">Please enter a message in the textarea.</div>
                            </div>
                            <div class="col-12">
                                <div class="form-check"><input class="form-check-input" id="invalidCheck"
                                        type="checkbox" value="" required=""><label class="form-check-label"
                                        for="invalidCheck">Agree to terms and conditions</label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                            </div>
                            <div class="col-12"><button class="btn btn-primary" type="submit">Submit
                                    form</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Form Validation with Effects</h5>
                        <p class="f-m-light mt-1">If your form layout allows it, you can swap the
                            <code>{valid|invalid}</code>-feedback classes for <code>{valid|invalid}</code>-
                            classes to display validation in a styled effect.
                        </p>
                    </div>
                    <div class="card-body animated-form">
                        <form class="row g-3 needs-validation custom-input" novalidate="">
                            <div class="col-12 position-relative"><label class="form-label"
                                    for="validationTooltipName">Full Name</label><input class="form-control required"
                                    id="validationTooltipName" type="text" placeholder="Enter your name"
                                    required=""></div>
                            <div class="col-12 position-relative"><label class="form-label"
                                    for="validationTooltipGmail">Gmail</label><input class="form-control required email"
                                    id="validationTooltipGmail" type="email" placeholder="pixelstrap@gmail.com"
                                    required=""></div>
                            <div class="col-lg-6 position-relative"><label class="col-form-label"
                                    for="inputTooltipPassword">Password</label><input class="form-control required"
                                    id="inputTooltipPassword" type="password" placeholder="Enter your password"
                                    required=""></div>
                            <div class="col-lg-6 position-relative"><label class="col-form-label"
                                    for="inputConfirmPassword">Confirm Password</label><input
                                    class="form-control required confirmation" id="inputConfirmPassword" type="password"
                                    placeholder="Enter your confirm password" required="">
                            </div>
                            <div class="col-6"><button class="btn btn-primary" type="submit">Submit form
                                </button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Form with Password Strength Validation</h5>
                        <p class="f-m-light mt-1"> Use id <code>horizontal-login </code>to check password
                            field strength.</p>
                    </div>
                    <div class="card-body">
                        <div class="horizontal-login">
                            <form class="needs-validation custom-input" id="horizontal-login" novalidate="">
                                <div class="mb-3"><label class="form-label" for="exampleInputEmail1">Email
                                        Address</label><input class="form-control" id="exampleInputEmail1" type="email"
                                        autocomplete="off" placeholder="Enter your email" required>
                                    <div class="invalid-feedback">Please provide a valid email.</div>
                                    <div class="valid-feedback"> Looks's Good!</div>
                                </div>
                                <div class="mb-3"><label class="form-label" for="validatepwd">Password</label><input
                                        class="form-control" id="validatepwd" type="password"
                                        placeholder="Enter your password" required>
                                    <div class="invalid-feedback">Please provide a valid password.</div>
                                    <span class="show-pass" onclick="toggle()"><i class="fa-regular fa-eye"
                                            onclick="myFunction(this)"></i></span>
                                    <div class="progress">
                                        <div class="progress-bar" id="password-strength" role="progressbar"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                        </div>
                                    </div>
                                    <ul class="pwd-strength">
                                        <li><span class="low-upper-case"><i class="fas fa-circle"
                                                    aria-hidden="true"></i>&nbsp;Lowercase &amp;
                                                Uppercase</span></li>
                                        <li><span class="one-number"><i class="fas fa-circle"
                                                    aria-hidden="true"></i>&nbsp;Number (0-9)</span></li>
                                        <li><span class="one-special-char"><i class="fas fa-circle"
                                                    aria-hidden="true"></i>&nbsp;Special Character
                                                (!@#$%^&amp;*)</span></li>
                                        <li><span class="eight-character"><i class="fas fa-circle"
                                                    aria-hidden="true"></i>&nbsp;Atleast 8 Character</span>
                                        </li>
                                    </ul>
                                </div><button class="btn btn-primary d-block ms-auto" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/custom-animated-form.js') }}"></script>
    <script src="{{ asset('assets/js/custom-pwd-validation.js') }}"></script>
@endsection
