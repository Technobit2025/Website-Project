@extends('layouts.simple.master')

@section('title', 'Sales Return')

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
                    <h3>Sales Return</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Reports</li>
                        <li class="breadcrumb-item active">Sales Return</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid sale-return-wrapper">
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
                        <div class="sale-return-report">
                            <div class="recent-table table-responsive custom-scrollbar">
                                <table class="table" id="sale-return-report-table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th> <span class="c-o-light f-w-600">Month</span></th>
                                            <th> <span class="c-o-light f-w-600">Total Items</span></th>
                                            <th> <span class="c-o-light f-w-600">Ordered</span></th>
                                            <th> <span class="c-o-light f-w-600">Returned</span></th>
                                            <th> <span class="c-o-light f-w-600">Reason of Return</span>
                                            </th>
                                            <th> <span class="c-o-light f-w-600">Total Replace</span></th>
                                            <th> <span class="c-o-light f-w-600">Total Return</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>January</td>
                                            <td>5</td>
                                            <td>200</td>
                                            <td>10</td>
                                            <td>Damaged Package</td>
                                            <td>10</td>
                                            <td>$520</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>February</td>
                                            <td>10</td>
                                            <td>100</td>
                                            <td>50</td>
                                            <td>Defective Item</td>
                                            <td>7</td>
                                            <td>$480</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>March</td>
                                            <td>9</td>
                                            <td>200</td>
                                            <td>9</td>
                                            <td>Received the wrong item</td>
                                            <td>25</td>
                                            <td>$800</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>April</td>
                                            <td>17</td>
                                            <td>300</td>
                                            <td>8</td>
                                            <td>Item Arrived Late</td>
                                            <td>1</td>
                                            <td>$250</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>May</td>
                                            <td>28</td>
                                            <td>260</td>
                                            <td>9</td>
                                            <td>Damaged Package</td>
                                            <td>1</td>
                                            <td>$890</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>June</td>
                                            <td>35</td>
                                            <td>100</td>
                                            <td>5</td>
                                            <td>Received the wrong item</td>
                                            <td>3</td>
                                            <td>$900</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>July</td>
                                            <td>28</td>
                                            <td>45</td>
                                            <td>2</td>
                                            <td>Repeat Order</td>
                                            <td>3</td>
                                            <td>$400</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>August</td>
                                            <td>400</td>
                                            <td>100</td>
                                            <td>20</td>
                                            <td>Item Arrived Late</td>
                                            <td>3</td>
                                            <td>$400</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>September</td>
                                            <td>45</td>
                                            <td>26</td>
                                            <td>14</td>
                                            <td>Damaged Package</td>
                                            <td>6</td>
                                            <td>$900</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>October</td>
                                            <td>8</td>
                                            <td>14</td>
                                            <td>1</td>
                                            <td>Received the wrong item</td>
                                            <td>2</td>
                                            <td>$450</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>November</td>
                                            <td>28</td>
                                            <td>25</td>
                                            <td>9</td>
                                            <td>Damaged Package</td>
                                            <td>1</td>
                                            <td>$705</td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>December</td>
                                            <td>15</td>
                                            <td>18</td>
                                            <td>5</td>
                                            <td>Damaged Package</td>
                                            <td>8</td>
                                            <td>$250</td>
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
