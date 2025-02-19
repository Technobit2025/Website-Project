@extends('layouts.simple.master')

@section('title', 'Quill Editor')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.bubble.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Quill Editor</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Editors</li>
                        <li class="breadcrumb-item active">Quill Editor</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>How to Utilize It</h5>
                        <p class="f-m-light mt-1">Use this classes to quill editor:<code> ql-formats , ql-size , ql-bold ,
                                ql-italic , ql-underline , ql-strike , ql-script , ql-header , ql-list , ql-indent , ql-link
                                , ql-image , ql-video , ql-color , ql-background , ql-blockquote , ql-code-block , ql-align.
                            </code></p>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">Quill is an intuitive editor that facilitates text production on the web. It is
                            constructed around reliable and consistent frameworks that are made available via a robust API.
                            Quill wants to be the go-to rich text editor on the web, covering both extremes of complexity.
                            For more info see the </p><a href="https://quilljs.com/docs/quickstart/"
                            target="_blank">official site </a> and the <a href="https://github.com/quilljs/quill"
                            target="_blank">github repository</a>.
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Standard Editor</h5>
                        <p class="f-m-light mt-1">Element in JS that has a unique <code>id </code>for initialization.</p>
                    </div>
                    <div class="card-body">
                        <div class="toolbar-box">
                            <div id="toolbar7"><span class="ql-formats">
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
                                    <button class="ql-script" value="super"></button></span><span class="ql-formats">
                                    <button class="ql-header" value="1"></button>
                                    <button class="ql-header" value="2"></button></span><span class="ql-formats">
                                    <button class="ql-list" value="ordered">List</button>
                                    <button class="ql-list" value="bullet">Bullet</button>
                                    <button class="ql-indent" value="-1"></button>
                                    <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                    <button class="ql-link">Link</button>
                                    <button class="ql-image">Image</button>
                                    <button class="ql-video">Video</button>
                                    <select class="ql-color"></select>
                                    <select class="ql-background"></select></span>
                                <!-- Add more options here--><span class="ql-formats">
                                    <button class="ql-blockquote">Blockquote</button>
                                    <button class="ql-code-block"></button></span><span class="ql-formats">
                                    <button class="ql-align" value=""></button>
                                    <button class="ql-align" value="center"></button>
                                    <button class="ql-align" value="right"></button>
                                    <button class="ql-align" value="justify"></button></span><span class="ql-formats">
                                    <button class="ql-clean"></button></span>
                            </div>
                            <div class="quill-paragraph" id="editor7">
                                <blockquote>
                                    The tools supporting content creation need to consider these use cases.</blockquote>
                                <ul>
                                    <li>Demo-quill-1</li>
                                    <li>Demo-quill-2</li>
                                    <li>Demo-quill-3</li>
                                </ul><strong>Quill </strong>
                                <p>is a contemporary rich text editor designed to be extensible and compatible. Here, you
                                    have the ability to alter the text to any format you like and utilize any type of text
                                    format.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Snow Theme</h5>
                        <p class="f-m-light mt-1">Element in JS that has a unique <code>id </code>for initialization. Snow
                            is a clean, flat toolbar theme.</p>
                    </div>
                    <div class="card-body">
                        <div class="toolbar-box">
                            <div id="toolbar5"><span class="ql-formats">
                                    <select class="ql-size">
                                        <option value="small">Small</option>
                                        <option selected="">Normal</option>
                                        <option value="large">Large</option>
                                        <option value="huge">Huge</option>
                                    </select><span class="ql-formats">
                                        <button class="ql-bold">Bold</button>
                                        <button class="ql-italic">Italic</button>
                                        <button class="ql-underline">Underline</button>
                                        <button class="ql-strike">Strike</button>
                                        <button class="ql-script" value="sub"></button>
                                        <button class="ql-script" value="super"></button></span><span
                                        class="ql-formats">
                                        <button class="ql-list" value="ordered">List</button>
                                        <button class="ql-list" value="bullet">Bullet</button>
                                        <button class="ql-indent" value="-1"></button>
                                        <button class="ql-indent" value="+1"></button></span><span
                                        class="ql-formats">
                                        <button class="ql-link">Link</button>
                                        <button class="ql-image">Image</button>
                                        <button class="ql-video">Video</button>
                                        <select class="ql-color"></select></span>
                                    <!-- Add more options here--><span class="ql-formats">
                                        <button class="ql-blockquote">Blockquote</button>
                                        <button class="ql-code-block"></button></span><span class="ql-formats">
                                        <button class="ql-align" value=""></button>
                                        <button class="ql-align" value="center"></button>
                                        <button class="ql-align" value="right"></button>
                                        <button class="ql-align" value="justify"></button></span></span></div>
                            <div class="quill-paragraph" id="editor5">
                                <p>As a <strong>web designer</strong>, your role is crucial in creating visually appealing
                                    and user-friendly websites. You are responsible for designing the layout, selecting
                                    color schemes, and creating an intuitive user interface. You work closely with clients
                                    to understand their requirements and translate them into stunning website designs. Your
                                    expertise lies in using HTML, CSS, and JavaScript to bring these designs to life. You
                                    pay attention to detail, ensuring that every element is pixel-perfect and responsive
                                    across different devices.</p>
                                <ol>
                                    <li>Artist </li>
                                    <li>Developer </li>
                                    <li>Musician</li>
                                </ol>
                                <ul>
                                    <li>Web-designer </li>
                                    <li>UI-UX designer </li>
                                    <li>Software engineer</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Bubble Theme</h5>
                        <p class="f-m-light mt-1">Element in JS that has a unique <code>id </code>for initialization.
                            Bubble is a simple tooltip based theme.</p>
                    </div>
                    <div class="card-body">
                        <div class="toolbar-box">
                            <div id="toolbar6"><span class="ql-formats">
                                    <button class="ql-bold">Bold</button>
                                    <button class="ql-italic">Italic</button>
                                    <button class="ql-underline">Underline</button>
                                    <button class="ql-strike">Strike</button>
                                    <button class="ql-script" value="sub"></button>
                                    <button class="ql-script" value="super"></button></span><span class="ql-formats">
                                    <button class="ql-list" value="ordered">List</button>
                                    <button class="ql-list" value="bullet">Bullet</button>
                                    <button class="ql-indent" value="-1"></button>
                                    <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                    <button class="ql-link">Link</button>
                                    <button class="ql-image">Image</button>
                                    <button class="ql-video">Video</button>
                                    <select class="ql-color"></select></span>
                                <!-- Add more options here--><span class="ql-formats">
                                    <button class="ql-blockquote">Blockquote</button>
                                    <button class="ql-code-block ql-active"></button></span><span class="ql-formats">
                                    <button class="ql-align" value=""></button>
                                    <button class="ql-align" value="center"></button>
                                    <button class="ql-align" value="right"></button>
                                    <button class="ql-align" value="justify"></button></span>
                            </div>
                            <div class="quill-paragraph" id="editor6">
                                <p>Being the best designer requires a combination of exceptional creativity, technical
                                    expertise, and a deep understanding of user experience. I pride myself on my ability to
                                    think outside the box and create visually stunning designs that captivate and inspire.
                                    With a keen eye for detail, I carefully craft every element of a design, ensuring that
                                    it is not only aesthetically pleasing but also functional and user-friendly. I stay up
                                    to date with the latest design trends and constantly push myself to explore new
                                    techniques and technologies. My passion for design goes beyond aesthetics; I strive to
                                    create meaningful experiences that evoke emotion and leave a lasting impression.
                                    Collaboration is key, and I value open communication with clients to truly understand
                                    their vision and bring it to life. As the best designer, I am committed to delivering
                                    excellence and surpassing expectations on every project.</p>
                                <ul>
                                    <li>Navigation</li>
                                    <li>Web Friendly</li>
                                    <li>Turnaround Time </li>
                                    <li>Conversion</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/editors/quill.js') }}"></script>
    <script src="{{ asset('assets/js/custom-add-product3.js') }}"></script>
@endsection
