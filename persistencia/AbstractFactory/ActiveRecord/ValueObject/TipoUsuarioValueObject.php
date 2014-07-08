<?php

class TipoUsuarioValueObject {

    private $_tipo_usu_id;
    private $_tipo_usu_nombre;
    private $_tipo_usu_rol;

    public function getTipo_usu_id() {
        return $this->_tipo_usu_id;
    }

    public function getTipo_usu_nombre() {
        return $this->_tipo_usu_nombre;
    }

    public function getTipo_usu_rol() {
        return $this->_tipo_usu_rol;
    }

    public function setTipo_usu_id($tipo_usu_id) {
        $this->_tipo_usu_id = $tipo_usu_id;
    }

    public function setTipo_usu_nombre($tipo_usu_nombre) {
        $this->_tipo_usu_nombre = $tipo_usu_nombre;
    }

    public function setTipo_usu_rol($tipo_usu_rol) {
        $this->_tipo_usu_rol = $tipo_usu_rol;
    }

}

?>