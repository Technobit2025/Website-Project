@extends('layouts.simple.master')

@section('title', 'Pagination')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Paginations</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item"> Bonus Ui</li>
                        <li class="breadcrumb-item active">Pagination</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row"><!-- simple pagination-->
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Default Pagination</h5>
                        <p class="f-m-light mt-1">If the pagination component is used to navigate between a set of search
                            results, an appropriate label could be <code>aria-label="Search results pages"</code>.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"> </i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-primary pagin-border-primary">
                                <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                            </ul>
                        </nav>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#pagination-default" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="pagination-default">&lt;nav aria-label="Page navigation example"&gt;
 &lt;ul class="pagination pagination-primary pagin-border-primary"&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;Previous&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;1&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;2&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;3&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;Next&lt;/a&gt;&lt;/li&gt;
 &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div><!-- pagination with active and disabled state-->
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Pagination With Active And Disabled</h5>
                        <p class="f-m-light mt-1">Use <code>disabled </code>for links that appear un-clickable
                            and<code> active</code> to indicate the current page.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"> </i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <nav aria-label="...">
                            <ul class="pagination pagination-success pagin-border-success">
                                <li class="page-item disabled"><a class="page-link" href="#!"
                                        tabindex="-1">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#!">2 <span
                                            class="sr-only">(current)</span></a></li>
                                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                            </ul>
                        </nav>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#pagination-disable" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="pagination-disable">&lt;nav aria-label="..."&gt;
 &lt;ul class="pagination pagination-success pagin-border-success"&gt;
   &lt;li class="page-item disabled"&gt;&lt;a class="page-link" href="#!" tabindex="-1"&gt;Previous&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;1&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item active"&gt;&lt;a class="page-link" href="#!"&gt;2 &lt;span class="sr-only"&gt;(current)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;3&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;Next&lt;/a&gt;&lt;/li&gt;
 &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div><!-- pagination with icons-->
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Pagination With Icons</h5>
                        <p class="f-m-light mt-1">Use an icon or symbol in place of text for some pagination links.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"> </i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-secondary pagin-border-secondary">
                                <li class="page-item"><a class="page-link" href="#!" aria-label="Previous"><span
                                            aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                                <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                <li class="page-item"><a class="page-link" href="#!">...</a></li>
                                <li class="page-item"><a class="page-link" href="#!">20</a></li>
                                <li class="page-item"><a class="page-link" href="#!" aria-label="Next"><span
                                            aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                            </ul>
                        </nav>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#pagination-icon" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="pagination-icon">&lt;nav aria-label="Page navigation example"&gt;
 &lt;ul class="pagination pagination-secondary pagin-border-secondary"&gt;
   &lt;li class="page-item"&gt;
     &lt;a class="page-link" href="#!" aria-label="Previous"&gt;
       &lt;span aria-hidden="true"&gt;«&lt;/span&gt;
       &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
     &lt;/a&gt;
   &lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;1&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;2&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;3&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;...&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;20&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;
     &lt;a class="page-link" href="#!" aria-label="Next"&gt;
       &lt;span aria-hidden="true"&gt;»&lt;/span&gt;
       &lt;span class="sr-only"&gt;Next&lt;/span&gt;
     &lt;/a&gt;
   &lt;/li&gt;
 &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div><!-- Rounded Pagination-->
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5> Rounded Pagination</h5>
                        <p class="f-m-light mt-1">Used in rounded pagination.Use an icon or symbol in place of text for
                            some
                            pagination links.<code>[rounded-circle]</code></p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"> </i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-dark pagin-border-dark gap-2">
                                <li class="page-item"><a class="page-link rounded-circle" href="#!"
                                        aria-label="Previous"><span aria-hidden="true">«</span><span
                                            class="sr-only">Previous</span></a></li>
                                <li class="page-item"><a class="page-link rounded-circle" href="#!">1</a></li>
                                <li class="page-item"><a class="page-link rounded-circle" href="#!">2</a></li>
                                <li class="page-item"><a class="page-link rounded-circle" href="#!">...</a></li>
                                <li class="page-item"><a class="page-link rounded-circle" href="#!">20</a></li>
                                <li class="page-item"><a class="page-link rounded-circle" href="#!"
                                        aria-label="Next"><span aria-hidden="true">»</span><span
                                            class="sr-only">Next</span></a></li>
                            </ul>
                        </nav>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#pagination-rounded" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="pagination-rounded">&lt;nav aria-label="Page navigation example"&gt;
 &lt;ul class="pagination pagination-dark pagin-border-dark gap-2"&gt;
   &lt;li class="page-item"&gt;
     &lt;a class="page-link rounded-circle" href="#!" aria-label="Previous"&gt;
       &lt;span aria-hidden="true"&gt;«&lt;/span&gt;
       &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
     &lt;/a&gt;
   &lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link rounded-circle" href="#!"&gt;1&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link rounded-circle" href="#!"&gt;2&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link rounded-circle" href="#!"&gt;...&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;&lt;a class="page-link rounded-circle" href="#!"&gt;20&lt;/a&gt;&lt;/li&gt;
   &lt;li class="page-item"&gt;
     &lt;a class="page-link rounded-circle" href="#!" aria-label="Next"&gt;
       &lt;span aria-hidden="true"&gt;»&lt;/span&gt;
       &lt;span class="sr-only"&gt;Next&lt;/span&gt;
     &lt;/a&gt;
   &lt;/li&gt;
 &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div><!-- pagination alignments-->
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Pagination Alignment</h5>
                        <p class="f-m-light mt-1">Change the alignment of pagination components with flexbox utilities. For
                            example, with <code>justify-content-center:*</code>.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"> </i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body"><!-- left aligned pagination-->
                        <nav class="m-b-30" aria-label="Page navigation example">
                            <ul class="pagination pagin-border-warning pagination-warning">
                                <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                            </ul>
                        </nav><!-- center aligned pagination-->
                        <nav class="m-b-30" aria-label="Page navigation example">
                            <ul class="pagination justify-content-center pagin-border-danger pagination-danger">
                                <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#!">I </a></li>
                                <li class="page-item active"><a class="page-link" href="#!">II </a></li>
                                <li class="page-item"><a class="page-link" href="#!">III</a></li>
                                <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                            </ul>
                        </nav><!-- right aligned pagination-->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end pagin-border-success pagination-success">
                                <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#!">i </a></li>
                                <li class="page-item"><a class="page-link" href="#!">ii </a></li>
                                <li class="page-item"><a class="page-link" href="#!">iii</a></li>
                                <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                            </ul>
                        </nav>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#pagination-align" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="pagination-align">&lt;div class="card-body"&gt;
 &lt;!-- left aligned pagination--&gt;
 &lt;nav class="m-b-30" aria-label="Page navigation example"&gt;
   &lt;ul class="pagination pagin-border-warning pagination-warning"&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;Previous&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;1&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;2&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;3&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;Next&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/nav&gt;
 &lt;!-- center aligned pagination--&gt;
 &lt;nav class="m-b-30" aria-label="Page navigation example"&gt;
   &lt;ul class="pagination justify-content-center pagin-border-danger pagination-danger"&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;Previous&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;I &lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item active"&gt;&lt;a class="page-link" href="#!"&gt;II &lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;III&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;Next&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/nav&gt;
 &lt;!-- right aligned pagination--&gt;
 &lt;nav aria-label="Page navigation example"&gt;
   &lt;ul class="pagination justify-content-end pagin-border-success pagination-success"&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;Previous&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;i &lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;ii &lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;iii&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;Next&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/nav&gt;
 &lt;div class="code-box-copy"&gt;
   &lt;button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#pagination-align" title="Copy"&gt;&lt;i class="icofont icofont-copy-alt"&gt;&lt;/i&gt;&lt;/button&gt;
   &lt;pre class="custom-scrollbar"&gt;&lt;code class="language-html" id="pagination-align"&gt;&lt;/code&gt;&lt;/pre&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div><!-- pagination sizing-->
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Pagination Sizing</h5>
                        <p class="f-m-light mt-1">Use <code>[pagination-lg/pagination-md/pagination-lg]</code> for
                            additional
                            sizes.</p>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"> </i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body"><!-- large size pagination-->
                        <nav class="m-b-30" aria-label="Page navigation example">
                            <ul class="pagination pagination-lg pagination-info pagin-border-info">
                                <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                            </ul>
                        </nav><!--medium size pagination-->
                        <nav class="m-b-30" aria-label="Page navigation example">
                            <ul class="pagination pagination-md pagination-info pagin-border-info">
                                <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                            </ul>
                        </nav><!-- small size pagination-->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-sm pagination-info pagin-border-info">
                                <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                            </ul>
                        </nav>
                        <div class="code-box-copy"><button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#pagination-sizing" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="pagination-sizing">&lt;div class="card-body"&gt;
 &lt;!-- large size pagination--&gt;
 &lt;nav class="m-b-30" aria-label="Page navigation example"&gt;
   &lt;ul class="pagination pagination-lg pagination-info pagin-border-info"&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;Previous&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;1&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;2&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;3&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;Next&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/nav&gt;
 &lt;!--medium size pagination--&gt;
 &lt;nav class="m-b-30" aria-label="Page navigation example"&gt;
   &lt;ul class="pagination pagination-md pagination-info pagin-border-info"&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;Previous&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;1&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;2&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;3&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;Next&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/nav&gt;
 &lt;!-- small size pagination--&gt;
 &lt;nav aria-label="Page navigation example"&gt;
   &lt;ul class="pagination pagination-sm pagination-info pagin-border-info"&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;Previous&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;1&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;2&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;3&lt;/a&gt;&lt;/li&gt;
     &lt;li class="page-item"&gt;&lt;a class="page-link" href="#!"&gt;Next&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
 &lt;/nav&gt;
 &lt;div class="code-box-copy"&gt;
   &lt;button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#pagination-sizing" title="Copy"&gt;
     &lt;i class="icofont icofont-copy-alt"&gt;&lt;/i&gt;
   &lt;/button&gt;
   &lt;pre class="custom-scrollbar"&gt;&lt;code class="language-html" id="pagination-sizing"&gt;&lt;/code&gt;&lt;/pre&gt;
 &lt;/div&gt;
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
