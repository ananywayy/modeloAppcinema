<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use App\Models\Filme;

class filmeController extends Controller
{
    public function buscarCadastrarFilme(){
        return View('cadastroFilme');
    }

    public function cadastrarFilme(Request $request){
        $dadosFilme = $request->validate([
            'nomefilme' => 'string|required',
            'atoresfilme' => 'string|required',
            'datalancamentofilme' => 'string|required',
            'sinopsefilme' => 'string|required',
            'capafilme' => 'file|required'
        ]);
        // dd($dadosFilme);

        $file = $dadosFilme['capafilme'];
        $path = $file->store('capa', 'public');
        $dadosFilme['capafilme'] = $path;

        Filme::create($dadosFilme);    
        return Redirect::route('home');  

    }
    

    public function MostrarGerenciadorFilme(Request $request){
        $dadosFilmes = Filme::all();
        //dd($dadosFilmes);
        
        $dadosFilmes = Filme::query();
        $dadosFilmes->when($request->nomefilme,function($query, $nomefilmes){
          $query->where('nomefilme', 'like', '%'.$nomefilmes.'%');
        });
  
        $dadosFilmes = $dadosFilmes->get();
  
        return view('gerenciadorFilme',['dadosFilme'=>$dadosFilmes]);
        
  
      }

    public function ApagarFilme(Filme $registroFilme){
        $registroFilme->delete();

        return Redirect::route('gerenciar-filme');

    }

    public function MostrarRegistroFilme(Filme $registroFilme){
        return view('xxxx',['registroFilme' => $registroFilme]);

    }
    public function AlterarBancoFilme(Filme $registroFilme, Request $request){
        $dadosFilmes = $request->validate([
            'nomefilme' => 'string|required',
            'atoresfilme' => 'string|required',
            'datalancamentofilme' => 'date|required',
            'sinopsefilme' => 'string|required',
            'capafilme' => 'file|required'
        ]);
        $registroFilme->fill($dadosFilmes);
        $registroFilme->save();

        return Redirect::route('gerenciar-filme');
    }
}

