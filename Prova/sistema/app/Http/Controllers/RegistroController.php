<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\Vacina;
use App\Models\Unidade;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro = Registro::orderby('data')->get();
        //dd($registro);
        return view('registros.index', ['registros' => $registro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vacinas = Vacina::orderBy('nome')->get();
        $unidades = Unidade::orderBy('nome')->get();
        $pessoas = Pessoa::orderBy('nome')->get();

        return view('registros.create',['pessoas' => $pessoas,'unidades' => $unidades,'vacinas' => $vacinas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        Registro::create($request->all());
        session()->flash('mensagem', 'Registro inserido com sucesso!');
        return redirect()->route('registros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        $vacinas = Vacina::orderBy('nome')->get();
        $unidades = Unidade::orderBy('nome')->get();
        $pessoas = Pessoa::orderBy('nome')->get();

        return view('registros.edit', [ 'registro' => $registro,'vacinas' => $vacinas,'unidades' => $unidades,'pessoas' => $pessoas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        $registro->fill($request->all());
        $registro->save();

        session()->flash('mensagem', 'Registro atualizado com sucesso!');
        return redirect()->route('registros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        $registro->delete();
        session()->flash('mensagem', 'Registro excluido com sucesso!');

        return redirect()->route('registros.index');
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function appGeral()
    {   
        $registros = Registro::orderby('nome')->get();
         return view('registros.appGeral', ['registros' => $registros]);

    }

}

