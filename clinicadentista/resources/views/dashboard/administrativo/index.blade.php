@extends('dashboard.layout-dash.layout')

@section('title','Contato')

@section('conteudo')

<h1></h1>

<table class="table table-bordered table-hover"">
    <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Gustavo</td>
          <td>Soier</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Gustavo</td>
          <td>Soier</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Gustavo</td>
          <td>Soier</td>
          <td>@twitter</td>
        </tr>
      </tbody>
</table>

@endsection
