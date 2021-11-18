<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     
    </head>
    <body>
        <div id="app"></div>

        <div class="flex justify-center mt-24">
            <h1 class="text-2xl font-bold text-gray-700">Vue 3 App</h1>
        </div>

    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
