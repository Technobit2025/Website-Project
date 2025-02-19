@extends('layouts.simple.master')

@section('title', 'Gallery Placeholder')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Gallery With Placeholder</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Gallery</li>
                        <li class="breadcrumb-item active"> Gallery With Placeholder</li>
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
                        <h5>IMAGE GALLERY WITH PLACEHOLDER LOADER</h5>
                    </div>
                    <div class="gallery-description-skeleton loader_skeleton">
                        <div class="row gy-4">
                            <div class="col-xxl-3 col-lg-4 col-sm-6 box-col-4">
                                <div class="skeleton-wrapper">
                                    <div class="skeleton-image"> </div>
                                    <div class="skeleton-caption">
                                        <div class="skeleton-name"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6 box-col-4">
                                <div class="skeleton-wrapper">
                                    <div class="skeleton-image"> </div>
                                    <div class="skeleton-caption">
                                        <div class="skeleton-name"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6 box-col-4">
                                <div class="skeleton-wrapper">
                                    <div class="skeleton-image"> </div>
                                    <div class="skeleton-caption">
                                        <div class="skeleton-name"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6 box-col-4">
                                <div class="skeleton-wrapper">
                                    <div class="skeleton-image"> </div>
                                    <div class="skeleton-caption">
                                        <div class="skeleton-name"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6 box-col-4">
                                <div class="skeleton-wrapper">
                                    <div class="skeleton-image"> </div>
                                    <div class="skeleton-caption">
                                        <div class="skeleton-name"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6 box-col-4">
                                <div class="skeleton-wrapper">
                                    <div class="skeleton-image"> </div>
                                    <div class="skeleton-caption">
                                        <div class="skeleton-name"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6 box-col-4">
                                <div class="skeleton-wrapper">
                                    <div class="skeleton-image"> </div>
                                    <div class="skeleton-caption">
                                        <div class="skeleton-name"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6 box-col-4">
                                <div class="skeleton-wrapper">
                                    <div class="skeleton-image"> </div>
                                    <div class="skeleton-caption">
                                        <div class="skeleton-name"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6 box-col-4">
                                <div class="skeleton-wrapper">
                                    <div class="skeleton-image"> </div>
                                    <div class="skeleton-caption">
                                        <div class="skeleton-name"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6 box-col-4">
                                <div class="skeleton-wrapper">
                                    <div class="skeleton-image"> </div>
                                    <div class="skeleton-caption">
                                        <div class="skeleton-name"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6 box-col-4">
                                <div class="skeleton-wrapper">
                                    <div class="skeleton-image"> </div>
                                    <div class="skeleton-caption">
                                        <div class="skeleton-name"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6 box-col-4">
                                <div class="skeleton-wrapper">
                                    <div class="skeleton-image"> </div>
                                    <div class="skeleton-caption">
                                        <div class="skeleton-name"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                        <div class="skeleton-desc"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-gallery card-body gallery-with-description" itemscope="">
                        <div class="row">
                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4" itemprop="associatedMedia"
                                itemscope=""><a href="{{ asset('assets/images/big-lightgallry/016.jpg') }}"
                                    itemprop="contentUrl" data-size="1600x950"><img
                                        src="{{ asset('assets/images/lightgallry/016.jpg') }}" itemprop="thumbnail"
                                        alt="Image description">
                                    <div class="caption">
                                        <h4>Comeren Diaz</h4>
                                        <p>With a personalised activity feed that includes posts, images, and updates, you
                                            can stay in touch with friends and follow trends.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Comeren Diaz</h4>
                                    <p>With a personalised activity feed that includes posts, images, and updates, you can
                                        stay in touch with friends and follow trends.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4" itemprop="associatedMedia"
                                itemscope=""><a href="{{ asset('assets/images/big-lightgallry/02.jpg') }}"
                                    itemprop="contentUrl" data-size="1600x950"><img
                                        src="{{ asset('assets/images/lightgallry/02.jpg') }}" itemprop="thumbnail"
                                        alt="Image description">
                                    <div class="caption">
                                        <h4>Gwen Rice</h4>
                                        <p>With just a few clicks, create thorough reports that provide insightful
                                            information about your business activities.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Gwen Rice</h4>
                                    <p>With just a few clicks, create thorough reports that provide insightful information
                                        about your business activities.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4" itemprop="associatedMedia"
                                itemscope=""><a href="{{ asset('assets/images/big-lightgallry/03.jpg') }}"
                                    itemprop="contentUrl" data-size="1600x950"><img
                                        src="{{ asset('assets/images/lightgallry/03.jpg') }}" itemprop="thumbnail"
                                        alt="Image description">
                                    <div class="caption">
                                        <h4>Dev John</h4>
                                        <p>Effectively manage users with our user-friendly dashboard, which includes
                                            customisable widgets and real-time data metrics.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Dev John</h4>
                                    <p>Effectively manage users with our user-friendly dashboard, which includes
                                        customisable widgets and real-time data metrics.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4" itemprop="associatedMedia"
                                itemscope=""><a href="{{ asset('assets/images/big-lightgallry/04.jpg') }}"
                                    itemprop="contentUrl" data-size="1600x950"><img
                                        src="{{ asset('assets/images/lightgallry/04.jpg') }}" itemprop="thumbnail"
                                        alt="Image description">
                                    <div class="caption">
                                        <h4>Cairo Tran</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Cairo Tran</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4" itemprop="associatedMedia"
                                itemscope=""><a href="{{ asset('assets/images/big-lightgallry/05.jpg') }}"
                                    itemprop="contentUrl" data-size="1600x950"><img
                                        src="{{ asset('assets/images/lightgallry/05.jpg') }}" itemprop="thumbnail"
                                        alt="Image description">
                                    <div class="caption">
                                        <h4>Bexley Cline</h4>
                                        <p>The provision of tools for creating, modifying, and managing user accounts, the
                                            admin themes and templates enable effective user management. They also provide
                                            strong permission management, letting you set restrictions on features and
                                            access levels according to user roles.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Bexley Cline</h4>
                                    <p>The provision of tools for creating, modifying, and managing user accounts, the admin
                                        themes and templates enable effective user management. They also provide strong
                                        permission management, letting you set restrictions on features and access levels
                                        according to user roles.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4" itemprop="associatedMedia"
                                itemscope=""><a href="{{ asset('assets/images/big-lightgallry/015.jpg') }}"
                                    itemprop="contentUrl" data-size="1600x950"><img
                                        src="{{ asset('assets/images/lightgallry/015.jpg') }}" itemprop="thumbnail"
                                        alt="Image description">
                                    <div class="caption">
                                        <h4>Johan Deo</h4>
                                        <p>An admin theme is a visually beautiful and practical design template created
                                            especially for a website's or application's backend.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Johan Deo</h4>
                                    <p>An admin theme is a visually beautiful and practical design template created
                                        especially for a website's or application's backend.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4" itemprop="associatedMedia"
                                itemscope=""><a href="{{ asset('assets/images/big-lightgallry/01.jpg') }}"
                                    itemprop="contentUrl" data-size="1600x950"><img
                                        src="{{ asset('assets/images/lightgallry/01.jpg') }}" itemprop="thumbnail"
                                        alt="Image description">
                                    <div class="caption">
                                        <h4>Naya Curry</h4>
                                        <p>Until the final content is ready, placeholders can be used to fill up
                                            spaces with text or images. Layout design can be facilitated by the
                                            usage of placeholders. Here are some pointers on the use of
                                            placeholders.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Naya Curry</h4>
                                    <p>Until the final content is ready, placeholders can be used to fill up spaces
                                        with text or images. Layout design can be facilitated by the usage of
                                        placeholders. Here are some pointers on the use of placeholders.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4" itemprop="associatedMedia"
                                itemscope=""><a href="{{ asset('assets/images/big-lightgallry/013.jpg') }}"
                                    itemprop="contentUrl" data-size="1600x950"><img
                                        src="{{ asset('assets/images/lightgallry/013.jpg') }}" itemprop="thumbnail"
                                        alt="Image description">
                                    <div class="caption">
                                        <h4>Bucky Barnes</h4>
                                        <p>With scheduled backup and simple restore options for important data, you
                                            can guarantee data security.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Bucky Barnes</h4>
                                    <p>With scheduled backup and simple restore options for important data, you can
                                        guarantee data security. // Root element of PhotoSwipe. Must have class
                                        pswp.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4" itemprop="associatedMedia"
                                itemscope=""><a href="{{ asset('assets/images/big-lightgallry/012.jpg') }}"
                                    itemprop="contentUrl" data-size="1600x950"><img
                                        src="{{ asset('assets/images/lightgallry/012.jpg') }}" itemprop="thumbnail"
                                        alt="Image description">
                                    <div class="caption">
                                        <h4>Andew Jon</h4>
                                        <p>Gather and handle user reviews straight from the administrative dashboard
                                            to ensure ongoing development.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Andew Jon</h4>
                                    <p>Gather and handle user reviews straight from the administrative dashboard to
                                        ensure ongoing development.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4" itemprop="associatedMedia"
                                itemscope=""><a href="{{ asset('assets/images/big-lightgallry/011.jpg') }}"
                                    itemprop="contentUrl" data-size="1600x950"><img
                                        src="{{ asset('assets/images/lightgallry/011.jpg') }}" itemprop="thumbnail"
                                        alt="Image description">
                                    <div class="caption">
                                        <h4>Brock Villa</h4>
                                        <p>There are extensive billing and invoicing functions included in the admin
                                            themes/templates. Invoice generation, payment tracking, price plan
                                            management, and recurring billing process automation are all available.
                                        </p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Brock Villa</h4>
                                    <p>There are extensive billing and invoicing functions included in the admin
                                        themes/templates. Invoice generation, payment tracking, price plan
                                        management, and recurring billing process automation are all available.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4" itemprop="associatedMedia"
                                itemscope=""><a href="{{ asset('assets/images/big-lightgallry/010.jpg') }}"
                                    itemprop="contentUrl" data-size="1600x950"><img
                                        src="{{ asset('assets/images/lightgallry/010.jpg') }}" itemprop="thumbnail"
                                        alt="Image description">
                                    <div class="caption">
                                        <h4>Sarah Loren</h4>
                                        <p>Use our built-in live streaming function to go live and share experiences
                                            with your followers in real time.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Sarah Loren</h4>
                                    <p>Use our built-in live streaming function to go live and share experiences
                                        with your followers in real time.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xxl-3 col-lg-4 col-sm-6 box-col-4" itemprop="associatedMedia"
                                itemscope=""><a href="{{ asset('assets/images/big-lightgallry/09.jpg') }}"
                                    itemprop="contentUrl" data-size="1600x950"><img
                                        src="{{ asset('assets/images/lightgallry/09.jpg') }}" itemprop="thumbnail"
                                        alt="Image description">
                                    <div class="caption">
                                        <h4>Leo Macias</h4>
                                        <p>Customise your accounts with cover photographs, biographies, and profile
                                            pictures to express who you are.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Leo Macias</h4>
                                    <p>Customise your accounts with cover photographs, biographies, and profile
                                        pictures to express who you are.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                            <!--
                                  Background of PhotoSwipe.
                                  It's a separate element, as animating opacity is faster than rgba().
                                  -->
                            <div class="pswp__bg"></div>
                            <!-- Slides wrapper with overflow:hidden.-->
                            <div class="pswp__scroll-wrap">
                                <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.-->
                                <!-- don't modify these 3 pswp__item elements, data is added later on.-->
                                <div class="pswp__container">
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                </div>
                                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
                                <div class="pswp__ui pswp__ui--hidden">
                                    <div class="pswp__top-bar">
                                        <!-- Controls are self-explanatory. Order can be changed.-->
                                        <div class="pswp__counter"></div>
                                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                        <button class="pswp__button pswp__button--share" title="Share"></button>
                                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                        <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR-->
                                        <!-- element will get class pswp__preloader-active when preloader is running-->
                                        <div class="pswp__preloader">
                                            <div class="pswp__preloader__icn">
                                                <div class="pswp__preloader__cut">
                                                    <div class="pswp__preloader__donut"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                        <div class="pswp__share-tooltip"></div>
                                    </div>
                                    <button class="pswp__button pswp__button--arrow--left"
                                        title="Previous (arrow left)"></button>
                                    <button class="pswp__button pswp__button--arrow--right"
                                        title="Next (arrow right)"></button>
                                    <div class="pswp__caption">
                                        <div class="pswp__caption__center"></div>
                                    </div>
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
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe.js') }}"></script>
    <script src="{{ asset('assets/js/masonry-gallery.js') }}"></script>
    <script src="{{ asset('assets/js/custom-skeleton.js') }}"></script>
@endsection
