https://github.com/inertiajs/pingcrm

https://dashboard.kiwify.com.br/course/65fe7cb0-9e36-4a29-9e11-b455e9b09d10?lesson=d599f3e0-c447-4ecd-9064-1f281d0e58fe

carregando telas no navegador

Instalação
Clone o repositório localmente:

* git clone https://github.com/inertiajs/pingcrm.git pingcrm
cd pingcrm
Instale as dependências do PHP:

* composer install
Instale as dependências do NPM:

* npm ci
Construir ativos:

* npm run dev
Configuração de instalação:

* cp .env.example .env
Gerar chave de aplicativo:

* php artisan key:generate
Crie um banco de dados SQLite. Você também pode usar outro banco de dados (MySQL, Postgres), basta atualizar sua configuração de acordo.

* touch database/database.sqlite
Execute migrações de banco de dados:

* php artisan migrate
Execute o seeder do banco de dados:

* php artisan db:seed
Execute o servidor dev (a saída fornecerá o endereço):

### php artisan serve
Você está pronto para ir! Visite o Ping CRM em seu navegador e faça o login com:

Nome de usuário: johndoe@example.com
Senha: secreta

Executando testes
### Para executar os testes Ping CRM, execute:

* phpunit