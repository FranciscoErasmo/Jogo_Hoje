<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Notifications\ResetPassword;
use App\Models\User;
use Illuminate\Notifications\Notifiable;

class ForgotPassword extends Component
{
    use Notifiable;

    public $email='';
    
    protected $rules = [
        'email' => 'required|email',
    ];

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }


    public function routeNotificationForMail() {
        return $this->email;
    }

    public function show(){

        if(env('IS_DEMO')){
            return back()->with('demo', "Você está em uma versão demo, não é possível redefinir a senha!");
        }
        else{

        $this->validate();

        $user = User::where('email', $this->email)->first();

    
        if($user){

    
            $this->notify(new ResetPassword($user->id));

            return back()->with('status', "Enviamos por e-mail seu link de redefinição de senha!");

    
        } else {
    
            return back()->with('email', "Nós não conseguimos encontrar nenhum usuário com esse endereço de email");
    
        }
    }
}
}
