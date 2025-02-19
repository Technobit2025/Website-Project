@extends('layouts.simple.master')

@section('title', 'Touchspin')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Touchspin</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Widgets</li>
                        <li class="breadcrumb-item active">Touchspin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid"><!-- Custom TouchSpin Spinners start-->
        <div class="bootstrap-touchspin">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Default Touchspin</h5>
                            <p class="f-m-light mt-1"> Use <code>decrement-touchspin </code>and
                                <code>increment-touchspin </code>class for default style touchspin.
                            </p>
                        </div>
                        <div class="card-body common-flex">
                            <div class="touchspin-wrapper"> <button
                                    class="decrement-touchspin btn-touchspin touchspin-primary"><i class="fa fa-minus">
                                    </i></button><input class="input-touchspin spin-outline-primary" type="number"
                                    value="0"><button class="increment-touchspin btn-touchspin touchspin-primary"><i
                                        class="fa fa-plus"> </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin touchspin-secondary"><i class="fa fa-minus">
                                    </i></button><input class="input-touchspin spin-outline-secondary" type="number"
                                    value="2"><button class="increment-touchspin btn-touchspin touchspin-secondary"><i
                                        class="fa fa-plus"> </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin touchspin-success"><i class="fa fa-minus">
                                    </i></button><input class="input-touchspin spin-outline-success" type="number"
                                    value="1"><button class="increment-touchspin btn-touchspin touchspin-success"><i
                                        class="fa fa-plus"> </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin touchspin-danger"><i class="fa fa-minus">
                                    </i></button><input class="input-touchspin spin-outline-danger" type="number"
                                    value="8"><button class="increment-touchspin btn-touchspin touchspin-danger"><i
                                        class="fa fa-plus"> </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin touchspin-warning"><i class="fa fa-minus">
                                    </i></button><input class="input-touchspin spin-outline-warning" type="number"
                                    value="3"><button class="increment-touchspin btn-touchspin touchspin-warning"><i
                                        class="fa fa-plus"> </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin touchspin-info"><i
                                        class="fa fa-minus"></i></button><input class="input-touchspin spin-outline-info"
                                    type="number" value="9"><button
                                    class="increment-touchspin btn-touchspin touchspin-info"><i class="fa fa-plus">
                                    </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin touchspin-dark"><i class="fa fa-minus">
                                    </i></button><input class="input-touchspin spin-outline-dark" type="number"
                                    value="4"><button class="increment-touchspin btn-touchspin touchspin-dark"><i
                                        class="fa fa-plus"> </i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Outlined Touchspin</h5>
                            <p class="f-m-light mt-1"> Use <code>decrement-touchspin </code>and
                                <code>increment-touchspin </code>class for outline style touchspin.
                            </p>
                        </div>
                        <div class="card-body common-flex">
                            <div class="touchspin-wrapper"> <button
                                    class="decrement-touchspin btn-touchspin spin-border-primary"><i class="fa fa-minus">
                                    </i></button><input class="input-touchspin spin-outline-primary" type="number"
                                    value="0"><button class="increment-touchspin btn-touchspin spin-border-primary"><i
                                        class="fa fa-plus"> </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin spin-border-secondary"><i class="fa fa-minus">
                                    </i></button><input class="input-touchspin spin-outline-secondary" type="number"
                                    value="2"><button
                                    class="increment-touchspin btn-touchspin spin-border-secondary"><i class="fa fa-plus">
                                    </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin spin-border-success"><i class="fa fa-minus">
                                    </i></button><input class="input-touchspin spin-outline-success" type="number"
                                    value="1"><button
                                    class="increment-touchspin btn-touchspin spin-border-success"><i class="fa fa-plus">
                                    </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin spin-border-danger"><i class="fa fa-minus">
                                    </i></button><input class="input-touchspin spin-outline-danger" type="number"
                                    value="8"><button class="increment-touchspin btn-touchspin spin-border-danger"><i
                                        class="fa fa-plus"> </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin spin-border-warning"><i class="fa fa-minus">
                                    </i></button><input class="input-touchspin spin-outline-warning" type="number"
                                    value="3"><button
                                    class="increment-touchspin btn-touchspin spin-border-warning"><i class="fa fa-plus">
                                    </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin spin-border-info"><i
                                        class="fa fa-minus"></i></button><input class="input-touchspin spin-outline-info"
                                    type="number" value="9"><button
                                    class="increment-touchspin btn-touchspin spin-border-info"><i class="fa fa-plus">
                                    </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin spin-border-dark"><i class="fa fa-minus">
                                    </i></button><input class="input-touchspin spin-outline-dark" type="number"
                                    value="4"><button class="increment-touchspin btn-touchspin spin-border-dark"><i
                                        class="fa fa-plus"> </i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Icons with Prefix and Postfix</h5>
                            <p class="f-m-light mt-1"> Use <code>decrement-touchspin </code>and
                                <code>increment-touchspin </code>class for icons pre/post fix style
                                touchspin.
                            </p>
                        </div>
                        <div class="card-body common-flex pre-post-touchspin">
                            <div class="input-group"><button
                                    class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                        class="fa fa-minus"></i></button><span class="input-group-text">$</span><input
                                    class="input-touchspin spin-outline-primary" type="number" value="0"><button
                                    class="increment-touchspin btn-touchspin touchspin-primary"><i class="fa fa-plus">
                                    </i></button></div>
                            <div class="input-group"><button
                                    class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                        class="fa fa-minus"></i></button><input
                                    class="input-touchspin spin-outline-primary" type="number" value="0"><span
                                    class="input-group-text">%</span><button
                                    class="increment-touchspin btn-touchspin touchspin-primary"><i
                                        class="fa fa-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Buttons with Prefix and Postfix</h5>
                            <p class="f-m-light mt-1"> Use<code>decrement-touchspin </code>and
                                <code>increment-touchspin </code>class for buttons pre/post fix style
                                touchspin.
                            </p>
                        </div>
                        <div class="card-body common-flex pre-post-touchspin bg-touchspin">
                            <div class="input-group"><button
                                    class="decrement-touchspin btn-touchspin touchspin-warning"><i
                                        class="fa fa-minus"></i></button><button class="btn-outline-warning"
                                    id="button-addon1" type="button">Pre</button><input
                                    class="input-touchspin spin-outline-primary" type="number" value="0"><button
                                    class="increment-touchspin btn-touchspin touchspin-warning"><i class="fa fa-plus">
                                    </i></button></div>
                            <div class="input-group"><button
                                    class="decrement-touchspin btn-touchspin touchspin-warning"><i
                                        class="fa fa-minus"></i></button><input
                                    class="input-touchspin spin-outline-primary" type="number" value="0"><button
                                    class="btn-outline-warning" id="button-addon2" type="button">Post</button><button
                                    class="increment-touchspin btn-touchspin touchspin-warning"><i
                                        class="fa fa-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Rounded Touchspin</h5>
                            <p class="f-m-light mt-1"> Use <code>decrement-touchspin </code>and
                                <code>increment-touchspin </code>class for round style touchspin.
                            </p>
                        </div>
                        <div class="card-body common-flex rounded-touchspin">
                            <div class="touchspin-wrapper"> <button
                                    class="decrement-touchspin btn-touchspin touchspin-primary"><i
                                        class="fa-solid fa-angle-left"> </i></button><input
                                    class="input-touchspin spin-outline-primary" type="number" value="0"><button
                                    class="increment-touchspin btn-touchspin touchspin-primary"><i
                                        class="fa-solid fa-angle-right"></i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin touchspin-secondary"><i
                                        class="fa-solid fa-angle-left"></i></button><input
                                    class="input-touchspin spin-outline-secondary" type="number" value="2"><button
                                    class="increment-touchspin btn-touchspin touchspin-secondary"><i
                                        class="fa-solid fa-angle-right"> </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin touchspin-success"><i
                                        class="fa-solid fa-angle-left"></i></button><input
                                    class="input-touchspin spin-outline-success" type="number" value="1"><button
                                    class="increment-touchspin btn-touchspin touchspin-success"><i
                                        class="fa-solid fa-angle-right"> </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin touchspin-danger"><i
                                        class="fa-solid fa-angle-left"> </i></button><input
                                    class="input-touchspin spin-outline-danger" type="number" value="8"><button
                                    class="increment-touchspin btn-touchspin touchspin-danger"><i
                                        class="fa-solid fa-angle-right"> </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin touchspin-warning"><i
                                        class="fa-solid fa-angle-left"> </i></button><input
                                    class="input-touchspin spin-outline-warning" type="number" value="3"><button
                                    class="increment-touchspin btn-touchspin touchspin-warning"><i
                                        class="fa-solid fa-angle-right"> </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin touchspin-info"><i
                                        class="fa-solid fa-angle-left"></i></button><input
                                    class="input-touchspin spin-outline-info" type="number" value="9"><button
                                    class="increment-touchspin btn-touchspin touchspin-info"><i
                                        class="fa-solid fa-angle-right"> </i></button></div>
                            <div class="touchspin-wrapper"><button
                                    class="decrement-touchspin btn-touchspin touchspin-dark"><i
                                        class="fa-solid fa-angle-left"></i></button><input
                                    class="input-touchspin spin-outline-dark" type="number" value="4"><button
                                    class="increment-touchspin btn-touchspin touchspin-dark"><i
                                        class="fa-solid fa-angle-right"></i></button></div>
                        </div>
                    </div>
                </div>
            </div><!-- Custom TouchSpin Spinners end-->
        </div><!-- Container-fluid Ends-->
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/touchspin_2/custom_touchspin.js') }}"></script>
@endsection
