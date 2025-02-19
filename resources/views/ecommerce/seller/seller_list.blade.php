@extends('layouts.simple.master')

@section('title', 'Seller List')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flatpickr/flatpickr.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Seller List</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Seller List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row seller-wrapper">
            <div class="col-12">
                <div class="card">
                    <div class="card-header common-space">
                        <div class="common-f-start"><span class="seller-filter active" data-filter="all">All</span><span
                                class="seller-filter" data-filter="furniture">Furniture</span><span class="seller-filter"
                                data-filter="professional_service">Professional Services</span><span class="seller-filter"
                                data-filter="security">Security</span><span class="seller-filter"
                                data-filter="travel">Travel</span><span class="seller-filter"
                                data-filter="healthcare">Healthcare</span></div>
                        <div class="right-vendor">
                            <div class="input-group common-searchbox"><span class="input-group-text"><i
                                        class="search-icon text-gray" data-feather="search"></i></span><input
                                    class="form-control" type="text" placeholder="Search..."></div><a
                                class="btn btn-primary" href="#!" data-bs-toggle="modal"
                                data-bs-target="#category-pill-modal"><i class="me-2 fa fa-plus"></i>Add Seller</a>
                        </div>
                        <div class="modal fade" id="category-pill-modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modaldashboard">Add Seller</h5><button class="btn-close"
                                            type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body basic-wizard important-validation">
                                        <div class="stepper-horizontal custom-scrollbar" id="stepper1">
                                            <div class="stepper-one stepper step editing active">
                                                <div class="step-circle"><span>1</span></div>
                                                <div class="step-title">Personal Info</div>
                                                <div class="step-bar-left"></div>
                                                <div class="step-bar-right"></div>
                                            </div>
                                            <div class="stepper-two step">
                                                <div class="step-circle"><span>2</span></div>
                                                <div class="step-title">Company Contact</div>
                                                <div class="step-bar-left"></div>
                                                <div class="step-bar-right"></div>
                                            </div>
                                            <div class="stepper-three step">
                                                <div class="step-circle"><span>3</span></div>
                                                <div class="step-title">Company Overview</div>
                                                <div class="step-bar-left"></div>
                                                <div class="step-bar-right"></div>
                                            </div>
                                            <div class="stepper-four step">
                                                <div class="step-circle"><span>4</span></div>
                                                <div class="step-title">Financial Info</div>
                                                <div class="step-bar-left"></div>
                                                <div class="step-bar-right"></div>
                                            </div>
                                            <div class="stepper-five step">
                                                <div class="step-circle"><span>5</span></div>
                                                <div class="step-title">Finish</div>
                                                <div class="step-bar-left"></div>
                                                <div class="step-bar-right"></div>
                                            </div>
                                        </div>
                                        <div id="msform">
                                            <form class="stepper-one row g-3 needs-validation custom-input" novalidate="">
                                                <div class="col-sm-6"><label class="form-label" for="sellerFirstName">Full
                                                        Name</label><input class="form-control" id="sellerFirstName"
                                                        type="text" required="" placeholder="Enter your full name">
                                                </div>
                                                <div class="col-sm-6"><label class="col-sm-12 form-label"
                                                        for="sellerNumber">Phone</label><input class="form-control"
                                                        id="sellerNumber" type="number"
                                                        placeholder="Enter your phone number" required="">
                                                </div>
                                                <div class="col-sm-4"><label
                                                        class="col-sm-12 form-label">City</label><select
                                                        class="form-select" aria-label="Default select example">
                                                        <option value="1" selected>Ahmedabad</option>
                                                        <option value="2">Goa</option>
                                                        <option value="3">Guwahati</option>
                                                        <option value="4">Hansi</option>
                                                        <option value="5">Bodhgaya</option>
                                                        <option value="6">Durgapur</option>
                                                    </select></div>
                                                <div class="col-sm-4"><label class="form-label">State</label><select
                                                        class="form-select" aria-label="Default select example">
                                                        <option value="1" selected>Gujarat</option>
                                                        <option value="2">Goa </option>
                                                        <option value="3">Assam</option>
                                                        <option value="4">Haryana</option>
                                                        <option value="5">Bihar</option>
                                                        <option value="6">West Bengal</option>
                                                    </select></div>
                                                <div class="col-sm-4"><label
                                                        class="col-sm-12 form-label">Country</label><select
                                                        class="form-select" aria-label="Default select example">
                                                        <option value="1">France</option>
                                                        <option value="2">Haiti</option>
                                                        <option value="3">India</option>
                                                        <option value="4">Laos</option>
                                                        <option value="5">Libya</option>
                                                        <option value="6">Syria</option>
                                                        <option value="7">China</option>
                                                        <option value="8">Nepal</option>
                                                        <option value="9">Australia</option>
                                                    </select></div>
                                                <div class="col-sm-6"><label class="col-sm-12 form-label"
                                                        for="sellerMail">Email</label><input class="form-control"
                                                        id="sellerMail" type="email" placeholder="Enter your email"
                                                        required=""></div>
                                                <div class="col-sm-6"> <label class="form-label" for="postalCode">Postal
                                                        Code</label><input class="form-control" id="postalCode"
                                                        type="text" placeholder="Enter your postal code"
                                                        required="">
                                                </div>
                                            </form>
                                            <form class="stepper-two row g-3 needs-validation custom-input"
                                                novalidate="">
                                                <div class="col-sm-6"><label class="form-label"
                                                        for="formFileDocument">Business Logo</label><input
                                                        class="form-control" id="formFileDocument" type="file"
                                                        required=""></div>
                                                <div class="col-sm-6"> <label class="form-label"
                                                        for="companyName">Business Name</label><input class="form-control"
                                                        id="companyName" type="text" required=""
                                                        placeholder="Enter your business name here"></div>
                                                <div class="col-12"><label class="form-label">Business
                                                        Address</label>
                                                    <textarea class="form-control" placeholder="Enter your business address" required="" rows="3"></textarea>
                                                    <div class="invalid-feedback">Please enter a message in
                                                        the textarea.</div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6"><label class="form-label"
                                                        for="phoneNumber">Phone Number</label><input class="form-control"
                                                        id="phoneNumber" type="number"
                                                        placeholder="Enter your phone number" required="">
                                                </div>
                                                <div class="col-lg-4 col-sm-6"><label class="form-label"
                                                        for="validationServer05">Postal Code</label><input
                                                        class="form-control" id="validationServer05" type="text"
                                                        placeholder="Enter your postal code" required=""></div>
                                                <div class="col-lg-4"><label class="form-label"
                                                        for="companyEmail">Business Email</label><input
                                                        class="form-control" id="companyEmail" type="email"
                                                        placeholder="Enter your business email" required="">
                                                </div>
                                                <div class="col-sm-6"><label class="form-label"
                                                        for="contactPersonName">Contact Person
                                                        Name</label><input class="form-control" id="contactPersonName"
                                                        type="text" placeholder="Enter your contact person name"
                                                        required=""></div>
                                                <div class="col-sm-6"><label class="form-label"
                                                        for="contactPersonPhone">Contact Person
                                                        Phone</label><input class="form-control" id="contactPersonPhone"
                                                        type="number" placeholder="Enter your contact person phone"
                                                        required=""></div>
                                            </form>
                                            <form class="stepper-three row g-3 needs-validation custom-input"
                                                novalidate="">
                                                <div class="col-12"><label class="form-label"
                                                        for="businessDetails">Business
                                                        Details</label>
                                                    <textarea class="form-control" id="businessDetails" placeholder="Enter your business details" required=""
                                                        rows="3"></textarea>
                                                    <div class="invalid-feedback">Please enter a message in
                                                        the textarea. </div>
                                                </div>
                                                <div class="col-sm-6"><label class="form-label">Establishment Date</label>
                                                    <div class="input-group flatpicker-calender product-date">
                                                        <input class="form-control" id="human-friendly1" type="date">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6"> <label class="form-label"
                                                        for="serviceArea">Business Type</label><input class="form-control"
                                                        id="serviceArea" type="text"
                                                        placeholder="Enter your business type" required="">
                                                </div>
                                                <div class="col-lg-2 col-sm-3"><label class="form-label"
                                                        for="serviceArea">Insured?</label>
                                                    <div class="common-flex">
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexRadioDefault1" type="radio"
                                                                name="flexRadioDefault"><label class="form-check-label"
                                                                for="flexRadioDefault1">Yes</label></div>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexRadioDefault2" type="radio"
                                                                name="flexRadioDefault" checked=""><label
                                                                class="form-check-label" for="flexRadioDefault2">No
                                                            </label></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-3"><label class="form-label"
                                                        for="serviceArea">Licensed?</label>
                                                    <div class="common-flex">
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexRadioDefault3" type="radio"
                                                                name="flexRadioDefault"><label class="form-check-label"
                                                                for="flexRadioDefault3">Yes</label></div>
                                                        <div class="form-check"><input class="form-check-input"
                                                                id="flexRadioDefault4" type="radio"
                                                                name="flexRadioDefault" checked=""><label
                                                                class="form-check-label" for="flexRadioDefault4">No
                                                            </label></div>
                                                    </div>
                                                </div>
                                                <div class="col-12"> <label class="form-label"
                                                        for="additionalInfo">Additional
                                                        Info</label>
                                                    <textarea class="form-control" id="additionalInfo" placeholder="You can write anything..." required=""
                                                        rows="3"></textarea>
                                                    <div class="invalid-feedback">Please enter a message in
                                                        the textarea. </div>
                                                </div>
                                            </form>
                                            <form class="stepper-four row g-3 needs-validation custom-input"
                                                novalidate="">
                                                <div class="col-sm-6"><label class="form-label" for="bankName">Bank
                                                        Name</label><input class="form-control" id="bankName"
                                                        type="text" placeholder="Enter your bank name" required="">
                                                </div>
                                                <div class="col-sm-6"> <label class="form-label" for="cardNumber">Card
                                                        Number</label><input class="form-control" id="cardNumber"
                                                        type="number" placeholder="xxxx xxxx xxxx xxxx" required="">
                                                </div>
                                                <div class="col-xl-4"><label class="form-label"
                                                        for="expirationDates01">Expiration(MM/YY)</label><input
                                                        class="form-control" id="expirationDates01" type="number"
                                                        placeholder="xx/xx" required=""></div>
                                                <div class="col-xl-4 col-sm-6"><label class="form-label"
                                                        for="cvvNumber">CVV Number</label><input class="form-control"
                                                        id="cvvNumber" type="number" required=""></div>
                                                <div class="col-xl-4 col-sm-6"><label class="form-label"
                                                        for="shiftCode">Shift Code</label><input class="form-control"
                                                        id="shiftCode" type="text" required=""></div>
                                            </form>
                                            <form class="stepper-five row g-3 needs-validation" novalidate="">
                                                <div class="col-12 m-0"></div>
                                                <div class="successful-form"><img class="img-fluid"
                                                        src="{{ asset('assets/images/gif/dashboard-8/successful.gif') }}"
                                                        alt="successful">
                                                    <h5>Congratulations </h5>
                                                    <p>Well done! You have successfully completed. </p>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <ul class="seller-cards">
                    <li class="seller-box" data-filter="professional_service">
                        <div><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#logo-1') }}"></use>
                            </svg>
                            <div>
                                <h5>Gadget Grove</h5><span class="f-light">Sabrina Whitney</span>
                            </div>
                        </div>
                        <ul class="seller-profits">
                            <li>
                                <div class="common-space"><span>Total Orders</span><span>567</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span>Total Products </span><span>45+</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span> Total Earnings</span><span>$67,980</span>
                                </div>
                            </li>
                        </ul><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.seller_details') }}">View</a>
                    </li>
                    <li class="seller-box" data-filter="furniture">
                        <div><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#logo-2') }}"></use>
                            </svg>
                            <div>
                                <h5>Wonder Finds</h5><span class="f-light">Dean Summers</span>
                            </div>
                        </div>
                        <ul class="seller-profits">
                            <li>
                                <div class="common-space"><span>Total Orders</span><span>689</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span>Total Products </span><span>100+</span>
                                </div>
                            </li>
                            <li>
                                <div class="common-space"><span> Total Earnings</span><span>$78,986</span>
                                </div>
                            </li>
                        </ul><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.seller_details') }}">View</a>
                    </li>
                    <li class="seller-box" data-filter="furniture">
                        <div><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#logo-3') }}"></use>
                            </svg>
                            <div>
                                <h5>Kilback</h5><span class="f-light">Frankie Blair</span>
                            </div>
                        </div>
                        <ul class="seller-profits">
                            <li>
                                <div class="common-space"><span>Total Orders</span><span>210</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span>Total Products </span><span>15+</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span> Total Earnings</span><span>$99,104</span>
                                </div>
                            </li>
                        </ul><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.seller_details') }}">View</a>
                    </li>
                    <li class="seller-box" data-filter="security">
                        <div><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#logo-4') }}"></use>
                            </svg>
                            <div>
                                <h5>Liourt</h5><span class="f-light">Jordan Snow</span>
                            </div>
                        </div>
                        <ul class="seller-profits">
                            <li>
                                <div class="common-space"><span>Total Orders</span><span>586</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span>Total Products </span><span>486+</span>
                                </div>
                            </li>
                            <li>
                                <div class="common-space"><span> Total Earnings</span><span>$100,104</span>
                                </div>
                            </li>
                        </ul><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.seller_details') }}">View</a>
                    </li>
                    <li class="seller-box" data-filter="healthcare">
                        <div><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#logo-5') }}"></use>
                            </svg>
                            <div>
                                <h5>Cliinch</h5><span class="f-light">Jadiel Roy</span>
                            </div>
                        </div>
                        <ul class="seller-profits">
                            <li>
                                <div class="common-space"><span>Total Orders</span><span>140</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span>Total Products </span><span>30+</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span> Total Earnings</span><span>$29,450</span>
                                </div>
                            </li>
                        </ul><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.seller_details') }}">View</a>
                    </li>
                    <li class="seller-box" data-filter="furniture">
                        <div><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#logo-6') }}"></use>
                            </svg>
                            <div>
                                <h5>Liehook</h5><span class="f-light">Marie King</span>
                            </div>
                        </div>
                        <ul class="seller-profits">
                            <li>
                                <div class="common-space"><span>Total Orders</span><span>150</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span>Total Products </span><span>50+</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span> Total Earnings</span><span>$18,102</span>
                                </div>
                            </li>
                        </ul><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.seller_details') }}">View</a>
                    </li>
                    <li class="seller-box" data-filter="travel">
                        <div><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#logo-7') }}"></use>
                            </svg>
                            <div>
                                <h5>Liify</h5><span class="f-light">Angela Dalton</span>
                            </div>
                        </div>
                        <ul class="seller-profits">
                            <li>
                                <div class="common-space"><span>Total Orders</span><span>240</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span>Total Products </span><span>10+</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span> Total Earnings</span><span>$28,109</span>
                                </div>
                            </li>
                        </ul><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.seller_details') }}">View</a>
                    </li>
                    <li class="seller-box" data-filter="professional_service">
                        <div><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#logo-8') }}"></use>
                            </svg>
                            <div>
                                <h5>Appzea</h5><span class="f-light">Albert Ballard</span>
                            </div>
                        </div>
                        <ul class="seller-profits">
                            <li>
                                <div class="common-space"><span>Total Orders</span><span>104</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span>Total Products </span><span>14+</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span> Total Earnings</span><span>$15,240</span>
                                </div>
                            </li>
                        </ul><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.seller_details') }}">View</a>
                    </li>
                    <li class="seller-box" data-filter="professional_service">
                        <div><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#logo-9') }}"></use>
                            </svg>
                            <div>
                                <h5>Appish</h5><span class="f-light">Johan Compton</span>
                            </div>
                        </div>
                        <ul class="seller-profits">
                            <li>
                                <div class="common-space"><span>Total Orders</span><span>45</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span>Total Products </span><span>10+</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span> Total Earnings</span><span>$12,109</span>
                                </div>
                            </li>
                        </ul><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.seller_details') }}">View</a>
                    </li>
                    <li class="seller-box" data-filter="security">
                        <div><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#logo-10') }}"></use>
                            </svg>
                            <div>
                                <h5>Jews</h5><span class="f-light">Jakob Clark</span>
                            </div>
                        </div>
                        <ul class="seller-profits">
                            <li>
                                <div class="common-space"><span>Total Orders</span><span>78</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span>Total Products </span><span>26+</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span> Total Earnings</span><span>$78,578</span>
                                </div>
                            </li>
                        </ul><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.seller_details') }}">View</a>
                    </li>
                    <li class="seller-box" data-filter="professional_service">
                        <div><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#logo-11') }}"></use>
                            </svg>
                            <div>
                                <h5>Offspring</h5><span class="f-light">Jake Snyder</span>
                            </div>
                        </div>
                        <ul class="seller-profits">
                            <li>
                                <div class="common-space"><span>Total Orders</span><span>25</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span>Total Products </span><span>30+</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span> Total Earnings</span><span>$28,454</span>
                                </div>
                            </li>
                        </ul><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.seller_details') }}">View</a>
                    </li>
                    <li class="seller-box" data-filter="travel">
                        <div><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#logo-12') }}"></use>
                            </svg>
                            <div>
                                <h5>Holoxo</h5><span class="f-light">Daniel Schneider</span>
                            </div>
                        </div>
                        <ul class="seller-profits">
                            <li>
                                <div class="common-space"><span>Total Orders</span><span>58</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span>Total Products </span><span>79+</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span> Total Earnings</span><span>$472,587</span>
                                </div>
                            </li>
                        </ul><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.seller_details') }}">View</a>
                    </li>
                    <li class="seller-box" data-filter="furniture">
                        <div><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#logo-13') }}"></use>
                            </svg>
                            <div>
                                <h5>Nomadshol</h5><span class="f-light">Silas Barnet</span>
                            </div>
                        </div>
                        <ul class="seller-profits">
                            <li>
                                <div class="common-space"><span>Total Orders</span><span>47</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span>Total Products </span><span>80+</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span> Total Earnings</span><span>$102,450</span>
                                </div>
                            </li>
                        </ul><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.seller_details') }}">View</a>
                    </li>
                    <li class="seller-box" data-filter="professional_service">
                        <div><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#logo-14') }}"></use>
                            </svg>
                            <div>
                                <h5>Olzo</h5><span class="f-light">Silas Barnet</span>
                            </div>
                        </div>
                        <ul class="seller-profits">
                            <li>
                                <div class="common-space"><span>Total Orders</span><span>15</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span>Total Products </span><span>14+</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span> Total Earnings</span><span>$1,0000</span>
                                </div>
                            </li>
                        </ul><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.seller_details') }}">View</a>
                    </li>
                    <li class="seller-box" data-filter="travel">
                        <div><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#logo-15') }}"></use>
                            </svg>
                            <div>
                                <h5>Doloh</h5><span class="f-light">Henry Nguyen</span>
                            </div>
                        </div>
                        <ul class="seller-profits">
                            <li>
                                <div class="common-space"><span>Total Orders</span><span>47</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span>Total Products </span><span>59+</span></div>
                            </li>
                            <li>
                                <div class="common-space"><span> Total Earnings</span><span>$34,789</span>
                                </div>
                            </li>
                        </ul><a class="btn btn-primary btn-hover-effect" href="{{ route('admin.seller_details') }}">View</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/flat-pickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard/custom-number-wizard.js') }}"></script>
    <script src="{{ asset('assets/js/custom_seller.js') }}"></script>
@endsection
