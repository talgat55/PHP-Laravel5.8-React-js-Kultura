<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->

        <!-- Styles -->

    </head>
    <body>
        <div id="root"></div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
