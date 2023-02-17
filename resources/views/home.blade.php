@extends('layouts.master')

@section('content')

    <body class="antialiased">
    <div id="app">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
{{--            <Navbar/>--}}
{{--            <Sidebar/>--}}
            <Welcome/>
        </div>
    </div>
    @vite('resources/js/app.js')
    </body>
    </html>
@endsection
