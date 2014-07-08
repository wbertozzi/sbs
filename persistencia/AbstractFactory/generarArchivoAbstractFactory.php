<?php
session_start();
include_once 'nombreTabla.php';
$_SESSION['contador'] = 0;
$arrayNombreBD = array("Pgsql", "Mysql", "Oracle");

foreach ($arrayNombreBD as $aBD) {
    $active = "\n";
    $funcActive = "\n";
    $cuerpoabstrac = "\n";
    $nomArchivoCreado = $aBD . "ActiveRecordAbstractFactory.php";
    foreach ($arrayNombreArchivo as $archivo) {
        $nomArchivo = "ActiveRecord/" . $archivo . "ActiveRecord.php";
        $active.= "\n";
        $active .= "require_once(\"$nomArchivo\");";
        $active .= "\n";

        $funcActive .= "\n";
        $funcActive .= "public function get" . $archivo . "ActiveRecord() {";

        if ($aBD == "Pgsql") {
            $funcActive .= "//return new " . $archivo . "ActiveRecord();";
        } else {
            $funcActive .= "return new " . $archivo . "ActiveRecord();";
        }

        $funcActive .= "\n";
        $funcActive .= "}";
        $funcActive .= "\n";

        $cuerpoabstrac .= "\n";
        $cuerpoabstrac .= "public abstract function get" . $archivo . "ActiveRecord();";
    }
    $ar = fopen($nomArchivoCreado, "a");


    $nomArchivo = $archivo . "ValueObject.php";
    $nombreValueObject = "\$" . $archivo . "ValueObject";
    $nomTabla = strtolower($nomTabla);
    $texto = "<?php";
    $texto .= "\n";
    $texto .= "/**";
    $texto .= "\n";
    $texto .= "* Archivo de la clase " . $aBD . "ActiveRecordAbstractFactory.";
    $texto .= "\n";
    $texto .= "* Archivo de la clase " . $aBD . "ActiveRecordAbstractFactory que nos";
    $texto .= "\n";
    $texto .= "* permite conectar al servidor " . $aBD . " y tambin podremos crear";
    $texto .= "\n";
    $texto .= "* objetos de las clases tipo Active Record para cada una de las";
    $texto .= "\n";
    $texto .= "* tablas " . $aBD . ".";
    $texto .= "\n";
    $texto .= "*/";
    $texto .= "\n";
    $texto .= "// Se requiere de la clase ActiveRecordAbstractFactory";
    $texto .= "\n";
    $texto .= "require_once(\"ActiveRecordAbstractFactory.php\");";
    $texto .= "\n";
    $texto .= $active;
    $texto .= "\n";
    $texto .= "/**";
    $texto .= "* Clase que nos permite conectar al motor " . $aBD . " y crear objetos";
    $texto .= "\n";
    $texto .= "* de tipo Active Record para cada una de tablas del sistema.";
    $texto .= "\n";
    $texto .= "* Clase que nos permite conectar al motor " . $aBD . " y crear objetos";
    $texto .= "\n";
    $texto .= "* de tipo Active Record para cada una de tablas del sistema.";
    $texto .= "\n";
    $texto .= "*/";
    $texto .= "\n";
    $texto .= "class " . $aBD . "ActiveRecordAbstractFactory extends ActiveRecordAbstractFactory {";
    $texto .= "\n";
    $texto .= "\n";
    $texto .= "const HOST = '10.10.2.17';";
    $texto .= "\n";
    $texto .= "const USER = '31484978';";
    $texto .= "\n";
    $texto .= "const PASS = 'Wb3rt0zz1';";
    $texto .= "\n";
    $texto .= "const DB = 'desa';";
    $texto .= "\n";
    $texto .= "private \$_dsn = '';";
    $texto .= "\n";
    $texto .= "private static \$_handle = null;";
    $texto .= "\n";
    $texto .= "\n";
    $texto .= "/**";
    $texto .= "\n";
    $texto .= "* Nos permite conectar al motor " . $aBD . " con los datos de";
    $texto .= "\n";
    $texto .= "* conexin especificados como constantes. Luego se hace";
    $texto .= "\n";
    $texto .= "* la seleccin de la base de datos.";
    $texto .= "\n";
    $texto .= "*/";
    $texto .= "\n";
    $texto .= "\n";
    $texto .= "public function conectar() {";
    $texto .= "\n";
    $texto .= "\n";
    $texto .= "}";
    $texto .= "\n";
    $texto .= "    // cierra la conexion";
    $texto .= "\n";
    $texto .= "public function Close() {";
    $texto .= "\n";

    $texto .= "\n";
    $texto .= "}";
    $texto .= $funcActive;
    $texto .= "\n";
    $texto .= "}";
    $texto .= "\n";
    $texto .= "?>";



    fputs($ar, $texto);
    fclose($ar);
    $_SESSION['contador'] = $_SESSION['contador'] + 1;
}
$ar = fopen("ActiveRecordAbstractFactory.php", "a");
$cuerpo = "<?php";
$cuerpo .= "\n";
$cuerpo .= "// Se requiere la clase MysqlActiveRecordAbstractFactory.php";
$cuerpo .= "\n";
$cuerpo .= "require_once(\"MysqlActiveRecordAbstractFactory.php\");";
$cuerpo .= "\n";
$cuerpo .= "// Se requiere la clase PgsqlActiveRecordAbstractFactory.php";
$cuerpo .= "\n";
$cuerpo .= "require_once(\"PgsqlActiveRecordAbstractFactory.php\");";
$cuerpo .= "\n";
$cuerpo .= "// Se requiere la clase OracleActiveRecordAbstractFactory.php";
$cuerpo .= "\n";
$cuerpo .= "require_once(\"OracleActiveRecordAbstractFactory.php\");";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "/**";
$cuerpo .= "\n";
$cuerpo .= "* Clase que fabrica objetos de tipo Active Record.";
$cuerpo .= "\n";
$cuerpo .= "* Clase que fabrica objetos de tipo Active Record para motores";
$cuerpo .= "\n";
$cuerpo .= "* MySQL y PostgreSQL.";
$cuerpo .= "\n";
$cuerpo .= "*/";
$cuerpo .= "\n";
$cuerpo .= "abstract class ActiveRecordAbstractFactory {";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "// Lista de tipos de Active Record soportados por la factora";
$cuerpo .= "\n";
$cuerpo .= "const MYSQL = 1;";
$cuerpo .= "\n";
$cuerpo .= "const PGSQL = 2;";
$cuerpo .= "\n";
$cuerpo .= "const ORACLE = 3;";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= $cuerpoabstrac;
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "/**";
$cuerpo .= "\n";
$cuerpo .= "* Permite obtener la factora de un Active Record.";
$cuerpo .= "\n";
$cuerpo .= "* @param integer \$motor Se especifica el tipo de objeto a crear";
$cuerpo .= "\n";
$cuerpo .= "* @return object or false";
$cuerpo .= "\n";
$cuerpo .= "*/";
$cuerpo .= "\n";
$cuerpo .= "public static function getActiveRecordFactory(\$motor = self::ORACLE) {";
$cuerpo .= "\n";
$cuerpo .= "switch (\$motor) {";
$cuerpo .= "\n";
$cuerpo .= "case self::MYSQL:";
$cuerpo .= "\n";
$cuerpo .= "return new MysqlActiveRecordAbstractFactory();";
$cuerpo .= "\n";
$cuerpo .= "case self::PGSQL:";
$cuerpo .= "\n";
$cuerpo .= "return new PgsqlActiveRecordAbstractFactory();";
$cuerpo .= "\n";
$cuerpo .= "case self::ORACLE:";
$cuerpo .= "\n";
$cuerpo .= "return new OracleActiveRecordAbstractFactory();";
$cuerpo .= "\n";
$cuerpo .= "default:";
$cuerpo .= "\n";
$cuerpo .= "return false;";
$cuerpo .= "\n";
$cuerpo .= "}";
$cuerpo .= "\n";
$cuerpo .= "}";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "}";
$cuerpo .= "\n";
$cuerpo .= "?>";
fputs($ar, $cuerpo);
fclose($ar);
$_SESSION['contador'] = $_SESSION['contador'] + 1;
header("Location: ActiveRecord/generarArchivoActiveRecord.php");
?>



