# DOCUMENTACION

1. Primero lo que hice fue crear las migraciones y los seeders:
   
    en la carpeta database dentro de la carpeta migraciones cree la migracion con el comando => php artisan make:migration create_nombreMigracion_table

    en la carpeta database dentro de la carpeta seeders cree el seeder para ingresar informacion en la bd con el comando => php artisan make:seeder NombreSeeder
2. Luego cree el modelo de dicha tabla que se creo con la migracion con el comando php artisan make:model nombreModelo, aqui defini algunas propiedades del modelo como el nombre de la tabla y los campos que pueden ser asignados en masa 
3. Cree la carpeta Services dentro de la carpeta app esta carpeta contendra los servicios que ejecutaran acciones sobre la bd, dentro cree una interfaz (IFunctions) con metodos que se implementaran siempre en los servicios que vaya a crear
   1. El archivo ClienteService es quien contiene los metodos que ejecutan acciones sobre la bd, como leer, crear, borrar, actualizar, etc
   2. Estos archivos fueron creados manualmente no hay un comando para ello 
4. Cree el controlador dentro de la carpeta app/Http/Controllers con el comando php artisan make:controller nombreControlador --resource este comando crea el controlador y ademas la flag --resource nos agrega los metodos crud (se deben borrar los metodos create y edit que crea ya que no se usan)
   1. en este archivo dentro de los metodos respectivos llame al servicio correspondiente, pero previamente en el constructor de este controlador cree una instancia al servicio que cree antes esto lo hice para poder usar sus metodos 
5. por ultimo cree las rutas en la carpeta routes en el archivo api.php
   1. la estructura de una ruta es Route::tipoPeticion(url, funcion a ejecutar) 
      1. en tipo de peticion iria (get, post, put, patch, delete) segun corresponda
      2. en url ira la ruta a la que ingresara el usuario para obtener la informacion
      3. en funcion a ejecutar ira la accion que se realizara cuando se visite esa url
   2. la primer ruta permite obtener todos los clientes registrados en la bd
   3. la segunda permite guardar un nuevo cliente en la bd
   4. la tercera permite buscar un cliente mediante el id
   5. la cuarta permite modificar la informacion de un cliente por su id
   6. la quinta permite borrar un cliente
