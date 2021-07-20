@extends('principal')

@section('conteudo')

<h1>Dados da compra</h1>

<p>Id: {{ $compra->id }}</p>
<p>Pessoa: {{ $compra->pessoa->nome }}</p>
<p>Produto: {{ $compra->produto->nome }}</p>


<a href="{{ route('compras.edit',$compra->id) }}"><button class=" botoes btn btn-danger">Editar</button></a>

<a href="{{ route('compras.index') }}"><button class=" botoes btn btn-danger">Voltar</button></a>

<form name="formDelete" action="{{route('compras.destroy',$compra->id)}}" method="post" onsubmit="return confirm('Deseja excluir esse compra?')">

   
    @csrf
    @method('DELETE')

    <input class="btn btn-danger botoes" type="submit" value="excluir">

</form>
@endsection