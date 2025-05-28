<section x-data="{ openModal: false }">
    <article class="relative h-[56.25vw]">
        <video poster="{{ $movie->thumbnail_url }}"
            class="h-[56.25vw] w-full object-cover brightness-[60%] transition duration-500" autoplay muted loop
            src="{{ $movie->video_url }}"></video>
        <aside class="absolute top-[30%] ml-4 md:top-[40%] md:ml-16">
            <p class="h-full w-[50%] text-xl font-bold text-white drop-shadow-xl md:text-5xl lg:text-6xl">
                {{ $movie->title }}
            </p>
            <p class="mt-3 w-[90%] text-[8px] text-white drop-shadow-xl md:mt-8 md:w-[80%] md:text-lg lg:w-[50%]">
                {{ $movie->description }}
            </p>
            <div class="mt-3 flex flex-row items-center gap-3 md:mt-4">
                <x-play-button :movie="$movie" />
                <x-modal-button />
            </div>
        </aside>
    </article>
    <x-modal :movie="$movie" />
</section>