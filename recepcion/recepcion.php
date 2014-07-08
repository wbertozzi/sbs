<!DOCTYPE html>
<html>
<head>    
    <title>SISTEMA DE BANCO DE SANGRE</title>
    <link rel="shortcut icon" href="../images/ingreso.ico" />    
    <link rel="stylesheet" href="../css/plantilla.css" type="text/css"  media="screen" />
    <link rel="stylesheet" href="../css/estilos.css" type="text/css" />       	   
    <script language="javascript" type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.blockUI.js"></script>
    <script language="javascript" type="text/javascript" src="js/index.js"></script>      
</head>
<body>
    <div class="contenedor">
        <header>  </header>
        <div id="cuerpo">
            <h1>Recepcion de Donantes</h1>                        
                <form action="" id="recepcion" name="recepcion" class="carga"> 
                    <div class="resultado">
                        <fieldset>
                            <legend>DATOS PERSONALES DE PACIENTE</legend>
                            <div>
                                <label>Apellido</label>
                                <input type="text" name="apellido" placeholder="Apellido" alt="Apellido" title="Apellido">                                
                            </div>
                            <div>
                                <label>Nombre</label>
                                <input type="text" name="Nombre" placeholder="Nombre" alt="Nombre" title="Nombre">                                
                            </div>
                            <div>
                                <label>DNI/LE/LC/Nº PASAPORTE</label>
                                <input type="text" name="dni" placeholder="dni" alt="dni" title="dni">                                
                            </div>
                            <div>
                                <label>Fecha Nacimiento</label>
                                <input type="text" name="nacimiento" placeholder="nacimiento" alt="nacimiento" title="nacimiento">                                
                            </div>                            
                            <div>
                                <label>Edad</label>
                                <input type="text" name="edad" placeholder="edad" alt="edad" title="edad">                                
                            </div>                            
                            <div>
                                <label>Sexo</label>
                                <input type="text" name="sexo" placeholder="sexo" alt="sexo" title="sexo">                                
                            </div>                            
                            <div>
                                <label>Domicilio</label>
                                <input type="text" name="domicilio" placeholder="domicilio" alt="domicilio" title="domicilio">                                
                            </div>                            
                            <div>
                                <label>Localidad</label>
                                <input type="text" name="localidad" placeholder="localidad" alt="localidad" title="localidad">                                
                            </div>    
                            <div>
                                <label>Telefono</label>
                                <input type="text" name="telefono" placeholder="telefono" alt="telefono" title="telefono">                                
                            </div> 
                            <div>
                                <label>Codigo Postal</label>
                                <input type="text" name="cp" placeholder="Codigo Postal" alt="Codigo Postal" title="Codigo Postal">                                
                            </div>   
                            <div>
                                <label>Ocupacion</label>
                                <input type="text" name="ocupacion" placeholder="Ocupacion" alt="Ocupacion" title="Ocupacion">                                 
                            </div>   
                            <div>
                                <label>Correo electronico</label>
                                <input type="text" name="email" placeholder="email" alt="Correo electronico" title="Correo electronico">                                
                            </div>   
                            <div>
                                <label>Paciente</label>
                                <input type="text" name="paciente" placeholder="Paciente" alt="Paciente" title="Paciente">                                
                            </div> 
                            <table>
                                <tr>
                                    <td>Donaciones anteriores</td><td>Fecha</td><td>Institucion</td>
                                </tr>

                                <tr>
                                    <td><input type="text" name="donacion1" placeholder="" alt="" title=""></td><td><input type="text" name="fecha1" placeholder="" alt="" title=""></td><td><input type="text" name="inst1" placeholder="" alt="" title=""></td>
                                </tr>

                                <tr>
                                    <td><input type="text" name="donacion2" placeholder="" alt="" title=""></td><td><input type="text" name="fecha2" placeholder="" alt="" title=""></td><td><input type="text" name="inst2" placeholder="" alt="" title=""></td>
                                </tr>
                            </table>                            
                        </fieldset>
                        <fieldset>
                            <legend>DATOS CLINICO DEL DONANTE</legend>
                            <div>
                                <label>HTO/HB</label>
                                <input type="text" name="htohb" placeholder="HTO/HB" alt="HTO/HB" title="HTO/HB">                                
                            </div>
                            <div>
                                <label>TA</label>
                                <input type="text" name="ta" placeholder="TA" alt="TA" title="TA">                                
                            </div>
                            <div>
                                <label>Pulso</label>
                                <input type="text" name="pulso" placeholder="Pulso" alt="Pulso" title="Pulso">                                
                            </div>   
                            <div>
                                <label>Temp.</label>
                                <input type="text" name="temp" placeholder="Temp." alt="Temp." title="Temp.">                                
                            </div> 
                            <div>
                                <label>Peso</label>
                                <input type="text" name="peso" placeholder="Peso" alt="Peso" title="Peso">                                
                            </div>     
                            <div>
                                <label>Inspeccion del brazo</label>
                                <input type="text" name="inspeccion" placeholder="Inspeccion del brazo" alt="Inspeccion del brazo" title="Inspeccion del brazo">                                
                            </div>     
                            <div>
                                <label>Observacion</label>
                                <textarea name="observacion" alt="Observacion" title="Observacion">Observacion</textarea>                                
                            </div>
                        </fieldset>
                        <fieldset>
                                <legend>Diferido</legend>
                                <div>
                                    <label>Causa Medica Definitiva</label>
                                    <textarea name="cmd" alt="Causa Medica Definitiva" title="Causa Medica Definitiva">Causa Medica Definitiva</textarea>                                
                                </div> 
                                <div>
                                    <label>Causa Medica Temporaria</label>
                                    <textarea name="cmt" alt="Causa Medica Temporaria" title="Causa Medica Temporaria">Causa Medica Temporaria</textarea>                                
                                </div>    
                                <div>
                                    <label>Operador</label>
                                    <input type="text" name="operador" placeholder="Operador" alt="Operador" title="Operador">                                
                                </div>
                        </fieldset>     
                        <fieldset>
                                <legend>Extraccion</legend>   
                                <div>
                                    <label>Tipo de bolsa</label>
                                    <input type="text" name="tipobolsa" placeholder="Tipo de bolsa" alt="Tipo de bolsa" title="Tipo de bolsa">                                
                                </div>
                                <div>
                                    <label>Numero de bolsa</label>
                                    <input type="text" name="nrobolsa" placeholder="Numero de bolsa" alt="Numero de bolsa" title="Numero de bolsa">                                
                                </div>    
                                <div>
                                    <label>Anticoagulante</label>
                                    <select>
                                        <option>CFDA</option>
                                        <option>Otro</option>
                                    </select>                                
                                </div>      
                                <div>
                                    <label>Brazo usado</label>
                                    <select>
                                        <option>Derecho</option>
                                        <option>Izquierdo</option>
                                    </select>                                
                                </div> 
                                <div>
                                    <label>Dificultad en la extraccion</label>
                                    <select>
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>                                
                                </div>
                                <div>
                                    <label>Tolerancia al Procedimiento</label>
                                    <select>
                                        <option>Buena</option>
                                        <option>Regular</option>
                                        <option>Mala</option>
                                    </select>                                
                                </div>
                                <div>
                                    <label>Tipos de reaccion</label>
                                    <select>
                                        <option>Buena</option>
                                        <option>Regular</option>
                                        <option>Mala</option>
                                    </select>                                
                                </div>
                                <div>
                                    <label>Peso de la bolsa</label>
                                    <input type="text" name="pesobolsa" placeholder="Peso de la bolsa" alt="Peso de la bolsa" title="Peso de la bolsa">                                
                                </div> 
                                <div>
                                    <label>Hora de extraccion</label>
                                    <input type="text" name="horaext" placeholder="Hora de extraccion" alt="Hora de extraccion" title="Hora de extraccion">                                
                                </div>   
                                <div>
                                    <label>Muestras</label>
                                    <select>
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>                                
                                </div> 
                                <div>
                                    <label>Operador</label>
                                    <input type="text" name="operadorext" placeholder="Operador" alt="Operador" title="Operador">                                
                                </div>                                
                        </fieldset>                             
                        <div>
                            <input type="submit" name="Enviar" placeholder="Enviar" alt="Enviar" title="Enviar">                                
                        </div>                          
                    </div>
                </form>
        </div>        
</body>
</html>
