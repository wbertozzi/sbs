<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase TransfucionValueObject.php
require_once("ValueObject/TransfucionValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla transfucion.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla transfucion ubicada en el sbs de un motor BD.
*/

class TransfucionActiveRecord implements ActiveRecord {

public function insert($TransfucionValueObject) {
$consulta = "INSERT INTO transfucion ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($TransfucionValueObject) {
$consulta = "UPDATE transfucion SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($TransfucionValueObject) {
$consulta = "DELETE FROM transfucion WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>