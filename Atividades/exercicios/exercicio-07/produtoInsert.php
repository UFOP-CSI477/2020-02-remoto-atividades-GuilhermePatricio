<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="tabela.css">

</head>


<body>
    
    <form action = "produtoController.php" method = "POST" class="was-validated">
                <div class="row">   
                    <div class="col">
                        <label for ="nome">Nome</label>
                        <input type="text" name = "nome" class="form-control" placeholder="Nome do produto" id="nome" required>

                        <div class="valid-feedback">
                            Tudo certo!
                        </div>

                        <div class="invalid-feedback">
                            Por favor, informe o nome do produto!
                        </div>
                    </div>

                    <div class="col">
                        <label for ="nome">Unidade</label>
                        <input type="text" name = "unidade" class="form-control" placeholder="Unidade de medida" id="unidade" required>

                        <div class="valid-feedback">
                            Tudo certo!
                        </div>

                        <div class="invalid-feedback">
                            Por favor, informe uma unidade!
                        </div>
                    </div>

                </div>

            <input class="btn btn-secondary" type="submit" value="Adicionar" name="btnAdicionar">
    </form>

</body>
</html>