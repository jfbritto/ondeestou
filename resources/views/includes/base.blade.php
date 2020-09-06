<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Onde estou?</title>

        <!-- <link rel="icon" href="/img/ico.png"> -->

        <meta name="theme-color" content="#53b96a">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/all.min.css">
        <link rel="stylesheet" href="/css/style.css">
        

    </head>
    <body style="background-color:#53b96a !important">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/home"><img id="animate" src="/img/logo.png" alt="" style="width: 120px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            </ul>

            @if(Session::get('nivel') == 1)
            <!-- <a class="addBox" href="#"><i class="fas fa-plus-circle" style="color:#f39322"></i></a> -->
            <!-- <a class="nav-link addBox" href="#" style="color:#f39322">Cadastrar Caixa</a>
            <a class="nav-link" href="/exp" style="color:#f39322">Exportar Caixas</a> -->
            @endif

            <a style="color: #53b96a" class="nav-link" href="/home">Home </a>
            <a style="color: #53b96a" class="nav-link" href="/analytic">Analytics </a>
            <a style="color: #53b96a" class="nav-link" href="/config">Config </a>
            <a style="color: #53b96a" class="nav-link" href="#" id="logout">Sair </a>

        </div>
        </nav>




        <div class="container mb-5" style="padding-top: 15px">

            @yield('body')
        
        </div>        

        <footer class="bg-black small text-center text-white-50" style="padding: 10px">
            <div class="container">
                <div class="social d-flex justify-content-center">

                    <a class="navbar-brand" href="/home"><img id="animate" src="/img/logo.png" alt="" style="width: 120px"></a>
                    
                    <!-- <a target="_blank" href="https://www.instagram.com/bianchijf/" class="mx-2">
                        <i style="color: #fff; width: 30px" class="fab fa-instagram"></i>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/in/jo%C3%A3o-filipi-britto-a7375a103/" class="mx-2">
                        <i style="color: #fff; width: 30px" class="fab fa-linkedin"></i>
                    </a>
                    <a target="_blank" href="https://github.com/jfbritto" class="mx-2">
                        <i style="color: #fff; width: 30px" class="fab fa-github"></i>
                    </a> -->
                </div>
            </div>
        </footer>

        <script src="/js/jquery-3.5.1.min.js" ></script>
        <script src="/js/bootstrap.bundle.min.js" ></script>
        <script src="/js/sweetalert.js"></script>
        <script src="/js/includes.js"></script>
        @yield('js')
    </body>

</html>