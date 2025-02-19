@extends('layouts.simple.master')

@section('title', 'Settings')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select/bootstrap-select.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Settings</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid main-setting">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>E-commerce Settings</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-lg-3 g-4">
                            <div class="col-lg-3 col-12">
                                <div class="nav flex-lg-column nav-pills nav-primary" id="ver-pills-tab" role="tablist"
                                    aria-orientation="vertical"><a class="nav-link active" id="ver-pills-general-tab"
                                        data-bs-toggle="pill" href="#ver-pills-general"> <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#general-setting') }}"></use>
                                        </svg>General</a><a class="nav-link" id="ver-pills-activation-tab"
                                        data-bs-toggle="pill" href="#ver-pills-activation"> <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#activation-setting') }}">
                                            </use>
                                        </svg>Activation</a><a class="nav-link" id="ver-pills-point-tab"
                                        data-bs-toggle="pill" href="#ver-pills-point"> <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#wallet-point') }}"></use>
                                        </svg>Wallet Points </a><a class="nav-link" id="ver-pills-seller-tab"
                                        data-bs-toggle="pill" href="#ver-pills-seller"> <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#seller-commission') }}">
                                            </use>
                                        </svg>Seller Commissions</a><a class="nav-link" id="ver-pills-refund-tab"
                                        data-bs-toggle="pill" href="#ver-pills-refund"> <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#setting-refund') }}"></use>
                                        </svg>Refund</a><a class="nav-link" id="ver-pills-delivery-tab"
                                        data-bs-toggle="pill" href="#ver-pills-delivery"> <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#complete-deliver') }}">
                                            </use>
                                        </svg>Delivery</a><a class="nav-link" id="ver-pills-payment-tab"
                                        data-bs-toggle="pill" href="#ver-pills-payment"> <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#setting-payment') }}"></use>
                                        </svg>Payment Method</a><a class="nav-link" id="ver-pills-analytics-tab"
                                        data-bs-toggle="pill" href="#ver-pills-analytics"> <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#setting-analytics') }}">
                                            </use>
                                        </svg>Analytics</a></div>
                            </div>
                            <div class="col-lg-9 col-12">
                                <div class="tab-content" id="ver-pills-tabContent">
                                    <div class="tab-pane fade show active" id="ver-pills-general">
                                        <div class="row"><label class="col-md-3 form-label">Meta
                                                Title</label>
                                            <div class="col-md-9"> <input class="form-control" type="text"
                                                    placeholder="Enter meta title" required=""></div>
                                        </div>
                                        <div class="row"><label class="col-md-3 form-label">Meta
                                                Description</label>
                                            <div class="col-md-9">
                                                <div class="toolbar-box">
                                                    <div id="toolbar14"><button class="ql-bold">Bold
                                                        </button><button class="ql-italic">Italic
                                                        </button><button class="ql-underline">underline</button><button
                                                            class="ql-strike">Strike </button><button class="ql-list"
                                                            value="ordered">List
                                                        </button><button class="ql-list" value="bullet">
                                                        </button><button class="ql-indent" value="-1">
                                                        </button><button class="ql-indent" value="+1"></button><button
                                                            class="ql-link"></button></div>
                                                    <div id="editor14"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"><label class="col-md-3 form-label">Currency
                                            </label>
                                            <div class="col-md-9"> <select class="form-select">
                                                    <option value="usd" selected="">USD</option>
                                                    <option value="inr">INR</option>
                                                    <option value="gbp">GBP</option>
                                                    <option value="eur">EUR</option>
                                                </select></div>
                                        </div>
                                        <div class="row mb-3"><label class="col-md-3 form-label">Timezone</label>
                                            <div class="col-md-9"> <select class="selectpicker" data-live-search="true">
                                                    <option value="1" selected>UTC</option>
                                                    <option value="2">Abidjan</option>
                                                    <option value="3">Accra</option>
                                                    <option value="4">Bamako</option>
                                                    <option value="5">Bangui</option>
                                                    <option value="6">Banjul </option>
                                                    <option value="7">Cairo</option>
                                                    <option value="8">Ceuta</option>
                                                    <option value="9">Douala</option>
                                                    <option value="10">Juba</option>
                                                    <option value="11">Kigali</option>
                                                    <option value="12">Lome</option>
                                                    <option value="13">Tripoli</option>
                                                    <option value="14">Adak</option>
                                                    <option value="15">Salta </option>
                                                    <option value="16">Tucuman</option>
                                                    <option value="17">Aruba</option>
                                                    <option value="18">Bahia</option>
                                                    <option value="19">Boise</option>
                                                    <option value="20">Cancun </option>
                                                    <option value="21">Denver</option>
                                                    <option value="22">Grenada</option>
                                                    <option value="23">Knox</option>
                                                    <option value="24">Vevay</option>
                                                    <option value="25">Lima</option>
                                                    <option value="26">Samara</option>
                                                </select></div>
                                        </div>
                                        <div class="row"><label class="col-md-3 form-label">Min Order
                                                Amount</label>
                                            <div class="col-md-9">
                                                <div class="input-group"><span class="input-group-text" id="minOrder"><i
                                                            class="fa-solid fa-dollar-sign"></i></span><input
                                                        class="form-control" type="number" value="0"
                                                        placeholder="Enter min order amount"></div>
                                                <div class="helper-text">
                                                    <p class="fst-italic c-o-light">*Please enter the
                                                        minimum amount required for an order to be
                                                        processed.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"><label class="col-md-3 form-label">Min Order Free
                                                Shipping</label>
                                            <div class="col-md-9">
                                                <div class="input-group"><span class="input-group-text"
                                                        id="minOrderShipping"><i
                                                            class="fa-solid fa-dollar-sign"></i></span><input
                                                        class="form-control" type="number" value="55"
                                                        placeholder="Enter min order free shipping"></div>
                                                <div class="helper-text">
                                                    <p class="fst-italic c-o-light">*Please enter the
                                                        minimum order amount for free shipping.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ver-pills-activation">
                                        <div class="row">
                                            <div class="col-md-3"><label class="form-label mb-0">Multivendor</label></div>
                                            <div class="col-md-9">
                                                <div class="form-check form-switch form-check-inline"><input
                                                        class="form-check-input switch-primary check-size" type="checkbox"
                                                        role="switch" checked="">
                                                    <p><i data-feather="info"></i>*Enable or disable
                                                        external vendors access to our online store.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><label class="form-label mb-0">Enable
                                                    Wallet</label></div>
                                            <div class="col-md-9">
                                                <div class="form-check form-switch form-check-inline"><input
                                                        class="form-check-input switch-primary check-size" type="checkbox"
                                                        role="switch" checked="">
                                                    <p><i data-feather="info"></i>*Enable the use of wallet
                                                        balance for payment during checkout.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><label class="form-label mb-0">Enable
                                                    Point</label></div>
                                            <div class="col-md-9">
                                                <div class="form-check form-switch form-check-inline"><input
                                                        class="form-check-input switch-primary check-size" type="checkbox"
                                                        role="switch" checked="">
                                                    <p><i data-feather="info"></i>*Enable the use of points
                                                        for payment during checkout.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><label class="form-label mb-0">Coupon
                                                    Enable</label></div>
                                            <div class="col-md-9">
                                                <div class="form-check form-switch form-check-inline"><input
                                                        class="form-check-input switch-primary check-size" type="checkbox"
                                                        role="switch" checked="">
                                                    <p><i data-feather="info"></i>*Allow customers to use
                                                        coupons for payment at checkout.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><label class="form-label mb-0">Hide Stock
                                                    Product</label></div>
                                            <div class="col-md-9">
                                                <div class="form-check form-switch form-check-inline"><input
                                                        class="form-check-input switch-primary check-size" type="checkbox"
                                                        role="switch">
                                                    <p><i data-feather="info"></i>*Decide whether to show
                                                        product stock or not.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ver-pills-point">
                                        <div class="row"><label class="col-md-3 form-label">Signup
                                                Points</label>
                                            <div class="col-md-9">
                                                <div class="input-group"><span class="input-group-text" id="minPerOrder">
                                                        <i class="fa-regular fa-gem"></i></span><input
                                                        class="form-control" type="number" value="150"
                                                        placeholder="Enter signup points"></div>
                                                <div class="helper-text">
                                                    <p class="fst-italic c-o-light">*Provide points to new
                                                        users as a signup incentive.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"><label class="col-md-3 form-label">Min Per Order
                                                Amount</label>
                                            <div class="col-md-9">
                                                <div class="input-group"><span class="input-group-text"
                                                        id="collectPointOrder"> <i
                                                            class="fa-solid fa-dollar-sign"></i></span><input
                                                        class="form-control" type="number" value="100"
                                                        placeholder="Enter min per order amount"></div>
                                                <div class="helper-text">
                                                    <p class="fst-italic c-o-light">*Collect points when
                                                        orders meet or exceed the minimum value.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"><label class="col-md-3 form-label">Point Currency
                                                Ratio</label>
                                            <div class="col-md-9"> <input class="form-control" type="number"
                                                    value="30" placeholder="Enter point current ratio">
                                                <div class="helper-text">
                                                    <p class="fst-italic c-o-light">*Determine the
                                                        conversion factor from points to currency.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"><label class="col-md-3 form-label">Reward Per Order
                                                Point</label>
                                            <div class="col-md-9"> <input class="form-control" type="number"
                                                    value="10" placeholder="Enter reward per order point">
                                                <div class="helper-text">
                                                    <p class="fst-italic c-o-light">*Earn reward points
                                                        based on each orders value.<br>(Rewards Points =
                                                        (Total Order Amount / Min Per Order Amount) * Reward
                                                        Per Order Point)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ver-pills-seller">
                                        <div class="row">
                                            <div class="col-3"><label class="form-label mb-0">Status</label>
                                            </div>
                                            <div class="col-9">
                                                <div class="form-check form-switch form-check-inline"><input
                                                        class="form-check-input switch-primary check-size" type="checkbox"
                                                        role="switch"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><label class="form-label mb-0">Min
                                                    Withdraw Amount</label></div>
                                            <div class="col-md-9">
                                                <div class="input-group"><span class="input-group-text"
                                                        id="commissionRate"><i
                                                            class="fa-solid fa-dollar-sign"></i></span><input
                                                        class="form-control" type="number"
                                                        placeholder="Enter min withdraw amount"></div>
                                                <div class="helper-text">
                                                    <p class="fst-italic c-o-light">*Payout Minimum for
                                                        Sellers: Specify the min amount sellers can request
                                                        for withdrawal.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><label class="form-label mb-0">Commission
                                                    Rate</label></div>
                                            <div class="col-md-9">
                                                <div class="input-group"><input class="form-control" type="number"
                                                        placeholder="Enter default commission rate"><span
                                                        class="input-group-text" id="categoryCommission">%</span></div>
                                                <div class="helper-text">
                                                    <p class="fst-italic c-o-light">*Set the rate at which
                                                        admin receives a commission from seller earnings.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-lg-3 g-0">
                                            <div class="col-md-3"><label class="form-label mb-0">Category
                                                    Based Commission</label></div>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <div class="form-check form-switch form-check-inline">
                                                        <input class="form-check-input switch-primary check-size"
                                                            type="checkbox" role="switch">
                                                    </div>
                                                    <div class="helper-text">
                                                        <p class="fst-italic c-o-light">*Enable the
                                                            functionality to apply commissions based on
                                                            product categories. To configure, navigate to
                                                            the Product Category module and set the
                                                            respective commission rates.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ver-pills-refund">
                                        <div class="row">
                                            <div class="col-3"><label class="form-label mb-0">Status</label>
                                            </div>
                                            <div class="col-9">
                                                <div class="form-check form-switch form-check-inline"><input
                                                        class="form-check-input switch-primary check-size" type="checkbox"
                                                        role="switch"></div>
                                            </div>
                                        </div>
                                        <div class="row"><label class="col-md-3 form-label">Refundable
                                                Days</label>
                                            <div class="col-md-9"> <input class="form-control" type="number"
                                                    placeholder="Enter refundable days">
                                                <div class="helper-text">
                                                    <p class="fst-italic c-o-light">*Define the period
                                                        within which users can initiate refund requests for
                                                        delivered items If left blank, this functionality
                                                        will be disabled.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ver-pills-delivery">
                                        <div class="row"><label class="col-md-3 form-label">Title</label>
                                            <div class="col-md-9"> <input class="form-control" type="text"
                                                    value="Standard Delivery" placeholder="Enter title">
                                            </div>
                                        </div>
                                        <div class="row"><label class="col-md-3 form-label">Description</label>
                                            <div class="col-md-9"> <input class="form-control" type="text"
                                                    value="Approx 2 to 5 Days" placeholder="Enter description"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4 col-auto"><label class="form-label mb-0">Same
                                                    Day Delivery</label></div>
                                            <div class="col-md-9 col-sm-8 col-auto">
                                                <div class="form-check form-switch form-check-inline"><input
                                                        class="form-check-input switch-primary check-size" type="checkbox"
                                                        role="switch" checked=""></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row"><label class="col-md-3 form-label">Title</label>
                                                    <div class="col-md-9"> <input class="form-control" type="text"
                                                            value="Express Delivery" placeholder="Enter title"></div>
                                                </div>
                                                <div class="row"><label class="col-md-3 form-label">Description</label>
                                                    <div class="col-md-9"> <input class="form-control" type="text"
                                                            value="Schedule" placeholder="Enter description"></div>
                                                </div>
                                                <div class="row"><label class="col-md-3 form-label">Default
                                                        Delivery</label>
                                                    <div class="col-md-9">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div id="delivery_fields"></div>
                                                                <div class="row g-2">
                                                                    <div class="col-sm-6"><input class="form-control"
                                                                            id="baseItemName" type="text"
                                                                            name="baseItemName[]" value="Morning"
                                                                            placeholder="Enter title"></div>
                                                                    <div class="col-sm-6"><input class="form-control"
                                                                            id="basePrice" type="text"
                                                                            name="basePrice[]" value="8.00 AM - 12.00 AM"
                                                                            placeholder="Enter description">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="input-group-btn"><button
                                                                                class="btn btn-success" type="button"
                                                                                onclick="delivery_fields();"><span
                                                                                    class="fa-solid fa-plus me-1"
                                                                                    aria-hidden="true"></span>Add</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ver-pills-payment">
                                        <div class="advance-options">
                                            <ul class="nav nav-tabs border-tab" id="advance-option-tab" role="tablist">
                                                <li class="nav-item"><a class="nav-link active" id="paypal-option-tab"
                                                        data-bs-toggle="tab" href="#paypal-option">Paypal</a></li>
                                                <li class="nav-item"><a class="nav-link" id="razorpay-option-tab"
                                                        data-bs-toggle="tab" href="#razorpay-option">Razorpay</a></li>
                                                <li class="nav-item"><a class="nav-link" id="mollie-option-tab"
                                                        data-bs-toggle="tab" href="#mollie-option">Mollie</a></li>
                                                <li class="nav-item"><a class="nav-link" id="cod-option-tab"
                                                        data-bs-toggle="tab" href="#cod-option">COD</a></li>
                                                <li class="nav-item"><a class="nav-link" id="stripe-option-tab"
                                                        data-bs-toggle="tab" href="#stripe-option">Stripe</a></li>
                                            </ul>
                                            <div class="tab-content" id="advance-option-tabContent">
                                                <div class="tab-pane fade show active" id="paypal-option">
                                                    <div class="row">
                                                        <div class="col-md-3 col-auto"><label
                                                                class="form-label mb-0">Status</label></div>
                                                        <div class="col-md-9 col-auto">
                                                            <div class="form-check form-switch form-check-inline">
                                                                <input class="form-check-input switch-primary check-size"
                                                                    type="checkbox" role="switch">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3 col-auto"><label
                                                                class="form-label mb-0">Sandbox Mode</label>
                                                        </div>
                                                        <div class="col-md-9 col-auto">
                                                            <div class="form-check form-switch form-check-inline">
                                                                <input class="form-check-input switch-primary check-size"
                                                                    type="checkbox" role="switch">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row"><label class="col-md-3 form-label">Client
                                                            ID</label>
                                                        <div class="col-md-9"> <input class="form-control" type="text"
                                                                placeholder="Enter client Id">
                                                        </div>
                                                    </div>
                                                    <div class="row"><label class="col-md-3 form-label">Secret</label>
                                                        <div class="col-md-9"> <input class="form-control" type="text"
                                                                placeholder="Enter secret">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="razorpay-option">
                                                    <div class="row">
                                                        <div class="col-md-3 col-auto"><label
                                                                class="form-label mb-0">Status</label></div>
                                                        <div class="col-md-9 col-auto">
                                                            <div class="form-check form-switch form-check-inline">
                                                                <input class="form-check-input switch-primary check-size"
                                                                    type="checkbox" role="switch">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row"><label class="col-md-3 form-label">Key
                                                        </label>
                                                        <div class="col-md-9"> <input class="form-control" type="text"
                                                                placeholder="Enter key"></div>
                                                    </div>
                                                    <div class="row"><label class="col-md-3 form-label">Secret</label>
                                                        <div class="col-md-9"> <input class="form-control" type="text"
                                                                placeholder="Enter secret">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="mollie-option">
                                                    <div class="row">
                                                        <div class="col-md-3 col-auto"><label
                                                                class="form-label mb-0">Status</label></div>
                                                        <div class="col-md-9 col-auto">
                                                            <div class="form-check form-switch form-check-inline">
                                                                <input class="form-check-input switch-primary check-size"
                                                                    type="checkbox" role="switch">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row"><label class="col-md-3 form-label">Key
                                                        </label>
                                                        <div class="col-md-9"> <input class="form-control" type="text"
                                                                placeholder="Enter key"></div>
                                                    </div>
                                                    <div class="row"><label class="col-md-3 form-label">Secret</label>
                                                        <div class="col-md-9"> <input class="form-control" type="text"
                                                                placeholder="Enter secret">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="cod-option">
                                                    <div class="row">
                                                        <div class="col-md-3 col-auto"><label
                                                                class="form-label mb-0">Status</label></div>
                                                        <div class="col-md-9 col-auto">
                                                            <div class="form-check form-switch form-check-inline">
                                                                <input class="form-check-input switch-primary check-size"
                                                                    type="checkbox" role="switch">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="stripe-option">
                                                    <div class="row">
                                                        <div class="col-md-3 col-auto"><label
                                                                class="form-label mb-0">Status</label></div>
                                                        <div class="col-md-9 col-auto">
                                                            <div class="form-check form-switch form-check-inline">
                                                                <input class="form-check-input switch-primary check-size"
                                                                    type="checkbox" role="switch">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row"><label class="col-md-3 form-label">Key
                                                        </label>
                                                        <div class="col-md-9"> <input class="form-control" type="text"
                                                                placeholder="Enter key"></div>
                                                    </div>
                                                    <div class="row"><label class="col-md-3 form-label">Secret</label>
                                                        <div class="col-md-9"> <input class="form-control" type="text"
                                                                placeholder="Enter secret">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ver-pills-analytics">
                                        <div class="advance-options">
                                            <ul class="nav nav-tabs border-tab" id="analytics-option-tab" role="tablist">
                                                <li class="nav-item"><a class="nav-link active"
                                                        id="facebookPixel-option-tab" data-bs-toggle="tab"
                                                        href="#facebookPixel-option">Facebook Pixel</a></li>
                                                <li class="nav-item"><a class="nav-link" id="googleAnalysis-option-tab"
                                                        data-bs-toggle="tab" href="#googleAnalysis-option">Google
                                                        Analytics</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="analytics-option-tabContent">
                                                <div class="tab-pane fade show active" id="facebookPixel-option">
                                                    <div class="row">
                                                        <div class="col-md-3 col-auto"><label
                                                                class="form-label mb-0">Status</label></div>
                                                        <div class="col-md-9 col-auto">
                                                            <div class="form-check form-switch form-check-inline">
                                                                <input class="form-check-input switch-primary check-size"
                                                                    type="checkbox" role="switch" checked="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row"><label class="col-md-3 form-label">Pixel
                                                            Id</label>
                                                        <div class="col-md-9"> <input class="form-control" type="number"
                                                                value="5899947538419005" placeholder="Enter pixel id">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="googleAnalysis-option">
                                                    <div class="row">
                                                        <div class="col-md-3 col-auto"><label
                                                                class="form-label mb-0">Status</label></div>
                                                        <div class="col-md-9 col-auto">
                                                            <div class="form-check form-switch form-check-inline">
                                                                <input class="form-check-input switch-primary check-size"
                                                                    type="checkbox" role="switch">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row"><label class="col-md-3 form-label">Measurement
                                                            Id</label>
                                                        <div class="col-md-9"> <input class="form-control" type="text"
                                                                value="G-47FG4DEV34" placeholder="Enter measurement id">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><button class="btn btn-primary ms-auto d-block">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/bootstrap-multiselectsplitter.min.js') }}"></script>
    <script src="{{ asset('assets/js/editors/quill.js') }}"></script>
    <script src="{{ asset('assets/js/select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-setting.js') }}"></script>
@endsection
