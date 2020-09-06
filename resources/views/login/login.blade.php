<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Onde estou?</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap.min.css">

    </head>
    <body class="h-100" style="background-color: #aadcf3 !important;">

        <div class="container-fluid h-100" style="padding-top: 100px">
            <div class="row h-100 mx-1">
                <div class="col-12 col-sm-4 offset-sm-4 bg-white my-auto rounded pt-3">
                    <form id="formAutenticar">
                        <div align="center" class="form-group">
                            <img id="animate" src="img/animation/debut.JPG" alt="">
                        </div>
                        <div class="col-10 offset-1">
                            <div class="form-group">
                                <label for="">Login</label>
                                <input required type="text" id="login" class="form-control" maxlength="46">
                            </div>
                            <div class="form-group">
                                <label for="">Senha</label>
                                <input required type="password" name="" id="senha" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-lg btn-block">Entrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="/js/jquery-3.5.1.min.js" ></script>
        <script src="/js/bootstrap.min.js" ></script>
        <script src="/js/sweetalert.js"></script>
        <script src="/js/app.js"></script>
        <script src="/js/login.js"></script>
    </body>

</html>
