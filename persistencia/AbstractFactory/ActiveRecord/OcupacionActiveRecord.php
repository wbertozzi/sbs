<?php

// Se requiere la intefaz ActiveRecord
require_once("ActiveRecordInterface.php");
// Se requiere la clase OcupacionValueObject.php
require_once("ValueObject/OcupacionValueObject.php");

/**
 * Clase que nos permite operaciones de tipo CRUD (Active Record)
 * sobre la tabla ocupacion.
 * Clase que nos permite operaciones de tipos CRUD y otras sobre
 * la tabla ocupacion ubicada en el sbs de un motor BD.
 */
class OcupacionActiveRecord implements ActiveRecord {

    public function insert($OcupacionValueObject) {
        $consulta = "INSERT INTO ocupacion ()";
        $consulta .= " VALUES ()";
        $resultado = mysql_query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function update($OcupacionValueObject) {
        $consulta = "UPDATE ocupacion SET ";
        $consulta .= " WHERE  = ";

        $resultado = mysql_query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($OcupacionValueObject) {
        $consulta = "DELETE FROM ocupacion WHERE ";
        $resultado = mysql_query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }



}

?>