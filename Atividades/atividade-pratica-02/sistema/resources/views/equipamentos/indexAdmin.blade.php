@extends('principal')

@section('conteudo')


 
<a href="{{ route('equipamentos.create') }}"><button class=" botoes btn btn-danger">Inserir</button></a>

<table class = "table table-bordered table-hover table-striped">
        
        <thead>

            <tr>
                <th style="width:20px">ID</th>
                <th style="width:100px">Nome</th>
                <th style="width:50px">Atualizar</th>
                <th style="width:50px">Apagar</th>
            </tr>

        </thead>

        <tbody>
            
            @foreach($equipamentos as $e)

                <tr>
                    <td >{{$e->id}}</td>
                    <td>{{$e->nome}}</td>
                    <td><a type = "button" class = "btn btn-danger" href="">Editar</a></td>
                    <td><a type = "button" class = "btn btn-danger" href="">Excluir</a></td>
                </tr>

            @endforeach

        </tbody>
      
    </table>

@endsection