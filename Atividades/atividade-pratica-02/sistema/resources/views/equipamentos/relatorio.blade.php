@extends('principal')

@section('conteudo')

<table id ="tabelaEquip" class = "table table-bordered table-hover table-striped">
        
        <thead >

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Manutenções</th>
                <th>Qtd registros associados</th>
            </tr>

        </thead>

        <tbody>
        
            @foreach($equipamentos as $e)

                <tr>
                    <td>{{$e->id}}</td>
                    <td>{{$e->nome}}</td>

                    @if($e->registro->count() > 0)

                        
                    <td>
                        @foreach($e->registro as $r)

                           {{$r->descricao}},

                        @endforeach
                    
                    </td>

                        <td>{{$e->registro->count()}}</td>
        
                    @else
                        <td>0</td>
                        <td>0</td>
                    @endif
                    
                </tr>

            @endforeach

        </tbody>
      
    </table>

@endsection