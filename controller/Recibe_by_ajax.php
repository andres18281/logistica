<?php
 include_once $_SERVER['DOCUMENT_ROOT']."/logistica/Model/Destinos.php";
 
 // agrega destinos a la base de datos
 if(isset($_POST['pais'],$_POST['lugar'],$_POST['descrip'],$_POST['precio'],$_POST['fecha'])){
   $url = $_SERVER['DOCUMENT_ROOT']."/logistica/img/";
   $pais = $_POST['pais'];
   $nombre_des = $_POST['lugar'];
   $descri = $_POST['descrip'];
   $precio = $_POST['precio'];
   $fecha = $_POST['fecha'];
   $destino = new Destinos();
   $response = $destino->Set_destino($nombre_des,$pais,$precio,$fecha,$descri);
   if(isset($response['exito'])){
    $array_nombre = array();
    foreach($_FILES as $key=>$files){
      if(move_uploaded_file($files['tmp_name'], $url.time().$files['name'])){
      	array_push($array_nombre,$files);
      }
    }
    if(isset($array_nombre)){
     if(count($array_nombre) >= 2){
     	$respon = $destino->Set_fotos($response['last_cod_id'],time().$array_nombre[0]['name'],time().$array_nombre[1]['name']);
     }else{
     	$respon = $destino->Set_fotos($response['last_cod_id'],time().$array_nombre[0]['name'],null);
     }
     echo json_encode($respon);
    }
    
   }
 }
 if(isset($_POST["listar"]) and $_POST["listar"] =="ok"){
 	$destino = new Destinos();
 	$response = $destino->Get_all_destinos();
 	if(isset($response)){
 	 echo json_encode($response);
 	}
 }
?>