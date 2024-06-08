# Sistema SISGEN LARAVEL 
Um projeto que gerencia Funções, Permissões e todas as ações da sua aplicação Laravel. Uma solução completa para Controle de Acesso baseado em Funções no Laravel. 
``` Nome de Usuário - superadmin Senha - 12345678 ``` > 
**Nota:** Não tente modificar os dados do Super Admin (Função e administrador), apenas para implantação no Heroku.
## Requisitos: - Laravel `7.x` | `9.7` ## Versões: - Laravel `7.x` & PHP -`7.x`
## Configuração do Projeto Clone o repositório Git - 
```console git clone https://github.com/RonaldoAmaralDev/uhlelo_sisgen.git ``` 
Vá para a pasta do projeto - ```console cd laravel-role ``` 
Instale as Dependências do Laravel - ```console composer install ``` 
Crie o banco de dados chamado - `laravel_role` 
Crie o arquivo `.env` copiando o arquivo `.env.example` Gere a Chave do Artisan (Se necessário) - 
```console php artisan key:generate ``` 
Migre o Banco de Dados com o seeder - ```console php artisan migrate --seed ```
Execute o Projeto 
- ```php php artisan serve ```
