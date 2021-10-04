<?php
class SistemaController extends ActionController { 

	//----------------
	// LOGIN / LOGOUT
	//----------------
	function cms(){
		$method = $_SERVER['REQUEST_METHOD'];
		if($method === 'GET'){
			$GLOBALS['title'] = "Login";
		}elseif($method === 'POST'){	
			$email 		= $this->params['post']['email'];
			$password 	= $this->params['post']['password'];
			// Login function
			$password = sha1($password);
			$user = User::find_by_sql("SELECT iduser, nombre, email, password, avatar FROM users WHERE email = '$email' AND password = '$password'");
			if(count($user) >= 1){
				$error 	= 0;
				$codigo = 0;
				$mensaje = 'Accediendo...';
				$href 	= '/usuarios';

				// -- GUARDAMOS EN SESION LOS DATOS --
				$_SESSION['sid'] 	 	= $user[0]->iduser;
				$_SESSION['snombre'] 	= $user[0]->nombre;
				$_SESSION['semail'] 	= $user[0]->email;
				$_SESSION['sfoto'] 		= $user[0]->avatar;
			}else{
				$error 	= 1;
				$codigo = 1;
				$mensaje = 'Usted no está autorizado.';
				$href 	= '';
			}	
			$r 	= array(
						'error' 	=> $error,
						'codigo' 	=> $codigo,
						'mensaje' 	=> $mensaje,
						'href'		=> $href
						);
			echo json_encode($r);
			exit();
		}
	}
	function logout(){
		session_destroy();
		refresh('cms');
		$this->render(false);
	}
	//----------------
	// USUARIOS
	//----------------
	function usuarios(){
		ifLogin();
		$GLOBALS['title'] 	= "Tablero - Principal";	
		$GLOBALS['menu']	= 0;
		$this->data 		= User::all();
	}
	function addusuario(){
		$method = $_SERVER['REQUEST_METHOD'];
		if($method === 'GET'){
			$GLOBALS['title'] 	= "Agregar usuario";	
			$GLOBALS['menu']	= 0;
		}elseif($method === 'POST'){
			$newUser 			= new User();
			$newUser->nombre 	= $this->params['post']['nombre'];
			$newUser->apellido 	= $this->params['post']['apellido'];
			$newUser->avatar 	= $this->params['post']['avatar'];
			$newUser->email 	= $this->params['post']['email'];
			$newUser->password 	= sha1($this->params['post']['password']);
			$newUser->save();

			$r = [
				'codigo'		 => 0
			];
			echo json_encode($r);
			exit();
		}
	}
	function editusuario(){
		$method = $_SERVER['REQUEST_METHOD'];
		if($method === 'GET'){
			$GLOBALS['title'] 	= "Editar usuario";	
			$GLOBALS['menu']	= 0;
			$iduser 			= $this->params['get']['iduser'];
			$this->user 		= User::find($iduser);
		}elseif($method === 'POST'){
			$editUser 				= User::find($this->params['post']['iduser']);
			$editUser->nombre 		= $this->params['post']['nombre'];
			$editUser->apellido 	= $this->params['post']['apellido'];
			$editUser->avatar 		= $this->params['post']['avatar'];
			$editUser->email 		= $this->params['post']['email'];
			if($this->params['post']['password'] != null){
				$editUser->password 	= sha1($this->params['post']['password']);	
			}
			$editUser->save();

			$r = [
				'codigo'		 => 0
			];
			echo json_encode($r);
			exit();
		}
	}
	function deleteusuario(){
		ifLogin();
		$iduser 		= $this->params['post']['iduser'];
		$user 			= User::find($iduser);
		if(count($user) >= 1){
			$user->delete();
		}
		$r = [
			'error' => 0,
			'mensaje' => 'Eliminado correctamente',
		];
		echo json_encode($r);
		$this->render(false);
	}
	//----------------
	// DESTINOS
	//----------------
	function listdestinos(){
		ifLogin();
		$GLOBALS['title'] 	= "Destinos - Lista";	
		$GLOBALS['menu']	= 2;
		$this->data 		= Destino::find_by_sql("SELECT * FROM destinos de INNER JOIN pais pa ON pa.idpais = de.idpais ORDER BY de.iddestino ASC");
	}
	function adddestino(){
		ifLogin();
		$method = $_SERVER['REQUEST_METHOD'];
		if($method === 'GET'){
			$GLOBALS['title'] 	= "Agregar destino";	
			$GLOBALS['menu']	= 2;
			$this->pais 		= Pais::find_by_sql("SELECT * FROM pais ORDER BY pais ASC");
		}elseif($method === 'POST'){
			$newData 			= new Destino();
			$newData->idpais 	= $this->params['post']['idpais'];
			$newData->destino 	= $this->params['post']['destino'];
			$newData->precio 	= $this->params['post']['precio'];
			$newData->detalles 	= $this->params['post']['detalles'];
			$newData->save();

			$r = [
				'codigo'		=> 0,
				'iddestino' 	=> $newData->iddestino
			];
			echo json_encode($r);
			exit();
		}
	}
	function editdestino(){
		ifLogin();
		$method = $_SERVER['REQUEST_METHOD'];
		if($method === 'GET'){
			$GLOBALS['title'] 	= "Editar destino";	
			$GLOBALS['menu']	= 2;

			$iddestino 			= $this->params['get']['iddestino'];

			$this->pais 		= Pais::find_by_sql("SELECT * FROM pais ORDER BY pais ASC");

			$this->data 		= Destino::find($iddestino);
		}elseif($method === 'POST'){
			$iddestino 			= $this->params['post']['iddestino'];
			$newData 			= Destino::find($iddestino);
			$newData->idpais 	= $this->params['post']['idpais'];
			$newData->destino 	= $this->params['post']['destino'];
			$newData->precio 	= $this->params['post']['precio'];
			$newData->detalles 	= $this->params['post']['detalles'];
			$newData->save();

			$r = [
				'codigo'		=> 0,
				'iddestino' 	=> $newData->iddestino
			];
			echo json_encode($r);
			exit();
		}
	}
	function deletedestino(){
		ifLogin();
		$iddestino 		= $this->params['post']['iddestino'];
		$destino 			= Destino::find($iddestino);
		if(count($destino) >= 1){
			$destino->delete();
		}
		$r = [
			'error' => 0,
			'mensaje' => 'Eliminado correctamente',
		];
		echo json_encode($r);
		$this->render(false);
	}
	//----------------
	// TURISMO
	//----------------
	function listturismo(){
		ifLogin();
		$GLOBALS['title'] 	= "Turismo - Lista";	
		$GLOBALS['menu']	= 3;
		$this->data 		= Turismo::find_by_sql("SELECT * FROM turismos tu INNER JOIN pais pa ON pa.idpais = tu.idpais ORDER BY tu.idturismo ASC");
	}
	function addturismo(){
		ifLogin();
		$method = $_SERVER['REQUEST_METHOD'];
		if($method === 'GET'){
			$GLOBALS['title'] 	= "Agregar turismo";	
			$GLOBALS['menu']	= 3;
			$this->pais 		= Pais::find_by_sql("SELECT * FROM pais ORDER BY pais ASC");
		}elseif($method === 'POST'){
			$newData 			= new Turismo();
			$newData->idpais 	= $this->params['post']['idpais'];
			$newData->destino 	= $this->params['post']['destino'];
			$newData->precio 	= $this->params['post']['precio'];
			$newData->detalles 	= $this->params['post']['detalles'];
			$newData->save();

			$r = [
				'codigo'		=> 0,
				'idturismo' 	=> $newData->idturismo
			];
			echo json_encode($r);
			exit();
		}
	}
	function editturismo(){
		ifLogin();
		$method = $_SERVER['REQUEST_METHOD'];
		if($method === 'GET'){
			$GLOBALS['title'] 	= "Editar turismo";	
			$GLOBALS['menu']	= 3;

			$idturismo 			= $this->params['get']['idturismo'];

			$this->pais 		= Pais::find_by_sql("SELECT * FROM pais ORDER BY pais ASC");

			$this->data 		= Turismo::find($idturismo);
		}elseif($method === 'POST'){
			$idturismo 			= $this->params['post']['idturismo'];
			$newData 			= Turismo::find($idturismo);
			$newData->idpais 	= $this->params['post']['idpais'];
			$newData->destino 	= $this->params['post']['destino'];
			$newData->precio 	= $this->params['post']['precio'];
			$newData->detalles 	= $this->params['post']['detalles'];
			$newData->save();

			$r = [
				'codigo'		=> 0,
				'idturismo' 	=> $newData->idturismo
			];
			echo json_encode($r);
			exit();
		}
	}
	function deleteturismo(){
		ifLogin();
		$idturismo 		= $this->params['post']['idturismo'];
		$turismo 		= Turismo::find($idturismo);
		if(count($turismo) >= 1){
			$turismo->delete();
		}
		$r = [
			'error' => 0,
			'mensaje' => 'Eliminado correctamente',
		];
		echo json_encode($r);
		$this->render(false);
	}
	function sabethumbnail(){
		ifLogin();
		$handle 	= new upload($_FILES['file']);
		$type 		= explode('.', $_FILES['file']['name']);
		$type 		= strtolower(array_pop($type));
		// traigo los parametros POST
		$iddestino 	= $this->params['post']['iddestino'];

		if ($handle->uploaded) {
			$file_name 						= sha1($_FILES['file']['name'].date('i:s'));
			$handle->file_new_name_body    = $file_name;
			$handle->image_resize          = true;
			$handle->image_ratio_crop      = true;
			$handle->image_x               = 554;
			$handle->image_y               = 308;
			$handle->process('img/destinos/');
			$file_name 						= $file_name.'.'.$type; 
			if ($handle->processed) {
				// guardo en la DB los datos nuevos del logo
				$sabeThumbnail 				= Destino::find($iddestino);
				$sabeThumbnail->thumbnail 	= $file_name;
				$sabeThumbnail->save();
				$r = array(	
					"codigo" 	=> 0
					);
				echo json_encode($r);
				// limpio la memoria
				$handle->clean();
			}else{
				echo 'error : ' . $handle->error;
			}
		}
		$this->render(false);
	}
	function sabethumbnailturismo(){
		ifLogin();
		$handle 	= new upload($_FILES['file']);
		$type 		= explode('.', $_FILES['file']['name']);
		$type 		= strtolower(array_pop($type));
		// traigo los parametros POST
		$idturismo 	= $this->params['post']['idturismo'];

		if ($handle->uploaded) {
			$file_name 						= sha1($_FILES['file']['name'].date('i:s'));
			$handle->file_new_name_body    = $file_name;
			$handle->image_resize          = true;
			$handle->image_ratio_crop      = true;
			$handle->image_x               = 554;
			$handle->image_y               = 308;
			$handle->process('img/turismo/');
			$file_name 						= $file_name.'.'.$type; 
			if ($handle->processed) {
				// guardo en la DB los datos nuevos del logo
				$sabeThumbnail 				= Turismo::find($idturismo);
				$sabeThumbnail->thumbnail 	= $file_name;
				$sabeThumbnail->save();
				$r = array(	
					"codigo" 	=> 0
					);
				echo json_encode($r);
				// limpio la memoria
				$handle->clean();
			}else{
				echo 'error : ' . $handle->error;
			}
		}
		$this->render(false);
	}
}

?>