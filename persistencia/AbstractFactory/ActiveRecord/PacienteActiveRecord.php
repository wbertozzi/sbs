<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase PacienteValueObject.php
require_once("ValueObject/PacienteValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla paciente.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla paciente ubicada en el sbs de un motor BD.
*/

class PacienteActiveRecord implements ActiveRecord {

public function insert($PacienteValueObject) {
$consulta = "INSERT INTO paciente ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($PacienteValueObject) {
$consulta = "UPDATE paciente SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($PacienteValueObject) {
$consulta = "DELETE FROM paciente WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>