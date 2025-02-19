@extends('layouts.simple.master')

@section('title', 'Range Slider')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/range-slider.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>Range Slider</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item">Bonus Ui</li>
                                    <li class="breadcrumb-item active">Range Slider</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div><!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="alert txt-primary alert-bg-primary alert-dismissible fade show warning-alert"
                        role="alert"><i data-feather="alert-triangle"></i>
                        <p>This is the range-slider page which uses jQuery <a
                                href="http://ionden.com/a/plugins/ion.rangeSlider" target="_blank">[
                                http://ionden.com/a/plugins/ion.rangeSlider ]</a></p><button class="btn-close"
                            type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Default Range Slider</h5>
                                    <p class="f-m-light mt-1"> Use <code>range-slider </code> class. and cuba used Ion
                                        range slider.</p>
                                </div>
                                <div class="card-body">
                                    <form class="theme-form form-label-align-right range-slider">
                                        <div class="form-group row py-1 justify-content-center">
                                            <div class="col-md-10"><input id="u-range-01" type="text"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Min Max Value</h5>
                                    <p class="f-m-light mt-1"> Use <code>range-slider </code> class. and cuba used Ion
                                        range slider.</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row py-1 justify-content-center">
                                        <div class="col-md-10"><input id="u-range-02" type="text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Prefix</h5>
                                    <p class="f-m-light mt-1"> Use <code>range-slider </code> class. and cuba used Ion
                                        range slider.</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row py-1 justify-content-center">
                                        <div class="col-md-10"><input id="u-range-03" type="text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Negative Value</h5>
                                    <p class="f-m-light mt-1"> Use <code>range-slider </code> class. and cuba used Ion
                                        range slider.</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row py-1 justify-content-center">
                                        <div class="col-md-10"><input id="u-range-04" type="text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Steps Range Slider</h5>
                                    <p class="f-m-light mt-1"> Use <code>range-slider </code> class. and cuba used Ion
                                        range slider.</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row py-1 justify-content-center">
                                        <div class="col-md-10"><input id="u-range-05" type="text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Custom Values</h5>
                                    <p class="f-m-light mt-1"> Use <code>range-slider </code> class. and cuba used Ion
                                        range slider.</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row py-1 justify-content-center">
                                        <div class="col-md-10"><input id="u-range-06" type="text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Prettify Numbers</h5>
                                    <p class="f-m-light mt-1"> Use <code>range-slider </code> class. and cuba used Ion
                                        range slider.</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row py-1 justify-content-center">
                                        <div class="col-md-10"><input id="u-range-07" type="text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Disabled</h5>
                                    <p class="f-m-light mt-1"> Use <code>range-slider </code> class. and cuba used Ion
                                        range slider.</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row py-1 justify-content-center">
                                        <div class="col-md-10"><input id="u-range-08" type="text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Manipulating UI</h5>
                                    <p class="f-m-light mt-1"> Use <code>range-slider </code> class. and cuba used Ion
                                        range slider.</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row py-1 justify-content-center">
                                        <div class="col-md-10"><input id="u-range-09" type="text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Core UI Text</h5>
                                    <p class="f-m-light mt-1"> Use <code>range-slider </code> class. and cuba used Ion
                                        range slider.</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row py-1 justify-content-center">
                                        <div class="col-md-10"><input id="u-range-10" type="text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/range-slider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/range-slider/rangeslider-script.js') }}"></script>
@endsection
