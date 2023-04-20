@extends('padrao')

@section('content')
<div class="container">
    <div class="mt-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Pesquisar:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword">
        </div>
    </div>
</div>

<div class="container my-3">
    <table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Alterar</th>
        <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto@gmail.com</td>
        <td>x</td>
        <td>x</td>
        </tr>
    </tbody>
    </table>
</div>



@endsection