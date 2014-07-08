<?php

class DetalleTransfucionValueObject {

    private $_detalle_transf_id;
    private $_centro_transf_id;
    private $_bolsa_id;
    private $_transf_id;
    private $_detalle_transf_descripcion;
    private $_pers_id_usu;
    private $_detalle_transf_fecha_mod;

    public function getDetalle_transf_id() {
        return $this->_detalle_transf_id;
    }

    public function getCentro_transf_id() {
        return $this->_centro_transf_id;
    }

    public function getBolsa_id() {
        return $this->_bolsa_id;
    }

    public function getTransf_id() {
        return $this->_transf_id;
    }

    public function getDetalle_transf_descripcion() {
        return $this->_detalle_transf_descripcion;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getDetalle_transf_fecha_mod() {
        return $this->_detalle_transf_fecha_mod;
    }

    public function setDetalle_transf_id($detalle_transf_id) {
        $this->_detalle_transf_id = $detalle_transf_id;
    }

    public function setCentro_transf_id($centro_transf_id) {
        $this->_centro_transf_id = $centro_transf_id;
    }

    public function setBolsa_id($bolsa_id) {
        $this->_bolsa_id = $bolsa_id;
    }

    public function setTransf_id($transf_id) {
        $this->_transf_id = $transf_id;
    }

    public function setDetalle_transf_descripcion($detalle_transf_descripcion) {
        $this->_detalle_transf_descripcion = $detalle_transf_descripcion;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setDetalle_transf_fecha_mod($detalle_transf_fecha_mod) {
        $this->_detalle_transf_fecha_mod = $detalle_transf_fecha_mod;
    }

}

?>