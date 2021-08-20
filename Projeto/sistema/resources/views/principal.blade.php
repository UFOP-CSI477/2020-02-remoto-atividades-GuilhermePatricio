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

        <link rel="stylesheet" href="/css/style.css">

        <script src="/js/livro.js" defer></script>

        <link rel="icon" href="https://raw.githubusercontent.com/twbs/icons/main/icons/book-fill.svg" id = "icon">
      

        </svg>
    </head>
 
    <body id = "bg" class="bg">
    
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand logo" href="{{route('livros.pesquisa')}}">
                    <i id = "book" class="bi bi-book"></i>
                FavBooks
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav" >
                            <a class="nav-item nav-link" href="{{route('livros.index')}}">Meus Livros</a>
                            @guest

                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar-se') }}</a>
                                    </li>
                                @endif

                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </div>

                    </div>
            </nav>

            @if(session('mensagem'))

            
                <div id = "msg" class="alert alert-success">
                    {{ session('mensagem') }}
                </div>

                <script>
                    setTimeout(function() { 
                        document.getElementById("msg").style = "display:none";
                    },3000);
                </script>

            @endif

            @yield('conteudo')
            
            <form id = "dadosLivro" action="{{route('livros.store')}}" method = "POST" target = "frame">
                   @csrf
                    <input id = "livroID" type="hidden" name = "livroID" value = "">
                    <input id = "titulo" type="hidden" name = "titulo" value = "">
                    <input id = "autor" type="hidden" name = "autor" value = "">
                    <input id = "thumb" type="hidden" name = "thumb" value = "">
                    <input id = "url" type="hidden" name = "url" value = "">
                    <input id = "favorito" type="hidden" name = "favorito" value = "">
                    <input id = "nota" type="hidden" name = "nota" value = "">
            </form>

            <iframe name="frame" style="display:none"></iframe>
            
            
    </body>
</html>