@extends('layouts.simple.master')
@section('title', 'Performance')

@section('scripts')
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script>
        var chart = new ApexCharts(document.querySelector('#radialBar'), {
            chart: {
                height: 348,
                type: "radialBar"
            },
            colors: ['var(--bs-primary)', 'var(--bs-danger)', 'var(--bs-info)'],
            plotOptions: {
                radialBar: {
                    size: 185,
                    hollow: {
                        size: "40%"
                    },
                    track: {
                        margin: 10,
                        background: "#f0f0f0"
                    },
                    dataLabels: {
                        name: {
                            fontSize: "2rem",
                            fontFamily: "Arial, sans-serif"
                        },
                        value: {
                            fontSize: "1.2rem",
                            color: "#6c757d",
                            fontFamily: "Arial, sans-serif"
                        },
                        total: {
                            show: true,
                            fontWeight: 400,
                            fontSize: "1.3rem",
                            color: "#6c757d",
                            label: "Memory",
                            formatter: function() {
                                return {{ $performanceData['memoryUsage'] }} + "%";
                            }
                        }
                    }
                }
            },
            grid: {
                borderColor: "#e9ecef",
                padding: {
                    top: -25,
                    bottom: -20
                }
            },
            legend: {
                show: true,
                position: "bottom",
                labels: {
                    colors: "#6c757d", // Ganti dengan warna default jika `t` tidak tersedia
                    useSeriesColors: false
                }
            },
            stroke: {
                lineCap: "round"
            },
            series: [{{ $performanceData['cpuUsage'] }}, {{ $performanceData['diskUsage'] }},
                {{ $performanceData['memoryUsage'] }}
            ],
            labels: ["CPU", "Disk", "Memory"]
        });

        // Render chart
        chart.render();
    </script>
@endsection

@section('main_content')
    <div class="container-fluid py-3">
        <div class="row mb-6">
            <div class="col-12 col-lg-6 mb-3">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Statistics</h5>
                    </div>
                    <div class="card-body">
                        <div id="radialBar"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="mb-3">
                    <div class="card card-border-shadow-primary h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                    <span class="avatar-initial rounded text-primary"><i
                                            class="fa-solid fa-microchip"></i></span>
                                </div>
                                <h4 class="mb-0">{{ $performanceData['cpuUsage'] }}%</h4>
                            </div>
                            <p class="m-0">CPU Usage</p>
                            <small class="mb-2 opacity-50">{{ $performanceData['systemInfo']['cpu'] }}</small>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="card card-border-shadow-danger h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                    <span class="avatar-initial rounded text-danger"><i
                                            class="fa-solid fa-hard-drive"></i></span>
                                </div>
                                <h4 class="mb-0">{{ $performanceData['diskUsage'] }}%</h4>
                            </div>
                            <p class="mb-2">Disk Usage</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="card card-border-shadow-info h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                    <span class="avatar-initial rounded text-info"><i class="fa-solid fa-memory"></i></span>
                                </div>
                                <h4 class="mb-0">{{ $performanceData['memoryUsage'] }}%</h4>
                            </div>
                            <p class="m-0">Memory Usage</p>
                            <small class="mb-2 opacity-50">{{ $performanceData['systemInfo']['memory'] }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
