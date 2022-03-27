<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SigninLivewire extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.signin-livewire')
        ->extends('layouts.blank');
    }

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function login()
    {
        $data = $this->validate();
        if (Auth::attempt($data)){
            return redirect()->route('campus');
        }

        $this->reset('password' , 'email');

        session()->flash('danger', "Wrong Credentials!");
    }
}
