@extends('principal')

@section('conteudo')

<a href="{{ route('unidades.create') }}"><button class=" botoes btn btn-danger">Cadastrar</button></a>

<table id ="tabela" class = "table table-bordered table-hover table-striped">
        
        <thead>

            <tr>
                <th style="width:20px">ID</th>
                <th style="width:100px">Nome</th>
                <th style="width:100px">Bairro</th>
                <th style="width:100px">Cidade</th>
            </tr>

        </thead>

        <tbody>
        
            @foreach($unidades as $u)

                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->nome}}</td>
                    <td>{{$u->bairro}}</td>
                    <td>{{$u->cidade}}</td>
                </tr>

            @endforeach

        </tbody>
      
    </table>

@endsection