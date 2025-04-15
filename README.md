
# Laravel 10 Passport API

A clean and modular Laravel 10 REST API boilerplate using Passport for authentication, resource-based JSON responses, and full-featured category CRUD with soft delete support.

---

## 📦 Features

- Laravel 10 + Passport Authentication
- Login via **email or mobile**
- Structured JSON responses using **Resource & Collection**
- Category CRUD with:
    - Soft Deletes
    - Parent/Child hierarchy
    - Seeder for demo data
- Form Request validation
- Standard Folder Structure

---

## 🚀 Setup Instructions

### 1. Clone the Repo

```bash
git clone https://github.com/thbappy/account
cd account
```

### 2. Install Dependencies

```bash
composer install
cp .env.example .env
php artisan key:generate
```

### 3. Configure `.env`

Set up your database credentials and mail config in `.env`.

```env
DB_DATABASE=your_db
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Run Migrations & Seeders

```bash
php artisan migrate --seed
```

Seeder includes a demo user:
```
Email: admin@gmail.com
Password: password
```

### 5. Install & Setup Passport

```bash
php artisan passport:install
```


Then run:

```bash
php artisan config:cache
```

---

## 🔐 Authentication

### Register

`POST /api/register`

Fields:
- `first_name`
- `last_name`
- `email`
- `mobile`
- `password`
- `password_confirmation`

### Login

`POST /api/login`

Fields:
- `email_or_mobile`
- `password`

Returns access token and user data.

---

## 📁 Category API (CRUD)

All requests are protected with Bearer Token.

### List Categories

`GET /api/categories`

### Show Single Category

`GET /api/categories/{id}`

### Create Category

`POST /api/categories`

### Update Category

`PUT /api/categories/{id}`

### Delete Category (Soft Delete)

`DELETE /api/categories/{id}`

---

## 📚 Seeder Data

Runs with:

```bash
php artisan db:seed
```

Creates:

- Admin user: `admin@gmail.com` / `password`
- Demo parent/child categories

---

## 🧰 Tech Stack

- Laravel 10
- Laravel Passport
- MySQL
- JSON Resources & Collections
- Form Request Validation
- Soft Deletes

---

## 🙌 Author

**Tanbeer Hasan**  
Full Stack Developer from Bangladesh 🇧🇩

---

## 📜 License

This project is open-sourced under the MIT license.
