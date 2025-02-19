@extends('layouts.simple.master')

@section('title', 'Human Resource Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Employee Data</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb" id="breadcrumb">
                        <li class="breadcrumb-item"><a href=""> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
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
                        <h5>Employees</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="employeeTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td>{{ $employee->id }}</td>
                                            <td>{{ $employee->fullname }}</td>
                                            <td>{{ $employee->user->email }}</td>
                                            <td>{{ $employee->user->role->name }}</td>
                                            <td>
                                                <a href="{{ route('humanresource.employee.show', $employee->id) }}"
                                                    class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('humanresource.employee.edit', $employee->id) }}"
                                                    class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('humanresource.employee.destroy', $employee->id) }}" method="POST"
                                                    style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var breadcrumb = document.getElementById('breadcrumb');
            var pathArray = window.location.pathname.split('/').filter(function(el) {
                return el.length != 0;
            });

            pathArray.forEach(function(path, index) {
                if (index === 0) return; // Skip the first link
                var li = document.createElement('li');
                li.classList.add('breadcrumb-item');
                if (index === pathArray.length - 1) {
                    li.classList.add('active');
                    li.textContent = path.charAt(0).toUpperCase() + path.slice(1);
                } else {
                    var a = document.createElement('a');
                    a.href = '/' + pathArray.slice(0, index + 1).join('/');
                    a.textContent = path.charAt(0).toUpperCase() + path.slice(1);
                    li.appendChild(a);
                }
                breadcrumb.appendChild(li);
            });
        });
    </script>
@endsection
