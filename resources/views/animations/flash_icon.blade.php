@extends('layouts.simple.master')

@section('title', 'Flash Icons')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Flash Icons</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Animation</li>
                        <li class="breadcrumb-item active">Flash Icons</li>
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
                        <h5>Pulse Animations</h5>
                        <p class="f-m-light mt-1">You can use the <code>main-animate</code> and <code>pulse-wrapper</code>
                            classes for the pulse animation.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body pulse-wrapper main-animate">
                        <div class="row g-3">
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Stroke Icons</h6>
                                    <div class="common-flex"> <a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-calendar') }}"></use>
                                            </svg></a><a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ui-kits') }}"></use>
                                            </svg></a><a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bookmark') }}"></use>
                                            </svg></a><a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-to-do') }}"></use>
                                            </svg></a><a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-table') }}"></use>
                                            </svg></a><a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-animation') }}">
                                                </use>
                                            </svg></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Fill Icons </h6>
                                    <div class="common-flex"> <a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-calender') }}"></use>
                                            </svg></a><a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-ui-kits') }}"></use>
                                            </svg></a><a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-bookmark') }}"></use>
                                            </svg></a><a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-to-do') }}"></use>
                                            </svg></a><a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-table') }}"></use>
                                            </svg></a><a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-animation') }}"></use>
                                            </svg></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Feather Icons </h6>
                                    <div class="common-flex"> <a href="#!"> <i data-feather="gitlab"></i></a><a
                                            href="#!"> <i data-feather="twitter"></i></a><a href="#!"> <i
                                                data-feather="youtube"></i></a><a href="#!"> <i
                                                data-feather="thumbs-up"></i></a><a href="#!"> <i
                                                data-feather="instagram"></i></a><a href="#!"> <i
                                                data-feather="github"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Ico Icons </h6>
                                    <div class="common-flex"> <a href="#!"> <i
                                                class="icofont icofont-hotel-boy-alt"></i></a><a href="#!"> <i
                                                class="icofont icofont-boy"></i></a><a href="#!"> <i
                                                class="icofont icofont-girl"></i></a><a href="#!"> <i
                                                class="icofont icofont-business-man"></i></a><a href="#!"> <i
                                                class="icofont icofont-man-in-glasses"></i></a><a href="#!"> <i
                                                class="icofont icofont-business-man-alt-1"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Fontawesome Icons </h6>
                                    <div class="common-flex"> <a href="#!"> <i class="fa-regular fa-sun"></i></a><a
                                            href="#!"> <i class="fa-brands fa-linux"></i></a><a href="#!"> <i
                                                class="fa-brands fa-stack-overflow"></i></a><a href="#!"> <i
                                                class="fa-brands fa-windows"></i></a><a href="#!"> <i
                                                class="fa-brands fa-reddit-alien"></i></a><a href="#!"> <i
                                                class="fa-brands fa-dropbox"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#pulse_animation" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="pulse_animation">&lt;div class="card-body pulse-wrapper main-animate"&gt;
 &lt;div class="row g-3"&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Stroke Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-calendar') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ui-kits') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bookmark') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-to-do') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-table') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-animation') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Fill Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-calender') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-ui-kits') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-bookmark') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-to-do') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-table') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-animation') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Feather Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="gitlab"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="twitter"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="youtube"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="thumbs-up"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="instagram"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="github"&gt;&lt;/i&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Ico Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-hotel-boy-alt"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-boy"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-girl"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-business-man"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-man-in-glasses"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-business-man-alt-1"&gt;&lt;/i&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Fontawesome Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt; 
         &lt;a href="#!"&gt;
           &lt;i class="fa-regular fa-sun"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-brands fa-linux"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-brands fa-stack-overflow"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-brands fa-windows"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-brands fa-reddit-alien"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-brands fa-dropbox"&gt;&lt;/i&gt;
         &lt;/a&gt;
        &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Pulse Double Border Animations</h5>
                        <p class="f-m-light mt-1">You can use the <code>main-animate , border-pulse-wrapper ,</code> and
                            <code>pulse-wrapper</code> classes for the double border pulse animation.
                        </p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body pulse-wrapper main-animate border-pulse-wrapper">
                        <div class="row g-3">
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Stroke Icons</h6>
                                    <div class="common-flex"> <a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-calendar') }}">
                                                </use>
                                            </svg></a><a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ui-kits') }}">
                                                </use>
                                            </svg></a><a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bookmark') }}">
                                                </use>
                                            </svg></a><a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-to-do') }}"></use>
                                            </svg></a><a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-table') }}"></use>
                                            </svg></a><a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-animation') }}">
                                                </use>
                                            </svg></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Fill Icons </h6>
                                    <div class="common-flex"> <a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-calender') }}"></use>
                                            </svg></a><a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-ui-kits') }}"></use>
                                            </svg></a><a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-bookmark') }}"></use>
                                            </svg></a><a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-to-do') }}"></use>
                                            </svg></a><a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-table') }}"></use>
                                            </svg></a><a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-animation') }}">
                                                </use>
                                            </svg></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Feather Icons </h6>
                                    <div class="common-flex"> <a href="#!"> <i data-feather="gitlab"></i></a><a
                                            href="#!"> <i data-feather="twitter"></i></a><a href="#!"> <i
                                                data-feather="youtube"></i></a><a href="#!"> <i
                                                data-feather="thumbs-up"></i></a><a href="#!"> <i
                                                data-feather="instagram"></i></a><a href="#!"> <i
                                                data-feather="github"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Ico Icons </h6>
                                    <div class="common-flex"> <a href="#!"> <i
                                                class="icofont icofont-hotel-boy-alt"></i></a><a href="#!"> <i
                                                class="icofont icofont-boy"></i></a><a href="#!"> <i
                                                class="icofont icofont-girl"></i></a><a href="#!"> <i
                                                class="icofont icofont-business-man"></i></a><a href="#!"> <i
                                                class="icofont icofont-man-in-glasses"></i></a><a href="#!"> <i
                                                class="icofont icofont-business-man-alt-1"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Fontawesome Icons </h6>
                                    <div class="common-flex"> <a href="#!"> <i class="fa-regular fa-sun"></i></a><a
                                            href="#!"> <i class="fa-brands fa-linux"></i></a><a href="#!"> <i
                                                class="fa-brands fa-stack-overflow"></i></a><a href="#!"> <i
                                                class="fa-brands fa-windows"></i></a><a href="#!"> <i
                                                class="fa-brands fa-reddit-alien"></i></a><a href="#!"> <i
                                                class="fa-brands fa-dropbox"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#double_border_animation" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="double_border_animation">&lt;div class="card-body pulse-wrapper main-animate border-pulse-wrapper"&gt;
 &lt;div class="row g-3"&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Stroke Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-calendar') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ui-kits') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bookmark') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-to-do') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-table') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-animation') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Fill Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-calender') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-ui-kits') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-bookmark') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-to-do') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-table') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-animation') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Feather Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="gitlab"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="twitter"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="youtube"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="thumbs-up"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="instagram"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="github"&gt;&lt;/i&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Ico Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-hotel-boy-alt"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-boy"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-girl"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-business-man"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-man-in-glasses"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-business-man-alt-1"&gt;&lt;/i&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Fontawesome Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-regular fa-sun"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-brands fa-linux"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-brands fa-stack-overflow"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-brands fa-windows"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-brands fa-reddit-alien"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-brands fa-dropbox"&gt;&lt;/i&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Pulse Rhombus Animations</h5>
                        <p class="f-m-light mt-1">You can use the <code>main-animate , pulse-rhombus</code> and
                            <code>pulse-wrapper</code> classes for the clippath shaped pulse animation.
                        </p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body pulse-wrapper main-animate pulse-rhombus">
                        <div class="row g-3">
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Stroke Icons</h6>
                                    <div class="common-flex"> <a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-calendar') }}">
                                                </use>
                                            </svg></a><a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ui-kits') }}">
                                                </use>
                                            </svg></a><a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bookmark') }}">
                                                </use>
                                            </svg></a><a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-to-do') }}"></use>
                                            </svg></a><a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-table') }}"></use>
                                            </svg></a><a href="#!"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-animation') }}">
                                                </use>
                                            </svg></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Fill Icons </h6>
                                    <div class="common-flex"> <a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-calender') }}"></use>
                                            </svg></a><a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-ui-kits') }}"></use>
                                            </svg></a><a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-bookmark') }}"></use>
                                            </svg></a><a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-to-do') }}"></use>
                                            </svg></a><a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-table') }}"></use>
                                            </svg></a><a href="#!"> <svg class="fill-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-animation') }}">
                                                </use>
                                            </svg></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Feather Icons</h6>
                                    <div class="common-flex"> <a href="#!"> <i data-feather="gitlab"></i></a><a
                                            href="#!"> <i data-feather="twitter"></i></a><a href="#!"> <i
                                                data-feather="youtube"></i></a><a href="#!"> <i
                                                data-feather="thumbs-up"></i></a><a href="#!"> <i
                                                data-feather="instagram"></i></a><a href="#!"> <i
                                                data-feather="github"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Ico Icons </h6>
                                    <div class="common-flex"> <a href="#!"> <i
                                                class="icofont icofont-hotel-boy-alt"></i></a><a href="#!"> <i
                                                class="icofont icofont-boy"></i></a><a href="#!"> <i
                                                class="icofont icofont-girl"></i></a><a href="#!"> <i
                                                class="icofont icofont-business-man"></i></a><a href="#!"> <i
                                                class="icofont icofont-man-in-glasses"></i></a><a href="#!"> <i
                                                class="icofont icofont-business-man-alt-1"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Fontawesome Icons </h6>
                                    <div class="common-flex"> <a href="#!"> <i class="fa-regular fa-sun"></i></a><a
                                            href="#!"> <i class="fa-brands fa-linux"></i></a><a href="#!"> <i
                                                class="fa-brands fa-stack-overflow"></i></a><a href="#!"> <i
                                                class="fa-brands fa-windows"></i></a><a href="#!"> <i
                                                class="fa-brands fa-reddit-alien"></i></a><a href="#!"> <i
                                                class="fa-brands fa-dropbox"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#rhombus_animation" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="rhombus_animation">&lt;div class="card-body pulse-wrapper main-animate pulse-rhombus"&gt;
 &lt;div class="row g-3"&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Stroke Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-calendar') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ui-kits') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bookmark') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-to-do') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-table') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="stroke-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-animation') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Fill Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-calender') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-ui-kits') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-bookmark') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-to-do') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-table') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt; 
           &lt;svg class="fill-icon"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-animation') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Feather Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="gitlab"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="twitter"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="youtube"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="thumbs-up"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="instagram"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i data-feather="github"&gt;&lt;/i&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Ico Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-hotel-boy-alt"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-boy"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-girl"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-business-man"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-man-in-glasses"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="icofont icofont-business-man-alt-1"&gt;&lt;/i&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Fontawesome Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-regular fa-sun"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-brands fa-linux"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-brands fa-stack-overflow"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-brands fa-windows"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-brands fa-reddit-alien"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a href="#!"&gt;
           &lt;i class="fa-brands fa-dropbox"&gt;&lt;/i&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Pulse Colored Animations</h5>
                        <p class="f-m-light mt-1">You can use the <code>main-animate , pulse-rabbet ,</code> and
                            <code>pulse-wrapper</code> classes for the colored SVG pulse animation.
                        </p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body pulse-wrapper main-animate pulse-rabbet">
                        <div class="row g-3">
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Stroke Icons</h6>
                                    <div class="common-flex"> <a class="bg-light-primary" href="#!"> <svg
                                                class="stroke-primary">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-calendar') }}">
                                                </use>
                                            </svg></a><a class="bg-light-primary" href="#!"> <svg
                                                class="stroke-primary">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ui-kits') }}">
                                                </use>
                                            </svg></a><a class="bg-light-primary" href="#!"> <svg
                                                class="stroke-primary">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bookmark') }}">
                                                </use>
                                            </svg></a><a class="bg-light-primary" href="#!"> <svg
                                                class="stroke-primary">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-to-do') }}"></use>
                                            </svg></a><a class="bg-light-primary" href="#!"> <svg
                                                class="stroke-primary">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-table') }}"></use>
                                            </svg></a><a class="bg-light-primary" href="#!"> <svg
                                                class="stroke-primary">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-animation') }}">
                                                </use>
                                            </svg></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Fill Icons </h6>
                                    <div class="common-flex"> <a class="bg-light-secondary" href="#!"> <svg
                                                class="fill-secondary">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-calender') }}"></use>
                                            </svg></a><a class="bg-light-secondary" href="#!"> <svg
                                                class="fill-secondary">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-ui-kits') }}"></use>
                                            </svg></a><a class="bg-light-secondary" href="#!"> <svg
                                                class="fill-secondary">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-bookmark') }}"></use>
                                            </svg></a><a class="bg-light-secondary" href="#!"> <svg
                                                class="fill-secondary">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-to-do') }}"></use>
                                            </svg></a><a class="bg-light-secondary" href="#!"> <svg
                                                class="fill-secondary">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-table') }}"></use>
                                            </svg></a><a class="bg-light-secondary" href="#!"> <svg
                                                class="fill-secondary">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-animation') }}">
                                                </use>
                                            </svg></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Feather Icons </h6>
                                    <div class="common-flex"> <a class="bg-light-success" href="#!"> <i
                                                class="stroke-success" data-feather="gitlab"></i></a><a
                                            class="bg-light-success" href="#!"> <i class="stroke-success"
                                                data-feather="twitter"></i></a><a class="bg-light-success"
                                            href="#!"> <i class="stroke-success" data-feather="youtube"></i></a><a
                                            class="bg-light-success" href="#!"> <i class="stroke-success"
                                                data-feather="thumbs-up"></i></a><a class="bg-light-success"
                                            href="#!"> <i class="stroke-success" data-feather="instagram"></i></a><a
                                            class="bg-light-success" href="#!"> <i class="stroke-success"
                                                data-feather="github"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Ico Icons </h6>
                                    <div class="common-flex"> <a class="bg-light-warning" href="#!"> <i
                                                class="txt-warning icofont icofont-hotel-boy-alt"></i></a><a
                                            class="bg-light-warning" href="#!"> <i
                                                class="txt-warning icofont icofont-boy"></i></a><a
                                            class="bg-light-warning" href="#!"> <i
                                                class="txt-warning icofont icofont-girl"></i></a><a
                                            class="bg-light-warning" href="#!"> <i
                                                class="txt-warning icofont icofont-business-man"></i></a><a
                                            class="bg-light-warning" href="#!"> <i
                                                class="txt-warning icofont icofont-man-in-glasses"></i></a><a
                                            class="bg-light-warning" href="#!"> <i
                                                class="txt-warning icofont icofont-business-man-alt-1"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card-wrapper border rounded-3">
                                    <h6 class="sub-title fw-bold">Fontawesome Icons </h6>
                                    <div class="common-flex"> <a class="bg-light-info" href="#!"> <i
                                                class="fa-regular fa-sun txt-info"></i></a><a class="bg-light-info"
                                            href="#!"> <i class="fa-brands fa-linux txt-info"></i></a><a
                                            class="bg-light-info" href="#!"> <i
                                                class="fa-brands fa-stack-overflow txt-info"></i></a><a
                                            class="bg-light-info" href="#!">
                                            <i class="fa-brands fa-windows txt-info"></i></a><a class="bg-light-info"
                                            href="#!"> <i class="fa-brands fa-reddit-alien txt-info"></i></a><a
                                            class="bg-light-info" href="#!"> <i
                                                class="fa-brands fa-dropbox txt-info"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#pulse_color_animation" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="pulse_color_animation">&lt;div class="card-body pulse-wrapper main-animate pulse-rabbet"&gt;
 &lt;div class="row g-3"&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Stroke Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a class="bg-light-primary" href="#!"&gt; 
           &lt;svg class="stroke-primary"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-calendar') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-primary" href="#!"&gt; 
           &lt;svg class="stroke-primary"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ui-kits') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-primary" href="#!"&gt; 
           &lt;svg class="stroke-primary"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bookmark') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-primary" href="#!"&gt; 
           &lt;svg class="stroke-primary"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-to-do') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-primary" href="#!"&gt; 
           &lt;svg class="stroke-primary"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-table') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-primary" href="#!"&gt; 
           &lt;svg class="stroke-primary"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#stroke-animation') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Fill Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a class="bg-light-secondary" href="#!"&gt; 
           &lt;svg class="fill-secondary"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-calender') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-secondary" href="#!"&gt; 
           &lt;svg class="fill-secondary"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-ui-kits') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-secondary" href="#!"&gt; 
           &lt;svg class="fill-secondary"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-bookmark') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-secondary" href="#!"&gt; 
           &lt;svg class="fill-secondary"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-to-do') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-secondary" href="#!"&gt; 
           &lt;svg class="fill-secondary"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-table') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-secondary" href="#!"&gt; 
           &lt;svg class="fill-secondary"&gt;
             &lt;use href="{{ asset('assets/svg/icon-sprite.svg#fill-animation') }}"&gt;&lt;/use&gt;
           &lt;/svg&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Feather Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a class="bg-light-success" href="#!"&gt;
           &lt;i class="stroke-success" data-feather="gitlab"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-success" href="#!"&gt;
           &lt;i class="stroke-success" data-feather="twitter"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-success" href="#!"&gt;
           &lt;i class="stroke-success" data-feather="youtube"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-success" href="#!"&gt;
           &lt;i class="stroke-success" data-feather="thumbs-up"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-success" href="#!"&gt;
           &lt;i class="stroke-success" data-feather="instagram"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-success" href="#!"&gt;
           &lt;i class="stroke-success" data-feather="github"&gt;&lt;/i&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Ico Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a class="bg-light-warning" href="#!"&gt;
           &lt;i class="txt-warning icofont icofont-hotel-boy-alt"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-warning" href="#!"&gt;
           &lt;i class="txt-warning icofont icofont-boy"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-warning" href="#!"&gt;
           &lt;i class="txt-warning icofont icofont-girl"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-warning" href="#!"&gt;
           &lt;i class="txt-warning icofont icofont-business-man"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-warning" href="#!"&gt;
           &lt;i class="txt-warning icofont icofont-man-in-glasses"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-warning" href="#!"&gt;
           &lt;i class="txt-warning icofont icofont-business-man-alt-1"&gt;&lt;/i&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-4"&gt;
     &lt;div class="card-wrapper border rounded-3"&gt;
       &lt;h6 class="sub-title fw-bold"&gt;Fontawesome Icons&lt;/h6&gt;
       &lt;div class="common-flex"&gt;
         &lt;a class="bg-light-info" href="#!"&gt;
            &lt;i class="fa-regular fa-sun txt-info"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-info" href="#!"&gt;
            &lt;i class="fa-brands fa-linux txt-info"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-info" href="#!"&gt;
            &lt;i class="fa-brands fa-stack-overflow txt-info"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-info" href="#!"&gt;
            &lt;i class="fa-brands fa-windows txt-info"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-info" href="#!"&gt;
            &lt;i class="fa-brands fa-reddit-alien txt-info"&gt;&lt;/i&gt;
         &lt;/a&gt;
         &lt;a class="bg-light-info" href="#!"&gt;
            &lt;i class="fa-brands fa-dropbox txt-info"&gt;&lt;/i&gt;
         &lt;/a&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;                </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Heart-beat Animations</h5>
                        <p class="f-m-light mt-1">You can use the <code>main-animate</code> and
                            <code>heartbeat-wrapper</code>
                            classes for the colored SVG pulse animation.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body heartbeat-wrapper main-animate">
                        <div class="common-flex"> <a href="#!"> <i class="icon-heart-broken"></i></a><a
                                href="#!"> <i data-feather="heart"></i></a><a href="#!"> <i
                                    class="fa fa-heart"></i></a><a href="#!"> <i
                                    class="icofont icofont-heart-beat"></i></a><a href="#!"> <i
                                    class="icon-heart"></i></a></div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#heart_beat_animation" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="heart_beat_animation">&lt;div class="card-body heartbeat-wrapper main-animate"&gt;
 &lt;div class="common-flex"&gt;
   &lt;a href="#!"&gt;
     &lt;i class="icon-heart-broken"&gt;&lt;/i&gt;
   &lt;/a&gt;
   &lt;a href="#!"&gt;
     &lt;i data-feather="heart"&gt;&lt;/i&gt;
   &lt;/a&gt;
   &lt;a href="#!"&gt;
     &lt;i class="fa fa-heart"&gt;&lt;/i&gt;
   &lt;/a&gt;
   &lt;a href="#!"&gt;
     &lt;i class="icofont icofont-heart-beat"&gt;&lt;/i&gt;
   &lt;/a&gt;
   &lt;a href="#!"&gt;
     &lt;i class="icon-heart"&gt;&lt;/i&gt;
   &lt;/a&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
