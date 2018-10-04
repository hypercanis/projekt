<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User information</div>

                <div class="card-body">
                    <p>Name: <?php echo e($user->name); ?></p>
                    <p>Lastname: <?php echo e($user->lastname); ?></p>
                    <p>E-mail: <?php echo e($user->email); ?></p>
                    <p>Pošta:</p>
                    <p>Vloga:</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="btn btn-default">Edit</div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>