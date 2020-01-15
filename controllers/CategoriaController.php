<?php 
require_once 'models/Categoria.php';
require_once 'models/Producto.php';
class CategoriaController
{

	public function index(){
		Utils::isAdmin();
		$categoria = new Categoria();
		$categorias = $categoria->getAll();

		require_once 'views/categoria/index.php';
	}

	public function ver(){

		if (isset($_GET['id'])) {

			$id = $_GET['id'];
			//COnseguir categoria
			$categoria = new Categoria();
			$categoria->setId($id);
			$categoria = $categoria->getOne();

			//conseguir productos

			$producto = new Producto();
			$producto->setCategoria_id($id); 
			$productos = $producto->getAllCategory();


		}
		require_once 'views/categoria/ver.php';
	}
	
	public function crear(){
		Utils::isAdmin();
		require_once 'views/categoria/crear.php';
	}

	public function save(){
		Utils::isAdmin();
		//Guardar la categoria en la base de dato
		if (isset($_POST) && isset($_POST['nombre'])) {
		
		$categoria = new Categoria();
		$categoria->setNombre($_POST['nombre']);
		$categoria->save();
		}
		

		header('Location:'.base_url. "Categoria/index");
		
	}
}











