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
        

    </head>
    <body style="background-color:#f1f1f1 !important">

        <div class="container text-center mt-3">

            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <img src="/img/user.png" style="margin-bottom: 10px; max-width: 300px" class="img img-fluid rounded-circle img-thumbnail rounded " alt="User"> 
                </div>
                <div class="col-md-6 mb-3">
                    
                    <h1>{{$user->name}}</h1>
                    <p class="text-center">{{$user->city}}</p>
                    <p class="text-justify">{{$user->bio}}</p>

                </div>
            </div>

            <input type="hidden" id="url_name" value="{{$user->url_name}}">

            <div class="card mb-3">
                <div class="card-body" id="lista-links">

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