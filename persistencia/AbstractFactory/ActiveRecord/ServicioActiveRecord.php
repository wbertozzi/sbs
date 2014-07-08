<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase ServicioValueObject.php
require_once("ValueObject/ServicioValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla servicio.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla servicio ubicada en el sbs de un motor BD.
*/

class ServicioActiveRecord implements ActiveRecord {

public function insert($ServicioValueObject) {
$consulta = "INSERT INTO servicio ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($ServicioValueObject) {
$consulta = "UPDATE servicio SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($ServicioValueObject) {
$consulta = "DELETE FROM servicio WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>