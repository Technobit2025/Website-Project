@extends('layouts.authentication.master')

@section('title', 'Register Wizard')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
      <div class="row">         
        <div class="col-12 p-0">
          <div>
            <div class="theme-form">                     
              <div class="wizard-4" id="wizard">                       
                <ul>
                  <li><a class="logo text-start ps-0" href="{{ route('admin.default_dashboard') }}"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}" alt="looginpage"></a></li>
                  <li><a href="#step-1">
                      <h4>1</h4>
                      <h5>Personal</h5><small>Add personal details</small></a></li>
                  <li><a href="#step-2">
                      <h4>2</h4>
                      <h5>Address</h5><small>Add additional info</small></a></li>
                  <li><a href="#step-3">
                      <h4>3</h4>
                      <h5>Message</h5><small>Add message(optional)</small></a></li>
                  <li class="pb-0"><a href="#step-4">
                      <h4>4</h4>
                      <h5>Done <i class="fa-regular fa-thumbs-up fa-beat"></i></h5><small>Complete.. !</small></a></li>
                  <li>                           <img src="{{ asset('assets/images/login/signup.png') }}" alt="looginpage"></li>
                </ul>
                <div id="step-1">
                  <div class="wizard-title">
                    <h2>Sign up to account</h2>
                    <h6 class="c-o-light mb-4">Enter your email & password to login</h6>
                  </div>
                  <div class="login-main">
                    <div class="theme-form">
                      <div class="form-group mb-3">
                        <label for="name">First Name</label>
                        <input class="form-control" id="name" type="text" placeholder="Johan" required="required">
                      </div>
                      <div class="form-group mb-3">
                        <label for="lname">Last Name</label>
                        <input class="form-control" id="lname" type="text" placeholder="Deo">
                      </div>
                      <div class="form-group mb-3">
                        <label for="contact">Contact No.</label>
                        <input class="form-control" id="contact" type="number" placeholder="9152422278">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="step-2">
                  <div class="wizard-title">
                    <h2>Sign up to account</h2>
                    <h5 class="text-muted mb-4">Enter your email & password to login</h5>
                  </div>
                  <div class="login-main">
                    <div class="theme-form">
                      <div class="form-group mb-3 m-t-15">
                        <label for="exampleFormControlInput1">Email Address</label>
                        <input class="form-control" id="exampleFormControlInput1" type="email" placeholder="name@example.com">
                      </div>
                      <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
                      </div>
                      <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input class="form-control" id="exampleInputcPassword1" type="password" placeholder="Enter again">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="step-3">
                  <div class="wizard-title">
                    <h2>Sign up to account</h2>
                    <h5 class="text-muted mb-4">Enter your email & password to login</h5>
                  </div>
                  <div class="login-main">
                    <div class="theme-form">
                      <div class="form-group mb-3">
                        <label for="exampleFormControlInput1">Birthday:</label>
                        <input class="form-control" type="date">
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">Age</label>
                        <input class="form-control" placeholder="Age" type="text">
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">Have Passport</label>
                        <input class="form-control" placeholder="Yes/No" type="text">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="step-4">
                  <div class="wizard-title">
                    <h2>Sign up to account</h2>
                    <h5 class="text-muted mb-4">Enter your email & password to login</h5>
                  </div>
                  <div class="login-main">
                    <div class="theme-form">
                      <div class="form-group mb-3">
                        <label class="control-label">Country</label>
                        <input class="form-control mt-1" type="text" placeholder="Country" required="required">
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">State</label>
                        <input class="form-control mt-1" type="text" placeholder="State" required="required">
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">City</label>
                        <input class="form-control mt-1" type="text" placeholder="City" required="required">
                        <!-- Smart Wizard Ends-->
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
@endsection

@section('scripts')
      <script src="{{ asset('assets/js/form-wizard/form-wizard-four.js') }}"></script>
      <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
      <script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>
@endsection
