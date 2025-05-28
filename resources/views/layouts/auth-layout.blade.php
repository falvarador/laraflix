<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Ecommervel') }}</title>

    {{ $head ?? '' }}

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="relative h-full min-h-screen w-full bg-cover bg-fixed bg-center bg-no-repeat"
    style="background-image: url('/images/hero.png')">
    <main class="h-full min-h-screen w-full bg-black lg:bg-black/50">
        <nav class="px-12 py-5">
            <img src="/images/logo.png" class="h-12" alt="Logo" />
        </nav>
        <section class="flex justify-center">
            <div class="mt-2 w-full self-center rounded-md bg-black/70 px-16 py-16 lg:w-2/5 lg:max-w-md">
                <h2 class="mb-8 text-4xl font-semibold text-white">{{ $title ?? '' }}</h2>
                {{ $slot }}
            </div>
        </section>
        <main />
</body>

</html>