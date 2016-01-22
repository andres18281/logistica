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
     $data['respon'] = $respon;
     $data['last_id'] = $response['last_cod_id'];
     echo json_encode($data);
    }    
   }
 }

 if(isset($_POST['id'],$_POST["txt_title2"],$_POST["txt_subtitle2"])){
   include_once $_SERVER['DOCUMENT_ROOT']."/logistica/Model/Lugares.php";
   $url = $_SERVER['DOCUMENT_ROOT']."/logistica/img/";
   $title = $_POST["txt_title2"];
   $subtitle = $_POST["txt_subtitle2"];
   $descrip = $_POST["txt_descrip2"];
   $id = $_POST['id'];
   $lugar = new Lugares();
   if(isset($_FILES["file2"])){
    $file = $_FILES["file2"];
    $name = $file['name'];
    if(move_uploaded_file($_FILES["file2"]['tmp_name'], $url.time().$name)){
      $response = $lugar->Set_lugares($id,$title,$subtitle,$descrip,$name);   
    }
   }else{
     $response = $lugar->Set_lugares($id,$title,$subtitle,$descrip,$name);  
   }
   echo json_encode($response);
 }

 // Lista todos los destinos creados
 if(isset($_POST["listar"]) and $_POST["listar"] =="ok"){
 	  $destino = new Destinos();
 	  $response = $destino->Get_all_destinos();
    if(isset($response)){
 	    echo json_encode($response);
 	  }
 }
?>