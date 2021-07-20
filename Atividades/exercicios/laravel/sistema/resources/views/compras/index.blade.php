@extends('principal')

@section('conteudo')

<link rel="stylesheet" href="tabela.css">
 
<a href="{{ route('compras.create') }}"><button class=" botoes btn btn-danger">Inserir</button></a>

<table class = "table table-bordered table-hover table-striped">
        
        <thead >
            <tr>
                <th>ID</th>
                <th>Pessoa</th>
                <th>Produto</th>
                <th>Data</th>
                <th>Exibir</th>
            </tr>
           
        </thead>

        <tbody>
        
            @foreach($compras as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->pessoa->nome }}</td>
                    <td>{{$p->produto->nome }}</td>
                    <td>{{$p->data}}</td>
                    <td><a href="{{ route('compras.show', $p->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
      
    </table>

@endsection