<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Users</h2>
    <br>
    <!-- Table, ki objavi vse uporabnike -->
    <table class="table">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        <!-- Loop, ki gre skozi vse uporabnike in po vsakem naredi nov row -->
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th><?php echo e($user->name); ?></th>
                <th><?php echo e($user->lastname); ?></th>
            <th><a href="/user/<?php echo e($user->id); ?>"> <?php echo e($user->email); ?></a></th>

            </tr> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>