<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<!--    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Ingreso</title>
    <link rel="shortcut icon" href="img/lock.ico" />
    <link rel="stylesheet" href="../css/plantilla.css" type="text/css"  media="screen" />
    <link rel="stylesheet" href="../css/estilos.css" type="text/css" />    -->
    <?php include_once '../include/header.php'; ?>     
</head> 
<body class="login">
<!--    <div align="center">
    <form  action="" method="post" class="formLogin" name="formu" autocomplete="off">
        <input type='hidden' name='token' value="" />
        <div id="cuerpo">
        <fieldset id="field">
        <p>
           <input type="text" name="user" size="20" id="username"/>
        </p>
        <p>       
            <input type="password" name="pass" size="20" id="password" />
        </p>
        <br/>
        <p>
            <input name="Entrar" type="submit" value="" class="button" />
        </p>
        <br/>
        </fieldset>
        </div>
    </form>
    </div>-->
<div class="container">
    
    <div class="row">
        <div id="login">
            <div class="col-sm-6 col-md-3 col-md-offset-5">
            <div class="account-wall">
                <form class="form-signin">
                <input type="text" class="form-control" placeholder="Usuario" required autofocus>
                <br>    
                <input type="password" class="form-control" placeholder="Contrasenia" required>
                <br>                      
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Entrar</button>
                </form>
            </div>
        </div>            
        </div>

    </div>
</div>
</body>
</html>