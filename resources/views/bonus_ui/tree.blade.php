@extends('layouts.simple.master')

@section('title', 'Tree View')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Tree View</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item"> Bonus Ui</li>
                        <li class="breadcrumb-item active">Tree View</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid tree-view">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Stackable Sortable Lists</h5>
                        <p class="f-m-light mt-1"> It is also usually advised to make sure that the swapThreshold option is
                            less than the default value of 1 or that the invertswap option is set to true.
                            You may use <code>icons, SVGs, photos ... etc.</code> according to your needs.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body stackable-list">
                        <div class="list-group col nested-sortable" id="nested-demo">
                            <div class="list-group-item nested-1"><i class="fa-solid fa-folder-open"></i>Item 1.1<div
                                    class="list-group nested-sortable">
                                    <div class="list-group-item nested-2"><i class="fa-solid fa-folder-open"></i>Item 2.1
                                    </div>
                                    <div class="list-group-item nested-2"><i class="fa-solid fa-folder-open"></i>Item 2.2
                                        <div class="list-group nested-sortable">
                                            <div class="list-group-item nested-3"><i
                                                    class="fa-solid fa-folder-open"></i>Item 3.1</div>
                                            <div class="list-group-item nested-3"><i
                                                    class="fa-solid fa-folder-open"></i>Item 3.2</div>
                                            <div class="list-group-item nested-3"><i
                                                    class="fa-solid fa-folder-open"></i>Item 3.3</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item nested-2"><i class="fa-solid fa-folder-open"></i>Item 2.3
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item nested-1"><i class="fa-solid fa-folder-open"></i>Item 1.2</div>
                            <div class="list-group-item nested-1"><i class="fa-solid fa-folder-open"></i>Item 1.3<div
                                    class="list-group nested-sortable">
                                    <div class="list-group-item nested-2"><i class="fa-solid fa-folder-open"></i>Item 2.1
                                    </div>
                                    <div class="list-group-item nested-2"><i class="fa-solid fa-folder-open"></i>Item 2.2
                                    </div>
                                    <div class="list-group-item nested-2"><i class="fa-solid fa-folder-open"></i>Item 2.3
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item nested-1"><i class="fa-solid fa-folder-open"></i>Item 1.4</div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#stakable-sort-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="stakable-sort-copy">&lt;div class="card-body stackable-list"&gt;
 &lt;div class="list-group col nested-sortable" id="nested-demo"&gt;
   &lt;div class="list-group-item nested-1"&gt;&lt;i class="fa fa-folder-open"&gt;&lt;/i&gt;Item 1.1
     &lt;div class="list-group nested-sortable"&gt;
       &lt;div class="list-group-item nested-2"&gt;&lt;i class="fa fa-folder-open"&gt;&lt;/i&gt;Item 2.1&lt;/div&gt;
       &lt;div class="list-group-item nested-2"&gt;&lt;i class="fa fa-folder-open"&gt;&lt;/i&gt;Item 2.2
         &lt;div class="list-group nested-sortable"&gt;
           &lt;div class="list-group-item nested-3"&gt;&lt;i class="fa fa-folder-open"&gt;&lt;/i&gt;Item 3.1&lt;/div&gt;
           &lt;div class="list-group-item nested-3"&gt;&lt;i class="fa fa-folder-open"&gt;&lt;/i&gt;Item 3.2&lt;/div&gt;
           &lt;div class="list-group-item nested-3"&gt;&lt;i class="fa fa-folder-open"&gt;&lt;/i&gt;Item 3.3&lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="list-group-item nested-2"&gt;&lt;i class="fa fa-folder-open"&gt;&lt;/i&gt;Item 2.3&lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="list-group-item nested-1"&gt;&lt;i class="fa fa-folder-open"&gt;&lt;/i&gt;Item 1.2&lt;/div&gt;
   &lt;div class="list-group-item nested-1"&gt;&lt;i class="fa fa-folder-open"&gt;&lt;/i&gt;Item 1.3
     &lt;div class="list-group nested-sortable"&gt;
       &lt;div class="list-group-item nested-2"&gt;&lt;i class="fa fa-folder-open"&gt;&lt;/i&gt;Item 2.1&lt;/div&gt;
       &lt;div class="list-group-item nested-2"&gt;&lt;i class="fa fa-folder-open"&gt;&lt;/i&gt;Item 2.2&lt;/div&gt;
       &lt;div class="list-group-item nested-2"&gt;&lt;i class="fa fa-folder-open"&gt;&lt;/i&gt;Item 2.3&lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="list-group-item nested-1"&gt;&lt;i class="fa fa-folder-open"&gt;&lt;/i&gt;Item 1.4&lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Sortable Swap Lists</h5>
                        <p class="f-m-light mt-1"> Sortable's functionality is altered by the swap plugin so that objects
                            can
                            be exchanged with one another instead of being sorted.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body swap-wrapper">
                        <ul class="list-group" id="sortable-swap">
                            <li class="list-group-item nested-1"><img src="{{ asset('assets/images/tree/s1.png') }}"
                                    alt="#"> Assets<ul class="list-group">
                                    <li class="list-group-item nested-2"><img
                                            src="{{ asset('assets/images/tree/picture.png') }}" alt="#">Images
                                        <ul class="list-group">
                                            <li class="list-group-item nested-3"><img
                                                    src="{{ asset('assets/images/tree/social.png') }}"
                                                    alt="#">Social.png</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item nested-1"><img src="{{ asset('assets/images/tree/js.png') }}"
                                    alt="#">JS<ul class="list-group">
                                    <li class="list-group-item nested-2"> <img
                                            src="{{ asset('assets/images/tree/chart.png') }}" alt="#">Chart
                                        <ul class="list-group">
                                            <li class="list-group-item nested-3"><img
                                                    src="{{ asset('assets/images/tree/chart1.png') }}"
                                                    alt="#">E-chart <ul class="list-group">
                                                    <li class="list-group-item nested-4"> <img
                                                            src="{{ asset('assets/images/tree/chart1.png') }}"
                                                            alt="#">esl.js </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item nested-1"><img src="{{ asset('assets/images/tree/volume.png') }}"
                                    alt="#">Audio</li>
                            <li class="list-group-item nested-1"><img src="{{ asset('assets/images/tree/css.png') }}"
                                    alt="#">CSS<ul class="list-group">
                                    <li class="list-group-item nested-2"><img
                                            src="{{ asset('assets/images/tree/slick.png') }}" alt="#">Vendors
                                        <ul class="list-group">
                                            <li class="list-group-item nested-3"><img
                                                    src="{{ asset('assets/images/tree/emoji.png') }}"
                                                    alt="#">Emoji</li>
                                            <li class="list-group-item nested-3"><img
                                                    src="{{ asset('assets/images/tree/slick.png') }}"
                                                    alt="#">Slick</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#sortable-swap-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="sortable-swap-copy">&lt;div class="card-body swap-wrapper"&gt;
 &lt;ul class="list-group" id="sortable-swap"&gt;
   &lt;li class="list-group-item nested-1"&gt;&lt;img src="{{ asset('assets/images/tree/s1.png') }}" alt="#"&gt; Assets
     &lt;ul class="list-group"&gt;
       &lt;li class="list-group-item nested-2"&gt;&lt;img src="{{ asset('assets/images/tree/picture.png') }}" alt="#"&gt;Images
         &lt;ul class="list-group"&gt; 
           &lt;li class="list-group-item nested-3"&gt;&lt;img src="{{ asset('assets/images/tree/social.png') }}" alt="#"&gt;Social.png&lt;/li&gt;
         &lt;/ul&gt;
       &lt;/li&gt;
     &lt;/ul&gt;
   &lt;/li&gt;
   &lt;li class="list-group-item nested-1"&gt;&lt;img src="{{ asset('assets/images/tree/js.png') }}" alt="#"&gt;JS
     &lt;ul class="list-group"&gt; 
       &lt;li class="list-group-item nested-2"&gt; &lt;img src="{{ asset('assets/images/tree/chart.png') }}" alt="#"&gt;Chart
         &lt;ul class="list-group"&gt; 
           &lt;li class="list-group-item nested-3"&gt;&lt;img src="{{ asset('assets/images/tree/chart1.png') }}" alt="#"&gt;E-chart 
             &lt;ul class="list-group"&gt; 
               &lt;li class="list-group-item nested-4"&gt; &lt;img src="{{ asset('assets/images/tree/chart1.png') }}" alt="#"&gt;esl.js     &lt;/li&gt;
             &lt;/ul&gt;
           &lt;/li&gt;
         &lt;/ul&gt;
       &lt;/li&gt;
     &lt;/ul&gt;
   &lt;/li&gt;
   &lt;li class="list-group-item nested-1"&gt;&lt;img src="{{ asset('assets/images/tree/volume.png') }}" alt="#"&gt;Audio&lt;/li&gt;
   &lt;li class="list-group-item nested-1"&gt;&lt;img src="{{ asset('assets/images/tree/css.png') }}" alt="#"&gt;CSS
     &lt;ul class="list-group"&gt; 
       &lt;li class="list-group-item nested-2"&gt;&lt;img src="{{ asset('assets/images/tree/slick.png') }}" alt="#"&gt;Vendors
         &lt;ul class="list-group"&gt; 
           &lt;li class="list-group-item nested-3"&gt;&lt;img src="{{ asset('assets/images/tree/emoji.png') }}" alt="#"&gt;Emoji&lt;/li&gt;
           &lt;li class="list-group-item nested-3"&gt;&lt;img src="{{ asset('assets/images/tree/slick.png') }}" alt="#"&gt;Slick&lt;/li&gt;
         &lt;/ul&gt;
       &lt;/li&gt;
     &lt;/ul&gt;
   &lt;/li&gt;
 &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Simple Lists</h5>
                        <p class="f-m-light mt-1"> To change the basic draggable option, simply drag and drop using the
                            <code>"basic-list"</code> id.
                        </p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group" id="basic-list">
                            <li class="list-group-item"> Section 1</li>
                            <li class="list-group-item">Section 2</li>
                            <li class="list-group-item">Section 3</li>
                            <li class="list-group-item">Section 4</li>
                            <li class="list-group-item">Section 5</li>
                        </ul>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#simple-sort-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="simple-sort-copy">&lt;ul class="list-group" id="basic-list"&gt;
 &lt;li class="list-group-item"&gt;Section 1&lt;/li&gt;
 &lt;li class="list-group-item"&gt;Section 2&lt;/li&gt;
 &lt;li class="list-group-item"&gt;Section 3&lt;/li&gt;
 &lt;li class="list-group-item"&gt;Section 4&lt;/li&gt;
 &lt;li class="list-group-item"&gt;Section 5&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Shared Lists</h5>
                        <p class="f-m-light mt-1"> Toggle between lists by dragging. you can drag an item to share it, and
                            the
                            shared item will remain in the original list.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <ul class="list-group" id="mix-left">
                                    <li class="list-group-item"> <i class="fa sitemap me-2"></i><span>Item 1</span></li>
                                    <li class="list-group-item"><i class="fa sitemap me-2"></i><span>Item 2</span></li>
                                    <li class="list-group-item"><i class="fa sitemap me-2"></i><span>Item 3</span></li>
                                    <li class="list-group-item"><i class="fa sitemap me-2"></i><span>Item 4</span></li>
                                    <li class="list-group-item"><i class="fa sitemap me-2"></i><span>Item 5</span></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-group" id="mix-right">
                                    <li class="list-group-item light-background"> <i
                                            class="fa sitemap me-2"></i><span>Item 6</span>
                                    </li>
                                    <li class="list-group-item light-background"><i class="fa sitemap me-2"></i><span>Item
                                            7 </span>
                                    </li>
                                    <li class="list-group-item light-background"><i class="fa sitemap me-2"></i><span>Item
                                            8</span>
                                    </li>
                                    <li class="list-group-item light-background"><i class="fa sitemap me-2"></i><span>Item
                                            9</span>
                                    </li>
                                    <li class="list-group-item light-background"><i class="fa sitemap me-2"></i><span>Item
                                            10</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#shared-sort-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="shared-sort-copy">&lt;div class="row"&gt; 
 &lt;div class="col-6"&gt; 
   &lt;ul class="list-group" id="mix-left"&gt;
     &lt;li class="list-group-item"&gt; &lt;i class="fa sitemap me-2"&gt;&lt;/i&gt;&lt;span&gt;Item 1&lt;/span&gt;&lt;/li&gt;
     &lt;li class="list-group-item"&gt;&lt;i class="fa sitemap me-2"&gt;&lt;/i&gt;&lt;span&gt;Item 2&lt;/span&gt;&lt;/li&gt;
     &lt;li class="list-group-item"&gt;&lt;i class="fa sitemap me-2"&gt;&lt;/i&gt;&lt;span&gt;Item 3&lt;/span&gt;&lt;/li&gt;
     &lt;li class="list-group-item"&gt;&lt;i class="fa sitemap me-2"&gt;&lt;/i&gt;&lt;span&gt;Item 4&lt;/span&gt;&lt;/li&gt;
     &lt;li class="list-group-item"&gt;&lt;i class="fa sitemap me-2"&gt;&lt;/i&gt;&lt;span&gt;Item 5&lt;/span&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="col-6"&gt;
   &lt;ul class="list-group" id="mix-right"&gt;
     &lt;li class="list-group-item light-background"&gt; &lt;i class="fa sitemap me-2"&gt;&lt;/i&gt;&lt;span&gt;Item 6&lt;/span&gt;&lt;/li&gt;
     &lt;li class="list-group-item light-background"&gt;&lt;i class="fa sitemap me-2"&gt;&lt;/i&gt;&lt;span&gt;Item 7 &lt;/span&gt;&lt;/li&gt;
     &lt;li class="list-group-item light-background"&gt;&lt;i class="fa sitemap me-2"&gt;&lt;/i&gt;&lt;span&gt;Item 8&lt;/span&gt;&lt;/li&gt;
     &lt;li class="list-group-item light-background"&gt;&lt;i class="fa sitemap me-2"&gt;&lt;/i&gt;&lt;span&gt;Item 9&lt;/span&gt;&lt;/li&gt;
     &lt;li class="list-group-item light-background"&gt;&lt;i class="fa sitemap me-2"&gt;&lt;/i&gt;&lt;span&gt;Item 10&lt;/span&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/div&gt;
&lt;/div&gt; </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Disabled Lists</h5>
                        <p class="f-m-light mt-1"> Keep the list sorted by leaving it that way. It isn't feasible since the
                            sort option is set to false.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group" id="disable-list">
                            <li class="list-group-item"> Online course</li>
                            <li class="list-group-item">Crypto </li>
                            <li class="list-group-item">Social</li>
                            <li class="list-group-item">Chart</li>
                            <li class="list-group-item">General</li>
                        </ul>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#disable-sort-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="disable-sort-copy">&lt;ul class="list-group" id="disable-list"&gt;
 &lt;li class="list-group-item"&gt;Online course&lt;/li&gt;
 &lt;li class="list-group-item"&gt;Crypto &lt;/li&gt;
 &lt;li class="list-group-item"&gt;Social&lt;/li&gt;
 &lt;li class="list-group-item"&gt;Chart&lt;/li&gt;
 &lt;li class="list-group-item"&gt;General&lt;/li&gt;
&lt;/ul&gt; </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Sortable using the Handle List</h5>
                        <p class="f-m-light mt-1"> Simply click the handler and drag and drop to alter the handle draggable
                            option.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body sortable-handler">
                        <ul class="list-group" id="sortable-handle">
                            <li class="list-group-item light-background"><i class="fa fa-arrows handle"></i>Home </li>
                            <li class="list-group-item"><i class="fa fa-arrows handle"></i>Products</li>
                            <li class="list-group-item light-background"><i class="fa fa-arrows handle"></i>About Us</li>
                            <li class="list-group-item"><i class="fa fa-arrows handle"></i>Contact Us</li>
                            <li class="list-group-item light-background"><i class="fa fa-arrows handle"></i>Applications
                            </li>
                            <li class="list-group-item"><i class="fa fa-arrows handle"></i>Frameworks</li>
                        </ul>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#handle-sort-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="handle-sort-copy">&lt;ul class="list-group" id="sortable-handle"&gt;
 &lt;li class="list-group-item light-background"&gt;&lt;i class="fa fa-arrows handle"&gt;&lt;/i&gt;Home&lt;/li&gt;
 &lt;li class="list-group-item"&gt;&lt;i class="fa fa-arrows handle"&gt;&lt;/i&gt;Products&lt;/li&gt;
 &lt;li class="list-group-item light-background"&gt;&lt;i class="fa fa-arrows handle"&gt;&lt;/i&gt;About Us&lt;/li&gt;
 &lt;li class="list-group-item"&gt;&lt;i class="fa fa-arrows handle"&gt;&lt;/i&gt;Contact Us&lt;/li&gt;
 &lt;li class="list-group-item light-background"&gt;&lt;i class="fa fa-arrows handle"&gt;&lt;/i&gt;Applications&lt;/li&gt;
 &lt;li class="list-group-item"&gt;&lt;i class="fa fa-arrows handle"&gt;&lt;/i&gt;Frameworks&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Draggable Filtering</h5>
                        <p class="f-m-light mt-1"> Try dragging the object with the<code>.list-light-* </code> backdrop.
                            That
                            item is filtered out by the filter option, so it is not possible to accomplish that.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body draggable-filter">
                        <ul class="list-group" id="draggable-filter">
                            <li class="list-group-item"> <img class="rounded-circle"
                                    src="{{ asset('assets/images/user/1.jpg') }}" alt="user">Teresa J. Mosteller</li>
                            <li class="list-group-item"><img class="rounded-circle"
                                    src="{{ asset('assets/images/user/3.png') }}" alt="user">Gloria D. Acheson</li>
                            <li class="list-group-item filtered list-light-primary"><img class="rounded-circle"
                                    src="{{ asset('assets/images/user/10.jpg') }}" alt="user">Sharon C. Obrien</li>
                            <li class="list-group-item"><img class="rounded-circle"
                                    src="{{ asset('assets/images/user/5.jpg') }}" alt="user">Bryan A. Owens</li>
                        </ul>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#draggable-sort-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="draggable-sort-copy">&lt;ul class="list-group" id="draggable-filter"&gt;
 &lt;li class="list-group-item"&gt;
   &lt;img class="rounded-circle" src="{{ asset('assets/images/user/1.jpg') }}" alt="user"&gt;Teresa J. Mosteller
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;img class="rounded-circle" src="{{ asset('assets/images/user/3.png') }}" alt="user"&gt;Gloria D. Acheson
 &lt;/li&gt;
 &lt;li class="list-group-item filtered list-light-primary"&gt;
   &lt;img class="rounded-circle" src="{{ asset('assets/images/user/10.jpg') }}" alt="user"&gt;Sharon C. Obrien
 &lt;/li&gt;
 &lt;li class="list-group-item"&gt;
   &lt;img class="rounded-circle" src="{{ asset('assets/images/user/5.jpg') }}" alt="user"&gt;Bryan A. Owens
 &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Random Sortable</h5>
                        <p class="f-m-light mt-1"> Use<code> sortable-grids</code> id, you can drag and drop the grid.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="grid-box-wrapper" id="sortable-grids">
                            <div class="grid-box"><img src="{{ asset('assets/images/social-app/post-1.png') }}"
                                    alt="#"></div>
                            <div class="grid-box"><img src="{{ asset('assets/images/social-app/post-2.png') }}"
                                    alt="#"></div>
                            <div class="grid-box"><img src="{{ asset('assets/images/social-app/post-3.png') }}"
                                    alt="#"></div>
                            <div class="grid-box"><img src="{{ asset('assets/images/social-app/post-4.png') }}"
                                    alt="#"></div>
                            <div class="grid-box"><img src="{{ asset('assets/images/social-app/post-5.png') }}"
                                    alt="#"></div>
                            <div class="grid-box"><img src="{{ asset('assets/images/social-app/post-6.png') }}"
                                    alt="#"></div>
                            <div class="grid-box"><img src="{{ asset('assets/images/social-app/post-7.png') }}"
                                    alt="#"></div>
                            <div class="grid-box"><img src="{{ asset('assets/images/social-app/post-8.png') }}"
                                    alt="#"></div>
                            <div class="grid-box"><img src="{{ asset('assets/images/social-app/post-9.png') }}"
                                    alt="#"></div>
                            <div class="grid-box"><img src="{{ asset('assets/images/social-app/post-10.png') }}"
                                    alt="#"></div>
                            <div class="grid-box"><img src="{{ asset('assets/images/social-app/post-11.png') }}"
                                    alt="#"></div>
                            <div class="grid-box"><img src="{{ asset('assets/images/social-app/post-12.png') }}"
                                    alt="#"></div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#random-sort-copy" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="random-sort-copy">&lt;div class="grid-box-wrapper" id="sortable-grids"&gt;
 &lt;div class="grid-box"&gt;&lt;img src="{{ asset('assets/images/social-app/post-1.png') }}" alt="#"&gt;&lt;/div&gt;
 &lt;div class="grid-box"&gt;&lt;img src="{{ asset('assets/images/social-app/post-2.png') }}" alt="#"&gt;&lt;/div&gt;
 &lt;div class="grid-box"&gt;&lt;img src="{{ asset('assets/images/social-app/post-3.png') }}" alt="#"&gt;&lt;/div&gt;
 &lt;div class="grid-box"&gt;&lt;img src="{{ asset('assets/images/social-app/post-4.png') }}" alt="#"&gt;&lt;/div&gt;
 &lt;div class="grid-box"&gt;&lt;img src="{{ asset('assets/images/social-app/post-5.png') }}" alt="#"&gt;&lt;/div&gt;
 &lt;div class="grid-box"&gt;&lt;img src="{{ asset('assets/images/social-app/post-6.png') }}" alt="#"&gt;&lt;/div&gt;
 &lt;div class="grid-box"&gt;&lt;img src="{{ asset('assets/images/social-app/post-7.png') }}" alt="#"&gt;&lt;/div&gt;
 &lt;div class="grid-box"&gt;&lt;img src="{{ asset('assets/images/social-app/post-8.png') }}" alt="#"&gt;&lt;/div&gt;
 &lt;div class="grid-box"&gt;&lt;img src="{{ asset('assets/images/social-app/post-9.png') }}" alt="#"&gt;&lt;/div&gt;
 &lt;div class="grid-box"&gt;&lt;img src="{{ asset('assets/images/social-app/post-1.png') }}" alt="#"&gt;&lt;/div&gt;
 &lt;div class="grid-box"&gt;&lt;img src="{{ asset('assets/images/social-app/post-2.png') }}" alt="#"&gt;&lt;/div&gt;
 &lt;div class="grid-box"&gt;&lt;img src="{{ asset('assets/images/social-app/post-3.png') }}" alt="#"&gt;&lt;/div&gt;
&lt;/div&gt; </code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/sortable/sortable.min.js') }}"></script>
    <script src="{{ asset('assets/js/sortable/custom_sortable.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
