# Room Paint Pinturas

O sistema roomP realiza o cálculo de tinta necessária para pintar um imóvel, oferecendo cadastro de cores, cômodos, bem como a seleção de cor para cada parede. Ao final oferecendo relatório de litros previstos para a pintura e recomendação de tamanho para compra.

## Uso

```bash
$ git clone git@bitbucket.org:pedrobutzen/roompaint.git
$ cd roompaint
$ make init
```

http://localhost

## Container

```bash
├── app
├── web
└── db
```

### App

- Base image
  - [php](https://hub.docker.com/_/php):8.0-fpm-buster
  - [composer](https://hub.docker.com/_/composer):2.0

### Web

- Base image
  - [nginx](https://hub.docker.com/_/nginx):1.20-alpine
  - [node](https://hub.docker.com/_/node):16-alpine

### DB

- Base image
  - [mysql/mysql-server](https://hub.docker.com/r/mysql/mysql-server):8.0
