<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de estados</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="tabela.css">

</head>

<body>
    
    <table class = "table">
        
        <thead>
            <th>Nome</th>
            <th>Sigla</th>
            <?php

                while($e = $estados->fetch()) {
                    echo "<tr>" ."<td>".$e["nome"] ."</td>". "<td>" .$e['sigla'] ."</td>"."</tr>";
                   
                }

            ?>

        </thead>
      
    </table>
    
   
</body>
</html>