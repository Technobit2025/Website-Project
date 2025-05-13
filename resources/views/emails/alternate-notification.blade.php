<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=650, initial-scale=1.0">
    <meta name="description" content="Notifikasi Izin - {{ env('APP_NAME') }}">
    <meta name="author" content="Arunika Prawira">
    <link rel="icon" href="{{ asset('assets/images/logo/logo-icon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo-icon.png') }}" type="image/x-icon">
    <title>Permohonan Pergantian Jadwal | {{ env('APP_NAME') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <style type="text/css">
        body {
            width: 650px;
            font-family: Rubik, 'Work Sans', 'Nunito', 'Poppins', sans-serif;
            background-color: #f6f7fb;
            display: block;
        }

        a {
            text-decoration: none;
        }

        span {
            font-size: 14px;
        }

        p {
            font-size: 13px;
            line-height: 1.7;
            letter-spacing: 0.7px;
            margin-top: 0;
        }

        .text-center {
            text-align: center
        }

        h6 {
            font-size: 16px;
            margin: 0 0 18px 0;
        }

        .logo-sec {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 650px;
        }

        .btn {
            padding: 10px;
            background-color: #f88125;
            color: #fff !important;
            display: inline-block;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            margin-top: 20px;
        }

        .detail-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 18px;
        }

        .detail-table td {
            padding: 6px 0;
            font-size: 14px;
        }

        .detail-table .label {
            font-weight: 600;
            color: #5a5a5a;
            width: 140px;
            vertical-align: top;
        }

        .detail-table .value {
            color: #222;
        }

        @media only screen and (max-width: 767px) {
            body {
                width: auto;
                margin: 20px auto;
            }

            .logo-sec {
                width: 500px !important;
            }
        }

        @media only screen and (max-width: 575px) {
            .logo-sec {
                width: 400px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .logo-sec {
                width: 300px !important;
            }
        }

        @media only screen and (max-width: 360px) {
            .logo-sec {
                width: 250px !important;
            }
        }
    </style>
</head>

<body style="margin: 30px auto;">
    <table style="width: 100%">
        <tbody>
            <tr>
                <td>
                    <table style="background-color: #f6f7fb; width: 100%">
                        <tbody>
                            <tr>
                                <td>
                                    <table style="margin: 0 auto; margin-bottom: 30px">
                                        <tbody>
                                            <tr class="logo-sec">
                                                <td>
                                                    <img class="img-fluid"
                                                        src="{{ asset('assets/images/logo/logo.png') }}"
                                                        style="width: 176px;" alt="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="margin: 0 auto; background-color: #fff; border-radius: 8px">
                        <tbody>
                            <tr>
                                <td style="padding: 30px">
                                    <h6 style="font-weight: 600; margin-bottom: 18px;">Pengajuan Permohonan Perizinan
                                    </h6>
                                    <p style="margin-bottom: 18px;">Berikut adalah detail permohonan izin yang diajukan
                                        oleh
                                    </p>
                                    <table class="detail-table">
                                        <tr>
                                            <td class="label">Nama Pemohon</td>
                                            <td class="value">: {{ $permit->employee->fullname }}</td>
                                        </tr>
                                        <tr>
                                            <td class="label">Jadwal Pemohon</td>
                                            <td class="value">
                                                :
                                                {{ formatDate($permit->employeeCompanySchedule->date, 'l, d F Y') . ' (' . $permit->employeeShift()?->name . ')' }}
                                            </td>
                                        </tr>
                                        @if ($permit->employee->user->email ?? false)
                                            <tr>
                                                <td class="label">Email Pemohon</td>
                                                <td class="value">: {{ $permit->employee->user->email }}</td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td class="label">Alasan</td>
                                            <td class="value">: {{ $permit->reason }}</td>
                                        </tr>
                                        @if ($permit->employee_is_confirmed)
                                            <tr>
                                                <td class="label">Status Konfirmasi</td>
                                                <td class="value">
                                                    @if ($permit->employee_is_confirmed == 'approved')
                                                        Disetujui
                                                    @elseif($permit->employee_is_confirmed == 'rejected')
                                                        Ditolak
                                                    @else
                                                        Menunggu
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    </table>

                                    @if ($permit->alternate)
                                        <div style="margin-top: 24px;">
                                            <h6 style="font-weight: 600; margin-bottom: 12px;">Detail
                                                Pengganti</h6>
                                            <table class="detail-table" style="margin-bottom: 0;">
                                                <tr>
                                                    <td class="label">Nama</td>
                                                    <td class="value">: {{ $permit->alternate->fullname }}</td>
                                                </tr>
                                                @if ($permit->alternateCompanySchedule)
                                                    <tr>
                                                        <td class="label">Jadwal Anda</td>
                                                        <td class="value">
                                                            :
                                                            {{ formatDate($permit->alternateCompanySchedule->date, 'l, d F Y') . ' (' . $permit->alternateShift()?->name . ')' }}
                                                        </td>
                                                    </tr>
                                                @endif
                                                @if ($permit->alternate_is_confirmed)
                                                    <tr>
                                                        <td class="label">Status Konfirmasi</td>
                                                        <td class="value">
                                                            @if ($permit->alternate_is_confirmed == 'approved')
                                                                Disetujui
                                                            @elseif($permit->alternate_is_confirmed == 'rejected')
                                                                Ditolak
                                                            @else
                                                                Menunggu
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endif
                                            </table>
                                        </div>
                                    @endif

                                    <div style="text-align: center;">
                                        <a class="btn" href="{{ url('/alternate/show/' . $permit->id) }}">Lihat Detail
                                            &amp; Setujui Izin</a>
                                    </div>
                                    <p style="margin-top: 24px; color: #888; font-size: 13px;">
                                        Email ini dikirim otomatis dari sistem, mohon untuk tidak membalas email ini.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="margin: 0 auto; margin-top: 30px">
                        <tbody>
                            <tr style="text-align: center">
                                <td>
                                    <p style="color: #999; margin-bottom: 0">Jl. Klayatan Gg.3 No.5, Sukun, Malang, Jawa
                                        Timur, Indonesia</p>
                                    <p style="color: #999; margin-bottom: 0">Dibuat oleh Technobit Indonesia</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
