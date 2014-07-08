<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase InmunoPacienteValueObject.php
require_once("ValueObject/InmunoPacienteValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla inmuno_paciente.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla inmuno_paciente ubicada en el sbs de un motor BD.
*/

class InmunoPacienteActiveRecord implements ActiveRecord {

public function insert($InmunoPacienteValueObject) {
$consulta = "INSERT INTO inmuno_paciente ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($InmunoPacienteValueObject) {
$consulta = "UPDATE inmuno_paciente SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($InmunoPacienteValueObject) {
$consulta = "DELETE FROM inmuno_paciente WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>