@extends('layouts.simple.master')

@section('title', 'Blog Details')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Blog</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Blog</li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 set-col-12 box-col-12">
                <div class="card">
                    <div class="blog-box blog-shadow"><img class="img-fluid"
                            src="{{ asset('assets/images/blog/blog.jpg') }}" alt="">
                        <div class="blog-details">
                            <p>25 July 2024</p>
                            <h5 class="text-white">An Exploration of the Most Entertaining Cities on Earth.</h5>
                            <ul class="blog-social">
                                <li><i class="icofont icofont-user"></i>William C. Jennings</li>
                                <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 set-col-12 box-col-12">
                <div class="card">
                    <div class="blog-box blog-list row">
                        <div class="col-sm-5"><img class="img-fluid sm-100-w"
                                src="{{ asset('assets/images/blog/blog-2.jpg') }}" alt=""></div>
                        <div class="col-sm-7">
                            <div class="blog-details">
                                <div class="blog-date"><span>02</span> January 2024</div>
                                <h6>Summer Accessories for 2024</h6>
                                <div class="blog-bottom-content">
                                    <ul class="blog-social">
                                        <li>by: Admin</li>
                                        <li>0 Hits</li>
                                    </ul>
                                    <hr>
                                    <p class="mt-0">Accessories your summer look with these must-have pieces. Find this
                                        season's best selections, which include stylish hats and sunglasses.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="blog-box blog-list row">
                        <div class="col-sm-5"><img class="img-fluid sm-100-w"
                                src="{{ asset('assets/images/blog/blog-3.jpg') }}" alt=""></div>
                        <div class="col-sm-7">
                            <div class="blog-details">
                                <div class="blog-date"><span>03</span> January 2024</div>
                                <h6>Visit in Europe</h6>
                                <div class="blog-bottom-content">
                                    <ul class="blog-social">
                                        <li>by: Admin</li>
                                        <li>02 Hits</li>
                                    </ul>
                                    <hr>
                                    <p class="mt-0">Discover the best-kept secrets in Europe. Discover which places, from
                                        charming towns to breathtaking landscapes, ought to be on your vacation itinerary.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3 box-col-6">
                <div class="card">
                    <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
                            src="{{ asset('assets/images/blog/blog-5.jpg') }}" alt="">
                        <div class="blog-details-main">
                            <ul class="blog-social">
                                <li>9 April 2024</li>
                                <li>by: Admin</li>
                                <li>0 Hits</li>
                            </ul>
                            <hr>
                            <h6 class="blog-bottom-details">The ideal outfit for occasion, including formal events.</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3 box-col-6">
                <div class="card">
                    <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
                            src="{{ asset('assets/images/blog/blog-7.jpg') }}" alt="">
                        <div class="blog-details-main">
                            <ul class="blog-social">
                                <li>9 April 2024</li>
                                <li>by: Admin</li>
                                <li>0 Hits</li>
                            </ul>
                            <hr>
                            <h6 class="blog-bottom-details">Make the transition to fall fashionable with these outfits.</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3 box-col-6">
                <div class="card">
                    <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
                            src="{{ asset('assets/images/blog/blog-8.jpg') }}" alt="">
                        <div class="blog-details-main">
                            <ul class="blog-social">
                                <li>9 April 2024</li>
                                <li>by: Admin</li>
                                <li>0 Hits</li>
                            </ul>
                            <hr>
                            <h6 class="blog-bottom-details">Embrace the sophistication of maxi dresses by using our
                                selections.</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3 box-col-6">
                <div class="card">
                    <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
                            src="{{ asset('assets/images/blog/blog-6.jpg') }}" alt="">
                        <div class="blog-details-main">
                            <ul class="blog-social">
                                <li>9 April 2024</li>
                                <li>by: Admin</li>
                                <li>0 Hits</li>
                            </ul>
                            <hr>
                            <h6 class="blog-bottom-details">Spring with these beautiful floral dresses. Perfect for any
                                occasion.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe.js') }}"></script>
    <script src="{{ asset('assets/js/masonry-gallery.js') }}"></script>
    <script src="{{ asset('assets/js/custom-skeleton.js') }}"></script>
@endsection
