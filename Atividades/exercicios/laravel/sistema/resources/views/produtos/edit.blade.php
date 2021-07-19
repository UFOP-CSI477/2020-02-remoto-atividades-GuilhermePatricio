@extends('principal')

@section('conteudo')

<form action = "{{ route('produtos.update', $produto->id) }}" method = "POST" class="was-validated">

                @csrf
                @method('PUT')
                
                <div class="row">   
                    <div class="col">
                        <label for ="nome">Nome</label>
                        <input type="text" name = "nome" class="form-control" placeholder="Nome do produto" id="nome" value = "{{ $produto->nome }}" required>

                        <div class="valid-feedback">
                            Tudo certo!
                        </div>

                        <div class="invalid-feedback">
                            Por favor, informe o nome do produto!
                        </div>
                    </div>

                    <div class="col">
                        <label for ="nome">Unidade</label>
                        <input type="text" name = "unidade" class="form-control" placeholder="Unidade de medida" id="unidade" value = "{{ $produto->um }}" required>

                        <div class="valid-feedback">
                            Tudo certo!
                        </div>

                        <div class="invalid-feedback">
                            Por favor, informe uma unidade!
                        </div>
                    </div>

                </div>

            <input class="btn btn-secondary botoes" type="submit" value="Atualizar" >
    </form>

@endsection