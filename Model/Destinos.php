
<?php
  include_once $_SERVER['document_root']."controller/conectar.php";
  class Destinos extends Conectar{

  	function __construct(){
  		parent::__construct($user,$pass);
  	}

  	function Set_destino($nombre_des,$pais,$precio,$fecha,$descrip){
  		$array = Array("pais"=>$pais,
  					   "lugar"=>$nombre_des,
  					   "descrip"=>$descrip,
  					   "precio"=>$precio
  					 );
  		$response = parent::inserta('destinos',$array);
  		return $response;
  	}

  	function Get_destino($id){
  		$sql = 'SELECT des.pais,des.lugar,des.descrip,des.precio,fo.Foto1,fo.Foto2
  				FROM destinos des
  				INNER JOIN fotos fo ON fo.id_desti = des.Des_id
  				WHERE Des_id '= $id;
  		$response = parent::consultas($sql);
  		return $response;
  	}

  	function Get_destinos_por_pais($pais){
  		$sql = 'SELECT lugar,descrip,precio,fo.Foto1,fo.Foto2
  				FROM destinos des
  				INNER JOIN fotos fo ON fo.id_desti = des.Des_id 
  				WHERE des.pais = '.$pais;
  		$response = parent::consultas($sql);
  		return $response;
  	}

  	function Update_destino($id,$nombre_des,$pais,$precio,$fecha,$descrip){
  		$sql = 'UPDATE destinos
  				SET pais ='.$pais.',
  				lugar ='.$nombre_des.',
  				descrip = '.$descrip.',
  				precio ='.$precio.'
  				WHERE Des_id = '.$id;
  		$response =	parent::update_query($sql);
  		return $response;
  	}

  	function Delete_destino($id){
  		$sql = 'DELETE  
  				FROM destinos 
  				WHERE Des_id = '.$id
  		$response =	parent::update_query($sql);
  		return $response;
  	}
  }

?>