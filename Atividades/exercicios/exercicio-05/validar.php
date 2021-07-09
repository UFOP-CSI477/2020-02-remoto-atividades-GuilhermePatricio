<!DOCTYPE html>
<html lang="en">
    <head>
   
        <title>Dados cadastrais</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>

    <body>

        <?php
            $nome = $_POST['nome'];
            $cpf = $_POST['CPF'];
            $nascimento = $_POST['nascimento'];
            $endereco = $_POST['endereco'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $cep = $_POST['cep'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $genero = $_POST['genero'];
            
            echo "<p class=\"text-light bg-dark\"><strong>Nome: </strong> $nome</p>";
            echo "<p class=\"text-light bg-dark\"><strong>CPF: </strong> $cpf</p>";
            echo "<p class=\"text-light bg-dark\"><strong>Data de nascimento: </strong> $nascimento</p>";
            echo "<p class=\"text-light bg-dark\"><strong>Endereço: </strong> $endereco</p>";
            echo "<p class=\"text-light bg-dark\"><strong>Cidade: </strong> $cidade</p>";
            echo "<p class=\"text-light bg-dark\"><strong>Estado: </strong> $estado</p>";
            echo "<p class=\"text-light bg-dark\"><strong>CEP: </strong> $cep</p>";
            echo "<p class=\"text-light bg-dark\"><strong>e-mail: </strong> $email</p>";
            echo "<p class=\"text-light bg-dark\"><strong>Telefone: </strong> $telefone</p>";
            echo "<p class=\"text-light bg-dark\"><strong>Gênero: </strong> $genero</p>";
        ?>
        
    </body>
   