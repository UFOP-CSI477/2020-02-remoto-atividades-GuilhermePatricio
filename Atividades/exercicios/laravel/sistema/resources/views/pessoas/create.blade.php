@extends('principal')

@section('conteudo')

<form action = "{{ route('pessoas.store') }}" method = "POST" class="was-validated">

                @csrf

                <div class="row">   
                    <div class="col">
                        <label for ="nome">Nome</label>
                        <input type="text" name = "nome" class="form-control" placeholder="Nome da" id="nome" required>

                        <div class="valid-feedback">
                            Tudo certo!
                        </div>

                        <div class="invalid-feedback">
                            Por favor, informe o nome do produto!
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cidade_id">cidade</label>

                        <select name="cidade_id" id="cidade_id" class="form-control">

                            @foreach($cidades as $e)
                                <option value="{{$e->id}}">{{$e->nome}}</option>
                            @endforeach

                        </select>
                    </div>

                </div>

            <input class="btn btn-secondary botoes" type="submit" value="Adicionar" name="btnAdicionar">
    </form>

@endsection