<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipamentos = Equipamento::orderby('nome')->get();
        return view('equipamentos.index', ['equipamentos' => $equipamentos]);
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {   
        if(Auth::check()){

            $equipamentos = Equipamento::orderby('nome')->get();
            return view('equipamentos.indexAdmin', ['equipamentos' => $equipamentos]);
        }

        session()->flash('mensagem', 'Operação negada, faça o login para continuar!');
        return redirect()->route('login');
         
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        if(Auth::check()){

            return view('equipamentos.create');
        }

        session()->flash('mensagem', 'Operação negada, faça o login para continuar!');
        return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(Auth::check()){

            if($request->nome == ""){
                session()->flash('mensagem', 'Digite o nome do equipamento!');
                return;
            }
         
            Equipamento::create($request->all());
            session()->flash('mensagem', 'Equipamento inserido com sucesso!');
            return redirect()->route('equipamentos.indexAdmin');
        }

        session()->flash('mensagem', 'Operação negada, faça o login para continuar!');
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamento $equipamento)
    {
        if(Auth::check()){

        }

        session()->flash('mensagem', 'Operação negada, faça o login para continuar!');
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipamento $equipamento)
    {
        if(Auth::check()){
            return view('equipamentos.edit', [ 'equipamento' => $equipamento ]);
        }

        session()->flash('mensagem', 'Operação negada, faça o login para continuar!');
        return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipamento $equipamento)
    {
        if(Auth::check()){
            $equipamento->fill($request->all());
            $equipamento->save();

            session()->flash('mensagem', 'Equipamento atualizado com sucesso!');
            return redirect()->route('equipamentos.indexAdmin');
        }

        session()->flash('mensagem', 'Operação negada, faça o login para continuar!');
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipamento $equipamento)
    {
        if(Auth::check()){

        }

        session()->flash('mensagem', 'Operação negada, faça o login para continuar!');
        return redirect()->route('login');
    }
}
