<?php

class TrazabilidadCriopesValueObject {

    private $_trasab_criop_id;
    private $_trasab_criop_estado;
    private $_bolsa_id;
    private $_criop_id;
    private $_entidad_id;

    public function getTrasab_criop_id() {
        return $this->_trasab_criop_id;
    }

    public function getTrasab_criop_estado() {
        return $this->_trasab_criop_estado;
    }

    public function getBolsa_id() {
        return $this->_bolsa_id;
    }

    public function getCriop_id() {
        return $this->_criop_id;
    }

    public function getEntidad_id() {
        return $this->_entidad_id;
    }

    public function setTrasab_criop_id($trasab_criop_id) {
        $this->_trasab_criop_id = $trasab_criop_id;
    }

    public function setTrasab_criop_estado($trasab_criop_estado) {
        $this->_trasab_criop_estado = $trasab_criop_estado;
    }

    public function setBolsa_id($bolsa_id) {
        $this->_bolsa_id = $bolsa_id;
    }

    public function setCriop_id($criop_id) {
        $this->_criop_id = $criop_id;
    }

    public function setEntidad_id($entidad_id) {
        $this->_entidad_id = $entidad_id;
    }

}

?>