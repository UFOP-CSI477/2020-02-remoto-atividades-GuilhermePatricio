@extends('principal')

@section('conteudo')

<h1>Dados da Cidade</h1>

<p>Id: {{ $cidade->id }}</p>
<p>Nome: {{ $cidade->nome }}</p>
<p>Estado: {{ $cidade->estado->nome }}</p>


<a href="{{ route('cidades.edit',$cidade->id) }}"><button class=" botoes btn btn-danger">Editar</button></a>
<a href="{{ route('cidades.index') }}"><button class=" botoes btn btn-danger">Voltar</button></a>

<form name="formDelete" action="{{route('cidades.destroy',$cidade->id)}}" method="post" onsubmit="return confirm('Deseja excluir esse cidade?')">

   
    @csrf
    @method('DELETE')

    <input class="btn btn-danger botoes" type="submit" value="excluir">

</form>
@endsection