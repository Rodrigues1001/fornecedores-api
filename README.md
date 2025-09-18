# Fornecedores API

API desenvolvida em Laravel para gerenciar fornecedores, como parte de um teste técnico de migração de sistema legado (PHP 7.4 procedural) para Laravel 12.

## 🚀 Tecnologias
- PHP 8.3+
- Laravel 12
- MySQL/MariaDB
- PHPUnit

## 📦 Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/Rodrigues1001/fornecedores-api.git
   cd fornecedores-api

2. Instale as dependências:
    composer install

3. Copie o arquivo de ambiente e configure:
    cp .env.example .env

4. Gere a chave da aplicação:
    php artisan key:generate

5. Execute as migrations:
    php artisan migrate

6. (Opcional) Popule com dados fictícios:
    php artisan db:seed

7. Inicie o servidor:
    php artisan serve


Listar fornecedores (com filtro opcional por nome)
    GET /api/fornecedores?nome=Empresa

Execute os testes de feature:
    php artisan test

Estrutura
    app/Models/Fornecedor.php → Model com SoftDeletes
    app/Http/Requests/FornecedorRequest.php → Validação e sanitização de CNPJ
    app/Http/Controllers/FornecedorController.php → Endpoints REST
    app/Services/FornecedorService.php → Regra de negócio + transações
    app/Http/Resources/FornecedorResource.php → Formatação JSON
    tests/Feature/FornecedorTest.php → Testes de integração
