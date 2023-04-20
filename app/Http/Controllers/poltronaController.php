<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use App\Models\Poltrona;

class poltronaController extends Controller
{
    public function buscaCadastroPoltrona(){
        return View('cadastroPoltrona');
    }

    public function cadastrarPoltrona(Request $request){
        $dadosPoltrona = $request->validate([
            'filmepoltrona' => 'string|required',
            'qtdpoltrona' => 'string|required',
            'salapoltrona' => 'string|required',
            'sessaopoltrona' => 'string|required'
        ]);
        
        Poltrona::create($dadosPoltrona);
        return Redirect::route('cadastro-poltrona');
    }
}
