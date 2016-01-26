<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/controlador/conectar.php';
if($_POST['password1'] != "" && $_POST['password1'] != "" && $_POST['idusuario'] != "" && $_POST['token'] != "" ){
  $conectar = new Conectar('root','');
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];
  $idusuario = $_POST['idusuario'];
  $token = $_POST['token'];
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Restablecer contraseña </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
  </head>
 
  <body>
    <div class="container" role="main">
      <div class="col-md-2"></div>
      <div class="col-md-8">
<?php
   
   $sql = " SELECT * FROM tblreseteopass WHERE token = '$token' ";
   $resultado = $conectar->consultas($sql);
   if(isset($resultado)){
      if(sha1($resultado[1] === $idusuario)){
         if($password1 === $password2){
            $sql = "UPDATE usuarios SET Usua_pass = '".sha1($password1)."' WHERE Usua_id = ".$resultado[1];
            $resultado = $conectar->update_query($sql);
            if($resultado){
               $sql = "DELETE FROM tblreseteopass WHERE token = '$token';";
               $resultado = $conectar->update_query($sql);
?>
               <p class="alert alert-info"> La contraseña se actualizó con exito. </p>
               <a href="index.php" class="btn -btn-success">Iniciar Sesion</a>
<?php
            }else{
?>
              <p class="alert alert-danger"> Ocurrió un error al actualizar la contraseña, intentalo más tarde </p>
<?php
            }
         }else{
?>
           <p class="alert alert-danger"> Las contraseñas no coinciden </p>
<?php
         }
      }else{
?>
        <p class="alert alert-danger"> El token no es válido </p>
<?php
      }
   }else{
?>
      <p class="alert alert-danger"> El token no es válido </p>
<?php
   }
?>
</div>
<div class="col-md-2"></div>
</div> <!-- /container -->
 <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
else{
   header('Location:index.php');
}
?>