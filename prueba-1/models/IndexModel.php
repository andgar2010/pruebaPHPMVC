<?php 

/**
By: Kevin 
Este modelo llamara al los usuarios de la base de datos, dependiendo del metodo
*/
class IndexModel
{
	private $pdo;
	function __construct(){
		$this->pdo = Database::conectar();
	}

	public function traerUsuarios(){
		$sql = 'SELECT * FROM usuario';
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}


}