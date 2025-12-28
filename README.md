# Agenda Telefônica

Uma aplicação web simples para gerenciar contatos pessoais, com autenticação de usuários e interface moderna.  
O projeto está sendo desenvolvido com foco em aprendizado e boas práticas no uso de **Laravel**, **Tailwind CSS** e **DaisyUI**.

---

## Funcionalidades

-  **Auth (Login e Cadastro de usuário)**
-  **Cadastrar contato**
-  **Visualizar contato individualmente**
-  **Editar contato**
-  **Excluir contato**


---

## Tecnologias Utilizadas

- **Laravel / Blade** – Estrutura principal do projeto  
- **Tailwind CSS** – Estilização responsiva e moderna  
- **DaisyUI** – Componentes pré-estilizados para Tailwind  
- **Animate.css** – Animações simples e elegantes na interface  
- **PHP MyAdmin / MySQL** – Banco de dados relacional  
- **Composer** – Gerenciamento de dependências PHP  
- **npm** – Gerenciamento de pacotes front-end  
- **VS Code** – Ambiente de desenvolvimento

---

## Como rodar o projeto localmente

Este projeto utiliza XAMPP como ambiente local (Apache + MySQL).

## Requisitos

XAMPP (Apache e MySQL ativos)
PHP ≥ 8.1
Composer
Node.js / npm
Git

### 1. Clone o repositório
git clone https://github.com/HannahGrecco/Agenda-Telefonica.git

### 2. Acesse a pasta do projeto

cd Agenda-Telefonica

### 3. Instale as dependências do backend
composer install

### 4. Instale as dependências do frontend
npm install

### 5. Crie o arquivo de ambiente
cp .env.example .env

### 6. Inicie o Apache e MySQL pelo XAMPP
### 7. Acesse o phpMyAdmin
### 8. Crie um banco de dados e no arquivo .env configure em DB_DATABASE o nome do banco de dados, DB_USERNAME=root e DB_PASSWORD=default

### 9. Gere a chave da aplicação
php artisan key:generate

### 10. Execute as migrations
php artisan migrate

### 11. Execute o projeto
Em um terminal execute: npm run dev
E em outro execute: php artisan serve

ou execute composer run dev

### 12. Acesse no navegador:
http://127.0.0.1:8000
