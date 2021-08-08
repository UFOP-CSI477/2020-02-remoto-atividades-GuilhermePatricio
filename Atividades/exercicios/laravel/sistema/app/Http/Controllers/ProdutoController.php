<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $produtos = Produto::orderBy('nome')->get();
        return view('produtos.index',['produtos' =>$produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // method = "post" action = "store"
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $produto = new Produto;
       $produto->nome = $request->nome;
       $produto->um = $request->unidade;
       $produto->save();
       //Produto :: create($request->all());
       session()->flash('mensagem','Produto cadastrado com sucesso!');
       return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('produtos.show',['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        return view('produtos.edit',['produto'=>$produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->fill($request->all());
        $produto->save();

        session()->flash('mensagem', 'Produto atualizado com sucesso!');
        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        if ( $produto->compras->count() > 0 ) {
            session()->flash('mensagem', 'Exclusão não permitida! Existem compras associadas.');
        } else {
            $produto->delete();
            session()->flash('mensagem', 'Produto excluída com sucesso!');
        }
        return redirect()->route('produto.index');
    }
}
