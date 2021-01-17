![Circulo App](https://github.com/LaercioSR/circulo/blob/master/logo.png)

## Sobre o projeto
A Evasão Escolar é um problema que se mantém há tempos e que tem consequências em várias esferas, afetando principalmente em aspectos sociais e econômicos. Dentre as principais causas de evasão, pode-se considerar o desinteresse, insatisfação, dificuldade de aprendizagem, reprovações, baixa frequência nas aulas, falta de habilidade de estudos e outros. Também pode-se levar em consideração a falta de reconhecimento social com educação, falta de perspectivas empregatícias e a falta de políticas públicas plausíveis e continuadas voltadas para educação. Tendo em vista isso, o que se pode fazer para atenuar esse problema através de uma solução tecnológica?

Levando isso em conta, a plataforma Círculo tem por objetivo diminuir as taxas de evasão através da conexão entre estudantes e o mercado de trabalho. A plataforma permite que os alunos cadastrem suas habilidades, aptidões e notas para gerar um perfil atrativo para empresas utilizadoras do serviço. Através da plataforma o estudante também recebe conteúdo personalizado sobre cursos e pode receber mentorias/monitorias de outros estudantes que tenham destaque em alguma das habilidades.


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
