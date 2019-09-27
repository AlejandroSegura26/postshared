<?php
class MvcController{
    #LLAMADA A LA PLANTILLA para visualizarlo
	#-------------------------------------
	public function pagina(){			
		include "views/template.php";
	}

	#ENLACES
	#-------------------------------------
	public function enlacesPaginasController(){

		if(isset( $_GET['action'])){			
			$enlaces = $_GET['action'];		
		}
		else{
			$enlaces = "index";
		}
		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta;
    }
}