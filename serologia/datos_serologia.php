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
                                <div class="input-group">
                                    <span class="input-group-addon">Sifilis</span>
                                    <select class="selectpicker" name="factorRH">
                                        <option value="rhNegativo">negativo</option>
                                        <option value="rhPositivo">positivo</option>
                                        
                                    </select> 
                                </div>                                  
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Chagas</span>
                                    <select class="selectpicker" name="du">
                                        <option value="duNegativo">negativo</option>
                                        <option value="duPositivo">positivo</option>
                                        
                                    </select> 
                                </div>                                  
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Hepatitis B</span>
                                    <select class="selectpicker" name="cde">
                                        <option value="cdeNegativo">negativo</option>
                                        <option value="cdePositivo">positivo</option>
                                        
                                    </select> 
                                </div>                                  
                                <br>



                            </div>
                            <div class="col-lg-8">   

                                <div class="input-group">
                                    <span class="input-group-addon">Protocolo HIV</span>
                                    <input class="form-control" type="text" name="anticuerpoEnc" placeholder="Anticuerpo Encontrado" alt="Anticuerpo Encontrado" title="Anticuerpo Encontrado">                                
                                </div> 
                                <br />
                                 <div class="input-group">
                                    <span class="input-group-addon">Protocolo Sifilis</span>
                                    <input class="form-control" type="text" name="anticuerpoEnc" placeholder="Anticuerpo Encontrado" alt="Anticuerpo Encontrado" title="Anticuerpo Encontrado">                                
                                </div> 
                                <br />
                                 <div class="input-group">
                                    <span class="input-group-addon">Protocolo Chagas</span>
                                    <input class="form-control" type="text" name="anticuerpoEnc" placeholder="Anticuerpo Encontrado" alt="Anticuerpo Encontrado" title="Anticuerpo Encontrado">                                
                                </div> 
                                <br />
                                 <div class="input-group">
                                    <span class="input-group-addon">Protocolo Hepatitis B</span>
                                    <input class="form-control" type="text" name="anticuerpoEnc" placeholder="Anticuerpo Encontrado" alt="Anticuerpo Encontrado" title="Anticuerpo Encontrado">                                
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