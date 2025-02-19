<?php
    $role = Auth::user()->role->code;
?>
<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="#"><img class="img-fluid for-light"
                    src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""><img class="img-fluid for-dark"
                    src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt=""></a>
            <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="#"><img class="img-fluid"
                    src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="#"><img class="img-fluid"
                                src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title" href="<?php echo e(route(str_replace('_', '', $role) . '.home')); ?>">
                            <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>">
                                </use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-home')); ?>">
                                </use>
                            </svg><span class="lan-3">Dashboard </span></a>
                    </li>
                    
                    <?php echo $__env->make('layouts.simple.sidebar_menu.' . $role, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->
<?php /**PATH D:\01 - Projects\04 TECHNOBIT DEV\arunika\resources\views/layouts/simple/sidebar.blade.php ENDPATH**/ ?>