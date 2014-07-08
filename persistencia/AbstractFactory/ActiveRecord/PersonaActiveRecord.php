<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase PersonaValueObject.php
require_once("ValueObject/PersonaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla persona.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla persona ubicada en el sbs de un motor BD.
*/

class PersonaActiveRecord implements ActiveRecord {

public function insert($PersonaValueObject) {
$consulta = "INSERT INTO persona ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($PersonaValueObject) {
$consulta = "UPDATE persona SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($PersonaValueObject) {
$consulta = "DELETE FROM persona WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>