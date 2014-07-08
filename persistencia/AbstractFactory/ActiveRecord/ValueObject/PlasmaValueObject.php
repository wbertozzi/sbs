<?php

class PlasmaValueObject {

    private $_plasma_id;
    private $_plasma_fecha_fraccion;
    private $_plasma_estado;
    private $_plasma_descripcion;
    private $_plasma_fecha_validez;
    private $_plasma_peso_vacia;
    private $_plasma_peso_neto;
    private $_bolsa_id;
    private $_pers_id_usu;
    private $_plasma_fecha_mod;

    public function getPlasma_id() {
        return $this->_plasma_id;
    }

    public function getPlasma_fecha_fraccion() {
        return $this->_plasma_fecha_fraccion;
    }

    public function getPlasma_estado() {
        return $this->_plasma_estado;
    }

    public function getPlasma_descripcion() {
        return $this->_plasma_descripcion;
    }

    public function getPlasma_fecha_validez() {
        return $this->_plasma_fecha_validez;
    }

    public function getPlasma_peso_vacia() {
        return $this->_plasma_peso_vacia;
    }

    public function getPlasma_peso_neto() {
        return $this->_plasma_peso_neto;
    }

    public function getBolsa_id() {
        return $this->_bolsa_id;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getPlasma_fecha_mod() {
        return $this->_plasma_fecha_mod;
    }

    public function setPlasma_id($plasma_id) {
        $this->_plasma_id = $plasma_id;
    }

    public function setPlasma_fecha_fraccion($plasma_fecha_fraccion) {
        $this->_plasma_fecha_fraccion = $plasma_fecha_fraccion;
    }

    public function setPlasma_estado($plasma_estado) {
        $this->_plasma_estado = $plasma_estado;
    }

    public function setPlasma_descripcion($plasma_descripcion) {
        $this->_plasma_descripcion = $plasma_descripcion;
    }

    public function setPlasma_fecha_validez($plasma_fecha_validez) {
        $this->_plasma_fecha_validez = $plasma_fecha_validez;
    }

    public function setPlasma_peso_vacia($plasma_peso_vacia) {
        $this->_plasma_peso_vacia = $plasma_peso_vacia;
    }

    public function setPlasma_peso_neto($plasma_peso_neto) {
        $this->_plasma_peso_neto = $plasma_peso_neto;
    }

    public function setBolsa_id($bolsa_id) {
        $this->_bolsa_id = $bolsa_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setPlasma_fecha_mod($plasma_fecha_mod) {
        $this->_plasma_fecha_mod = $plasma_fecha_mod;
    }

}

?>