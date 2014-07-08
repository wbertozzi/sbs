<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase InmunohematologiaValueObject.php
require_once("ValueObject/InmunohematologiaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla inmunohematologia.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla inmunohematologia ubicada en el sbs de un motor BD.
*/

class InmunohematologiaActiveRecord implements ActiveRecord {

public function insert($InmunohematologiaValueObject) {
$consulta = "INSERT INTO inmunohematologia ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($InmunohematologiaValueObject) {
$consulta = "UPDATE inmunohematologia SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($InmunohematologiaValueObject) {
$consulta = "DELETE FROM inmunohematologia WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>