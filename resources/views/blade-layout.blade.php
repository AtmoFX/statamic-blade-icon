<!doctype html>
<html lang="{{ $site->short_locale }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? $site->name }}</title>
        @vite(['resources/css/site.css', 'resources/js/site.js'])
    </head>
    <body class="bg-slate-100 dark:bg-gray-800 font-sans leading-normal text-slate-800 dark:text-gray-400">
        <div class="mx-auto px-2 lg:min-h-screen flex flex-col items-center justify-center">
            @yield('body')
        </div>
    </body>
</html>
