<?php if($paginator->hasPages()): ?>
    <ul class="flex list-reset">
        
        <?php if($paginator->onFirstPage()): ?>
            <li class="disabled"><span class="block bg-white text-blue border-r border-grey-light px-3 py-2">&laquo;</span></li>
        <?php else: ?>
            <li><a class="block bg-white hover:text-white hover:bg-blue text-blue border-r border-grey-light px-3 py-2 no-underline" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev">&laquo;</a></li>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <li class="disabled"><span><?php echo e($element); ?></span></li>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li><span class="block text-white bg-blue border-r border-blue px-3 py-2"><?php echo e($page); ?></span></li>
                    <?php else: ?>
                        <li><a class="block bg-white hover:text-white hover:bg-blue text-blue border-r border-grey-light px-3 py-2" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <li><a class="block bg-white hover:text-white hover:bg-blue text-blue border-r border-grey-light px-3 py-2 no-underline no-underline" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next">&raquo;</a></li>
        <?php else: ?>
            <li class="disabled"><span class="block bg-white text-blue border-r border-grey-light px-3 py-2">&raquo;</span></li>
        <?php endif; ?>
    </ul>
<?php endif; ?>
