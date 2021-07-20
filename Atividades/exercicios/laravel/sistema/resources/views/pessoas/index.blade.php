@extends('principal')

@section('conteudo')

<link rel="stylesheet" href="tabela.css">
 
<a href="{{ route('pessoas.create') }}"><button class=" botoes btn btn-danger">Inserir</button></a>

<table class = "table table-bordered table-hover table-striped">
        
        <thead >
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Exibir</th>
            </tr>
           
        </thead>

        <tbody>
        
            @foreach($pessoas as $e)
                <tr>
                    <td>{{$e->id}}</td>
                    <td>{{$e->nome}}</td>
                    <td>{{ $e->cidade->nome }}-{{ $e->cidade->sigla }}</td>
                    <td><a href="{{ route('cidades.show', $e->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
      
    </table>

@endsection