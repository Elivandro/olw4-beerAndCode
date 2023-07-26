# OpenLaravelWeek - [Beer And Code](https://github.com/beerandcodeteam)

## Framework:

- [**Laravel 9.50**](https://laravel.com/)

## API

- [**ChatGPT**](https://chat.openai.com/)
- [**Vega-Lite**](https://vega.github.io/vega/)


## Requerimenos minimos

- [**Docker**](https://docs.docker.com/engine/install/)
- [**Git**](https://git-scm.com/)


<hr>

### Projeto

Consumindo a API ChatGPT da openAI e exportando json para a api do vega-lite gerando barra de graficos.
<hr>

### Como rodar a aplicação:

Cópie o repositório:

```
git clone git@github.com:Elivandro/olw2-beerAndCode.git
cd olw2-beerAndcode
```

renomeie arquivo de variaveis env

```
cp .env.example .env
```

Para instalar as dependências do composer com o docker:

```
docker run --rm -it\
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

Inicie o sail
```
./vendor/bin/sail up -d
```

Gere uma chave para aplicação

```
./vendor/bin/sail artisan key:generate
```

Para instalar as dependências do npm:
```
./vendor/bin/sail npm install
```

configure no arquivo .env

```
DB_CONNECTION=pgsql
DB_HOST=pgsql
DB_PORT=5432
DB_DATABASE=olw2
DB_USERNAME=sail
DB_PASSWORD=password

OPENAI_API_KEY=
```

rode as migrações com alguns dados

```
./vendor/bin/sail artisan migrate --seed

```

rodar o vite

```
./vendor/bin/sail npm run dev
```

coloque um apelido ao sail

[Shell alias](
https://laravel.com/docs/10.x/sail#configuring-a-shell-alias)