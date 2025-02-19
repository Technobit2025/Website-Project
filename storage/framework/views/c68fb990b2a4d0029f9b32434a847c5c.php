

<?php $__env->startSection('title', 'Human Resource Dashboard'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/prism.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Employee Data</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb" id="breadcrumb">
                        <li class="breadcrumb-item"><a href=""> <svg class="stroke-icon">
                                    <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                                </svg></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Employees</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="employeeTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($employee->id); ?></td>
                                            <td><?php echo e($employee->fullname); ?></td>
                                            <td><?php echo e($employee->user->email); ?></td>
                                            <td><?php echo e($employee->user->role->name); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('humanresource.employee.show', $employee->id)); ?>"
                                                    class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                                <a href="<?php echo e(route('humanresource.employee.edit', $employee->id)); ?>"
                                                    class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                <form action="<?php echo e(route('humanresource.employee.destroy', $employee->id)); ?>" method="POST"
                                                    style="display:inline-block;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var breadcrumb = document.getElementById('breadcrumb');
            var pathArray = window.location.pathname.split('/').filter(function(el) {
                return el.length != 0;
            });

            pathArray.forEach(function(path, index) {
                if (index === 0) return; // Skip the first link
                var li = document.createElement('li');
                li.classList.add('breadcrumb-item');
                if (index === pathArray.length - 1) {
                    li.classList.add('active');
                    li.textContent = path.charAt(0).toUpperCase() + path.slice(1);
                } else {
                    var a = document.createElement('a');
                    a.href = '/' + pathArray.slice(0, index + 1).join('/');
                    a.textContent = path.charAt(0).toUpperCase() + path.slice(1);
                    li.appendChild(a);
                }
                breadcrumb.appendChild(li);
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\01 - Projects\04 TECHNOBIT DEV\arunika\resources\views/human_resource/employee/index.blade.php ENDPATH**/ ?>