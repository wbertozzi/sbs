<?php
session_start();
if (isset($_POST['Aceptar']) && $_POST['Aceptar'] == 'Aceptar' && 
        isset($_POST['tokenINM']) && $_POST['tokenINM'] == $_SESSION['tokenINM']) {
    ?>

   <!DOCTYPE html>
    <html>
        <head>    
            <title>SISTEMA DE BANCO DE SANGRE - Recepcion de Donantes</title>
            <link rel="shortcut icon" href="../images/ingreso.ico" />    
            <?php include_once '../include/header.php'; ?>   
            <script type="text/javascript">
                $(window).on('load', function() {

                    $('.selectpicker').selectpicker({
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
                    <h1>Serolog&iacute;a</h1>  
                    <br>
                </div>
                <div class="col-lg-12">
                    <br>
                    <div class="alert alert-dismissable alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>Bien Hecho!</strong> Operacion exitosa.
                    </div>
                </div>
                <form action="javascript: fn_buscar();" id="frm_buscar" name="frm_buscar" method="post">                         
                    <div class="panel-body">
                        <div class="input-group">
                            <span class="input-group-addon">DNI</span>
                            <input class="form-control" type="number" id="buscarNumeroD" name="buscarNumeroD" alt="buscarNumeroD" title="buscarNumeroD">                                
                        </div> 

                        <input class="btn btn-primary" value="Buscar" type="submit" name="Buscar" id="Buscar" placeholder="Buscar" alt="Buscar" title="Buscar" />                                
                    </div>
                </form>

                        <div id="aqui">

                        </div>
                           
            </div>

 </div>
          
        </body>
    </html>
    <?php
} else {
    ?>
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
                    <h1>Serolog&iacute;a</h1>  
                    <br>
                </div>             
                <form action="" id="recepcion" name="recepcion" class="carga"> 
                    <div class="panel panel-default">
                        <div class="panel-heading">Datos de Serolog&iacute;a de Pablo Cabrol</div>
                        <div class="panel-heading">Numero: 14000895</div>
                        <div class="panel-body">
                            <div class="col-lg-4">

                                <div class="input-group">
                                    <span class="input-group-addon">Grupo Sanguineo</span>
                                    <select class="selectpicker" name="grupoSang">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="0">0</option>
                                    </select> 
                                </div>                                  
                                <br>   
                                <div class="input-group">
                                    <span class="input-group-addon">Factor RH</span>
                                    <select class="selectpicker" name="factorRH">
                                        <option value="rhPositivo">positivo</option>
                                        <option value="rhNegativo">negativo</option>
                                    </select> 
                                </div>                                  
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">DU</span>
                                    <select class="selectpicker" name="du">
                                        <option value="duPositivo">positivo</option>
                                        <option value="duNegativo">negativo</option>
                                    </select> 
                                </div>                                  
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">CDE</span>
                                    <select class="selectpicker" name="cde">
                                        <option value="cdePositivo">positivo</option>
                                        <option value="cdeNegativo">negativo</option>
                                    </select> 
                                </div>                                  
                                <br>



                            </div>
                            <div class="col-lg-4">   

                                <div class="input-group">
                                    <span class="input-group-addon">Comms Directa</span>
                                    <select class="selectpicker" name="commsDir">
                                        <option value="cdPositivo">positivo</option>
                                        <option value="cdNegativo">negativo</option>
                                    </select> 
                                </div>                                  
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Comms Indirecta</span>
                                    <select class="selectpicker" name="commsInd">
                                        <option value="ciPositivo">positivo</option>
                                        <option value="ciNegativo">negativo</option>
                                    </select> 
                                </div>                                  
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Anticuerpo</span>
                                    <select class="selectpicker" name="anticuerpo">
                                        <option value="anPositivo">positivo</option>
                                        <option value="anNegativo">negativo</option>
                                    </select> 
                                </div>                                  
                                <br>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Anticuerpo Encontrado</span>
                                    <input class="form-control" type="text" name="anticuerpoEnc" placeholder="Anticuerpo Encontrado" alt="Anticuerpo Encontrado" title="Anticuerpo Encontrado">                                
                                </div> 
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Hemolisina</span>
                                    <select class="selectpicker" name="hemolisina">
                                        <option value="hemPositivo">positivo</option>
                                        <option value="hemNegativo">negativo</option>
                                    </select> 
                                </div>                                  
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Estado Inmuno</span>
                                    <select class="selectpicker" name="anticuerpo">
                                        <option value="eiTerminado">Terminado</option>
                                        <option value="eiPendiente">Pendiente</option>
                                    </select> 
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
                      
                        <input class="btn btn-primary" type="submit" name="Aceptar" id="Aceptar" value="Aceptar" placeholder="Aceptar" alt="Aceptar" title="Aceptar">                                


                    </div> 
                    <br>
                </form>
            </div>        
    </body>
</html>
    <?php
}
?>