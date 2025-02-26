@extends('layouts.simple.master')

@section('title', 'Database SQL')

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#sqlForm').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: '/superadmin/database/sql',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        sql: $('#sql').val()
                    },
                    success: function(data) {
                        console.log(data); // pastikan respons diterima
                        $('#display').removeClass('alert-danger');
                        $('#display').addClass('alert-success');
                        if (data.formatted) {
                            $('#display').val(data.formatted);
                        } else {
                            $('#display').val(data.message || 'Terjadi kesalahan.');
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        $('#display').removeClass('alert-success');
                        $('#display').addClass('alert-danger');
                        $('#display').val('Terjadi kesalahan: ' + xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Database SQL'])
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                <h5 class="card-title">SQL</h5>
            </div>
            <div class="card-body pt-4">
                <form id="sqlForm">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-10">
                            <textarea class="form-control" name="sql" id="sql" cols="30" rows="10"
                                placeholder="Masukkan query SQL"></textarea>
                        </div>
                        <div class="col-12 col-lg-2">
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </form>
                <textarea id="display" cols="30" rows="10" class="form-control mt-4"
                    placeholder="Hasil akan ditampilkan di sini" readonly></textarea>
            </div>
        </div>
    </div>
@endsection
