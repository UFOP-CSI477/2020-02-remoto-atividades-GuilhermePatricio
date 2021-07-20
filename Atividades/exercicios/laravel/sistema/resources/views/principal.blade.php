<!DOCTYPE html>
<html lang="br">

    <head>

        <title>Pagina Inicial</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{route('principal')}}" >Home</a>
                    <a class="nav-item nav-link" href="{{route('produtos.index')}}">Produtos</a>
                    <a class="nav-item nav-link" href="{{route('cidades.index')}}">Cidades</a> 
                    <a class="nav-item nav-link" href="{{route('estados.index')}}">Estados</a>
                    <a class="nav-item nav-link" href="{{route('pessoas.index')}}">Pessoas</a>
                    <a class="nav-item nav-link" href="sair.html">Sair</a>
                </div>
            </div>
          </nav>
        
       @if(session('mensagem'))

            <div class = "alert alert-success">
                {{ session('mensagem') }}
            </div>

       @endif


       @yield('conteudo')
       
    <body>
</html>