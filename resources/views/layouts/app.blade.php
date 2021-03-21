<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Laravel')</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('partials.header')

            <div class="flex flex-1">
                @yield('content')
            </div>

            @include('partials.footer')
        </div>
    </body>

    <script src="{{ mix('js/app.js') }}"></script>
</html>
