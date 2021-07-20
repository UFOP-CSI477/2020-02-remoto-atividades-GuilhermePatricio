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
        
            @foreach($pessoas as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->nome}}</td>
                    <td>{{ $p->cidade->nome }}</td>
                    <td><a href="{{ route('cidades.show', $p->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
      
    </table>

@endsection