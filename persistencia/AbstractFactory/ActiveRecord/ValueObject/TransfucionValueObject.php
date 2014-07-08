<?php

class TransfucionValueObject {

    private $_transf_id;
    private $_transf_fecha;
    private $_transf_descripcion;
    private $_transf_servicio;
    private $_transf_tolerancia;
    private $_cent_transf_id;
    private $_solc_id;
    private $_pers_id_usu;
    private $_transf_fecha_mod;

    public function getTransf_id() {
        return $this->_transf_id;
    }

    public function getTransf_fecha() {
        return $this->_transf_fecha;
    }

    public function getTransf_descripcion() {
        return $this->_transf_descripcion;
    }

    public function getTransf_servicio() {
        return $this->_transf_servicio;
    }

    public function getTransf_tolerancia() {
        return $this->_transf_tolerancia;
    }

    public function getCent_transf_id() {
        return $this->_cent_transf_id;
    }

    public function getSolc_id() {
        return $this->_solc_id;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getTransf_fecha_mod() {
        return $this->_transf_fecha_mod;
    }

    public function setTransf_id($transf_id) {
        $this->_transf_id = $transf_id;
    }

    public function setTransf_fecha($transf_fecha) {
        $this->_transf_fecha = $transf_fecha;
    }

    public function setTransf_descripcion($transf_descripcion) {
        $this->_transf_descripcion = $transf_descripcion;
    }

    public function setTransf_servicio($transf_servicio) {
        $this->_transf_servicio = $transf_servicio;
    }

    public function setTransf_tolerancia($transf_tolerancia) {
        $this->_transf_tolerancia = $transf_tolerancia;
    }

    public function setCent_transf_id($cent_transf_id) {
        $this->_cent_transf_id = $cent_transf_id;
    }

    public function setSolc_id($solc_id) {
        $this->_solc_id = $solc_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setTransf_fecha_mod($transf_fecha_mod) {
        $this->_transf_fecha_mod = $transf_fecha_mod;
    }

}

?>