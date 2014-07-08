<?php

class ExtraccionValueObject {

    private $_extrac_id;
    private $_extrac_anticoagulante;
    private $_extrac_brazo;
    private $_extrac_dif_extraccion;
    private $_extrac_tipo_dif;
    private $_extrac_tol_procedimiento;
    private $_extrac_tipo_reaccion;
    private $_extrac_peso_bolsa;
    private $_extrac_hora;
    private $_extrac_muestra;
    private $_don_num_donacion;
    private $_pers_id;
    private $_extrac_fecha_modificacion;

    public function getExtrac_id() {
        return $this->_extrac_id;
    }

    public function getExtrac_anticoagulante() {
        return $this->_extrac_anticoagulante;
    }

    public function getExtrac_brazo() {
        return $this->_extrac_brazo;
    }

    public function getExtrac_dif_extraccion() {
        return $this->_extrac_dif_extraccion;
    }

    public function getExtrac_tipo_dif() {
        return $this->_extrac_tipo_dif;
    }

    public function getExtrac_tol_procedimiento() {
        return $this->_extrac_tol_procedimiento;
    }

    public function getExtrac_tipo_reaccion() {
        return $this->_extrac_tipo_reaccion;
    }

    public function getExtrac_peso_bolsa() {
        return $this->_extrac_peso_bolsa;
    }

    public function getExtrac_hora() {
        return $this->_extrac_hora;
    }

    public function getExtrac_muestra() {
        return $this->_extrac_muestra;
    }

    public function getDon_num_donacion() {
        return $this->_don_num_donacion;
    }

    public function getPers_id() {
        return $this->_pers_id;
    }

    public function getExtrac_fecha_modificacion() {
        return $this->_extrac_fecha_modificacion;
    }

    public function setExtrac_id($extrac_id) {
        $this->_extrac_id = $extrac_id;
    }

    public function setExtrac_anticoagulante($extrac_anticoagulante) {
        $this->_extrac_anticoagulante = $extrac_anticoagulante;
    }

    public function setExtrac_brazo($extrac_brazo) {
        $this->_extrac_brazo = $extrac_brazo;
    }

    public function setExtrac_dif_extraccion($extrac_dif_extraccion) {
        $this->_extrac_dif_extraccion = $extrac_dif_extraccion;
    }

    public function setExtrac_tipo_dif($extrac_tipo_dif) {
        $this->_extrac_tipo_dif = $extrac_tipo_dif;
    }

    public function setExtrac_tol_procedimiento($extrac_tol_procedimiento) {
        $this->_extrac_tol_procedimiento = $extrac_tol_procedimiento;
    }

    public function setExtrac_tipo_reaccion($extrac_tipo_reaccion) {
        $this->_extrac_tipo_reaccion = $extrac_tipo_reaccion;
    }

    public function setExtrac_peso_bolsa($extrac_peso_bolsa) {
        $this->_extrac_peso_bolsa = $extrac_peso_bolsa;
    }

    public function setExtrac_hora($extrac_hora) {
        $this->_extrac_hora = $extrac_hora;
    }

    public function setExtrac_muestra($extrac_muestra) {
        $this->_extrac_muestra = $extrac_muestra;
    }

    public function setDon_num_donacion($don_num_donacion) {
        $this->_don_num_donacion = $don_num_donacion;
    }

    public function setPers_id($pers_id) {
        $this->_pers_id = $pers_id;
    }

    public function setExtrac_fecha_modificacion($extrac_fecha_modificacion) {
        $this->_extrac_fecha_modificacion = $extrac_fecha_modificacion;
    }

}

?>