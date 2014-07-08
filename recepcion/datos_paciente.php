<?php
session_start();
if (isset($_POST['Aceptar']) && $_POST['Aceptar'] == 'Aceptar' && isset($_POST['tokenDPP']) && $_POST['tokenDPP'] == $_SESSION['tokenDPP']) {
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
            <?php include_once '../include/menu.php'; ?>
            <div class="container">

                <div class="page-header">
                    <br>    
                    <h1>Recepcion de Donantes</h1> 
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
                            <input class="form-control" type="number" id="buscarDni" name="buscarDni" alt="buscarDni" title="buscarDni">                                
                        </div> 

                        <input class="btn btn-primary" value="Buscar" type="submit" name="Buscar" id="Buscar" placeholder="Buscar" alt="Buscar" title="Buscar" />                                
                    </div>
                </form>

                        <div id="aqui">

                        </div>
                           
            </div>


          
        </body>
    </html>
    <?php
} else {
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
            <?php include_once '../include/menu.php'; ?>
            <div class="container">
                <div class="page-header">
                    <br>    
                    <h1>Recepcion de Donantes</h1> 
                    <br>
                </div> 
                <form action="javascript: fn_buscar();" id="frm_buscar" name="frm_buscar" method="post">                         
                    <div class="panel-body">
                        <div class="input-group">
                            <span class="input-group-addon">DNI</span>
                            <input class="form-control" type="number" id="buscarDni" name="buscarDni" alt="buscarDni" title="buscarDni">                                
                        </div> 

                        <input class="btn btn-primary" value="Buscar" type="submit" name="Buscar" id="Buscar" placeholder="Buscar" alt="Buscar" title="Buscar" />                                
                    </div>
                </form>
                <div id="aqui">

                </div>

            </div>


        </body>
    </html>
    <?php
}
?>