@extends('layouts.simple.master')

@section('title', 'Gallery Grid Description')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Gallery Grid With Description</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Gallery</li>
                        <li class="breadcrumb-item active"> Gallery Grid With Description</li>
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
                        <h5>IMAGE GALLERY WITH DESCRIPTION</h5>
                    </div>
                    <div class="my-gallery card-body gallery-with-description" itemscope="">
                        <div class="row">
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/01.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/01.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/02.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/02.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/03.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/03.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/04.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/04.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/05.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/05.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/06.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/06.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/07.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/07.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/08.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/08.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter. // Root element of PhotoSwipe. Must have class
                                        pswp.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/09.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/09.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/010.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/010.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/011.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/011.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/012.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/012.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/013.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/013.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/014.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/014.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/015.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/015.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
                                </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/016.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/016.jpg') }}"
                                        itemprop="thumbnail" alt="Image description">
                                    <div class="caption">
                                        <h4>Portfolio Title</h4>
                                        <p>Using a camera's lens to record moments in time is the art form known as
                                            photography. To produce aesthetically striking photos, it entails the deft use
                                            of light, composition, and subject matter.</p>
                                    </div>
                                </a>
                                <figcaption itemprop="caption description">
                                    <h4>Portfolio Title</h4>
                                    <p>Using a camera's lens to record moments in time is the art form known as photography.
                                        To produce aesthetically striking photos, it entails the deft use of light,
                                        composition, and subject matter.</p>
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
                                        <!-- element will get class pswp__preloader--active when preloader is running-->
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
    <script src="{{ asset('assets/js/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe.js') }}"></script>
@endsection
