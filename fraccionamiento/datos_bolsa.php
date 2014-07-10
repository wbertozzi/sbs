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
                        <h1>Fraccionamiento</h1>  
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
                                <span class="input-group-addon">Numero Donacion</span>
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
                        <h1>Fraccionamiento</h1>  
                        <br>
                    </div>             
                    <form action="" id="recepcion" name="recepcion" class="carga"> 
                        <div class="panel panel-default">
                            <div class="panel-heading">Datos de Fraccionamiento de Pablo Cabrol</div>
                            <div class="panel-heading">Numero: 14000895</div>
                            <div class="panel-body">
                                <div class="col-lg-3">
                                    <?php
                                    //se inicializa la variable con un munero aleatorio
                                    $tokenINM = md5(uniqid(rand(), true));
                                    // Se guarda el token en la sesin
                                    $_SESSION['tokenINM'] = $tokenINM;
                                    // Se guarda el token como un componente oculto en el formulario
                                    echo "<input type='hidden' name='tokenINM' value=" . $tokenINM . " />";
                                    // Se muestran los campos de login dentro de una tabla
                                    ?>
                                    <div class="input-group">
                                        <span class="input-group-addon">HIV</span>
                                        <select class="selectpicker" name="grupoSang">
                                            <option value="rhNegativo">negativo</option>
                                            <option value="rhPositivo">positivo</option>

                                        </select> 
                                    </div>                                  
                                    <br>   
                                </div>
                                <div class="col-lg-3">

                                    <div class="input-group">
                                        <span class="input-group-addon">Metodo HIV</span>
                                        <select class="selectpicker" name="grupoSang">
                                            <option value="rhNegativo">elisa</option>
                                            <option value="rhPositivo">hemoglutinacion</option>

                                        </select> 
                                    </div>                                  
                                    <br>   
                                </div>
                                <div class="col-lg-3">

                                    <div class="input-group">
                                        <span class="input-group-addon">Reactivo</span>
                                        <select class="selectpicker" name="grupoSang">
                                            <option value="rhNegativo">reactivo a</option>
                                            <option value="rhPositivo">reactivo b</option>

                                        </select> 
                                    </div>                                  
                                    <br>   
                                </div>
                                <div class="col-lg-3">

                                    <div class="input-group">
                                        <span class="input-group-addon">Marca</span>
                                        <select class="selectpicker" name="grupoSang">
                                            <option value="rhNegativo">marca a</option>
                                            <option value="rhPositivo">marca b</option>

                                        </select> 
                                    </div>                                  
                                    <br>   
                                </div>
                                <div class="col-lg-12">   

                                    <div class="input-group">
                                        <span class="input-group-addon">Protocolo HIV</span>
                                        <input class="form-control" type="text" name="anticuerpoEnc" placeholder="Anticuerpo Encontrado" alt="Anticuerpo Encontrado" title="Anticuerpo Encontrado">                                
                                    </div> 
                                    <br />
                                </div>

                                <div class="col-lg-3">

                                    <div class="input-group">
                                        <span class="input-group-addon">Hepatitis B</span>
                                        <select class="selectpicker" name="grupoSang">
                                            <option value="rhNegativo">negativo</option>
                                            <option value="rhPositivo">positivo</option>

                                        </select> 
                                    </div>                                  
                                    <br>   
                                </div>
                                <div class="col-lg-3">

                                    <div class="input-group">
                                        <span class="input-group-addon">Metodo HIV</span>
                                        <select class="selectpicker" name="grupoSang">
                                            <option value="rhNegativo">elisa</option>
                                            <option value="rhPositivo">hemoglutinacion</option>

                                        </select> 
                                    </div>                                  
                                    <br>   
                                </div>
                                <div class="col-lg-3">

                                    <div class="input-group">
                                        <span class="input-group-addon">Reactivo</span>
                                        <select class="selectpicker" name="grupoSang">
                                            <option value="rhNegativo">reactivo a</option>
                                            <option value="rhPositivo">reactivo b</option>

                                        </select> 
                                    </div>                                  
                                    <br>   
                                </div>
                                <div class="col-lg-3">

                                    <div class="input-group">
                                        <span class="input-group-addon">Marca</span>
                                        <select class="selectpicker" name="grupoSang">
                                            <option value="rhNegativo">marca a</option>
                                            <option value="rhPositivo">marca b</option>

                                        </select> 
                                    </div>                                  
                                    <br>   
                                </div>
                                <div class="col-lg-12">   

                                    <div class="input-group">
                                        <span class="input-group-addon">Protocolo Hepatitis B</span>
                                        <input class="form-control" type="text" name="anticuerpoEnc" placeholder="Anticuerpo Encontrado" alt="Anticuerpo Encontrado" title="Anticuerpo Encontrado">                                
                                    </div> 
                                    <br />
                                </div>
                                
                                <div class="col-lg-3">
                                    <br>
                                    <div class="input-group">
                                        <input type="checkbox" name="pendienteSerologia" > <span class="input-group-addon">Dejar Pendiente Serologia</span>
                                    </div>  
 <br>
                                    <div class="input-group">
                                        <input type="checkbox" name="bloqueoTemporal" > <span class="input-group-addon">Bloqueo Temporal</span>
                                    </div>  
  <br>
                                    <div class="input-group">
                                        <input type="checkbox" name="bloqueoTotal" > <span class="input-group-addon">Bloqueo Definitivo</span>
                                    </div>  
                                </div>
                                <div class="col-lg-12">
                                    <br>

                                    <div class="input-group">
                                        <span class="input-group-addon">Observacion Serologia</span>
                                        <textarea class="form-control"  name="observacion" alt="Observacion" title="Observacion">Observacion</textarea>                                    
                                    </div>   
                                  

                                </div>
                                <div class="col-lg-12">
                                    <br>

                                    <table class="table table-striped table-bordered table-condensed table-hover">
                                        <br>
                                        <label>Serologias anteriores</label>
                                        <tr>
                                            <td>Nro. donacion</td><td>Fecha</td><td>Institucion</td>
                                        </tr>

                                        <tr>
                                            <td>1</td><td>14/06/2012</td><td>Departamento COCYFAHER.</td>
                                        </tr>

                                        <tr>
                                            <td>2</td><td>03/02/2013</td><td>Departamento COCYFAHER.</td>
                                        </tr>
                                    </table>   

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