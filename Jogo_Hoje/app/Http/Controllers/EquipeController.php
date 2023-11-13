<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;


class EquipeController extends Controller
{
    public function index()
    {
        $equipes = Equipe::all();
        return view('equipe.index', compact('equipes'));   // Lógica para exibir todas as equipes
    }

    public function create()
    {
        return view('equipe.create'); // Lógica para exibir o formulário de criação
    }

    public function store(Request $request)
       {
      
    $equpe =  new  Equipe();
    $equpe->modalidade = $request->input('modalidade');
    $equpe->status = $request->input('status');
    $equpe->capitao = $request->input('capitao');
    $equpe->timea = $request->input('timea');
    $equpe->timeb = $request->input('timeb');
    $equpe->confrat = $request->input('confrat');
    $equpe->local = $request->input('local');
    $equpe->data = $request->input('data');
    $equpe->horainicial = $request->input('horainicial');
    $equpe->horafinal = $request->input('horafinal');
    $equpe->checkbox = $request->input('checkbox');
    $equpe ->save();

    return redirect('/equipe')->with('success', 'Equipe criada com sucesso!');
    // Redireciona ou faz algo após a criação da equipe
}

}