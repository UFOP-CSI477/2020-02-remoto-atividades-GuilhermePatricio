@extends('principal')

@section('conteudo')


 
<a href="{{ route('equipamentos.create') }}"><button class=" botoes btn btn-danger">Inserir</button></a>

<table id = "tabAdmin" class = "table table-bordered table-hover table-striped">
        
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
                    <td><a type = "button" class = "btn btn-secondary bt" href="{{route('equipamentos.edit',$e->id)}}">Editar</a></td>

                    <td>

                        <form action="{{route('equipamentos.destroy',$e->id)}}"  method="post" onsubmit="return confirm('Deseja excluir esse equipamento?')">

                        @csrf
                        @method('DELETE')

                            <button type = "submit" class = "btn btn-secondary bt">Excluir</button>

                        </form>

                    </td
                    >
                </tr>

            @endforeach

        </tbody>
      
    </table>

@endsection

