<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase ExtraccionValueObject.php
require_once("ValueObject/ExtraccionValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla extraccion.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla extraccion ubicada en el sbs de un motor BD.
*/

class ExtraccionActiveRecord implements ActiveRecord {

public function insert($ExtraccionValueObject) {
$consulta = "INSERT INTO extraccion ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($ExtraccionValueObject) {
$consulta = "UPDATE extraccion SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($ExtraccionValueObject) {
$consulta = "DELETE FROM extraccion WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>