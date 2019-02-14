<?php $__env->startSection('content'); ?>
<section class="mt-10">
    <div class="container mx-auto">
        <div class="mb-5 text-right">
            <a class="no-underline text-white bg-blue py-2 px-4 border hover:bg-blue-light mr-1" href="/presentations/create">New Presentation</a>
        </div>
        <table class="table-auto rp-table bg-white shadow-md text-left">
            <thead>
                <tr class="uppercase font-bold">
                    <th width="25%">Title</th>
                    <th width="15%">Speaker</th>
                    <th width="10%">Date</th>
                    <th width="30%">Description</th>
                    <th class="text-center" width="20%">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if($presentations->count() < 1): ?>
                    <tr>
                        <td colspan="5"> No presentations listet!</td>
                    </tr>
                <?php else: ?>
                    <?php $__currentLoopData = $presentations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $presentation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($presentation->title); ?></td>
                            <td><?php echo e($presentation->speaker ? $presentation->speaker->fullName() : 'Name Missing.'); ?></td>
                            <td><?php echo e($presentation->date->format('d.m.Y')); ?></td>
                            <td><?php echo e($presentation->description); ?></td>
                            <td class="text-center">
                                <small><a class="no-underline bg-transparent py-1 px-2 border hover:bg-blue-light mr-1 text-blue hover:text-white" href="/presentations/<?php echo e($presentation->id); ?>/votes/create">Vote</a></small>
                                <small><a class="no-underline bg-transparent py-1 px-2 border hover:bg-blue-light text-blue hover:text-white" href="/presentations/<?php echo e($presentation->id); ?>/votes">Results</a></small>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="mt-5">
            <?php echo e($presentations->links()); ?>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>