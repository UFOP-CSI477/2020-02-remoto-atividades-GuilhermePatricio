@extends('principal')

@section('conteudo')

<table id ="tabela" class = "table table-bordered table-hover table-striped">
        
        <thead>

            <tr>
                <th style="width:20px">ID</th>
                <th style="width:100px">Nome</th>
                <th style="width:100px">Bairro</th>
                <th style="width:100px">Cidade</th>
                <th style="width:20px">Excluir</th>
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

                            <button type = "submit" class = "btn btn-secondary bt">Excluir</button>

                        </form>

                    </td>
                </tr>

            @endforeach

        </tbody>
      
    </table>

@endsection