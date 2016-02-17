<?php
 session_start();
 include_once "conectar.php";
 if(isset($_POST['contrase'],$_POST['contrase2'])){
 	$pass = $_POST['contrase'];
 	$pass2 = $_POST['contrase2'];
 	if($pass == $pass2){
 		$conect = new Conectar();
  		$sql = 'UPDATE users 
  		  	    SET User_Password_ = "'.sha1($pass2).'"
  		  	    WHERE id_cedu_ = '.$_SESSION["id_usuario"];
 		$data = $conect->update_query($sql);
 		echo json_encode($data);
 	}
 }
?>