<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RatePAY Give &amp; Take Voting Tool</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
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

        @include('partials.flash')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
