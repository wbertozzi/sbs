<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase CiudadValueObject.php
require_once("ValueObject/CiudadValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla ciudad.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla ciudad ubicada en el sbs de un motor BD.
*/

class CiudadActiveRecord implements ActiveRecord {

public function insert($CiudadValueObject) {
$consulta = "INSERT INTO ciudad ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($CiudadValueObject) {
$consulta = "UPDATE ciudad SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($CiudadValueObject) {
$consulta = "DELETE FROM ciudad WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>