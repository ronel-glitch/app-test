<?php

namespace App\Http\Livewire;

use App\Models\Campus;
use Livewire\Component;

class CampusUpdateLivewire extends Component
{
    public $campus_id;
    public $campus_name;
    public $address;

    protected $rules = [
        'campus_name' => 'required|min:2|max:200',
        'address' => 'required|min:2|max:200',
    ];

    public function mount(Campus $campus)
    {
        $this->campus_id = $campus->id;
        $this->campus_name = $campus->campus_name;
        $this->address = $campus->address;
    }

    public function render()
    {
        return view('livewire.campus-update-livewire')
            ->extends('layouts.app');
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function save()
    {
        $data = $this->validate();

        $campus = Campus::updateOrCreate([
            'id' => $this->campus_id,
        ],$data);

        if ($campus->wasChanged()) {
            session()->flash('success', 'Campus Updated');
        } else {
            session()->flash('success', 'Nothing Changed');
        }
        return redirect()->route('campus');
    }
}
