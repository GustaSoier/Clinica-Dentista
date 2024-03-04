@extends('dashboard.layout-dash.layout')

@section('title', 'Administrativo')

@section('conteudo')

    <div class="dash-func">
        <h1>Funcionários</h1>

        <div>
            <a href="{{ route('admin.func.create') }}">Adicionar Funcionário</a>
        </div>

        <table class="table table-bordered table-hover"">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Salário</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaFunc as $func)
                <tr>
                    <th scope="row">{{ $func->id }}</th>
                    <td>{{ $func->nomeFuncionario }}</td>
                    <td>{{ $func->foneFuncionario }}</td>
                    <td>{{ $func->cargoFuncionario }}</td>
                    <td>{{ $func->salarioFuncionario }}</td>
                    <td>{{ $func->statusFuncionario }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
