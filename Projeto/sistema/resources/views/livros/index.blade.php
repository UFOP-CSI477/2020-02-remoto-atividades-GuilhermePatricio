@extends('principal')

@section('conteudo')


<body onload="backgroud()">

    <div class = "row" id = "grid2">
   
        @foreach($livros as $l)

            <form class="card"  name = "card" style="height:490px" form method = "post" onsubmit="return confirm('Deseja remover esse livro?')" action = "{{route('livros.destroy', $l->id)}}">

            @csrf
            @method('DELETE')

                <button id = "{{$l->id}}" class = "fav btn btn-warning bi bi-star" onclick = "addFavorito({{$l->id}})"></button>
                <img id = "thumb" class="card-img-top" src="{{$l->thumb}}" alt="Card image cap">
                
                <div class="card-body">

                    <h5 class="card-title">{{$l->titulo}}</h5>
                    <p class="card-text">{{$l->autor}}</p>

                    <a href="{{$l->url}}" type = "button" class="btn btn-primary">Ver mais</a>                 
                    <input value = "Remover" type = "submit" class="btn btn-danger">
        
                </div>
                
            </form>

        @endforeach

</div>
   

    
</body>

@endsection