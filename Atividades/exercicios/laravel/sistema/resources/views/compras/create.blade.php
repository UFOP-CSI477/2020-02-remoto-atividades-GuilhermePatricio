@extends('principal')

@section('conteudo')

<form action = "{{ route('compras.store') }}" method = "POST" class="was-validated">

                @csrf

                <div class="row">

                    <div class="form-group">
                        <label for="pessoa_id">pessoa</label>

                        <select name="pessoa_id" id="pessoa_id" class="form-control">

                            @foreach($pessoas as $e)
                                <option value="{{$e->id}}">{{$e->nome}}</option>
                            @endforeach

                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="produto_id">produto</label>

                        <select name="produto_id" id="produto_id" class="form-control">

                            @foreach($produtos as $p)
                                <option value="{{$p->id}}">{{$p->nome}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="data">Data</label>
                        <input type="text" class="form-control" name="data" id="data">
                    </div>

                </div>

            <input class="btn btn-secondary botoes" type="submit" value="Adicionar" name="btnAdicionar">
    </form>

@endsection