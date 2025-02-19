@extends('layouts.simple.master')

@section('title', 'Morris Chart')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Morris Chart</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Charts</li>
                        <li class="breadcrumb-item active">Morris Chart</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Line Chart</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="morris-line-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Updating Data</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="updating-data-morris-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Decimal Data</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder float-start" id="decimal-morris-chart"></div>
                            <p class="float-end" id="choices"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Displaying X Labels Diagonally</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="x-Labels-Diagonally-morris-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Bar Line Chart</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="bar-line-chart-morris"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Displaying X Labels Diagonally(Bar Chart)</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="x-lable-morris-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Stacked Bars Chart</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="stacked-bar-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Simple Bar Charts</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="morris-simple-bar-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Area charts behaving like line Charts</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="graph123"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Donut Color Chart</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="donut-color-chart-morris"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/chart/morris-chart/raphael.js') }}"></script>
    <script src="{{ asset('assets/js/chart/morris-chart/morris.js') }}"></script>
    <script src="{{ asset('assets/js/chart/morris-chart/prettify.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart/morris-chart/morris-script.js') }}"></script>
@endsection
