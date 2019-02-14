<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Presentations</div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">

                                <tr>
                                    <th width="10%">  </th>
                                    <th> Title </th>
                                    <th> Speaker </th>
                                    <th> Date </th>
                                    <th> Description </th>
                                    <th width="10%">  </th>

                                </tr>
                           <?php $__currentLoopData = $listing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                               <tr>
                                   <td align="left"> <a class="btn btn-primary" href="/evaluate?presentation=<?php echo e($item->id); ?>">
                                           Vote
                                       </a>
                                   </td>
                                   <td> <?php echo e($item->title); ?> </td>
                                   <td>  <?php echo e($item->first_name); ?> <?php echo e($item->name); ?> </td>
                                   <td>  <?php echo e(\Carbon\Carbon::parse($item->date)->format('d.m.Y')); ?> </td>
                                   <td width="200" style="overflow: hidden;">  <?php echo e($item->description); ?> </td>
                                   <td align="left"> <a class="btn btn-primary" href="/results?presentation=<?php echo e($item->id); ?>">
                                           Results
                                       </a>
                                   </td>
                               </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </table>
                        </div>

                        <div class="text-center">
                            <?php echo e($listing->appends(['presentation' => Request::get('presentation')])->links()); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>