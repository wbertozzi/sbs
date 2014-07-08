<?php

class CentroTransfucionValueObject {

    private $_centro_transf_id;
    private $_centro_transf_especialidad;
    private $_entidad_id;
    private $_pers_id_usu;
    private $_centro_transf_fecha_mod;

    public function getCentro_transf_id() {
        return $this->_centro_transf_id;
    }

    public function getCentro_transf_especialidad() {
        return $this->_centro_transf_especialidad;
    }

    public function getEntidad_id() {
        return $this->_entidad_id;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getCentro_transf_fecha_mod() {
        return $this->_centro_transf_fecha_mod;
    }

    public function setCentro_transf_id($centro_transf_id) {
        $this->_centro_transf_id = $centro_transf_id;
    }

    public function setCentro_transf_especialidad($centro_transf_especialidad) {
        $this->_centro_transf_especialidad = $centro_transf_especialidad;
    }

    public function setEntidad_id($entidad_id) {
        $this->_entidad_id = $entidad_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setCentro_transf_fecha_mod($centro_transf_fecha_mod) {
        $this->_centro_transf_fecha_mod = $centro_transf_fecha_mod;
    }

}

?>