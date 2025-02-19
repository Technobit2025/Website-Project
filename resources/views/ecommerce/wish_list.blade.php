@extends('layouts.simple.master')

@section('title', 'Wishlist')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Wishlist</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Wishlist</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Wishlist <span class="c-o-light">&lpar;11&rpar;</span></h5>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row g-3 m-b-20">
                    <div class="col-xxl-4 col-sm-6 box-col-6 inbox-data">
                        <div class="card mb-0 h-100">
                            <div class="wishlist-box card-body">
                                <div>
                                    <div class="wishlist-image"><a href="{{ route('admin.products_grid') }}"><img
                                                src="{{ asset('assets/images/dashboard-2/order/sub-product/16.png') }}"
                                                alt="purse"></a>
                                        <div class="wishlist-close-btn"><button class="btn trash-3"> <i
                                                    class="fa-solid fa-xmark"></i></button></div>
                                    </div>
                                    <div class="wishlist-footer"><span class="brand-name">Fendi</span><a
                                            href="{{ route('admin.products_grid') }}">
                                            <h6>2008 Leather Bag Premium</h6>
                                        </a><span class="txt-success mt-1">In Stock </span>
                                        <h6 class="price">$250.42<del>$300.00</del></h6><a
                                            class="btn bg-primary btn-hover-effect" href="{{ route('admin.cart') }}"> <i
                                                class="fa-solid fa-cart-shopping me-2"></i>Move to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-sm-6 box-col-6 inbox-data">
                        <div class="card mb-0 h-100">
                            <div class="wishlist-box card-body">
                                <div>
                                    <div class="wishlist-image"><a href="{{ route('admin.products_grid') }}"><img
                                                src="{{ asset('assets/images/dashboard-2/order/sub-product/24.png') }}"
                                                alt="watch"></a>
                                        <div class="wishlist-close-btn"><button class="btn trash-3"> <i
                                                    class="fa-solid fa-xmark"></i></button></div>
                                    </div>
                                    <div class="wishlist-footer"><span class="brand-name">Fastrack</span><a
                                            href="{{ route('admin.products_grid') }}">
                                            <h6>Chronosphere Elite Watch</h6>
                                        </a><span class="txt-success mt-1">In Stock </span>
                                        <h6 class="price">$140.00<del>$200.00</del></h6><a
                                            class="btn bg-primary btn-hover-effect" href="{{ route('admin.cart') }}"> <i
                                                class="fa-solid fa-cart-shopping me-2"></i>Move to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-sm-6 box-col-6 inbox-data">
                        <div class="card mb-0 h-100">
                            <div class="wishlist-box card-body">
                                <div>
                                    <div class="wishlist-image"><a href="{{ route('admin.products_grid') }}"><img
                                                src="{{ asset('assets/images/dashboard-2/order/sub-product/14.png') }}"
                                                alt="shoes"></a>
                                        <div class="wishlist-close-btn"><button class="btn trash-3"> <i
                                                    class="fa-solid fa-xmark"></i></button></div>
                                    </div>
                                    <div class="wishlist-footer"><span class="brand-name">Sneaker</span><a
                                            href="{{ route('admin.products_grid') }}">
                                            <h6>Men's Shoes for Running</h6>
                                        </a><span class="txt-success mt-1">In Stock </span>
                                        <h6 class="price">$150.42<del>$180.00</del></h6><a
                                            class="btn bg-primary btn-hover-effect" href="{{ route('admin.cart') }}"> <i
                                                class="fa-solid fa-cart-shopping me-2"></i>Move to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-sm-6 box-col-6 inbox-data">
                        <div class="card mb-0 h-100">
                            <div class="wishlist-box card-body h-100">
                                <div>
                                    <div class="wishlist-image"><a href="{{ route('admin.products_grid') }}"><img
                                                src="{{ asset('assets/images/dashboard-2/order/sub-product/26.png') }}"
                                                alt="lamp"></a>
                                        <div class="wishlist-close-btn"><button class="btn trash-3"> <i
                                                    class="fa-solid fa-xmark"></i></button></div>
                                    </div>
                                    <div class="wishlist-footer"><span class="brand-name">Luminara</span><a
                                            href="{{ route('admin.products_grid') }}">
                                            <h6>Golden Light Wall Lamps</h6>
                                        </a><span class="txt-danger mt-1">Out of Stock</span>
                                        <h6 class="price">$99.42<del>$120.00</del></h6>
                                        <div class="common-flex"><a class="btn bg-primary btn-hover-effect disabled"
                                                href="{{ route('admin.cart') }}"><i class="fa-solid fa-cart-shopping me-2"></i>Move to
                                                Cart</a><a class="btn bg-danger btn-hover-effect" href="#!"><i
                                                    class="fa-solid fa-bell me-2"></i>Notify Me
                                                When Available</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-sm-6 box-col-6 inbox-data">
                        <div class="card mb-0 h-100">
                            <div class="wishlist-box card-body h-100">
                                <div>
                                    <div class="wishlist-image"><a href="{{ route('admin.products_grid') }}"><img
                                                src="{{ asset('assets/images/dashboard-8/product-categories/headphone.png') }}"
                                                alt="headphone"></a>
                                        <div class="wishlist-close-btn"><button class="btn trash-3"> <i
                                                    class="fa-solid fa-xmark"></i></button></div>
                                    </div>
                                    <div class="wishlist-footer"><span class="brand-name">Boat</span><a
                                            href="{{ route('admin.products_grid') }}">
                                            <h6>Wireless Headphone with Mic</h6>
                                        </a><span class="txt-danger mt-1">Out of Stock </span>
                                        <h6 class="price">$1800.42<del>$2000.00</del></h6>
                                        <div class="common-flex"><a class="btn bg-primary btn-hover-effect disabled"
                                                href="{{ route('admin.cart') }}"><i class="fa-solid fa-cart-shopping me-2"></i>Move to
                                                Cart</a><a class="btn bg-danger btn-hover-effect" href="#!"><i
                                                    class="fa-solid fa-bell me-2"></i>Notify Me
                                                When Available</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-sm-6 box-col-6 inbox-data">
                        <div class="card mb-0 h-100">
                            <div class="wishlist-box card-body h-100">
                                <div>
                                    <div class="wishlist-image"><a href="{{ route('admin.products_grid') }}"><img
                                                src="{{ asset('assets/images/dashboard-8/product-categories/phone.png') }}"
                                                alt="phone"></a>
                                        <div class="wishlist-close-btn"><button class="btn trash-3"> <i
                                                    class="fa-solid fa-xmark"></i></button></div>
                                    </div>
                                    <div class="wishlist-footer"><span class="brand-name">Apple</span><a
                                            href="{{ route('admin.products_grid') }}">
                                            <h6>Iphone 13 Pro(128GB) - LightBlue</h6>
                                        </a><span class="txt-success mt-1">In Stock </span>
                                        <h6 class="price">$9799.30<del>$98727.00</del></h6><a
                                            class="btn bg-primary btn-hover-effect" href="{{ route('admin.cart') }}"> <i
                                                class="fa-solid fa-cart-shopping me-2"></i>Move to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-sm-6 box-col-6 inbox-data">
                        <div class="card mb-0 h-100">
                            <div class="wishlist-box card-body h-100">
                                <div>
                                    <div class="wishlist-image"><a href="{{ route('admin.products_grid') }}"><img
                                                src="{{ asset('assets/images/dashboard-8/product-categories/watch.png') }}"
                                                alt="watch"></a>
                                        <div class="wishlist-close-btn"><button class="btn trash-3"> <i
                                                    class="fa-solid fa-xmark"></i></button></div>
                                    </div>
                                    <div class="wishlist-footer"><span class="brand-name">Apple</span><a
                                            href="{{ route('admin.products_grid') }}">
                                            <h6>Apple Smart Watches-i2</h6>
                                        </a><span class="txt-danger mt-1">Out Of Stock </span>
                                        <h6 class="price">$785.30<del>$890.00</del></h6>
                                        <div class="common-flex"><a class="btn bg-primary btn-hover-effect disabled"
                                                href="{{ route('admin.cart') }}"><i class="fa-solid fa-cart-shopping me-2"></i>Move to
                                                Cart</a><a class="btn bg-danger btn-hover-effect" href="#!"><i
                                                    class="fa-solid fa-bell me-2"></i>Notify Me
                                                When Available</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-sm-6 box-col-6 inbox-data">
                        <div class="card mb-0 h-100">
                            <div class="wishlist-box card-body h-100">
                                <div>
                                    <div class="wishlist-image"><a href="{{ route('admin.products_grid') }}"><img
                                                src="{{ asset('assets/images/dashboard-8/product-categories/dvd.png') }}"
                                                alt="DVD"></a>
                                        <div class="wishlist-close-btn"><button class="btn trash-3"> <i
                                                    class="fa-solid fa-xmark"></i></button></div>
                                    </div>
                                    <div class="wishlist-footer"><span class="brand-name">VistaPlay</span><a
                                            href="{{ route('admin.products_grid') }}">
                                            <h6>DVD Player Amplifier-iB33</h6>
                                        </a><span class="txt-success mt-1">In Stock </span>
                                        <h6 class="price">$448.00<del>$500.00</del></h6><a
                                            class="btn bg-primary btn-hover-effect" href="{{ route('admin.cart') }}"> <i
                                                class="fa-solid fa-cart-shopping me-2"></i>Move to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-sm-6 box-col-6 inbox-data">
                        <div class="card mb-0 h-100">
                            <div class="wishlist-box card-body h-100">
                                <div>
                                    <div class="wishlist-image"><a href="{{ route('admin.products_grid') }}"><img
                                                src="{{ asset('assets/images/dashboard-8/product-categories/mouse.png') }}"
                                                alt="mouse"></a>
                                        <div class="wishlist-close-btn"><button class="btn trash-3"> <i
                                                    class="fa-solid fa-xmark"></i></button></div>
                                    </div>
                                    <div class="wishlist-footer"><span class="brand-name">SwiftClick</span><a
                                            href="{{ route('admin.products_grid') }}">
                                            <h6>Swiftclick Wireless Mouse </h6>
                                        </a><span class="txt-success mt-1">In Stock </span>
                                        <h6 class="price">$150.00<del>$210.00</del></h6><a
                                            class="btn bg-primary btn-hover-effect" href="{{ route('admin.cart') }}"> <i
                                                class="fa-solid fa-cart-shopping me-2"></i>Move to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-sm-6 box-col-6 inbox-data">
                        <div class="card mb-0 h-100">
                            <div class="wishlist-box card-body h-100">
                                <div>
                                    <div class="wishlist-image"><a href="{{ route('admin.products_grid') }}"><img
                                                src="{{ asset('assets/images/product/category/5.png') }}"
                                                alt="camera"></a>
                                        <div class="wishlist-close-btn"><button class="btn trash-3"> <i
                                                    class="fa-solid fa-xmark"></i></button></div>
                                    </div>
                                    <div class="wishlist-footer"><span class="brand-name">Panasonic</span><a
                                            href="{{ route('admin.products_grid') }}">
                                            <h6>Lens Camera 12-40mm(Black)</h6>
                                        </a><span class="txt-success mt-1">In Stock </span>
                                        <h6 class="price">$800.00<del>$900.00</del></h6><a
                                            class="btn bg-primary btn-hover-effect" href="{{ route('admin.cart') }}"> <i
                                                class="fa-solid fa-cart-shopping me-2"></i>Move to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-sm-6 box-col-6 inbox-data">
                        <div class="card mb-0 h-100">
                            <div class="wishlist-box card-body h-100">
                                <div>
                                    <div class="wishlist-image"><a href="{{ route('admin.products_grid') }}"><img
                                                src="{{ asset('assets/images/product/category/4.png') }}"
                                                alt="sleeper"></a>
                                        <div class="wishlist-close-btn"><button class="btn trash-3"> <i
                                                    class="fa-solid fa-xmark"></i></button></div>
                                    </div>
                                    <div class="wishlist-footer"><span class="brand-name">Ortho</span><a
                                            href="{{ route('admin.products_grid') }}">
                                            <h6>Doctor Ortho Slippers for M/F</h6>
                                        </a><span class="txt-success mt-1">In Stock </span>
                                        <h6 class="price">$180.00<del>$200.00</del></h6><a
                                            class="btn bg-primary btn-hover-effect" href="{{ route('admin.cart') }}"> <i
                                                class="fa-solid fa-cart-shopping me-2"></i>Move to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Container-fluid Ends-->
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/trash.js') }}"></script>
@endsection
