@props(['navbarItems'])

<div x-data="{ isActive: false }" class="relative ml-8 flex flex-row items-center gap-2 lg:hidden">
    <button x-on:click="isActive = !isActive" class="relative flex flex-row items-center gap-2">
        <div class="text-sm text-white">Explorar</div>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-white text-white transition" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <div class="absolute left-0 top-8 flex w-56 flex-col rounded border-2 border-gray-800 bg-black py-5" role="menu"
        x-cloak x-transition x-show="isActive" x-on:click.away="isActive = false"
        x-on:keydown.escape.window="isActive = false">
        @foreach ($navbarItems as [$label, $url])
            <a href="{{ $url }}" class="px-3 text-center text-white hover:underline">{{ $label }}</a>
        @endforeach
    </div>
</div>