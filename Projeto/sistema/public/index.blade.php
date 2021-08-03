@extends('principal')

@section('conteudo')

<body onload="backgroud()">
<?php
        
        $titulo = $_POST['titulo'];
        echo $titulo;

        if(empty($titulo)){
            die('Informe os dados corretamente!');
        }
    
?>

</body>

@endsection