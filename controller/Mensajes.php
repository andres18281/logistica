<?php
  include_once $_SERVER['DOCUMENT_ROOT']."/logistica/Model/Chat.php";

  if(isset($_POST['from'],$_POST['to'],$_POST['msg'])){
   $from = $_POST['from'];
   $to = $_POST['to'];
   $msn = $_POST['msg'];
   $chat = new Chat();
   $response = $chat->Recive_mensaje($from,$to,$msn);
   echo json_encode($response);
  }
 
  // Devuelve la respuesta que el administrador halla contestado al cliente
  if(isset($_POST['id_consult'])){
  	$id_con = $_POST['id_consult'];
  	$chat = new Chat();
  	$response = $chat->Mensaje_recibido_client($id_con);
    if(isset($response)){
      echo json_encode($response);
    }else{
      echo null;	
    }
  }

  // devuelve todos los correos de los clientes han escrito al administrador
  if(isset($_POST['id_consult_admin'])){
  	$id_con = $_POST['id_consult_admin'];
  	$chat = new Chat();
  	$response = $chat->Mensaje_recibido_admin($id_con);
    if(isset($response)){
      echo json_encode($response);
    }else{
      echo null;	
    }
  }
 
  // mensaje particular que un cliente envia al administrador
  if(isset($_POST['msn_from'])){
  	$id_con = $_POST['msn_from'];
  	$chat = new Chat();
  	$respon = $chat->Mensaje_recibido_de($id_con);
  	if(isset($respon)){
  	  echo json_encode($respon);
  	}else{
  	  echo null;
  	}
  }
  die;

?>