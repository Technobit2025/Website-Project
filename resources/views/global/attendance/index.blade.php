@extends('layouts.simple.master')

@section('title', 'Employee Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/instascan/instascan.min.js') }}"></script>
    <script>
        function updateCurrentTime() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            document.getElementById('currentTime').textContent = `${hours}:${minutes}:${seconds}`;
        }
        document.addEventListener('DOMContentLoaded', function() {
            updateCurrentTime();
            setInterval(updateCurrentTime, 1000);
        });
    </script>
@endsection

@section('main_content')
    <div class="container mt-5 d-flex justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="col-md-7 col-lg-6">
            @if ($isEmployee)
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-gradient-primary text-white rounded-top-4"
                        style="background: linear-gradient(90deg, #4e73df 0%, #1cc88a 100%);">
                        <div class="d-flex flex-column align-items-center">
                            <h2 class="mb-1 fw-bold">Presensi Karyawan</h2>
                            <div class="fs-5 mt-2">
                                <span id="greeting"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-5 py-4">
                        @if (!$isHaveSchedule)
                            <div
                                class="alert alert-warning d-flex flex-column align-items-center py-4 rounded-3 shadow-sm text-center">
                                <i class="fa-solid fa-coffee fa-2x mb-2 text-white"></i>
                                <h4 class="fw-bold mb-1">Kamu Libur</h4>
                                <p class="mb-0">Tidak ada jadwal kerja hari ini.<br>Manfaatkan waktu untuk beristirahat!
                                </p>
                            </div>
                        @elseif (!$isCheckedIn)
                            <div class="mb-4">
                            </div>
                            <form method="POST" class="d-flex flex-column gap-3 align-items-center">
                                @csrf
                                <div class="mb-3 text-center">
                                    <h2 id="currentTime"></h2>
                                </div>
                                <button class="btn btn-lg btn-success px-5 shadow" style="font-size: 1.2rem;"
                                    formaction="{{ route('attendance.checkIn') }}">
                                    <i class="fa-solid fa-sign-in-alt me-2"></i>Check-In
                                </button>
                                <button class="btn btn-lg btn-outline-danger px-5"
                                    formaction="{{ route('attendance.checkOut') }}" disabled>
                                    <i class="fa-solid fa-sign-out-alt me-2"></i>Check-Out
                                </button>
                            </form>
                        @elseif (!$isCheckedOut)
                            <div class="mb-3 text-center">
                                <h2 id="currentTime"></h2>
                            </div>
                            <form method="POST" class="d-flex flex-column gap-3 align-items-center">
                                @csrf
                                <button class="btn btn-lg btn-outline-success px-5"
                                    formaction="{{ route('attendance.checkIn') }}" disabled>
                                    <i class="fa-solid fa-sign-in-alt me-2"></i>Check-In
                                </button>
                                <button class="btn btn-lg btn-danger px-5 shadow"
                                    formaction="{{ route('attendance.checkOut') }}">
                                    <i class="fa-solid fa-sign-out-alt me-2"></i>Check-Out
                                </button>
                            </form>
                        @else
                            <div
                                class="alert alert-success d-flex flex-column align-items-center py-4 rounded-3 shadow-sm text-center">
                                <i class="fa-solid fa-check-circle fa-2x mb-2 text-success"></i>
                                <h4 class="fw-bold mb-1">Tugas Selesai!</h4>
                                <p class="mb-0">Presensi hari ini sudah selesai.<br>Terima kasih atas kerja kerasmu! 💪
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            @else
                <div class="card border-0 mb-4">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-user-slash fa-2x mb-3 text-danger"></i>
                        <h4 class="fw-bold mb-2">Kamu Bukan Karyawan</h4>
                        <p class="mb-0">Akses presensi hanya tersedia untuk karyawan.<br>Silakan hubungi admin jika
                            kamu merasa ini adalah kesalahan.</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <script>
        // Greeting based on time
        function getGreeting() {
            const now = new Date();
            const hour = now.getHours();
            if (hour < 11) return "Selamat pagi 👋";
            if (hour < 15) return "Selamat siang ☀️";
            if (hour < 18) return "Selamat sore 🌤️";
            return "Selamat malam 🌙";
        }
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('greeting').textContent = getGreeting();
        });
    </script>
@endsection
