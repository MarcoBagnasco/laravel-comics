<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page-title', 'DC COMICS')</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@400;600&display=swap" rel="stylesheet">
        
        <!-- Style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="app-wrap">
            <!-- MAIN HEADER -->
            @include('partials.header')
            
            <main class="grow">
                @yield('content')
            </main>
            <!-- MAIN FOOTER -->
            @include('partials.footer')
        </div>
    </body>
</html>