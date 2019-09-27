<?php 

class Paginas{
public function enlacesPaginasModel($enlaces){
	if($enlaces == "login" ||	$enlaces=="registro" ||$enlaces == "inicio" || $enlaces == "editar" || $enlaces == "salir" || $enlaces == "registro_alumnos" || $enlaces == "registro_maestros"|| $enlaces == "maestroeditar" || $enlaces == "maestros" || $enlaces == "alumnos" ||$enlaces == "alumnoeditar" || $enlaces == "registro_padres" || $enlaces == "padres" || $enlaces == "padreseditar" || $enlaces == "registro_pago" || $enlaces == "grupo" || $enlaces == "grupoeditar" || $enlaces == "registro_grupos"	|| $enlaces == "pagos" || $enlaces == "pagoseditar"){

		$module =  "views/modules/".$enlaces.".php";
	
	}

	else if($enlaces == "index"){

		$module =  "views/modules/login.php";
	
	}

	else if($enlaces == "ok"){

		$module =  "views/modules/login.php";
	
	}
	else if($enlaces == "oki"){
		$module = "views/modules/registro.php" ;
	}
    else if($enlaces == "in"){
        $module = "views/modules/inicio.php";
    }

	else if($enlaces == "fallo"){

		$module =  "views/modules/login.php";
	
	}	
	else if($enlaces == "cambio"){

		$module =  "views/modules/login.php";
	
	}


	else{

		$module =  "views/modules/login.php";

	}
	
	return $module;

}

}

?>