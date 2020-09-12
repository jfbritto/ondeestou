<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    RECUPERAÇÃO DE SENHA
    <br>
    <br>
    E aí {{explode(" ",$user->name)[0]}}, esqueceu a senha, né?!
    <br>
    Mas relaxa, a gente te ajuda!
    <br>
    <br>
    Clica nesse link!
    <br>
    <br>
    <a href="{{env('APP_URL')}}change-pass?tk={{$user->token_email}}">Trocar senha</a>
    <br>
    <br>
    Att, 
    <br>
    Equipe OndeEstou
</body>
</html>