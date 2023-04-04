<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use App\Models\Filme;

class cadastroFilme extends Controller
{
    public function buscarCadastrarFilme(){
        return View('cadastroFilme');
    }

    public function cadastrarFilme(Request $request){
        $dadosFilmes = $request->validate([
            'nomefilme' => 'string|required',
            'atoresfilme' => 'string|required',
            'datalancamentofilme' => 'string|required',
            'sinopsefilme' => 'string|required',
            'capafilme' => 'string|required'
        ]);

        Filme::create($dadosFilmes);    
    return Redirect::route('cadastro-filme');  

    }
}
