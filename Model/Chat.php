<?php
include_once $_SERVER['DOCUMENT_ROOT']."/logistica/controller/conectar.php";
  class Chat extends Conectar{
    
    function __construct(){
  		parent::__construct("root","");
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
  		$sql = 'SELECT Chat_msn,Chat_origen
  				FROM chat_mensajes_ 
  				WHERE Chat_destin = "'.$mine.'"
  				AND Chat_read = 2';
  		$response = parent::consultas($sql);
  		return $response;
  	}

    function Mensaje_recibido_admin($mine){
      $sql = 'SELECT Chat_origen
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
  }
?>