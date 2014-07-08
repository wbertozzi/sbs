<!DOCTYPE html>
<html>
<head>    
    <title>SISTEMA DE BANCO DE SANGRE - Aviso nuevos Donantes</title>
    <link rel="shortcut icon" href="../images/ingreso.ico" />    
    <?php include_once '../include/header.php'; ?>        
</head>
<body>
    <div class="container">
        <?php include_once '../include/menu.php';?>
        <div id="cuerpo">
            <div class="page-header">
                <br>    
                <h1>Donantes del dia</h1> 
                <br>
            </div>                                    
                <form action="" id="recepcion" name="recepcion" class="carga"> 
                    <div class="resultado">
                        <fieldset>
                            <legend>DONANTE EN ESPERA</legend>
                                <table class="table table-striped table-bordered table-condensed table-hover">
                                <br>
                                <label>Donantes en Espera</label>
                                <tr>
                                    <td>Orden</td><td>Nro. donacion</td><td>Fecha</td><td>Tipo donante</td><td>Nombre y apellido</td><td>Iniciar</td>
                                </tr>

                                <tr>
                                    <td>1</td><td>14000895</td><td>16/06/2014</td><td>Voluntario</td><td>Pablo Cabrol</td><td><a class="label label-danger"href="extraccion.php">Extraccion</a></td>
                                </tr>

                            </table>              
                    </div>
                </form>
            <a class="btn btn-default" href="../index.php">Volver</a>
        </div>

</body>
</html>


