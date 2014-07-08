<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase TrazabilidadCriopesValueObject.php
require_once("ValueObject/TrazabilidadCriopesValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla trazabilidad_criopes.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla trazabilidad_criopes ubicada en el sbs de un motor BD.
*/

class TrazabilidadCriopesActiveRecord implements ActiveRecord {

public function insert($TrazabilidadCriopesValueObject) {
$consulta = "INSERT INTO trazabilidad_criopes ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($TrazabilidadCriopesValueObject) {
$consulta = "UPDATE trazabilidad_criopes SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($TrazabilidadCriopesValueObject) {
$consulta = "DELETE FROM trazabilidad_criopes WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>