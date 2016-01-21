<?php
   include_once $_SERVER['DOCUMENT_ROOT']."/logistica/controller/conectar.php";
  class Lugares extends Conectar{
   
  	function __construct(){
  		parent::__construct("root","");
  	}

  	function Get_lugares($id){
  		$sql = "SELECT Luga_Id,Luga_sub_title,Luga_title,Luga_descri,Foto 
  				FROM lugares 
  				WHERE id_desti = ".$id;
  		$response = parent::consultas($sql);
  		return $response;
  	}

  	function Set_lugares($id,$title,$subtitle,$descrip,$foto){
  		$array = Array('Luga_title'=>$title,
  					   'Luga_sub_title'=>$subtitle,
  					   'Luga_descri'=>$descrip,
  					   'Foto'=>$foto,
  					   'id_desti'=>$id
  					   );
  		$response = parent::inserta('lugares',$array);
  		return json_encode($response);
  	}

  }

?>
