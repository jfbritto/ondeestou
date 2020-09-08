<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Onde estou?</title>

        <link rel="icon" href="/img/icone.png">

        <meta name="theme-color" content="#53b96a">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name=”keywords” content="onde estou, onde, estou, perfil, page" />
        <meta property="og:url" content="{{env('APP_URL')}}{{$user->url_name}}" />
        <meta property="type" content="website" />
        <meta property="og:title" content="{{$user->name}}">
        <meta property="og:description" content="{{$user->bio}}">
        <meta property="og:image" content="/img/user.png">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="640">
        <meta property="og:image:height" content="480">



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/all.min.css">
        <link rel="stylesheet" href="/css/style.css">
        

    </head>
    <body style="background-color:#f1f1f1 !important">

        <div class="container mt-5" style="padding: 0px 30px 0px 30px;">

            
            <div class="row">
                <div class="col-sm-5 col-md-4 mb-3 text-center">
                    <img src="/img/user.png" style="margin-bottom: 10px; max-width: 200px" class="img img-fluid rounded-circle img-thumbnail rounded " alt="User"> 
                </div>
                <div class="col-sm-7 col-md-8 mb-3">

                    <h3 class="h3 text-left">{{$user->name}}</h3>
                    <p class="text-left">{{$user->city}}</p>
                    <p class="text-justify">{{$user->bio}}</p>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <input type="hidden" id="url_name" value="{{$user->url_name}}">
        
                    <div id="lista-links"></div>

                </div>
            </div>
                    
        </div>   

        <footer class="bg-black small text-center text-white-50" style="padding: 10px">
            <div class="container">
                <div class="social d-flex justify-content-center">

                    <a class="navbar-brand" href="/"><img id="animate" src="/img/logo.png" alt="" style="width: 120px"></a>
                    
                </div>
            </div>
        </footer>

        <script src="/js/jquery-3.5.1.min.js" ></script>
        <script src="/js/bootstrap.bundle.min.js" ></script>
        <script src="/js/sweetalert.js"></script>
        <script src="/js/includes.js"></script>
        <script src="/js/site/page.js" ></script>
        @yield('js')
    </body>

</html>