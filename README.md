#Sistema SISGEN LARAVEL
PROJETO EM DESENVOLVIMENTO

Copiar código
Nome de Usuário - superadmin
Senha - 12345678
Nota: Não tente modificar os dados do Super Admin (Função e administrador), apenas para implantação no Heroku.

Requisitos:
Laravel 7.x | 9.7
Versões:
Laravel 7.x & PHP -7.x
Configuração do Projeto
Clone o repositório Git -

console
Copiar código
```git clone https://github.com/RonaldoAmaralDev/uhlelo_sisgen.git```
Vá para a pasta do projeto -

console
Copiar código
```cd laravel-role```
Instale as Dependências do Laravel -

console
Copiar código
```composer install```
Crie o banco de dados chamado - laravel_role

Crie o arquivo .env copiando o arquivo .env.example

Gere a Chave do Artisan (Se necessário) -

console
Copiar código
```php artisan key:generate```
Migre o Banco de Dados com o seeder -

console
Copiar código
```php artisan migrate --seed```
Execute o Projeto -

php
Copiar código
```php artisan serve```


