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
    

    public function mostrarGerenciadorFilme(Request $request) {
        $dadosFilmes = collect();

    if ($request->filled('nomefilme')) {
        
        $dadosFilmes = Filme::query()
            ->where('nomefilme', 'like', '%' . $request->nomefilme . '%')
            ->get();
    }

        
    
        return view('gerenciadorFilme', ['dadosFilme'=> $dadosFilmes]);
    }
}

