# 🛠️ Prueba Backend – API RESTful con Laravel

Este proyecto es una API RESTful desarrollada con Laravel que permite gestionar productos y sus precios en distintas divisas. La API sigue buenas prácticas como el uso de servicios, validaciones con `FormRequest` y controladores delgados (principio de responsabilidad única de SOLID).

---

## ⚙️ Requisitos del sistema

-   PHP 8.1 o superior
-   Composer
-   Laravel 10+
-   SQLite, MySQL o PostgreSQL

---

## 🚀 Instalación

```bash
git clone https://github.com/tu-usuario/prueba-backend.git
cd prueba-backend
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
```

En tu archivo `.env`, configura lo siguiente:
DB_CONNECTION=sqlite
