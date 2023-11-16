<?php

namespace App\Http\Livewire\ExampleLaravel;
use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Equipe;

class UserManagement extends Component
{
    public function render()
    {
        $equipe = Equipe::all();
        return view('livewire.example-laravel.user-management' ,compact('equipe'));
    }

    
}
