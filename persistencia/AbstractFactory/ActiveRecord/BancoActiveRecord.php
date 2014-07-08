<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase BancoValueObject.php
require_once("ValueObject/BancoValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla banco.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla banco ubicada en el sbs de un motor BD.
*/

class BancoActiveRecord implements ActiveRecord {

public function insert($BancoValueObject) {
$consulta = "INSERT INTO banco ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($BancoValueObject) {
$consulta = "UPDATE banco SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($BancoValueObject) {
$consulta = "DELETE FROM banco WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>