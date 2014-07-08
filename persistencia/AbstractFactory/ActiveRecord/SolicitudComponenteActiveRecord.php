<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase SolicitudComponenteValueObject.php
require_once("ValueObject/SolicitudComponenteValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla solicitud_componente.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla solicitud_componente ubicada en el sbs de un motor BD.
*/

class SolicitudComponenteActiveRecord implements ActiveRecord {

public function insert($SolicitudComponenteValueObject) {
$consulta = "INSERT INTO solicitud_componente ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($SolicitudComponenteValueObject) {
$consulta = "UPDATE solicitud_componente SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($SolicitudComponenteValueObject) {
$consulta = "DELETE FROM solicitud_componente WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>