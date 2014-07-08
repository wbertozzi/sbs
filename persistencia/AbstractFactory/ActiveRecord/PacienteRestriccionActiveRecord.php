<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase PacienteRestriccionValueObject.php
require_once("ValueObject/PacienteRestriccionValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla paciente_restriccion.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla paciente_restriccion ubicada en el sbs de un motor BD.
*/

class PacienteRestriccionActiveRecord implements ActiveRecord {

public function insert($PacienteRestriccionValueObject) {
$consulta = "INSERT INTO paciente_restriccion ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($PacienteRestriccionValueObject) {
$consulta = "UPDATE paciente_restriccion SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($PacienteRestriccionValueObject) {
$consulta = "DELETE FROM paciente_restriccion WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>