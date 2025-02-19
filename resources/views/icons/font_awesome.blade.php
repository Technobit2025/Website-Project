@extends('layouts.simple.master')

@section('title', 'Fontawesome Icon')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Font Awesome Icon</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Icons</li>
                        <li class="breadcrumb-item active">Font Awesome Icon</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="alert txt-primary alert-bg-primary alert-dismissible fade show common-alert" role="alert"><i
                data-feather="info"></i>
            <p><strong>Font Awesome icons </strong> version <strong> 6.6.0</strong> is used in this theme.
                [Official Link :<a href="https://fontawesome.com/" target="_blank"> FontAwesome Icons]</a>
            </p>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>20 Icons</h5>
                    </div>
                    <div class="card-body">
                        <div class="row icon-lists">
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-bluetooth"></i> fa fa-bluetooth
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-bluetooth-b"></i> fa
                                fa-bluetooth-b</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-codiepie"></i> fa fa-codiepie
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-credit-card-alt"></i>fa
                                fa-credit-card-alt</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-edge"></i>fa fa-edge</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-fort-awesome"></i>fa
                                fa-fort-awesome</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-hashtag"></i>fa fa-hashtag</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-mixcloud"></i>fa fa-mixcloud
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-modx"></i>fa fa-modx</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-pause-circle"></i>fa
                                fa-pause-circle</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-circle-pause"></i>fa
                                fa-pause-circle-o</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-percent"></i>fa fa-percent</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-product-hunt"></i>fa
                                fa-product-hunt</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-reddit-alien"></i>fa
                                fa-reddit-alien</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-scribd"></i>fa fa-scribd</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-shopping-bag"></i>fa
                                fa-shopping-bag</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-shopping-basket"></i>fa
                                fa-shopping-basket</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-stop-circle"></i>fa fa-stop-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-circle-stop"></i>fa
                                fa-stop-circle-o</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-usb"></i>fa fa-usb</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Currency Icons</h5>
                    </div>
                    <div class="card-body">
                        <div class="row icon-lists">
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-bitcoin-sign"></i> fa-bitcoin
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-cny"></i> fa-cny</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-dollar"></i> fa-dollar </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-eur"></i> fa-eur</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-euro"></i> fa-euro </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-gbp"></i> fa-gbp</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-inr"></i> fa-inr</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-jpy"></i> fa-jpy</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-krw"></i> fa-krw</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-money-bill-1"></i> fa-money
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-rmb"></i> fa-rmb </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-rouble"></i> fa-rouble </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-rub"></i> fa-rub</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-ruble"></i> fa-ruble </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-rupee"></i> fa-rupee </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-try"></i> fa-try</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-turkish-lira"></i>
                                fa-turkish-lira </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-usd"></i> fa-usd</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-won"></i> fa-won </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-yen"></i> fa-yen </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Web App Icons</h5>
                    </div>
                    <div class="card-body">
                        <div class="row icon-lists">
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-adjust"></i> fa-adjust</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-anchor"></i> fa-anchor</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-archive"></i> fa-archive</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-arrows"></i> fa-arrows</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-arrows-left-right"></i>
                                fa-arrows-left-right</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-arrows-up-down"></i>
                                fa-arrows-up-down</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-asterisk"></i> fa-asterisk</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-automobile"></i> fa-automobile
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-ban"></i> fa-ban</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-bank"></i> fa-bank </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-chart-column"></i>
                                fa-chart-column</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-barcode"></i> fa-barcode</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-bars"></i> fa-bars</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-beer"></i> fa-beer</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-bell"></i> fa-bell</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-bell"></i> fa-bell</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-bolt"></i> fa-bolt</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-bomb"></i> fa-bomb</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-book"></i> fa-book</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-bookmark"></i> fa-bookmark</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-bookmark"></i> fa-bookmark
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-briefcase"></i> fa-briefcase
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-bug"></i> fa-bug</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-building"></i> fa-building</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-building"></i> fa-building
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-bullhorn"></i> fa-bullhorn</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-bullseye"></i> fa-bullseye</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-cab"></i> fa-cab </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-calendar"></i> fa-calendar</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-calendar"></i> fa-calendar
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-camera"></i> fa-camera</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-camera-retro"></i>
                                fa-camera-retro</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-car"></i> fa-car</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-square-caret-down"></i>
                                fa-square-caret-down</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-square-caret-left"></i>
                                fa-square-caret-left</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-square-caret-right"></i>
                                fa-square-caret-right</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-square-caret-up"></i>
                                fa-square-caret-up</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-certificate"></i> fa-certificate
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-check"></i> fa-check</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-check-circle"></i>
                                fa-check-circle</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-circle-check"></i>
                                fa-circle-check</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-check-square"></i>
                                fa-check-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-square-check"></i>
                                fa-square-check</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-child"></i> fa-child</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-circle"></i> fa-circle</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-circle"></i> fa-circle</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-circle-notch"></i>
                                fa-circle-notch</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-clock"></i> fa-clock</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-cloud"></i> fa-cloud</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-cloud-download"></i>
                                fa-cloud-download</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-cloud-upload"></i>
                                fa-cloud-upload</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-code"></i> fa-code</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-code-fork"></i> fa-code-fork
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-coffee"></i> fa-coffee</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-cog"></i> fa-cog</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-cogs"></i> fa-cogs</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-comment"></i> fa-comment</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-comment"></i> fa-comment</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-comments"></i> fa-comments</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-comments"></i> fa-comments
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-compass"></i> fa-compass</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-credit-card"></i> fa-credit-card
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-crop"></i> fa-crop</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-crosshairs"></i> fa-crosshairs
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-cube"></i> fa-cube</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-cubes"></i> fa-cubes</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-cutlery"></i> fa-cutlery</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-dashboard"></i> fa-dashboard
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-database"></i> fa-database</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-desktop"></i> fa-desktop</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-circle-dot"></i> fa-circle-dot
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-download"></i> fa-download</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-edit"></i> fa-edit </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-ellipsis-h"></i> fa-ellipsis-h
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-ellipsis-v"></i> fa-ellipsis-v
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-envelope"></i> fa-envelope</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-envelope"></i> fa-envelope
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-envelope-square"></i>
                                fa-envelope-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-eraser"></i> fa-eraser</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-exchange"></i> fa-exchange</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-exclamation"></i> fa-exclamation
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-exclamation-circle"></i>
                                fa-exclamation-circle</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-exclamation-triangle"></i>
                                fa-exclamation-triangle</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-external-link"></i>
                                fa-external-link</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-external-link-square"></i>
                                fa-external-link-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-eye"></i> fa-eye</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-eye-slash"></i> fa-eye-slash
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-fax"></i> fa-fax</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-female"></i> fa-female</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-fighter-jet"></i> fa-fighter-jet
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-file-zipper"></i>
                                fa-file-zipper</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-file-audio"></i> fa-file-audio
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-file-code"></i> fa-file-code
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-file-excel"></i> fa-file-excel
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-file-image"></i> fa-file-image
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-file-pdf"></i> fa-file-pdf
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-file-image"></i> fa-file-image
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-file-powerpoint"></i>
                                fa-file-powerpoint</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-file-audio"></i> fa-file-audio
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-file-video"></i> fa-file-video
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-file-word"></i> fa-file-word
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-file-zipper"></i> fa-file-zipper
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-film"></i> fa-film</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-filter"></i> fa-filter</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-fire"></i> fa-fire</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-fire-extinguisher"></i>
                                fa-fire-extinguisher</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-flag"></i> fa-flag</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-flag-checkered"></i>
                                fa-flag-checkered</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-flag"></i> fa-flag</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-bolt"></i> fa-bolt </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-flask"></i> fa-flask</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-folder"></i> fa-folder</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-folder"></i> fa-folder</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-folder-open"></i> fa-folder-open
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-folder-open"></i>
                                fa-folder-open</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-face-frown"></i> fa-face-frown
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-gamepad"></i> fa-gamepad</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-gavel"></i> fa-gavel</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-gear"></i> fa-gear </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-gears"></i> fa-gears </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-gift"></i> fa-gift</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-martini-glass"></i>
                                fa-martini-glass</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-globe"></i> fa-globe</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-graduation-cap"></i>
                                fa-graduation-cap</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-user-group"></i> fa-user-group
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-hard-drive"></i> fa-hard-drive
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-headphones"></i> fa-headphones
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-heart"></i> fa-heart</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-heart"></i> fa-heart</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-history"></i> fa-history</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-house"></i> fa-home</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-image"></i> fa-image </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-inbox"></i> fa-inbox</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-info"></i> fa-info</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-info-circle"></i> fa-info-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-institution"></i> fa-institution
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-key"></i> fa-key</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-keyboard"></i> fa-keyboard
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-language"></i> fa-language</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-laptop"></i> fa-laptop</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-leaf"></i> fa-leaf</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-legal"></i> fa-legal </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-lemon"></i> fa-lemon</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-level-down"></i> fa-level-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-level-up"></i> fa-level-up</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-life-ring"></i> fa-life-ring
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-lightbulb"></i> fa-lightbulb</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-location-arrow"></i>
                                fa-location-arrow</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-lock"></i> fa-lock</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-magic"></i> fa-magic</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-magnet"></i> fa-magnet</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-mail-forward"></i>
                                fa-mail-forward </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-mail-reply"></i> fa-mail-reply
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-mail-reply-all"></i>
                                fa-mail-reply-all </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-male"></i> fa-male</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-map-marker"></i> fa-map-marker
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-meh"></i> fa-meh</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-microphone"></i> fa-microphone
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-microphone-slash"></i>
                                fa-microphone-slash</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-minus"></i> fa-minus</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-minus-circle"></i>
                                fa-minus-circle</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-mobile"></i> fa-mobile</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-mobile-phone"></i>
                                fa-mobile-phone </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-money-bill-alt"></i>
                                fa-money-bill-alt</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-moon"></i> fa-moon</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-mortar-board"></i>
                                fa-mortar-board </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-music"></i> fa-music</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-navicon"></i> fa-navicon </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-paw"></i> fa-paw</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-pencil"></i> fa-pencil</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-pencil-square"></i>
                                fa-pencil-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-pencil-alt"></i> fa-pencil-alt</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-phone"></i> fa-phone</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-phone-square"></i>
                                fa-phone-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-image"></i> fa-image </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-image"></i> fa-image</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-plane"></i> fa-plane</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-plus"></i> fa-plus</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-plus-circle"></i> fa-plus-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-power-off"></i> fa-power-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-print"></i> fa-print</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-puzzle-piece"></i>
                                fa-puzzle-piece</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-qrcode"></i> fa-qrcode</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-question"></i> fa-question</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-question-circle"></i>
                                fa-question-circle</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-quote-left"></i> fa-quote-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-quote-right"></i> fa-quote-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-random"></i> fa-random</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-recycle"></i> fa-recycle</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-arrows-rotate"></i> fa-refresh
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-reorder"></i> fa-reorder </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-reply"></i> fa-reply</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-reply-all"></i> fa-reply-all
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-retweet"></i> fa-retweet</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-road"></i> fa-road</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-rocket"></i> fa-rocket</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-rss"></i> fa-rss</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-rss-square"></i> fa-rss-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-search"></i> fa-search</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-magnifying-glass-minus"></i>
                                fa-search-minus</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-magnifying-glass-plus"></i>
                                fa-search-plus</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-paper-plane"></i> fa-paper-plane
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-paper-plane"></i> fa-paper-plane
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-share"></i> fa-share</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-share-alt"></i> fa-share-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-share-alt-square"></i>
                                fa-share-alt-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-share-square"></i>
                                fa-share-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-share-square-o"></i>
                                fa-share-square-o</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-shield"></i> fa-shield</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-shopping-cart"></i>
                                fa-shopping-cart</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-sign-in"></i> fa-sign-in</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-sign-out"></i> fa-sign-out</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-signal"></i> fa-signal</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-sitemap"></i> fa-sitemap</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-sliders"></i> fa-sliders</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-smile"></i> fa-smile</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-smile"></i> fa-smile</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-smile-beam"></i> fa-smile-beam</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-smile-beam"></i> fa-smile-beam</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-grin"></i> fa-grin</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-grin"></i> fa-grin</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-sort"></i> fa-sort</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-sort-alpha-asc"></i>
                                fa-sort-alpha-asc</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-sort-alpha-desc"></i>
                                fa-sort-alpha-desc</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-sort-amount-asc"></i>
                                fa-sort-amount-asc</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-sort-amount-desc"></i>
                                fa-sort-amount-desc</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-sort-asc"></i> fa-sort-asc</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-sort-desc"></i> fa-sort-desc
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-sort-down"></i> fa-sort-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-sort-numeric-asc"></i>
                                fa-sort-numeric-asc</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-sort-numeric-desc"></i>
                                fa-sort-numeric-desc</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-sort-up"></i> fa-sort-up </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-space-shuttle"></i>
                                fa-space-shuttle</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-spinner"></i> fa-spinner</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-spoon"></i> fa-spoon</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-star"></i> fa-star</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-star-half"></i> fa-star-half
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-star-half"></i> fa-star-half </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-star-half-alt"></i> fa-star-half-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-star"></i> fa-star</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-suitcase"></i> fa-suitcase</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-sun"></i> fa-sun</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-life-ring"></i> fa-life-ring </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-tablet"></i> fa-tablet</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-tachometer"></i> fa-tachometer
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-tag"></i> fa-tag</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-tags"></i> fa-tags</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-tasks"></i> fa-tasks</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-taxi"></i> fa-taxi</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-terminal"></i> fa-terminal</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-thumbtack"></i> fa-thumb-tack
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-thumbs-down"></i> fa-thumbs-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-thumbs-down"></i> fa-thumbs-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-thumbs-up"></i> fa-thumbs-up</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-thumbs-up"></i> fa-thumbs-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-ticket"></i> fa-ticket</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-times"></i> fa-times</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-times-circle"></i> fa-times-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-times-circle"></i> fa-times-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-tint"></i> fa-tint</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-trash-alt"></i> fa-trash-alt</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-tree"></i> fa-tree</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-trophy"></i> fa-trophy</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-truck"></i> fa-truck</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-umbrella"></i> fa-umbrella</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-university"></i> fa-university
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-unlock"></i> fa-unlock</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-unlock-alt"></i> fa-unlock-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-unsorted"></i> fa-unsorted
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-upload"></i> fa-upload</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-user"></i> fa-user</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-users"></i> fa-users</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-video-camera"></i>
                                fa-video-camera</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-volume-down"></i> fa-volume-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-volume-off"></i> fa-volume-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-volume-up"></i> fa-volume-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-warning"></i> fa-warning </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-wheelchair"></i> fa-wheelchair
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-wrench"></i> fa-wrench</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Spinner Icons</h5>
                    </div>
                    <div class="card-body">
                        <div class="row icon-lists">
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-spin fa-circle-notch"></i>
                                fa-circle-notch</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-cog fa-spin"></i> fa-cog</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-spin fa-sun"></i> fa-sun </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-spin fa-sync-alt"></i> fa-sync-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-spin fa-spinner"></i> fa-spinner
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-spin fa-compass"></i> fa-compass
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-spin fa-compact-disc"></i>
                                fa-compact-disc</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Form Control Icons</h5>
                    </div>
                    <div class="card-body">
                        <div class="row icon-lists">
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-check-square"></i> fa-check-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-check-square"></i> fa-check-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-circle"></i> fa-circle</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-circle"></i> fa-circle</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-dot-circle"></i> fa-dot-circle</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-minus-square"></i> fa-minus-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-minus-square"></i> fa-minus-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-plus-square"></i> fa-plus-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-plus-square"></i> fa-plus-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-square"></i> fa-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-square"></i> fa-square</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Text Editor Icons</h5>
                    </div>
                    <div class="card-body">
                        <div class="row icon-lists">
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-align-center"></i> fa-align-center
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-align-justify"></i> fa-align-justify
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-align-left"></i> fa-align-left</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-align-right"></i> fa-align-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-bold"></i> fa-bold</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-link"></i> fa-link </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-unlink"></i> fa-unlink</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-clipboard"></i> fa-clipboard</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-columns"></i> fa-columns</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-copy"></i> fa-copy </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-cut"></i> fa-cut </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-dedent"></i> fa-dedent </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-eraser"></i> fa-eraser</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-file"></i> fa-file</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-file"></i> fa-file</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-file-text"></i> fa-file-text</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-file-alt"></i> fa-file-alt</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-copy"></i> fa-copy</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-save"></i> fa-save</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-font"></i> fa-font</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-header"></i> fa-header</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-indent"></i> fa-indent</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-italic"></i> fa-italic</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-link"></i> fa-link</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-list"></i> fa-list</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-list-alt"></i> fa-list-alt</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-list-ol"></i> fa-list-ol</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-list-ul"></i> fa-list-ul</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-outdent"></i> fa-outdent</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-paperclip"></i> fa-paperclip</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-paragraph"></i> fa-paragraph</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-paste"></i> fa-paste </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-repeat"></i> fa-repeat</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-rotate-left"></i> fa-rotate-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-rotate-right"></i>
                                fa-rotate-right </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-save"></i> fa-save </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-scissors"></i> fa-scissors</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-strikethrough"></i> fa-strikethrough
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-subscript"></i> fa-subscript</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-superscript"></i> fa-superscript
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-table"></i> fa-table</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-text-height"></i> fa-text-height
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-text-width"></i> fa-text-width</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-th"></i> fa-th</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-th-large"></i> fa-th-large</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-th-list"></i> fa-th-list</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-underline"></i> fa-underline</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-undo"></i> fa-undo</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-edit"></i> fa-edit</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-clipboard"></i> fa-clipboard</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-pen-nib"></i> fa-pen-nib</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Directional Icons</h5>
                    </div>
                    <div class="card-body">
                        <div class="row icon-lists">
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-angles-down"></i> fa-angles-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-angles-left"></i> fa-angles-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-angles-right"></i>
                                fa-angles-right</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-angles-up"></i> fa-angles-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-angle-down"></i> fa-angle-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-angle-left"></i> fa-angle-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-angle-right"></i> fa-angle-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-angle-up"></i> fa-angle-up</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-circle-down"></i> fa-circle-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-circle-left"></i> fa-circle-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-circle-down"></i> fa-circle-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-circle-right"></i>
                                fa-circle-right</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-circle-down"></i>
                                fa-circle-down</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-circle-left"></i>
                                fa-circle-left</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-circle-down"></i>
                                fa-circle-down</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-circle-right"></i>
                                fa-circle-right</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-arrow-down"></i> fa-arrow-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-arrow-left"></i> fa-arrow-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-arrow-right"></i> fa-arrow-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-arrow-up"></i> fa-arrow-up</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-arrows-up-down-left-right"></i>
                                fa-arrows-up-down-left-right</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-minimize"></i> fa-minimize</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-left-right"></i> fa-left-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-up-down"></i> fa-up-down</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-caret-down"></i> fa-caret-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-caret-left"></i> fa-caret-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-caret-right"></i> fa-caret-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-caret-up"></i> fa-caret-up</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-square-caret-left"></i>
                                fa-square-caret-left</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-square-caret-right"></i>
                                fa-square-caret-right</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-square-caret-up"></i>
                                fa-square-caret-up</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-square-caret-down"></i>
                                fa-square-caret-down</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-circle-chevron-down"></i>
                                fa-circle-chevron-down</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-circle-chevron-left"></i>
                                fa-circle-chevron-left</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-circle-chevron-right"></i>
                                fa-circle-chevron-right</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-circle-chevron-up"></i>
                                fa-circle-chevron-up</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-chevron-down"></i>
                                fa-chevron-down</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-chevron-left"></i>
                                fa-chevron-left</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-chevron-right"></i>
                                fa-chevron-right</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-chevron-up"></i> fa-chevron-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-sort-alpha-up-alt"></i>
                                fa-sort-alpha-up-alt</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-sort-alpha-up"></i> fa-sort-alpha-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-sort-alpha-down-alt"></i>
                                fa-sort-alpha-down-alt</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fas fa-sort-alpha-down"></i>
                                fa-sort-alpha-down</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-arrow-down-long"></i>
                                fa-arrow-down-long</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-arrow-left-long"></i>
                                fa-arrow-left-long</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-arrow-right-long"></i>
                                fa-arrow-right-long</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-arrow-up-long"></i>
                                fa-arrow-up-long</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-hand-point-down"></i>
                                fa-long-arrow-down </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-hand-point-left"></i>
                                fa-long-arrow-left </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-hand-point-right"></i>
                                fa-long-arrow-right </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="far fa-hand-point-up"></i> fa-long-arrow-up
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Video Player Icons</h5>
                    </div>
                    <div class="card-body">
                        <div class="row icon-lists">
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-maximize"></i> fa-maximize</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-backward"></i> fa-backward</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-compress"></i> fa-compress</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-eject"></i> fa-eject</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-expand"></i> fa-expand</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-fast-backward"></i>
                                fa-fast-backward</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-fast-forward"></i>
                                fa-fast-forward</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-forward"></i> fa-forward</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-pause"></i> fa-pause</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-play"></i> fa-play</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-play-circle"></i> fa-play-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-circle-play"></i>
                                fa-circle-play</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-step-backward"></i>
                                fa-step-backward</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-step-forward"></i>
                                fa-step-forward</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-stop"></i> fa-stop</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Brand Icons</h5>
                    </div>
                    <div class="card-body">
                        <div class="row icon-lists">
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-adn"></i> fa-adn</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-android"></i> fa-android</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-apple"></i> fa-apple</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-behance"></i> fa-behance</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-behance-square"></i>
                                fa-behance-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-bitbucket"></i> fa-bitbucket
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-bitcoin"></i> fa-bitcoin</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-btc"></i> fa-btc</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-codepen"></i> fa-codepen</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-css3"></i> fa-css3</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-delicious"></i> fa-delicious
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-deviantart"></i>
                                fa-deviantart</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-digg"></i> fa-digg</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-dribbble"></i> fa-dribbble
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-dropbox"></i> fa-dropbox
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-drupal"></i> fa-drupal</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-empire"></i> fa-empire</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-facebook"></i> fa-facebook
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-facebook-square"></i>
                                fa-facebook-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-flickr"></i> fa-flickr</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-foursquare"></i>
                                fa-foursquare</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-git"></i> fa-git</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-git-square"></i>
                                fa-git-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-github"></i> fa-github</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-github-alt"></i>
                                fa-github-alt</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-github-square"></i>
                                fa-github-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-gratipay"></i> fa-gratipay
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-google"></i> fa-google</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-google-plus"></i>
                                fa-google-plus</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-google-plus-square"></i>
                                fa-google-plus-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-hacker-news"></i>
                                fa-hacker-news</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-html5"></i> fa-html5</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-instagram"></i> fa-instagram
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-joomla"></i> fa-joomla</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-jsfiddle"></i> fa-jsfiddle
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-linkedin-in"></i>
                                fa-linkedin-in</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-linkedin"></i> fa-linkedin
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-linux"></i> fa-linux</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-maxcdn"></i> fa-maxcdn</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-openid"></i> fa-openid</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-pagelines"></i> fa-pagelines
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-pied-piper"></i>
                                fa-pied-piper</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-pied-piper-alt"></i>
                                fa-pied-piper-alt</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-pinterest"></i> fa-pinterest
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-pinterest-square"></i>
                                fa-pinterest-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-qq"></i> fa-qq</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-rebel"></i> fa-rebel</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-reddit"></i> fa-reddit</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-reddit-square"></i>
                                fa-reddit-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-renren"></i> fa-renren</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-share-alt"></i> fa-share-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-share-alt-square"></i>
                                fa-share-alt-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-skype"></i> fa-skype</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-slack"></i> fa-slack</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-soundcloud"></i>
                                fa-soundcloud</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-spotify"></i> fa-spotify
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-stack-exchange"></i>
                                fa-stack-exchange</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-stack-overflow"></i>
                                fa-stack-overflow</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-steam"></i> fa-steam</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-steam-square"></i>
                                fa-steam-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-stumbleupon"></i>
                                fa-stumbleupon</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-stumbleupon-circle"></i>
                                fa-stumbleupon-circle</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-tencent-weibo"></i>
                                fa-tencent-weibo</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-trello"></i> fa-trello</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-tumblr"></i> fa-tumblr</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-tumblr-square"></i>
                                fa-tumblr-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-twitter"></i> fa-twitter
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-twitter-square"></i>
                                fa-twitter-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-vimeo-square"></i>
                                fa-vimeo-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-vine"></i> fa-vine</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-vk"></i> fa-vk</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-weixin"></i> fa-weixin </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-weibo"></i> fa-weibo</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-weixin"></i> fa-weixin</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-windows"></i> fa-windows
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-wordpress"></i> fa-wordpress
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-xing"></i> fa-xing</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-xing-square"></i>
                                fa-xing-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-yahoo"></i> fa-yahoo</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-youtube"></i> fa-youtube
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-square-youtube"></i>
                                fa-square-youtube</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-x-twitter"></i> fa-x-twitter
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-brands fa-square-x-twitter"></i>
                                fa-square-x-twitter</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Medical Icons</h5>
                    </div>
                    <div class="card-body">
                        <div class="row icon-lists">
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-ambulance"></i> fa-ambulance
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-h-square"></i> fa-h-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-regular fa-hospital"></i> fa-hospital
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-medkit"></i> fa-medkit</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-plus-square"></i>
                                fa-plus-square</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-stethoscope"></i>
                                fa-stethoscope</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-user-md"></i> fa-user-md</div>
                            <div class="col-sm-6 col-md-4 col-xl-3"><i class="fa-solid fa-wheelchair"></i> fa-wheelchair
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    <div class="icon-hover-bottom p-fixed fa-fa-icon-show-div opacity-0">
        <div class="container-fluid">
            <div class="row">
                <div class="icon-popup">
                    <div class="close-icon"><i class="icofont icofont-close"></i></div>
                    <div class="icon-first"><i class="icon-drupal fa-2x" id="icon_main"></i></div>
                    <div class="icon-class">
                        <label class="icon-title">Class</label><span id="fclass1">icon-drupal</span>
                    </div>
                    <div class="icon-last icon-last">
                        <label class="icon-title">Markup</label>
                        <div class="form-inline">
                            <div class="form-group">
                                <input class="inp-val form-control m-r-10" id="input_copy" type="text"
                                    value="" readonly="readonly">
                                <button class="btn btn-primary notification" onclick="myFunction()">Copy Text</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/icons-notify.js') }}"></script>
    <script src="{{ asset('assets/js/icons/icon-clipart.js') }}"></script>
@endsection
