<?php

namespace App\Http\Livewire\ExampleLaravel;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;

class UserProfile extends Component
{

    public User $user;

    protected function rules(){
        return [
            'user.name' => 'required',
            'user.email' => 'required|email|unique:users,email,'.$this->user->id,
            'user.phone' => 'required|max:10',
            'user.about' => 'required:max:150',
            'user.location' => 'required: max 100'
        ];
    }

    public function mount() { 
        $this->user = auth()->user();
    }

    public function updated($propertyName){

        $this->validateOnly($propertyName);
    }
    
    public function update()
    {
        $this->validate();

        if (env('IS_DEMO') && $this->user->id == 1){
            
            if( auth()->user()->email == $this->user->email ){
                
                $this->user->save();
                return back()->withStatus('Profile successfully updated.');
            }
            
            return back()->with('demo', "You are in a demo version, you can't change the admin email." );
        };

        $this->user->save();
        return back()->withStatus('Profile successfully updated.');
    
}

public function render()
{
   
    return view('livewire.example-laravel.user-profile');
}
 public function updateprofile(Request $request,$id){
    $user = User::find($id);
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->location = $request->input('location');
    $user->phone = $request->input('phone');
    $user->about = $request->input('about');
    $user->update();
      

 }

}
