# Descripción del proyecto

Es un ejercicio técnico propuesto en una entrevista.

Consta de realizar un sistema para cargar y listar notas de una universidad, los datos serán consumidos mediante una api REST.
Se tendrán dos pantallas, una con las notas cargadas por comisión y otra para realizar la carga. 

Los diagramas de clases, así como el DER y el create de la base de datos están en la carpeta __extras__ 

Para este proyecto utilicé
_ Laradock para el entorno
_ Visual Studio Code 
_ Mysql Workbench
_ Material Design
_ Postman 
_ Laravel 5.8


# Guía para correr el proyecto

El servicio corre en una imagen de docker, en laradock

En mi caso creé un archivo de configuración para apache en la carpeta laradock
> cd laradock
> cp  apache2/sites/default.apache.conf apache2/sites/alumnos-comision.conf
> nano apache2/sites/alumno-comision.conf

El VirtualHost debe quedar de la siguiente manera
```
<VirtualHost *:80>
  ServerName alumnos.local
  DocumentRoot /var/www/alumnos/public
  Options Indexes FollowSymLinks

  <Directory "/var/www/alumnos/public">
    AllowOverride All
    <IfVersion < 2.4>
      Allow from all
    </IfVersion>
    <IfVersion >= 2.4>
      Require all granted
    </IfVersion>
  </Directory>

</VirtualHost>
```

Restart de Docker para que levante la nueva configuración

>  docker-compose restart apache2

Dentro de la carpeta laradock
> docker-compose exec workspace bash

Dentro del contenedor ejecutar
> composer create-project --prefer-dist laravel/laravel alumnos

Agregar el server alias a /etc/hosts
> nano /etc/hosts 
    > 127.0.1.1 alumnos.local

Permisos, sino no funca nada

> sudo chown -R $USER:$USER alumnos/storage
> sudo chown -R $USER:$USER alumnos/bootstrap/cache


> php artisan migrate

Antes de eso debemos agregar la conexión a la base de datos.
En este caso usé las conexiones por defecto, lo mas importante es que en laradock la conexión es mysql en lugar de 127.0.0.1

### Manos a la obra

Generé los modelos y sus seeders (quedó mejor que tirar todo a mano)
> php artisan make:model Facultad -c -f
-c = controller
-f = factory (para poder correr los seeds con faker)

Referencia de [faker](https://github.com/fzaninotto/Faker)

Creo los modelos 
php artisan make:model Comision -c 


Instalé composer require laracasts/generators --dev
para generar la pivot table
art make:migration:pivot alumno comision

