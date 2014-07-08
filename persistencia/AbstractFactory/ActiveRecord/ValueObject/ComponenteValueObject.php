<?php

class ComponenteValueObject {

    private $_compon_id;
    private $_compon_nombre;

    public function getCompon_id() {
        return $this->_compon_id;
    }

    public function getCompon_nombre() {
        return $this->_compon_nombre;
    }

    public function setCompon_id($compon_id) {
        $this->_compon_id = $compon_id;
    }

    public function setCompon_nombre($compon_nombre) {
        $this->_compon_nombre = $compon_nombre;
    }

}

?>