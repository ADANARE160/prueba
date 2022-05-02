<?php 
class conexion {
	static public function conectar(){
		/*creamos el objeto PDO al cual llamaremos link*/
		#primer parametro del objeto PDO() es PDO("nombre del servidor; nombrede la base de datos")	
		#segundo parametro es PDO("nombre del servidor; nombrede la base de datos","usuario", "contraseña")		
		$link= new PDO("mysql:host=localhost;dbname=curso-php", 
			"root", 
				"");
		$link->exec("set names utf8");
		return $link;}
	}
 ?>