@extends('principal')

@section('conteudo')

<h2 class="pb-2 border-bottom">Adicionar registro</h2>

<form id = "addEquip" action = "{{ route('registros.store') }}" method = "POST" class="was-validated">

    @csrf

    <div class = "row linha">

        
        <div class="col">

            <label for ="data"><strong>Data limite:</strong></label>
            <input type="text" name = "data_limite" class="form-control" placeholder="dd/mm/aaaa" id="data" required>
            
            <div class="valid-feedback">
                Tudo certo!
            </div>
        
            <div class="invalid-feedback">
                Por favor, informe a data da manutenção!
            </div>

        </div>
        
        <div class = "col">

            <label for="equip"><strong>Equipamento:</strong></label>
            <select name="equipamento_id" id="equip" class="form-control" require>
            
                <option>Selecione</option>

                @foreach($equipamentos as $e)
                    <option value="{{$e->id}}">{{$e->nome}}</option>
                @endforeach

            </select>

            <div class="valid-feedback">
                Tudo certo!
            </div>

            <div class="invalid-feedback">
                Por favor, selecione o equipamento!
            </div>

        </div>

    
        <div class = "col">

            <label for="equip"><strong>Usuário:</strong></label>
            <select name="user_id" id="user" class="form-control" require>
           
                <option>Selecione</option>
                
                @foreach($users as $u)
                    <option value="{{$u->id}}">{{$u->name}}</option>
                @endforeach

            </select>

            <div class="valid-feedback">
                Tudo certo!
            </div>

            <div class="invalid-feedback">
                Por favor, selecione o usuario!
            </div>

        </div>

        <div class = "col">

            <label for ="tipo"><strong>Tipo de manutenção:</strong></label>
            
            <input type="text" name = "tipo" class="form-control" placeholder="1-Preventiva, 2-Corretiva, 3-Urgente" id="tipo" required>
                
            <div class="valid-feedback">
                Tudo certo!
            </div>
            
            <div class="invalid-feedback">
                Por favor, informe qual o tipo de manutenção!
            </div>             
            
        </div>


        <div >

            <label for ="desc"><strong>Descrição:</strong></label>
            
            <input type="text" name = "descricao" class="form-control" placeholder="Descrição da manutenção/problema" id="desc" required>
            
            <div class="valid-feedback">
                Tudo certo!
            </div>
        
            <div class="invalid-feedback">
                Por favor, informe a descrição da manutenção!
            </div>
        
        </div>
    
    </div>

    <div>
        <input id = "btnCadastrar" class="btn btn-secondary" type="submit" value="Adicionar" name="btnAdicionar">
    </div>
        

    </form>
   

@endsection('conteudo')