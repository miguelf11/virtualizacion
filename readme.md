# Virtualización

## Como ejecutar en linux

- 1. Instalar composer desde https://getcomposer.org/ Recomiendo instalar composer globalmente , sirve para laravel,symfony y cake https://getcomposer.org/doc/00-intro.md#globally
- 2. Luego ubicarse en la carpeta desde la terminal y ejecutar ```composer install```
- 3. Copiar el archivo .env.example y renombrar como .env , cambiar el key que se genera con el paso siguiente y colocarlo en APP_KEY
- 4. Generar la key de la app mediante ```php artisan key:generate```
- 5. Crear BD postgrest o mysql y configurar en el archivo .env el nombre de la bd , usuario y password
- 6. Ejecutar ```php artisan migrate --seed```


# Paquetes usados

1. https://laravelcollective.com/docs/5.1/html

## Primer sprint

- 1. Prototipo de las interfaces:
	Inicio de sesión. 
	Área de trabajo de Edumática , Audiovisual y Multimedia. 
- 2. Diseño de la BD.
- 3. Investigación y pruebas de conexión con las APIs de Google.


Si tienes problemas con alǵun seeder usa ```composer dump-autoload ```