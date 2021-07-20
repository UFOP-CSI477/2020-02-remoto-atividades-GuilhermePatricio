@extends('principal')

@section('conteudo')

<h1>Dados da pessoa</h1>

<p>Id: {{ $pessoa->id }}</p>
<p>Nome: {{ $pessoa->nome }}</p>
<p>Estado: {{ $pessoa->estado->nome }}</p>

<a href="{{route('pessoas.edit', $pessoa->id)}}">Editar</a>
<a href="{{ route('pessoas.index') }}">Voltar</a>

<form name="frmDelete"
      action="{{route('pessoas.destroy', $pessoa->id)}}"
      method="post"
      onsubmit="return confirm('Confirma exclusão da pessoa?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">

</form>
@endsection