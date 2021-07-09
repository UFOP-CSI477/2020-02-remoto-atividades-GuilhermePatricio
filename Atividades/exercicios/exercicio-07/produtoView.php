<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de produtos</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="tabela.css">

</head>

<body>
    
    <a href="produtoInsert.php"><button class=" botoes btn btn-danger">Inserir</button></a>
    
    <table class = "table">
        
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Unidade</th>

            <?php

                while($e = $estados->fetch()) {
                    echo "<tr>" ."<td>".$e["id"] ."</td>". "<td>" .$e['nome'] ."</td>". "<td>" .$e['unidade'] ."</td>"."</tr>";
                   
                }

            ?>

        </thead>
      
    </table>
    
   
</body>
</html>