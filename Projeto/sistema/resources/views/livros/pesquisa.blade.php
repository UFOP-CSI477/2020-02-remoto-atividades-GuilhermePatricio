@extends('principal')

@section('conteudo')

<div >

    <div id = "pesquisa" class = "pesquisa">
    <form  class="was-validated">
        <div class="row">   
            <div class="col">
            
                <input type="text" name = "livro" placeholder="Pesquise um livro" class="form-control" id="livro" required>

                <div class="valid-feedback">
                    Tudo certo!
                </div>

                <div class="invalid-feedback">
                    Por favor, informe o nome do livro!
                </div>
            </div>

            <div class="col">
                <input class="btn btn-secondary " type="button" value="Pesquisar" name="btnPesquisar" onclick = "pesquisarLivro(livro.value)">
            </div>
        </div>
    </form>

    </div>

    <div id = "alerta" class="alert alert-danger">
        Insira o titulo do livro que deseja buscar!
    </div>

</div>

@endsection
