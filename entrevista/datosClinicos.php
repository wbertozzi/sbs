<!DOCTYPE html>
<html>
<head>    
    <title>SISTEMA DE BANCO DE SANGRE - Recepcion de Donantes</title>
    <link rel="shortcut icon" href="../images/ingreso.ico" />    
    <?php include_once '../include/header.php'; ?>  
</head>
<body>
    <?php include_once '../include/menu.php';?>    
    <div class="container">
            <div class="page-header">
                <br>    
                <h1>Datos del donante</h1>   
                <br>
            </div>                                    
        <form action="diferido.php" id="recepcion" name="recepcion" class="carga" method="post"> 
                    <div class="panel panel-default">
                        <div class="panel-heading">Datos clinicos de Pablo Cabrol</div>
                        <div class="panel-heading">Numero: 14000895</div>
                        <div class="panel-body">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-addon">HTO</span>
                                    <input class="form-control" placeholder="Hematocrito" type="number" name="hto" alt="hto" title="hto">   
                                    <span class="input-group-addon">%</span>
                                </div>  
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">HB</span>
                                    <input class="form-control" placeholder="Hemoglobina" type="number" name="hb" alt="hb" title="hb">
                                    <span class="input-group-addon">gr/dl</span>
                                </div>  
                                <br>                                
                                <div class="input-group">
                                    <span class="input-group-addon">TAA</span>
                                    <input class="form-control" placeholder="Tension Arterial Alta" type="number" name="ta" alt="ta" title="ta">                                
                                </div> 
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">TAB</span>
                                    <input class="form-control" placeholder="Tension Arterial Baja" type="number" name="ta" alt="ta" title="ta">                                
                                </div> 
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Pulso</span>
                                    <input class="form-control" type="number" name="Pulso" alt="Pulso" title="Pulso">                                
                                </div>
                                <br>
                                                               
                            </div>  
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Temp.</span>
                                    <input class="form-control" type="number" name="Temp." alt="Temp." title="Temp.">                                
                                </div> 
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Peso</span>
                                    <input class="form-control" type="number" name="Peso" alt="Peso" title="Peso">                                
                                </div>  
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Inspeccion del brazo</span>
                                    <input class="form-control" type="number" name="inspeccion" alt="inspeccion" title="inspeccion">                                
                                </div>  
                                <br> 
                                <div class="input-group">
                                    <span class="input-group-addon">Observacion</span>
                                    <textarea class="form-control"  name="observacion" alt="Observacion" title="Observacion">Observacion</textarea>                                    
                                </div>  
                                <br>                                   
                            </div>        
                      </div>                         
                    </div>
                      <div>
                          <a class="btn btn-default" href="cuestionario.php">Atras</a>
                        <input class="btn btn-primary" type="submit" name="Siguiente" id="Siguiente" value="Siguiente" placeholder="Siguiente" alt="Siguiente" title="Siguiente">                                
                    </div>                      
                </form>       
    </div>       
</body>
</html>

