<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Equipe;

class Dashboard extends Component
{
    public function render()
    {
        $equipe = Equipe::all(); 
        return view('livewire.dashboard',compact('equipe'));

    }
}
