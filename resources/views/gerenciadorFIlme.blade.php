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

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


@endsection