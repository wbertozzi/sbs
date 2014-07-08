<?php

class SerologiaValueObject {

    private $_serol_id;
    private $_serol_estado;
    private $_serol_observacion;
    private $_don_num_donacion;
    private $_pers_id_usu;
    private $_serol_fecha_mod;

    public function getSerol_id() {
        return $this->_serol_id;
    }

    public function getSerol_estado() {
        return $this->_serol_estado;
    }

    public function getSerol_observacion() {
        return $this->_serol_observacion;
    }

    public function getDon_num_donacion() {
        return $this->_don_num_donacion;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getSerol_fecha_mod() {
        return $this->_serol_fecha_mod;
    }

    public function setSerol_id($serol_id) {
        $this->_serol_id = $serol_id;
    }

    public function setSerol_estado($serol_estado) {
        $this->_serol_estado = $serol_estado;
    }

    public function setSerol_observacion($serol_observacion) {
        $this->_serol_observacion = $serol_observacion;
    }

    public function setDon_num_donacion($don_num_donacion) {
        $this->_don_num_donacion = $don_num_donacion;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setSerol_fecha_mod($serol_fecha_mod) {
        $this->_serol_fecha_mod = $serol_fecha_mod;
    }

}

?>