<?php

namespace App\Http\Livewire\ExampleLaravel;
use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Equipe;
use Illuminate\Support\Facades\DB;


class UserManagement extends Component
{
    public function render()
    {
        $id = Auth()->user()->id;

        $equipe = $id = Auth()->user()->id;

        $equipe = DB::table('equipe')
            ->select(
                'equipe.id',
                'equipe.modalidade',
                'equipe.status',
                'equipe.data',
                'equipe.horainicial',
                'equipe.horafinal',
                'equipe.capitao',
                'equipe.timea',
                'equipe.confrat',
                'equipe.local',
                DB::raw("(SELECT GROUP_CONCAT(jogador.nome_do_jogador) FROM jogador WHERE jogador.id_jogo = equipe.id AND jogador.time = 'Time A') AS jogadores_timeA"),
                DB::raw("(SELECT GROUP_CONCAT(jogador.nome_do_jogador) FROM jogador WHERE jogador.id_jogo = equipe.id AND jogador.time = 'Time B') AS jogadores_timeB")
            )
            ->get();
        

        

        return view('livewire.example-laravel.user-management' ,compact('equipe'));

        $equipe = Equipe::all();
        return view('livewire.example-laravel.dashboard' ,compact('equipe'));
    }

   
    
}
