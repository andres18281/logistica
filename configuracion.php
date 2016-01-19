<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fileinput.css">
  	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<script src="js/fileinput.min.js"></script>
  	<script src="js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
  	<script src="js/fileinput_locale_es.js"></script>
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
 <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			
			<div class="jumbotron">
				<h2>
					Bienvenido
				</h2>
				<p>
					
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Learn more</a>
				</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3">
		  <div class="list-group">
  			
  			<a href="#" id="btn_desti" class="list-group-item">Agregar Destinos</a>
  			<a href="#" id="btn_list_paque" class="list-group-item">Listar Paquetes</a>
		   </div>
		</div>
		<div class="col-md-8">
		  <div class="container-fluid">
			<div class="panel panel-default">
				<div class="panel-heading">
					
				</div>
				<div id="contenido" class="panel-body">
					
				</div>
				
			</div>
		  </div>
		</div>
	</div>
</div>
</body>
</html>

<script>
 $(function(){
   $("#btn_desti").click(function(){
   	 $("#contenido").html("");
     $("#contenido").load("template/agregar_destinos.html");
   });

   $("#btn_list_paque").click(function(){
   	 $("#contenido").html("");
   	 $("#contenido").load("template/listar_destino.html");
   });
 });
</script>