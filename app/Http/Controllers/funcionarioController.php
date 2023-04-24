<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Funcionario;

class funcionarioController extends Controller
{
    public function buscarCadastrarFuncionario(){
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

    // public function buscarFuncionario(){
    //     return View('gerenciadorFuncionario', ['dadosFuncionario'=>$dadosFuncionario]);
    // }

    public function mostrarGerenciadorFuncionario(Request $request) {
        $dadosFuncionarios = collect();

    if ($request->filled('nomefun')) {
        
        $dadosFuncionarios = Funcionario::query()
            ->where('nomefun', 'like', '%' . $request->nomefun . '%')
            ->get();
    }

        return view('gerenciadorFuncionario', ['dadosFuncionario'=> $dadosFuncionarios]);
        
    }
}
