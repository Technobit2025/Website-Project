@extends('layouts.simple.master')

@section('title', 'To-Do')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>To-Do</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">To-Do</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid email-wrap bookmark-wrap todo-wrap">
        <div class="row">
            <div class="col-xxl-3 col-xl-4 box-col-30">
                <div class="email-sidebar md-sidebar"><a class="btn btn-primary email-aside-toggle md-sidebar-toggle">To Do
                        filter</a>
                    <div class="email-left-aside md-sidebar-aside">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-app-sidebar left-bookmark custom-scrollbar">
                                    <div class="common-flex align-items-center">
                                        <div class="media-size-email"><img class="img-40 rounded-circle"
                                                src="{{ asset('assets/images/user/user.png') }}" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>WILLIAM C. JENNINGS</h6>
                                            <p>william@jourrapide.com</p>
                                        </div>
                                    </div>
                                    <ul class="nav main-menu">
                                        <li class="nav-item"><button class="btn-primary txt-light d-block btn-mail w-100"><i
                                                    class="me-2" data-feather="check-circle"> </i>To Do
                                                List</button></li>
                                        <li class="nav-item"> <a href="#!"><span class="iconbg bg-light-primary"><i
                                                        class="txt-primary" data-feather="file-plus"></i></span><span
                                                    class="title ms-2">All Task</span></a></li>
                                        <li class="nav-item"><a href="#!"><span class="iconbg bg-light-success"><i
                                                        class="txt-success" data-feather="check-circle"></i></span><span
                                                    class="title ms-2">Completed</span><span
                                                    class="badge badge-success">3</span></a></li>
                                        <li class="nav-item"><a href="#!"><span class="iconbg bg-light-danger"><i
                                                        class="txt-danger" data-feather="cast"></i></span><span
                                                    class="title ms-2">Pending</span><span
                                                    class="badge badge-danger">2</span></a></li>
                                        <li class="nav-item"><a href="#!"><span class="iconbg bg-light-info"><i
                                                        class="txt-info" data-feather="activity"></i></span><span
                                                    class="title ms-2">In Process</span><span
                                                    class="badge badge-primary">2</span></a></li>
                                        <li class="nav-item"><a href="#!"><span class="iconbg bg-light-danger"><i
                                                        class="txt-danger" data-feather="trash"></i></span><span
                                                    class="title ms-2">Trash</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-9 col-xl-8 box-col-12">
                <div class="card todo-tasks">
                    <div class="card-header">
                        <div class="input-group"><input class="form-control" id="new-task-input" type="text"
                                placeholder="write your task..."><button class="btn btn-primary" id="add-task-button"
                                type="button">Add Task</button></div>
                    </div>
                    <div class="card-body custom-scrollbar">
                        <ul class="checkbox-checked" id="task-list"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/custom-todo.js') }}"></script>
@endsection
