<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase BolsaValueObject.php
require_once("ValueObject/BolsaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla bolsa.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla bolsa ubicada en el sbs de un motor BD.
*/

class BolsaActiveRecord implements ActiveRecord {

public function insert($BolsaValueObject) {
$consulta = "INSERT INTO bolsa ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($BolsaValueObject) {
$consulta = "UPDATE bolsa SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($BolsaValueObject) {
$consulta = "DELETE FROM bolsa WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>