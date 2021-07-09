
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de estados</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


</head>

<body>
    <?php

        require "connection.php";

        $nome = $_POST['nome'];
        $unidade = $_POST['unidade'];

        if(empty($nome) || empty($unidade)){
            echo '<div> <a href="produtoInsert.php"><button class=" botoes btn btn-secondary">Voltar</button></a> </div>';
            die('Informe os dados corretamente!');
        }

        try{

            $connection->beginTransaction();
            $stmt = $connection->prepare("INSERT INTO produtos (nome,unidade) VALUES (:nome,:unidade)");

            $stmt ->bindParaM(':nome',$nome);
            $stmt ->bindParaM(':unidade',$unidade);
    
            $stmt->execute();
    
            $connection->commit();

            header('Location: index.php');
            exit();
        }catch(Exception $e){
            $connection->rollBack();
            die("Erro ao inserir o produto ".$e->getMessage());
        }
       
    ?>
</body>
