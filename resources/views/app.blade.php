<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @routes
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <script src="{{ mix('/js/app.js') }}" defer></script>
    </head>
    <body>
        {{-- @routes --}}
        @inertia
    </body>
</html>
