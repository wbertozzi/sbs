<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase SolicitudValueObject.php
require_once("ValueObject/SolicitudValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla solicitud.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla solicitud ubicada en el sbs de un motor BD.
*/

class SolicitudActiveRecord implements ActiveRecord {

public function insert($SolicitudValueObject) {
$consulta = "INSERT INTO solicitud ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($SolicitudValueObject) {
$consulta = "UPDATE solicitud SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($SolicitudValueObject) {
$consulta = "DELETE FROM solicitud WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>