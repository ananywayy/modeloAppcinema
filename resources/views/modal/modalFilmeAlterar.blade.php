
<!-- Modal -->
<div class="modal fade" id="modalAlterarFilme-{{$dadosFilmes->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Alterar filme</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body text-light">
            
        <form enctype="multipart/form-data" method="post" action="{{route('alterar-banco-filme',$dadosFilmes->id)}}">
        @method('put')
        @csrf
            <div class="mb-3 form-check">
                <label for="filmeInput" class="form-label">Filme:</label>
                <input type="text" name="nomefilme" value="{{$dadosFilmes->nomefilme}}" class="form-control" id="filmeInput" >
            </div>
            <div class="mb-3 form-check">
                <label for="atoresInput" class="form-label">Atores:</label>
                <input type="text" name="atoresfilme" value="{{$dadosFilmes->atoresfilme}}" class="form-control" id="atoresInput">
            </div>
            <div class="mb-3 form-check">
                <label for="dataLancamentoInput" class="form-label">Data de Lançamento:</label>
                <input type="date" name="datalancamentofilme" value="{{$dadosFilmes->datalancamentofilme}}" class="form-control" id="datalancamentoInput" >
            </div>
            <div class="mb-3 form-check">
                <label for="sinopseInput" class="form-label">Sinopse:</label>
    <textarea class="form-control" name= "sinopsefilme" id="sinopseInput" rows="3">{{$dadosFilmes->sinopsefilme}}</textarea>
            </div>
            <div class="mb-3 form-check">
                <label for="capaInput" class="form-label">Capa:</label>
                <input class="form-control" name="capafilme" value="{{$dadosFilmes->capafilme }}" type="file" id="capaInput">
            </div>
              
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>