@extends('dashboard.layout-dash.layout')

@section('title', 'Administrativo')

@section('conteudo')

    <div class="dash-func">
        <h1>Funcionários</h1>

        <div>
            <a href="#">Adicionar Funcionário</a>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Gustavo</td>
                    <td>11 99999-9999</td>
                    <td>Dentista</td>
                    <td>R$ 2000</td>
                    <td>Ativo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Gustavo</td>
                    <td>11 99999-9999</td>
                    <td>Admin</td>
                    <td>R$ 9000</td>
                    <td>Ativo</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Gustavo</td>
                    <td>11 99999-9999</td>
                    <td>Gerente</td>
                    <td>R$ 5000</td>
                    <td>Ativo</td>
                </tr>
            </tbody>
        </table>

    </div>

@endsection
