@extends('principal')

@section('conteudo')

<h2 class="pb-2 border-bottom">Adicionar equipamento</h2>

<a href="{{ route('equipamentos.indexAdmin') }}"><button class="voltar btn btn-danger bi bi-arrow-left"></button></a>

<form  id = "addEquip" action = "{{ route('equipamentos.store') }}" method = "POST" class="was-validated">

    @csrf

    <label for ="nome"><strong>Nome</strong></label>
        
        <input type="text" name = "nome" class="form-control" placeholder="Nome do produto" id="nome" required>
      
        <div class="valid-feedback">
            Tudo certo!
        </div>

        <div class="invalid-feedback">
            Por favor, informe o nome do equipamento!
        </div>
                
        <div>
            <input id = "btnCadastrar" class="btn btn-secondary" type="submit" value="Adicionar" name="btnAdicionar">
        </div>
        

    </form>
   

@endsection('conteudo')