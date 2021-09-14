<?
ini_set('display_errors', 1);
error_reporting(E_ALL ^E_NOTICE ^E_WARNING ^E_DEPRECATED);
date_default_timezone_set('America/Asuncion');

define('APP_NAME'			, 'NSA');
# Configuración del color
define('TEMPLATEFX' 		, 'blue');
define('BGMENU'				, '');


define('MY_DB_USER'			, 'root');	 					
define('MY_DB_PASS'			, 'root'); 						
define('MY_DB_SERVER'		, 'localhost'); 	
define('MY_DB_NAME'			, 'nsa');


/* Email PHP */
define('SMPP_HOST'			, '');
define('SMPP_FROM'			, '');
define('SMPP_USER'			, '');
define('SMPP_PASS'			, '');
define('SMPP_PORT'			, '');

/* SENGRID */
define('DOMAIN_SERVER'      , '');
define('SEND_EMAIL'			, '');
define('SEND_BUSINESS'		, '');
define('SEND_KEY'		    , '');




# Security Vault
define('SECURITY_VAULT'		, '__ajnadj89JHLKJN*&&@*)LN)(PJILKNkj&&*&*%%KKK??+==_UHJKL@u98230jnsd');
# Session
define('_SESSION_NAME'		, (md5(SECURITY_VAULT). '___session_name_'));
?>