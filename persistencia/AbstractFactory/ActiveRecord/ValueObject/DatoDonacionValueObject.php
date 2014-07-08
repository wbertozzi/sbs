<?php

class DatoDonacionValueObject {

    private $_dat_don_id;
    private $_dat_don_hematocito;
    private $_dat_don_tens_art_alta;
    private $_dat_don_tens_art_baja;
    private $_dat_don_pulso;
    private $_dat_don_temperatura;
    private $_dat_don_peso;
    private $_dat_don_ins_brazo;
    private $_dat_don_observacion;
    private $_don_num_donacion;
    private $_pers_id_usu;
    private $_dat_don_fecha_mod;

    public function getDat_don_id() {
        return $this->_dat_don_id;
    }

    public function getDat_don_hematocito() {
        return $this->_dat_don_hematocito;
    }

    public function getDat_don_tens_art_alta() {
        return $this->_dat_don_tens_art_alta;
    }

    public function getDat_don_tens_art_baja() {
        return $this->_dat_don_tens_art_baja;
    }

    public function getDat_don_pulso() {
        return $this->_dat_don_pulso;
    }

    public function getDat_don_temperatura() {
        return $this->_dat_don_temperatura;
    }

    public function getDat_don_peso() {
        return $this->_dat_don_peso;
    }

    public function getDat_don_ins_brazo() {
        return $this->_dat_don_ins_brazo;
    }

    public function getDat_don_observacion() {
        return $this->_dat_don_observacion;
    }

    public function getDon_num_donacion() {
        return $this->_don_num_donacion;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getDat_don_fecha_mod() {
        return $this->_dat_don_fecha_mod;
    }

    public function setDat_don_id($dat_don_id) {
        $this->_dat_don_id = $dat_don_id;
    }

    public function setDat_don_hematocito($dat_don_hematocito) {
        $this->_dat_don_hematocito = $dat_don_hematocito;
    }

    public function setDat_don_tens_art_alta($dat_don_tens_art_alta) {
        $this->_dat_don_tens_art_alta = $dat_don_tens_art_alta;
    }

    public function setDat_don_tens_art_baja($dat_don_tens_art_baja) {
        $this->_dat_don_tens_art_baja = $dat_don_tens_art_baja;
    }

    public function setDat_don_pulso($dat_don_pulso) {
        $this->_dat_don_pulso = $dat_don_pulso;
    }

    public function setDat_don_temperatura($dat_don_temperatura) {
        $this->_dat_don_temperatura = $dat_don_temperatura;
    }

    public function setDat_don_peso($dat_don_peso) {
        $this->_dat_don_peso = $dat_don_peso;
    }

    public function setDat_don_ins_brazo($dat_don_ins_brazo) {
        $this->_dat_don_ins_brazo = $dat_don_ins_brazo;
    }

    public function setDat_don_observacion($dat_don_observacion) {
        $this->_dat_don_observacion = $dat_don_observacion;
    }

    public function setDon_num_donacion($don_num_donacion) {
        $this->_don_num_donacion = $don_num_donacion;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setDat_don_fecha_mod($dat_don_fecha_mod) {
        $this->_dat_don_fecha_mod = $dat_don_fecha_mod;
    }

}

?>