# API de Tareas - Laravel

Proyecto de ejemplo: API RESTful para gestión de tareas.

## Requisitos
- PHP 8+
- Composer
- MySQL / SQLite
- (opcional) Laravel Sanctum para autenticación

## Instalación rápida
```bash
git clone https://github.com/03Serch19/PHP-proyectPr
cd tareas-api
composer install
#en mysql crear una bd llamada api_tareas_db
# configurar .env con la BD
cp .env.example .env
php artisan migrate
#Poblar con factories
php artisan tinker
# luego en tinker:
use App\Models\Tarea;
Tarea::factory()->count(10)->create();
php artisan serve
```
## Endpoints

GET /api/tareas — Listar
POST /api/tareas — Crear
GET /api/tareas/{id} — Ver
PUT /api/tareas/{id} — Actualizar
DELETE /api/tareas/{id} — Eliminar