<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Onde estou?</title>

        <link rel="icon" href="/img/icone.png">

        <meta name="theme-color" content="#53b96a">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/all.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <link href="/template/css/styles.css" rel="stylesheet" />
        @yield('css')

        <style>
            #mainNav {
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
            }

            .modal-body {
                 padding: 1rem 1rem;
            }
        </style>
        

    </head>
    <body style="background-color:#f1f1f1 !important">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/home"><img id="animate" src="/img/logo.png" alt="" style="width: 120px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            </ul>

            <a style="margin:3px" class="nav-link btn btn-outline-success" href="/home">Home </a>
            <a style="margin:3px" class="nav-link btn btn-outline-success" href="/analytic">Analytics </a>
            <a style="margin:3px" class="nav-link btn btn-outline-success" href="/config">Config </a>
            <a style="margin:3px" class="nav-link btn btn-outline-success logout" href="#">Sair </a>

        </div>
        </nav>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/home"><img src="/img/logo.png" alt="" width="150"> </a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/home">Home </a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/analytic">Analytics </a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/config">Config </a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded logout" href="#">Sair </a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mb-5 mt-3" style="padding-top: 15px">

            @yield('body')
        
        </div>        

        <footer class="bg-black small text-center text-white-50" style="padding: 10px">
            <div class="container">
                <div class="social d-flex justify-content-center">

                    <a class="navbar-brand" href="/"><img id="animate" src="/img/logo.png" alt="" style="width: 80px; opacity: 0.5"></a>
                    
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