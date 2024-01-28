<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Forrise</title>

        @include('partials.css')

    </head>
    <body>
        <div class="container text-center">
            @yield('content')
          </div>
          @include('partials.js')

    </body>
</html>
