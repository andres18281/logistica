<?php 
ob_start();
  session_start(); 
    include_once('controller/login.php'); 
    if(!isset($_SESSION["perfil"])){
   		header("location: login.php");
    }
    if($_SESSION["perfil"] == "qwqwsa123423@!"){ // de operaciones
      header("location: configuracion.php");
    }elseif($_SESSION["perfil"] == "asdqweasd5654184"){ // de operaciones
      header("location: clientes.php");
    }else{
      header("location: login.php");
    }
ob_end_flush();
?>     
