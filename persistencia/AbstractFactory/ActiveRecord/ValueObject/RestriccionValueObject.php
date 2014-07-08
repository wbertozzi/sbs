<?php

class RestriccionValueObject {

    private $_rest_id;
    private $_rest_nombre;
    private $_rest_tipo;
    private $_rest_descripcion;
    private $_rest_tiempo;

    public function getRest_id() {
        return $this->_rest_id;
    }

    public function getRest_nombre() {
        return $this->_rest_nombre;
    }

    public function getRest_tipo() {
        return $this->_rest_tipo;
    }

    public function getRest_descripcion() {
        return $this->_rest_descripcion;
    }

    public function getRest_tiempo() {
        return $this->_rest_tiempo;
    }

    public function setRest_id($rest_id) {
        $this->_rest_id = $rest_id;
    }

    public function setRest_nombre($rest_nombre) {
        $this->_rest_nombre = $rest_nombre;
    }

    public function setRest_tipo($rest_tipo) {
        $this->_rest_tipo = $rest_tipo;
    }

    public function setRest_descripcion($rest_descripcion) {
        $this->_rest_descripcion = $rest_descripcion;
    }

    public function setRest_tiempo($rest_tiempo) {
        $this->_rest_tiempo = $rest_tiempo;
    }

}

?>