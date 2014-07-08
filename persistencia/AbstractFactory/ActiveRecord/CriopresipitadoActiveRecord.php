<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase CriopresipitadoValueObject.php
require_once("ValueObject/CriopresipitadoValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla criopresipitado.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla criopresipitado ubicada en el sbs de un motor BD.
*/

class CriopresipitadoActiveRecord implements ActiveRecord {

public function insert($CriopresipitadoValueObject) {
$consulta = "INSERT INTO criopresipitado ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($CriopresipitadoValueObject) {
$consulta = "UPDATE criopresipitado SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($CriopresipitadoValueObject) {
$consulta = "DELETE FROM criopresipitado WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>