<?php 

class conexion{

var $url_sitio="http://localhost/practicas_curso_php/practicas/liga/";

var $bd_nombre_global = "ligarg_";
var $bd_usuario_global = "root";
var $bd_password_global = "";
var $bd_ubicacion_gobal = "localhost";


// Constructor
function __construct(){
    $bd_nombre=$this->bd_nombre_global;
    $bd_usuario=$this->bd_usuario_global;
    $bd_password=$this->bd_password_global;
    $bd_ubicacion=$this->bd_ubicacion_gobal;

    if (!isset($GLOBALS['BD_connect']) || !$GLOBALS['BD_connect']) {
    
        $bd=mysqli_connect($bd_ubicacion, $bd_usuario, $bd_password, $bd_nombre );

        if ($bd) {
            $GLOBALS['BD_connect']=$bd;
        }
    }
}

// Devuelve 1 si se ha cerrado la base de datos o NULL si hay algun error
function BD_Cerrar(){

    if (isset($GLOBALS['BD_connect']) && mysqli_close($GLOBALS['BD_connect'])) {
        return(1);
    }else{
        return(NULL);
    }
}

// Ejecuta la consulta pasada en la base de datos. Devuelve NULL si hay algun error
function BD_Consulta($consulta){
    $resultado=FALSE;
    $i=0;


    while(!$resultado && $i<3 && isset($GLOBALS['BD_connect'])){
        $resultado=mysqli_query($GLOBALS['BD_connect'], $consulta);
        $i++;
    }

    if ($resultado) {
        return($resultado);
    }else{
        return(NULL);
    }
}

// Devuelve el numero de filas de una consulta
function BD_NumeroFilas($consulta){
    $filas=mysqli_num_rows($consulta);
    return $filas;
}

//Devuelve un array con una tupla del resultado usando el nombre del campo como indice
// Devuelve NULL si no quedan mas filas
function BD_GetTupla($resultado){
    $tupla = array();
    $tupla = mysqli_fetch_array($resultado);

    return $tupla;
}

function BD_BorraResultado($resultado){
    mysqli_free_result($resultado);
}

}
?>