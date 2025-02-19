@extends('layouts.simple.master')

@section('title', 'Image Cropper')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/image-cropper.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Image Cropper</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Image Cropper</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="img-cropper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Image Cropper</h5>
                            <p class="f-m-light mt-1"> Use image cropper.js</p>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-xl-9 col-md-12">
                                    <div class="img-container"><img id="image"
                                            src="{{ asset('assets/images/other-images/bg-profile.png') }}" alt="Picture">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12">
                                    <div class="docs-preview clearfix">
                                        <div class="img-preview preview-md"></div>
                                        <div class="img-preview preview-sm"></div>
                                        <div class="img-preview preview-xs"></div>
                                    </div>
                                    <div class="docs-data">
                                        <div class="input-group input-group-sm"><span
                                                class="input-group-text">X</span><input class="form-control" id="dataX"
                                                type="text" placeholder="x"><span class="input-group-text">px</span>
                                        </div>
                                        <div class="input-group input-group-sm"><span
                                                class="input-group-text">Y</span><input class="form-control" id="dataY"
                                                type="text" placeholder="y"><span class="input-group-text">px</span>
                                        </div>
                                        <div class="input-group input-group-sm"><span
                                                class="input-group-text">Width</span><input class="form-control"
                                                id="dataWidth" type="text" placeholder="width"><span
                                                class="input-group-text">px</span>
                                        </div>
                                        <div class="input-group input-group-sm"><span class="input-group-text">Height
                                            </span><input class="form-control" id="dataHeight" type="text"
                                                placeholder="height"><span class="input-group-text">px</span></div>
                                        <div class="input-group input-group-sm"><span
                                                class="input-group-text">Rotate</span><input class="form-control"
                                                id="dataRotate" type="text" placeholder="rotate"><span
                                                class="input-group-text">deg</span></div>
                                        <div class="input-group input-group-sm"><span
                                                class="input-group-text">ScaleX</span><input class="form-control"
                                                id="dataScaleX" type="text" placeholder="scaleX"></div>
                                        <div class="input-group input-group-sm"><span
                                                class="input-group-text">ScaleY</span><input class="form-control"
                                                id="dataScaleY" type="text" placeholder="scaleY"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-2">
                                <div class="col-xl-9 col-md-12 docs-buttons">
                                    <div class="btn-group"><button class="btn btn-primary" type="button"
                                            data-method="setDragMode" data-option="move" title="Move"><span
                                                class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false"
                                                title="Move"><span
                                                    class="fa-solid fa-arrows-up-down-left-right"></span></span></button><button
                                            class="btn button-light-primary" type="button" data-method="setDragMode"
                                            data-option="crop" title="Crop"><span class="docs-tooltip"
                                                data-bs-toggle="tooltip" data-animation="false" title="Crop"><span
                                                    class="fa-solid fa-crop txt-primary"></span></span></button>
                                    </div>
                                    <div class="btn-group"><button class="btn btn-primary" type="button"
                                            data-method="zoom" data-option="0.1" title="Zoom In"><span
                                                class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false"
                                                title="Zoom In"><span
                                                    class="fa-solid fa-magnifying-glass-plus"></span></span></button><button
                                            class="btn button-light-primary" type="button" data-method="zoom"
                                            data-option="-0.1" title="Zoom Out"><span class="docs-tooltip"
                                                data-bs-toggle="tooltip" data-animation="false" title="Zoom Out"><span
                                                    class="fa-solid fa-magnifying-glass-minus txt-primary"></span></span></button>
                                    </div>
                                    <div class="btn-group"><button class="btn btn-outline-secondary" type="button"
                                            data-method="move" data-option="-10" data-second-option="0"
                                            title="Move Left"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                                data-animation="false" title="Move Left"><span
                                                    class="fa-solid fa-arrow-left"></span></span></button><button
                                            class="btn btn-outline-secondary" type="button" data-method="move"
                                            data-option="10" data-second-option="0" title="Move Right"><span
                                                class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false"
                                                title="Move Right"><span
                                                    class="fa-solid fa-arrow-right"></span></span></button><button
                                            class="btn btn-outline-secondary" type="button" data-method="move"
                                            data-option="0" data-second-option="-10" title="Move Up"><span
                                                class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false"
                                                title="Move Up"><span
                                                    class="fa-solid fa-arrow-up"></span></span></button><button
                                            class="btn btn-outline-secondary" type="button" data-method="move"
                                            data-option="0" data-second-option="10" title="Move Down"><span
                                                class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false"
                                                title="Move Down"><span
                                                    class="fa-solid fa-arrow-down"></span></span></button>
                                    </div>
                                    <div class="btn-group"><button class="btn btn-outline-success" type="button"
                                            data-method="rotate" data-option="-45" title="Rotate Left"><span
                                                class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false"
                                                title="Rotate Left"><span
                                                    class="fa-solid fa-rotate-left"></span></span></button><button
                                            class="btn btn-outline-success" type="button" data-method="rotate"
                                            data-option="45" title="Rotate Right"><span class="docs-tooltip"
                                                data-bs-toggle="tooltip" data-animation="false"
                                                title="Rotate Right"><span
                                                    class="fa-solid fa-rotate-right"></span></span></button>
                                    </div>
                                    <div class="btn-group"><button class="btn btn-outline-info" type="button"
                                            data-method="scaleX" data-option="-1" title="Flip Horizontal"><span
                                                class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false"
                                                title="Flip Horizontal"><span
                                                    class="fa-solid fa-arrows-left-right"></span></span></button><button
                                            class="btn btn-outline-info" type="button" data-method="scaleY"
                                            data-option="-1" title="Flip Vertical"><span class="docs-tooltip"
                                                data-bs-toggle="tooltip" data-animation="false"
                                                title="Flip Vertical"><span
                                                    class="fa-solid fa-arrows-up-down"></span></span></button>
                                    </div>
                                    <div class="btn-group"><button class="btn btn-outline-warning" type="button"
                                            data-method="crop" title="Check"><span class="docs-tooltip"
                                                data-bs-toggle="tooltip" data-animation="false" title="Check"><span
                                                    class="fa-solid fa-check"></span></span></button><button
                                            class="btn btn-outline-warning" type="button" data-method="clear"
                                            title="Clear"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                                data-animation="false" title="Clear"><span
                                                    class="fa-solid fa-xmark"></span></span></button></div>
                                    <div class="btn-group"><button class="btn btn-outline-danger" type="button"
                                            data-method="disable" title="Disable"><span class="docs-tooltip"
                                                data-bs-toggle="tooltip" data-animation="false" title="Disable"><span
                                                    class="fa-solid fa-lock"></span></span></button><button
                                            class="btn btn-outline-danger" type="button" data-method="enable"
                                            title="Enable"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                                data-animation="false" title="Enable"><span
                                                    class="fa-solid fa-unlock"></span></span></button></div>
                                    <div class="btn-group"><button class="btn btn-outline-dark" type="button"
                                            data-method="reset" title="Reset"><span class="docs-tooltip"
                                                data-bs-toggle="tooltip" data-animation="false" title="Reset"><span
                                                    class="fa-solid fa-arrows-rotate"></span></span></button><label
                                            class="btn btn-outline-dark btn-upload" for="inputImage"
                                            title="Upload image file"><input class="sr-only" id="inputImage"
                                                type="file" name="file"
                                                accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff"><span class="docs-tooltip"
                                                data-bs-toggle="tooltip" data-animation="false" title="Upload"><span
                                                    class="fa-solid fa-upload"></span></span></label><button
                                            class="btn btn-outline-dark" type="button" data-method="destroy"
                                            title="Destroy"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                                data-animation="false" title="Destroy"><span
                                                    class="fa-solid fa-power-off"></span></span></button>
                                    </div><br><!-- Show the cropped image in modal-->
                                    <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true"
                                        aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="getCroppedCanvasTitle">
                                                        Cropped</h5><button class="close" type="button"
                                                        data-dismiss="modal" aria-label="Close"><span
                                                            aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body"></div>
                                                <div class="modal-footer"><button class="btn btn-primary" type="button"
                                                        data-dismiss="modal">Close</button><a
                                                        class="btn btn-outline-primary" id="download"
                                                        href="javascript:void(0);" download="cropped.jpg">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal--><button class="btn btn-outline-danger" type="button"
                                        data-method="moveTo" data-option="0"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" data-animation="false"
                                            title="cropper.moveTo(0)">Move to
                                            [0,0]</span></button><button class="btn btn-outline-info" type="button"
                                        data-method="zoomTo" data-option="1"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" data-animation="false"
                                            title="cropper.zoomTo(1)">Zoom to
                                            100%</span></button><button class="btn btn-outline-success" type="button"
                                        data-method="rotateTo" data-option="180"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" data-animation="false"
                                            title="cropper.rotateTo(180)">Rotate
                                            180°</span></button><button class="btn btn-outline-warning" type="button"
                                        data-method="scale" data-option="-2" data-second-option="-1"><span
                                            class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.scale(-2, -1)">Scale
                                            (-2, -1)</span></button>
                                    <textarea class="form-control mb-0" id="putData" rows="1"
                                        placeholder="Get data to here or set data with this value"></textarea>
                                </div><!-- /.docs-buttons-->
                                <div class="col-xl-3 col-md-12 docs-toggles box-col-12">
                                    <div class="btn-group d-flex flex-nowrap" data-bs-toggle="buttons">
                                        <label class="btn btn-info active"><input class="sr-only" id="aspectRatio0"
                                                type="radio" name="aspectRatio" value="1.7777777777777777"><span
                                                class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false"
                                                title="aspectRatio: 16 / 9">16:9</span></label><label
                                            class="btn btn-outline-info"><input class="sr-only" id="aspectRatio1"
                                                type="radio" name="aspectRatio" value="1.3333333333333333"><span
                                                class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false"
                                                title="aspectRatio: 4 / 3">4:3</span></label><label
                                            class="btn btn-outline-info"><input class="sr-only" id="aspectRatio2"
                                                type="radio" name="aspectRatio" value="1"><span
                                                class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false"
                                                title="aspectRatio: 1 / 1">1:1</span></label><label
                                            class="btn btn-outline-info"><input class="sr-only" id="aspectRatio3"
                                                type="radio" name="aspectRatio" value="0.6666666666666666"><span
                                                class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false"
                                                title="aspectRatio: 2 / 3">2:3</span></label><label
                                            class="btn btn-outline-info"><input class="sr-only" id="aspectRatio4"
                                                type="radio" name="aspectRatio" value="NaN"><span
                                                class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false"
                                                title="aspectRatio: NaN">Free</span></label>
                                    </div>
                                    <div class="btn-group d-flex flex-nowrap" data-bs-toggle="buttons">
                                        <label class="btn btn-warning active"><input class="sr-only" id="viewMode0"
                                                type="radio" name="viewMode" value="0" checked=""><span
                                                class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false"
                                                title="View Mode 0">VM0</span></label><label
                                            class="btn btn-outline-warning"><input class="sr-only" id="viewMode1"
                                                type="radio" name="viewMode" value="1"><span class="docs-tooltip"
                                                data-bs-toggle="tooltip" data-animation="false"
                                                title="View Mode 1">VM1</span></label><label
                                            class="btn btn-outline-warning"><input class="sr-only" id="viewMode2"
                                                type="radio" name="viewMode" value="2"><span class="docs-tooltip"
                                                data-bs-toggle="tooltip" data-animation="false"
                                                title="View Mode 2">VM2</span></label><label
                                            class="btn btn-outline-warning"><input class="sr-only" id="viewMode3"
                                                type="radio" name="viewMode" value="3"><span class="docs-tooltip"
                                                data-bs-toggle="tooltip" data-animation="false"
                                                title="View Mode 3">VM3</span></label>
                                    </div>
                                    <div class="dropdown dropup docs-options mb-0"><button
                                            class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="true">Toggle
                                            Options<span class="caret"></span></button>
                                        <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="responsive" type="checkbox" name="responsive"
                                                        checked=""><label class="form-check-label"
                                                        for="responsive">responsive</label></div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="restore" type="checkbox" name="restore"
                                                        checked=""><label class="form-check-label"
                                                        for="restore">restore</label></div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="checkCrossOrigin" type="checkbox" name="checkCrossOrigin"
                                                        checked=""><label class="form-check-label"
                                                        for="checkCrossOrigin">checkCrossOrigin</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="checkOrientation" type="checkbox" name="checkOrientation"
                                                        checked=""><label class="form-check-label"
                                                        for="checkOrientation">checkOrientation</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="modal" type="checkbox" name="modal"
                                                        checked=""><label class="form-check-label"
                                                        for="modal">modal</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="guides" type="checkbox" name="guides"
                                                        checked=""><label class="form-check-label"
                                                        for="guides">guides</label></div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="center" type="checkbox" name="center"
                                                        checked=""><label class="form-check-label"
                                                        for="center">center</label></div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="highlight" type="checkbox" name="highlight"
                                                        checked=""><label class="form-check-label"
                                                        for="highlight">highlight</label></div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="background" type="checkbox" name="background"
                                                        checked=""><label class="form-check-label"
                                                        for="background">background</label></div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="autoCrop" type="checkbox" name="autoCrop"
                                                        checked=""><label class="form-check-label"
                                                        for="autoCrop">autoCrop</label></div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="movable" type="checkbox" name="movable"
                                                        checked=""><label class="form-check-label"
                                                        for="movable">movable</label></div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="rotatable" type="checkbox" name="rotatable"
                                                        checked=""><label class="form-check-label"
                                                        for="rotatable">rotatable</label></div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="scalable" type="checkbox" name="scalable"
                                                        checked=""><label class="form-check-label"
                                                        for="scalable">scalable</label></div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="zoomable" type="checkbox" name="zoomable"
                                                        checked=""><label class="form-check-label"
                                                        for="zoomable">zoomable</label></div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="zoomOnTouch" type="checkbox" name="zoomOnTouch"
                                                        checked=""><label class="form-check-label"
                                                        for="zoomOnTouch">zoomOnTouch</label></div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="zoomOnWheel" type="checkbox" name="zoomOnWheel"
                                                        checked=""><label class="form-check-label"
                                                        for="zoomOnWheel">zoomOnWheel</label></div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="cropBoxMovable" type="checkbox" name="cropBoxMovable"
                                                        checked=""><label class="form-check-label"
                                                        for="cropBoxMovable">cropBoxMovable</label></div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="cropBoxResizable" type="checkbox" name="cropBoxResizable"
                                                        checked=""><label class="form-check-label"
                                                        for="cropBoxResizable">cropBoxResizable</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="toggleDragModeOnDblclick" type="checkbox"
                                                        name="toggleDragModeOnDblclick" checked=""><label
                                                        class="form-check-label"
                                                        for="toggleDragModeOnDblclick">toggleDragModeOnDblclick</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card height-equal">
                                <div class="card-header">
                                    <h5>Disabled Zoom</h5>
                                    <p class="f-m-light mt-1"> Use <code>crop-zoomable </code>class to
                                        disabled zoom-in and zoom-out.</p>
                                </div>
                                <div class="card-body">
                                    <div class="img-container"><img class="crop-zoomable img-fluid"
                                            src="{{ asset('assets/images/other-images/img-cropper.jpg') }}"
                                            alt="baby">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card height-equal">
                                <div class="card-header">
                                    <h5>Auto-crop Disable</h5>
                                    <p class="f-m-light mt-1"> Use<code> crop-auto </code>class to cropped
                                        image in any directions.</p>
                                </div>
                                <div class="card-body">
                                    <div class="img-container"><img class="crop-auto img-fluid"
                                            src="{{ asset('assets/images/slider/1.jpg') }}" alt="#"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Disabled Image Drag</h5>
                                    <p class="f-m-light mt-1"> Use<code> crop-drag </code>class to move
                                        disabled.</p>
                                </div>
                                <div class="card-body">
                                    <div class="img-container"><img class="crop-drag img-fluid"
                                            src="{{ asset('assets/images/other-images/sea.jpg') }}" alt="#"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Minimum Zone Size</h5>
                                    <p class="f-m-light mt-1"> Use<code> crop-min </code>class to minimum
                                        and maximum crop size defined.</p>
                                </div>
                                <div class="card-body">
                                    <div class="img-container"><img class="crop-min img-fluid"
                                            src="{{ asset('assets/images/slider/9.jpg') }}" alt="#"></div>
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
    <script src="{{ asset('assets/js/image-cropper/cropper.js') }}"></script>
    <script src="{{ asset('assets/js/image-cropper/cropper-main.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
