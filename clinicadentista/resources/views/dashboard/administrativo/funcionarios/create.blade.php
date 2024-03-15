@extends('dashboard.layout-dash.layout')

@section('title', 'Administrativo')

@section('conteudo')

<h1>Novo Funcionário</h1>

<form action="{{ route('admin.func.cad') }}" method="POST" class="row formulario">

    @csrf

    <div class="col-md-6 d-flex justify-center flex-column">
        <div class="form-group">
            <label for="nomeFuncionario">Nome:</label>
            <input type="text" class="form-control" @error('nomeFuncionario') is-invalid @enderror
                id="nomeFuncionario" name="nomeFuncionario" required value="{{ old('nomeFuncionario') }}" maxlength="100">
            @error('nomeFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="dataNascFuncionario">Data de Nascimento:</label>
            <input type="date" class="form-control" @error('dataNascFuncionario') is-invalid @enderror
                id="dataNascFuncionario" name="dataNascFuncionario" required value="{{ old('dataNascFuncionario') }}" maxlength="100">
            @error('dataNascFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="foneFuncionario">Telefone:</label>
            <input type="number" class="form-control" @error('foneFuncionario') is-invalid @enderror
                id="foneFuncionario" name="foneFuncionario" value="{{ old('foneFuncionario') }}" required>
            @error('foneFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="enderecoFuncionario">Endereço:</label>
            <input type="text" class="form-control" @error('enderecoFuncionario') is-invalid @enderror
                id="enderecoFuncionario" name="enderecoFuncionario" value="{{ old('enderecoFuncionario') }}" required>
            @error('enderecoFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="cidadeFuncionario">Cidade:</label>
            <input type="text" class="form-control" @error('cidadeFuncionario') is-invalid @enderror
                id="cidadeFuncionario" name="cidadeFuncionario" value="{{ old('cidadeFuncionario') }}" required>
            @error('cidadeFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="estadoFuncionario">Estado:</label>
            <input type="text" class="form-control" @error('estadoFuncionario') is-invalid @enderror
                id="estadoFuncionario" name="estadoFuncionario" value="{{ old('estadoFuncionario') }}" required>
            @error('estadoFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="cepFuncionario">CEP:</label>
            <input type="text" class="form-control" @error('cepFuncionario') is-invalid @enderror
                id="cepFuncionario" name="cepFuncionario" value="{{ old('cepFuncionario') }}" required>
            @error('cepFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="dataContratacaoFuncionario">Data da Contratação:</label>
            <input type="date" class="form-control" @error('dataContratacaoFuncionario') is-invalid @enderror
                id="dataContratacaoFuncionario" name="dataContratacaoFuncionario" value="{{ old('dataContratacaoFuncionario') }}" required>
            @error('dataContratacaoFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="cargoFuncionario">Cargo:</label>
            <input type="text" class="form-control" @error('cargoFuncionario') is-invalid @enderror
                id="cargoFuncionario" name="cargoFuncionario" value="{{ old('cargoFuncionario') }}" required>
            @error('cargoFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group">
            <label for="salarioFuncionario">Salário:</label>
            <input type="text" class="form-control" @error('salarioFuncionario') is-invalid @enderror
                id="salarioFuncionario" name="salarioFuncionario" value="{{ old('salarioFuncionario') }}" required>
            @error('salarioFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="tipoFuncionario">Tipo do Funcionário:</label>
            <input type="text" class="form-control" @error('tipoFuncionario') is-invalid @enderror
                id="tipoFuncionario" name="tipoFuncionario" value="{{ old('tipoFuncionario') }}" required>
            @error('tipoFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group">
            <label for="statusFuncionario">Status:</label>
            <select name="statusFuncionario" @error('statusFuncionario') is-invalid @enderror
                id="statusFuncionario" class="form-select">
                <option value="{{ old('statusFuncionario') }}" disabled="" selected="" hidden="">
                    Selecione o status</option>
                <option value="ativo">ativo</option>
                <option value="inativo">inativo</option>
                </select>
                @error('statusFuncionario')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
        </div>

    </div>

    {{-- <div class="botoes">
        <div class="col-md-12">
            <a href="{{ route('admin.func.index') }}" class="btn btn-primary desativar"
                style="width: 100%">voltar</a>
        </div> --}}

        <div class="col-md-12">
            <button type="submit" class="btn btn-primary enviar">enviar</button>
        </div>
    </div>
</form>

@endsection
