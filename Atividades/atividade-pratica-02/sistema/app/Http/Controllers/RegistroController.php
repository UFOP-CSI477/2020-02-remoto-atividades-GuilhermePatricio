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
        $registro = Registro::orderby('data_limite')->get();
        return view('registros.index', ['registros' => $registro]);
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
            
            $data = explode("-",$request->data_limite);
            $d = $data[0];
            $m = $data[1];
            $y = $data[2];
            
            if (count($data) == 3 && checkdate($m,$d,$y)){
                session()->flash('mensagem', 'Por favor, digite uma data valida!');
                return $this->create();
            }
            
            if($request->equipamento_id == "" || $request->user_id =="" || $request->tipo == ""){
                session()->flash('mensagem', 'Por favor, selecione uma opção!');
                return $this->create();
            }

            if($request->descricao == ""){
                session()->flash('mensagem','Por favor, informe uma descrição!');
                return $this->create();
            }
            
            Registro::create($request->all());
            session()->flash('mensagem', 'Registro inserido com sucesso!');
            return redirect()->route('registros.indexAdmin');
        }

        session()->flash('mensagem', 'Operação negada, faça o login para continuar!');
        return redirect()->route('login');
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
            $equipamentos = Equipamento::orderBy('nome')->get();
            $users = User::orderBy('nome')->get();
            return view('registros.edit', [ 'registro' => $registro,'equipamentos' => $equipamentos,'users' => $users]);
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

            $data = explode("-",$request->data_limite);
            $d = $data[0];
            $m = $data[1];
            $y = $data[2];
            
            if (count($data) == 3 && checkdate($m,$d,$y)){
                session()->flash('mensagem', 'Por favor, digite uma data valida!');
                return $this->edit($registro);
            }
            
            if($request->equipamento_id == "" || $request->user_id =="" || $request->tipo == ""){
                session()->flash('mensagem', 'Por favor, selecione uma opção!');
                return $this->edit($registro);
            }

            if($request->descricao == ""){
                session()->flash('mensagem','Por favor, informe uma descrição!');
                return $this->edit($registro);
            }
            
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

