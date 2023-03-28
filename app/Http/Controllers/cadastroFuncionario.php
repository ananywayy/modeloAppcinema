<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarFuncionarioModel;

class cadastroFuncionario extends Controller
{
    public function buscaCadastroFuncionario(){
        return View('cadastroFuncionario');
    }

    public function cadastrarFuncionario(Request $request){
        $dadosfuncionarios = $request ->validate(
            [
                'email_fun' => 'string|require',
                'nome_fun' => 'string|require',
                'whatsapp_fun' => 'string|require',
                'cpf_fun' => 'string|require',
                'senha_fun' => 'string|require'
            ]
            );
    cadastroFuncionarioModel::create($dadosFuncionarios);    
    return Redirect::route('/home');        
    }
}
