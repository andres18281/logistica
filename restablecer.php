<?php
$token = $_GET['token'];
$idusuario = $_GET['idusuario'];
 
include_once $_SERVER['DOCUMENT_ROOT'].'/controlador/conectar.php';
$conect = new Conectar('root','');
 
$sql = 'SELECT * FROM tblreseteopass WHERE token = "'.$token.'"';
$resultado = $conect->consultas($sql);
if(isset($resultado)){
   if(sha1($resultado[1]) == $idusuario){  ?>
    <!DOCTYPE html>
    <html lang="es">
     <head>
      <meta name="author" content="denker">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title> Restablecer contraseña </title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link href="css/style.css" rel="stylesheet">
     </head>
 
     <body>
      <div class="container" role="main">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <form action="cambiarpassword.php" method="post">
            <div class="panel panel-default">
              <div class="panel-heading"> Restaurar contraseña </div>
              <div class="panel-body">
                <p></p>
                <div class="form-group">
                  <label for="password"> Nueva contraseña </label>
                  <input type="password" class="form-control" name="password1" required>
                </div>
                <div class="form-group">
                  <label for="password2"> Confirmar contraseña </label>
                  <input type="password" class="form-control" name="password2" required>
                </div>
                <input type="hidden" name="token" value="<?php echo $token ?>">
                <input type="hidden" name="idusuario" value="<?php echo $idusuario ?>">
                <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Recuperar contraseña" >
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-4"></div>
      </div> <!-- /container -->
      <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 </body>
</html>
<?php
   }else{
    // header('Location:index.php');
   }
 }
 else{
     //header('Location:index.php');
 }
?>