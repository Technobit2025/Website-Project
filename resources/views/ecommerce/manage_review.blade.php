@extends('layouts.simple.master')

@section('title', 'Manage Review')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/autoFill.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/keyTable.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/fixedHeader.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/rowReorder.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select/bootstrap-select.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3> Manage Review</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Manage Review</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid manage-review-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body px-0 pt-0">
                        <div class="top-body">
                            <div class="row g-3">
                                <div class="col-auto">
                                    <div class="form-group"><label class="form-label">Rating<select
                                                class="selectpicker search-picker" aria-label="Rating"
                                                data-live-search="true">
                                                <option value="5" selected
                                                    data-content="&lt;span class='rating'&gt;&lt;i class='fa-solid fa-star txt-warning'&gt;&lt;/i&gt;&lt;/span&gt; | 5 Star">
                                                    5 Star</option>
                                                <option value="4"
                                                    data-content="&lt;span class='rating'&gt;&lt;i class='fa-solid fa-star txt-warning'&gt;&lt;/i&gt;&lt;/span&gt; | 4 Star">
                                                    4 Star</option>
                                                <option value="3"
                                                    data-content="&lt;span class='rating'&gt;&lt;i class='fa-solid fa-star txt-warning'&gt;&lt;/i&gt;&lt;/span&gt; | 3 Star">
                                                    3 Star</option>
                                                <option value="2"
                                                    data-content="&lt;span class='rating'&gt;&lt;i class='fa-solid fa-star txt-warning'&gt;&lt;/i&gt;&lt;/span&gt; | 2 Star">
                                                    2 Star</option>
                                                <option value="1"
                                                    data-content="&lt;span class='rating'&gt;&lt;i class='fa-solid fa-star txt-warning'&gt;&lt;/i&gt;&lt;/span&gt; | 1 Star">
                                                    1 Star</option>
                                            </select></label></div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-group"><label class="form-label">Status<select
                                                class="selectpicker search-picker" aria-label="Status"
                                                data-live-search="true">
                                                <option value="approve">Approve</option>
                                                <option value="reject">Reject</option>
                                            </select></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="manage-review">
                            <div class="recent-table table-responsive custom-scrollbar">
                                <table class="table" id="manage-review-table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th> <span class="c-o-light f-w-600">Add Products</span></th>
                                            <th> <span class="c-o-light f-w-600">Reviewer</span></th>
                                            <th> <span class="c-o-light f-w-600">Review</span></th>
                                            <th> <span class="c-o-light f-w-600">Date</span></th>
                                            <th> <span class="c-o-light f-w-600">Status</span></th>
                                            <th> <span class="c-o-light f-w-600">Action</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/laptop.png') }}"
                                                            alt="laptop"></div>
                                                    <p>Apple Desktop 2024</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/user/3.png') }}" alt="user">
                                                    <div class="user-details"><a href="#!">Cameron
                                                            Willia</a>
                                                        <p class="mb-0">cameron@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>All of my demanding apps
                                                        run well on the lightning-fast and very effective
                                                        Apple Desktop. Everything appears clear and
                                                        colourful thanks to the amazing Retina
                                                        display.</span></div>
                                            </td>
                                            <td>02 Feb, 2016</td>
                                            <td> <span class="badge badge-light-success">Approve</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
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
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Alexis Taylor</a>
                                                        <p class="mb-0">alexis@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>Excellent audio and
                                                        video quality combine to create a really engaging
                                                        viewing experience.</span></div>
                                            </td>
                                            <td>11 Mar, 2015</td>
                                            <td> <span class="badge badge-light-success">Approve</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/03.png') }}"
                                                            alt="beauty blender"></div>
                                                    <p>Beauty Blender</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Andrew Price</a>
                                                        <p class="mb-0">andrew@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>It performs a fantastic
                                                        job of evenly and streak-free applying liquid
                                                        foundation. I like how it makes it easier for me to
                                                        get a dewy, natural look that's ideal for daily
                                                        wear.</span></div>
                                            </td>
                                            <td>20 Nov, 2021</td>
                                            <td> <span class="badge badge-light-danger">Reject</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/25.png') }}"
                                                            alt="comfortable chair"></div>
                                                    <p>Comfortable Chair</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/user/6.jpg') }}" alt="user">
                                                    <div class="user-details"><a href="#!">Luke Mitchell</a>
                                                        <p class="mb-0">luke@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>I can change the chair
                                                        to my ideal seating position because to its
                                                        adjustable features, which make it really
                                                        comfortable.</span></div>
                                            </td>
                                            <td>25 Nov, 2022</td>
                                            <td> <span class="badge badge-light-danger">Reject</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/mouse.png') }}"
                                                            alt="green wireless mouse"></div>
                                                    <p>Green Wireless Mouse</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard/user/10.jpg') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Emily Park</a>
                                                        <p class="mb-0">emily@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>I can change the chair
                                                        to my ideal seating position because to its
                                                        adjustable features, which make it really
                                                        comfortable.</span></div>
                                            </td>
                                            <td>15 Jan, 2016</td>
                                            <td> <span class="badge badge-light-success">Approve</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/camera.png') }}"
                                                            alt="camera"></div>
                                                    <p>Camera</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard/user/13.jpg') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Olivia Gor</a>
                                                        <p class="mb-0">olivia@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>I can easily carry it
                                                        around on my vacations because of its lightweight
                                                        design.</span></div>
                                            </td>
                                            <td>02 Apr, 2024</td>
                                            <td> <span class="badge badge-light-success">Approve</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/14.png') }}"
                                                            alt="shoes"></div>
                                                    <p>Pixel Shoes</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Kathryn Roe</a>
                                                        <p class="mb-0">kathryn@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>I recently purchased a
                                                        pair of pixel shoes, and I have to tell that they
                                                        are really comfy! They have a stylish style and
                                                        offer excellent support during extended
                                                        hikes.</span></div>
                                            </td>
                                            <td>26 Mar, 2022</td>
                                            <td> <span class="badge badge-light-danger">Reject</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/16.png') }}"
                                                            alt="camera"></div>
                                                    <p>Leather Handbag</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/user/10.jpg') }}" alt="user">
                                                    <div class="user-details"><a href="#!">Caleb Riv</a>
                                                        <p class="mb-0">caleb@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>The design is both
                                                        fashionable and practical, and it has lots of
                                                        pockets to keep my stuff organised.</span></div>
                                            </td>
                                            <td>12 Feb, 2024</td>
                                            <td> <span class="badge badge-light-success">Approve</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/email-template/3.png') }}"
                                                            alt="arm chair"></div>
                                                    <p>Arm Chair</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Andrew Baker</a>
                                                        <p class="mb-0">andrew@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>For the money, this
                                                        armchair is a fantastic deal. It complements my
                                                        home's décor and has an attractive appearance. I
                                                        wish the armrests were a little wider, but the chair
                                                        is still pretty comfy.</span></div>
                                            </td>
                                            <td>08 Dec, 2018</td>
                                            <td> <span class="badge badge-light-success">Approve</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/wireless-headphone.png') }}"
                                                            alt="wireless headphone"></div>
                                                    <p>Wireless Ear Buds</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Miranda
                                                            Bailey</a>
                                                        <p class="mb-0">miranda@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>Excellent headphones for
                                                        the cost. They are well-fitting and effectively shut
                                                        out noise. Overall, I'm rather happy with my
                                                        purchase; the touch controls' sensitivity is the one
                                                        drawback.</span></div>
                                            </td>
                                            <td>21 Feb, 2024</td>
                                            <td> <span class="badge badge-light-success">Approve</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/01.png') }}"
                                                            alt="Grinder"></div>
                                                    <p>Bajaj Grinder Jar</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Thomas Tim</a>
                                                        <p class="mb-0">thomas@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>I recently bought a
                                                        Bajaj Grinder Jar, and I'm really delighted with how
                                                        well it works. The jar is ideal for regular usage
                                                        because it is sturdy and well-made.</span></div>
                                            </td>
                                            <td>19 May, 2015</td>
                                            <td> <span class="badge badge-light-success">Approve</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/mouse.png') }}"
                                                            alt="mouse"></div>
                                                    <p>M185 Mouse</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Marvin Bob</a>
                                                        <p class="mb-0">marvin@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>The DPI adjustments are
                                                        a nice tool for both gaming and daily use, and the
                                                        ergonomic shape suits my hand perfectly.</span>
                                                </div>
                                            </td>
                                            <td>03 Jan, 2019</td>
                                            <td> <span class="badge badge-light-danger">Reject</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/phone.png') }}"
                                                            alt="phone"></div>
                                                    <p>Apple Iphone 13 pro</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Russell Rose</a>
                                                        <p class="mb-0">russell@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>The DPI adjustments are
                                                        a nice tool for both gaming and daily use, and the
                                                        ergonomic shape suits my hand perfectly.</span>
                                                </div>
                                            </td>
                                            <td>29 Dec, 2024</td>
                                            <td> <span class="badge badge-light-success">Approve</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
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
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Savannah Bell</a>
                                                        <p class="mb-0">savannah@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>The sound quality is
                                                        amazing, with strong, deep bass and crystal-clear
                                                        highs that bring my music to life.</span></div>
                                            </td>
                                            <td>18 Mar, 2019</td>
                                            <td> <span class="badge badge-light-success">Approve</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/15.png') }}"
                                                            alt="comfortable sofa"></div>
                                                    <p>Comfortable Sofa</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Leslie Ape</a>
                                                        <p class="mb-0">leslie@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>I recently purchased the
                                                        Comfortable Sofa, and it is far better than I
                                                        anticipated! It's ideal for lounging because of the
                                                        pillows' outstanding support and luxurious feel.
                                                    </span></div>
                                            </td>
                                            <td>18 Mar, 2019</td>
                                            <td> <span class="badge badge-light-success">Approve</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/headphone.png') }}"
                                                            alt="headphones"></div>
                                                    <p>Headphones</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-9/user/4.png') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Darrell Alexa</a>
                                                        <p class="mb-0">darrell@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>These headphones are
                                                        excellent! Excellent sound quality with distinct
                                                        highs and rich bass is present. They provide good
                                                        noise suppression and are comfy for extended
                                                        listening sessions.</span></div>
                                            </td>
                                            <td>20 Mar, 2024</td>
                                            <td> <span class="badge badge-light-success">Approve</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/07.png') }}"
                                                            alt="washing machine"></div>
                                                    <p>Wool Washing Machine</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Gideon Quinn</a>
                                                        <p class="mb-0">gideon@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>For my sensitive wool
                                                        clothing, the Wool Washing Machine has been a
                                                        game-changer since I've been using it for a few
                                                        months.</span></div>
                                            </td>
                                            <td>28 May, 2020</td>
                                            <td> <span class="badge badge-light-success">Approve</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/02.png') }}"
                                                            alt="headphones"></div>
                                                    <p>Golden Headphone</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Bexley Nixon</a>
                                                        <p class="mb-0">bexley@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>The audio industry is
                                                        revolutionized by the Golden Headphone. Every music
                                                        is improved by the powerful bass and remarkably
                                                        clear sound clarity.</span></div>
                                            </td>
                                            <td>17 Nov, 2023</td>
                                            <td> <span class="badge badge-light-success">Approve</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/phone.png') }}"
                                                            alt="i-phone"></div>
                                                    <p>Apple Iphone 14 pro</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-9/user/1.png') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Kyler Nunez</a>
                                                        <p class="mb-0">kyler@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>The iPhone 14 Pro is a
                                                        remarkable gadget with state-of-the-art features and
                                                        performance. With its brilliant colours and fine
                                                        details, the display is amazing and improves every
                                                        experience.</span></div>
                                            </td>
                                            <td>10 Aug, 2020</td>
                                            <td> <span class="badge badge-light-danger">Reject</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/06.png') }}"
                                                            alt="study lamp"></div>
                                                    <p>Study Lamp</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="common-f-start"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                        alt="user">
                                                    <div class="user-details"><a href="#!">Kase Archer</a>
                                                        <p class="mb-0">kase@gmail.com </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                                <div class="customer-review"> <span>This study lamp is a
                                                        nice addition to my desk that I recently bought. I
                                                        can alter the illumination to my preference, which
                                                        makes the adjustable brightness levels ideal for
                                                        late-night studies.</span></div>
                                            </td>
                                            <td>12 Jun, 2022</td>
                                            <td> <span class="badge badge-light-success">Approve</span></td>
                                            <td> <a class="square-danger trash-5" href="#!"><svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                        </use>
                                                    </svg></a></td>
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
    <script src="{{ asset('assets/js/datatable/datatables/dataTables1.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.autoFill.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/autoFill.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.keyTable.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/keyTable.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.buttons.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/fixedHeader.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/rowReorder.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/custom.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/trash_popup.js') }}"></script>
    <script src="{{ asset('assets/js/modalpage/validation-modal.js') }}"></script>
    <script src="{{ asset('assets/js/select/bootstrap-select.min.js') }}"></script>
@endsection
