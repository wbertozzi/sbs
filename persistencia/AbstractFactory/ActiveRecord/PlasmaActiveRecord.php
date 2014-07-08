<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase PlasmaValueObject.php
require_once("ValueObject/PlasmaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla plasma.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla plasma ubicada en el sbs de un motor BD.
*/

class PlasmaActiveRecord implements ActiveRecord {

public function insert($PlasmaValueObject) {
$consulta = "INSERT INTO plasma ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($PlasmaValueObject) {
$consulta = "UPDATE plasma SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($PlasmaValueObject) {
$consulta = "DELETE FROM plasma WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>