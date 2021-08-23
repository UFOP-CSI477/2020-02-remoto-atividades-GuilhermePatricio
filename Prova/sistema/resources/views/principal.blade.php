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

        <link rel="stylesheet" href="">

        <script src="" defer></script>

        <link rel="icon" href="https://raw.githubusercontent.com/FortAwesome/Font-Awesome/master/svgs/solid/medkit.svg" id = "icon">
       
        <link rel="stylesheet" href="/css/style.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
 
    <body >

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand logo" href="{{route('principal')}}">
                <i id = "book" class="fa fa-medkit"></i>
                Sistema de Controle de Vacinação 
                
            </a>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" >
                
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Área Geral</a>

                        <div class="dropdown-menu">

                            <a class="dropdown-item" href="{{route('principal')}}">Total geral de vacinas aplicadas</a>
                            <a class="dropdown-item" href="{{route('principal')}}">Total de aplicações por vacinas</a>
                                
                        </div>

                    </li>
                            
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Área Administrativa</a>

                        <div class="dropdown-menu">

                            @guest

                                @if (Route::has('register'))
                                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('Novo usuário') }}</a>
                                @endif

                                @if (Route::has('login'))
                                    <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @endif
                                
                                @else   

                                    <a class="dropdown-item" href="{{route('vacinas.index')}}">Vacinas</a>       
                                    <a class="dropdown-item" href="{{route('pessoas.index')}}">Pessoas</a>
                                    <a class="dropdown-item" href="{{route('unidades.index')}}">Unidades</a>
                                    <a class="dropdown-item" href="{{route('registros.index')}}">Registros</a>
                                    
                                    <li id = "perfil" class="nav-item dropdown">
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

                    </li>
                  
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


    </body>
</html>