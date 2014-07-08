<!DOCTYPE html>
<html>
<head>    
    <title>SISTEMA DE BANCO DE SANGRE - Recepcion de Donantes</title>
    <link rel="shortcut icon" href="../images/ingreso.ico" />    
    <?php include_once '../include/header.php'; ?>   
    <script type="text/javascript">
        $(window).on('load', function () {

            $('.selectpicker').selectpicker({
                'selectedText': 'cat'
            });

        });
    </script>     
</head>
<body>
    <?php include_once '../include/menu.php';?>  
    <div class="container">
        <div class="page-header">
            <br>    
            <h1>DATOS CLINICOS</h1>   
            <br>
        </div>         
        <div class="panel panel-default">
            <div class="panel-heading">Pablo Cabrol</div>
            <div class="panel-heading">Numero: 14000895</div>
            <div class="panel-body">
                <div class="col-lg-12" >
                    <div class="col-lg-8">                       
                        <form action="avisoDonantes.php" id="recepcion" name="recepcion" class="carga" method="post"> 
                            <div class="panel panel-default">
                                <div class="panel-heading">Diferido</div>
                                <div class="panel-body">
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">Diferimiento</span>
                                            <select id="diferido" class="selectpicker">
                                                <option value="no">no</option>                                         
                                                <option value="si">si</option>                                
                                            </select>                                
                                        </div>
                                        <br>
                                    </div>  
                                    <!--fin col-lg-3-->
                                    <div class="col-lg-3">
                                        <div id="difPos">
                                            <div class="input-group">
                                                <span class="input-group-addon">Motivo</span>
                                                <select class="selectpicker">
                                                    <option value="hepatitis">Hepatitis</option>
                                                    <option value="sida">HIV</option>  
                                                    <option value="otra">otra</option>                                     
                                                </select>                                
                                            </div>                                    
                                        </div>
                                        <br>
                                    </div>
                                    <!--fin col-lg-3-->
                                    <div class="col-lg-3">
                                        <div id="fechaDifPos">
                                            <div class="input-group">
                                                <span class="input-group-addon">Fecha Inicial</span>
                                                <input class="form-control" type="date" name="FechaIniDif" alt="FechaIniDif" title="FechaIniDif">                                
                                            </div> 
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon">Fecha Final</span>
                                                <input class="form-control" type="date" name="FechafinDif" alt="FechafinDif" title="FechafinDif">                                
                                            </div>                                         

                                        </div>                                  
                                    </div>   
                                    <!--fin col-lg-3-->
                                </div>
                                <br>                             
                            </div>
                            <div>
                                <a class="btn btn-default" href="datosClinicos.php">Atras</a>
                                <input class="btn btn-primary" type="submit" name="Terminar" id="Terminar" value="Terminar" placeholder="Terminar" alt="Terminar" title="Terminar">                                
                            </div>
                          
                            <br>
                        </form>                     
                    </div>    
                    <!--final div col 8-->
                    <div class="col-lg-4" >
                        <div class="panel panel-default">
                            <!--panel con informacion lateral-->
                            <div class="panel-heading">Informacion Util</div>
                            <div class="panel-body">
                                <h3>Objetivos del difierimiento</h3>
                                <ul>
                                    <li>Determinar si el donante de sangre se 
                                    encuentra en adecuadas condiciones 
                                    de salud</li>
                                    
                                    <li>Asegurar que la donación no le 
                                    implicara un daño</li>
                                    
                                    <li>Prevenir reacciones indeseables en 
                                    pacientes receptores</li>
                                </ul>
                            </div>
                            <!--fin cuerpo panel-->
                        </div>    
                    </div> 
                    <!--fin col-lg-3-->
                </div>                 
            </div>
        </div>
        <!--fin panel general-->
     </div>
    <!--fin container-->
    <script type="text/javascript">
      $('#diferido').change(function() {
          opt = $(this).val();
          if (opt=="no") {
              $('#difPos').css({display: "none"});
              $('#fechaDifPos').css({display: "none"});
          }else if (opt == "si") {
              $('#difPos').css({display: "initial"});
              $('#fechaDifPos').css({display: "initial"});
          }
      });
    </script>   
</body>
</html>
