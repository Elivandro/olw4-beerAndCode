<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100 dark:bg-gray-800">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    @stack('vegalite5-scripts')
</head>

<body class="min-h-screen">
    <div x-data="{ menuVisibility: false }">
        <x-sidebar />

        <div class="flex flex-col md:pl-64">
            <x-navigation />

            <main class="flex-1">
                <div class="py-6">
                    {{ $slot }}
                </div>
            </main>

        </div>
    </div>

    @livewireScriptConfig
</body>

</html>
