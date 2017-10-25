# Intro
```
Código de apoio para o minicurso apresentado na II Semana de Integração dos Cursos do CCET/Unimontes
```
Para iniciar, certifique que você tenha o Composer instalado em seu computador.
Para baixar, acesse o site https://getcomposer.org/ faça o donwload e instale em seu computador.
Baixe o este repositório como ZIP ou rode o comando Git Clone.

## Iniciando o sistema
Para começar, copie o arquivo `.env.example` para o `.env` (detalhe, no  Windows Explorer não funciona, crie direto dentro do editor de sua preferência, recomendo o Atom (https://atom.io).
Após criado o arquivo, edite a parte do banco de dados, informando os dados de acesso.

> DB_CONNECTION=mysql
> DB_HOST=127.0.0.1
> DB_PORT=3306
> DB_DATABASE=minicursolaravel
> DB_USERNAME=root
> DB_PASSWORD=

Após configurar o banco de dados é hora de abrir o Prompt de Comando (cmd) dentro da pasta onde você extraiu os arquivos do sistema.

Rode o comando `php artisan key:generate`, note que será gerada uma chave no arquivo `.env`

Após isso, rode o comando `php artisan migrate` para fazer a migração do banco de dados.

Pronto, sua aplicação está pronta para ser usada.
Acesse via `http://localhost/suapasta/public` ou rode o comando `php artisan serve` e acesse `http://127.0.0.1:8000/`.


## Links úteis

* Site oficial do Laravel (http://laravel.com)
* Documentação oficial (https://laravel.com/docs/)
* Novidades do Laravel (https://laravel-news.com/)
* Várias vídeos aula (https://codecasts.com.br/lesson)
* Vários tutoriais (https://scotch.io/)
* PHP — Migration no Laravel 5.3 (https://medium.com/@victorhugorocha/laravel-5-3-migration-2b3f7a5efab5)
* **IMPORTANTE**: Lista de coisas para o Laravel (https://github.com/chiraggude/awesome-laravel)

## Alguma dica a mais?
Sim, brinque mais com o framework, ele é bem simples de mexer, leia blogs internacionais, participe da comunidade de programadores Laravel Brasil, participe também da comunidade local Sapucaia Tech (http://sapucaia.tech), outro grande amigo é o Stack Overflow, sempre que tiver um problema procure lá, sempre tem as respostas.
E no mais, para aprender mais é só praticar.
Boa sorte!

![Yes](https://www.naomesmo.com.br/wp-content/uploads/2016/02/eu-brigando-na-internet.gif)
