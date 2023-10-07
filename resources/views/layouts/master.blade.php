<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ryan.dev</title>
    @include('partials.styles')
</head>
<body class="text-white bg-green-900 font-serif">
@routes
<div id="app">
{{--    @include('partials.header')--}}
    @include('partials.sidebar')
    <main class="container mt-5">
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.scripts')
</div>

</body>
@vite('resources/js/app.js')
</html>
