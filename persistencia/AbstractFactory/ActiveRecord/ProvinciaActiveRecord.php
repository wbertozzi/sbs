<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase ProvinciaValueObject.php
require_once("ValueObject/ProvinciaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla provincia.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla provincia ubicada en el sbs de un motor BD.
*/

class ProvinciaActiveRecord implements ActiveRecord {

public function insert($ProvinciaValueObject) {
$consulta = "INSERT INTO provincia ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($ProvinciaValueObject) {
$consulta = "UPDATE provincia SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($ProvinciaValueObject) {
$consulta = "DELETE FROM provincia WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>