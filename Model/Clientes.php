<?php
 //    require_once $_SERVER['DOCUMENT_ROOT'].'/webworldpremier.stratecsa.com/intranet/controller/conectar.php';
 require_once '../controller/conectar.php';
 class Clientes extends Conectar{
  function __construct(){
  	parent::__construct();
  }

  function Listar_clientes(){
  	$sql = 'SELECT 	id_cedu_,User_Nomb_,User_apelli_,p.Nombre,User_Correo_   
  			FROM users u
  			INNER JOIN pais p ON p.Pa_id = u.User_Pais_
  			WHERE users_tipo = 1';
  	$data = parent::consultas($sql);
  	return $data;
  }

  function Buscar_cliente($id){
    $sql = 'SELECT User_Nomb_,User_apelli_,User_Correo_,User_Password_
            FROM users 
            WHERE id_cedu_ = '.$id;
    $data = parent::consultas($sql);
    return $data;
  }

  // sin modificacion de la contraseña
  function Update_user($id,$nomb,$apelli,$corre,$pass,$pass2){
    if($pass == $pass2){
      $sql = 'UPDATE users 
              SET User_Nomb_ = "'.$nomb.'",
              User_apelli_ = "'.$apelli.'",
              User_Correo_ = "'.$corre.'",
              User_Password_ = "'.$pass.'"
              WHERE id_cedu_ = '.$id;
      $data = parent::update_query($sql);
      return $data;
    }
  }

  // con modificacion de la contraseña
  function Update_user2($id,$nomb,$apelli,$corre,$pass,$pass2){
    if($pass == $pass2){
      $sql = 'UPDATE users 
              SET User_Nomb_ = "'.$nomb.'",
              User_apelli_ = "'.$apelli.'",
              User_Correo_ = "'.$corre.'",
              User_Password_ = "'.sha1($pass).'"
              WHERE id_cedu_ = '.$id;
      $data = parent::update_query($sql);
      return $data;
    }
  }

  function Delete_user($id){
    $sql = 'DELETE 
            FROM users 
            WHERE id_cedu_ = '.$id;
    $data = parent::update_query($sql);
    return $data;
  }

  function Add_cliente($id,$nomb,$apelli,$pais,$corre,$pass){
   $array = Array("id_cedu_"=>$id,
                  "User_Nomb_"=>$nomb,
                  "User_apelli_"=>$apelli,
                  "User_Pais_"=>$pais,
                  "User_Correo_"=>$corre,
                  "User_Password_"=>sha1($pass),
                  "users_tipo"=>1);
    $data = parent::inserta('users',$array);
    return $data;
  }
}



?>