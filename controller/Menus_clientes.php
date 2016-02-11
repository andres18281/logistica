<?php
include_once "../Model/Destinos.php";

if(isset($_POST['destinos']) and $_POST['destinos'] == "all"){
 $desti = new Destinos();
 $response = $desti->Get_all_destinos();	
 if(isset($response)){
 	echo json_encode($response);
 }
}
if(isset($_POST['id_destino'])){
  $id = $_POST['id_destino'];
  $desti = new Destinos();
  $response = $desti->Get_destino($id);
  if(isset($response)){
    $respon = array($response[0],utf8_encode($response[1]),utf8_encode($response[2]),$response[3],$response[4],$response[5]);
  }
  echo json_encode($respon);
}

if(isset($_POST['paises'])){
  $desti = new Destinos();
  $response = $desti->Get_paises();
  if(isset($response)){
    $respon = array($response[0],$response[1]);
  }
  echo json_encode($respon);
}


if(isset($_POST['id_subdesti'])){
  include_once "../Model/Lugares.php";
  $lugar = new Lugares();
  $id = $_POST['id_subdesti'];
  $response = $lugar->Get_lugares($id);
  if(isset($response)){
  	if(is_array($response[0])){
        foreach($response as $val){
          $array[] = array($val[0],$val[1],utf8_encode($val[2]),utf8_encode($val[3]),$val[4]);
        }
    }else{
        $array = array($response[0],$response[1],utf8_encode($response[2]),utf8_encode($response[3]),$response[4]);
	  }
  	echo json_encode($array);
  }
  
}

?>