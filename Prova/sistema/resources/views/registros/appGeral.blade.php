@extends('principal')

@section('conteudo')

<table id ="tabela" class = "table table-bordered table-hover table-striped">
        
        <thead >

            <tr>
                <th style="width:20px">Vacina</th>
                <th style="width:100px">Quantidade</th>
            </tr>

        </thead>

        <tbody>

            <?php

                $primeira = 0;
                $segunda = 0;
                $unica = 0;

                foreach ($registros as $r) {
                    if($r->dose == 1){
                        $primeira++;
                    }
                    else if($r->dose == 2){
                        $segunda++;
                    }
                    else if($r->dose == 0){
                        $unica++;
                    }
                }

            ?>

            <tr>
                <td>Dose única</td>
                <td>{{$unica}}</td>
            </tr>
            
            <tr>
                <td>Primeira Dose</td>
                <td>{{$primeira}}</td>
            </tr>
            
            <tr>
                <td>Segunda Dose</td>
                <td>{{$segunda}}</td>
            </tr>

            <tr>
                <td><strong>TOTAL GERAL</strong></td>
                <td><strong>{{$primeira+$segunda+$unica}}</strong></td>
            </tr>

        </tbody>
     
    </table>

@endsection