<section class="mt-4 space-y-8 px-4 md:px-12">
    <p class="mb-4 text-base font-semibold text-white md:text-xl lg:text-2xl">
        {{ $type === 'trending' ? 'Trending' : 'Favorites' }}
    </p>
    <div class="grid grid-cols-4 gap-2">
        @foreach ($movies as $movie)
            <x-movie-card :movie="$movie" />
        @endforeach
    </div>
</section>