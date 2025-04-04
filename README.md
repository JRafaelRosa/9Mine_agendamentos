# 9Mine_Agendamentos

![Laravel](https://img.shields.io/badge/Laravel-10-red?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2-blue?logo=php)
![Status](https://img.shields.io/badge/Status-Em%20Desenvolvimento-yellow)

## 📋 Descrição

**9Mine_Agendamentos** é um sistema web que tem como objetivo facilitar o processo de agendamentos para comércios que trabalham com serviços por horário.  
Com ele, os **clientes** podem agendar serviços de forma rápida e prática, enquanto os **prestadores de serviço (servidores)** têm acesso facilitado à sua agenda e um controle detalhado de seus rendimentos.

> 🚧 Projeto em construção... 🚧

---

## 🧰 Tecnologias Utilizadas

- **Laravel** (Framework PHP)
- **MySQL** (Banco de Dados)
- **Bootstrap** (Estilização)
- **Blade** (Templates do Laravel)
- **Git & GitHub** (Controle de Versão)

---

## 📁 Estrutura do Projeto

```bash
9Mine_agendamentos/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AgendaController.php
│   │   │   ├── CadastroUserController.php
│   │   │   ├── ContatoController.php
│   │   │   ├── ...
│   │   ├── Middleware/
│   │   │   ├── PermissaoMiddleware.php
│   │   │   ├── UserMiddleware.php
│   │   │   ├── ...
|   │   ├── Request/
│   │   │   ├── CadastroRequest.php
|   |___Models/
|   |   |____PerfilConteudoModel.php
|   |   |____PerfilModel.php
|   |   |____ ...
|   |___Rules/
|   |   |____cpfValido.php
├── database/
│   ├── migrations/
|   |   |____2025_03_28_142542_create_perfil_table.php
|   |   |____2025_03_29_192906_create_permissao_table.php
|   |   |____ ...
│   ├── seeders/
|   |   |____PermissaoSeeder.php
|   |   |____UsuarioSeeder.php
|   |   |____ ...
├── resources/
│   ├── views/
│   │   ├── site/
│   │   │   ├── agenda.blade.php
│   │   │   ├── contato.blade.php
│   │   ├── app/
│   │   │   ├── listargem_usuarios.blade.php
│   │   │   ├── perfil.blade.php
│   │   ├── layouts/
│   │   │   ├── main.blade.php
├── routes/
│   ├── web.php
│   ├── console.php
├── .env
├── README.md
```

## ✨ Features

### 👤 Usuário

- [x] Cadastro de usuário  
- [x] Login  
- [x] Permissões de perfil (Cliente, Funcionário, Administrador, Super Administrador)  
- [ ] Confirmação de e-mail  
- [ ] Edição de dados pessoais  
- [ ] Preenchimento de formulário de informações  
- [ ] Redefinição de senha  

### 🙎‍♂️ Cliente

- [x] Visualização da agenda  
- [ ] Realização de agendamentos  
- [ ] Confirmação de agendamento via WhatsApp  
- [ ] Descrição personalizada do atendimento no momento do agendamento
- [ ] Escolha de formas de pagamento  
- [ ] Pagamento via Pix  
- [ ] Compra de produtos pela loja virtual  

### 🛠️ Servidor (Prestador de Serviço)

- [x] Listagem de usuários  
- [ ] Alteração de permissão de usuários  
- [ ] Definição de horários de atendimento
- [ ] Gerenciamento completo da agenda (criação, edição e exclusões) 
- [ ] Definição de preços dos serviços  
- [ ] Cadastro de produtos na loja  
- [ ] Criação de ofertas  
- [ ] Visualização de rendimento diário, mensal e anual  
- [ ] Visualização do total de serviços diários  
- [ ] Envio de mensagens automáticas via WhatsApp ou e-mail  
- [ ] Avaliação de usuários  
- [ ] Aceitar ou recusar agendamentos  
- [ ] Cancelamento de agendamentos com mensagem automática para o cliente

## ⚙️ Pré-requisitos

Antes de iniciar o projeto, certifique-se de ter as seguintes ferramentas instaladas em sua máquina:

- [PHP](https://www.php.net/downloads.php)
- [MySQL](https://www.mysql.com/downloads/)
- [Git](https://git-scm.com/downloads)
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/en/download)

- Uma IDE de sua preferência que suporte PHP (ex: VS Code, PHPStorm, etc)


## 🚀 Rodando a Aplicação

```bash
# Clone este repositório
git clone https://github.com/JRafaelRosa/9Mine_agendamentos.git

# Acesse o diretório do projeto
cd 9Mine_agendamentos

# Abra o projeto na sua IDE de preferência e, no terminal, execute os comandos abaixo:

# Instale as dependências do PHP
composer install

# Instale as dependências do front-end
npm install
npm install bootstrap
npm install bootstrap-icons
npm run dev

# Configure o Laravel
# Copie o arquivo .env de exemplo
cp .env.example .env

# Edite o arquivo .env com as configurações do seu banco de dados

# Gere a chave da aplicação
php artisan key:generate

# Rode as migrations e os seeders
php artisan migrate --seed

# Inicie o servidor de desenvolvimento
php artisan serve
```

## Autor 


<div align="center">
  
  <sub><b>João Rafael dos Santos da Rosa</b></sub>  
  <br>
  <a href="https://www.linkedin.com/in/joao-rafael-rosa" target="_blank">
    <img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white" alt="LinkedIn João Rafael"/>
  </a>
  <br>
  Desenvolvedor e idealizador do projeto.
</div>


## 📄 Licença

![Licença](https://img.shields.io/badge/Licença-Código%20Fechado-critical)

## 🖼️ Demonstração

![preview](semcaminhoainda)
