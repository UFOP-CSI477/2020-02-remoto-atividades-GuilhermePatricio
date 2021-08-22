@extends('principal')

@section('conteudo')

<a href="{{ route('pessoas.create') }}"><button class=" botoes btn btn-danger">Cadastrar</button></a>

<table id ="tabela" class = "table table-bordered table-hover table-striped">
        
        <thead >

            <tr>
                <th style="width:20px">ID</th>
                <th style="width:100px">Nome</th>
                <th style="width:100px">Bairro</th>
                <th style="width:100px">Cidade</th>
                <th style="width:20px">Data de nascimento</th>
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
                </tr>

            @endforeach

        </tbody>
      
    </table>

@endsection