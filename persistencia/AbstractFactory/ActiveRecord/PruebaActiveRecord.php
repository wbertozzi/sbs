<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase PruebaValueObject.php
require_once("ValueObject/PruebaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla prueba.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla prueba ubicada en el sbs de un motor BD.
*/

class PruebaActiveRecord implements ActiveRecord {

public function insert($PruebaValueObject) {
$consulta = "INSERT INTO prueba ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($PruebaValueObject) {
$consulta = "UPDATE prueba SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($PruebaValueObject) {
$consulta = "DELETE FROM prueba WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>