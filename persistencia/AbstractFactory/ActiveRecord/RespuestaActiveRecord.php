<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase RespuestaValueObject.php
require_once("ValueObject/RespuestaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla respuesta.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla respuesta ubicada en el sbs de un motor BD.
*/

class RespuestaActiveRecord implements ActiveRecord {

public function insert($RespuestaValueObject) {
$consulta = "INSERT INTO respuesta ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($RespuestaValueObject) {
$consulta = "UPDATE respuesta SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($RespuestaValueObject) {
$consulta = "DELETE FROM respuesta WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>