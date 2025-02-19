@extends('layouts.simple.master')

@section('title', 'Footer Fixed')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Footer Fixed</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Page Layout</li>
                        <li class="breadcrumb-item active"> Footer Fixed</li>
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
                        <p>The creative minds behind stunning and useful websites are web designers. They
                            possess a special talent for transforming concepts into works of art that
                            attract audiences and provide seamless user experiences. Web designers bring
                            websites to life by selecting fonts, colour palettes, and other design elements.
                            They create layouts that are not only aesthetically pleasing but also optimised
                            for performance and user engagement using their technical expertise and creative
                            flare. Web designers can build flexible and dynamic designs that fit a variety
                            of devices and screen sizes thanks to their proficiency in coding languages like
                            HTML, CSS, and JavaScript. Web designers are essential to helping businesses
                            succeed in an era where having an online presence is essential.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
@endsection
