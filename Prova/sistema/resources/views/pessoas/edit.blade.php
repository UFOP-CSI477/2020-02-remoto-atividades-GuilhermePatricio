@extends('principal')

@section('conteudo')

<h2 class="pb-2 border-bottom">Editar Pessoa</h2>

<a href="{{ route('pessoas.index') }}"><button class="voltar btn btn-danger bi bi-arrow-left"></button></a>

<form  id = "form" action = "{{ route('pessoas.update',$pessoa->id) }}" method = "POST" class="was-validated">

    @csrf
    @method('PUT')

    <div class = "row linha">

        <div class = "col">
            
            <label for ="nome"><strong>Nome:</strong></label>
            
            <input value = "{{$pessoa->nome}}" type="text" name = "nome" class="form-control" placeholder="Nome completo" id="nome" required>
        
            <div class="valid-feedback">
                Tudo certo!
            </div>

            <div class="invalid-feedback">
                Por favor, informe o nome da pessoa!
            </div>

        </div>


        <div class = "col">
            
            <label for ="cidade"><strong>Cidade:</strong></label>

            <input value = "{{$pessoa->cidade}}" type="text" name = "cidade" class="form-control" placeholder="Nome do cidade" id="cidade" required>

            <div class="valid-feedback">
                Tudo certo!
            </div>

            <div class="invalid-feedback">
                Por favor, informe o nome da cidade!
            </div>

        </div>


        <div class = "col">
        
            <label for ="bairro"><strong>Bairro:</strong></label>

            <input value = "{{$pessoa->bairro}}" type="text" name = "bairro" class="form-control" placeholder="Nome do bairro" id="bairro" required>

            <div class="valid-feedback">
                Tudo certo!
            </div>

            <div class="invalid-feedback">
                Por favor, informe o nome do bairro!
            </div>

        </div>


        <div class = "col">
        
            <label for ="data"><strong>Data de nascimento:</strong></label>
            <input value = "{{$pessoa->data_nascimento}}" type="date" name = "data_nascimento" class="form-control" placeholder="dd/mm/aaaa" id="data" min="1900-01-01" max="2050-01-01" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" required>
            
            <div class="valid-feedback">
                Tudo certo!
            </div>
        
            <div class="invalid-feedback">
                Por favor, informe a data de nascimento!
            </div>

        </div>

    </div>
       
        <div>
            <input id = "btnCadastrar" class="btn btn-secondary" type="submit" value="Atualizar" name="btnAdicionar">
        </div>
        

</form>
   

@endsection('conteudo')