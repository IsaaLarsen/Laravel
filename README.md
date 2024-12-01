# Sistema de Cadastro de Profissões - Backend

Este é o backend do sistema de cadastro de profissões, desenvolvido em Laravel, responsável por gerenciar a API RESTful para receber e armazenar os dados enviados pelo frontend.

## Configuração do Projeto

Pré-requisitos:
- PHP 8.1 ou superior
- Composer
- MySQL
- Node.js (para Laravel Mix, se necessário)
- Laravel Installer (opcional)

Passos para Configuração:
1. Clone este repositório:
   git clone https://github.com/IsaaLarsen/laravel-backend.git

2. Acesse o diretório do projeto:
   cd laravel-backend

3. Instale as dependências do Laravel:
   composer install

4. Configure o arquivo `.env`:
   - Copie o exemplo:
     cp .env.example .env
   - Configure as variáveis de banco de dados no `.env`:
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=profissoes_db
     DB_USERNAME=root
     DB_PASSWORD=

5. Gere a chave da aplicação:
   php artisan key:generate

6. Execute as migrações para criar as tabelas:
   php artisan migrate

7. Inicie o servidor de desenvolvimento:
   php artisan serve
   O backend estará disponível em http://127.0.0.1:8000.

## Funcionalidade Implementada

Cadastro de Profissões:
- Endpoint: POST /api/profissoes
- Dados esperados:
  {
    "nome": "Nome da profissão",
    "descricao": "Descrição da profissão (opcional)",
    "salario": 5000,
    "empresa": "Nome da empresa"
  }
- Resposta:
  - Sucesso:
    {
      "message": "Profissão cadastrada com sucesso"
    }
  - Erro:
    {
      "message": "Erro ao cadastrar profissão"
    }

## Fluxo de Dados

1. O frontend envia uma solicitação POST para o endpoint /api/profissoes com os dados da profissão.
2. O backend valida os dados recebidos:
   - Verifica se os campos obrigatórios estão preenchidos.
   - Certifica-se de que o campo `salario` contém apenas números e tem o tamanho adequado.
3. Após a validação, os dados são armazenados no banco de dados.
4. O backend retorna uma resposta JSON com o status da operação (sucesso ou erro).

## Estrutura do Banco de Dados

A tabela `profissoes` possui os seguintes campos:
- id (inteiro, chave primária)
- nome (string, obrigatório)
- descricao (texto, opcional)
- salario (decimal, obrigatório)
- empresa (string, obrigatório)
- created_at (timestamp)
- updated_at (timestamp)

## Contribuidores

- Nome do Autor - GitHub: https://github.com/IsaaLarsen
