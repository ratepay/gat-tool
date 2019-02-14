<?php $__env->startSection('content'); ?>
<section class="mt-10">
    <div class="container rp-table-votes mx-auto w-full max-w-sm mb-8">
        <table class="table-auto bg-white shadow-md text-center">
            <thead>
                <tr class="uppercase font-bold">
                    <th>
                        <img class="responsive" src="/images/awesomepic.png" alt="Awesome">
                    </th>
                    <th>
                        <img class="responsive" src="/images/goodpic.png" alt="Awesome">
                    </th>
                    <th>
                        <img class="responsive" src="/images/averagepic.png" alt="Awesome">
                    </th>
                    <th>
                        <img class="responsive" src="/images/badpic.png" alt="Awesome">
                    </th>
                    <th>
                        <img class="responsive" src="/images/horriblepic.png" alt="Awesome">
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php if($presentation->votes): ?>
                    <tr>
                        <td class="bold text-4xl"><?php echo e($presentation->votes->awesome); ?></td>
                        <td class="bold text-4xl"><?php echo e($presentation->votes->good); ?></td>
                        <td class="bold text-4xl"><?php echo e($presentation->votes->average); ?></td>
                        <td class="bold text-4xl"><?php echo e($presentation->votes->bad); ?></td>
                        <td class="bold text-4xl"><?php echo e($presentation->votes->horrible); ?></td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td colspan="5">
                            No votes given!
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <br />
        <div class="font-bold text-xl mb-2">Feedback <small><a class="text-grey-darkest" href="/">Back to List</a></small></div>
        <?php $__currentLoopData = $presentation->feedback; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="container mx-auto bg-white shadow-md w-full p-5">
                <?php echo nl2br($feedback->review); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>