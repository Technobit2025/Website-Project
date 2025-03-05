<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arunika adalah perusahaan yang bergerak di bidang penyediaan tenaga kerja">
    <meta name="keywords" content="Arunika, Tenaga Kerja, Penyedia Tenaga Kerja, Jasa Tenaga Kerja">
    <meta name="author" content="Arunika">
    <link rel="icon" href="{{ asset('assets/images/logo/logo-icon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo-icon.png') }}" type="image/x-icon">
    <title>@yield('title') | {{ ucwords(config('app.name')) }}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    @include('layouts.authentication.css')
  </head>
  <body>
    @yield('main_content')
    <script>
      var baseUrl = "{{ asset('') }}";
      document.addEventListener('DOMContentLoaded', function() {
          document.querySelector('.sidebar-panel-main').style.display = 'none';
      });
  </script>
    @include('layouts.authentication.scripts')
    @include('layouts.components.alert')
</body>

</html>
