@extends('layouts.simple.master')

@section('title', 'Products')

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
                    <h3>Products</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Reports</li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid product-report-wrapper">
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
                        <div class="product-report">
                            <div class="recent-table table-responsive custom-scrollbar">
                                <table class="table" id="product-report-table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th> <span class="c-o-light f-w-600">Product Name</span></th>
                                            <th> <span class="c-o-light f-w-600">SKU</span></th>
                                            <th> <span class="c-o-light f-w-600">Total Product Sold</span>
                                            </th>
                                            <th> <span class="c-o-light f-w-600">Price</span></th>
                                            <th> <span class="c-o-light f-w-600">Rating</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/laptop.png') }}"
                                                            alt="laptop"></div>
                                                    <p>Apple Desktop 2024</p>
                                                </div>
                                            </td>
                                            <td>02145YK796</td>
                                            <td>34</td>
                                            <td>56000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/15.png') }}"
                                                            alt="sofa"></div>
                                                    <p>Comfortable Sofa</p>
                                                </div>
                                            </td>
                                            <td>456DF78DFQ</td>
                                            <td>25</td>
                                            <td>99000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/mouse.png') }}"
                                                            alt="mouse"></div>
                                                    <p>M185 Mouse</p>
                                                </div>
                                            </td>
                                            <td> 02145YK796</td>
                                            <td>13</td>
                                            <td>56000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/16.png') }}"
                                                            alt="mouse"></div>
                                                    <p>Leather Handbag</p>
                                                </div>
                                            </td>
                                            <td>456DF78DER</td>
                                            <td>100</td>
                                            <td>1100.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/headphone.png') }}"
                                                            alt="headphones"></div>
                                                    <p>Headphones</p>
                                                </div>
                                            </td>
                                            <td>33KR5689B1</td>
                                            <td>78</td>
                                            <td>10000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/mouse.png') }}"
                                                            alt="green wireless mouse"></div>
                                                    <p>Green Wireless Mouse</p>
                                                </div>
                                            </td>
                                            <td>AD6789HEY0</td>
                                            <td>95</td>
                                            <td>15000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/02.png') }}"
                                                            alt="green wireless mouse"></div>
                                                    <p>Golden Headphone</p>
                                                </div>
                                            </td>
                                            <td>33KR5689B1</td>
                                            <td>45</td>
                                            <td>18000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/dvd.png') }}"
                                                            alt="DVD"></div>
                                                    <p>DVD</p>
                                                </div>
                                            </td>
                                            <td>HG5667DFQ1</td>
                                            <td>155</td>
                                            <td>5600.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-2/order/sub-product/25.png') }}"
                                                            alt="comfortable chair"></div>
                                                    <p>Comfortable Chair</p>
                                                </div>
                                            </td>
                                            <td>568GH3LLQ2</td>
                                            <td>120</td>
                                            <td>78000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/01.png') }}"
                                                            alt="Grinder"></div>
                                                    <p>Bajaj Grinder Jar</p>
                                                </div>
                                            </td>
                                            <td>56379FG3AW</td>
                                            <td>14</td>
                                            <td>19000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/email-template/3.png') }}"
                                                            alt="chairs"></div>
                                                    <p>Arm Chair</p>
                                                </div>
                                            </td>
                                            <td>5633GD3K54</td>
                                            <td>14</td>
                                            <td>1000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/phone.png') }}"
                                                            alt="i-phone"></div>
                                                    <p>Apple Iphone 14 pro</p>
                                                </div>
                                            </td>
                                            <td>56379FG3AW</td>
                                            <td>10</td>
                                            <td>120000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/07.png') }}"
                                                            alt="washing machine"></div>
                                                    <p>Wool Washing Machine</p>
                                                </div>
                                            </td>
                                            <td>33KR5689B1</td>
                                            <td>150</td>
                                            <td>55000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/product-categories/ipad.png') }}"
                                                            alt="mac laptop"></div>
                                                    <p>MacBook Air 13.3-inch</p>
                                                </div>
                                            </td>
                                            <td>589KO8PPQ8</td>
                                            <td>140</td>
                                            <td>450000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/email-template/3.png') }}"
                                                            alt="chairs"></div>
                                                    <p>Wood Chair</p>
                                                </div>
                                            </td>
                                            <td>33KR5689B1</td>
                                            <td>100</td>
                                            <td>55000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/email-template/3.png') }}"
                                                            alt="chairs"></div>
                                                    <p>Wireless Ear Buds</p>
                                                </div>
                                            </td>
                                            <td>AD6789HEY0</td>
                                            <td>14</td>
                                            <td>15000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/05.png') }}"
                                                            alt="wallet"></div>
                                                    <p>Wallet</p>
                                                </div>
                                            </td>
                                            <td>56379FG3AW</td>
                                            <td>28</td>
                                            <td>19000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/watch.png') }}"
                                                            alt="watch"></div>
                                                    <p>Sport Watch</p>
                                                </div>
                                            </td>
                                            <td>58FR7K34F6</td>
                                            <td>38</td>
                                            <td>25000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/dashboard-8/shop-categories/camera.png') }}"
                                                            alt="camera"></div>
                                                    <p>Smart Camera</p>
                                                </div>
                                            </td>
                                            <td>02145YK796</td>
                                            <td>14</td>
                                            <td>56000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <div class="light-product-box"><img class="img-fluid"
                                                            src="{{ asset('assets/images/product/accessories/08.png') }}"
                                                            alt="projector"></div>
                                                    <p>Projector</p>
                                                </div>
                                            </td>
                                            <td>AD6789HEY0</td>
                                            <td>16</td>
                                            <td>15000.00</td>
                                            <td>
                                                <div class="rating"><i class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-solid fa-star txt-warning"></i><i
                                                        class="fa-regular fa-star txt-warning"></i></div>
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
    <script src="{{ asset('assets/js/modalpage/validation-modal.js') }}"></script>
    <script src="{{ asset('assets/js/select/bootstrap-select.min.js') }}"></script>
@endsection
