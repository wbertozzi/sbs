<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase TrazabilidadPlasmaValueObject.php
require_once("ValueObject/TrazabilidadPlasmaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla trazabilidad_plasma.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla trazabilidad_plasma ubicada en el sbs de un motor BD.
*/

class TrazabilidadPlasmaActiveRecord implements ActiveRecord {

public function insert($TrazabilidadPlasmaValueObject) {
$consulta = "INSERT INTO trazabilidad_plasma ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($TrazabilidadPlasmaValueObject) {
$consulta = "UPDATE trazabilidad_plasma SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($TrazabilidadPlasmaValueObject) {
$consulta = "DELETE FROM trazabilidad_plasma WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>