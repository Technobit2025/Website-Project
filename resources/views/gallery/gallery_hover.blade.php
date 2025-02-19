@extends('layouts.simple.master')

@section('title', 'Hover Effects')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Hover Effects</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Gallery</li>
                        <li class="breadcrumb-item active"> Hover Effects</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid gallery-hover">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 1</h5>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery" id="aniimated-thumbnials" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/08.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/08.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/09.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/09.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/010.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/010.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/011.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/011.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 2</h5>
                    </div>
                    <div class="card-body">
                        <div class="row my-gallery gallery" id="aniimated-thumbnials1" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-2" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/017.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/017.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-2" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/018.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/018.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-2" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/019.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/019.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-2" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/020.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/020.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 3</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery my-gallery" id="aniimated-thumbnials2" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-3" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/021.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/021.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-3" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/022.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/022.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-3" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/023.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/023.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-3" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/024.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/024.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 4</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery my-gallery" id="aniimated-thumbnials3" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-4" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/025.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/025.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-4" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/026.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/026.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-4" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/027.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/027.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-4" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/028.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/028.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 5</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery my-gallery" id="aniimated-thumbnials4" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-5" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/029.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/029.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-5" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/030.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/030.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-5" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/031.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/031.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-5" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/032.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/032.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 6</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery my-gallery" id="aniimated-thumbnials5" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/033.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/033.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/034.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/034.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/035.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/035.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-6" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/036.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/036.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 7</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery my-gallery" id="aniimated-thumbnials6" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-7" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/037.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/037.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-7" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/038.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/038.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-7" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/039.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/039.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-7" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/040.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/040.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 8</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery my-gallery" id="aniimated-thumbnials7" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-8" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/041.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/041.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-8" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/042.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/042.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-8" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/043.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/043.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-8" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/044.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/044.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 9</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery my-gallery" id="aniimated-thumbnials8" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-9" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/045.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/045.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-9" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/046.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/046.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-9" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/047.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/047.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-9" itemprop="associatedMedia" itemscope=""><a
                                    href="{{ asset('assets/images/big-lightgallry/048.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/048.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 10</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery my-gallery" id="aniimated-thumbnials9" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-10" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/049.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/049.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-10" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/050.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/050.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-10" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/051.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/051.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-10" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/052.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/052.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 11</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery my-gallery" id="aniimated-thumbnials10" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-11" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/053.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/053.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-11" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/054.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/054.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-11" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/055.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/055.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-11" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/056.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/056.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 12</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery my-gallery" id="aniimated-thumbnials11" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-12" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/057.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/057.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-12" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/058.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/058.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-12" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/059.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/059.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-12" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/060.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/060.jpg') }}" itemprop="thumbnail"
                                            alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 13</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery my-gallery" id="aniimated-thumbnials12" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-13" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/061.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/061.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-13" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/062.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/062.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-13" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/063.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/063.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-13" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/064.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/064.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 14</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery my-gallery" id="aniimated-thumbnials13" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-14" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/065.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/065.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-14" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/066.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/066.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-14" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/067.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/067.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-14" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/068.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/068.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 15</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery my-gallery" id="aniimated-thumbnials14" itemscope="">
                            <figure class="col-md-3 col-6 img-hover hover-15" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/069.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/069.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 1</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-15" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/070.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/070.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 2</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-15" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/071.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/071.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 3</figcaption>
                            </figure>
                            <figure class="col-md-3 col-6 img-hover hover-15" itemprop="associatedMedia" itemscope="">
                                <a href="{{ asset('assets/images/big-lightgallry/072.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/072.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                </a>
                                <figcaption itemprop="caption description">Image caption 4</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hover Effect 16</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery my-gallery" id="aniimated-thumbnials15" itemscope="">
                            <figure class="col-xxl-3 col-xl-4 col-md-6 box-col-4 img-hover" itemprop="associatedMedia"
                                itemscope=""><a class="hover-16"
                                    href="{{ asset('assets/images/big-lightgallry/073.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/073.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                    <div class="overlay-hover">
                                        <div class="overlay-content">
                                            <h5>Minute of DevOps</h5>
                                            <p>Fast updates and pointers for optimizing the processes in your development
                                                and operational teams.</p>
                                            <div class="common-align gap-2">
                                                <div class="btn btn-primary">Submit </div>
                                                <div class="btn btn-warning">Close</div>
                                            </div>
                                        </div>
                                    </div>
                                </a></figure>
                            <figure class="col-xxl-3 col-xl-4 col-md-6 box-col-4 img-hover" itemprop="associatedMedia"
                                itemscope=""><a class="hover-16"
                                    href="{{ asset('assets/images/big-lightgallry/074.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/074.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                    <div class="overlay-hover common-f-start">
                                        <div class="overlay-content">
                                            <h5>Security Highlight</h5>
                                            <p>highlighting essential tools and security procedures to protect your digital
                                                assets.</p>
                                            <div class="common-align gap-2">
                                                <div class="btn btn-primary">Done</div>
                                                <div class="btn btn-danger">Cancel</div>
                                            </div>
                                        </div>
                                    </div>
                                </a></figure>
                            <figure class="col-xxl-3 col-xl-4 col-md-6 box-col-4 img-hover" itemprop="associatedMedia"
                                itemscope=""><a class="hover-16"
                                    href="{{ asset('assets/images/big-lightgallry/075.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/075.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                    <div class="overlay-hover common-align align-items-start">
                                        <div class="overlay-content">
                                            <h5>Code Bursts</h5>
                                            <p>Crucial code snippets and advice to improve your projects and speed up the
                                                coding process.</p>
                                            <div class="common-f-start gap-2">
                                                <div class="btn btn-success">Apply</div>
                                                <div class="btn btn-dark">Reset</div>
                                            </div>
                                        </div>
                                    </div>
                                </a></figure>
                            <figure class="col-xxl-3 col-xl-4 col-md-6 box-col-4 img-hover" itemprop="associatedMedia"
                                itemscope=""><a class="hover-16"
                                    href="{{ asset('assets/images/big-lightgallry/076.jpg') }}" itemprop="contentUrl"
                                    data-size="1600x950">
                                    <div><img src="{{ asset('assets/images/lightgallry/076.jpg') }}"
                                            itemprop="thumbnail" alt="Image description"></div>
                                    <div class="overlay-hover common-align align-items-end">
                                        <div class="overlay-content">
                                            <h5>Summary of Data</h5>
                                            <p>Concise advice and insights on big data trends, analytics, and data science.
                                            </p>
                                            <div class="common-align gap-2">
                                                <div class="btn btn-info">Open</div>
                                                <div class="btn btn-danger">Close</div>
                                            </div>
                                        </div>
                                    </div>
                                </a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Root element of PhotoSwipe. Must have class pswp.-->
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
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
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
