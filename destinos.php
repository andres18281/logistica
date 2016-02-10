<?php
ob_start();
session_start(); 
  if(!isset($_SESSION["perfil"])){
        header("location: index.php");
  }
  if($_SESSION["perfil"] != "qwqwsa123423@!"){ // de operaciones
      header("location: index.php");
  }
ob_end_flush();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fileinput.css">
  <link rel="stylesheet" href="css/stylo_sesion.css">
  <style type="text/css">
  .divisor{
    z-index: 206;
    width: 100%;
    height: 1px;
    border-color: #000000;
    background-color: #7F7F7F;
    margin-top: 10px;
    position: relative;
  }
  .jumbotron{
    width: 80%;
    height: 400px;
  
    border-width: 1px;
    border-style: solid;
    border-color: #7F7F7F;
    margin-left: 10%;
    margin-top: 1%;
    position: relative;
  }
  </style>
  	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <?php

      if(isset($_GET['destinos'])){
        include_once "Model/Destinos.php";
        include_once "Model/Lugares.php";  
        $id_desti = $_GET['destinos'];
        $destino =  new Destinos();
        $lugares = new Lugares();
        $response_desti = $destino->Get_destino($id_desti);
        $response_lugar = $lugares->Get_lugares($id_desti);
        if(isset($response_desti)){
          $cabecera = '
            <div class="container">
                <div class="jumbotron" style="background-image: url(img/'.$response_desti[4].');background-size: 100% 100%; background-repeat: no-repeat;
    background-size: length;">
                </div>
                <h2 style="text-align:center">
                  '.$response_desti[1].' 
                </h2>
                <p style="text-align:center">
                   '.$response_desti[2].' 
                </p>
            </div>';
        }
        if(isset($response_lugar)){
          if(is_array($response_lugar[0])){
           foreach($response_lugar as $key=>$val){
            $var[] = '<br>
            <div class="row">
              <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
               <img class="thumbnail"  src="img/'.$val[4].'"/>
              </div>    
              <div class="col-md-7 col-sm-12 col-xs-12 col-lg-7">
               <h2>
                '.$val[1].'
               </h2>
               <h3>
                '.$val[2].'
               </h3>
               <p >
                 '.$val[3].'
               </p>
              </div>
            </div>';
           }
          }else{
             $var = '
            <div class="col-md-12">
              <div class="col-md-4">
               <img class="thumbnail"  src="img/'.$response_lugar[4].'"/>
              </div>
              <div class="col-md-8">
               <h2 class="text-primary" style="margin-top:0;">
                '.$response_lugar[1].'
               </h2>
               <h3 class="text-info ">
                '.$response_lugar[2].'
               </h3>
                <p>
                 <small>
                 '.$response_lugar[3].'
                </small>
               </p>
              </div>
            </div>';
          }
        }
      }


    ?>
</head>
<body>
 <div class="container-fluid">
   <nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     </button> <a class="navbar-brand" href="#"></a>
   </div>     
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">    
       <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Menu</a>
          <ul class="dropdown-menu">
            <li>
             <div class="navbar-login">
              <div class="row">
               <div class="col-lg-4 col-xs-12">
                <p class="text-center">
                 <span class="glyphicon glyphicon-user icon-size"></span>
                </p>
               </div>
                <div class="col-lg-8 col-xs-12">
                 <p class="text-center"><strong><?php echo $_SESSION["nombre_we"]; ?></strong></p>
                 <p class="text-center"><?php echo $_SESSION["email"]; ?></p>
                 <p class="text-left">
                  <a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                 </p>
                </div>
                  <div class="col-lg-8 col-xs-12">
                    <p>
                      <a href="#" id="log_out" class="btn btn-danger btn-block">Cerrar Sesion</a>
                    </p>
                  </div>
                </div>
              </div>
            </li>         
          </ul> 
        </li>
    </ul>
   </div>   
  </nav>
 </div>
 <div class="container">
	
		<div class="col-md-12">
		  <?php	
       if(isset($cabecera)){
        echo $cabecera;
       }
			?>
		</div>


	<div class="row">	
		
		  
			 <div class="panel panel-default">
				
				<div id="contenido" class="panel-body">
					<div class="col-md-12">
            <?php 
             if(isset($var)){
              if(count($var) > 1){
               foreach($var as $val){
                echo $val; 
               }
              }else{
                echo $var;
              }
             }
            ?>
          </div>
				</div>
			 </div>
		 
		
	</div>
</div>
</body>
</html>
<script src="js/btn_out_session.js"></script>



