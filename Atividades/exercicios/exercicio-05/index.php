<!DOCTYPE html>
<html lang="br">

    <head>
        <title>Cadastro</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    </head>

    <body>

        <form action = "validar.php" method = "POST" class="was-validated">
            <div class="row">   
                <div class="col">
                    <label for ="nome">Nome</label>
                    <input type="text" name = "nome" class="form-control" placeholder="Nome Completo" id="nome" required>

                    <div class="valid-feedback">
                        Tudo certo!
                    </div>

                    <div class="invalid-feedback">
                        Por favor, informe seu nome completo!
                    </div>
                </div>
                
                <div class="col">
                    <label for="CPF" >CPF:</label>
                    <input class ="form-control" type = "text" name = "CPF" id = "CPF" placeholder="---.---.--" required>

                    <div class="valid-feedback">
                        Tudo certo!
                    </div>

                    <div class="invalid-feedback">
                        Por favor, informe seu CPF!
                    </div>
                </div>

                <div class="col">
                    <label for="nascimento">Data de nascimento</label>
                    <input type="text" class="form-control" name = "nascimento" placeholder="dd/mm/aaaa" id="nascimento" required>

                    <div class="valid-feedback">
                        Tudo certo!
                    </div>

                    <div class="invalid-feedback">
                        Por favor, informe sua data de nascimento!
                    </div>
                </div>
            
                <div class="row">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name = "endereco" placeholder="Endereço" id="endereco" required>

                    <div class="valid-feedback">
                        Tudo certo!
                    </div>

                    <div class="invalid-feedback">
                        Por favor, informe seu endereço!
                    </div>
                </div>
    
                <div class="col">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name = "cidade" placeholder="Cidade" id="cidade" required>

                    <div class="valid-feedback">
                        Tudo certo!
                    </div>

                    <div class="invalid-feedback">
                        Por favor, informe sua cidade!
                    </div>
                </div>
    
                <div class="col">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name = "estado" placeholder="Estado" id="estado" required>

                    <div class="valid-feedback">
                        Tudo certo!
                    </div>

                    <div class="invalid-feedback">
                        Por favor, informe seu estado!
                    </div>
                </div>
    
                <div class="col">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" name = "cep" placeholder="0000-000" id="cep" required>

                    <div class="valid-feedback">
                        Tudo certo!
                    </div>

                    <div class="invalid-feedback">
                        Por favor, informe seu CEP!
                    </div>
                </div>
            
                <div class="col">
                    <label for="email" >Email:</label>
                    <input class="form-control" type = "text" name = "email" id = "email" required>

                    <div class="valid-feedback">
                        Tudo certo!
                    </div>

                    <div class="invalid-feedback">
                        Por favor, informe seu email!
                    </div>
                </div>
    
                <div class="col">
                    <label for="telefone" >Telefone:</label>
                    <input class="form-control" type = "text" name = "telefone" id = "telefone" placeholder="(DDD)+ Numero" required>

                    <div class="valid-feedback">
                        Tudo certo!
                    </div>

                    <div class="invalid-feedback">
                        Por favor, informe seu telefone!
                    </div>
                </div>
    
                <div>
                    <label>Gênero:</label>
    
                    <div class="form-group form-check">
                        <input class = "form-check-input" type="radio" name="genero" id="feminino" value = "F">
                       
                        <label class="form-check-label" for="feminino">Feminino</label>
                        
                    </div>
    
                    <div class="form-group form-check">
                        <input class = "form-check-input"  type="radio" name="genero" id="masculino" value = "M">
                        <label  class="form-check-label" for="masculino">Masculino</label>
                    </div>
    
                    <div class="form-group form-check">
                        <input class = "form-check-input"  type="radio" name="genero" id="nao binario" value="NB">
                        <label  class="form-check-label" for="naobinario">Não ninário</label>
                    </div>
    
                    <div class="form-group form-check">
                        <input class = "form-check-input"  type="radio" name="genero" id="semresposta" value="SR" required>
                        <label  class="form-check-label" for="semresposta">Prefiro não informar</label>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
    
                        <div class="invalid-feedback">
                            Por favor, informe seu gênero!
                        </div>
                    </div>
                </div>
            </div>
        
            <br>

        
            <input class="btn btn-secondary" type="submit" value="Cadastrar" name="btnCadastrar">
            <input class="btn btn-secondary" type="reset" value="Limpar" name="btnLimpar">
            <a href="paginaInicial.html"><button class="btn btn-danger">Voltar</button></a>

    </form>
    

</body>

</html>