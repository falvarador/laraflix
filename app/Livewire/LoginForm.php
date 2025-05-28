<?php

namespace App\Livewire;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class LoginForm extends Component
{
    public string $email;
    public string $password;

    public function login()
    {
        $this->validate();

        $this->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('home', absolute: false), navigate: true);
    }

    protected function authenticate()
    {
        $this->ensureIsNotRateLimited();

        if (!Auth::attempt($this->only(['email', 'password']), true)) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    protected function ensureIsNotRateLimited()
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    protected function throttleKey()
    {
        return Str::transliterate(Str::lower($this->email) . '|' . request()->ip());
    }

    protected function rules()
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
