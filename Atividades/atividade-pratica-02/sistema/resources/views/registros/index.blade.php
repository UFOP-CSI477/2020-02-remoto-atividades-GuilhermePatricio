@extends('principal')

@section('conteudo')
 
<table id= "tabelaRegis" class = "table table-bordered table-hover table-striped">
        
        <thead >

            <tr>
                <th>Data limite</th>
                <th>Nome do Equipamento</th>
                <th>Nome do usuário</th>
                <th>Tipo da manutenção</th>
                <th>Descrição da manutenção</th>
            </tr>

        </thead>

        <tbody>
        
            @foreach($registros as $r)

            
                <tr>
                    <td>{{$r->data_limite}}</td>
                    <td>{{$r->equipamento->nome}}</td>
                    <td>{{$r->user->name}}</td>

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