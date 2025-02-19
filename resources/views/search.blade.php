@extends('layouts.simple.master')

@section('title', 'Search Result')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Search Result</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Search Pages</li>
                        <li class="breadcrumb-item active">Search Result</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid search-page">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <form class="theme-form">
                            <div class="input-group m-0 flex-nowrap"><input class="form-control-plaintext" type="search"
                                    placeholder="Pixelstrap .."><span class="btn btn-primary input-group-text">Search</span>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <ul class="nav nav-tabs search-list" id="top-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="all-link" data-bs-toggle="tab"
                                        href="#all-links" role="tab" aria-selected="true"><i
                                            class="icon-target"></i>All</a></li>
                                <li class="nav-item"><a class="nav-link" id="image-link" data-bs-toggle="tab"
                                        href="#image-links" role="tab" aria-selected="false"><i
                                            class="icon-image"></i>Images</a></li>
                                <li class="nav-item"><a class="nav-link" id="video-link" data-bs-toggle="tab"
                                        href="#video-links" role="tab" aria-selected="false"><i
                                            class="icon-video-clapper"></i>Videos</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="audios-link" data-bs-toggle="tab"
                                        href="#audios-links" role="tab" aria-selected="false"><i
                                            class="icon-music-alt"></i>Audios</a></li>
                                <li class="nav-item"><a class="nav-link" id="setting-link" data-bs-toggle="tab"
                                        href="#setting-links" role="tab" aria-selected="false"><i
                                            class="icon-settings"></i>Settings</a></li>
                            </ul>
                        </div>
                        <div class="tab-content" id="top-tabContent">
                            <div class="search-links tab-pane fade show active" id="all-links" role="tabpanel"
                                aria-labelledby="all-link">
                                <div class="row">
                                    <div class="col-xxl-8 col-xl-6 box-col-6">
                                        <h6 class="mb-2">Search result for "Pixelstrap"</h6>
                                        <div class="info-block"><a
                                                href="">https://themeforest.net/user/pixelstrap/portfolio/</a>
                                            <h6> <a href="https://themeforest.net/user/pixelstrap/portfolio/"
                                                    target="_blank">PixelStrap - Portfolio | ThemeForest</a>
                                            </h6>
                                            <p>2020's Best Selling Creative WP Themes. The #1 Source of
                                                Premium WP Themes! ThemeForest 45,000+ WP Themes & Website
                                                Templates From $2. Check it Out! </p>
                                            <div class="star-ratings">
                                                <ul class="search-info">
                                                    <li><i class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i></li>
                                                    <li>200 Votes</li>
                                                    <li>Theme</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="info-block"><a href="">PixelStrap - Portfolio |
                                                ThemeForestthemeforest.net › user › </a>
                                            <h6><a href="http://surl.li/smxomj" target="_blank"> Yuri- HTML,
                                                    React, Angular,Django,Vue & Next Js Admin ...</a></h6>
                                            <p>The #1 marketplace for premium website templates, including
                                                themes for WordPress, Magento, Drupal, Joomla, and more.
                                                Create a website, fast.</p>
                                            <div class="star-ratings">
                                                <ul class="search-info">
                                                    <li><i class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i></li>
                                                    <li>400 Votes</li>
                                                    <li>Theme</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="info-block"><a
                                                href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                            <h6> <a href="https://themeforest.net/user/pixelstrap/portfolio"
                                                    target="_blank">Pixelstrap Flutter Full App from
                                                    ThemeForest</a></h6>
                                            <p>Pixel presents its offerings for IELTS, TOEFL, GRE, GMAT, and
                                                SAT coaching in India.</p>
                                            <div class="star-ratings">
                                                <ul class="search-info">
                                                    <li><i class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i></li>
                                                    <li>350 Votes</li>
                                                    <li>Theme</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="info-block"><a
                                                href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                            <h6> <a href="https://themeforest.net/user/pixelstrap/portfolio"
                                                    target="_blank">Pixelstrap Admin Theme from
                                                    ThemeForest</a></h6>
                                            <p>The IELTS, TOEFL, GRE, GMAT, and SAT coaching services
                                                offered in India are presented by pixel.</p>
                                            <div class="star-ratings">
                                                <ul class="search-info">
                                                    <li><i class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i></li>
                                                    <li>266 Votes</li>
                                                    <li>Theme</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="info-block"><a
                                                href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                            <h6> <a href="http://surl.li/nmvziy" target="_blank">Riho
                                                    &hyphen; React Nextjs Admin &amp; Dashboard Template</a>
                                            </h6>
                                            <p>Riho Admin is a full featured, multipurpose, premium Nextjs
                                                admin template built with Nextjs &amp; Bootstrap 5
                                                Framework.</p>
                                            <div class="star-ratings">
                                                <ul class="search-info">
                                                    <li><i class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rating"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i><i
                                                            class="icofont icofont-ui-rate-blank"></i></li>
                                                    <li>450 Votes</li>
                                                    <li>Theme</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-6 box-col-6 mt-4">
                                        <div class="card o-hidden">
                                            <div class="blog-box blog-shadow"><img class="img-fluid"
                                                    src="{{ asset('assets/images/blog/blog.jpg') }}" alt="">
                                                <div class="blog-details">
                                                    <p>25 July 2024</p>
                                                    <h4>An Exploration of the Most Entertaining Cities on
                                                        Earth.</h4>
                                                    <ul class="blog-social">
                                                        <li><i class="icofont icofont-user"></i>William C.
                                                            Jennings</li>
                                                        <li><i class="icofont icofont-thumbs-up"></i>02 Hits
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-sm-6 xl-100">
                                                <div class="audio-card">
                                                    <div class="audio-image"><img class="img-fluid"
                                                            src="{{ asset('assets/images/search/1.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="audio-content">
                                                        <div class="flex-grow-1">
                                                            <h6>Hip Hop</h6><span>Beats from the city</span>
                                                        </div>
                                                        <div class="flex-shrink-0"><i
                                                                class="fa-solid fa-circle-play"></i><i
                                                                class="fa-regular fa-heart"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 xl-100">
                                                <div class="audio-card">
                                                    <div class="audio-image"><img class="img-fluid"
                                                            src="{{ asset('assets/images/search/4.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="audio-content">
                                                        <div class="flex-grow-1">
                                                            <h6>Lofi Hip Hop</h6><span>Relaxing music</span>
                                                        </div>
                                                        <div class="flex-shrink-0"><i
                                                                class="fa-solid fa-circle-play"></i><i
                                                                class="fa-regular fa-heart"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-block m-t-20"><iframe width="100" height="100"
                                                src="https://www.youtube.com/embed/CJnfAXlBRTE"></iframe>
                                            <div class="flex-grow-1"><a
                                                    href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                                <h6>Utilize HTML, CSS, JavaScript, and UX design to create a
                                                    to-do list.</h6>
                                                <div class="star-ratings">
                                                    <ul class="search-info">
                                                        <li>3 stars</li>
                                                        <li>590 votes</li>
                                                        <li>Theme</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 m-t-30">
                                        <nav aria-label="...">
                                            <ul
                                                class="pagination pagination-primary justify-content-sm-end justify-content-center">
                                                <li class="page-item disabled"><a class="page-link" href="#!"
                                                        tabindex="-1">Previous</a></li>
                                                <li class="page-item active"><a class="page-link" href="#!">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#!">2<span
                                                            class="sr-only">(current)</span></a></li>
                                                <li class="page-item"><a class="page-link" href="#!">3</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="image-links" role="tabpanel" aria-labelledby="image-link">
                                <div>
                                    <h6 class="mb-2">About 12,120 results (0.50 seconds)</h6>
                                    <div class="my-gallery gallery-with-description" id="aniimated-thumbnials"
                                        itemscope="">
                                        <div class="row">
                                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4"
                                                itemprop="associatedMedia" itemscope=""><a
                                                    href="{{ asset('assets/images/big-lightgallry/01.jpg') }}"
                                                    itemprop="contentUrl" data-size="1600x950"><img
                                                        src="{{ asset('assets/images/lightgallry/01.jpg') }}"
                                                        itemprop="thumbnail" alt="Image description">
                                                    <div class="caption">
                                                        <h4>Andew Jon</h4>
                                                        <p>Gather and handle user reviews straight from the
                                                            administrative dashboard to ensure ongoing
                                                            development.</p>
                                                    </div>
                                                </a>
                                                <figcaption itemprop="caption description">
                                                    <h4>Andew Jon</h4>
                                                    <p>Gather and handle user reviews straight from the
                                                        administrative dashboard to ensure ongoing
                                                        development.</p>
                                                </figcaption>
                                            </figure>
                                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4"
                                                itemprop="associatedMedia" itemscope=""><a
                                                    href="{{ asset('assets/images/big-lightgallry/02.jpg') }}"
                                                    itemprop="contentUrl" data-size="1600x950"><img
                                                        src="{{ asset('assets/images/lightgallry/02.jpg') }}"
                                                        itemprop="thumbnail" alt="Image description">
                                                    <div class="caption">
                                                        <h4>Bucky Barnes</h4>
                                                        <p>With scheduled backup and simple restore options
                                                            for important data, you can guarantee data
                                                            security.</p>
                                                    </div>
                                                </a>
                                                <figcaption itemprop="caption description">
                                                    <h4>Bucky Barnes</h4>
                                                    <p>With scheduled backup and simple restore options for
                                                        important data, you can guarantee data security.</p>
                                                </figcaption>
                                            </figure>
                                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4"
                                                itemprop="associatedMedia" itemscope=""><a
                                                    href="{{ asset('assets/images/big-lightgallry/03.jpg') }}"
                                                    itemprop="contentUrl" data-size="1600x950"><img
                                                        src="{{ asset('assets/images/lightgallry/03.jpg') }}"
                                                        itemprop="thumbnail" alt="Image description">
                                                    <div class="caption">
                                                        <h4>Sarah Loren</h4>
                                                        <p>Use our built-in live streaming function to go
                                                            live and share experiences with your followers
                                                            in real time.</p>
                                                    </div>
                                                </a>
                                                <figcaption itemprop="caption description">
                                                    <h4>Sarah Loren</h4>
                                                    <p>Use our built-in live streaming function to go live
                                                        and share experiences with your followers in real
                                                        time.</p>
                                                </figcaption>
                                            </figure>
                                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4"
                                                itemprop="associatedMedia" itemscope=""><a
                                                    href="{{ asset('assets/images/big-lightgallry/04.jpg') }}"
                                                    itemprop="contentUrl" data-size="1600x950"><img
                                                        src="{{ asset('assets/images/lightgallry/04.jpg') }}"
                                                        itemprop="thumbnail" alt="Image description">
                                                    <div class="caption">
                                                        <h4>Leo Macias</h4>
                                                        <p>Customize your accounts with cover photographs,
                                                            biographies, and profile pictures to express who
                                                            you are.</p>
                                                    </div>
                                                </a>
                                                <figcaption itemprop="caption description">
                                                    <h4>Leo Macias</h4>
                                                    <p>Customize your accounts with cover photographs,
                                                        biographies, and profile pictures to express who you
                                                        are.</p>
                                                </figcaption>
                                            </figure>
                                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4"
                                                itemprop="associatedMedia" itemscope=""><a
                                                    href="{{ asset('assets/images/big-lightgallry/05.jpg') }}"
                                                    itemprop="contentUrl" data-size="1600x950"><img
                                                        src="{{ asset('assets/images/lightgallry/05.jpg') }}"
                                                        itemprop="thumbnail" alt="Image description">
                                                    <div class="caption">
                                                        <h4>Comeren Diaz</h4>
                                                        <p>With a personalized activity feed that includes
                                                            posts, images, and updates, you can stay in
                                                            touch with friends and follow trends.</p>
                                                    </div>
                                                </a>
                                                <figcaption itemprop="caption description">
                                                    <h4>Comeren Diaz</h4>
                                                    <p>With a personalized activity feed that includes
                                                        posts, images, and updates, you can stay in touch
                                                        with friends and follow trends.</p>
                                                </figcaption>
                                            </figure>
                                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4"
                                                itemprop="associatedMedia" itemscope=""><a
                                                    href="{{ asset('assets/images/big-lightgallry/011.jpg') }}"
                                                    itemprop="contentUrl" data-size="1600x950"><img
                                                        src="{{ asset('assets/images/lightgallry/011.jpg') }}"
                                                        itemprop="thumbnail" alt="Image description">
                                                    <div class="caption">
                                                        <h4>Gwen Rice</h4>
                                                        <p>With just a few clicks, create thorough reports
                                                            that provide insightful information about your
                                                            business activities.</p>
                                                    </div>
                                                </a>
                                                <figcaption itemprop="caption description">
                                                    <h4>Gwen Rice</h4>
                                                    <p>With just a few clicks, create thorough reports that
                                                        provide insightful information about your business
                                                        activities.</p>
                                                </figcaption>
                                            </figure>
                                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4"
                                                itemprop="associatedMedia" itemscope=""><a
                                                    href="{{ asset('assets/images/big-lightgallry/010.jpg') }}"
                                                    itemprop="contentUrl" data-size="1600x950"><img
                                                        src="{{ asset('assets/images/lightgallry/010.jpg') }}"
                                                        itemprop="thumbnail" alt="Image description">
                                                    <div class="caption">
                                                        <h4>Dev John</h4>
                                                        <p>Effectively manage users with our user-friendly
                                                            dashboard, which includes customisable widgets
                                                            and real-time data metrics.</p>
                                                    </div>
                                                </a>
                                                <figcaption itemprop="caption description">
                                                    <h4>Dev John</h4>
                                                    <p>Effectively manage users with our user-friendly
                                                        dashboard, which includes customisable widgets and
                                                        real-time data metrics.</p>
                                                </figcaption>
                                            </figure>
                                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4"
                                                itemprop="associatedMedia" itemscope=""><a
                                                    href="{{ asset('assets/images/big-lightgallry/08.jpg') }}"
                                                    itemprop="contentUrl" data-size="1600x950"><img
                                                        src="{{ asset('assets/images/lightgallry/08.jpg') }}"
                                                        itemprop="thumbnail" alt="Image description">
                                                    <div class="caption">
                                                        <h4>Johan Deo</h4>
                                                        <p>An admin theme is a visually beautiful and
                                                            practical design template created especially for
                                                            a website's or application's backend.</p>
                                                    </div>
                                                </a>
                                                <figcaption itemprop="caption description">
                                                    <h4>Johan Deo</h4>
                                                    <p>An admin theme is a visually beautiful and practical
                                                        design template created especially for a website's
                                                        or application's backend.</p>
                                                </figcaption>
                                            </figure>
                                        </div><!-- Root element of PhotoSwipe. Must have class pswp.-->
                                        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"><!--Background of PhotoSwipe.
    It's a separate element, as animating opacity is faster than rgba().-->
                                            <div class="pswp__bg"></div>
                                            <!-- Slides wrapper with overflow:hidden.-->
                                            <div class="pswp__scroll-wrap">
                                                <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.--><!-- don't modify these 3 pswp__item elements, data is added later on.-->
                                                <div class="pswp__container">
                                                    <div class="pswp__item"></div>
                                                    <div class="pswp__item"></div>
                                                    <div class="pswp__item"></div>
                                                </div>
                                                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
                                                <div class="pswp__ui pswp__ui--hidden">
                                                    <div class="pswp__top-bar">
                                                        <!-- Controls are self-explanatory. Order can be changed.-->
                                                        <div class="pswp__counter"></div><button
                                                            class="pswp__button pswp__button--close"
                                                            title="Close (Esc)"></button><button
                                                            class="pswp__button pswp__button--share"
                                                            title="Share"></button><button
                                                            class="pswp__button pswp__button--fs"
                                                            title="Toggle fullscreen"></button><button
                                                            class="pswp__button pswp__button--zoom"
                                                            title="Zoom in/out"></button><!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR--><!-- element will get class pswp__preloader-active when preloader is running-->
                                                        <div class="pswp__preloader">
                                                            <div class="pswp__preloader__icn">
                                                                <div class="pswp__preloader__cut">
                                                                    <div class="pswp__preloader__donut">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                                        <div class="pswp__share-tooltip"></div>
                                                    </div><button class="pswp__button pswp__button--arrow--left"
                                                        title="Previous (arrow left)"></button><button
                                                        class="pswp__button pswp__button--arrow--right"
                                                        title="Next (arrow right)"></button>
                                                    <div class="pswp__caption">
                                                        <div class="pswp__caption__center"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-t-30">
                                    <nav aria-label="...">
                                        <ul
                                            class="pagination pagination-primary justify-content-sm-end justify-content-center">
                                            <li class="page-item disabled"><a class="page-link" href="#"
                                                    tabindex="-1">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2
                                                    <span class="sr-only">(current)</span></a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="video-links" role="tabpanel" aria-labelledby="video-link">
                                <div class="row g-xxl-3 g-4">
                                    <div class="col-xxl-6 box-col-12">
                                        <h6 class="mb-2">About 6,000 results (0.60 seconds)</h6>
                                        <div class="d-flex info-block"><iframe class="me-3" width="200"
                                                height="100" src="https://www.youtube.com/embed/CJnfAXlBRTE"></iframe>
                                            <div class="flex-grow-1"><a
                                                    href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                                <h6>Utilize HTML, CSS, JavaScript, and UX design to create a
                                                    to-do list.</h6>
                                                <div class="star-ratings">
                                                    <ul class="search-info">
                                                        <li>3 stars</li>
                                                        <li>520 votes</li>
                                                        <li>Theme</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex info-block"><iframe class="me-3" width="200"
                                                height="100" src="https://www.youtube.com/embed/wpmHZspl4EM"></iframe>
                                            <div class="flex-grow-1"><a
                                                    href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                                <h6>Tips for gaining proficiency in UI/UX design.</h6>
                                                <div class="star-ratings">
                                                    <ul class="search-info">
                                                        <li>5 stars</li>
                                                        <li>500 votes</li>
                                                        <li>Figma</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex info-block"><iframe class="me-3" width="200"
                                                height="100" src="https://www.youtube.com/embed/-L4gEk7cOfk"></iframe>
                                            <div class="flex-grow-1"><a
                                                    href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                                <h6>Tips for gaining proficiency in CSS.</h6>
                                                <div class="star-ratings">
                                                    <ul class="search-info">
                                                        <li>4 stars</li>
                                                        <li>450 votes</li>
                                                        <li>Theme</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 box-col-12">
                                        <h6 class="mb-2">About 6,000 results (0.60 seconds)</h6>
                                        <div class="d-flex info-block"><iframe class="me-3" width="200"
                                                height="100" src="https://www.youtube.com/embed/CJnfAXlBRTE"></iframe>
                                            <div class="flex-grow-1"><a
                                                    href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                                <h6>Utilize HTML, CSS, JavaScript, and UX design to create a
                                                    to-do list.</h6>
                                                <div class="star-ratings">
                                                    <ul class="search-info">
                                                        <li>5 stars</li>
                                                        <li>420 votes</li>
                                                        <li>Theme</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex info-block"><iframe class="me-3" width="200"
                                                height="100" src="https://www.youtube.com/embed/-L4gEk7cOfk"></iframe>
                                            <div class="flex-grow-1"><a
                                                    href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                                <h6>This article offers pointers for improving your CSS
                                                    skills.</h6>
                                                <div class="star-ratings">
                                                    <ul class="search-info">
                                                        <li>5 stars</li>
                                                        <li>490 votes</li>
                                                        <li>Theme</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex info-block"><iframe class="me-3" width="200"
                                                height="100" src="https://www.youtube.com/embed/wpmHZspl4EM"></iframe>
                                            <div class="flex-grow-1"><a
                                                    href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                                <h6>Some suggestions to enhance UI/UX usability testing.
                                                </h6>
                                                <div class="star-ratings">
                                                    <ul class="search-info">
                                                        <li>5 stars</li>
                                                        <li>500 votes</li>
                                                        <li>Figma</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 m-t-30">
                                        <div>
                                            <nav aria-label="...">
                                                <ul
                                                    class="pagination pagination-primary justify-content-sm-end justify-content-center">
                                                    <li class="page-item disabled"><a class="page-link" href="#"
                                                            tabindex="-1">Previous</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">2
                                                            <span class="sr-only">(current)</span></a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="audios-links" role="tabpanel" aria-labelledby="audios-link">
                                <div class="row g-sm-3 g-4 audio-wrapper">
                                    <div class="col-12">
                                        <h6 class="mb-2">About 2,000 results (0.45 seconds)</h6>
                                        <div class="row g-3">
                                            <div class="col-xxl-4 col-md-6 box-col-6">
                                                <div class="audio-box">
                                                    <div class="flex-grow-1 common-f-start"><img class="img-fluid"
                                                            src="{{ asset('assets/images/search/6.png') }}"
                                                            alt="song profile1">
                                                        <div>
                                                            <h6>Ocean Waves</h6><span class="c-o-light">inspiration in the
                                                                soothing sounds of the sea</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-shrink-0"><i class="fa-solid fa-circle-play"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-md-6 box-col-6">
                                                <div class="audio-box">
                                                    <div class="flex-grow-1 common-f-start"><img class="img-fluid"
                                                            src="{{ asset('assets/images/search/2.png') }}"
                                                            alt="song profile2">
                                                        <div>
                                                            <h6>Electrical Dreams</h6><span class="c-o-light">a lively
                                                                electronic song
                                                                with appealing synth lines</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-shrink-0"><i class="fa-solid fa-circle-play"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-md-6 box-col-6">
                                                <div class="audio-box">
                                                    <div class="flex-grow-1 common-f-start"><img class="img-fluid"
                                                            src="{{ asset('assets/images/search/3.png') }}"
                                                            alt="song profile3">
                                                        <div>
                                                            <h6>Midnight Beat</h6><span class="c-o-light">Jazz composition
                                                                perfect
                                                                for listening late at night</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-shrink-0"><i class="fa-solid fa-circle-play"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-md-6 box-col-6">
                                                <div class="audio-box">
                                                    <div class="flex-grow-1 common-f-start"><img class="img-fluid"
                                                            src="{{ asset('assets/images/search/1.png') }}"
                                                            alt="song profile4">
                                                        <div>
                                                            <h6>Whispering Winds</h6><span class="c-o-light">Practicing
                                                                meditation and
                                                                relaxation techniques</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-shrink-0"><i
                                                            class="fa-solid fa-compact-disc fa-spin"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-md-6 box-col-6">
                                                <div class="audio-box">
                                                    <div class="flex-grow-1 common-f-start"><img class="img-fluid"
                                                            src="{{ asset('assets/images/search/4.png') }}"
                                                            alt="song profile5">
                                                        <div>
                                                            <h6>Ancient Echoes</h6><span class="c-o-light">Combining
                                                                ambient sounds
                                                                and classical instruments</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-shrink-0"><i class="fa-solid fa-circle-play"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-md-6 box-col-6">
                                                <div class="audio-box">
                                                    <div class="flex-grow-1 common-f-start"><img class="img-fluid"
                                                            src="{{ asset('assets/images/search/5.png') }}"
                                                            alt="song profile6">
                                                        <div>
                                                            <h6>Pulse in Rhythm</h6><span class="c-o-light">A dancing with
                                                                lots of
                                                                intensity and driving beats</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-shrink-0"><i class="fa-solid fa-circle-play"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="common-title px-0">
                                            <h5>Your Top Songs </h5>
                                        </div>
                                        <div class="slider-wrapper arrow-round">
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper audio-slider">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="audio-card">
                                                            <div class="audio-image"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/search/1.jpg') }}"
                                                                    alt=""></div>
                                                            <div class="audio-content">
                                                                <div class="flex-grow-1">
                                                                    <h6>Hip Hop</h6><span>Beats from the
                                                                        city</span>
                                                                </div>
                                                                <div class="flex-shrink-0"><i
                                                                        class="fa-solid fa-circle-play"></i><i
                                                                        class="fa-regular fa-heart"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="audio-card">
                                                            <div class="audio-image"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/search/2.jpg') }}"
                                                                    alt=""></div>
                                                            <div class="audio-content">
                                                                <div class="flex-grow-1">
                                                                    <h6>Horror</h6><span>Stories from the
                                                                        shadows</span>
                                                                </div>
                                                                <div class="flex-shrink-0"><i
                                                                        class="fa-solid fa-circle-pause"></i><i
                                                                        class="fa-regular fa-heart"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="audio-card">
                                                            <div class="audio-image"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/search/3.jpg') }}"
                                                                    alt=""></div>
                                                            <div class="audio-content">
                                                                <div class="flex-grow-1">
                                                                    <h6>Jazz</h6><span>Mellow & seductive
                                                                        music</span>
                                                                </div>
                                                                <div class="flex-shrink-0"><i
                                                                        class="fa-solid fa-circle-play"></i><i
                                                                        class="fa-regular fa-heart"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="audio-card">
                                                            <div class="audio-image"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/search/4.jpg') }}"
                                                                    alt=""></div>
                                                            <div class="audio-content">
                                                                <div class="flex-grow-1">
                                                                    <h6>Lofi Hip Hop</h6><span>Relaxing
                                                                        music</span>
                                                                </div>
                                                                <div class="flex-shrink-0"><i
                                                                        class="fa-solid fa-circle-play"></i><i
                                                                        class="fa-regular fa-heart"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="audio-card">
                                                            <div class="audio-image"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/search/5.jpg') }}"
                                                                    alt=""></div>
                                                            <div class="audio-content">
                                                                <div class="flex-grow-1">
                                                                    <h6>Pop</h6><span>Adorable & positive
                                                                        songs </span>
                                                                </div>
                                                                <div class="flex-shrink-0"><i
                                                                        class="fa-solid fa-circle-play"></i><i
                                                                        class="fa-regular fa-heart"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="audio-card">
                                                            <div class="audio-image"><img class="img-fluid"
                                                                    src="{{ asset('assets/images/search/6.jpg') }}"
                                                                    alt=""></div>
                                                            <div class="audio-content">
                                                                <div class="flex-grow-1">
                                                                    <h6>Romantic</h6><span>Heartfelt
                                                                        melodies</span>
                                                                </div>
                                                                <div class="flex-shrink-0"><i
                                                                        class="fa-solid fa-circle-play"></i><i
                                                                        class="fa-regular fa-heart"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="common-title common-space px-0">
                                            <h5>Your Suggested Tracks </h5><a href="{{ route('admin.subscribed_user') }}">
                                                View All</a>
                                        </div>
                                        <div class="table-responsive custom-scrollbar">
                                            <table class="table audio-table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Title Song</th>
                                                        <th scope="col">Album</th>
                                                        <th scope="col">Artist</th>
                                                        <th scope="col">Release Date</th>
                                                        <th scope="col">Duration</th>
                                                        <th scope="col">Download</th>
                                                        <th scope="col"> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="common-f-start gap-2">
                                                                <div><img class="img-fluid"
                                                                        src="{{ asset('assets/images/search/audio-1.png') }}"
                                                                        alt=""><i
                                                                        class="fa-solid fa-circle-play"></i>
                                                                </div><span>Celestial Dreams</span>
                                                            </div>
                                                        </td>
                                                        <td>Dream G</td>
                                                        <td>Starlight Sym</td>
                                                        <td>14 Jan,2023</td>
                                                        <td>3:10</td>
                                                        <td><i class="fa-solid fa-download"></i></td>
                                                        <td>
                                                            <div class="common-align"><a href="#!"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Add to Playlist"> <i
                                                                        class="fa-solid fa-plus"></i></a><a href="#!"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Add to Favorite"> <i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="common-f-start gap-2">
                                                                <div><img class="img-fluid"
                                                                        src="{{ asset('assets/images/search/audio-2.png') }}"
                                                                        alt=""><i
                                                                        class="fa-solid fa-circle-play"></i>
                                                                </div><span>Festival Fever</span>
                                                            </div>
                                                        </td>
                                                        <td>Orange </td>
                                                        <td>Party Anthem</td>
                                                        <td>02 Aug,2024</td>
                                                        <td>4:12</td>
                                                        <td><i class="fa-solid fa-download"></i></td>
                                                        <td>
                                                            <div class="common-align"><a href="#!"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Add to Playlist"> <i
                                                                        class="fa-solid fa-plus"></i></a><a href="#!"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Add to Favorite"> <i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="common-f-start gap-2">
                                                                <div><img class="img-fluid"
                                                                        src="{{ asset('assets/images/search/audio-3.png') }}"
                                                                        alt=""><i
                                                                        class="fa-solid fa-circle-play"></i>
                                                                </div><span>Galactic Voyage</span>
                                                            </div>
                                                        </td>
                                                        <td>Macro</td>
                                                        <td>Space Odyssey</td>
                                                        <td>12 Sep,2024</td>
                                                        <td>6:35</td>
                                                        <td><i class="fa-solid fa-download"></i></td>
                                                        <td>
                                                            <div class="common-align"><a href="#!"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Add to Playlist"> <i
                                                                        class="fa-solid fa-plus"></i></a><a href="#!"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Add to Favorite"> <i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="common-f-start gap-2">
                                                                <div><img class="img-fluid"
                                                                        src="{{ asset('assets/images/search/audio-4.png') }}"
                                                                        alt=""><i
                                                                        class="fa-solid fa-circle-play"></i>
                                                                </div><span>Mystic Forest</span>
                                                            </div>
                                                        </td>
                                                        <td>DS Cartoon</td>
                                                        <td>Enchanted Flutes</td>
                                                        <td>25 Nov,2020</td>
                                                        <td>2:55</td>
                                                        <td><i class="fa-solid fa-download"></i></td>
                                                        <td>
                                                            <div class="common-align"><a href="#!"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Add to Playlist"> <i
                                                                        class="fa-solid fa-plus"></i></a><a href="#!"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Add to Favorite"> <i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="common-f-start gap-2">
                                                                <div><img class="img-fluid"
                                                                        src="{{ asset('assets/images/search/audio-5.png') }}"
                                                                        alt=""><i
                                                                        class="fa-solid fa-circle-play"></i>
                                                                </div><span>Ocean Waves</span>
                                                            </div>
                                                        </td>
                                                        <td>See Margon </td>
                                                        <td>Calm Seas</td>
                                                        <td>09 Nov,2019</td>
                                                        <td>3:25</td>
                                                        <td><i class="fa-solid fa-download"></i></td>
                                                        <td>
                                                            <div class="common-align"><a href="#!"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Add to Playlist"> <i
                                                                        class="fa-solid fa-plus"></i></a><a href="#!"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="Add to Favorite"> <i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="setting-links" role="tabpanel"
                                aria-labelledby="setting-link">
                                <div class="row g-sm-3 g-4 setting-options">
                                    <div class="col-12">
                                        <h5 class="mb-3">Search Options</h5>
                                        <div class="row g-2">
                                            <div class="col-xxl-2 col-md-3 col-sm-4 col-6 box-col-3"><label
                                                    class="form-label mb-0">Save Search History</label>
                                            </div>
                                            <div class="col-xxl-9 col-md-8 col-sm-7 col-6 box-col-8e">
                                                <div class="form-check form-switch form-check-inline"><input
                                                        class="form-check-input switch-primary check-size" type="checkbox"
                                                        role="switch" checked=""></div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-xxl-2 col-md-3 col-sm-4 col-6 box-col-3"><label
                                                    class="form-label mb-0">Safe Search</label></div>
                                            <div class="col-xxl-9 col-md-8 col-sm-7 col-6 box-col-8e">
                                                <div class="form-check form-switch form-check-inline"><input
                                                        class="form-check-input switch-primary check-size" type="checkbox"
                                                        role="switch" checked=""></div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-xxl-2 col-md-3 col-sm-4 box-col-3"><label
                                                    class="form-label mb-0">Language</label></div>
                                            <div class="col-xxl-9 col-md-8 col-sm-7 box-col-8e"><select
                                                    class="form-select">
                                                    <option selected="">Select your language</option>
                                                    <option value="1">English</option>
                                                    <option value="2">French</option>
                                                    <option value="3">Gujarati</option>
                                                    <option value="4">Hindi</option>
                                                    <option value="5">Japanese</option>
                                                    <option value="6">Marathi</option>
                                                    <option value="7">Russian</option>
                                                </select></div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-xxl-2 col-md-3 col-sm-4 box-col-3"><label
                                                    class="form-label mb-0">Region</label></div>
                                            <div class="col-xxl-9 col-md-8 col-sm-7 box-col-8e"><select
                                                    class="form-select">
                                                    <option selected="">Select your region</option>
                                                    <option value="1">South-Central Asia</option>
                                                    <option value="2">Balkan Peninsula</option>
                                                    <option value="3">Southern Europe</option>
                                                    <option value="4">Eastern Europe</option>
                                                    <option value="5">West Africa</option>
                                                    <option value="6">Eastern Africa</option>
                                                    <option value="7">Central America</option>
                                                    <option value="8">Eastern Europe</option>
                                                    <option value="9">Eastern Africa</option>
                                                    <option value="10">Northern Europe</option>
                                                    <option value="11">West Africa</option>
                                                    <option value="12">South-Central Asia</option>
                                                    <option value="13">Eastern Africa</option>
                                                    <option value="14">Southern Europe</option>
                                                    <option value="15">Northern Europe</option>
                                                </select></div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-xxl-2 col-md-3 col-sm-4 box-col-3"><label
                                                    class="form-label mb-0">File Type</label></div>
                                            <div class="col-xxl-9 col-md-8 col-sm-7 box-col-8e"><select
                                                    class="form-select">
                                                    <option selected="">Any format</option>
                                                    <option value="1">JPEG</option>
                                                    <option value="2">PNG</option>
                                                    <option value="3">SVG</option>
                                                    <option value="4">AVIF</option>
                                                    <option value="5">GIF</option>
                                                    <option value="6">WebP</option>
                                                    <option value="7">DOC / DOCX</option>
                                                    <option value="8">PPT / PPTX</option>
                                                    <option value="9">CSV</option>
                                                    <option value="10">EPUB</option>
                                                    <option value="11">MP3</option>
                                                    <option value="12">WAV</option>
                                                    <option value="13">WMA</option>
                                                    <option value="14">MIDI</option>
                                                    <option value="15">M4A</option>
                                                    <option value="16">3GP</option>
                                                    <option value="17">MOV</option>
                                                    <option value="18">ZIP</option>
                                                    <option value="19">RAR</option>
                                                    <option value="20">ISO</option>
                                                    <option value="21">CAB</option>
                                                    <option value="22">TAR</option>
                                                </select></div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-xxl-2 col-md-3 col-sm-4 box-col-3"><label
                                                    class="form-label mb-0">Last Update</label></div>
                                            <div class="col-xxl-9 col-md-8 col-sm-7 box-col-8e"><select
                                                    class="form-select">
                                                    <option selected="">Anytime</option>
                                                    <option value="1">Today </option>
                                                    <option value="2">Yesterday </option>
                                                    <option value="3">Last 24 Hours</option>
                                                    <option value="4">Last 7 Days</option>
                                                    <option value="5">Last 30 Days</option>
                                                    <option value="6">Last 6 Months </option>
                                                    <option value="7">Upto a week ago</option>
                                                    <option value="8">Upto a month ago</option>
                                                    <option value="9">Upto a year ago</option>
                                                    <option value="10">Last 5 Years</option>
                                                </select></div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-xxl-2 col-md-3 col-sm-4 box-col-3"><label
                                                    class="form-label mb-0">License & Rights</label></div>
                                            <div class="col-xxl-9 col-md-8 col-sm-7 box-col-8e"><select
                                                    class="form-select">
                                                    <option value="1">Free to use for personal use</option>
                                                    <option value="2">GNU - General public license</option>
                                                    <option value="3">Public domain</option>
                                                    <option value="4">Free to use or share, even
                                                        commercially</option>
                                                    <option value="5">Creative commons -
                                                        Attribution-noncommercial-sharealike</option>
                                                    <option value="6">Free to use or share</option>
                                                    <option value="7">Not filter by license</option>
                                                    <option value="8">Free to use with a link back</option>
                                                    <option value="9">Free to use for non-commercial
                                                        purposes </option>
                                                    <option value="10">Free to use for educational purposes
                                                    </option>
                                                </select>
                                                <div class="d-flex mt-3 justify-content-end"><a class="btn btn-primary"
                                                        href="#!" role="button">Clear Search History </a></div>
                                            </div>
                                        </div>
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
    <script src="{{ asset('assets/js/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe.js') }}"></script>
    <script src="{{ asset('assets/js/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('assets/js/custom-search.js') }}"></script>
    <script src="{{ asset('assets/js/custom-click.js') }}"></script>
@endsection
