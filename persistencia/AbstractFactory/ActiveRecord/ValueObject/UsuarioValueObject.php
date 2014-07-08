<?php

class UsuarioValueObject {

    private $_pers_id_usu;
    private $_usu_usuario;
    private $_usu_clave;
    private $_usu_email;
    private $_tipo_usu_id;
    private $_entidad_id;

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getUsu_usuario() {
        return $this->_usu_usuario;
    }

    public function getUsu_clave() {
        return $this->_usu_clave;
    }

    public function getUsu_email() {
        return $this->_usu_email;
    }

    public function getTipo_usu_id() {
        return $this->_tipo_usu_id;
    }

    public function getEntidad_id() {
        return $this->_entidad_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setUsu_usuario($usu_usuario) {
        $this->_usu_usuario = $usu_usuario;
    }

    public function setUsu_clave($usu_clave) {
        $this->_usu_clave = $usu_clave;
    }

    public function setUsu_email($usu_email) {
        $this->_usu_email = $usu_email;
    }

    public function setTipo_usu_id($tipo_usu_id) {
        $this->_tipo_usu_id = $tipo_usu_id;
    }

    public function setEntidad_id($entidad_id) {
        $this->_entidad_id = $entidad_id;
    }

}

?>