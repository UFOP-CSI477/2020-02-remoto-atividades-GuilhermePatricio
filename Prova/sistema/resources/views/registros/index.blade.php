@extends('principal')

@section('conteudo')

<a href="{{ route('registros.create') }}"><button class=" botoes btn btn-danger">Cadastrar</button></a>

<table id ="tabelaMaior" class = "table table-bordered table-hover table-striped">
        
        <thead>

            <tr>
                <th style="width:20px">ID</th>
                <th style="width:150px">Pessoa</th>
                <th style="width:100px">Unidade</th>
                <th style="width:100px">Vacina</th>
                <th style="width:20px">Dose</th>
                <th style="width:20px">Data</th>
                <th style="width:20px">Editar</th>
                <th style="width:20px">Excluir</th>
            </tr>

        </thead>

        <tbody>
        
            @foreach($registros as $r)

                <tr>
                    <td>{{$r->id}}</td>
                    <td>{{$r->pessoa->nome}}</td>
                    <td>{{$r->unidade->nome}}</td>
                    <td>{{$r->vacina->nome}}</td>
                    <td>{{$r->doses}}</td>
                    <td>{{$r->data}}</td>
                    <td><a type = "button" class = "btn btn-secondary bt" href="{{route('registros.edit',$r->id)}}">Editar</a></td>

                    <td>

                        <form action="{{route('registros.destroy',$r->id)}}"  method="post" onsubmit="return confirm('Deseja excluir esse registro?')">

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