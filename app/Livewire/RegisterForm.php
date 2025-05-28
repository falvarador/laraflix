<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;

class RegisterForm extends Component
{
    public string $name;
    public string $email;
    public string $password;

    public function register()
    {
        $validated = $this->validate();

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        Auth::login($user);

        return $this->redirect(route('home', absolute: false), navigate: true);
    }

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique('users')->ignore(User::class),
            ],
            'password' => ['required', 'string'],
        ];
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
