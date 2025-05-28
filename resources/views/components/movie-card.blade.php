@props(['movie'])

<article x-data="{openModal: false}" class="group relative h-[12vw] bg-zinc-900">
    <a href="{{ route('watch.movie', ['movie' => $movie]) }}" wire:navigate>
        <img src="{{ $movie->thumbnail_url }}" alt="{{ $movie->title }}"
            class="duration h-[12vw] w-full rounded-md object-cover shadow-xl transition delay-300 group-hover:opacity-90 sm:group-hover:opacity-0" />
    </a>
    <aside
        class="invisible absolute top-0 z-10 w-full scale-0 opacity-0 transition delay-300 duration-200 group-hover:-translate-y-[6vw] group-hover:translate-x-[2vw] group-hover:scale-110 group-hover:opacity-100 sm:visible">
        <a href="{{ route('watch.movie', ['movie' => $movie]) }}" wire:navigate>
            <img src="{{ $movie->thumbnail_url }}" }}" alt="{{ $movie->title }}"
                class="duration h-[12vw] w-full rounded-t-md object-cover shadow-xl transition" />
        </a>
        <div class="absolute z-10 w-full rounded-b-md bg-zinc-800 p-2 shadow-md transition lg:p-4">
            <div class="flex flex-row items-center gap-3">
                <x-play-button :movie="$movie" />
                <livewire:favorite-button :movie="$movie" />
                <x-modal-button :is_inline="true" />
            </div>
            <p class="mt-4 font-semibold text-green-400">
                {{ $movie->title }}
                <span class="text-white">{{ $movie->year }}</span>
            </p>
            <div class="mt-4 flex flex-row items-center gap-2">
                <p class="text-[10px] text-white lg:text-sm">{{ $movie->duration }}</p>
            </div>
            <div class="mt-4 flex flex-row items-center gap-2 text-[8px] text-white lg:text-sm">
                <p>{{ $movie->genre }}</p>
            </div>
        </div>
    </aside>
    <x-modal :movie="$movie" />
</article>