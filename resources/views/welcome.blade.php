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
        <link type="text/css" href="{{ asset('/css/fonts.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    </body>
</html>
