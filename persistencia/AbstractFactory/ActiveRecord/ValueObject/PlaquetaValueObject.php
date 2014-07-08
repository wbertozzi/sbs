<?php

class PlaquetaValueObject {

    private $_plaq_id;
    private $_plaq_fecha_fraccion;
    private $_plaq_estado;
    private $_plaq_descripcion;
    private $_plaq_fecha_validez;
    private $_plaq_peso_vacia;
    private $_plaq_peso_neto;
    private $_bolsa_id;
    private $_pers_id_usu;
    private $_plaq_fecha_mod;

    public function getPlaq_id() {
        return $this->_plaq_id;
    }

    public function getPlaq_fecha_fraccion() {
        return $this->_plaq_fecha_fraccion;
    }

    public function getPlaq_estado() {
        return $this->_plaq_estado;
    }

    public function getPlaq_descripcion() {
        return $this->_plaq_descripcion;
    }

    public function getPlaq_fecha_validez() {
        return $this->_plaq_fecha_validez;
    }

    public function getPlaq_peso_vacia() {
        return $this->_plaq_peso_vacia;
    }

    public function getPlaq_peso_neto() {
        return $this->_plaq_peso_neto;
    }

    public function getBolsa_id() {
        return $this->_bolsa_id;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getPlaq_fecha_mod() {
        return $this->_plaq_fecha_mod;
    }

    public function setPlaq_id($plaq_id) {
        $this->_plaq_id = $plaq_id;
    }

    public function setPlaq_fecha_fraccion($plaq_fecha_fraccion) {
        $this->_plaq_fecha_fraccion = $plaq_fecha_fraccion;
    }

    public function setPlaq_estado($plaq_estado) {
        $this->_plaq_estado = $plaq_estado;
    }

    public function setPlaq_descripcion($plaq_descripcion) {
        $this->_plaq_descripcion = $plaq_descripcion;
    }

    public function setPlaq_fecha_validez($plaq_fecha_validez) {
        $this->_plaq_fecha_validez = $plaq_fecha_validez;
    }

    public function setPlaq_peso_vacia($plaq_peso_vacia) {
        $this->_plaq_peso_vacia = $plaq_peso_vacia;
    }

    public function setPlaq_peso_neto($plaq_peso_neto) {
        $this->_plaq_peso_neto = $plaq_peso_neto;
    }

    public function setBolsa_id($bolsa_id) {
        $this->_bolsa_id = $bolsa_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setPlaq_fecha_mod($plaq_fecha_mod) {
        $this->_plaq_fecha_mod = $plaq_fecha_mod;
    }

}

?>