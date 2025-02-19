@extends('layouts.simple.master')

@section('title', 'Typography')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Typography</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Typography</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5 class="mb-0">Headings</h5>
                        <p class="f-m-light mt-1">All HTML headings, <code>&lt;h1&gt;</code> through
                            <code>&lt;h6&gt;</code>,
                            are available.
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
                        <div class="table-responsive custom-scrollbar">
                            <table class="table mb-0 typography-table">
                                <thead>
                                    <tr>
                                        <th class="pt-0">Code</th>
                                        <th class="pt-0">Font-Size</th>
                                        <th class="pt-0">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>&lt;h1&gt;&lt;/h1&gt;</code></td>
                                        <td>
                                            <h1 class="mb-0">1.625rem</h1>
                                        </td>
                                        <td>
                                            <h1><span>Heading 1 (MEGA)</span></h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h2&gt;&lt;/h2&gt;</code></td>
                                        <td>
                                            <h2 class="mb-0">1.5rem</h2>
                                        </td>
                                        <td>
                                            <h2><span>Heading 2 (XL)</span></h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h3&gt;&lt;/h3&gt;</code></td>
                                        <td>
                                            <h3 class="mb-0">1.375rem</h3>
                                        </td>
                                        <td>
                                            <h3><span>Heading 3 (LARGE)</span></h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h4&gt;&lt;/h4&gt;</code></td>
                                        <td>
                                            <h4 class="mb-0">1.25rem</h4>
                                        </td>
                                        <td>
                                            <h4><span>Heading 4 (MEDIUM)</span></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h5&gt;&lt;/h5&gt;</code></td>
                                        <td>
                                            <h5 class="mb-0">1.125rem</h5>
                                        </td>
                                        <td>
                                            <h5><span>Heading 5 (SMALL)</span></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pb-0"><code>&lt;h6&gt;&lt;/h6&gt;</code></td>
                                        <td class="pb-0">
                                            <h6 class="mb-0">1rem</h6>
                                        </td>
                                        <td class="pb-0">
                                            <h6><span>Heading 6</span></h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#common-heading" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="common-heading">&lt;div class="table-responsive custom-scrollbar"&gt;
 &lt;table class="table mb-0 typography-table"&gt;
   &lt;thead&gt;
     &lt;tr&gt;
       &lt;th class="pt-0"&gt;Code&lt;/th&gt;
       &lt;th class="pt-0"&gt;Font-Size&lt;/th&gt;
       &lt;th class="pt-0"&gt;Heading&lt;/th&gt;
     &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
     &lt;tr&gt;
       &lt;td&gt;
         &lt;code&gt;&lt;h1&gt;&lt;/h1&gt;&lt;/code&gt;
       &lt;/td&gt;
       &lt;td&gt;
         &lt;h1 class="mb-0"&gt;1.625rem&lt;/h1&gt;
       &lt;/td&gt;
       &lt;td&gt;
         &lt;h1&gt;
           &lt;span&gt;Heading 1 (MEGA)&lt;/span&gt;
         &lt;/h1&gt;
       &lt;/td&gt;
     &lt;/tr&gt;
     &lt;tr&gt;
       &lt;td&gt;
         &lt;code&gt;&lt;h2&gt;&lt;/h2&gt;&lt;/code&gt;
       &lt;/td&gt;
       &lt;td&gt;
         &lt;h2 class="mb-0"&gt;1.5rem&lt;/h2&gt;
       &lt;/td&gt;
       &lt;td&gt;
         &lt;h2&gt;
           &lt;span&gt;Heading 2 (XL)&lt;/span&gt;
         &lt;/h2&gt;
       &lt;/td&gt;
     &lt;/tr&gt;
     &lt;tr&gt;
       &lt;td&gt;
         &lt;code&gt;&lt;h3&gt;&lt;/h3&gt;&lt;/code&gt;
       &lt;/td&gt;
       &lt;td&gt;
         &lt;h3 class="mb-0"&gt;1.375rem&lt;/h3&gt;
       &lt;/td&gt;
       &lt;td&gt;
         &lt;h3&gt;
           &lt;span&gt;Heading 3 (LARGE)&lt;/span&gt;
         &lt;/h3&gt;
       &lt;/td&gt;
     &lt;/tr&gt;
     &lt;tr&gt;
       &lt;td&gt;
         &lt;code&gt;&lt;h4&gt;&lt;/h4&gt;&lt;/code&gt;
       &lt;/td&gt;
       &lt;td&gt;
         &lt;h4 class="mb-0"&gt;1.25rem&lt;/h4&gt;
       &lt;/td&gt;
       &lt;td&gt;
         &lt;h4&gt;
           &lt;span&gt;Heading 4 (MEDIUM)&lt;/span&gt;
         &lt;/h4&gt;
       &lt;/td&gt;
     &lt;/tr&gt;
     &lt;tr&gt;
       &lt;td&gt;
         &lt;code&gt;&lt;h5&gt;&lt;/h5&gt;&lt;/code&gt;
       &lt;/td&gt;
       &lt;td&gt;
         &lt;h5 class="mb-0"&gt;1.125rem&lt;/h5&gt;
       &lt;/td&gt;
       &lt;td&gt;
         &lt;h5&gt;
           &lt;span&gt;Heading 5 (SMALL)&lt;/span&gt;
         &lt;/h5&gt;
       &lt;/td&gt;
     &lt;/tr&gt;
     &lt;tr&gt;
       &lt;td class="pb-0"&gt;
         &lt;code&gt;&lt;h6&gt;&lt;/h6&gt;&lt;/code&gt;
       &lt;/td&gt;
       &lt;td class="pb-0"&gt;
         &lt;h6 class="mb-0"&gt;1rem&lt;/h6&gt;
       &lt;/td&gt;
       &lt;td class="pb-0"&gt;
         &lt;h6&gt;
           &lt;span&gt;Heading 6&lt;/span&gt;
         &lt;/h6&gt;
       &lt;/td&gt;
     &lt;/tr&gt;
   &lt;/tbody&gt;
 &lt;/table&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Colored Headings</h5>
                        <p class="f-m-light mt-1">All HTML headings, <code>&lt;h1&gt;</code> through
                            <code>&lt;h6&gt;</code>,
                            are available.
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
                        <div class="table-responsive custom-scrollbar">
                            <table class="table mb-0 typography-table">
                                <thead>
                                    <tr>
                                        <th class="pt-0">Code</th>
                                        <th class="pt-0">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>&lt;h1&gt;&lt;/h1&gt;</code></td>
                                        <td>
                                            <h1><span class="txt-primary"> Heading 1</span> Sub Heading</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h2&gt;&lt;/h2&gt;</code></td>
                                        <td>
                                            <h2><span class="txt-secondary"> Heading 1</span> Sub Heading</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h3&gt;&lt;/h3&gt;</code></td>
                                        <td>
                                            <h3><span class="txt-success"> Heading 1</span> Sub Heading</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h4&gt;&lt;/h4&gt;</code></td>
                                        <td>
                                            <h4><span class="txt-info"> Heading 1</span> Sub Heading</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>&lt;h5&gt;&lt;/h5&gt;</code></td>
                                        <td>
                                            <h5><span class="txt-warning"> Heading 1</span> Sub Heading</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pb-0"><code>&lt;h6&gt;&lt;/h6&gt;</code></td>
                                        <td class="pb-0">
                                            <h6><span class="txt-danger"> Heading 1</span> Sub Heading</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#color-heading" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="color-heading">&lt;div class="table-responsive"&gt;
 &lt;table class="table mb-0 typography-table"&gt;
   &lt;thead&gt;
     &lt;tr&gt;
       &lt;th class="pt-0"&gt;Code&lt;/th&gt;
       &lt;th class="pt-0"&gt;Heading&lt;/th&gt;
     &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
     &lt;tr&gt;
       &lt;td&gt;&lt;code&gt;&lt;h1&gt;&lt;/h1&gt;&lt;/code&gt;&lt;/td&gt;
       &lt;td&gt;
         &lt;h1&gt;&lt;span class="txt-primary"&gt;Heading 1&lt;/span&gt;Sub Heading&lt;/h1&gt;
       &lt;/td&gt;
     &lt;/tr&gt;
     &lt;tr&gt;
       &lt;td&gt;&lt;code&gt;&lt;h2&gt;&lt;/h2&gt;&lt;/code&gt;&lt;/td&gt;
       &lt;td&gt;
         &lt;h2&gt;&lt;span class="txt-secondary"&gt;Heading 1&lt;/span&gt;Sub Heading&lt;/h2&gt;
       &lt;/td&gt;
     &lt;/tr&gt;
     &lt;tr&gt;
       &lt;td&gt;&lt;code&gt;&lt;h3&gt;&lt;/h3&gt;&lt;/code&gt;&lt;/td&gt;
       &lt;td&gt;
         &lt;h3&gt;&lt;span class="txt-success"&gt;Heading 1&lt;/span&gt;Sub Heading&lt;/h3&gt;
       &lt;/td&gt;
     &lt;/tr&gt;
     &lt;tr&gt;
       &lt;td&gt;&lt;code&gt;&lt;h4&gt;&lt;/h4&gt;&lt;/code&gt;&lt;/td&gt;
       &lt;td&gt;
         &lt;h4&gt;&lt;span class="txt-info"&gt;Heading 1&lt;/span&gt;Sub Heading&lt;/h4&gt;
       &lt;/td&gt;
     &lt;/tr&gt;
     &lt;tr&gt;
       &lt;td&gt;&lt;code&gt;&lt;h5&gt;&lt;/h5&gt;&lt;/code&gt;&lt;/td&gt;
       &lt;td&gt;
         &lt;h5&gt;&lt;span class="txt-warning"&gt;Heading 1&lt;/span&gt;Sub Heading&lt;/h5&gt;
       &lt;/td&gt;
     &lt;/tr&gt;
     &lt;tr&gt;
       &lt;td class="pb-0"&gt;&lt;code&gt;&lt;h6&gt;&lt;/h6&gt;&lt;/code&gt;&lt;/td&gt;
       &lt;td class="pb-0"&gt;
         &lt;h6&gt;&lt;span class="txt-danger"&gt;Heading 1&lt;/span&gt;Sub Heading&lt;/h6&gt;
       &lt;/td&gt;
     &lt;/tr&gt;
   &lt;/tbody&gt;
 &lt;/table&gt;
&lt;/div&gt;                         </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Font Weight</h5>
                        <p class="f-m-light mt-1">Using <code>f-w-*</code> class, you can change the font weight.</p>
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
                    <div class="card-body d-flex flex-column gap-3">
                        <h1 class="f-w-900">You can set bolder font weight Heading 1 using<code> f-w-900</code></h1>
                        <h2 class="f-w-700">You can set bold font weight Heading 2 using<code> f-w-700</code></h2>
                        <h3 class="f-w-600">You can set medium font weight Heading 3 using<code> f-w-600</code></h3>
                        <h4 class="f-w-500">You can set normal font weight Heading 4 using<code> f-w-500</code></h4>
                        <h5 class="f-w-400">You can set light font weight Heading 5 using<code> f-w-400</code></h5>
                        <h6 class="f-w-300">You can set light font weight Heading 6 using<code> f-w-300</code></h6>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#common-weight" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="common-weight">&lt;h1 class="f-w-900"&gt;You can set bolder font weight Heading 1 using&lt;code&gt;f-w-900&lt;/code&gt;&lt;/h1&gt;
&lt;h2 class="f-w-700"&gt;You can set bold font weight Heading 2 using&lt;code&gt;f-w-700&lt;/code&gt;&lt;/h2&gt;
&lt;h3 class="f-w-600"&gt;You can set medium font weight Heading 3 using&lt;code&gt;f-w-600&lt;/code&gt;&lt;/h3&gt;
&lt;h4 class="f-w-500"&gt;You can set normal font weight Heading 4 using&lt;code&gt;f-w-500&lt;/code&gt;&lt;/h4&gt;
&lt;h5 class="f-w-400"&gt;You can set light font weight Heading 5 using&lt;code&gt;f-w-400&lt;/code&gt;&lt;/h5&gt;
&lt;h6 class="f-w-300"&gt;You can set light font weight Heading 6 using&lt;code&gt;f-w-300&lt;/code&gt;&lt;/h6&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 listing">
                <div class="card">
                    <div class="card-header">
                        <h5>Listing Typography</h5>
                        <p class="f-m-light mt-1">All typography list:- <code>&lt;ul&gt;</code>,<code>&lt;ol&gt;</code>
                            &amp;
                            <code>&lt;dl&gt;</code>
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
                    <div class="card-body typography-list">
                        <div class="row g-3">
                            <div class="col-md-6 col-xxl-3">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <h6 class="sub-title">Un-order List</h6>
                                    <ul>
                                        <li>This is a list.</li>
                                        <li>It appears completely unstyled.</li>
                                        <li>Structurally, it&apos;s still a list.</li>
                                        <li>However, this style only applies to immediate child elements.</li>
                                        <li>Nested lists:<ul>
                                                <li>Are unaffected by this style</li>
                                                <li>Will still show a bullet</li>
                                                <li>And have appropriate left margin</li>
                                            </ul>
                                        </li>
                                        <li>This may still come in handy in some situations.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-3">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <h6 class="sub-title">Order List</h6>
                                    <ol>
                                        <li>This is a list.</li>
                                        <li>It appears completely unstyled.</li>
                                        <li>Structurally, it&apos;s still a list.</li>
                                        <li>However, this style only applies to immediate child elements.</li>
                                        <li>Nested lists:<ol>
                                                <li>Are unaffected by this style</li>
                                                <li>Will still show a bullet</li>
                                                <li>And have appropriate left margin</li>
                                            </ol>
                                        </li>
                                        <li>This may still come in handy in some situations.</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-md-12 col-xxl-6">
                                <div class="card-wrapper border rounded-3 h-100">
                                    <h6 class="sub-title">Description List</h6>
                                    <dl class="row">
                                        <dt class="col-sm-3 text-truncate">Description lists</dt>
                                        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                                        <dt class="col-sm-3">Term</dt>
                                        <dd class="col-sm-9">
                                            <p>Definition for the term.</p>
                                            <p>And some more placeholder definition text.</p>
                                        </dd>
                                        <dt class="col-sm-3">Another term</dt>
                                        <dd class="col-sm-9">This definition is short, so no extra paragraphs or anything.
                                        </dd>
                                        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                        <dd class="col-sm-9">This can be useful when space is tight. Adds an ellipsis at
                                            the end.</dd>
                                        <dt class="col-sm-3">Nesting</dt>
                                        <dd class="col-sm-9">
                                            <dl class="row">
                                                <dt class="col-sm-4">Nested definition list</dt>
                                                <dd class="col-sm-8">I heard you like definition lists. Let me put a
                                                    definition list
                                                    inside your definition list.</dd>
                                            </dl>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#list-typography" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="list-typography">&lt;div class="card-body typography-list"&gt;
 &lt;div class="row g-3"&gt;
   &lt;div class="col-md-6 col-xxl-3"&gt;
     &lt;div class="card-wrapper border rounded-3 h-100"&gt;
       &lt;h6 class="sub-title"&gt;Un-order List&lt;/h6&gt;
       &lt;ul&gt;
         &lt;li&gt;This is a list.&lt;/li&gt;
         &lt;li&gt;It appears completely unstyled.&lt;/li&gt;
         &lt;li&gt;Structurally, it&apos;s still a list.&lt;/li&gt;
         &lt;li&gt;However, this style only applies to immediate child elements.&lt;/li&gt;
         &lt;li&gt;Nested lists:
           &lt;ul&gt;
             &lt;li&gt;Are unaffected by this style&lt;/li&gt;
             &lt;li&gt;Will still show a bullet&lt;/li&gt;
             &lt;li&gt;And have appropriate left margin&lt;/li&gt;
           &lt;/ul&gt;
         &lt;/li&gt;
         &lt;li&gt;This may still come in handy in some situations.&lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-6 col-xxl-3"&gt;
     &lt;div class="card-wrapper border rounded-3 h-100"&gt;
       &lt;h6 class="sub-title"&gt;Order List&lt;/h6&gt;
       &lt;ol&gt;
         &lt;li&gt;This is a list.&lt;/li&gt;
         &lt;li&gt;It appears completely unstyled.&lt;/li&gt;
         &lt;li&gt;Structurally, it&apos;s still a list.&lt;/li&gt;
         &lt;li&gt;However, this style only applies to immediate child elements.&lt;/li&gt;
         &lt;li&gt;Nested lists:
           &lt;ol&gt;
             &lt;li&gt;Are unaffected by this style&lt;/li&gt;
             &lt;li&gt;Will still show a bullet&lt;/li&gt;
             &lt;li&gt;And have appropriate left margin&lt;/li&gt;
           &lt;/ol&gt;
         &lt;/li&gt;
         &lt;li&gt;This may still come in handy in some situations.&lt;/li&gt;
       &lt;/ol&gt;
     &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-md-12 col-xxl-6"&gt;
     &lt;div class="card-wrapper border rounded-3 h-100"&gt;
       &lt;h6 class="sub-title"&gt;Description List&lt;/h6&gt;
       &lt;dl class="row"&gt;
         &lt;dt class="col-sm-3 text-truncate"&gt;Description lists&lt;/dt&gt;
         &lt;dd class="col-sm-9"&gt;A description list is perfect for defining terms.&lt;/dd&gt;
         &lt;dt class="col-sm-3"&gt;Term&lt;/dt&gt;
         &lt;dd class="col-sm-9"&gt;
           &lt;p&gt;Definition for the term.&lt;/p&gt;
           &lt;p&gt;And some more placeholder definition text.&lt;/p&gt;
         &lt;/dd&gt;
         &lt;dt class="col-sm-3"&gt;Another term&lt;/dt&gt;
         &lt;dd class="col-sm-9"&gt;This definition is short, so no extra paragraphs or anything.&lt;/dd&gt;
         &lt;dt class="col-sm-3 text-truncate"&gt;Truncated term is truncated&lt;/dt&gt;
         &lt;dd class="col-sm-9"&gt;This can be useful when space is tight. Adds an ellipsis at the end.&lt;/dd&gt;
         &lt;dt class="col-sm-3"&gt;Nesting&lt;/dt&gt;
         &lt;dd class="col-sm-9"&gt;
           &lt;dl class="row"&gt;
             &lt;dt class="col-sm-4"&gt;Nested definition list&lt;/dt&gt;
             &lt;dd class="col-sm-8"&gt;I heard you like definition lists. Let me put a definition list inside your definition list.&lt;/dd&gt;
           &lt;/dl&gt;
         &lt;/dd&gt;
       &lt;/dl&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Display Headings</h5>
                        <p class="f-m-light mt-1">When you need a heading to stand out, consider using a<mark>display
                                heading</mark>&mdash;a
                            larger, slightly more opinionated heading style.</p>
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
                    <div class="card-body d-flex flex-column gap-3">
                        <h1 class="display-1">Display 1</h1>
                        <h2 class="display-2">Display 2</h2>
                        <h3 class="display-3">Display 3</h3>
                        <h4 class="display-4">Display 4</h4>
                        <h5 class="display-5">Display 5</h5>
                        <h6 class="display-6">Display 6</h6>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#display-heading" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="display-heading">&lt;h1 class="display-1"&gt;Display 1&lt;/h1&gt;
&lt;h2 class="display-2"&gt;Display 2&lt;/h2&gt;
&lt;h3 class="display-3"&gt;Display 3&lt;/h3&gt;
&lt;h4 class="display-4"&gt;Display 4&lt;/h4&gt;
&lt;h5 class="display-5"&gt;Display 5&lt;/h5&gt;
&lt;h6 class="display-6"&gt;Display 6&lt;/h6&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h4>Inline Text Elements</h4>
                        <p class="f-m-light mt-1">Styling for common inline HTML5 elements.</p>
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
                        <div class="d-flex flex-column gap-2">
                            <p class="mb-0">You can use the mark tag to <mark>highlight</mark> text.</p>
                            <p class="mb-0"><del>This line of text is meant to be treated as deleted text.</del></p>
                            <p class="mb-0"><s>This line of text is meant to be treated as no longer accurate.</s></p>
                            <p class="mb-0"><ins>This line of text is meant to be treated as an addition to the
                                    document.</ins></p>
                            <p class="mb-0"><u>This line of text will render as underlined</u></p>
                            <p class="mb-0"><small>This line of text is meant to be treated as fine print.</small></p>
                            <p class="mb-0"><strong>This line rendered as bold text.</strong></p>
                            <p class="mb-0"><em>This line rendered as italicized text.</em></p>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#text-elements" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="text-elements">&lt;div class="d-flex flex-column gap-2"&gt;
 &lt;p class="mb-0"&gt;You can use the mark tag to 
   &lt;mark&gt;highlight&lt;/mark&gt; text.
 &lt;/p&gt;
 &lt;p class="mb-0"&gt;
   &lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;
 &lt;/p&gt;
 &lt;p class="mb-0"&gt;
   &lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;
 &lt;/p&gt;
 &lt;p class="mb-0"&gt;
   &lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;
 &lt;/p&gt;
 &lt;p class="mb-0"&gt;
   &lt;u&gt;This line of text will render as underlined&lt;/u&gt;
 &lt;/p&gt;
 &lt;p class="mb-0"&gt;
   &lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;
 &lt;/p&gt;
 &lt;p class="mb-0"&gt;
   &lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;
 &lt;/p&gt;
 &lt;p class="mb-0"&gt;
   &lt;em&gt;This line rendered as italicized text.&lt;/em&gt;
 &lt;/p&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Text Colors</h5>
                        <p class="f-m-light mt-1">You give text color by using <code>txt-*</code> classes.</p>
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
                        <div class="d-flex flex-column gap-2">
                            <p class="txt-primary mb-0">The <code>"txt-primary" </code>class can be used to create an text
                                like
                                this one.</p>
                            <p class="txt-secondary mb-0">The <code>"txt-secondary" </code>class can be used to create an
                                text
                                like this one.</p>
                            <p class="txt-success mb-0">The <code>"txt-success" </code>class can be used to create an text
                                like
                                this one.
                                class</p>
                            <p class="txt-info mb-0">The <code>"txt-info" </code>class can be used to create an text like
                                this
                                one.
                                class</p>
                            <p class="txt-warning mb-0">The <code>"txt-warning" </code>class can be used to create an text
                                like
                                this one.</p>
                            <p class="txt-danger mb-0">The <code>"txt-danger" </code>class can be used to create an text
                                like
                                this one.</p>
                            <p class="txt-dark mb-0">The <code>"txt-dark" </code>class can be used to create an text like
                                this
                                one.</p>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#text-colors" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="text-colors">&lt;div class="d-flex flex-column gap-2"&gt;
 &lt;p class="txt-primary mb-0"&gt;The
   &lt;code&gt;"txt-primary"&lt;/code&gt;class can be used to create an text like this one.
 &lt;/p&gt;
 &lt;p class="txt-secondary mb-0"&gt;The
   &lt;code&gt;"txt-secondary"&lt;/code&gt;class can be used to create an text like this one.
 &lt;/p&gt;
 &lt;p class="txt-success mb-0"&gt;The
   &lt;code&gt;"txt-success"&lt;/code&gt;class can be used to create an text like this one. class
 &lt;/p&gt;
 &lt;p class="txt-info mb-0"&gt;The
   &lt;code&gt;"txt-info"&lt;/code&gt;class can be used to create an text like this one. class
 &lt;/p&gt;
 &lt;p class="txt-warning mb-0"&gt;The
   &lt;code&gt;"txt-warning"&lt;/code&gt;class can be used to create an text like this one.
 &lt;/p&gt;
 &lt;p class="txt-danger mb-0"&gt;The
   &lt;code&gt;"txt-danger"&lt;/code&gt;class can be used to create an text like this one.
 &lt;/p&gt;
 &lt;p class="txt-dark mb-0"&gt;The
   &lt;code&gt;"txt-dark"&lt;/code&gt;class can be used to create an text like this one.
 &lt;/p&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h5>Blockquote</h5>
                        <p class="f-m-light mt-1">The <code>&lt;blockquote&gt;</code> tag specifies a section that is
                            quoted
                            from another source.</p>
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
                        <div class="figure d-block dark-blockquote">
                            <blockquote class="blockquote light-card mb-2">
                                <p class="mb-0">The only impossible journey is the one you never begin.</p><span
                                    class="blockquote-footer pt-3">Tony Robbins</span>
                            </blockquote>
                        </div>
                        <div class="figure text-center d-block dark-blockquote">
                            <blockquote class="blockquote light-card mb-2">
                                <p class="mb-0">In this life we cannot do great things. We can only do small things with
                                    great
                                    love.</p><span class="blockquote-footer pt-3">Mother Teresa</span>
                            </blockquote>
                        </div>
                        <div class="figure text-end d-block dark-blockquote">
                            <blockquote class="blockquote mb-0 light-card mb-2">
                                <p class="mb-0">Live in the sunshine, swim the sea, drink the wild air.</p><span
                                    class="blockquote-footer pt-3">Ralph Waldo Emerson</span>
                            </blockquote>
                        </div>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#blockquote-heading" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="blockquote-heading">&lt;div class="figure d-block dark-blockquote"&gt;
 &lt;blockquote class="blockquote light-card mb-2"&gt;
   &lt;p class="mb-0"&gt;The only impossible journey is the one you never begin.&lt;/p&gt;
   &lt;span class="blockquote-footer pt-3"&gt;Tony Robbins&lt;/span&gt;
 &lt;/blockquote&gt;
&lt;/div&gt;
&lt;div class="figure text-center d-block dark-blockquote"&gt;
 &lt;blockquote class="blockquote light-card mb-2"&gt;
   &lt;p class="mb-0"&gt;In this life we cannot do great things. We can only do small things with great love.&lt;/p&gt;
   &lt;span class="blockquote-footer pt-3"&gt;Mother Teresa&lt;/span&gt;
 &lt;/blockquote&gt;
&lt;/div&gt;
&lt;div class="figure text-end d-block dark-blockquote"&gt;
 &lt;blockquote class="blockquote mb-0 light-card mb-2"&gt;
   &lt;p class="mb-0"&gt;Live in the sunshine, swim the sea, drink the wild air.&lt;/p&gt;
   &lt;span class="blockquote-footer pt-3"&gt;Ralph Waldo Emerson&lt;/span&gt;
 &lt;/blockquote&gt;
&lt;/div&gt;</code></pre>
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
