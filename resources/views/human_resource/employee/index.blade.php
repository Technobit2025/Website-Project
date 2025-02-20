@extends('layouts.simple.master')

@section('title', 'Human Resource Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables1.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.bootstrap5.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#employeeTable').DataTable({
                language: {
                    url: '{{ asset('assets/js/datatable/datatable-extension/i18n/indonesian.json') }}'
                }
            });
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Data Karyawan'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="card user-management">
                    <div class="card-body bg-primary rounded-4">
                        <div class="blog-card p-0">
                            <div class="blog-card-content">
                                <div class="blog-tags">
                                    <div class="tags-icon">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-task') }}">
                                            </use>
                                        </svg>
                                    </div>
                                    <div class="tag-details">
                                        <h2 class="total-num counter">{{ $roles->count() }}</h2>
                                        <p>Role Karyawan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Total Karyawan Berdasarkan Role</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="total-num counter">
                                    <div class="d-flex by-role custom-scrollbar">
                                        @foreach ($roles as $role)
                                        <div>
                                            <div class="total-user bg-light-primary">
                                                <h5> {{ $role->name }} </h5>
                                                <span class="total-num counter">{{ $role->users->count() }}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card user-role">
                    <div class="card-body">
                        <div class="btn-light1-primary b-r-15">
                            <div class="upcoming-box">
                                <div class="upcoming-icon bg-primary">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#user-plus') }}">
                                        </use>
                                    </svg>
                                </div>
                                <p>Karyawan</p>
                                <a href="{{ route('humanresource.employee.create') }}" class="btn btn-primary">Tambah
                                    Karyawan</a>
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
                        <h5>Data Karyawan</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar table-striped">
                            <div class="col-12 table-responsive">
                                <table class="display callback-table dataTable" id="employeeTable" style="width: 100%;"
                                    aria-describedby="employeeTable_info">

                                    <thead>
                                        <tr>
                                            {{-- <th style="width: 5% !important;">ID</th> --}}
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $employee)
                                            <tr>
                                                {{-- <td style="width: 5% !important;">{{ $employee->id }}</td> --}}
                                                <td>{{ $employee->fullname }}</td>
                                                <td>{{ $employee->user->email }}</td>
                                                <td>{{ $employee->user->role->name }}</td>
                                                <td><span class="badge {{ $employee->active ? 'badge-success' : 'badge-danger' }}">{{ $employee->active ? 'Aktif' : 'Tidak Aktif' }}</span></td>
                                                <td>
                                                    <ul class="action gap-2">
                                                        <li class="view">
                                                            <a href="{{ route('humanresource.employee.show', $employee->id) }}">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li class="edit">
                                                            <a href="{{ route('humanresource.employee.edit', $employee->id) }}">
                                                                <i class="fa-regular fa-pen-to-square"></i>
                                                            </a>
                                                        </li>
                                                        <li class="delete">
                                                            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $employee->id }}" style="border:none; background:none; padding:0;">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="deleteModal{{ $employee->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $employee->id }}" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="deleteModalLabel{{ $employee->id }}">Confirm Delete</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Are you sure you want to delete this employee?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                            <form action="{{ route('humanresource.employee.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
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
        </div>
    </div><!-- Container-fluid Ends-->
@endsection