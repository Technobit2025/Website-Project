@extends('layouts.simple.master')

@section('title', 'Pricing')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Pricing</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Pricing</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Become a member</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 pricing-block">
                            <div class="col-lg-3 col-sm-6">
                                <div class="pricingtable">
                                    <div class="pricingtable-header">
                                        <h3 class="title">Standard</h3>
                                    </div>
                                    <div class="price-value"><span class="currency">$</span><span
                                            class="amount">10</span><span class="duration">/mo</span></div>
                                    <ul class="pricing-content">
                                        <li>50GB Disk Space</li>
                                        <li>50 Email Accounts</li>
                                        <li>Maintenance</li>
                                        <li>15 Subdomains</li>
                                    </ul>
                                    <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Sign
                                            Up</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="pricingtable">
                                    <div class="pricingtable-header">
                                        <h3 class="title">Premium</h3>
                                    </div>
                                    <div class="price-value"><span class="currency">$</span><span
                                            class="amount">20</span><span class="duration">/mo</span></div>
                                    <ul class="pricing-content">
                                        <li>10% on all product</li>
                                        <li>50 Email Accounts</li>
                                        <li>Maintenance</li>
                                        <li>15 Subdomains</li>
                                    </ul>
                                    <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Sign
                                            Up</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="pricingtable">
                                    <div class="pricingtable-header">
                                        <h3 class="title">Business</h3>
                                    </div>
                                    <div class="price-value"><span class="currency">$</span><span
                                            class="amount">50</span><span class="duration">/mo</span></div>
                                    <ul class="pricing-content">
                                        <li>Upload 50 product</li>
                                        <li>50 Email Accounts</li>
                                        <li>Maintenance</li>
                                        <li>15 Subdomains</li>
                                    </ul>
                                    <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Sign
                                            Up</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="pricingtable">
                                    <div class="pricingtable-header">
                                        <h3 class="title">Author pack</h3>
                                    </div>
                                    <div class="price-value"><span class="currency">$</span><span
                                            class="amount">75</span><span class="duration">/mo</span></div>
                                    <ul class="pricing-content">
                                        <li>Upload 50 product</li>
                                        <li>50 Email Accounts</li>
                                        <li>Maintenance</li>
                                        <li>15 Subdomains</li>
                                    </ul>
                                    <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Sign
                                            Up</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Simple Pricing Card</h5>
                    </div>
                    <div class="card-body pricing-content">
                        <div class="row g-sm-4 g-3">
                            <div class="col-xxl-3 col-sm-6 box-col-6">
                                <div class="card text-center pricing-simple h-100">
                                    <div class="card-body">
                                        <h4>Standard</h4>
                                        <h5>$15</h5>
                                        <ul class="pricing-content">
                                            <li> <i class="fa-solid fa-circle-check"></i>No setup costs</li>
                                            <li> <i class="fa-solid fa-circle-check"></i>Hotline Support for 24/7</li>
                                            <li> <i class="fa-solid fa-circle-check"></i>Priority Support</li>
                                            <li> <i class="fa-solid fa-circle-check"></i>Key Components</li>
                                        </ul>
                                    </div><a class="btn btn-lg btn-primary btn-block" href="#">Purchase</a>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6 box-col-6">
                                <div class="card text-center pricing-simple h-100">
                                    <div class="card-body">
                                        <h4>Business</h4>
                                        <h5>$25</h5>
                                        <ul class="pricing-content">
                                            <li> <i class="fa-solid fa-circle-check"></i>40+ Demos</li>
                                            <li> <i class="fa-solid fa-circle-check"></i>Customer Supports</li>
                                            <li> <i class="fa-solid fa-circle-check"></i>Email Supports</li>
                                            <li> <i class="fa-solid fa-circle-check"></i>Basic Analytics</li>
                                        </ul>
                                    </div><a class="btn btn-lg btn-primary btn-block" href="#">Purchase</a>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6 box-col-6">
                                <div class="card text-center pricing-simple h-100">
                                    <div class="card-body">
                                        <h4>Premium</h4>
                                        <h5>$35</h5>
                                        <ul class="pricing-content">
                                            <li> <i class="fa-solid fa-circle-check"></i>Priority Email Supports</li>
                                            <li> <i class="fa-solid fa-circle-check"></i>Customizable Dashboards</li>
                                            <li> <i class="fa-solid fa-circle-check"></i>Advanced Analytics</li>
                                            <li> <i class="fa-solid fa-circle-check"></i>All Basic Features</li>
                                        </ul>
                                    </div><a class="btn btn-lg btn-primary btn-block" href="#">Purchase</a>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6 box-col-6">
                                <div class="card text-center pricing-simple h-100">
                                    <div class="card-body">
                                        <h4>Extra</h4>
                                        <h5>$45</h5>
                                        <ul class="pricing-content">
                                            <li> <i class="fa-solid fa-circle-check"></i>Customized Onboarding and Training
                                            </li>
                                            <li> <i class="fa-solid fa-circle-check"></i>Hotline Support for 24/7</li>
                                            <li> <i class="fa-solid fa-circle-check"></i>Access to all templates</li>
                                            <li> <i class="fa-solid fa-circle-check"></i>Priority email support</li>
                                        </ul>
                                    </div><a class="btn btn-lg btn-primary btn-block" href="#">Purchase</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
@endsection
