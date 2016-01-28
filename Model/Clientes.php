<?php
 include_once $_SERVER['DOCUMENT_ROOT']."/logistica/controller/conectar.php";
 
 class Clientes extends Conectar{
  
  function __construct(){
  	parent::__construct("root","");
  }

  function Listar_clientes(){
  	$sql = 'SELECT 	id_cedu_,User_Nomb_,User_apelli_,p.Nombre,User_Correo_   
  			FROM users u
  			INNER JOIN pais p ON p.Pa_id = u.User_Pais_
  			WHERE users_tipo = 1';
  	$data = parent::consultas($sql);
  	return $data;
  }
 
 }



?>