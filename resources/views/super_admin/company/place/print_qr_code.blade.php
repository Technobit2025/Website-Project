<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qr Code {{ $companyPlace->company->name }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    @vite(['public/assets/scss/style.scss'])
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <div class="px-3 py-5">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div class="text-center d-flex align-items-center gap-2">
                    @if ($companyPlace->company->logo)
                        <img src="{{ $companyPlace->company->logo }}" alt="{{ $companyPlace->company->name }}"
                            class="img-fluid rounded" style="height: 50px; margin-bottom: 15px;">
                    @endif
                    <h5 class="fw-semibold">{{ $companyPlace->company->name }}</h5>
                </div>
                <div class="text-end">
                    <p>{{ $companyPlace->company->address }}</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-12 text-center">
                <div class="p-3">
                    {{ generateQrCode($companyPlace) }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="font-weight-bold">{{ $companyPlace->name }}</h3>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>
