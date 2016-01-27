<?php


  include_once('conectar.php');
  if(!isset($_SESSION)) { 
        session_start(); 
  }
  class Login {    
      private $user;
      private $pass;
      public function __construct($user,$pass){
        $this->user = $user;
        $this->pass = $pass;
      }

      public function loguearse(){
        if(!isset($_SESSION["perfil"],$_SESSION["pass"])){
           $_SESSION["perfil"] = "root";
           $_SESSION["pass"] = "";
        }
        $consulta = new Conectar("root",""); 
        $sql = 'SELECT  id_cedu_,User_Correo_,users_tipo,User_Nomb_
                FROM users  
                WHERE User_Correo_ = "'.$this->user.'" 
                AND  User_Password_ ="'.$this->pass.'"';
        $tipo_usuario = $consulta->consultas($sql);
        if(isset($tipo_usuario)){
          $_SESSION["id_usuario"] = $tipo_usuario[0]; // id del usuario
          $_SESSION["email"] = $tipo_usuario[1]; // nombre del perfil (administrador, cliente, etc..) 
          $_SESSION["perfil"] =  $tipo_usuario[2]; // id del perfil del rol
          $_SESSION["nombre_we"] =  $tipo_usuario[3];
          return true;
        }else{
          return false;
        }
      }
  }
?>
