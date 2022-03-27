<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class SignUpLivewire extends Component
{

    public $email;
    public $password;
    public $name;
    public $confirm_password;

    public function render()
    {
        return view('livewire.sign-up-livewire')
        ->extends('layouts.blank');
    }

    protected function rules()
    {
        return[
            'email' => 'required|min:2|max:200|email|unique:users,email',
            'password' => [
                'required',
                Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
            'name' => 'required|min:2|max:200',
            'confirm_password' => 'required|same:password',
        ];
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function signup()
    {
        $data = $this->validate();
        $data["password"] = Hash::make($data['password']);

        $user = User::create($data);

        if($user){
            Auth::login($user);
            return redirect()->route('campus');
        }
        
    }

}
