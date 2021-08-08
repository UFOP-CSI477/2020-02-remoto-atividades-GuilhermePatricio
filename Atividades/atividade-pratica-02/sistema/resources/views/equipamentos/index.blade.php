@extends('principal')

@section('conteudo')

<table id ="tabelaEquip" class = "table table-bordered table-hover table-striped">
        
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