 <!-- latest jquery-->
 <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
 <!-- Bootstrap js-->
 <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
 <!-- feather icon js-->
 <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
 <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
 <!-- scrollbar js-->
 <!-- Sidebar jquery-->
 <script src="{{ asset('assets/js/config.js') }}"></script>
 <!-- Plugins JS start-->
 @yield('scripts')
 <!-- Plugins JS Ends-->
 <!-- Theme js-->
 <script src="{{ asset('assets/js/script.js') }}"></script>
 <script src="{{ asset('assets/js/script1.js') }}"></script>
 <script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>
 <!-- Theme js-->
 <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
 <script>
     if (localStorage.getItem('primary') == null) {
         localStorage.setItem('primary', '#{{ env('APP_COLOR') }}');
         localStorage.setItem('secondary', '#{{ env('APP_COLOR') }}');
     }
 </script>
