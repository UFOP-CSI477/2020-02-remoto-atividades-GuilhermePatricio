@extends('principal')

@section('conteudo')

<table id ="tabela" class = "table table-bordered table-hover table-striped">
        
        <thead>

            <tr>
                <tr><th class = "titulo" colspan="3">Total de aplicações por vacinas</th></tr>
                <th>Vacina</th>
                <th>Quantidade</th>
                <th>Porcentagem</th>
            </tr>

        </thead>

        <tbody>

            <?php

                $total = 0;

                foreach ($vacinas as $v) {
                    $total += $v->registro->count();
                }
            ?>

            @if($total>0)

                @foreach($vacinas as $v)

                    <tr>
                        <td>{{$v->nome}}</td>
                        <td>{{$v->registro->count()}}</td>
                        <td>{{ number_format($v->registro->count()*100/$total, 2, '.')}}%</td>
                    </tr>

                @endforeach

                <tr>
                    <td><strong>TOTAL GERAL</strong></td>
                    <td><strong>{{$total}}</strong></td>
                    <td><strong>{{$total*100/$total}}%</strong></td>
                </tr>

            @else

                <tr>
                    <td><strong>TOTAL GERAL</strong></td>
                    <td><strong>{{$total}}</strong></td>
                    <td><strong>{{$total}}%</strong></td>
                </tr>

            @endif

        </tbody>
      
    </table>

@endsection