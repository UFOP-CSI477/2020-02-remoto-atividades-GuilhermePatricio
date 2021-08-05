@extends('principal')

@section('conteudo')


<body onload="backgroud()">

    <div class = "row" id = "grid2">
   
        @foreach($livros as $l)

            <form id = "{{$l->id}}" class="card"  name = "card" style="height:490px" method = "post" action = "{{route('livros.verificaOpcao',$l->id)}}">

            @csrf

                @if($l->favorito == 1)
                    <button name = "editar" value = "Editar"class = "fav btn btn-warning bi bi-star-fill" onclick ="confirma(form.id,'removerFav')" ></button>
                @else
                    <button name = "editar" value = "Editar"class = "btn btn-warning bi bi-star fav" onclick ="confirma(form.id,'adicionarFav')" ></button>
                @endif
                
                <img id = "thumb" class="card-img-top" src="{{$l->thumb}}" alt="Card image cap">
                
                <div class="card-body">

                    <h5 class="card-title">{{$l->titulo}}</h5>
                    <p class="card-text">{{$l->autor}}</p>

                    <a href="{{$l->url}}" type = "button" class="btn btn-primary">Ver mais</a>                 
                    <button name = "remover" value = "Remover"class = "btn btn-danger" onclick ="confirma(form.id,'removerLivro')" >Remover</button>
                
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