<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase DonacionValueObject.php
require_once("ValueObject/DonacionValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla donacion.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla donacion ubicada en el sbs de un motor BD.
*/

class DonacionActiveRecord implements ActiveRecord {

public function insert($DonacionValueObject) {
$consulta = "INSERT INTO donacion ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($DonacionValueObject) {
$consulta = "UPDATE donacion SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($DonacionValueObject) {
$consulta = "DELETE FROM donacion WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>