@extends('layouts.simple.master')

@section('title', 'Human Resource Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/tour.css') }}">

@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables1.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('assets/js/tour/intro.js') }}"></script>
    <script src="{{ asset('assets/js/tour/intro-init.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#companyTable').DataTable({
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
                                        <p>Role Perusahaan</p>
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
                        <h5>Total Perusahaan Berdasarkan Role</h5>
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
                                <p>Perusahaan</p>
                                <a href="{{ route('superadmin.company.create') }}" class="btn btn-primary">Tambah
                                    Perusahaan</a>
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
                        {{-- <div class="d-flex justify-content-between">
                            <h5>Data Jadwal</h5>
                            <a href="{{ route('superadmin.company.presence.create') }}" data-intro="Klik tombol ini untuk menambahkan jadwal"
                                class="btn btn-primary">Tambahkan Jadwal</a>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar table-striped" data-intro="Data perusahaan akan ditampilkan disini">
                            <div class="col-12 table-responsive">
                                <table class="display callback-table dataTable" id="companyTable" style="width: 100%;"
                                    aria-describedby="companyTable_info">

                                    <thead>
                                        <tr>
                                            {{-- <th style="width: 5% !important;">ID</th> --}}
                                            <th>Informasi</th>
                                            <th>Hari</th>
                                            <th>Waktu Mulai</th>
                                            <th>Waktu Selesai</th>
                                            <th data-intro="Klik tombol yang tersedia dibawah ini untuk melihat, mengubah, menghapus perusahaan">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($companyPresence as $companyPresence)
                                            <tr>
                                                {{-- <td style="width: 5% !important;">{{ $company->id }}</td> --}}
                                                <td>{{ $companyPresence->information ?? '-' }}</td>
                                                <td>{{ $companyPresence->day ?? '-' }}</td>
                                                <td>{{ $companyPresence->start_time ?? '-' }}</td>
                                                <td>{{ $companyPresence->start_end ?? '-' }}</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="{{ route('superadmin.company.presence.create', $company->id) }}"
                                                            class="btn btn-info btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Tambah Jadwal" >
                                                            <i class="fa-solid fa-plus"></i>
                                                        </a>
                                            
                                                        <a href="{{ route('superadmin.company.presence.edit', $company->id) }}"
                                                            class="btn btn-info btn-sm px-3" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Edit Jadwal" >
                                                            <i class="fa-solid fa-edit"></i>
                                                        </a>
                                                        @include('layouts.components.delete', [
                                                            'route' => route('superadmin.company.presence.destroy', [
                                                                $companyPresence->id,
                                                            ]),
                                                            'title' => 'Hapus Lokasi dari Perusahaan',
                                                            'message' =>
                                                                'Apakah kamu yakin ingin menghapus lokasi dari perusahaan ini?',
                                                        ])
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
