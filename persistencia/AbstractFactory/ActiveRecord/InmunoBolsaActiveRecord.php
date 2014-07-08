<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase InmunoBolsaValueObject.php
require_once("ValueObject/InmunoBolsaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla inmuno_bolsa.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla inmuno_bolsa ubicada en el sbs de un motor BD.
*/

class InmunoBolsaActiveRecord implements ActiveRecord {

public function insert($InmunoBolsaValueObject) {
$consulta = "INSERT INTO inmuno_bolsa ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($InmunoBolsaValueObject) {
$consulta = "UPDATE inmuno_bolsa SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($InmunoBolsaValueObject) {
$consulta = "DELETE FROM inmuno_bolsa WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>