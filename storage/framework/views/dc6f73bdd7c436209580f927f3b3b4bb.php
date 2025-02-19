<!DOCTYPE html>
<html lang="en" <?php if(Route::currentRouteName() == 'admin.rtl_layout'): ?> dir="rtl" <?php endif; ?>>

<head>
    <?php echo $__env->make('layouts.simple.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('layouts.simple.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>


    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- loader ends-->

    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <?php echo $__env->make('layouts.simple.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <?php echo $__env->make('layouts.simple.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <div class="page-body">
                <?php echo $__env->yieldContent('main_content'); ?>
            </div>
            
            <?php echo $__env->make('layouts.simple.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
    <?php echo $__env->make('layouts.simple.scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
</body>

</html>
<?php /**PATH D:\01 - Projects\04 TECHNOBIT DEV\arunika\resources\views/layouts/simple/master.blade.php ENDPATH**/ ?>