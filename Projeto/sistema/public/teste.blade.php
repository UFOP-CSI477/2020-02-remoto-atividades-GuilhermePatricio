
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="livro.js" defer></script>
</head>

<body id = "bg">
    
<body onload="backgroud()" >
   
<form action="{{route(livros.store)}}" method = "POST">
    @csfr
    <?php
        
        $titulo = $_POST['titulo'];
        echo $titulo;

        if(empty($titulo)){
            die('Informe os dados corretamente!');
        }
            
    ?>
      <input type="text" name = "titulo" class="form-control" id="titulo" value = '$titulo' required>
     <input class="btn btn-secondary botoes" type="submit" value="Adicionar" name="btnAdicionar">
</form>
    
</body>