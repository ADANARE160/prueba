<?php
class controladorFormularios {
	/*-----------------------------
	Metodo llamado registo
	-------------------------------*/

	static public function ctrRegistro(){

	if (isset($_POST["registroNombre"])){

		$tabla= "registros";

		$datos= array("nombre"=> $_POST["registroNombre"],
			"email"=> $_POST["registroEmail"],
			"password"=> $_POST["registroPassword"],
			"empresarial"=> $_POST["registroEmpresarial"]);
		$respuesta= ModeloFormularios::mdlRegistro($tabla, $datos);
		return $respuesta;

		}	
	}
	/*-----------------------------
	Seleccionar Registros
	-------------------------------*/
	static public function ctrSeleccionarRegistros(){
		$tabla= "registros";
		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla);
		return $respuesta;
	}
}
?>
