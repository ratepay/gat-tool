        <!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RatePAY Give & Take</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #1d2742ee;
                font-family: 'Raleway', sans-serif;
                font-style: normal;
                font-weight: bold;
                height: 100vw;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 7vw;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 0.75vw;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .responsive{
                width: 100%;
                height: auto;
            }
            }


        </style>

        <script src="<?php echo e(asset('js/app.js')); ?>"></script>

    </head>
    <body>

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
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
        <div class="flex-center position-ref full-height">

             <div class="content">
                <img class="responsive" src="/images/RatePAY.svg"  alt="rp-logo">
                <div class="title m-b-md">
                    Give & Take
                </div>

             </div>
        </div>
    </body>
</html>
