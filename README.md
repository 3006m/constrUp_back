# constrUp Backend

API RESTful desenvolvida em Laravel para teste técnico.

## Tecnologias
- PHP 8.3
- Laravel 13
- MySQL

## Requisitos
- PHP >= 8.3
- Composer
- MySQL

## Como rodar

### 1. Clonar o repositório
```bash
git clone https://github.com/3006m/constrUp_back.git
cd constrUp_back
```

### 2. Instalar dependências
```bash
composer install
```

### 3. Configurar o ambiente
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configurar o banco de dados
No arquivo `.env`, ajuste as variáveis:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=constrUp
DB_USERNAME=root
DB_PASSWORD=

### 5. Criar o banco e rodar as migrations
```bash
php artisan migrate
```

### 6. Iniciar o servidor
```bash
php artisan serve
```

A API estará disponível em `http://127.0.0.1:8000`

## Endpoints

| Método | Rota | Descrição |
|--------|------|-----------|
| GET | /api/produtos | Lista todos os produtos |
| POST | /api/produtos | Cria um novo produto |
| GET | /api/produtos/{id} | Busca um produto |
| PUT | /api/produtos/{id} | Atualiza um produto |
| DELETE | /api/produtos/{id} | Remove um produto |