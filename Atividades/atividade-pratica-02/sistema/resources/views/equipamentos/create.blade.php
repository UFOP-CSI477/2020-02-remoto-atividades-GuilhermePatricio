@extends('principal')

@section('conteudo')

<form  id = "addEquip" action = "{{ route('equipamentos.store') }}" method = "POST" class="was-validated">

    @csrf

    <label for ="nome">Nome</label>
        
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