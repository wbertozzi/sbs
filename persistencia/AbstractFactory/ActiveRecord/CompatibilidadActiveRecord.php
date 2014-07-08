<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase CompatibilidadValueObject.php
require_once("ValueObject/CompatibilidadValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla compatibilidad.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla compatibilidad ubicada en el sbs de un motor BD.
*/

class CompatibilidadActiveRecord implements ActiveRecord {

public function insert($CompatibilidadValueObject) {
$consulta = "INSERT INTO compatibilidad ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($CompatibilidadValueObject) {
$consulta = "UPDATE compatibilidad SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($CompatibilidadValueObject) {
$consulta = "DELETE FROM compatibilidad WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>