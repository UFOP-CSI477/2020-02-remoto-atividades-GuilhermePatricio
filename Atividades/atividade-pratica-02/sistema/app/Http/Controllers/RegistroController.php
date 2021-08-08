<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\Equipamento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relatorios = Livro::orderby('data_limite')->get();
        return view('relatorios.index', ['relatorios' => $relatorios]);
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {   
        if(Auth::check()){

            $registros = Registro::orderby('data_limite')->get();
            return view('registros.indexAdmin', ['registros' => $registros]);
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

            $equipamentos = Equipamento::orderBy('nome')->get();
            $users = User::orderBy('nome')->get();
    
            return view('registros.create',['equipamentos' => $equipamentos,'users' => $users]);
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

            /*if($request->nome == ""){
                session()->flash('mensagem', 'Digite o nome do equipamento!');
                return;
            }
         */
            Registro::create($request->all());
            session()->flash('mensagem', 'Registro inserido com sucesso!');
            return redirect()->route('registros.indexAdmin');
        }

        session()->flash('mensagem', 'Operação negada, faça o login para continuar!');
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        if(Auth::check()){
            return view('registros.edit', [ 'registro' => $registro ]);
        }

        session()->flash('mensagem', 'Operação negada, faça o login para continuar!');
        return redirect()->route('login');
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
        if(Auth::check()){
            $registro->fill($request->all());
            $registro->save();

            session()->flash('mensagem', 'Registro atualizado com sucesso!');
            return redirect()->route('registros.indexAdmin');
        }

        session()->flash('mensagem', 'Operação negada, faça o login para continuar!');
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        if(Auth::check()){

            $registro->delete();
            session()->flash('mensagem', 'Registro excluido com sucesso!');

            return redirect()->route('registros.indexAdmin');
        }

        session()->flash('mensagem', 'Operação negada, faça o login para continuar!');
        return redirect()->route('login');
    }
}

