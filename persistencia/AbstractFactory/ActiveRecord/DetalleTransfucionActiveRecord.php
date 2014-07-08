<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase DetalleTransfucionValueObject.php
require_once("ValueObject/DetalleTransfucionValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla detalle_transfucion.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla detalle_transfucion ubicada en el sbs de un motor BD.
*/

class DetalleTransfucionActiveRecord implements ActiveRecord {

public function insert($DetalleTransfucionValueObject) {
$consulta = "INSERT INTO detalle_transfucion ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($DetalleTransfucionValueObject) {
$consulta = "UPDATE detalle_transfucion SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($DetalleTransfucionValueObject) {
$consulta = "DELETE FROM detalle_transfucion WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>