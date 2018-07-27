<?php
/*
By: Felipe
COntrola las vistas y modelos
*/

class IndexController 
{
	// Metodo para llamar al modelo
	public function model($model){
		$model = ucwords($model).'Model';
		if (file_exists('models/'.$model.'.php')) {
			include 'models/'.$model.'.php';
			return new $model;
		}
	}

	//metodo para llamar a la vista
	public function view($view,$data = []){

		if (file_exists('views/modules/'.$view.'.php')) {
			$array = ['bootstrap', 'styles'];		
			require_once 'views/inc/header.php';

			require_once 'views/modules/'.$view.'.php';
			require_once 'views/inc/footer.php';

		}else{
			die('VIEWS - E1');
		}

	} 

}


/*

	inc/header.php
	inc/footer.php

	IndexController.php
	IndexModel.php
	inicio.php 
	
	views/
		index.php
		
		inc/
			navbar.php
			footer.php
		
		Modulo gestion de usuarios/
			addNewUser.php
			editUser.php
			listUsers.php



		Modulo compras/



*/


?>