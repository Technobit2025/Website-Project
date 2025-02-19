@extends('layouts.simple.master')

@section('title', 'Footer Light')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Footer Light</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Page Layout</li>
                        <li class="breadcrumb-item active"> Footer Light</li>
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
                        <h5>Sample Card</h5>
                        <p class="f-m-light mt-1">A sample card of the cuba theme.</p>
                    </div>
                    <div class="card-body">
                        <p>A practitioner with expertise in building attractive and useful websites is known
                            as a web designer. Their primary objective is to create responsive websites,
                            which can adjust to and show properly on various platforms including PCs,
                            tablets, and mobile phones. A web designer gives considerable thought to a
                            website's style, navigation, and general user experience to make sure the target
                            audience will find it easy to use and visually appealing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
@endsection
