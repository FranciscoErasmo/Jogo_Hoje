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
        $id =Auth()->user()->id;
        $equipe = Equipe::where('id_user',$id)->get();
        return view('livewire.example-laravel.user-management' ,compact('equipe'));

        $equipe = Equipe::all();
        return view('livewire.example-laravel.dashboard' ,compact('equipe'));
    }
}
