@extends('principal')

@section('conteudo')

<table id ="tabelaMaior" class = "table table-bordered table-hover table-striped">
        
        <thead >
            <tr><th class = "titulo" colspan="6">Pessoas</th></tr>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Data de nascimento</th>
                <th>Editar</th>
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
                    <td style="text-align:center"><a type = "button" class = "btn btn-secondary bt" href="{{route('pessoas.edit',$p->id)}}">Editar</a></td>
                </tr>

            @endforeach

        </tbody>
      
    </table>

@endsection