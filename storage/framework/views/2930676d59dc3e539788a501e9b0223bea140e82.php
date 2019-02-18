<?php $__env->startSection('content'); ?>
<section class="mt-10">
    <div class="container mx-auto bg-white shadow-md w-full max-w-sm">
        <div class="px-6 py-4">
            <form class="form" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="mb-5">
                    <label for="email">E-Mail</label>
                    <input type="email" class="input focus:outline-none focus:shadow-outline" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                </div>

                <div class="mb-5">
                    <label for="password">Password</label>
                    <input type="password" class="input focus:outline-none focus:shadow-outline" name="password">
                </div>

                <div>
                    <button type="submit" class="btn-blue">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>