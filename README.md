<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</p>

# EPI Control

Sistema web para gerenciamento de **Equipamentos de Proteção Individual (EPIs)**, funcionários e entregas de equipamentos.

O projeto foi desenvolvido utilizando Laravel e possui autenticação de usuários, controle de acesso por perfis, cadastro e gerenciamento de EPIs, funcionários e entregas.

---

## Tecnologias utilizadas

- PHP 8.3+
- Laravel 13
- Laravel Breeze
- Blade
- Tailwind CSS
- Alpine.js
- PostgreSQL
- Vite
- Pest

---

# Funcionalidades

## Autenticação

- Cadastro de usuários
- Login
- Logout
- Gerenciamento de perfil
- Proteção das páginas através de autenticação

## Usuários e perfis

O sistema possui três tipos de usuários:

- **Administrador**
- **Gerente**
- **Usuário**

O controle de acesso utiliza Middleware e Policies para restringir determinadas funcionalidades de acordo com o perfil do usuário.

## Gerenciamento de EPIs

- Listagem de EPIs
- Cadastro de EPI
- Visualização de EPI
- Edição de EPI
- Exclusão de EPI
- Controle de quantidade em estoque
- Status do equipamento
- Validade
- Fabricante
- Certificado de Aprovação (CA)

## Gerenciamento de funcionários

- Listagem de funcionários
- Visualização das informações dos funcionários
- Cadastro e gerenciamento de dados dos funcionários
- Nome
- CPF
- Cargo
- Setor
- Data de admissão
- Status

## Gerenciamento de entregas

- Cadastro de entregas de EPIs
- Listagem de entregas
- Visualização dos detalhes da entrega
- Edição de entregas
- Exclusão de entregas
- Registro da quantidade entregue
- Registro da data de entrega
- Registro da data de devolução
- Observações

---

# Instalação

Para executar o projeto localmente, siga os passos abaixo.

## Pré-requisitos

Antes de iniciar, certifique-se de possuir os seguintes programas instalados:

- PHP 8.3 ou superior
- Composer
- Node.js
- NPM
- PostgreSQL
- Git

Para verificar se estão instalados:

```bash
php -v
composer -V
node -v
npm -v
psql --version
git --version
