@extends('principal')

@section('conteudo')

<link rel="stylesheet" href="tabela.css">
 
<a href="{{ route('cidades.create') }}"><button class=" botoes btn btn-danger">Inserir</button></a>



<table class = "table table-bordered table-hover table-striped">
        
        <thead >
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Estado</th>
                <th>Exibir</th>
            </tr>
           
        </thead>

        <tbody>
        
            @foreach($cidades as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->nome}}</td>
                    <td>{{ $c->estado->nome }}-{{ $c->estado->sigla }}</td>
                    <td><a href="{{ route('cidades.show', $c->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
      
    </table>

@endsection