<?php
error_reporting(E_PARSE);
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
/*Solo modifica lo que se encuentra en medio de las segundas
 comillas de los parentesis. Ejemplo: define("USER", "valor que ingresaras" ); 
 */

/*Nombre de usuario de mysql
define("USER", "agat");

//Servidor de mysql
define("SERVER", "localhost");

//Nombre de la base de datos
define("BD", "siad2");

//Contraseña de myqsl
define("PASS", "1234");*/
    $SERVER = 'localhost'; //Host del Servidor MySQL
	$BD = 'bd'; //Nombre de la Base de datos
	$USER = 'agat'; //Usuario de MySQL
	$PASS = '1234'; //Password de Usuario MySQL

//Carpeta donde se almacenaran las copias de seguridad
define("BACKUP_PATH", "backup/");

/*Configuración de zona horaria de tu país para más información visita
    http://php.net/manual/es/function.date-default-timezone-set.php
    http://php.net/manual/es/timezones.php
*/
date_default_timezone_set('America/Nicaragua');


class SGBD{
    //Funcion para hacer consultas a la base de datos
    public static function sql($query){
        if(!$conexion=mysqli_connect($SERVER,$USER,$PASS,$BD)){
        die('<strong> No pudo conectarse:</strong> ' .mysqli_connect_error());  
            echo "Error en el servidor, verifique sus datos";
        }else{
            if (!mysqli_select_db($BD) ) {
                 die('<strong> No pudo conectarse:</strong> ' .mysqli_error($conex));  
                echo "Error al conectar con la base de datos, verifique el nombre de la base de datos";
            }else{
                mysqli_set_charset('utf8',$conexion);
                mysqli_query("SET AUTOCOMMIT=0;",$conexion);
                mysqli_query("BEGIN;",$conexion);
                if (!$consul = mysqli_query($query,$conexion)) {
                    echo 'Error en la consulta SQL ejecutada';
                    mysqli_query("ROLLBACK;",$conexion);
                }else{
                    mysqli_query("COMMIT;",$conexion);
                }
                return $consul;
            }
        }
    }  

    //Funcion para limpiar variables que contengan inyeccion SQL
    public static function limpiarCadena($valor) {
        $valor=addslashes($valor);
        $valor = str_ireplace("<script>", "", $valor);
        $valor = str_ireplace("</script>", "", $valor);
        $valor = str_ireplace("SELECT * FROM", "", $valor);
        $valor = str_ireplace("DELETE FROM", "", $valor);
        $valor = str_ireplace("UPDATE", "", $valor);
        $valor = str_ireplace("INSERT INTO", "", $valor);
        $valor = str_ireplace("DROP TABLE", "", $valor);
        $valor = str_ireplace("TRUNCATE TABLE", "", $valor);
        $valor = str_ireplace("--", "", $valor);
        $valor = str_ireplace("^", "", $valor);
        $valor = str_ireplace("[", "", $valor);
        $valor = str_ireplace("]", "", $valor);
        $valor = str_ireplace("\\", "", $valor);
        $valor = str_ireplace("=", "", $valor);
        return $valor;
    }
}
?>