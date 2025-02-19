@extends('layouts.simple.master')

@section('title', 'Grid')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Grid</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item"> Ui Kits</li>
                        <li class="breadcrumb-item active">Grid</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grid Options</h5>
                        <p class="f-m-light mt-1">Bootstrap grid system allow all six breakpoints, and any breakpoints
                            you can customize.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-center">
                                            <p>Extra small</p><small>&lt;576px</small>
                                        </th>
                                        <th class="text-center">
                                            <p>Small</p><small>≥576px</small>
                                        </th>
                                        <th class="text-center">
                                            <p>Medium</p><small>≥768px</small>
                                        </th>
                                        <th class="text-center">
                                            <p>Large</p><small>≥992px</small>
                                        </th>
                                        <th class="text-center">
                                            <p>Extra large</p><small>≥1200px</small>
                                        </th>
                                        <th class="text-center">
                                            <p>Extra extra large</p><small class="digits">≥1400px</small>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Grid behavior</th>
                                        <td>Horizontal at all times</td>
                                        <td colspan="5">Collapsed to start, horizontal above breakpoints</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Max container width</th>
                                        <td>None (auto)</td>
                                        <td>540px</td>
                                        <td>720px</td>
                                        <td>960px</td>
                                        <td>1140px</td>
                                        <td>1320px</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Class prefix</th>
                                        <td><code>.col-</code></td>
                                        <td><code>.col-sm-</code></td>
                                        <td><code>.col-md-</code></td>
                                        <td><code>.col-lg-</code></td>
                                        <td><code>.col-xl-</code></td>
                                        <td><code>.col-xxl-</code></td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row"># of columns</th>
                                        <td colspan="6">12</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Gutter width</th>
                                        <td colspan="6">1.5rem (.75rem on left and right)</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Nestable</th>
                                        <td colspan="6">Yes</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Offsets</th>
                                        <td colspan="6">Yes</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Column ordering</th>
                                        <td colspan="6">Yes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grid for Columns</h5>
                        <p class="mt-1 f-m-light">Use predefined grid classes. Using <code>col-md-* </code>you can set the
                            grid system.</p>
                    </div>
                    <div class="card-body grid-showcase">
                        <div class="row">
                            <div class="col-md-1 text-center"><span>col-md-1</span></div>
                            <div class="col-md-2 text-center"><span>col-md-2</span></div>
                            <div class="col-md-2 text-center"><span>col-md-2</span></div>
                            <div class="col-md-3 text-center"><span>col-md-3</span></div>
                            <div class="col-md-4 text-center"><span>col-md-4</span></div>
                            <div class="col-md-5 text-center"><span>col-md-5</span></div>
                            <div class="col-md-7 text-center"><span>col-md-7</span></div>
                            <div class="col-md-6 text-center"><span>col-md-6</span></div>
                            <div class="col-md-6 text-center"><span>col-md-6</span></div>
                            <div class="col-md-8 text-center"><span>col-md-8</span></div>
                            <div class="col-md-4 text-center"><span>col-md-4</span></div>
                            <div class="col-md-9 text-center"><span>col-md-9</span></div>
                            <div class="col-md-3 text-center"><span>col-md-3</span></div>
                            <div class="col-md-10 text-center"><span>col-md-10</span></div>
                            <div class="col-md-2 text-center"><span>col-md-2</span></div>
                            <div class="col-md-12 text-center"><span>col-md-12</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Enable Flex Behaviors</h5>
                        <p class="mt-1 f-m-light">Use <code>d-flex </code> and <code> d-inline-flex</code> classes to set
                            the
                            flex behaviors.</p>
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
                        <div class="flex-behaviors">
                            <div class="d-flex p-2">I&apos;m a flexbox container!</div>
                            <div class="d-inline-flex p-2">I&apos;m an inline flexbox container!</div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#flex-behavior" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="flex-behavior">&lt;div class="flex-behaviors"&gt;
 &lt;div class="d-flex p-2"&gt;I&apos;m a flexbox container!&lt;/div&gt;
 &lt;div class="d-inline-flex p-2"&gt;I&apos;m an inline flexbox container!&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Horizontal Gutters</h5>
                        <p class="mt-1 f-m-light"><code>gx-* </code> classes can be used to control the horizontal gutter
                            widths. The <code> container </code> or <code> container-fluid </code> parent may need to be
                            adjusted if larger gutters are used too to avoid unwanted overflow, using a matching padding
                            utility.</p>
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
                    <div class="card-body h-gutter">
                        <div class="container px-4 text-center">
                            <div class="row gx-5 gy-sm-0 g-3">
                                <div class="col">
                                    <div class="p-3"> <span>Custom column padding</span></div>
                                </div>
                                <div class="col">
                                    <div class="p-3"> <span>Custom column padding</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#horizontal-gutter" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="horizontal-gutter">&lt;div class="container px-4 text-center"&gt;
 &lt;div class="row gx-5 gy-sm-0 g-3"&gt;
   &lt;div class="col"&gt;
     &lt;div class="p-3"&gt;&lt;span&gt;Custom column padding&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col"&gt;
     &lt;div class="p-3"&gt;&lt;span&gt;Custom column padding&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal-2">
                    <div class="card-header">
                        <h5>Vertical Gutters</h5>
                        <p class="mt-1 f-m-light">Use<code> gy-* </code> classes control vertical space between elements in
                            rows, especially when they wrap and wider spacing can overflow the page and wrap the
                            <code> row</code> with <code> overflow-hidden</code> to prevent this.
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
                    <div class="card-body v-gutter">
                        <div class="container overflow-hidden text-center">
                            <div class="row gy-3">
                                <div class="col-6">
                                    <div class="p-3"> <span>Custom column padding</span></div>
                                </div>
                                <div class="col-6">
                                    <div class="p-3"> <span>Custom column padding</span></div>
                                </div>
                                <div class="col-6">
                                    <div class="p-3"> <span>Custom column padding</span></div>
                                </div>
                                <div class="col-6">
                                    <div class="p-3"> <span>Custom column padding</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#vertical-gutter" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="vertical-gutter">&lt;div class="container overflow-hidden text-center"&gt;
 &lt;div class="row gy-3"&gt;
   &lt;div class="col-6"&gt;
     &lt;div class="p-3"&gt;&lt;span&gt;Custom column padding&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-6"&gt;
     &lt;div class="p-3"&gt;&lt;span&gt;Custom column padding&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-6"&gt;
     &lt;div class="p-3"&gt;&lt;span&gt;Custom column padding&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-6"&gt;
     &lt;div class="p-3"&gt;&lt;span&gt;Custom column padding&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal-2">
                    <div class="card-header">
                        <h5>Row Columns Gutters</h5>
                        <p class="mt-1 f-m-light">Gutter classes can also be added to row columns. In the following
                            example,
                            we use responsive row columns and responsive gutter classes.</p>
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
                    <div class="card-body r-c-gutter">
                        <div class="container text-center">
                            <div class="row row-cols-2 row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 g-2 g-lg-3">
                                <div class="col">
                                    <div class="p-10"><span>Row column</span></div>
                                </div>
                                <div class="col">
                                    <div class="p-10"><span>Row column</span></div>
                                </div>
                                <div class="col">
                                    <div class="p-10"><span>Row column</span></div>
                                </div>
                                <div class="col">
                                    <div class="p-10"><span>Row column</span></div>
                                </div>
                                <div class="col">
                                    <div class="p-10"><span>Row column</span></div>
                                </div>
                                <div class="col">
                                    <div class="p-10"><span>Row column</span></div>
                                </div>
                                <div class="col">
                                    <div class="p-10"><span>Row column</span></div>
                                </div>
                                <div class="col">
                                    <div class="p-10"><span>Row column</span></div>
                                </div>
                                <div class="col">
                                    <div class="p-10"><span>Row column</span></div>
                                </div>
                                <div class="col">
                                    <div class="p-10"><span>Row column</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#row-col-gutter" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="row-col-gutter">&lt;div class="container text-center"&gt;
 &lt;div class="row row-cols-2 row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 g-2 g-lg-3"&gt;
   &lt;div class="col"&gt;
     &lt;div class="p-10"&gt;&lt;span&gt;Row column&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col"&gt;
     &lt;div class="p-10"&gt;&lt;span&gt;Row column&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col"&gt;
     &lt;div class="p-10"&gt;&lt;span&gt;Row column&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col"&gt;
     &lt;div class="p-10"&gt;&lt;span&gt;Row column&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col"&gt;
     &lt;div class="p-10"&gt;&lt;span&gt;Row column&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col"&gt;
     &lt;div class="p-10"&gt;&lt;span&gt;Row column&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col"&gt;
     &lt;div class="p-10"&gt;&lt;span&gt;Row column&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col"&gt;
     &lt;div class="p-10"&gt;&lt;span&gt;Row column&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col"&gt;
     &lt;div class="p-10"&gt;&lt;span&gt;Row column&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col"&gt;
     &lt;div class="p-10"&gt;&lt;span&gt;Row column&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>No Gutters</h5>
                        <p class="mt-1 f-m-light">Use <code>g-0</code> on the <code> row </code> to eliminate spacing
                            between
                            columns.<code> container </code> and use <code> mx-0 </code> on the <code> row </code> to
                            prevent
                            overflow.</p>
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
                    <div class="card-body no-gutter">
                        <div class="row g-0 text-center">
                            <div class="col-sm-6 col-md-8">
                                <div class="p-3"> <span>col-sm-6 & col-md-8</span></div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="p-3"><span class="col-6">col-md-4</span></div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#no-gutter" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="no-gutter">&lt;div class="row g-0 text-center"&gt;
 &lt;div class="col-sm-6 col-md-8"&gt;
   &lt;div class="p-3"&gt;&lt;span&gt;col-sm-6 & col-md-8&lt;/span&gt;&lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-6 col-md-4"&gt; 
   &lt;div class="p-3"&gt;&lt;span class="col-6"&gt;col-md-4&lt;/span&gt;&lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Vertical Alignment</h5>
                        <p class="mt-1 f-m-light">Use<code> align-items-*</code> class
                            to set the vertical alignment.</p>
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
                        <div class="grid-showcase mb-0">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row grid-vertical align-items-start m-1 g-2">
                                        <div class="col-6"><span class="bg-white">one column</span></div>
                                        <div class="col-6"><span class="bg-white">two column</span></div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row grid-vertical align-items-center m-1 g-2">
                                        <div class="col-6"><span class="bg-white">one column</span></div>
                                        <div class="col-6"><span class="bg-white">two column</span></div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row grid-vertical align-items-end m-1 g-2">
                                        <div class="col-6"><span class="bg-white">one column</span></div>
                                        <div class="col-6"><span class="bg-white">two column</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#vertical-alignment" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="vertical-alignment">&lt;div class="row"&gt;
 &lt;div class="col-lg-4"&gt;
   &lt;div class="row grid-vertical align-items-start m-1 g-2"&gt;
     &lt;div class="col-6"&gt;&lt;span class="bg-white"&gt;one column&lt;/span&gt;&lt;/div&gt;
     &lt;div class="col-6"&gt;&lt;span class="bg-white"&gt;two column&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-lg-4"&gt;
   &lt;div class="row grid-vertical align-items-center m-1 g-2"&gt;
     &lt;div class="col-6"&gt;&lt;span class="bg-white"&gt;one column&lt;/span&gt;&lt;/div&gt;
     &lt;div class="col-6"&gt;&lt;span class="bg-white"&gt;two column&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-lg-4"&gt;
   &lt;div class="row grid-vertical align-items-end m-1 g-2"&gt;
     &lt;div class="col-6"&gt;&lt;span class="bg-white"&gt;one column&lt;/span&gt;&lt;/div&gt;
     &lt;div class="col-6"&gt;&lt;span class="bg-white"&gt;two column&lt;/span&gt;&lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="table-responsive grid-footer">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <th> Class</th>
                                        <th>Value of the class</th>
                                    </tr>
                                    <tr>
                                        <td><code>.align-items-*</code></td>
                                        <td> start / center / end / baseline / stretch</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal Alignment</h5>
                        <p class="mt-1 f-m-light">Use<code> justify-content-*</code> class
                            to set the horizontal alignment.</p>
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
                        <div class="grid-showcase grid-align">
                            <div class="row justify-content-start">
                                <div class="col-5"><span class="bg-white">One column</span></div>
                                <div class="col-5"><span class="bg-white">Two column</span></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-5"><span class="bg-white">One column</span></div>
                                <div class="col-5"><span class="bg-white">Two column</span></div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-5"><span class="bg-white">One column</span></div>
                                <div class="col-5"><span class="bg-white">Two column</span></div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#horizontal-alignment" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="horizontal-alignment">&lt;div class="row justify-content-start"&gt;
 &lt;div class="col-5"&gt;
   &lt;span class="bg-white"&gt;One column&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="col-5"&gt;
   &lt;span class="bg-white"&gt;Two column&lt;/span&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;div class="row justify-content-center"&gt;
 &lt;div class="col-5"&gt;
   &lt;span class="bg-white"&gt;One column&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="col-5"&gt;
   &lt;span class="bg-white"&gt;Two column&lt;/span&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;div class="row justify-content-end"&gt;
 &lt;div class="col-5"&gt;
   &lt;span class="bg-white"&gt;One column&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="col-5"&gt;
   &lt;span class="bg-white"&gt;Two column&lt;/span&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="table-responsive grid-footer">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <th> Class</th>
                                        <th>Value of the class</th>
                                    </tr>
                                    <tr>
                                        <td><code>.justify-content-*</code></td>
                                        <td> start / center / end / around / between</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Nesting</h5>
                        <p class="mt-1 f-m-light">To nest your content with the default grid, add a new<code> row</code>
                            and
                            set
                            of <code>col-sm-*</code> columns within an existing <code> col-sm-*</code> column.</p>
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
                        <div class="grid-showcase">
                            <div class="row g-3">
                                <div class="col-3"><span>Level 1: .col-3</span></div>
                                <div class="col-9">
                                    <div class="grid-wrapper pb-0">
                                        <div class="row g-2">
                                            <div class="col-5"><span class="border border-2">Level 2: .col-5</span></div>
                                            <div class="col-7"><span class="border border-2">Level 2: .col-7</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="grid-wrapper pb-0">
                                        <div class="row g-2">
                                            <div class="col-sm-2 col-4"><span class="border border-2">Level 1:
                                                    .col-2</span></div>
                                            <div class="col-sm-10 col-8"><span class="border border-2">Level 1:
                                                    .col-10</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4"><span>Level 2: .col-4</span></div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#nesting" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="nesting">&lt;div class="row g-3"&gt;
 &lt;div class="col-3"&gt;&lt;span&gt;Level 1: .col-3&lt;/span&gt;&lt;/div&gt;
 &lt;div class="col-9"&gt;
   &lt;div class="grid-wrapper pb-0"&gt;
     &lt;div class="row g-2"&gt;
       &lt;div class="col-5"&gt;&lt;span class="border border-2"&gt;Level 2: .col-5&lt;/span&gt;&lt;/div&gt;
       &lt;div class="col-7"&gt;&lt;span class="border border-2"&gt;Level 2: .col-7&lt;/span&gt;&lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-8"&gt;
   &lt;div class="grid-wrapper pb-0"&gt;
     &lt;div class="row g-2"&gt;
       &lt;div class="col-sm-2 col-4"&gt;&lt;span class="border border-2"&gt;Level 1: .col-2&lt;/span&gt;&lt;/div&gt;
       &lt;div class="col-sm-10 col-8"&gt;&lt;span class="border border-2"&gt;Level 1: .col-10&lt;/span&gt;&lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-4"&gt;&lt;span&gt;Level 2: .col-4&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Order</h5>
                        <p class="mt-1 f-m-light">Use <code>order </code>class, you can set the order position.</p>
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
                        <div class="grid-showcase">
                            <div class="row g-2">
                                <div class="col-3 order-3"><span>First Item (order-3)</span></div>
                                <div class="col-5 order-first"><span>Second Item (order-first)</span></div>
                                <div class="col-4 order-last"><span>Third Item (order-last)</span></div>
                                <div class="col-3 order-2"><span>Fourth Item (order-2)</span></div>
                                <div class="col-sm-2 col-4 order-5"><span>fifth Item (order-5)</span></div>
                                <div class="col-sm-6 col-4 order-4"><span>sixth Item (order-4)</span></div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#order-grid" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="order-grid">&lt;div class="row g-2"&gt;
 &lt;div class="col-3 order-3"&gt;&lt;span&gt;First Item (order-3)&lt;/span&gt;&lt;/div&gt;
 &lt;div class="col-5 order-first"&gt;&lt;span&gt;Second Item (order-first)&lt;/span&gt;&lt;/div&gt;
 &lt;div class="col-4 order-last"&gt;&lt;span&gt;Third Item (order-last)&lt;/span&gt;&lt;/div&gt;
 &lt;div class="col-3 order-2"&gt;&lt;span&gt;Fourth Item (order-2)&lt;/span&gt;&lt;/div&gt;
 &lt;div class="col-sm-2 col-4 order-5"&gt;&lt;span&gt;fifth Item (order-5)&lt;/span&gt;&lt;/div&gt;
 &lt;div class="col-sm-6 col-4 order-4"&gt;&lt;span&gt;sixth Item (order-4)&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="table-responsive grid-footer">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <th> Class</th>
                                        <th>Value of the class</th>
                                    </tr>
                                    <tr>
                                        <td><code>.order-*</code></td>
                                        <td> first / 2 / 3 / 4 / 5 / last</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Offset</h5>
                        <p class="mt-1 f-m-light">Move columns to the right using <code>offset-sm-* </code>classes. These
                            classes increase the left margin of a column by <code>* </code>columns.</p>
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
                        <div class="grid-showcase">
                            <div class="row g-2">
                                <div class="col-sm-5 col-4 offset-sm-3 offset-2"><span>col-5 offset-sm-3</span></div>
                                <div class="col-sm-2 col-4 offset-sm-2 offset-1"><span>col-2 offset-sm-2</span></div>
                                <div class="col-sm-4 col-5 offset-2"><span>col-4 offset-sm-2</span></div>
                                <div class="col-sm-3 col-4 offset-sm-2 offset-1"><span>col-3 offset-sm-2</span></div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#offset-grid" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="offset-grid">&lt;div class="row g-2"&gt;
 &lt;div class="col-sm-5 col-4 offset-sm-3 offset-2"&gt;&lt;span&gt;col-5 offset-sm-3&lt;/span&gt;&lt;/div&gt;
 &lt;div class="col-sm-2 col-4 offset-sm-2 offset-1"&gt;&lt;span&gt;col-2 offset-sm-2&lt;/span&gt;&lt;/div&gt;
 &lt;div class="col-sm-4 col-5 offset-2"&gt;&lt;span&gt;col-4 offset-sm-2&lt;/span&gt;&lt;/div&gt;
 &lt;div class="col-sm-3 col-4 offset-sm-2 offset-1"&gt;&lt;span&gt;col-3 offset-sm-2&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="table-responsive grid-footer">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <th> Class</th>
                                        <th>Value of the class</th>
                                    </tr>
                                    <tr>
                                        <td><code>.offset-*-*</code></td>
                                        <td> 1 / 2 / ... / 10 / 11</td>
                                    </tr>
                                </tbody>
                            </table>
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
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
