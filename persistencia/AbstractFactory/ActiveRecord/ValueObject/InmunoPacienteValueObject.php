<?php

class InmunoPacienteValueObject {

    private $_inmuno_pac_id;
    private $_inmuno_id;
    private $_pers_id_pac;
    private $_pers_id_usu;
    private $_inmuno_pac_fecha_mod;

    public function getInmuno_pac_id() {
        return $this->_inmuno_pac_id;
    }

    public function getInmuno_id() {
        return $this->_inmuno_id;
    }

    public function getPers_id_pac() {
        return $this->_pers_id_pac;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getInmuno_pac_fecha_mod() {
        return $this->_inmuno_pac_fecha_mod;
    }

    public function setInmuno_pac_id($inmuno_pac_id) {
        $this->_inmuno_pac_id = $inmuno_pac_id;
    }

    public function setInmuno_id($inmuno_id) {
        $this->_inmuno_id = $inmuno_id;
    }

    public function setPers_id_pac($pers_id_pac) {
        $this->_pers_id_pac = $pers_id_pac;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setInmuno_pac_fecha_mod($inmuno_pac_fecha_mod) {
        $this->_inmuno_pac_fecha_mod = $inmuno_pac_fecha_mod;
    }

}

?>