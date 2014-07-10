<!DOCTYPE html>
<html>
<head>    
    <title>SISTEMA DE BANCO DE SANGRE - Aviso nuevas Fraccionamientos</title>
    <link rel="shortcut icon" href="../images/ingreso.ico" />    
    <?php include_once '../include/header.php'; ?>        
</head>
<body>
    <div class="container">
        <?php include_once '../include/menu.php';?>
        <div id="cuerpo">
            <div class="page-header">
                <br>    
                <h1>Fraccionamientos Pendientes</h1> 
                <br>
            </div>                                    
                <form action="" id="recepcion" name="recepcion" class="carga"> 
                    <div class="resultado">
                        <fieldset>
                            <legend>FRACCIONAMIENTOS EN ESPERA</legend>
                                <table class="table table-striped table-bordered table-condensed table-hover">
                                <br>
                                <label>Fraccionamientos en Espera</label>
                                <tr>
                                    <td>Orden</td><td>Nro. donacion</td><td>Fecha</td><td>Tipo donante</td><td>Estado</td><td>Iniciar</td>
                                </tr>
<?php 
$num = 14000895;
for($i = 1; $i <= 6; $i++)
{
?>
                                <tr>
                                    <td><?php echo $i; ?></td><td><?php echo $num++; ?></td><td>16/06/2014</td><td>Voluntario</td><td>Sin Datos</td><td><a class="label label-danger"href="datos_serologia.php">Cargar Dato</a></td>
                                </tr>
                                
             <?php 
}
for($i = 7; $i <= 12; $i++)
{
?>
                                <tr>
                                    <td><?php echo $i; ?></td><td><?php echo $num++; ?></td><td>16/06/2014</td><td>Reposicion</td><td>Sin Datos</td><td><a class="label label-danger"href="datos_serologia.php">Cargar Dato</a></td>
                                </tr>
                                
             <?php 
}
?>  
               

                            </table>              
                    </div>
                </form>
            <a class="btn btn-default" href="../index.php">Volver</a>
        </div>

</body>
</html>


