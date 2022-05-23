<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>


                    <dir>
                        

                        <table class="table">
                            <a href="#">Users  List</a>
                            <thead style="border: solid 1px;">
                                <tr>
                                  <th scope="col">#</th>
                                  <th>  Full Name  </th>
                                  <th>  Email  </th>
                                  <th>  phone number  </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                  <th scope="row"></th>
                                      <td><?php echo e($user->name); ?></td>
                                      <td><?php echo e($user->email); ?></td>
                                      <td><?php echo e($user->phone); ?></td>
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </tbody>


                        </table>


                    </dir>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/fr_rest_api/resources/views/home.blade.php ENDPATH**/ ?>