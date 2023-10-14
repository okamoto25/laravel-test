<!doctype html>
<html>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport'
        content='width=device-width, user-scalable=no, initial-scale=1.0,
        maximum-scale=1.0, minimum-scale=1.0'>
        <meta http-eauiv='X-UA-Compatible' content='ie=edge'>
        {{-- <link href="/css/app.css" rel="stylesheet"> --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ $title ?? 'つぶやきアプリ'}}</title>
        @stack('css')
    </head>
    <body class="bg-gray-50">
        {{ $slot }}
    </body>
</html>
