<!DOCTYPE html>
<html>
    <head>    
        <title>Sistema de Banco de Sangre</title>
        <?php
        include_once '../include/header.php';
        require_once("../persistencia/AbstractFactory/ActiveRecordAbstractFactory.php");
        $oOracle = ActiveRecordAbstractFactory::getActiveRecordFactory(ActiveRecordAbstractFactory::ORACLE);
        // Nos conectamos al servidor MySQL
        $oOracle->conectar();
        ?>        
    </head>
    <body>
        <div class="container">
            <header>  
            </header>
            <div class="panel panel-primary">
                <div class="panel-heading">Sistema Banco de Sangre</div>
                <div class="panel-body">
                    <!--menu de pestañas-->
                    <ul id="menu_principal" class="nav nav-tabs">
                        <li class="active">
                            <a href="#inicio" data-toggle="tab">Inicio</a>
                        </li>
                        <li class="active">
                            <a href="#recepcion" data-toggle="tab">Recepcion</a>
                        </li>
                        <li class="active">
                            <a href="#entrevista" data-toggle="tab">Entrevista</a>
                        </li>
                        <li class="active">
                            <a href="#extraccion" data-toggle="tab">Extraccion</a>
                        </li>
                    </ul>
                    <?php
                    $oOracleOcup = $oOracle->getOcupacionActiveRecord();
                    $oOcupacionValueObject = new OcupacionValueObject();
                    $consulta                = "SELECT * FROM ocupacion";
     $cantidad                = $oOracleOcup->buscarSQL($consulta);
     echo $cantidad->getOcup_nombre();
                    ?>
                    <!--contenido del menu-->
                    <div class="tab-content">
                        <div class="tab-pane active" id="inicio">
                            <ul>
                                <li>
                                    <a href="inicio/index.php">1 - Login</a>                            
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="recepcion">
                            <ul>
                                <li>
                                    <a href="../recepcion/datosPaciente.php">2-1 - Datos paciente</a>
                                </li>
                            </ul>                    
                        </div>                
                        <div class="tab-pane" id="entrevista">
                            <ul>
                                <li>
                                    <a href="../Entrevista/cuestionario.php">3-1 - Cuestionario</a>
                                </li>
                                <li>
                                    <a href="../Entrevista/datosClinicos.php">3-2 - Datos Clinicos</a>
                                </li>
                                <li>
                                    <a href="../Entrevista/diferido.php">3-3 - Diferido</a>
                                </li>
                                <li>
                                    <a href="../Entrevista/avisoDonantes.php">3-4 - Donantes en espera</a>
                                </li>
                            </ul>                    
                        </div>
                        <div class="tab-pane" id="extraccion">
                            <ul>
                                <li>
                                    <a href="../Extraccion/extraccion.php">4-1 - Extraccion</a>
                                </li>
                            </ul>                    
                        </div>
                    </div>
                    <script>
                        $('#menu_principal').click(function(e) {
                            e.preventDefault()
                            $(this).tab('show')
                        })
                    </script>
                </div>
            </div>  
            <footer>

            </footer>
        </div>
    </body>
</html>