<?php
include_once $_SERVER['DOCUMENT_ROOT']."/logistica/Model/Destinos.php";

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
  	echo json_encode($response);
  }
}

if(isset($_POST['id_subdesti'])){
  include_once $_SERVER['DOCUMENT_ROOT']."/logistica/Model/Lugares.php";
  $lugar = new Lugares();
  $id = $_POST['id_subdesti'];
  $response = $lugar->Get_lugares($id);
  if(isset($response)){
  	if(is_array($response[0])){
        foreach($response as $val){
          $array[] = array($val[0],$val[1],$val[2],utf8_encode($val[3]),$val[4]);
        }
    }else{
        $array = array($response[0],$response[1],$response[2],utf8_encode($response[3]),$response[4]);
	}  
  	echo json_encode($array);
  }
}

?>