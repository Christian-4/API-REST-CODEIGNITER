# API-REST-CODEIGNITER

Bien, este proyecto es una API REST creada sobre el framework CODEIGNITER.

Si te descargas el proyecto, simplemente tendras que crear una base de datos llamada diccionario, con una tabla diccionario y las columnas, id, nombre, descripcion para poder usarla.

Para usar este proyecto tienes que colocarlo en una carpeta sobre /var/www/html/*'carpeta'* y para comprobar si funciona podemos hacer una petición get desde el navegador colocando en la url localhost/*'carpeta'*/index.php/diccionario

Nuestro proyecto es la base del framework CODEIGNITER y le hemos implementado el proyecto de esta plataforma github del usuario chriskacerguis --> https://github.com/chriskacerguis/codeigniter-restserver

Nosotros en nuestro proyecto hemos modificado: 
application/config/routes.php, agregando nuestras rutas.
application/config/database.php, indicando nuestro usuario, contraseña y base de datos.
application/config/autoload.php, indicando que se cargue automaticamente la base de datos.

Como los framework trabajan con los canones de modelo, vista, controlador.

Hemos creado un modelo, llamado Diccionario_model.php, que es quien obtiene los datos de la base de datos, quien realiza las funcioens logicas.

Hemos creado tambien un controlador, llamado Diccionario.php, que es quien llama al modelo para obtener los datos.

Podemos obtener, mandar, actualizar y borrar datos de la base de datos con la herramienta curl.
