<?php
session_start();
// Se chequea si existe un login
$texto = htmlentities(trim($_POST['buscarNumeroD']));
if ($texto != "") {
    switch ($texto) {
        case "111": {
                ?>
                <form action="datos_inmuno.php" id="recepcion" name="recepcion" class="carga" method="post"> 
                    <div class="panel panel-default">
                        <div class="panel-heading">Datos de Inmunohematolog&iacute;a de Pablo Cabrol</div>
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
                                        <option value="rhPositivo">positivo</option>
                                        <option value="rhNegativo">negativo</option>
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

                <?php
                break;
            }




        default: {
                ?>
                <form action="datos_inmuno.php" id="recepcion" name="recepcion" class="carga" method="post"> 
                    <div class="panel panel-default">
                        <div class="panel-heading">Datos de Inmunohematolog&iacute;a de Pablo Cabrol</div>
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
                <?php
                break;
            }
    }
} else {
    ?>
    <div class="col-lg-12">
        <br>
        <div class="alert alert-dismissable alert-info">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>Atencion!</strong> Ingrese el Numero de Donacion.

        </div> 
    </div>  

<?php }
?>                             