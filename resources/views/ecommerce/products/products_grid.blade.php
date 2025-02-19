@extends('layouts.simple.master')

@section('title', 'Product Grid')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/range-slider.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Product Grid</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Product Grid</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid product-wrapper">
        <div class="product-grid">
            <div class="feature-products">
                <div class="common-f-start justify-content-md-end mb-3"><a class="btn btn-primary f-w-500"
                        href="{{ route('admin.add_products') }}"><i class="fa fa-plus pe-2"></i>Add Products</a></div>
                <div class="row">
                    <div class="col-md-6 products-total">
                        <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view"
                                href="#" data-original-title="" title=""><i data-feather="grid"></i></a></div>
                        <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view"
                                href="#" data-original-title="" title=""><i data-feather="list"></i></a></div>
                        <div class="grid-options d-inline-block">
                            <ul>
                                <li><a class="product-2-layout-view" href="#" data-original-title=""
                                        title=""><span class="line-grid line-grid-1 bg-primary"></span><span
                                            class="line-grid line-grid-2 bg-primary"></span></a></li>
                                <li><a class="product-3-layout-view" href="#" data-original-title=""
                                        title=""><span class="line-grid line-grid-3 bg-primary"></span><span
                                            class="line-grid line-grid-4 bg-primary"></span><span
                                            class="line-grid line-grid-5 bg-primary"></span></a></li>
                                <li><a class="product-4-layout-view" href="#" data-original-title=""
                                        title=""><span class="line-grid line-grid-6 bg-primary"></span><span
                                            class="line-grid line-grid-7 bg-primary"></span><span
                                            class="line-grid line-grid-8 bg-primary"></span><span
                                            class="line-grid line-grid-9 bg-primary"></span></a></li>
                                <li><a class="product-6-layout-view" href="#" data-original-title=""
                                        title=""><span class="line-grid line-grid-10 bg-primary"></span><span
                                            class="line-grid line-grid-11 bg-primary"></span><span
                                            class="line-grid line-grid-12 bg-primary"></span><span
                                            class="line-grid line-grid-13 bg-primary"></span><span
                                            class="line-grid line-grid-14 bg-primary"></span><span
                                            class="line-grid line-grid-15 bg-primary"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 text-md-end"><span class="f-w-600 m-r-5">Showing Products 1 - 24 Of
                            200 Results</span>
                        <div class="d-inline-block dropdown-product"><select class="form-select"
                                aria-label="Default select example">
                                <option value="1">Featured</option>
                                <option value="2">Lowest Prices</option>
                                <option value="3">Highest Prices</option>
                            </select></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-sidebar">
                            <div class="filter-section">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="mb-0 f-w-600">Filters<span class="pull-right"><i
                                                    class="fa fa-chevron-down toggle-data"></i></span></h6>
                                    </div>
                                    <div class="left-filter">
                                        <div class="card-body filter-cards-view animate-chk">
                                            <div class="product-filter">
                                                <h6 class="f-w-600">Category</h6>
                                                <div class="checkbox-animated mt-0"><label class="d-block"
                                                        for="edo-ani5"><input class="radio_animated" id="edo-ani5"
                                                            type="radio" data-original-title="" title="">Man
                                                        Shirt</label><label class="d-block" for="edo-ani6"><input
                                                            class="radio_animated" id="edo-ani6" type="radio"
                                                            data-original-title="" title="">Man
                                                        Jeans</label><label class="d-block" for="edo-ani7"><input
                                                            class="radio_animated" id="edo-ani7" type="radio"
                                                            data-original-title="" title="">Woman
                                                        Top</label><label class="d-block" for="edo-ani8"><input
                                                            class="radio_animated" id="edo-ani8" type="radio"
                                                            data-original-title="" title="">Woman
                                                        Jeans</label><label class="d-block" for="edo-ani9"><input
                                                            class="radio_animated" id="edo-ani9" type="radio"
                                                            data-original-title="" title="">Man
                                                        T-shirt</label></div>
                                            </div>
                                            <div class="product-filter">
                                                <h6 class="f-w-600">Brand</h6>
                                                <div class="checkbox-animated mt-0"><label class="d-block"
                                                        for="chk-ani"><input class="checkbox_animated" id="chk-ani"
                                                            type="checkbox" data-original-title="" title="">
                                                        Levi's</label><label class="d-block" for="chk-ani1"><input
                                                            class="checkbox_animated" id="chk-ani1" type="checkbox"
                                                            data-original-title="" title="">Diesel</label><label
                                                        class="d-block" for="chk-ani2"><input class="checkbox_animated"
                                                            id="chk-ani2" type="checkbox" data-original-title=""
                                                            title="">Lee</label><label class="d-block"
                                                        for="chk-ani3"><input class="checkbox_animated" id="chk-ani3"
                                                            type="checkbox" data-original-title=""
                                                            title="">Hudson</label><label class="d-block"
                                                        for="chk-ani4"><input class="checkbox_animated" id="chk-ani4"
                                                            type="checkbox" data-original-title=""
                                                            title="">Denizen</label><label class="d-block"
                                                        for="chk-ani5"><input class="checkbox_animated" id="chk-ani5"
                                                            type="checkbox" data-original-title=""
                                                            title="">Spykar</label>
                                                </div>
                                            </div>
                                            <div class="product-filter slider-product">
                                                <h6 class="f-w-600">Colors</h6>
                                                <div class="color-selector">
                                                    <ul>
                                                        <li class="white"></li>
                                                        <li class="black"></li>
                                                        <li class="orange"></li>
                                                        <li class="green"></li>
                                                        <li class="pink"></li>
                                                        <li class="yellow"></li>
                                                        <li class="blue"></li>
                                                        <li class="red"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-filter pb-0 product-range">
                                                <h6 class="f-w-600">Price</h6><input id="u-range-03" type="text">
                                            </div>
                                            <div class="product-filter">
                                                <h6 class="f-w-600">Discount</h6>
                                                <div class="checkbox-animated mt-0">
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani6" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani6"> <span class="name">upto 5%</span><span
                                                                class="number">(06)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani7" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani7"><span class="name">5% - 10%</span><span
                                                                class="number">(12)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani8" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani8"><span class="name">10% - 15%</span><span
                                                                class="number">(20)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani9" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani9"><span class="name"> 15% - 25%</span><span
                                                                class="number">(22)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani10" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani10"><span class="name">More than 25%</span><span
                                                                class="number">(24)</span></label></div>
                                                </div>
                                            </div>
                                            <div class="product-filter">
                                                <h6 class="f-w-600">Rating</h6>
                                                <div class="checkbox-animated mt-0 product-rate">
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani11" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani11"><span class="common-flex"><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i></span><span
                                                                class="number">(5 Star)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani12" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani12"><span class="common-flex"><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i></span><span
                                                                class="number">(4 Star)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani13" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani13"><span class="common-flex"><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i></span><span
                                                                class="number">(3 Star)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani14" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani14"><span class="common-flex"><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i></span><span
                                                                class="number">(2 Star)</span></label></div>
                                                    <div class="form-check"><input class="checkbox_animated"
                                                            id="chk-ani15" type="checkbox" data-original-title=""
                                                            title=""><label class="form-check-label"
                                                            for="chk-ani15"><span class="common-flex"><i
                                                                    class="fa-solid fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i><i
                                                                    class="fa-regular fa-star fill"></i></span><span
                                                                class="number">(1 Star)</span></label></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <form>
                            <div class="form-group m-0"><input class="form-control" type="search"
                                    placeholder="Search.." data-original-title="" title=""><i
                                    class="fa fa-search"></i></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="product-wrapper-grid">
                <div class="row">
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/01.jpg') }}"
                                        alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                <a class="btn" href="#!"><i class="fa-solid fa-eye"></i></a>
                                            </li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/01.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a
                                                                href="{{ route('admin.products_details') }}">Woman's Top</a>
                                                            <div class="product-price">$35.00<del>$50.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-500">Product Details</h6>
                                                                <p class="mb-0">Rock paper scissors women
                                                                    tank top high neck cotton top stylish
                                                                    women top..</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul class="common-flex">
                                                                    <li> <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-500">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1" readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                    Cart</a><a class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.products_details') }}">View
                                                                    Details</a></div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i
                                            class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></div><a
                                        href="{{ route('admin.products_details') }}">
                                        <h4>Woman's Top</h4>
                                    </a>
                                    <p>Regular flare fit women's yellow top</p>
                                    <div class="product-price">$35.00 <del>$50.00 </del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-danger">Sale</div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"><a
                                                    class="btn" href="#!"><i class="fa-solid fa-eye"></i></a>
                                            </li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a
                                                                href="{{ route('admin.products_details') }}">Women's Black
                                                                Top</a>
                                                            <div class="product-price">$100.00<del>$200.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-500">Product Details</h6>
                                                                <p class="mb-0">Available in a range of
                                                                    colors, customers can choose their
                                                                    preferred shade to match their personal
                                                                    style and preferences.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul class="common-flex">
                                                                    <li> <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-500">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1" readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                    Cart</a><a class="btn btn-primary ms-2"
                                                                    href="{{ route('admin.products_details') }}">View
                                                                    Details</a></div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                    </div><a href="{{ route('admin.products_details') }}">
                                        <h4>Women's Black Top</h4>
                                    </a>
                                    <p>Tops for Women Stylish</p>
                                    <div class="product-price">$100.00 <del>$200.00 </del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                                        alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li data-bs-toggle="modal" data-bs-target="#exampleModalCenter2"><a
                                                    class="btn" href="#!"><i class="fa-solid fa-eye"></i></a>
                                            </li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter2" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a href="{{ route('admin.products_details') }}">Men's
                                                                Blazer</a>
                                                            <div class="product-price">$100.00<del>$350.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">The classic men's blazer is
                                                                    an adaptable outfit that works well for
                                                                    both official and informal settings.
                                                                    carefully planned and made using
                                                                    high-quality materials.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li> <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1" readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                        Cart</a><a class="btn btn-primary ms-2"
                                                                        href="{{ route('admin.products_details') }}">View
                                                                        Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i
                                            class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></div><a
                                        href="{{ route('admin.products_details') }}">
                                        <h4>Men's Blazer</h4>
                                    </a>
                                    <p>Men's Denim Jacket</p>
                                    <div class="product-price"> $100.00<del>$350.00 </del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/04.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li data-bs-toggle="modal" data-bs-target="#exampleModalCenter3"><a
                                                    class="btn" href="#!"><i class="fa-solid fa-eye"></i></a>
                                            </li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter3" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/04.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a
                                                                href="{{ route('admin.products_details') }}">Woman's Top</a>
                                                            <div class="product-price">$50.00<del>$99.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-500">Product Details</h6>
                                                                <p class="mb-0">Our elegant girls' fancy top
                                                                    will add a glamorous and sophisticated
                                                                    touch to your child's clothing.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul class="common-flex">
                                                                    <li> <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-500">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1" readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                        Cart</a><a class="btn btn-primary ms-2"
                                                                        href="{{ route('admin.products_details') }}">View
                                                                        Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i
                                            class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></div><a
                                        href="{{ route('admin.products_details') }}">
                                        <h4>Elegant Fancy Top</h4>
                                    </a>
                                    <p>Stylish co-ord set 2 piece dress for women</p>
                                    <div class="product-price">$50.00<del>$99.00 </del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/09.jpg') }}"
                                        alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li data-bs-toggle="modal" data-bs-target="#exampleModalCenter4"><a
                                                    class="btn" href="#!"><i class="fa-solid fa-eye"></i></a>
                                            </li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter4" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/09.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details"><a
                                                                href="{{ route('admin.products_details') }}">Classic
                                                                T-shirt</a>
                                                            <div class="product-price">$840.00<del>$990.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-500">Product Details</h6>
                                                                <p class="mb-0">Relaxed fit for ultimate
                                                                    comfort available in a variety of
                                                                    colors. Tagless design for a silky,
                                                                    itchy feel.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul class="common-flex">
                                                                    <li> <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-500">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1" readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                        Cart</a><a class="btn btn-primary ms-2"
                                                                        href="{{ route('admin.products_details') }}">View
                                                                        Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                    </div><a href="{{ route('admin.products_details') }}">
                                        <h4>Classic T-shirt</h4>
                                    </a>
                                    <p>Plan T-shirt for boys</p>
                                    <div class="product-price"> $840.00 <del>$990.00 </del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="ribbon ribbon-secondary ribbon-vertical-left"><i class="icon-gift"></i></div>
                                <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/10.jpg') }}"
                                        alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li><a class="btn" href="#!" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter5"><i
                                                        class="fa-solid fa-eye"></i></a></li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter5" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/10.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details">
                                                            <h4>Camisole Tops</h4>
                                                            <div class="product-price">$150.00<del>$310.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-500">Product Details</h6>
                                                                <p class="mb-0">Our breathable camisoles
                                                                    will keep your girl comfy and cool.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li> <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-500">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1" readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                        Cart</a><a class="btn btn-primary ms-2"
                                                                        href="{{ route('admin.products_details') }}">View
                                                                        Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></div><a
                                        href="{{ route('admin.products_details') }}">
                                        <h4>Camisole Tops</h4>
                                    </a>
                                    <p>Soft cotton camisoles</p>
                                    <div class="product-price">$150.00<del>$310.00</del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/11.jpg') }}"
                                        alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li><a class="btn" href="#!" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter6"><i
                                                        class="fa-solid fa-eye"></i></a></li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter6" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/11.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details">
                                                            <h4>Stylist Full Sleeve T-shirt</h4>
                                                            <div class="product-price">$50.00<del>$120.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-500">Product Details</h6>
                                                                <p class="mb-0">This stylist full sleeve
                                                                    t-shirt, your casual ensemble will
                                                                    appear better. Comfortable fit and soft
                                                                    material ensure all-day wear.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul class="common-flex">
                                                                    <li> <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-500">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1" readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                        Cart</a><a class="btn btn-primary ms-2"
                                                                        href="{{ route('admin.products_details') }}">View
                                                                        Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i>
                                    </div><a href="{{ route('admin.products_details') }}">
                                        <h4>Stylist Full Sleeve T-shirt</h4>
                                    </a>
                                    <p>Chic cotton frill tees with a high neck</p>
                                    <div class="product-price">$50.00 <del>$120.00</del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/12.jpg') }}"
                                        alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li><a class="btn" href="#!" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter7"><i
                                                        class="fa-solid fa-eye"></i></a></li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter7" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/12.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details">
                                                            <h4>Women's Crop Top</h4>
                                                            <div class="product-price">$150.00<del>$400.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-500">Product Details</h6>
                                                                <p class="mb-0">Rock paper scissors women
                                                                    crop top high neck cotton black top
                                                                    stylish women top.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul class="common-flex">
                                                                    <li> <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-500">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1" readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                        Cart</a><a class="btn btn-primary ms-2"
                                                                        href="{{ route('admin.products_details') }}">View
                                                                        Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                    </div><a href="{{ route('admin.products_details') }}">
                                        <h4>Women's Crop Top</h4>
                                    </a>
                                    <p>Cotton blend women's black top</p>
                                    <div class="product-price">$150.00 <del>$400.00 </del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/13.jpg') }}"
                                        alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li><a class="btn" href="#!" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter8"><i
                                                        class="fa-solid fa-eye"></i></a></li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter8" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/13.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details">
                                                            <h4>Men's Winter Wear</h4>
                                                            <div class="product-price">$350.00<del>$500.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-500">Product Details</h6>
                                                                <p class="mb-0">Men's fashion full sleeves
                                                                    latest jacket for men with button
                                                                    closure long sleeve casual torn lycra
                                                                    denim t-shirt.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul class="common-flex">
                                                                    <li> <button class="btn" type="button">M</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">L</button>
                                                                    </li>
                                                                    <li> <button class="btn" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-500">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1" readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                        Cart</a><a class="btn btn-primary ms-2"
                                                                        href="{{ route('admin.products_details') }}">View
                                                                        Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i>
                                    </div><a href="{{ route('admin.products_details') }}">
                                        <h4>Men's Winter Wear</h4>
                                    </a>
                                    <p>Men's Denim T-shirt</p>
                                    <div class="product-price">$350.00 <del>$500.00 </del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/14.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li><a class="btn" href="#!" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter9"><i
                                                        class="fa-solid fa-eye"></i></a></li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter9" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter9" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/14.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details">
                                                            <h4>Men's Light Green Suit</h4>
                                                            <div class="product-price">$399.00<del>$699.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-500">Product Details</h6>
                                                                <p class="mb-0">Warm, water-resistant men's
                                                                    suit for ultimate comfort and
                                                                    protection.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul class="common-flex">
                                                                    <li> <button class="btn"
                                                                            type="button">M</button></li>
                                                                    <li> <button class="btn"
                                                                            type="button">L</button></li>
                                                                    <li> <button class="btn"
                                                                            type="button">Xl</button></li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-500">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1"
                                                                            readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                        Cart</a><a class="btn btn-primary ms-2"
                                                                        href="{{ route('admin.products_details') }}">View
                                                                        Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></div><a
                                        href="{{ route('admin.products_details') }}">
                                        <h4>Men's Light Green Suit</h4>
                                    </a>
                                    <p>Cotton regular fit for men's suit</p>
                                    <div class="product-price">$399.00 <del>$699.00 </del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/15.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li><a class="btn" href="#!" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter10"><i
                                                        class="fa-solid fa-eye"></i></a></li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter10" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter10" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/15.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details">
                                                            <h4>Women's Stylist Party Wear</h4>
                                                            <div class="product-price">$250.00<del>$350.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-500">Product Details</h6>
                                                                <p class="mb-0">Women's party clothing to up
                                                                    your appearance for the occasion.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul class="common-flex">
                                                                    <li> <button class="btn"
                                                                            type="button">M</button></li>
                                                                    <li> <button class="btn"
                                                                            type="button">L</button></li>
                                                                    <li> <button class="btn"
                                                                            type="button">Xl</button></li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-500">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1"
                                                                            readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                        Cart</a><a class="btn btn-primary ms-2"
                                                                        href="{{ route('admin.products_details') }}">View
                                                                        Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                    </div><a href="{{ route('admin.products_details') }}">
                                        <h4>Women's Stylist Party Wear </h4>
                                    </a>
                                    <p>Tops for Women Stylish</p>
                                    <div class="product-price">$250.00 <del>$350.00 </del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/16.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li><a class="btn" href="#!" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter11"><i
                                                        class="fa-solid fa-eye"></i></a></li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter11" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/16.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details">
                                                            <h4>Women's Mini Bodycon Dress</h4>
                                                            <div class="product-price">$110.00<del>$350.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-500">Product Details</h6>
                                                                <p class="mb-0">Can be layered with
                                                                    different items to create stylish
                                                                    outfits all year round.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul class="common-flex">
                                                                    <li> <button class="btn"
                                                                            type="button">M</button></li>
                                                                    <li> <button class="btn"
                                                                            type="button">L</button></li>
                                                                    <li> <button class="btn"
                                                                            type="button">Xl</button></li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-500">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1"
                                                                            readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                        Cart</a><a class="btn btn-primary ms-2"
                                                                        href="{{ route('admin.products_details') }}">View
                                                                        Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star-half-stroke"></i><i
                                            class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                            class="fa-regular fa-star"></i></div><a href="{{ route('admin.products_details') }}">
                                        <h4>Women's Mini Bodycon Dress</h4>
                                    </a>
                                    <p>Stylist mini bodycon dress</p>
                                    <div class="product-price">$110.00 <del>$350.00 </del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-bookmark ribbon-vertical-right ribbon-info"><i
                                            class="icofont icofont-love"></i></div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/17.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li><a class="btn" href="#!" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter12"><i
                                                        class="fa-solid fa-eye"></i></a></li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter12" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter12" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/17.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details">
                                                            <h4>Premium Jacket</h4>
                                                            <div class="product-price">$120.00<del>$200.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-500">Product Details</h6>
                                                                <p class="mb-0">The premium jacket is
                                                                    designed to provide a relaxed fit and
                                                                    ease of movement, making it a pleasure
                                                                    to wear for extended periods.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul class="common-flex">
                                                                    <li> <button class="btn"
                                                                            type="button">M</button></li>
                                                                    <li> <button class="btn"
                                                                            type="button">L</button></li>
                                                                    <li> <button class="btn"
                                                                            type="button">Xl</button></li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-500">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1"
                                                                            readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                        Cart</a><a class="btn btn-primary ms-2"
                                                                        href="{{ route('admin.products_details') }}">View
                                                                        Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                    </div><a href="{{ route('admin.products_details') }}">
                                        <h4>Premium Jacket</h4>
                                    </a>
                                    <p>Women stylish jacket</p>
                                    <div class="product-price">$120.00 <del>$200.00 </del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/18.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li><a class="btn" href="#!" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter13"><i
                                                        class="fa-solid fa-eye"></i></a></li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter13" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter13" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/18.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details">
                                                            <h4>Colorful One Piece</h4>
                                                            <div class="product-price">$120.00<del>$300.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-500">Product Details</h6>
                                                                <p class="mb-0">one-piece is perfect for
                                                                    parties and special occasions.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul class="common-flex">
                                                                    <li> <button class="btn"
                                                                            type="button">M</button></li>
                                                                    <li> <button class="btn"
                                                                            type="button">L</button></li>
                                                                    <li> <button class="btn"
                                                                            type="button">Xl</button></li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-500">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1"
                                                                            readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                        Cart</a><a class="btn btn-primary ms-2"
                                                                        href="{{ route('admin.products_details') }}">View
                                                                        Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                    </div><a href="{{ route('admin.products_details') }}">
                                        <h4>Colorful One Piece</h4>
                                    </a>
                                    <p>Western one piece dress</p>
                                    <div class="product-price">$120.00 <del>$300.00 </del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <div class="ribbon ribbon-clip ribbon-warning">Hot</div><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/19.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li><a class="btn" href="#!" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter14"><i
                                                        class="fa-solid fa-eye"></i></a></li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter14" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter14" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/19.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details">
                                                            <h4>Red Western One Piece</h4>
                                                            <div class="product-price">$300.00<del>$600.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-500">Product Details</h6>
                                                                <p class="mb-0">Perfect for parties and
                                                                    special occasions, this exquisite
                                                                    one-piece.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul class="common-flex">
                                                                    <li> <button class="btn"
                                                                            type="button">M</button></li>
                                                                    <li> <button class="btn"
                                                                            type="button">L</button></li>
                                                                    <li> <button class="btn"
                                                                            type="button">Xl</button></li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-500">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1"
                                                                            readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                        Cart</a><a class="btn btn-primary ms-2"
                                                                        href="{{ route('admin.products_details') }}">View
                                                                        Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></div><a
                                        href="{{ route('admin.products_details') }}">
                                        <h4>Red Western One Piece</h4>
                                    </a>
                                    <p>Stylish co-ord set 2 piece dress for women</p>
                                    <div class="product-price">$300.00 <del>$600.00 </del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                        src="{{ asset('assets/images/ecommerce/20.jpg') }}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a class="btn" href="{{ route('admin.cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i></a></li>
                                            <li><a class="btn" href="#!" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter15"><i
                                                        class="fa-solid fa-eye"></i></a></li>
                                            <li><a class="btn" href="#!"><i
                                                        class="fa-solid fa-code-compare fa-rotate-90"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalCenter15" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenter15" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid"
                                                            src="{{ asset('assets/images/ecommerce/20.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 text-start">
                                                        <div class="product-details">
                                                            <h4>Printed Full Sleeve T-shirt</h4>
                                                            <div class="product-price">$99.00<del>$120.00
                                                                </del></div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-500">Product Details</h6>
                                                                <p class="mb-0">Women's printed t-shirt with
                                                                    a striking design, crafted from premium,
                                                                    breathable material.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul class="common-flex">
                                                                    <li> <button class="btn"
                                                                            type="button">M</button></li>
                                                                    <li> <button class="btn"
                                                                            type="button">L</button></li>
                                                                    <li> <button class="btn"
                                                                            type="button">Xl</button></li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-500">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="touchspin-wrapper"> <button
                                                                            class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-minus">
                                                                            </i></button><input
                                                                            class="input-touchspin spin-outline-primary"
                                                                            type="number" value="1"
                                                                            readonly><button
                                                                            class="increment-touchspin btn-touchspin touchspin-primary"><i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                                                        Cart</a><a class="btn btn-primary ms-2"
                                                                        href="{{ route('admin.products_details') }}">View
                                                                        Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                    </div><a href="{{ route('admin.products_details') }}">
                                        <h4>Printed Full Sleeve T-shirt</h4>
                                    </a>
                                    <p>Women's printed t-shirt</p>
                                    <div class="product-price">$99.00 <del>$120.00 </del></div>
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
    <script src="{{ asset('assets/js/range-slider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/range-slider/rangeslider-script.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin_2/custom_touchspin.js') }}"></script>
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('assets/js/product-tab.js') }}"></script>
    <script src="{{ asset('assets/js/common-color-selector.js') }}"></script>
@endsection
