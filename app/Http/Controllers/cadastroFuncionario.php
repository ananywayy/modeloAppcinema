<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class cadastroFuncionario extends Controller
{
    public function buscaCadastroFuncionario(){
        return View('cadastroFuncionario');
    }

    public function cadastrarFuncionario(Request $request){
        $dadosfuncionarios = $request ->validate(
            [
                'emailfun' => 'string|require',
                'nomefun' => 'string|require',
                'whatsappfun' => 'string|require',
                'cpffun' => 'string|require',
                'senhafun' => 'string|require'
            ]
            );
        Funcionario::create($dadosFuncionarios);    
    return Redirect::route('/home');        
    }
}
