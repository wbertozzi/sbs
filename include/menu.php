<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inicio <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../inicio/index.php">Inicio</a></li>                        
                        <li class="active"><a href="../inicio/login.php">Login</a></li>
                    </ul>
                </li>                 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recepcion <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../recepcion/datos_paciente.php">2-1 - Datos paciente</a></li>
                    </ul>
                </li>                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Entrevista <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../entrevista/cuestionario.php">3-1 - Cuestionario</a></li>
                        <li><a href="../entrevista/datos_clinicos.php">3-2 - Datos Clinicos</a></li>
                        <li><a href="../entrevista/diferido.php">3-3 - Diferido</a></li>
                        <li><a href="../entrevista/aviso_donantes.php">3-4 - Donantes en espera</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Extraccion <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../extraccion/aviso_donantes.php">4-1 - Donantes en espera</a></li>
                        <li><a href="../extraccion/extraccion.php">4-2 - Extraccion</a></li>
                    </ul>
                </li> 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inmunohematologia <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../inmunohematologia/buscar_inmuno.php">5-1 - Buscar Inmunohematologia</a></li>
                        <li><a href="../inmunohematologia/aviso_inmuno.php">5-2 - Inmunohematologia en Espera</a></li>
                        <li><a href="../inmunohematologia/datos_inmuno.php">5-3 - Inmunohematologia</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Serologia <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../serologia/buscar_serologia.php">6-1 - Buscar Serologia</a></li>
                        <li><a href="../serologia/aviso_serologia.php">6-2 - Serologia en Espera</a></li>
                        <li><a href="../serologia/datos_serologia.php">6-3 - Serologia</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fraccionamiento <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../fraccionamiento/buscar_bolsa.php">7-1 - Buscar Bolsa</a></li>
                        <li><a href="#">7-2 - Ingreso Bolsa</a></li>
                        <li><a href="#">7-3 - Plasma</a></li>
                        <li><a href="#">7-4 - Plaqueta</a></li>
                        <li><a href="#">7-5 - Globulo</a></li>
                        <li><a href="#">7-6 - Criopresipitado</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estadistica <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">8-1 - Estadistica</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Distribucion <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">9-1 - Validacion</a></li>
                        <li><a href="#">9-2 - Descarte</a></li>
                        <li><a href="#">9-3 - Stock</a></li>
                        <li><a href="#">9-4 - Etiquetado</a></li>
                        <li><a href="#">9-5 - Transporte</a></li>
                        <li><a href="#">9-6 - Reingreso</a></li>
                        <!-- solo para que pueda pedir reposicion de stock el administrador -->
                        <li><a href="#">9-7 - Reposicion</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transfucion <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">10-1 - Cargar Paciente</a></li>
                        <li><a href="#">10-2 - Solicitud</a></li>
                        <li><a href="#">10-3 - Transfucion</a></li>
                        
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <!-- solo para el administrador y super administrador -->
                        <li><a href="#">11-1 - Usuario Tecnico </a></li>
                        <li><a href="#">11-2 - Usuario Jefe de Sector </a></li>
                        <!-- solo para el super administrador -->
                        <li><a href="#">11-3 - Usuario Administrador </a></li>
                        <li><a href="#">11-4 - Entidad </a></li>
                        <li><a href="#">11-5 - Sistema </a></li>
                       
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Usuario</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</div>

