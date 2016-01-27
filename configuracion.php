<?php
 if(!isset($_SESSION)){
    session_start(); 
  }
  if(!isset($_SESSION["perfil"])){
        header("location: index.php");
  }
  if($_SESSION["perfil"] != "qwqwsa123423@!"){ // de operaciones
      header("location: index.php");
  }
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fileinput.css">
  	<link rel="stylesheet" href="css/stylo_sesion.css">
  	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<script src="js/fileinput.min.js"></script>
  	<script src="js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
  	<script src="js/fileinput_locale_es.js"></script>
  	<script src="js/btn_out_session.js"></script>
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
	   <div class="visible-xs">
	    <ul class="nav navbar-nav">
         <li class="btn_desti"><a href="#"> Agregar Destinos</a></li>
         <li class="btn_list_paque"><a href="#">Listar Paquetes</a></li>
		</ul>
	   </div>
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
 <div class="container-fluid">
	<div class="row hidden-xs" >
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>
					Bienvenido
				</h2>
				<p>
					
				</p>
				<p>
					<a class="btn btn-primary btn-large" data-toggle="modal" data-target="#myModal3" href="#">Learn more</a>
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-sm-3 hidden-xs">
		  <div class="list-group">
  			<a href="#" id="" class="list-group-item btn_desti">Agregar Destinos</a>
  			<a href="#"  class="list-group-item btn_list_paque">Listar Paquetes</a>
		   </div>
		</div>
		<div class="col-md-8 col-sm-8 col-xs-12">
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
<script src="js/scripts.js"></script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar</h4>
      </div>
      <div class="modal-body">
       <form id="form_update" method="POST" enctype="multipart/form-data">
        <div class="container-fluid">
         <div class="col-md-6">
          <label>Pais</label>
           <select class="form-control" id="slt_pai">
            <option></option>
          	<option value="1">COLOMBIA</option>
   			<option value="2">PANAMA</option>
    		<option value="3">EEUU</option>
    		<option value="4">ESPANA</option>
           </select>
         </div>
         <div class="col-md-6">
           <label>Lugar</label>
           <input type="text" id="txt_lugar"class="form-control">
         </div>
         <div class="col-md-12">
          <label>Precio</label>
          <input type="text" id="txt_prec" class="form-control">
         </div>
         <div class="col-md-12"> 
          <label> Descripcion</label>
          <textarea id="txt_area" class="form-control" rows="7"></textarea>
         </div>
         <div class="col-md-12">
  			<div class="col-xs-6 col-md-6">
    		  <button  class="glyphicon glyphicon-remove btn btn-danger" id="btn_dele_foto" data-toggle="tooltip" data-placement="left" title="Eliminar foto"></button>
    		  <a href="#" class="thumbnail" id="thumbnail1">
      			<img src="" id="img1">
    		  </a>
  			</div>
  			<div class="col-xs-6 col-md-6">
    		   <button class="glyphicon glyphicon-remove btn btn-danger" id="btn_dele_foto2" data-toggle="tooltip" data-placement="left" title="Eliminar foto"></button>
    		  <a href="#" class="thumbnail" id="thumbnail2">
      			<img src="" id="img2">
    		  </a>
  			</div>
		 </div>
		 <div class="col-md-12">
           <label>Imagen</label>
           <input id="inp_files_3" name="inp_file[]" multiple=true type="file" data-preview-file-type="any" class="file"></input>
         </div>
        </div>
     </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn_update_desti">Actualizar</button>
      </div>
    </div>
  </div>
</div>




<div id="myModal3" class="modal fade" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Borrar</h4>
      </div>
      <div class="modal-body">
       <h5> Desea borrar esta destino ? </h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
         <button type="button" class="btn btn-success" id="btn_eliminate">Si</button>
      </div>
    </div>
  </div>
</div>


<script>
$(document).ready(function(){
  $('#btn_dele_foto').tooltip({title: "Eliminar foto", placement: "top"}); 
  $('#btn_dele_foto2').tooltip({title: "Eliminar foto", placement: "top"}); 
  $('#btn_desti').tooltip({title: "Crear destinos", placement: "right"}); 
  $('#btn_list_paque').tooltip({title: "Enlistar destinos ", placement: "right"}); 
     

});
</script>