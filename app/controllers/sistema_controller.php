<?
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
	
}

?>