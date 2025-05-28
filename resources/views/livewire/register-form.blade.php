<article class="mx-auto mt-10 max-w-sm">
    <form wire:submit.prevent="register" class="mt-4">
        <!-- Name -->
        <x-input id="name" wire:model="name" label="Name" class="mt-1 block w-full border-zinc-200" type="text"
            name="name" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" />


        <!-- Email Address -->
        <x-input id="email" wire:model="email" label="Email" class="mt-1 block w-full border-zinc-200" type="email"
            name="email" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" />

        <!-- Password -->
        <x-input id="password" wire:model="password" label="Password" class="mt-1 block w-full border-zinc-200"
            type="password" name="password" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" />


        <x-auth-button label="Sign Up" />

        <p class="mt-4 text-center text-white">
            <a href="{{ route('login') }}" wire:navigate class="hover:underline">Already have an account?</a>
        </p>
    </form>
</article>