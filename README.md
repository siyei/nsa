# NSA - Web

Framework PHP tipo MVC

ORM [phpActiveRecord](http://www.phpactiverecord.org/) para las consultas

### Instalación

Descargar repositorio "master", copiar los archivos dentro de la carpeta public_html del servidor 
de producción.

### .htaccess HTTPS

El .htaccess debe estar en la raíz del proyecto al mismo nivel que las carpetas [app, core, public, .htaccess] esto re escribe los archivos del [public]

```txt

RewriteEngine on
RewriteCond %{HTTP_HOST} ^(www.)?nsa.com.py$
RewriteCond %{REQUEST_URI} !^/public/
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ /public/$1
RewriteCond %{HTTP_HOST} ^(www.)?nsa.com.py$
RewriteRule ^(/)?$ public/index.php [L]

```


### Accesos a MySQL

Modificar el archivo [./core/config.php] y agregar los datos en los campos correspondientes.

```php

define('MY_DB_USER'			, '');	 					
define('MY_DB_PASS'			, ''); 						
define('MY_DB_SERVER'		, ''); 	
define('MY_DB_NAME'			, '');

```