@extends('layouts.simple.master')

@section('title', 'Sitemap')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Sitemap</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Sitemap</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid sitemap-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Default Sitemap</h5>
                    </div>
                    <div class="card-body default-sitemap">
                        <div class="row g-5">
                            <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                <h6 class="sub-title">Dashboard</h6>
                                <div class="common-flex"><a href="#!">Analytics</a><a href="#!">Logistics</a><a
                                        href="#!">Projects</a><a href="#!">E-commerce</a><a
                                        href="#!">CRM</a><a href="#!">POS</a></div>
                            </div>
                            <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                <h6 class="sub-title">User Management</h6>
                                <div class="common-flex"><a href="#!">Roles & Permission</a><a href="#!">User
                                        Cards</a><a href="#!">Two Factor Authentication</a><a href="#!">User
                                        List</a><a href="#!">Add User</a><a href="#!">User Profile</a></div>
                            </div>
                            <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                <h6 class="sub-title">Settings</h6>
                                <div class="common-flex"><a href="#!">Manage API </a><a href="#!">Themes</a><a
                                        href="#!">Site Info</a><a href="#!">Email Settings</a><a
                                        href="#!">Password Policies</a></div>
                            </div>
                            <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                <h6 class="sub-title">Reports</h6>
                                <div class="common-flex"><a href="#!">Product Report</a><a href="#!">Sales
                                        Report</a><a href="#!">Sales Return</a><a href="#!">Customer Order</a>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                <h6 class="sub-title">Error Pages</h6>
                                <div class="common-flex"><a href="#!">403 Error</a><a href="#!">404 Error</a><a
                                        href="#!">500 Error</a></div>
                            </div>
                            <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                <h6 class="sub-title">Blog</h6>
                                <div class="common-flex"><a href="#!">Add Blog</a><a href="#!">Blog Details</a>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                <h6 class="sub-title">Authentication </h6>
                                <div class="common-flex"><a href="#!">Unlock User</a><a href="#!">Forgot
                                        Password</a><a href="#!">Reset Password</a><a href="#!">Maintenance</a>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-md-4 col-sm-6 box-col-4">
                                <h6 class="sub-title">Support</h6>
                                <div class="common-flex"><a href="#!">FAQs</a><a href="#!">Pricing</a><a
                                        href="#!">Support Ticket</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Tree Structure Sitemap</h5>
                    </div>
                    <div class="card-body horizontal-sitemap">
                        <ul class="main-site">
                            <li> <a class="main-root" href="#!">Home</a>
                                <ul class="tier-1 custom-scrollbar">
                                    <li> <a href="#!">Ecommerce</a>
                                        <ul class="tier-2">
                                            <li> <a href="#!">Products </a>
                                                <ul class="tier-3">
                                                    <li> <a href="#!">Add Product </a></li>
                                                    <li><a href="#!">Products Grid </a></li>
                                                    <li><a href="#!">Products List </a></li>
                                                    <li><a href="#!">Product Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#!">Cart</a></li>
                                            <li> <a href="#!">Wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="#!">Reports</a>
                                        <ul class="tier-2">
                                            <li> <a href="#!">Products </a></li>
                                            <li> <a href="#!">Sales </a></li>
                                            <li> <a href="#!">Sales Return </a></li>
                                            <li> <a href="#!">Customer Order</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="#!">Projects</a>
                                        <ul class="tier-2">
                                            <li> <a href="#!">Project Details</a></li>
                                            <li> <a href="#!">Project List</a></li>
                                            <li> <a href="#!">Create New</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="#!">Other Pages</a>
                                        <ul class="tier-2">
                                            <li> <a href="#!">Starter Kit</a></li>
                                            <li> <a href="#!">Authentication</a></li>
                                            <li> <a href="#!">Manage API</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
