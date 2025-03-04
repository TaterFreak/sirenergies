<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Test technique Sirenergie</title>
    <meta name="description"
        content="Sirenergies apporte aux entreprises de toutes tailles des solutions optimisées pour les accompagner dans la gestion de leur stratégie énergétique.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="https://www.sirenergies.com/content/images/size/w256h256/2025/01/logo-square-light.png"
        type="image/png">

    <!-- Scripts -->
    @include('scripts.fouc-theme')
    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-background-primary">

        <livewire:layout.navigation />


        <livewire:layout.sidebar />

        <main x-data="{ sidebar: $store.sidebarStore }" x-bind:class="sidebar.open ? 'lg:!ml-90' : ''" class="lg:ml-18 py-6 mx-auto px-6 transition-[margin]">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
