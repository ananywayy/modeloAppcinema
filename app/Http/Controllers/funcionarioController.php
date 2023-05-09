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

    // public function mostrarGerenciadorFuncionario(Request $request) {

        
    //     $dadosFuncionarios = collect();

        
    // if ($request->filled('nomefun')) {
        
    //     $dadosFuncionarios = Funcionario::query()
    //         ->where('nomefun', 'like', '%' . $request->nomefun . '%')
    //         ->get();
    // }

    //     return view('gerenciadorFuncionario', ['dadosFuncionario'=> $dadosFuncionarios]);
        
    // }

    public function ApagarFuncionario(Funcionario $registroFuncionario){
         $registroFuncionario->delete();

         return Redirect::route('gerenciar-funcionario');

    }

    public function MostrarGerenciadorFuncionario(Request $request){
        // $dadosfuncionarios = Funcionario::all();
        // dd($dadosfuncionarios);
     
        $dadosFuncionarios = Funcionario::query();
        $dadosFuncionarios->when($request->nomefun,function($query,$nomefuncionario ){
            $query->where('nomefun','like','%'.$nomefuncionario.'%');
        }); 

        $dadosFuncionarios = $dadosFuncionarios->get();

        return view('gerenciadorFuncionario',['dadosFuncionario'=>$dadosFuncionarios]);
        
    }

    public function MostrarRegistroFuncionario(Funcionario $registroFuncionario){
        return view('xxxx',['registroFuncionario' => $registroFuncionario]);

    }
    public function AlterarBancoFuncionario(Funcionario $registroFuncionario, Request $request){
        $dadosFuncionarios = $request->validade([
            'emailfun' => 'string|required',
            'nomefun' => 'string|required',
            'senhafun' => 'string|required',
            'whatsappfun' => 'string|required',
            'cpffun' => 'string|required'
        ]); 
        
        $registroFuncionario->fill($dadosFuncionarios);
        $registroFuncionario->save();

        return Redirect::route('gerenciar-funcionario');

    }
}
