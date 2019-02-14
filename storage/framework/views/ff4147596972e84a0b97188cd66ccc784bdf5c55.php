<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>RatePAY Give &amp; Take Voting Tool</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app" class="mt-10">
        <header>
            <a class="no-underline text-grey-darkest" href="/">
                <div class="container mx-auto text-center">
                    <img class="rp-logo" src="/images/RatePAY.svg" alt="RatePAY Logo">
                    <h1 class="text-5xl subline">Give & Take</h1>
                </div>
            </a>
        </header>

        <?php echo $__env->make('partials.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(mix('js/app.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
