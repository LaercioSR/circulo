[![Circulo App](circulo_logo.png "Logo do Círculo")](https://github.com/LaercioSR/circulo/blob/master/logo.png)

## Sobre o projeto

## Funcionalidades

## Rodando o projeto

### Pré-requisitos
Para rodar o projeto é preciso ter instalado o laravel, que pode ser encontrado [aqui](https://laravel.com/docs/8.x).

Já para o banco de dados será necessário ter o MySQL Server instalado. Você pode encontrar [aqui](https://dev.mysql.com/downloads/mysql/).

### Instalando
**Clonando o repositório**

```
$ git clone https://github.com/LaercioSR/circulo

$ cd circulo
```

**Instalando dependências**

```
$ composer update
```

**Configurando o banco de dados**

Primeiramente é necessário gerar uma chave, para isso é só usar o comando:

```
$ php artisan key:generate
```

Depois você deve criar um database MySQL local para o projeto.

Caso ache necessário, você deve modificar o usuário, a senha e o nome do database no arquivo [.env](https://github.com/LaercioSR/circulo/blob/master/.env), por padrão está root, root, laerciorios, respectivamente.

Rode os comandos abaixo para criar as tabelas e cadastrar as especialidades já pré-definidas:

```
$ php artisan migrate

$ php artisan db:seed
```

### Executando
Com as dependências instaladas e banco de dados configurado corretamente, agora você pode executar o sistema:

```
$ php artisan serve
```

E acessar a aplicação web por:
```
localhost:8000
```
> Por padrão o laravel usa a porta 8000 para rodar a aplicação, mas isso pode mudar se a mesma já estiver em uso.
