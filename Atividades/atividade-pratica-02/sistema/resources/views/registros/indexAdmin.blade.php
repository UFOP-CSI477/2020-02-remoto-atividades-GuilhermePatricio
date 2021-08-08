@extends('principal')

@section('conteudo')

<a href="{{ route('registros.create') }}"><button class=" botoes btn btn-danger">Inserir</button></a>
 
<table class = "table table-bordered table-hover table-striped">
        
        <thead >

            <tr>
                <th>Data limite</th>
                <th>Nome do Equipamento</th>
                <th>Nome do usuário</th>
                <th>Tipo da manutenção</th>
                <th>Descrição da manutenção</th>
                <th style="width:50px">Atualizar</th>
                <th style="width:50px">Apagar</th>
                
            </tr>

        </thead>

        <tbody>
        
            @foreach($registro as $r)

                <tr>
                    <td>{{$r->data_limite}}</td>
                    <td>{{$r->equipamento->nome}}</td>
                    <td>{{$r->usuario->nome}}</td>

                    @if($r->tipo == 1)

                        <td>1 - Preventiva</td>

                    @elseif($r->tipo == 2)

                        <td>2 - Corretiva</td>

                    @elseif($r->tipo == 3)
                    
                        <td>3 - Urgente"</td>
                    
                    @endif
                    
                    <td>{{$r->descricao}}</td>

                
                </tr>

            @endforeach

        </tbody>
        
    </table>

@endsection