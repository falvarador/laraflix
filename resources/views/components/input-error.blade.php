@props(['messages'])

<p {{ $attributes->merge(['class' => 'mt-2 text-red-500']) }} role="alert">
    @foreach ((array) $messages as $message)
        {{ $message }}
    @endforeach
</p>