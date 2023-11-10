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
    // Lógica para armazenar a equipe no banco de dados

        $request->validate([
            'modalidade' => 'required|string',
            'status' => 'required|string',
            'capitao' => 'required|string',
            'local' => 'required|string',
            'horainicial' => 'required|string',
            'horafinal' => 'required|string',
            'checkbox' => 'required|string',
    ]);

    Equipe::create($request->all());

    return redirect('/equipe')->with('success', 'Equipe criada com sucesso!');

    // Redireciona ou faz algo após a criação da equipe
}
}