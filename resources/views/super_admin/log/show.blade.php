@extends('layouts.simple.master')

@section('title', 'Log ' . $filename)

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables1.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.bootstrap5.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                language: {
                    url: '{{ asset('assets/js/datatable/datatable-extension/i18n/indonesian.json') }}'
                }
            });
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Log ' . $filename])
    </div>
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="m-0">Log {{ $filename }}</h5>
            </div>
            <div class="card-body">
                <div class="accordion dark-accordion" id="simpleaccordion">
                    @foreach ($logs as $index => $log)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-{{ $index }}">
                                <button class="accordion-button accordion-light-primary txt-primary active collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $index }}"
                                    aria-expanded="true" aria-controls="collapse-{{ $index }}">
                                    @if ($log['env'] == 'local')
                                        <span class="badge badge-primary">LOCAL</span>
                                    @else
                                        <span class="badge badge-success">PRODUCTION</span>
                                    @endif
                                    @if ($log['type'] == 'INFO')
                                        <span class="badge badge-info">INFO</span>
                                    @elseif ($log['type'] == 'ERROR')
                                        <span class="badge badge-danger">ERROR</span>
                                    @elseif ($log['type'] == 'WARNING')
                                        <span class="badge badge-warning">WARNING</span>
                                    @endif
                                    <p class="ms-3 my-0">
                                        {{ $log['timestamp'] }}
                                    </p>
                                    <i class="svg-color" data-feather="chevron-down"></i>
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse-{{ $index }}">
                                <div class="accordion-body">
                                    <pre>{{ $log['message'] }}</pre>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- @foreach ($logs as $index => $log)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-{{ $index }}">
                                <button class="accordion-button collapsed accordion-light-primary txt-primary gap-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-{{ $index }}" aria-expanded="false"
                                    aria-controls="collapse-{{ $index }}">
                                    @if ($log['env'] == 'local')
                                        <span class="badge bg-label-primary">LOCAL</span>
                                    @else
                                        <span class="badge bg-label-success">PRODUCTION</span>
                                    @endif
                                    @if ($log['type'] == 'INFO')
                                        <span class="badge bg-label-info">INFO</span>
                                    @elseif ($log['type'] == 'ERROR')
                                        <span class="badge bg-label-danger">ERROR</span>
                                    @endif
                                    {{ $log['timestamp'] }}
                                </button>
                            </h2>
                            <div id="collapse-{{ $index }}" class="accordion-collapse collapse"
                                aria-labelledby="heading-{{ $index }}" data-bs-parent="#logAccordion">
                                <div class="accordion-body">
                                    <pre>{{ $log['message'] }}</pre>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>
@endsection
