@extends('layouts.simple.master')

@section('title', 'Customer Order')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/autoFill.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/keyTable.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/fixedHeader.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/rowReorder.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select/bootstrap-select.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Customer Order</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Reports</li>
                        <li class="breadcrumb-item active">Customer Order</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid customer-order-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body px-0 pt-0">
                        <div class="top-body">
                            <div class="row common-f-start g-sm-3 g-2">
                                <div class="col-auto"><label class="form-label">Select Dates</label></div>
                                <div class="col-auto">
                                    <div class="range-dropdown" id="reportrange"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="customer-order-report">
                            <div class="recent-table table-responsive custom-scrollbar">
                                <table class="table" id="customer-order-table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th> <span class="c-o-light f-w-600">Customer Name</span></th>
                                            <th> <span class="c-o-light f-w-600">Customer Group</span></th>
                                            <th> <span class="c-o-light f-w-600">No. Of Orders</span></th>
                                            <th> <span class="c-o-light f-w-600">No. Of Products</span></th>
                                            <th> <span class="c-o-light f-w-600">Total</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/user/6.jpg') }}" alt="user">
                                                    <div><a href="#!">Floyd Miles</a>
                                                        <p class="c-o-light">floyd@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Marley Ford"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Sarah Wilson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jessica Anderson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Ford Stoll"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Davis Jone"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td>100</td>
                                            <td>180</td>
                                            <td>$9500</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/user/3.png') }}" alt="user">
                                                    <div><a href="#!">Celine Stokes</a>
                                                        <p class="c-o-light">celine@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Alexis Taylor"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/10.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Andrew Price"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Emily Park">
                                                        <div class="common-circle bg-lighter-warning">E
                                                        </div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Caryl Kauth"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td>400</td>
                                            <td>100</td>
                                            <td>$2008</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Ila Malone</a>
                                                        <p class="c-o-light">ila@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Caleb Rivera"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jenny Wilson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Olivia Gor"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/13.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td>125</td>
                                            <td>600</td>
                                            <td>$5982</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Poppy Mosley</a>
                                                        <p class="c-o-light">poppy@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Sarah Wilson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Richard Taylor"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Linda Brown">
                                                        <div class="common-circle bg-lighter-danger">L</div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jessica Anderson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td>200</td>
                                            <td>880</td>
                                            <td>$98572</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Eileen Portillo</a>
                                                        <p class="c-o-light">eileen@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Levine Raven"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Davis Jone"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jessica Anderson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Dashiell Wolfe"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/5.png') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td>850</td>
                                            <td>450</td>
                                            <td>$1500</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Ruben Charles</a>
                                                        <p class="c-o-light">ruben@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Thomas Jones"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/1.png') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Karen Jones">
                                                        <div class="common-circle bg-lighter-dark">K</div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Elizabeth Williams"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/3.png') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td>470</td>
                                            <td>420</td>
                                            <td>$8888</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Sullivan Thomas</a>
                                                        <p class="c-o-light">sullivan@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Kairos Frost">
                                                        <div class="common-circle bg-lighter-dark">K</div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Oceana Meridian"><img class="common-circle"
                                                            src="{{ asset('assets/images/user/2.jpg') }}" alt="user">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Ember Wren">
                                                        <div class="common-circle bg-lighter-primary">E
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>550</td>
                                            <td>200</td>
                                            <td>$9580</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Jeffrey Daniel</a>
                                                        <p class="c-o-light">jeffrey@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Atlas Stone"><img class="common-circle"
                                                            src="{{ asset('assets/images/user/12.png') }}"
                                                            alt="user">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Oceana Meridian"><img class="common-circle"
                                                            src="{{ asset('assets/images/user/10.jpg') }}"
                                                            alt="user">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jett Maverick">
                                                        <div class="common-circle bg-lighter-primary">J
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>130</td>
                                            <td>250</td>
                                            <td>$1050</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Romeo Murray</a>
                                                        <p class="c-o-light">romeo@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Atlas Stone"><img class="common-circle"
                                                            src="{{ asset('assets/images/user/12.png') }}"
                                                            alt="user">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Oceana Meridian"><img class="common-circle"
                                                            src="{{ asset('assets/images/user/10.jpg') }}"
                                                            alt="user">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jett Maverick">
                                                        <div class="common-circle bg-lighter-warning">J
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>225</td>
                                            <td>260</td>
                                            <td>$3500</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Zola Rodriguez</a>
                                                        <p class="c-o-light">zola@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Calista Rivers"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jasper Nightingale"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Seraphina Evergreen">
                                                        <div class="common-circle bg-lighter-primary">S
                                                        </div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Caspian Wilde"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/5.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td>305</td>
                                            <td>680</td>
                                            <td>$4590</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Mekhi Rubio</a>
                                                        <p class="c-o-light">mekhi@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Daxton Creed">
                                                        <div class="common-circle bg-lighter-primary">D
                                                        </div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Marigold Luna">
                                                        <div class="common-circle bg-lighter-warning">M
                                                        </div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Charles Rodriguez"><img class="common-circle"
                                                            src="{{ asset('assets/images/user/14.png') }}"
                                                            alt="user">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Sarah Hernandez"><img class="common-circle"
                                                            src="{{ asset('assets/images/user/3.png') }}" alt="user">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>460</td>
                                            <td>850</td>
                                            <td>$5600</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Corbin Lynn</a>
                                                        <p class="c-o-light">corbin@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Joseph Garcia"><img class="common-circle"
                                                            src="{{ asset('assets/images/avtar/16.jpg') }}"
                                                            alt="user">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Elizabeth Davis"><img class="common-circle"
                                                            src="{{ asset('assets/images/avtar/3.jpg') }}"
                                                            alt="user">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Karen Moore">
                                                        <div class="common-circle bg-lighter-warning">K
                                                        </div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Robert Williams">
                                                        <div class="common-circle bg-lighter-danger">R</div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>500</td>
                                            <td>120</td>
                                            <td>$9980</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Zev Livingston</a>
                                                        <p class="c-o-light">zev@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Joseph Garcia"><img class="common-circle"
                                                            src="{{ asset('assets/images/avtar/16.jpg') }}"
                                                            alt="user">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Elizabeth Davis"><img class="common-circle"
                                                            src="{{ asset('assets/images/avtar/3.jpg') }}"
                                                            alt="user">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Karen Moore">
                                                        <div class="common-circle bg-lighter-warning">K
                                                        </div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Robert Williams">
                                                        <div class="common-circle bg-lighter-danger">R</div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>586</td>
                                            <td>140</td>
                                            <td>$5780</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Queen Hart</a>
                                                        <p class="c-o-light">queen@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Daxton Creed">
                                                        <div class="common-circle bg-lighter-primary">D
                                                        </div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Marigold Luna">
                                                        <div class="common-circle bg-lighter-warning">M
                                                        </div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Charles Rodriguez"><img class="common-circle"
                                                            src="{{ asset('assets/images/user/14.png') }}"
                                                            alt="user">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Sarah Hernandez"><img class="common-circle"
                                                            src="{{ asset('assets/images/user/3.png') }}" alt="user">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>587</td>
                                            <td>140</td>
                                            <td>$8900</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Braelynn Fowler</a>
                                                        <p class="c-o-light">braelynn@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Levine Raven"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Davis Jone"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jessica Anderson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Dashiell Wolfe"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/5.png') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td>478</td>
                                            <td>150</td>
                                            <td>$9800</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard/user/6.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Opal Vazquez</a>
                                                        <p class="c-o-light">opal@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Xander Wilde">
                                                        <div class="common-circle bg-lighter-secondary">X
                                                        </div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Charles Rodriguez"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Zenith Nova">
                                                        <div class="common-circle bg-lighter-info">Z</div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Sarah Hernandez"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/6.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td>985</td>
                                            <td>120</td>
                                            <td>$6600</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard/user/13.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Peyton Hendrix</a>
                                                        <p class="c-o-light">peyton@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Joseph Garcia"><img class="common-circle"
                                                            src="{{ asset('assets/images/avtar/16.jpg') }}"
                                                            alt="user">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Elizabeth Davis"><img class="common-circle"
                                                            src="{{ asset('assets/images/avtar/3.jpg') }}"
                                                            alt="user">
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Karen Moore">
                                                        <div class="common-circle bg-lighter-warning">K
                                                        </div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Robert Williams">
                                                        <div class="common-circle bg-lighter-danger">R</div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>890</td>
                                            <td>250</td>
                                            <td>$9990</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard/user/7.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Cooper Hanna</a>
                                                        <p class="c-o-light">cooper@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jasper Nightingale"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Calista Rivers"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Caspian Wilde"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/5.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Seraphina Evergreen">
                                                        <div class="common-circle bg-lighter-primary">S
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>250</td>
                                            <td>650</td>
                                            <td>$1790</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard/user/10.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Tristen Harrison</a>
                                                        <p class="c-o-light">tristen@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Sarah Wilson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Linda Brown">
                                                        <div class="common-circle bg-lighter-danger">L</div>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jessica Anderson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Richard Taylor"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td>105</td>
                                            <td>225</td>
                                            <td>$9999</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="customer-details"><img class="img-fluid"
                                                        src="{{ asset('assets/images/dashboard/user/1.jpg') }}"
                                                        alt="user">
                                                    <div><a href="#!">Rosalyn Hammond</a>
                                                        <p class="c-o-light">rosalyn@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="common-f-start customer-group">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Caleb Rivera"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jenny Wilson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Dashiell Wolfe"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/5.png') }}"
                                                            alt="user"></li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Jessica Anderson"><img class="common-circle"
                                                            src="{{ asset('assets/images/dashboard-9/user/2.png') }}"
                                                            alt="user"></li>
                                                </ul>
                                            </td>
                                            <td>104</td>
                                            <td>130</td>
                                            <td>$8005</td>
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
    <script src="{{ asset('assets/js/flat-pickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/flat-pickr/custom-flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/flat-pickr/moment.js') }}"></script>
    <script src="{{ asset('assets/js/flat-pickr/custom-range-btn.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('assets/js/modalpage/validation-modal.js') }}"></script>
    <script src="{{ asset('assets/js/select/bootstrap-select.min.js') }}"></script>
@endsection
