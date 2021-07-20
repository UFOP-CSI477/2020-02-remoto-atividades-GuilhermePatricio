<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\Cidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Cidade::orderBy('nome')->get();
        return view('pessoas.index', [ 'pessoas' => $pessoas ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ( Auth::check() ) {
            // if (Auth::user()->type == 1)
            $cidades = Estado::orderBy('nome')->get();
            return view('cidades.create', ['cidades' => $cidades]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pessoa::create($request->all());
        session()->flash('mensagem', 'Pessoa inserida com sucesso!');
        return redirect()->route('pessoas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
         return view('pessoas.show', ['pessoa' => $pessoa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        $cidades = Estado::orderBy('nome')->get();
        return view('pessoas.edit',
            ['pessoa' => $pessoa,
             'cidades' => $cidades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        $pessoa->fill($request->all());
        $pessoa->save();

        session()->flash('mensagem', 'pessoa atualizada com sucesso!');
        return redirect()->route('pessoas.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();
        session()->flash('mensagem', 'pessoa excluída com sucesso!');
        return redirect()->route('pessoas.index');

    }
}
