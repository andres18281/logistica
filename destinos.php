<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fileinput.css">
  	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



    <?php
      if(isset($_GET['destinos'])){
        include_once $_SERVER['DOCUMENT_ROOT']."/logistica/Model/Destinos.php";
        include_once $_SERVER['DOCUMENT_ROOT']."/logistica/Model/Lugares.php";
        $id_desti = $_GET['destinos'];
        $destino =  new Destinos();
        $lugares = new Lugares();
        $response_desti = $destino->Get_destino($id_desti);
        $response_lugar = $lugares->Get_lugares($id_desti);
        if(isset($response_desti)){
          $cabecera = '
            <div class="row">
              <div class="col-md-12">
                <div class="jumbotron" style="background-image: url(img/'.$response_desti[4].');background-size: 100% 100%; background-repeat: no-repeat;
    background-size: length;">
                 
                </div>
                <h2>
                  '.$response_desti[1].' 
                </h2>
                <p>
                   '.$response_desti[2].' 
                </p>
              </div>
            </div>';

        }
        if(isset($response_lugar)){
          if(is_array($response_lugar[0])){
           foreach($response_lugar as $key=>$val){
            $var[] = '
            <div class="row">
              <div class="col-md-4">
               <img alt="Bootstrap Image Preview" src="img/'.$val[4].'"/>
              </div>
              <div class="col-md-8">
               <h3 class="text-info text-left">
                '.$val[1].'
               </h3>
               <h2 class="text-info text-left">
                '.$val[2].'
               </h2>
               <p class="text-muted">
                <small>
                 '.$val[3].'
                </small>
               </p>
              </div>
            </div>';
           }
          }else{
             $var = '
            <div class="row">
              <div class="col-md-4">
               <img alt="Bootstrap Image Preview" width="200" src="img/'.$response_lugar[4].'"/>
              </div>
              <div class="col-md-8">
               <h2 class="text-primary text-left">
                '.$response_lugar[1].'
               </h2>
               <h3 class="text-info text-left">
                '.$response_lugar[2].'
               </h3>
                <p class="text-muted">
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
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#"></a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Menu<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								
								<li>
									<a href="#">Modificar</a>
								</li>
								<li>
									<a href="#">Cambiar Password</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Salir</a>
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
		<div class="col-md-12">
		  <div class="container-fluid">
			 <div class="panel panel-default">
				<div class="panel-heading">
					
				</div>
				<div id="contenido" class="panel-body">
					<div class="container-fluid">
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
	</div>
</div>
</body>
</html>




