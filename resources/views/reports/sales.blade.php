@extends('layouts.simple.master')

@section('title', 'Sales')

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
                    <h3>Sales</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Reports</li>
                        <li class="breadcrumb-item active">Sales</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid sale-report-wrapper">
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
                        <div class="sale-report">
                            <div class="recent-table table-responsive custom-scrollbar">
                                <table class="table" id="sale-report-table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th> <span class="c-o-light f-w-600">Order Month</span></th>
                                            <th> <span class="c-o-light f-w-600">Total Sales</span></th>
                                            <th> <span class="c-o-light f-w-600">Average Order Value</span>
                                            </th>
                                            <th> <span class="c-o-light f-w-600">Total Orders</span></th>
                                            <th> <span class="c-o-light f-w-600">Growth Percentage</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>January</td>
                                            <td>20</td>
                                            <td>10</td>
                                            <td>200</td>
                                            <td>60%</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>February</td>
                                            <td>100</td>
                                            <td>20</td>
                                            <td>300</td>
                                            <td>60%</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>March</td>
                                            <td>40</td>
                                            <td>200</td>
                                            <td>400</td>
                                            <td>50%</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>April</td>
                                            <td>30</td>
                                            <td>400</td>
                                            <td>800</td>
                                            <td>40%</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>May</td>
                                            <td>100</td>
                                            <td>50</td>
                                            <td>500</td>
                                            <td>80%</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>June</td>
                                            <td>400</td>
                                            <td>40</td>
                                            <td>800</td>
                                            <td>70%</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>July</td>
                                            <td>250</td>
                                            <td>45</td>
                                            <td>260</td>
                                            <td>50%</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>August</td>
                                            <td>120</td>
                                            <td>20</td>
                                            <td>460</td>
                                            <td>80%</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>September</td>
                                            <td>190</td>
                                            <td>60</td>
                                            <td>560</td>
                                            <td>95%</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>October</td>
                                            <td>474</td>
                                            <td>75</td>
                                            <td>800</td>
                                            <td>80%</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>November</td>
                                            <td>120</td>
                                            <td>45</td>
                                            <td>100</td>
                                            <td>75%</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>December</td>
                                            <td>150</td>
                                            <td>28</td>
                                            <td>200</td>
                                            <td>90%</td>
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
