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
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
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
        <div class="row main-file-sidebar">
            <div class="col-xl-3 box-col-6 pe-0 xl-4">
                <div class="md-sidebar"><a class="btn btn-primary md-sidebar-toggle" href="#!">file
                        filter</a>
                    <div class="md-sidebar-aside job-left-aside custom-scrollbar">
                        <div class="file-sidebar">
                            <div class="card">
                                <div class="card-body">
                                    <div class="common-sort-card">
                                        <h5 class="mb-3">Sort By File Type </h5>
                                        <ul class="files-left-icons file-type-icons">
                                            <li><a id="folder-files-tab" href="#!">
                                                    <div><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#folder-structure') }}">
                                                            </use>
                                                        </svg><span>Folders<span>(124)</span></span></div>
                                                    <span>45 MB</span>
                                                </a></li>
                                            <li> <a id="document-files-tab" href="#!">
                                                    <div><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#doc-file') }}">
                                                            </use>
                                                        </svg><span>Documents<span>(23)</span></span></div>
                                                    <span>34 MB</span>
                                                </a></li>
                                            <li><a id="images-files-tab" href="#!">
                                                    <div><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#image-file') }}">
                                                            </use>
                                                        </svg><span>Images<span>(34)</span></span></div>
                                                    <span>78 MB</span>
                                                </a></li>
                                            <li> <a id="pdf-files-tab" href="#!">
                                                    <div><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#pdf-file') }}">
                                                            </use>
                                                        </svg><span>PDF<span>(10)</span></span></div>
                                                    <span>56 MB</span>
                                                </a></li>
                                            <li> <a id="xml-files-tab" href="#!">
                                                    <div><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#xml-file') }}">
                                                            </use>
                                                        </svg><span>XML<span>(18)</span></span></div>
                                                    <span>23 MB</span>
                                                </a></li>
                                            <li> <a id="sql-files-tab" href="#!">
                                                    <div><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#sql-file') }}">
                                                            </use>
                                                        </svg><span>SQL<span>(20)</span></span></div>
                                                    <span>45 MB</span>
                                                </a></li>
                                            <li> <a id="audio-files-tab" href="#!">
                                                    <div><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#sql-file') }}">
                                                            </use>
                                                        </svg><span>Audio<span>(23)</span></span></div>
                                                    <span>56 MB</span>
                                                </a></li>
                                            <li> <a id="video-files-tab" href="#!">
                                                    <div><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#sql-file') }}">
                                                            </use>
                                                        </svg><span>Video<span>(2)</span></span></div>
                                                    <span>23 MB</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <ul>
                                        <li>
                                            <div class="btn btn-outline-primary"><i data-feather="database">
                                                </i>Storage </div>
                                            <div class="m-t-15">
                                                <div class="progress sm-progress-bar mb-1">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <p>25 GB of 100 GB used</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <hr>
                                    <ul>
                                        <li>
                                            <div class="pricing-plan">
                                                <h5>Trial Version </h5>
                                                <h6>FREE</h6>
                                                <p> 100 GB Space</p>
                                                <div class="btn btn-outline-primary btn-xs">Selected</div>
                                                <img class="bg-img" src="{{ asset('assets/images/dashboard/folder.png') }}"
                                                    alt="folder">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pricing-plan">
                                                <h5>Premium</h5>
                                                <h6>$5/month</h6>
                                                <p> 250 GB Space</p>
                                                <div class="btn btn-outline-primary btn-xs">Contact Us</div>
                                                <img class="bg-img"
                                                    src="{{ asset('assets/images/dashboard/folder1.png') }}"
                                                    alt="folder">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-md-12 box-col-12 xl-66">
                <div class="card">
                    <div class="card-header">
                        <h5>All Files</h5>
                        <p class="mb-0 f-light">Recently opened files </p>
                    </div>
                    <div class="card-body">
                        <div class="common-file-manager">
                            <div class="filemanger">
                                <div class="top-menu"><button onclick="openModel('newFile')"><i
                                            class="fa-solid fa-file-circle-plus"></i>Add
                                        Files</button><button onclick="openModel('newFolder')"><i
                                            class="fa-regular fa-folder-open"></i>Add Folder</button><button
                                        onclick="openModel('rename')"><i
                                            class="fa-solid fa-pen-to-square"></i>Rename</button><button
                                        onclick="openModel('delete')"><i class="fa-solid fa-trash"></i>Delete</button></div>
                                <div class="top-folder-path">
                                    <div class="path-action-btns"><button id="backwardBtn" onclick="backward()"><i
                                                class="fa-solid fa-arrow-left"></i></button><button id="forwardBtn"
                                            onclick="forward()"><i class="fa-solid fa-arrow-right"></i></button><button
                                            onclick="initFileManager('root/');"><i class="fa-solid fa-house"></i></button>
                                    </div>
                                    <div class="folder-path-write"><input class="folder-path-input" type="text"
                                            value="/root/main/test-folder/" pattern="[A-Za-z0-9]+/[A-Za-z0-9]+"
                                            onchange="initFileManager(event.target.value)"><button class="block-btn-1"
                                            onclick="clickedthisBtn(event);function clickedthisBtn(e){let i = e.target.closest('button').querySelector('i'); i.classList.add('fa-spin');setTimeout(() =&gt; {                            i.classList.remove('fa-spin')                            }, 1000);}"><i
                                                class="fa-solid fa-arrows-rotate"></i></button></div>
                                </div>
                                <div class="file-manager-grid block-wrapper">
                                    <div class="folder">
                                        <div class="folder-icon-container">
                                            <div class="folder-icon"></div>
                                        </div>
                                        <div class="common-space">
                                            <p class="folder-name">Mofi</p><span>23.5 MB</span>
                                        </div>
                                    </div>
                                    <div class="folder">
                                        <div class="folder-icon-container">
                                            <div class="folder-icon"></div>
                                        </div>
                                        <div class="common-space">
                                            <p class="folder-name">Database</p><span>45.4 MB</span>
                                        </div>
                                    </div>
                                    <div class="folder">
                                        <div class="folder-icon-container">
                                            <div class="folder-icon"></div>
                                        </div>
                                        <div class="common-space">
                                            <p class="folder-name">Key_logger</p><span>20.1 MB</span>
                                        </div>
                                    </div>
                                    <div class="folder">
                                        <div class="folder-icon-container">
                                            <div class="folder-icon"></div>
                                        </div>
                                        <div class="common-space">
                                            <p class="folder-name">Test_folder</p><span>12.1 MB</span>
                                        </div>
                                    </div>
                                    <div class="folder">
                                        <div class="folder-icon-container">
                                            <div class="folder-icon"></div>
                                        </div>
                                        <div class="common-space">
                                            <p class="folder-name">Resume</p><span>24.2 MB</span>
                                        </div>
                                    </div>
                                    <div class="folder">
                                        <div class="folder-icon-container">
                                            <div class="folder-icon"></div>
                                        </div>
                                        <div class="common-space">
                                            <p class="folder-name">Image folder</p><span>69.14 MB</span>
                                        </div>
                                    </div>
                                    <div class="folder">
                                        <div class="folder-icon-container">
                                            <div class="folder-icon"></div>
                                        </div>
                                        <div class="common-space">
                                            <p class="folder-name">UX Design</p><span>48.33 MB</span>
                                        </div>
                                    </div>
                                    <div class="folder">
                                        <div class="folder-icon-container">
                                            <div class="folder-icon"></div>
                                        </div>
                                        <div class="common-space">
                                            <p class="folder-name">Portfolio</p><span>89.4 MB</span>
                                        </div>
                                    </div>
                                    <div class="folder">
                                        <div class="folder-icon-container">
                                            <div class="folder-icon"></div>
                                        </div>
                                        <div class="common-space">
                                            <p class="folder-name">Databases</p><span>78.5 MB</span>
                                        </div>
                                    </div>
                                    <div class="folder">
                                        <div class="folder-icon-container">
                                            <div class="folder-icon"></div>
                                        </div>
                                        <div class="common-space">
                                            <p class="folder-name">Interview_ques</p><span>22.78 MB</span>
                                        </div>
                                    </div>
                                    <div class="folder">
                                        <div class="folder-icon-container">
                                            <div class="folder-icon"></div>
                                        </div>
                                        <div class="common-space">
                                            <p class="folder-name">Test_JS</p><span>17.78 MB</span>
                                        </div>
                                    </div>
                                    <div class="folder">
                                        <div class="folder-icon-container">
                                            <div class="folder-icon"></div>
                                        </div>
                                        <div class="common-space">
                                            <p class="folder-name">Demo_content</p><span>12.18 MB</span>
                                        </div>
                                    </div>
                                    <div class="folder">
                                        <div class="folder-icon-container">
                                            <div class="folder-icon"></div>
                                        </div>
                                        <div class="common-space">
                                            <p class="folder-name">folder 2</p><span>89.7 MB</span>
                                        </div>
                                    </div>
                                    <div class="folder">
                                        <div class="folder-icon-container">
                                            <div class="folder-icon"></div>
                                        </div>
                                        <div class="common-space">
                                            <p class="folder-name">Songs</p><span>14.8 MB</span>
                                        </div>
                                    </div>
                                    <div class="folder">
                                        <div class="folder-icon-container">
                                            <div class="folder-icon"></div>
                                        </div>
                                        <div class="common-space">
                                            <p class="folder-name">Govern_doc</p><span>89.1 MB</span>
                                        </div>
                                    </div>
                                    <div class="file">
                                        <div class="image-preview"><img class="img-fluid"
                                                src="{{ asset('assets/images/other-images/sea.jpg') }}" alt="mountain">
                                        </div>
                                        <div class="common-space">
                                            <p class="file-name">Image.jpg</p><span>1.8 MB</span>
                                        </div>
                                    </div>
                                    <div class="file" id="testCont">
                                        <div class="doc-icon-container">
                                            <div class="doc-icon">
                                                <p>PDF</p>
                                            </div>
                                        </div>
                                        <div class="common-space">
                                            <p class="file-name">Changelog.pdf</p><span>25.8 MB</span>
                                        </div>
                                    </div>
                                    <div class="file">
                                        <div class="doc-icon-container">
                                            <div class="doc-icon">
                                                <p>TXT</p>
                                            </div>
                                        </div>
                                        <div class="common-space">
                                            <p class="file-name">Essay.txt</p><span>12.2 MB</span>
                                        </div>
                                    </div>
                                    <div class="file">
                                        <div class="doc-icon-container">
                                            <div class="doc-icon">
                                                <p>.?</p>
                                            </div>
                                        </div>
                                        <div class="common-space">
                                            <p class="file-name">File.unknown</p><span>78.2 MB</span>
                                        </div>
                                    </div>
                                    <div class="file">
                                        <div class="doc-icon-container">
                                            <div class="doc-icon">
                                                <p>ZIP</p>
                                            </div>
                                        </div>
                                        <div class="common-space">
                                            <p class="file-name">Form.zip</p><span>25.3 MB</span>
                                        </div>
                                    </div>
                                    <div class="file">
                                        <div class="doc-icon-container">
                                            <div class="doc-icon">
                                                <p>XML</p>
                                            </div>
                                        </div>
                                        <div class="common-space">
                                            <p class="file-name">Timer.xml</p><span>14.5 MB</span>
                                        </div>
                                    </div>
                                    <div class="file">
                                        <div class="doc-icon-container">
                                            <div class="doc-icon">
                                                <p>.?</p>
                                            </div>
                                        </div>
                                        <div class="common-space">
                                            <p class="file-name">File.unknown</p><span>35.9 MB</span>
                                        </div>
                                    </div>
                                    <div class="file">
                                        <div class="doc-icon-container">
                                            <div class="doc-icon">
                                                <p>ZIP</p>
                                            </div>
                                        </div>
                                        <div class="common-space">
                                            <p class="file-name">Theme.zip</p><span>15.9 MB</span>
                                        </div>
                                    </div>
                                    <div class="file">
                                        <div class="doc-icon-container">
                                            <div class="doc-icon">
                                                <p>PNG</p>
                                            </div>
                                        </div>
                                        <div class="common-space">
                                            <p class="file-name">Image.png</p><span>1.4 MB</span>
                                        </div>
                                    </div>
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
