@extends('principal')

@section('conteudo')

<h2 class="pb-2 border-bottom">Editar registro</h2>

<a href="{{ route('registros.index') }}"><button class="voltar btn btn-secondary bi bi-arrow-left"></button></a>

<form  id = "form" action = "{{route('registros.update', $registro->id) }}" method = "POST" class="was-validated">

    @csrf
    @method('PUT')

    <div class = "row linha">

        
        <div class = "col">

            <label for="pessoa_id"><strong>Pessoa:</strong></label>
            <select name="pessoa_id" class="form-control" required>
                
                <option value = "{{$registro->pessoa->id}}">{{$registro->pessoa->nome}}</option>

                @foreach($pessoas as $p)
                    <option value="{{$p->id}}">{{$p->nome}}</option>
                @endforeach

            </select>

            <div class="valid-feedback">
                Tudo certo!
            </div>

            <div class="invalid-feedback">
                Por favor, selecione uma pessoa!
            </div>

        </div>

    
        <div class = "col">

            <label for="equip"><strong>Unidade:</strong></label>
            <select name="unidade_id" class="form-control" required>
        
                <option value = "{{$registro->unidade->id}}">{{$registro->unidade->nome}}</option>

                @foreach($unidades as $u)
                    <option value="{{$u->id}}">{{$u->nome}}</option>
                @endforeach

            </select>

            <div class="valid-feedback">
                Tudo certo!
            </div>

            <div class="invalid-feedback">
                Por favor, selecione a unidade!
            </div>

        </div>


        <div class = "col">

            <script>

                function alterDose(){
                   
                    let e = document.getElementById("vacina_id");
                    let dose = e.options[e.selectedIndex].id;
                    document.getElementById("dose").value = dose;
                }

            </script>

            <label for="equip"><strong>Vacina:</strong></label>
            <select id = "vacina_id" name="vacina_id" class="form-control" onchange = "alterDose()" required>

            <option value = "{{$registro->vacina->id}}"> {{$registro->vacina->nome}}</option>
           
                @foreach($vacinas as $v)
                    <option id = "{{$v->doses}}" value="{{$v->id}}">{{$v->nome}}</option>
                @endforeach

            </select>

            <div class="valid-feedback">
                Tudo certo!
            </div>

            <div class="invalid-feedback">
                Por favor, selecione a unidade!
            </div>

        </div>

        
        <div class = "col">

            
            <label for ="dose"><strong>Doses:</strong></label>
           
            <select readonly = "readonly" name="dose" id="dose" class="form-control" value = "">
                
                <option value = "{{$registro->dose}}">{{$registro->dose}}</option>
                <option value = "0">0-Dose única</option>
                <option value = "1">1-Primeira Dose</option>
                <option value = "2">2-Segunda Dose</option>
            
            </select>
        </div>

        
        <div class="col">

            <label for ="data"><strong>Data:</strong></label>
            <input type="date" name = "data" class="form-control" placeholder="dd/mm/aaaa" id="data" min="2020-01-01" max="2050-01-01" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" value = "{{$registro->data}}"required>
            
            <div class="valid-feedback">
                Tudo certo!
            </div>
        
            <div class="invalid-feedback">
                Por favor, informe a data da vacinação!
            </div>

        </div>

    
    </div>

    <div>
        <input id = "btnCadastrar" class="btn btn-danger" type="submit" value="Atualizar" name="btnAdicionar">
    </div>
        

    </form>
   

@endsection('conteudo')