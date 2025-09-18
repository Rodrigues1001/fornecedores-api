# Objetivo

Migrar o sistema legado PHP 7.4 para Laravel 12, mantendo funcionalidades, testes e escalabilidade.

Checklist de Migração
1. Preparar Projeto

 Criar Laravel 12: composer create-project laravel/laravel fornecedores-api

 Configurar .env e gerar chave: php artisan key:generate

 Configurar banco de dados (SQLite/MySQL)

2. Banco de Dados

 Criar migrations para todas as tabelas

 Adicionar unique constraints, índices e relacionamentos

 Criar factories para testes

3. Models & Factories

 Criar models Eloquent

 Criar factories para testes automatizados

4. Controllers & Rotas

 Criar controllers via artisan

 Definir rotas apiResource para endpoints

5. Validação

 Criar FormRequests para validação

 Validar campos únicos e obrigatórios

6. Testes Automatizados

 Criar Unit e Feature tests

 Usar RefreshDatabase para testes isolados

 Testar endpoints de criação, listagem e filtros

7. Migração Gradual

 Migrar funcionalidades em blocos

 Testar cada bloco com PHPUnit antes de avançar

8. Deploy & Homologação

 Deploy em ambiente de teste

 Validar dados e endpoints

 Ajustar erros e liberar produção
