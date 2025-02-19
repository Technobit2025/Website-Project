@extends('layouts.simple.master')

@section('title', 'Creative Card')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>Creative Card</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item"> Bonus Ui</li>
                                    <li class="breadcrumb-item active">Creative Card</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div><!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row effective-card height-equal">
                        <div class="col-xxl-3 col-xl-6 col-12 box-col-4">
                            <div class="card common-hover">
                                <div class="card-body"><a class="effect-card" href="#!">
                                        <div class="common-box1 common-align"><i data-feather="plus-square"></i>
                                            <h5>Add the title of the card</h5>
                                        </div>
                                        <p class="mb-0">This is an example card for you to use. you are able to include
                                            subtitles in your according.</p>
                                        <div class="go-corner">
                                            <div class="go-arrow"></div>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-12 box-col-4">
                            <div class="card common-hover">
                                <div class="card-body">
                                    <div class="creative-wrapper"><img class="img-fluid"
                                            src="{{ asset('assets/images/other-images/mountain.jpg') }}" alt="background image">
                                        <div class="creative-info">
                                            <h5>Add the title of the card</h5>
                                            <p>This is an example card for you to use. you are able to include subtitles
                                                in your according.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-12 box-col-4">
                            <div class="card common-hover">
                                <div class="card-body">
                                    <div class="overlay-card">
                                        <div class="overlay">
                                            <div class="overlay-box"></div>
                                            <div class="overlay-box overlay-heading">
                                                <h5 class="light-white">Add the title of the card</h5>
                                                <hr>
                                            </div>
                                            <div class="overlay-box overlay-subtitle">
                                                <p class="overlay-pera">This is an example card for you to use. you are
                                                    able to include subtitles in your according.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card common-hover">
                                <div class="card-header border-l-primary">
                                    <h5>Border Left</h5>
                                    <p class="mt-1 f-m-light">Use class of <code> border-*</code> for the left border.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <p>You can design your creative card by taking only the <strong>border-l-primary
                                        </strong> class.
                                        If you want to use other colors like this:
                                        <strong>border-l-*</strong><br><strong>Visit Us: </strong> 2600 Hollywood
                                        Blvd,Florida, United States- 33020<br><strong>Mail
                                            Us:</strong>contact@us@gmail.com<br><strong>Contact Number: </strong>(954)
                                        357-7760</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card common-hover">
                                <div class="card-header border-r-secondary">
                                    <h5>Border Right</h5>
                                    <p class="mt-1 f-m-light">Use class of <code>b-r-* </code>for the right border.</p>
                                </div>
                                <div class="card-body">
                                    <p>You can design your creative card by taking only the
                                        <strong>border-r-secondary</strong> class.
                                        If you want to use other colors like this: <strong>border-r-*</strong></p>
                                    <form><label class="form-label" for="exampleFormControlInput1">Email
                                            address</label><input class="form-control" id="exampleFormControlInput1"
                                            type="email" placeholder="youremail@gmail.com"></form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card common-hover">
                                <div class="card-header border-t-danger">
                                    <h5>Border Top</h5>
                                    <p class="mt-1 f-m-light">Use class of <code>border-t-* </code> for the top border.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <p>By using the border-color, we can give the border in the background direction in
                                        a creative way. You can design your creative card by taking only the
                                        <b>border-t-danger</b> class.
                                        If you want to use other colors like this: <b>border-t-*</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card common-hover">
                                <div class="card-header border-b-info">
                                    <h5>Border Bottom</h5>
                                    <p class="mt-1 f-m-light">Use class of<code> border-b-* </code>for the bottom
                                        border.</p>
                                </div>
                                <div class="card-body">
                                    <p>By using the border-color, we can give the border in the background direction in
                                        a creative way. You can design your creative card by taking only the
                                        <b>border-b-info</b> class.
                                        If you want to use other colors like this: <b>border-b-*</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card common-hover">
                                <div class="card-header border-l-primary border-3">
                                    <h5>Border Primary State</h5>
                                    <p class="mt-1 f-m-light">Use class of<code> border-l-* </code>for left border and
                                        <code>border-3 </code>is used to increase the width of the border.</p>
                                </div>
                                <div class="card-body">
                                    <div class="list-group"><a class="list-group-item list-group-item-action active"
                                            href="#!"><img class="rounded-circle" src="{{ asset('assets/images/user/1.jpg') }}"
                                                alt="user">Teresa J. Mosteller</a><a
                                            class="list-group-item list-group-item-action" href="#!"><img
                                                class="rounded-circle" src="{{ asset('assets/images/user/3.png') }}"
                                                alt="user">Gloria D. Acheson</a><a
                                            class="list-group-item list-group-item-action" href="#!"><img
                                                class="rounded-circle" src="{{ asset('assets/images/user/5.jpg') }}"
                                                alt="user">Bryan A. Owens</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card common-hover">
                                <div class="card-header border-l-warning border-3">
                                    <h5>Border Warning State</h5>
                                    <p class="mt-1 f-m-light">Use class of<code> border-l-* </code>for left border and
                                        <code>border-3 </code>is used to increase the width of the border.</p>
                                </div>
                                <div class="card-body">
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item txt-primary fw-bold">known for delivery of useful and
                                            usable solutions</li>
                                        <li class="list-group-item txt-danger fw-bold">Solve your problem with us</li>
                                        <li class="list-group-item txt-success fw-bold">Certified Professionals</li>
                                        <li class="list-group-item txt-warning fw-bold">Growth-Driven </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-12">
                            <div class="card common-hover">
                                <div class="card-header border-l-secondary border-3">
                                    <h5>Border Secondary State</h5>
                                    <p class="mt-1 f-m-light">Use class of<code> border-l-* </code>for left border and
                                        <code>border-3 </code>is used to increase the width of the border.</p>
                                </div>
                                <div class="card-body">
                                    <ol class="list-group list-group-numbered scroll-rtl">
                                        <li class="list-group-item d-flex align-items-start flex-wrap">
                                            <div class="ms-2 me-auto">Stella Nowland</div><span
                                                class="badge bg-warning rounded-pill p-2">Freelance</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-start flex-wrap">
                                            <div class="ms-2 me-auto">Lola Stanford</div><span
                                                class="badge bg-danger text-white rounded-pill p-2">Issue</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-start flex-wrap">
                                            <div class="ms-2 me-auto">Caitlin Coungeau</div><span
                                                class="badge bg-primary text-white rounded-pill p-2">Social</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-start flex-wrap">
                                            <div class="ms-2 me-auto">Graciela McClaran</div><span
                                                class="badge bg-danger text-white rounded-pill p-2">Issue</span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="card card-absolute">
                                <div class="card-header bg-primary">
                                    <h5 class="txt-light">Absolute Card</h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex list-behavior-1 align-items-center">
                                        <div class="flex-shrink-0"><img class="tab-img img-fluid"
                                                src="{{ asset('assets/images/blog/img.png') }}" alt="home"></div>
                                        <div class="flex-grow-1">
                                            <p class="mb-xl-0 mb-sm-4">Absolute card is made by using <b>flex-shrink-0,
                                                    flex-grow-1 & card-absolute </b> classes. you can do any of your
                                                designs using these classes. Subtracting the total size of all the flex
                                                items from the size of the flex container yields the leftover space.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="card card-absolute">
                                <div class="card-header bg-secondary">
                                    <h5 class="txt-light">Absolute Card</h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex list-behavior-1 align-items-center">
                                        <div class="flex-shrink-0"> <img class="tab-img img-fluid"
                                                src="{{ asset('assets/images/blog/blog.jpg') }}" alt="home"></div>
                                        <div class="flex-grow-1">
                                            <p class="mb-xl-0 mb-sm-4">Absolute card is made by using <b>flex-shrink-0,
                                                    flex-grow-1 & card-absolute </b> classes. you can do any of your
                                                designs using these classes. Subtracting the total size of all the flex
                                                items from the size of the flex container yields the leftover space.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
