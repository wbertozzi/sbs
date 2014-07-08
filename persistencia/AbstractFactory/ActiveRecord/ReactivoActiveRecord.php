<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase ReactivoValueObject.php
require_once("ValueObject/ReactivoValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla reactivo.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla reactivo ubicada en el sbs de un motor BD.
*/

class ReactivoActiveRecord implements ActiveRecord {

public function insert($ReactivoValueObject) {
$consulta = "INSERT INTO reactivo ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($ReactivoValueObject) {
$consulta = "UPDATE reactivo SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($ReactivoValueObject) {
$consulta = "DELETE FROM reactivo WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>