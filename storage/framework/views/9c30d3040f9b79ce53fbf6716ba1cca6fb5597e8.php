<?php if(session()->has('success')): ?>
    <section class="container mx-auto mt-10">
        <div class="bg-teal-lightest border-t-4 border-teal rounded-b text-teal-darkest px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                <p class="font-bold">Success</p>
                <p class="text-sm"><?php echo e(session()->get('success')); ?></p>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php if(session()->has('error')): ?>
    <section class="container mx-auto mt-10 w-full max-w-sm">
        <div class="bg-red-lightest border-t-4 border-red rounded-b text-teal-darkest px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div>
                    <p class="font-bold">Something went wrong.</p>
                    <p class="font-bold"><?php echo e(session()->get('error')); ?></p>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php if(isset($errors) && count($errors) > 0): ?>
    <section class="container mx-auto mt-10 w-full max-w-sm">
        <div class="bg-red-lightest border-t-4 border-red rounded-b text-teal-darkest px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div>
                    <p class="font-bold">Something went wrong.</p>
                    <ul class="mt-3">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>