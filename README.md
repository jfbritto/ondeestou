<p align="center"><img src="https://raw.githubusercontent.com/jfbritto/ondeestou/master/public/img/logo.png" width="400"></p>

## Sobre OndeEstou

Desenvolvido para centralizar todos seus caminhos em apenas uma página! Este é o OndeEstou?

<a target="_blank" href="https://ondeestou.app">Acesse aqui</a>


# Setup Laravel + adminlte + auth com Docker
### Passo a passo
Clone Repositório

Crie o Arquivo .env
```sh
cd seu-projeto/
cp .env.example .env
```

Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=MeuProjeto
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=ondeestou
DB_USERNAME=root
DB_PASSWORD=root
```

Suba os containers do projeto
```sh
docker-compose up -d
```

Acessar o container
```sh
docker-compose exec php bash
```


Instalar as dependências do projeto
```sh
composer update
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


Acessar o projeto
[http://localhost:8989](http://localhost:8989)
