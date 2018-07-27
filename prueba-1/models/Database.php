<?php 

/**
*
By:Felipe
Crear conexión

*/
class Database{
	
	public static function conectar(){
		try {
			$conn=new PDO('mysql:host=localhost;dbname=prueba2;charset=utf8','root',null);
			// $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE);
			return $conn;
		} catch (Exception $e) {
			
		}
		
	}
}

 ?>