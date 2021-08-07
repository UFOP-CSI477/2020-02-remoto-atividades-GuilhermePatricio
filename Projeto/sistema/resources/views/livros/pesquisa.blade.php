@extends('principal')

@section('conteudo')

<div>
    
    <div id = "pesquisa" class = "pesquisa">
        <form  class="was-validated">
            <div class="row">   
                <div class="col">
                
                    <input type="text" name = "livro" placeholder="Pesquise um livro" class="form-control" id="inputPesquisa" required>

                    <div class="valid-feedback">
                        Tudo certo!
                    </div>

                    <div class="invalid-feedback">
                        Por favor, informe o nome do livro que deseja pesquisar!
                    </div>

                </div>

                <div class="col">
                    <button class="btn btn-secondary bi bi-search" type="button"  id="btnPesquisar" onclick = "pesquisarLivro(livro.value)">
                </div>
            </div>
        </form>
    </div>

    <div id = "alerta" class="alert alert-danger">
        Insira o titulo do livro que deseja buscar!
    </div>

</div>

@endsection
