@extends('layouts.simple.master')

@section('title', 'File Manager')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3> File Manager</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('superadmin.home') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">File Manager</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>All Files</h5>
                <p class="mb-0 f-light">Recently opened files </p>
            </div>
            <div class="card-body">
                <div class="common-file-manager">
                    <div class="filemanger">
                        <div class="top-folder-path">
                            <div class="path-action-btns">
                                <button id="backwardBtn" onclick="backward()">
                                    <i class="fa-solid fa-arrow-left"></i></button>
                                <button id="forwardBtn" onclick="forward()"><i class="fa-solid fa-arrow-right"></i>
                                </button>
                                <button onclick="initFileManager('arunika/');"><i class="fa-solid fa-house"></i></button>
                            </div>
                            <div class="folder-path-write">
                                <input class="folder-path-input" type="text" value="arunika/"
                                    pattern="[A-Za-z0-9]+/[A-Za-z0-9]+" onchange="initFileManager(event.target.value)">
                                <button class="block-btn-1" onclick="reload(event);">
                                    <i class="fa-solid fa-arrows-rotate"></i>
                                </button>
                                <script>
                                    function reload(e) {
                                        let icon = e.target.closest('button').querySelector('i');
                                        icon.classList.add('fa-spin');
                                        setTimeout(() => {
                                            icon.classList.remove('fa-spin');
                                        }, 1000);
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="file-manager-grid block-wrapper">
                        </div>
                        <div class="folderEmpty"><svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#folder-empty') }}"></use>
                            </svg>
                            <h5>This folder is currently empty!</h5>
                        </div>
                        <div class="popup">
                            <div class="popup-bg"></div>
                            <div class="popup-content">
                                <h5>Title</h5>
                                <form action="#" onsubmit="return false;"></form>
                            </div>
                            <h5></h5>
                        </div>
                        <div class="toast-messages"><!-- Toast messages will appear here!--></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('assets/js/blockui/custom-blockui1.js') }}"></script>
    <script src="{{ asset('assets/js/blockui/custom-freeze1.js') }}"></script>
    <script src="{{ asset('assets/js/custom_filemanager.js') }}"></script>
@endsection
