@extends('principal')

@section('conteudo')


<body onload="backgroud()">

    <h2 class="pb-2 border-bottom">Meus livros</h2>

    <a href="{{ route('livros.pesquisa') }}"><button class="voltar btn btn-dark bi bi-arrow-left"></button></a>

    <div class = "row" id = "grid2">
   
        @foreach($livros as $l)
            
            <form id = "{{$l->id}}" class="card"  name = "card" style="height:530px" method = "post" action = "{{route('livros.verificaOpcao',$l->id)}}">

            @csrf
            
                @if($l->favorito == 1)
                    <button name = "favoritar" value = "Favoritar" class = "fav btn btn-warning bi bi-star-fill" onclick ="confirma(form.id,'removerFav')" ></button>
                @else
                    <button name = "favoritar" value = "Favoritar"class = " fav btn btn-warning bi bi-star" onclick ="confirma(form.id,'adicionarFav')" ></button>
                @endif
                
                <img id = "thumb" class="card-img-top" src="{{$l->thumb}}" alt="Card image cap">

                <div class="card-body">

                    <h5 class="card-title">{{$l->titulo}}</h5>
                    <p class="card-text">{{$l->autor}}</p>
                    <a href="{{$l->url}}" type = "button" class="btn btn-primary">Ver mais</a>                 
                    <button name = "remover" value = "Remover"class = "btn btn-danger" onclick ="confirma(form.id,'removerLivro')" >Remover</button>
                    
                </div>

                <div class="estrelas">

                    <input type="radio" name="estrela" id="{{$loop->iteration}}+1" value="5"/>
                    <label for="{{$loop->iteration}}+1"></label>
                       
                    <input type="radio" name="estrela" id="{{$loop->iteration}}+2" value="4"/>
                    <label for="{{$loop->iteration}}+2"></label>

                    <input type="radio" name="estrela" id="{{$loop->iteration}}+3" value="3"/>
                    <label for="{{$loop->iteration}}+3"></label>

                    <input type="radio" name="estrela" id="{{$loop->iteration}}+4" value="2"/>
                    <label for="{{$loop->iteration}}+4"></label>

                    <input type="radio" name="estrela" id="{{$loop->iteration}}+5" value="1"/>
                    <label for="{{$loop->iteration}}+5"></label>   

                @switch($l->nota)

                    @case(1)
                        <script>  document.getElementById("{{$loop->iteration}}+5").checked = true;</script>
                        @break

                    @case(2)
                        <script>  document.getElementById("{{$loop->iteration}}+4").checked = true;</script>
                        @break

                    @case(3)
                        <script>  document.getElementById("{{$loop->iteration}}+3").checked = true;</script>
                        @break
                    
                    @case(4)
                        <script>  document.getElementById("{{$loop->iteration}}+2").checked = true;</script>
                        @break

                    @case(5)
                        <script>  document.getElementById("{{$loop->iteration}}+1").checked = true;</script>
                        @break

                @endswitch
                    
                </div>
              
                <button  name = "avaliar" value = "Avaliar" class = "btn btn-warning av" onclick ="confirma(form.id,'avaliar')">Avaliar</button>
            </form>

        @endforeach

</div>
    
</body>

@endsection