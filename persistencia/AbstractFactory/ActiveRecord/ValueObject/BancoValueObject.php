<?php

class BancoValueObject {

    private $_banco_id;
    private $_banco_nivel;
    private $_entidad_id;
    private $_pers_id_usu;
    private $_banco_fecha_mod;

    public function getBanco_id() {
        return $this->_banco_id;
    }

    public function getBanco_nivel() {
        return $this->_banco_nivel;
    }

    public function getEntidad_id() {
        return $this->_entidad_id;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getBanco_fecha_mod() {
        return $this->_banco_fecha_mod;
    }

    public function setBanco_id($banco_id) {
        $this->_banco_id = $banco_id;
    }

    public function setBanco_nivel($banco_nivel) {
        $this->_banco_nivel = $banco_nivel;
    }

    public function setEntidad_id($entidad_id) {
        $this->_entidad_id = $entidad_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setBanco_fecha_mod($banco_fecha_mod) {
        $this->_banco_fecha_mod = $banco_fecha_mod;
    }

}

?>