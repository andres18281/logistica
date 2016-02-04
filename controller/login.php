<?php
  include_once('conectar.php');
  class Login {    
      protected $user;
      protected $pass;
      public function __construct($user,$pass){
        $this->user = $user;
        $this->pass = $pass;
      }

      public function loguearse(){
        $consulta = new Conectar(); 
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
