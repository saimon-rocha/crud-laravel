# 📌 CRUD com Laravel
Este projeto foi desenvolvido para praticar organização de código, fluxo de migrations e estruturação seguindo o padrão MVC no Laravel.

## 🚀 Funcionalidades
- 📌 Cadastro, edição e remoção de registros
- 📄 Listagem de dados cadastrados
- 🔄 Uso de migrations para controle do banco de dados
- 🏗 Estrutura do Projeto
O projeto segue o padrão MVC (Model-View-Controller) e está organizado da seguinte forma:

```
📂 projeto-laravel/
├── app/                # Contém os Models e Controllers
├── database/           # Contém migrations e seeders
├── resources/views/    # Arquivos Blade (HTML com Laravel)
├── routes/web.php      # Definição das rotas
├── .env                # Configurações do ambiente e banco de dados
└── server.php          # Arquivo para iniciar o servidor
```

## 🛠 Tecnologias Utilizadas
PHP – Linguagem de programação
Laravel – Framework para desenvolvimento web
Blade – Template engine do Laravel
PostgreSQL – Banco de dados
HTML & CSS – Estruturação e estilização da interface

## ⚙️ Instalação e Configuração
Antes de iniciar, certifique-se de ter os seguintes requisitos instalados em sua máquina:
PHP (8.x recomendado)
Composer (gerenciador de dependências do PHP)
Banco de Dados (PostgreSQL, MySQL ou outro compatível)
### 📌 Passos para rodar o projeto
- Clone o repositório
- Instale as dependências: composer install
- Configure o arquivo .env com as credenciais do seu banco de dados.
- Execute as migrations para criar as tabelas: php artisan migrate
- Inicie o servidor local: php artisan serve
- Acesse no navegador: http://127.0.0.1:8000
```
🤝 Contribuições
Contribuições são sempre bem-vindas! Caso encontre um problema ou tenha sugestões de melhorias, fique à vontade para abrir uma issue ou enviar um pull request.

📜 Licença
Este projeto está sob a licença MIT – fique à vontade para usá-lo e modificá-lo.
```
