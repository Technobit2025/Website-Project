@extends('layouts.simple.master')

@section('title', 'Ribbons')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Ribbons</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Ribbons</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid"><!-- ribbon left (default) side-->
        <div class="row">
            <div class="col-sm-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Variations Of Left Ribbons</h5>
                        <p class="f-m-light mt-1">Use class of
                            <code>ribbon-*</code>[ribbon-space-bottom/ribbon-clip/ribbon-vertical-left/ribbon-bookmark/ribbon-clip-bottom/ribbon-vertical-left]
                            through create ribbons and all ribbon colors are
                            available.<code>[ribbon-*] </code>
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper border border-1 height-equal alert-light-light">
                                    <div class="ribbon ribbon-primary ribbon-space-bottom">SAVE 10%</div>
                                    <p>Ribbon designs use the class of <b>ribbon-space-bottom</b> through
                                        create top-start ribbon and common class use "ribbon".</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper border border-1 height-equal">
                                    <div class="ribbon ribbon-secondary ribbon-clip">SAVE 50%</div>
                                    <p>Ribbon designs use the class of <b>ribbon-clip</b> through create
                                        top-start ribbon and common class use "ribbon".</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div
                                    class="ribbon-vertical-left-wrapper border border-1 vertical-lp-space height-equal alert-light-light">
                                    <div class="ribbon ribbon-warning ribbon-vertical-left"><i
                                            class="icofont icofont-love"></i></div>
                                    <p>Ribbon designs use the class of <b>ribbon-vertical-left</b> through
                                        create top-start ribbon and common class use "ribbon".</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper border border-1 height-equal">
                                    <div class="ribbon ribbon-info ribbon-bookmark">Cashback 20%</div>
                                    <p>Ribbon designs use the class of <b>ribbon-bookmark</b> through create
                                        top-start ribbon and common class use "ribbon".</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div
                                    class="ribbon-wrapper-bottom border border-1 clip-bp-space height-equal alert-light-light">
                                    <div class="ribbon ribbon-dark ribbon-clip-bottom">40% OFF</div>
                                    <p>Ribbon designs use the class of <b>ribbon-clip-bottom</b> through
                                        create bottom-start ribbon and common class use "ribbon".</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-vertical-left-wrapper border border-1 vertical-lp-space height-equal">
                                    <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-danger">
                                        <i class="icon-gift"></i>
                                    </div>
                                    <p>Ribbon designs use the class of <b>ribbon-vertical-left</b> through
                                        create top-start ribbon and common class use "ribbon".</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ribbon right side(default)-->
        <div class="row">
            <div class="col-sm-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Variations Of Right Ribbons</h5>
                        <p class="f-m-light mt-1">Use class of
                            <code>ribbon-*</code>[ribbon-right/ribbon-clip-right/ribbon-vertical-right/ribbon-bookmark/ribbon-clip-bottom-right/ribbon-vertical-right]
                            through create ribbons and all ribbon colors are
                            available.<code>[ribbon-*]</code>
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper border border-1 height-equal">
                                    <div class="ribbon ribbon-dark ribbon-right">50% OFF</div>
                                    <p>Ribbon designs use the class of <b>ribbon-right</b> through create
                                        top-end ribbon and common class use "ribbon".</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper-right border border-1 height-equal alert-light-light">
                                    <div class="ribbon ribbon-primary ribbon-clip-right ribbon-right">SAVE
                                        50%</div>
                                    <p>Ribbon designs use the class of <b>ribbon-right &
                                            ribbon-clip-right</b> through create top-end ribbon and common
                                        class use "ribbon".</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-vertical-right-wrapper border border-1 vertical-rp-space height-equal">
                                    <div class="ribbon ribbon-bookmark ribbon-vertical-right ribbon-secondary">
                                        <i class="icon-signal"></i>
                                    </div>
                                    <p>Ribbon designs use the class of <b>ribbon-vertical-right &
                                            ribbon-bookmark</b> through create top-end ribbon and common
                                        class use "ribbon".</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper border border-1 height-equal alert-light-light">
                                    <div class="ribbon ribbon-warning ribbon-bookmark ribbon-right">SAVE 20%
                                    </div>
                                    <p>Ribbon designs use the class of <b>ribbon-right & ribbon-bookmark</b>
                                        through create top-end ribbon and common class use "ribbon".</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="ribbon-wrapper-bottom border border-1 clip-bp-space height-equal">
                                    <div class="ribbon ribbon-success ribbon-clip-bottom-right">Cashback 10%
                                    </div>
                                    <p>Ribbon designs use the class of <b>ribbon-clip-bottom-right</b>
                                        through create bottom-end ribbon and common class use "ribbon".</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div
                                    class="ribbon-vertical-right-wrapper border border-1 vertical-rp-space height-equal alert-light-light">
                                    <div class="ribbon ribbon-danger ribbon-vertical-right"><i class="fa fa-taxi"></i></div>
                                    <p>Ribbon designs use the class of <b>ribbon-vertical-right</b> through
                                        create top-end ribbon and common class use "ribbon".</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Animated Ribbons</h5>
                        <p class="f-m-light mt-1">Use class of
                            <code>[smooth-animate / vertical-left-animate ] </code>through create ribbons
                            and all ribbon animations are available.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-4 col-sm-6">
                                <div class="vertical-ribbon-animate">
                                    <div
                                        class="ribbon-vertical-right-wrapper border border-1 vertical-rp-space height-equal">
                                        <div class="ribbon ribbon-vertical-right ribbon-secondary ribbon-bottom-arrow">
                                            <span>10% OFF</span>
                                        </div>
                                        <p>Ribbon designs use the class of <b>ribbon-vertical-right-wrapper
                                                & ribbon-bottom-arrow</b> through create top-start ribbon
                                            and common class use "ribbon".</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div
                                    class="animated-ribbon ribbon-wrapper smooth-animate border border-1 height-equal alert-light-light">
                                    <p class="mb-0">Ribbon designs use the class of <b>animated-ribbon &
                                            smooth-animate</b> through create bottom-end ribbon and common
                                        class use "ribbon".</p>
                                    <div class="box">
                                        <div class="ribbon"><i class="back"></i><i
                                                class="front"><span>Upcoming</span></i></div>
                                    </div>
                                    <div class="box-svg"><svg class="ribbon-svg" id="ribbon" width="300"
                                            height="60"></svg></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="ribbon-wrapper smooth-animate border border-1 height-equal">
                                    <p>Ribbon designs use the class of <b>smooth-animate</b> through create
                                        top-start ribbon and common class use "ribbon".</p><a class="media-image"
                                        href="#!"><span class="label label-new">Hot</span></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="vertical-left-animate">
                                    <div class="ribbon-wrapper border border-1 height-equal alert-light-light">
                                        <div class="ribbon ribbon-success ribbon-bookmark">
                                            <span>Latest</span><i class="fa fa-bolt"></i>
                                        </div>
                                        <p>Ribbon designs use the class of <b>ribbon-bookmark &
                                                vertical-left-animate</b> through create top-start ribbon
                                            and common class use "ribbon".</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="triangular-ribbon">
                                    <div class="ribbon-wrapper border border-1 height-equal">
                                        <div class="ribbon triangular-ribbon-box">
                                            <div><svg>
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#pricing') }}"></use>
                                                </svg></div>
                                        </div>
                                        <p>Ribbon designs use the class of <b>triangular-ribbon-box</b>
                                            through create top-start ribbon and common class use "ribbon".
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="vertical-ribbon-animate">
                                    <div
                                        class="ribbon-vertical-right-wrapper border border-1 vertical-rp-space height-equal alert-light-light">
                                        <div class="ribbon ribbon-bookmark ribbon-vertical-right ribbon-warning">
                                            <div><i class="fa fa-bolt"></i><span>FlashSale</span></div>
                                        </div>
                                        <p>Ribbon designs use the class of <b>ribbon-vertical-right &
                                                ribbon-bookmark</b> through create top-end ribbon and common
                                            class use "ribbon".</p>
                                    </div>
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
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
