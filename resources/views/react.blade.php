<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel with React</title>

        <!-- Memanggil CSS dan JS yang diproses oleh Vite -->
        @viteReactRefresh
        @vite(['resources/css/app.css', 'resources/js/app.jsx'])
    </head>
    <body class="antialiased bg-gray-100">

        {{-- Ini adalah "jangkar" tempat aplikasi React kita akan dipasang --}}
        <div id="app"></div>

    </body>
</html>