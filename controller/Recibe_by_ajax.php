<?php
 include_once "../Model/Destinos.php";
 include_once "conectar.php";  
 // agrega destinos a la base de datos
 $url = "../img";
 if(isset($_POST['pais'],$_POST['lugar'],$_POST['descrip'],$_POST['precio'],$_POST['fecha'])){
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
   include_once "../Model/Lugares.php";
   $title = $_POST["txt_title2"];
   $subtitle = $_POST["txt_subtitle2"];
   $descrip = $_POST["txt_descrip2"];
   $id = $_POST['id'];
   $lugar = new Lugares();
   if(isset($_FILES["file2"])){
    $file = $_FILES["file2"];
    $name = $file['name'];
    $cont_caract = strlen($name);
    if($cont_caract > 40){
     $nomb = substr($name, 0,35);
    }else{
     $nomb = $name;  
    }
    if(move_uploaded_file($_FILES["file2"]['tmp_name'], $url.time().$nomb)){
      $response = $lugar->Set_lugares($id,$title,$subtitle,$descrip,time().$nomb);   
    }
   }else{
     $response = $lugar->Set_lugares($id,$title,$subtitle,$descrip,$nomb);  
   }
   echo json_encode($response);
 }

 // Lista todos los destinos creados
 if(isset($_POST["listar"]) and $_POST["listar"] =="ok"){
 	  $destino = new Destinos();
 	  $response = $destino->Get_all_destinos();
    if(isset($response)){
      if(is_array($response[0])){
        foreach($response as $val){
          $array[] = array($val[0],$val[1],$val[2],utf8_encode($val[3]),$val[4],$val[5]);
        }
      }else{
        $array[] = array($response[0],$response[1],$response[2],utf8_encode($response[3]),$response[4],$response[5]);
      }
    }
    if(isset($array)){
 	    echo json_encode($array);
 	  }
 }

 // borrar destino
 if(isset($_POST['eliminate'])){
   $conexion = new Conectar();
   $id = $_POST['eliminate'];
   $fot = 'SELECT Foto1, Foto2 FROM fotos WHERE id_desti = '.$id;
   $data = $conexion->consultas($fot);
   $dele_fotos = 'DELETE FROM fotos where id_desti = '.$id;
   $sql = 'DELETE FROM destinos WHERE Des_id = '.$id;
   $sql2 = 'DELETE FROM lugares WHERE id_desti = '.$id;
   if(isset($data)){
    if(is_array($data[0])){
      foreach($data as $value){
        unlink("../img/".$value[0]);
        if(isset($value[1])){
          unlink("../img/".$value[1]);
        }
      }
    }else{
      unlink("../img/".$data[0]);  
    }
   }
   $conexion->update_query($dele_fotos);
   $conexion->update_query($sql);
   $conexion->update_query($sql2);
   $dato['success'] = true;
   echo json_encode($dato);
 }

 // devuelve informacion de destino
 if(isset($_POST['id_destino'])){
   $id = $_POST['id_destino'];
   $destino = new Destinos();
   $data =  $destino->Get_destino($id);
   if(isset($data)){
    $array = Array($data[0],utf8_encode($data[1]),utf8_encode($data[2]),$data[3],$data[4],$data[5]);
   }
   if(isset($array)){
    $respon['success'] = $array;
    echo json_encode($respon);
   }else{
    echo null;
   }
 }

 if(isset($_POST['imgen'])){
   $conexion = new Conectar();
   $foto1 = $_POST['imgen'];
   unlink("../img/".$foto1);
   $sql = 'UPDATE fotos SET Foto1 = "" WHERE Foto1 = "'.$foto1.'"';
   $sql2 = 'UPDATE fotos SET Foto2 = "" WHERE Foto2 = "'.$foto1.'"';
   $respon = $conexion->update_query($sql);
   $respons = $conexion->update_query($sql2);
   if(isset($respon['exito']) or isset($respons['exito'])){
    $res['response'] = true;
   }else{
    $res['response'] = false;
   }
   echo json_encode($res); 
 }

 // actualizar destinos 
 if(isset($_POST['id'],$_POST['slt_pai'],$_POST['txt_lugar'],$_POST['txt_prec'],$_POST['txt_area'])){
   var_dump($_POST);
   $destino = new Destinos();
   $id = $_POST['id'];
   $pais = $_POST['slt_pai'];
   $lugar = $_POST['txt_lugar'];
   $precio = $_POST['txt_prec'];
   $descrip = $_POST['txt_area'];
   $array_nombre = array();
   $respon = $destino->Update_destino($id,$lugar,$pais,$precio,$descrip);
   if(!isset($respon['error']) and isset($_FILES['inp_file'])){
     $cont_caract = strlen($_FILES['inp_file']);
      if($cont_caract > 40){
        $nomb = substr($_FILES['inp_file'], 0,35);
      }else{
        $nomb = $_FILES['inp_file'];  
      }
     foreach($_FILES as $key=>$files){
      if(move_uploaded_file($files['tmp_name'], $url.time().$nomb)){
        array_push($array_nombre,$files);
      }
     }
     if(isset($array_nombre)){
      if(count($array_nombre) >= 2){
        $respon = $destino->Update_foto($id,time().$array_nombre[0]['name'],time().$array_nombre[1]['name']);
      }else{
         $respon = $destino->Update_foto($id,time().$array_nombre[0]['name'],null);
      }
      $data['respon'] = true;
     }
   }elseif(!isset($respon['error'])){
     $data['respon'] = true;
   }else{
    $data['respon'] = false;
   }
   echo json_encode($data);
 }

 if(isset($_POST['list_client']) and $_POST['list_client'] == "ok"){
   include_once "../Model/Clientes.php";
   $cliente = new Clientes();
   $response = $cliente->Listar_clientes();
   if(isset($response)){
    echo json_encode($response);
   }else{
    echo null;
   }
 }


 if(isset($_POST['delete_subdestino'])){
   $id = $_POST['delete_subdestino'];
   $destino = new Destinos();
   $conect = new Conectar();
   $sql = 'SELECT Foto 
           FROM lugares 
           WHERE  Luga_Id ='.$id;
   $img = $conect->consultas($sql);
   if(isset($img[0])){
    if(unlink('../img/'.$img[0])){
      $data['img'] = "eliminado";
    }else{
      $data['img'] = "no eliminado";
    }
   }
   $data = $destino->delete_subdestino($id);
   echo json_encode($data);
 }

  if(isset($_POST['title'],$_POST['subtitulo'],$_POST['texto'],$_POST['id'])){
    var_dump($_POST);
     $conexion = new Conectar();
     $title = $_POST['title'];
     $subtitle = $_POST['subtitulo'];
     $texto = $_POST['texto'];
     $id = $_POST['id'];
     $sql = 'UPDATE lugares 
             SET Luga_title = "'.$title.'",
                 Luga_sub_title = "'.$subtitle.'",
                 Luga_descri = "'.$texto.'"
                 WHERE Luga_Id = '.$id;
     $data =  $conexion->update_query($dele_fotos);  
     echo json_encode($data);   
  }
    

  // inserta nuevos registros cuando un administrador añade nuevos subdestinos en la editacion
  if(isset($_POST['title_new'],$_POST['subti_new'],$_POST['text_new'],$_FILES['foto'],$_POST['id'])){
    var_dump($_POST);
   // $foto;
    $lugar = new Lugares();
    $id = $_POST['id'];
    $title = $_POST['title_new'];
    $subtitle = $_POST['subti_new'];
    $descrip = $_POST['text_new'];
    $files = $_FILES['foto'];
    $cont_caract = strlen($files['name']);
    if($cont_caract > 40){
     $nomb = substr($files['name'], 0,35);
    }else{
     $nomb = $files['name'];  
    }
    if(isset($files)){
      move_uploaded_file($files,$url.time().$nomb);
    }else{
      $nomb = '';
    }
    $lugar->Set_lugares($id,$title,$subtitle,$descrip,$nomb);
  }

?>