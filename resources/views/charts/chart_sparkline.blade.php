@extends('layouts.simple.master')

@section('title', 'Sparkline Chart')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Sparkline Chart</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Charts</li>
                        <li class="breadcrumb-item active">Sparkline Chart</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Mouse Speed Chart</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="mouse-speed-chart-sparkline"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Simple Bar Charts</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="custom-line-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Line Chart</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder line-chart-sparkline" id="line-chart-sparkline"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Simple Line Chart</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="simple-line-chart-sparkline"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Bar Chart</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="bar-chart-sparkline"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 box-col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Pie chart</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="flot-chart-container">
                            <div class="flot-chart-placeholder" id="pie-sparkline-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/chart/sparkline/sparkline.js') }}"></script>
    <script src="{{ asset('assets/js/chart/sparkline/sparkline-script.js') }}"></script>
@endsection
