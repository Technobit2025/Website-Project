@extends('layouts.simple.master')

@section('title', 'CK Editor')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.bubble.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Ck Editor</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Editors</li>
                        <li class="breadcrumb-item active">Ck Editor</li>
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
                    <div class="card-header card-no-border pb-0">
                        <h5>CK Editor</h5>
                    </div>
                    <div class="card-body">
                        <textarea id="editor1" name="editor1" cols="30" rows="10"><h2>Technical details <a id="tech-details" name="tech-details"></a></h2>
<table align="right" border="1" cellpadding="5" cellspacing="0">
<caption><strong>Mission crew</strong></caption>
<thead>
<tr>
<th scope="col">Position</th>
<th scope="col">Astronaut</th>
</tr>
</thead>
<tbody>
<tr>
<td>Commander</td>
<td>Neil A. Armstrong</td>
</tr>
<tr>
<td>Command Module Pilot</td>
<td>Michael Collins</td>
</tr>
<tr>
<td>Lunar Module Pilot</td>
<td>Edwin "Buzz" E. Aldrin, Jr.</td>
</tr>
</tbody>
</table>
<p>Launched by a <strong>Saturn V</strong> rocket from <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
<ol>
<li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
<li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
<li><strong>Lunar Module</strong> for landing on the Moon.</li>
</ol>
<p>After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="#">Pacific Ocean</a> on July 24.</p></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h5>Inline Editor</h5>
                    </div>
                    <div class="card-body">
                        <div id="area1" contenteditable="true">
                            <h1>Web designing</h1>
                            <p>Being the best designer requires a combination of exceptional creativity, technical
                                expertise, and a deep understanding of user experience. I pride myself on my ability to
                                think outside the box and create visually stunning designs that captivate and inspire. With
                                a keen eye for detail, I carefully craft every element of a design, ensuring that it is not
                                only aesthetically pleasing but also functional and user-friendly. I stay up to date with
                                the latest design trends and constantly push myself to explore new techniques and
                                technologies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/adapters/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/styles.js') }}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.custom.js') }}"></script>
@endsection
