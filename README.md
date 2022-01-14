<h1 align="center">
    <a> Sócrates </a>
</h1>
<p align="center"> Um site de autoajuda para autodesenvolvimento </p>

Sumário
=======

<!--ts-->
   * [Sobre](#sobre)
   * [Requisitos](#requisitos)
   * [Instalação](#instalação)
   * [Como utilizar](#como-utilizar)
<!--te-->


Sobre
=====
O sócrates é um projeto construído em [Laravel](https://laravel.com/), [Vue.js](https://vuejs.org/) e é gerenciado pelo [Inertia](https://inertiajs.com/) para organização, com foco acadêmico. O Sócrates dá a possibilidade de organização, de forma fácil, para a vida de um aluno. Sejam benditos os eternos alunos da vida. Tem a intenção de armazenar: 
- Anotações; 
- Textos; 
- Lembretes de provas;
- Atividades.

Para que quem utilize possa se desenvolver, assim como Sócrates se desenvolvia através do conhecimento de si e as interações consigo mesmo, de sua essência. Nada extravagante, simples e intuitivo.

Requisitos
==========
Para que você utilize o Sócrates, precisará de: 

- [Ambiente Laravel](https://laravel.com/docs/8.x#installation);
- [Ambiente Vue.js](https://developer.mozilla.org/en-US/docs/Learn/Tools_and_testing/Client-side_JavaScript_frameworks/Vue_getting_started#installation);
- [Monolito Inertia](https://inertiajs.com/);
- Composer. 

Instalação
==========
Baixe ou clone esse repositório. Após, Realize os seguintes itens: 
- Copie o .env.example e torne-o apenas um .env com as configurações da sua database; 
- Depois disso, entre com algum comando de linha na pasta do projeto e digite: 
```
# Instala os pacotes do composer.
composer install 

# Instala os pacotes npm 
npm install

# Cria a estrutura do banco de dados e preenche os níveis.
php artisan migrate --seed

# Inicia a parte visual do sócrates
npm run watch

# Inicia o servidor laravel
php artisan serve

``` 

Você encontrará seu site funcionando em: 127.0.0.1:8080. No momento, sem página alguma.
 
 Como utilizar
 =============
 	🚧  React Select 🚀 Em construção...  🚧
