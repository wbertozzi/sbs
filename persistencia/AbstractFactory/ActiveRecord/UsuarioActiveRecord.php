<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase UsuarioValueObject.php
require_once("ValueObject/UsuarioValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla usuario.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla usuario ubicada en el sbs de un motor BD.
*/

class UsuarioActiveRecord implements ActiveRecord {

public function insert($UsuarioValueObject) {
$consulta = "INSERT INTO usuario ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($UsuarioValueObject) {
$consulta = "UPDATE usuario SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($UsuarioValueObject) {
$consulta = "DELETE FROM usuario WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>