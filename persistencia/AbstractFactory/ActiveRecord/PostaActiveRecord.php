<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase PostaValueObject.php
require_once("ValueObject/PostaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla posta.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla posta ubicada en el sbs de un motor BD.
*/

class PostaActiveRecord implements ActiveRecord {

public function insert($PostaValueObject) {
$consulta = "INSERT INTO posta ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($PostaValueObject) {
$consulta = "UPDATE posta SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($PostaValueObject) {
$consulta = "DELETE FROM posta WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>