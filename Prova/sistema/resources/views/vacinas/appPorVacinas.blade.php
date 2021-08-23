@extends('principal')

@section('conteudo')

<table id ="tabela" class = "table table-bordered table-hover table-striped">
        
        <thead >

            <tr>
                <th style="width:20px">Vacina</th>
                <th style="width:100px">Quantidade</th>
                <th style="width:100px">Porcentagem</th>
            </tr>

        </thead>

        <tbody>

            <?php

                $total = 0;

                foreach ($vacinas as $v) {
                    $total += $v->registro->count();
                }

            ?>

            @foreach($vacinas as $v)

                <tr>
                    <td>{{$v->nome}}</td>
                    <td>{{$v->registro->count()}}</td>
                    <td>{{ number_format($v->registro->count()*100/$total, 2, '.')}}%</td>
                </tr>

            @endforeach
            <tr>
                <td>TOTAL GERAL</td>
                <td>{{$total}}</td>
                <td>{{$total*100/$total}}%</td>
            </tr>
            
            
            

        </tbody>
      
    </table>

@endsection