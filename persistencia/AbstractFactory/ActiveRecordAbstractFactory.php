<?php
// Se requiere la clase MysqlActiveRecordAbstractFactory.php
require_once("MysqlActiveRecordAbstractFactory.php");

// Se requiere la clase PgsqlActiveRecordAbstractFactory.php
require_once("PgsqlActiveRecordAbstractFactory.php");
// Se requiere la clase OracleActiveRecordAbstractFactory.php
require_once("OracleActiveRecordAbstractFactory.php");


/**
* Clase que fabrica objetos de tipo Active Record.
* Clase que fabrica objetos de tipo Active Record para motores
* MySQL y PostgreSQL.
*/
abstract class ActiveRecordAbstractFactory {


// Lista de tipos de Active Record soportados por la factora
const MYSQL = 1;
const PGSQL = 2;
const ORACLE = 3;



public abstract function getPersonaActiveRecord();
public abstract function getUsuarioActiveRecord();
public abstract function getTipoUsuarioActiveRecord();
public abstract function getPacienteActiveRecord();
public abstract function getOcupacionActiveRecord();
public abstract function getPacienteRestriccionActiveRecord();
public abstract function getRestriccionActiveRecord();
public abstract function getDonacionActiveRecord();
public abstract function getDatoDonacionActiveRecord();
public abstract function getRespuestaActiveRecord();
public abstract function getPreguntaActiveRecord();
public abstract function getExtraccionActiveRecord();
public abstract function getCiudadActiveRecord();
public abstract function getProvinciaActiveRecord();
public abstract function getInmunohematologiaActiveRecord();
public abstract function getInmunoPacienteActiveRecord();
public abstract function getInmunoBolsaActiveRecord();
public abstract function getCompatibilidadActiveRecord();
public abstract function getSerologiaActiveRecord();
public abstract function getPruebaSerologiaActiveRecord();
public abstract function getProtocoloActiveRecord();
public abstract function getReactivoActiveRecord();
public abstract function getPruebaActiveRecord();
public abstract function getMarcaActiveRecord();
public abstract function getMarcaReactivoActiveRecord();
public abstract function getOrganismoActiveRecord();
public abstract function getServicioActiveRecord();
public abstract function getEntidadActiveRecord();
public abstract function getPostaActiveRecord();
public abstract function getCentroTransfucionActiveRecord();
public abstract function getBancoActiveRecord();
public abstract function getSolicitudActiveRecord();
public abstract function getSolicitudComponenteActiveRecord();
public abstract function getComponenteActiveRecord();
public abstract function getTransfucionActiveRecord();
public abstract function getDetalleTransfucionActiveRecord();
public abstract function getBolsaActiveRecord();
public abstract function getTipoBolsaActiveRecord();
public abstract function getCriopresipitadoActiveRecord();
public abstract function getPlasmaActiveRecord();
public abstract function getPlaquetaActiveRecord();
public abstract function getGlobuloActiveRecord();
public abstract function getTrazabilidadCriopesActiveRecord();
public abstract function getTrazabilidadPlasmaActiveRecord();
public abstract function getTrazabilidadPlaquetaActiveRecord();
public abstract function getTrazabilidadGlobuloActiveRecord();
public abstract function getTransporteActiveRecord();
public abstract function getEnvioActiveRecord();
public abstract function getDetalleEnvioActiveRecord();

/**
* Permite obtener la factora de un Active Record.
* @param integer $motor Se especifica el tipo de objeto a crear
* @return object or false
*/
public static function getActiveRecordFactory($motor = self::ORACLE) {
switch ($motor) {
case self::MYSQL:
return new MysqlActiveRecordAbstractFactory();
case self::PGSQL:
return new PgsqlActiveRecordAbstractFactory();
case self::ORACLE:
return new OracleActiveRecordAbstractFactory();
default:
return false;
}
}


}
?>