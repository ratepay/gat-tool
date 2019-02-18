<?php $__env->startSection('content'); ?>
    <section class="mt-10">
        <div class="container mx-auto bg-white shadow-md w-full max-w-sm">
            <div class="px-6 py-4">
                <form class="form" method="POST" action="<?php echo e(url('/setup')); ?>" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>


                    <div class="mb-5">
                        <label for="name">App Name</label>
                        <input type="text" class="input focus:outline-none focus:shadow-outline" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                    </div>

                    <div class="mb-5">
                        <label for="logo">Logo</label>
                        <input type="file" class="input focus:outline-none focus:shadow-outline" name="logo">
                    </div>

                    <div>
                        <button type="submit" class="btn-blue">
                            Next Step
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>