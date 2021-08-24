@extends('principal')

@section('conteudo')

<table id ="tabelaUnidade" class = "table table-bordered table-hover table-striped">
        
        <thead>
            <tr><th class = "titulo" colspan="5">Unidades</th></tr>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Excluir</th>
            </tr>

        </thead>

        <tbody>
        
            @foreach($unidades as $u)

                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->nome}}</td>
                    <td>{{$u->bairro}}</td>
                    <td>{{$u->cidade}}</td>

                      <td>

                        <form action="{{route('unidades.destroy',$u->id)}}"  method="post" onsubmit="return confirm('Deseja excluir essa unidade?')">

                        @csrf
                        @method('DELETE')

                            <button type = "submit" class = "btn btn-danger bt">Excluir</button>

                        </form>

                    </td>
                </tr>

            @endforeach

        </tbody>
      
    </table>

@endsection