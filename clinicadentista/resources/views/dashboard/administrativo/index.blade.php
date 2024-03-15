@extends('dashboard.layout-dash.layout')

@section('title', 'Administrativo')

@section('conteudo')

<h1>Administrativo</h1>


<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-200">

        <div class="card-body text-center">
            <span>255</span>
          <h5 class="card-title">Visitas ao site</h5>
          <p class="card-text">Quantos visitantes tivemos em nosso site.</p>
        </div>

      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <div class="card-body text-center">
            <span>7</span>
          <h5 class="card-title">Funcionários</h5>
          <p class="card-text">Quantos funcionários temos cadastrados.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <div class="card-body text-center">
            <span>28</span>
          <h5 class="card-title">Pacientes</h5>
          <p class="card-text">Quantos funcionários temos cadastrados.</p>
        </div>
      </div>
    </div>
  </div>

@endsection
