@extends('principal')

@section('conteudo')

<h1>Dados do produto</h1>

<p><strong>ID: </strong>{{ $produto->id }}</p>
<p><strong>Nome: </strong>{{ $produto->nome }} </p>
<p><strong>Unidade: </strong> {{ $produto->um }}</p>


<a href="{{ route('produtos.edit',$produto->id) }}"><button class=" botoes btn btn-danger">Editar</button></a>
<a href="{{ route('produtos.index') }}"><button class=" botoes btn btn-danger">Voltar</button></a>

<form name="formDelete" action="{{route('produtos.destroy',$produto->id)}}" method="post" onsubmit="return confirm('Deseja excluir esse produto?')">

   
    @csrf
    @method('DELETE')

    <input class="btn btn-danger botoes" type="submit" value="excluir">

</form>

@endsection