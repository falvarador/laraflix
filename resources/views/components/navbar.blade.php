@php
    $navbarItems = [
        ['Home', route('dashboard'), true],
        ['TV Series', '#', false],
        ['Movies', '#', false],
        ['News', '#', false],
        ['Favorites', '#', false],
        ['International', '#', false],
    ];
@endphp

<nav x-data="{
        showBackground: false,
        handleScroll() {
            this.showBackground = window.scrollY >= 66
        },
    }" @scroll.window="handleScroll" class="fixed z-40 w-full">
    <di class="flex flex-row items-center px-4 py-6 transition duration-500 md:px-16"
        :class="{ 'bg-zinc-900 bg-opacity-90': showBackground }">
        <img src="/images/logo.png" class="h-4 lg:h-7" alt="Logo" />
        <div class="ml-8 hidden flex-row gap-7 lg:flex">
            @foreach ($navbarItems as [$label, $url, $active])
                <a @class([
                    'transition hover:text-gray-300',
                    'text-white' => $active,
                    'text-gray-200' => !$active,
                ])
                    href="{{ $url }}">
                    {{ $label }}
                </a>
            @endforeach
        </div>
        <x-hamburguer :navbarItems="$navbarItems" />
        <div class="ml-auto flex flex-row items-center gap-7">
            <button type="button" class="text-gray-200 transition hover:text-gray-300">
                <!-- icono de buscar -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </button>
            <button type="button" class="text-gray-200 transition hover:text-gray-300">
                <!-- icono de notificaciones -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>
            </button>
            <livewire:dropdown />
        </div>
    </di>
</nav>