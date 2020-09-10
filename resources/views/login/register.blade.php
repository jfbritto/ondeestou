<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Onde estou?</title>

        <link rel="icon" href="/img/icone.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body class="h-100" style="background-color: #1abc9c !important;">

        <div class="container-fluid h-100" style="padding-top: 20px">
            <div class="row h-100 mx-1">
                <div class="col-12 col-sm-4 offset-sm-4 my-auto rounded pt-3" style="background-color: #2c3e50 !important; color: #fff">
                    <form id="formAddUser">
                        <div align="center" class="form-group">
                            <!-- <img id="animate" src="img/animation/debut.JPG" alt=""> -->
                            <img width="100%" style="padding: 10px 27px 20px 35px;" src="img/logo.png" alt="">
                        </div>
                        <div class="col-10 offset-1">
                            <div class="form-group">
                                <label for="">Qual seu nome?</label>
                                <input required type="text" id="name" class="form-control" maxlength="46">
                            </div>
                            <div class="form-group">
                                <label for="">E email?</label>
                                <input required type="email" id="email" class="form-control" maxlength="46">
                            </div>
                            <div class="form-group">
                                <label for="">Escolhe uma senha</label>
                                <input required minlength="6" type="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Repita a senha, por favor</label>
                                <input required minlength="6" type="password" id="password2" class="form-control">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-lg btn-block" style="background-color: #1abc9c !important; color: #fff; margin-top: 40px;">Cadastrar</button>
                                <br>
                                <a style="color: #1abc9c" href="/login">Já tenho acesso</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer-->
        <footer class="footer text-center" style="padding-bottom: 15px;">
            <div class="container">
                <div class="row">
                    
                    <!-- Footer Social Icons-->
                    <div class="col-lg-12">
                        <a class="navbar-brand" href="/"><img id="animate" src="/img/logo.png" alt="" style="width: 100px; opacity: 0.5"></a>
                    </div>
                </div>
            </div>
        </footer>

        <script src="/js/jquery-3.5.1.min.js" ></script>
        <script src="/js/bootstrap.min.js" ></script>
        <script src="/js/sweetalert.js"></script>
        <!-- <script src="/js/app.js"></script> -->
        <script src="/js/login.js"></script>
    </body>

</html>
