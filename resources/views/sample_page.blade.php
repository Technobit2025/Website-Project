@extends('layouts.simple.master')

@section('title', 'Sample Page')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Sample Page</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Sample Page</li>
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
                        <h5>Sample Card</h5>
                        <p class="f-m-light mt-1">Here you can enter a sub-title for your card.</p>
                    </div>
                    <div class="card-body">
                        <p><strong>Web Design Trends: </strong> Stay up-to-date with the latest trends in web design, such
                            as the use of animations, micro-interactions, dark mode, and unique navigation techniques.Keep
                            your website's navigation simple and intuitive, allowing users to find what they need easily
                            without overwhelming them with options.</p>
                        <p><strong>Design Tools: </strong> Information on popular design software like Adobe Photoshop,
                            Sketch, Figma, or Adobe XD, along with tips and tricks for efficient workflow and
                            collaboration.Compress and optimize images to improve website loading speed and overall
                            performance, providing a better user experience.</p>
                        <p><strong>Front-End Development: </strong> A basic understanding of HTML, CSS, and JavaScript can
                            enhance your web design skills, enabling you to create interactive and dynamic elements.Ensure
                            sufficient contrast between text and background colors to enhance readability and accessibility,
                            especially for users with visual impairments.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
@endsection
