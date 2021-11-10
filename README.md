# Sócrates
O sócrates é um projeto construído em Laravel e Vue js para organização, com foco acadêmico. O Sócrates dá a possibilidade de organização, de forma fácil, para a vida de um aluno. Sejam benditos os eternos alunos da vida. Tem a intenção de armazenar: 
- Anotações; 
- Textos; 
- Lembretes de provas e;
- Atividades.

Para que quem utilize possa se desenvolver, assim como Sócrates se desenvolvia através do conhecimento de si e as interações consigo mesmo, de sua essência. Nada extravagante, simples e intuitivo.

# Requisitos

Para que você utilize o Sócrates, precisará de: 

- PHP => 7.3;
- Banco ;
- Pacote npm para instalar o vue.js e suas depdendências;
- Composer. 

# Instalação

Visando o php, com o php.ini configurado para tal, npm em seu sistema e o banco de dados MySql em funcionamento. Realize os seguintes itens: 
- Faça o download do projeto, baixando através do repositório GitHub (.zip)
  - ou use o comando ``` git clone https://github.com/Gessilt/Socrates.git ```
- Ao baixar requisite as dependências do projeto, através do ``` npm install ```
- Crie uma database chamada "socrates" em seu MySql Workbench: ``` CREATE DATABASE socrates; ``` 
  - Observação: Priorize o nome socrates, pois este está configurado por padrão. Caso queira configurar, modifique no config.php;  
- Execute as migrations através do seguinte comando: ``` php artisan migrate ```
 
