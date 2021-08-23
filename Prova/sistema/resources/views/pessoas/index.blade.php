@extends('principal')

@section('conteudo')

<table id ="tabelaMaior" class = "table table-bordered table-hover table-striped">
        
        <thead >

            <tr>
                <th style="width:20px">ID</th>
                <th style="width:150px">Nome</th>
                <th style="width:100px">Bairro</th>
                <th style="width:100px">Cidade</th>
                <th style="width:20px">Data de nascimento</th>
                <th style="width:20px">Editar</th>
            </tr>

        </thead>

        <tbody>
        
            @foreach($pessoas as $p)

                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->nome}}</td>
                    <td>{{$p->bairro}}</td>
                    <td>{{$p->cidade}}</td>
                    <td>{{$p->data_nascimento}}</td>
                    <td><a type = "button" class = "btn btn-secondary bt" href="{{route('pessoas.edit',$p->id)}}">Editar</a></td>
                </tr>

            @endforeach

        </tbody>
      
    </table>

@endsection