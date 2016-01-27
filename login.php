<?php
 if(!isset($_SESSION)){
    session_start(); 
  }
  if(isset($_SESSION["perfil"])){
        header("location: index.php");
  }
  if(isset($_SESSION["perfil"]) and $_SESSION["perfil"] == "qwqwsa123423@!"){ // de operaciones
      header("location: configuracion.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="container" style="margin-top:10%">

     <div class="row">
        <div class="col-md-5 col-md-offset-3 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Loguear</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" action="" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="users_id" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div align="center"><a href="" id="idA_PWD_SwitchToOTC"><a href="restablecer_contraseña.html">¿No puedes acceder a tu cuenta?</a></div>
                        <input class="btn btn-lg btn-success btn-block" name="btn_enviar" type="submit" value="Entrar">
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
     </div>
    </div>
    
</body>
</html>
<?php
  if(isset($_POST['btn_enviar'])){
    include_once('controller/login.php'); 
    if(isset($_POST['users_id'],$_POST['password'])){
      $pass = $_POST['password'];
      $login = new Login($_POST['users_id'],sha1($pass));
      if($login->loguearse()){
        header("location: index.php");
      }
    }
 }
?>