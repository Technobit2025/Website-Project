@extends('layouts.simple.master')

@section('title', 'Manage API')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Manage API</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Manage API</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid api-manage">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-no-border text-end">
                        <div class="card-header-right-icon"><a class="btn btn-primary f-w-500" href="#!"
                                data-bs-toggle="modal" data-bs-target="#apiManagement"><i
                                    class="fa-solid fa-plus pe-2"></i>Add</a></div>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="api-management">
                            <div class="recent-table table-responsive custom-scrollbar">
                                <table class="table" id="api-manage-table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th> <span class="c-o-light f-w-600">API Name</span></th>
                                            <th> <span class="c-o-light f-w-600">API Key </span></th>
                                            <th> <span class="c-o-light f-w-600">Status</span></th>
                                            <th> <span class="c-o-light f-w-600">Action</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>International Flight Tracking API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">9b78c5a1-f4e9-4b3d-a8ef-13b9e6ad48a2</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Comprehensive StockMarket Data API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">e5f8d9a1-3b7c-4d6a-a8e4-9c2d1b3e8f4a</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-danger">Inactive</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Detailed Movie Information Ratings API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">d8e1b7a4-0c6d-4b3f-9a8e-3b9d2e7f1c5a</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>GeoLocation Mapping API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">a3f9e8b1-4c6d-4d2f-8b1e-9a4d6e8f3b0a</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-danger">Inactive</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Weather Forecasting Monitoring API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">a4f1b0a9-cfd6-4f5b-ae31-3e8a1b6e5d22</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-danger">Inactive</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Cryptocurrency Price Tracking API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">d9b1f4e8-3a6d-4c2f-8e7b-1d5c9e3b2f4a</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Book Search Information API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">e9f1d8b4-9a6c-4f7d-8e2b-3a1d7c9b5f8e</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Music Streaming Metadata API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">f7b8c3e1-0d6a-4c9b-8e1f-9b4d2a3f7c5e</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Seismic Data on Earthquake Activity API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">d3e7a8b9-5c1d-4f2b-9e3a-1b6f9d4e8c2a</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Route Optimization for Traffic Conditions API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">e4a9f1b3-2c8d-4d6e-8b7a-3c1f5e9b4d7a</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Global Property Listings / Appraisal Services API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">c7f8a1d9-5b2d-4c3e-9a6f-2e4d9b1c7f8a</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Comprehensive Reviews of Restaurant Searches API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">e9b2f1a8-7d3c-4e6b-9a1d-4c8b3f7a2d9e</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-danger">Inactive</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Statistics for Sports Scores API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">a2e9b1d7-9c6d-4f3b-8e1a-6f4d3b7e2c5a</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Booking and Planning Travel Itineraries API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">b3f1c8a2-0d7e-4c2b-9a6f-1d8b9e3f5c7a</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Image Identification and Processing API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">c4a9e7b1-1d6c-4f3e-9b8a-2e7d1c5b8f3a</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-danger">Inactive</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Voice Synthesis using Voice Recognition API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">d5c3b8f1-2e7a-4d6b-8a9c-3f4e9d1a5c7e</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-danger">Inactive</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Virtual Reality Integration API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">e6b9a1c4-3d8e-4f2b-9c7a-1d9f3e5b7c6a</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-danger">Inactive</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Alert System for Natural Disasters API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">b8f1e4c7-6d9b-4f3a-8e1d-2c5a9d3e7b4a</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-danger">Inactive</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Global Financial Market Analytics API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">c9a1b7e2-5d4f-4b8c-9e3a-1f7d2c6b5e4a</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td> <span>Energy Use Efficiency Tracking API</span></td>
                                            <td>
                                                <div class="common-f-start"><span
                                                        class="copied-api">d7c1f8e5-2b9a-4d3f-8e1d-6a9f3c2b4e5d</span>
                                                    <div class="square-l-white"><i class="fa-solid fa-copy copy-btn"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <span class="badge badge-light-success">Active</span></td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!">
                                                        <svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-4" href="#!">
                                                        <svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="apiManagement" tabindex="-1" aria-labelledby="apiManagement" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content category-popup">
                    <div class="modal-header">
                        <h5 class="modal-title">ADD API</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0 custom-input">
                        <div class="text-start">
                            <div class="p-20">
                                <form class="row g-3 needs-validation" novalidate="">
                                    <div class="col-md-12">
                                        <label class="form-label" for="validationAPIName">API Name<span
                                                class="txt-danger">*</span></label>
                                        <input class="form-control" id="validationAPIName" type="text"
                                            placeholder="Enter your API name" required="">
                                        <div class="invalid-feedback">
                                            Please enter a API name.</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" for="validationAPIKey">API Key<span
                                                class="txt-danger">*</span></label>
                                        <input class="form-control" id="validationAPIKey" type="text"
                                            placeholder="3e4a9461-cb9b-4179-91be-2bf4998461d6" required="">
                                        <div class="invalid-feedback">
                                            Please enter a API Key.</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button class="btn btn-primary" type="submit">Create + </button>
                                    </div>
                                </form>
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
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/trash_popup.js') }}"></script>
    <script src="{{ asset('assets/js/modalpage/validation-modal.js') }}"></script>
    <script src="{{ asset('assets/js/custom-copy-box.js') }}"></script>
@endsection
