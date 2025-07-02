
## Instalación del Proyecto

Sigue estos pasos para instalar y poner en marcha el proyecto:

### 1. Clona el repositorio

```bash
git clone <URL_DEL_REPOSITORIO>
cd Proyecto_PPI
```

### 2. Instala las dependencias de PHP

```bash
composer install
```

### 3. Copia el archivo de entorno y configura tus variables

```bash
cp .env.example .env
```
Edita el archivo `.env` con la configuración de tu base de datos y otros servicios.

### 4. Genera la clave de la aplicación

```bash
php artisan key:generate
```

### 5. Ejecuta las migraciones

```bash
php artisan migrate
```

### 6. Crea un usuario administrador de prueba

Abre Tinker para crear un usuario con usuario **admin** y contraseña **admin**:

```bash
php artisan tinker
```

Luego, ejecuta en la consola interactiva:

```php
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
Usuario::create(['usuario' => 'admin', 'password' => Hash::make('admin')]);
```

---

¡Listo! Ahora puedes iniciar sesión con el usuario **admin** y la contraseña **admin**.
