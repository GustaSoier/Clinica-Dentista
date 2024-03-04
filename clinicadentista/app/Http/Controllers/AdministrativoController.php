<?php

namespace App\Http\Controllers;

use App\Models\Funcionarios;
use Illuminate\Http\Request;

class AdministrativoController extends Controller
{
    public function index(){

        //Recuperando o id do paciente na sessão
        $idAdmin = session('id');

        //Buscando o paciente pelo id no banco de dados
        $admin = Funcionarios::find($idAdmin);

        //Verficcando se o paciente foi encontrado
        if(!$admin){
            //Se o paciente não for encontrado, você pode redirecionar, para umapágina de erro ou fazer outra ação
            abort(404, 'Paciente não encontrado');
        }

        return view('dashboard.administrativo.index', compact('admin'));
    }

    public function indexFunc(){
        $idFunc = session('id');
        $func = Funcionarios::find($idFunc);
        $listaFunc = Funcionarios::all();

        return view('dashboard.administrativo.funcionarios.index', compact('func', 'listaFunc'));
    }

    public function createFuncionario()
    {

        $idFunc = session('id');
        $func = Funcionarios::find($idFunc);

        if (!$func) {
            abort(404, 'Funcionário não encontrado');
        }
        return view('dashboard.administrativo.funcionarios.create');
    }


    public function cadFunc(Request $request)
    {
        $request->merge(['contratacaoFuncionario' => now()]);

        $request->validate([
            'nomeFuncionario'       => 'required|string|max:255',
            'dataNascFuncionario'=> 'required|date',
            'foneFuncionario'    => 'required|string|max:20',
            'enderecoFuncionario'      => 'required|string|max:255',
            'cidadeFuncionario'     => 'required|string|max:100',
            'estadoFuncionario'     => 'required|string|max:50',
            'cepFuncionario'     => 'required|string|max:10',
            'dataContratacaoFuncionario'     => 'date',
            'cargoFuncionario'     => 'required|string|max:100',
            'salarioFuncionario'     => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'tipoFuncionario' => ['required', Funcionarios::in(['admin', 'dentista'])],
            'statusFuncionario'     => ['required', Funcionarios::in(['ativo', 'inativo'])],
        ]);

        // Obter o último funcionário ou definir o ID inicial como 0
        $ultimoFunc = Funcionarios::latest('id')->first();
        $ultimoID = $ultimoFunc ? $ultimoFunc->id : 0;

        // Incrementar o ID para o próximo funcionário
        $proximoID = $ultimoID + 1;

        // Criar um novo objeto de funcionário e preencher com os dados do request
        $funcionario = new Funcionarios();

        $funcionario->id                           = $proximoID;
        $funcionario->nomeFuncionario              = $request->input('nomeFuncionario');
        $funcionario->dataNascFuncionario      = $request->input('dataNascFuncionario');
        $funcionario->foneFuncionario          = $request->input('foneFuncionario');
        $funcionario->enderecoFuncionario            = $request->input('enderecoFuncionario');
        $funcionario->cidadeFuncionario            = $request->input('cidadeFuncionario');
        $funcionario->estadoFuncionario            = $request->input('estadoFuncionario');
        $funcionario->cepFuncionario            = $request->input('cepFuncionario');
        $funcionario->dataContratacaoFuncionario            = $request->input('dataContratacaoFuncionario');
        $funcionario->cargoFuncionario            = $request->input('cargoFuncionario');
        $funcionario->salarioFuncionario            = $request->input('salarioFuncionario');
        $funcionario->tipoFuncionario            = $request->input('tipoFuncionario');
        $funcionario->statusFuncionario            = $request->input('statusFuncionario');

        // Salvar o novo funcionário no banco de dados
        $funcionario->save();

        // Retornar uma resposta de sucesso ou redirecionar para uma página apropriada
        return redirect()->route('admin.func.index')->with('sucesso', 'Funcionário cadastrado com sucesso!');
    }



    public function editFunc($id)
    {

        $idFunc = session('id');
        $func = Funcionarios::find($id);



        return view('dashboard/administrativo/funcionarios/edit', compact('func'));
    }


    public function updateFunc(Request $request, $id)
    {

        $request->merge(['contratacaoFuncionario' => now()]);

        $request->validate([
            'nomeFuncionario'       => 'required|string|max:100',
            'contratacaoFuncionario'   => 'required|date',
            'salarioFuncionario'    => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'cargoFuncionario'      => 'required|string|max:50',
            'statusFuncionario'     => 'required|string|max:10',
        ]);

        $func = Funcionarios::findOrFail($id);

        $func->update($request->only([
            'nomeFuncionario',
            'contratacaoFuncionario',
            'salarioFuncionario',
            'cargoFuncionario',
            'statusFuncionario',
        ]));

        return redirect()->route('admin.func.index')->with('success', 'Funcionário atualizado com sucesso');
    }


    public function desativarFunc($id)
    {
        $func = Funcionarios::findOrFail($id);
        $func->update(['statusFuncionario' => 'inativo']);

        return redirect()->route('admin.func.index')->with('success', 'Funcionário desativado com sucesso');
    }
}
