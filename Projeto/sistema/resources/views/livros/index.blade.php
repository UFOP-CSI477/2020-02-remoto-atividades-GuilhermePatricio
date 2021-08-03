@extends('principal')

@section('conteudo')

<body onload="backgroud()">

    <div class = "row" id = "grid2">

        @foreach($livros as $l)

            <div class="card" name = "card" style="height:490px">

                <button id = "fav" href="#" type = "button" class="btn btn-warning bi bi-star" onclick = "addFavorito()">
               
                </button>

                <img id = "thumb" class="card-img-top" src="{{$l->thumb}}" alt="Card image cap">
                <div class="card-body">

                    <h5 class="card-title">{{$l->titulo}}</h5>
                    <p class="card-text">{{$l->autor}}</p>
                    <a href="#" type = "button" class="btn btn-danger">Ver mais</a>
        
                </div>

            </div>

         @endforeach

    </div>
   

    
</body>

@endsection