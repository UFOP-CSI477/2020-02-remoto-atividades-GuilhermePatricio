@extends('principal')

@section('conteudo')

<h2 class="pb-2 border-bottom">Editar equipamento</h2>

<form  id = "addEquip" action = "{{ route('equipamentos.update',$equipamento->id) }}" method = "POST" class="was-validated">

    @csrf
    @method('PUT')

    <label for ="nome"><strong>Nome</strong></label>
        
        <input type="text" name = "nome" class="form-control" placeholder="Nome do produto" id="nome" required>
      
        <div class="valid-feedback">
            Tudo certo!
        </div>

        <div class="invalid-feedback">
            Por favor, informe o nome do equipamento!
        </div>
                
        <div>
            <input id = "btnAtualizar" class="btn btn-secondary" type="submit" value="Atualzar">
        </div>
        

    </form>
   

@endsection('conteudo')