@extends('principal')

@section('conteudo')

<a href="{{ route('registros.create') }}"><button class=" botaoR btn btn-danger">Adicionar</button></a>

<table id ="tabelaMaior" class = "table table-bordered table-hover table-striped">
        
        <thead>
            <tr><th class = "titulo" colspan="8">Registros</th></tr>
            <tr>
                <th>ID</th>
                <th>Pessoa</th>
                <th>Unidade</th>
                <th>Vacina</th>
                <th>Dose</th>
                <th>Data</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>

        </thead>

        <tbody>
        
            @foreach($registros as $r)

                <tr>
                    <td>{{$r->id}}</td>
                    <td>{{$r->pessoa->nome}}</td>
                    <td>{{$r->unidade->nome}}</td>
                    <td>{{$r->vacina->nome}}</td>
                    
                    @if($r->dose == 0)

                        <td>0 - Dose única</td>

                    @elseif($r->dose == 1)

                        <td>1 - Primeira Dose</td>

                    @elseif($r->dose == 2)

                        <td>2 - Segunda Dose"</td>
                        
                    @endif

                    <td>{{$r->data}}</td>
                    <td><a type = "button" class = "btn btn-secondary bt" href="{{route('registros.edit',$r->id)}}">Editar</a></td>

                    <td>

                        <form action="{{route('registros.destroy',$r->id)}}"  method="post" onsubmit="return confirm('Deseja excluir esse registro?')">

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