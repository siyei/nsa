<?
//------ FRONT  -------
$map->connect("/envio-de-dinero"		, array('controller' => 'main', 'action' => 'envio_de_dinero'));
$map->connect("/tracking"				, array('controller' => 'main', 'action' => 'tracking'));

$map->connect("/destinos"				            , array('controller' => 'main', 'action' => 'destinos'));
$map->connect("/destinos-detalles/:iddestino"	    , array('controller' => 'main', 'action' => 'destinos_detalles'));

$map->connect("/encomiendas"			        , array('controller' => 'main', 'action' => 'encomiendas'));
$map->connect("/cargas-internacionales"		    , array('controller' => 'main', 'action' => 'cargas_internacionales'));
$map->connect("/parque-industrial"		        , array('controller' => 'main', 'action' => 'parque_industrial'));
$map->connect("/turismo"		                , array('controller' => 'main', 'action' => 'turismo'));
$map->connect("/turismo-detalles/:idturismo"    , array('controller' => 'main', 'action' => 'turismo_detalles'));
$map->connect("/nosotros"		                , array('controller' => 'main', 'action' => 'nosotros'));
$map->connect("/operador-logistico"		        , array('controller' => 'main', 'action' => 'operador_logistico'));
$map->connect("/contacto"		                , array('controller' => 'main', 'action' => 'contacto'));


//------------------
// CMS - BACKEND
//------------------
$map->connect("/cms",                           array('controller' => 'sistema', 'action' => 'cms'));
$map->connect("/logout",                        array('controller' => 'sistema', 'action' => 'logout'));
//------------------
// USERS
//------------------
$map->connect("/usuarios",                      array('carpeta' => 'users', 'controller' => 'sistema', 'action' => 'usuarios'));
$map->connect("/addusuario",                    array('carpeta' => 'users', 'controller' => 'sistema', 'action' => 'addusuario'));
$map->connect("/editusuario/:iduser",           array('carpeta' => 'users', 'controller' => 'sistema', 'action' => 'editusuario'));
$map->connect("/deleteusuario",                 array('controller' => 'sistema', 'action' => 'deleteusuario'));
//------------------
// DESTINOS
//------------------
$map->connect("/listdestinos",                  array('carpeta' => 'destinos', 'controller' => 'sistema', 'action' => 'listdestinos'));
$map->connect("/adddestino",                    array('carpeta' => 'destinos', 'controller' => 'sistema', 'action' => 'adddestino'));
$map->connect("/editdestino/:iddestino",        array('carpeta' => 'destinos', 'controller' => 'sistema', 'action' => 'editdestino'));
$map->connect("/sabethumbnail",                 array('carpeta' => 'destinos', 'controller' => 'sistema', 'action' => 'sabethumbnail'));
$map->connect("/deletedestino",                 array('controller' => 'sistema', 'action' => 'deletedestino'));
//------------------
// DESTINOS
//------------------
$map->connect("/listturismo",                  array('carpeta' => 'turismo', 'controller' => 'sistema', 'action' => 'listturismo'));
$map->connect("/addturismo",                   array('carpeta' => 'turismo', 'controller' => 'sistema', 'action' => 'addturismo'));
$map->connect("/editturismo/:idturismo",       array('carpeta' => 'turismo', 'controller' => 'sistema', 'action' => 'editturismo'));
$map->connect("/sabethumbnailturismo",         array('carpeta' => 'destinos', 'controller' => 'sistema', 'action' => 'sabethumbnailturismo'));
$map->connect("/deleteturismo",                array('controller' => 'sistema', 'action' => 'deleteturismo'));



$map->connect("/", array('controller' => 'main', 'action' => 'index'));
$map->connect("/*", array('controller' => 'main', 'action' => 'error'));

$map->connect(":controller/:action/*");

?>