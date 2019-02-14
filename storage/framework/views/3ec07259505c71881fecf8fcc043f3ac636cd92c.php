<?php $__env->startSection('content'); ?>
<section class="mt-10">
        <div class="container mx-auto bg-white shadow-md w-full max-w-sm">
            <div class="px-6 py-4 text-center">
                <h1 class="text-5xl mb-8">404 <small>Page not Found!</small></h1>
                <a href="/">Go Back</a>
            </div>
        </div>
    </section>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>