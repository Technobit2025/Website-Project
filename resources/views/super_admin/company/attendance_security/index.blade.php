@extends('layouts.simple.master')

@section('title', 'Patrol Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/responsive.dataTables.min.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables1.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.responsive.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#adminTable').DataTable({
                autoWidth: false,
                responsive: true,
                columnDefs:[
                    {width:"100px", targets:0},
                    {width:"100px", targets:1},
                    {width:"100px",targets:2},
                    {width:"100px", targets:5},
                    {width:"100px", targets:6},
                    {width:"100px", targets:7},
                ],
                language: {
                    url: '{{ asset('assets/js/datatable/datatable-extension/i18n/indonesian.json') }}'
                }
            });
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Data Presensi'])
    </div>
    <div class="container-fluid">
        {{-- <div class="row">
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
                                <a href="{{ route('superadmin.employee.create') }}" class="btn btn-primary">Tambah
                                    Karyawan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5>Data Karyawan</h5>
                            {{-- <a href="{{route('superadmin.patrol.exportPdf')}}" target="_blank" class="btn btn-primary">Export PDF</a> --}}
                        </div>  
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar table-striped">
                            <div class="col-12 table-responsive">
                                <table style="width:100%;" class="display callback-table dataTable" id="adminTable" 
                                    aria-describedby="employeeTable_info">
                                    <thead>
                                        <tr>
                                            {{-- <th style="width: 5% !important;">ID</th> --}}
                                            <th>Nama</th>
                                            {{-- <th>Shift</th> --}}
                                            <th>Tempat</th>
                                            <th>Waktu Masuk</th>
                                            <th>Waktu Keluar</th>
                                            <th>Foto Presensi</th>
                                            <th>Status</th>
                                            <th>Catatan</th>
                                            <th>User Catatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($attendances as $attendance)
                                            <tr>
                                                {{-- <td style="width: 5% !important;">{{ $employee->id }}</td> --}}
                                               <td style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $attendance->employee->fullname }}</td>
                                                {{-- <td>{{$attendance->employee->fullname}}</td> --}}
                                                <td>{{$attendance->companyPlace->name}}</td>   
                                                <td>{{$attendance->checked_in_at}}</td>
                                                <td>{{$attendance->checked_out_at}}</td>
                                                 <td style="overflow: visible; white-space: normal;">
                                                    <img src="{{ $attendance->photo_base64 }}" alt="foto" style="max-width: 100px; height: auto; display: block;">
                                                </td>
                                                <td>{{$attendance->status}}</td>
                                                <td>{{$attendance->note}}</td>
                                                <td>{{$attendance->user_note}}</td>
                                                {{-- <td><img src="{{ asset('storage/' . $patrol->photo)}}" alt="foto" width="120"></td> --}}
                                                
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="{{ route('superadmin.company.attendanceSecurity.edit', $attendance->id) }}"
                                                            class="btn btn-warning btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Ubah Presensi">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>                                           
                                                    </div>

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
