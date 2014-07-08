<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase DetalleEnvioValueObject.php
require_once("ValueObject/DetalleEnvioValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla detalle_envio.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla detalle_envio ubicada en el sbs de un motor BD.
*/

class DetalleEnvioActiveRecord implements ActiveRecord {

public function insert($DetalleEnvioValueObject) {
$consulta = "INSERT INTO detalle_envio ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($DetalleEnvioValueObject) {
$consulta = "UPDATE detalle_envio SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($DetalleEnvioValueObject) {
$consulta = "DELETE FROM detalle_envio WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>