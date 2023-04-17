Todo List V2 API

API Rest da aplicação Todo List V2.


Requisitos:

PHP >= 8.1,

Composer >= 2.2


Instalação:

Clone o repositório:

git clone https://github.com/Gabribeiro/todo-list-v2-api.git,


Navegue para a pasta do projeto:

cd seu-projeto,


Instale as dependências do PHP com o composer:

composer install,


Copie o arquivo .env.example para .env e configure as variáveis de ambiente:

cp .env.example .env,


Gere a chave de criptografia da aplicação:

php artisan key:generate,


Rode as migrações do banco de dados e as seeds:

php artisan migrate --seed,


Instale as dependências do frontend com o NPM ou Yarn:

npm install ou yarn install,


Inicie o servidor:

php artisan serve.


Uso:

Todos os endpoints são na rota: http://localhost:8000/api/items


Contribuição:


Faça um fork do projeto,

Crie uma branch com sua feature (git checkout -b feature/MinhaFeature),

Commit suas mudanças (git commit -m 'Adicionando uma feature'),

Push para a branch (git push origin feature/MinhaFeature),

Abra um Pull Request.


Licença:

API de código aberto, pode ser utilizada e replicada livremente.
