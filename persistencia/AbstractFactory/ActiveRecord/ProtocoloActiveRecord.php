<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase ProtocoloValueObject.php
require_once("ValueObject/ProtocoloValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla protocolo.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla protocolo ubicada en el sbs de un motor BD.
*/

class ProtocoloActiveRecord implements ActiveRecord {

public function insert($ProtocoloValueObject) {
$consulta = "INSERT INTO protocolo ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($ProtocoloValueObject) {
$consulta = "UPDATE protocolo SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($ProtocoloValueObject) {
$consulta = "DELETE FROM protocolo WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>