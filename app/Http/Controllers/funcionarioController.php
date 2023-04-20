<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Funcionario;

class funcionarioController extends Controller
{
    public function buscaCadastroFuncionario(){
        return View('cadastroFuncionario');
    }

    public function cadastrarFuncionario(Request $request){
        $dadosFuncionario = $request->validate([
            'emailfun' => 'string|required',
            'nomefun' => 'string|required',
            'senhafun' => 'string|required',
            'whatsappfun' => 'string|required',
            'cpffun' => 'string|required'
        ]);
        
        Funcionario::create($dadosFuncionario);

        return Redirect::route('home');

    }

    public function buscarFuncionario(){
        return View('gerenciadorFuncionario');
    }

    public function mostrarGerenciadorFuncionario(Request $request) {
        $dadosFuncionarios = Funcionario::all();
        dd($dadosFuncionarios);

        /*
        $dadosFuncionarios = Funcionario::query();
        $dadosFuncionarios->when($request->nomefun, function($query, $nomefuncionario){
            $query->where('nomefun', 'like', '%'.$nomefuncionario.'%');
        });

        $dadosFuncionarios = $dadosFuncionarios->get();

        return view('gerenciadorFuncionario');
        */
    }
}
