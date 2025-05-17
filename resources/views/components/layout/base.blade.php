<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-192932933-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-192932933-1');
        </script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.cdnfonts.com/css/tt-norms-pro" rel="stylesheet">
        <title>Connect Vending - {{ $title ?? '' }}</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta name="description" content="Locação e Comodato de Máquinas de café para empresas para o bem estar dos seus colaboradores, clientes e visitantes. O melhor da 3 Corações." />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Home - Connect Vending" />
        <meta property="og:description" content="Locação e Comodato de Máquinas de café para empresas para o bem estar dos seus colaboradores, clientes e visitantes. O melhor da 3 Corações." />
        <meta property="og:url" content="https://connectvending.com.br/" />
        <meta property="og:site_name" content="Connect Vending" />
        <meta property="article:publisher" content="https://www.facebook.com/connectvendingbr" />
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
