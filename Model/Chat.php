<?php
    $data = $_SERVER['REQUEST_URI'];

  // require_once $_SERVER['DOCUMENT_ROOT'].'/webworldpremier.stratecsa.com/intranet/controller/conectar.php';
    require_once '../controller/conectar.php';
  class Chat extends Conectar{
    
    function __construct(){
  		parent::__construct();
  	}

  	function Recive_mensaje($from,$to,$msn){
  	  $array = Array('Chat_origen'=>$from,
  	  			   'Chat_destin'=>$to,
  	  			   'Chat_msn'=>$msn,
  	  			   'Chat_read'=>2);
  	  $response = parent::inserta('chat_mensajes_',$array);
  	  return $response;
  	}

  	function Mensaje_recibido_client($mine){
  		$sql = 'SELECT Chat_msn,Chat_origen,Id_chat
  				FROM chat_mensajes_ 
  				WHERE Chat_destin = "'.$mine.'"
  				AND Chat_read = 2';
  		$response = parent::consultas($sql);
  		return $response;
  	}

    function Mensaje_recibido_admin($mine){
      $sql = 'SELECT Chat_origen,Id_chat
          FROM chat_mensajes_ 
          WHERE Chat_destin = "'.$mine.'"
          AND Chat_read = 2';
      $response = parent::consultas($sql);
      return $response;
    }

    function Mensaje_recibido_de($person){
      $sql = 'SELECT Chat_msn 
              FROM chat_mensajes_  
              WHERE  Chat_origen = "'.$person.'"
              AND Chat_read = 2';
      $response = parent::consultas($sql);
      return $response;
    }

    function Mensaje_leido($id){
      $sql = 'UPDATE chat_mensajes_ 
              SET Chat_read = 1 
              WHERE Id_chat = '.$id;
      parent::update_query($sql);
    }

    function Mensaje_leido_client($id){
      $sql = 'UPDATE chat_mensajes_ 
              SET Chat_read = 1 
              WHERE Chat_destin = "'.$id.'" 
              AND Chat_read = 2';
     $data = parent::update_query($sql);
     return $data;
    }
  }
?>
