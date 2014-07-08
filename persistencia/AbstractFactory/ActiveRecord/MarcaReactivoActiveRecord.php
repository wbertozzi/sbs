<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase MarcaReactivoValueObject.php
require_once("ValueObject/MarcaReactivoValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla marca_reactivo.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla marca_reactivo ubicada en el sbs de un motor BD.
*/

class MarcaReactivoActiveRecord implements ActiveRecord {

public function insert($MarcaReactivoValueObject) {
$consulta = "INSERT INTO marca_reactivo ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($MarcaReactivoValueObject) {
$consulta = "UPDATE marca_reactivo SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($MarcaReactivoValueObject) {
$consulta = "DELETE FROM marca_reactivo WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>