@extends('layouts.simple.master')

@section('title', 'Add products')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/intltelinput.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/tagify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select/bootstrap-select.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Add Product</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Product Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-xl-5 g-3">
                            <div class="col-xxl-3 col-xl-4 box-col-4e sidebar-left-wrapper">
                                <ul class="sidebar-left-icons nav nav-pills" id="add-product-pills-tab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" id="detail-product-tab"
                                            data-bs-toggle="pill" href="#detail-product" role="tab"
                                            aria-controls="detail-product" aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons"><svg class="stroke-icon">
                                                        <use
                                                            href="{{ asset('assets/svg/icon-sprite.svg#product-detail') }}">
                                                        </use>
                                                    </svg></div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h6>Add Product Details</h6>
                                                <p>Add product name & details</p>
                                            </div>
                                        </a></li>
                                    <li class="nav-item"> <a class="nav-link" id="gallery-product-tab" data-bs-toggle="pill"
                                            href="#gallery-product" role="tab" aria-controls="gallery-product"
                                            aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons"><svg class="stroke-icon">
                                                        <use
                                                            href="{{ asset('assets/svg/icon-sprite.svg#product-gallery') }}">
                                                        </use>
                                                    </svg></div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h6>Product Gallery</h6>
                                                <p>Thumbnail & add product gallery</p>
                                            </div>
                                        </a></li>
                                    <li class="nav-item"> <a class="nav-link" id="category-product-tab"
                                            data-bs-toggle="pill" href="#category-product" role="tab"
                                            aria-controls="category-product" aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons"><svg class="stroke-icon">
                                                        <use
                                                            href="{{ asset('assets/svg/icon-sprite.svg#product-category') }}">
                                                        </use>
                                                    </svg></div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h6>Product Categories</h6>
                                                <p>Add product category, status and tags</p>
                                            </div>
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link" id="pricings-tab" data-bs-toggle="pill"
                                            href="#pricings" role="tab" aria-controls="pricings" aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons"><svg class="stroke-icon">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#pricing') }}">
                                                        </use>
                                                    </svg></div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h6>Product Price & Discount</h6>
                                                <p>Add product basic price & discount</p>
                                            </div>
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link" id="advance-product-tab"
                                            data-bs-toggle="pill" href="#advance-product" role="tab"
                                            aria-controls="advance-product" aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons"><svg class="stroke-icon">
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#advance') }}">
                                                        </use>
                                                    </svg></div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h6>Additional Options</h6>
                                                <p>Add meta details & inventory details</p>
                                            </div>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="col-xxl-9 col-xl-8 box-col-8 position-relative">
                                <div class="tab-content custom-input" id="add-product-pills-tabContent">
                                    <div class="tab-pane fade show active" id="detail-product" role="tabpanel"
                                        aria-labelledby="detail-product-tab">
                                        <div class="sidebar-body">
                                            <form class="row g-3 common-form">
                                                <div class="col-12"><label class="form-label"
                                                        for="exampleFormControlInput1">Product SKU
                                                    </label><input class="form-control" id="exampleFormControlInput1"
                                                        type="text" placeholder="Enter a number"></div>
                                                <div class="col-md-12"><label class="form-label"
                                                        for="validationProductTitle">Product
                                                        Title</label><input class="form-control"
                                                        id="validationProductTitle" type="text" placeholder="Title">
                                                </div>
                                                <div class="col-md-12"><label class="form-label">Product
                                                        Description</label>
                                                    <div class="toolbar-box">
                                                        <div id="toolbar2"><button class="ql-bold">Bold
                                                            </button><button class="ql-italic">Italic
                                                            </button><button class="ql-underline">underline</button><button
                                                                class="ql-strike">Strike </button><button class="ql-list"
                                                                value="ordered">List
                                                            </button><button class="ql-list" value="bullet">
                                                            </button><button class="ql-indent" value="-1">
                                                            </button><button class="ql-indent"
                                                                value="+1"></button><button class="ql-link"></button>
                                                        </div>
                                                        <div id="editor2"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 product-buttons"><button class="btn m-0"
                                                        type="button"
                                                        onclick="handleNextButtonClick('gallery-product-tab')">Next<svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#front-arrow') }}">
                                                            </use>
                                                        </svg></button></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="gallery-product" role="tabpanel"
                                        aria-labelledby="gallery-product-tab">
                                        <div class="sidebar-body common-form">
                                            <div class="product-upload">
                                                <p>Product Thumbnail Image <span class="c-o-light">&lpar;Main
                                                        Image&rpar;</span></p>
                                                <form class="dropzone dropzone-secondary" id="singleFileUpload"
                                                    action="/upload.php">
                                                    <div class="dropzone-wrapper">
                                                        <div class="dz-message needsclick"><i
                                                                class="fa-solid fa-cloud-arrow-up fa-fade"></i>
                                                            <h6>Drop files here or click to upload.</h6>
                                                            <span class="note needsclick">SVG,PNG,JPG
                                                                <strong>or</strong> GIF</span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="product-upload">
                                                <p>Product Gallery</p>
                                                <form class="dropzone dropzone-secondary" id="multiFileUpload"
                                                    action="/upload.php">
                                                    <div class="dz-message needsclick"><i
                                                            class="fa-solid fa-cloud-arrow-up fa-fade"></i>
                                                        <h6>Drop files here or click to upload.</h6><span
                                                            class="note needsclick">SVG,PNG,JPG
                                                            <strong>or</strong> GIF</span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="product-buttons"><button class="btn" type="button"
                                                    onclick="handleNextButtonClick('detail-product-tab')"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#back-arrow') }}">
                                                        </use>
                                                    </svg>Previous</button><button class="btn" type="button"
                                                    onclick="handleNextButtonClick('category-product-tab')">Next<svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#front-arrow') }}">
                                                        </use>
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="category-product" role="tabpanel"
                                        aria-labelledby="category-product-tab">
                                        <div class="sidebar-body common-form e-category">
                                            <div class="modal fade" id="category-pill-modal" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content category-popup">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modaldashboard">Add
                                                                Categories</h5><button class="btn-close" type="button"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body p-0 custom-input">
                                                            <div class="text-start">
                                                                <div class="p-20">
                                                                    <form class="row g-3 needs-validation" novalidate="">
                                                                        <div class="col-md-6"><label class="form-label"
                                                                                for="validationCategory">Category
                                                                                Name<span
                                                                                    class="txt-danger">*</span></label><input
                                                                                class="form-control"
                                                                                id="validationCategory" type="text"
                                                                                placeholder="Enter your category name"
                                                                                required="">
                                                                            <div class="invalid-feedback">
                                                                                Please choose a category
                                                                                name.</div>
                                                                            <div class="valid-feedback">
                                                                                Looks good!</div>
                                                                        </div>
                                                                        <div class="col-md-6"><label class="form-label"
                                                                                for="validationSlug">Slug<span
                                                                                    class="txt-danger">*</span></label><input
                                                                                class="form-control" id="validationSlug"
                                                                                type="text" placeholder="Enter slug"
                                                                                required="">
                                                                            <div class="invalid-feedback">
                                                                                Please choose a slug name.
                                                                            </div>
                                                                            <div class="valid-feedback">
                                                                                Looks good!</div>
                                                                        </div>
                                                                        <div class="col-md-12"><label
                                                                                class="form-label">Parent
                                                                                Category<span
                                                                                    class="txt-danger">*</span></label><select
                                                                                class="form-select"
                                                                                aria-label="Select parent category">
                                                                                <option selected="">T-shirts
                                                                                </option>
                                                                                <option value="1">Purse
                                                                                </option>
                                                                                <option value="2">Cameras
                                                                                </option>
                                                                                <option value="3">Shoes
                                                                                </option>
                                                                                <option value="4">Handbags
                                                                                </option>
                                                                                <option value="5">Sleepers
                                                                                </option>
                                                                                <option value="6">Watches
                                                                                </option>
                                                                            </select>
                                                                            <div class="invalid-feedback">
                                                                                Please choose a parent
                                                                                category.</div>
                                                                            <div class="valid-feedback">
                                                                                Looks good!</div>
                                                                        </div>
                                                                        <div class="col-md-6"><label
                                                                                class="form-label">Category
                                                                                Type<span
                                                                                    class="txt-danger">*</span></label><select
                                                                                class="form-select"
                                                                                aria-label="Select parent category">
                                                                                <option selected="">
                                                                                    Electronic</option>
                                                                                <option value="1">
                                                                                    Accessories</option>
                                                                                <option value="2">Footwear
                                                                                </option>
                                                                                <option value="3">Clothing
                                                                                </option>
                                                                                <option value="4">Furniture
                                                                                </option>
                                                                            </select>
                                                                            <div class="invalid-feedback">
                                                                                Please choose a category
                                                                                type.</div>
                                                                            <div class="valid-feedback">
                                                                                Looks good!</div>
                                                                        </div>
                                                                        <div class="col-md-6"><label
                                                                                class="form-label">Category
                                                                                Status<span
                                                                                    class="txt-danger">*</span></label><select
                                                                                class="form-select"
                                                                                aria-label="Select parent category">
                                                                                <option selected="">Active
                                                                                </option>
                                                                                <option value="1">Inactive
                                                                                </option>
                                                                            </select>
                                                                            <div class="invalid-feedback">
                                                                                Please choose a category
                                                                                status.</div>
                                                                            <div class="valid-feedback">
                                                                                Looks good!</div>
                                                                        </div>
                                                                        <div class="col-md-12"><label class="form-label"
                                                                                for="validationDescription">Category
                                                                                Description</label>
                                                                            <textarea class="form-control" id="validationDescription" placeholder="Description here..." required=""></textarea>
                                                                            <div class="invalid-feedback">
                                                                                Please enter a category
                                                                                description.</div>
                                                                            <div class="valid-feedback">
                                                                                Looks good!</div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="main-divider">
                                                                                <div class="divider-body">
                                                                                    <h6>SEO Tags</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6"><label class="form-label"
                                                                                for="validationMetaTitle1">Meta
                                                                                Title<span
                                                                                    class="txt-danger">*</span></label><input
                                                                                class="form-control"
                                                                                id="validationMetaTitle1" type="text"
                                                                                placeholder="Enter meta title"
                                                                                required="">
                                                                            <div class="invalid-feedback">
                                                                                Please choose a meta title.
                                                                            </div>
                                                                            <div class="valid-feedback">
                                                                                Looks good!</div>
                                                                        </div>
                                                                        <div class="col-lg-6"><label class="form-label"
                                                                                for="validationKeywords">Meta
                                                                                Keywords<span
                                                                                    class="txt-danger">*</span><span
                                                                                    class="c-o-light">&nbsp;(In
                                                                                    comma
                                                                                    separated)</span></label><input
                                                                                class="form-control"
                                                                                id="validationKeywords" type="text"
                                                                                placeholder="Enter meta keywords"
                                                                                required="">
                                                                            <div class="invalid-feedback">
                                                                                Please enter a meta
                                                                                keywords(In comma
                                                                                separated).</div>
                                                                            <div class="valid-feedback">
                                                                                Looks good!</div>
                                                                        </div>
                                                                        <div class="col-md-12"><label
                                                                                class="form-label">Meta
                                                                                Description</label>
                                                                            <div class="toolbar-box">
                                                                                <div id="toolbar3"><button
                                                                                        class="ql-bold">Bold
                                                                                    </button><button
                                                                                        class="ql-italic">Italic
                                                                                    </button><button
                                                                                        class="ql-underline">underline</button><button
                                                                                        class="ql-strike">Strike
                                                                                    </button><button class="ql-list"
                                                                                        value="ordered">List
                                                                                    </button><button class="ql-list"
                                                                                        value="bullet">
                                                                                    </button><button class="ql-indent"
                                                                                        value="-1">
                                                                                    </button><button class="ql-indent"
                                                                                        value="+1"></button><button
                                                                                        class="ql-link"></button>
                                                                                </div>
                                                                                <div id="editor3"></div>
                                                                            </div>
                                                                            <div class="invalid-feedback">
                                                                                Please enter a meta
                                                                                description</div>
                                                                            <div class="valid-feedback">
                                                                                Looks good!</div>
                                                                        </div>
                                                                        <div class="col-md-12 d-flex justify-content-end">
                                                                            <button class="btn button-light-primary"
                                                                                type="button"
                                                                                data-bs-dismiss="modal">Cancel</button><button
                                                                                class="btn btn-primary ms-2"
                                                                                type="submit">Create +
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <form class="row g-3 common-form">
                                                <div class="col-md"><label class="form-label">Add
                                                        Category</label><select class="selectpicker" multiple=""
                                                        aria-label="Default select example" data-live-search="true">
                                                        <option value="1">Toys & games</option>
                                                        <option value="2" selected>Footwear</option>
                                                        <option value="3">Furniture and Decor</option>
                                                        <option value="4" selected>Baby Care Products
                                                        </option>
                                                        <option value="5">Accessories</option>
                                                        <option value="6">Sportswear</option>
                                                    </select></div>
                                                <div class="col-auto">
                                                    <div class="category-btn"><a class="btn button-primary"
                                                            href="#!" data-bs-toggle="modal"
                                                            data-bs-target="#category-pill-modal"><i
                                                                class="me-2 fa fa-plus"> </i>Create New
                                                            Category</a></div>
                                                </div>
                                                <div class="col-sm-12 common-tagify"><label class="form-label">Add
                                                        Tag</label><input name="basic-tags"
                                                        value="watches, sports, clothes, bottles"></div>
                                                <div class="col-12 product-buttons"><button class="btn" type="button"
                                                        onclick="handleNextButtonClick('gallery-product-tab')"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#back-arrow') }}">
                                                            </use>
                                                        </svg>Previous</button><button class="btn" type="button"
                                                        onclick="handleNextButtonClick('pricings-tab')">Next<svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#front-arrow') }}">
                                                            </use>
                                                        </svg></button></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pricings" role="tabpanel"
                                        aria-labelledby="pricings-tab">
                                        <form class="price-wrapper common-form row g-3">
                                            <div class="col-sm-6"> <label class="form-label" for="initialCost">Initial
                                                    Price</label><input class="form-control" id="initialCost"
                                                    type="number" placeholder="Price"></div>
                                            <div class="col-sm-6"> <label class="form-label" for="sellingPrice">Selling
                                                    Price </label><input class="form-control" id="sellingPrice"
                                                    type="number" placeholder="Price"></div>
                                            <div class="col-12"><label class="form-label">Product Discount
                                                    Options<i class="icon-help-alt ms-1" data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        data-bs-title="Choose the kind of discount that will be used on that particular item."></i></label>
                                                <ul class="nav nav-pills discount-options" id="product-discount-pills-tab"
                                                    role="tablist">
                                                    <li class="nav-item"> <a class="nav-link active" id="fixed-price-tab"
                                                            data-bs-toggle="pill" href="#fixed-price" role="tab"
                                                            aria-controls="fixed-price" aria-selected="false"><span>Fixed
                                                                Price
                                                                Discount</span></a></li>
                                                    <li class="nav-item"> <a class="nav-link" id="bogo-offer-tab"
                                                            data-bs-toggle="pill" href="#bogo-offer" role="tab"
                                                            aria-controls="bogo-offer" aria-selected="false"><span>BOGO
                                                                (Buy One, Get
                                                                One)</span></a></li>
                                                    <li class="nav-item"><a class="nav-link" id="percentage-base-tab"
                                                            data-bs-toggle="pill" href="#percentage-base" role="tab"
                                                            aria-controls="percentage-base"
                                                            aria-selected="false"><span>Percentage Based
                                                                Discount(%)</span></a></li>
                                                    <li class="nav-item"><a class="nav-link" id="bulk-discount-tab"
                                                            data-bs-toggle="pill" href="#bulk-discount" role="tab"
                                                            aria-controls="bulk-discount"
                                                            aria-selected="false"><span>Volume or Bulk
                                                                Discount</span></a></li>
                                                </ul>
                                                <div class="tab-content" id="product-discount-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="fixed-price"
                                                        role="tabpanel" aria-labelledby="fixed-price-tab">
                                                        <div class="meta-body">
                                                            <div class="row g-3">
                                                                <div class="col-12"><label class="form-label"
                                                                        for="validationDiscountPrice">Discount
                                                                        Price</label><input class="form-control"
                                                                        id="validationDiscountPrice" type="number"
                                                                        placeholder="Discount"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="bogo-offer" role="tabpanel"
                                                        aria-labelledby="bogo-offer-tab">
                                                        <div class="meta-body">
                                                            <div class="row g-3">
                                                                <div class="col-12"> <label class="form-label">Product
                                                                        Name<span class="c-o-light">&nbsp;(Free)
                                                                        </span></label><select
                                                                        class="selectpicker search-picker"
                                                                        aria-label="Product Name" data-live-search="true">
                                                                        <option value="1" selected>Women
                                                                            Pink T-shirt</option>
                                                                        <option value="2">Solid Hooded
                                                                            Sweatshirt</option>
                                                                        <option value="3">Women Flared Jeans
                                                                        </option>
                                                                        <option value="4">Fresh And Pure Oil
                                                                        </option>
                                                                        <option value="5">Premium Dumbbells
                                                                        </option>
                                                                        <option value="6">Organic Long Grain
                                                                            Rice</option>
                                                                        <option value="7">Delicious Cupcakes
                                                                        </option>
                                                                    </select></div>
                                                                <div class="col-sm-6"><label class="form-label"
                                                                        for="validationMinQuantity">Minimum
                                                                        Quantity</label><input class="form-control"
                                                                        id="validationMinQuantity" type="number"
                                                                        placeholder="Quantity"></div>
                                                                <div class="col-sm-6"><label class="form-label"
                                                                        for="validationMaxQuantity">Maximum
                                                                        Quantity</label><input class="form-control"
                                                                        id="validationMaxQuantity" type="number"
                                                                        placeholder="Quantity"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="percentage-base" role="tabpanel"
                                                        aria-labelledby="percentage-base-tab">
                                                        <div class="meta-body">
                                                            <div class="row g-3">
                                                                <div class="col-md-12"><label class="form-label"
                                                                        for="validationDiscount">Discount
                                                                        Percentage</label><input class="form-control"
                                                                        id="validationDiscount" type="number"
                                                                        placeholder="Discount"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="bulk-discount" role="tabpanel"
                                                        aria-labelledby="bulk-discount-tab">
                                                        <div class="meta-body">
                                                            <div class="row g-3">
                                                                <div class="col-12"><label class="form-label"
                                                                        for="validationQuantity">Quantity</label><input
                                                                        class="form-control" id="validationQuantity"
                                                                        type="number" placeholder="Quantity"></div>
                                                                <div class="col-12">
                                                                    <div class="row g-3">
                                                                        <div class="col-sm-6"><label class="form-label"
                                                                                for="projectType">Discount
                                                                                Type</label><select class="form-select"
                                                                                id="projectType">
                                                                                <option selected="">Fixed
                                                                                    Price </option>
                                                                                <option value="1">
                                                                                    Percentage(%)</option>
                                                                            </select></div>
                                                                        <div class="col-sm-6"><label class="form-label"
                                                                                for="projectType">Value</label><input
                                                                                class="form-control" type="number"
                                                                                placeholder="Discount" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 product-buttons"><button class="btn" type="button"
                                                    onclick="handleNextButtonClick('category-product-tab')"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#back-arrow') }}">
                                                        </use>
                                                    </svg>Previous</button><button class="btn" type="button"
                                                    onclick="handleNextButtonClick('advance-product-tab')">Next<svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#front-arrow') }}">
                                                        </use>
                                                    </svg></button></div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="advance-product" role="tabpanel"
                                        aria-labelledby="advance-product-tab">
                                        <div class="sidebar-body advance-options">
                                            <ul class="nav nav-tabs border-tab mb-0" id="advance-option-tab"
                                                role="tablist">
                                                <li class="nav-item"><a class="nav-link active" id="manifest-option-tab"
                                                        data-bs-toggle="tab" href="#manifest-option" role="tab"
                                                        aria-controls="manifest-option" aria-selected="true">Inventory</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" id="seo-option-tab"
                                                        data-bs-toggle="tab" href="#seo-option" role="tab"
                                                        aria-controls="seo-option" aria-selected="false">SEO
                                                        Tags</a></li>
                                                <li class="nav-item"><a class="nav-link" id="dropping-option-tab"
                                                        data-bs-toggle="tab" href="#dropping-option" role="tab"
                                                        aria-controls="dropping-option" aria-selected="false">Shipping</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" id="variation-option-tab"
                                                        data-bs-toggle="tab" href="#variation-option" role="tab"
                                                        aria-controls="variation-option"
                                                        aria-selected="false">Variations</a></li>
                                                <li class="nav-item"><a class="nav-link" id="publish-option-tab"
                                                        data-bs-toggle="tab" href="#publish-option" role="tab"
                                                        aria-controls="publish-option" aria-selected="false">Publish</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="advance-option-tabContent">
                                                <div class="tab-pane fade show active" id="manifest-option"
                                                    role="tabpanel" aria-labelledby="manifest-option-tab">
                                                    <div class="meta-body">
                                                        <form class="common-form row g-3" id="advance-tab">
                                                            <div class="col-sm-6"><label class="form-label">Stock
                                                                    Availability</label><select class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option selected="">In stock</option>
                                                                    <option value="1">Out of stock</option>
                                                                    <option value="2">Pre-order</option>
                                                                </select></div>
                                                            <div class="col-sm-6"><label class="form-label">Low Stock
                                                                    Level</label><select class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option selected="">Low Stock (5 or
                                                                        less)</option>
                                                                    <option value="1">Low Stock (10 or less)
                                                                    </option>
                                                                    <option value="2">Low Stock (20 or less)
                                                                    </option>
                                                                    <option value="2">Low Stock (25 or less)
                                                                    </option>
                                                                    <option value="2">Low Stock (30 or less)
                                                                    </option>
                                                                </select></div>
                                                            <div class="col-xxl-4 col-sm-6"><label class="form-label"
                                                                    for="exampleFormControlInputa">Stock
                                                                    Quantity <span
                                                                        class="txt-danger">*</span></label><input
                                                                    class="form-control" id="exampleFormControlInputa"
                                                                    type="number" placeholder="Quantity">
                                                            </div>
                                                            <div class="col-xxl-4 col-sm-6"> <label
                                                                    class="form-label">Restock Date <span
                                                                        class="txt-danger">*</span></label>
                                                                <div class="input-group flatpicker-calender product-date">
                                                                    <input class="form-control" id="datetime-local2"
                                                                        type="date">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-12"><label class="form-label"
                                                                    for="exampleFormControlInputc">Pre-Order
                                                                    <span class="txt-danger">*</span></label><input
                                                                    class="form-control" id="exampleFormControlInputc"
                                                                    type="number" placeholder="Quantity">
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-check"><input class="form-check-input"
                                                                        id="gridCheck" type="checkbox"><label
                                                                        class="form-check-label m-0" for="gridCheck">This
                                                                        is a digital
                                                                        product.</label></div>
                                                            </div>
                                                            <div class="col-12 product-buttons"><button class="btn"
                                                                    type="button"
                                                                    onclick="handleNextButtonClick('pricings-tab')"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#back-arrow') }}">
                                                                        </use>
                                                                    </svg>Previous</button><button class="btn"
                                                                    type="button"
                                                                    onclick="handleNextButtonClick('seo-option-tab')">Next<svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#front-arrow') }}">
                                                                        </use>
                                                                    </svg></button></div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="seo-option" role="tabpanel"
                                                    aria-labelledby="seo-option-tab">
                                                    <div class="meta-body">
                                                        <form class="row g-3 common-form">
                                                            <div class="col-xxl-6"><label class="form-label"
                                                                    for="validationTitle">Meta
                                                                    Title</label><input class="form-control"
                                                                    id="validationTitle" type="text"
                                                                    placeholder="Enter meta title"></div>
                                                            <div class="col-xxl-6"><label class="form-label"
                                                                    for="validationCustom-9">Meta
                                                                    Keywords<span class="c-o-light">&nbsp;(In comma
                                                                        separated)</span></label><input
                                                                    class="form-control" id="validationCustom-9"
                                                                    type="text" placeholder="Enter meta keywords">
                                                            </div>
                                                            <div class="col-md-12"><label class="form-label">Meta
                                                                    Description</label>
                                                                <div class="toolbar-box">
                                                                    <div id="toolbar4"><button class="ql-bold">Bold
                                                                        </button><button class="ql-italic">Italic
                                                                        </button><button
                                                                            class="ql-underline">underline</button><button
                                                                            class="ql-strike">Strike
                                                                        </button><button class="ql-list"
                                                                            value="ordered">List
                                                                        </button><button class="ql-list" value="bullet">
                                                                        </button><button class="ql-indent" value="-1">
                                                                        </button><button class="ql-indent"
                                                                            value="+1"></button><button
                                                                            class="ql-link"></button></div>
                                                                    <div id="editor4"></div>
                                                                </div>
                                                                <p class="mb-0 mt-1 f-light">Enhance your
                                                                    SEO ranking with an added tag
                                                                    description for the product.</p>
                                                            </div>
                                                            <div class="col-md-12 product-buttons"><button class="btn"
                                                                    type="button"
                                                                    onclick="handleNextButtonClick('manifest-option-tab')"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#back-arrow') }}">
                                                                        </use>
                                                                    </svg>Previous</button><button class="btn"
                                                                    type="button"
                                                                    onclick="handleNextButtonClick('dropping-option-tab')">Next<svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#front-arrow') }}">
                                                                        </use>
                                                                    </svg></button></div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="dropping-option" role="tabpanel"
                                                    aria-labelledby="dropping-option-tab">
                                                    <div class="meta-body">
                                                        <form class="common-form">
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12"><label class="form-label"
                                                                                for="exampleFormControlInput1">Weight
                                                                                (kg)</label><i class="icon-help-alt ms-1"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                data-bs-title="set proper weight for product items."></i>
                                                                        </div>
                                                                        <div class="col-12"><input class="form-control"
                                                                                id="inputCitya" type="number">
                                                                            <p class="f-light">Decide if the
                                                                                product is a digital or
                                                                                physical item. Shipping may
                                                                                be necessary for real-world
                                                                                items.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row gx-xl-3 gx-md-2 gy-md-0 g-2">
                                                                        <div class="col-12"><label class="form-label"
                                                                                for="exampleFormControlInput1">Dimensions
                                                                            </label><i class="icon-help-alt ms-1"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                data-bs-title="set proper length/width and height for product items."></i>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6">
                                                                            <input class="form-control" id="inputCityb"
                                                                                type="number" placeholder="Length[l]">
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6">
                                                                            <input class="form-control" id="inputCityc"
                                                                                type="number" placeholder="Width[w]">
                                                                        </div>
                                                                        <div class="col-md-4"> <input class="form-control"
                                                                                id="inputCityd" type="number"
                                                                                placeholder="Height[h]">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12"><label class="form-label"
                                                                                for="exampleFormControlInput1">Shipping
                                                                                Class</label></div>
                                                                        <div class="col-md-12"><select class="form-select"
                                                                                id="inputState1">
                                                                                <option selected="">Basic
                                                                                    Shipping</option>
                                                                                <option>Expedited Shipping
                                                                                </option>
                                                                                <option>International
                                                                                    Shipping</option>
                                                                                <option>Free Shipping
                                                                                </option>
                                                                                <option>Same-Day or Next-Day
                                                                                    Shipping</option>
                                                                                <option>Flat Rate Shipping
                                                                                </option>
                                                                                <option>Local Pickup
                                                                                </option>
                                                                            </select></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 product-buttons"><button class="btn"
                                                                        type="button"
                                                                        onclick="handleNextButtonClick('seo-option-tab')"><svg>
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#back-arrow') }}">
                                                                            </use>
                                                                        </svg>Previous</button><button class="btn"
                                                                        type="button"
                                                                        onclick="handleNextButtonClick('variation-option-tab')">Next<svg>
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#front-arrow') }}">
                                                                            </use>
                                                                        </svg></button></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="variation-option" role="tabpanel"
                                                    aria-labelledby="variation-option-tab">
                                                    <div class="meta-body">
                                                        <form class="row g-3 common-form">
                                                            <div class="col-12">
                                                                <div class="row g-2 product-tag"><label
                                                                        class="form-label d-block m-0">Colors</label><input
                                                                        name="basic-tags1"
                                                                        value="Green, Purple, Yellow, Blue">
                                                                </div>
                                                            </div>
                                                            <div class="col-12"> <label class="form-label">Option
                                                                    Name</label><select class="form-select"
                                                                    id="option-variation"
                                                                    onchange="configureDropDownLists(this,document.getElementById('option-value'))">
                                                                    <option value="color" selected="selected">Color
                                                                    </option>
                                                                    <option value="size">Size</option>
                                                                    <option value="material">Material
                                                                    </option>
                                                                    <option value="style">Style </option>
                                                                </select></div>
                                                            <div class="col-12"><label class="form-label">Options
                                                                    Value</label><select class="form-select"
                                                                    id="option-value"></select></div>
                                                            <div class="col-12 product-buttons"><button class="btn"
                                                                    type="button"
                                                                    onclick="handleNextButtonClick('dropping-option-tab')"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#back-arrow') }}">
                                                                        </use>
                                                                    </svg>Previous</button><button class="btn"
                                                                    type="button"
                                                                    onclick="handleNextButtonClick('publish-option-tab')">Next<svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#front-arrow') }}">
                                                                        </use>
                                                                    </svg></button></div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="publish-option" role="tabpanel"
                                                    aria-labelledby="publish-option-tab">
                                                    <div class="meta-body">
                                                        <form class="row g-3 common-form">
                                                            <div class="col-xxl-6 col-xl-12 col-md-6"><label
                                                                    class="form-label" for="publishStatus">Publish
                                                                    Status</label><select class="form-select"
                                                                    id="publishStatus" required="">
                                                                    <option selected="" value="">Publish
                                                                    </option>
                                                                    <option>Drafts</option>
                                                                    <option>Unpublish</option>
                                                                </select></div>
                                                            <div class="col-xxl-6 col-xl-12 col-md-6"><label
                                                                    class="form-label" for="datetime-local1">Publish Date
                                                                    &
                                                                    Time</label>
                                                                <div class="input-group flatpicker-calender product-date">
                                                                    <input class="form-control" id="datetime-local1"
                                                                        type="date">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 product-buttons"><button class="btn"
                                                                    type="button"
                                                                    onclick="handleNextButtonClick('variation-option-tab')"><svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#back-arrow') }}">
                                                                        </use>
                                                                    </svg>Previous</button><button class="btn sweet-15"
                                                                    type="button"
                                                                    onclick="handleSubmitButtonClick()">Submit<svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#front-arrow') }}">
                                                                        </use>
                                                                    </svg></button></div>
                                                        </form>
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
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/flat-pickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/flat-pickr/custom-flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone/dropzone-script.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/tagify.js') }}"></script>
    <script src="{{ asset('assets/js/select2/tagify.polyfills.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/intltelinput.min.js') }}"></script>
    <script src="{{ asset('assets/js/add-product/select4-custom.js') }}"></script>
    <script src="{{ asset('assets/js/editors/quill.js') }}"></script>
    <script src="{{ asset('assets/js/custom-add-product.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('assets/js/modalpage/validation-modal.js') }}"></script>
    <script src="{{ asset('assets/js/select/bootstrap-select.min.js') }}"></script>
@endsection
