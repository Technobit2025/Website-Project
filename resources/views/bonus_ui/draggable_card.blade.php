@extends('layouts.simple.master')

@section('title', 'Draggable Card')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Draggable Card</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Draggable Card</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row" id="draggable">
            <div class="col-xxl-4 col-md-6">
                <div class="card list-with-icon height-equal">
                    <div class="card-header">
                        <h5>Basic Card</h5>
                        <p class="mt-1 f-m-light">You can draggable cards anywhere.</p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>Logo
                                Design</li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>Web
                                Designer </li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>E-Commerce</li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>UX
                                Designer</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Default Card</h5>
                        <p class="mt-1 f-m-light">You can draggable cards anywhere.</p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item active bg-warning-light" aria-current="true"><i
                                    class="icofont icofont-arrow-right"> </i>UI Kits</li>
                            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>Wow
                                Animations</li>
                            <li class="list-group-item"> <i class="icofont icofont-arrow-right"> </i>Apex
                                Charts</li>
                            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>Starter
                                Kits</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card b-r-0 list-with-icon height-equal">
                    <div class="card-header">
                        <h5>Flat Card</h5>
                        <p class="f-m-light mt-1">You can draggable cards anywhere.</p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="icofont icofont-chart-histogram-alt"></i>Charts</li>
                            <li class="list-group-item"><i class="icofont icofont-warning"></i>Alerts</li>
                            <li class="list-group-item"><i class="icofont icofont-cart"></i>Cart</li>
                            <li class="list-group-item"><i class="icofont icofont-checked"></i>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header bg-info">
                        <h5 class="text-white">Info Color Header</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="pb-2"> Web Designer </h6>
                        <p class="mb-0 c-light">By following instructions and adding your own unique twist
                            and style, you may apply your imagination as a web designer. The majority of the
                            tasks you'll be assigned will have a specific due date and work description, but
                            the reason you were employed was because they need a specialist to inject some
                            much-needed creativity.</p>
                    </div>
                    <div class="card-footer">
                        <h6 class="mb-0 text-end">Cuba Theme</h6>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Info Color Body</h5>
                    </div>
                    <div class="card-body bg-info">
                        <h6 class="pb-2 text-white">UX Designer </h6>
                        <p class="mb-0 text-white">It is the responsibility of the UX designer to make a
                            product or service useful, pleasurable, and accessible. The word "user
                            experience" is used by various industries, although it is most frequently
                            related to digital design for websites and mobile applications.There is no need
                            for coding in user experience design.</p>
                    </div>
                    <div class="card-footer">
                        <h6 class="mb-0 text-end">Cuba Theme</h6>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Info Color Footer</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="pb-2">Web Developer</h6>
                        <p class="mb-0 c-light">A programmer who uses the client-server architecture to
                            create World Wide Web applications is known as a web developer. The apps
                            generally employ any general-purpose programming language on the server and
                            HTML, CSS, and javaScript on the client.</p>
                    </div>
                    <div class="card-footer bg-info">
                        <h6 class="mb-0 text-end text-white">Cuba Theme</h6>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/sortable/sortable.min.js') }}"></script>
    <script src="{{ asset('assets/js/dragable/sortable-custom.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
