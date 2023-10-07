@extends('layouts.master')

@section('content')

    <body class="antialiased">
    <div id="app">
{{--        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">--}}
{{--            <Navbar/>--}}
{{--            <Sidebar/>--}}
            <card>
                <!-- Header Slot -->
                <template #header>
                    <h4 class="text-lg font-semibold">Card Title</h4>
                </template>

                <!-- Default Slot -->
                <p class="text-green-200">Main card content goes here.</p>

                <!-- Footer Slot -->
                <template #footer>
                    <button class="btn bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Click me!</button>
                </template>
            </card>
{{--        </div>--}}
    </div>
    @vite('resources/js/app.js')
    </body>
    </html>
@endsection
