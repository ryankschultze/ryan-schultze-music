<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ryan.dev</title>

        <link href="{{asset('css/app.css')}}" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div>
            <card>
                <!-- Header Slot -->
                <template #header>
                    <h4 class="text-lg font-semibold">Card Title</h4>
                </template>

                <!-- Default Slot -->
                <p class="text-gray-600">Main card content goes here.</p>

                <!-- Footer Slot -->
                <template #footer>
                    <button class="btn bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Click me!</button>
                </template>
            </card>
        </div>
    </body>
</html>
