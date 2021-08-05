<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $livros = Livro::orderby('favorito','desc')->get();
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
        /*$livros = Livro::orderby('titulo')->get();
        
        foreach($livros as $l){
            if($request->titulo == $l->titulo){
                return;           
            }
            else{
                Livro::create($request->all());
                return;
            }
        }
*/
        Livro::create($request->all());
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function updateFav(Request $request, Livro $livro)
    {
        if($livro->favorito == 1){
            $livro->favorito = 0;
        }

        else{
            $livro->favorito = 1;
        }

        $livro->fill($request->all());
        $livro->save();

        session()->flash('mensagem', 'Livro adicionado aos favoritos com sucesso!');
    }
/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function updateNota(Request $request, Livro $livro)
    {
        $livro->nota = $request->estrela;
        $livro->fill($request->all());
        $livro->save();

        session()->flash('mensagem', 'Livro avaliado com sucesso!');
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
        session()->flash('mensagem', 'Livro excluído com sucesso!');
    
    }

    
    /**
     * Display a listing of the resource.
     * @param  \App\Models\Livro
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function verificaOpcao(Request $request,Livro $livro)

    {
     
        if ($request->editar == 'Editar') {
            
            $this->updateFav($request,$livro);
        }
        
        else if ($request->remover == 'Remover') {

            $this->destroy($livro);
        }
        
        else if ($request->avaliar == 'Avaliar') {

            $this->updateNota($request,$livro);
          
        }
        return redirect()->route('livros.index');
    }
}
