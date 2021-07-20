@extends('principal')

@section('conteudo')

<h1>Dados do Estado</h1>

<p>Id: {{ $estado->id }}</p>
<p>Nome: {{ $estado->nome }}</p>
<p>Sigla: {{ $estado->sigla }}</p>


<a href="{{ route('estados.edit',$estado->id) }}"><button class=" botoes btn btn-danger">Editar</button></a>
<a href="{{ route('estados.index') }}"><button class=" botoes btn btn-danger">Voltar</button></a>

<form name="formDelete" action="{{route('estados.destroy',$estado->id)}}" method="post" onsubmit="return confirm('Deseja excluir esse estado?')">

   
    @csrf
    @method('DELETE')

    <input class="btn btn-danger botoes" type="submit" value="excluir">

</form>

@endsection