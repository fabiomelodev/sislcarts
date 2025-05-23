<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.cdnfonts.com/css/tt-norms-pro" rel="stylesheet">
        <title>Sistema - {{ $title ?? '' }}</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="article:modified_time" content="2022-05-04T16:09:20+00:00" />
        <meta name="twitter:card" content="summary_large_image" />
        @vite('resources/css/app.css')
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
        @livewireStyles
    </head>
    <body class="overflow-x-hidden">
        @auth
            <x-layout.header />
        @endauth

        {{ $slot }}

        @auth
            <x-layout.footer />
        @endauth

        @vite(['resources/js/app.js'])
        @livewireScripts
    </body>
</html>
