<?
class MainController extends ActionController { 
	
	function index(){
		$GLOBALS['title']	= "NSA - Bienvenidos";
		$GLOBALS['menu'] 	= 1;
	}	
	function envio_de_dinero(){
		$GLOBALS['title']	= "NSA - Envio de dinero";
		$GLOBALS['menu'] 	= 2;
	}
	function tracking(){
		$GLOBALS['title']	= "NSA - Tracking";
		$GLOBALS['menu'] 	= 3;
	}
	function destinos(){
		$GLOBALS['title']	= "NSA - Destinos";
		$GLOBALS['menu'] 	= 0;
	}
	function encomiendas(){
		$GLOBALS['title']	= "NSA - Encomiendas";
		$GLOBALS['menu'] 	= 0;
	}
	function cargas_internacionales(){
		$GLOBALS['title']	= "NSA - Cargas internacionales";
		$GLOBALS['menu'] 	= 0;
	}
	function parque_industrial(){
		$GLOBALS['title']	= "NSA - Parque industrial";
		$GLOBALS['menu'] 	= 0;
	}
	function turismo(){
		$GLOBALS['title']	= "NSA - Turismo";
		$GLOBALS['menu'] 	= 0;
	}
	function turismo_detalles(){
		$GLOBALS['title']	= "NSA - Turismo detalles";
		$GLOBALS['menu'] 	= 0;
	}
	function nosotros(){
		$GLOBALS['title']	= "NSA - Nosotros";
		$GLOBALS['menu'] 	= 0;
	}
	function operador_logistico(){
		$GLOBALS['title']	= "NSA - Operador Logístico";
		$GLOBALS['menu'] 	= 0;
	}
	function contacto(){
		$GLOBALS['title']	= "NSA - Contacto";
		$GLOBALS['menu'] 	= 0;
	}
}
?>