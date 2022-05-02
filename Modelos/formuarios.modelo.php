<?php 
require_once "conexion.php";

class ModeloFormularios{
	/*-------------------------------------
		REGISTRO
	---------------------------------------
	*/
	static public function mdlRegistro($tabla, $datos){
		#statment: declaracion
		$stmt= Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password, empresarial) VALUES (:nombre, :email, :password, :empresarial)");

		#binparam():vincula la variable de php a un parametro de sustitucion con nombre o de signo de interrogacion correspondiente de la sentencia SQL que fue usada para preparar la sentencia

		$stmt->bindparam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindparam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindparam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindparam(":empresarial", $datos["empresarial"], PDO::PARAM_STR);

		if ($stmt->execute()) {
			return "ok";

			}else{
				print_r(Conexion::conectar()->errorInfo());

			}
			$stmt->close();
			$stmt= null;

	}
	/*-----------------------------
	Seleccionar Registros
	-------------------------------*/
	static public function mdlSeleccionarRegistros($tabla){
		$stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();
		return $stmt-> fetchAll();

		$stmt->close();
			$stmt= null;
	}
}

 ?>