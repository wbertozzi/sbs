<?php

class MarcaReactivoValueObject {

    private $_marca_react_id;
    private $_marca_id;
    private $_reactivo_id;

    public function getMarca_react_id() {
        return $this->_marca_react_id;
    }

    public function getMarca_id() {
        return $this->_marca_id;
    }

    public function getReactivo_id() {
        return $this->_reactivo_id;
    }

    public function setMarca_react_id($marca_react_id) {
        $this->_marca_react_id = $marca_react_id;
    }

    public function setMarca_id($marca_id) {
        $this->_marca_id = $marca_id;
    }

    public function setReactivo_id($reactivo_id) {
        $this->_reactivo_id = $reactivo_id;
    }

}

?>