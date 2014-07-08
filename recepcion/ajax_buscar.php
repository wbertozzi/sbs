<?php
session_start();
// Se chequea si existe un login
$texto = htmlentities(trim($_POST['buscarDni']));
if ($texto != "") {
    switch ($texto) {
        case "111": {
                ?>
                <form action="datosPaciente.php" id="recepcion" name="recepcion" method="post" enctype="multipart/form-data"> 
                    <div class="panel panel-default" >
                        <div class="panel-heading">DATOS PERSONALES DE PACIENTE</div>
                        <div class="panel-heading">NUMERO: 14000895</div>
                        <div class="panel-body">
                            <div class="col-lg-4">
                                <?php
                                //se inicializa la variable con un munero aleatorio
                                $tokenDPP = md5(uniqid(rand(), true));
                                // Se guarda el token en la sesin
                                $_SESSION['tokenDPP'] = $tokenDPP;
                                // Se guarda el token como un componente oculto en el formulario
                                echo "<input type='hidden' name='tokenDPP' value=" . $tokenDPP . " />";
                                // Se muestran los campos de login dentro de una tabla
                                ?>

                          
                                <div class="input-group">
                                    <span class="input-group-addon">DNI</span>
                                    <input class="form-control" type="number" name="dni" alt="dni" title="dni" value="<?php echo $texto; ?>">                                
                                </div>
                                <br> 
                                <div class="input-group">
                                    <span class="input-group-addon">Apellido</span>
                                    <input class="form-control" type="text" name="apellido" alt="Apellido" title="Apellido" value="Perez">                                
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Nombre</span>
                                    <input class="form-control" type="text" name="Nombre"  alt="Nombre" title="Nombre" value="Laura">                                
                                </div>
                                <br>                            
                                <div class="input-group">
                                    <span class="input-group-addon">Fecha Nacimiento</span>
                                    <input class="form-control" type="date" name="nacimiento" alt="nacimiento" title="nacimiento" value="14/05/1976">                                
                                </div>  
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Edad</span>
                                    <input class="form-control" type="number" name="edad"  min="1" alt="edad" title="edad" value="37">                                
                                </div> 
                                <br>
                            </div>
                            <div class="col-lg-4">

                                <div class="input-group">
                                    <span class="input-group-addon">Sexo</span>
                                    <select class="selectpicker" >
                                        <option value="femenino" selected="">Femenino</option>
                                        <option value="masculino">Masculino</option>
                                    </select>                                
                                </div>
                                <br>                              
                                <div class="input-group">
                                    <span class="input-group-addon">Domicilio</span>
                                    <input class="form-control" type="text" name="domicilio" alt="domicilio" title="domicilio" value="Los Cardenales 134">                                
                                </div>                            
                                <br>                              
                                <div class="input-group">
                                    <span class="input-group-addon">Localidad</span>
                                    <select class="selectpicker" >
                                        <option value="parana" selected="">Parana</option>
                                        <option value="diamante">Diamante</option>
                                        <option value="victoria">Victoria</option>                                    
                                    </select>                                
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Codigo Postal</span>
                                    <input class="form-control" type="text" name="cp" alt="Codigo Postal" title="Codigo Postal" value="3100">                                
                                </div>                             
                                <br>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Telefono</span>
                                    <input class="form-control" type="text" name="telefono" alt="telefono" title="telefono" value="4284854">                                
                                </div>                              
                                <br>  
                                <div class="input-group">
                                    <span class="input-group-addon">Celular</span>
                                    <input class="form-control" type="text" name="celular" alt="celular" title="celular" value="154584985">                                
                                </div>                              
                                <br>


                                <div class="input-group">
                                    <span class="input-group-addon">Ocupacion</span>
                                    <select class="selectpicker" >
                                        <option value="1">Administrativo</option>
                                        <option value="2" selected="">Policia</option>
                                        <option value="3">Zapatero</option>                                    
                                    </select>                                
                                </div>
                                <br>                              
                                <div class="input-group">
                                    <span class="input-group-addon">Email</span>
                                    <input class="form-control" type="email" name="email" alt="Correo electronico" title="Correo electronico" value="lau@gmail.com">                                
                                </div>
                                <br>                                
                            </div> 
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Tipo de donacion</span>
                                    <select id="tipo_donacion" class="selectpicker" >
                                        <option value="voluntaria">Voluntaria</option>
                                        <option value="reposicion">Reposicion</option>
                                        <option value="aferesis">Aferesis</option>                                    
                                    </select>                                
                                </div>                                    
                            </div>
                            <br>
                            <div class="col-lg-8">
                                <div id="paciente">
                                    <div class="input-group">
                                        <span class="input-group-addon">Paciente</span>
                                        <input class="form-control" type="text" name="paciente" placeholder="Paciente" alt="Paciente" title="Paciente" >                                
                                    </div>   
                                </div>                                     
                            </div>
                            <br>
                            <div class="col-lg-12">
                                <br>

                                <div class="alert alert-dismissable alert-warning">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>Diferido temporal!</strong> Se encuentra imposibilitado a donar hasta el 30/08/2014.
                                </div>    

                                <table class="table table-striped table-bordered table-condensed table-hover">
                                    <br>
                                    <label>Donaciones anteriores</label>
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
                                <div>
                                    <input class="btn btn-primary" type="submit" name="Aceptar" id="Aceptar" value="Aceptar" placeholder="Aceptar" alt="Aceptar" title="Aceptar">                                
                                </div>
                            </div>                                                  
                        </div>
                        <!--final cuerpo panel-->
                    </div>  
                    <!--final panel-->
                </form>            


                <!--final formulario-->
                <script type="text/javascript">
                    $('#tipo_donacion').change(function() {
                        opt = $(this).val();
                        if (opt == "voluntaria") {
                            $('#paciente').css({display: "none"});
                        } else if (opt == "reposicion") {
                            $('#paciente').css({display: "initial"});
                        } else if (opt == "aferesis") {
                            $('#paciente').css({display: "initial"});
                        }
                    });
                </script>  
                <?php
                break;
            }
        case "222": {
                ?>
                <form action="datosPaciente.php" id="recepcion" name="recepcion" method="post" enctype="multipart/form-data"> 
                    <div class="panel panel-default" >
                        <div class="panel-heading">DATOS PERSONALES DE PACIENTE</div>
                        <div class="panel-heading">NUMERO: 14000895</div>
                        <div class="panel-body">
                            <div class="col-lg-4">
                                <?php
                                //se inicializa la variable con un munero aleatorio
                                $tokenDPP = md5(uniqid(rand(), true));
                                // Se guarda el token en la sesin
                                $_SESSION['tokenDPP'] = $tokenDPP;
                                // Se guarda el token como un componente oculto en el formulario
                                echo "<input type='hidden' name='tokenDPP' value=" . $tokenDPP . " />";
                                // Se muestran los campos de login dentro de una tabla
                                ?>

                           
                                <div class="input-group">
                                    <span class="input-group-addon">DNI</span>
                                    <input class="form-control" type="number" name="dni" alt="dni" title="dni" value="<?php echo $texto; ?>">                                
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Apellido</span>
                                    <input class="form-control" type="text" name="apellido" alt="Apellido" title="Apellido" value="Godoy">                                
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Nombre</span>
                                    <input class="form-control" type="text" name="Nombre"  alt="Nombre" title="Nombre" value="Pedro">                                
                                </div>
                                <br>                            
                                <div class="input-group">
                                    <span class="input-group-addon">Fecha Nacimiento</span>
                                    <input class="form-control" type="date" name="nacimiento" alt="nacimiento" title="nacimiento" value="14/05/1985">                                
                                </div>  
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Edad</span>
                                    <input class="form-control" type="number" name="edad"  min="1" alt="edad" title="edad" value="28">                                
                                </div> 
                                <br>
                            </div>
                            <div class="col-lg-4">

                                <div class="input-group">
                                    <span class="input-group-addon">Sexo</span>
                                    <select class="selectpicker" >
                                        <option value="femenino" selected="">Femenino</option>
                                        <option value="masculino" selected="">Masculino</option>
                                    </select>                                
                                </div>
                                <br>                              
                                <div class="input-group">
                                    <span class="input-group-addon">Domicilio</span>
                                    <input class="form-control" type="text" name="domicilio" alt="domicilio" title="domicilio" value="Los Moros 134">                                
                                </div>                            
                                <br>                              
                                <div class="input-group">
                                    <span class="input-group-addon">Localidad</span>
                                    <select class="selectpicker" >
                                        <option value="parana" selected="">Parana</option>
                                        <option value="diamante">Diamante</option>
                                        <option value="victoria">Victoria</option>                                    
                                    </select>                                
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Codigo Postal</span>
                                    <input class="form-control" type="text" name="cp" alt="Codigo Postal" title="Codigo Postal" value="3100">                                
                                </div>                             
                                <br>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Telefono</span>
                                    <input class="form-control" type="text" name="telefono" alt="telefono" title="telefono" value="43454545">                                
                                </div>                              
                                <br>  
                                <div class="input-group">
                                    <span class="input-group-addon">Celular</span>
                                    <input class="form-control" type="text" name="celular" alt="celular" title="celular" value="154456454">                                
                                </div>                              
                                <br>


                                <div class="input-group">
                                    <span class="input-group-addon">Ocupacion</span>
                                    <select class="selectpicker" >
                                        <option value="1" selected="">Administrativo</option>
                                        <option value="2" >Policia</option>
                                        <option value="3">Zapatero</option>                                    
                                    </select>                                
                                </div>
                                <br>                              
                                <div class="input-group">
                                    <span class="input-group-addon">Email</span>
                                    <input class="form-control" type="email" name="email" alt="Correo electronico" title="Correo electronico" value="jip@gmail.com">                                
                                </div>
                                <br>                                
                            </div> 
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Tipo de donacion</span>
                                    <select id="tipo_donacion" class="selectpicker" >
                                        <option value="voluntaria">Voluntaria</option>
                                        <option value="reposicion">Reposicion</option>
                                        <option value="aferesis">Aferesis</option>                                    
                                    </select>                                
                                </div>                                    
                            </div>
                            <br>
                            <div class="col-lg-8">
                                <div id="paciente">
                                    <div class="input-group">
                                        <span class="input-group-addon">Paciente</span>
                                        <input class="form-control" type="text" name="paciente" placeholder="Paciente" alt="Paciente" title="Paciente" >                                
                                    </div>   
                                </div>                                     
                            </div>
                            <br>
                            <div class="col-lg-12">
                                <br>

                                <div class="alert alert-dismissable alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>Diferido permanente!</strong> Se encuentra imposibilitado a donar Permanentemente.
                                </div>     

                                <table class="table table-striped table-bordered table-condensed table-hover">
                                    <br>
                                    <label>Donaciones anteriores</label>
                                    <tr>
                                        <td>Nro. donacion</td><td>Fecha</td><td>Institucion</td>
                                    </tr>

                                    <tr>
                                        <td>1</td><td>14/06/2013</td><td>Departamento COCYFAHER.</td>
                                    </tr>


                                </table>   
                                <div>
                                    <input class="btn btn-primary" type="submit" name="Aceptar" id="Aceptar" value="Aceptar" placeholder="Aceptar" alt="Aceptar" title="Aceptar">                                
                                </div>
                            </div>                                                  
                        </div>
                        <!--final cuerpo panel-->
                    </div>  
                    <!--final panel-->
                </form>            


                <!--final formulario-->
                <script type="text/javascript">
                    $('#tipo_donacion').change(function() {
                        opt = $(this).val();
                        if (opt == "voluntaria") {
                            $('#paciente').css({display: "none"});
                        } else if (opt == "reposicion") {
                            $('#paciente').css({display: "initial"});
                        } else if (opt == "aferesis") {
                            $('#paciente').css({display: "initial"});
                        }
                    });
                </script>  
                <?php
                break;
            }
        case "333": {
                ?>
                <form action="datosPaciente.php" id="recepcion" name="recepcion" method="post" enctype="multipart/form-data"> 
                    <div class="panel panel-default" >
                        <div class="panel-heading">DATOS PERSONALES DE PACIENTE</div>
                        <div class="panel-heading">NUMERO: 14000895</div>
                        <div class="panel-body">
                            <div class="col-lg-4">
                                <?php
                                //se inicializa la variable con un munero aleatorio
                                $tokenDPP = md5(uniqid(rand(), true));
                                // Se guarda el token en la sesin
                                $_SESSION['tokenDPP'] = $tokenDPP;
                                // Se guarda el token como un componente oculto en el formulario
                                echo "<input type='hidden' name='tokenDPP' value=" . $tokenDPP . " />";
                                // Se muestran los campos de login dentro de una tabla
                                ?>

                           
                                <div class="input-group">
                                    <span class="input-group-addon">DNI</span>
                                    <input class="form-control" type="number" name="dni" alt="dni" title="dni" value="<?php echo $texto; ?>">                                
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Apellido</span>
                                    <input class="form-control" type="text" name="apellido" alt="Apellido" title="Apellido" value="Merlo">                                
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Nombre</span>
                                    <input class="form-control" type="text" name="Nombre"  alt="Nombre" title="Nombre" value="Maria">                                
                                </div>
                                <br>                            
                                <div class="input-group">
                                    <span class="input-group-addon">Fecha Nacimiento</span>
                                    <input class="form-control" type="date" name="nacimiento" alt="nacimiento" title="nacimiento" value="14/05/2000">                                
                                </div>  
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Edad</span>
                                    <input class="form-control" type="number" name="edad"  min="1" alt="edad" title="edad" value="14">                                
                                </div> 
                                <br>
                            </div>
                            <div class="col-lg-4">

                                <div class="input-group">
                                    <span class="input-group-addon">Sexo</span>
                                    <select class="selectpicker" >
                                        <option value="femenino" selected="">Femenino</option>
                                        <option value="masculino">Masculino</option>
                                    </select>                                
                                </div>
                                <br>                              
                                <div class="input-group">
                                    <span class="input-group-addon">Domicilio</span>
                                    <input class="form-control" type="text" name="domicilio" alt="domicilio" title="domicilio" value="Av Ramirez 134">                                
                                </div>                            
                                <br>                              
                                <div class="input-group">
                                    <span class="input-group-addon">Localidad</span>
                                    <select class="selectpicker" >
                                        <option value="parana" selected="">Parana</option>
                                        <option value="diamante">Diamante</option>
                                        <option value="victoria">Victoria</option>                                    
                                    </select>                                
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Codigo Postal</span>
                                    <input class="form-control" type="text" name="cp" alt="Codigo Postal" title="Codigo Postal" value="3100">                                
                                </div>                             
                                <br>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Telefono</span>
                                    <input class="form-control" type="text" name="telefono" alt="telefono" title="telefono" value="4456676">                                
                                </div>                              
                                <br>  
                                <div class="input-group">
                                    <span class="input-group-addon">Celular</span>
                                    <input class="form-control" type="text" name="celular" alt="celular" title="celular" value="155667878">                                
                                </div>                              
                                <br>


                                <div class="input-group">
                                    <span class="input-group-addon">Ocupacion</span>
                                    <select class="selectpicker" >
                                        <option value="1">Administrativo</option>
                                        <option value="2" selected="">Otro</option>
                                        <option value="3">Zapatero</option>                                    
                                    </select>                                
                                </div>
                                <br>                              
                                <div class="input-group">
                                    <span class="input-group-addon">Email</span>
                                    <input class="form-control" type="email" name="email" alt="Correo electronico" title="Correo electronico" value="grety@gmail.com">                                
                                </div>
                                <br>                                
                            </div> 
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Tipo de donacion</span>
                                    <select id="tipo_donacion" class="selectpicker" >
                                        <option value="voluntaria">Voluntaria</option>
                                        <option value="reposicion">Reposicion</option>
                                        <option value="aferesis">Aferesis</option>                                    
                                    </select>                                
                                </div>                                    
                            </div>
                            <br>
                            <div class="col-lg-8">
                                <div id="paciente">
                                    <div class="input-group">
                                        <span class="input-group-addon">Paciente</span>
                                        <input class="form-control" type="text" name="paciente" placeholder="Paciente" alt="Paciente" title="Paciente" >                                
                                    </div>   
                                </div>                                     
                            </div>
                            <br>
                            <div class="col-lg-12">
                                <br>

                                <div class="alert alert-dismissable alert-info">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>Atencion!</strong> Persona menor de edad.

                                </div>    

                                <table class="table table-striped table-bordered table-condensed table-hover">
                                    <br>
                                    <label>Donaciones anteriores</label>
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
                                <div>
                                    <input class="btn btn-primary" type="submit" name="Aceptar" id="Aceptar" value="Aceptar" placeholder="Aceptar" alt="Aceptar" title="Aceptar">                                
                                </div>
                            </div>                                                  
                        </div>
                        <!--final cuerpo panel-->
                    </div>  
                    <!--final panel-->
                </form>            


                <!--final formulario-->
                <script type="text/javascript">
                    $('#tipo_donacion').change(function() {
                        opt = $(this).val();
                        if (opt == "voluntaria") {
                            $('#paciente').css({display: "none"});
                        } else if (opt == "reposicion") {
                            $('#paciente').css({display: "initial"});
                        } else if (opt == "aferesis") {
                            $('#paciente').css({display: "initial"});
                        }
                    });
                </script>  
                <?php
                break;
            }




        default: {
                ?>
                <form action="datosPaciente.php" id="recepcion" name="recepcion" method="post" enctype="multipart/form-data"> 
                    <div class="panel panel-default" >
                        <div class="panel-heading">DATOS PERSONALES DE PACIENTE</div>
                        <div class="panel-heading">NUMERO: 14000895</div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <br>
                                <div class="alert alert-dismissable alert-info">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>Atencion!</strong> No se encontraron registros.

                                </div> 
                            </div> 

                            <div class="col-lg-4">
                                <?php
                                //se inicializa la variable con un munero aleatorio
                                $tokenDPP = md5(uniqid(rand(), true));
                                // Se guarda el token en la sesin
                                $_SESSION['tokenDPP'] = $tokenDPP;
                                // Se guarda el token como un componente oculto en el formulario
                                echo "<input type='hidden' name='tokenDPP' value=" . $tokenDPP . " />";
                                // Se muestran los campos de login dentro de una tabla
                                ?>

                            
                                <div class="input-group">
                                    <span class="input-group-addon">DNI</span>
                                    <input class="form-control" type="number" name="dni" alt="dni" title="dni" value="<?php echo $texto; ?>">                                
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Apellido</span>
                                    <input class="form-control" type="text" name="apellido" alt="Apellido" title="Apellido" value="">                                
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Nombre</span>
                                    <input class="form-control" type="text" name="Nombre"  alt="Nombre" title="Nombre" value="">                                
                                </div>
                                <br>                            
                                <div class="input-group">
                                    <span class="input-group-addon">Fecha Nacimiento</span>
                                    <input class="form-control" type="date" name="nacimiento" alt="nacimiento" title="nacimiento" value="">                                
                                </div>  
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Edad</span>
                                    <input class="form-control" type="number" name="edad"  min="1" alt="edad" title="edad" value="">                                
                                </div> 
                                <br>
                            </div>
                            <div class="col-lg-4">

                                <div class="input-group">
                                    <span class="input-group-addon">Sexo</span>
                                    <select class="selectpicker" >
                                        <option value="femenino" >Femenino</option>
                                        <option value="masculino">Masculino</option>
                                    </select>                                
                                </div>
                                <br>                              
                                <div class="input-group">
                                    <span class="input-group-addon">Domicilio</span>
                                    <input class="form-control" type="text" name="domicilio" alt="domicilio" title="domicilio" value="">                                
                                </div>                            
                                <br>                              
                                <div class="input-group">
                                    <span class="input-group-addon">Localidad</span>
                                    <select class="selectpicker" >
                                        <option value="parana" >Parana</option>
                                        <option value="diamante">Diamante</option>
                                        <option value="victoria">Victoria</option>                                    
                                    </select>                                
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">Codigo Postal</span>
                                    <input class="form-control" type="text" name="cp" alt="Codigo Postal" title="Codigo Postal" value="">                                
                                </div>                             
                                <br>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Telefono</span>
                                    <input class="form-control" type="text" name="telefono" alt="telefono" title="telefono" value="">                                
                                </div>                              
                                <br>  
                                <div class="input-group">
                                    <span class="input-group-addon">Celular</span>
                                    <input class="form-control" type="text" name="celular" alt="celular" title="celular" value="">                                
                                </div>                              
                                <br>


                                <div class="input-group">
                                    <span class="input-group-addon">Ocupacion</span>
                                    <select class="selectpicker" >
                                        <option value="1">Administrativo</option>
                                        <option value="2" >Policia</option>
                                        <option value="3">Zapatero</option>                                    
                                    </select>                                
                                </div>
                                <br>                              
                                <div class="input-group">
                                    <span class="input-group-addon">Email</span>
                                    <input class="form-control" type="email" name="email" alt="Correo electronico" title="Correo electronico" value="">                                
                                </div>
                                <br>                                
                            </div> 
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Tipo de donacion</span>
                                    <select id="tipo_donacion" class="selectpicker" >
                                        <option value="voluntaria">Voluntaria</option>
                                        <option value="reposicion">Reposicion</option>
                                        <option value="aferesis">Aferesis</option>                                    
                                    </select>                                
                                </div>                                    
                            </div>
                            <br>
                            <div class="col-lg-8">
                                <div id="paciente">
                                    <div class="input-group">
                                        <span class="input-group-addon">Paciente</span>
                                        <input class="form-control" type="text" name="paciente" placeholder="Paciente" alt="Paciente" title="Paciente" >                                
                                    </div>   
                                </div>                                     
                            </div>
                            <br>
                            <div class="col-lg-12">

                                <div>
                                    <input class="btn btn-primary" type="submit" name="Aceptar" id="Aceptar" value="Aceptar" placeholder="Aceptar" alt="Aceptar" title="Aceptar">                                
                                </div>
                            </div>                                                   
                        </div>
                        <!--final cuerpo panel-->
                    </div>  
                    <!--final panel-->
                </form>            


                <!--final formulario-->
                <script type="text/javascript">
                    $('#tipo_donacion').change(function() {
                        opt = $(this).val();
                        if (opt == "voluntaria") {
                            $('#paciente').css({display: "none"});
                        } else if (opt == "reposicion") {
                            $('#paciente').css({display: "initial"});
                        } else if (opt == "aferesis") {
                            $('#paciente').css({display: "initial"});
                        }
                    });
                </script>   
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
            <strong>Atencion!</strong> Ingrese el DNI del paciente.

        </div> 
    </div>  

<?php }
?>                             