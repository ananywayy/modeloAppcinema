@extends('padrao')

@section('content')

<div class="container">
  <form method="get" action="{{route('gerenciar-filme')}}">
    <div class="mt-3 row">
        <label for="inputPesquisar" class="col-sm-2 col-form-label">Pesquisar:</label>
        
        <div class="col-sm-8">
            <input type="text" class="form-control" name="nomefilme" id="inputPesquisar" placeholder="Digite o nome do filme">
        </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-dark">Pesquisar</button>
            </div>
    </div>
  </form>
</div>
<div class="container my-3">

<table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Atores</th>
        <th scope="col">Alterar</th>
        <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dadosFilme as $dadosFilmes)
        <tr>
        <th scope="row">{{$dadosFilmes->id}}</th>
        <td>{{$dadosFilmes->nomefilme}}</td>
        <td>{{$dadosFilmes->atoresfilme}}</td>
        <td>  
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalAlterarFilme-{{$dadosFilmes->id}}">
                    Alterar
            </button>
          @include('modal.modalFilmeAlterar')
        </td>
        <td>
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDeleteFilme-{{$dadosFilmes->id}}">
            Excluir
            </button>
          @include('modal.modalFilmeDeletar')
        </td>  
        </tr>
    @endforeach
    </tbody>
    </table>
</div>

@endsection