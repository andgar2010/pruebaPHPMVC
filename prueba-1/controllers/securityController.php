<?php 

class securityController
{

	public function verificar_inicio(){
		try {
			
			if($roll!="inicio"){
                 header("location:defaultPage.php");
			}
		} catch (Exception $e) {
			
		}
	}
	public function verificar_index(){
		try {
			
			if($roll!="index"){
                 header("location:defaultPage.php");
			}
		} catch (Exception $e) {
			
		}
	}
}

 ?>