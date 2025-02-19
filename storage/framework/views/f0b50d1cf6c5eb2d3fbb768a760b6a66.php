 <!-- latest jquery-->
 <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
 <!-- Bootstrap js-->
 <script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
 <!-- feather icon js-->
 <script src="<?php echo e(asset('assets/js/icons/feather-icon/feather.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/icons/feather-icon/feather-icon.js')); ?>"></script>
 <!-- scrollbar js-->
 <script src="<?php echo e(asset('assets/js/scrollbar/simplebar.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/scrollbar/custom.js')); ?>"></script>
 <!-- Sidebar jquery-->
 <script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
 <!-- Plugins JS start-->
 <script src="<?php echo e(asset('assets/js/sidebar-menu.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/sidebar-pin.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/slick/slick.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/slick/slick.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/header-slick.js')); ?>"></script>
 <?php echo $__env->yieldContent('scripts'); ?>
 <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/script1.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/theme-customizer/customizer.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/toastr.min.js')); ?>"></script>

<!-- Status Update-->
 <script>
    $(document).ready(function() {
        $(document).on('change', '.toggle-status', function() {
            
            let status = $(this).prop('checked') ? 1 : 0;
            let url = $(this).data('route');
            let clickedToggle = $(this);
            $.ajax({
                type: "PUT",
                url: url,
                data: {
                    status: status,
                    _token: '<?php echo e(csrf_token()); ?>',
                },
                success: function(data) {
                    clickedToggle.prop('checked', status);
                    toastr.success("Status Updated Successfully");
                },
                error: function(xhr, status, error) {
                    console.log(error)
                }
            });
        });
    });
</script>
<?php /**PATH D:\01 - Projects\04 TECHNOBIT DEV\arunika\resources\views/layouts/simple/scripts.blade.php ENDPATH**/ ?>