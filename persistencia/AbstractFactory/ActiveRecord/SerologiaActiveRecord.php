<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase SerologiaValueObject.php
require_once("ValueObject/SerologiaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla serologia.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla serologia ubicada en el sbs de un motor BD.
*/

class SerologiaActiveRecord implements ActiveRecord {

public function insert($SerologiaValueObject) {
$consulta = "INSERT INTO serologia ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($SerologiaValueObject) {
$consulta = "UPDATE serologia SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($SerologiaValueObject) {
$consulta = "DELETE FROM serologia WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>