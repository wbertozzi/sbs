<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase PlaquetaValueObject.php
require_once("ValueObject/PlaquetaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla plaqueta.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla plaqueta ubicada en el sbs de un motor BD.
*/

class PlaquetaActiveRecord implements ActiveRecord {

public function insert($PlaquetaValueObject) {
$consulta = "INSERT INTO plaqueta ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($PlaquetaValueObject) {
$consulta = "UPDATE plaqueta SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($PlaquetaValueObject) {
$consulta = "DELETE FROM plaqueta WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>