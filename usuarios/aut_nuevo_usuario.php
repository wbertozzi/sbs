<?php 
require 'aut_verifica.inc.php'; // incluir motor de autentificacion.
include_once '../ClasesBasicas/ConsultaBD.php';
if ( $_SESSION['usuario_nivel'] != "Z") {
   echo "<div align=center class=error>Acceso Incorrecto</div>";
   exit;
}

// Se requieren los script para acceder a los datos de la DB
require_once '../ClasesBasicas/ActiveRecordAbstractFactory.php';
require_once '../Clases/ActiveRecord/MysqlAgentesActiveRecord.php';

$oAgente = new AgentesValueObject();
$dni = $nombre = $apellido = $direccion = "";
$existe = 0;
if(isset($_POST['dni'])) {
    
    $oMysql = ActiveRecordAbstractFactory::getActiveRecordFactory(ActiveRecordAbstractFactory::MYSQL);
    $oMysql->conectar();  
    
    $oAgente->setDni($_POST['dni']);
    
    $oMysqlAgentes = $oMysql->getAgentesActiveRecord();
    $oAgente = $oMysqlAgentes->find($oAgente);    
    
    $dni = $_POST['dni'];
    
    if($oAgente<>false) {
        $nombre = $oAgente->getNombre();
        $apellido = $oAgente->getApellido();
        $direccion = $oAgente->getDireccion();
        $existe = 1;
    }
    
}
?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Gesti&oacute;n de Usuarios</title>
      <link rel="shortcut icon" href="../images/ingreso.ico" />
      <link rel="stylesheet" href="../css/plantilla.css" type="text/css"  media="screen" />
      <link rel="stylesheet" href="../css/estilos.css" type="text/css" />
      <script type="text/javascript" src="js/validacion.js"></script>
   </head>
   <body id="nav1">
      <div class="contenedor" id="contenedor">
         <header><?php include_once 'Encabezado.php'; ?></header>
         <div id="cuerpo">
            <h1>Gesti&oacute;n de Usuarios</h1>                        
            <ul id="navegacion">
               <li class="nav1"><a href="aut_nuevo_usuario.php">Nuevo Usuario</a></li>
               <li class="nav2"><a href="aut_lista_usuarios.php">Listado de Usuarios</a></li>  
               <li class="nav3"><a href="aut_modifica_usuario.php">Actualización de Usuarios</a></li>
               <li class="nav4"><a href="aut_modifica_clave.php">Cambio de Clave</a></li>
            </ul>
            <br/>
            <br/>
            <form id="two" name="formulario" autocomplete="off" method="post">
                <input type="hidden" value="<?php echo $existe?>" name="existe" id="existe">
               <div id="vista">
                  <fieldset>
                     <legend>INGRESO NUEVO USUARIO</legend>
                     <div>
                        <table id="nuevo" style="margin: 0 auto; width: 500px;">
                            <tr>
                              <td>DNI:</td>
                              <td>
                                  <input type="text" name="dni" id="dni" class="imputbox" maxlength="150" size="10" onFocus="this.style.color='blue'" onBlur="this.style.color='#333333'" onKeyPress="return esInteger(event)" value="<?php echo $dni?>">*
                                 <input name="busco2" type="button"  class="button" value="&nbsp;&nbsp;Buscar&nbsp;&nbsp;" onClick="pedirDatos()">&nbsp;&nbsp;&nbsp;<div style="display: inline" id="cargando"></div>                                 
                                 <div style="display: inline" id="valida_dni" class="falta_dato"></div>
                              </td>                             
                           </tr>
                           <tr>
                              <td>Nombre:</td>
                              <td>
                                  <input type="text" name="nombre" class="imputbox" maxlength="50" size="30" onFocus="this.style.color='blue'" onBlur="this.style.color='#333333'" <? echo ($dni != 0) ? "":"readonly" ?> value="<?php echo $nombre ?>">
                                 <div id="nom" class="falta_dato" style="display:inline"></div>
                              </td>
                           </tr>
                           <tr>
                              <td>Apellido:</td>
                              <td>
                                 <input type="text" name="apellido" class="imputbox" maxlength="50" size="30" onFocus="this.style.color='blue'" onBlur="this.style.color='#333333'" <? echo ($dni != 0) ? "":"readonly" ?> value="<?php echo $apellido ?>">
                                 <div id="ape" class="falta_dato" style="display:inline"></div>
                              </td>
                           </tr>
                           <tr>
                              <td>Direccion:</td>
                              <td>
                                 <input type="text" name="direccion" class="imputbox" maxlength="150" size="30" onFocus="this.style.color='blue'" onBlur="this.style.color='#333333'" <? echo ($dni != 0) ? "":"readonly" ?> value="<?php echo $direccion ?>">
                                 <div id="dir" class="falta_dato" style="display:inline"></div>
                              </td>
                           </tr>
                           <tr>
                              <td>Identificacion:</td>
                              <td>
                                 <input type="text" name="usuarionombre" class="imputbox" maxlength="30" onFocus="this.style.color='blue'" onBlur="this.style.color='#333333'" <? echo ($dni != 0) ? "":"readonly" ?>>
                                 <div id="iden" class="falta_dato" style="display:inline"></div>
                              </td>
                           </tr>
                           <tr>
                              <td>Contraseña:</td>
                              <td>
                                 <input type="password" name="password1" class="imputbox" maxlength="10" onFocus="this.style.color='blue'" onBlur="this.style.color='#333333'" <? echo ($dni != 0) ? "":"readonly" ?>>
                                 <div id="pass1" class="falta_dato" style="display:inline"></div>
                              </td>
                           </tr>
                           <tr>
                              <td>Contraseña (repetir):</td>
                              <td>
                                 <input type="password" name="password2" class="imputbox" maxlength="10" onFocus="this.style.color='blue'" onBlur="this.style.color='#333333'" <? echo ($dni != 0) ? "":"readonly" ?>>
                                 <div id="pass2" class="falta_dato" style="display:inline"></div>
                              </td>
                           </tr>
                           <tr>
                              <td>Nivel de Acceso:</td>
                              <td>
                                 <select id="nivel" name="nivel" <? echo ($dni != 0) ? "":"disabled" ?>>
                                    <option>Seleccione un nivel de usuario</option>                                    
                                    <option value="Z">Z - Super Usuario</option>
                                    <option value="N">N - Usuario Normal</option>                                    
                                 </select>
                                 <div id="divNiv" class="falta_dato" style="display:inline"></div>
                              </td>
                           </tr>
                           <tr><td><br/></td></tr>
                        </table>
                     </div>
                  </fieldset>
                  <br />
                  <div align="center">
                        <input type="button" class="button" name="Submit" value="&nbsp;&nbsp;Registrar&nbsp;&nbsp;" onclick="nuevoUsuario()">
                        <input type="reset" class="button" value="&nbsp;&nbsp;Limpiar&nbsp;&nbsp;">
                        <div id="falta_dato" class="falta_dato" style="display:inline"></div>
                  </div>
                  <div id="resultado">
                  </div>            
                </div>                
                </form>         
            </div>
         <footer><?php include_once '../ClasesBasicas/Pie.php'; ?></footer>
      </div>
   </body>
</html>
