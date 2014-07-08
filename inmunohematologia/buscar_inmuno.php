

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
                    <h1>Inmunohematolog&iacute;a</h1>  
                    <br>
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
