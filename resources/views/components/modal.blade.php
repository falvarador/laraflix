@props(['movie'])

<article x-show="openModal" @keydown.window.escape="openModal = false">
    <div x-cloak x-transition.opacity class="fixed inset-0 z-50 bg-black/50"></div>
    <section x-cloak x-transition class="fixed inset-0 z-50 grid place-content-center">
        <div class="max-w-3xl overflow-hidden rounded-md bg-gray-900">
            <aside class="relative h-96">
                <video poster="{{ $movie->thumbnail_url }}" autoplay muted loop src="{{ $movie->video_url }}"
                    class="h-full w-full object-cover brightness-[60%]"></video>
                <x-close-button />
                <div class="absolute bottom-[10%] left-10">
                    <p class="mb-8 h-full text-3xl font-bold text-white md:text-4xl lg:text-5xl">
                        {{ $movie->title }}
                    </p>
                    <div class="flex flex-row items-center gap-4">
                        <x-play-button :movie="$movie" />
                        <livewire:favorite-button :movie="$movie" />
                    </div>
                </div>
            </aside>
            <aside class="px-12 py-8">
                <div class="mb-8 flex flex-row items-center gap-2">
                    <p class="text-lg font-semibold text-green-400">New</p>
                    <p class="text-lg text-white">{{ $movie->duration }}</p>
                    <p class="text-lg text-white">{{ $movie->genre }}</p>
                </div>
                <p class="text-lg text-white">{{ $movie->description }}</p>
            </aside>
        </div>
    </section>
</article>