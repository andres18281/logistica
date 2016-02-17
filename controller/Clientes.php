<?php
  include_once "../Model/Clientes.php";

  if(isset($_POST['Buscar_cliente'])){
  	$id = $_POST['Buscar_cliente'];
  	$client = new Clientes();
  	$data = $client->Buscar_cliente($id);
  	echo json_encode($data);
  }

  if(isset($_POST['id'],$_POST['name'],$_POST['apelli'],$_POST['correo'],$_POST['contra'],$_POST['contra2'])){
  	$client = new Clientes();
  	$id = $_POST['id'];
  	$name = $_POST['name'];
  	$apelli = $_POST['apelli'];
  	$corr = $_POST['correo'];
  	$contr = $_POST['contra'];
  	$contra2 = $_POST['contra2'];
  	if(isset($_POST['tipo'])){
  	  $data = $client->Update_user2($id,$name,$apelli,$corr,$contr,$contra2);
  	}else{
  	  $data = $client->Update_user($id,$name,$apelli,$corr,$contr,$contra2);
  	}
  	echo json_encode($data); 
  }

  if(isset($_POST['delete_client'])){
  	$client = new Clientes();
	$id = $_POST['delete_client'];
  	$data = $client->Delete_user($id);
  	echo json_encode($data);
  }

  if(isset($_POST['id'],$_POST['nombre'],$_POST['apelli'],$_POST['pais'],$_POST['correo'],$_POST['pass'],$_POST['pass2'])){
  	 $client = new Clientes();
     if($_POST['pass'] == $_POST['pass2']){
  		$id = $_POST['id'];
  		$nomb = $_POST['nombre'];
  		$apelli = $_POST['apelli'];
  		$pais = $_POST['pais'];
  		$corre = $_POST['correo'];
  		$pass = $_POST['pass'];
    	$data = $client->Add_cliente($id,$nomb,$apelli,$pais,$corre,$pass);
    	echo json_encode($data);
    }
  }
?>