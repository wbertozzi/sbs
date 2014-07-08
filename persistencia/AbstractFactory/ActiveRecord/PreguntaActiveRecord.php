<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase PreguntaValueObject.php
require_once("ValueObject/PreguntaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla pregunta.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla pregunta ubicada en el sbs de un motor BD.
*/

class PreguntaActiveRecord implements ActiveRecord {

public function insert($PreguntaValueObject) {
$consulta = "INSERT INTO pregunta ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($PreguntaValueObject) {
$consulta = "UPDATE pregunta SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($PreguntaValueObject) {
$consulta = "DELETE FROM pregunta WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>