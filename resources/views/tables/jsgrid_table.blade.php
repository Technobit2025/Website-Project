@extends('layouts.simple.master')

@section('title', 'Js Grid Table')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jsgrid.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>JS Grid Tables</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Tables</li>
                        <li class="breadcrumb-item active"> JS Grid Tables</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Scenario</h5>
                        <p class="f-m-light mt-1">Grid with filtering, editing, inserting, deleting, sorting
                            and paging. Data provided by controller.</p>
                    </div>
                    <div class="card-body">
                        <div class="basic_table" id="basicScenario"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Sorting Scenario</h5>
                        <p class="f-m-light mt-1">Sorting can be done not only with column header
                            interaction, but also with sort method.</p>
                    </div>
                    <div class="card-body">
                        <div class="sort-panel mb-3"><label>Sorting Field:<select
                                    class="btn btn-primary dropdown-toggle btn-md pe-5 b-r-0" id="sortingField">
                                    <option>Id</option>
                                    <option>Product</option>
                                    <option>Order Id</option>
                                    <option>Price</option>
                                    <option>Quantity</option>
                                    <option>Shipped</option>
                                    <option>Total</option>
                                </select></label>
                            <div class="d-inline"><button class="btn btn-md btn-secondary b-r-0" id="sort"
                                    type="button">Sort</button></div>
                        </div>
                        <div class="js-shorting" id="sorting-table"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Batch Delete</h5>
                        <p class="f-m-light mt-1">Cell content of every column can be customized with
                            itemTemplate, headerTemplate, filterTemplate and insertTemplate functions
                            specified in field config. This example shows how to implement batch deleting
                            with custom field for selecting items.</p>
                    </div>
                    <div class="card-body">
                        <div id="batchDelete"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/jsgrid/jsgrid.min.js') }}"></script>
    <script src="{{ asset('assets/js/jsgrid/griddata.js') }}"></script>
    <script src="{{ asset('assets/js/jsgrid/jsgrid.js') }}"></script>
@endsection
