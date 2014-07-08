<?php

class InmunoBolsaValueObject {

    private $_inmuno_bolsa_id;
    private $_don_num_donacion;
    private $_inmuno_id;
    private $_pers_id_usu;
    private $_inmuno_bolsa_fecha_mod;

    public function getInmuno_bolsa_id() {
        return $this->_inmuno_bolsa_id;
    }

    public function getDon_num_donacion() {
        return $this->_don_num_donacion;
    }

    public function getInmuno_id() {
        return $this->_inmuno_id;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getInmuno_bolsa_fecha_mod() {
        return $this->_inmuno_bolsa_fecha_mod;
    }

    public function setInmuno_bolsa_id($inmuno_bolsa_id) {
        $this->_inmuno_bolsa_id = $inmuno_bolsa_id;
    }

    public function setDon_num_donacion($don_num_donacion) {
        $this->_don_num_donacion = $don_num_donacion;
    }

    public function setInmuno_id($inmuno_id) {
        $this->_inmuno_id = $inmuno_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setInmuno_bolsa_fecha_mod($inmuno_bolsa_fecha_mod) {
        $this->_inmuno_bolsa_fecha_mod = $inmuno_bolsa_fecha_mod;
    }

}

?>