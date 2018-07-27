<?php
/*
By: Felipe
Mostrar la vista inicial
*/

class InicioController extends IndexController
{
	private $seguridainicio;
	private $inicioModel;

	function __construct(){
		$this->seguridainicio= new verificar_inicio();
		
		$this->inicioModel = $this->model('inicio');
	}

	public function index(){
		$r = $this->inicioModel->traerUsuarios();
		$this->view('inicio',$r);
	}
}



?>