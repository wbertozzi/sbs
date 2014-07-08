<?php

class MarcaValueObject {

    private $_marca_id;
    private $_marca_nombre;

    public function getMarca_id() {
        return $this->_marca_id;
    }

    public function getMarca_nombre() {
        return $this->_marca_nombre;
    }

    public function setMarca_id($marca_id) {
        $this->_marca_id = $marca_id;
    }

    public function setMarca_nombre($marca_nombre) {
        $this->_marca_nombre = $marca_nombre;
    }

}

?>