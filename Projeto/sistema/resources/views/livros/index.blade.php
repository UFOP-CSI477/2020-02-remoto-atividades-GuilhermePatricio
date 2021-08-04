@extends('principal')

@section('conteudo')


<body onload="backgroud()">

    <div class = "row" id = "grid2">
   
        @foreach($livros as $l)

            <form id = "ts" class="card"  name = "card" style="height:490px" method = "post" onsubmit="return confirm('Deseja remover esse livro?')" action = "{{route('livros.verifica', $l->id)}}" >

            @csrf
            @method('DELETE')

                <button id = "{{$l->id}}" name = "editar" class = "fav btn btn-warning bi bi-star" onclick = "addFavorito({{$l->id}})"></button>
                
                <img id = "thumb" class="card-img-top" src="{{$l->thumb}}" alt="Card image cap">
                
                <div class="card-body">

                    <h5 class="card-title">{{$l->titulo}}</h5>
                    <p class="card-text">{{$l->autor}}</p>

                    <a href="{{$l->url}}" type = "button" class="btn btn-primary">Ver mais</a>                 
                    <input value = "Remover" name = "remover" type = "submit" class="btn btn-danger">
                
                </div>
                
            </form>

            <!--   <form action="{{route('livros.edit',$l->id)}}">

                <div class="estrelas">
                    <input type="radio" name="estrela" id="estrela5" value="5"/>
                    <label for="estrela5"></label>

                    <input type="radio" name="estrela" id="estrela4" value="4"/>
                    <label for="estrela4"></label>
                
                    <input type="radio" name="estrela" id="estrela3" value="3"/>
                    <label for="estrela3"></label>
                
                    <input type="radio" name="estrela" id="estrela2" value="2"/>
                    <label for="estrela2"></label>
                
                    <input type="radio" name="estrela" id="estrela1" value="1"/>
                    <label for="estrela1"></label>
                </div>
                                
            </form> -->
         


            
           
        @endforeach

</div>
   

    
</body>

@endsection