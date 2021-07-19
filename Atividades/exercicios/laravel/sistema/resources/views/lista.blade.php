<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista produtos</title>
</head>

<body>
   
    <?php

        for ($i = 0; $i < count($dados); $i++){
            echo "<strong>Nome: </strong>" . $dados[$i]->nome;
            echo " <strong>Unidade: </strong>" . $dados[$i]->um;
        }
    
    ?>
    

</body>
</html>