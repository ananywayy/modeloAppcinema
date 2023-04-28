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

        // $dadosFuncionarios = Funcionario::query();
        // $dadosFuncionarios->when($request->nomefun,function($query,$nomefuncionario){
        //     $query->where('nomefun','like','%' .$nomefuncionario. '%');
        // });

        // $dadosFuncionarios = $dadosFuncionarios->get();
        
    if ($request->filled('nomefun')) {
        
        $dadosFuncionarios = Funcionario::query()
            ->where('nomefun', 'like', '%' . $request->nomefun . '%')
            ->get();
    }

        return view('gerenciadorFuncionario', ['dadosFuncionario'=> $dadosFuncionarios]);
        
    }

    public function ApagarFuncionario(Funcionario $dadosFuncionarios){
        $registrosFuncionarios->delete();

        return Redirect::route('gerenciar-funcionario');

    }

    public function MostrarRegistrosFuncionario(Funcionario $registrosFuncionarios){
        return view('xxx',['registrosFuncionarios' => $registrosFuncionarios]);

    }
    public function AlterarBancoFuncionario(Funcionario $registrosFuncionarios, Request $request){
        $dadosFuncionarios = $request->validade([
            'emailfun' => 'string|required',
            'nomefun' => 'string|required',
            'senhafun' => 'string|required',
            'whatsappfun' => 'string|required',
            'cpffun' => 'string|required'
        ]); 
        
        $registrosFuncionarios->fill($dadosFuncionarios);
        $registrosFuncionarios->save();

        return Redirect::route('gerenciar-funcionario');

    }
}
