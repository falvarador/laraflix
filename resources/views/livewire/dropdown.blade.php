<div x-data="{ isActive: false }" class="relative">
    <button x-on:click="isActive = !isActive" type="button" class="relative flex flex-row items-center gap-2">
        <div class="h-6 w-6 overflow-hidden rounded-md lg:h-10 lg:w-10">
            <img src="/images/default-blue.png" alt="" />
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-white text-white transition" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <div class="absolute right-0 top-14 flex w-56 flex-col rounded border-2 border-gray-800 bg-black py-5" role="menu"
        x-cloak x-transition x-show="isActive" x-on:click.away="isActive = false"
        x-on:keydown.escape.window="isActive = false">
        <div class="flex flex-col gap-3">
            <div class="group/item flex w-full flex-row items-center gap-3 px-3">
                <img class="w-8 rounded-md" src="/images/default-blue.png" alt="{{ auth()->user()->name }}" />
                <a href="{{ route('dashboard') }}" class="text-sm text-white group-hover/item:underline">
                    {{ auth()->user()->name }}
                </a>
            </div>
        </div>
        <hr class="my-4 h-px border-0 bg-gray-800" />
        <button wire:click="logout" type="button" class="w-full px-3 text-center text-sm text-white hover:underline">
            Logout
        </button>
    </div>
</div>