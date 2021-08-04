@extends('principal')

@section('conteudo')


<body onload="backgroud()">

    <div class = "row" id = "grid2">
   
        @foreach($livros as $l)

            <form class="card"  name = "card" style="height:490px" method = "post" onsubmit="return confirm('Deseja remover esse livro?')" action = "{{route('livros.destroy', $l->id)}}">

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


            <form action="{{route('livros.edit',$l->id)}}">

                <div class="nota">
                    <input type="submit" id="estrela1" name="nota" value="1" /><label for="estrela1"></label>
                    <input type="submit" id="estrela2" name="nota" value="2" /><label for="estrela3"></label>
                    <input type="submit" id="estrela3" name="nota" value="3" /><label for="estrela3"></label>
                    <input type="submit" id="estrela4" name="nota" value="4" /><label for="estrela4"></label>
                    <input type="submit" id="estrela5" name="nota" value="5" /><label for="estrela5"></label>
                </div>

            </form>


        @endforeach

</div>
   

    
</body>

@endsection