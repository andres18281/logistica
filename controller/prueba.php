<?php
class Conectar{
  protected static $usuario = 'root';
  protected static $contraseña = '';	
  protected static $mbd;
  function __construct(){
  	self::$mbd = new PDO('mysql:host=127.0.0.1;dbname=logistica_;port=3307', $usuario, $contraseña);
  }

  function consultas($sql){
  	try {
    	
    	$data = $mbd->query($sql);
    	$result = $data->fetch(PDO::FETCH_BOTH);
    	return $result;
	} catch (PDOException $e) {
    	print "¡Error!: " . $e->getMessage() . "<br/>";
    	die();
	}
  }

  function inserta($tablas,$params = array()){
  	 $inserta = 'INSERT INTO `'.$tablas.'` (`'.implode('`, `',array_keys($params)).'`) VALUES ("' . implode('", "', $params) . '")';
  	 $sentencia = self::$mbd->prepare($inserta);
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
   	 $stmt = self::$mbd->prepare($query); 
   	 $sentencia = $stmt->execute();
  	 $response = $sentencia->fetch(PDO::FETCH_ASSOC);
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