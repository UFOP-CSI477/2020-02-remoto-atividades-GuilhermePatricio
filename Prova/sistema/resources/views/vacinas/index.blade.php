@extends('principal')

@section('conteudo')

<a href="{{ route('vacinas.create') }}"><button class=" botoes btn btn-danger">Cadastrar</button></a>

<table id ="tabelaEquip" class = "table table-bordered table-hover table-striped">
        
        <thead >

            <tr>
                <th style="width:20px">ID</th>
                <th style="width:100px">Nome</th>
                <th style="width:100px">Fabricante</th>
                <th style="width:100px">Doses</th>
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