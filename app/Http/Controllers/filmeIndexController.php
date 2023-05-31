<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Filme;

class filmeIndexController extends Controller
{
    //construimos o CRUD aqui

    public function buscarCadastrarFilme(){
        return View('cadastroFilme');
    }

    public function cadastrarFilme(Request $request){
        $dadosFilme = $request->validate([
            'nomefilme' => 'string|required',
            'generofilme' => 'string|required',
            'distribuidorafilme' => 'string|required',
            'diretorfilme' => 'string|required',
            'classificacaofilme' => 'string|required',
            'duracaofilme' => 'string|required',
            'sinopsefilme' => 'string|required',
            'categoriafilme' => 'string|required',
            'capafilme' => 'file|required',
            'classificacaofilme' => 'string|required'
        ]);
       // dd($dadosFilme);

        $file = $dadosFilme['capafilme'];
        $path = $file->store('capa','public');
        $dadosFilme['capafilme'] = $path;
        
        Filme::create($dadosFilme);

        //return Redirect::route('/home');
    }
    public function exibirFilme(){

        $dadosFilme = Filme::query();

        $dadosFilme = $dadosFilme->get();

        return view('site/index',['dadosFilme'=>$dadosFilme]);
     
    }
}
