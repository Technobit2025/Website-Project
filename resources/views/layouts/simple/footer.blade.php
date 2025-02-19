@switch(Route::currentRouteName())
    @case('admin.footer_dark')
        <footer class="footer footer-dark">
        @break
    
    @case('admin.footer_fixed')
        <footer class="footer footer-fix">
        @break

    @default
       <footer class="footer">
@endswitch
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright <span class="year-update"> </span> © Cuba Theme By Pixelstrap </p>
            </div>
        </div>
    </div>
</footer>
