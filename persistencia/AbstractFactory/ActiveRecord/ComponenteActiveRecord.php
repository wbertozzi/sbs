<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase ComponenteValueObject.php
require_once("ValueObject/ComponenteValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla componente.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla componente ubicada en el sbs de un motor BD.
*/

class ComponenteActiveRecord implements ActiveRecord {

public function insert($ComponenteValueObject) {
$consulta = "INSERT INTO componente ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($ComponenteValueObject) {
$consulta = "UPDATE componente SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($ComponenteValueObject) {
$consulta = "DELETE FROM componente WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>