<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase CentroTransfucionValueObject.php
require_once("ValueObject/CentroTransfucionValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla centro_transfucion.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla centro_transfucion ubicada en el sbs de un motor BD.
*/

class CentroTransfucionActiveRecord implements ActiveRecord {

public function insert($CentroTransfucionValueObject) {
$consulta = "INSERT INTO centro_transfucion ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($CentroTransfucionValueObject) {
$consulta = "UPDATE centro_transfucion SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($CentroTransfucionValueObject) {
$consulta = "DELETE FROM centro_transfucion WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>