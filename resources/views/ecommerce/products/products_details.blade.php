@extends('layouts.simple.master')

@section('title', 'products Details')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Product Details</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Product Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div>
            <div class="row product-page-main p-0">
                <div class="col-xxl-4 col-md-6 box-col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="product-slider owl-carousel owl-theme" id="sync1">
                                <div class="item">
                                    <figure class="zoom" onmousemove="zoom(event)"
                                        style="background-image: url({{ asset('assets/images/ecommerce/01.jpg') }})">
                                        <img class="img-fluid" src="{{ asset('assets/images/ecommerce/01.jpg') }}"
                                            alt="user">
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure class="zoom" onmousemove="zoom(event)"
                                        style="background-image: url({{ asset('assets/images/ecommerce/02.jpg') }})">
                                        <img class="img-fluid" src="{{ asset('assets/images/ecommerce/02.jpg') }}"
                                            alt="user">
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure class="zoom" onmousemove="zoom(event)"
                                        style="background-image: url({{ asset('assets/images/ecommerce/03.jpg') }})">
                                        <img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                                            alt="user">
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure class="zoom" onmousemove="zoom(event)"
                                        style="background-image: url({{ asset('assets/images/ecommerce/04.jpg') }})">
                                        <img class="img-fluid" src="{{ asset('assets/images/ecommerce/04.jpg') }}"
                                            alt="user">
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure class="zoom" onmousemove="zoom(event)"
                                        style="background-image: url({{ asset('assets/images/ecommerce/05.jpg') }})">
                                        <img class="img-fluid" src="{{ asset('assets/images/ecommerce/05.jpg') }}"
                                            alt="user">
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure class="zoom" onmousemove="zoom(event)"
                                        style="background-image: url({{ asset('assets/images/ecommerce/06.jpg') }})">
                                        <img class="img-fluid" src="{{ asset('assets/images/ecommerce/06.jpg') }}"
                                            alt="user">
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure class="zoom" onmousemove="zoom(event)"
                                        style="background-image: url({{ asset('assets/images/ecommerce/07.jpg') }})">
                                        <img class="img-fluid" src="{{ asset('assets/images/ecommerce/07.jpg') }}"
                                            alt="user">
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure class="zoom" onmousemove="zoom(event)"
                                        style="background-image: url({{ asset('assets/images/ecommerce/08.jpg') }})">
                                        <img class="img-fluid" src="{{ asset('assets/images/ecommerce/08.jpg') }}"
                                            alt="user">
                                    </figure>
                                </div>
                            </div>
                            <div class="owl-carousel owl-theme" id="sync2">
                                <div class="item"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/01.jpg') }}" alt="user"></div>
                                <div class="item"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt="user"></div>
                                <div class="item"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt="user"></div>
                                <div class="item"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/04.jpg') }}" alt="user"></div>
                                <div class="item"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/05.jpg') }}" alt="user"></div>
                                <div class="item"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/06.jpg') }}" alt="user"></div>
                                <div class="item"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/07.jpg') }}" alt="user"></div>
                                <div class="item"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/08.jpg') }}" alt="user"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 box-col-12 order-xxl-0 order-1 box-ord-1">
                    <div class="card">
                        <div class="card-body">
                            <div class="product-page-details">
                                <h3>Women's Top</h3>
                            </div>
                            <div class="product-price">$350.00 <del>$500.00 </del></div>
                            <ul class="product-color">
                                <li class="bg-primary"></li>
                                <li class="bg-secondary"></li>
                                <li class="bg-success"></li>
                                <li class="bg-info"></li>
                                <li class="bg-warning"></li>
                            </ul>
                            <hr>
                            <p>Rock paper scissors various dots half sleeves girl's regular fit t-shirt i
                                100% cotton t-shirt with half sleeve round neck i regular wear solid kids
                                tees and black sleeve.</p>
                            <div>
                                <table class="product-page-width">
                                    <tbody>
                                        <tr>
                                            <td> <b>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                                            <td>Pixelstrap</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Availability &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                            </td>
                                            <td class="txt-success f-w-700">In Stock</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Seller &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                                            <td>Hector Magana</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Material &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                                            <td>Cotton</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Fit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                                            <td>Regular Fit</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="row g-sm-3 g-1">
                                <div class="col-sm-4">
                                    <h6 class="product-title">Share</h6>
                                </div>
                                <div class="col-sm-8">
                                    <div class="product-icon">
                                        <ul class="product-social">
                                            <li class="d-inline-block"><a href="https://www.facebook.com/"
                                                    target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li class="d-inline-block"><a href="https://in.pinterest.com/"
                                                    target="_blank"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                            <li class="d-inline-block"><a href="https://twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-x-twitter"></i></a></li>
                                            <li class="d-inline-block"><a href="https://www.instagram.com/"
                                                    target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li class="d-inline-block"><a href="https://rss.app/" target="_blank"><i
                                                        class="fa-solid fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row g-sm-3 g-1">
                                <div class="col-sm-4">
                                    <h6 class="product-title">Quantity</h6>
                                </div>
                                <div class="col-sm-8">
                                    <div class="touchspin-wrapper"> <button
                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                class="fa fa-minus"> </i></button><input
                                            class="input-touchspin spin-outline-primary" type="number" value="1"
                                            readonly><button class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                class="fa fa-plus"></i></button></div>
                                </div>
                            </div>
                            <hr>
                            <div class="row g-sm-3 g-1">
                                <div class="col-sm-4">
                                    <h6 class="product-title">Rate Now</h6>
                                </div>
                                <div class="col-sm-8">
                                    <div class="main-star-rating common-f-start">
                                        <div class="common-flex star-box"><i class="fa-solid fa-star active"></i><i
                                                class="fa-solid fa-star active"></i><i
                                                class="fa-solid fa-star active"></i><i
                                                class="fa-solid fa-star active"></i><i class="fa-solid fa-star"></i></div>
                                        <span>(250 review)</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="m-t-15 btn-showcase"><a class="btn btn-primary btn-hover-effect"
                                    href="{{ route('admin.cart') }}"> <i class="fa-solid fa-cart-shopping me-1"></i>Add To
                                    Cart</a><a class="btn btn-danger btn-hover-effect" href="{{ route('admin.wish_list') }}"> <i
                                        class="fa-solid fa-heart me-1"></i>Add To
                                    WishList</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 box-col-6">
                    <div class="card">
                        <div class="card-body"><!-- side-bar block start-->
                            <div class="filter-block">
                                <h5>Categories</h5>
                                <ul>
                                    <li>Bags</li>
                                    <li>Footwear</li>
                                    <li>Watches</li>
                                    <li>Jewelry </li>
                                    <li>Perfume</li>
                                    <li>Swimwear</li>
                                    <li>Pets</li>
                                    <li>Books </li>
                                    <li>Electronic</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="collection-filter-block">
                                <ul class="pro-services">
                                    <li>
                                        <div class="d-flex"><i data-feather="truck"></i>
                                            <div class="flex-grow-1">
                                                <h6>Free Shipping </h6><span>Free shipping world wide</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex"><i data-feather="clock"></i>
                                            <div class="flex-grow-1">
                                                <h6>24 X 7 Service </h6><span>Online service for new
                                                    customer</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex"><i data-feather="gift"></i>
                                            <div class="flex-grow-1">
                                                <h6>Festival Offer </h6><span>New online special
                                                    festival</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex"><i data-feather="credit-card"></i>
                                            <div class="flex-grow-1">
                                                <h6>Online Payment </h6><span>Country to popular belief.
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- side-bar block end-->
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row product-page-main">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs border-tab nav-primary mb-0" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                href="#top-home" role="tab" aria-controls="top-home"
                                aria-selected="false">Description</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                                href="#top-contact" role="tab" aria-controls="top-contact"
                                aria-selected="true">Additional Info</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="brand-top-tab" data-bs-toggle="tab"
                                href="#top-brand" role="tab" aria-controls="top-brand" aria-selected="true">Write
                                Review</a>
                            <div class="material-border"></div>
                        </li>
                    </ul>
                    <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade active show" id="top-home" role="tabpanel"
                            aria-labelledby="top-home-tab">
                            <div class="info-part">
                                <p class="c-o-light">The model is wearing a white blouse from our stylist's
                                    collection, see the image for a mock-up of what the actual blouse would
                                    look like.it has text written on it in a black cursive language which
                                    looks great on a white color.</p>
                            </div>
                            <div class="info-part">
                                <h6>Fabric:</h6>
                                <p class="c-o-light">Art silk is manufactured by synthetic fibres like
                                    rayon. It's light in weight and is soft on the skin for comfort in
                                    summers.Art silk is manufactured by synthetic fibres like rayon. It's
                                    light in weight and is soft on the skin for comfort in summers.</p>
                            </div>
                            <div class="info-part">
                                <h6>Size & Fit:</h6>
                                <p class="c-o-light">The model (height 5'8") is wearing a size S</p>
                            </div>
                            <div class="info-part">
                                <h6>Material & Care:</h6>
                                <p class="c-o-light">Top fabric: pure cotton</p>
                                <p class="c-o-light">Bottom fabric: pure cotton</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                            <div class="info-part">
                                <p class="c-o-light">The model is wearing a white blouse from our stylist's
                                    collection, see the image for a mock-up of what the actual blouse would
                                    look like.it has text written on it in a black cursive language which
                                    looks great on a white color.</p>
                            </div>
                            <div class="product-info-table table-responsive custom-scrollbar">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Material</th>
                                            <th scope="col">Colors</th>
                                            <th scope="col">Size Range</th>
                                            <th scope="col">Fit</th>
                                            <th scope="col">NeckLine</th>
                                            <th scope="col">Seam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Polyester</th>
                                            <td>Yellow</td>
                                            <td>XS</td>
                                            <td>Slim fit</td>
                                            <td>V-neck</td>
                                            <td>French</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Blend</th>
                                            <td>Black</td>
                                            <td>XL</td>
                                            <td>Regular fit</td>
                                            <td>Scoop neck</td>
                                            <td>Flat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cotton</th>
                                            <td>Blue</td>
                                            <td>S </td>
                                            <td>Relaxed</td>
                                            <td>Mandarin collar</td>
                                            <td>Exposed</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Polyester</th>
                                            <td>White</td>
                                            <td>M</td>
                                            <td>Slim Fit</td>
                                            <td>Spread collar</td>
                                            <td>Topstitching</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-brand" role="tabpanel" aria-labelledby="brand-top-tab">
                            <div class="review-box">
                                <div class="row g-4">
                                    <div class="col-xl-6">
                                        <div class="product-rating-box">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="common-f-start mb-3">
                                                        <h5 class="main-product-rating">4.5<i
                                                                class="fa-solid fa-star"></i></h5>
                                                        <h6 class="ms-3 c-o-light">5 Overall Rating</h6>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <div class="rating-list">
                                                                    <h6>5<i class="fa-solid fa-star"></i>
                                                                    </h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            style="width: 85%"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="rating-list">
                                                                    <h6>4<i class="fa-solid fa-star"></i>
                                                                    </h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            style="width: 50%"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="rating-list">
                                                                    <h6>3<i class="fa-solid fa-star"></i>
                                                                    </h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            style="width: 43%"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="rating-list">
                                                                    <h6>2<i class="fa-solid fa-star"></i>
                                                                    </h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            style="width: 32%"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="rating-list">
                                                                    <h6>1 <i class="fa-solid fa-star"></i>
                                                                    </h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            style="width: 18%"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="review-title-2">
                                                    <h5>Review this product</h5>
                                                    <p>Let other customers know what you think</p><a
                                                        class="btn btn-primary" href="#!" data-bs-toggle="modal"
                                                        data-bs-target="#write-review-modal">Write a
                                                        Review</a>
                                                    <div class="modal fade" id="write-review-modal" tabindex="-1"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content category-popup custom-input">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Write a Review
                                                                    </h5><button class="btn-close" type="button"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="product-review-rating">
                                                                        <span>Rating</span>
                                                                        <div class="product-rating main-star-rating">
                                                                            <div class="common-flex star-box">
                                                                                <i class="fa-solid fa-star active"></i><i
                                                                                    class="fa-solid fa-star active"></i><i
                                                                                    class="fa-solid fa-star active"></i><i
                                                                                    class="fa-solid fa-star active"></i><i
                                                                                    class="fa-solid fa-star"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <form class="row g-3 needs-validation" novalidate="">
                                                                        <div class="col-md-12"><label class="form-label"
                                                                                for="validationCustom01">Name</label><input
                                                                                class="form-control"
                                                                                id="validationCustom01" type="text"
                                                                                placeholder="Enter your name"
                                                                                required="">
                                                                            <div class="invalid-feedback">
                                                                                Please enter a name.</div>
                                                                            <div class="valid-feedback">
                                                                                Looks good!</div>
                                                                        </div>
                                                                        <div class="col-12"> <label class="form-label"
                                                                                for="validationTextarea">Your
                                                                                Review</label>
                                                                            <textarea class="form-control" id="validationTextarea" placeholder="Enter your review" required=""></textarea>
                                                                            <div class="invalid-feedback">
                                                                                Please enter a review in the
                                                                                textarea.</div>
                                                                        </div>
                                                                        <div class="col-12"><button
                                                                                class="btn btn-primary"
                                                                                type="submit">Submit
                                                                                Review</button></div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="review-people">
                                            <ul class="review-list custom-scrollbar">
                                                <li>
                                                    <div class="people-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                            alt="">
                                                        <div class="people-comment">
                                                            <div class="people-name">
                                                                <div><a class="name" href="#!">Scarlet</a><span
                                                                        class="c-o-light">(Smart
                                                                        Watch)</span></div>
                                                                <div class="product-rating">
                                                                    <div class="common-flex"><i
                                                                            class="fa-solid fa-star fill"></i><i
                                                                            class="fa-solid fa-star fill"></i><i
                                                                            class="fa-solid fa-star fill"></i><i
                                                                            class="fa-solid fa-star fill"></i><i
                                                                            class="fa-solid fa-star fill"></i>
                                                                    </div>
                                                                </div>
                                                                <h6 class="text-content">03 Feb, 2024</h6>
                                                            </div>
                                                            <div class="reply">
                                                                <p>I adore this outfit! The print is
                                                                    stunning, and the fabric is incredibly
                                                                    smooth and flowing. It's ideal for a
                                                                    night out or summer weddings. Just be
                                                                    mindful that the straps are little
                                                                    adjustable, so you may need fashion tape
                                                                    for piece of mind if you're busty.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="people-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                            alt="">
                                                        <div class="people-comment">
                                                            <div class="people-name">
                                                                <div><a class="name" href="#!">Arya</a><span
                                                                        class="c-o-light">(Arm Chair)</span>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div class="common-flex"><i
                                                                            class="fa-solid fa-star fill"></i><i
                                                                            class="fa-solid fa-star fill"></i><i
                                                                            class="fa-solid fa-star fill"></i><i
                                                                            class="fa-solid fa-star fill"></i><i
                                                                            class="fa-solid fa-star"></i>
                                                                    </div>
                                                                </div>
                                                                <h6 class="text-content">24 May, 2024</h6>
                                                            </div>
                                                            <div class="reply">
                                                                <p>This tee is a fantastic basic. For warmer
                                                                    days, the lightweight, breathable linen
                                                                    is ideal. You might want to go down if
                                                                    you like a more tailored look because
                                                                    the fit is a little boxy. All in all,
                                                                    this is a versatile shirt that I will
                                                                    wear often.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="people-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                            alt="">
                                                        <div class="people-comment">
                                                            <div class="people-name">
                                                                <div><a class="name" href="#!">Kyro</a><span
                                                                        class="c-o-light">(Study
                                                                        lamp)</span></div>
                                                                <div class="product-rating">
                                                                    <div class="common-flex"><i
                                                                            class="fa-solid fa-star fill"></i><i
                                                                            class="fa-solid fa-star fill"></i><i
                                                                            class="fa-solid fa-star fill"></i><i
                                                                            class="fa-solid fa-star"></i><i
                                                                            class="fa-solid fa-star"></i>
                                                                    </div>
                                                                </div>
                                                                <h6 class="text-content">30 Jun, 2024</h6>
                                                            </div>
                                                            <div class="reply">
                                                                <p>What a letdown this jacket is. In person,
                                                                    the wash is more rigid and dark than it
                                                                    appears in the photo, which is retro and
                                                                    stylish. I got a medium, but it seems
                                                                    more like a small. The size is also
                                                                    incorrect. Returning it in
                                                                    disappointment.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="people-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                            alt="">
                                                        <div class="people-comment">
                                                            <div class="people-name">
                                                                <div><a class="name" href="#!">Izabella</a><span
                                                                        class="c-o-light">(Beauty
                                                                        Blender)</span></div>
                                                                <div class="product-rating">
                                                                    <div class="common-flex"><i
                                                                            class="fa-solid fa-star fill"></i><i
                                                                            class="fa-solid fa-star fill"></i><i
                                                                            class="fa-solid fa-star fill"></i><i
                                                                            class="fa-solid fa-star fill"></i><i
                                                                            class="fa-solid fa-star"></i>
                                                                    </div>
                                                                </div>
                                                                <h6 class="text-content">18 Dec, 2024</h6>
                                                            </div>
                                                            <div class="reply">
                                                                <p>There is nothing but luxury about this
                                                                    jumper. It feels of excellent quality,
                                                                    and the cashmere is wonderfully warm and
                                                                    cuddly. It's a classic piece with a long
                                                                    lifespan. incredibly elegant and comfy,
                                                                    ideal for chilly days.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/touchspin_2/custom_touchspin.js') }}"></script>
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/ecommerce.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/custom_zoom_magnifier.js') }}"></script>
@endsection
