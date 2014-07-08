<?php

class BolsaValueObject {

    private $_bolsa_id;
    private $_bolsa_lote;
    private $_bolsa_marca;
    private $_bolsa_peso_vacia;
    private $_bolsa_peso_neto;
    private $_don_num_donacion;
    private $_tipo_bolsa_id;

    public function getBolsa_id() {
        return $this->_bolsa_id;
    }

    public function getBolsa_lote() {
        return $this->_bolsa_lote;
    }

    public function getBolsa_marca() {
        return $this->_bolsa_marca;
    }

    public function getBolsa_peso_vacia() {
        return $this->_bolsa_peso_vacia;
    }

    public function getBolsa_peso_neto() {
        return $this->_bolsa_peso_neto;
    }

    public function getDon_num_donacion() {
        return $this->_don_num_donacion;
    }

    public function getTipo_bolsa_id() {
        return $this->_tipo_bolsa_id;
    }

    public function setBolsa_id($bolsa_id) {
        $this->_bolsa_id = $bolsa_id;
    }

    public function setBolsa_lote($bolsa_lote) {
        $this->_bolsa_lote = $bolsa_lote;
    }

    public function setBolsa_marca($bolsa_marca) {
        $this->_bolsa_marca = $bolsa_marca;
    }

    public function setBolsa_peso_vacia($bolsa_peso_vacia) {
        $this->_bolsa_peso_vacia = $bolsa_peso_vacia;
    }

    public function setBolsa_peso_neto($bolsa_peso_neto) {
        $this->_bolsa_peso_neto = $bolsa_peso_neto;
    }

    public function setDon_num_donacion($don_num_donacion) {
        $this->_don_num_donacion = $don_num_donacion;
    }

    public function setTipo_bolsa_id($tipo_bolsa_id) {
        $this->_tipo_bolsa_id = $tipo_bolsa_id;
    }

}

?>