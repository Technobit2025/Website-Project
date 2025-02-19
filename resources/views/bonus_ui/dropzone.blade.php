@extends('layouts.simple.master')

@section('title', 'Dropzone')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/filepond.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/filepond-plugin-image-preview.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Dropzone</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Dropzone</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Default File Upload</h5>
                        <p class="f-m-light mt-1">We use the create method to turn
                            a<code> &lt;input type="file"&gt;</code> into a filepond drop
                            area.<code>[https://pqina.nl/filepond/]</code></p>
                    </div>
                    <div class="card-body"><input class="no-preview" type="file"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Image Preview </h5>
                        <p class="f-m-light mt-1">We use the create method to turn
                            a<code> &lt;input type="file"&gt;</code> into a filepond drop
                            area.<code>[https://pqina.nl/filepond/]</code></p>
                    </div>
                    <div class="card-body"><input class="show-preview" type="file"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Single File Upload</h5>
                        <p class="f-m-light mt-1">Use <code>dropzone </code> class through create upload
                            files and with that we can upload single file by doing
                            <code>singleFileUpload </code>id.
                        </p>
                    </div>
                    <div class="card-body">
                        <form class="dropzone dropzone-secondary" id="singleFileUpload" action="/upload.php">
                            <div class="dropzone-wrapper">
                                <div class="dz-message needsclick"><i class="fa-solid fa-cloud-arrow-up fa-fade"></i>
                                    <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just
                                        a demo dropzone. Selected
                                        files are <strong>not</strong> actually uploaded.)</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Multiple File Upload</h5>
                        <p class="f-m-light mt-1">Use <code>dropzone </code> class through create upload
                            files and with that we can upload multiple file by doing
                            <code>multiFileUpload </code>id.
                        </p>
                    </div>
                    <div class="card-body">
                        <form class="dropzone dropzone-secondary" id="multiFileUpload" action="/upload.php">
                            <div class="dz-message needsclick"><i class="fa-solid fa-cloud-arrow-up fa-fade"></i>
                                <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a
                                    demo dropzone. Selected files
                                    are <strong>not</strong> actually uploaded.)</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Images Dropzone with Effects</h5>
                        <p class="f-m-light mt-1">Use the <code>fileup</code> id and
                            <code>dropzone </code>to create upload images.
                        </p>
                    </div>
                    <div class="card-body animated-dropfile">
                        <form name="upload" method="post" action="#" enctype="multipart/form-data"
                            accept-charset="utf-8">
                            <div class="row">
                                <div class="col-md-12 col-md-offset-3 text-center">
                                    <div class="btn-container">
                                        <div class="imgupload mb-2"><i class="fa fa-file-image-o"></i></div>
                                        <div class="imgupload ok"><i class="fa-solid fa-check"></i></div>
                                        <div class="imgupload stop"><i class="fa fa-times"></i></div>
                                        <p id="namefile">Only pics allowed! (jpg,jpeg,bmp,png)</p><button
                                            class="btn btn-primary" id="btnup" type="button">Search for your
                                            photo!</button><input id="fileup" type="file" name="fileup">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone/dropzone-script.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/filepond-plugin-image-preview.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/filepond-plugin-file-rename.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/filepond-plugin-image-transform.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/filepond.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/custom-filepond.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
