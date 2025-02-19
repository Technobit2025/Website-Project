@extends('layouts.simple.master')

@section('title', 'Category')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3> Category</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid e-category">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md"><label class="form-label">Parent Category</label><select class="form-select"
                                    aria-label="Select parent category">
                                    <option selected="">T-shirts</option>
                                    <option value="1">Purse</option>
                                    <option value="2">Cameras</option>
                                    <option value="3">Shoes </option>
                                    <option value="4">Handbags</option>
                                    <option value="5">Sleepers</option>
                                    <option value="6">Watches</option>
                                </select>
                                <div class="invalid-feedback"> Please choose a parent category.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-md"><label class="form-label">Category Type</label><select class="form-select"
                                    aria-label="Select parent category">
                                    <option selected="">Electronic</option>
                                    <option value="1">Accessories</option>
                                    <option value="2">Footwear</option>
                                    <option value="3">Clothing</option>
                                    <option value="4">Furniture</option>
                                </select>
                                <div class="invalid-feedback"> Please choose a category type.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-md"><label class="form-label">Category Status</label><select class="form-select"
                                    aria-label="Select parent category">
                                    <option selected="">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
                                <div class="invalid-feedback"> Please choose a category status.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col d-flex justify-content-start align-items-center m-t-40"><a
                                    class="btn btn-primary f-w-500" href="#!">Submit</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-no-border text-end">
                        <div class="card-header-right-icon"><a class="btn btn-primary f-w-500" href="#!"
                                data-bs-toggle="modal" data-bs-target="#dashboard8"><i class="fa fa-plus pe-2"></i>Add
                                Category</a>
                            <div class="modal fade" id="dashboard8" tabindex="-1" aria-labelledby="dashboard8"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content category-popup">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modaldashboard">Add Categories</h5>
                                            <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-0 custom-input">
                                            <div class="text-start">
                                                <div class="p-20">
                                                    <form class="row g-3 needs-validation" novalidate="">
                                                        <div class="col-md-6"><label class="form-label"
                                                                for="validationCategoryName">Category
                                                                Name<span class="txt-danger">*</span></label><input
                                                                class="form-control" id="validationCategoryName"
                                                                type="text" placeholder="Enter your category name"
                                                                required="">
                                                            <div class="invalid-feedback"> Please enter a
                                                                category name.</div>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-md-6"><label class="form-label"
                                                                for="validationSlug">Slug<span
                                                                    class="txt-danger">*</span></label><input
                                                                class="form-control" id="validationSlug" type="text"
                                                                placeholder="Enter slug" required="">
                                                            <div class="invalid-feedback"> Please enter a
                                                                slug name.</div>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-md-12"><label class="form-label">Parent
                                                                Category<span class="txt-danger">*</span></label><select
                                                                class="form-select" aria-label="Select parent category">
                                                                <option selected="">T-shirts</option>
                                                                <option value="1">Purse</option>
                                                                <option value="2">Cameras</option>
                                                                <option value="3">Shoes </option>
                                                                <option value="4">Handbags</option>
                                                                <option value="5">Sleepers</option>
                                                                <option value="6">Watches</option>
                                                            </select>
                                                            <div class="invalid-feedback"> Please choose a
                                                                parent category.</div>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-md-6"><label class="form-label">Category Type<span
                                                                    class="txt-danger">*</span></label><select
                                                                class="form-select" aria-label="Select category type">
                                                                <option selected="">Electronic</option>
                                                                <option value="1">Accessories</option>
                                                                <option value="2">Footwear</option>
                                                                <option value="3">Clothing</option>
                                                                <option value="4">Furniture</option>
                                                            </select>
                                                            <div class="invalid-feedback"> Please choose a
                                                                category type.</div>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-md-6"><label class="form-label">Category
                                                                Status<span class="txt-danger">*</span></label><select
                                                                class="form-select" aria-label="Select category status">
                                                                <option selected="">Active</option>
                                                                <option value="1">Inactive</option>
                                                            </select>
                                                            <div class="invalid-feedback"> Please choose a
                                                                category status.</div>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-md-12"><label class="form-label">Category
                                                                Description</label>
                                                            <div class="toolbar-box">
                                                                <div id="toolbar9"><button class="ql-bold">Bold
                                                                    </button><button class="ql-italic">Italic
                                                                    </button><button
                                                                        class="ql-underline">underline</button><button
                                                                        class="ql-strike">Strike
                                                                    </button><button class="ql-list" value="ordered">List
                                                                    </button><button class="ql-list" value="bullet">
                                                                    </button><button class="ql-indent" value="-1">
                                                                    </button><button class="ql-indent"
                                                                        value="+1"></button><button
                                                                        class="ql-link"></button></div>
                                                                <div id="editor9"></div>
                                                            </div>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="main-divider">
                                                                <div class="divider-body">
                                                                    <h6>SEO Tags</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6"><label class="form-label"
                                                                for="validationMetaTitle">Meta Title<span
                                                                    class="txt-danger">*</span></label><input
                                                                class="form-control" id="validationMetaTitle"
                                                                type="text" placeholder="Enter meta title"
                                                                required="">
                                                            <div class="invalid-feedback"> Please enter a
                                                                meta title.</div>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-lg-6"><label class="form-label"
                                                                for="validationKeyword">Meta Keywords<span
                                                                    class="txt-danger">*</span><span
                                                                    class="c-o-light">&nbsp;(In comma
                                                                    separated)</span></label><input class="form-control"
                                                                id="validationKeyword" type="text"
                                                                placeholder="Enter meta keywords" required="">
                                                            <div class="invalid-feedback"> Please enter a
                                                                meta keywords(In comma separated).</div>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-md-12"><label class="form-label">Meta
                                                                Description</label>
                                                            <div class="toolbar-box">
                                                                <div id="toolbar10"><button class="ql-bold">Bold
                                                                    </button><button class="ql-italic">Italic
                                                                    </button><button
                                                                        class="ql-underline">underline</button><button
                                                                        class="ql-strike">Strike
                                                                    </button><button class="ql-list" value="ordered">List
                                                                    </button><button class="ql-list" value="bullet">
                                                                    </button><button class="ql-indent" value="-1">
                                                                    </button><button class="ql-indent"
                                                                        value="+1"></button><button
                                                                        class="ql-link"></button></div>
                                                                <div id="editor10"></div>
                                                            </div>
                                                            <div class="invalid-feedback"> Please enter a
                                                                meta description</div>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="col-md-12 d-flex justify-content-end">
                                                            <button class="btn btn-primary" type="submit">Create
                                                                +</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="list-product list-category">
                            <div class="recent-table table-responsive custom-scrollbar">
                                <table class="table" id="project-status">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th> <span class="c-o-light f-w-600">Category</span></th>
                                            <th> <span class="c-o-light f-w-600">Description</span></th>
                                            <th> <span class="c-o-light f-w-600">Category Type</span></th>
                                            <th> <span class="c-o-light f-w-600">Action</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/1.png') }}"
                                                            alt="t-shirt"></div>
                                                    <p>Polo T-shirt</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Special Price get at flat ₹229</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">Clothing</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/category/1.png') }}"
                                                            alt="shoes"></div>
                                                    <p>Shoes</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Up to ₹300, on orders of ₹1750 and above
                                                    T & C</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">Footwear</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/category/2.png') }}"
                                                            alt="hand bags"></div>
                                                    <p>Handbags</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Passed 30+ quality checks performed by
                                                    experts for comfort & design</p>
                                            </td>
                                            <td> <span class="badge badge-light-secondary">Accessories</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/product/1.png') }}"
                                                            alt="chairs"></div>
                                                    <p>Arm chair</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Popular seating options for a variety of
                                                    events are armchairs</p>
                                            </td>
                                            <td> <span class="badge badge-light-warning">Furniture</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"><a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/category/3.png') }}"
                                                            alt="toys"></div>
                                                    <p>Toys</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Assembling Shape Educational Toys
                                                    (Multicolor)</p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Electronic</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/category/4.png') }}"
                                                            alt="slipper"></div>
                                                    <p>Slipper</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Easy to wear and comfortable slip on
                                                    slippers</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">Footwear</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/camera.png') }}"
                                                            alt="smart camera"></div>
                                                    <p>Smart camera</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Control your camera with your voice.</p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Electronic</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/2.png') }}"
                                                            alt="t-shirt"></div>
                                                    <p>Half sleeves T-shirt</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Special Price get at flat ₹100</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">Clothing</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/watch.png') }}"
                                                            alt="watch"></div>
                                                    <p>Watches</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Experience luxury and precision with our
                                                    meticulously crafted timepieces</p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Electronic</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/14.png') }}"
                                                            alt="t-shirt"></div>
                                                    <p>T-Shirts</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Special Price Get at flat ₹300</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">Clothing</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/mouse.png') }}"
                                                            alt="mouse"></div>
                                                    <p>Green wireless mouse</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Go cordless and eco-friendly with this
                                                    sleek mouse</p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Electric</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/dvd.png') }}"
                                                            alt="dvd"></div>
                                                    <p>DVD</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">High-quality DVD for a great viewing
                                                    experience</p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Electronic</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/ipad.png') }}"
                                                            alt="slipper"></div>
                                                    <p>MacBook Air 13.3-inch</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Students, take your learning anywhere
                                                    with the macBook air</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">Electric</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/07.png') }}"
                                                            alt="washing machine"></div>
                                                    <p>Wool washing machine</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Our powerful washers make it simple to
                                                    have clean clothes</p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Electronic</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/email-template/3.png') }}"
                                                            alt="chair"></div>
                                                    <p>Accent Chair</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">A luxurious touch is added with a comfy
                                                    accent chair</p>
                                            </td>
                                            <td> <span class="badge badge-light-warning">Furniture</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/12.png') }}"
                                                            alt="t-shirt"></div>
                                                    <p>T-Shirts</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Special Price get at flat ₹229</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">Clothing</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/speaker.png') }}"
                                                            alt="speaker"></div>
                                                    <p>Wireless Speaker</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Elevate your music listening experience
                                                </p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Electric</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/wireless-headphone.png') }}"
                                                            alt="ear buds"></div>
                                                    <p>Wireless ear buds</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Premium sound, effortless listening</p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Electric</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/phone.png') }}"
                                                            alt="phone"></div>
                                                    <p>Apple iphone 13 pro</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Highlights the powerful processor</p>
                                            </td>
                                            <td> <span class="badge badge-light-success">Electric</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/11.png') }}"
                                                            alt="t-shirt"></div>
                                                    <p>Solid T-shirt</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Special Price get at flat ₹999</p>
                                            </td>
                                            <td> <span class="badge badge-light-primary">Clothing</span>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
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
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/trash_popup.js') }}"></script>
    <script src="{{ asset('assets/js/editors/quill.js') }}"></script>
    <script src="{{ asset('assets/js/custom_category.js') }}"></script>
    <script src="{{ asset('assets/js/modalpage/validation-modal.js') }}"></script>
@endsection
