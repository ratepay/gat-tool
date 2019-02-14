<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Results</div>

                    <table width="100%">

                        <?php if(!empty($results)): ?>

                        <tr>
                            <td align="center"> <img class="responsive" src="/images/awesomepic.png" alt=""/> </td>
                            <td align="center"> <img class="responsive" src="/images/goodpic.png" alt=""/> </td>
                            <td align="center"> <img class="responsive" src="/images/averagepic.png" alt=""/> </th>
                            <td align="center"> <img class="responsive" src="/images/badpic.png" alt=""/> </td>
                            <td align="center"> <img class="responsive" src="/images/horriblepic.png" alt=""/> </td>
                        </tr>

                        <tr>
                            <td align="center"> <?php echo e($results->awesome); ?> </td>
                            <td align="center">  <?php echo e($results->good); ?> </td>
                            <td align="center">  <?php echo e($results->average); ?> </td>
                            <td align="center">  <?php echo e($results->bad); ?> </td>
                            <td align="center">  <?php echo e($results->horrible); ?> </td>
                        </tr>
                    </table>

                    <div style="width: 90%; margin-left:5%; margin-top: 10px" >
                            <table class="table">
                                <?php if(count($results)>=1): ?>
                                <tr>
                                    <th align="center"> Reviews</th>
                                </tr>
                                <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td> <?php echo e($item->review); ?> </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                    <td> Es sind noch keine Reviews vorhanden! </td>
                                    </tr>
                                <?php endif; ?>
                            </table>

                        <?php else: ?>
                            Leider ist noch kein Voting vorhaden!
                        <?php endif; ?>
                    </div>

                    <div class="text-center">
                        <?php echo e($reviews->appends(['presentation' => Request::get('presentation')])->links()); ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>