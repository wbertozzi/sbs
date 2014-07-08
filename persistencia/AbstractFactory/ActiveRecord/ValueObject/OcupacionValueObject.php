<?php

class OcupacionValueObject {

    private $_ocup_id;
    private $_ocup_nombre;

    public function getOcup_id() {
        return $this->_ocup_id;
    }

    public function getOcup_nombre() {
        return $this->_ocup_nombre;
    }

    public function setOcup_id($ocup_id) {
        $this->_ocup_id = $ocup_id;
    }

    public function setOcup_nombre($ocup_nombre) {
        $this->_ocup_nombre = $ocup_nombre;
    }

}

?>