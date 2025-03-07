<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Verifikasi OTP - Arunika Prawiratama</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: #333;
            background-color: #fff;
        }

        .container {
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
            padding: 20px;
            border-radius: 5px;
            line-height: 1.8;
            background: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .header img {
            width: 150px;
        }

        .header h2 {
            font-size: 1.4em;
            color: #000;
            font-weight: 600;
        }

        .content {
            text-align: left;
            padding: 20px 0;
        }

        .otp {
            background: linear-gradient(to right, #00bc69 0, #00bc88 50%, #00bca8 100%);
            margin: 10px auto;
            width: max-content;
            padding: 10px 20px;
            color: #fff;
            font-size: 1.5em;
            font-weight: bold;
            border-radius: 4px;
        }

        .footer {
            color: #aaa;
            font-size: 0.9em;
            text-align: center;
            border-top: 1px solid #eee;
            padding-top: 10px;
            margin-top: 20px;
        }

        .email-info {
            color: #666666;
            font-weight: 400;
            font-size: 13px;
            line-height: 18px;
            padding-bottom: 6px;
        }

        .email-info a {
            text-decoration: none;
            color: #00bc69;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="https://app.arunika.com/assets/images/logo/logo.png" alt="Arunika Prawiratama" />
            <h2>Verifikasi Identitas Anda</h2>
        </div>

        <div class="content">
            <p><strong>Kepada {{ $name }},</strong></p>
            <p>
                Kami telah menerima permintaan masuk ke akun <strong>Arunika Prawiratama</strong>.
                Demi keamanan, silakan verifikasi identitas Anda dengan memasukkan Kode OTP berikut:
            </p>

            <h2 class="otp">{{ $otp }}</h2>

            <p>
                <strong>Catatan:</strong> Kode OTP ini hanya berlaku selama <strong>5 menit</strong>.
                Jangan berikan kode ini kepada siapa pun demi keamanan akun Anda.
            </p>

            <p>
                Jika Anda tidak merasa melakukan permintaan ini, silakan abaikan email ini.
            </p>

            <p>
                <strong>Terima kasih telah menggunakan layanan kami.</strong>
            </p>

            <p>
                Salam,<br />
                <strong>PT. Arunika Prawiratama Indonesia</strong>
            </p>
        </div>

        <div class="footer">
            <p>Email ini tidak dapat menerima balasan.</p>
            <p>
                Untuk informasi lebih lanjut tentang <strong>Arunika Prawiratama</strong> dan akun Anda,
                silakan kunjungi <a href="https://arunikapratama.com">arunikapratama.com</a>
            </p>
        </div>
    </div>

    <div style="text-align: center">
        <div class="email-info">
            <span>
                Email ini dikirim ke
                <a href="mailto:{$email}">{{ $email }}</a>
            </span>
        </div>
        <div class="email-info">
            <a href="https://arunikapratama.com">PT. Arunika Prawiratama Indonesia</a> |
            23 Jl. Klayatan Gg. 3, Indonesia
        </div>
        <div class="email-info">
            &copy; 2024 PT. Arunika Prawiratama Indonesia. Hak cipta dilindungi.
        </div>
    </div>
</body>

</html>