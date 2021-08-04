<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *@param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function verifica(Request $request)
    {
        if ($_POST ["editar"]) {
            edit($request);
            // O usuário clica no botão Salvar, manipula de acordo
        }
        
        if ($_POST ["remover"]) {
            store($request);
        }
         
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $livros = Livro::orderby('titulo')->get();
        return view('livros.index', ['livros' => $livros]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Livro::create($request->all());
        session()->flash('mensagem', 'Livro adicionado com sucesso!');
        return redirect()->route('principal');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show(Livro $livro)
    {
        //return view('livros.show', [ 'livro' => $livro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function edit(Livro $livro)
    {
        return redirect()->route('principal');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livro $livro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livro $livro)
    {
        $livro->delete();
        session()->flash('mensagem', 'Estado excluído com sucesso!');
    
        return redirect()->route('livros.index');
    }
}
