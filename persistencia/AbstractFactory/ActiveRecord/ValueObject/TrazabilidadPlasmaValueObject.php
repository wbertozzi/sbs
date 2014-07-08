<?php

class TrazabilidadPlasmaValueObject {

    private $_trasab_plasma_id;
    private $_trasab_plasma_estado;
    private $_bolsa_id;
    private $_plasma_id;
    private $_entidad_id;

    public function getTrasab_plasma_id() {
        return $this->_trasab_plasma_id;
    }

    public function getTrasab_plasma_estado() {
        return $this->_trasab_plasma_estado;
    }

    public function getBolsa_id() {
        return $this->_bolsa_id;
    }

    public function getPlasma_id() {
        return $this->_plasma_id;
    }

    public function getEntidad_id() {
        return $this->_entidad_id;
    }

    public function setTrasab_plasma_id($trasab_plasma_id) {
        $this->_trasab_plasma_id = $trasab_plasma_id;
    }

    public function setTrasab_plasma_estado($trasab_plasma_estado) {
        $this->_trasab_plasma_estado = $trasab_plasma_estado;
    }

    public function setBolsa_id($bolsa_id) {
        $this->_bolsa_id = $bolsa_id;
    }

    public function setPlasma_id($plasma_id) {
        $this->_plasma_id = $plasma_id;
    }

    public function setEntidad_id($entidad_id) {
        $this->_entidad_id = $entidad_id;
    }

}

?>