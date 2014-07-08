<?php

class DonacionValueObject {

    private $_don_num_donacion;
    private $_don_fec_donacion;
    private $_don_tipo;
    private $_posta_id;
    private $_pers_id_pac;

    public function getDon_num_donacion() {
        return $this->_don_num_donacion;
    }

    public function getDon_fec_donacion() {
        return $this->_don_fec_donacion;
    }

    public function getDon_tipo() {
        return $this->_don_tipo;
    }

    public function getPosta_id() {
        return $this->_posta_id;
    }

    public function getPers_id_pac() {
        return $this->_pers_id_pac;
    }

    public function setDon_num_donacion($don_num_donacion) {
        $this->_don_num_donacion = $don_num_donacion;
    }

    public function setDon_fec_donacion($don_fec_donacion) {
        $this->_don_fec_donacion = $don_fec_donacion;
    }

    public function setDon_tipo($don_tipo) {
        $this->_don_tipo = $don_tipo;
    }

    public function setPosta_id($posta_id) {
        $this->_posta_id = $posta_id;
    }

    public function setPers_id_pac($pers_id_pac) {
        $this->_pers_id_pac = $pers_id_pac;
    }

}

?>