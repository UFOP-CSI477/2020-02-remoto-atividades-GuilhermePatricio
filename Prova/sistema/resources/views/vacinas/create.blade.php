@extends('principal')

@section('conteudo')

<h2 class="pb-2 border-bottom">Adicionar Vacina</h2>

<a href="{{ route('vacinas.index') }}"><button class="voltar btn btn-danger bi bi-arrow-left"></button></a>

<form  id = "form" action = "{{ route('vacinas.store') }}" method = "POST" class="was-validated">

    @csrf

    <div class = "row linha">

        <div class = "col">
            
            <label for ="nome"><strong>Nome:</strong></label>
            
            <input type="text" name = "nome" class="form-control" placeholder="Nome da vacina" id="nome" required>
        
            <div class="valid-feedback">
                Tudo certo!
            </div>

            <div class="invalid-feedback">
                Por favor, informe o nome da vacina!
            </div>

        </div>


        <div class = "col">
        
            <label for ="fabricante"><strong>Fabricante:</strong></label>

            <input type="text" name = "fabricante" class="form-control" placeholder="Nome do fabricante" id="fabricante" required>

            <div class="valid-feedback">
                Tudo certo!
            </div>

            <div class="invalid-feedback">
                Por favor, informe o fabricante da vacina!
            </div>

        </div>
    
        <div class = "col">

            <label for ="doses"><strong>Doses:</strong></label>
           
            <select name="doses" id="doses" class="form-control" required>

                <option value = "">Selecione</option>
                <option value = "0">0-Dose única</option>
                <option value = "1">1-Primeira Dose</option>
                <option value = "2">2-Segunda Dose</option>
            
            </select>
                
            <div class="valid-feedback">
                Tudo certo!
            </div>

            <div class="invalid-feedback">
                Por favor, informe qual a dose!
            </div>             

        </div>


    </div>
       
        <div>
            <input id = "btnCadastrar" class="btn btn-secondary" type="submit" value="Adicionar" name="btnAdicionar">
        </div>
        

</form>
   

@endsection('conteudo')