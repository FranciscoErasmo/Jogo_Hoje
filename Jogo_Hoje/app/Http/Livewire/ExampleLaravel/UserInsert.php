<?php

namespace App\Http\Livewire\ExampleLaravel;
use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;

class UserInsert extends Component
{
    public function userinsert()
    {
        return view('livewire.example-laravel.user-insert');
    }
}
