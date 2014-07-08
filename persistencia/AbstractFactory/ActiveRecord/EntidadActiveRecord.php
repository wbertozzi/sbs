<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase EntidadValueObject.php
require_once("ValueObject/EntidadValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla entidad.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla entidad ubicada en el sbs de un motor BD.
*/

class EntidadActiveRecord implements ActiveRecord {

public function insert($EntidadValueObject) {
$consulta = "INSERT INTO entidad ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($EntidadValueObject) {
$consulta = "UPDATE entidad SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($EntidadValueObject) {
$consulta = "DELETE FROM entidad WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>