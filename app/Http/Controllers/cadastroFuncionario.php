<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class cadastroFuncionario extends Controller
{
    public function buscarCadastrarFuncionario(){
        return View('cadastroFuncionario');
    }

    public function cadastrarFuncionario(Request $request){
        $dadosFuncionarios = $request->validate(
            [
                'emailfun' => 'string|required',
                'nomefun' => 'string|required',
                'whatsappfun' => 'string|required',
                'cpffun' => 'string|required',
                'senhafun' => 'string|required'
            ]
            );
        Funcionario::create($dadosFuncionarios);    
    return Redirect::route('cadastro-funcionario');        
    }
}
