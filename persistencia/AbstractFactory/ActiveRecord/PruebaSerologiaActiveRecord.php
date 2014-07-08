<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase PruebaSerologiaValueObject.php
require_once("ValueObject/PruebaSerologiaValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla prueba_serologia.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla prueba_serologia ubicada en el sbs de un motor BD.
*/

class PruebaSerologiaActiveRecord implements ActiveRecord {

public function insert($PruebaSerologiaValueObject) {
$consulta = "INSERT INTO prueba_serologia ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($PruebaSerologiaValueObject) {
$consulta = "UPDATE prueba_serologia SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($PruebaSerologiaValueObject) {
$consulta = "DELETE FROM prueba_serologia WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>