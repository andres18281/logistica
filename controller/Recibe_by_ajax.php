<?php
 include_once $_SERVER['document_root']."Model/Destinos.php";

 // agrega destinos a la base de datos
 if(isset($_POST['pais'],$_POST['lugar'],$_POST['descrip'],$_POST['precio'],$_POST['fecha'])){
   $url = $_SERVER['document_root']."img/";
   $pais = $_POST['pais'];
   $nombre_des = $_POST['lugar'];
   $descri = $_POST['descrip'];
   $precio = $_POST['precio'];
   $fecha = $_POST['fecha'];
   $destino = new Destinos();
   $response = $destino->Set_destino($nombre_des,$pais,$precio,$fecha,$descrip);
   echo json_encode($response);
   $file = $_FILE['inp_file']['tmp_name'];
   $nombre_file = $_FILE['inp_file']['name'];
   if(move_uploaded_file($file, $url.basename($nombre_file))){
   	
   }
 }




?>