<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Give &amp; Take Voting Tool</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="mt-10">
        <header>
            <a class="no-underline text-grey-darkest" href="/">
                <div class="container mx-auto text-center">
                    <img class="rp-logo" src="{{ asset($logo) }}" alt="{{ $name }} Logo">
                    <h1 class="text-5xl subline">{{ $name }}</h1>
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
