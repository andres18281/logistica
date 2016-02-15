<?php
class Conectar{
  
  public $mbd;
  function __construct(){
  	//$this->mbd = new PDO('mysql:host=127.0.0.1;dbname=stra_logistica;port=3306', 'stra_comino', 'lavidaesbella123');
  	$this->mbd = new PDO('mysql:host=127.0.0.1;dbname=logistica_;port=3306', 'root', '');
  }

  function consultas($sql){
    	$data = $this->mbd->query($sql);
    	$response = $data->execute();
    	$num = $data->rowCount();
    	if($num > 1){
    	 $result = $data->fetchAll();	
    	}else{
    	  $result = $data->fetch(PDO::FETCH_BOTH);
    	}
    	return $result;
  }

  function inserta($tablas,$params = array()){
  	 $inserta = 'INSERT INTO `'.$tablas.'` (`'.implode('`, `',array_keys($params)).'`) VALUES ("' . implode('", "', $params) . '")';
  	 $sentencia = $this->mbd->prepare($inserta);
  	 $sentencia->execute();
  	 $response = $sentencia->fetch(PDO::FETCH_ASSOC);
  	 if(isset($response)){
       $array = array("exito"=>"Insercion con exito",
                     "last_cod_id"=>$response['product_id'],
                     "mensaje"=>"Si inserto");
     }else{
       $array = array("error"=>$response['errorInfo']);
     }
  }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
   public function update_query($query){
   	 $stmt = $this->mbd->prepare($query); 
   	 $stmt->execute();
  	 $response = $stmt->fetch(PDO::FETCH_BOTH);
  	 if(isset($response)){
  	    $salida = array("exito"=>"Actualizacion con exito");                     
     }else{
        $salida = array("error"=>"Problemas, no hay actualizacion",
                        "codigo"=>$response['errorInfo']);
     }
     return $salida;    
   }
}
?>