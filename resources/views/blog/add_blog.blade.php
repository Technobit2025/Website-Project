@extends('layouts.simple.master')

@section('title', 'Add Blog')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Add Blog</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Blog</li>
                        <li class="breadcrumb-item active">Add Blog</li>
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
                        <h5>Blog Edit</h5>
                    </div>
                    <div class="card-body add-post">
                        <form class="row g-3">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="validationCustom01">Title:</label>
                                    <input class="form-control" id="validationCustom01" type="text"
                                        placeholder="Post Title">
                                </div>
                                <div class="mb-3">
                                    <label>Type:</label>
                                    <div class="m-checkbox-inline">
                                        <label for="edo-ani">
                                            <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani"
                                                checked="">Text
                                        </label>
                                        <label for="edo-ani1">
                                            <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">Image
                                        </label>
                                        <label for="edo-ani2">
                                            <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani"
                                                checked="">Audio
                                        </label>
                                        <label for="edo-ani3">
                                            <input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani">Video
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="col-form-label">Category:
                                        <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
                                            <option value="AL">Lifestyle</option>
                                            <option value="WY">Travel</option>
                                            <option value="FY">Food</option>
                                            <option value="PY">Photography</option>
                                            <option value="HD">Home Decor</option>
                                            <option value="FS">Fitness </option>
                                            <option value="ED">Education</option>
                                            <option value="BR">Book Reviews</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="email-wrapper">
                                    <div class="theme-form">
                                        <div class="mb-3">
                                            <label class="w-100">Content:</label>
                                            <div class="toolbar-box">
                                                <div id="toolbar8"><span class="ql-formats">
                                                        <select class="ql-size">
                                                            <option value="small">Small</option>
                                                            <option selected="">Normal</option>
                                                            <option value="large">Large</option>
                                                            <option value="huge">Huge</option>
                                                        </select></span><span class="ql-formats">
                                                        <button class="ql-bold">Bold</button>
                                                        <button class="ql-italic">Italic</button>
                                                        <button class="ql-underline">Underline</button>
                                                        <button class="ql-strike">Strike</button>
                                                        <button class="ql-script" value="sub"></button>
                                                        <button class="ql-script" value="super"></button></span><span
                                                        class="ql-formats">
                                                        <button class="ql-header" value="1"></button>
                                                        <button class="ql-header" value="2"></button></span><span
                                                        class="ql-formats">
                                                        <button class="ql-list" value="ordered">List</button>
                                                        <button class="ql-list" value="bullet">Bullet</button>
                                                        <button class="ql-indent" value="-1"></button>
                                                        <button class="ql-indent" value="+1"></button></span><span
                                                        class="ql-formats">
                                                        <button class="ql-link">Link</button>
                                                        <button class="ql-image">Image</button>
                                                        <button class="ql-video">Video</button>
                                                        <select class="ql-color"></select>
                                                        <select class="ql-background"></select></span>
                                                    <!-- Add more options here--><span class="ql-formats">
                                                        <button class="ql-blockquote">Blockquote</button>
                                                        <button class="ql-code-block"></button></span><span
                                                        class="ql-formats">
                                                        <button class="ql-align" value=""></button>
                                                        <button class="ql-align" value="center"></button>
                                                        <button class="ql-align" value="right"></button>
                                                        <button class="ql-align" value="justify"></button></span><span
                                                        class="ql-formats">
                                                        <button class="ql-clean"></button></span>
                                                </div>
                                                <div id="editor8"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form class="dropzone dropzone-secondary" id="multiFileUpload" action="/upload.php">
                            <div class="dz-message needsclick"><i class="fa-solid fa-cloud-arrow-up fa-fade"></i>
                                <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a
                                    demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                            </div>
                        </form>
                        <form class="row g-3 e-category">
                            <div class="col-12">
                                <div class="main-divider">
                                    <div class="divider-body">
                                        <h6>SEO Tags</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label" for="validationMetaTitle1">Meta Title<span
                                        class="txt-danger">*</span></label>
                                <input class="form-control" id="validationMetaTitle1" type="text"
                                    placeholder="Enter meta title">
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label" for="validationKeywords">Meta Keywords<span
                                        class="txt-danger">*</span><span class="c-o-light">&nbsp;(In comma
                                        separated)</span></label>
                                <input class="form-control" id="validationKeywords" type="text"
                                    placeholder="Enter meta keywords">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Meta Description</label>
                                <div class="toolbar-box">
                                    <div id="toolbar4">
                                        <button class="ql-bold">Bold </button>
                                        <button class="ql-italic">Italic </button>
                                        <button class="ql-underline">underline</button>
                                        <button class="ql-strike">Strike </button>
                                        <button class="ql-list" value="ordered">List </button>
                                        <button class="ql-list" value="bullet"> </button>
                                        <button class="ql-indent" value="-1"> </button>
                                        <button class="ql-indent" value="+1"></button>
                                        <button class="ql-link"></button>
                                    </div>
                                    <div id="editor4"></div>
                                </div>
                            </div>
                        </form>
                        <div class="common-flex justify-content-end mt-3">
                            <button class="btn btn-primary" type="submit">Post</button>
                            <input class="btn btn-secondary" type="reset" value="Discard">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone/dropzone-script.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('assets/js/editors/quill.js') }}"></script>
    <script src="{{ asset('assets/js/custom-add-product4.js') }}"></script>
@endsection
