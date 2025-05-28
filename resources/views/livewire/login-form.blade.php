<article class="mx-auto mt-10 max-w-sm">
    <form wire:submit.prevent="login" class="mt-4">
        <!-- Email Address -->
        <x-input id="email" wire:model="email" label="Email" class="mt-1 block w-full border-zinc-200" type="email"
            name="email" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" />

        <!-- Password -->
        <x-input id="password" wire:model="password" label="Password" class="mt-1 block w-full border-zinc-200"
            type="password" name="password" required autocomplete="current-password" />
        <x-input-error :messages="$errors->get('password')" />

        <x-auth-button label="Sign In" />

        <p class="mt-4 text-center text-white">
            <a href="{{ route('register') }}" wire:navigate class="hover:underline">Don't have an account?</a>
        </p>
    </form>
</article>