<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase OrganismoValueObject.php
require_once("ValueObject/OrganismoValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla organismo.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla organismo ubicada en el sbs de un motor BD.
*/

class OrganismoActiveRecord implements ActiveRecord {

public function insert($OrganismoValueObject) {
$consulta = "INSERT INTO organismo ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($OrganismoValueObject) {
$consulta = "UPDATE organismo SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($OrganismoValueObject) {
$consulta = "DELETE FROM organismo WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>