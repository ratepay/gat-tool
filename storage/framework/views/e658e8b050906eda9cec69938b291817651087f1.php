<?php $__env->startSection('content'); ?>
<section class="mt-10">
        <div class="container mx-auto bg-white shadow-md w-full max-w-sm">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-1">Add new vote</div>
                <form action="/presentations/<?php echo e($presentation->id); ?>/votes" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <br />
                    <div class="flex mb-4">
                        <div>
                            <input class="hidden" type="radio" name="review" value="awesome" id="awesome"/>
                            <label for="awesome"> <img class="responsive" src="/images/awesomepic.png" alt=""
                                                    id="awesomepic" onclick="change_image('awesomepic')"> </label>
                        </div>
                        <div>
                            <input class="hidden" type="radio" name="review" value="good" id="good"/>
                            <label for="good"> <img class="responsive" src="/images/goodpic.png" alt=""
                                                    id="goodpic" onclick="change_image('goodpic')"/> </label>
                        </div>
                        <div>
                            <input class="hidden" type="radio" name="review" value="average" id="average"/>
                            <label for="average"> <img class="responsive" src="/images/averagepic.png" alt=""
                                                    id="averagepic" onclick="change_image('averagepic')"/> </label>
                        </div>
                        <div>
                            <input class="hidden" type="radio" name="review" value="bad" id="bad"/>
                            <label for="bad"> <img class="responsive" src="/images/badpic.png" alt=""
                                                    id="badpic" onclick="change_image('badpic')"> </label>
                        </div>
                        <div>
                            <input class="hidden" type="radio" name="review" value="horrible" id="horrible"/>
                            <label for="horrible"> <img class="responsive" src="/images/horriblepic.png" alt=""
                                                        id="horriblepic" onclick="change_image('horriblepic')"/> </label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="feedback">Add some nice words</label>
                        <textarea class="shadow appearance-none border w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none" name="feedback" rows="3"></textarea>
                    </div>
                    <div>
                        <input type="hidden" name="presentation_id" value="<?php echo e($presentation->id); ?>">
                        <button type="submit" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 w-full mb-5">Save</button>
                        <a class="text-grey-darkest" href="/">Back to List</a>
                    </div>
                </form>
            </div>
        </div>
    </section>    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
    function change_image(id){
        var arraypic=['awesomepic','goodpic','averagepic', 'badpic', 'horriblepic'];
        for (var i=0; i<arraypic.length; i++) {
            document.getElementById(arraypic[i]).src='/images/'+arraypic[i]+'.png';
        }
        document.getElementById(id).src='/images/'+id+'_chosen.png';
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>