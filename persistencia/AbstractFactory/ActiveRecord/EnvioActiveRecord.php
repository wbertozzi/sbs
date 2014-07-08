<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase EnvioValueObject.php
require_once("ValueObject/EnvioValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla envio.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla envio ubicada en el sbs de un motor BD.
*/

class EnvioActiveRecord implements ActiveRecord {

public function insert($EnvioValueObject) {
$consulta = "INSERT INTO envio ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($EnvioValueObject) {
$consulta = "UPDATE envio SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($EnvioValueObject) {
$consulta = "DELETE FROM envio WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>