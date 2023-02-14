<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ryan Schultze Music</title>

        <link href="{{asset('css/app.css')}}" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div id="app">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
                <welcome/>
            </div>
        </div>

        @vite('resources/js/app.js')
    </body>
</html>
