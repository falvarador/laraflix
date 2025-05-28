<button wire:click="toggleFavorite({{ $movie->id }})"
    class="group/item flex h-6 w-6 items-center justify-center rounded-full border-2 border-white transition hover:border-neutral-300 lg:h-10 lg:w-10">
    @if ($movie->favoritedBy->contains(Auth::user()))
        <svg class="w-4 text-white group-hover/item:text-neutral-300 lg:w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
        </svg>
    @else
        <svg class="w-4 text-white group-hover/item:text-neutral-300 lg:w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
    @endif
</button>