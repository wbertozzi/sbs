<!DOCTYPE html>
<html>
    <head>    
        <title>SISTEMA DE BANCO DE SANGRE - Recepcion de Donantes</title>
        <?php include_once '../include/header.php'; ?>  
        <script type="text/javascript">
            var slct = jQuery.noConflict();
            slct(window).on('load', function() {
                slct('.selectpicker').selectpicker({
                    'selectedText': 'cat'
                });
            });
        </script>         
    </head>
    <body>
        <div class="container">
            <?php include_once '../include/menu.php'; ?>
            <div id="cuerpo">
                <div class="page-header">
                    <br>    
                    <h1>Extraccion de Sangre</h1>  
                    <br>
                </div>             
                <form action="" id="recepcion" name="recepcion" class="carga"> 
                    <div class="panel panel-default">
                        <div class="panel-heading">Datos de Extraccion de Pablo Cabrol</div>
                        <div class="panel-heading">Numero: 14000895</div>
                        <div class="panel-body">
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Tipo de bolsa</span>
                                    <select class="selectpicker" name="tipobolsa">
                                        <option value="tipo1">Tipo 1</option>
                                        <option value="tipo2">Tipo 2</option>
                                    </select> 
                                </div>                                  
                                <br>  
                                <div class="input-group">
                                    <span class="input-group-addon">Marca bolsa</span>
                                    <select class="selectpicker" name="marcabolsa">
                                        <option value="marca1">Marca 1</option>
                                        <option value="marca2">Marca 2</option>
                                    </select> 
                                </div>                                  
                                <br> 
                                <div class="input-group">
                                    <span class="input-group-addon">Numero de Lote</span>
                                    <input class="form-control" type="text" name="nrobolsa" placeholder="Numero de lote de bolsa" alt="Numero de bolsa" title="Numero de bolsa">                                
                                </div> 
                                <br>   
                                <div class="row">
                                    <div class=" col-lg-7">
                                        <div class="input-group">
                                            <span class="input-group-addon">Anticoag.</span>
                                            <select class="selectpicker">
                                                <option value="cfda">CFDA</option>
                                                <option value="otro">Otro</option>
                                            </select> 
                                            <span class="input-group-addon">20 min.</span>
                                        </div>                                        
                                    </div>
                                </div>
                                <br>  
                                <div class="input-group">
                                    <span class="input-group-addon">Brazo usado</span>
                                    <select class="selectpicker">
                                        <option value="derecho">Derecho</option>
                                        <option value="izquierdo">Izquierdo</option>
                                    </select> 
                                </div> 
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Tolerancia al Procedimiento</span>
                                    <select class="selectpicker">
                                        <option value="buena">Buena</option>
                                        <option value="regular">Regular</option>
                                        <option value="mala">Mala</option>                                        
                                    </select> 
                                </div>
                                <br>

                            </div>
                            <div class="col-lg-4">                               
                                <div class="input-group">
                                    <span class="input-group-addon">Dificultad en la extraccion</span>
                                    <select class="selectpicker">
                                        <option value="si">Si</option>
                                        <option value="no">No</option>
                                    </select> 
                                </div> 
                                <br>                                 
                                <div class="input-group">
                                    <span class="input-group-addon">Tipo dificultad extraccion</span>
                                    <select class="selectpicker">
                                        <option value="tipo1">Tipo 1</option>
                                        <option value="tipo2">Tipo 2</option>
                                    </select> 
                                </div>
                                <br> 


                                <div class="input-group">
                                    <span class="input-group-addon">Observacion dificultad extraccion</span>
                                    <textarea class="form-control"  name="observacion" alt="Observacion" title="Observacion">Observacion</textarea>                                    
                                </div>
                                <br>     
                                <div class="input-group">
                                    <span class="input-group-addon" id="reaccion">Reaccion</span>
                                    <select class="selectpicker">
                                        <option value="no">no</option>                                          
                                        <option value="si">si</option>                                    
                                    </select> 
                                </div>
                                <br> 
                                <div id="reaccionsi">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="tipo_reaccion">Tipos de reaccion</span>
                                        <select class="selectpicker">
                                            <option value="razon1">Razon 1</option>
                                            <option value="razon2">Razon 2</option>
                                            <option value="razon3">Razon 3</option>                                        
                                        </select> 
                                    </div>                                    
                                </div>

                                <br>                                

                            </div>
                            <div class="col-lg-4">   
                                <div class="input-group">
                                    <span class="input-group-addon">Extraccion completa</span>
                                    <select class="selectpicker">
                                        <option value="buena">Si</option>
                                        <option value="regular">No</option>                                       
                                    </select> 
                                </div> 
                                <br>                                 
                                <div class="input-group">
                                    <span class="input-group-addon">Muestras</span>
                                    <select class="selectpicker">
                                        <option value="buena">Si</option>
                                        <option value="regular">No</option>                                       
                                    </select> 
                                </div> 
                                <br>    
                                <div class="input-group">
                                    <span class="input-group-addon">Tiempo de extraccion</span>
                                    <select class="selectpicker">
                                        <option value="menor15">Menor 15 min.</option>
                                        <option value="mayor15">Mayor 15 min.</option>                                       
                                    </select> 
                                </div> 
                                <br> 
                                <div class="input-group">
                                    <span class="input-group-addon">Peso de la bolsa</span>
                                    <input class="form-control" type="number" name="pesobolsa" placeholder="Peso de la bolsa" alt="Peso de la bolsa" title="Peso de la bolsa">                                
                                </div>  
                                <br>                                     
                                <div class="input-group">
                                    <span class="input-group-addon">Hora de extraccion</span>
                                    <input class="form-control" type="datetime" name="horaext" placeholder="Hora de extraccion" alt="Hora de extraccion" title="Hora de extraccion">                                
                                </div>  

                                <br>                                                                
                            </div>
                        </div>
                    </div> 
                    <div>
                        <a class="btn btn-default" href="../index.php">Volver</a>
                        <input class="btn btn-primary" type="submit" name="Aceptar" id="Aceptar" value="Aceptar" placeholder="Aceptar" alt="Aceptar" title="Aceptar">                                

                    </div> 
                    <br>
                </form>
            </div>   

    </body>
</html>
