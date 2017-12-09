<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{

    public function index()
    {
        $data = array(
            'titulo' => 'Listas de contatos',
            'contatos' => Contato::all(),
        );
        return view('contatos.index', $data);
    }


    public function create()
    {
        $data = array(
            'titulo' => 'Listas de contatos',
            'contatos' => Contato::all(),
        );
        return view('contatos.create', $data);
    }


    public function store(Request $request)
    {
        $this->validate(request(), [
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',

        ]);

        $result = Contato::create($request->all());
        if ($result) {

            return redirect()->route('contato.index')->with('sucesso', 'Cadastro feito com sucesso');
        } else {
            return redirect()->back()->with('erro', 'Não foi possivel cadastrar o contto');
        }
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $contato = Contato::findOrFail($id);
        return view('contatos.edit', compact('contato'));
    }


    public function update(Request $request, $id)
    {
        $contato = Contato::findOrFail($id);

        $result = $contato->update($request->all());
        if ($result) {

            return redirect()->route('contato.index')->with('sucesso', 'Cadastro atualizado com sucesso');
        } else {
            return redirect()->back()->with('erro', 'Não foi possivel atualizar o contto');
        }

    }


    public function destroy($id)
    {
        $result = Contato::where('id', $id)->delete();
        if ($result) {

            return redirect()->route('contato.index')->with('sucesso', 'Cadastro excluido com sucesso');
        } else {
            return redirect()->back()->with('erro', 'Não foi possivel excluir o contto');
        }

    }
}
