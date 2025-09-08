
# 📦 Controle de Estoque

Um sistema simples de controle de estoque desenvolvido com Laravel (https://laravel.com/).
Permite cadastrar, listar, editar e excluir produtos, além de manter um controle básico de inventário.


## 🚀 Funcionalidades
 - Cadastro de produtos
 - Listagem de produtos
 - Edição de produtos
 - Exclusão de produtos
 - Organização em rotas RESTful (resource controller)
 - Integração com banco de dados via Eloquent ORM

## 🛠️ Tecnologias Utilizadas
- PHP
- Laravel
- Composer
- MySQL ou MariaDB
- HTML/CSS/Bootstrap 5

## 🔍 Metodologia e Objetivos
- Modelado utilizando princípios de POO (Programação Orientada a Objetos)
- Adesão ao Modelo MVC
- Seguir boas práticas de desenvolvimento

## ⚙️ Como rodar o projeto?

### 📋 Requer:
- PHP >= 8.2
- Composer >= 2.8.9
- MySQL ou MariaDB

### 🗂️ Etapas
1. Clone o repositório
2. Instale as dependências
Usando o seguinte comando:

composer install

3. Configure o ambiente
Copie .env.example para .env e configure o banco de dados

4. Gerar a key da aplicação
Usando o seguinte comando:

php artisan key:generate

5. Rodar as migrações
Usando o seguinte comando:

php artisan migrate

6. Iniciar o servidor
Usando o seguinte comando:

php artisan serve




