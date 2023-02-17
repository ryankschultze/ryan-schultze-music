<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ryan Schultze Music</title>

    @include('partials.styles')
</head>
<body class="text-white bg-green-900 font-serif">

@include('partials.header')

<main class="container mt-5">
    @yield('content')
</main>

@include('partials.footer')

@include('partials.scripts')

</body>
</html>
