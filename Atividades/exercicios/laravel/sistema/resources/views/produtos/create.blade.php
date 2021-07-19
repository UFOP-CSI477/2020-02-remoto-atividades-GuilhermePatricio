@extends('principal')

@section('conteudo')

<form action = "{{ route('produtos.store') }}" method = "POST" class="was-validated">

                @csrf

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

            <input class="btn btn-secondary botoes" type="submit" value="Adicionar" name="btnAdicionar">
    </form>

@endsection