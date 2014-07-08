<?php

/**
* Archivo de la interfaz ActiveRecord.
* Archivo de la interfaz ActiveRecord que nos realizar contratos
* de implementacin con las clases que la implementen y como
* ejemplo podemos mencionar todas las tablas que utilicen
* ActiveRecord deben implementarla.
*/
interface ActiveRecord {


public function insert($oValueObject);


public function update($oValueObject);


public function delete($oValueObject);
}


?>