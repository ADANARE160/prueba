<?php 

#INDEX: donde mostraremos las vistas de salida al usuario, tambien a travez de el enviaremos las distintas acciones que el usuario enviara al controlador.

#require establece que el codigo del archivo invocado es requerido, es decir es obligatorio para el funcionamiento del programa. Por ello si el archivo especificado en la funcion require no se encuentra soltara un error "PHP fatal error". y el programa se detendra.

#require-once  funciona de la misma manera que su respectivo salvo que al utilizar la version _once se impide la carga de más de un mismo archivo en mas de una vez.
# si se requiere el mismo codigo más de una vez, corremos el riesgo de redeclaracion de variables, funciones o clases. 

require_once "Controladores/plantilla.controlador.php";
require_once "Controladores/controlador.formularios.php";
require_once "Modelos/formuarios.modelo.php";

$plantilla = new controladorPlantilla();
$plantilla -> ctrTraerplantilla(); 
 ?>