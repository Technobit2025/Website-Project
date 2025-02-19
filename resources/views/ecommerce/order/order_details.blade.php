@extends('layouts.simple.master')

@section('title', 'Order Details')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Order Details</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active"> Order Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-9 col-xl-8 box-col-8e">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Order Status</h5>
                            </div>
                            <div class="card-body track-order-details">
                                <h6 id="order-status-timeline">
                                    <div class="status-bar progress step-three"></div>
                                    <div class="main-status-line">
                                        <ul>
                                            <li>
                                                <div class="order-process active"><span>1</span></div>
                                                <h6>Order Received</h6>
                                            </li>
                                            <li>
                                                <div class="order-process active"><span>2</span></div>
                                                <h6>Processing</h6>
                                            </li>
                                            <li>
                                                <div class="order-process active"><span>3</span></div>
                                                <h6>Order Packed</h6>
                                            </li>
                                            <li>
                                                <div class="order-process"><span>4</span></div>
                                                <h6>Shipped</h6>
                                            </li>
                                            <li>
                                                <div class="order-process"><span>5</span></div>
                                                <h6>Delivered</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Order Number: #1801</h5>
                                </div>
                            </div>
                            <div class="card-body order-details-product pt-0">
                                <div class="table-responsive custom-scrollbar">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Image</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/headphone.png') }}"
                                                            alt="headphone"></div>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <h6> <a href="{{ route('admin.products_details') }}">Lightweight
                                                                    Headphones</a></h6>
                                                        </li>
                                                        <li>
                                                            <p>Boat Rockerz</p><span
                                                                class="common-dot"></span><span>Colour:<span>
                                                                    Gray</span></span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>$85.00</td>
                                                <td>1</td>
                                                <td>$85.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/24.png') }}"
                                                            alt="watch"></div>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <h6> <a href="{{ route('admin.products_details') }}">Smart
                                                                    Watch</a></h6>
                                                        </li>
                                                        <li>
                                                            <p>Fastrack</p><span
                                                                class="common-dot"></span><span>Colour:<span>
                                                                    Brown</span></span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>$140.00</td>
                                                <td>1</td>
                                                <td>$140.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/16.png') }}"
                                                            alt="purse"></div>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <h6> <a href="{{ route('admin.products_details') }}">Leather
                                                                    Handbag</a></h6>
                                                        </li>
                                                        <li>
                                                            <p>Fendi</p><span
                                                                class="common-dot"></span><span>Colour:<span>Pink</span></span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>$250.00</td>
                                                <td>1</td>
                                                <td>$250.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/14.png') }}"
                                                            alt="shoes"></div>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <h6> <a href="{{ route('admin.products_details') }}">Men's
                                                                    Shoes</a></h6>
                                                        </li>
                                                        <li>
                                                            <p>Sneaker</p><span
                                                                class="common-dot"></span><span>Colour:<span>Yellow</span></span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>$150.00</td>
                                                <td>2</td>
                                                <td>$300.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 box-col-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top summary-header">
                                    <h5>Summary</h5>
                                    <div class="card-header-right-icon"><a class="btn btn-primary" href="{{ route('admin.invoice_2') }}"
                                            target="_blank"><i class="fa-regular fa-file-lines pe-2 f-14"></i>Invoice</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <ul class="tracking-total">
                                    <li>
                                        <h6>Subtotal </h6><span> $775.00</span>
                                    </li>
                                    <li>
                                        <h6>Coupon Discount</h6><span>(-)0.00</span>
                                    </li>
                                    <li>
                                        <h6>Shipping </h6><span class="txt-primary">Free</span>
                                    </li>
                                    <li>
                                        <h6>Total</h6><span>$775.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Customer Details</h5>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <ul class="customer-details">
                                    <li>
                                        <h6>Name </h6><span>Lucy Fisher</span>
                                    </li>
                                    <li>
                                        <h6>Email Address:</h6><span>lucy.fisher@example.com</span>
                                    </li>
                                    <li>
                                        <h6>Billing Address:</h6><span>12B, Pine Valley Road, Seattle,
                                            Washington, United States 98101</span>
                                    </li>
                                    <li>
                                        <h6>Shipping Address:</h6><span>12B, Pine Valley Road, Seattle,
                                            Washington, United States 98101</span>
                                    </li>
                                    <li>
                                        <h6>Delivery Slot:</h6><span>Standard Delivery&verbar;Approx 5 to 7
                                            Days</span>
                                    </li>
                                    <li>
                                        <h6>Payment Mode:</h6><span>COD</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12"> </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
@endsection
