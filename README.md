# Laravel

## Migraciones

- Sincroniza la base de datos con las migraciones que tengamos en `database/migrations`
```bash
php artisan migrate
```

- Crear migración

```bash
php artisan make:migration create_name_table
```

## Instalaciones

-   Instalamos gestionador de paquetes de LARAVEL (Si ya lo instalaste NO Volver a instalar):

```bash
composer global require laravel/installer
```

-   Crear nueva app:

```bash
laravel new appname
```

-   Instalar dependencias (Opcional):

```bash
composer install
```

-   Generar un AppKey (Opcional):

```bash
php artisan key:generate
```

-   Run:

```bash
php artisan serve
```

## Metodo route('aliasName')

Entre doble moustache podemos agregar las diferentes directivas para que Blade ejecute el comando

```html
<a href="{{ route('about') }}">About</a>
```

## Metodo asset('path')

```html
<img src="{{ asset('assets/img/1.jpg') }}" alt="My card 1" />
```
