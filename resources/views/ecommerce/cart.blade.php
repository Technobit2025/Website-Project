@extends('layouts.simple.master')

@section('title', 'Cart')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Cart</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid common-cart">
        <div class="row">
            <div class="col-xl-9 xl-100 box-col-8">
                <div class="card">
                    <div class="card-body shopping-cart-table">
                        <div class="recent-table table-responsive custom-scrollbar">
                            <table class="table" id="cart-table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th data-orderable="false"> <span class="c-o-light f-w-600">Shopping
                                                Cart <span class="badge badge-dark rounded-circle">4</span></span>
                                        </th>
                                        <th data-orderable="false"> <span class="c-o-light f-w-600"> </span>
                                        </th>
                                        <th data-orderable="false"> <span class="c-o-light f-w-600"> </span>
                                        </th>
                                        <th data-orderable="false"> <span class="c-o-light f-w-600"></span>
                                        </th>
                                        <th data-orderable="false"> <span class="c-o-light f-w-600">Clear
                                                All<svg>
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}"></use>
                                                </svg></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="inbox-data">
                                        <td></td>
                                        <td>
                                            <div class="product-names">
                                                <div class="light-product-box"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-8/shop-categories/headphone.png') }}"
                                                        alt="headphone"></div>
                                                <ul>
                                                    <li>
                                                        <h6>Headphones</h6>
                                                    </li>
                                                    <li>
                                                        <p>Boat Rockerz</p><span
                                                            class="common-dot"></span><span>Colour:<span>
                                                                Gray</span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart-price">
                                                <h5>&#36;85.00</h5><del class="c-o-light">&#36;100.00</del>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="touchspin-wrapper"> <button
                                                    class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                        class="fa fa-minus"> </i></button><input
                                                    class="input-touchspin spin-outline-primary" type="number"
                                                    value="1" min="1" max="50"><button
                                                    class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                        class="fa fa-plus"></i></button></div>
                                        </td>
                                        <td>
                                            <h4 class="txt-primary">&#36;85.00</h4>
                                        </td>
                                        <td>
                                            <div class="product-action"><a class="square-white" href="{{ route('admin.wish_list') }}"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-title="Wishlist"> <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-wishlist') }}">
                                                        </use>
                                                    </svg></a><a class="square-white trash-3" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></div>
                                        </td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td></td>
                                        <td>
                                            <div class="product-names">
                                                <div class="light-product-box"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-2/order/sub-product/24.png') }}"
                                                        alt="watch"></div>
                                                <ul>
                                                    <li>
                                                        <h6>Smart Watch</h6>
                                                    </li>
                                                    <li>
                                                        <p>Fastrack</p><span class="common-dot"></span><span>Colour:<span>
                                                                Brown</span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart-price">
                                                <h5>&#36;140.00</h5><del class="c-o-light">&#36;200.00</del>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="touchspin-wrapper"> <button
                                                    class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                        class="fa fa-minus"> </i></button><input
                                                    class="input-touchspin spin-outline-primary" type="number"
                                                    value="2" min="1" max="50"><button
                                                    class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                        class="fa fa-plus"></i></button></div>
                                        </td>
                                        <td>
                                            <h4 class="txt-primary">&#36;280.00</h4>
                                        </td>
                                        <td>
                                            <div class="product-action"><a class="square-white" href="{{ route('admin.wish_list') }}"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-title="Wishlist"> <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-wishlist') }}">
                                                        </use>
                                                    </svg></a><a class="square-white trash-3" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-title="Delete"> <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></div>
                                        </td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td></td>
                                        <td>
                                            <div class="product-names">
                                                <div class="light-product-box"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-2/order/sub-product/14.png') }}"
                                                        alt="shoes"></div>
                                                <ul>
                                                    <li>
                                                        <h6>Men's Shoes</h6>
                                                    </li>
                                                    <li>
                                                        <p>Sneaker</p><span
                                                            class="common-dot"></span><span>Colour:<span>Yellow</span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart-price">
                                                <h5>&#36;150.00</h5><del class="c-o-light">&#36;180.00</del>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="touchspin-wrapper"> <button
                                                    class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                        class="fa fa-minus"> </i></button><input
                                                    class="input-touchspin spin-outline-primary" type="number"
                                                    value="3" min="1" max="50"><button
                                                    class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                        class="fa fa-plus"></i></button></div>
                                        </td>
                                        <td>
                                            <h4 class="txt-primary">&#36;450.00</h4>
                                        </td>
                                        <td>
                                            <div class="product-action"><a class="square-white" href="{{ route('admin.wish_list') }}"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-title="Wishlist"> <svg>
                                                        <use
                                                            href="{{ asset('assets/svg/icon-sprite.svg#fill-wishlist') }}">
                                                        </use>
                                                    </svg></a><a class="square-white trash-3" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-title="Delete"> <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></div>
                                        </td>
                                    </tr>
                                    <tr class="inbox-data">
                                        <td></td>
                                        <td>
                                            <div class="product-names">
                                                <div class="light-product-box"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-2/order/sub-product/16.png') }}"
                                                        alt="purse"></div>
                                                <ul>
                                                    <li>
                                                        <h6>Handbag</h6>
                                                    </li>
                                                    <li>
                                                        <p>Fendi</p><span
                                                            class="common-dot"></span><span>Colour:<span>Pink</span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart-price">
                                                <h5>&#36;250.00</h5><del class="c-o-light">&#36;300.00</del>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="touchspin-wrapper"> <button
                                                    class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                        class="fa fa-minus"> </i></button><input
                                                    class="input-touchspin spin-outline-primary" type="number"
                                                    value="2" min="1" max="50"><button
                                                    class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                        class="fa fa-plus"></i></button></div>
                                        </td>
                                        <td>
                                            <h4 class="txt-primary">&#36;500.00</h4>
                                        </td>
                                        <td>
                                            <div class="product-action"><a class="square-white" href="{{ route('admin.wish_list') }}"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-title="Wishlist"> <svg>
                                                        <use
                                                            href="{{ asset('assets/svg/icon-sprite.svg#fill-wishlist') }}">
                                                        </use>
                                                    </svg></a><a class="square-white trash-3" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-title="Delete"> <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-100 box-col-4e">
                <div class="row">
                    <div class="col-12 order-xl-0 order-1 order-xxl-2">
                        <div class="card">
                            <div class="card-header">
                                <div class="header-top">
                                    <h5>Summary</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="cart-summary">
                                    <li>
                                        <h6>Subtotal </h6><span>$1315.00</span>
                                    </li>
                                    <li>
                                        <h6>Coupon Discount</h6><span>(-) 0.00</span>
                                    </li>
                                    <li>
                                        <h6>Shipping</h6><span class="txt-primary">Free</span>
                                    </li>
                                </ul>
                            </div>
                            <ul class="product-total">
                                <li>
                                    <h4>Total</h4>
                                    <h4>$1315.00</h4>
                                </li>
                                <li>
                                    <ul class="cart-buttons">
                                        <li><a class="btn btn-primary" href="{{ route('admin.checkout') }}">Proceed to
                                                Checkout</a></li>
                                        <li> <a class="btn btn-hover-effect" href="{{ route('admin.products_grid') }}"><span><i
                                                        class="fa-solid fa-caret-left fa-lg"></i></span>Return
                                                to Shopping </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 order-0 order-xxl-1">
                        <div class="card">
                            <div class="card-body">
                                <div class="coupon-cart"><span class="pb-1">Have a Coupon&quest;</span>
                                    <div class="input-group"><input class="form-control" type="text"
                                            placeholder="Enter Coupon Code Here..." aria-label="Recipient's username"
                                            aria-describedby="button-addon2"><button class="btn btn-primary"
                                            id="button-addon2" type="button">Apply</button></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Container-fluid Ends-->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin_2/custom_touchspin.js') }}"></script>
    <script src="{{ asset('assets/js/trash.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
