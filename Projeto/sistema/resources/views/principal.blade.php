<!DOCTYPE html>
<html lang="br">

    <head>

        <title id ="tituloPag">Pagina Inicial</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <link rel="stylesheet" href="/principal.css">

        <script src="livro.js" defer></script>
        <meta id="csrf-token" content="{{ csrf_token() }}">

    </head>
 
    <body id = "bg" class="bg">
    
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand logo" href="{{route('principal')}}">
                    <i id = "book" class="bi bi-book"></i>
                FavBook
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-item nav-link" href="{{route('livros.index')}}">Meus Livros</a>
                        </div>
                    </div>
            </nav>

           
            @yield('conteudo')
            
            <div id = "n">

            </div>

            <form id = "dadosLivro" action="{{route('livros.store')}}" method = "POST">
                   @csrf
                    <input id = "titulo" type="hidden" name = "titulo" value = "">
                    <input id = "autor" type="hidden" name = "autor" value = "">
                    <input id = "thumb" type="hidden" name = "thumb" value = "">
            </form>
    </body>
</html>