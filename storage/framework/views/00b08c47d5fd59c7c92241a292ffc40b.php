<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo" href=""><img class="img-fluid for-light"
                                    src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt="looginpage"><img
                                    class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form" method="POST" action="<?php echo e(route('login.login')); ?>">
                                <?php echo csrf_field(); ?>
                                <h4>Sign in to account</h4>
                                <p>Enter your email & password to login</p>

                                <div class="form-group">
                                    <label class="col-form-label">Email Address </label>
                                    <input id="email" type="email"
                                        class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                                        value="superadmin@gmail.com" required autocomplete="email" autofocus
                                        placeholder="test@gmail.com">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input id="password" type="password"
                                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"
                                            value="superadmin" required autocomplete="current-password"
                                            placeholder="*********">
                                        <div class="show-hide"><span class="show"> </span></div>
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="form-check">
                                    </div>
                                    
                                    <div class="text-end">
                                        <button class="btn btn-primary btn-block w-100 mt-3 spinner-btn" type="submit">Sign
                                            in</button>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $('.btn.spinner-btn').click(function(event) {
            event.preventDefault();

            var $btn = $(this);
            $btn.removeClass('btn-block');
            $btn.prop('disabled', true);
            $btn.append(
                '<span class="spinner-border spinner-border-sm spinner_loader" role="status" aria-hidden="true"></span>'
            );

            $(this).parents('form')[0].submit();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.authentication.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\01 - Projects\04 TECHNOBIT DEV\arunika\resources\views/auth/login.blade.php ENDPATH**/ ?>