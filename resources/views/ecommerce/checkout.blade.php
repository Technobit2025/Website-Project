@extends('layouts.simple.master')

@section('title', 'Checkout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select/bootstrap-select.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Checkout</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row shipping-form">
            <div class="col-xl-8">
                <div class="card checkout-cart">
                    <div class="card-body basic-wizard important-validation">
                        <div class="stepper-horizontal custom-scrollbar" id="stepper1">
                            <div class="stepper-one stepper step editing active">
                                <div class="step-circle"><span>1</span></div>
                                <div class="step-title">Information</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-two step">
                                <div class="step-circle"><span>2</span></div>
                                <div class="step-title">Shipping</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-three step">
                                <div class="step-circle"><span>3</span></div>
                                <div class="step-title">Payment</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                            <div class="stepper-four step">
                                <div class="step-circle"><span>4</span></div>
                                <div class="step-title">Completed</div>
                                <div class="step-bar-left"></div>
                                <div class="step-bar-right"></div>
                            </div>
                        </div>
                        <div class="shipping-content" id="msform">
                            <form class="stepper-one row g-3 needs-validation shipping-wizard" novalidate="">
                                <div class="row g-3 custom-input">
                                    <div class="col-sm-6"><label class="form-label" for="customName">Full
                                            Name</label><input class="form-control" id="customName" type="text"
                                            placeholder="Enter full name"></div>
                                    <div class="col-sm-6"><label class="form-label" for="customContact">Contact
                                            Number</label><input class="form-control" id="customContact" type="number"
                                            placeholder="Enter number"></div>
                                    <div class="col-sm-12"><label class="form-label" for="customEmail">Email</label><input
                                            class="form-control" id="customEmail" type="email"
                                            placeholder="pixelstrap@example.com"></div>
                                    <div class="col-12"> <label class="form-label" for="currentAddress1">Current Address
                                        </label>
                                        <textarea class="form-control" id="currentAddress1" rows="3" placeholder="Enter your current address"></textarea>
                                    </div>
                                    <div class="col-12"> <label class="form-label" for="otherNotes1">Other
                                            Notes</label>
                                        <textarea class="form-control" id="otherNotes1" rows="3" placeholder="Enter your queries..."></textarea>
                                    </div>
                                    <div class="col-md-4"><label class="form-label"
                                            for="customSelectCountry">Country</label><select class="form-select"
                                            id="customSelectCountry">
                                            <option selected="" disabled="" value="1">Select country
                                            </option>
                                            <option value="1">Africa </option>
                                            <option value="2">India</option>
                                            <option value="3">Indonesia </option>
                                            <option value="4">Netherlands</option>
                                            <option value="5">U.K </option>
                                            <option value="6">U.S</option>
                                        </select></div>
                                    <div class="col-md-4 col-sm-6"> <label class="form-label"
                                            for="customstate">State</label><input class="form-control" id="customstate"
                                            type="text" placeholder="Enter state"></div>
                                    <div class="col-md-4 col-sm-6"><label class="form-label"
                                            for="customPostalCode">Postal Code</label><input class="form-control"
                                            id="customPostalCode" type="text" placeholder="Enter postal code"></div>
                                </div>
                            </form>
                            <form class="stepper-two row g-3 needs-validation shipping-wizard" novalidate="">
                                <div class="col-xxl-5 col-md-6 box-col-6">
                                    <div class="shipping-title">
                                        <h6>Delivery Address</h6><button class="btn btn-primary" type="button"
                                            data-bs-toggle="modal" data-bs-target="#exampleModalgetbootstrap"
                                            data-whatever="@getbootstrap"> <i class="fa fa-plus-square f-20"></i></button>
                                    </div>
                                    <div class="row g-3 mt-0 flex-column">
                                        <div class="col-12">
                                            <div class="card-wrapper border rounded-3 h-100 light-card">
                                                <div class="collect-address">
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="form-check radio radio-primary"><input
                                                                class="form-check-input" id="shipping-choose1"
                                                                type="radio" name="radio1" value="option1"
                                                                checked=""><label class="form-check-label mb-0"
                                                                for="shipping-choose1">Blakely Roy</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-icon"><i class="fa fa-pencil"></i><i
                                                            class="fa-solid fa-trash-can"></i><span
                                                            class="badge badge-primary">Home</span></div>
                                                </div>
                                                <div class="shipping-address"><span> <strong>Address:
                                                        </strong>2211 Fruitville Rd, Sarasota, Florida, US
                                                    </span><span> <strong>Pincode:
                                                        </strong>34237</span><span> <strong>Contact:
                                                        </strong>+1 3215643789</span></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card-wrapper border rounded-3 h-100 light-card">
                                                <div class="collect-address">
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="form-check radio radio-primary"><input
                                                                class="form-check-input" id="shipping-choose2"
                                                                type="radio" name="radio1" value="option1"
                                                                checked=""><label class="form-check-label mb-0"
                                                                for="shipping-choose2">Lia Dyer</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-icon"><i class="fa fa-pencil"></i><i
                                                            class="fa-solid fa-trash-can"></i><span
                                                            class="badge badge-primary">Office</span></div>
                                                </div>
                                                <div class="shipping-address"><span> <strong>Address:
                                                        </strong>1531 E 23rd St S, Independence,
                                                        Mississippi, US </span><span> <strong>Pincode:
                                                        </strong>64055</span><span> <strong>Contact:
                                                        </strong>+1 252450089</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-7 col-md-6 box-col-6">
                                    <h6>Delivery Options</h6>
                                    <div class="row shipping-method g-3 mt-0 flex-column">
                                        <div class="col-12">
                                            <div class="card-wrapper border rounded-3 h-100 light-card">
                                                <div class="form-check radio radio-primary"><input
                                                        class="form-check-input" id="shipping-choose3" type="radio"
                                                        name="radio2" value="option1" checked=""><label
                                                        class="form-check-label mb-0" for="shipping-choose3">Standard
                                                        Delivery -
                                                        Free</label></div>
                                                <p>Estimated 5-7 days shipping</p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card-wrapper border rounded-3 h-100 light-card">
                                                <div class="form-check radio radio-primary"><input
                                                        class="form-check-input" id="shipping-choose4" type="radio"
                                                        name="radio2" value="option1" checked=""><label
                                                        class="form-check-label mb-0" for="shipping-choose4">Express
                                                        Delivery -
                                                        $30</label></div>
                                                <P>Estimated 1-2 days shipping</P>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card-wrapper border rounded-3 h-100 light-card">
                                                <div class="form-check radio radio-primary"><input
                                                        class="form-check-input" id="shipping-choose6" type="radio"
                                                        name="radio2" value="option1" checked=""><label
                                                        class="form-check-label mb-0" for="shipping-choose6">Future
                                                        Delivery</label></div>
                                                <input class="form-control future-date" type="date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form class="stepper-three row g-3 needs-validation shipping-wizard" novalidate="">
                                <div class="payment-info-wrapper">
                                    <div class="row shipping-method g-3">
                                        <div class="col-12">
                                            <div class="card-wrapper border rounded-3 light-card">
                                                <div>
                                                    <div class="form-check radio radio-primary"><input
                                                            class="form-check-input" id="shipping-choose9" type="radio"
                                                            name="radio3" value="option1" checked=""><label
                                                            class="form-check-label mb-0 f-w-500"
                                                            for="shipping-choose9">Paypal</label></div>
                                                    <p>You will be taken to the paypal website to finish
                                                        your transaction safely</p>
                                                </div>
                                                <div> <img src="{{ asset('assets/images/checkout/paypal.png') }}"
                                                        alt="paypal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card-wrapper border rounded-3 pay-info light-card">
                                                <div>
                                                    <div>
                                                        <div class="form-check radio radio-primary"><input
                                                                class="form-check-input" id="shipping-choose8"
                                                                type="radio" name="radio3" value="option1"><label
                                                                class="form-check-label mb-0 f-w-500"
                                                                for="shipping-choose8">Credit Card</label>
                                                        </div>
                                                        <P>Transferring money securely through your bank
                                                            account. Mastercard, Visa, Discover, and Stripe
                                                            are all accepted</P>
                                                    </div>
                                                    <div> <img src="{{ asset('assets/images/forms/credit-card.png') }}"
                                                            alt="card"></div>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-md-12"> <label class="form-label"
                                                            for="selectCardHolderName">Card
                                                            Holder</label><input class="form-control"
                                                            id="selectCardHolderName" type="text"
                                                            placeholder="Enter card holder name"></div>
                                                    <div class="col-12"><label class="form-label"
                                                            for="selectCardNumber">Card Number</label><input
                                                            class="form-control" id="selectCardNumber" type="number"
                                                            placeholder="xxxx xxxx xxxx xxxx">
                                                    </div>
                                                    <div class="col-sm-6"><label class="form-label"
                                                            for="selectExpiration">Expiration(MM/YY)</label><input
                                                            class="form-control" id="selectExpiration" type="number"
                                                            placeholder="xx/xx"></div>
                                                    <div class="col-sm-6"><label class="form-label"
                                                            for="selectCvv">CVV</label><input class="form-control"
                                                            id="selectCvv" type="number"></div>
                                                    <div class="col-12"> <label class="form-label"
                                                            for="uploadDocumentation">Upload
                                                            Documentation</label><input class="form-control"
                                                            id="uploadDocumentation" type="file"
                                                            aria-label="file example"></div>
                                                    <div class="col-12">
                                                        <div class="form-check"><input
                                                                class="form-check-input checkbox-primary"
                                                                id="invalidCheck01" type="checkbox" value=""><label
                                                                class="form-check-label" for="invalidCheck01">All the
                                                                above
                                                                information is correct</label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card-wrapper border rounded-3 light-card">
                                                <div>
                                                    <div class="form-check radio radio-primary"><input
                                                            class="form-check-input" id="shipping-choose7" type="radio"
                                                            name="radio3" value="option1"><label
                                                            class="form-check-label mb-0 f-w-500"
                                                            for="shipping-choose7">Cash On Delivery</label>
                                                    </div>
                                                    <p>After your order is delivered, make a cash payment
                                                    </p>
                                                </div>
                                                <div> <img src="{{ asset('assets/images/forms/delivery.png') }}"
                                                        alt="delivery"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form class="stepper-four row g-3 needs-validation shipping-wizard" novalidate="">
                                <div class="order-confirm"><img
                                        src="{{ asset('assets/images/gif/dashboard-8/successful.gif') }}" alt="popper">
                                    <div>
                                        <h5>Order Placed Successfully</h5>
                                        <p class="mb-0">A confirmation email with your order details has
                                            been sent to you.</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="wizard-footer d-flex gap-2 justify-content-end mt-3"><button
                                class="btn button-light-primary" id="backbtn" onclick="backStep()">
                                Back</button><button class="btn btn-primary" id="nextbtn"
                                onclick="nextStep()">Next</button></div>
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
                                            <div class="col-12"><label class="form-label"
                                                    for="validationAddress-a">Current
                                                    Address</label>
                                                <textarea class="form-control" id="validationAddress-a" rows="3" placeholder="Enter your address"
                                                    required=""></textarea>
                                                <div class="invalid-feedback">Please enter current address
                                                </div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-sm-6"><label class="form-label"
                                                    for="validationCustomCountry1">Country</label><select
                                                    class="selectpicker" id="validationCustomCountry1"
                                                    aria-label="Default select example" data-live-search="true" required
                                                    size="5">
                                                    <option value="1">India</option>
                                                    <option value="2" selected>United States</option>
                                                    <option value="3">Australia</option>
                                                    <option value="4">Canada</option>
                                                    <option value="5">Bavaria</option>
                                                </select>
                                                <div class="invalid-feedback">Please select your country
                                                </div>
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
                                            <div class="col-sm-6"><label class="form-label"
                                                    for="validationPostalCode">Postal Code</label><input
                                                    class="form-control" id="validationPostalCode" type="text"
                                                    placeholder="Enter postal code" required="">
                                                <div class="invalid-feedback">Please enter your postal code
                                                </div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-12"><label class="international-num" for="contact">Contact
                                                    Number</label><input class="form-control" id="contact"
                                                    type="number" placeholder="Enter your contact number"
                                                    required="">
                                                <div class="invalid-feedback">Please enter your contact
                                                    number</div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-12">
                                                <div class="modal-footer gap-2"><button
                                                        class="btn button-light-primary m-0" type="button"
                                                        data-bs-dismiss="modal">Cancel</button><button
                                                        class="btn btn-primary m-0" type="submit">Submit</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Order Details</h5>
                    </div>
                    <div class="card-body">
                        <ul class="summery-contain">
                            <li> <img class="img-fluid"
                                    src="{{ asset('assets/images/dashboard-8/shop-categories/headphone.png') }}"
                                    alt="headphone">
                                <h6>Lightweight Headphones<span>X 1</span></h6>
                                <h6 class="price">$85.00</h6>
                            </li>
                            <li> <img class="img-fluid"
                                    src="{{ asset('assets/images/dashboard-2/order/sub-product/24.png') }}"
                                    alt="watch">
                                <h6>Smart Watch<span>X 1</span></h6>
                                <h6 class="price">$140.00</h6>
                            </li>
                            <li> <img class="img-fluid"
                                    src="{{ asset('assets/images/dashboard-2/order/sub-product/14.png') }}"
                                    alt="shoes">
                                <h6>Men's Shoes<span>X 2</span></h6>
                                <h6 class="price">$150.00</h6>
                            </li>
                            <li> <img class="img-fluid"
                                    src="{{ asset('assets/images/dashboard-2/order/sub-product/16.png') }}"
                                    alt="handbag">
                                <h6>Leather Handbag<span>X 1</span></h6>
                                <h6 class="price">$250.00</h6>
                            </li>
                        </ul>
                        <ul class="summary-total">
                            <li>
                                <h6>Subtotal</h6>
                                <h6 class="price">$625.00</h6>
                            </li>
                            <li>
                                <h6>Shipping</h6>
                                <h6 class="price">$14.00</h6>
                            </li>
                            <li>
                                <h6>Tax</h6>
                                <h6 class="price">$18.00</h6>
                            </li>
                            <li>
                                <h6>Coupon Code</h6>
                                <h6 class="price">$-30.00</h6>
                            </li>
                            <li class="list-total">
                                <h6>Total </h6>
                                <h6 class="price">$627.00</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/form-wizard/custom-number-wizard.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/custom_seller.js') }}"></script>
    <script src="{{ asset('assets/js/select/bootstrap-select.min.js') }}"></script>
@endsection
