@extends('padrao')

@section('content') 

    <form class=" bg-dark p-5" enctype="multipart/form-data" method="post" action="{{route('cadastro-filme')}}">
        @csrf
            <div class="mb-3 form-check">
                <label for="filmeInput" class="form-label">Filme:</label>
                <input type="text" name="nomefilme" class="form-control" id="filmeInput" >
            </div>
            <div class="mb-3 form-check">
                <label for="generoInput" class="form-label">Genero:</label>
                <input type="text" name="generofilme" class="form-control" id="generoInput">
            </div>
            <div class="mb-3 form-check">
                <label for="distribuidorafilmeInput" class="form-label">Distribuidora:</label>
                <input type="text" name="distribuidorafilme" class="form-control" id="datalancamentoInput" >
            </div>
            <div class="mb-3 form-check">
                <label for="diretorInput" class="form-label">Diretor:</label>
                <input type="text" name="diretorfilme" class="form-control" id="filmeInput" >
            </div>
            <div class="mb-3 form-check">
                <label for="classificacaoInput" class="form-label">Classificação:</label>
                <input type="text" name="classificacaofilme" class="form-control" id="generoInput">
            </div>
            <div class="mb-3 form-check">
                <label for="duracaoInput" class="form-label">Duração:</label>
                <input type="number" name="duracaofilme" class="form-control" id="duracaofilmeInput" >
            </div>
            <div class="mb-3 form-check">
                <label for="categoriaInput" class="form-label">Categoria:</label>
                <input type="text" name="categoriafilme" class="form-control" id="categoriafilmeInput" >
            </div>
            <div class="mb-3 form-check">
                <label for="sinopseInput" class="form-label">Sinopse:</label>
    <textarea class="form-control" name= "sinopsefilme" id="sinopseInput" rows="3"></textarea>
            </div>
            <div class="mb-3 form-check">
                <label for="capaInput" class="form-label">Capa:</label>
                <input class="form-control" name="capafilme" type="file" id="capaInput">
              </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>


       
        

@endsection