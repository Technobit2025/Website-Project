@extends('layouts.simple.master')

@section('title', 'Input Mask')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Input Mask</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Controls</li>
                        <li class="breadcrumb-item active">Input Mask</li>
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
                        <h5>Input Masks</h5>
                        <p class="f-m-light mt-1"> Input mask is used for formatting data for consistency
                            and readability (Phone Number, Card Number, Date, Currency...etc)</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="card-wrapper border rounded-3 light-card checkbox-checked">
                                    <h6 class="sub-title">Date Format</h6>
                                    <form class="row g-3">
                                        <div class="col-12"><label class="col-form-label"
                                                for="cleave-date1">Date</label><input class="form-control" id="cleave-date1"
                                                type="text" placeholder="DD-MM-YYYY">
                                        </div>
                                        <div class="col-12"><label class="col-form-label" for="cleave-date2">Date Format
                                                Type</label><input class="form-control" id="cleave-date2" type="text"
                                                placeholder="MM-YYYY"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card-wrapper border rounded-3 light-card checkbox-checked">
                                    <h6 class="sub-title">Time Format</h6>
                                    <form class="row g-3">
                                        <div class="col-12"><label class="col-form-label" for="cleave-time1">Time Format
                                                Type</label><input class="form-control" id="cleave-time1" type="text"
                                                placeholder="hh:mm:ss"></div>
                                        <div class="col-12"> <label class="col-form-label" for="cleave-time2">Hour/month
                                                Type</label><input class="form-control" id="cleave-time2" type="text"
                                                placeholder="hh:mm"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-wrapper border rounded-3 light-card checkbox-checked">
                                    <h6 class="sub-title">Default Input Mask</h6>
                                    <form class="row g-3">
                                        <div class="col-xxl-4 col-sm-6"> <label class="col-form-label"
                                                for="cleave-number-format">Currency</label><input class="form-control"
                                                id="cleave-number-format" type="text" placeholder="Enter number"></div>
                                        <div class="col-xxl-4 col-sm-6"> <label class="col-form-label"
                                                for="cleave-type-prefix">Prefix</label><input class="form-control"
                                                id="cleave-type-prefix" type="text" placeholder="Prefix-xxxx-xxxx-xxxx">
                                        </div>
                                        <div class="col-xxl-4 col-sm-6"> <label class="col-form-label"
                                                for="cleave-type-delimiter">Delimiter</label><input class="form-control"
                                                id="cleave-type-delimiter" type="text" placeholder="xxx·xxx·xxx"></div>
                                        <div class="col-xxl-4 col-sm-6"><label class="form-label"
                                                for="cleave-phone-number">Phone Number</label><input class="form-control"
                                                id="cleave-phone-number" type="text" placeholder="(xxx)xxx-xxxx"></div>
                                        <div class="col-xxl-4 col-sm-6"><label class="form-label"
                                                for="cleave-card-number">Card Number</label><input class="form-control"
                                                id="cleave-card-number" type="text" placeholder="xxxx xxxx xxxx xxxx">
                                        </div>
                                        <div class="col-xxl-4 col-sm-6"><label class="form-label"
                                                for="tailprefix">Tailprefix</label><input class="form-control"
                                                id="tailprefix" type="text" placeholder="0000.00€"></div>
                                        <div class="col-xxl-4 col-sm-6"><label class="form-label"
                                                for="cleave-ip-address">IP Address</label><input class="form-control"
                                                id="cleave-ip-address" type="text" placeholder="192.168.38.45"></div>
                                        <div class="col-xxl-4 col-sm-6"><label class="form-label"
                                                for="cleave-multiple-delimiter">Use Multiple
                                                Delimiters</label><input class="form-control"
                                                id="cleave-multiple-delimiter" type="text"
                                                placeholder="489.254.587-47"></div>
                                        <div class="col-xxl-4 col-sm-6"><label class="form-label"
                                                for="cleave-multiple-characters">Multiple Characters in
                                                Delimiter</label><input class="form-control"
                                                id="cleave-multiple-characters" type="text"
                                                placeholder="658 | 785 | GHD | 785"></div>
                                    </form>
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
    <script src="{{ asset('assets/js/cleave/cleave.min.js') }}"></script>
    <script src="{{ asset('assets/js/cleave/custom-cleave.js') }}"></script>
@endsection
