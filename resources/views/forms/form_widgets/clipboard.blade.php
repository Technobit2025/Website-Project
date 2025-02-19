@extends('layouts.simple.master')

@section('title', 'Clipboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Clipboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Widgets</li>
                        <li class="breadcrumb-item active">Clipboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Clipboard on Text Input</h5>
                    </div>
                    <div class="card-body">
                        <div class="clipboaard-container">
                            <p class="f-16">Cut/Copy from text input</p><input class="form-control" id="clipboardExample1"
                                type="text" placeholder="type some text to copy / cut">
                            <div class="mt-3 text-end"><button class="btn btn-primary btn-clipboard sweet-15 me-2" type="button"
                                    data-clipboard-action="copy" data-clipboard-target="#clipboardExample1"><i
                                        class="fa-solid fa-copy"></i> Copy</button><button
                                    class="btn btn-secondary btn-clipboard-cut" type="button" data-clipboard-action="cut"
                                    data-clipboard-target="#clipboardExample1"><i class="fa-solid fa-cut"></i> Cut</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Clipboard on Textarea</h5>
                    </div>
                    <div class="card-body">
                        <div class="clipboaard-container">
                            <p class="f-16">Cut/Copy from textarea</p>
                            <textarea class="form-control f-14 custom-scrollbar" id="clipboardExample2" rows="1" spellcheck="false">A web designer must always enhance their work since creating websites is a creative effort. Therefore, a web designer must be more imaginative to produce exceptional results. Blogs about web design assist web designers in learning about new technologies, offer lessons, news, direction for a freebie, and much more. These blogs allow web designers to stay creative and improve their abilities. Therefore, advice from web design blogs is required to improve your business.</textarea>
                            <div class="mt-3 text-end"><button class="btn btn-primary btn-clipboard me-2" type="button"
                                    data-clipboard-action="copy" data-clipboard-target="#clipboardExample2"><i
                                        class="fa-solid fa-copy"></i> Copy</button><button
                                    class="btn btn-secondary btn-clipboard-cut" type="button" data-clipboard-action="cut"
                                    data-clipboard-target="#clipboardExample2"><i class="fa-solid fa-cut"></i> Cut</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Clipboard on Paragraph</h5>
                    </div>
                    <div class="card-body">
                        <div class="clipboaard-container">
                            <p class="f-16">Copy from paragraph</p>
                            <h6 class="border rounded card-body f-w-300" id="clipboardExample3">On that day,
                                hopes and dreams were crushed.
                                Even though it should have been anticipated, it nonetheless
                                surprised me. The warning indicators have been disregarded in favour of the
                                slim chance that it would actually occur. From a hopeful prospect, it had
                                evolved into an unquestionable conviction that it must be fate. That was up
                                until it wasn't,
                                at which point all of the aspirations and dreams collapsed.</h6>
                            <div class="mt-3 text-end"><button class="btn btn-secondary btn-clipboard" type="button"
                                    data-clipboard-action="copy" data-clipboard-target="#clipboardExample3"><i
                                        class="fa-solid fa-copy"></i> Copy</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Copy Portion From Paragraph</h5>
                    </div>
                    <div class="card-body">
                        <div class="clipboaard-container">
                            <p class="f-16">Copy portion from paragraph</p>
                            <h6 class="border rounded card-body f-w-300"><span class="bg-primary text-white p-1"
                                    id="clipboardExample4">Web design is
                                    the process of creating websites </span>that are visible online. Take a
                                website design course to learn how to
                                create an appealing and responsive website. In the discipline of web design,
                                there are degree, diploma, postgraduate degree, and certificate programmes.
                                A web designer is responsible for a website's look, feel, and occasionally
                                even content.</h6>
                            <div class="mt-3 text-end"><button class="btn btn-primary btn-clipboard" type="button"
                                    data-clipboard-action="copy" data-clipboard-target="#clipboardExample4"><i
                                        class="fa-solid fa-copy"></i> Copy highlighted text</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard-script.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
