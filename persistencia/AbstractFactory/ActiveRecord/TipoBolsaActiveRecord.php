<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase TipoBolsaValueObject.php
require_once("ValueObject/TipoBolsaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla tipo_bolsa.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla tipo_bolsa ubicada en el sbs de un motor BD.
*/

class TipoBolsaActiveRecord implements ActiveRecord {

public function insert($TipoBolsaValueObject) {
$consulta = "INSERT INTO tipo_bolsa ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($TipoBolsaValueObject) {
$consulta = "UPDATE tipo_bolsa SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($TipoBolsaValueObject) {
$consulta = "DELETE FROM tipo_bolsa WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>