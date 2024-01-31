## Como ejecutar el proyecto
Con Docker Compose instalado ejecutamos:
```bash
docker-compose up -d
```
Y ya tenemos la página funcionando en el puerto 8000

Para migrar la base de datos tenemos que ejecutar el siguiente comando:
```bash
docker exec laravel-app php artisan migrate
```

Y si queremos ver el estado de la migración para comprobar que todo se ha hecho bien:
```bash
docker exec laravel-app php artisan migrate:status
```
