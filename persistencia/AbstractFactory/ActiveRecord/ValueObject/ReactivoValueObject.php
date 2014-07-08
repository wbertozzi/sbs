<?php

class ReactivoValueObject {

    private $_reactivo_id;
    private $_prueba_nombre;

    public function getReactivo_id() {
        return $this->_reactivo_id;
    }

    public function getPrueba_nombre() {
        return $this->_prueba_nombre;
    }

    public function setReactivo_id($reactivo_id) {
        $this->_reactivo_id = $reactivo_id;
    }

    public function setPrueba_nombre($prueba_nombre) {
        $this->_prueba_nombre = $prueba_nombre;
    }

}

?>