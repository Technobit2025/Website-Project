@extends('layouts.simple.master')

@section('title', 'Bookmark')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select/bootstrap-select.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Bookmarks</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">Bookmarks</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="email-wrap bookmark-wrap">
            <div class="row main-bookmark">
                <div class="col-xxl-3 box-col-6">
                    <div class="md-sidebar"><a class="btn btn-primary md-sidebar-toggle" href="#!">bookmark
                            filter</a>
                        <div class="md-sidebar-aside job-left-aside">
                            <div class="email-left-aside">
                                <div class="card">
                                    <div class="card-body custom-scrollbar">
                                        <div class="email-app-sidebar left-bookmark">
                                            <div class="common-flex align-items-center">
                                                <div class="media-size-email"><img class="rounded-circle"
                                                        src="{{ asset('assets/images/user/user.png') }}" alt="">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6>WILLIAM C. JENNINGS</h6>
                                                    <p>william@jourrapide.com</p>
                                                </div>
                                            </div>
                                            <ul class="nav main-menu" role="tablist">
                                                <li class="nav-item"><button class="button-primary btn-block btn-mail w-100"
                                                        type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="me-2"
                                                            data-feather="bookmark"></i> New
                                                        Bookmark</button></li>
                                                <li class="nav-item">
                                                    <ul>
                                                        <li> <span class="main-title"><i class="icofont icofont-filter"></i>
                                                                Filter By</span></li>
                                                        <li><a class="active" id="pills-created-tab" data-bs-toggle="pill"
                                                                href="#pills-created" role="tab"
                                                                aria-controls="pills-created" aria-selected="true"><span
                                                                    class="title">
                                                                    Created by me</span></a></li>
                                                        <li><a id="pills-favorite-tab" data-bs-toggle="pill"
                                                                href="#pills-favorite" role="tab"
                                                                aria-controls="pills-favorite" aria-selected="false"><span
                                                                    class="title">
                                                                    Favorites</span></a></li>
                                                        <li><a id="pills-shared-tab" data-bs-toggle="pill"
                                                                href="#pills-shared" role="tab"
                                                                aria-controls="pills-shared" aria-selected="false"><span
                                                                    class="title">
                                                                    Shared With Me</span></a></li>
                                                        <li><a id="pills-bookmark-tab" data-bs-toggle="pill"
                                                                href="#pills-bookmark" role="tab"
                                                                aria-controls="pills-bookmark" aria-selected="false"><span
                                                                    class="title">
                                                                    My Bookmark</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <hr>
                                                </li>
                                                <li><span class="main-title"> Tags<span class="pull-right"><a href="#"
                                                                data-bs-toggle="modal" data-bs-target="#createtag"><i
                                                                    data-feather="plus-circle"></i></a></span></span>
                                                    <ul class="tag-names">
                                                        <li><span class="title badge badge-secondary">
                                                                notification</span></li>
                                                        <li><span class="title badge badge-secondary">
                                                                Newsletter</span></li>
                                                        <li><span class="title badge badge-secondary">
                                                                Business</span></li>
                                                        <li><span class="title badge badge-secondary">
                                                                Holidays</span></li>
                                                        <li><span class="title badge badge-secondary">
                                                                Important</span></li>
                                                        <li><span class="title badge badge-secondary">
                                                                Organization</span></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-md-12 box-col-12">
                    <div class="email-right-aside bookmark-tabcontent">
                        <div class="card email-body radius-left">
                            <div class="ps-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="pills-created" role="tabpanel"
                                        aria-labelledby="pills-created-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h6 class="mb-0">Created By Me</h6>
                                                <ul>
                                                    <li><a class="grid-bookmark-view" href="#!"><i
                                                                data-feather="grid"></i></a></li>
                                                    <li><a class="list-layout-view" href="#!"><i
                                                                data-feather="list"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="details-bookmark text-center">
                                                    <div class="row" id="bookmarkData">
                                                        <div class="col-xxl-3 col-md-4 col-ed-4 col-sm-6">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/01.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_0"
                                                                        onclick="setFavourite(0)"><a href="#!"><i
                                                                                class="fa-solid fa-star"></i></a>
                                                                    </div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h6 class="title_0">Admin Template</h6>
                                                                            <p class="weburl_0">
                                                                                http://admin.pixelstrap.com//ltr/landing-page.html
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(0)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end">
                                                                                        <a href="#!"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_0"> is beautifully crafted, clean and modern designed admin theme with 6 different demos and light - dark versions.</p><span
                                                                                    class="collection_0">General</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4 col-sm-6">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/02.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_1"
                                                                        onclick="setFavourite(1)"><a href="#!"><i
                                                                                class="fa-solid fa-star"></i></a>
                                                                    </div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h6 class="title_1">Universal Template</h6>
                                                                            <p class="weburl_1">
                                                                                https://angular.pixelstrap.com/universal/landing
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(1)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end">
                                                                                        <a href="#!"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_1">Universal is beautifully crafted, clean and modern designed admin theme</p>
                                                                                <span class="collection_1">General</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4 col-sm-6">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/03.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_2"
                                                                        onclick="setFavourite(2)"><a href="#!"><i
                                                                                class="fa-solid fa-star"></i></a>
                                                                    </div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h6 class="title_2">Angular Theme</h6>
                                                                            <p class="weburl_2">
                                                                                https://angular.pixelstrap.com/cuba/landing
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(2)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end">
                                                                                        <a href="#!"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_2">Cuba is beautifully crafted, clean and modern designed admin theme</p>
                                                                                <span class="collection_2">Fs</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4 col-sm-6">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/04.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_3"
                                                                        onclick="setFavourite(3)"><a href="#!"><i
                                                                                class="fa-solid fa-star"></i></a>
                                                                    </div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h6 class="title_3">Multikart Admin</h6>
                                                                            <p class="weburl_3">
                                                                                http://themes.pixelstrap.com/multikart/back-end/index.html
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(3)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end">
                                                                                        <a href="#!"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_3">Multikart admin is modern designed admin theme</p><span
                                                                                    class="collection_3">General</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4 col-sm-6">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/05.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_4"
                                                                        onclick="setFavourite(4)"><a href="#!"><i
                                                                                class="fa-solid fa-star"></i></a>
                                                                    </div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h6 class="title_4">Ecommerce theme</h6>
                                                                            <p class="weburl_4">
                                                                                http://themes.pixelstrap.com/multikart
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(4)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end">
                                                                                        <a href="#!"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_4">Multikart HTML template is an apparently simple but highly functional tempalate designed for creating a flourisahing online business.</p>
                                                                                <span class="collection_4">General
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4 col-sm-6">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/06.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_5"
                                                                        onclick="setFavourite(5)"><a href="#!"><i
                                                                                class="fa-solid fa-star"></i></a>
                                                                    </div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h6 class="title_5">Tovo app landing page</h6>
                                                                            <p class="weburl_5">
                                                                                http://vue.pixelstrap.com/tovo/home-one
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(5)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end">
                                                                                        <a href="#!"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_5">Amazing landing page with easy customization</p><span
                                                                                    class="collection_5">Fs
                                                                                </span>
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
                                    </div>
                                    <div class="fade tab-pane" id="pills-favorite" role="tabpanel"
                                        aria-labelledby="pills-favorite-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h6 class="mb-0">Favorites</h6>
                                                <ul>
                                                    <li><a class="grid-bookmark-view" href="#!"><i
                                                                data-feather="grid"></i></a></li>
                                                    <li><a class="list-layout-view" href="#!"><i
                                                                data-feather="list"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="details-bookmark text-center">
                                                    <div class="row" id="favouriteData"></div>
                                                    <div class="no-favourite"><span>No Bookmarks
                                                            Found.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fade tab-pane" id="pills-shared" role="tabpanel"
                                        aria-labelledby="pills-shared-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h6 class="mb-0">Shared with Me</h6>
                                                <ul>
                                                    <li><a class="grid-bookmark-view" href="#!"><i
                                                                data-feather="grid"></i></a></li>
                                                    <li><a class="list-layout-view" href="#!"><i
                                                                data-feather="list"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="details-bookmark text-center"><span>No Bookmarks
                                                        Found.</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fade tab-pane" id="pills-bookmark" role="tabpanel"
                                        aria-labelledby="pills-bookmark-tab">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex">
                                                <h6 class="mb-0">My Bookmark</h6>
                                                <ul>
                                                    <li><a class="grid-bookmark-view" href="#!"><i
                                                                data-feather="grid"></i></a></li>
                                                    <li><a class="list-layout-view" href="#!"><i
                                                                data-feather="list"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="details-bookmark text-center">
                                                    <div class="row" id="bookmarkData1">
                                                        <div class="col-xxl-3 col-md-4 col-ed-4 col-sm-6">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/011.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_0"
                                                                        onclick="setFavourite(0)"><a href="#!"><i
                                                                                class="fa-solid fa-star"></i></a>
                                                                    </div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h6 class="title_0">Admin Template</h6>
                                                                            <p class="weburl_0">
                                                                                http://admin.pixelstrap.com/Cuba/ltr/landing-page.html
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(0)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end">
                                                                                        <a href="#!"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_0">Cuba is beautifully crafted, clean and modern designed admin theme with 6 different demos and light - dark versions.</p><span
                                                                                    class="collection_0">General</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4 col-sm-6">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/012.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_1"
                                                                        onclick="setFavourite(1)"><a href="#!"><i
                                                                                class="fa-solid fa-star"></i></a>
                                                                    </div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h6 class="title_1">Universal Template</h6>
                                                                            <p class="weburl_1">
                                                                                https://angular.pixelstrap.com/universal/landing
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(1)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end">
                                                                                        <a href="#!"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_1">Universal is beautifully crafted, clean and modern designed admin theme</p>
                                                                                <span class="collection_1">General</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4 col-sm-6">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/013.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_2"
                                                                        onclick="setFavourite(2)"><a href="#!"><i
                                                                                class="fa-solid fa-star"></i></a>
                                                                    </div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h6 class="title_2">Angular Theme</h6>
                                                                            <p class="weburl_2">
                                                                                https://angular.pixelstrap.com/cuba/landing
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(2)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end">
                                                                                        <a href="#!"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_2">Cuba is beautifully crafted, clean and modern designed admin theme</p>
                                                                                <span class="collection_2">Fs</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4 col-sm-6">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/014.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_3"
                                                                        onclick="setFavourite(3)"><a href="#!"><i
                                                                                class="fa-solid fa-star"></i></a>
                                                                    </div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h6 class="title_3">Multikart Admin</h6>
                                                                            <p class="weburl_3">
                                                                                http://themes.pixelstrap.com/multikart/back-end/index.html
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(3)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end">
                                                                                        <a href="#!"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_3">Multikart Admin is modern designed admin theme</p><span
                                                                                    class="collection_3">General</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4 col-sm-6">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/015.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_4"
                                                                        onclick="setFavourite(4)"><a href="#!"><i
                                                                                class="fa-solid fa-star"></i></a>
                                                                    </div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h6 class="title_4">E-commerce Theme</h6>
                                                                            <p class="weburl_4">
                                                                                http://themes.pixelstrap.com/multikart
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(4)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end">
                                                                                        <a href="#!"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_4">Multikart HTML template is an apparently simple but highly functional tempalate designed for creating a flourisahing online business.</p>
                                                                                <span class="collection_4">General
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-md-4 col-ed-4 col-sm-6">
                                                            <div class="card card-with-border bookmark-card o-hidden">
                                                                <div class="details-website"><img class="img-fluid"
                                                                        src="{{ asset('assets/images/lightgallry/016.jpg') }}"
                                                                        alt="">
                                                                    <div class="favourite-icon favourite_5"
                                                                        onclick="setFavourite(5)"><a href="#!"><i
                                                                                class="fa-solid fa-star"></i></a>
                                                                    </div>
                                                                    <div class="desciption-data">
                                                                        <div class="title-bookmark">
                                                                            <h6 class="title_5">Tovo App Landing Page</h6>
                                                                            <p class="weburl_5">
                                                                                http://vue.pixelstrap.com/tovo/home-one
                                                                            </p>
                                                                            <div class="hover-block">
                                                                                <ul>
                                                                                    <li><a href=""
                                                                                            onclick="editBookmark(5)"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#edit-bookmark"><i
                                                                                                data-feather="edit-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="link"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="share-2"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#!"><i
                                                                                                data-feather="trash-2"></i></a>
                                                                                    </li>
                                                                                    <li class="pull-right text-end">
                                                                                        <a href="#!"><i
                                                                                                data-feather="tag"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="content-general">
                                                                                <p class="desc_5">Amazing Landing Page With Easy Customization</p><span
                                                                                    class="collection_5">Fs
                                                                                </span>
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
                                    </div>
                                    <div class="modal fade modal-bookmark" id="edit-bookmark" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Bookmark</h5><button class="btn-close"
                                                        type="button" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body custom-input">
                                                    <form class="form-bookmark needs-validation" novalidate="">
                                                        <div class="row g-2">
                                                            <div class="mb-3 mt-0 col-12"><label>Web
                                                                    Url</label><input class="form-control" id="editurl"
                                                                    type="url" required="" autocomplete="off"
                                                                    value="http://admin.pixelstrap.com/Cuba/ltr/landing-page.html">
                                                                <div class="valid-feedback">Looks good!
                                                                </div>
                                                                <div class="invalid-feedback">Please enter a
                                                                    web url.</div>
                                                            </div>
                                                            <div class="mb-3 mt-0 col-12">
                                                                <label>Title</label><input class="form-control"
                                                                    id="edittitle" type="text" required=""
                                                                    autocomplete="off" value="Admin Template">
                                                                <div class="valid-feedback">Looks good!
                                                                </div>
                                                                <div class="invalid-feedback">Please enter a
                                                                    title.</div>
                                                            </div>
                                                            <div class="mb-3 mt-0 col-12">
                                                                <label>Description</label>
                                                                <textarea class="form-control" id="editdesc" required="" autocomplete="off">Cuba is beautifully crafted, clean and modern designed admin theme with 6 different demos and light - dark versions.</textarea>
                                                                <div class="valid-feedback">Looks good!
                                                                </div>
                                                                <div class="invalid-feedback">Please enter a
                                                                    description.</div>
                                                            </div>
                                                            <div class="mb-3 mt-0 col-md-6"><label
                                                                    class="mb-0">Group</label><select
                                                                    class="selectpicker search-picker" aria-label="Group"
                                                                    data-live-search="true">
                                                                    <option value="1" selected>My Bookmarks
                                                                    </option>
                                                                </select></div>
                                                            <div class="mb-3 mt-0 col-md-6"><label
                                                                    class="mb-0">Collection</label><select
                                                                    class="selectpicker search-picker" aria-label="Group"
                                                                    data-live-search="true">
                                                                    <option value="1" selected>General
                                                                    </option>
                                                                    <option value="2">fs</option>
                                                                </select></div>
                                                        </div><button class="btn btn-secondary"
                                                            type="button">Save</button><button class="btn btn-primary ms-2"
                                                            type="button" data-bs-dismiss="modal">Cancel </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade modal-bookmark" id="createtag" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Create Tag</h5><button class="btn-close"
                                                        type="button" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body custom-input">
                                                    <form class="form-bookmark needs-validation" novalidate="">
                                                        <div class="row g-2">
                                                            <div class="mt-0 col-md-12"><label>Tag
                                                                    Name</label><input class="form-control" type="text"
                                                                    required="" autocomplete="off"
                                                                    placeholder="Enter tag name"></div>
                                                        </div><button class="btn btn-primary me-2"
                                                            type="button">Save</button><button class="btn btn-secondary"
                                                            type="button" data-bs-dismiss="modal">Cancel</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade modal-bookmark" id="exampleModal" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add
                                                        Bookmark</h5><button class="btn-close" type="button"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body custom-input">
                                                    <form class="form-bookmark needs-validation" id="bookmark-form"
                                                        novalidate="">
                                                        <div class="row g-2">
                                                            <div class="mb-3 mt-0 col-md-12"><label for="bm-weburl">Web
                                                                    Url</label><input class="form-control" id="bm-weburl"
                                                                    type="text" required="" autocomplete="off"
                                                                    placeholder="Enter web url">
                                                                <div class="valid-feedback">Looks good!
                                                                </div>
                                                                <div class="invalid-feedback">Please enter a
                                                                    web url.</div>
                                                            </div>
                                                            <div class="mb-3 mt-0 col-md-12"><label
                                                                    for="bm-title">Title</label><input
                                                                    class="form-control" id="bm-title" type="text"
                                                                    required="" autocomplete="off"
                                                                    placeholder="Enter title">
                                                                <div class="valid-feedback">Looks good!
                                                                </div>
                                                                <div class="invalid-feedback">Please enter a
                                                                    title.</div>
                                                            </div>
                                                            <div class="mb-3 mt-0 col-md-12">
                                                                <label>Description</label>
                                                                <textarea class="form-control" id="bm-desc" required="" autocomplete="off" placeholder="Enter description"></textarea>
                                                                <div class="valid-feedback">Looks good!
                                                                </div>
                                                                <div class="invalid-feedback">Please enter
                                                                    description.</div>
                                                            </div>
                                                            <div class="mt-0 col-md-6"><label
                                                                    class="mb-0">Group</label><select
                                                                    class="selectpicker search-picker" aria-label="Group"
                                                                    data-live-search="true">
                                                                    <option value="bookmark">My Bookmarks
                                                                    </option>
                                                                </select></div>
                                                            <div class="mt-0 col-md-6"><label
                                                                    class="mb-0">Collection</label><select
                                                                    class="selectpicker search-picker"
                                                                    aria-label="Collection" data-live-search="true">
                                                                    <option value="1" selected>General
                                                                    </option>
                                                                    <option value="2">fs</option>
                                                                </select></div>
                                                        </div><input id="index_var" type="hidden" value="6"><button
                                                            class="btn btn-primary me-2" id="Bookmark"
                                                            onclick="submitBookMark()" type="submit">Save</button><button
                                                            class="btn btn-secondary" type="button"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                    </form>
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
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/bookmark/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/bookmark/custom.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/select/bootstrap-select.min.js') }}"></script>
@endsection
