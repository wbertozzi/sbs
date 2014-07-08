<?php

class PostaValueObject {

    private $_posta_id;
    private $_posta_tipo;
    private $_entidad_id;
    private $_pers_id_usu;
    private $_posta_fecha_mod;

    public function getPosta_id() {
        return $this->_posta_id;
    }

    public function getPosta_tipo() {
        return $this->_posta_tipo;
    }

    public function getEntidad_id() {
        return $this->_entidad_id;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getPosta_fecha_mod() {
        return $this->_posta_fecha_mod;
    }

    public function setPosta_id($posta_id) {
        $this->_posta_id = $posta_id;
    }

    public function setPosta_tipo($posta_tipo) {
        $this->_posta_tipo = $posta_tipo;
    }

    public function setEntidad_id($entidad_id) {
        $this->_entidad_id = $entidad_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setPosta_fecha_mod($posta_fecha_mod) {
        $this->_posta_fecha_mod = $posta_fecha_mod;
    }

}

?>