<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase TrazabilidadGlobuloValueObject.php
require_once("ValueObject/TrazabilidadGlobuloValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla trazabilidad_globulo.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla trazabilidad_globulo ubicada en el sbs de un motor BD.
*/

class TrazabilidadGlobuloActiveRecord implements ActiveRecord {

public function insert($TrazabilidadGlobuloValueObject) {
$consulta = "INSERT INTO trazabilidad_globulo ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($TrazabilidadGlobuloValueObject) {
$consulta = "UPDATE trazabilidad_globulo SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($TrazabilidadGlobuloValueObject) {
$consulta = "DELETE FROM trazabilidad_globulo WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>