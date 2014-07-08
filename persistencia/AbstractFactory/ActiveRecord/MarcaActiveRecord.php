<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase MarcaValueObject.php
require_once("ValueObject/MarcaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla marca.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla marca ubicada en el sbs de un motor BD.
*/

class MarcaActiveRecord implements ActiveRecord {

public function insert($MarcaValueObject) {
$consulta = "INSERT INTO marca ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($MarcaValueObject) {
$consulta = "UPDATE marca SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($MarcaValueObject) {
$consulta = "DELETE FROM marca WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>