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
            $('#patrolTable').DataTable({
                autoWidth: false,
                responsive: true,
                columnDefs:[
                    {width:"100px", targets:0},
                    {width:"100px", targets:1},
                    {width:"100px", targets:2},
                    {width:"100px", targets:5},
                    {width:"100px", targets:6},
                    {width:"100px", targets:7},
                    // {width:"150px",targets:1}
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
        @include('layouts.components.breadcrumb', ['header' => 'Data Perusahaan'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5>Data Patroli</h5>
                            <a href="{{route('danru.patrol.exportPdf')}}" target="_blank" class="btn btn-primary">Export PDF</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar table-striped">
                            <div class="col-12 table-responsive">
                                <table style="width: 100%;" class="display callback-table dataTable" id="patrolTable" 
                                    aria-describedby="employeeTable_info">
                                    <thead>
                                        <tr>
                                            {{-- <th style="width: 5% !important;">ID</th> --}}
                                            <th>Nama</th>
                                            <th>Shift</th>
                                            <th>Tempat</th>
                                            <th>lokasi patroli</th>
                                            <th>Foto</th>
                                            <th>latitude</th>
                                            <th>longitude</th>
                                            <th>status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($patrols as $patrol)
                                            <tr>
                                                <td style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $patrol->employee->fullname }}</td>
                                                <td>{{$patrol->shift->name}}</td>
                                                <td>{{$patrol->place->name}}</td>
                                                <td>{{$patrol->patrol_location}}</td>
                                                {{-- <td><img src="{{ asset('storage/' . $patrol->photo)}}" alt="foto" width="120"></td> --}}
                                                <td style="overflow: visible; white-space: normal;">
                                                    <img src="{{ $patrol->photo_base64 }}" alt="foto" style="max-width: 100px; height: auto; display: block;">
                                                </td>
                                                <td style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $patrol->latitude }}</td>
                                                <td style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $patrol->longitude }}</td>
                                                <td>{{ $patrol->status}}</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="{{ route('superadmin.patrol.edit', $patrol->id) }}"
                                                            class="btn btn-warning btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Ubah Karyawan">
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

