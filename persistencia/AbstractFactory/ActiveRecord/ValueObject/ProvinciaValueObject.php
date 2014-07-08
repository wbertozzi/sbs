<?php

class ProvinciaValueObject {

    private $_prov_id;
    private $_prov_nombre;

    public function getProv_id() {
        return $this->_prov_id;
    }

    public function getProv_nombre() {
        return $this->_prov_nombre;
    }

    public function setProv_id($prov_id) {
        $this->_prov_id = $prov_id;
    }

    public function setProv_nombre($prov_nombre) {
        $this->_prov_nombre = $prov_nombre;
    }

}

?>