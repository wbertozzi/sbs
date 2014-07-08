<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase RestriccionValueObject.php
require_once("ValueObject/RestriccionValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla restriccion.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla restriccion ubicada en el sbs de un motor BD.
*/

class RestriccionActiveRecord implements ActiveRecord {

public function insert($RestriccionValueObject) {
$consulta = "INSERT INTO restriccion ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($RestriccionValueObject) {
$consulta = "UPDATE restriccion SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($RestriccionValueObject) {
$consulta = "DELETE FROM restriccion WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>