@extends('principal')

@section('conteudo')

<form action = "{{ route('compras.update', $produto->id) }}" method = "POST" class="was-validated">

                @csrf
                @method('PUT')
                
                <div class="row">   
                
                    <div class="form-group">
                        <label for="pessoa_id">Pessoa</label>

                        <select name="pessoa_id" id="pessoa_id" class="form-control">

                            @foreach($pessoas as $e)
                                <option value="{{$e->id}}"

                                @if($pessoa->pessoa_id == $e->id)
                                    selected
                                @endif

                                >{{$e->nome}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="produto_id">produto</label>

                        <select name="produto_id" id="produto_id" class="form-control">

                            @foreach($produtos as $e)
                                <option value="{{$e->id}}"

                                @if($produto->produto_id == $e->id)
                                    selected
                                @endif

                                >{{$e->nome}}</option>
                            @endforeach

                        </select>
                    </div>

                </div>

            <input class="btn btn-secondary botoes" type="submit" value="Atualizar" >
    </form>

@endsection