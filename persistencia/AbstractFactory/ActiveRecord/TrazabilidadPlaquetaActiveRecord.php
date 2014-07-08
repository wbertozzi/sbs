<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase TrazabilidadPlaquetaValueObject.php
require_once("ValueObject/TrazabilidadPlaquetaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla trazabilidad_plaqueta.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla trazabilidad_plaqueta ubicada en el sbs de un motor BD.
*/

class TrazabilidadPlaquetaActiveRecord implements ActiveRecord {

public function insert($TrazabilidadPlaquetaValueObject) {
$consulta = "INSERT INTO trazabilidad_plaqueta ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($TrazabilidadPlaquetaValueObject) {
$consulta = "UPDATE trazabilidad_plaqueta SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($TrazabilidadPlaquetaValueObject) {
$consulta = "DELETE FROM trazabilidad_plaqueta WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>