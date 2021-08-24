@extends('principal')

@section('conteudo')

<a href="{{ route('vacinas.create') }}"><button class=" botao btn btn-danger">Adicionar</button></a>

<table id ="tabela" class = "table table-bordered table-hover table-striped">
        
        <thead >
            <tr><th class = "titulo" colspan="4">Vacinas</th></tr>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Fabricante</th>
                <th>Doses</th>
            </tr>

        </thead>

        <tbody>
        
            @foreach($vacinas as $v)

                <tr>
                    <td>{{$v->id}}</td>
                    <td>{{$v->nome}}</td>
                    <td>{{$v->fabricante}}</td>

                    @if($v->doses == 0)

                        <td>0 - Dose única</td>

                    @elseif($v->doses == 1)

                        <td>1 - Primeira Dose</td>

                    @elseif($v->doses == 2)
                    
                        <td>2 - Segunda Dose"</td>
                    @endif
                </tr>

            @endforeach

        </tbody>
      
    </table>

@endsection