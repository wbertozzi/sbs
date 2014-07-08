<?php

class PacienteValueObject {

    private $_pers_id_pac;
    private $_pac_telefono;
    private $_pac_celular;
    private $_pac_email;
    private $_ocup_id;

    public function getPers_id_pac() {
        return $this->_pers_id_pac;
    }

    public function getPac_telefono() {
        return $this->_pac_telefono;
    }

    public function getPac_celular() {
        return $this->_pac_celular;
    }

    public function getPac_email() {
        return $this->_pac_email;
    }

    public function getOcup_id() {
        return $this->_ocup_id;
    }

    public function setPers_id_pac($pers_id_pac) {
        $this->_pers_id_pac = $pers_id_pac;
    }

    public function setPac_telefono($pac_telefono) {
        $this->_pac_telefono = $pac_telefono;
    }

    public function setPac_celular($pac_celular) {
        $this->_pac_celular = $pac_celular;
    }

    public function setPac_email($pac_email) {
        $this->_pac_email = $pac_email;
    }

    public function setOcup_id($ocup_id) {
        $this->_ocup_id = $ocup_id;
    }

}

?>