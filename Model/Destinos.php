<?php
  //   require_once $_SERVER['DOCUMENT_ROOT'].'/webworldpremier.stratecsa.com/intranet/controller/conectar.php';
  require_once '../controller/conectar.php';
  class Destinos extends Conectar{
  	function __construct(){
  		parent::__construct();
  	}

  	// Inserta un destino
  	function Set_destino($nombre_des,$pais,$precio,$fecha,$descrip){
  		$array = Array("pais"=>$pais,
  					         "lugar"=>$nombre_des,
  					         "descrip"=>$descrip,
  					         "precio"=>$precio
  					        );
  		$response = parent::inserta('destinos',$array);
  		return $response;
  	}
    
    // obtiene toda la informacion del destino con el id
  	function Get_destino($id){
  		$sql = 'SELECT des.pais,des.lugar,des.descrip,fo.Foto1,fo.Foto2,des.precio
  				FROM destinos des
  				INNER JOIN fotos fo ON fo.id_desti = des.Des_id
  				WHERE Des_id ='.$id;
  		$response = parent::consultas($sql);
  		return $response;
  	}

    // Obtiene el listado de paises
    function Get_paises(){
      $sql = 'SELECT Nombre,des.pais
              FROM destinos des, pais pa
              WHERE des.pais = pa.Pa_id 
              GROUP BY 2';
      $response = parent::consultas($sql);
      return $response;
    }

  	// obtiene todo los registros de destinos por el pais
  	function Get_destinos_por_pais($pais){
  		$sql = 'SELECT lugar,descrip,precio,fo.Foto1,fo.Foto2
  				FROM destinos des
  				INNER JOIN fotos fo ON fo.id_desti = des.Des_id 
  				WHERE des.pais = '.$pais;
  		$response = parent::consultas($sql);
  		return $response;
  	}

  	function Get_all_destinos(){
  	  $sql = 'SELECT Des_id,pa.Nombre,lugar,precio,fo.Foto1,fo.Foto2
  			  FROM destinos des
  			  INNER JOIN fotos fo ON fo.id_desti = des.Des_id 
          INNER JOIN pais pa ON pa.Pa_id = des.pais';
  		$response = parent::consultas($sql);
  		return $response;	
  	}

  	// Actualiza los destinos por el id
  	function Update_destino($id,$nombre_des,$pais,$precio,$descrip){ 
  		$sql = 'UPDATE destinos
  				SET pais ='.$pais.',
  				lugar ="'.$nombre_des.'",
  				descrip = "'.$descrip.'",
  				precio ='.$precio.'
  				WHERE Des_id = '.$id;
  		$response =	parent::update_query($sql);
  		return json_encode($response);
  	}

  	// Borra un destino por el ID
  	function Delete_destino($id){
  		$sql = 'DELETE  
  				FROM destinos 
  				WHERE Des_id = '.$id;
  		$response =	parent::update_query($sql);
  		return $response;
  	}

  	function Set_fotos($id,$nombre1,$nombre2){
  		$array = Array('Foto1'=>$nombre1,
  					         'Foto2'=>$nombre2,
  					         'id_desti'=>$id);
  		$response = parent::inserta('fotos',$array);
  		return $response;
  	}

    function Update_foto($id,$nombre1,$nombre2){
      $sql = 'UPDATE fotos SET Foto1 = "'.$nombre1.'",
                               Foto2 = "'.$nombre2.'"
              WHERE id_desti = '.$id;
      $response = parent::update_query($sql);
      return $response;
    }
  }

?>