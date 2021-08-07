@extends('principal')

@section('conteudo')

<link rel="stylesheet" href="/css/tabela.css">
 
<table class = "table table-bordered table-hover table-striped">
        
        <thead >

            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>

        </thead>

        <tbody>
        
            @foreach($equipamentos as $e)

                <tr>
                    <td>{{$e->id}}</td>
                    <td>{{$e->nome}}</td>
                </tr>

            @endforeach

        </tbody>
      
    </table>

@endsection