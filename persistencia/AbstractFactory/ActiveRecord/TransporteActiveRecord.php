<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase TransporteValueObject.php
require_once("ValueObject/TransporteValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla transporte.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla transporte ubicada en el sbs de un motor BD.
*/

class TransporteActiveRecord implements ActiveRecord {

public function insert($TransporteValueObject) {
$consulta = "INSERT INTO transporte ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($TransporteValueObject) {
$consulta = "UPDATE transporte SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($TransporteValueObject) {
$consulta = "DELETE FROM transporte WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>