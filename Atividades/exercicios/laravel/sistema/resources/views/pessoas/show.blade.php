@extends('principal')

@section('conteudo')

<h1>Dados da pessoa</h1>

<p>Id: {{ $pessoa->id }}</p>
<p>Nome: {{ $pessoa->nome }}</p>
<p>Cidade: {{ $pessoa->cidade->nome }}</p>


<a href="{{ route('pessoas.edit',$pessoa->id) }}"><button class=" botoes btn btn-danger">Editar</button></a>
<a href="{{ route('pessoas.index') }}"><button class=" botoes btn btn-danger">Voltar</button></a>

<form name="formDelete" action="{{route('pessoas.destroy',$pessoa->id)}}" method="post" onsubmit="return confirm('Deseja excluir esse pessoa?')">

   
    @csrf
    @method('DELETE')

    <input class="btn btn-danger botoes" type="submit" value="excluir">

</form>

@endsection