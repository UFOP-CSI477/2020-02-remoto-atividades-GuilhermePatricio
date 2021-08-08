@extends('principal')

@section('conteudo')
 
<table id ="tabelaEquip" class = "table table-bordered table-hover table-striped">
        
        <thead >

            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>

        </thead>

        <tbody>
        
            @foreach($users as $u)

                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->name}}</td>
                </tr>

            @endforeach

        </tbody>
      
    </table>

@endsection