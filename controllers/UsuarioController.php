<?php 
require_once 'models/Usuario.php';
class UsuarioController
{
	
	public function index(){
		echo "Controlador Usuario, Accion Index";
	}

	public function registro(){
		require_once 'views/usuario/registro.php';
	}

	public function save(){

		if (isset($_POST)) {

			$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
			$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
			$email = isset($_POST['email']) ? $_POST['email'] : false;
			$password = isset($_POST['password']) ? $_POST['password'] : false;

			if ($nombre && $apellidos && $email && $password) {
				
				$usuario = new Usuario();
				$usuario->setNombre($nombre);
				$usuario->setApellidos($apellidos);
				$usuario->setEmail($email);
				$usuario->setPassword($password);
				$save = $usuario->save();
			

			}else{
				$_SESSION['register'] = "failed";
			}
			
			if ($save) {
				$_SESSION['register'] = "complete";
			
			}else{
				$_SESSION['register'] = "failed";
			}

		}else{
			$_SESSION['register'] = "Failed";
		}

		header("Location:" . base_url . "Usuario/registro");

	}

	public function login(){

		if (isset($_POST)) {
			# Identificar al usuario
			//COnsulta a la bd para comprobar las credenciales
			$email = isset($_POST['email']) ? $_POST['email'] : false;
			$password = isset($_POST['password']) ? $_POST['password'] : false;


			$usuario = new Usuario();
			$usuario->setEmail($email);
			$usuario->setPassword($password);
			$identity = $usuario->login();

			// crear session


			if ($identity && is_object($identity)){
				
				$_SESSION['identity'] = $identity;

				if ($identity->rol == 'admin') {
					$_SESSION['admin'] = true;
				}
			}else{
				$_SESSION['error_login'] = "Error de autenticacion";
			}

		}

		header("Location:".base_url);
	}

	public function logout(){
		
		if (isset($_SESSION['identity'])) {
			unset($_SESSION['identity']);
		}
		if (isset($_SESSION['admin'])) {
			unset($_SESSION['admin']);
		}
		header('Location:' . base_url);
	}
} // fin clase