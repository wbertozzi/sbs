<?php
// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase DatoDonacionValueObject.php
require_once("ValueObject/DatoDonacionValueObject.php");
/**
* Clase que nos permite operaciones de tipo CRUD (Active Record)
* sobre la tabla dato_donacion.
* Clase que nos permite operaciones de tipos CRUD y otras sobre
* la tabla dato_donacion ubicada en el sbs de un motor BD.
*/

class DatoDonacionActiveRecord implements ActiveRecord {

public function insert($DatoDonacionValueObject) {
$consulta = "INSERT INTO dato_donacion ()";
$consulta .= " VALUES ()";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function update($DatoDonacionValueObject) {
$consulta = "UPDATE dato_donacion SET ";
$consulta .= " WHERE  = ";

$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

public function delete($DatoDonacionValueObject) {
$consulta = "DELETE FROM dato_donacion WHERE ";
$resultado = mysql_query($consulta);
if ($resultado) {
return true;
} else {
return false;
}
}

}
?>