<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase TipoUsuarioValueObject.php
require_once("ValueObject/TipoUsuarioValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla tipo_usuario.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla tipo_usuario ubicada en el sbs de un motor BD.
*/

class TipoUsuarioActiveRecord implements ActiveRecord {

public function insert($TipoUsuarioValueObject) {
$consulta = "INSERT INTO tipo_usuario ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($TipoUsuarioValueObject) {
$consulta = "UPDATE tipo_usuario SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($TipoUsuarioValueObject) {
$consulta = "DELETE FROM tipo_usuario WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>