<?php

class CiudadValueObject {

    private $_ciudad_id;
    private $_ciudad_nombre;
    private $_prov_id;

    public function getCiudad_id() {
        return $this->_ciudad_id;
    }

    public function getCiudad_nombre() {
        return $this->_ciudad_nombre;
    }

    public function getProv_id() {
        return $this->_prov_id;
    }

    public function setCiudad_id($ciudad_id) {
        $this->_ciudad_id = $ciudad_id;
    }

    public function setCiudad_nombre($ciudad_nombre) {
        $this->_ciudad_nombre = $ciudad_nombre;
    }

    public function setProv_id($prov_id) {
        $this->_prov_id = $prov_id;
    }

}

?>