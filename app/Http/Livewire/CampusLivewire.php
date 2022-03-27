<?php

namespace App\Http\Livewire;

use App\Models\Campus;
use Livewire\Component;
use Livewire\WithPagination;

class CampusLivewire extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $search;

    public function render()
    {
        return view('livewire.campus-livewire', [
                'campuses' => $this->get_campuses(),
            ])
            ->extends('layouts.app');
    }

    public function get_campuses()
    {
        $search = trim($this->search);
        return Campus::where('campus_name', 'like', "%{$search}%")
            ->orWhere('address', 'like', "%{$search}%")
            ->paginate(10);
    }

    public function delete(Campus $campus)
    {
        if ( $campus->delete() ) {
            session()->flash('danger', 'Campus Deleted');
        }
    }
}
