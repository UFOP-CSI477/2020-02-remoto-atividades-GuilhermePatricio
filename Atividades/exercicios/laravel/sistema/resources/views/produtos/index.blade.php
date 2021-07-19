@extends('principal')

@section('conteudo')

<link rel="stylesheet" href="tabela.css">
 
<a href="{{ route('produtos.create') }}"><button class=" botoes btn btn-danger">Inserir</button></a>



<table class = "table table-bordered table-hover table-striped">
        
        <thead >
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Unidade</th>
                <th>Exibir</th>
            </tr>
           
        </thead>

        <tbody>
        
            @foreach($produtos as $e)
                <tr>
                    <td>{{$e->id}}</td>
                    <td>{{$e->nome}}</td>
                    <td>{{$e->um}}</td>
                    <td><a href="{{ route('produtos.show', $e->id) }}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
      
    </table>

@endsection