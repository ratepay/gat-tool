<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title> Presentations</title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <style>
        .btn{
            color: #f2c700
        }
        .btn-primary {
            background-color: #1d4679;
        }
        .btn-primary:hover {
            background-color: #d1c08ea0;
        }
        .btn-primary:hover {
            color: #000000;
        }

         .responsive {
             width: 90%;
             padding: 1rem;
         }

        .pagination > .active > a,
        .pagination > .active > a:focus,
        .pagination > .active > a:hover,
        .pagination > .active > span,
        .pagination > .active > span:focus,
        .pagination > .active > span:hover {
            background-color: #1d4679;
            color: #f2c700;
         }

        .pagination > .disabled > a,
        .pagination > .disabled > a:focus,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > span,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > span:hover {
            background-color: #d1c08ea0;
            color: #1d4679;
        }

        .pagination > li > a, .pagination > li > span{
            color: #1d4679;
        }

        .pagination > li > a, .pagination > li > span:hover{
            color: #1d4679;
        }

        @media  only screen and (min-width: 1200px) {
            .responsive {
                width: auto;
            }
        }

        @media  only screen and (max-width: 1190px) {
            .responsive {
                width: 100%;
            }
        }

    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        Home
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo e(route('presentations')); ?>">Presentations</a></li>
                        <li><a href="<?php echo e(route('add')); ?>">Add Presentation</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
