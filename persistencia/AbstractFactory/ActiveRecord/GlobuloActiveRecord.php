<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase GlobuloValueObject.php
require_once("ValueObject/GlobuloValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla globulo.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla globulo ubicada en el sbs de un motor BD.
*/

class GlobuloActiveRecord implements ActiveRecord {

public function insert($GlobuloValueObject) {
$consulta = "INSERT INTO globulo ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($GlobuloValueObject) {
$consulta = "UPDATE globulo SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($GlobuloValueObject) {
$consulta = "DELETE FROM globulo WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>