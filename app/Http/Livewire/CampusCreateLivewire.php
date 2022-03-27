<?php

namespace App\Http\Livewire;

use App\Models\Campus;
use Livewire\Component;

class CampusCreateLivewire extends Component
{
    public $campus_name;
    public $address;

    protected $rules = [
        'campus_name' => 'required|min:2|max:200',
        'address' => 'required|min:2|max:200',
    ];

    public function render()
    {
        return view('livewire.campus-create-livewire')
            ->extends('layouts.app');
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function save()
    {
        $data = $this->validate();

        $campus = Campus::create($data);

        if ($campus) {
            session()->flash('success', 'Campus Created');
            return redirect()->route('campus');
        }
    }
}
